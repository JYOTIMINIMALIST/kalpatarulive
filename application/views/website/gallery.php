<?php include('common.php'); $page='gallery-page'; ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Gallery | Kalpataru</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <?php include('header-css.php'); ?>
    <?php include('ga-code.php'); ?>
</head>
<body class="small-page">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]--> 
        <div class="page-content <?php echo $page; ?> position-relative gap_from_top">
            <div class="page-body">
                <?php include('header.php'); ?> 
                <!-- Main banner start-->
                <div class="common_banner backgroundImg position-relative" style="background-image:url('<?php echo $this->config->item('cdn_url'); ?>assets_web/images/gallery-banner.jpg');">
                    <div class="common_banner_text position-absolute">
                        <div class="container-fluid mainContainer h-100">
                            <div class="d-flex align-items-center h-100">
                                <h1 data-aos="fade" data-aos-offset="0" class="History-Pro mb-0">Gallery</h1>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery section start -->
                <div class="galleryPageSection">
                   <div id="gallery" class="project-inner-gallery-section no-overflow bigTitleAnimationSection">
                    <div class="gallery_content">
                        <!-- Gallery Images and videos tabs -->
                        <div class="galleryTabs d-flex justify-content-center" data-aos="fade" data-aos-offset="0" >
                            <div class="galleryTabInner nav nav-tabs" role="tablist">
                                <a class="galleryTab active" data-toggle="tab" href="#imagesGalleryTab">
                                    Images
                                </a>
                                <a class="galleryTab" data-toggle="tab" href="#videoGalleryTab">
                                    Videos
                                </a>
                            </div>
                        </div>

                        <div class="imagesAndVidContainer tab-content" data-aos="fade" data-aos-offset="0" data-aos-delay="200">
                            <!-- Images Gallery start-->
                            <div id="imagesGalleryTab" class="imagesGalleryContainer tab-pane active">
                                <div class="gallerySlider">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper align-items-center">
                                            <?php
                                            foreach ($gallery as $key => $value) {
                                              if ($value->type!='image') {
                                                continue;
                                            }
                                            ?>
                                            <div class="swiper-slide">
                                                <div class="gallerySlideBox">
                                                    <img src="<?=$value->thumbnail?>" class="w-100">
                                                    <div class="galleryDesc">
                                                        <h2><?=$value->title?></h2>
                                                        <div class="galler_btn">
                                                            <a class="icon-button" href="<?=$value->project_url?>"><div class="round-button"><div class="circle"></div><i class="kalpataru-icon-arrow-right"></i></div>EXPLORE PROJECT</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                    <div class="swiper-navigation-container">
                                        <div class="swiper-button-prev"></div>
                                        <div class="swiper-button-next"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end -->

                        <!-- Videos Gallery start-->
                        <div id="videoGalleryTab" class="videosGalleryContainer tab-pane fade">
                            <div class="gallerySlider">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper align-items-center">
                                        <?php
                                        foreach ($gallery as $key => $value) {
                                          if ($value->type=='image') {
                                            continue;
                                        }
                                        ?>
                                        <div class="swiper-slide">
                                            <div class="gallerySlideBox">
                                                <a class="d-block" data-fancybox="project_inner_gallery_videos" href="<?=$value->video_url?>">
                                                    <div class="galleryImg">
                                                        <img src="<?=$value->thumbnail?>" class="w-100">
                                                    </div>
                                                </a>
                                                <div class="galleryDesc">
                                                    <h2><?=$value->title?></h2>
                                                    <div class="galler_btn">
                                                        <a class="icon-button" href="<?=$value->project_url?>"><div class="round-button"><div class="circle"></div><i class="kalpataru-icon-arrow-right"></i></div>EXPLORE PROJECT</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                                <div class="swiper-pagination"></div>
                                <div class="swiper-navigation-container">
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Videos Gallery end-->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Gallery section end -->
</div>
<?php include('footer.php'); ?>         
</div>
<?php include('footer-js.php'); ?>
<script type="text/javascript">
    $(".nav-highlight").removeClass('active');
    $(".nav-gallery").addClass('active');
</script>
</body>
</html>
