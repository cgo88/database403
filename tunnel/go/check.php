<?php
function scanDirectory($dir) {
    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
    $results = [];
    $folderCount = 0;
    foreach ($iterator as $file) {
        if ($file->isDir()) {
            $folderCount++;
        } elseif ($file->isFile()) {
            $filePath = $file->getPathname();
            $fileExtension = strtolower(pathinfo($filePath, PATHINFO_EXTENSION)); // Ubah ke huruf kecil
            $allowedExtensions = ['php', 'htm', 'js', 'jpg', 'jpeg', 'png', 'svg']; // Tambahkan ekstensi gambar di sini

            if (in_array($fileExtension, $allowedExtensions)) {
                $result = checkFile($filePath);
                if ($result) {
                    $results[] = $result;
                }
                $virusTotalResult = scanWithVirusTotal($filePath);
                if (isSuspiciousFile($file) || (isset($virusTotalResult['positives']) && $virusTotalResult['positives'] > 0)) {
                    $results[] = [
                        'file' => $filePath,
                        'folder' => dirname($filePath),
                        'code' => 'N/A',
                        'line' => 'N/A',
                        'description' => 'File mencurigakan berdasarkan nama, ukuran, atau hasil VirusTotal. Positif: ' . ($virusTotalResult['positives'] ?? 'N/A')
                    ];
                }
            }
        }
    }
    return $results;
}

