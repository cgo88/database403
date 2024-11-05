<?php
function getCreatedFolders() {
    $folders = array_filter(glob('*'), 'is_dir');
    return $folders;
}

$folders = getCreatedFolders();

foreach ($folders as $folder) {
    $folderName = $folder; // Set folder name to current folder
    $indexFilePath = "{$folder}/index.html";
    if (!file_exists($indexFilePath)) {
        echo "Error: Tidak dapat menemukan file index.html di folder {$folder}\n";
        continue;
    }

    $indexContent = file_get_contents($indexFilePath);
    if ($indexContent === false) {
        echo "Error: Tidak dapat membaca file index.html di folder {$folder}\n";
        continue;
    }

    $dom = new DOMDocument();
    libxml_use_internal_errors(true); 
    $dom->loadHTML($indexContent);
    libxml_clear_errors();
    $titleElements = $dom->getElementsByTagName('title');
    $folderTitle = $titleElements->item(0)->textContent;
    $metaElements = $dom->getElementsByTagName('meta');
    $descriptionContent = '';
    foreach ($metaElements as $meta) {
        if ($meta->getAttribute('name') === 'description') {
            $descriptionContent = $meta->getAttribute('content');
            break;
        }
    }
    $domain = "https://" . $_SERVER['HTTP_HOST'] ."/";

    $ampContent = <<<HTML
<!DOCTYPE html>
<html amp lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,maximum-scale=1">
    <meta http-equiv="content-language" content="id">
    <title>{$folderTitle}</title>
    <meta name="description"
        content="{$descriptionContent}">
    <meta name="keywords" content="{$folderTitle} slot , {$folderTitle} gacor , {$folderTitle} situs">
    <meta name="robots" content="index, follow">
    <meta name="page-locale" content="id,en">
    <meta content="true" name="HandheldFriendly">
    <meta content="width" name="MobileOptimized">
    <meta property="og:title" content="{$folderTitle}">
    <meta property="og:description"
        content="{$descriptionContent}">
    <meta property="og:url" content="{$domain}{$folderName}/">
    <meta property="og:site_name" content="{$folderName}">
    <meta property="og:author" content="{$folderName}">
    <meta property="og:image"
        content="https://res.cloudinary.com/dquhxgmzs/image/upload/v1692382237/favicon_inghan.png">
    <meta name="og:locale" content="ID_id">
    <meta name="og:type" content="webcate">
    <meta name="rating" content="general">
    <meta name="author" content="{$folderName}">
    <meta name="distribution" content="global">
    <meta name="publisher" content="{$folderName}">
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon"
        href="https://www.svgrepo.com/show/474733/approval.svg"
        type="image/x-icon">
    <link rel="canonical" href="{$domain}{$folderName}/">
    <style amp-boilerplate>
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
    </style><noscript>
        <style amp-boilerplate>
            body {
                -webkit-animation: none;
                -moz-animation: none;
                -ms-animation: none;
                animation: none
            }
        </style>
    </noscript>
    <style amp-custom>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0
        }

        :focus {
            outline: 0
        }

        ::-webkit-scrollbar {
            display: none
        }

        a,
        a:after,
        a:hover,
        a:visited {
            text-decoration: none;
            color: #fff
        }

        html {
            max-width: 500px;
            margin: 0 auto;
            background-color: #000;
        }

        body {
            color: #fff;
            font-family: 'Noto Sans', arial, sans-serif
        }

        .cekurukuk {
            display: grid;
            min-height: 100vh
        }

        .memek-kau {
            margin: auto;
            text-align: center
        }

        .kiw-kiw {
            display: inline-grid;
            margin: .88rem 0
        }

        .kiw-kiw .contole {
            padding: .5rem 3.8rem;
            background: #33333388;
            margin-bottom: .5rem;
            border-radius: .38rem;
            box-shadow: 0 -1px #ccb38a88;
            letter-spacing: 1px
        }

        .kiw-kiw a.gacore {
            color: #ffffff;
            background-image: linear-gradient(-45deg, #03050c 0, #21367a 100%);
            box-shadow: none;
            font-weight: 700
        }

        .imghero {
            box-shadow: inset 0 0 0 8px #888;
            border-radius: 8px
        }

        .cibai-container {
            display: flex;
            background: linear-gradient(-45deg, #03050c 0, #21367a 100%);
            width: 250px;
            height: 40px;
            align-items: center;
            justify-content: space-around;
            border-radius: 10px
        }

        .cibai {
            outline: 0;
            border: 0;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: transparent;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            transition: all ease-in-out .3s;
            cursor: pointer
        }

        .cibai:hover {
            transform: translateY(-3px)
        }

        .icon {
            font-size: 20px
        }

        .bca2 {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 13rem;
            overflow: hidden;
            height: 3rem;
            background-size: 300% 300%;
            backdrop-filter: blur(1rem);
            border-radius: .38rem;
            transition: .5s;
            animation: gradient_301 5s ease infinite;
            border: double 4px transparent;
            background-image: linear-gradient(#212121, #212121), linear-gradient(137.48deg, #ffdb3b 10%, #fe53bb 45%, #8f51ea 67%, #04f 87%);
            background-origin: border-box;
            background-clip: content-box, border-box
        }

        #container-stars {
            position: absolute;
            z-index: -1;
            width: 100%;
            height: 100%;
            overflow: hidden;
            transition: .5s;
            backdrop-filter: blur(1rem);
            border-radius: .38rem
        }

        strong {
            z-index: 2;
            letter-spacing: 5px;
            color: #fff;
            text-shadow: #fff
        }

        #glow {
            position: absolute;
            display: flex;
            width: 12rem
        }

        .circle {
            width: 100%;
            height: 30px;
            filter: blur(2rem);
            animation: pulse_3011 4s infinite;
            z-index: -1
        }

        .circle:nth-of-type(1) {
            background: rgba(254, 83, 186, .636)
        }

        .circle:nth-of-type(2) {
            background: rgba(142, 81, 234, .704)
        }

        .bca2:hover #container-stars {
            z-index: 1;
            background-color: #212121
        }

        .bca2:hover {
            transform: scale(1.1)
        }

        .bca2:active {
            border: double 4px #fe53bb;
            background-origin: border-box;
            background-clip: content-box, border-box;
            animation: none
        }

        .bca2:active .circle {
            background: #fe53bb
        }

        #stars {
            position: relative;
            background: 0 0;
            width: 200rem;
            height: 200rem
        }

        #stars::after {
            content: "";
            position: absolute;
            top: -10rem;
            left: -100rem;
            width: 100%;
            height: 100%;
            animation: animStarRotate 90s linear infinite
        }

        #stars::after {
            background-image: radial-gradient(#fff 1px, transparent 1%);
            background-size: 50px 50px
        }

        #stars::before {
            content: "";
            position: absolute;
            top: 0;
            left: -50%;
            width: 170%;
            height: 500%;
            animation: animStar 60s linear infinite
        }

        #stars::before {
            background-image: radial-gradient(#fff 1px, transparent 1%);
            background-size: 50px 50px;
            opacity: .5
        }

        @keyframes animStar {
            from {
                transform: translateY(0)
            }

            to {
                transform: translateY(-135rem)
            }
        }

        @keyframes animStarRotate {
            from {
                transform: rotate(360deg)
            }

            to {
                transform: rotate(0)
            }
        }

        @keyframes gradient_301 {
            0% {
                background-position: 0 50%
            }

            50% {
                background-position: 100% 50%
            }

            100% {
                background-position: 0 50%
            }
        }

        @keyframes pulse_3011 {
            0% {
                transform: scale(.75);
                box-shadow: 0 0 0 0 rgba(0, 0, 0, .7)
            }

            70% {
                transform: scale(1);
                box-shadow: 0 0 0 10px transparent
            }

            100% {
                transform: scale(.75);
                box-shadow: 0 0 0 0 transparent
            }
        }
    </style>
