<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
ini_set('memory_limit', '256M');
set_time_limit(0);

echo "<html><body><ul>";

function processNewFolders($directory, $templatePaths, $keyword) {
    echo "<ul>";
    $folders = array_filter(glob($directory . '/*'), 'is_dir');

    foreach ($folders as $folder) {
        $folderName = basename($folder);

        // Abaikan folder yang sudah memiliki tanda "-"
        if (strpos($folderName, '-') !== false) {
            echo "<li>Folder $folderName diabaikan karena sudah memiliki tanda '-'.</li>";
            continue;
        }

        $newFolderName = $folderName . '-' . $keyword;
        $newFolderPath = $directory . '/' . $newFolderName;

        if (!file_exists($newFolderPath)) {
            $templatePath = $templatePaths[array_rand($templatePaths)];
            echo "<li>Membuat folder tambahan dan file untuk: $newFolderName dengan template: $templatePath</li>";
            $templateContent = @file_get_contents($templatePath);
            if ($templateContent === FALSE) {
                echo "<li>Gagal mengambil konten template dari path: $templatePath</li>";
                continue;
            }
            createFolderAndFile($newFolderPath, $templateContent);
        } else {
            echo "<li>Folder $newFolderName sudah ada.</li>";
        }
    }
    echo "</ul>";
}

function createFolderAndFile($folderPath, $templateContent) {
    if (!file_exists($folderPath)) {
        mkdir($folderPath, 0777, true);
        echo "<li>Folder dibuat: $folderPath</li>";
    }
    $indexPhpPath = $folderPath . '/index.php';
    file_put_contents($indexPhpPath, $templateContent);
    ob_start();
    include($indexPhpPath);
    $output = ob_get_clean();
    file_put_contents($folderPath . '/index.html', $output);
    unlink($indexPhpPath);
    echo "<li>File index.html dibuat di: $folderPath</li>";
}

$templatePaths = [
    __DIR__ . '/tamplate.php',
    __DIR__ . '/tamplate2.php'
];

$directory = __DIR__;

$keyword = 'rtp';

processNewFolders($directory, $templatePaths, $keyword);

echo "</ul></body></html>";
?>
