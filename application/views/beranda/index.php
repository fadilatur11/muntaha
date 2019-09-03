<?php include_once dirname(__FILE__).'/../layouts/header.php';?>
<!-- ##### Hero Area Start ##### -->
<div class="hero-area owl-carousel">
        <!-- Single Blog Post -->
    <?php foreach ($headline as $headline) {?>
        <div class="hero-blog-post bg-img bg-overlay" style="background-image: url(<?=$tim.$getupload.$headline['thumbnail'];?>&w=800&zc=1);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Post Contetnt -->
                        <div class="post-content text-center">
                            <div class="post-meta" data-animation="fadeInUp" data-delay="100ms">
                                <?php $date = $headline['tgl_pub'];?>
                                <a href="#"><?=date('F j, Y', strtotime($date));?></a>
                                <a href="<?=site_url('kategori/'.$headline['urltitle']);?>"><?=ucwords($headline['kategori']);?></a>
                            </div>
                            <a href="<?=site_url('detail/'.$headline['urltitle'].'/'.$headline['idartikel'].'/'.strtolower(url_title($headline['judul_artikel'])));?>" class="post-title" data-animation="fadeInUp" data-delay="300ms"><?=ucwords($headline['judul_artikel']);?></a>
                            <!-- <a href="video-post.html" class="video-play" data-animation="bounceIn" data-delay="500ms"><i class="fa fa-play"></i></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php }?>
    </div>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Mag Posts Area Start ##### -->
    <section class="mag-posts-area d-flex flex-wrap">

        <!-- >>>>>>>>>>>>>>>>>>>>
         Post Left Sidebar Area
        <<<<<<<<<<<<<<<<<<<<< -->
        <div class="post-sidebar-area left-sidebar mt-30 mb-30 bg-white box-shadow">
            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Terpopuler</h5>
                </div>

                <!-- Single Blog Post -->
            <?php foreach ($populer as $populer) {?>
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="<?=$tim.$getupload.$populer['thumbnail'];?>&w=600&h=600&zc=1" alt="<?=ucwords($populer['judul_artikel']);?>">
                    </div>
                    <div class="post-content">
                        <a href="<?=site_url('detail/'.$populer['urltitle'].'/'.$populer['idartikel'].'/'.strtolower(url_title($populer['judul_artikel'])));?>" class="post-title"><?=ucwords($populer['judul_artikel']);?></a>
                        <div class="post-meta d-flex justify-content-between">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> <?=$populer['dibaca'];?></a>
                            <!-- <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a> -->
                        </div>
                    </div>
                </div>
            <?php }?>
            </div>

            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget">
                <a href="#" class="add-img"><img src="<?=$images;?>bg-img/add.png" alt=""></a>
            </div>

            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Baru dilihat</h5>
                </div>

                <!-- Single Blog Post -->
            <?php foreach ($recent as $recent) {?>
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="<?=$tim.$getupload.$recent['thumbnail'];?>&w=600&h=600&zc=1" alt="<?=ucwords($recent['judul_artikel']);?>">
                    </div>
                    <div class="post-content">
                        <a href="<?=site_url('detail/'.$recent['urltitle'].'/'.$recent['idartikel'].'/'.strtolower(url_title($recent['judul_artikel'])));?>" class="post-title"><?=ucwords($recent['judul_artikel']);?></a>
                        <div class="post-meta d-flex justify-content-between">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> <?=$recent['dibaca'];?></a>
                            <!-- <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a> -->
                        </div>
                    </div>
                </div>
            <?php }?>

            </div>
        </div>

        <!-- >>>>>>>>>>>>>>>>>>>>
             Main Posts Area
        <<<<<<<<<<<<<<<<<<<<< -->
        <div class="mag-posts-content mt-30 mb-30 p-30 box-shadow">
            <!-- Trending Now Posts Area -->
            <div class="trending-now-posts mb-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Nahwu</h5>
                </div>

                <div class="trending-post-slides owl-carousel">
                    <!-- Single Trending Post -->
                <?php foreach ($nahwu as $nahwu) {?>
                    <div class="single-blog-post style-4">
                        <div class="post-thumbnail">
                            <img src="<?=$tim.$getupload.$nahwu['thumbnail'];?>&w=600&h=400&zc=1" alt="<?=ucwords($nahwu['judul_artikel']);?>">
                            <a href="<?=site_url('detail/'.$nahwu['urltitle'].'/'.$nahwu['idartikel'].'/'.strtolower(url_title($nahwu['judul_artikel'])));?>"></a>
                            <!-- <span class="video-duration">09:27</span> -->
                        </div>
                        <div class="post-content">
                            <a href="<?=site_url('detail/'.$nahwu['urltitle'].'/'.$nahwu['idartikel'].'/'.strtolower(url_title($nahwu['judul_artikel'])));?>" class="post-title"><?=ucwords($nahwu['judul_artikel']);?></a>
                            <div class="post-meta d-flex">
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> <?=$nahwu['dibaca'];?></a>
                                <!-- <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a> -->
                            </div>
                        </div>
                    </div>
                <?php }?>
                </div>
            </div>

            <!-- Feature Video Posts Area -->
            <div class="feature-video-posts mb-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Matnu Al-Lughoh</h5>
                </div>

                <div class="featured-video-posts">
                    <div class="row">
                        <div class="col-12 col-lg-7">
                            <!-- Single Featured Post -->
                        <?php foreach ($sb as $sb) {?>
                            <div class="single-featured-post">
                                <!-- Thumbnail -->
                                <div class="post-thumbnail mb-50">
                                    <img src="<?=$tim.$getupload.$sb['thumbnail'];?>&w=600&h=400&zc=1" alt="">
                                    <!-- <a href="video-post.html" class="video-play"><i class="fa fa-play"></i></a> -->
                                </div>
                                <!-- Post Contetnt -->
                                <div class="post-content">
                                    <div class="post-meta">
                                    <?php $date = $sb['tgl_pub'];?>
                                        <a href="#"><?=date('F j, Y', strtotime($date));?></a>
                                        <a href="<?=site_url('kategori/'.$sb['urltitle']);?>"><?=ucwords($sb['kategori']);?></a>
                                    </div>
                                    <a href="<?=site_url('detail/'.$sb['urltitle'].'/'.$sb['idartikel'].'/'.strtolower(url_title($sb['judul_artikel'])));?>" class="post-title"><?=ucwords($sb['judul_artikel']);?></a>
                                    <p><?=word_limiter($sb['description'],30);?></p>
                                </div>
                                <!-- Post Share Area -->
                                <!-- <div class="post-share-area d-flex align-items-center justify-content-between"> -->
                                    <!-- Post Meta -->
                                    <!-- <div class="post-meta pl-3">
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                    </div> -->
                                    <!-- Share Info -->
                                    <!-- <div class="share-info">
                                        <a href="#" class="sharebtn"><i class="fa fa-share-alt" aria-hidden="true"></i></a> -->
                                        <!-- All Share Buttons -->
                                        <!-- <div class="all-share-btn d-flex">
                                            <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                            <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            <a href="#" class="google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                            <a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        </div>
                                    </div> -->
                                <!-- </div> -->
                            </div>
                        <?php ;}?>
                        </div>

                        <div class="col-12 col-lg-5">
                            <!-- Featured Video Posts Slide -->
                            <div class="featured-video-posts-slide owl-carousel">
                                <div class="single--slide">
                                    <!-- Single Blog Post -->
                                <?php foreach ($sb1 as $sb1) {?>
                                    <div class="single-blog-post d-flex style-3">
                                        <div class="post-thumbnail">
                                            <img src="<?=$tim.$getupload.$sb1['thumbnail'];?>&w=600&h=400&zc=1" alt="">
                                        </div>
                                        <div class="post-content">
                                            <a href="<?=site_url('detail/'.$sb1['urltitle'].'/'.$sb1['idartikel'].'/'.strtolower(url_title($sb1['judul_artikel'])));?>" class="post-title"><?=ucwords($sb1['judul_artikel']);?></a>
                                            <div class="post-meta d-flex">
                                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> <?=$sb1['dibaca'];?></a>
                                                <!-- <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a> -->
                                            </div>
                                        </div>
                                    </div>
                                <?php }?>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Most Viewed Videos -->
            <div class="most-viewed-videos mb-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Kajian Irtaqi</h5>
                </div>

                <div class="most-viewed-videos-slide owl-carousel">

                    <!-- Single Blog Post -->
                <?php foreach ($kajian as $kajian) {?>
                    <div class="single-blog-post style-4">
                        <div class="post-thumbnail">
                            <img src="<?=$tim.$getupload.$kajian['thumbnail'];?>&w=600&h=400&zc=1" alt="<?=ucwords($kajian['judul_artikel']);?>">
                            <a href="<?=site_url('video/'.$kajian['idartikel'].'/'.strtolower(url_title($kajian['judul_artikel'])));?>" class="video-play"><i class="fa fa-play"></i></a>
                            <!-- <span class="video-duration">09:27</span> -->
                        </div>
                        <div class="post-content">
                            <a href="<?=site_url('video/'.$kajian['idartikel'].'/'.strtolower(url_title($kajian['judul_artikel'])));?>" class="post-title"><?=ucwords($kajian['judul_artikel']);?></a>
                            <div class="post-meta d-flex">
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> <?=$kajian['dibaca'];?></a>
                                <!-- <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a> -->
                            </div>
                        </div>
                    </div>
                <?php }?>

                </div>
            </div>

            <!-- Sports Videos -->
            <div class="sports-videos-area">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Shorof</h5>
                </div>

                <div class="sports-videos-slides owl-carousel mb-30">
                    <!-- Single Featured Post -->
                <?php foreach ($shorof as $shorof) {?>
                    <div class="single-featured-post">
                        <!-- Thumbnail -->
                        <div class="post-thumbnail mb-50">
                            <img src="<?=$tim.$getupload.$shorof['thumbnail'];?>&w=600&h=400&zc=1" alt="<?=ucwords($shorof['judul_artikel']);?>">
                            <!-- <a href="video-post.html" class="video-play"><i class="fa fa-play"></i></a> -->
                        </div>
                        <!-- Post Contetnt -->
                        <div class="post-content">
                            <div class="post-meta">
                                <?php $date = $shorof['tgl_pub'];?>
                                <a href="#"><?=date('F j, Y', strtotime($date));?></a>
                                <a href="<?=site_url('kategori/'.$shorof['urltitle']);?>"><?=ucwords($shorof['kategori']);?></a>
                            </div>
                            <a href="<?=site_url('detail/'.$shorof['urltitle'].'/'.$shorof['idartikel'].'/'.strtolower(url_title($shorof['judul_artikel'])));?>" class="post-title"><?=ucwords($shorof['judul_artikel']);?></a>
                            <p><?=word_limiter($shorof['description'],15);?></p>
                        </div>
                        <!-- Post Share Area -->
                        <div class="post-share-area d-flex align-items-center justify-content-between">
                            <!-- Post Meta -->
                            <div class="post-meta pl-3">
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> <?=$shorof['dibaca'];?></a>
                                <!-- <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a> -->
                            </div>
                            <!-- Share Info -->
                            <div class="share-info">
                                <a href="#" class="sharebtn"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                <!-- All Share Buttons -->
                                <div class="all-share-btn d-flex">
                                    <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#" class="google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    <a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }?>
                </div>

                <div class="row">
                    <!-- Single Blog Post -->
                <?php foreach ($shorof1 as $shorof1) {?>
                    <div class="col-12 col-lg-6">
                        <div class="single-blog-post d-flex style-3 mb-30">
                            <div class="post-thumbnail">
                                <img src="<?=$images;?>bg-img/31.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="single-post.html" class="post-title"><?=ucwords($shorof1['judul_artikel']);?></a>
                                <div class="post-meta d-flex">
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> <?=$shorof1['dibaca'];?></a>
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

        <!-- >>>>>>>>>>>>>>>>>>>>
         Post Right Sidebar Area
        <<<<<<<<<<<<<<<<<<<<< -->
        <div class="post-sidebar-area right-sidebar mt-30 mb-30 box-shadow">
            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <!-- Social Followers Info -->
                <div class="social-followers-info">
                    <!-- Facebook -->
                    <a href="#" class="facebook-fans"><i class="fa fa-facebook"></i> 4,360 <span>Fans</span></a>
                    <!-- Twitter -->
                    <a href="#" class="twitter-followers"><i class="fa fa-twitter"></i> 3,280 <span>Followers</span></a>
                    <!-- YouTube -->
                    <a href="#" class="youtube-subscribers"><i class="fa fa-youtube"></i> 1250 <span>Subscribers</span></a>
                    <!-- Google -->
                    <a href="#" class="google-followers"><i class="fa fa-google-plus"></i> 4,230 <span>Followers</span></a>
                </div>
            </div>

            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Kategori</h5>
                </div>

                <!-- Catagory Widget -->
                <ul class="catagory-widgets">
                    <?php foreach ($kategori as $kategori) {?>
                    <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> <?=ucwords($kategori['kategori']);?></span>  </a></li>
                    <?php }?>
                </ul>
            </div>

            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget">
                <a href="#" class="add-img"><img src="<?=$images;?>bg-img/add2.png" alt=""></a>
            </div>

            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Hot Channels</h5>
                </div>

                <!-- Single YouTube Channel -->
                <div class="single-youtube-channel d-flex">
                    <div class="youtube-channel-thumbnail">
                        <img src="<?=$images;?>bg-img/14.jpg" alt="">
                    </div>
                    <div class="youtube-channel-content">
                        <a href="single-post.html" class="channel-title">TV Show</a>
                        <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Subscribe</a>
                    </div>
                </div>

                <!-- Single YouTube Channel -->
                <div class="single-youtube-channel d-flex">
                    <div class="youtube-channel-thumbnail">
                        <img src="<?=$images;?>bg-img/15.jpg" alt="">
                    </div>
                    <div class="youtube-channel-content">
                        <a href="single-post.html" class="channel-title">Game Channel</a>
                        <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Subscribe</a>
                    </div>
                </div>

                <!-- Single YouTube Channel -->
                <div class="single-youtube-channel d-flex">
                    <div class="youtube-channel-thumbnail">
                        <img src="<?=$images;?>bg-img/16.jpg" alt="">
                    </div>
                    <div class="youtube-channel-content">
                        <a href="single-post.html" class="channel-title">Sport Channel</a>
                        <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Subscribe</a>
                    </div>
                </div>

                <!-- Single YouTube Channel -->
                <div class="single-youtube-channel d-flex">
                    <div class="youtube-channel-thumbnail">
                        <img src="<?=$images;?>bg-img/17.jpg" alt="">
                    </div>
                    <div class="youtube-channel-content">
                        <a href="single-post.html" class="channel-title">Travel Channel</a>
                        <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Subscribe</a>
                    </div>
                </div>

                <!-- Single YouTube Channel -->
                <div class="single-youtube-channel d-flex">
                    <div class="youtube-channel-thumbnail">
                        <img src="<?=$images;?>bg-img/18.jpg" alt="">
                    </div>
                    <div class="youtube-channel-content">
                        <a href="single-post.html" class="channel-title">LifeStyle Channel</a>
                        <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Subscribe</a>
                    </div>
                </div>

            </div>

            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Newsletter</h5>
                </div>

                <div class="newsletter-form">
                    <p>Subscribe our newsletter gor get notification about new updates, information discount, etc.</p>
                    <form action="#" method="get">
                        <input type="search" name="widget-search" placeholder="Enter your email">
                        <button type="submit" class="btn mag-btn w-100">Subscribe</button>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### Mag Posts Area End ##### -->
    <?php include_once dirname(__FILE__).'/../layouts/footer.php';?>