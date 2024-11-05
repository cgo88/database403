<?php
/*
Template Name: Template
*/
?>
<?php
// URL ke file JSON
$json_url = 'https://raw.githubusercontent.com/cgo88/database403/main/tunnel/go/deskripsi.json';

// Ambil konten JSON
$json_content = file_get_contents($json_url);

// Decode JSON menjadi array
$descriptions = json_decode($json_content, true)['deskripsi'];

// Pilih deskripsi secara acak
$random_description = $descriptions[array_rand($descriptions)];

$foto_url = 'https://database403.vercel.app/tunnel/go/foto.txt';

// Ambil konten dari foto.txt
$foto_content = file_get_contents($foto_url);

// Pisahkan konten menjadi array berdasarkan spasi atau baris baru
$foto_list = preg_split('/\s+/', trim($foto_content));

// Pilih URL gambar secara acak
$random_foto = $foto_list[array_rand($foto_list)];

// URL dasar untuk gambar
$base_url = 'https://database403.vercel.app/img/';

// URL lengkap gambar acak
$random_foto_url = $base_url . $random_foto;
?>

<!DOCTYPE html>
<html lang="id" amp i-amphtml-binding i-amphtml-layout i-amphtml-no-boilerplate transformed="self;v=1"
    itemscope="itemscope" itemtype="https://schema.org/WebPage">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
   <title><?php the_title(); ?></title>
    <meta name="description"
        content="<?php echo $name; ?> <?php echo esc_attr($random_description); ?>" />
    <meta name="keywords"
        content="<?php echo $name; ?>" />
    <meta name='dmca-site-verification' content='eUE0TTNhaGJ0OU9XN3EvRGdJRGN1d095LzZZRmhuSHNxRDJhdE5XM3k3WT01' />
    <meta name="page google.com" content="https://www.google.com/search?q=<?php echo $name; ?>">
    <meta name="page google.co.id" content="https://www.google.co.id/search?q=<?php echo $name; ?>">
    <meta name="page google.com" content="https://www.google.com/search?q=<?php echo $name; ?>">
    <meta name="page google.co.id" content="https://www.google.co.id/search?q=<?php echo $name; ?>">
    <link itemprop="mainEntityOfPage" rel="canonical" href="<?php echo get_permalink(); ?>" />
    <meta name="robots" content="index, follow" />
    <meta name="page-locale" content="id,en">
    <meta content="true" name="HandheldFriendly">
    <meta content="width" name="MobileOptimized">
    <meta content="indonesian" name="language">
    <meta content='#007fa0' name='theme-color' />
    <link rel="preload" as="image"href="<?php echo esc_url($random_foto_url); ?>" />
    <meta name="supported-amp-formats" content="websites,stories,ads,email">
    <!-- Twitter -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="<?php the_title(); ?>">
    <meta name="twitter:description"
        content="<?php echo $name; ?> <?php echo esc_attr($random_description); ?>">
    <meta name="twitter:image:src"
        content="<?php echo esc_url($random_foto_url); ?>">
    <meta name="twitter:player" content="https://youtu.be/">
    <meta name="og:title" content="<?php the_title(); ?>">
    <meta name="og:description"
        content="<?php echo $name; ?> <?php echo esc_attr($random_description); ?>">
    <meta name="og:image" content="<?php echo esc_url($random_foto_url); ?>">
    <meta property="og:image:width" content="600">
    <meta property="og:image:height" content="466">
    <meta name="og:url" content="<?php echo get_permalink(); ?>">
    <meta name="og:site_name" content="<?php echo $name; ?>">
    <meta name="og:locale" content="ID_id">
    <meta name="og:video" content="https://youtu.be/">
    <meta name="og:type" content="website">
    <meta property="og:type" content="video" />
    <meta property="og:video:type" content="video/mp4">
    <meta property="og:video:width" content="500">
    <meta property="og:video:height" content="281">
    <meta name="theme-color" content="#0a0a0a" />
    <meta name="categories" content="<?php echo $name; ?>" />
    <meta name="language" content="ID">
    <meta name="rating" content="general">
    <meta name="copyright" content="<?php echo $name; ?>">
    <meta name="author" content="<?php echo $name; ?>">
    <meta name="distribution" content="global">
    <meta name="publisher" content="<?php echo $name; ?>">
    <meta name="geo.placename" content="DKI Jakarta">
    <meta name="geo.country" content="ID">
    <meta name="geo.region" content="ID" />
    <meta name="tgn.nation" content="Indonesia">
    <link rel="shortcut icon" type="image/x-icon" href="https://images.mylinks.ai/user_data%2FUR7xHjVjdKb1YswiL0OHm3QZC323%2Fking403%2Fprofile_picture%2Fc5e5fb31-991f-4660-be77-eefba34bbe78?alt=media&token=fd97667d-facc-45c3-addf-b8241af19a1c&optimizer=image&width=300&height=300" />
    <link href='https://images.mylinks.ai/user_data%2FUR7xHjVjdKb1YswiL0OHm3QZC323%2Fking403%2Fprofile_picture%2Fc5e5fb31-991f-4660-be77-eefba34bbe78?alt=media&token=fd97667d-facc-45c3-addf-b8241af19a1c&optimizer=image&width=300&height=300' rel='icon' sizes='32x32' type='image/png' />
    <style amp-runtime i-amphtml-version="012107240354000">
        <?php
function generate_random_color($id) {
    srand($id); // Seed the random number generator with the page ID
    $color = sprintf('#%06X', mt_rand(0, 0xFFFFFF));
    return $color;
}

