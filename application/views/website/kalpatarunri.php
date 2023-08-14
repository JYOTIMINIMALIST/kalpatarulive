<?php include "common.php";



$page1 = "kalpataru-nri";



$this->load->helper("url");



$your_currentURL = current_url();



$urll = $this->uri->segment(2);



$_SESSION["ulrid"] = $properties->id;

?>

<!doctype html>

<head>

  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Best Real Estate Developer | Top Builders in India | Kalpataru Group</title>

  <meta name="description" content="Kalpataru Group is one of the top builders in Mumbai, India which aims to provide best and well-crafted homes & thoughtfully designed commercial spaces since 1969.">

  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

  <meta name="google-site-verification" content="QIBP0qp3OyCdOP9g9NsaemSjzahvFvOrTK3VXKc50SY" /> <?php include "header-css.php"; ?> <?php include "ga-code.php"; ?>

</head>

<body class="small-page home-page">

  <!--[if lt IE 8]>

<p class="browserupgrade">You are using an 

  <strong>outdated</strong> browser. Please 

  <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.

</p>

<![endif]-->

  <div class="page-content 

  <?php echo $page; ?> position-relative">

    <div class="page-body"> <?php include "header.php"; ?> <div class="home-banner divider-pagination homeBannersection">

        <div class="container-fluid">

          <div class="row">

            <div class="col-12 p-0 relative-box">

              <div class="swiper-container">

                <div class="swiper-wrapper">

                  <!-- <div class="swiper-slide"><video class="w-100" loop autoplay muted playsinline><source src="

                <?php echo base_url(); ?>assets_web/videos/1.mp4" type="video/mp4"></video><div class="home-banner-text-container"><div class="home-banner-text"><div class="home-banner-project-name"><div>Kalpataru Bliss</div></div><div class="home-banner-project-location Roboto-Medium">At TE Colony, Andheri <a class="icon-button d-inline-flex d-md-none" href="#"><div class="round-button"><div class="circle"></div><i class="kalpataru-icon-arrow-right"></i></div></a></div><div class="home-banner-project-description Roboto-Light">Yashodhan on SV  Road, is one of the most premium properties located in heart of Thane West.</div></div><a href="#" class="home-banner-project-link-button"><span>EXPLORE</span><span>PROJECT</span></a></div><div class="home-banner-text-right"><a href="#" class="home-banner-project-view-all-link-button"><span>VIEW ALL PROJECTS</span></a></div></div> --> <?php foreach (

    $slider

    as $key => $value

) {

    $ci = &get_instance();



    $ci->load->model("common_m");



    $title = $ci->common_m->seoUrl($value->title);



    $bannertype = $banner_type[$key];



    if ($bannertype == "video") { ?> <div class="swiper-slide">

                    <a href="

                    <?= base_url() . $value->city_slug . "/" . $value->slug ?>"> <?php

        /*=$title?>/ <?=$value->id*/

        ?> <?php if (

     strpos($value->featured_video, "amazonaws.com") !== false ||

     strpos($value->featured_video, "cloudfront.net") !== false ||

     strpos($value->featured_video, "http://localhost/kalpataru/") !== false

 ) {



     $video = $value->featured_video;



     $video1 = $value->featured_mobile_video;

     ?> <video class="w-100 d-none d-lg-block" loop autoplay muted playsinline>

                        <source src="

                        <?= $video ?>" type="video/mp4">

                      </video>

                      <video class="w-100 d-block d-lg-none mobileHomeVid" loop autoplay muted playsinline>

                        <source src="

                          <?= $video1 ?>" type="video/mp4">

                      </video> <?php

 } else {

     $video = $value->featured_video;

 } ?> <div class="home-banner-text-container">

                        <div class="home-banner-text">

                          <div class="home-banner-project-name">

                            <h2> <?= $value->title ?> </h2>

                          </div>

                          <div class="home-banner-project-description Roboto-Light"> <?= !empty(

                              $value->featured_description

                          )

                              ? $value->featured_description

                              : $value->short_description ?> </div>

                        </div>

                        <div class="home-banner-project-link-button">

                          <span>EXPLORE</span>

                          <span>PROJECT</span>

                        </div>

                      </div>

                      <!-- <div class="home-banner-text-right"><a href="#" class="home-banner-project-view-all-link-button"><span>VIEW ALL PROJECTS</span></a></div> -->

                    </a>

                  </div> <?php } else { ?> <div class="swiper-slide">

                    <img src="https://www.kalpataru.com/assets_web/images/nri/slider1.jpg" alt="

                        <?= $value->featured_img_alt ?>" class="w-100 d-none d-lg-block home-banner-img-bg">

                    <img src="https://www.kalpataru.com/assets_web/images/nri/slider_mob1.jpg" alt="

                          <?= $value->featured_ial_mobile ?>" class="home-banner-img-bg w-100 d-block d-lg-none home-banner-img-bg">

                    <div class="home-banner-text-container" style="width:28%;left:0px;">

                    <div class="home-banner-text">

                    <div class="home-banner-project-name"><h2>INDIA'S MOST SOUGHT-AFTER RESIDENCES</h2>
                     <h2>DISTINCTLY CRAFTED FOR YOU</h2></div>

                     <!-- <div class="home-banner-project-description Roboto-Light bannerSubcontent">SINCE 1969</div> -->

                    </div>

                    </div>

                  </div>

                  



                <!--   <div class="swiper-slide">

               <img src="https://dev.kalpataru.com/assets_web/images/nri/slider2.jpg" alt="<?=$value->featured_img_alt?>"  class="w-100 d-none d-lg-block home-banner-img-bg">







<img src="https://dev.kalpataru.com/assets_web/images/nri/slider_mob2.jpg" alt="<?=$value->featured_ial_mobile?>" class="home-banner-img-bg w-100 d-block d-lg-none home-banner-img-bg">







<div class="home-banner-text-container">







    <div class="home-banner-text">







        <div class="home-banner-project-name"><h2>House of Firsts</h2></div>







        <div class="home-banner-project-description Roboto-Light">Our innovations have now become industry standard</div>







    </div>







    </div>

 </div>







<div class="swiper-slide">







<img src="https://dev.kalpataru.com/assets_web/images/nri/slider3.jpg" alt="<?=$value->featured_img_alt?>"  class="w-100 d-none d-lg-block home-banner-img-bg">







<img src="https://dev.kalpataru.com/assets_web/images/nri/slider_mob3.jpg" alt="<?=$value->featured_ial_mobile?>" class="home-banner-img-bg w-100 d-block d-lg-none home-banner-img-bg">







<div class="home-banner-text-container">







    <div class="home-banner-text">







        <div class="home-banner-project-name"><h2>International partners</h2></div>

 <div class="home-banner-project-description Roboto-Light">World’s leading architects & consultants in various fields</div>

  </div>

  </div>

</div>

<div class="swiper-slide">

<img src="https://dev.kalpataru.com/assets_web/images/nri/slider4.jpg" alt="<?=$value->featured_img_alt?>"  class="w-100 d-none d-lg-block home-banner-img-bg">

<img src="https://dev.kalpataru.com/assets_web/images/nri/slider_mob4.jpg" alt="<?=$value->featured_ial_mobile?>" class="home-banner-img-bg w-100 d-block d-lg-none home-banner-img-bg">

<div class="home-banner-text-container">

    <div class="home-banner-text">

        <div class="home-banner-project-name"><h2>Robust processes and structures</h2></div>

        <div class="home-banner-project-description Roboto-Light">Kaizen-led approach for project planning and execution</div>

  </div>

  </div>

</div>

<div class="swiper-slide">

<img src="https://dev.kalpataru.com/assets_web/images/nri/slider5.jpg" alt="<?=$value->featured_img_alt?>"  class="w-100 d-none d-lg-block home-banner-img-bg">

<img src="https://dev.kalpataru.com/assets_web/images/nri/slider_mob5.jpg" alt="<?=$value->featured_ial_mobile?>" class="home-banner-img-bg w-100 d-block d-lg-none home-banner-img-bg">

<div class="home-banner-text-container">

    <div class="home-banner-text">

        <div class="home-banner-project-name"><h2>Finest brands & materials</h2></div>

        <div class="home-banner-project-description Roboto-Light">We use only the very best within our projects</div>

    </div>

</div>

</div>



<div class="swiper-slide">

<img src="https://dev.kalpataru.com/assets_web/images/nri/slider6.jpg" alt="<?=$value->featured_img_alt?>"  class="w-100 d-none d-lg-block home-banner-img-bg">

<img src="https://dev.kalpataru.com/assets_web/images/nri/slider_mob6.jpg" alt="<?=$value->featured_ial_mobile?>" class="home-banner-img-bg w-100 d-block d-lg-none home-banner-img-bg">

<div class="home-banner-text-container">

    <div class="home-banner-text">

        <div class="home-banner-project-name"><h2>Quality-obsessed mindset </h2></div>

        <div class="home-banner-project-description Roboto-Light">High-quality product with minimum snags during handover.</div>

    </div>

</div>

</div> -->

                  

                  

                  <?php }

} ?>

                </div>



                <!-- <div class="swiper-pagination"></div> -->



              </div>

            </div>

          </div>

        </div>

        <!-- Banner Search Container Start -->

        <!-- Banner Search Container end -->

       <!--  <div class="swiper-pagination"></div>   -->

      </div>

      <div class="project-details-container">

        <!-- Featured start -->

        <div class="companyAwardSection line_right_bottom bigTitleAnimationSection featuredProjecsecmain">

          <div class="container-fluid mainContainer">

            <div class="double-bg-header">

              <div class="double-main-heading" data-aos="fade">01 FEATURED PROJECTS</div>

              <div class="double-bg-heading double-bg-heading-gold">FEATURED</div>

            </div>

            <div class="featuredSlider">

              <ul class="featuredMenu swiper-filter"> <?php foreach (

                  $datas

                  as $key => $value

              ) { ?> <li data-filter=".<?= $value->city_name ?>" onclick="$('.z')[0].focus()"> <?= $value->city_name ?> </li> <?php } ?> </ul>

              <div class="swiper-container z">

                <div class="swiper-product">

                  <div class="swiper-wrapper"> <?php foreach (

                      $featured

                      as $key => $value

                  ) {



                      $ci = &get_instance();



                      $ci->load->model("common_m");



                      $title = $ci->common_m->seoUrl($value->title);

                      ?> <div class="swiper-slide 

                            <?= $value->city_name ?>">

                      <div class="featuredSliderOverlay">

                        <a href=" <?= base_url() . $value->city_slug . "/" . $value->slug ?>">

                          <img src="

                                  <?= $value->thumbnail_image ?>" alt="Kalpataru Radiance" class="w-100">

                          <div class="imgBg"></div>

                       

                        <div class="fetaturedSliderDesc  fetaturedSliderTitle">

                          <h1 class="project-inner-header" data-aos="fade" data-aos-delay="100"> <?= $value->title ?> </h1>

                          <div data-aos="fade" data-aos-delay="500" data-aos-offset="0" class="icon-button aos-init aos-animate">

                            <div class="round-button">

                              <div class="circle"></div>

                              <i class="kalpataru-icon-arrow-right"></i>

                            </div> LEARN MORE

                          </div>

                        </div>

                        <div class="overlay">

                          <div class="fetaturedSliderDesc">

                            <h1 class="project-inner-header" data-aos="fade" data-aos-delay="100"> <?= $value->title ?> </h1>

                            <div data-aos="fade" data-aos-delay="200" data-aos-offset="0" class="home-featured-list-project-location Roboto-Regular aos-init aos-animate" style="font-size: 12px;">Location: <?= $value->location_name ?>, <?= $value->city_name ?> </div>

                            <div data-aos="fade" data-aos-delay="300" data-aos-offset="0" class="home-featured-list-project-bhkcount Roboto-Regular aos-init aos-animate" style="font-size: 12px;">Price: <?= $value->price ?> </div>

                            <div data-aos="fade" data-aos-delay="300" data-aos-offset="0" class="home-featured-list-project-bhkcount Roboto-Regular aos-init aos-animate" style="font-size: 12px;"> <?= $value->typology ?> </div>

                            <div data-aos="fade" data-aos-delay="400" data-aos-offset="0" class="home-featured-list-project-description Roboto-Regular aos-init aos-animate" style="font-size: 12px;"> <?= !empty(

                                $value->featured_description

                            )

                                ? substr($value->featured_description, 0, 100)

                                : substr(

                                    $value->short_description,

                                    0,

                                    100

                                ) ?>... </div>

                            <ul class="project-inner-description"> <?= $value->highlight ?> </ul>

                            <div data-aos="fade" data-aos-delay="500" data-aos-offset="0" class="icon-button aos-init aos-animate">

                              <div class="round-button">

                                <div class="circle"></div>

                                <i class="kalpataru-icon-arrow-right"></i>

                              </div> LEARN MORE

                            </div>

                          </div>

                        </div>

                         </a>

                      </div>

                    </div> <?php

                  } ?>

                    <!-- More swiper slides -->

                  </div>

                  <div class="swiper-pagination"></div>

                </div>

              </div>

            </div>

          </div>

        </div>

        <!-- Featured end -->

        <div class="home-featured-section bigTitleAnimationSection legacySectionmain">

         

          <div id="locate" class="project-inner-location-section no-overflow bigTitleAnimationSection bigWidthContainer">

            <div class="double-bg-header mainContainer">

              <h2 class="double-main-heading" data-aos="fade" style="margin-top: 5em;">02 OUR LEGACY STORY </h2>

              <div class="double-bg-heading double-bg-heading-gold">LEGACY STORY</div>

            </div>

            <!-- <div><div class="double-bg-header"><h2 class="double-main-heading" data-aos="fade">

                                        <?php // echo $sequence_no > 9 ? $sequence_no : "0"."8";





                    if ($result[0]->postion_locate_position < 10) {

                        echo "0";

                    }



                    echo $result[0]->postion_locate_position;

                    ?>

                                        <?= strtoupper(

                        $properties->title

                    ) ?> LOCATION</h2><div class="double-bg-heading">Location</div></div></div>-->

          

            <div class="enhancingEverydayLivesWrapper bigTitleAnimationSection">

              <div class="container-fluid mainContainer" style="width: 100%">

                <div class="enhancingEverydayInner row">

                  <div class="col-md-4" data-aos="fade" data-aos-delay="100">

                    <div class="enhancingEverydayLivesDesc"> <?php echo $properties->cfootprint_short; ?>

                    </div>

                  </div>

            

                </div>

              </div>

              <!--  <div class="col-md-8 home_about_mid_image pt-4" data-aos="fade" data-aos-delay="100"><img src="

                                          <?php echo $this->config->item(

                         "cdn_url"

                     ); ?>assets_web/images/home-about-usNew.jpg" class="w-100"></div>-->

            </div>

            <p class="mt-3">Kalpataru Group was established in 1969.Our journey to becoming a trustworthy name in real estate is built on a sturdy foundation of unmatched quality, strong partnerships, innovative design thinking and a consistent focus on the needs of our customers.</p>

          </div>

        </div>

        <div class="col-md-8" data-aos="fade" data-aos-delay="300">

          <div class="legancyCounterSlider">

            <div class="swiper-container">

              <div class="swiper-wrapper"> <?php if (

                  $properties->cfootprint_image_one != ""

              ) { ?> <div class="swiper-slide">

                  <div class="enhancingEverydaySlide">

                    <img src="

                                                  <?php echo $properties->cfootprint_image_one; ?>" class="w-100" title="Energy Efficiency" alt="Energy Efficiency">

                    <div class="enhancingEverydayTitle">

                      <h2> <?php echo $properties->cfootprint_short_one; ?> </h2>

                      <p> <?php echo $properties->cfootprint_desc_one; ?> </p>

                    </div>

                  </div>

                </div> <?php } ?> 

                <?php if (

                    $properties->cfootprint_image_six != ""

                ) { ?>

                <div class="swiper-slide">

                                                              <div class="enhancingEverydaySlide">

                                                                    <img src="<?php echo $properties->cfootprint_image_six; ?>" class="w-100" title="Energy Efficiency" alt="Energy Efficiency">

                                                                  <div class="enhancingEverydayTitle">

                                                                  <h2>

                                                      <?php echo $properties->cfootprint_short_six; ?></h2>

                                                                <p>

                                                      <?php echo $properties->cfootprint_desc_six; ?></p>

                                                              </div>

                                                  </div>

                                                          </div>

                                                       <?php } ?>

                <?php if (

     $properties->cfootprint_image_two != ""

 ) { ?> <div class="swiper-slide">

                  <div class="enhancingEverydaySlide">

                    <img src="

                                                    <?php echo $properties->cfootprint_image_two; ?>" class="w-100" title="Energy Efficiency" alt="Energy Efficiency">

                    <div class="enhancingEverydayTitle">

                      <h2> <?php echo $properties->cfootprint_short_two; ?> </h2>

                      <p> <?php echo $properties->cfootprint_desc_two; ?> </p>

                    </div>

                  </div>

                </div> <?php } ?> <?php if (

     $properties->cfootprint_image_three != ""

 ) { ?> <div class="swiper-slide">

                  <div class="enhancingEverydaySlide">

                    <img src="

                                                      <?php echo $properties->cfootprint_image_three; ?>" class="w-100" title="Energy Efficiency" alt="Energy Efficiency">

                    <div class="enhancingEverydayTitle">

                      <h2> <?php echo $properties->cfootprint_short_three; ?> </h2>

                      <p> <?php echo $properties->cfootprint_desc_three; ?> </p>

                    </div>

                  </div>

                </div> <?php } ?> <?php if (

     $properties->cfootprint_image_four != ""

 ) { ?> <div class="swiper-slide">

                  <div class="enhancingEverydaySlide">

                    <img src="

                                                        <?php echo $properties->cfootprint_image_four; ?>" class="w-100" title="Energy Efficiency" alt="Energy Efficiency">

                    <div class="enhancingEverydayTitle">

                      <h2> <?php echo $properties->cfootprint_short_four; ?> </h2>

                      <p> <?php echo $properties->cfootprint_desc_four; ?> </p>

                    </div>

                  </div>

                </div> <?php } ?> <?php if (

     $properties->cfootprint_image_five != ""

 ) { ?> <div class="swiper-slide">

                  <div class="enhancingEverydaySlide">

                    <img src="

                                                          <?php echo $properties->cfootprint_image_five; ?>" class="w-100" title="Energy Efficiency" alt="Energy Efficiency">

                    <div class="enhancingEverydayTitle">

                      <h2> <?php echo $properties->cfootprint_short_five; ?> </h2>

                      <p> <?php echo $properties->cfootprint_desc_five; ?> </p>

                    </div>

                  </div>

                </div> <?php } ?>

                                                      

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

  </div>

  <!--everydaylive-->

  <!-- About all project slider end -->

  <div class="creatingIconsOfConcreteImg d-flex align-items-center backgroundImg" style="background-image:url('https://www.kalpataru.com/assets_web/images/50-years-of-KL/creatingIconsOfConcreteImgNew.jpg'); height:300px;">

    <div class="creatingIconsOfConcreteImgText text-center max-550 mx-auto" data-aos="fade" data-aos-offset="100">

      <h2>THE FINEST LIVING EXPERIENCES IN INDIA</h2>

      <!-- <p>A story that began with one man’s dream is now a symbol of design, lifestyle, innovation and luxury, spread across 20 million sq. ft. of residential and commercial projects. Supreme quality with the customers’ needs at the heart of every decision, have made Kalpataru one of the most trusted names in the business of building.</p> -->

      <button type="button" class="btn kalpataru_btn mt-3" data-toggle="modal" data-target="#gettouchPopupWrapper">ENQUIRE NOW</button>

    </div>

  </div>

  </div>

  <!-- Creating Icons of Concrete Section End-->

  <div id="locate" class="project-inner-location-section no-overflow bigTitleAnimationSection bigWidthContainer mainContainer">

    <div class="buildingLandmarksSlider">

      <h1 class="project-inner-header" data-aos="fade" data-aos-delay="100" style="font-size: 18px;margin: 2px;margin-bottom:20px;margin-top:54px"> Customer Testimonials </h1>

      <div class="swiper-container">

        <div class="swiper-wrapper">

          <div class="swiper-slide">

            <a href="#lightbox" class="lightbox-toggle testimonialsBox" data-lightbox-type="video" data-lightbox-content="https://www.youtube.com/embed/etJG1yEhAOw">

              <img src="https://dev.kalpataru.com/assets_web/images/nri/KL-NRI-Page_video-thumbnail_5.jpg" class="w-100">

                     </a>

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

  <div class="lbox"></div>

 

  <div class="contact_main_wrapper bigTitleAnimationSection mainContainer mb-5">

    <div class="container-fluid">

      <div class="double-bg-header">

        <h2 class="double-main-heading aos-init" data-aos="fade" data-aos-offset="0">03 Connect with us</h2>

        <div class="double-bg-heading double-bg-heading-gold">Connect with</div>

      </div> <?php echo $properties->idealforprofessionals_short; ?>

 

    </div>

  </div> <?php

   ?>

    <div class="greyInnerBoxSection my-5 d-none" style="background-image:url('<?= $properties->booking_background ?>'); ">

    <div class="container-fluid mainContainer">

      <div class="row justify-content-center align-items-center text-center">

        <div class="greyBoxIn">

          <p data-aos="fade" class="mb-4"> <?= $properties->booking_text ?> </p>

          <div data-aos="fade" data-aos-delay="100" class="icon-button mb-4 d-inline-flex">

            <div class="round-button">

              <div class="circle"></div>

              <i class="kalpataru-icon-arrow-right"></i>

            </div>

            <a style="font-size: inherit;color: inherit;" href="

                                              <?= $properties->booking_url ?>"> BOOK NOW </a>

          </div>

        </div>

      </div>

    </div>

  </div>

  </div>

  </div>

  <!-- ============================================= Footer Page For Project Inner ===================================================== -->

 <footer class="rel-footer">

    <div class="footer-menu">

      <div class="container-fluid mainContainer content-footer Roboto-Regular">

        <div class="row">

          <div class="col-6 col-md">

            <ul class="footer-links">

              <li>

                <a class="nav-link" href="

                                              <?php echo base_url(); ?>company-profile">COMPANY PROFILE </a>

                </option>

              <li>

                <a class="nav-link" href="

                                              <?php echo base_url(); ?>leadership-team">LEADERSHIP TEAM </a>

                </option>

              <li>

                <a class="nav-link" href="

                                              <?php echo base_url(); ?>50-plus-years-of-our-legacy">50+ years of our legacy </a>

                </option>

            </ul>

          </div>

          <div class="col-6 col-md">

            <ul class="footer-links">

              <li>

                <a class="nav-link" href="

                                              <?php echo base_url(); ?>projects/residential">Residential Projects </a>

                </option>

              <li>

                <a class="nav-link" href="

                                              <?php echo base_url(); ?>projects/commercial">Commercial Projects </a>

                </option>

              <li>

                <a class="nav-link" href="

                                              <?php echo base_url(); ?>completed-projects">Completed Projects </a>

                </option>

            </ul>

          </div>

          <div class="col-6 col-md">

            <ul class="footer-links">

              <li>

                <a class="nav-link" href="

                                              <?php echo base_url(); ?>group-company">Group Companies </a>

                </option>

              <li>

                <a class="nav-link" href="

                                              <?php echo base_url(); ?>csr">CSR </a>

                </option>

              <li>

                <a class="nav-link" href="

                                              <?php echo base_url(); ?>press">Press Release </a>

                </option>

            </ul>

          </div>

          <div class="col-6 col-md">

            <ul class="footer-links">

                        <li>

                <a class="nav-link" href="

                                              <?php echo base_url(); ?>contact-us">Our Offices </a>

                </option>

              <li>

                <a class="nav-link" href="https://careers.kalpataru.com/" target="_blank">CAREERS</a>

                </option>

              <li>

                <a class="nav-link" href="https://vendorconnect.kalpatarugroup.com/" target="_blank">Vendor Connect</a>

                </option>

              <li>

                <a class="nav-link" href="

                                              <?php echo base_url(); ?>investor">Investor </a>

                </option>

               

            </ul>

          </div>

          <div class="col-6 col-md">

            <ul class="footer-links">

              <li>

                <a class="nav-link" href="

                                              <?php echo base_url(); ?>awards">awards </a>

                </option>

              <li>

                <a class="nav-link" target="_blank" href="

                                              <?= base_url("assets_web/pdf/RERA_PDF.pdf") ?>">Rera </a>

                </option>

            </ul>

          </div>

          <div class="col-6 col-md">

            <ul class="footer-links">

              <li>

                <a class="nav-link head-nav-link" href="javascript:void(0);" data-toggle="modal" data-target="#enquiryPopupWrapper">Enquire Now</a>

                </option>

              <li>

                <a class="nav-link" href="tel:+91 22 3064 3065">+91 22 3064 3065</a>

                </option>

              <li>

                <a class="nav-link" href="mailto:sales@kalpataru.com">sales@kalpataru.com</a>

                </option>

              <li>

                <div class="d-none d-md-flex nav-link head-nav-link" href="#">FOLLOW</div>

              </li>

              <li class="d-none d-md-flex nav-link head-nav-link footer-social-icons align-items-center"> <?php



