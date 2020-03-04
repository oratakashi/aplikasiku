<?php
    function base_url($url = "")
    {
        $base_url = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
        $base_url .= "://".$_SERVER['HTTP_HOST'];
        $base_url .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
        return $base_url.$url;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikasiku.co.id | Layanan Aplikasi Keuangan Online</title>
    <meta name="description" content="">
    <script src="themekit/scripts/jquery.min.js"></script>
    <script src="themekit/scripts/main.js"></script>
    <link rel="stylesheet" href="themekit/css/bootstrap-grid.css">
    <link rel="stylesheet" href="themekit/css/style.css">
    <link rel="stylesheet" href="themekit/css/glide.css">
    <link rel="stylesheet" href="themekit/css/magnific-popup.css">
    <link rel="stylesheet" href="themekit/css/content-box.css">
    <link rel="stylesheet" href="themekit/css/contact-form.css">
    <link rel="stylesheet" href="themekit/css/media-box.css">
    <link rel="stylesheet" href="skin.css">
    <link rel="icon" href="media/favicon.png">
</head>
<body class="template-docs">
    <div id="preloader"></div>
    <?php include("header.php") ?>
    <header class="header-base" style="background-image:url('media/bg.svg')">
        <div class="container">
            <h1 style="color:white">Pendaftaran</h1>
            <h2 style="color:white">Silahkan isi form di bawah ini</h2>
        </div>
    </header>
    <main>
        <section class="section-base">
            <div class="container">
                <div class="row">
                    <iframe src="http://aplikasiku.co.id/ritel/webview/pendaftaran.php" height="1000px" width="500px">
                </div>
            </div>
        </section>
    </main>
    <i class="scroll-top-btn scroll-top show"></i>
    <footer class="light">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <h4>Company and team</h4>
                    <div class="menu-inner menu-inner-vertical">
                        <ul>
                            <li>
                                <a href="slider.html#">Company details and team</a>
                            </li>
                            <li>
                                <a href="slider.html#">News and blog</a>
                            </li>
                            <li>
                                <a href="slider.html#">Press area</a>
                            </li>
                            <li>
                                <a href="slider.html#">Affiliates and marketing</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h4>Help and support</h4>
                    <div class="menu-inner menu-inner-vertical">
                        <ul>
                            <li>
                                <a href="slider.html#">Help centre</a>
                            </li>
                            <li>
                                <a href="slider.html#">Feedbacks</a>
                            </li>
                            <li>
                                <a href="slider.html#">Request new features</a>
                            </li>
                            <li>
                                <a href="slider.html#">Contact us</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h4>Learn more</h4>
                    <div class="menu-inner menu-inner-vertical">
                        <ul>
                            <li>
                                <a href="slider.html#">Apps stores</a>
                            </li>
                            <li>
                                <a href="slider.html#">Partners</a>
                            </li>
                            <li>
                                <a href="slider.html#">Privacy and terms</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h4>Follow us</h4>
                    <div class="icon-links icon-social icon-links-grid social-colors">
                        <a class="facebook"><i class="icon-facebook"></i></a>
                        <a class="twitter"><i class="icon-twitter"></i></a>
                        <a class="linkedin"><i class="icon-linkedin"></i></a>
                        <a class="youtube"><i class="icon-youtube"></i></a>
                        <a class="instagram"><i class="icon-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bar">
            <div class="container">
                <span>© Codrop LTD 2019. Codrop is a powerful Landing Page App Template built with <a target="_blank" href="https://themekit.dev/code/">Themekit</a> by the <a target="_blank" href="https://schiocco.com/">Schiocco</a> Team. </span>
                <span><img src="../../media/logo-light.svg" /></span>
            </div>
        </div>
        <link rel="stylesheet" href="../../themekit/media/icons/iconsmind/line-icons.min.css">
        <script src="../../themekit/scripts/tab-accordion.js"></script>
        <script src="../../themekit/scripts/imagesloaded.min.js"></script>
        <script src="../../themekit/scripts/glide.min.js"></script>
    </footer>
</body>
</html>