$page_color = generate_random_color(get_the_ID());
?>
        html.i-amphtml-fie {
            height: 100% !important;
            width: 100% !important
        }

        html:not([amp4ads]),
        html:not([amp4ads]) body {
            height: auto !important
        }

        html:not([amp4ads]) body {
            margin: 0 !important
        }

        body {
            -webkit-text-size-adjust: 100%;
            -moz-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            text-size-adjust: 100%
        }

        html.i-amphtml-singledoc.i-amphtml-embedded {
            -ms-touch-action: pan-y pinch-zoom;
            touch-action: pan-y pinch-zoom
        }

        html.i-amphtml-fie>body,
        html.i-amphtml-singledoc>body {
            overflow: visible !important
        }

        html.i-amphtml-fie:not(.i-amphtml-inabox)>body,
        html.i-amphtml-singledoc:not(.i-amphtml-inabox)>body {
            position: relative !important
        }

        html.i-amphtml-ios-embed-legacy>body {
            overflow-x: hidden !important;
            overflow-y: auto !important;
            position: absolute !important
        }

        html.i-amphtml-ios-embed {
            overflow-y: auto !important;
            position: static
        }

        #i-amphtml-wrapper {
            overflow-x: hidden !important;
            overflow-y: auto !important;
            position: absolute !important;
            top: 0 !important;
            left: 0 !important;
            right: 0 !important;
            bottom: 0 !important;
            margin: 0 !important;
            display: block !important
        }

        html.i-amphtml-ios-embed.i-amphtml-ios-overscroll,
        html.i-amphtml-ios-embed.i-amphtml-ios-overscroll>#i-amphtml-wrapper {
            -webkit-overflow-scrolling: touch !important
        }

        #i-amphtml-wrapper>body {
            position: relative !important;
            border-top: 1px solid transparent !important
        }

        #i-amphtml-wrapper+body {
            visibility: visible
        }

        #i-amphtml-wrapper+body .i-amphtml-lightbox-element,
        #i-amphtml-wrapper+body[i-amphtml-lightbox] {
            visibility: hidden
        }

        #i-amphtml-wrapper+body[i-amphtml-lightbox] .i-amphtml-lightbox-element {
            visibility: visible
        }

        #i-amphtml-wrapper.i-amphtml-scroll-disabled,
        .i-amphtml-scroll-disabled {
            overflow-x: hidden !important;
            overflow-y: hidden !important
        }

        amp-instagram {
            padding: 54px 0 0 !important;
            background-color: #fff
        }

        amp-iframe iframe {
            box-sizing: border-box !important
        }

        [amp-access][amp-access-hide] {
            display: none
        }

        [subscriptions-dialog],
        body:not(.i-amphtml-subs-ready) [subscriptions-action],
        body:not(.i-amphtml-subs-ready) [subscriptions-section] {
            display: none !important
        }

        amp-experiment,
        amp-live-list>[update] {
            display: none
        }

        amp-list[resizable-children]>.i-amphtml-loading-container.amp-hidden {
            display: none !important
        }

        amp-list [fetch-error],
        amp-list[load-more] [load-more-button],
        amp-list[load-more] [load-more-end],
        amp-list[load-more] [load-more-failed],
        amp-list[load-more] [load-more-loading] {
            display: none
        }

        amp-list[diffable] div[role="list"] {
            display: block
        }

        amp-story-page,
        amp-story[standalone] {
            min-height: 1px !important;
            display: block !important;
            height: 100% !important;
            margin: 0 !important;
            padding: 0 !important;
            overflow: hidden !important;
            width: 100% !important
        }

        amp-story[standalone] {
            background-color: #202125 !important;
            position: relative !important
        }

        amp-story-page {
            background-color: #757575
        }

        amp-story .amp-active>div,
        amp-story .i-amphtml-loader-background {
            display: none !important
        }

        amp-story-page:not(:first-of-type):not([distance]):not([active]) {
            transform: translateY(1000vh) !important
        }

        amp-autocomplete {
            position: relative !important;
            display: inline-block !important
        }

        amp-autocomplete>input,
        amp-autocomplete>textarea {
            padding: .5rem;
            border: 1px solidrgba(0, 0, 0, .33)
        }

        .i-amphtml-autocomplete-results,
        amp-autocomplete>input,
        amp-autocomplete>textarea {
            font-size: 1rem;
            line-height: 1.5rem
        }

        [amp-fx^="fly-in"] {
            visibility: hidden
        }

        amp-script[nodom],
        amp-script[sandboxed] {
            position: fixed !important;
            top: 0 !important;
            width: 1px !important;
            height: 1px !important;
            overflow: hidden !important;
            visibility: hidden
        }

        [hidden] {
            display: none !important
        }

        .i-amphtml-element {
            display: inline-block
        }

        .i-amphtml-blurry-placeholder {
            transition: opacity .3s cubic-bezier(0, 0, .2, 1) !important;
            pointer-events: none
        }

        [layout=nodisplay]:not(.i-amphtml-element) {
            display: none !important
        }

        .i-amphtml-layout-fixed,
        [layout=fixed][width][height]:not(.i-amphtml-layout-fixed) {
            display: inline-block;
            position: relative
        }

        .i-amphtml-layout-responsive,
        [layout=responsive][width][height]:not(.i-amphtml-layout-responsive),
        [width][height][heights]:not([layout]):not(.i-amphtml-layout-responsive),
        [width][height][sizes]:not(img):not([layout]):not(.i-amphtml-layout-responsive) {
            display: block;
            position: relative
        }

        .i-amphtml-layout-intrinsic,
        [layout=intrinsic][width][height]:not(.i-amphtml-layout-intrinsic) {
            display: inline-block;
            position: relative;
            max-width: 100%
        }

        .i-amphtml-layout-intrinsic .i-amphtml-sizer {
            max-width: 100%
        }

        .i-amphtml-intrinsic-sizer {
            max-width: 100%;
            display: block !important
        }

        .i-amphtml-layout-container,
        .i-amphtml-layout-fixed-height,
        [layout=container],
        [layout=fixed-height][height]:not(.i-amphtml-layout-fixed-height) {
            display: block;
            position: relative
        }

        .i-amphtml-layout-fill,
        .i-amphtml-layout-fill.i-amphtml-notbuilt,
        [layout=fill]:not(.i-amphtml-layout-fill),
        body noscript>* {
            display: block;
            overflow: hidden !important;
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0
        }

        body noscript>* {
            position: absolute !important;
            width: 100%;
            height: 100%;
            z-index: 2
        }

        body noscript {
            display: inline !important
        }

        .i-amphtml-layout-flex-item,
        [layout=flex-item]:not(.i-amphtml-layout-flex-item) {
            display: block;
            position: relative;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto
        }

        .i-amphtml-layout-fluid {
            position: relative
        }

        .i-amphtml-layout-size-defined {
            overflow: hidden !important
        }

        .i-amphtml-layout-awaiting-size {
            position: absolute !important;
            top: auto !important;
            bottom: auto !important
        }

        i-amphtml-sizer {
            display: block !important
        }

        @supports (aspect-ratio:1/1) {
            i-amphtml-sizer.i-amphtml-disable-ar {
                display: none !important
            }
        }

        .i-amphtml-blurry-placeholder,
        .i-amphtml-fill-content {
            display: block;
            height: 0;
            max-height: 100%;
            max-width: 100%;
            min-height: 100%;
            min-width: 100%;
            width: 0;
            margin: auto
        }

        .i-amphtml-layout-size-defined .i-amphtml-fill-content {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0
        }

        .i-amphtml-replaced-content,
        .i-amphtml-screen-reader {
            padding: 0 !important;
            border: none !important
        }

        .i-amphtml-screen-reader {
            position: fixed !important;
            top: 0 !important;
            left: 0 !important;
            width: 4px !important;
            height: 4px !important;
            opacity: 0 !important;
            overflow: hidden !important;
            margin: 0 !important;
            display: block !important;
            visibility: visible !important
        }

        .i-amphtml-screen-reader~.i-amphtml-screen-reader {
            left: 8px !important
        }

        .i-amphtml-screen-reader~.i-amphtml-screen-reader~.i-amphtml-screen-reader {
            left: 12px !important
        }

        .i-amphtml-screen-reader~.i-amphtml-screen-reader~.i-amphtml-screen-reader~.i-amphtml-screen-reader {
            left: 16px !important
        }

        .i-amphtml-unresolved {
            position: relative;
            overflow: hidden !important
        }

        .i-amphtml-select-disabled {
            -webkit-user-select: none !important;
            -ms-user-select: none !important;
            user-select: none !important
        }

        .i-amphtml-notbuilt,
        [layout]:not(.i-amphtml-element),
        [width][height][heights]:not([layout]):not(.i-amphtml-element),
        [width][height][sizes]:not(img):not([layout]):not(.i-amphtml-element) {
            position: relative;
            overflow: hidden !important;
            color: transparent !important
        }

        .i-amphtml-notbuilt:not(.i-amphtml-layout-container)>*,
        [layout]:not([layout=container]):not(.i-amphtml-element)>*,
        [width][height][heights]:not([layout]):not(.i-amphtml-element)>*,
        [width][height][sizes]:not([layout]):not(.i-amphtml-element)>* {
            display: none
        }

        amp-img:not(.i-amphtml-element)[i-amphtml-ssr]>img.i-amphtml-fill-content {
            display: block
        }

        .i-amphtml-notbuilt:not(.i-amphtml-layout-container),
        [layout]:not([layout=container]):not(.i-amphtml-element),
        [width][height][heights]:not([layout]):not(.i-amphtml-element),
        [width][height][sizes]:not(img):not([layout]):not(.i-amphtml-element) {
            color: transparent !important;
            line-height: 0 !important
        }

        .i-amphtml-ghost {
            visibility: hidden !important
        }

        .i-amphtml-element>[placeholder],
        [layout]:not(.i-amphtml-element)>[placeholder],
        [width][height][heights]:not([layout]):not(.i-amphtml-element)>[placeholder],
        [width][height][sizes]:not([layout]):not(.i-amphtml-element)>[placeholder] {
            display: block;
            line-height: normal
        }

        .i-amphtml-element>[placeholder].amp-hidden,
        .i-amphtml-element>[placeholder].hidden {
            visibility: hidden
        }

        .i-amphtml-element:not(.amp-notsupported)>[fallback],
        .i-amphtml-layout-container>[placeholder].amp-hidden,
        .i-amphtml-layout-container>[placeholder].hidden {
            display: none
        }

        .i-amphtml-layout-size-defined>[fallback],
        .i-amphtml-layout-size-defined>[placeholder] {
            position: absolute !important;
            top: 0 !important;
            left: 0 !important;
            right: 0 !important;
            bottom: 0 !important;
            z-index: 1
        }

        amp-img.i-amphtml-ssr:not(.i-amphtml-element)>[placeholder] {
            z-index: auto
        }

        .i-amphtml-notbuilt>[placeholder] {
            display: block !important
        }

        .i-amphtml-hidden-by-media-query {
            display: none !important
        }

        .i-amphtml-element-error {
            background: green !important;
            color: #fff !important;
            position: relative !important
        }

        .i-amphtml-element-error:before {
            content: attr(error-message)
        }

        i-amp-scroll-container,
        i-amphtml-scroll-container {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            display: block
        }

        i-amp-scroll-container.amp-active,
        i-amphtml-scroll-container.amp-active {
            overflow: auto;
            -webkit-overflow-scrolling: touch
        }

        .i-amphtml-loading-container {
            display: block !important;
            pointer-events: none;
            z-index: 1
        }

        .i-amphtml-notbuilt>.i-amphtml-loading-container {
            display: block !important
        }

        .i-amphtml-loading-container.amp-hidden {
            visibility: hidden
        }

        .i-amphtml-element>[overflow] {
            cursor: pointer;
            position: relative;
            z-index: 2;
            visibility: hidden;
            display: initial;
            line-height: normal
        }

        .i-amphtml-layout-size-defined>[overflow] {
            position: absolute
        }

        .i-amphtml-element>[overflow].amp-visible {
            visibility: visible
        }

        template {
            display: none !important
        }

        .amp-border-box,
        .amp-border-box *,
        .amp-border-box :after,
        .amp-border-box :before {
            box-sizing: border-box
        }

        amp-pixel {
            display: none !important
        }

        amp-analytics,
        amp-auto-ads,
        amp-story-auto-ads {
            position: fixed !important;
            top: 0 !important;
            width: 1px !important;
            height: 1px !important;
            overflow: hidden !important;
            visibility: hidden
        }

        html.i-amphtml-fie>amp-analytics {
            position: initial !important
        }

        [visible-when-invalid]:not(.visible),
        form [submit-error],
        form [submit-success],
        form [submitting] {
            display: none
        }

        amp-accordion {
            display: block !important
        }

        @media (min-width:1px) {
            :where(amp-accordion>section)>:first-child {
                margin: 0;
                background-color: #efefef;
                padding-right: 20px;
                border: 1px solid #dfdfdf
            }

            :where(amp-accordion>section)>:last-child {
                margin: 0
            }
        }

        amp-accordion>section {
            float: none !important
        }

        amp-accordion>section>* {
            float: none !important;
            display: block !important;
            overflow: hidden !important;
            position: relative !important
        }

        amp-accordion,
        amp-accordion>section {
            margin: 0
        }

        amp-accordion:not(.i-amphtml-built)>section>:last-child {
            display: none !important
        }

        amp-accordion:not(.i-amphtml-built)>section[expanded]>:last-child {
            display: block !important
        }
    </style>
    <script data-auto async src="https://cdn.ampproject.org/v0.mjs" type="module" crossorigin="anonymous"></script>
    <script async nomodule src="https://cdn.ampproject.org/v0.js" crossorigin="anonymous"></script>
    <script async src="https://cdn.ampproject.org/v0/amp-carousel-0.1.mjs" custom-element="amp-carousel" type="module"
        crossorigin="anonymous"></script>
    <script async nomodule src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js" crossorigin="anonymous"
        custom-element="amp-carousel"></script>
    <script async src="https://cdn.ampproject.org/v0/amp-install-serviceworker-0.1.mjs"
        custom-element="amp-install-serviceworker" type="module" crossorigin="anonymous"></script>
    <script async nomodule src="https://cdn.ampproject.org/v0/amp-install-serviceworker-0.1.js" crossorigin="anonymous"
        custom-element="amp-install-serviceworker"></script>
    <script async src="https://cdn.ampproject.org/v0/amp-youtube-0.1.mjs" custom-element="amp-youtube" type="module"
        crossorigin="anonymous"></script>
    <script async nomodule src="https://cdn.ampproject.org/v0/amp-youtube-0.1.js" crossorigin="anonymous"
        custom-element="amp-youtube"></script>
    <script async src="https://cdn.ampproject.org/v0/amp-accordion-0.1.mjs" custom-element="amp-accordion" type="module"
        crossorigin="anonymous"></script>
    <script async nomodule src="https://cdn.ampproject.org/v0/amp-accordion-0.1.js" crossorigin="anonymous"
        custom-element="amp-accordion"></script>
    <style amp-custom>
        body {
            -webkit-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
            -moz-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
            -ms-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
            animation: -amp-start 8s steps(1, end) 0s 1 normal both
        }

        @-webkit-keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }

        @-moz-keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }

        @-ms-keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }

        @-o-keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }

        @keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }

        html {
            font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%
        }

        a,
        body,
        div,
        h1,
        h2,
        h3,
        h4,
        html,
        p,
        span {
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            vertical-align: baseline
        }

        a,
        a:active,
        a:focus {
            outline: 0;
            text-decoration: none
        }

        a {
            color: #fff
        }

        * {
            padding: 0;
            margin: 0;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box
        }

        h1,
        h2,
        h3,
        h4 {
            margin-top: 0;
            margin-bottom: .5rem
        }

        p {
            margin: 0 0 10px
        }

        p {
            margin-top: 0;
            margin-bottom: 1rem
        }

        .clear {
            clear: both
        }

        .acenter {
            text-align: center
        }

        body {
             background:<?php echo esc_attr($page_color); ?>;
    background-attachment: fixed;
    background-position: top;
    background-size: cover;
        }

        .container {
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto
        }

        .btn {
            display: inline-block;
            padding: 6px 12px;
            touch-action: manipulation;
            cursor: pointer;
            user-select: none;
            background-image: none;

            border: 1px solid transparent;
            border-radius: 5px;
            font: 250 16px Arial, "Helvetica Neue", Helvetica, sans-serif;
            width: 100%;
            color: #fff;
            text-shadow: 0 0 3px #000;
            letter-spacing: 1.1px
        }

        @keyframes blinking {
            0% {
                border: 2px solid #fff
            }

            100% {
                border: 2px solid <?php echo esc_attr($page_color); ?>
            }
        }

        @media (min-width:768px) {
            .container {
                max-width: 720px
            }

            .tron-regis {
                margin: 0 10px 0 0
            }

            .tron-login {
                margin: 10px 20px 10px 0
            }
        }

        @media (min-width:992px) {
            .container {
                max-width: 960px
            }

            .tron-regis {
                margin: 0 10px 0 0
            }

            .tron-login {
                margin: 0 10px 0 0
            }
        }

        @media (min-width:1200px) {
            .container {
                width: 1000px
            }

            .tron-regis {
                margin: 0 10px 0 0
            }

            .tron-login {
                margin: 0 10px 0 0
            }
        }

        .row {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px
        }

        .p-0 {
            padding: 0
        }

        .col-md-12,
        .col-md-4,
        .col-md-6,
        .col-md-8,
        .col-xs-6 {
            position: relative;
            width: 100%;
            padding-right: 15px;
            padding-left: 15px
        }

        .col-xs-6 {
            float: left;
            width: 50%
        }

        @media (min-width:768px) {
            .col-md-4 {
                -ms-flex: 0 0 33.333333%;
                flex: 0 0 33.333333%;
                max-width: 33.333333%
            }

            .col-md-6 {
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%
            }

            .col-md-8 {
                -ms-flex: 0 0 66.666667%;
                flex: 0 0 66.666667%;
                max-width: 66.666667%
            }

            .col-md-12 {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                width: 100%
            }

            .logomobi {
                display: none
            }

            .logform {
                padding-top: 2rem
            }

            .tron-regis {
                margin: 0 10px 0 0
            }

            .tron-login {
                margin: 0 10px 0 0
            }
        }

        @media (max-width:768px) {
            .logo {
                display: none
            }

            .navbar {
                position: fixed
            }

            .logomobi {
                padding-top: 10px;
                border-bottom: solid <?php echo esc_attr($page_color); ?> 2px;
                border-radius: 10px
            }

            .content {
                padding-top: 110px
            }

            .logo {
                display: none
            }

            .tron-regis {
                margin: 0 10px 0 0
            }

            .tron-login {
                margin: 0 10px 0 0
            }
        }

        .pb-2 {
            padding-bottom: .5rem
        }

        .paddy {
            padding: 15px
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mtop {
            margin-top: .75rem
        }

        .mb-3 {
            margin-bottom: .75rem
        }

        .pb-5 {
            padding-bottom: 1.25rem
        }

        .pt-3 {
            padding-top: 1rem
        }

        .navbar {
            background-color: #000;
            right: 0;
            left: 0;
            z-index: 1030;
            width: 100%;
            float: left
        }

        .bottom {
            float: left;
            width: 100%
        }

        ul li {
            list-style-type: none
        }

        ul li:last-child {
            border: 0
        }

        .copyleft {
            text-decoration: none;
            color: #fff;
            margin: 35px 0
        }

        .copyleft a {
            color: <?php echo esc_attr($page_color); ?>
        }

        .slide {
            width: 100%;
            border: 2px solid <?php echo esc_attr($page_color); ?>;
            border-radius: 4px;
            box-shadow: 0 0 3px 0 <?php echo esc_attr($page_color); ?>;
        }

        .btn-daf {
            margin: 30px 0 30px 0;
            background: linear-gradient(<?php echo esc_attr($page_color); ?>, #2b1b03);
            animation: blinking 0.5s infinite;
            transition: all .4s
        }

        @keyframes blinking {
            0% {
                border: 3px solid #ffffff
            }

            100% {
                border: 3px solid #000000
            }
        }

        table.<?php echo $name; ?> {
            font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            width: 100%;
            text-align: left;
            border-collapse: collapse;
            font-size: calc(8px+1vh);
            margin: 0 20px 0 0
        }

        table.<?php echo $name; ?> td,
        table.<?php echo $name; ?> th {
            border: 1px solid #ffe600;
    background: #000000bd;
            padding: 10px 5px 10px
        }

        table.<?php echo $name; ?> tbody td {
            font-size: calc(8px+1vh);
            font-weight: 500;
            color: #bfbfbf
        }

        table.<?php echo $name; ?> thead {
            background: <?php echo esc_attr($page_color); ?>
        }

        table.<?php echo $name; ?> thead th {
            font-size: calc(12px+1vh);
            font-weight: 700;
            color: #000;
            text-align: center;
            background: linear-gradient(to bottom, <?php echo esc_attr($page_color); ?> 0%, <?php echo esc_attr($page_color); ?> 50%, <?php echo esc_attr($page_color); ?> 100%);
        }

        .main-menu-container {
            aspect-ratio: 100 / 29;
            margin: 0 10px 0 10px;
            display: flex;
            flex-wrap: wrap;
            flex-basis: 100%;
            background-color: #000;
            color: #fff;
            padding: 20px
        }

        .main-menu-container ul>li {
            display: inline;
            padding: 0 8px
        }

        .main-menu-container ul>li:last-child {
            border: 0
        }

        .main-menu-container>li {
            flex-basis: 25%;
            padding: 5px;
            order: 2
        }

        .main-menu-container>li:nth-child(-n+4) {
            order: 0
        }

        .main-menu-container>li>a {
            display: block;
            color: #fff;
            font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            font-size: calc(8px+1vh);
            font-weight: 500;
            border: 2px solid <?php echo esc_attr($page_color); ?>;
            border-radius: 5px;
            padding: 30px;
            text-align: center;
            text-transform: uppercase;
            background-color: #171717;
            margin: 10px;
            justify-content: center;
            line-height: 20px
        }

        .bank-menu-container {
            margin: 10px 0 10px 0;
            display: flex;
            flex-wrap: wrap;
            background-color: #000;
            text-align: center
        }

        .bank-menu-container>li {
            flex-basis: 25%;
            padding: 0 0 0 10px
        }

        .bank-menu-container>li:nth-child(-n+4) {
            order: 0
        }

        .site-description {
            text-align: left;
            padding: 10px;
            color: <?php echo esc_attr($page_color); ?>;
            border-radius: 5px;
            box-shadow: 0 0 8px 4px #000000
        }

        .site-description hr {
            margin: 10px 0 10px 0;
            color: <?php echo esc_attr($page_color); ?>;
            border: 1px solid <?php echo esc_attr($page_color); ?>
        }

        .site-description p {
            font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            font-size: 16px;
            font-style: normal;
            font-variant: normal;
            font-weight: 400;
            text-align: justify;
            line-height: 23px;
            padding: 0 10px;
            color: #fff
        }

        .site-description li {
            margin: 5px 30px 10px;
            text-align: justify;
            color: <?php echo esc_attr($page_color); ?>
        }

        .site-description ul>li>a {
            color: #fff
        }

        .site-description a {
            color: #00d8ff;
        }

        .site-description h1 {
            font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            font-size: 2em;
            font-style: normal;
            font-variant: normal;
            font-weight: 500;
            color: <?php echo esc_attr($page_color); ?>;
            margin: 20px 0 20px 0;
            text-align: center
        }

        .site-description h2 {
            font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            font-size: 1.7em;
            font-style: normal;
            font-variant: normal;
            font-weight: 500;
            line-height: 23px;
            color: <?php echo esc_attr($page_color); ?>;
            margin: 20px 0 20px 0;
            text-align: center
        }

        .site-description h3 {
            font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            font-size: 1.4em;
            font-style: normal;
            font-variant: normal;
            font-weight: 500;
            line-height: 23px;
            color: <?php echo esc_attr($page_color); ?>;
            margin: 20px 0 20px 0;
            padding: 10px 10px 10px 10px
        }

        .site-description h4 {
            font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            font-size: 1em;
            font-style: normal;
            font-variant: normal;
            font-weight: 500;
            line-height: 23px;
            color: #ffffff;
            margin: 20px 0 20px 0;
            padding: 10px
        }

        .accordion h4 {
            background-color: transparent;
            border: 0
        }

        .accordion h4 {
            font-size: 17px;
            line-height: 28px
        }

        .accordion h4 i {
            height: 40px;
            line-height: 40px;
            position: absolute;
            right: 0;
            font-size: 12px
        }

        #sub_wrapper {
            background: #685934;
            max-width: 650px;
            position: relative;
            padding: 10px;
            border-radius: 4px;
            margin: 20px auto
        }

        .tombol_toc {
            position: relative;
            outline: 0;
            font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            font-size: calc(12px+1vh);
            font-style: normal;
            font-variant: normal;
            font-weight: 300;
            line-height: 10px;
            color: #fff
        }

        .tombol_toc svg {
            float: right
        }

        #daftarisi {
            background: #262626;
            padding: 10px 10px 0;
            border-radius: 4px;
            margin-top: 10px;
            -webkit-box-shadow: 0 2px 15px rgba(0, 0, 0, .05);
            box-shadow: 0 2px 15px rgba(0, 0, 0, .05);
            font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            font-size: calc(8px+1vh);
            font-style: normal;
            font-variant: normal;
            font-weight: 200;
            line-height: 23px;
            color: <?php echo esc_attr($page_color); ?>
        }

        #daftarisi a {
            text-decoration: none;
            color: #fff
        }

        #daftarisi ol {
            padding: 0 0 0 10px;
            margin: 0
        }

        #daftarisi ol li.lvl1 {
            line-height: 1.5em;
            padding: 4px 0
        }

        #daftarisi ol li.lvl1:nth-child(n+2) {
            border-top: 1px dashed #ddd
        }

        #daftarisi ol li.lvl1 a {
            font-weight: 600
        }

        #daftarisi ol li.lvl2 a {
            font-weight: 300;
            display: block
        }

        #daftarisi ul.circle {
            list-style-type: square;
            padding: 0 0 0 10px;
            margin: 0;
            font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            font-size: calc(6px+1vh);
            font-style: normal;
            font-variant: normal;
            font-weight: 200
        }

        #daftarisi ol li a:hover {
            text-decoration: underline
        }

        :target::before {
            content: "";
            display: block;
            height: 40px;
            margin-top: -40px;
            visibility: hidden
        }

        .tron-login {
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            border-radius: 5px;
            color: #000;
            font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            font-size: calc(12px+1vh);
            font-style: normal;
            font-variant: normal;
            font-weight: 700;
            line-height: 23px;
            padding: 10px;
            background: linear-gradient(to right, #ffa100 0%, <?php echo esc_attr($page_color); ?> 50%, #ffc700 100%);
            -webkit-box-shadow: 1px 1px 15px 0 linear-gradient(to right, #2b1b03 0%, <?php echo esc_attr($page_color); ?> 100%);
            -moz-box-shadow: 1px 1px 15px 0 linear-gradient(to right, #2b1b03 0%, <?php echo esc_attr($page_color); ?> 100%);
            box-shadow: 1px 1px 15px 0 linear-gradient(to right, #2b1b03 0%, <?php echo esc_attr($page_color); ?> 100%);
            border: solid #ff9d00 3px;
            text-decoration: none;
            display: flex;
            cursor: pointer;
            text-align: center;
box-shadow: 0 0 10px 3px #000000;
            justify-content: center
        }

        .tron-login:hover {
            background: linear-gradient(to right, #00d8ff 0%, #930000 50%, #00d8ff 100%);
            border: solid <?php echo esc_attr($page_color); ?> 1px 1px 15px 0;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            border-radius: 0;
            text-decoration: none;
            color: #fff
        }

        .tron-regis {
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            border-radius: 5px;
            color: #fff;
            font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            font-size: calc(12px+1vh);
            font-style: normal;
            font-variant: normal;
            font-weight: 700;
            line-height: 23px;
            padding: 10px;
            background: linear-gradient(to right, #730000 0%, #730000 50%, #730000 100%);
            color: #fff;
            text-decoration: none;
            display: flex;
            cursor: pointer;
            text-align: center;
            justify-content: center;
box-shadow: 0 0 10px 3px #000000;
            margin: 0 10px 0 0
        }

        .tron-regis:hover {
            background: linear-gradient(to right, #ffc700 0%, #937200 50%, #ffc700 100%);
            border: solid #2b1b03 5px;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            border-radius: 0;
            text-decoration: none
        }

        .tron {
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            border-radius: 5px;
            color: #ffffff;
            font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            font-size: calc(8px+1vh);
            font-style: normal;
            font-variant: normal;
            font-weight: 300;
            line-height: 15px;
            padding: 10px;
            background: linear-gradient(to bottom, #ff9d00 0%, <?php echo esc_attr($page_color); ?> 50%, #ffd400 100%);
            -webkit-box-shadow: 1px 1px 10px 0 linear-gradient(<?php echo esc_attr($page_color); ?>, #2b1b03);
            -moz-box-shadow: 1px 1px 10px 0 linear-gradient(<?php echo esc_attr($page_color); ?>, #2b1b03);
            box-shadow: 1px 1px 10px 0 linear-gradient(<?php echo esc_attr($page_color); ?>, #2b1b03);
            border: solid #ff9200 2px;
            text-decoration: none;
            display: flex;
            cursor: pointer;
            text-align: center;
            justify-content: center;
            margin: 10px 0 10px 0
        }

        .tron:hover {
            background: linear-gradient(to bottom, #00d8ff 0%, #00d8ff 50%, #00d8ff 100%);
            border: solid <?php echo esc_attr($page_color); ?> 1px 1px 10px 0;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            border-radius: 5px;
            text-decoration: none
        }

        .tron-images {
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            border-radius: 5px;
            color: <?php echo esc_attr($page_color); ?>;
            -webkit-box-shadow: 1px 1px 10px 0 <?php echo esc_attr($page_color); ?>;
            -moz-box-shadow: 1px 1px 10px 0 <?php echo esc_attr($page_color); ?>;
            box-shadow: 1px 1px 10px 0 <?php echo esc_attr($page_color); ?>;
            display: block;
            cursor: pointer;
            text-align: center;
            justify-content: center;
            width: 100%;
            height: auto;
            margin-right: auto;
            margin-left: auto
        }

        .tron-images:hover {
            background: #000;
            border: solid <?php echo esc_attr($page_color); ?> 1px;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            border-radius: 0
        }

        .wa-gift {
            position: fixed;
            width: 44px;
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            flex-direction: column;
            -webkit-box-pack: end;
            justify-content: flex-end;
            bottom: 160px;
            right: 20px;
            z-index: 9
        }

        .wa-livechat {
            position: fixed;
            width: 44px;
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            flex-direction: column;
            -webkit-box-pack: end;
            justify-content: flex-end;
            bottom: 80px;
            right: 20px;
            z-index: 9
        }

        .spacer {
            margin: 0 0 30px 0;
            display: block
        }

        @media screen and (min-width:701px) {
            .logomobis {
                margin-left: 500px;
                display: none;
                visibility: hidden
            }

            .logo {
                background-color: transparent;
                justify-content: center;
                display: block;
                border-bottom: solid <?php echo esc_attr($page_color); ?> 2px;
                padding: auto;
                border-radius: 10px;
                margin-top: 20px
            }

            .tron-regis {
                margin: 0 10px 0 0
            }

            .tron-login {
                margin: 0 10px 0 0
            }
        }

        @media screen and (max-width:701px) {
            .logo {
                margin-left: 500px;
                border-bottom: solid #000 2px;
                display: none
            }

            .logomobis {
                background-color: transparent;
                justify-content: center;
                display: flex;
                border-bottom: solid <?php echo esc_attr($page_color); ?> 2px;
                padding: auto;
                border-radius: 10px
            }

            .tron-regis {
                margin: 0 10px 0 0
            }

            .tron-login {
                margin: 0 10px 0 0
            }
        }

        .updated {
            border: solid 2px <?php echo esc_attr($page_color); ?>;
            padding: 10px
        }

        .bsf-rt-reading-time {
            color: #bfbfbf;
            font-size: 12px;
            width: max-content;
            display: block;
            min-width: 100px
        }

        .bsf-rt-display-label:after {
            content: attr(prefix)
        }

        .bsf-rt-display-time:after {
            content: attr(reading_time)
        }

        .bsf-rt-display-postfix:after {
            content: attr(postfix)
        }

        .bonus {
            width: 88px;
            height: 102px
        }

        @media (min-width:768px) {
            .bonus {
                width: 44px;
                height: 51px
            }
        }

        @media (min-width:320px) and (max-width:480px) {
            .main-menu-container>li>a {
                padding: 18px
            }
        }

        @media (min-width:481px) and (max-width:767px) {
            .main-menu-container>li>a {
                padding: 30px
            }
        }

        p#breadcrumbs {
            color: #fff;
            text-align: center
        }

        .site-description li h4 {
            color: #fff;
            line-height: 26px;
            margin: 5px;
            padding: 0;
            text-align: left
        }

        .tron-regis {
            animation: blinkings 0.5s infinite;
            transition: all .4s;
            touch-action: manipulation;
            cursor: pointer
        }

        .anim {
            animation: blinkings 1s infinite
        }

        @keyframes blinkings {
            0% {
                border: 4px solid #fff
            }

            100% {
                border: 4px solid <?php echo esc_attr($page_color); ?>
            }
        }

        span.faq-arrow {
            float: right;
            color: <?php echo esc_attr($page_color); ?>
        }

        .fixed-footer {
            display: flex;
    justify-content: space-around;
    position: fixed;
    background: linear-gradient(to bottom, #fc0 0%, #ffc800 50%, #ffe000 100%);
    padding: 5px 0;
    border-radius: 50px 50px 0px 0px;
    box-shadow: 0 0 8px 4px #000000;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 99;
    border-top: 3px solid #fff400;
}

        .fixed-footer a {
            flex-basis: calc((100% - 15px*6)/ 5);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: #000;
            max-width: 75px;
            font-size: 12px
        }

        .fixed-footer .center {
            transform: scale(1.5) translateY(-5px);
            background: center no-repeat;
            background-size: contain;
            background-color: inherit;
            border-radius: 50%
        }

        .fixed-footer amp-img {
            max-width: 30%;
            margin-bottom: 5px
        }

        .tada {
            -webkit-animation-name: tada;
            animation-name: tada;
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            animation-iteration-count: infinite
        }

        @-webkit-keyframes tada {
            0% {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1)
            }

            10%,
            20% {
                -webkit-transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg);
                transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg)
            }

            30%,
            50%,
            70%,
            90% {
                -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
                transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg)
            }

            40%,
            60%,
            80% {
                -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
                transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg)
            }

            100% {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1)
            }
        }

        @keyframes tada {
            0% {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1)
            }

            10%,
            20% {
                -webkit-transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg);
                transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg)
            }

            30%,
            50%,
            70%,
            90% {
                -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
                transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg)
            }

            40%,
            60%,
            80% {
                -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
                transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg)
            }

            100% {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1)
            }
        }

        .wobble {
            -webkit-animation-name: wobble;
            animation-name: wobble;
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            animation-iteration-count: infinite
        }

        @-webkit-keyframes wobble {
            0% {
                -webkit-transform: none;
                transform: none
            }

            15% {
                -webkit-transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg);
                transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg)
            }

            30% {
                -webkit-transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg);
                transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg)
            }

            45% {
                -webkit-transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg);
                transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg)
            }

            60% {
                -webkit-transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg);
                transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg)
            }

            75% {
                -webkit-transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg);
                transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg)
            }

            100% {
                -webkit-transform: none;
                transform: none
            }
        }

        @keyframes wobble {
            0% {
                -webkit-transform: none;
                transform: none
            }

            15% {
                -webkit-transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg);
                transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg)
            }

            30% {
                -webkit-transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg);
                transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg)
            }

            45% {
                -webkit-transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg);
                transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg)
            }

            60% {
                -webkit-transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg);
                transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg)
            }

            75% {
                -webkit-transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg);
                transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg)
            }

            100% {
                -webkit-transform: none;
                transform: none
            }
        }

        .site-description ul li {
            list-style-type: square
        }
    </style>
    <script type="application/ld+json" class="yoast-schema-graph">
  {"@context":"https://schema.org","@graph":[{"@type":"WebSite","@id":"<?php echo get_permalink(); ?>","url":"<?php echo get_permalink(); ?>","name":"<?php the_title(); ?>","potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"#?s={search_term_string}"},"query-input":"required name=search_term_string"}],"inLanguage":"id-ID"},{"@type":"CollectionPage","@id":"##webpage","url":"<?php echo get_permalink(); ?>","name":"<?php the_title(); ?>","isPartOf":{"@id":"#website"},"description":"<?php echo $name; ?> <?php echo esc_attr($random_description); ?>","breadcrumb":{"@id":"#breadcrumb"},"inLanguage":"id-ID","potentialAction":[{"@type":"ReadAction","target":["<?php echo get_permalink(); ?>"]}]},{"@type":"BreadcrumbList","@id":"#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Home"}]}]}</script>
    <script type="application/ld+json">
 {"@context": "http://schema.org","@type": "Game","name": "<?php echo $name; ?>","author": { "@type": "Person", "name": "bandar togel online" },"headline": "<?php the_title(); ?>","description": "<?php echo $name; ?> <?php echo esc_attr($random_description); ?>","keywords": ["<?php echo $name; ?>"],"image": "<?php echo esc_url($random_foto_url); ?>","url": "<?php echo get_permalink(); ?>","publisher": { "@type": "Organization", "name": "<?php echo $name; ?>" },"aggregateRating": { "@type": "AggregateRating", "ratingValue": "100", "bestRating": "100", "worstRating": "0", "ratingCount": "105468123" },"inLanguage": "id-ID"}       
</script>
    <script type='application/ld+json'>
{
"@context": "http://schema.org",
"@type": "Article",
"@id": "#article",
"mainEntityOfPage": "<?php echo get_permalink(); ?>",
"headline": "<?php the_title(); ?>",
"name": "<?php the_title(); ?>",
"url": "<?php echo get_permalink(); ?>",
"description": "<?php echo $name; ?> <?php echo esc_attr($random_description); ?>",
"image": "<?php echo esc_url($random_foto_url); ?>",
"datePublished": "2023-02-11T08:02:40+00:00",
"dateModified": "2023-02-11T08:02:40+00:00",
"author": {
  "@type": "Person",
  "name": "Togel Terpercaya",
  "url": "<?php echo get_permalink(); ?>"
},
"publisher": {
  "@type": "Organization",
  "name": "<?php echo get_permalink(); ?>",
  "description": "<?php echo $name; ?> <?php echo esc_attr($random_description); ?>",
  "logo": {
    "@type": "ImageObject",
    "url": "https://database403.vercel.app/img/77rabitt.jpg",
    "width": 600,
    "height": 60
  }
}
}
</script>
    <script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "Organization",
"name": "<?php echo $name; ?>",
"alternateName": "Bandar <?php echo $name; ?>",
"url": "<?php echo get_permalink(); ?>",
"logo": "https://database403.vercel.app/img/77rabitt.jpg",
"description": "<?php echo $name; ?> <?php echo esc_attr($random_description); ?>",
"address": {
"@type": "PostalAddress",
   "streetAddress": "samping city walk, Jl. K.H. Mas Mansyur, RT.12/RW.11, Karet Tengsin, Kecamatan Tanah Abang",
   "postOfficeBoxNumber": "10220",
   "addressLocality": "Daerah Khusus Ibukota Jakarta",
   "addressRegion": "Kota Jakarta Pusat",
   "postalCode": "10220",
   "addressCountry": "Indonesia"
},
"contactPoint": {
  "@type": "ContactPoint",
  "telephone": "+62 857-7994-7758",
  "contactType": "customer service",
  "areaServed": "ID",
  "availableLanguage": "Indonesian"
},
"sameAs": [
  "https://www.youtube.com/@<?php echo $name; ?>",
  "https://twitter.com/<?php echo $name; ?>",
  "<?php echo get_permalink(); ?>"
]
}
</script>
    <script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "FAQPage",
"mainEntity": [
  {
  "@type": "Question",
  "name": "Apa itu <?php echo $name; ?>?",
  "acceptedAnswer": {
    "@type": "Answer",
    "text": "<?php echo $name; ?> adalah platform online yang memberikan akses ke bandar togel terpercaya. Ini termasuk bandar Slot Jepang 4D resmi. Platform ini menawarkan kemudahan akses, keamanan transaksi, dan peluang menang yang lebih baik."
  }
},{
  "@type": "Question",
  "name": "Mengapa saya harus mempertimbangkan <?php echo $name; ?>?",
  "acceptedAnswer": {
    "@type": "Answer",
    "text": "<?php echo $name; ?> dirancang untuk memberikan pengalaman bermain togel yang aman dan menguntungkan. Bergabung di <?php echo $name; ?> memberikan keunggulan seperti proses daftar yang mudah dan keamanan transaksi yang terjamin. Anda juga bisa menikmati peluang menang yang lebih tinggi."
  }
},{
  "@type": "Question",
  "name": "Apa yang ditawarkan <?php echo $name; ?> bagi pemain baru togel macau?",
  "acceptedAnswer": {
    "@type": "Answer",
    "text": "<?php echo $name; ?> menyediakan panduan lengkap untuk pemain baru. Panduan ini membantu pemain memahami permainan Slot Jepang, strategi bertaruh, dan cara mendaftar di situs bandar terpercaya. Dengan panduan ini, pemain baru bisa cepat menguasai permainan dan meningkatkan peluang kemenangan."
  }
},{
  "@type": "Question",
  "name": "Apa saja strategi untuk menang dalam permainan Slot Jepang 4D?",
  "acceptedAnswer": {
    "@type": "Answer",
    "text": "Untuk meningkatkan peluang menang, pemain bisa menerapkan strategi seperti memahami pola angka dan menganalisis tren hasil undian. <?php echo $name; ?> menyediakan informasi lengkap tentang strategi ini."
  }
},{
  "@type": "Question",
  "name": "Bagaimana <?php echo $name; ?> menjamin keamanan dan kenyamanan bermain Slot Jepang?",
  "acceptedAnswer": {
    "@type": "Answer",
    "text": "<?php echo $name; ?> bekerja sama dengan situs bandar Slot Jepang resmi dan terpercaya. Ini menjamin keamanan transaksi, perlindungan data pribadi, dan proses pembayaran yang cepat. Bergabung di <?php echo $name; ?> memberikan pengalaman bermain togel macau yang aman dan nyaman."
  }
}]
}
</script>
    <script type="application/ld+json">
  {
    "@context": "https://schema.org/", 
    "@type": "BreadcrumbList", 
    "itemListElement": [{
    "@type": "ListItem", 
    "position": 1,
    "name": "Home",
    "item": "<?php echo get_permalink(); ?>"
  },
  {
    "@type": "ListItem", 
    "position": 2, 
    "name": "<?php echo $name; ?>",
    "item": "<?php echo get_permalink(); ?>"
  },
  {
    "@type": "ListItem", 
    "position": 3, 
    "name": "<?php the_title(); ?>"
  }
  ]
}
</script>
</head>


<body>
    <div class="navbar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="logomobi acenter">
                        <span itemscope="itemscope" itemtype="https://schema.org/Brand">
                            <a itemprop="url" href="<?php echo get_permalink(); ?>" title="<?php echo $name; ?>">
                                <a href="<?php echo get_permalink(); ?>" title="<?php echo $name; ?>">
                                    <amp-img
                                        src="https://database403.vercel.app/img/77rabitt.jpg"
                                        alt="<?php echo $name; ?>" width="150" height="44" />
                                </a>
                                <meta itemprop="name" content="<?php echo $name; ?>">
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="clear"></div>
    <div class="content">
        <div class="container">
            <div class="row mtop">
                <div class="col-md-4">
                    <div class="logo acenter">
                        <span itemscope="itemscope" itemtype="https://schema.org/Brand">
                            <a itemprop="url" href="<?php echo get_permalink(); ?>" title="<?php echo $name; ?>">
                                <a href="<?php echo get_permalink(); ?>" title="<?php echo $name; ?>">
                                    <amp-img
                                        src="https://database403.vercel.app/img/77rabitt.jpg"
                                        alt="<?php the_title(); ?>" width="300"
                                        height="78" layout="responsive" />
                                </a>
                                <meta itemprop="name" content="<?php echo $name; ?>">
                            </a>
                        </span>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row logform">
                        <div class="col-xs-6">
                            <a href="https://t.ly/sejuk777" target="_blank" rel="nofollow noreferrer">
                                <span class="tron-login">LOGIN</span>
                            </a>
                        </div>
                        <div class="col-xs-6">
                            <a href="https://t.ly/sejuk777" target="_blank" rel="nofollow noreferrer">
                                <span class="tron-regis">DAFTAR</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="spacer"></div>
            <div class="container">
                <div class="item-8 item-xs-12 m-b-1 slider-area owl-carousel">
                    <amp-carousel width="1280" height="720" layout="responsive" type="slides" autoplay delay="4000">
                        <amp-img src="<?php echo esc_url($random_foto_url); ?>"
                            width="1280" height="720" layout="responsive" alt="<?php echo $name; ?>"><amp-img
                                alt="<?php the_title(); ?>" fallback width="1280"
                                height="720" layout="responsive"
                                src="<?php echo esc_url($random_foto_url); ?>"></amp-img>
                        </amp-img>
                    </amp-carousel>
                </div>
            </div>
            <div class="clear"></div>
            <div class="bottom bg-dark">
                <div class="container">
                    <div class="row p-0" style="background-color: #0000;">
                        <div class="col-md-6 pt-3 p-0 acenter">
                            <div class="row">
                                <div class="col-xs-6">
                                    <a href="<?php echo get_permalink(); ?>" title="<?php echo $name; ?>">
                                        <span class="tron"><?php echo $name; ?></span>
                                    </a>
                                </div>
                                <div class="col-xs-6">
                                    <a href="<?php echo get_permalink(); ?>" title="<?php echo $name; ?> slot">
                                        <span class="tron"><?php echo $name; ?> slot</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pt-3 p-0 acenter">
                            <div class="row">
                                <div class="col-xs-6">
                                    <a href="<?php echo get_permalink(); ?>" title="Macau 4D">
                                        <span class="tron">Macau 4D</span>
                                    </a>
                                </div>
                                <div class="col-xs-6">
                                    <a href="<?php echo get_permalink(); ?>" title="Bandar Slot Jepang">
                                        <span class="tron">Bandar Slot Jepang</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="table">
                    <table class="<?php echo $name; ?>" style="width:100%">
                        <thead>
                            <tr>
                                <th colspan="3">Informasi Situs</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="padding: 10px;">Nama Situs</td>
                                <td style="padding: 10px;">
                                    <a><?php echo $name; ?> 🔥</a>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 10px;">Jenis Permainan</td>
                                <td style="padding: 10px;"><a>Togel Online, Slot Online, Live Casino</a>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 10px;">Minimal Deposit</td>
                                <td style="padding: 10px;">Rp 25.000</td>
                            </tr>
                            <tr>
                                <td style="padding: 10px;">Metode Deposit</td>
                                <td style="padding: 10px;">🟢Transfer Bank, E-Wallet, Qris</td>
                            </tr>
                            <tr>
                                <td style="padding: 10px;">Mata Uang</td>
                                <td style="padding: 10px;">IDR (Indonesian Rupiah)</td>
                            </tr>
                            <tr>
                                <td style="padding: 10px;">Jam Operasional</td>
                                <td style="padding: 10px;">24 Jam Online</td>
                            </tr>
                            <tr>
                                <td style="padding: 10px;">Rating</td>
                                <td style="padding: 10px;">⭐⭐⭐⭐ <?php echo number_format(rand(109061996, 500000000)); ?> User</td>
                            </tr>
                            <tr>
                                <td style="padding: 10px;">Daftar Sekarang</td>
                                <td style="padding: 10px;">
                                    <span style="color: #fffb00;">
                                        <a style="color: #ffd900;"
                                            title="<?php the_title(); ?>"
                                            href="https://t.ly/sejuk777" target="_blank"
                                            rel="nofollow noopener">KLIK DISINI</a>
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <br>
            <div class="bottom bg-dark">
                <div class="container">
                    <div class="row mb-3" style="background-color: #0000006b;">
                        <div class="col-md-12 pb-5">
                            <div class="site-description">
                                <p id="breadcrumbs">

									<h1><?php the_title(); ?></h1>
									 
									 <p><a style="color: #ff00dc;" title="<?php echo $name; ?>" href="<?php echo get_permalink(); ?>"><?php echo $name; ?></a> adalah pilihan terbaik untuk Anda yang ingin bertaruh togel Slot Jepang. Platform ini memberikan akses mudah ke bandar Slot Jepang 4D terpercaya dan resmi. Anda akan merasa aman dan berkesempatan menang lebih besar.</p>
									 
									 <p>Menjadi bagian dari <?php echo $name; ?> memberikan banyak keuntungan. Anda akan menikmati transaksi yang mudah, peluang menang yang lebih baik, dan dukungan pelanggan yang profesional.</p>
									 
									 <p>Jika Anda ingin merasakan sensasi bermain togel Slot Jepang, <?php echo $name; ?> adalah jawabannya. Kami menawarkan link-link bandar Slot Jepang terbaik. Nikmati pengalaman bermain togel yang tak terlupakan bersama kami.</p>
									 
									<h2>Apa itu <?php echo $name; ?> dan Mengapa Anda Harus Mempertimbangkannya</h2>

									 <p><?php echo $name; ?> adalah platform terpercaya yang memberikan akses ke berbagai situs bandar togel, termasuk bandar Slot Jepang 4D resmi. Ini dirancang untuk memberikan pengalaman bermain togel yang aman dan menguntungkan. Bergabung di <?php echo $name; ?> memberikan Anda keunggulan yang tidak ada di tempat lain.</p>
									 
									 <p>Keunggulan utama <?php echo $name; ?> adalah proses pendaftaran dan transaksi yang mudah dan aman. Sistem registrasi yang sederhana memastikan data Anda aman. <?php echo $name; ?> juga menjamin keamanan transaksi, memungkinkan Anda fokus pada strategi permainan.</p>
									 
									 <p><?php echo $name; ?> menawarkan akses ke bandar Slot Jepang terbaik, termasuk Slot Jepang 4D. Ini memberikan peluang kemenangan yang baik. Selain itu, <?php echo $name; ?> juga menawarkan promosi dan bonus yang meningkatkan keuntungan Anda.</p>
									 
									 <p>Untuk pengalaman bermain togel yang aman dan menguntungkan, <?php echo $name; ?> adalah pilihan terbaik. Dengan akses ke bandar Slot Jepang resmi, Anda bisa meningkatkan peluang menang. Nikmati keseruan bermain togel dengan platform yang terpercaya.</p>
									 
									<h2><?php echo $name; ?>, Slot Jepang, bandar Slot Jepang: Panduan Lengkap untuk Pemain Baru</h2>

									 <p>Memasuki dunia Slot Jepang sebagai pemain baru bisa terasa menakutkan. Tapi, dengan <?php echo $name; ?>, Anda akan menemukan panduan lengkap untuk memulai. Ini membuat bermain togel macau jadi lebih menyenangkan dan menguntungkan.</p>
									 
									 <p><?php echo $name; ?> memperkenalkan berbagai jenis permainan <a style="color: #ff00dc;" title="Bandar Slot Jepang" href="<?php echo get_permalink(); ?>">Bandar Slot Jepang</a>, seperti 4D, 3D, dan 2D. Setiap permainan punya aturannya sendiri. <?php echo $name; ?> menjelaskan aturan dan strategi dengan detail di situsnya.</p>
									 
									 <p><?php echo $name; ?> juga memberi saran cara bertaruh dengan bijak. Anda akan belajar memilih angka dan mengelola uang dengan baik. Tips dan trik ini bisa meningkatkan peluang menang Anda.</p>
									 
									 <p>Bagi yang ingin bergabung dengan agen Slot Jepang terpercaya, <?php echo $name; ?> memberi info lengkap tentang pendaftaran dan verifikasi akun. Ini memastikan Anda bermain dengan aman dan nyaman.</p> 
									 
									 <p>Dengan mengikuti panduan <?php echo $name; ?>, pemain baru bisa cepat menguasai Slot Jepang. Anda juga bisa meningkatkan peluang menang yang menguntungkan.</p> 
									 
									<h2>Strategi Menang dalam Permainan Slot Jepang 4D</h2>

									 <p>Bagi para pecinta toto togel, Slot Jepang 4D adalah favorit. Untuk meningkatkan peluang menang, ada beberapa strategi efektif. Pertama, penting untuk memahami pola angka historis. Dengan analisis tren hasil undian, pemain bisa menemukan angka yang sering keluar.</p>
									 
									 <p>Kedua, manfaatkan fitur dari situs bandar Slot Jepang terpercaya seperti <?php echo $name; ?>. Fitur seperti alat analisis data dan prediksi hasil bisa membantu pemain. Dengan memanfaatkan fitur ini, pemain bisa meningkatkan kemampuan mereka.</p>
									 
									 <p>Strategi ini bisa meningkatkan peluang menang dalam Slot Jepang 4D. <?php echo $name; ?> menyediakan tips dan trik untuk memenangkan <a style="color: #ff00dc;" title="Slot Jepang" href="<?php echo get_permalink(); ?>">Slot Jepang</a>. Ini membantu pemula dan yang berpengalaman meningkatkan kemampuan mereka.</p>

									<h2>Slot Jepang Resmi: Memastikan Keamanan dan Kenyamanan Bermain</h2>

									 <p>Memilih situs judi togel yang aman dan nyaman itu penting. <?php echo $name; ?> bekerja sama dengan bandar Slot Jepang resmi dan terpercaya. Ini menjaga transaksi Anda aman dan melindungi data pribadi.</p>
									 
									 <p>Di <?php echo $name; ?>, Anda akan menikmati bermain toto togel yang lancar. Proses pembayaran cepat dan mudah. Ini memungkinkan Anda fokus pada permainan dan menang besar. <?php echo $name; ?> berkomitmen memberikan situs toto terbaik untuk pemain togel Macau.</p>
									 
									 <p>Jadi, gabung dengan <?php echo $name; ?> untuk pengalaman togel Macau yang aman dan menyenangkan. Temukan keberuntungan Anda di <?php echo $name; ?>!</p>

									<h4><strong>Keyword Terkait :</strong></h4>
									 <ul>
                                      	 <li><strong><?php echo $name; ?></strong></li>
                                      	 <li><strong>Slot Jepang</strong></li>
    									 <li><strong>toto togel</strong></li>
										 <li><strong>togel macau</strong></li>
    									 <li><strong>situs toto</strong></li>
										 <li><strong>macau 4d</strong></li>
										 <li><strong>macau 3d</strong></li>
										 <li><strong>macau 2d</strong></li>
										 <li><strong>bo togel asia</strong></li>
										 <li><strong>bo togel bet 100</strong></li>
										 <li><strong>bo togel resmi</strong></li>
										 <li><strong>situs togel resmi</strong></li>
										 <li><strong>Slot Jepang resmi</strong></li>
										 <li><strong>bandar Slot Jepang</strong></li>
										 <li><strong>agen togel online</strong></li>
										 <li><strong>bandar togel terbesar</strong></li>
										 <li><strong>situs togel terbesar</strong></li>
										 <li><strong>situs togel terpercaya</strong></li>
										 <li><strong>Bandar Slot Jepang</strong></li>
										 <li><strong>bandar togel resmi</strong></li>
									 </ul>

                                </section>
                                </amp-accordion>
                            </div>
                            <div class="container">
                                <div class="copyleft acenter pb-2">
                                    <span>&copy; Copiright <a style="color: #00d8ff;" title="<?php the_title(); ?>" href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></span>
                                </div>
                            </div>
                            <div class="fixed-footer">
                                <a href="https://t.ly/sejuk777" rel="nofollow noopener" target="_blank">
                                    <amp-img layout="intrinsic" height="75" width="75"
                                        src="https://photoku.io/images/2024/06/08/promosi.png"
                                        alt="Bonus Bandar Slot Jepang"></amp-img>
                                    Promo
                                </a>
                                <a href="https://t.ly/sejuk777" rel="nofollow noopener" target="_blank">
                                    <amp-img layout="intrinsic" height="75" width="75"
                                        src="https://photoku.io/images/2024/06/08/login.png"
                                        alt="Login 10 Situs Togel Terpercaya"></amp-img>
                                    Daftar
                                </a>
                                <a href="https://t.ly/sejuk777" rel="nofollow noopener" target="_blank">
                                    <amp-img layout="intrinsic" height="75" width="75"
                                        src="https://photoku.io/images/2024/06/08/daftar-2.png"
                                        alt="whatsapp Bandar Togel Online"></amp-img>
                                    Login
                                </a>
                                <a href="https://t.ly/sejuk777" rel="nofollow noopener" target="_blank"
                                    class="js_live_chat_link live-chat-link">
                                    <amp-img class="live-chat-icon" layout="intrinsic" height="75" width="75"
                                        src="https://photoku.io/images/2024/06/08/lc.png"
                                        alt="Live Chat"></amp-img>
                                    Live Chat
                                </a>
                            </div>
</body>

</html>
