<?php
function generate_api_key($length = 32) {
    return bin2hex(random_bytes($length));
}

$new_api_key = generate_api_key();

// Simpan API key baru ke file atau database
   $api_key_file = 'https://database403.vercel.app/admin/api_key.txt';
file_put_contents($api_key_file, $new_api_key);

echo "API Key baru telah dibuat: " . $new_api_key;
echo "<br>API Key telah disimpan di " . $api_key_file;