function checkFile($file) {
    $originalFileName = $file;
    $tempFileName = $file . '.php';

    // Ganti nama file sementara
    if (!rename($originalFileName, $tempFileName)) {
        return false;
    }

    // Baca konten file yang telah diganti namanya
    $content = file_get_contents($tempFileName);
    $patterns = [
        '/<\?php\s+.*(shell_exec|base64_decode|eval|system|exec|passthru|popen|proc_open|file_get_contents|file_put_contents|fopen|fwrite|fclose|unlink|copy|rename|move_uploaded_file|chmod|chown|chgrp|symlink|link|readfile|include|require|include_once|require_once)\(/i' => 'Kode PHP yang dapat dieksekusi dan berpotensi berbahaya.',
        '/shell_exec\(/i' => 'Eksekusi perintah shell, sangat berbahaya karena dapat menjalankan perintah sistem.',
        '/base64_decode\(/i' => 'Dekode base64, sering digunakan untuk menyembunyikan kode berbahaya.',
        '/eval\(/i' => 'Eksekusi kode PHP, sangat berbahaya karena dapat menjalankan kode yang disuntikkan.',
        '/system\(/i' => 'Eksekusi perintah sistem, sangat berbahaya karena dapat menjalankan perintah sistem.',
        '/exec\(/i' => 'Eksekusi perintah sistem, sangat berbahaya karena dapat menjalankan perintah sistem.',
        '/passthru\(/i' => 'Eksekusi perintah sistem dan menampilkan output, sangat berbahaya.',
        '/popen\(/i' => 'Buka proses pipe, dapat digunakan untuk menjalankan perintah sistem.',
        '/proc_open\(/i' => 'Buka proses baru, sangat berbahaya karena dapat menjalankan perintah sistem.',
        '/file_get_contents\(/i' => 'Membaca isi file, dapat digunakan untuk membaca file sensitif.',
        '/file_put_contents\(/i' => 'Menulis isi file, dapat digunakan untuk menulis file berbahaya.',
        '/fopen\(/i' => 'Membuka file, dapat digunakan untuk membaca atau menulis file.',
        '/fwrite\(/i' => 'Menulis ke file, dapat digunakan untuk menulis file berbahaya.',
        '/fclose\(/i' => 'Menutup file, digunakan bersama fopen dan fwrite.',
        '/unlink\(/i' => 'Menghapus file, dapat digunakan untuk menghapus file penting.',
        '/copy\(/i' => 'Menyalin file, dapat digunakan untuk menyalin file berbahaya.',
        '/rename\(/i' => 'Mengganti nama file, dapat digunakan untuk menyembunyikan file berbahaya.',
        '/move_uploaded_file\(/i' => 'Memindahkan file yang diunggah, dapat digunakan untuk menyimpan file berbahaya.',
        '/chmod\(/i' => 'Mengubah izin file, dapat digunakan untuk memberikan izin eksekusi pada file berbahaya.',
        '/chown\(/i' => 'Mengubah pemilik file, dapat digunakan untuk mengubah kepemilikan file.',
        '/chgrp\(/i' => 'Mengubah grup file, dapat digunakan untuk mengubah grup file.',
        '/symlink\(/i' => 'Membuat symlink, dapat digunakan untuk membuat tautan simbolis ke file berbahaya.',
        '/link\(/i' => 'Membuat tautan keras, dapat digunakan untuk membuat tautan ke file berbahaya.',
        '/readfile\(/i' => 'Membaca file dan menampilkannya, dapat digunakan untuk membaca file sensitif.',
        '/include\(/i' => 'Menyertakan file, dapat digunakan untuk menyertakan file berbahaya.',
        '/require\(/i' => 'Menyertakan file, dapat digunakan untuk menyertakan file berbahaya.',
        '/include_once\(/i' => 'Menyertakan file sekali, dapat digunakan untuk menyertakan file berbahaya.',
        '/require_once\(/i' => 'Menyertakan file sekali, dapat digunakan untuk menyertakan file berbahaya.',
        '/RewriteRule\s+.*\s+\[.*\]/i' => 'Konfigurasi RewriteRule di .htaccess, dapat digunakan untuk mengubah nama file atau menjalankan script berbahaya.',
        '/AddHandler\s+application\/x-httpd-php\s+.*/i' => 'Konfigurasi AddHandler di .htaccess, dapat digunakan untuk menjalankan file dengan ekstensi tertentu sebagai PHP.',
        '/<script\b[^>]*>([\s\S]*?)<\/script>/i' => 'Kode JavaScript yang dapat dieksekusi.',
        '/<iframe\b[^>]*>([\s\S]*?)<\/iframe>/i' => 'Kode iframe yang dapat digunakan untuk menyisipkan konten berbahaya.',
        '/document\.write\(/i' => 'Penggunaan document.write() dalam JavaScript, dapat digunakan untuk menyisipkan konten berbahaya.',
        '/window\.location/i' => 'Penggunaan window.location dalam JavaScript, dapat digunakan untuk mengarahkan ulang pengguna.',
        '/onerror\s*=\s*["\']?[^"\'>]+["\']?/i' => 'Penggunaan atribut onerror dalam HTML, dapat digunakan untuk menjalankan JavaScript berbahaya.',
        '/<img\b[^>]*src=["\']?javascript:[^"\'>]+["\']?/i' => 'Penggunaan JavaScript dalam atribut src pada tag img, dapat digunakan untuk menjalankan kode berbahaya.',
        '/\$_(GET|POST|REQUEST|COOKIE|FILES|SERVER|ENV|SESSION|GLOBALS)\[.*\]/i' => 'Penggunaan variabel superglobal, dapat digunakan untuk serangan injeksi.',
        '/openssl_encrypt\(/i' => 'Penggunaan fungsi enkripsi, dapat digunakan untuk menyembunyikan data.',
        '/openssl_decrypt\(/i' => 'Penggunaan fungsi dekripsi, dapat digunakan untuk menyembunyikan data.',
        '/mcrypt_encrypt\(/i' => 'Penggunaan fungsi enkripsi, dapat digunakan untuk menyembunyikan data.',
        '/mcrypt_decrypt\(/i' => 'Penggunaan fungsi dekripsi, dapat digunakan untuk menyembunyikan data.',
        '/mysql_query\(/i' => 'Penggunaan fungsi manipulasi database, dapat digunakan untuk serangan SQL injection.',
        '/mysqli_query\(/i' => 'Penggunaan fungsi manipulasi database, dapat digunakan untuk serangan SQL injection.',
        '/pg_query\(/i' => 'Penggunaan fungsi manipulasi database, dapat digunakan untuk serangan SQL injection.',
        '/sqlite_query\(/i' => 'Penggunaan fungsi manipulasi database, dapat digunakan untuk serangan SQL injection.',
        '/odbc_exec\(/i' => 'Penggunaan fungsi manipulasi database, dapat digunakan untuk serangan SQL injection.',
        '/base64_encode\(/i' => 'Penggunaan base64_encode, dapat digunakan untuk menyembunyikan data.',
        '/gzinflate\(/i' => 'Penggunaan gzinflate, sering digunakan untuk mendekode data yang dikompresi.',
        '/gzdecode\(/i' => 'Penggunaan gzdecode, sering digunakan untuk mendekode data yang dikompresi.',
        '/array_filter\(/i' => 'Penggunaan array_filter, dapat digunakan untuk menjalankan fungsi berbahaya.',
        '/array_reduce\(/i' => 'Penggunaan array_reduce, dapat digunakan untuk menjalankan fungsi berbahaya.',
        '/extract\(/i' => 'Penggunaan extract, dapat digunakan untuk mengekstrak variabel dari array, berpotensi berbahaya.',
        '/compact\(/i' => 'Penggunaan compact, dapat digunakan untuk membuat array dari variabel, berpotensi berbahaya.',
        '/parse_str\(/i' => 'Penggunaan parse_str, dapat digunakan untuk mengurai string menjadi variabel, berpotensi berbahaya.',
        '/putenv\(/i' => 'Penggunaan putenv, dapat digunakan untuk mengatur variabel lingkungan, berpotensi berbahaya.',
        '/getenv\(/i' => 'Penggunaan getenv, dapat digunakan untuk mendapatkan variabel lingkungan, berpotensi berbahaya.',
        '/ini_set\(/i' => 'Penggunaan ini_set, dapat digunakan untuk mengatur konfigurasi PHP, berpotensi berbahaya.',
        '/ini_get\(/i' => 'Penggunaan ini_get, dapat digunakan untuk mendapatkan konfigurasi PHP, berpotensi berbahaya.',
        '/dl\(/i' => 'Penggunaan dl, dapat digunakan untuk memuat ekstensi PHP, berpotensi berbahaya.',
        '/escapeshellcmd\(/i' => 'Penggunaan escapeshellcmd, dapat digunakan untuk menghindari karakter shell, berpotensi berbahaya.',
        '/escapeshellarg\(/i' => 'Penggunaan escapeshellarg, dapat digunakan untuk menghindari karakter shell, berpotensi berbahaya.',
        '/proc_terminate\(/i' => 'Penggunaan proc_terminate, dapat digunakan untuk menghentikan proses, berpotensi berbahaya.',
        '/proc_close\(/i' => 'Penggunaan proc_close, dapat digunakan untuk menutup proses, berpotensi berbahaya.',
        '/proc_get_status\(/i' => 'Penggunaan proc_get_status, dapat digunakan untuk mendapatkan status proses, berpotensi berbahaya.',
        '/proc_nice\(/i' => 'Penggunaan proc_nice, dapat digunakan untuk mengatur prioritas proses, berpotensi berbahaya.',
        '/proc_open\(/i' => 'Penggunaan proc_open, dapat digunakan untuk membuka proses, berpotensi berbahaya.',
        '/eval\((base64_decode|gzinflate|str_rot13)\(/i' => 'Kode yang berpotensi berbahaya menggunakan obfuscation.',
        '/<\?php/i' => 'Tag PHP ditemukan dalam file gambar, berpotensi berbahaya.',
        '/<\?/i' => 'Tag PHP pendek ditemukan dalam file gambar, berpotensi berbahaya.',
        '/<%/i' => 'Tag ASP ditemukan dalam file gambar, berpotensi berbahaya.'
    ];

    $result = false;
    foreach ($patterns as $pattern => $description) {
        if (preg_match($pattern, $content, $matches)) {
            $result = [
                'file' => $originalFileName,
                'folder' => dirname($originalFileName),
                'code' => getSurroundingCode($content, $matches[0]),
                'line' => getLineNumber($content, $matches[0]),
                'description' => $description
            ];
            break;
        }
    }

    if (!$result && preg_match('/[a-zA-Z0-9]{50,}/', $content) && preg_match('/base64_decode|eval|gzinflate/', $content)) {
        $result = [
            'file' => $originalFileName,
            'folder' => dirname($originalFileName),
            'code' => getSurroundingCode($content, $matches[0]),
            'line' => getLineNumber($content, $matches[0]),
            'description' => 'Kode mencurigakan yang menyandikan banyak data.',
        ];
    }

    // Kembalikan nama file ke nama asli
    rename($tempFileName, $originalFileName);

    return $result;
}

