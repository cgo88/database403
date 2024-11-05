    <?php
    // Periksa apakah request method adalah POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Ambil data JSON dari body request
        $json = file_get_contents('php://input');
        $data = json_decode($json, true);

        // Simpan data ke file log atau tampilkan
        file_put_contents('notifications.log', $json . PHP_EOL, FILE_APPEND);

        // Tampilkan data untuk debugging
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    } else {
        echo 'No data received.';
    }
    ?>
