<?php include('common.php'); $page='completed_project_page'; ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Completed Projects | Kalpataru </title>
    <meta name="description" content="Kalpataru Group has completed its residential projects in Mumbai, covering areas such as Worli, Ghatkopar, Peddar Road, Kandivali and Chembur.">
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
                <div class="common_banner backgroundImg position-relative">
                   <!-- <img class="w-100 d-none d-lg-block allDesktopBanner" src="<?php echo base_url() ?>assets_web/images/residentialBanner.jpg">
                    <img class="w-100 d-block d-lg-none allMobileBanner" src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/home-banner-mobile-01.jpg">-->
                    
                  <video class="w-100 d-none d-lg-block" loop autoplay muted="" playsinline="">
                     <source src="https://d3smrpuo7zidc0.cloudfront.net/kalpataru/press/1630325551.mp4" type="video/mp4">
                 </video>
                                                        
                        <video class="w-100 d-block d-lg-none mobileHomeVid" loop autoplay muted="" playsinline="">
                                                            <source src="https://d3smrpuo7zidc0.cloudfront.net/kalpataru/press/1630325678.mp4" type="video/mp4">
                                                        </video>

                    <div class="common_banner_text position-absolute">
                        <div class="container-fluid mainContainer h-100">
                            <div class="d-flex align-items-center h-100">
                                <h1 class="History-Pro mb-0" data-aos="fade" data-aos-offset="0">Completed Projects</h1>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Filter container for listing page start-->
                <div class="listing_filter_section bigTitleAnimationSection" data-aos="fade" data-aos-delay="100" data-aos-offset="0">
                    <div class="container-fluid mainContainer">
                        <div class="listing_filter_inner">
                            <h2 class="mb-0 History-Pro mobile_listing_main_title">Completed Projects</h2>
                            <?php /*<div class="selectCityDropdown">
                                <div class="custom_dropdown_box">
                                    <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><div class="selectedValue">Select City</div>
                                        <div class="dropdown_arrow">
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-item">Jaipur</li>
                                        <li class="dropdown-item">Udaipur</li>
                                        <li class="dropdown-item">Kota</li>
                                        <li class="dropdown-item">Baran</li>
                                    </ul>
                                </div>
                            </div>*/ ?>
                            <div class="filter_btnsWrapper d-flex align-items-center justify-content-end">
                                <div class="d-none filter_btns mr-3 transition align-items-center">
                                    <img class="transition"src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/icons/sorting-icon.png" alt="Sorting" title="">
                                    <p class="mb-0">Sort</p>
                                </div>
                                <div class="filter_btns transition d-flex align-items-center" data-toggle="modal" data-target="#searchPopupWrapper">
                                    <img class="transition" src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/icons/filters-icon.png" alt="Filter" title="">
                                    <p class="mb-0">Filter</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Filter container for listing page end-->

                <!-- Top Picks Section start -->
                <div class="listing_page_section listing_top_picks_section">
                    <div class="container-fluid mainContainer">
                        <div class="double-bg-header">
                            <div class="double-main-heading double-main-heading-gold" data-aos="fade">COMPLETED PROJECTS</div>
                            <div class="double-bg-heading double-bg-heading-gold">COMPLETED</div>
                        </div>
                        <div class="swiper-container">
                            <div class="swiper-wrapper home-featured-list">
                               <?php
                               foreach ($properties as $key => $value) {    
                                $ci = & get_instance();
                                $ci->load->model('common_m');
                                $title = $ci->common_m->seoUrl($value->title);
                                if ($key==0 || $key%2==0) {
                                    ?>

                                <div class="swiper-slide home-featured-list-item w-100 col-9 p-0">
                                    <a href="<?=base_url().$value->city_slug.'/'.$value->slug?>">
                                        <div data-aos="fade" data-aos-delay="100" data-aos-offset="0" class="home-featured-list-item-container row align-items-center justify-content-center">
                                            <div class="home-featured-list-img col-md-7 col-12">
                                                <div class="home-featured-list-img-container">
                                                    <img src="<?=$value->thumbnail_image?>" alt="<?=$value->thumbnail_imagealt?>" class="w-100" title="">  
                                                </div>                                      
                                            </div>
                                            <div class="home-featured-list-text-container col-md-5 col-12">
                                                <div class="home-featured-list-text">
                                                    <div data-aos="fade" data-aos-delay="100" data-aos-offset="0" class="home-featured-list-project-name"><?=$value->title?></div>
                                                    <div data-aos="fade" data-aos-delay="200" data-aos-offset="0" class="home-featured-list-project-location Roboto-Regular"><?=$value->location_name?></div>
                                                    <div data-aos="fade" data-aos-delay="300" data-aos-offset="0" class="home-featured-list-project-bhkcount Roboto-Regular"><?=$value->typology?></div>
                                                    <div data-aos="fade" data-aos-delay="400" data-aos-offset="0" class="home-featured-list-project-description Roboto-Regular"><?=(!empty($value->featured_description)?$value->featured_description:$value->short_description);?></div>
                                                    <div data-aos="fade" data-aos-delay="500" data-aos-offset="0" class="icon-button"><div class="round-button"><div class="circle"></div><i class="kalpataru-icon-arrow-right"></i></div> LEARN MORE</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div> 
                                <?php
                                }
                                else{ ?>
                                <div class="swiper-slide home-featured-list-item w-100 col-9 p-0">
                                    <a href="<?=base_url().$value->city_slug.'/'.$value->slug?>">
                                    <div class="home-featured-list-item-container row align-items-center justify-content-center">
                                        <div class="home-featured-list-text-container col-md-5 p-0 col-12">
                                            <div class="home-featured-list-text">
                                                <div data-aos="fade" data-aos-delay="100" data-aos-offset="0" class="home-featured-list-project-name"><?=$value->title?></div>
                                                <div data-aos="fade" data-aos-delay="200" data-aos-offset="0" class="home-featured-list-project-location Roboto-Regular"><?=$value->location_name?></div>
                                                <div data-aos="fade" data-aos-delay="300" data-aos-offset="0" class="home-featured-list-project-bhkcount Roboto-Regular"><?=$value->typology?></div>
                                                <div data-aos="fade" data-aos-delay="400" data-aos-offset="0" class="home-featured-list-project-description Roboto-Regular"><?=(!empty($value->featured_description)?$value->featured_description:$value->short_description);?></div>
                                                <div data-aos="fade" data-aos-delay="500" data-aos-offset="0" class="icon-button"><div class="round-button"><div class="circle"></div><i class="kalpataru-icon-arrow-right"></i></div> LEARN MORE</div>
                                            </div>
                                        </div>
                                        <div data-aos="fade" data-aos-delay="100" data-aos-offset="0" class="home-featured-list-img col-md-7 col-12">
                                            <div class="home-featured-list-img-container">
                                                <img src="<?=$value->thumbnail_image?>"  alt="<?=$value->thumbnail_imagealt?>" class="w-100" title=""> 
                                            </div>   
                                        </div>                                 
                                    </div>
                                </div>
                                <?php
                                }
                            } ?>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <!-- Top Picks Section end -->
            </div>
            <?php include('footer.php'); ?>         
        </div>
        <?php include('footer-js.php'); ?>
    </body>
    </html>