?> <a href="https://www.youtube.com/c/KalpatarulimitedOfficial" class="d-inline-block" target="_blank">

                  <i class="demo-icon kalpataru-icon-youtube" title="YouTube"></i>

                </a>

                              <a href="https://www.linkedin.com/company/kalpataru-limited" target="_blank" title="Linkedin">

                  <svg style="height:24px;" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">

                    <g transform="translate(1)">

                      <g>

                      <g>

   <path d="M68.12,4.267c-18.773,0-35.84,6.827-48.64,19.627C5.827,37.547-1,54.613-1,72.533c0,18.773,7.68,35.84,20.48,48.64

      c12.8,12.8,30.72,20.48,47.787,19.627c0,0,0.853,0,1.707,0c17.067,0,33.28-6.827,46.08-19.627

      c12.8-12.8,20.48-29.867,20.48-48.64c0.853-17.92-6.827-34.987-19.627-47.787C103.107,11.093,86.04,4.267,68.12,4.267z

      M103.107,109.227c-9.387,9.387-22.187,15.36-35.84,14.507c-12.8,0-26.453-5.12-35.84-14.507

      c-10.24-9.387-15.36-23.04-15.36-36.693s5.12-26.453,15.36-36.693c9.387-9.387,22.187-14.507,36.693-14.507

      c12.8,0,25.6,5.12,34.987,14.507c10.24,10.24,15.36,23.04,15.36,36.693S113.347,99.84,103.107,109.227z" />

   <path d="M101.4,157.867H32.28c-13.653,0-24.747,11.093-24.747,25.6v298.667c0,13.653,11.947,25.6,25.6,25.6H101.4

      c13.653,0,25.6-11.947,25.6-24.747v-299.52C127,169.813,115.053,157.867,101.4,157.867z M109.933,482.987

      c0,4.267-4.267,7.68-8.533,7.68H33.133c-4.267,0-8.533-4.267-8.533-8.533V183.467c0-4.267,3.413-8.533,7.68-8.533h69.12

      c4.267,0,8.533,4.267,8.533,8.533V482.987z" />

   <path d="M391.533,149.333h-17.92c-33.28,0-64.853,14.507-85.333,37.547v-11.947c0-8.533-8.533-17.067-17.067-17.067H185.88

      c-7.68,0-17.067,6.827-17.067,16.213v318.293c0,9.387,9.387,15.36,17.067,15.36h93.867c7.68,0,17.067-5.973,17.067-15.36v-184.32

      c0-28.16,20.48-50.347,46.933-50.347c13.653,0,26.453,5.12,35.84,14.507c8.533,7.68,11.947,19.627,11.947,34.987v183.467

      c0,8.533,8.533,17.067,17.067,17.067h85.333c8.533,0,17.067-8.533,17.067-17.067v-220.16

      C511,202.24,458.947,149.333,391.533,149.333z M493.933,489.813l-0.853,0.853h-83.627L408.6,307.2

      c0-20.48-5.12-35.84-16.213-46.933c-12.8-12.8-29.867-19.627-47.787-19.627c-35.84,0.853-64,29.867-64,67.413v182.613h-93.867

      V174.933h84.48l0.853,0.853v53.76l23.04-23.04l0.853-0.853c17.067-23.893,46.933-39.253,78.507-39.253h17.92

      c57.173,0,101.547,46.08,101.547,104.107V489.813z" />

