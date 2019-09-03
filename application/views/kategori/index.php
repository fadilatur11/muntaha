<?php include_once dirname(__FILE__).'/../layouts/header.php';?>
<!-- ##### Breadcrumb Area Start ##### -->
<section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(<?=$images;?>bg-img/41.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2><?=ucwords(str_replace("-"," ",$this->uri->segment(2)))?></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="mag-breadcrumb py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Beranda</a></li>
                            <li class="breadcrumb-item"><a href="#"><?=ucwords(str_replace("-"," ",$this->uri->segment(2)))?></a></li>
                            <!-- <li class="breadcrumb-item active" aria-current="page">Archive by Category “TRAVEL”</li> -->
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Archive Post Area Start ##### -->
    <div class="archive-post-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-8">
                    <div class="archive-posts-area bg-white p-30 mb-30 box-shadow">

                        <!-- Single Catagory Post -->
                        <?php foreach ($kategori as $kategori) {?>
                        <div class="single-catagory-post d-flex flex-wrap">
                            <!-- Thumbnail -->
                            <div class="post-thumbnail bg-img" style="background-image: url(<?=$tim.$getupload.$kategori['thumbnail'];?>&w=400&h=400&zc=1);">
                                <?php if ($kategori['id_category'] == 3) {?>
                                <a href="<?=site_url('video/'.$kategori['idartikel'].'/'.strtolower(url_title($kategori['judul_artikel'])));?>" class="video-play"><i class="fa fa-play"></i></a>
                                <?php }?>
                            </div>

                            <!-- Post Contetnt -->
                            <div class="post-content">
                                <div class="post-meta">
                                <?php $date = $kategori['tgl_pub'];?>
                                    <a href="#"><?=date('F j, Y', strtotime($date));?></a>
                                    <a href="#"><?=ucwords($kategori['kategori']);?></a>
                                </div>
                                <?php if ($kategori['id_category'] == 3) {?>
                                <a href="<?=site_url('video/'.$kategori['idartikel'].'/'.strtolower(url_title($kategori['judul_artikel'])));?>" class="post-title"><?=ucwords($kategori['judul_artikel']);?></a>
                                <?php }else{?>
                                    <a href="<?=site_url('detail/'.$kategori['urltitle'].'/'.$kategori['idartikel'].'/'.strtolower(url_title($kategori['judul_artikel'])));?>" class="post-title"><?=ucwords($kategori['judul_artikel']);?></a>
                                <?php }?>
                                <!-- Post Meta -->
                                <div class="post-meta-2">
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> <?=$kategori['dibaca'];?></a>
                                </div>
                                <p><?=word_limiter($kategori['description'],10);?></p>
                            </div>

                        </div>
                        <?php }?>

                        <!-- Pagination -->
                        <nav>
                            <ul class="pagination">
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i class="ti-angle-right"></i></a></li>
                            </ul>
                        </nav>

                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-5 col-xl-4">
                    <div class="sidebar-area bg-white mb-30 box-shadow">
                        <!-- Sidebar Widget -->
                        <div class="single-sidebar-widget">
                            <a href="#" class="add-img"><img src="<?=$images;?>bg-img/add2.png" alt=""></a>
                            </div>

                        <!-- Sidebar Widget -->
                        <div class="single-sidebar-widget p-30">
                            <!-- Section Title -->
                            <div class="section-heading">
                                <h5>Categories</h5>
                            </div>

                            <!-- Catagory Widget -->
                            <ul class="catagory-widgets">
                            <?php foreach ($section as $section) {?>
                                <li><a href="<?=site_url('kategori/'.$section['urltitle']);?>"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> <?=ucwords($section['kategori']);?></span></a></li>
                                <?php }?>
                            </ul>
                        </div>

                        <!-- Sidebar Widget -->
                        <div class="single-sidebar-widget">
                            <a href="#" class="add-img"><img src="<?=$images;?>bg-img/add2.png" alt=""></a>
                        </div>

                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Archive Post Area End ##### -->
    <?php include_once dirname(__FILE__).'/../layouts/footer.php';?>