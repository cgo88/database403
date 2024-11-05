<?php

$functionsFilePath = 'path/to/functions.php';


$backupFilePath = 'path/to/backup/functions.php';


function checkAndRestoreFunctionsFile($functionsFilePath, $backupFilePath) {
    if (!file_exists($functionsFilePath) || !file_exists($backupFilePath)) {
        return;
    }

    $currentContent = file_get_contents($functionsFilePath);
    $backupContent = file_get_contents($backupFilePath);

    if ($currentContent !== $backupContent) {
        file_put_contents($functionsFilePath, $backupContent);
    }
}


checkAndRestoreFunctionsFile($functionsFilePath, $backupFilePath);