function safeFilePath($file) {
    return preg_match('/^[a-zA-Z0-9._-]+$/', basename($file));
}

function getLineNumber($content, $match) {
    $lines = explode("\n", $content);
    foreach ($lines as $lineNumber => $line) {
        if (strpos($line, $match) !== false) {
            return $lineNumber + 1;
        }
    }
    return -1;
}

function getSurroundingCode($content, $match, $contextLines = 3) {
    $lines = explode("\n", $content);
    $lineNumber = getLineNumber($content, $match) - 1;
    $start = max(0, $lineNumber - $contextLines);
    $end = min(count($lines), $lineNumber + $contextLines + 1);
    $surroundingLines = array_slice($lines, $start, $end - $start);
    return htmlspecialchars(implode("\n", $surroundingLines));
}

function isSuspiciousFile($file) {
    $suspiciousNames = ['sys.php', 'root.php', 'symlink'];
    $fileName = $file->getFilename();
    $fileSize = $file->getSize();
    $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);
    $fileCreationTime = $file->getCTime();
    $fileModificationTime = $file->getMTime();
    $currentTime = time();
    $filePermissions = substr(sprintf('%o', $file->getPerms()), -4);

    foreach ($suspiciousNames as $name) {
        if (stripos($fileName, $name) !== false) {
            return true;
        }
    }

    if ($fileName === '.htaccess' && $fileSize > 1024) {
        return true;
    }

    if (strlen($fileName) > 20 || preg_match('/[a-zA-Z0-9]{20,}/', $fileName)) {
        return true;
    }

    $unusualExtensions = ['php5', 'phtml', 'phar'];
    if (in_array($fileExtension, $unusualExtensions)) {
        return true;
    }

    if (($currentTime - $fileCreationTime) < 86400 || ($currentTime - $fileModificationTime) < 86400) {
        return true;
    }

    if ($filePermissions === '0777') {
        return true;
    }

    $hashes = file_get_contents('https://url-ke-database-hash.txt');
    $knownBadHashes = explode("\n", $hashes);
    $fileHash = hash_file('sha256', $file->getPathname());
    if (in_array($fileHash, $knownBadHashes)) {
        return true;
    }

    return false;
}

