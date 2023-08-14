<?php include('common.php'); $page='sustainability_page'; ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Sustainability | Kalpataru</title>
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
                <div class="common_banner backgroundImg common_banner_without_bg position-relative" >
                    <img class="w-100" src="<?php echo base_url();?>assets_web/images/sustainability-bannerNew1.jpg">
                     <!-- Video Provision -->
                    <!-- <video loop autoplay muted playsinline>
                          <source src="<?php echo base_url(); ?>videos/1.mp4" type="video/mp4">
                    </video> -->
                      <!-- Video Provision end-->
                    <div class="common_banner_text position-absolute">
                        <div class="container-fluid mainContainer h-100">
                            <div class="d-flex align-items-center h-100">
                                <h1 class="History-Pro mb-0" data-aos="fade" data-aos-offset="0">sustainability</h1>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="group_company_desc text-center">
                    <div class="container-fluid mainContainer">
                        <div class="max-550 mx-auto">
                            <h2 data-aos="fade" data-aos-offset="0" data-aos-delay="100">APPROACH TO SUSTAINABILITY</h2>
                            <p class="mb-2" data-aos="fade" data-aos-offset="0" data-aos-delay="300">Our values guide what we do and how we work, and we consider Green Thinking to be a clear business advantage. Our approach to sustainability aligns 3 factors – social equity (People), the environment (Planet) and economics (Profit).</p>

                            <p data-aos="fade" data-aos-offset="0" data-aos-delay="500">
                            We endeavor to construct and develop buildings that minimise risk to health, safety and the environment and optimize efficiencies in resource management and operational performance.</p>
                        </div>
                    </div>
                </div>

                <!-- Aspects of sustainability start-->
                <div class="aspectsOfSustainability_section bigTitleAnimationSection">
                    <div class="container-fluid mainContainer">
                        <div class="double-bg-header">
                            <div class="double-main-heading double-main-heading-gold" data-aos="fade" data-aos-offset="0">ASPECTS OF SUSTAINABILITY DEVELOPMENT IN OUR PROJECTS</div>
                            <div class="double-bg-heading double-bg-heading-gold">ASPECTS</div>
                        </div>
                    </div>

                    <div class="container-fluid mainContainer aspectsOfSustainabilityTab csrTab">
                        <div class="aspectsOfSustainabilityTabSlider position-relative" data-aos="fade">
                            <div class="swiper-container"> 
                                <ul class="swiper-wrapper nav nav-tabs flex-nowrap align-items-end">
                                    <li class="swiper-slide">
                                        <a class="csr_tab_link active transition h-100" data-toggle="tab" href="#rainWater">Rain Water Harvesting</a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a class="csr_tab_link transition" data-toggle="tab" href="#trafficAnalysis">Traffic Analysis</a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a class="csr_tab_link transition" data-toggle="tab" href="#waterConservation">Water Conservation</a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a class="csr_tab_link transition" data-toggle="tab" href="#energyEfficiency">Energy Efficiency in buildings</a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a class="csr_tab_link transition" data-toggle="tab" href="#trafficAnalysis">Traffic Analysis</a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a class="csr_tab_link transition" data-toggle="tab" href="#rainWater">Rain Water Harvesting</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Tab content start -->
                        <div class="sustainabilityTabContent" data-aos="fade" data-aos-delay="300">
                           <div class="tab-content">
                                <div id="rainWater" class="tab-pane fade show active">
                                    <div class="SustainabilityTabcontentInn text-center">
                                        <img class="w-100" src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/icons/water-drop.png" alt="Water Drop">
                                        <p>In India, majority of the people are dependent on monsoon, where rainfall extends from June to October and much of the precious water is lost as surface runoff. Hence, it is important to conserve and recharge natural aquifer to ensure that this essential resource for life is not depleted.</p>

                                        <p>Our Projects are designed to control Ground Water Depletion by employing the following Rain Water Harvesting (RWH) schemes designed by specialized consultants.</p>

                                        <p>Identifying the Rain Water Harvesting (RWH) potential of an area with use of Hydro-geological study from experts.
                                        Diverting maximum surface runoff from stormwater drains and total rooftop runoff to Rainwater Harvesting system.</p>
                                    </div>
                                </div>

                                <div id="trafficAnalysis" class="tab-pane fade">
                                    <div class="SustainabilityTabcontentInn text-center">
                                        <img class="w-100" src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/icons/water-drop.png" alt="Water Drop">
                                        <p>In India, majority of the people are dependent on monsoon, where rainfall extends from June to October and much of the precious water is lost as surface runoff. Hence, it is important to conserve and recharge natural aquifer to ensure that this essential resource for life is not depleted.</p>

                                        <p>Our Projects are designed to control Ground Water Depletion by employing the following Rain Water Harvesting (RWH) schemes designed by specialized consultants.</p>

                                        <p>Identifying the Rain Water Harvesting (RWH) potential of an area with use of Hydro-geological study from experts.
                                        Diverting maximum surface runoff from stormwater drains and total rooftop runoff to Rainwater Harvesting system.</p>
                                    </div>
                                </div>

                                <div id="waterConservation" class="tab-pane fade">
                                    <div class="SustainabilityTabcontentInn text-center">
                                        <img class="w-100" src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/icons/water-drop.png" alt="Water Drop">
                                        <p>In India, majority of the people are dependent on monsoon, where rainfall extends from June to October and much of the precious water is lost as surface runoff. Hence, it is important to conserve and recharge natural aquifer to ensure that this essential resource for life is not depleted.</p>

                                        <p>Our Projects are designed to control Ground Water Depletion by employing the following Rain Water Harvesting (RWH) schemes designed by specialized consultants.</p>

                                        <p>Identifying the Rain Water Harvesting (RWH) potential of an area with use of Hydro-geological study from experts.
                                        Diverting maximum surface runoff from stormwater drains and total rooftop runoff to Rainwater Harvesting system.</p>
                                    </div>
                                </div>

                                <div id="energyEfficiency" class="tab-pane fade">
                                    <div class="SustainabilityTabcontentInn text-center">
                                        <img class="w-100" src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/icons/water-drop.png" alt="Water Drop">
                                        <p>In India, majority of the people are dependent on monsoon, where rainfall extends from June to October and much of the precious water is lost as surface runoff. Hence, it is important to conserve and recharge natural aquifer to ensure that this essential resource for life is not depleted.</p>

                                        <p>Our Projects are designed to control Ground Water Depletion by employing the following Rain Water Harvesting (RWH) schemes designed by specialized consultants.</p>

                                        <p>Identifying the Rain Water Harvesting (RWH) potential of an area with use of Hydro-geological study from experts.
                                        Diverting maximum surface runoff from stormwater drains and total rooftop runoff to Rainwater Harvesting system.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Aspects of sustainability end-->

                <!-- Our green footprint start-->
                <div class="our_green_footprint_section aspectsOfSustainability_section bigTitleAnimationSection">
                    <div class="container-fluid mainContainer">
                        <div class="double-bg-header">
                            <div class="double-main-heading double-main-heading-gold" data-aos="fade" data-aos-offset="0">OUR GREEN FOOTPRINT</div>
                            <div class="double-bg-heading double-bg-heading-gold">FOOTPRINT</div>
                        </div>

                        <div class="ourGreenFootPrintTabContentHolder" data-aos="fade" data-aos-delay="100">
                            <div class="footprintTabs d-flex justify-content-center">
                                <div class="footprintInner nav nav-tabs" role="tablist">
                                    <a class="footprintTab active" data-toggle="tab" href="#certifiedGreenBuildings">
                                        Certified Green Buildings
                                    </a>
                                    <a class="footprintTab" data-toggle="tab" href="#preCertifiedProjects">
                                        Pre-Certified Projects
                                    </a>
                                </div>
                            </div>

                            <div class="ourGreenFootPrintDownWrapper tab-content" data-aos="fade" data-aos-delay="300">
                                <div id="certifiedGreenBuildings" class="videosGalleryContainer tab-pane fade show active">
                                    <div class="ourGreenFootPrintDesc text-center"><p>Final certification is received after construction is complete and after incorporation of green features as prescribed by the rating systems.</p></div>
                                    <div class="ourGreenFootPrintDownloadSlider">
                                        <div class="swiper-container">
                                            <div class="swiper-wrapper align-items-center">
                                                <div class="swiper-slide">
                                                    <div class="ourGreenFootPrintDownloadLinks">
                                                        <a data-fancybox class="d-flex align-items-center justify-content-center text-center" href="<?php echo base_url() ?>assets_web/images/sustainability/CertifiedGreenBuildings/kalpataru-square-certificates.jpg">Kalpataru squre <!-- <img src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/icons/upload-icon.svg" alt="Download"> --></a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="ourGreenFootPrintDownloadLinks">
                                                       <a data-fancybox class="d-flex align-items-center justify-content-center text-center" href="<?php echo base_url() ?>assets_web/images/sustainability/CertifiedGreenBuildings/prime-final-certificate.jpg">Kalpataru PRIME <!-- <img src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/icons/upload-icon.svg" alt="Download"> --></a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="ourGreenFootPrintDownloadLinks">
                                                       <a data-fancybox class="d-flex align-items-center justify-content-center text-center" href="<?php echo base_url() ?>assets_web/images/sustainability/CertifiedGreenBuildings/riverside-final-certification.jpg">Kalpataru rIVERSIDE <!-- <img src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/icons/upload-icon.svg" alt="Download"> --></a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="ourGreenFootPrintDownloadLinks">
                                                       <a data-fancybox class="d-flex align-items-center justify-content-center text-center" href="<?php echo base_url() ?>assets_web/images/sustainability/CertifiedGreenBuildings/pinnacle-final-certification.jpg">Kalpataru Pinnacle <!-- <img src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/icons/upload-icon.svg" alt="Download"> --></a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="ourGreenFootPrintDownloadLinks">
                                                       <a data-fancybox class="d-flex align-items-center justify-content-center text-center" href="<?php echo base_url() ?>assets_web/images/sustainability/CertifiedGreenBuildings/srishti-final-certification.jpg">Kalpataru Srishti <!-- <img src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/icons/upload-icon.svg" alt="Download"> --></a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="ourGreenFootPrintDownloadLinks">
                                                       <a data-fancybox class="d-flex align-items-center justify-content-center text-center" href="<?php echo base_url() ?>assets_web/images/sustainability/CertifiedGreenBuildings/sidhanchal-elegant-big-image.jpg">Siddhachal Elegant <!-- <img src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/icons/upload-icon.svg" alt="Download"> --></a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="ourGreenFootPrintDownloadLinks">
                                                       <a data-fancybox class="d-flex align-items-center justify-content-center text-center" href="<?php echo base_url() ?>assets_web/images/sustainability/CertifiedGreenBuildings/sparkle_certified_gold_01.jpg">Kalpataru Sparkle <!-- <img src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/icons/upload-icon.svg" alt="Download"> --></a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="ourGreenFootPrintDownloadLinks">
                                                       <a data-fancybox class="d-flex align-items-center justify-content-center text-center" href="<?php echo base_url() ?>assets_web/images/sustainability/CertifiedGreenBuildings/kalpatarucrestbig.jpg">Kalpataru Crest <!-- <img src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/icons/upload-icon.svg" alt="Download"> --></a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="ourGreenFootPrintDownloadLinks">
                                                       <a data-fancybox class="d-flex align-items-center justify-content-center text-center" href="<?php echo base_url() ?>assets_web/images/sustainability/CertifiedGreenBuildings/siddhachalelitebig.jpg">Siddhachal Elite <!-- <img src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/icons/upload-icon.svg" alt="Download"> --></a>
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

                                <div id="preCertifiedProjects" class="videosGalleryContainer tab-pane fade">
                                    <div class="ourGreenFootPrintDesc text-center"><p>Projects are pre-certified based on conceptual design and intent of incorporation of green features prescribed by the rating systems, before actual construction.</p></div>
                                    <div class="ourGreenFootPrintDownloadSlider">
                                        <div class="swiper-container">
                                            <div class="swiper-wrapper align-items-center">
                                                <div class="swiper-slide">
                                                    <div class="ourGreenFootPrintDownloadLinks">
                                                        <a data-fancybox class="d-flex align-items-center justify-content-center text-center" href="<?php echo base_url() ?>assets_web/images/sustainability/PreCertifiedProjects/hills-precertificate275eab2def92467f8d7114161f291821.jpg">Kalpataru Hills <!-- <img src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/icons/upload-icon.svg" alt="Download"> --></a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="ourGreenFootPrintDownloadLinks">
                                                       <a data-fancybox class="d-flex align-items-center justify-content-center text-center" href="<?php echo base_url() ?>assets_web/images/sustainability/PreCertifiedProjects/amoda-reserve-precertified-platinum8230229c69a84687a6417e497b1bebb4.jpg">Kalpataru Amoda Reserve <!-- <img src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/icons/upload-icon.svg" alt="Download"> --></a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="ourGreenFootPrintDownloadLinks">
                                                       <a data-fancybox class="d-flex align-items-center justify-content-center text-center" href="<?php echo base_url() ?>assets_web/images/sustainability/PreCertifiedProjects/harmony-precertificate110b80e80c45497dad4c94fc31c70528.jpg">Kalpataru Harmony <!-- <img src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/icons/upload-icon.svg" alt="Download"> --></a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="ourGreenFootPrintDownloadLinks">
                                                       <a data-fancybox class="d-flex align-items-center justify-content-center text-center" href="<?php echo base_url() ?>assets_web/images/sustainability/PreCertifiedProjects/baner-precertificate5b29223a266f433ea59f4140b9818928.jpg">Kalpataru Baner <!-- <img src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/icons/upload-icon.svg" alt="Download"> --></a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="ourGreenFootPrintDownloadLinks">
                                                       <a data-fancybox class="d-flex align-items-center justify-content-center text-center" href="<?php echo base_url() ?>assets_web/images/sustainability/PreCertifiedProjects/splendour-precertificate85283f539ab746d7977964c7316b9944.jpg">Kalpataru Splendour <!-- <img src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/icons/upload-icon.svg" alt="Download"> --></a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="ourGreenFootPrintDownloadLinks">
                                                       <a data-fancybox class="d-flex align-items-center justify-content-center text-center" href="<?php echo base_url() ?>assets_web/images/sustainability/PreCertifiedProjects/kalpataru-radiance.jpg">Kalpataru Radiance <!-- <img src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/icons/upload-icon.svg" alt="Download"> --></a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="ourGreenFootPrintDownloadLinks">
                                                       <a data-fancybox class="d-flex align-items-center justify-content-center text-center" href="<?php echo base_url() ?>assets_web/images/sustainability/PreCertifiedProjects/kalpataru-avana.jpg">Kalpataru Avana <!-- <img src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/icons/upload-icon.svg" alt="Download"> --></a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="ourGreenFootPrintDownloadLinks">
                                                       <a data-fancybox class="d-flex align-items-center justify-content-center text-center" href="<?php echo base_url() ?>assets_web/images/sustainability/PreCertifiedProjects/grandeur.jpg">Kalpataru Grandeur <!-- <img src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/icons/upload-icon.svg" alt="Download"> --></a>
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
                <!-- Our green footprint end-->


                <!--Our Green journey start  -->
                <div class="aspectsOfSustainability_section ourGreenjourneySection bigTitleAnimationSection" style="margin-bottom: 40px;">
                    <div class="container-fluid mainContainer">
                        <div class="double-bg-header">
                            <div class="double-main-heading double-main-heading-gold" data-aos="fade" data-aos-offset="0">OUR GREEN JOURNEY</div>
                            <div class="double-bg-heading double-bg-heading-gold">GREEN JOUR</div>
                        </div>
                    </div>

                    <div class="ourEmpireWrapper">
                     <!-- Our Empire Mobile slider end -->
                        <div class="ourEmpireBackgroundImg">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-6 empire_div text-lg-left" data-aos="fade" data-aos-delay="100">
                                      <div class="backgroundImg h-100" style="background-image:url('<?php echo $this->config->item('cdn_url'); ?>assets_web/images/our-green-journery.jpg');"></div>
                                    </div>
                                    <div class="col-lg-6 year-slider-div p-0 text-lg-right pt-5" style="position:relative" data-aos="fade" data-aos-delay="300">
                                        <div class="line1 d-none d-md-block"></div>
                                        <div class="line2 d-none d-md-block"></div>
                                        <div class="line3 d-none d-md-block"></div>
                                        <div class="line4 d-none d-md-block"></div>
                                        <div class="line5 d-none d-md-block"></div>
                                        <div class="line6 d-none d-md-block"></div>
                                        <div class="line7 d-none d-md-block"></div>
                                        <div class="swiper-container year-slider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="year-text-div">
                                                        <p class=""><span class="slide_year">2006</span></p>
                                                        <span class="slide_desc text-lg-left text-center pt-3">
                                                            <!-- <span class="slide_desc_bg_place_title">
                                                                Neelambar
                                                            </span>
                                                            <span class="slide_desc_small_place_title">
                                                                PEDDAR ROAD, MUMBAI
                                                            </span> -->
                                                            <div class="slide_desc_full_address">
                                                                Becoming a founding member of the Indian Green Building Council (IGBC)
                                                            </div>
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="swiper-slide">
                                                    <div class="year-text-div">
                                                        <p class=""><span class="slide_year">2007</span></p>
                                                        <span class="slide_desc text-lg-left text-center pt-3">
                                                            <!-- <span class="slide_desc_bg_place_title">
                                                                Neelambar
                                                            </span>
                                                            <span class="slide_desc_small_place_title">
                                                                PEDDAR ROAD, MUMBAI
                                                            </span> -->
                                                            <div class="slide_desc_full_address">
                                                                Kalpataru Square was registered as our 1st commercial project under LEED
                                                            </div>
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="swiper-slide">
                                                    <div class="year-text-div">
                                                        <p class=""><span class="slide_year">2008</span></p>
                                                        <span class="slide_desc text-lg-left text-center pt-3">
                                                            <!-- <span class="slide_desc_bg_place_title">
                                                                Neelambar
                                                            </span>
                                                            <span class="slide_desc_small_place_title">
                                                                PEDDAR ROAD, MUMBAI
                                                            </span> -->
                                                            <div class="slide_desc_full_address">
                                                                Registered our first residential project under IGBC Green Homes.
                                                            </div>
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="swiper-slide">
                                                    <div class="year-text-div">
                                                        <p class=""><span class="slide_year">2009</span></p>
                                                        <span class="slide_desc text-lg-left text-center pt-3">
                                                            <!-- <span class="slide_desc_bg_place_title">
                                                                Neelambar
                                                            </span>
                                                            <span class="slide_desc_small_place_title">
                                                                PEDDAR ROAD, MUMBAI
                                                            </span> -->
                                                            <div class="slide_desc_full_address">
                                                                Kalpataru Square becomes Asia's 1st and world’s 6th building to get Platinum-level LEED certification.
                                                            </div>
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="swiper-slide">
                                                    <div class="year-text-div">
                                                        <p class=""><span class="slide_year">2010</span></p>
                                                        <span class="slide_desc text-lg-left text-center pt-3">
                                                            <!-- <span class="slide_desc_bg_place_title">
                                                                Neelambar
                                                            </span>
                                                            <span class="slide_desc_small_place_title">
                                                                PEDDAR ROAD, MUMBAI
                                                            </span> -->
                                                            <div class="slide_desc_full_address">
                                                                First to install fully-automatic Membrane Bio-reactor - based Sewage Water Reclamation Plant (SWRP) for Kalpataru Aura.
                                                            </div>
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="swiper-slide">
                                                    <div class="year-text-div">
                                                        <p class=""><span class="slide_year">2011</span></p>
                                                        <span class="slide_desc text-lg-left text-center pt-3">
                                                            <!-- <span class="slide_desc_bg_place_title">
                                                                Neelambar
                                                            </span>
                                                            <span class="slide_desc_small_place_title">
                                                                PEDDAR ROAD, MUMBAI
                                                            </span> -->
                                                            <div class="slide_desc_full_address">
                                                                Kalpataru Square won a citation for ‘Commercial Architecture’ at FuturArc Green Leadership Award.
                                                            </div>
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="swiper-slide">
                                                    <div class="year-text-div">
                                                        <p class=""><span class="slide_year">2012</span></p>
                                                        <span class="slide_desc text-lg-left text-center pt-3">
                                                            <!-- <span class="slide_desc_bg_place_title">
                                                                Neelambar
                                                            </span>
                                                            <span class="slide_desc_small_place_title">
                                                                PEDDAR ROAD, MUMBAI
                                                            </span> -->
                                                            <div class="slide_desc_full_address">
                                                                Formulated Energy Management Policy.
                                                            </div>
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="swiper-slide">
                                                    <div class="year-text-div">
                                                        <p class=""><span class="slide_year">2013</span></p>
                                                        <span class="slide_desc text-lg-left text-center pt-3">
                                                            <!-- <span class="slide_desc_bg_place_title">
                                                                Neelambar
                                                            </span>
                                                            <span class="slide_desc_small_place_title">
                                                                PEDDAR ROAD, MUMBAI
                                                            </span> -->
                                                            <div class="slide_desc_full_address">
                                                                Kalpataru Prime certified as LEED-India Gold-rated commercial building.
                                                            </div>
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="swiper-slide">
                                                    <div class="year-text-div">
                                                        <p class=""><span class="slide_year">2014</span></p>
                                                        <span class="slide_desc text-lg-left text-center pt-3">
                                                            <!-- <span class="slide_desc_bg_place_title">
                                                                Neelambar
                                                            </span>
                                                            <span class="slide_desc_small_place_title">
                                                                PEDDAR ROAD, MUMBAI
                                                            </span> -->
                                                            <div class="slide_desc_full_address">
                                                                3 commercial projects certified Gold, under IGBC Green Homes.
                                                            </div>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="year-text-div">
                                                        <p class=""><span class="slide_year">2017</span></p>
                                                        <span class="slide_desc text-lg-left text-center pt-3">
                                                            <!-- <span class="slide_desc_bg_place_title">
                                                                Neelambar
                                                            </span>
                                                            <span class="slide_desc_small_place_title">
                                                                PEDDAR ROAD, MUMBAI
                                                            </span> -->
                                                            <div class="slide_desc_full_address">
                                                                Kalpataru Sparkle certified as Zero Garbage society/establishment by MCGM.
                                                            </div>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
                <!--Our Green journey end  -->
            </div>
            <?php include('footer.php'); ?>         
        </div>
        <?php include('footer-js.php'); ?>
        <script type="text/javascript">
            $(".nav-highlight").removeClass('active');
            $(".nav-sustainability").addClass('active');
        </script>
    </body>
</html>