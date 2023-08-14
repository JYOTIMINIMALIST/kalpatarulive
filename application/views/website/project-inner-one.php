<?php include('common.php'); $page='project-inner-one'; ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]
 to   -     
-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?=$properties->meta_title.'hellow'?></title>
    <meta name="description" content="<?=$properties->meta_description?>">
    <meta name="keywords" content="<?=$properties->meta_tags?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $properties->meta_title; ?>" />
    <meta property="og:description" content="<?php echo $properties->meta_description; ?>" />
    <meta property="og:image" content="<?php echo $properties->featured_images; ?>" />
    <meta property="og:site_name" content="Kalpataru" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?php echo $properties->meta_title; ?>" />
    <meta name="twitter:description" content="<?php echo $properties->meta_description; ?>" />
    <meta property="twitter:image" content="<?php echo $properties->featured_images; ?>">
    <meta name="twitter:keywords" content="<?php echo $properties->meta_tags; ?>" />

    <?php include('header-css.php'); ?>
    <?php include('ga-code.php'); ?>
    <?=$properties->google_pixel?>
    <?=$properties->facebook_pixel?>
    <?=$properties->all_other_pixel;?>
    <?php
        echo isset($properties->cavity1) && $properties->cavity1 != "" ? $properties->cavity1 : '';
        echo isset($properties->cavity2) && $properties->cavity2 != "" ? $properties->cavity2 : '';
        echo isset($properties->cavity3) && $properties->cavity3 != "" ? $properties->cavity3 : '';
        echo isset($properties->cavity4) && $properties->cavity4 != "" ? $properties->cavity4 : '';
        echo isset($properties->cavity5) && $properties->cavity5 != "" ? $properties->cavity5 : '';
        echo isset($properties->cavity6) && $properties->cavity6 != "" ? $properties->cavity6 : '';
        echo isset($properties->cavity7) && $properties->cavity7 != "" ? $properties->cavity7 : '';
        echo isset($properties->other_cavities) && $properties->other_cavities != "" ? $properties->other_cavities : '';
    ?>
