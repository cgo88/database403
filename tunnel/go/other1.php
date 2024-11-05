<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
ini_set('memory_limit', '256M');
set_time_limit(0);

echo "<html><body><ul>";

// Fungsi untuk memproses file list.txt dan membuat folder serta file index.html
function processList($listPath, $templatePaths, $additionalKeywords = []) {
    echo "<ul>";
    // Mendapatkan data dari file lokal
    echo "<li>Mengambil data dari file: $listPath</li>";
    $data = @file_get_contents($listPath);
    if ($data === FALSE) {
        echo "<li>Gagal mengambil data dari file: $listPath</li>";
        exit;
    }
    $names = json_decode($data, true)['names'];

    // Memilih path template secara acak
    $templatePath = $templatePaths[array_rand($templatePaths)];
    echo "<li>Mengambil konten template dari path: $templatePath</li>";
    $templateContent = @file_get_contents($templatePath);
    if ($templateContent === FALSE) {
        echo "<li>Gagal mengambil konten template dari path: $templatePath</li>";
        exit;
    }

    // Membuat folder berdasarkan nama-nama dari database
    $allFolders = [];
    foreach ($names as $name) {
        // Membuat folder utama
        echo "<li>Membuat folder dan file untuk: $name</li>";
        $folderName = createFolderAndFile($name, $templateContent);
        $allFolders[] = $folderName;
    }

    // Membuat folder tambahan dengan kata kunci tambahan
    foreach ($names as $name) {
        foreach ($additionalKeywords as $keyword) {
            $newName = $name . ' ' . $keyword;
            $urlFriendlyName = str_replace(' ', '-', $newName);
            $templatePath = $templatePaths[array_rand($templatePaths)]; // Pilih template path secara acak untuk setiap folder tambahan
            echo "<li>Membuat folder tambahan dan file untuk: $urlFriendlyName dengan template: $templatePath</li>";
            $templateContent = @file_get_contents($templatePath);
            if ($templateContent === FALSE) {
                echo "<li>Gagal mengambil konten template dari path: $templatePath</li>";
                continue;
            }
            $folderName = createFolderAndFile($urlFriendlyName, $templateContent);
            $allFolders[] = $folderName;
        }
    }
    echo "</ul>";
}

function createFolderAndFile($folderName, $templateContent) {
    if (!file_exists($folderName)) {
        mkdir($folderName, 0777, true);
        echo "<li>Folder dibuat: $folderName</li>";
    }
    $indexPhpPath = $folderName . '/index.php';
    file_put_contents($indexPhpPath, $templateContent);
    ob_start();
    include($indexPhpPath);
    $output = ob_get_clean();
    file_put_contents($folderName . '/index.html', $output);
    unlink($indexPhpPath);
    echo "<li>File index.html dibuat di: $folderName</li>";
    return $folderName;
}

// Path dari template lokal
$templatePaths = [
    __DIR__ . '/tamplate.php',
    __DIR__ . '/tamplate2.php'
];

// Path dari list.txt lokal
$listPath = __DIR__ . '/other1.txt';

// Daftar kata tambahan untuk folder
$additionalKeywords = ['login', 'linkalternatif', 'gacor'];

// Memproses file list.txt utama dan membuat folder tambahan
processList($listPath, $templatePaths, $additionalKeywords);

echo "</ul></body></html>";
?>