</g>

                      </g>

                    </g>

                  </svg>

                </a> <?php



?>

              </li>

            

            </ul>

          </div>

          <div class="col-12">

            <ul class="footer-links text-center mb-0">

              <li class="d-flex justify-content-center d-md-none">

                <div class="nav-link head-nav-link" href="#">FOLLOW</div>

              </li>

              <li class="d-flex justify-content-center d-md-none nav-link head-nav-link footer-social-icons"> 

                <?php

?> <a href="https://www.youtube.com/c/KalpatarulimitedOfficial" class="d-inline-block" target="_blank">

                  <i class="demo-icon kalpataru-icon-youtube" title="YouTube"></i>

                </a>

                <!-- <a href="https://www.youtube.com/" class="d-inline-block" target="_blank"><i class="demo-icon kalpataru-icon-twitter"></i></a> -->

                <a href="https://www.linkedin.com/company/kalpataru-limited" target="_blank" title="Linkedin">

                  <svg style="height:24px;" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">

                    <g transform="translate(1)">

                      <g>

                          <g>

      <path d="M68.12,4.267c-18.773,0-35.84,6.827-48.64,19.627C5.827,37.547-1,54.613-1,72.533c0,18.773,7.68,35.84,20.48,48.64c12.8,12.8,30.72,20.48,47.787,19.627c0,0,0.853,0,1.707,0c17.067,0,33.28-6.827,46.08-19.627

          c12.8-12.8,20.48-29.867,20.48-48.64c0.853-17.92-6.827-34.987-19.627-47.787C103.107,11.093,86.04,4.267,68.12,4.267z

          M103.107,109.227c-9.387,9.387-22.187,15.36-35.84,14.507c-12.8,0-26.453-5.12-35.84-14.507

          c-10.24-9.387-15.36-23.04-15.36-36.693s5.12-26.453,15.36-36.693c9.387-9.387,22.187-14.507,36.693-14.507

          c12.8,0,25.6,5.12,34.987,14.507c10.24,10.24,15.36,23.04,15.36,36.693S113.347,99.84,103.107,109.227z" />

      <path d="M101.4,157.867H32.28c-13.653,0-24.747,11.093-24.747,25.6v298.667c0,13.653,11.947,25.6,25.6,25.6H101.4

          c13.653,0,25.6-11.947,25.6-24.747v-299.52C127,169.813,115.053,157.867,101.4,157.867z M109.933,482.987

          c0,4.267-4.267,7.68-8.533,7.68H33.133c-4.267,0-8.533-4.267-8.533-8.533V183.467c0-4.267,3.413-8.533,7.68-8.533h69.12

          c4.267,0,8.533,4.267,8.533,8.533V482.987z" />

      <path d="M391.533,149.333h-17.92c-33.28,0-64.853,14.507-85.333,37.547v-11.947c0-8.533-8.533-17.067-17.067-17.067H185.88

          c-7.68,0-17.067,6.827-17.067,16.213v318.293c0,9.387,9.387,15.36,17.067,15.36h93.867c7.68,0,17.067-5.973,17.067-15.36v-184.32

          c0-28.16,20.48-50.347,46.933-50.347c13.653,0,26.453,5.12,35.84,14.507c8.533,7.68,11.947,19.627,11.947,34.987v183.467

          c0,8.533,8.533,17.067,17.067,17.067h85.333c8.533,0,17.067-8.533,17.067-17.067v-220.16

          C511,202.24,458.947,149.333,391.533,149.333z M493.933,489.813l-0.853,0.853h-83.627L408.6,307.2

          c0-20.48-5.12-35.84-16.213-46.933c-12.8-12.8-29.867-19.627-47.787-19.627c-35.84,0.853-64,29.867-64,67.413v182.613h-93.867

          V174.933h84.48l0.853,0.853v53.76l23.04-23.04l0.853-0.853c17.067-23.893,46.933-39.253,78.507-39.253h17.92

          c57.173,0,101.547,46.08,101.547,104.107V489.813z" />

    </g>

                      </g>

                    </g>

                  </svg>

                </a> <?php

                 ?>

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

            <div class="footer-logo"> <?php include "assets_web/images/logo.svg"; ?> </div>

            <div class="nav-link">COPYRIGHT &copy; <?php echo date(

                "Y"

            ); ?> KALPATARU </div>

          </div>

        </div>

        <div class="col-12 col-md">

          <ul class="nav footer-links justify-content-md-end">

            <li class="nav-item">

              <a class="nav-link" href="

                                            <?php echo base_url(); ?>privacy-policy" target="_blank">PRIVACY POLICY </a>

              </option>

            <li class="nav-item">

              <a class="nav-link" href="

                                            <?php echo base_url(); ?>refund-policy" target="_blank">REFUND POLICY </a>

              </option>

                </ul>

        </div>

      </div>

    </div>

  </footer>

  <!-- ============================================= End Footer Page Project Inner ============================================================= -->

  </div> <?php include "footer-js.php"; ?>

  <!-- Modal -->

  <div id="videoPopupWrapper" class="modal fade" role="videoPopupWrapper">

    <div class="modal-dialog">

      <!-- Modal content-->

      <div class="modal-content" style="padding: 0em 0em;">

        <iframe width="100%" height="315" src="https://www.youtube.com/embed/Z0PG6BCtZ18" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

      </div>

    </div>

  </div>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>

  <script>

    filterSelection("all")



    function filterSelection(c) {

      var x, i;

      x = document.getElementsByClassName("filterDiv");

      if (c == "all") c = "";

      for (i = 0; i < x.length; i++) {

        w3RemoveClass(x[i], "show");

        if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");

      }

    }



    function w3AddClass(element, name) {

      var i, arr1, arr2;

      arr1 = element.className.split(" ");

      arr2 = name.split(" ");

      for (i = 0; i < arr2.length; i++) {

        if (arr1.indexOf(arr2[i]) == -1) {

          element.className += " " + arr2[i];

        }

      }

    }



    function w3RemoveClass(element, name) {

      var i, arr1, arr2;

      arr1 = element.className.split(" ");

      arr2 = name.split(" ");

      for (i = 0; i < arr2.length; i++) {

        while (arr1.indexOf(arr2[i]) > -1) {

          arr1.splice(arr1.indexOf(arr2[i]), 1);

        }

      }

      element.className = arr1.join(" ");

    }

    // Add active class to the current button (highlight it)

    var btnContainer = document.getElementById("myBtnContainer");

    var btns = btnContainer.getElementsByClassName("btn");

    for (var i = 0; i < btns.length; i++) {

      btns[i].addEventListener("click", function() {

        var current = document.getElementsByClassName("active");

        current[0].className = current[0].className.replace(" active", "");

        this.className += " active";

      });

    }

  </script>

  <script id="rendered-js">

    $('.lbox').append(`<div class="lightbox">

                                <div class="lightbox-container">

                                  <div class="row">

                                    <a href="#lightbox" class="lightbox-close lightbox-toggle">X</a>

                                    <div class="col-sm-12 lightbox-column"></div>

                                  </div>

                                </div>

                              </div>`);

    $('.lightbox-toggle').on('click', event => {

      event.preventDefault();

      $('.lightbox').fadeToggle('fast');

      let context = $(event.currentTarget).attr('data-lightbox-type');

      let content = $(event.currentTarget).attr('data-lightbox-content');

      if (context == 'video') {

        $('.lightbox-column').append(`<div class="lightbox-video">

                                <iframe src="${content}" frameborder="0" allowfullscreen></iframe>

                              </div>`);

      } else if (context == 'image') {

        $('.lightbox-column').append(`<img src="${content}" class="img-" frameborder="0" allowfullscreen>`);

      }

    });

    $('.lightbox-close').on('click', event => {

      event.preventDefault();

      $('.lightbox-column > *').remove();

    });

    //# sourceURL=pen.js

    $("#videoPopupWrapper").modal('show');

  </script>     
</body>

</html>

 <script>

  $('.featuredMenu li').on('click', function() {

    $(this).addClass('active').siblings().removeClass('active');

  });

</script>