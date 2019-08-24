<?php include_once dirname(__FILE__).'/../layouts/header.php';?>
 <!-- ##### Breadcrumb Area Start ##### -->
 <section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(<?=$images;?>bg-img/49.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Single Post</h2>
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
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Features</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Single Video</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Post Details Area Start ##### -->
    <section class="post-details-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="single-video-area bg-white mb-30 box-shadow">
                        <iframe src="<?=str_replace("watch?v=","embed/",$video['description']);?>?autoplay=1" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <!-- Video Meta Data -->
                        <div class="video-meta-data d-flex align-items-center justify-content-between">
                            <h6 class="total-views"><?=$video['dibaca'];?> Views</h6>
                            <div class="like-dislike d-flex align-items-center">
                                <button type="button"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834 Like</button>
                                <button type="button"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i> 34 Dislike</button>
                                <p><i class="fa fa-comments-o" aria-hidden="true"></i> 234 Comments</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <!-- Post Details Content Area -->
                <div class="col-12">
                    

                    <!-- Related Post Area -->
                    <div class="related-post-area bg-white mb-30 px-30 pt-30 pb-0 box-shadow">
                        <!-- Section Title -->
                        <div class="section-heading">
                            <h5>Video Lainnya</h5>
                        </div>

                        <div class="row">
                            <!-- Single Blog Post -->
                        <?php foreach ($lainnya as $lainnya) {?>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="single-blog-post style-4 mb-30">
                                    <div class="post-thumbnail">
                                        <img src="<?=$tim.$getupload.$lainnya['thumbnail'];?>&w=600&h=400&zc=1" alt="">
                                    </div>
                                    <div class="post-content">
                                        <a href="<?=site_url('video/'.$lainnya['idartikel'].'/'.strtolower(url_title($lainnya['judul_artikel'])));?>" class="post-title"><?=ucwords($lainnya['judul_artikel']);?></a>
                                        <div class="post-meta d-flex">
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> <?=$lainnya['dibaca'];?></a>
                                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- ##### Post Details Area End ##### -->
    <?php include_once dirname(__FILE__).'/../layouts/footer.php';?>