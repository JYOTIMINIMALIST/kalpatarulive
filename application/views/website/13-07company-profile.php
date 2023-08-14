<?php include('common.php'); $page='company_profile_page'; ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Company Profile | Kalpataru</title>
        <meta name="description" content="Kalpataru is one of India’s leading real estate companies that combines design, quality & fine architecture together. Visit our website to know more.">
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
                <div class="common_banner common_banner_without_bg backgroundImg position-relative">
                    <img class="w-100 d-none d-lg-block allDesktopBanner" src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/company-profile/banner2.jpg?ver=1" alt="Leading Real Estate Developer In India">
                    <img class="w-100 d-block d-lg-none allMobileBanner" src="<?php echo base_url() ?>assets_web/images/company-profile/bannerMobile.jpg?ver=1"  alt="Leading Real Estate Company In India">
                     <!-- Video Provision -->
                    <!-- <video loop autoplay muted playsinline>
                          <source src="<?php echo base_url();?>videos/1.mp4" type="video/mp4">
                    </video> -->
                      <!-- Video Provision end-->
                    <div class="common_banner_text position-absolute">
                        <div class="container-fluid mainContainer h-100">
                            <div class="d-flex justify-content-start flex-column justify-content-center h-100">
                                <h1 class="History-Pro" data-aos="fade" data-aos-offset="0">DESIGNING SKYLINES</h1>
                                <h3 class="sinceYear mb-0" data-aos="fade" data-aos-offset="0" data-aos-delay="200">SINCE 1969</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Company profile start -->
                <div class="about_company_profile_section" data-aos="fade" data-aos-offset="0" data-aos-delay="100">
                    <div class="container-fluid mainContainer">
                        <div class="about_company_porfile_text mb-0 text-center max-550 mx-auto">
                        Founded in 1969, Kalpataru Limited is one of India’s leading real estate companies. A recepient of several global awards in design and quality, we have created defining landmarks and set new standards in real estate development for over a century
                        </div>
                    </div>
                </div>
                <!-- Company profile end -->

                <!-- Chairman's message start -->
                <div class="chairmanMsgSection bigTitleAnimationSection">
                    <div class="container-fluid mainContainer">
                        <div class="double-bg-header">
                            <div class="double-main-heading double-main-heading-gold" data-aos="fade">CHAIRMAN’S MESSAGE</div>
                            <div class="double-bg-heading double-bg-heading-gold">CHAIRMAN’S</div>
                        </div>

                        <div class="chairmanMsgBox">
                            <div class="chairmanMsgBoxInner">
                                <div class="chairmanImgBox text-center">
                                    <img data-aos="zoom-in" data-aos-delay="100" class="chairmanImg" src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/company-profile/chairman.jpg" title="Mr. Mofatraj P. Munot" alt="Mr. Mofatraj P. Munot">  
                                    <div data-aos="fade" data-aos-delay="200" class="chairmanName">Mr. Mofatraj P. Munot</div>
                                    <div class="chairmanMsgDesc" data-aos="fade" data-aos-delay="300">
                                        <p class="mb-0">Kalpataru has been building fine homes and commercial spaces for over five decades for a generations of happy customers. We build sustainable & value driven homes & offices. Our strong customer relationships stem through a culture of customer centricity, transparency & willingness to meet their need
                                        </p>
                                    </div>
                                    <div class="leader_ship_team_btn d-flex justify-content-center" data-aos="fade" data-aos-delay="400">
                                        <a class="icon-button" href="<?php echo base_url();?>leadership-team"  target="_blank"><div class="round-button"><div class="circle"></div><i class="kalpataru-icon-arrow-right"></i></div> LEADERSHIP TEAM</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Chairman's message end -->

                <!-- Vision section start -->
                <div class="visionSection bigTitleAnimationSection">
                    <div class="container-fluid mainContainer">
                        <div class="double-bg-header">
                            <h2 class="double-main-heading double-main-heading-gold" data-aos="fade">VISION</h2>
                            <div class="double-bg-heading double-bg-heading-gold">VISION</div>
                        </div>
                    </div>

                    <div class="vistionDescBox text-center backgroundImg" style="background-image:url('<?php echo $this->config->item('cdn_url'); ?>assets_web/images/company-profile/Quotes.jpg');">
                        <div class="container-fluid mainContainer" data-aos="fade">
                            <p class="mb-0 mx-auto">“To be a brand that is admired as an industry leader for its thoughtfully designed, high quality, innovative life-spaces, is recognized for its customer and people practices, and is acknowledged for fostering long term relationship with stakeholders.”</p>
                        </div>
                    </div>
                </div>
                <!-- Vision section end -->

                <!-- Company values start  -->
                <div class="companyValueSection bigTitleAnimationSection">
                    <div class="container-fluid mainContainer">
                        <div class="double-bg-header circle_left">
                            <h2 class="double-main-heading double-main-heading-gold" data-aos="fade">VALUES</h2>
                            <div class="double-bg-heading double-bg-heading-gold">VALUES</div>
                        </div>
                        
                        <!-- Company ValueBox Wrapper Desktop start-->
                        <div class="companyValueBoxWrapper companyValueBoxWrapperDesktop">
                            <div class="companyValueInnerBox row">
                                <!-- Company ValueBox Left Start-->
                                <div class="companyValueBoxLeft col-md-6">
                                    <div class="companyValueBox backgroundImg" data-aos="fade" style="background-image:url('<?php echo $this->config->item('cdn_url'); ?>assets_web/images/company-profile/values/business-ethics-1.jpg');">
                                        <div class="valuesTitle text-center">
                                            <img class="mx-auto" src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/company-profile/values/business-ethics-icon.png" alt="Values Icon" title="">
                                            <h2>BUSINESS ETHICS</h2>
                                        </div>
                                    </div>
                                    <div class="companyValueBox backgroundImg" data-aos="fade" style="background-image:url('<?php echo $this->config->item('cdn_url'); ?>assets_web/images/company-profile/values/humility-1.jpg');">
                                        <div class="valuesTitle text-center">
                                            <img class="mx-auto" src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/company-profile/values/humility-icon.png" alt="Values Icon" title="">
                                            <h2>HUMILITY</h2>
                                        </div>
                                    </div>
                                </div>
                                <!-- Company ValueBox Left End-->

                                <!-- Company ValueBox Right Start-->
                                <div class="companyValueBoxRight col-md-6">
                                    <div class="companyValueBoxRightTop">
                                        <div class="companyValueBox backgroundImg" data-aos="fade" style="background-image:url('<?php echo $this->config->item('cdn_url'); ?>assets_web/images/company-profile/values/quality-1.jpg');">
                                            <div class="valuesTitle text-center">
                                                <img class="mx-auto" src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/company-profile/values/quality-icon.png" alt="Values Icon" title="">
                                                <h2>QUALITY</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="companyValueBoxRightMiddle">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="companyValueBox backgroundImg" data-aos="fade" style="background-image:url('<?php echo $this->config->item('cdn_url'); ?>assets_web/images/company-profile/values/prudence-1.jpg');">
                                                    <div class="valuesTitle text-center">
                                                        <img class="mx-auto" src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/company-profile/values/prudence-icon.png" alt="Values Icon">
                                                        <h2>PRUDENCE</h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="companyValueBox backgroundImg" data-aos="fade" style="background-image:url('<?php echo $this->config->item('cdn_url'); ?>assets_web/images/company-profile/values/respect-1.jpg');">
    
                                                    <div class="valuesTitle text-center">
                                                        <img class="mx-auto" src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/company-profile/values/respect-icon.png" alt="Values Icon" title="">
                                                        <h2>RESPECT</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="companyValueBoxRightBottom">
                                        <div class="companyValueBox backgroundImg" data-aos="fade" style="background-image:url('<?php echo $this->config->item('cdn_url'); ?>assets_web/images/company-profile/values/pride-1.jpg');">
                                            <div class="valuesTitle text-center">
                                                <img class="mx-auto" src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/company-profile/values/pride-icon.png" alt="Values Icon">
                                                <h2>PRIDE</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Company ValueBox Right End-->
                            </div>
                        </div>
                        <!-- Company ValueBox Wrapper Desktop end-->

                        <!-- Company ValueBox Wrapper Mobile start  -->
                        <div class="companyValueBoxWrapperMobile">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="companyValueBox backgroundImg" data-aos="fade">
                                            <img class="w-100" src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/company-profile/values/business-ethics-1.jpg" title=""   alt= "Business Ethics">
                                            <div class="valuesTitle text-center">
                                                <img class="mx-auto" src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/company-profile/values/business-ethics-icon.png" alt="Values Icon" title="">
                                                <h2>BUSINESS ETHICS</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="companyValueBox backgroundImg" data-aos="fade">
                                            <img class="w-100" src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/company-profile/values/humility-1.jpg" title=""  alt= "Humility">
                                            <div class="valuesTitle text-center">
                                                <img class="mx-auto" src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/company-profile/values/humility-icon.png" alt="Values Icon" title="">
                                                <h2>HUMILITY</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="companyValueBox backgroundImg" data-aos="fade">
                                            <img class="w-100" src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/company-profile/values/quality-1.jpg" title="" alt= "Quality">
                                            <div class="valuesTitle text-center">
                                                <img class="mx-auto" src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/company-profile/values/quality-icon.png" alt="Values Icon" title="">
                                                <h2>QUALITY</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="companyValueBox backgroundImg" data-aos="fade">
                                            <img class="w-100" src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/company-profile/values/prudence-1.jpg" title="" alt= "Prudence">
                                            <div class="valuesTitle text-center">
                                                <img class="mx-auto" src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/company-profile/values/prudence-icon.png" alt="Values Icon" title="">
                                                <h2>PRUDENCE</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="companyValueBox backgroundImg" data-aos="fade">
                                            <img class="w-100" src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/company-profile/values/respect-1.jpg" title="" alt= "Respect">
                                            <div class="valuesTitle text-center">
                                                <img class="mx-auto" src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/company-profile/values/respect-icon.png" alt="Values Icon" title="">
                                                <h2>RESPECT</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="companyValueBox backgroundImg" data-aos="fade">
                                            <img class="w-100" src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/company-profile/values/pride-1.jpg" title="" alt= "Pride">
                                            <div class="valuesTitle text-center">
                                                <img class="mx-auto" src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/company-profile/values/pride-icon.png" alt="Values Icon" title="">
                                                <h2>PRIDE</h2>
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
                        <!-- Company ValueBox Wrapper Mobile end  -->
                    </div>
                </div>
                <!-- Company values end  -->

                <!-- Awards start -->
                <div class="companyAwardSection line_right_bottom bigTitleAnimationSection">
                     <div class="container-fluid mainContainer">
                        <div class="double-bg-header">
                            <div class="double-main-heading double-main-heading-gold" data-aos="fade">AWARDS</div>
                            <div class="double-bg-heading double-bg-heading-gold">AWARDS</div>
                        </div>
                        <div class="awardsDesc" data-aos="fade" data-aos-delay="100">The various awards we have received over the years, are owed to the efforts of the many talented and dedicated employees across Kalpataru Limited, and the business partners who back our every endeavour.</div>

                        <div class="companyAwardsSlider">
                            <div class="swiper-container">
                          <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                  <div data-aos="fade" class="AwardsBox text-center">
                                      <img src="<?php echo base_url(); ?>assets_web/images/company-profile/awards-icon.jpg" title="" alt="Awards Icon">
                                      <div class="companyAwardName">
                                          <h2>11th Realty Plus Excellence Awards - West 2019</h2>
                                      </div>
                                      <div class="companyAwardDesc">
                                          <p>Kalpataru Limited</p>
                                          <p>wins the CSR Excellence Award</p>
                                      </div>
                                  </div>
                              </div>

                              <div class="swiper-slide">
                                  <div data-aos="fade" class="AwardsBox text-center">
                                      <img src="<?php echo base_url(); ?>assets_web/images/company-profile/awards-icon.jpg" title="" alt="Awards Icon">
                                      <div class="companyAwardName">
                                          <h2>Golden Brick Awards 2017</h2>
                                      </div>
                                      <div class="companyAwardDesc">
                                          <p>Kalpataru Solitaire</p>
                                          <p>Best Interior Design</p>
                                      </div>
                                  </div>
                              </div>

                              <div class="swiper-slide">
                                  <div data-aos="fade" class="AwardsBox text-center">
                                      <img src="<?php echo base_url(); ?>assets_web/images/company-profile/awards-icon.jpg" title="" alt="Awards Icon">
                                      <div class="companyAwardName">
                                          <h2>Asia Pacific Property Awards 2017-18</h2>
                                      </div>
                                      <div class="companyAwardDesc">
                                          <p>Kalpataru Avana</p>
                                          <p>5-Star Award, Best Residential High-Rise Architecture in India</p>
                                      </div>
                                  </div>
                              </div>

                              <div class="swiper-slide">
                                  <div data-aos="fade" class="AwardsBox text-center">
                                      <img src="<?php echo base_url(); ?>assets_web/images/company-profile/awards-icon.jpg" title="" alt="Awards Icon">
                                      <div class="companyAwardName">
                                          <h2>Construction Week India Awards 2017</h2>
                                      </div>
                                      <div class="companyAwardDesc">
                                          <p>Kalpataru Sparkle</p>
                                          <p>Residential Project of the Year Award</p>
                                      </div>
                                  </div>
                              </div>
                              <div class="swiper-slide">
                                  <div data-aos="fade" class="AwardsBox text-center">
                                      <img src="<?php echo base_url(); ?>assets_web/images/company-profile/awards-icon.jpg" title="" alt="Awards Icon">
                                      <div class="companyAwardName">
                                          <h2>Realty Plus Excellence Awards 2017</h2>
                                      </div>
                                      <div class="companyAwardDesc">
                                          <p>Amoda Reserve</p>
                                          <p>Villa Project of the Year</p>
                                      </div>
                                  </div>
                              </div>
                              <div class="swiper-slide">
                                  <div data-aos="fade" class="AwardsBox text-center">
                                      <img src="<?php echo base_url(); ?>assets_web/images/company-profile/awards-icon.jpg" title="" alt="Awards Icon">
                                      <div class="companyAwardName">
                                          <h2>Construction Week India Awards 2016</h2>
                                      </div>
                                      <div class="companyAwardDesc">
                                          <p>Siddhachal Elite</p>
                                          <p>Best Residential Projects of the Year</p>
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
                <!-- Awards end -->

                <!-- corporate video start -->
                <div class="corporateVideoection line_right_bottom bigTitleAnimationSection">
                     <div class="container-fluid mainContainer">
                        <div class="double-bg-header">
                            <div class="double-main-heading double-main-heading-gold" data-aos="fade">CORPORATE VIDEO</div>
                            <div class="double-bg-heading double-bg-heading-gold">CORPORATE VIDEO</div>
                        </div>

                        <div class="corporateVideoCircleBox" data-aos="zoom-in" data-aos-delay="200">
                            <div class="corporateVideoCircle d-flex justify-content-center align-items-center">
                                <a class="d-block" data-fancybox href="https://www.youtube.com/watch?v=wJy406ntmU0&feature=youtu.be">
                                    <img class="corporateVideoPlayBtn" src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/company-profile/videoPlayBtn.png" alt="Video Play Button" title="Play Video">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- corporate video end -->

                <!-- life at kalpataru start -->
                <div class="lifeAtKalpataruSection bigTitleAnimationSection d-none">
                    <div class="lifeAtKalpataruInner line_left_bottom">
                        <div class="container-fluid mainContainer">
                            <div class="double-bg-header">
                                <div class="double-main-heading double-main-heading-gold" data-aos="fade">LIFE AT KALPATARU</div>
                                <div class="double-bg-heading double-bg-heading-gold">LIFE AT KAL</div>
                            </div>
                        </div>
                        <div class="container container-right pl-0">
                            <div class="lifeAtKalpataruTabWrapper" data-aos="fade" data-aos-delay="200">
                                <div class="lifeAtKalpataruTabSlider">
                                    <div class="swiper-container">
                                        <ul class="swiper-wrapper text-center nav nav-tabs" role="tablist">
                                            <li class="swiper-slide nav-item">
                                                <a class="lifeAtKalpataruTab active" data-toggle="tab" href="#genderDiversity">
                                                    Gender Diversity
                                                </a>
                                            </li>
                                            <li class="swiper-slide nav-item">
                                                <a class="lifeAtKalpataruTab" data-toggle="tab" href="#developmentInitiative">
                                                    Development Initiative
                                                </a>
                                            </li>
                                            <li class="swiper-slide nav-item">
                                                <a class="lifeAtKalpataruTab" data-toggle="tab" href="#genderDiversity">
                                                    Gender Diversity
                                                </a>
                                            </li>
                                            <li class="swiper-slide nav-item">
                                                <a class="lifeAtKalpataruTab" data-toggle="tab" href="#genderDiversity1">
                                                    Gender Diversity
                                                </a>
                                            </li>

                                            <li class="swiper-slide nav-item">
                                                <a class="lifeAtKalpataruTab" data-toggle="tab" href="#genderDiversity1">
                                                    Gender Diversity
                                                </a>
                                            </li>
                                            <li class="swiper-slide nav-item">
                                                <a class="lifeAtKalpataruTab" data-toggle="tab" href="#genderDiversity1">
                                                    Gender Diversity
                                                </a>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>

                                <!-- Tab contant start -->
                                <div class="lifeAtKalpataruTabContantWrapper tab-content">
                                    <div id="genderDiversity" class="lifeAtKalpataruTabContantBox tab-pane active">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="lifeAtKalpataruTabContantLeftImg">
                                                    <img class="w-100" src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/company-profile/lifeAtKalpataru2.jpg" alt="Life at Kalpataru" title="">
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="lifeAtKalpataruTabContantRightImgContant row">
                                                    <div class="col-md-6">
                                                        <div class="about_life_of_kalpataru">
                                                            <p class="mb-0">
                                                                Kalpataru has been building fine homes and commercial complexes for five decades, partnering with generations of happy customers. Kalpataru endeavours to be the benchmark brand in quality real estate development.
                                                            </p>
                                                            <div class="beApartOfUsBtn">
                                                                <a class="icon-button" href="#"><div class="round-button"><div class="circle"></div><i class="kalpataru-icon-arrow-right"></i></div> BE A PART OF US</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="lifeAtKalpataruTabContantRightImg">
                                                            <img class="w-100" src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/company-profile/lifeAtKalpataru1.jpg" alt="Life at Kalpataru" title="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="developmentInitiative" class="lifeAtKalpataruTabContantBox tab-pane fade">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="lifeAtKalpataruTabContantLeftImg">
                                                    <img class="w-100" src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/company-profile/lifeAtKalpataru2.jpg" alt="Life at Kalpataru">
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="lifeAtKalpataruTabContantRightImgContant row">
                                                    <div class="col-md-6">
                                                        <div class="about_life_of_kalpataru">
                                                            <p class="mb-0">
                                                                Kalpataru has been building fine homes and commercial complexes for five decades, partnering with generations of happy customers. Kalpataru endeavours to be the benchmark brand in quality real estate development.
                                                            </p>
                                                            <div class="beApartOfUsBtn">
                                                                <a class="icon-button" href="#"><div class="round-button"><div class="circle"></div><i class="kalpataru-icon-arrow-right"></i></div> BE A PART OF US</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="lifeAtKalpataruTabContantRightImg">
                                                            <img class="w-100" src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/company-profile/lifeAtKalpataru1.jpg" alt="Life at Kalpataru" title="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="genderDiversity1" class="lifeAtKalpataruTabContantBox tab-pane fade">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="lifeAtKalpataruTabContantLeftImg">
                                                    <img class="w-100" src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/company-profile/lifeAtKalpataru2.jpg" alt="Life at Kalpataru">
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="lifeAtKalpataruTabContantRightImgContant row">
                                                    <div class="col-md-6">
                                                        <div class="about_life_of_kalpataru">
                                                            <p class="mb-0">
                                                                Kalpataru has been building fine homes and commercial complexes for five decades, partnering with generations of happy customers. Kalpataru endeavours to be the benchmark brand in quality real estate development.
                                                            </p>
                                                            <div class="beApartOfUsBtn">
                                                                <a class="icon-button" href="#"><div class="round-button"><div class="circle"></div><i class="kalpataru-icon-arrow-right"></i></div> BE A PART OF US</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="lifeAtKalpataruTabContantRightImg">
                                                            <img class="w-100" src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/company-profile/lifeAtKalpataru1.jpg" alt="Life at Kalpataru" title="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Tab contant end -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- life at kalpataru end -->
            </div>
            <?php include('footer.php'); ?>         
        </div>
        <?php include('footer-js.php'); ?>
         <script type="text/javascript">
            $(".nav-highlight").removeClass('active');
            $(".nav-company").addClass('active');
        </script>
    </body>
</html>