</head>

<body>
    <main>
        <div class="cekurukuk">
            <div class="memek-kau"><a href="https://t.ly/pl777">
                    <div class="cibai-container"><button class="cibai" id="button"><svg
                                xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25"
                                viewBox="0,0,256,256" style="fill:#fff">
                                <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1"
                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                    font-size="none" text-anchor="none" style="mix-blend-mode:normal">
                                    <g transform="scale(3.55556,3.55556)">
                                        <path
                                            d="M36,10c-1.139,0 -2.27708,0.38661 -3.20508,1.16211l-21.27734,17.7793c-1.465,1.224 -1.96564,3.32881 -1.05664,5.00781c1.251,2.309 4.20051,2.79122 6.10352,1.19922l18.79492,-15.70313c0.371,-0.31 0.91025,-0.31 1.28125,0l18.79492,15.70313c0.748,0.626 1.6575,0.92969 2.5625,0.92969c1.173,0 2.33591,-0.51091 3.12891,-1.50391c1.377,-1.724 0.98597,-4.27055 -0.70703,-5.68555l-2.41992,-2.02148v-10.19922c0,-1.473 -1.19402,-2.66797 -2.66602,-2.66797h-2.66602c-1.473,0 -2.66797,1.19497 -2.66797,2.66797v3.51367l-10.79492,-9.01953c-0.928,-0.7755 -2.06608,-1.16211 -3.20508,-1.16211zM35.99609,22.92578l-22,18.37695v8.69727c0,4.418 3.582,8 8,8h28c4.418,0 8,-3.582 8,-8v-8.69727zM32,38h8c1.105,0 2,0.895 2,2v10h-12v-10c0,-1.105 0.895,-2 2,-2z">
                                        </path>
                                    </g>
                                </g>
                            </svg></button><button class="cibai"><img
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAACqklEQVR4nO2ZzYtPURiAj282k69QTDKl8RGjbKw0GzIpC4WYkp1SStnR5C+QFYqUzMJXlI+YWQyzk0iRaIwYsjATGWZiGOPR6R5109x7z7nnvfce+T3b33vf9z6d3z0f71GqRo3/B2AW0AY8BL4A34E+4AzQpP4FgOXAW5IZBQ4UUXgpcBDoAJ4BQ8Aw8Bw4DixzyDUVeGFeWI/ADmAeMBPYBDyJCbVICSwC2oFfpPMD2GeZs9U8802PzDi/zwc+mphuCYlVwAD2aNkbwC5gYkreUya+KyXmiokZ8pWod5T4m25gdkLuBmAtsDil/mWTZ8BX5Cr+dKWNTBLAHGDQ5OhQnh921jdhy1bH2guB++ZZ/Q4bfET07CTFTYe6m4EPsWcP55YwCS8IinwGJljU3Bn7F/QDW7wkTNI/QyvFXItvYtjEPtJrireESawXPEkaMurticWuEJEwiR8Li9Rn1GszcYNiEibxXUGJn8DkjHrbgEt6oZQW0XsnKfpEX84FYK+gyG1VFcA6QZFDFvUagdPAsawZzlWkpWSRp7H4dkmRa4IiLy3qfYrF35EUuSco8t6i3n5zntEbxY2SIhcFRTota07LmqbziOwWFLE6NRYCMEX/VwUkHgDTi3lLtwaB3oXmZQSoUyFA1HQo9NsoBaDZQ2S7Cgmic7crevc8SYUEsCTWCLBBtz3XqBDB7XzSr0IF6HEQkT0cSQK8cRAZUSFC1Pv9ihsrVUgQtU313YUrPUHIEF3AHHGcrcZb2U/oWa8KgUbgZKzHJMGo2SGsLutoex0Yozh0F7ETWF+EQB1wTrBhbcv5pCuHvCt2L9Xx2uW6LklCX229onreZXUhyzzK+nIrr0QT4dGcR+Qo4XG26lZPab2vrGZYKIwBM5TjuhEqC6xFaqhw+A18efUnIykOVwAAAABJRU5ErkJggg=="
                                width="20px"></button><button class="cibai"><img
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAADbklEQVR4nO2ZTUhVQRTHX5YhZQolGRaUBi2MIFoUFaSLpLBNBIFFBUGLICIoDbSNRBG0Sd2UFkUbidJIiFYtoqKPVUqlFUERlUalgtKX4S9Gz6PpOTP33vfufRm9P7zFmzlz5vzvnJlzzkwslkEGGWSQwb8CYBHQCgzwGx+ABiDXx/idQA/wU8Z+Ax4AlelhMG5EEdCHHU+AmY7xJx1jR4Ft6SLSIZN2A6XSNgVYDfRKX5Nl7DoxVuEAkCPt+cBZae8H5kZNYrbmDqsM/ds1Y6Yb+i9I/1VD3zTgpfTviZLEMuA86cEjYBOQHSaBQqBNc4l04iOwF8gK43R6zd/HTWBGsiSygYdMHlwHpiZDZD+TDzuSIfLCokwFwWb5DYZoZK2KP0CdQ6YnKIkFDhLFmlxJiGTGMgJglofcwiBENluUnDHItoRERK1ELnDEQ25LECLHLEqaQyZic6dah5sdD0Jkq8O1SjS5xSm6ls2dci3tCkd9ExElpyyTD8oqtISwP2zuVGdpv+s72qvAI0mgiiN3SB+8Ti2VkBYF3ejVWsoez2ijhsudRoAy6S9XeZgfIvUysFz+l8l/J7TxXrDFIdepVZ1QC9UHqTf64ksJHAqJSDJxqE1zdbVHFDr8EHmrKbmv6gpRdNlFwKDHhNMGObUyNjwH8kSuSWt/40WiwKCsUfrUsj9NkYgpDsUrw0QMAUtFpsrQX+AiUmFRWiX9pTLBBHgQSCYOVYnMUmDY0L/eReSwRemwx9cJstn9xKEG0ZUHPLPI1LiIXHIYoLLhfJFT1z5R4Z62L6845FpdRNRdU9ATJEz0aidljYdst41EjnZD4sLYkgLzgHeEh8Sg5xW7RuLXSYlEVvicUJGtkDFrgB+Eg4PaB3rvc8xyE5FdASZV16PzZVw1qeOa5rK3Uyp9Pa4yTRgLlrEQwZ9Bzw9OuFITvxjV040QSKijNqibTkxVgK6ASm6FRUKzoT2gDZ0mJUGLpN0RENkQ0IYBkxJTGmDDJ1U3REAkS275/WLIpKQzgIJ9YZPQ7KgMYEeXraDyg8fqCSAqIgrADZ+2TLxRAeZ4vETFn8hWxiIGUAx89rBFvcEU2hSsdWz6L6qej5pEHPIC1u+wZWPMx9e4KG8T34FXwDlgSSzNYLxGb5RK8at85PZ4SZFBBhn8h/gFJ2xCgRdxvW4AAAAASUVORK5CYII="
                                width="20px"></button><button class="cibai"><img
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEIAAABCCAYAAADjVADoAAAACXBIWXMAAAsTAAALEwEAmpwYAAAEkklEQVR4nO2ba6hVRRTHJ+0l9lTUyqxu1IdKJTBEKgoKokwtLCnrKkVdzUQttRKKoCLyg/Sl7AERRUWQvcjqFhiE19SLNxCNKCKtBHsoPnqZdPUXw5m6Na3Ze2bvPfvu49k/ON/Wmf+atWfPY83aStXU1NRUBGAgcDYwCZgHLAGWAg8Ci4DpwDhgsDrUAE4AOoC3gF348SewFngYOEc1M8AY4GVgH/npBm4ABqhmATgNeB04SPF8AVylqgxwGHAX8CvxWQEMVVUDOBF4x7MTn5tXRk+Qs4F2YJaZLJ8GVgN/eLTzLTBBVQXgFGBzitMbgfnAyZ5tDgKmAG+YidOFnn+ujd/LFICRwJYER3uAK3NqnAk8DxxwaPQCN6r+AhgCfJbwpPQIGFig3gQzWUrsB64oSssbvYwBnQ6n9AgZG0n3GOA1h+4ePXpi6DoxO0KJzb7zQM6H8ETCq3hkTP1/AM5ybJK+jh0Ea6l+zhGMJaokJzoFcb13OLcUB/r8OBxY4/BlVGzxCx1PoSOqsNufUWZusHkytvBKQbRLD9Wowsk+6dXJRr+6I2LuGXoF0YuiCIYd7b8S/FoUS/A+QexjVQGAOYJvG2OJdQli7aoCAMcBvwn+nV600GCze/s3+9MySfqEmJZDMIkbH5vEXao5l9jcoooEuFgQWZ0ym39q7H4ALhdsRgDrjM0OYKJgMwxYb2z2JJ0pgDsFH5/K2fX/AtwmiCxLsH/Rst0m2Cy3bHbaTx143LLRw/8oh+YFgo8fqSIBHg3ZO+hJ1LLVJ8ejPZbiIZaNdK4YmTBP2GwtMAxKOfb2UwLW9pWCze2WzSrB5ibLZm2Kn/aEuTtHt/8P8IIQiMtSzgI66/SmGU3HOmxuNTY6pX+8o612MxEus0eMYPu95WOvKgoa2aJVyPwCvKvfz8IEw/0bD7xnfJGYYb+WWUSuF6IsoZfSqwvrnb9/k4RlXeK7pFc5TeQRwvixzBsqk6T5KcA/fb1wf6jIXLJRWiIVuC6jj7N8BdqA3zOK3B09An1+Lszoo85XnOEj8CzZuaeUKDT8vDeHn8t9sj57WyAQuxPPLsD5ORpvpkCQmGmnsRy1SiAmJjU+rYUCMa0ORIM6EIY6ED6BmErrzBFTQ1Nyh2ogLklq/KSctU/NEgjdx+FpAt0tEIgNPgIzWyAQM3zrD7ozCswuJQoNP3WaLwtd3vWawKnA9gwiY6JHoM/H8zLMZ9/oOtBQoTZgU4DIimi9dvv4SoB/PV55CAl9mQIs9shbvi1lqmOjk7LAqykjYxuwwHUxFCo4wBSJ6ALRh0z6famZsMZnaO8Ikw7sMcWlOmu0Abgji8MmySwxvbL12zSqdD9JeIJrQsuLTSWvzXpVZYAPSOf9gPY6HK9GtvR9GeiiUPzpNHefrp/+/uNLx3839Wc5UyrAM8TnYL9U4YYAfFhCIB5TVYfGhW8seoNvsvoL8h+dJX4GXgJGq2YBGG4cT0OXCV1qvvhL+rUV+QVAqeg6qIRvL/4e4jerVgCYbLa+0vX9NaqVoHFO0BdKD5hi1smlfWJQU1NTo8L4C6jU+z6Yz5xqAAAAAElFTkSuQmCC"
                                width="20px"></button></div>
                </a><br>
                <div><a href="https://t.ly/pl777" target="_blank"
                        rel="noopener noreferrer nofollow"><amp-img height="185" width="250" alt="{$folderName}"
                            src="https://www.deadpool898.store/assets/img/banner-slt.jpg"></amp-img></a>
                </div>
                <div class="kiw-kiw"><a href="https://t.ly/pl777" target="_blank"
                        rel="noopener noreferrer nofollow"><button class="bca2"><strong>SESUAP NASI! ✔️</strong>
                            <div id="container-stars">
                                <div id="stars"></div>
                            </div>
                            <div id="glow">
                                <div class="circle"></div>
                                <div class="circle"></div>
                            </div>
                        </button></a><br><a href="https://t.ly/pl777" target="_blank"
                        rel="noopener noreferrer nofollow" class="gacore contole">DAFTAR</a><a
                        href="https://t.ly/pl777" target="_blank" rel="noopener noreferrer nofollow"
                        class="gacore contole">LOGIN</a><a href="https://t.ly/pl777" target="_blank"
                        rel="noopener noreferrer nofollow" class="gacore contole">RTP LIVE</a></div>
            </div>
            <span style="text-align:center">
            <p>SLOT Gacor merupakan link situs slot gacor server thailand yang gampang menang dan maxwin dengan informasi menarik tentang slot online yang menawarkan...</p>
            </span>
            <br>
            <span style="text-align:center">Situs Resmi Terpercaya Depo Cepat Dan WD Pasti Bayar Full</span>
            <br>
        </div>
    </main>
</body>
</html>
HTML;

file_put_contents("{$folder}/amp.html", $ampContent);
}
?>