function evalSandbox($code) {
    try {
        ob_start();
        eval($code);
        $output = ob_get_clean();
        return checkOutput($output);
    } catch (Exception $e) {
        return false;
    }
}

function scanWithVirusTotal($file) {
    $apiKey = '92340a474f8ee814f9dc9417847528a1ba5e216b831c75e489b420b051e03f2c';
    $fileData = file_get_contents($file);
    $hash = hash('sha256', $fileData);

    $url = "https://www.virustotal.com/vtapi/v2/file/report?apikey=$apiKey&resource=$hash";
    $response = file_get_contents($url);
    $result = json_decode($response, true);

    return $result;
}

function logSuspiciousActivity($result) {
    file_put_contents('hasil.txt', json_encode($result).PHP_EOL, FILE_APPEND);
}

$rootDirectory = __DIR__;

if (function_exists('pcntl_fork')) {
    $pid = pcntl_fork();
    if ($pid == -1) {
        die('Tidak bisa mem-fork proses');
    } elseif ($pid) {
    } else {
        $results = scanDirectory($rootDirectory);
        foreach ($results as $result) {
            logSuspiciousActivity($result);
        }
        exit(0);
    }
} else {
    $results = scanDirectory($rootDirectory);
    foreach ($results as $result) {
        logSuspiciousActivity($result);
    }
}

$logResults = [];
if (file_exists('hasil.txt')) {
    $logContents = file('hasil.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($logContents as $line) {
        $logResults[] = json_decode($line, true);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pemindaian</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .result {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
        }
        .result h2 {
            margin-top: 0;
        }
        .result pre {
            background: #f4f4f4;
            padding: 10px;
            border-radius: 5px;
            overflow-x: auto;
        }
        .result .description {
            color: #d9534f;
        }
    </style>
</head>
<body>
    <h1>Hasil Pemindaian</h1>
    <?php if (empty($results) && empty($logResults)): ?>
        <p>Tidak ada script berbahaya yang ditemukan.</p>
    <?php else: ?>
        <?php foreach ($results as $result): ?>
            <div class="result">
                <h2>Potensi script berbahaya ditemukan di: <?php echo $result['file']; ?></h2>
                <p><strong>Folder:</strong> <?php echo $result['folder']; ?></p>
                <p><strong>Kode mencurigakan:</strong></p>
                <pre><?php echo $result['code']; ?></pre>
                <p><strong>Baris:</strong> <?php echo $result['line']; ?></p>
                <p class="description"><strong>Penjelasan:</strong> <?php echo $result['description']; ?></p>
            </div>
        <?php endforeach; ?>
        <?php foreach ($logResults as $result): ?>
            <div class="result">
                <h2>Potensi script berbahaya ditemukan di: <?php echo $result['file']; ?></h2>
                <p><strong>Folder:</strong> <?php echo $result['folder']; ?></p>
                <p><strong>Kode mencurigakan:</strong></p>
                <pre><?php echo $result['code']; ?></pre>
                <p><strong>Baris:</strong> <?php echo $result['line']; ?></p>
                <p class="description"><strong>Penjelasan:</strong> <?php echo $result['description']; ?></p>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</body>
</html>
