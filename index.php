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
<body>
    <div id="preloader"></div>
    <?php include("header.php") ?>
    <main>
        <section class="section-image light section-bottom-layer" style="background-image:url('media/bg.svg')">
            <div class="container">
                <hr class="space" />
                <div class="row">
                    <div class="col-lg-6" data-anima="fade-in" data-time="1000">
                        <hr class="space-lg hidden-md" />
                        <h1>
                            Layanan Aplikasi Keuangan Online
                        </h1>
                        <p>
                            Kelola dan Kontrol Keuangan Perusahaan Anda dengan Laporan Keuangan Secara Realtime dan Tersistem
                        </p>
                        <a href="https://api.whatsapp.com/send?phone=6282137374862" class="btn btn-sm btn-circle btn-border text-bold shadow-1 full-width-sm" target="_blank">Daftar Sekarang</a><span class="space"></span>
                        <hr class="space-xs" />
                    </div>
                    <div class="col-lg-6" data-anima="fade-bottom" data-time="1000">
                        <img src="media/phone-1.png" alt="" />
                    </div>
                </div>
            </div>
        </section>
        <section id="overview" class="section-base">
            <div class="container">
                <hr class="space hidden-md" />
                <div class="row">
                    <div class="col-lg-5 order-md-first">
                        <h2>Aplikasi Keuangan Untuk Bisnis Anda</h2>
                        <p>
                            Aplikasiku merupakan sebuah Sistem Informasi keuangan sederhana berbasis Website yang di tujukan untuk Usaha Kecil dan Menengah termasuk pengusaha Franchise.
                        </p>
                        <p>
                            Aplikasiku di bangun berdasarkan kebutuhan UKM akan standar pengelolaan sistem informasi keuangan yang telah kami sesuaikan dengan kebutuhan, sehingga laporan yang disajikan sesuai dengan kebutuhan serta tersistem dengan baik dan benar. Hal ini bertujuan untuk meminimalisir resiko kerugian serta mengetahui perkembangan usaha secara realtime
                        </p>
                    </div>
                    <div class="col-lg-7">
                        <h2>Fitur</h2>
                        <hr class="space hidden-md" />
                        <div class="grid-list" data-columns="4" data-columns-xs="1" data-anima="fade-bottom" data-timeline="asc" data-timeline-time="300" data-time="1000">
                            <div class="grid-box">
                                <div class="grid-item anima">
                                    <div class="cnt-box cnt-box-top-icon">
                                        <i class="im-bar-chart"></i>
                                        <div class="caption">
                                            <h2>Penjualan</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-item anima">
                                    <div class="cnt-box cnt-box-top-icon">
                                        <i class="im-wallet-2"></i>
                                        <div class="caption">
                                            <h2>Jurnal Kas</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-item anima">
                                    <div class="cnt-box cnt-box-top-icon">
                                        <i class="im-compass"></i>
                                        <div class="caption">
                                            <h2>Satuan Produk</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-item anima">
                                    <div class="cnt-box cnt-box-top-icon">
                                        <i class="im-full-basket"></i>
                                        <div class="caption">
                                            <h2>Produk & Stok</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-list" data-columns="4" data-columns-xs="1" data-anima="fade-bottom" data-timeline="asc" data-timeline-time="300" data-time="1000" style="margin-top:50px">
                            <div class="grid-box">
                                <div class="grid-item anima">
                                    <div class="cnt-box cnt-box-top-icon">
                                        <i class="im-tag-2"></i>
                                        <div class="caption">
                                            <h2>Perkiraan Jurnal</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-item anima">
                                    <div class="cnt-box cnt-box-top-icon">
                                        <i class="im-lock"></i>
                                        <div class="caption">
                                            <h2>Ganti Password</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-item anima">
                                    <div class="cnt-box cnt-box-top-icon">
                                        <i class="im-shop-2"></i>
                                        <div class="caption">
                                            <h2>Konfigurasi</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-item anima">
                                    <div class="cnt-box cnt-box-top-icon">
                                        <i class="im-optimization"></i>
                                        <div class="caption">
                                            <h2>Report</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="gallery" class="section-base section-full-width align-center">
                <hr class="space" />
                <ul class="slider" data-options="type:carousel,perView:5,perViewSm:2,perViewXs:1,focusAt:center,gap:0,nav:true,controls:out,autoplay:3000">
                    <li>
                        <img src="media/phone-screen-1.png" alt="" />
                    </li>
                    <li>
                        <img src="media/phone-screen-2.png" alt="" />
                    </li>
                    <li>
                        <img src="media/phone-screen-3.png" alt="" />
                    </li>
                    <li>
                        <img src="media/phone-screen-4.png" alt="" />
                    </li>
                    <li>
                        <img src="media/phone-screen-5.png" alt="" />
                    </li>
                    <li>
                        <img src="media/phone-screen-6.png" alt="" />
                    </li>
                </ul>
                <hr class="space" />
            </div>
        </section>
        <section id="features" class="section-base section-color">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6" data-anima="fade-left" data-time="1000">
                        <img class="margin-23" src="media/hp1.jpg" alt="" />
                    </div>
                    <div class="col-lg-6 col-md-6" data-anima="fade-right" data-time="1000">
                        <h2>Mudah, Praktis dan Tersistem</h2>
                        <p>
                            Aplikasiku di design dengan system yang sangat sederhana. Hal ini agar mudah dipahami dan digunakan oleh UKM terlebih bagi UKM yang masih awam dengan pembukuan.
                        </p>
                    </div>
                </div>
                <hr class="space-sm" />
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6" data-anima="fade-left" data-time="1000">
                        <hr class="space-sm visible-md" />
                        <h2>Fitur Keuangan Yang Mudah</h2>
                        <p>
                            Sistem aplikasiku sangat mudah baik untuk system transaksi, laporan keuangan, pengeluaran maupun persediaan. Laporan yang disajikannya sederhana agar mempermudah UKM saat menganalisa keuangan.
                        </p>
                    </div>
                    <div class="col-lg-6 col-md-6" data-anima="fade-right" data-time="1000">
                        <img class="margin-23" src="media/hp2.jpg" alt="" />
                    </div>
                </div>
            </div>
        </section>
        <section class="section-base section-color">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6" data-anima="fade-left" data-time="1000">
                        <img class="margin-23" src="media/hp3.jpg" alt="" />
                    </div>
                    <div class="col-lg-6 col-md-6" data-anima="fade-right" data-time="1000">
                        <h2>Kapanpun, Apapun dan Dimanapun</h2>
                        <p>
                            Anda dapat dengan mudah memantau perkembangan serta laporan harian usaha Anda tanpa harus di depan komputer, karena dapat dilakukan dengan smartphone.
                        </p>
                    </div>
                </div>
                <hr class="space-sm" />
            </div>
        </section>
    </main>
    <i class="scroll-top-btn scroll-top show"></i>
    <footer class="footer-parallax light">
        <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h2>Unduh aplikasi sekarang juga.</h2>
                        <p>
                            Jl. Grompol -Jambangan Km. 1,5 Krebet, Masaran, Sragen <br>
                            info@ichwan-ms.com <br>
                            Telp. +62271 688 2958 
                        </p>
                    </div>
                    <div class="col-lg-6 align-right align-left-md">
                        <a class="btn-store" href="https://play.google.com/store/apps/details?id=com.oratakashi.aplikasiku" target="_blank"><img src="media/store-google-white.png" alt="" /></a>
                        <!-- <a class="btn-store" href="index-food.html#"><img src="media/store-apple-white.png" alt="" hidden/></a> -->
                    </div>
                </div>
            </div>
        <div class="footer-bar">
            <div class="container">
                <span>© Aplikasiku.co.id <?= date("Y") ?></span>
                <span><img src="media/logo.png" alt="" /></span>
            </div>
        </div>
        <link rel="stylesheet" href="themekit/media/icons/iconsmind/line-icons.min.css">
        <script src="themekit/scripts/parallax.min.js"></script>
        <script src="themekit/scripts/glide.min.js"></script>
        <script src="themekit/scripts/magnific-popup.min.js"></script>
        <script src="themekit/scripts/tab-accordion.js"></script>
        <script src="themekit/scripts/imagesloaded.min.js"></script>
        <script src="themekit/scripts/contact-form/contact-form.js"></script>
        <script src="themekit/scripts/progress.js"></script>
        <script src="media/custom.js"></script>
    </footer>
</body>
</html>