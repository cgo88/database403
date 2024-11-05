<?php
// Mengatur header untuk mengizinkan akses lintas domain (CORS)
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// Fungsi untuk membaca konten file
function read_file_content($file_path) {
    if (file_exists($file_path)) {
        return file_get_contents($file_path);
    }
    return null;
}

// Membaca API key dari file
$api_key_file = '/admin/api_key.txt';
$api_key = trim(file_get_contents($api_key_file));

if (!$api_key) {
    http_response_code(500);
    echo json_encode(["message" => "Kesalahan konfigurasi server"]);
    exit();
}

// Verifikasi API key
$received_api_key = isset($_SERVER['HTTP_AUTHORIZATION']) ? str_replace('Bearer ', '', $_SERVER['HTTP_AUTHORIZATION']) : '';

if ($received_api_key !== $api_key) {
    http_response_code(401);
    echo json_encode(["message" => "Unauthorized access"]);
    exit();
}

// Path ke file konten
$h1_file = "/artikel/daftar/h1.php";
$h2_file = "/artikel/daftar/h2.php";
$h3_file = "/artikel/daftar/h3.php";

// Membaca konten file
$h1_content = read_file_content($h1_file);
$h2_content = read_file_content($h2_file);
$h3_content = read_file_content($h3_file);

// Menyiapkan respons
$response = [
    "h1" => $h1_content,
    "h2" => $h2_content,
    "h3" => $h3_content
];

// Mengirim respons JSON
echo json_encode($response);