</head>
<body class="small-page">
    <?php
        echo isset($properties->cavity8) && $properties->cavity8 != "" ? $properties->cavity8 : '';
    ?>
    <div class="page-content <?php echo $page; ?> position-relative grey-page gap_from_top">
        <div class="page-body">
            <!-- Note : - hamburger nav is only use for Project inner Page  -->

            <input type="hidden" name="base_url" id="base_url" value="<?php echo base_url(); ?>">
            <div class="menu-gap"></div>
            <div class="main-menu">
                <nav class="navbar navbar-dark fixed-top">
                    <div class="container-fluid mainContainer">
                        <a class="navbar-brand" href="<?php echo base_url(); ?>"><?php include('assets_web/images/logo.svg'); ?> </a>
                        <div class="d-none d-xl-flex navbar-expand ml-auto outer-menu">
                            <ul class="navbar-nav">
                                <!-- <li class="nav-item main_search d-flex align-items-center" data-toggle="modal" data-target="#searchPopupWrapper">
                                    <i class="kalpataru-icon-search"></i>
                                </li> -->
                                <li class="nav-item enquiryNowBtn" data-toggle="modal" data-target="#enquiryPopupWrapper">
                                    <div class="nav-link d-flex align-items-center" href="#"><span>ENQUIRE NOW</span>
                                        <div class="enquiryNowRoundIco d-none">
                                            <div class="round-button">
                                                <div class="circle">
                                                    <svg class="dottedSvg" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                         viewBox="0 0 384 384" style="enable-background:new 0 0 384 384;" xml:space="preserve">
                                        <g><g><circle cx="192" cy="42.667" r="42.667"/></g></g>
                                                        <g><g><circle cx="192" cy="192" r="42.667"/></g></g>
                                                        <g><g><circle cx="192" cy="341.333" r="42.667"/></g></g>
                                    </svg>
                                    <svg class="circleSvg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         width="50px" height="50px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
                                    <g><path d="M25,49.833C11.307,49.833,0.167,38.692,0.167,25C0.167,11.307,11.307,0.167,25,0.167c13.692,0,24.833,11.14,24.833,24.833c0,4.854-1.402,9.554-4.051,13.597c-0.228,0.349-0.696,0.442-1.04,0.216c-0.348-0.226-0.444-0.693-0.218-1.04c2.488-3.8,3.804-8.216,3.804-12.772C48.328,12.137,37.863,1.672,25,1.672S1.672,12.137,1.672,25S12.137,48.328,25,48.328c4.069,0,8.076-1.064,11.586-3.078c0.36-0.205,0.818-0.085,1.027,0.279c0.209,0.36,0.082,0.82-0.279,1.027C33.598,48.7,29.333,49.833,25,49.833z"/></g>
                                </svg>
                                                </div>
                                            </div>
                                            <div class="enquiryDropdown">
                                                <ul class="enquiryNav list-unstyled">
                                                    <li><a href="tel:+91 22 3064 3065"><i class="kalpataru-icon-call"></i></a></li>
                                                    <li><a href="javascript:void(0);" data-toggle="modal" data-target="#enquiryPopupWrapper"><i class="kalpataru-icon-list"></i></a></li>
                                                    <!-- <li><a href="https://api.whatsapp.com/send?phone=919833945080&amp;text=Hi,%20I%20would%20like%20to%20learn%20more%20about%20Kalpataru%E2%80%99s%20projects" target="_blank"><i class="kalpataru-icon-whatsapp"></i></a></li> -->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="projectsNav nav-item">
                                    <a class="nav-link" href="<?php echo base_url(); ?>projects">PROJECTS</a>
                                </li>
                                <?php
                                if (isset($properties->booking_url) && $properties->booking_url!="") {
                                    ?>
                                    <li class="bookNowNav nav-item">
                                        <a class="nav-link" href="<?php echo $properties->booking_url; ?>">BOOK NOW</a>
                                    </li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </div>

                        <!--  <div class="mobileSearchIco" data-toggle="modal" data-target="#searchPopupWrapper"><i class="kalpataru-icon-search"></i></div>
                         <div class="mobilePhoneIco" data-toggle="modal" data-target="#enquiryPopupWrapper"><i class="kalpataru-icon-call"></i></div> -->
                        <?php
                        if (isset($properties->booking_url) && $properties->booking_url!="") {
                            ?>
                            <a class="phoneNavLink bookNowLink d-none" href="<?php echo $properties->booking_url; ?>">
                                <!-- <img src="<?php echo base_url(); ?>assets_web/images/icons/booking-icon.svg"> -->
                                <img style="height:30px;" src="<?php echo base_url(); ?>assets_web/images/icons/Book-now-new.svg" alt="Book Now">
                            </a>
                            <?php
                        }
                        ?>

                        <a class="phoneNavLink d-flex d-xl-none" href="javascript:void(0);" data-toggle="modal" data-target="#enquiryPopupWrapper">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 width="35.17px" height="35.362px" viewBox="7.342 7.323 35.17 35.362" enable-background="new 7.342 7.323 35.17 35.362"
                                 xml:space="preserve">
                <g>
                    <g>
                        <path fill="#BF973F" d="M34.038,42.686c-0.147,0-0.312-0.008-0.468-0.015c-2.738-0.174-5.174-1.187-6.996-2.048
                        c-4.691-2.268-8.801-5.484-12.218-9.564c-2.801-3.369-4.697-6.533-5.967-9.958c-0.527-1.422-1.206-3.583-1.014-5.92
                        c0.134-1.512,0.744-2.82,1.813-3.889L11.8,8.656c1.779-1.71,4.228-1.686,5.912-0.021c0.495,0.456,0.985,0.955,1.453,1.438
                        c0.233,0.249,0.475,0.491,0.71,0.727l2.099,2.098c1.803,1.803,1.803,4.225,0,6.028l-0.781,0.79
                        c-0.449,0.456-0.909,0.923-1.395,1.381c0.442,0.902,1.027,1.794,1.86,2.847c1.943,2.388,3.974,4.241,6.203,5.657
                        c0.207,0.127,0.453,0.25,0.717,0.381l0.275,0.144l2.17-2.164c1.752-1.748,4.259-1.737,5.941,0.017l4.217,4.23
                        c0.868,0.857,1.33,1.893,1.33,2.989c0,1.079-0.449,2.12-1.3,3.007c-0.339,0.354-0.683,0.688-1.017,1.008l-0.105,0.104
                        c-0.417,0.401-0.813,0.783-1.152,1.188l-0.104,0.121C37.578,41.988,35.962,42.686,34.038,42.686z M14.786,8.361
                        c-0.809,0-1.594,0.342-2.269,0.99l-2.621,2.644c-0.9,0.9-1.413,1.999-1.525,3.268c-0.176,2.136,0.46,4.155,0.955,5.488
                        c1.23,3.317,3.072,6.388,5.797,9.666c3.325,3.97,7.323,7.101,11.882,9.304c1.847,0.873,4.074,1.79,6.581,1.95
                        c0.169,0.007,0.316,0.015,0.451,0.015c1.628,0,2.992-0.584,4.059-1.734l0.023-0.029c0.388-0.469,0.818-0.886,1.275-1.328
                        l0.108-0.104c0.328-0.313,0.659-0.639,0.987-0.979c0.667-0.696,1.021-1.497,1.021-2.313c0-0.823-0.359-1.611-1.037-2.281
                        l-4.225-4.239c-1.316-1.372-3.16-1.366-4.521-0.008l-2.692,2.687l-0.916-0.483c-0.28-0.14-0.556-0.276-0.789-0.423
                        c-2.328-1.479-4.437-3.399-6.453-5.877c-0.977-1.233-1.657-2.307-2.144-3.384l-0.149-0.33l0.268-0.245
                        c0.573-0.524,1.107-1.067,1.627-1.595l0.787-0.796c1.423-1.423,1.423-3.191,0-4.614l-2.099-2.098
                        c-0.243-0.243-0.492-0.493-0.727-0.744c-0.449-0.463-0.927-0.949-1.42-1.404C16.358,8.702,15.59,8.361,14.786,8.361z"/>
                    </g>
                    <g>
                        <path fill="#BF973F" d="M37.121,22.208c-0.396-2.335-1.501-4.462-3.189-6.151c-1.69-1.689-3.818-2.792-6.15-3.19l0.168-0.985
                        c2.539,0.433,4.852,1.632,6.689,3.469c1.836,1.837,3.036,4.15,3.469,6.69L37.121,22.208z"/>
                    </g>
                    <g>
                        <path fill="#BF973F" d="M41.665,22.247c-0.59-3.482-2.235-6.657-4.757-9.181c-2.533-2.524-5.709-4.169-9.182-4.757l0.166-0.986
                        c3.678,0.623,7.039,2.364,9.721,5.036c2.672,2.672,4.412,6.033,5.037,9.721L41.665,22.247z"/>
                    </g>
                </g>
            </svg>
                        </a>

                        <?php if ($properties->is_menu_bar == 1):?>
                        <button class="navbar-toggler d-none" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                            <div class="menu">
                                <div class="bar"></div>
                                <div class="bar"> </div>
                            </div>
                        </button>
                        <?php else:?>
                            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                                <div class="menu">
                                    <div class="bar"></div>
                                    <div class="bar"> </div>
                                </div>
                            </button>
                        <?php endif;?>

                    </div>
                </nav>
            </div>


            <?php include('project-inner-header-hamburger.php'); ?>

            <!-- End // Note : - hamburger nav is only use for Project inner Page  -->


            <?php
                
                $background = '';
                $mobile_background = '';
                if ($properties->banner_type=='video') {
                    $background = '';
                }
                else
                {
                    $background = $properties->featured_images;
                    $mobile_background = $properties->featured_images_mobile;
                    if($mobile_background == ""){
                        $mobile_background = $background;
                    }
                }
            ?>
            <!-- Hidden -->
            <div class="d-none common_banner backgroundImg position-relative <?php if ($properties->banner_type=='video') { echo "video_added"; } ?>" style="background-image:url('<?=$background?>');">
                <!-- "video_added" add this class -->
                
                <!-- Video Provision -->
                <?php
                if ($properties->banner_type=='video') {
                    ?>
                    <video class="w-100 d-none d-lg-block" loop autoplay muted playsinline>
                        <source src="<?php echo $properties->featured_video; ?>" type="video/mp4">
                    </video>
                    <video class="w-100 d-block d-lg-none mobileInnVid" loop autoplay muted playsinline>
                        <source src="<?php echo $properties->featured_mobile_video; ?>" type="video/mp4">
                    </video>
                    <?php
                }
                ?>
                <!-- Video Provision end-->
                <div class="common_banner_text position-absolute">
                    <div class="container-fluid mainContainer h-100">
                        <div class="d-flex align-items-end justify-content-center h-100" data-aos="fade" data-aos-offset="0">
                            <div class="project-name">
                                <!-- <img src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/immensa-logo1.png" class="w-100"> -->
                                <?php if(isset($properties->property_logo) && !empty($properties->property_logo)): ?>
                                <img src="<?php echo $properties->property_logo; ?>" class="" style="max-height: 150px;">
                                <?php else: ?>
                                <h1><?=$properties->title?></h1>
                                <?php endif; ?>
                                <p><?=$properties->location_name?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- banner for mobile and desktop -->
            <div class="common_banner backgroundImg position-relative <?php if ($properties->banner_type=='video') { echo "video_added"; } ?>">
                <?php
                    if($background){
                ?>
                    <img src="<?=$background?>" class="desktopInnImg w-100 d-none d-lg-block" title="" alt="<?=$properties->featured_img_alt?>">
                    <img src="<?=$mobile_background?>" class="mobileInnImg w-100 d-block d-lg-none" title=""  alt="<?=$properties->featured_ial_mobile?>">
                <?php
                    }
                ?>

                <!-- Video provision -->
                <?php if ($properties->banner_type=='video') { ?>
                    <video class="w-100 d-none d-lg-block" loop autoplay muted playsinline>
                        <source src="<?php echo $properties->featured_video; ?>" type="video/mp4">
                    </video> 
                    <video class="mobileVid w-100 d-block d-lg-none" loop autoplay muted playsinline>
                        <source src="<?php echo $properties->featured_mobile_video; ?>" type="video/mp4">
                    </video>
                <?php
                    }
                ?>

                <div class="common_banner_text position-absolute">
                    <div class="container-fluid mainContainer h-100">
                        <div class="d-flex align-items-end justify-content-center h-100" data-aos="fade" data-aos-offset="0">
                            <div class="project-name">
                                <!-- <img src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/immensa-logo1.png" class="w-100"> -->
                                <?php if(isset($properties->property_logo) && !empty($properties->property_logo)): ?>
                                <img src="<?php echo $properties->property_logo; ?>" class="" style="max-height: 150px;">
                                <?php else: ?>
                                <div class="p_title"><?=$properties->title?></div>
                                <?php endif; ?>
                                <p><?=$properties->location_name?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid mainContainer">
                <div class="row">
                    <div class="col-12">
                        <div class="project-details">
                            <div class="project-list-wrapper">
                                <div class="project-list d-flex" data-aos="fade" data-aos-delay="100" data-aos-offset="0"><div class="icon-img"><img src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/icons/status.png" alt="Status" class="w-100"></div> Status: <?=$properties->status?></div>
                                <div class="project-list d-flex" data-aos="fade" data-aos-delay="200" data-aos-offset="0"><div class="icon-img"><img src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/icons/location.png" alt="Location" class="w-100"></div> Location: <?=$properties->location_name?>, <?=$properties->city_name?></div>
                                <div class="project-list d-flex" data-aos="fade" data-aos-delay="300" data-aos-offset="0"><div class="icon-img"><img src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/icons/price.png" alt="Price" class="w-100"></div> Price: <?=$properties->price?></div>
                                <div class="project-list d-flex" data-aos="fade" data-aos-delay="400" data-aos-offset="0"><div class="icon-img"><img src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/icons/possesion.png" alt="Possesion" class="w-100"></div> Possession: <?=$properties->possession?></div>
                                <div class="project-list d-flex" data-aos="fade" data-aos-delay="500" data-aos-offset="0"><div class="icon-img"><img src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/icons/typology.png"  alt="Typology" class="w-100"></div> Typology: <?=$properties->typology?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="project-details-container">

                <?php
                    $sequence_no = 0;
                    $sequence_no = $sequence_no + 1;
                ?>

                <div id="overview" class="project-inner-overview-section no-overflow bigTitleAnimationSection">
                    <div class="container-fluid mainContainer">
                        <div class="double-bg-header">
                            <div class="double-main-heading" data-aos="fade"><?php echo $sequence_no > 9 ? $sequence_no : "0".$sequence_no; ?>  OVERVIEW</div>
                            <div class="double-bg-heading">OVERVIEW</div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-5">
                                <div class="px-5" data-aos="fade">
                                    <img src="<?=$properties->overview_image?>" class="w-100" alt="<?=$properties->overview_imagealt?>">
                                </div>
                            </div>
                            <div class="col-md-7 Roboto-Medium">
                                <div class="max-550 mx-auto">
                                    <h2 class="project-inner-header" data-aos="fade" data-aos-delay="100"><?=$properties->title?></h2>
                                    <p class="project-inner-description">
                                    Introducing iconic Offices for iconic businesses, now built at an  iconic landmark: Mulund. Kalpataru Summit is an accredited Grade A office space offering the best international amenities, crafted for select professionals & investments. An exemplary 33-storeyed structure, located right at the LBS marg in Mulund, is made for the perfect upgrade to your business prestige. Kalpataru Summit, Mumbai's new business center, is designed to reflect growth, productivity & profitability.
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                    </div>



                </div>

                <div id="overview-one" class="project-inner-overview-section no-overflow bigTitleAnimationSection">
                    <div class="container-fluid mainContainer">
                        <div class="double-bg-header">
                            <div class="double-main-heading" data-aos="fade"><?php echo $sequence_no > 9 ? $sequence_no : "0"."2"; ?>  KEY BENEFITS</div>
                            <div class="double-bg-heading">KEY BENEFITS</div>
                        </div>
                        <div class="row">
                            <div class="w-100 pt-md-3 project-inner-overview-slider divider-pagination">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <?php
                                        $imgtxtstr = $properties->overview_text_images;
                                        $imgtext = explode("<==>", $imgtxtstr);
                                        $over_data = $properties->over_alt;
                                        $over_datas = explode(',', $over_data);
                                        foreach ($imgtext as $key => $oit) {
                                            $it = explode("====", $oit);
                                            ?>
                                            <div class="swiper-slide p-0">
                                                <div class="overview-slider-container" data-aos="fade">
                                                    <div class="overview-slider-img" >
                                                        <img src="<?=isset($it[0]) ? $it[0] : ''?>" class="w-100" alt="<?=$over_datas[$key]?>">
                                                    </div>
                                                    <div class="overview-slider-text">
                                                        <?=isset($it[1]) ? $it[1] : ''?>
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
                    </div>
                    
                </diV>








<!--new design-->
  <!-- Enhancing everyday lives start -->
                <div class="enhancingEverydayLivesWrapper bigTitleAnimationSection">
                    <div class="container container-left pr-0">
                        <div class="double-bg-header">
                            <div class="double-main-heading" data-aos="fade"><?php echo $sequence_no > 9 ? $sequence_no : "0"."3"; ?> OUR COMMERCIAL FOOTPRINT</div>
                            <div class="double-bg-heading double-bg-heading-gold">FOOTPRINT</div>
                        </div>
                        <div class="enhancingEverydayInner row">
                            <div class="col-md-4" data-aos="fade" data-aos-delay="100">
                                <div class="enhancingEverydayLivesDesc" >
                                    <p class="mb-0"> Kalpataru has developed several landmark properties in the commercial realty space, such as Kalpataru Square which was Asia’s first Platinum LEED Certified building for Core and Shell by US Green Building Council.</p>

 <div class="row align-items-end">
                  <div class="row">
                            <div class="col-sm-6">
                                <div class="number-stats-list counter-box foot">
                                    <div class="number-stats-list-container" data-aos="fade" data-aos-delay="100">
                                        <div>
                                            <span class="number-stats-list-number count" counter-value="50" decimal-place="0">50 </span><span>+</span>
                                        </div>
                                        <div class="number-stats-list-text">Years of sustained growth</div>
                                    </div>
                                    <div class="number-stats-list-container" data-aos="fade" data-aos-delay="200">
                                        <span class="number-stats-list-number count" counter-value="110">110</span><span>+</span>
                                        <div class="number-stats-list-text">Landmark projects </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="number-stats-list counter-box foot" >
                                   
                                   
                                    <div class="number-stats-list-container" data-aos="fade" data-aos-delay="300">
                                        <div>
                                            <span class="number-stats-list-number count" counter-value="21" decimal-place="0">21</span><span>+</span>
                                        </div>
                                        <div class="number-stats-list-text">Million sq. m. delivered </div>
                                    </div>
                                    <div class="number-stats-list-container" data-aos="fade" data-aos-delay="400">
                                        <span class="number-stats-list-number count" counter-value="1.2 +"  decimal-place="1">1.2</span><span>+</span>
                                        <div class="number-stats-list-text">Million sq. m. commercial space delivered
 </div>
                                    </div>
                                </div>
                                <!-- <a class="icon-button mt-4 mb-4 d-md-none" href="<?=base_url()?>company-profile"><div class="round-button"><div class="circle"></div><i class="kalpataru-icon-arrow-right"></i></div> LEARN MORE</a>
                           -->
                            </div>
                                    </div>
                          <!--  <div class="col-md-8 home_about_mid_image pt-4" data-aos="fade" data-aos-delay="100">
                                <img src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/home-about-usNew.jpg" class="w-100">
                            </div>-->
                        </div>











                                </div>
                            </div>
                            <div class="col-md-8" data-aos="fade" data-aos-delay="300">
                                 <div class="enhancingEverydayLivesSlider">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">

<div class="swiper-slide">
                                                <div class="enhancingEverydaySlide">
                                                    <img src="<?php echo base_url(); ?>assets_web/images/50-years-of-KL/Synergy 600-x-400-6.jpg" class="w-100" title="Energy Efficiency" alt="Kalpataru Synergy">
                                                    <div class="enhancingEverydayTitle">
                                                    <h2>  Kalpataru Synergy, Santacruz E </h2>
                                                <p>  Grade A office Spaces house of MNCs </p>
                                                </div>
                                    </div>
                                            </div>

   <div class="swiper-slide">
                                                <div class="enhancingEverydaySlide">
                                                    <img src="<?php echo base_url(); ?>assets_web/images/50-years-of-KL/Inspire 600-x-400-3.jpg" class="w-100" title="Traffic Impact Analysis" alt="Kalpataru Inspire">
                                                    <div class="enhancingEverydayTitle">
                                                    <h2>Kalpataru Inspire, Santacruz E</h2>
                                                   <p>State of the art building</p>
                                                </div>
                                                </div>
                                            </div>
<div class="swiper-slide">
                                                <div class="enhancingEverydaySlide">
                                                    <img src="<?php echo base_url(); ?>assets_web/images/50-years-of-KL/Square 600-x-400-4.jpg" class="w-100" title="Minimising Site Disturbance" alt="Kalpataru Square">
                                                    <div class="enhancingEverydayTitle">
                                                    <h2> Kalpataru Square, Andheri E </h2>         
                                                   <p> 1st in Asia Platinum LEED certification </p>
                                                </div>
                                              </div>
                                            </div>

  <div class="swiper-slide">
                                                <div class="enhancingEverydaySlide">
                                                    <img src="<?php echo base_url(); ?>assets_web/images/50-years-of-KL/Prime 600-x-400-5.jpg" class="w-100" title="Heat Island Effect" alt="Kalpataru Prime">
                                                    <div class="enhancingEverydayTitle">
                                                    <h2>Kalpataru Prime, Thane W </h2>            
                                                    <p>  Landmark IT Building </p>
                                                  </div>

                                                </div>
                                            </div>
 <div class="swiper-slide">
                                                <div class="enhancingEverydaySlide">
                                                    <img src="<?php echo base_url(); ?>assets_web/images/50-years-of-KL/Infinai 600-x-400-2.jpg" class="w-100" title="Wind Analysis" alt="Kalpataru Infinia">
                                                    <div class="enhancingEverydayTitle">
                                                    <h2>Kalpataru Infinia, Shivaji nagar</h2>
                                                    <p>Ready to use office spaces</p>
                                                </div>
                                                </div>
                                            </div>

                                            <div class="swiper-slide">
                                                <div class="enhancingEverydaySlide">
                                                    <img src="<?php echo base_url(); ?>assets_web/images/50-years-of-KL/Avenue 600-X-400.jpg" class="w-100" title="Shadow Analysis" alt="Kalpataru Avenue">
                                                    <div class="enhancingEverydayTitle">
                                                    <h2>Kalpataru Avenue, Kandivali E</h2> 
                                                    <p>OC received office spaces</p>
                                                 </div>
                                                </div>
                                            </div>
                                           
                                         
                                          
                                            
                                            
                                            
                                            

                                        </div>
                                        <div class="swiper-pagination"></div>
                                        <div class="swiper-navigation-container">
                                            <div class="swiper-button-prev"></div>
                                            <div class="swiper-button-next"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Enhancing everyday lives end -->
<!--new design-->







                <!-- Creating Icons of Concrete Section Start






















                <div class="creatingIconsOfConcreteW position-relative">


    <div id="overview-one" class="project-inner-overview-section no-overflow bigTitleAnimationSection">
                    <div class="container-fluid mainContainer">
                        <div class="double-bg-header d-none d-md-block mb-md-4 mt-md-4 pt-md-5" style="padding-bottom:50px">
                            <div class="double-main-heading" data-aos="fade"><?php echo $sequence_no > 9 ? $sequence_no : "0"."2"; ?> OUR COMMERCIAL FOOTPRINT</div>
                            <div class="double-bg-heading">FOOTPRINT</div>
                        </div>
                        <div class="row">  

        
                <div class="col-md-6 order-2 order-md-1">
               
                    <p class="project-inner-description" style="padding-top: 0em;
    padding-bottom: 0em;">
                      Kalpataru has developed several landmark properties in the commercial realty space, such as Kalpataru Square which was Asia’s first Platinum LEED Certified building for Core and Shell by US Green Building Council.</p>
                        <div class="row align-items-end">
                            <div class="col-md-4">
                                <div class="number-stats-list counter-box project-inner-description" style="padding-top: 0em;
    padding-bottom: -1em;">
                                    <div class="number-stats-list-container" data-aos="fade" data-aos-delay="100">
                                        <div>
                                            <span class="number-stats-list-number count" counter-value="50" decimal-place="0">50 + </span><span>+</span>
                                        </div>
                                        <div class="number-stats-list-text">Years of sustained Growth</div>
                                    </div>
                                    <div class="number-stats-list-container" data-aos="fade" data-aos-delay="200">
                                        <div class="number-stats-list-number count" counter-value="110">110 +
</div>
                                        <div class="number-stats-list-text">Landmark Projects </div>
                                    </div>
                                    <div class="number-stats-list-container" data-aos="fade" data-aos-delay="300">
                                        <div>
                                            <span class="number-stats-list-number count" counter-value="21" decimal-place="0">21+</span><span>+</span>
                                        </div>
                                        <div class="number-stats-list-text">Million sq. m. Delivered </div>
                                    </div>
                                    <div class="number-stats-list-container" data-aos="fade" data-aos-delay="400">
                                        <div class="number-stats-list-number count" counter-value="1.2" decimal-place="1">1.2 +</div>
                                        <div class="number-stats-list-text">Million sq. m. Commercial space delivered
 </div>
                                    </div>
                                </div>
                                <a class="icon-button mt-4 mb-4 d-md-none" href="<?=base_url()?>company-profile"><div class="round-button"><div class="circle"></div><i class="kalpataru-icon-arrow-right"></i></div> LEARN MORE</a>
                            </div>
                      
                        </div>
                        
                    </p>
                </div>
                <div class="col-md-6 p-md-0 order-1 order-md-2">
                     <div class="enhancingEverydayLivesSlider">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="enhancingEverydaySlide">
                                                    <img src="<?php echo base_url(); ?>assets_web/images/50-years-of-KL/Avenue 600-X-400.jpg" class="w-100" title="Shadow Analysis" alt="Shadow Analysis">
                                                    <div class="enhancingEverydayTitle">
                                                        <h2>Shadow Analysis</h2>
                                                        <p>We study the effect of the shadows of the neighbouring structures on our buildings, to ensure our properties remain cool even in the hottest days.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="enhancingEverydaySlide">
                                                    <img src="<?php echo base_url(); ?>assets_web/images/50-years-of-KL/Infinai 600-x-400-2.jpg" class="w-100" title="Wind Analysis" alt="Wind Analysis">
                                                    <div class="enhancingEverydayTitle">
                                                        <h2>Wind Analysis</h2>
                                                        <p>A study of the wind pattern of the surroundings helps us structure buildings with optimum layout and ventilation</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="enhancingEverydaySlide">
                                                    <img src="<?php echo base_url(); ?>assets_web/images/50-years-of-KL/Inspire 600-x-400-3.jpg" class="w-100" title="Traffic Impact Analysis" alt="Traffic Impact Analysis">
                                                    <div class="enhancingEverydayTitle">
                                                        <h2>Traffic Impact Analysis</h2>
                                                        <p>Each of our new developments are crafted in such a way that they do not hinder the traffic present on the road</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="enhancingEverydaySlide">
                                                    <img src="<?php echo base_url(); ?>assets_web/images/50-years-of-KL/Prime 600-x-400-5.jpg" class="w-100" title="Heat Island Effect" alt="Heat Island Effect">
                                                    <div class="enhancingEverydayTitle">
                                                        <h2>Heat Island Effect </h2>
                                                        <p>The roof and podium in our structures reflect the sun’s rays and lower the ambient temperature in the building and its surroundings</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="enhancingEverydaySlide">
                                                    <img src="<?php echo base_url(); ?>assets_web/images/50-years-of-KL/Square 600-x-400-4.jpg" class="w-100" title="Minimising Site Disturbance" alt="Minimising Site Disturbance">
                                                    <div class="enhancingEverydayTitle">
                                                        <h2>Minimising Site Disturbance</h2>
                                                        <p>With every new project, a conscious effort is made to have the least impact on the pre-existing ecosystem at the site</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="enhancingEverydaySlide">
                                                    <img src="<?php echo base_url(); ?>assets_web/images/50-years-of-KL/Synergy 600-x-400-6.jpg" class="w-100" title="Energy Efficiency" alt="Energy Efficiency">
                                                    <div class="enhancingEverydayTitle">
                                                        <h2>Energy Efficiency</h2>
                                                        <p>Our Buildings are engineered to capitalize on natural resources while using renewable sources of energy</p>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            

                                        </div>
                                        <div class="swiper-pagination"></div>
                                        <div class="swiper-navigation-container">
                                            <div class="swiper-button-prev"></div>
                                            <div class="swiper-button-next"></div>
                                        </div>
                                    </div>
                                </div>
                </div>
            </div>
        </div>




 </div>



                   
                </div>
                Creating Icons of Concrete Section End-->



                <div id="investment" class="project-inner-overview-section no-overflow bigTitleAnimationSection">
                    <div class="container-fluid mainContainer">
                        <div class="double-bg-header">
                            <div class="double-main-heading" data-aos="fade"><?php echo $sequence_no > 9 ? $sequence_no : "0"."4"; ?> BEST FOR INVESTMENT
</div>
                            <div class="double-bg-heading">Investment</div>
                        </div>
                        <div class="row align-items-center">
                            
                            <div class="col-md-7 Roboto-Medium">
                                <div class="max-550 mx-auto">
                                <h2 class="project-inner-header" data-aos="fade" data-aos-delay="100"> The best investment with high future returns</h2>
                            
                                <ul class="project-inner-description" style="font-size: 15px;">      
                                    
                                       
                                    <li> Surge in demand for Grand A office spaces in established Residential micro-market</li>
                                    <li> Commercial developments historically give higher rental yields</li>
                                    <li>Strategically located in the epicenter of business activities & upcoming key infrastructure – Goregaon Mulund Link road (GMLR) & Metro Line 4</li>
                                    <li>A branded development ensuring no risk</li>


                                </ul>
                              
                                   
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="px-5" data-aos="fade">
                                <img src="<?php echo base_url(); ?>assets_web/images/50-years-of-KL/In.jpg" class="w-100" alt="The best investment with high future returns">
                                                   
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
                <div id="professional" class="project-inner-overview-section no-overflow bigTitleAnimationSection" >
                    <div class="container-fluid mainContainer">
                        <div class="double-bg-header">
                            <div class="double-main-heading" data-aos="fade"><?php echo $sequence_no > 9 ? $sequence_no : "0"."5"; ?> IDEAL FOR PROFESSIONALS
</div>
                            <div class="double-bg-heading">Professionals</div>
                        </div>
                    </div>
                </div>

                <div id="professional" class="project-inner-overview-section no-overflow bigTitleAnimationSection">
                    <div class="container-fluid mainContainer">
                        <div class="row align-items-center" style="padding-top:23px;">
                            <div class="col-md-5">
                                <div class="px-5" data-aos="fade">
                                    <img src="<?php echo base_url(); ?>assets_web/images/50-years-of-KL/pj.jpg" alt="Multitier Security" class="w-100" >
                                </div>
                            </div>
                            <div class="col-md-7 Roboto-Medium">
                                <div class="max-550 mx-auto">
                                <h2 class="project-inner-header" data-aos="fade" data-aos-delay="100">  Your business address matters</h2>
                              
                                    <ul class="project-inner-description" style="font-size: 15px;">      
                                    
                                       
                                        <li>Situated right on LBS road, the center of IT, manufacturing and commercial sector</li>
                                        <li>Design aesthetics that delivers onto your brand image</li>
                                        <li>Multiple configurations available to suit every professional need – SMEs, CAs, Consultants and Lawyers</li>
                                        <li>Equipped with all facilities to ensure complete convenience and security within the workplace</li>


                                    </ul>
                                </div>
                            </div>

                        </div>
                        
                    </div>
                </div>





 <?php
                if ($properties->brochure!="" || $properties->floor_plan!="" || $properties->master_plan!="" || $properties->virtual_tour!="") {
                    $sequence_no = $sequence_no + 1;
                ?>
                <div id="resources" class="project-inner-resources-section no-overflow bigTitleAnimationSection">
                    <div class="container-fluid mainContainer">
                        <div class="double-bg-header">
                            <h2 class="double-main-heading" data-aos="fade"><?php echo $sequence_no > 9 ? $sequence_no : "0"."6"; ?>  RESOURCES</h2>
                            <div class="double-bg-heading">RESOURCES</div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-5 order-md-2" data-aos="fade"><img src="<?=$properties->resource_image?>" class="w-100" alt="<?=$properties->resource_imagealt?>"></div>
                            <div class="col-md-7 order-md-1">
                                <div class="download-section">
                                        <!-- <div class="download-form mb-4" data-aos="fade">
                                            <div class="d-flex align-items-center">
                                                <input class="download_Input_field" type="text" name="DownloadEmail" placeholder="Enter Email Address">
                                                <input class="download_btn transition" type="submit" name="submit" value="DOWNLOAD">
                                            </div>
                                        </div> -->
                                        <div class="download-list pr-md-5">
                                            <?php
                                            if ($properties->brochure!="") {
                                                ?>
                                                <div class="download-item d-md-flex justify-content-between align-items-center" data-aos="fade">
                                                    <div class="download-item-inner d-md-flex align-items-center">
                                                        <div class="download-item-img">
                                                            <img src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/icons/brochure.svg" class="w-100 h-100" alt="Brochure">
                                                        </div>
                                                        <div class="download-item-text">
                                                            Brochure
                                                        </div>
                                                    </div>
                                                    <div class="view-download-file">
                                                        <a class="icon-button" target="_blank" href="<?=$properties->brochure?>"><div class="round-button"><div class="circle"></div><i class="kalpataru-icon-arrow-right"></i></div> VIEW</a>
                                                    </div>
                                                </div>  
                                                <?php
                                            }
                                            if ($properties->floor_plan!="") {
                                                ?>
                                                <div class="download-item d-md-flex justify-content-between align-items-center" data-aos="fade">
                                                    <div class="download-item-inner d-md-flex align-items-center">
                                                        <div class="download-item-img">
                                                            <img src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/icons/brochure.svg" class="w-100 h-100" alt="Floor Plan">
                                                        </div>
                                                        <div class="download-item-text">
                                                            Floor Plan
                                                        </div>
                                                    </div>
                                                    <div class="view-download-file">
                                                        <a class="icon-button" target="_blank" href="<?=$properties->floor_plan?>"><div class="round-button"><div class="circle"></div><i class="kalpataru-icon-arrow-right"></i></div> VIEW</a>
                                                    </div>
                                                </div>   
                                                <?php
                                            }
                                            if ($properties->master_plan!="") {
                                                ?>
                                                <div class="download-item d-md-flex justify-content-between align-items-center" data-aos="fade">
                                                    <div class="download-item-inner d-md-flex align-items-center">
                                                        <div class="download-item-img">
                                                            <img src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/icons/brochure.svg" class="w-100 h-100" alt="Master Plan">
                                                        </div>
                                                        <div class="download-item-text">
                                                            Master Plan
                                                        </div>
                                                    </div>
                                                    <div class="view-download-file">
                                                        <a class="icon-button" target="_blank" href="<?=$properties->master_plan?>"><div class="round-button"><div class="circle"></div><i class="kalpataru-icon-arrow-right"></i></div> VIEW</a>
                                                    </div>
                                                </div>   
                                                <?php
                                            }
                                            if ($properties->virtual_tour!="") {
                                                ?>
                                                <div class="download-item d-md-flex justify-content-between align-items-center" data-aos="fade">
                                                    <div class="download-item-inner d-md-flex align-items-center">
                                                        <div class="download-item-img">
                                                            <img src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/icons/VitualTour.svg" class="w-100 h-100" alt="Virtual Tour">
                                                        </div>
                                                        <div class="download-item-text">
                                                            Virtual Tour
                                                        </div>
                                                    </div>
                                                    <div class="view-download-file">
                                                        <a class="icon-button" target="_blank" href="<?=$properties->virtual_tour?>"><div class="round-button"><div class="circle"></div><i class="kalpataru-icon-arrow-right"></i></div> VIEW</a>
                                                    </div>
                                                </div> 
                                                <?php
                                            }
                                            ?>                 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>

                    

<div id="amenities" class="project-inner-amenities-section no-overflow bigTitleAnimationSection">
                    <div class="container-fluid mainContainer">
                        <div class="double-bg-header">
                        <h2 class="double-main-heading" data-aos="fade"><?php echo $sequence_no > 9 ? $sequence_no : "0"."7";?> AMENITIES</h2>
                            <div class="double-bg-heading">AMENITIES</div>
                        </div>
                        <div class="row">
                            <div class="w-100 pt-md-3 px-md-4 project-inner-amenities-slider divider-pagination">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper amenities-container">

                                    </div>
                                    <div class="swiper-pagination"></div>
                                    <div class="swiper-navigation-container">
                                        <div class="swiper-button-prev hiddenOnDesktop"></div>
                                        <div class="swiper-button-next hiddenOnDesktop"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="container-fluid mainContainer px-md-4 pt-md-4">
                                <div class="icon-button mb-4 d-inline-flex show-amenities-btn"><div class="round-button"><div class="circle"></div><i class="kalpataru-icon-arrow-right"></i></div> SHOW ALL AMENITIES</div>        
                            </div>
                        </div>
                    </div>
                </div>


                <?php
                    $sequence_no = $sequence_no + 1;
                ?>
                <?php
                    if($properties->rera!="" || $properties->map_image!=""){
                        $sequence_no = $sequence_no + 1;
                        ?>
                        <div id="locate" class="project-inner-location-section no-overflow bigTitleAnimationSection container-fluid mainContainer">
                            <div>
                                <div class="double-bg-header">
                                    <h2 class="double-main-heading" data-aos="fade"><?php echo $sequence_no > 9 ? $sequence_no : "0"."8"; ?> LOCATION</h2>
                                    <div class="double-bg-heading">Location</div>
                                </div>
                            </div>
                            <?php
                            if ($properties->map_image!="") {
                                ?>
                                <div class="map_image_wrap" data-aos="fade">
                                    <a target="_blank" href="<?=$properties->map_url?>"><img src="<?=$properties->map_image?>" class="w-100" alt="<?=$properties->map_imagealt?>"></a>
                                    <div class="clickToGoMap">Click to view on Google Map</div>
                                </div>
                                <?php
                            }
                            ?>
                            <?php
                            if ($properties->rera!="") {
                                ?>
                                <div>
                                    <div class="project-inner-rera-info" data-aos="fade">
                                        <div id="rera-accordian" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="rera-accordian">
                                                    <div class="panel-title">
                                                        <a class="d-block" data-toggle="collapse" data-parent="#rera-accordian" href="#collapseRera" aria-expanded="false" aria-controls="collapseRera">
                                                            RERA DETAILS
                                                        </a>
                                                    </div>
                                                </div>
                                                <div id="collapseRera" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="rera-accordian">
                                                   <?=$properties->rera?>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <?php
                           }
                           ?>
                       </div>
                       <?php
                   }
                   ?>

            
                <!-- Building Landmarks of trust start -->
                <div id="locate" class="project-inner-location-section no-overflow bigTitleAnimationSection container-fluid mainContainer">
                            <div>
                                <div class="double-bg-header gal">
                                    <h2 class="double-main-heading" data-aos="fade"><?php echo $sequence_no > 9 ? $sequence_no : "0"."9"; ?> Gallery</h2>
                                    <div class="double-bg-heading">Gallery</div>
                                </div>
                            </div>
                      
                      <div class="buildingLandmarksSlider">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="buildingLandmarksSlide" data-aos="fade">
                                        <img src="<?php echo base_url(); ?>assets_web/images/50-years-of-KL/high speed lift 316-X-376-3C.jpg" class="w-100"  alt=" Multitier Security">
                                             
                                        <div class="buildingLandmarksQualitiesTitle">Multitier security</div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="buildingLandmarksSlide" data-aos="fade">
                                            <img src="<?php echo base_url(); ?>assets_web/images/50-years-of-KL/9 levels of car park 316-X-376-5.jpg" class="w-100"  alt="9 Levels of car park" >
                                            <div class="buildingLandmarksQualitiesTitle">9 Levels of car park</div>
                                        </div>
                                    </div>


   <div class="swiper-slide">
                                        <div class="buildingLandmarksSlide">
                                            <img src="<?php echo base_url(); ?>assets_web/images/50-years-of-KL/3 tier security 316-X-376-4.jpg" class="w-100" alt="High Speed Elevators"  width="316px">
                                            <div class="buildingLandmarksQualitiesTitle">High Speed Elevators</div>
                                        </div>
                                    </div>



                                   <!-- <div class="swiper-slide">
                                        <div class="buildingLandmarksSlide" data-aos="fade">
                                            <img src="<?php echo base_url(); ?>assets_web/images/50-years-of-KL/Power backup 316-X-376-1.jpg" class="w-100" title="Power backup" alt="Power backup">
                                            <div class="buildingLandmarksQualitiesTitle">Power backup</div>
                                        </div>
                                    </div>-->
                                    <div class="swiper-slide">
                                        <div class="buildingLandmarksSlide">
                                            <img src="<?php echo base_url(); ?>assets_web/images/50-years-of-KL/Relaxsation area 316-X-376-2.jpg" class="w-100" alt="Relaxation Area" width="316px">
                                            <div class="buildingLandmarksQualitiesTitle">Relaxation Area</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                            <div class="swiper-navigation-container">
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Building Landmarks of trust end -->
                <?php
                if ($properties->booking_url!="") {
                    ?>
                    <div class="container-fluid mainContainer">
                        <div class="greyInnerBoxSection my-5" style="background-image:url('<?php echo $this->config->item('cdn_url'); ?>assets_web/images/ProjectPage2.jpg?ver=1'); ">
                            <div class="row justify-content-center align-items-center text-center">
                                <div class="greyBoxIn" data-aos="fade" data-aos-delay="100">
                                    <p data-aos="fade" class="mb-4">Book your dream home online in just 3 simple steps. 1 Choose your preferred home typology 2 Upload details 3 Confirm to Book</p>
                                    <div class="icon-button mb-4 d-inline-flex"><div class="round-button"><div class="circle"></div><i class="kalpataru-icon-arrow-right"></i></div><a style="font-size: inherit;color: inherit;" href="<?=$properties->booking_url?>"> BOOK NOW</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>

               
                    
                   <!--<div id="construction_update" class="project-inner-construction-update-section no-overflow bigTitleAnimationSection">
                    <div class="container-fluid mainContainer">
                        <div class="double-bg-header">
                            <h2 class="double-main-heading" data-aos="fade"><span id="construction_update_no"></span>  CONSTRUCTION UPDATE</h2>
                            <div class="double-bg-heading">CONSTRUCT</div>
                        </div>
                        <div class="project-inner-contruction-update-slider divider-pagination">
                            <div class="swiper-container">
                                <div class="swiper-wrapper construction-update">

                                </div>
                                <div class="swiper-pagination"></div>
                                <div class="swiper-navigation-container">
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->

                <div class="greyInnerBoxSection my-5 d-none" style="background-image:url('<?=$properties->booking_background?>'); ">
                    <div class="container-fluid mainContainer">
                        <div class="row justify-content-center align-items-center text-center">
                            <div class="greyBoxIn">
                                <p data-aos="fade" class="mb-4"><?=$properties->booking_text?></p>
                                <div data-aos="fade" data-aos-delay="100" class="icon-button mb-4 d-inline-flex"><div class="round-button"><div class="circle"></div><i class="kalpataru-icon-arrow-right"></i></div><a style="font-size: inherit;color: inherit;" href="<?=$properties->booking_url?>"> BOOK NOW</a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--<div id="project_you_may_like" class="project-inner-project-you-may-like-section no-overflow bigTitleAnimationSection">
                    <div class="container-fluid mainContainer">
                        <div class="double-bg-header">
                            <h3 class="double-main-heading" data-aos="fade"><span id="project_you_may_like_no"></span> PROJECTS YOU MAY ALSO LIKE</h3>
                            <div class="double-bg-heading">PROJECTS Y</div>
                        </div>
                        <div class="w-100 pt-md-3 project-inner-you-may-like-slider divider-pagination">
                            <div class="swiper-container">
                                <div class="swiper-wrapper related-project">

                                </div>
                                <div class="swiper-pagination"></div>
                                <div class="swiper-navigation-container">
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
            </div>                
        </div> 



    	
    <!-- ===============================================  Dynamic Footer ===================================================== -->
       
	   <!-- Page circle -->
<div class="page-circle transition"></div>
<!--<input type="hidden" id="chat_bot_url" value="<?php /*echo $this->config->item('bot_url'); */?>">-->
<!-- <iframe id="chatBotIframe" class="new-design-bot chatBot" src="<?php echo $this->config->item('bot_url'); ?>" style="width: 420px;height: calc(100% - 20px);position: fixed;z-index: 10000;right: 10px;bottom: -5px;border: none;visibility: visible;opacity: 1;min-width:100px;max-height:500px;min-height:100px;"></iframe> -->
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]--> 
<div class="whatAppHomeHolder transition active d-none">
    <a href="https://api.whatsapp.com/send?phone=919833945080&amp;text=Hi,%20I%20would%20like%20to%20learn%20more%20about%20Kalpataru%E2%80%99s%20projects" target="_blank"><img class="w-100" src="<?php echo base_url(); ?>assets_web/images/icons/floatingWhatsapp.svg" title="" alt="whatsapp"></a>
</div>


<div class="floating-button">
    <a href="https://api.whatsapp.com/send?phone=919833945080&amp;text=Hi,%20I%20would%20like%20to%20learn%20more%20about%20Kalpataru%E2%80%99s%20projects" target="_blank">
        <img class="w-100 icon" src="<?php echo base_url(); ?>assets_web/images/icons/floatingWhatsapp.svg" title="" alt="whatsapp">
    </a>
</div>


<footer class="rel-footer">
	<?php if(isset($dynamic_footer)): ?>
	<div class="homePageFooter" style="display:block;">
		<?php if(isset($dynamic_footer['cities']) && !empty($dynamic_footer['cities'])): 
		/*$outerLoopCities = ceil(count($dynamic_footer['cities'])/4);
		$properties_count_cities = count($dynamic_footer['cities']);
		$list_count_cities = 0;
		$breakLoopOnCity = 3;*/ ?>
		<div class="mostSearchedPropery d-none">
			<div class="container-fluid mainContainer">
				<h2>PROJECTS AS PER CITIES</h2>
				<div class="row">
					<?php /*for($i=0;$i<$outerLoopCities;$i++): ?>
					<div class="col-md-3 col-6<?php echo (($i>3)?' mt-md-3':''); ?>">
						<ul>
							<?php for(;$list_count_cities<$properties_count_cities;): ?>
							<li>
								<a class="nav-link" href="<?php echo base_url().'projects-in-'. $dynamic_footer['cities'][$list_count_cities]->slug; ?>">Projects in <?php echo $dynamic_footer['cities'][$list_count_cities]->name; ?></a>
							</li>
							<?php if($list_count_cities==$breakLoopOnCity){$list_count_cities++;$breakLoopOnCity += 4; break;}else{$list_count_cities++;} endfor; ?>
						</ul>
					</div>
					<?php endfor;*/ 
					foreach($dynamic_footer['cities'] as $cityKey=>$cityVal): ?>
					<div class="col-md-3 col-6">
						<a class="nav-link" href="<?php echo base_url().'projects-in-'. $cityVal->slug; ?>">Projects in <?php echo $cityVal->name; ?></a>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
		<?php endif;
		if(isset($dynamic_footer['locations']) && !empty($dynamic_footer['locations'])):
		/*$outerLoopLocation = ceil(count($dynamic_footer['locations'])/4);
		$properties_count_location = count($dynamic_footer['locations']);
		$lCount = 0;
		$breakLoopOnLocation = 3;*/ ?>
		<div class="mostSearchedPropery" id="ProjectAsPerLocation">
			<div class="container-fluid mainContainer">
				<h2>PROJECTS AS PER LOCATION</h2>
				<div class="row">
					<?php /*for($i=0;$i<$outerLoopLocation;$i++): ?>
					<div class="col-md-3 col-6<?php echo (($i>3)?' mt-md-3':''); ?>">
						<ul>
							<?php for(;$lCount<$properties_count_location;): ?>
							<li>
								<a class="nav-link" href="<?php echo base_url().$dynamic_footer['locations'][$lCount]->city_slug.'/projects-in-'.$dynamic_footer['locations'][$lCount]->slug; ?>">Projects in <?php echo $dynamic_footer['locations'][$lCount]->location_name; ?></a>
							</li>
							<?php if($lCount==$breakLoopOnLocation){$lCount++;$breakLoopOnLocation += 4; break;}else{$lCount++;} endfor; ?>
						</ul>
					</div>
					<?php endfor;*/
					foreach($dynamic_footer['locations'] as $locationKey=>$locationVal): ?>
					<div class="col-md-3 col-6">
						<a class="nav-link" href="<?php echo base_url().$locationVal->city_slug.'/projects-in-'. $locationVal->slug; ?>">Projects in <?php echo $locationVal->location_name; ?></a>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
		<?php endif;
		if(isset($dynamic_footer['typology']) && !empty($dynamic_footer['typology'])):
		/*$outerLoopArea = ceil(count($dynamic_footer['typology'])/4);
		$properties_count_area = count($dynamic_footer['typology']);
		$areaCount = 0;
		$breakLoopArea = 3;*/ ?>
		<div class="mostSearchedPropery d-none">
			<div class="container-fluid mainContainer">
				<h2>PROJECTS AS PER AREA CONFIGURATION</h2>
				<div class="row">
					<?php /*for($i=0;$i<$outerLoopArea;$i++): ?>
					<div class="col-md-3 col-6<?php echo (($i>3)?' mt-md-3':''); ?>">
						<ul>
							<?php for(;$areaCount<$properties_count_area;): ?>
							<li>
								<a class="nav-link" href="<?php echo base_url().$dynamic_footer['typology'][$areaCount]->city_slug.'/'.$dynamic_footer['typology'][$areaCount]->slug.'-flats-in-'.$dynamic_footer['typology'][$areaCount]->location_slug; ?>"><?php echo $dynamic_footer['typology'][$areaCount]->name.' in '.$dynamic_footer['typology'][$areaCount]->location_name; ?></a>
							</li>
							<?php if($areaCount==$breakLoopArea){$areaCount++;$breakLoopArea += 4; break;}else{$areaCount++;} endfor; ?>
						</ul>
					</div>
					<?php endfor;*/
					foreach($dynamic_footer['typology'] as $typoKey=>$typoVal): ?>
					<div class="col-md-3 col-6">
						<a class="nav-link" href="<?php echo base_url().$typoVal->city_slug.'/'.$typoVal->slug.'-flats-in-'.$typoVal->location_slug; ?>"><?php echo $typoVal->name.' in '.$typoVal->location_name; ?></a>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
		<?php endif;
		if(isset($dynamic_footer['ongoing']) && !empty($dynamic_footer['ongoing'])):
		/*$outerLoopOnGoing = ceil(count($dynamic_footer['ongoing'])/4);
		$properties_count_ongoing = count($dynamic_footer['ongoing']);
		$gCount = 0;
		$breakLoopOnGoing = 3;*/ ?>
		<div class="mostSearchedPropery" id="OngoingProject">
			<div class="container-fluid mainContainer">
				<h2>ONGOING PROJECTS</h2>
				<div class="row">
					<?php /*for($i=0;$i<$outerLoopOnGoing;$i++): ?>
					<div class="col-md-3 col-6<?php echo (($i>3)?' mt-md-3':''); ?>">
						<ul>
							<?php for(;$gCount<$properties_count_ongoing;): ?>
							<li>
								<a class="nav-link" href="<?php echo base_url().$dynamic_footer['ongoing'][$gCount]->city_slug; ?>/<?php echo $dynamic_footer['ongoing'][$gCount]->property_slug ?>"><?php echo $dynamic_footer['ongoing'][$gCount]->property_name; ?></a>
							</li>
							<?php if($gCount==$breakLoopOnGoing){$gCount++;$breakLoopOnGoing += 4; break;}else{$gCount++;} endfor; ?>
						</ul>
					</div>
					<?php endfor;*/
					foreach($dynamic_footer['ongoing'] as $onGoingKey=>$onGoingVal): ?>
					<div class="col-md-3 col-6">
						<a class="nav-link" href="<?php echo base_url().$onGoingVal->city_slug.'/'.$onGoingVal->property_slug; ?>"><?php echo $onGoingVal->property_name; ?></a>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
		<?php endif;
		if(isset($dynamic_footer['related_projects']) && !empty($dynamic_footer['related_projects'])):
		/*$outerLoopRelated = ceil(count($dynamic_footer['related_projects'])/4);
		$properties_count_related = count($dynamic_footer['related_projects']);
		$rCount = 0;
		$breakLoopRelated = 3;*/ ?>
		<div class="mostSearchedPropery d-none">
			<div class="container-fluid mainContainer">
				<h2>RELATED PROJECTS</h2>
				<div class="row">
					<?php /*for($i=0;$i<$outerLoopRelated;$i++): ?>
					<div class="col-md-3 col-6<?php echo (($i>3)?' mt-md-3':''); ?>">
						<ul>
							<?php for(;$rCount<$properties_count_related;): ?>
							<li>
								<a class="nav-link" href="<?php echo base_url().$dynamic_footer['related_projects'][$rCount]->city_slug.'/'.$dynamic_footer['related_projects'][$rCount]->property_slug; ?>"><?php echo $dynamic_footer['related_projects'][$rCount]->property_name; ?></a>
							</li>
							<?php if($rCount==$breakLoopRelated){$rCount++;$breakLoopRelated += 4; break;}else{$rCount++;} endfor; ?>
						</ul>
					</div>
					<?php endfor;*/
					foreach($dynamic_footer['related_projects'] as $relatedKey=>$relatedVal): ?>
					<div class="col-md-3 col-6">
						<a class="nav-link" href="<?php echo base_url().$relatedVal->city_slug.'/'.$relatedVal->property_slug; ?>"><?php echo $relatedVal->property_name; ?></a>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
		<?php endif; ?>
	</div>
	<?php endif; ?>

    <!--<div class="mostSearchedPropery d-none">
        <div class="container-fluid mainContainer">
            <h2>COMPLETED PROJECTS</h2>
            <div class="row">
                <?php
/*                $completed_project = $this->db->select('*')
                    ->from('properties')
                    ->where(['completed'=>1])
                    ->get()->result_array();


                */?>
                <?php /*foreach($completed_project as $cp): */?>

                    <?php
/*                    $id = $cp['city'];
                    $city_slug = $this->db->select('*')
                        ->from('cities')
                        ->where(['id'=>$id])
                        ->get()->row_array();
                    */?>

                    <div class="col-md-3 col-6">
                        <a class="nav-link" href="<?/*=base_url().$city_slug['slug'].'/'.$cp['slug']*/?>"><?php /*echo $cp['title']; */?></a>
                    </div>
                <?php /*endforeach; */?>
            </div>
        </div>
    </div>-->

	<div class="footer-menu">
		<div class="container-fluid mainContainer content-footer Roboto-Regular">
			<div class="row">
				<div class="col-6 col-md">
					<ul class="footer-links">
						<!-- <li><a class="nav-link head-nav-link" href="#">ABOUT</a></li> -->
						<li><a class="nav-link" href="<?php echo base_url(); ?>company-profile">COMPANY PROFILE</a></li>
						<li><a class="nav-link" href="<?php echo base_url(); ?>leadership-team">LEADERSHIP TEAM</a></li>
                        <li><a class="nav-link" href="<?php echo base_url(); ?>50-plus-years-of-our-legacy">50+ years of our legacy</a></li>
					</ul>
				</div>
                <div class="col-6 col-md">
                    <ul class="footer-links">
                        <li><a class="nav-link" href="<?php echo base_url(); ?>projects/residential">residential Projects</a></li>
                        <li><a class="nav-link" href="<?php echo base_url(); ?>projects/commercial">commercial Projects</a></li>
                        <!-- <li><a class="nav-link" href="<?php /*echo base_url(); */?>completed-projects">Completed projects</a></li>-->
                    </ul>
                </div>
				<div class="col-6 col-md">
					<ul class="footer-links">
                        <li><a class="nav-link" href="<?php echo base_url(); ?>group-company">Group Companies</a></li>
                        <li><a class="nav-link" href="<?php echo base_url(); ?>csr">CSR</a></li>
                        <!-- <li><a class="nav-link" href="<?php echo base_url(); ?>gallery">Gallery</a></li> -->

						<!-- <li><a class="nav-link" href="<?php echo base_url(); ?>press">Press</a></li> -->
					</ul>
				</div>
				<div class="col-6 col-md">
					<ul class="footer-links">
						<!-- <li><a class="nav-link head-nav-link" href="#">COMMERCIAL</a></li>										 -->
						<!--<li><a class="nav-link" href="<?php /*echo base_url(); */?>group-company">Group Companies</a></li>-->
                        <li><a class="nav-link" href="<?php echo base_url(); ?>contact-us">Our Offices</a></li>
                        <li><a class="nav-link" href="https://careers.kalpataru.com/" target="_blank" >CAREERS</a></li>
                        <li><a class="nav-link" href="https://vendorconnect.kalpatarugroup.com/" target="_blank" >Vendor Connect</a></li>
                        <!-- <li><a class="nav-link" href="<?php echo base_url(); ?>sustainability">sustainability</a></li> -->
					</ul>
				</div>

				<div class="col-6 col-md">
					<ul class="footer-links">
                        <li><a class="nav-link" href="<?php echo base_url(); ?>awards">awards</a></li>
                        <li><a class="nav-link" target="_blank" href="<?= base_url()?>assets_web/pdf/RERA_PDF.pdf">Rera</a></li>

					</ul>
				</div>
				<div class="col-6 col-md">
					<ul class="footer-links">
                        <li><a class="nav-link head-nav-link" href="javascript:void(0);" data-toggle="modal" data-target="#enquiryPopupWrapper">Enquire Now</a></li>
						<li><a class="nav-link" href="tel:+91 22 3064 3065">+91 22 3064 3065</a></li>
						<li><a class="nav-link" href="mailto:sales@kalpataru.com">sales@kalpataru.com</a></li>
						<li><div class="d-none d-md-flex nav-link head-nav-link" href="#">FOLLOW</div></li>
						<li class="d-none d-md-flex nav-link head-nav-link footer-social-icons align-items-center">
							<?php /*<a href="http://instagram.com/kalpatarulimited" class="d-inline-block" target="_blank"><i class="demo-icon kalpataru-icon-instagram"></i></a>*/ ?>
							<a href="https://www.youtube.com/c/KalpatarulimitedOfficial" class="d-inline-block" target="_blank"><i class="demo-icon kalpataru-icon-youtube" title="YouTube"></i></a>
							<!-- <a href="https://www.youtube.com/" class="d-inline-block" target="_blank"><i class="demo-icon kalpataru-icon-twitter"></i></a> -->
							<a href="https://www.linkedin.com/company/kalpataru-limited" target="_blank" title="Linkedin">
								<svg style="height:24px;" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
									<g transform="translate(1)">
										<g>
											<g>
												<path d="M68.12,4.267c-18.773,0-35.84,6.827-48.64,19.627C5.827,37.547-1,54.613-1,72.533c0,18.773,7.68,35.84,20.48,48.64
													c12.8,12.8,30.72,20.48,47.787,19.627c0,0,0.853,0,1.707,0c17.067,0,33.28-6.827,46.08-19.627
													c12.8-12.8,20.48-29.867,20.48-48.64c0.853-17.92-6.827-34.987-19.627-47.787C103.107,11.093,86.04,4.267,68.12,4.267z
													 M103.107,109.227c-9.387,9.387-22.187,15.36-35.84,14.507c-12.8,0-26.453-5.12-35.84-14.507
													c-10.24-9.387-15.36-23.04-15.36-36.693s5.12-26.453,15.36-36.693c9.387-9.387,22.187-14.507,36.693-14.507
													c12.8,0,25.6,5.12,34.987,14.507c10.24,10.24,15.36,23.04,15.36,36.693S113.347,99.84,103.107,109.227z"/>
												<path d="M101.4,157.867H32.28c-13.653,0-24.747,11.093-24.747,25.6v298.667c0,13.653,11.947,25.6,25.6,25.6H101.4
													c13.653,0,25.6-11.947,25.6-24.747v-299.52C127,169.813,115.053,157.867,101.4,157.867z M109.933,482.987
													c0,4.267-4.267,7.68-8.533,7.68H33.133c-4.267,0-8.533-4.267-8.533-8.533V183.467c0-4.267,3.413-8.533,7.68-8.533h69.12
													c4.267,0,8.533,4.267,8.533,8.533V482.987z"/>
												<path d="M391.533,149.333h-17.92c-33.28,0-64.853,14.507-85.333,37.547v-11.947c0-8.533-8.533-17.067-17.067-17.067H185.88
													c-7.68,0-17.067,6.827-17.067,16.213v318.293c0,9.387,9.387,15.36,17.067,15.36h93.867c7.68,0,17.067-5.973,17.067-15.36v-184.32
													c0-28.16,20.48-50.347,46.933-50.347c13.653,0,26.453,5.12,35.84,14.507c8.533,7.68,11.947,19.627,11.947,34.987v183.467
													c0,8.533,8.533,17.067,17.067,17.067h85.333c8.533,0,17.067-8.533,17.067-17.067v-220.16
													C511,202.24,458.947,149.333,391.533,149.333z M493.933,489.813l-0.853,0.853h-83.627L408.6,307.2
													c0-20.48-5.12-35.84-16.213-46.933c-12.8-12.8-29.867-19.627-47.787-19.627c-35.84,0.853-64,29.867-64,67.413v182.613h-93.867
													V174.933h84.48l0.853,0.853v53.76l23.04-23.04l0.853-0.853c17.067-23.893,46.933-39.253,78.507-39.253h17.92
													c57.173,0,101.547,46.08,101.547,104.107V489.813z"/>
											</g>
										</g>
									</g>
								</svg>
							</a>
							<?php /*<a href="https://www.facebook.com/kalpatarugroup" class="d-inline-block" target="_blank"><i class="demo-icon kalpataru-icon-facebook"></i></a>*/ ?>
						</li>
						<!-- <li><a class="nav-link pr-0" href="#">SUBSCRIBE TO NEWSLETTER</a></li> -->
					</ul>
				</div>
				<div class="col-12">
					<ul class="footer-links text-center mb-0">
						<li class="d-flex justify-content-center d-md-none"><div class="nav-link head-nav-link" href="#">FOLLOW</div></li>
						<li class="d-flex justify-content-center d-md-none nav-link head-nav-link footer-social-icons">
							<?php /*<a href="http://instagram.com/kalpatarulimited" class="d-inline-block" target="_blank"><i class="demo-icon kalpataru-icon-instagram"></i></a>*/ ?>
							<a href="https://www.youtube.com/c/KalpatarulimitedOfficial" class="d-inline-block" target="_blank"><i class="demo-icon kalpataru-icon-youtube" title="YouTube"></i></a>
							<!-- <a href="https://www.youtube.com/" class="d-inline-block" target="_blank"><i class="demo-icon kalpataru-icon-twitter"></i></a> -->
							<a href="https://www.linkedin.com/company/kalpataru-limited" target="_blank" title="Linkedin">
								<svg style="height:24px;" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
									<g transform="translate(1)">
										<g>
											<g>
												<path d="M68.12,4.267c-18.773,0-35.84,6.827-48.64,19.627C5.827,37.547-1,54.613-1,72.533c0,18.773,7.68,35.84,20.48,48.64
													c12.8,12.8,30.72,20.48,47.787,19.627c0,0,0.853,0,1.707,0c17.067,0,33.28-6.827,46.08-19.627
													c12.8-12.8,20.48-29.867,20.48-48.64c0.853-17.92-6.827-34.987-19.627-47.787C103.107,11.093,86.04,4.267,68.12,4.267z
													 M103.107,109.227c-9.387,9.387-22.187,15.36-35.84,14.507c-12.8,0-26.453-5.12-35.84-14.507
													c-10.24-9.387-15.36-23.04-15.36-36.693s5.12-26.453,15.36-36.693c9.387-9.387,22.187-14.507,36.693-14.507
													c12.8,0,25.6,5.12,34.987,14.507c10.24,10.24,15.36,23.04,15.36,36.693S113.347,99.84,103.107,109.227z"/>
												<path d="M101.4,157.867H32.28c-13.653,0-24.747,11.093-24.747,25.6v298.667c0,13.653,11.947,25.6,25.6,25.6H101.4
													c13.653,0,25.6-11.947,25.6-24.747v-299.52C127,169.813,115.053,157.867,101.4,157.867z M109.933,482.987
													c0,4.267-4.267,7.68-8.533,7.68H33.133c-4.267,0-8.533-4.267-8.533-8.533V183.467c0-4.267,3.413-8.533,7.68-8.533h69.12
													c4.267,0,8.533,4.267,8.533,8.533V482.987z"/>
												<path d="M391.533,149.333h-17.92c-33.28,0-64.853,14.507-85.333,37.547v-11.947c0-8.533-8.533-17.067-17.067-17.067H185.88
													c-7.68,0-17.067,6.827-17.067,16.213v318.293c0,9.387,9.387,15.36,17.067,15.36h93.867c7.68,0,17.067-5.973,17.067-15.36v-184.32
													c0-28.16,20.48-50.347,46.933-50.347c13.653,0,26.453,5.12,35.84,14.507c8.533,7.68,11.947,19.627,11.947,34.987v183.467
													c0,8.533,8.533,17.067,17.067,17.067h85.333c8.533,0,17.067-8.533,17.067-17.067v-220.16
													C511,202.24,458.947,149.333,391.533,149.333z M493.933,489.813l-0.853,0.853h-83.627L408.6,307.2
													c0-20.48-5.12-35.84-16.213-46.933c-12.8-12.8-29.867-19.627-47.787-19.627c-35.84,0.853-64,29.867-64,67.413v182.613h-93.867
													V174.933h84.48l0.853,0.853v53.76l23.04-23.04l0.853-0.853c17.067-23.893,46.933-39.253,78.507-39.253h17.92
													c57.173,0,101.547,46.08,101.547,104.107V489.813z"/>
											</g>
										</g>
									</g>
								</svg>
							</a>
							<?php /*<a href="https://www.facebook.com/kalpatarugroup" class="d-inline-block" target="_blank"><i class="demo-icon kalpataru-icon-facebook"></i></a>*/ ?>
						</li>
					</ul>
				</div>
			</div>
		</div>			
	</div>
	<div class="container-fluid mainContainer footer-menu copyright-footer text-center FuturaBT-Medium">
		<div class="row">
			<div class="col-12 col-md">
				<div class="d-md-flex align-items-center footer-links">
					<div class="footer-logo"><?php include('assets_web/images/logo.svg'); ?></div>
					<div class="nav-link">COPYRIGHT &copy; <?php echo date("Y") ?> KALPATARU </div>		
				</div>		
			</div>
			<div class="col-12 col-md">
				<ul class="nav footer-links justify-content-md-end">
					<li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>privacy-policy" target="_blank" >PRIVACY POLICY</a></li>
					<li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>refund-policy" target="_blank" >REFUND POLICY</a></li>
					<!-- <li class="nav-item"><a class="nav-link" href="#">DISCLAIMER</a></li>
					<li class="nav-item"><a class="nav-link" href="#">SITEMAP</a></li> -->
				</ul>			
			</div>
		</div>
	</div>
	<!-- <br> -->
	<!-- <div data-aos-delay="300" class="container-fluid mainContainer footer-description-text">
		Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
	</div> -->
</footer>
	   
<!-- ================================================ End Dynamic Footer ================================================== -->	  
		
		
		
    </div>
    <?php include('footer-js.php'); ?>
	
	

    <?php if ($properties->is_pop_reload == 1):?>

        <!-- popup when user reache in footer -->
        <script>

            $(window).on('scroll', function() {




                if ($(window).scrollTop() >= $('.footer-menu').offset().top + $('.footer-menu').outerHeight() - window.innerHeight)
                {

                    setTimeout(function(){
                        $("#enquiryPopupWrapper").modal('show');
                        // $('html, body').animate({scrollTop: '-=50px'}, 800);
                        window.scrollBy(0, -100);
                        //$("html, body").animate({ scrollTop: 0 }, "slow");
                    },-0);
                }


            });


        </script>
        <!-- popup  -->
        <script>
            $(function(){
                setTimeout(function() {
                    $('#enquiryPopupWrapper').modal('show');
                }, 4000);
            });
        </script>



        <!-- if no activity popup -->
        <script>
            var IDLE_TIMEOUT = 40; //seconds
            var _idleSecondsCounter = 0;
            document.onclick = function() {
                _idleSecondsCounter = 0;
            };
            document.onmousemove = function() {
                _idleSecondsCounter = 0;
            };
            document.onkeypress = function() {
                _idleSecondsCounter = 0;
            };
            document.onscroll = function()
            {
                _idleSecondsCounter = 0;
            };

            window.setInterval(CheckIdleTime, 800);

            function CheckIdleTime() {
                _idleSecondsCounter++;
                var oPanel = document.getElementById("SecondsUntilExpire");
                if (oPanel)
                    oPanel.innerHTML = (IDLE_TIMEOUT - _idleSecondsCounter) + "";
                if (_idleSecondsCounter >= IDLE_TIMEOUT) {
                    $("#enquiryPopupWrapper").modal('show');
                }
            }
        </script>



     
        <script type="text/javascript">

            if (screen.width < 980) {

                setTimeout(function() {
                    $('#enquiryPopupWrapper').modal('show');
                }, 4000);

            }else
            {
                $('#enquiryPopupWrapper').modal('hide');
            }

        </script>

    <?php endif;?>


    <script type="text/javascript">
        var i = 1;
        $(window).scroll(function() {
            if (i == 1) {
                var id = "<?=$properties->id?>";
                var propertyid = {
                    "id": id
                };

                var sequence_no = '<?php echo $sequence_no; ?>';

                $.ajax({
                    url: '<?=base_url()?>website/getDataOnScroll',
                    type: 'POST',
                    data: JSON.stringify(propertyid),
                    contentType: 'application/json; charset=utf-8',
                    datatype: 'JSON',
                    async: false,
                    success: function(data) {
                        var value = JSON.parse(data);
                        var amenities = "";

                        if (value.amenities.length == 0) {
                            //$("#amenities").hide();
                        }
                        for (var j = 0; j < value.amenities.length; j++) {
                            amenities += '<div class="swiper-slide"> <div class="amenitiess-slider-container d-md-flex align-items-center" data-aos="fade"> <div class="amenities-slider-img grey-icon-bg"> <img src="' + value.amenities[j].icon + '" alt= "'+ value.amenities[j].svgalt +'" class="w-100 h-100"> </div> <div class="amenitiess-slider-text"> ' + value.amenities[j].title + ' </div></div> </div>';
                         }
                        $(".amenities-container").html(amenities);

                        var construction_details = "";
                        if (value.construction_details.length == 0) {
                            $("#construction_update").hide();
                        } else {
                            sequence_no = parseInt(sequence_no) + 1;
                            $("#construction_update_no").html("0" + sequence_no);
                        }
                        for (var k = 0; k < value.construction_details.length; k++) {
                            construction_details += '<div class="swiper-slide"> <div class="contruction-update-slider-container row align-items-center"> <div data-aos="fade" class="contruction-update-slider-img col-md-8"> <img src="' + value.construction_details[k].image + '" class="w-100"> </div> <div class="contruction-update-slider-text col-md-4"> <div data-aos="fade" data-aos-delay="100" class="contruction-update-project-name">' + value.construction_details[k].title + '</div> <div data-aos="fade" data-aos-delay="200" class="contruction-update-project-description">' + value.construction_details[k].text + '</div> </div> </div> </div>';
                        }
                        $(".construction-update").html(construction_details);

                        var property_details = "";
                        if (value.property_details.length == 0) {
                            $("#project_you_may_like").hide();
                        } else {
                            sequence_no = parseInt(sequence_no) + 1;
                            $("#project_you_may_like_no").html("0" + sequence_no);
                        }
                        for (var l = 0; l < value.property_details.length; l++) {
                            property_details += '<div class="swiper-slide"> <div class="you-may-like-slider-container" data-aos="fade"> <div class="you-may-like-slider-img"> <a href="' + value.property_details[l].rel_link + '"><img src="' + value.property_details[l].thumbnail_image + '" class="w-100" alt="' + value.property_details[l].thumbnail_image + '"></a> </div> <a href="' + value.property_details[l].rel_link + '"><div class="you-may-like-slider-heading"> ' + value.property_details[l].title + ' </div> <div class="you-may-like-slider-description d-flex justify-content-between"> <div class="you-may-like-slider-location">' + value.property_details[l].location_name + ', ' + value.property_details[l].city_name + '</div> <div class="you-may-like-slider-size">' + value.property_details[l].typology + '</div> </div></a> </div> </div>';
                        }
                        $(".related-project").html(property_details);
                        AOS.init();
                        var project_inner_contruction_update_slider = new Swiper('.project-inner-contruction-update-slider .swiper-container', {
                            slidesPerView: 1,
                            spaceBetween: 20,
                            /*autoplay: {
                                delay: 2000,
                            },*/
                            pagination: {
                                el: '.project-inner-contruction-update-slider .swiper-pagination',
                                type: 'fraction',
                                clickable: true,
                                // dynamicBullets: true,
                                renderFraction: function (currentClass, totalClass) {
                                  return '<span class="' + currentClass + '"></span>' +
                                          '<span class="fraction-divider"></span>' +
                                          '<span class="' + totalClass + '"></span>';
                                },
                            },
                            navigation: {
                                nextEl: '.project-inner-contruction-update-slider .swiper-button-next',
                                prevEl: '.project-inner-contruction-update-slider .swiper-button-prev',
                            },
                        });
                        var project_inner_you_may_like_slider = new Swiper('.project-inner-you-may-like-slider .swiper-container', {
                            slidesPerView: 3,
                            spaceBetween: 30,
                            simulateTouch: false,
                            autoplay: {
                                delay: 2000,
                            },
                            breakpoints: {
                                // when window width is <= 1100px
                                1100: {
                                    slidesPerView: 2,
                                    simulateTouch: true,
                                },
                                // when window width is <= 768px
                                768: {
                                    slidesPerView: 1,
                                },
                            },
                            pagination: {
                                el: '.project-inner-you-may-like-slider .swiper-pagination',
                                type: 'fraction',
                                clickable: true,
                                // dynamicBullets: true,
                                renderFraction: function(currentClass, totalClass) {
                                    return '<span class="' + currentClass + '"></span>' +
                                        '<span class="fraction-divider"></span>' +
                                        '<span class="' + totalClass + '"></span>';
                                },
                            },
                            navigation: {
                                nextEl: '.project-inner-you-may-like-slider .swiper-button-next',
                                prevEl: '.project-inner-you-may-like-slider .swiper-button-prev',
                            },
                        });
                    }
                });
            }
            i++;
        });
</script>
<style>

@media (max-width: 1000px){
    .gal
{
    padding-bottom: 15px;
}
}

</style>
</body>
</html>
