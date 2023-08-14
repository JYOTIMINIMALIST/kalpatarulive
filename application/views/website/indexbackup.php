<?php include('common.php'); $page='home'; ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Home | Kalpataru</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <?php include('header-css.php'); ?>
    <?php include('ga-code.php'); ?>
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
                                        <?php
                                        foreach ($slider as $key => $value) {    
                                            $ci = & get_instance();
                                            $ci->load->model('common_m');
                                            $title = $ci->common_m->seoUrl($value->title);
                                            ?>
                                            <div class="swiper-slide">
                                                <img src="<?=$value->featured_images?>" class="w-100 d-none d-lg-block home-banner-img-bg">
                                                <img src="<?=$value->featured_images?>" class="home-banner-img-bg w-100 d-block d-lg-none home-banner-img-bg">
                                                <div class="home-banner-text-container">
                                                    <div class="home-banner-text">
                                                        <div class="home-banner-project-name"><div><?=$value->title?></div></div>
                                                        <div class="home-banner-project-location Roboto-Medium">At <?=$value->location_name?><a class="icon-button d-inline-flex d-md-none" href="#"><div class="round-button"><div class="circle"></div><i class="kalpataru-icon-arrow-right"></i></div></a></div>
                                                        <div class="home-banner-project-description Roboto-Light"><?=$value->short_description?></div>
                                                    </div>
                                                    <a href="<?=base_url()?>projects/<?=$value->property_type?>/<?=$title?>/<?=$value->id?>" class="home-banner-project-link-button"><span>EXPLORE</span> <span>PROJECT</span></a>
                                                </div>
                                                <div class="home-banner-text-right">
                                                    <a href="<?=base_url()?>projects" class="home-banner-project-view-all-link-button"><span>VIEW ALL PROJECTS</span></a>
                                                </div>
                                            </div>
                                            <?php
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
                        <div class="d-flex align-items-center justify-content-between" data-aos="fade" data-aos-offset="0">
                            <div class="d-flex align-items-center">
                                <i class="kalpataru-icon-search"></i>
                                <span><span class="black-text">FIND YOUR NEXT</span> HOME</span>
                            </div>
                            <div class="desktopBannerSearchBtn round-button"><div class="circle"></div><i class="kalpataru-icon-arrow-right"></i></div>
                            <div class="mobileBannerSearchBtn round-button" data-toggle="modal" data-target="#searchPopupWrapper"><div class="circle"></div><i class="kalpataru-icon-arrow-right"></i></div>
                        </div>
                        <!-- Search filter Box Start --> 
                        <div class="searchFilterWrapper">
                            <div class="searchFilterIn">
                                <div class="searchFilterHead d-flex align-items-center justify-content-center">
                                    <div class="d-flex align-items-center">
                                        <div class="filter_Search"><i class="kalpataru-icon-search"></i></div>
                                        <span><span class="black-text">FIND YOUR NEXT</span> HOME</span>
                                    </div>
                                    <div class="filter_close_button"><i class="kalpataru-icon-close"></i></div>
                                </div>
                                <div class="searchFilterContent">
                                    <!-- Filter by location start -->
                                    <div class="searchFilterLocation ">
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
                                                        <ul class="dropdown-menu">
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
                                                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><div class="selectedValue">Select Locality</div>
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
                                                <input type="checkbox" name="search_options" id="4bhk" value="4" autocomplete="off">4 BHK
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
                                    <div class="swiper-slide home-featured-list-item w-100 col-9 p-0" >
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
                                                    <div data-aos="fade" data-aos-delay="400" data-aos-offset="0" class="home-featured-list-project-description Roboto-Regular"><?=$value->short_description?></div>
                                                    <a data-aos="fade" data-aos-delay="500" data-aos-offset="0" class="icon-button" href="<?=base_url()?>projects/<?=$value->property_type?>/<?=$title?>/<?=$value->id?>"><div class="round-button"><div class="circle"></div><i class="kalpataru-icon-arrow-right"></i></div> LEARN MORE</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                else{
                                    ?>
                                    <div class="swiper-slide home-featured-list-item w-100 col-9 p-0" >
                                        <div class="home-featured-list-item-container row align-items-center justify-content-center">
                                            <div class="home-featured-list-text-container col-md-5 p-0 col-12">
                                                <div class="home-featured-list-text">
                                                    <div data-aos="fade" data-aos-delay="100" data-aos-offset="0" class="home-featured-list-project-name"><?=$value->title?></div>
                                                    <div data-aos="fade" data-aos-delay="200" data-aos-offset="0" class="home-featured-list-project-location Roboto-Regular"><?=$value->location_name?></div>
                                                    <div data-aos="fade" data-aos-delay="300" data-aos-offset="0" class="home-featured-list-project-bhkcount Roboto-Regular"><?=$value->typology?></div>
                                                    <div data-aos="fade" data-aos-delay="400" data-aos-offset="0" class="home-featured-list-project-description Roboto-Regular"><?=$value->short_description?></div>
                                                    <a data-aos="fade" data-aos-delay="500" data-aos-offset="0" class="icon-button" href="<?=base_url()?>projects/<?=$value->property_type?>/<?=$title?>/<?=$value->id?>"><div class="round-button"><div class="circle"></div><i class="kalpataru-icon-arrow-right"></i></div> LEARN MORE</a>
                                                </div>
                                            </div>
                                            <div data-aos="fade" data-aos-delay="100" data-aos-offset="0" class="home-featured-list-img col-md-7 col-12">
                                                <div class="home-featured-list-img-container">
                                                    <img src="<?=$value->thumbnail_image?>" class="w-100">  
                                                </div>   
                                            </div>                                 
                                        </div>
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
                            <div class="double-main-heading double-main-heading-gold" data-aos="fade">02  ABOUT</div>
                            <!-- <div class="double-bg-heading double-bg-heading-gold">ABOUT</div> -->
                        </div>
                        <div class="about-description">
                            <div data-aos="fade" data-aos-delay="100" data-aos-offset="0">We bring over 4 decades of real estate excellence to developing and building premium residential towers, gated communities, townships and office properties. <br>
                            Our 100+ awards & accolades are testimony to our legacy. </div>
                            <div class="row align-items-end">
                                <div class="col-md-4">
                                    <div class="number-stats-list counter-box">
                                        <div class="number-stats-list-container" data-aos="fade" data-aos-delay="100">
                                            <div class="number-stats-list-number count" counter-value="50" decimal-place="0">50</div>
                                            <div class="number-stats-list-text">Years Of Sustained Growth </div>
                                        </div>
                                        <div class="number-stats-list-container" data-aos="fade" data-aos-delay="200">
                                            <div class="number-stats-list-number count" counter-value="1.95" decimal-place="2">1.95</div>
                                            <div class="number-stats-list-text">Million sq. m. Delivered </div>
                                        </div>
                                        <div class="number-stats-list-container" data-aos="fade" data-aos-delay="300">
                                            <div class="number-stats-list-number count" counter-value="105" decimal-place="0">105</div>
                                            <div class="number-stats-list-text">Landmark Projects </div>
                                        </div>
                                        <div class="number-stats-list-container" data-aos="fade" data-aos-delay="400">
                                            <div class="number-stats-list-number count" counter-value="17500" decimal-place="0">17500</div>
                                            <div class="number-stats-list-text">Happy Families </div>
                                        </div>
                                    </div>
                                    <a data-aos="fade" class="icon-button mt-4 mb-4 d-md-none" href="<?=base_url()?>company-profile"><div class="round-button"><div class="circle"></div><i class="kalpataru-icon-arrow-right"></i></div> LEARN MORE</a>
                                </div>
                                <div class="col-md-8 home_about_mid_image pt-4" data-aos="fade" data-aos-delay="100">
                                    <img src="<?php echo base_url(); ?>assets_web/images/home-about-us-01.jpg" class="w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 p-md-0 order-1 order-md-2">
                        <div class="small-heading d-md-none" data-aos="fade">03 ABOUT</div>
                        <img data-aos="fade" data-aos-delay="100" src="<?php echo base_url(); ?>assets_web/images/home-about-us.jpg" class="w-100">
                        <a data-aos="fade" data-aos-delay="200" class="icon-button mt-4 mb-4 d-md-flex d-none" href="<?=base_url()?>company-profile"><div class="round-button"><div class="circle"></div><i class="kalpataru-icon-arrow-right"></i></div> LEARN MORE</a>
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
                                <div class="double-main-heading double-main-heading-gold" data-aos="fade">03 TITLE GOES HERE</div>
                            </div>
                            <div class="titleGoesHereBig titleGoesHereBig mb-3 mt-2" data-aos="fade" data-aos-delay="100">TITLE GOES HERE</div>
                            <p class="mt-0 w-100" data-aos="fade" data-aos-delay="200">Lorem Ipsum has been the industry's standard dummy text ever since the 
                                1500s, when an unknown printer took a galley of type and scrambled it to 
                                make a type specimen book.Lorem Ipsum has been the industry's standard 
                                dummy text ever since the 1500s, when an unknown printer took a galley of
                            type and scrambled it to make a type specimen book.</p>
                            <a data-aos="fade" data-aos-delay="300" class="icon-button" href="#"><div class="round-button"><div class="circle"></div><i class="kalpataru-icon-arrow-right"></i></div>BOOK NOW</a>
                        </div>
                    </div>
                    <div class="col-md-6 mt-md-0 mt-4" data-aos="fade">
                        <div class="titleGoesHereImg">
                            <img class="w-100" src="<?php echo base_url(); ?>assets_web/images/titleGoesHereImg.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>            
    <?php include('footer.php'); ?>         
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
