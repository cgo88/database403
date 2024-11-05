<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "<html><body><ul>";

// Fungsi untuk mendapatkan semua folder yang ada di domain
function getAllFolders($directory) {
    $folders = [];
    echo "<li>Membuka direktori: $directory</li>";
    if (is_dir($directory)) {
        if ($dh = opendir($directory)) {
            while (($file = readdir($dh)) !== false) {
                if ($file != '.' && $file != '..' && is_dir($directory . '/' . $file)) {
                    echo "<li>Menemukan folder: $file</li>";
                    $folders[] = $file;
                }
            }
            closedir($dh);
        } else {
            echo "<li>Gagal membuka direktori: $directory</li>";
        }
    } else {
        echo "<li>$directory bukan direktori yang valid</li>";
    }
    return $folders;
}

// Fungsi untuk membuat sitemap.xml
function createSitemap($folders) {
    echo "<li>Membuat sitemap.xml</li>";
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $domain = $_SERVER['HTTP_HOST'];
    $sitemapContent = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
    $sitemapContent .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">' . PHP_EOL;

    // Menambahkan URL utama
    $sitemapContent .= '  <url>' . PHP_EOL;
    $sitemapContent .= '    <loc>' . $protocol . $domain . '/' . '</loc>' . PHP_EOL;
    $sitemapContent .= '    <lastmod>' . date('c') . '</lastmod>' . PHP_EOL;
    $sitemapContent .= '    <priority>1.00</priority>' . PHP_EOL;
    $sitemapContent .= '  </url>' . PHP_EOL;

    // Menambahkan URL dari folder
    foreach ($folders as $folder) {
        $sitemapContent .= '  <url>' . PHP_EOL;
        $sitemapContent .= '    <loc>' . $protocol . $domain . '/' . $folder . '/</loc>' . PHP_EOL;
        $sitemapContent .= '    <lastmod>' . date('c') . '</lastmod>' . PHP_EOL;
        $sitemapContent .= '    <priority>0.80</priority>' . PHP_EOL;
        $sitemapContent .= '  </url>' . PHP_EOL;
        echo "<li>$protocol$domain/$folder/</li>";
    }

    $sitemapContent .= '</urlset>' . PHP_EOL;
    file_put_contents('sitemap.xml', $sitemapContent);
    echo "<li>sitemap.xml berhasil dibuat</li>";
}

// Fungsi untuk membuat robots.txt
function createRobotsTxt() {
    echo "<li>Membuat robots.txt</li>";
    $robotsContent = "User-agent: Googlebot" . PHP_EOL;
    $robotsContent .= "Disallow: /nogooglebot/" . PHP_EOL . PHP_EOL;
    $robotsContent .= "User-agent: *" . PHP_EOL;
    $robotsContent .= "Allow: /" . PHP_EOL;
    $robotsContent .= "Sitemap: " . ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://") . $_SERVER['HTTP_HOST'] . "/sitemap.xml" . PHP_EOL;
    file_put_contents('robots.txt', $robotsContent);
    echo "<li>robots.txt berhasil dibuat</li>";
}
// Path ke direktori yang ingin Anda scan
$directory = '.'; // Ganti dengan path yang sesuai jika tidak di root

// Mendapatkan semua folder
$allFolders = getAllFolders($directory);

// Membuat sitemap.xml
createSitemap($allFolders);

// Membuat robots.txt
createRobotsTxt();

echo "</ul></body></html>";
?>
