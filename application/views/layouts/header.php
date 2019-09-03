<?php 
$scss = $this->config->item('scss');
$css = $this->config->item('css');
$images = $this->config->item('images');
$fonts = $this->config->item('fonts');
$js = $this->config->item('js');
$assets = $this->config->item('assets');
$getupload = $this->config->item('getupload');
$tim = $this->config->item('images_tim');
;?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->

    <?php if ($page == 'Detail') {?>
        <title><?=ucwords($detail['judul_artikel']);?> - Muntaha</title>
        <meta name="description" content="<?=$detail['gagasan'];?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Search Engine -->
        <meta name="description" content="<?=$detail['gagasan'];?> - Muntaha">
        <meta name="image" content="<?=$getupload.$detail['thumbnail'];?>">
        <!-- Schema.org for Google -->
        <meta itemprop="name" content="<?=ucwords($detail['judul_artikel']);?> - Muntaha">
        <meta itemprop="description" content="<?=$detail['gagasan'];?>">
        <meta itemprop="image" content="<?=$getupload.$detail['thumbnail'];?>">
        <!-- Twitter -->
        <meta name="twitter:card" content="summary">
        <meta name="twitter:title" content="<?=ucwords($detail['judul_artikel']);?> - Muntaha">
        <meta name="twitter:description" content="<?=$detail['gagasan'];?>">
        <meta name="twitter:site" content="<?=current_url();?>">
        <meta name="twitter:creator" content="@muntaha">
        <meta name="twitter:image:src" content="<?=$getupload.$detail['thumbnail'];?>">
        <!-- Open Graph general (Facebook, Pinterest & Google+) -->
        <meta name="og:title" content="<?=ucwords($detail['judul_artikel']);?> - Muntaha">
        <meta name="og:description" content="<?=$detail['gagasan'];?>">
        <meta name="og:image" content="<?=$getupload.$detail['thumbnail'];?>">
        <meta name="og:url" content="<?=current_url();?>">
        <meta name="og:site_name" content="Muntaha">
        <meta name="og:locale" content="id_ID">
        <meta name="og:type" content="website">
    <?php }else{?>
        <title>Muntaha</title>
    <?php }?>

    <!-- Favicon -->
    <link rel="icon" href="<?=$images;?>core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?=$assets;?>style.css">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Navbar Area -->
        <div class="mag-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="magNav">

                    <!-- Nav brand -->
                    <a href="index.html" class="nav-brand"><img src="<?=$images;?>core-img/logo.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Nav Content -->
                    <div class="nav-content d-flex align-items-center">
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li class="active"><a href="<?=site_url();?>">Home</a></li>
                                    <?php $kat = $this->Model_t_kategori->get();?>
                                    <?php foreach ($kat as $kat) {?>
                                    <li class="active"><a href="<?=strtolower(site_url('kategori/'.url_title($kat['kategori'])));?>"><?=strtoupper($kat['kategori']);?></a></li>
                                    <?php }?>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <div class="top-meta-data d-flex align-items-center">
                            <!-- Top Search Area -->
                            <div class="top-search-area">
                                <form action="<?=site_url('search');?>" method="post">
                                    <input type="search" name="keyword" id="topSearch" placeholder="Silahkan cari artikel ...">
                                    <button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>
                            <!-- Login -->
                            <a href="login.html" class="login-btn"><i class="fa fa-user" aria-hidden="true"></i></a>
                            <!-- Submit Video -->
                            <a href="submit-video.html" class="submit-video"><span><i class="fa fa-cloud-upload"></i></span> <span class="video-text">Submit Video</span></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->