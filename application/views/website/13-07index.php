<?php include('common.php'); $page='home'; ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Kalpataru Group | Top Real Estate Developer in India</title>
    <meta name="description" content="Kalpataru Group is a top real estate developer in India which aims to provide well-crafted homes & thoughtfully designed spaces since 1969. Visit us to know more.">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="google-site-verification" content="QIBP0qp3OyCdOP9g9NsaemSjzahvFvOrTK3VXKc50SY" />
    <?php include('header-css.php'); ?>
    <?php include('ga-code.php'); ?>
    
    <script type=""application/ld+json"">
                                                                                                                                                        {
  ""@context"": ""http://schema.org/"",
  ""@type"": ""Corporation"",
  ""name"": ""Kalpataru"",
  ""url"": ""https://www.kalpataru.com/"",
   ""telephone"": ""1800 300 00114"",
  ""address"": {
    ""@type": "PostalAddress"",
    ""streetAddress"": ""Kalpataru Ltd. 101, Kalpataru Synergy, Opp. Grand Hyatt, Santacruz (E)"",
    ""addressLocality"": ""Mumbai"",
    ""postalCode"": ""400055"",
    ""addressCountry"": ""IN""
  ""contactPoint"": [
    {
      ""@type"": ""ContactPoint"",
      ""telephone"": ""+9-122-306-4306"",
      ""contactType"": ""Customer service"",
      ""contactOption"": ""Toll free"",
      ""areaServed"": ""IN""
    },
    {
      ""@type"": ""ContactPoint"",
      ""telephone"": ""+1-800-300-0011"",
      ""contactType"": ""Technical support"",
      ""contactOption"": ""Toll free"",
      ""areaServed"": ""IN"",
      ""availableLanguage"": ""Hindi""
    }
  ],
""openingHoursSpecification"": [
    {
      ""@type"": ""OpeningHoursSpecification"",
      ""dayOfWeek"": [
        ""Monday""
      ],
      ""opens"": ""9:00 AM"",
      ""closes"": ""6:00 PM""
    },
    {
      ""@type"": ""OpeningHoursSpecification"",
      ""dayOfWeek"": [
        ""Tuesday""
      ],
      ""opens"": ""9:00 AM"",
      ""closes"": ""6:00 PM""
    },
    {
      ""@type"": ""OpeningHoursSpecification"",
      ""dayOfWeek"": [
        ""Wednesday""
      ],
      ""opens"": ""9:00 AM"",
      ""closes"": ""6:00 PM""
    },
    {
      ""@type"": ""OpeningHoursSpecification"",
      ""dayOfWeek"": [
        ""Thursday""
      ],
      ""opens"": "9:00 AM"",
      ""closes"": ""6:00 PM""
    },
    {
      ""@type"": ""OpeningHoursSpecification"",
      ""dayOfWeek"": [
        ""Friday""
      ],
      ""opens"": ""9:00 AM"",
      ""closes"": ""6:00 PM""
    },
    {
      ""@type"": ""OpeningHoursSpecification"",
      ""dayOfWeek"": [
        ""Saturday""
      ],
      ""opens"": "9:00 AM"",
      ""closes"": "6:00 PM""
    },
    {
      ""@type"": ""OpeningHoursSpecification"",
      ""dayOfWeek"": [
        ""Sunday""
      ],
      ""opens"": ""9:00 AM"",
      ""closes"": ""6:00 PM""
    }
  ]
  ""sameAs"": [
    ""https://www.youtube.com/channel/UC2Tcy5R3rUMHB5A3GXgMIyA/"",
    ""https://www.linkedin.com/company/kalpataru-limited""
  ]
}</script>
</head>
<body class="small-page home-page">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]--> 
        <div class="page-content <?php echo $page; ?> position-relative">
            <div class="page-body">
                <?php include('header.php'); ?> 
                <div class="home-banner divider-pagination">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 p-0 relative-box">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <!-- <div class="swiper-slide">
                                            <video class="w-100" loop autoplay muted playsinline>
                                                <source src="<?php echo base_url(); ?>assets_web/videos/1.mp4" type="video/mp4">
                                            </video>
                                            <div class="home-banner-text-container">
                                                <div class="home-banner-text">
                                                    <div class="home-banner-project-name"><div>Kalpataru Bliss</div></div>
                                                    <div class="home-banner-project-location Roboto-Medium">At TE Colony, Andheri <a class="icon-button d-inline-flex d-md-none" href="#"><div class="round-button"><div class="circle"></div><i class="kalpataru-icon-arrow-right"></i></div></a></div>
                                                    <div class="home-banner-project-description Roboto-Light">Yashodhan on SV  Road, is one of the most premium properties located in heart of Thane West.</div>
                                                </div>
                                                <a href="#" class="home-banner-project-link-button"><span>EXPLORE</span> <span>PROJECT</span></a>
                                            </div>
                                            <div class="home-banner-text-right">
                                                <a href="#" class="home-banner-project-view-all-link-button"><span>VIEW ALL PROJECTS</span></a>
                                            </div>
                                        </div> -->
                                        <?php
                                        foreach ($slider as $key => $value) {    
                                            $ci = & get_instance();
                                            $ci->load->model('common_m');
                                            $title = $ci->common_m->seoUrl($value->title);

                                            $bannertype = $banner_type[$key];
                                            if ($bannertype=='video') {
                                               ?>
                                               <div class="swiper-slide">
                                                <a href="<?=base_url().$value->city_slug.'/'.$value->slug?>"><?php /*=$title?>/<?=$value->id*/ ?>
                                                    <?php
                                                    if(strpos($value->featured_video, 'amazonaws.com') !== false || strpos($value->featured_video, 'cloudfront.net') !== false || strpos($value->featured_video, 'http://localhost/kalpataru/') !== false){
                                                        $video = $value->featured_video;
                                                        $video1 = $value->featured_mobile_video;
                                                        ?>
                                                        <video class="w-100 d-none d-lg-block" loop autoplay muted playsinline>
                                                            <source src="<?=$video?>" type="video/mp4">
                                                        </video>
                                                        <video class="w-100 d-block d-lg-none mobileHomeVid" loop autoplay muted playsinline>
                                                            <source src="<?=$video1?>" type="video/mp4">
                                                        </video>
                                                            <?php
                                                        }
                                                        else
                                                        {
                                                          $video = $value->featured_video;
                                                      }
                                                      ?>
                                                      <div class="home-banner-text-container">
                                                        <div class="home-banner-text">
                                                            <div class="home-banner-project-name"><div><?=$value->title?></div></div>
                                                            <div class="home-banner-project-location Roboto-Medium">At <?=$value->location_name?><div class="icon-button d-inline-flex d-md-none"><div class="round-button"><div class="circle"></div><i class="kalpataru-icon-arrow-right"></i></div></div></div>
                                                            <div class="home-banner-project-description Roboto-Light"><?=(!empty($value->featured_description)?$value->featured_description:$value->short_description);?></div>
                                                        </div>
                                                        <div class="home-banner-project-link-button"><span>EXPLORE</span> <span>PROJECT</span></div>
                                                    </div>
                                                    <!-- <div class="home-banner-text-right">
                                                        <a href="#" class="home-banner-project-view-all-link-button"><span>VIEW ALL PROJECTS</span></a>
                                                    </div> -->
                                                </a>
                                            </div>
                                            <?php
                                        }
                                        else{
                                           ?>
                                           <div class="swiper-slide">
                                            <a href="<?=base_url().$value->city_slug.'/'.$value->slug?>"><?php /*=$title?>/<?=$value->id*/ ?>
                                                <img src="<?=$value->featured_images?>" class="w-100 d-none d-lg-block home-banner-img-bg">
                                                <img src="<?=$value->featured_images_mobile?>" class="home-banner-img-bg w-100 d-block d-lg-none home-banner-img-bg">
                                                <div class="home-banner-text-container">
                                                    <div class="home-banner-text">
                                                        <div class="home-banner-project-name"><div><?=$value->title?></div></div>
                                                        <div class="home-banner-project-location Roboto-Medium">At <?=$value->location_name?><div class="icon-button d-inline-flex d-md-none" href="#"><div class="round-button"><div class="circle"></div><i class="kalpataru-icon-arrow-right"></i></div></div></div>
                                                        <div class="home-banner-project-description Roboto-Light"><?=(!empty($value->featured_description)?$value->featured_description:$value->short_description);?></div>
                                                    </div>
                                                    <div class="home-banner-project-link-button"><span>EXPLORE</span> <span>PROJECT</span></div>
                                                </div>
                                            </a>
                                                <!-- <div class="home-banner-text-right">
                                                    <a href="<?=base_url()?>projects" class="home-banner-project-view-all-link-button"><span>VIEW ALL PROJECTS</span></a>
                                                </div> -->
                                            </div>
                                            <?php
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="swiper-pagination"></div>
                                <div class="swiper-navigation-container">
                                    <div class="swiper-button-prev"><i class="kalpataru-icon-left-arrow"></i></div>
                                    <div class="swiper-button-next"><i class="kalpataru-icon-right-arrow"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Banner Search Container Start -->
                <div class="banner-search-container">
                    <!-- Desktop Search bar -->
                    <div class="banner-search-container-desktop-inner d-flex align-items-center justify-content-between" data-aos="fade" data-aos-offset="0">
                        <div class="d-flex align-items-center">
                            <i class="kalpataru-icon-search d-block"></i>
                            <span><span class="black-text">FIND YOUR NEXT</span> HOME</span>
                        </div>
                        <div class="desktopBannerSearchBtn round-button home_icon_bar"><div class="circle"></div><i class="kalpataru-icon-arrow-right"></i></div>
                    </div>

                    <!-- Mobile Search bar -->
                    <div class="banner-search-container-mobile-inner d-flex align-items-center justify-content-between" data-aos="fade" data-aos-offset="0" data-toggle="modal" data-target="#searchPopupWrapper" data-toggle="modal" data-target="#searchPopupWrapper">
                        <div class="d-flex align-items-center">
                            <i class="kalpataru-icon-search d-block"></i>
                            <span><span class="black-text">FIND YOUR NEXT</span> HOME</span>
                        </div>
                        <div class="desktopBannerSearchBtn round-button"><div class="circle"></div><i class="kalpataru-icon-arrow-right"></i></div>
                    </div>

                    <!-- Search filter Box Start --> 
                    <div class="searchFilterWrapper">
                        <div class="searchFilterIn"  id="search_full_width">
                            <div class="searchFilterHead d-flex align-items-center justify-content-center">
                                
                                <div class="d-flex align-items-center">
                                    <div class="filter_Search search-container" id="prefetch">
                                        <form action="<?= base_url('project-search')?>" method="get" autocomplete="off"  class="search-form">
                                            <input type="submit" value="" class="search-submit">
                                            <input type="search" name="search_box" id="search_box" class="search-text typeahead" placeholder="FIND YOUR NEXT HOME" >
                                            <i></i>
                                        </form>
                                    </div>
                                    <span><span class="black-text">FIND YOUR NEXT</span> HOME</span>
                                </div>
                                
                                <div class="filter_close_button filter_close_button_home round-button"><div class="circle"></div><div class="caret-down dropdown_arrow">
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>
                            </div>
							
                            <div class="searchFilterDesktopTabs">
                                <div class="d-flex align-items-center">
                                    <div class="searchFilterLabel">Property Type:</div>
                                    <div class="propertyTypeTabWrap searchFilterDropdownWrapper d-flex justify-content-between list-group flex-row">
                                       <a class="propertyTypeTab active" data-value="residential"  data-toggle="list" onclick="getCitiesFor('residential',1)" href="#residentialTabDesk">RESIDENTIAL</a>
                                        <a class="propertyTypeTab" data-value="commercial" data-toggle="list" onclick="getCitiesFor('commercial',1)" href="#commercialTabDesk">COMMERCIAL</a>
                                    </div>
                                </div>
                            </div>
                            <div class="searchFilterContent">
                                <!-- Filter by location start -->
                                <div class="searchFilterLocation">
                                    <div class="custom_dropdown_element d-flex align-items-center">
                                        <div class="searchFilterLabel">Location:</div>
                                        <div class="searchFilterDropdownWrapper d-flex">
                                            <div class="searchFilterDropdown">
                                                <div class="custom_dropdown_box">
                                                    <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><div class="selectedValue">Select a City </div>
                                                        <div class="dropdown_arrow">
                                                            <span></span>
                                                            <span></span>
                                                        </div>
                                                    </a>
                                                    <input type="hidden" id="search_city" name="search_city">
                                                    <ul class="dropdown-menu search-city">
                                                        <?php
                                                        foreach ($cities as $key => $value) {
                                                            echo '<li onclick="getLocations('.$value->id.',1)" class="dropdown-item">'.$value->title.'</li>';
                                                        }
                                                        ?>                                                        
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="searchFilterDropdown">
                                                <div class="custom_dropdown_box">
                                                    <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><div class="selectedValue">Select Region</div>
                                                        <div class="dropdown_arrow">
                                                            <span></span>
                                                            <span></span>
                                                        </div>
                                                    </a>
                                                    <input type="hidden" id="search_location" name="search_location">
                                                    <ul class="dropdown-menu search-location">

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Search by location end -->

                                <!-- Filter by Configuration start -->
                                <div class="searchFilterConfiguration selectConfigurationWrapper d-flex align-items-center">
                                    <div class="searchFilterLabel">Configuration:</div>
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                        <label class="btn active">
                                            <input type="checkbox" name="search_options" id="1bhk" value="1" autocomplete="off">1 BHK
                                        </label>
                                        <label class="btn">
                                            <input type="checkbox" name="search_options" id="2bhk" value="2" autocomplete="off">2 BHK
                                        </label>
                                        <label class="btn">
                                            <input type="checkbox" name="search_options" id="3bhk" value="3" autocomplete="off">3 BHK
                                        </label>
                                        <label class="btn">
                                            <input type="checkbox" name="search_options" id="4bhk" value="4" autocomplete="off">4+BHK
                                        </label>
                                    </div>
                                </div>
                                <!-- Filter by Configuration end -->
                                <div class="filterApplyButton text-center">
                                    <input type="button" name="apply" value="apply" onclick="searchResult(1)" class="kalpataru_btn">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Search filter Box end -->
                </div>
                <!-- Banner Search Container end -->
            </div>   
            <div class="home-featured-section bigTitleAnimationSection">
                <div class="container-fluid mainContainer">
                    <div class="double-bg-header">
                        <div class="double-main-heading double-main-heading-gold" data-aos="fade">01  FEATURED</div>
                        <!-- <div class="double-bg-heading double-bg-heading-gold">FEATURED</div> -->
                    </div>
                    <div class="swiper-container">
                        <div class="swiper-wrapper home-featured-list">
                           <?php
                           foreach ($featured as $key => $value) {    
                            $ci = & get_instance();
                            $ci->load->model('common_m');
                            $title = $ci->common_m->seoUrl($value->title);
                            if ($key==0 || $key%2==0) {
                                ?>
                                <div class="swiper-slide home-featured-list-item w-100 col-9 p-0">
                                    <a href="<?=base_url().$value->city_slug.'/'.$value->slug?>"><?php /*=$title?>/<?=$value->id*/ ?>
                                        <div class="home-featured-list-item-container row align-items-center justify-content-center">
                                            <div data-aos="fade" data-aos-delay="100" data-aos-offset="0" class="home-featured-list-img col-md-7 col-12">
                                                <div class="home-featured-list-img-container">
                                                    <img src="<?=$value->thumbnail_image?>" class="w-100"> 
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
                            else{
                                ?>
                                <div class="swiper-slide home-featured-list-item w-100 col-9 p-0" >
                                    <a href="<?=base_url().$value->city_slug.'/'.$value->slug?>"><?php /*=$title?>/<?=$value->id*/ ?>
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
                                                    <img src="<?=$value->thumbnail_image?>" class="w-100">  
                                                </div>   
                                            </div>                                 
                                        </div>
                                    </a>
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-navigation-container">
                    <div class="swiper-button-prev hiddenOnDesktop"></div>
                    <div class="swiper-button-next hiddenOnDesktop"></div>
                </div>
            </div>
        </div>   
        <div class="home-location-section d-none bigTitleAnimationSection">
            <div class="container-fluid mainContainer">
                <div class="double-bg-header">
                    <div class="double-main-heading double-main-heading-gold" data-aos="fade">02  LOCATE</div>
                    <!-- <div class="double-bg-heading double-bg-heading-gold">LOCATE</div> -->
                </div>

                <div class="filter-maps-list text-uppercase filter-maps-list-mobile-slider">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="filter-maps-item active">
                                    <div class="filter-maps-project">All Projects</div>                               
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="filter-maps-item">
                                    <div class="filter-maps-project">Commercial Projects</div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="filter-maps-item">
                                    <div class="filter-maps-project">Residential Projects</div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                             <div class="filter-maps-item">
                                <div class="filter-maps-project">Commercial Projects</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="filter-maps-item">
                                <div class="filter-maps-project">Featured Projects</div>   
                            </div>  
                        </div>
                    </div>
                </div>                             
            </div>
        </div>
        <div class="map-section">
            <div id='map'></div>
            <div class="container h-100">
                <div class="col-md-4 h-100 pl-0">
                    <div class="filter-maps-list text-uppercase">
                        <div class="filter-maps-list-desktop">
                            <div class="filter-maps-item active">
                                <div class="filter-maps-project">All Projects</div>                      
                            </div>
                            <div class="filter-maps-item">
                                <div class="dropdown open">
                                    <div class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Residential Projects
                                    </div>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                        <div class="dropdown-item"><div class="filter-maps-project" location="[72.8289, 18.9494]">Mumbai</div></div>
                                        <div class="dropdown-item"><div class="filter-maps-project" location="[73.84912305544913, 18.523275968627033]">Pune</div></div>
                                        <div class="dropdown-item"><div class="filter-maps-project" location="[75.868041, 22.716439]">Indore</div></div>
                                        <div class="dropdown-item"><div class="filter-maps-project" location="[77.210197, 28.61694790]">Delhi</div></div>
                                        <div class="dropdown-item"><div class="filter-maps-project" location="[78.473557561, 17.360604271]">Hyderabad</div></div>
                                        <div class="dropdown-item"><div class="filter-maps-project" location="[88.350158, 22.567046631]">Kolkata</div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="filter-maps-item">
                                <div class="filter-maps-project">Commercial Projects</div>
                            </div>
                            <div class="filter-maps-item">
                                <div class="filter-maps-project">Featured Projects</div>   
                            </div>   
                        </div>                              
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <div class="home-about-section bigTitleAnimationSection pt-md-5">
        <div class="container container-left pr-md-0">   
            <div class="row">
                <div class="col-md-6 order-2 order-md-1">
                    <div class="double-bg-header d-none d-md-block mb-md-4 mt-md-4 pt-md-5">
                        <div class="double-main-heading double-main-heading-gold" data-aos="fade">02 ABOUT</div>
                        <!-- <div class="double-bg-heading double-bg-heading-gold">ABOUT</div> -->
                    </div>
                    <div class="about-description">
                        <div data-aos="fade" data-aos-delay="100" data-aos-offset="0">We bring more than 5 decades of real estate Excellence to developing and building premium residential towers, gated communities, townships and office properties. Our 100+ awards & accolades are testimony to our legacy. </div>
                        <div class="row align-items-end">
                            <div class="col-md-4">
                                <div class="number-stats-list counter-box">
                                    <div class="number-stats-list-container" data-aos="fade" data-aos-delay="100">
                                        <div>
                                            <span class="number-stats-list-number count" counter-value="50" decimal-place="0">50</span><span>+</span>
                                        </div>
                                        <div class="number-stats-list-text">Years of sustained Growth</div>
                                    </div>
                                    <div class="number-stats-list-container" data-aos="fade" data-aos-delay="200">
                                        <div class="number-stats-list-number count" counter-value="21.72" decimal-place="2">21.72</div>
                                        <div class="number-stats-list-text">Million sq. m. Delivered </div>
                                    </div>
                                    <div class="number-stats-list-container" data-aos="fade" data-aos-delay="300">
                                        <div>
                                            <span class="number-stats-list-number count" counter-value="105" decimal-place="0">105</span><span>+</span>
                                        </div>
                                        <div class="number-stats-list-text">Landmark Projects </div>
                                    </div>
                                    <div class="number-stats-list-container" data-aos="fade" data-aos-delay="400">
                                        <div class="number-stats-list-number count" counter-value="18628" decimal-place="0">18,628</div>
                                        <div class="number-stats-list-text">Happy Families </div>
                                    </div>
                                </div>
                                <a class="icon-button mt-4 mb-4 d-md-none" href="<?=base_url()?>company-profile"><div class="round-button"><div class="circle"></div><i class="kalpataru-icon-arrow-right"></i></div> LEARN MORE</a>
                            </div>
                            <div class="col-md-8 home_about_mid_image pt-4" data-aos="fade" data-aos-delay="100">
                                <img src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/home-about-usNew.jpg" class="w-100">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-md-0 order-1 order-md-2">
                    <div class="small-heading d-md-none" data-aos="fade">03 ABOUT</div>
                    <img data-aos="fade" data-aos-delay="100" src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/home-about-us.jpg" class="w-100">
                    <a class="icon-button mt-4 mb-4 d-md-flex d-none" href="<?=base_url()?>company-profile"><div class="round-button"><div class="circle"></div><i class="kalpataru-icon-arrow-right"></i></div> LEARN MORE</a>
                </div>
            </div>
        </div>
    </div>

    <div class="titleGoesHereSection">
        <div class="container-fluid mainContainer">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="titleGoesHereDesc pr-md-5 pr-0">
                        <div class="double-bg-header m-0 mb-3">
                            <div class="double-main-heading double-main-heading-gold" data-aos="fade">03 BOOK WITH US FROM ANYWHERE</div>
                        </div>
                        <p class="mt-0 w-100" data-aos="fade" data-aos-delay="200">Your home booking process with us is now made even more effortless with our new online
                        booking platform. Experience the new seamless online booking option with us.</p>
                        <a data-aos="fade" data-aos-delay="300" class="icon-button" href="https://booking.kalpataru.com/" target="_blank"><div class="round-button"><div class="circle"></div><i class="kalpataru-icon-arrow-right"></i></div>Learn more</a>
                    </div>
                </div>
                <div class="col-md-6 mt-md-0 mt-4" data-aos="fade">
                    <div class="titleGoesHereImg">
                        <img class="w-100" src="<?php echo base_url() ?>assets_web/images/KL-OBP-Homepage-2.jpg" alt="Luxury Homes">
                    </div>
                </div>
            </div>
        </div>
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
		<div class="mostSearchedPropery">
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
		<div class="mostSearchedPropery d-none">
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
		<div class="mostSearchedPropery d-none">
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



      
<div class="project_bg"></div>   
</div>

<?php include('footer-js.php'); ?>
        <!-- <script src='https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.js'></script>
        <link href='https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.css' rel='stylesheet' />
        <script>
            mapboxgl.accessToken = 'pk.eyJ1IjoibWFja3JhbCIsImEiOiJjazVnYjc2ZHcwNXl1M2twZTVpZjVnaG9uIn0.Sj4aeLGGlZm2M8BcQ1unpQ';
            var Mumbai = [72.8289, 18.9494];
            var Pune = [73.84912305544913, 18.523275968627033];
            var current_location = Mumbai;
            function ipLookUp () {
                $.ajax('http://ip-api.com/json')
                .then(
                    function success(response) {
                        console.log('User\'s Location Data is ', response);
                        console.log('User\'s City', response.city);
                        if(response.city != "Pune") current_location = Pune;
                        console.log(current_location);
                    },
                    function fail(data, status) {
                        console.log('Request failed.  Returned status of',status);
                    }
                );
            }
            ipLookUp();
            // var start = [72.8289, 18.9494];
            // var end = [75.868041, 22.716439];
            var stores = {
                "type": "FeatureCollection",
                "features": [
                    {
                        "type": "Feature",
                        "geometry": {
                            "type": "Point",
                            "coordinates": [72.98213239284087, 19.22889500261148]
                        },
                        "properties": {
                            "phoneFormatted": "(091) 999-9999",
                            "phone": "0919999999",
                            "address": "Kalpataru Parkcity, Thane",
                            "city": "Mumbai",
                            "state": "Maharashtra",
                            "country": "India"
                        }
                    },
                    {
                        "type": "Feature",
                        "geometry": {
                            "type": "Point",
                            "coordinates": [72.99077784027588, 19.23130325644344]
                        },
                        "properties": {
                            "phoneFormatted": "(091) 999-9999",
                            "phone": "0919999999",
                            "address": "Kalpataru Sunrise, Thane",
                            "city": "Mumbai",
                            "state": "Maharashtra",
                            "country": "India"
                        }
                    },
                    {
                        "type": "Feature",
                        "geometry": {
                            "type": "Point",
                            "coordinates": [72.99204958102723, 19.233701944630226]
                        },
                        "properties": {
                            "phoneFormatted": "(091) 999-9999",
                            "phone": "0919999999",
                            "address": "Kalpataru Imensa, Thane",
                            "city": "Mumbai",
                            "state": "Maharashtra",
                            "country": "India"
                        }
                    },
                    {
                        "type": "Feature",
                        "geometry": {
                            "type": "Point",
                            "coordinates": [72.86278547511688, 19.072132407105002]
                        },
                        "properties": {
                            "phoneFormatted": "(091) 999-9999",
                            "phone": "0919999999",
                            "address": "Kalpataru Bliss, Thane",
                            "city": "Mumbai",
                            "state": "Maharashtra",
                            "country": "India"
                        }
                    },
                    {
                        "type": "Feature",
                        "geometry": {
                            "type": "Point",
                            "coordinates": [77.36758189173156, 28.518943928408163]
                        },
                        "properties": {
                            "phoneFormatted": "(091) 999-9999",
                            "phone": "0919999999",
                            "address": "Kalpataru Vista, Noida",
                            "city": "Noida",
                            "state": "Uttar Pradesh",
                            "country": "India"
                        }
                    },
                    {
                        "type": "Feature",
                        "geometry": {
                            "type": "Point",
                            "coordinates": [80.25092946939151, 13.059954159329564]
                        },
                        "properties": {
                            "phoneFormatted": "(091) 999-9999",
                            "phone": "0919999999",
                            "address": "One Crest Chennai",
                            "city": "Chennai",
                            "state": "Tamil Nadu",
                            "country": "India"
                        }
                    },
                    {
                        "type": "Feature",
                        "geometry": {
                            "type": "Point",
                            "coordinates": [78.43156905341448, 17.459856139548336]
                        },
                        "properties": {
                            "phoneFormatted": "(091) 999-9999",
                            "phone": "0919999999",
                            "address": "Kalpataru Residency Hyderabad",
                            "city": "Hyderabad",
                            "state": "Telangana",
                            "country": "India"
                        }
                    },
                    {
                        "type": "Feature",
                        "geometry": {
                            "type": "Point",
                            "coordinates": [73.78232221037126, 18.561935161454713]
                        },
                        "properties": {
                            "phoneFormatted": "(091) 999-9999",
                            "phone": "0919999999",
                            "address": "Kalpataru Jade Residences Baner",
                            "city": "Pune",
                            "state": "Maharashtra",
                            "country": "India"
                        }
                    },
                    {
                        "type": "Feature",
                        "geometry": {
                            "type": "Point",
                            "coordinates": [73.77527379203752, 18.590589633846733]
                        },
                        "properties": {
                            "phoneFormatted": "(091) 999-9999",
                            "phone": "0919999999",
                            "address": "Kalpataru Exquisite Wakad",
                            "city": "Pimpri-Chinchwad",
                            "state": "Maharashtra",
                            "country": "India"
                        }
                    },
                    {
                        "type": "Feature",
                        "geometry": {
                            "type": "Point",
                            "coordinates": [73.77527379203752, 18.590589633846733]
                        },
                        "properties": {
                            "phoneFormatted": "(091) 999-9999",
                            "phone": "0919999999",
                            "address": "Kalpataru Serenity Manjri",
                            "city": "Pune",
                            "state": "Maharashtra",
                            "country": "India"
                        }
                    },
                    /*{
                      "type": "Feature",
                      "geometry": {
                        "type": "Point",
                        "coordinates": [
                          -77.049766,
                          38.900772
                        ]
                      },
                      "properties": {
                        "phoneFormatted": "(202) 507-8357",
                        "phone": "2025078357",
                        "address": "2221 I St NW",
                        "city": "Washington DC",
                        "country": "United States",
                        "crossStreet": "at 22nd St NW",
                        "postalCode": "20037",
                        "state": "D.C."
                      }
                    },*/
                ]
            };
            stores.features.forEach(function(store, i){
              store.properties.id = i;
            });
            var map = new mapboxgl.Map({
                container: 'map',
                style: 'mapbox://styles/mapbox/streets-v10',
                center: current_location,
                zoom: 9
            });
            // help view-source:https://docs.mapbox.com/help/demos/gl-store-locator/step-five.html
            map.on('load', function() {
                map.loadImage(
                    // 'images/map-marker.png',
                    'images/kalpataru-map-marker.jpg',
                    function(error, image) {
                        if (error) throw error;
                        map.addImage('map-marker', image);
                        map.addLayer({
                            'id': 'points',
                            'type': 'symbol',
                            'source': {
                                'type': 'geojson',
                                /*'data': {
                                    'type': 'FeatureCollection',
                                    'features': [{
                                        'type': 'Feature',
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [72.8289, 18.9494]
                                        }
                                    }]
                                }*/
                                "data": stores
                            },
                            'layout': {
                                'icon-image': 'map-marker',
                                // 'icon-size': 0.8
                                'icon-size': 1.2
                            }
                        });
                    }
                );
            });
             
            var isAtStart = true;   
             
            // document.getElementById('fly').addEventListener('click', function() {
            $('.filter-maps-project').on('click', function(e) {
                $('.filter-maps-list .filter-maps-item').removeClass('active');
                $(this).parents('.filter-maps-item').addClass('active');
                // depending on whether we're currently at point a or b, aim for
                // point a or b
                // var target = isAtStart ? end : start;

                var goto_location = $.parseJSON($(this).attr('location'));
                // console.log(goto_location, target);
                 
                // and now we're at the opposite point
                // isAtStart = !isAtStart;
                 
                map.flyTo({
                    // These options control the ending camera position: centered at
                    // the target, at zoom level 9, and north up.
                    // center: target,
                    center: goto_location,
                    zoom: 9,
                    bearing: 0,
                     
                    // These options control the flight curve, making it move
                    // slowly and zoom out almost completely before starting
                    // to pan.
                    speed: 0.5, // make the flying slow
                    curve: 2, // change the speed at which it zooms out
                     
                    // This can be any easing function: it takes a number between
                    // 0 and 1 and returns another number between 0 and 1.
                    easing: function(t) {
                        return t;
                    },
                     
                    // this animation is considered essential with respect to prefers-reduced-motion
                    essential: true
                });
            });
        </script>
        <script type="text/javascript">
            if ($(window).width() >= 1200) {
                var controller = new ScrollMagic.Controller();

                $(".home-featured-section").each(function() {
                    var tl = new TimelineMax();
                    var child = $(this).find(".home-featured-list-text");
                    tl.to(child, 1, { y:-60, ease: Linear.easeNone});

                    var scene = new ScrollMagic.Scene({
                        triggerElement: this,
                        triggerHook: 0.4,
                        duration: "100%"
                    })
                    .setTween(tl)
                    .addTo(controller);

                });
            }

        </script> -->
        <!--  -->

        <script type="text/javascript">
          function selectLocation(location_id)
          {
            $("#search_location").val(location_id);
        }
    </script>
</body>
</html>
