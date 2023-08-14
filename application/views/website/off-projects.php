<?php include('common.php'); $page='main_listing_page'; ?>
<?php
// Program to display complete URL
  
$link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']
                === 'on' ? "https" : "http") . "://" .
          $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
  
// Display the complete URL
//echo $link;


?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Projects | Kalpataru</title>
    <meta name="description" content="Explore the top residential & commercial projects that opens up a world full of opportunities for you. Visit the website for more details on all our latest & upcoming projects.">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <?php include('header-css.php'); ?>
    <?php include('ga-code.php'); ?>


    <style type="text/css">
        .searchPopup .modal-content{padding: 20px;}
        .searchPopup .modal-title{color: #414040; font-family: 'Roboto', sans-serif; font-size: 1.2em; font-weight: 500; text-align: center; width: 100%;      letter-spacing: 3px;}
        .searchPopup .searchLabel{font-family: 'Roboto', sans-serif; font-size: 0.750em; font-weight: 500; color: #c09841; letter-spacing: 3px; width: 150px; margin-bottom: 0px !important;}
        .searchPopup .propertyTypeTabs, .searchPopup .locationsWrapper, .searchPopup .selectConfigurationWrapper{display: flex; align-items: center;     }
        .searchPopup .propertyTypeTab{font-size: 0.838em;     color: #727171;font-family: 'History-Pro'; width: calc(50% - 15px); text-align: center;}
        .searchPopup .modal-header{border-bottom: 1px solid #ccc;}
        .searchPopup .propertyTypeTabWrap{width: calc(100% - 150px)}
        .searchPopup .custom_dropdown_group{margin-left: 0px; margin-right: 0px; width: calc(100% - 150px);}
        .searchPopup .custom_dropdown_group .col-md-6{padding: 0px; margin-right: 30px; width: calc(50% - 15px); flex: none;     font-family: 'Roboto', sans-serif;}
        .searchPopup .custom_dropdown_group .col-md-6:last-child{margin-right: 0px; }
        .searchPopup .btn-group{width: calc(100% - 150px) !important}
        .searchPopup .selectedValue{font-family: 'Roboto', sans-serif; font-size: 0.638em;}
        .searchPopup .dropdown-toggle{border: none; border-bottom: solid 1px #000; padding: 0px;}
        .searchPopup .selectConfigurationWrapper{margin-top: 20px;}
        .searchPopup .selectConfigurationWrapper .btn-group .btn{border: none; padding: 0; width: auto; margin-right: 30px; flex: none; font-size: 0.738em;}
        .searchPopup.main_popup_wrapper .close{margin-top: 0px;}
        /*.searchPopup .searchPopup .searchLabel {width: 120px;}*/
        .searchPopup .selectConfigurationWrapper .btn-group .btn.active{background-color:transparent;color: #c09841;}
    </style>
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
                
           
<?php
if (strpos($link,'completed-projects') == true) {
   // echo "hi";
?>
 
                  <video class="w-100 d-none d-lg-block" loop="" autoplay="" muted="" playsinline="">
                     <source src="https://d3smrpuo7zidc0.cloudfront.net/kalpataru/press/1630325551.mp4" type="video/mp4">
                 </video>
                                                        
                        <video class="w-100 d-block d-lg-none mobileHomeVid" loop="" autoplay="" muted="" playsinline="">
                                                            <source src="https://d3smrpuo7zidc0.cloudfront.net/kalpataru/press/1630325678.mp4" type="video/mp4">
                                                        </video>
                    <?php
}
else
{
	?>
     <img class="w-100 d-none d-lg-block allDesktopBanner" src="<?php echo base_url() ?>assets_web/images/projectBannerWeb.jpg">
     <img class="w-100 d-block d-lg-none allMobileBanner" src="<?php echo $this->config->item('cdn_url'); ?>611e570fe6d0e.jpg">
                     <?php
}
					
					?>

                    <div class="common_banner_text position-absolute">
                        <div class="container-fluid mainContainer h-100">
                            <div class="d-flex align-items-center h-100">
                                <h1 data-aos="fade" data-aos-offset="0" class="History-Pro mb-0">Residential & Commercial Projects in <?=substr($this->uri->segment(1), 12);?></h1>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Filter container for listing page start-->
                <div class="listing_filter_section bigTitleAnimationSection" data-aos="fade" data-aos-delay="100" data-aos-offset="0">
                    <div class="container-fluid mainContainer">
                        <div class="listing_filter_inner">
                            <h2 class="mb-0 History-Pro mobile_listing_main_title">Residential & Commercial Projects in <?=substr($this->uri->segment(1), 12);?></h2>
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

                <?php if(isset($top_picks) && !empty($top_picks)): ?>
                <!-- Top Picks Section start -->
                <div class="listing_page_section listing_top_picks_section bigTitleAnimationSection">
                    <div class="container-fluid mainContainer">
                        <div class="double-bg-header">
                            <div class="double-main-heading double-main-heading-gold" data-aos="fade">01 TOP PICKS</div>
                            <div class="double-bg-heading double-bg-heading-gold">TOP PICKS</div>
                        </div>
                        <div class="swiper-container">
                            <div class="swiper-wrapper home-featured-list">
                                <?php
                                foreach ($top_picks as $key => $value) {
                                 $ci = & get_instance();
                                 $ci->load->model('common_m');
                                 $title = $ci->common_m->seoUrl($value->title);
                                 if ($key==0 || $key%2==0) {                              
                                    ?>
                                    <div class="swiper-slide home-featured-list-item w-100 col-9 p-0">
                                        <a href="<?=base_url().$value->city_slug.'/'.$value->slug?>"> <?php /*=$title?>/<?=$value->id*/ ?>
                                            <div class="home-featured-list-item-container row align-items-center justify-content-center">
                                                <div data-aos="fade" data-aos-delay="100" data-aos-offset="0" class="home-featured-list-img col-md-7 col-12">
                                                    <div class="home-featured-list-img-container">
                                                        <img src="<?=$value->thumbnail_image?>" class="w-100" alt="<?=$value->thumbnail_imagealt?>">  
                                                    </div>                                      
                                                </div>
                                                <div class="home-featured-list-text-container col-md-5 col-12">
                                                    <div class="home-featured-list-text">
                                                        <h2 data-aos="fade" data-aos-delay="100" data-aos-offset="0" class="home-featured-list-project-name"><?=$value->title?></h2>
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
                                    <div class="swiper-slide home-featured-list-item w-100 col-9 p-0">
                                        <a href="<?=base_url().$value->city_slug.'/'.$value->slug?>"> <?php /*=$title?>/<?=$value->id*/ ?>
                                            <div class="home-featured-list-item-container row align-items-center justify-content-center">
                                                <div class="home-featured-list-text-container col-md-5 p-0 col-12">
                                                    <div class="home-featured-list-text">
                                                        <h2 data-aos="fade" data-aos-delay="100" data-aos-offset="0" class="home-featured-list-project-name"><?=$value->title?></h2>
                                                        <div data-aos="fade" data-aos-delay="200" data-aos-offset="0" class="home-featured-list-project-location Roboto-Regular"><?=$value->location_name?></div>
                                                        <div data-aos="fade" data-aos-delay="300" data-aos-offset="0" class="home-featured-list-project-bhkcount Roboto-Regular"><?=$value->typology?></div>
                                                        <div data-aos="fade" data-aos-delay="400" data-aos-offset="0" class="home-featured-list-project-description Roboto-Regular"><?=(!empty($value->featured_description)?$value->featured_description:$value->short_description);?></div>
                                                        <div data-aos="fade" data-aos-delay="500" data-aos-offset="0" class="icon-button"><div class="round-button"><div class="circle"></div><i class="kalpataru-icon-arrow-right"></i></div> LEARN MORE</div>
                                                    </div>
                                                </div>
                                                <div data-aos="fade" data-aos-delay="100" data-aos-offset="0" class="home-featured-list-img col-md-7 col-12">
                                                    <div class="home-featured-list-img-container">
                                                        <img src="<?=$value->thumbnail_image?>" class="w-100" alt="<?=$value->thumbnail_imagealt?>">  
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
                </div>
            </div> 
            <?php endif; ?>
            <!-- Top Picks Section end -->

            <?php if(isset($on_going) && !empty($on_going)): ?>
            <!-- Top Picks Section start -->
            <div class="listing_page_section listing_on_going_section  bigTitleAnimationSection">
                <div class="container-fluid mainContainer">
                    <div class="double-bg-header">
                        <div class="double-main-heading double-main-heading-gold" data-aos="fade">02 ON GOING</div>
                        <div class="double-bg-heading double-bg-heading-gold">ON GOING</div>
                    </div>
                    <div class="swiper-container">
                        <div class="swiper-wrapper home-featured-list on_going_container">
                            <?php
                            foreach ($on_going as $key => $value) {
                             $ci = & get_instance();
                             $ci->load->model('common_m');
                             $title = $ci->common_m->seoUrl($value->title);
                             if ($key==0 || $key%2==0) {                              
                                ?>
                                <div class="swiper-slide home-featured-list-item w-100 col-9 p-0">
                                    <a href="<?=base_url().$value->city_slug.'/'.$value->slug?>"> <?php /*=$title?>/<?=$value->id*/ ?>
                                        <div class="home-featured-list-item-container row align-items-center justify-content-center">
                                            <div data-aos="fade" data-aos-delay="100" data-aos-offset="0" class="home-featured-list-img col-md-7 col-12">
                                                <div class="home-featured-list-img-container">
                                                    <img src="<?=$value->thumbnail_image?>" class="w-100" alt="<?=$value->thumbnail_imagealt?>">  
                                                </div>                                      
                                            </div>
                                            <div class="home-featured-list-text-container col-md-5 col-12">
                                                <div class="home-featured-list-text">
                                                    <h2 data-aos="fade" data-aos-delay="100" data-aos-offset="0" class="home-featured-list-project-name"><?=$value->title?></h2>
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
                                <div class="swiper-slide home-featured-list-item w-100 col-9 p-0">
                                    <a href="<?=base_url().$value->city_slug.'/'.$value->slug?>"> <?php /*=$title?>/<?=$value->id*/ ?>
                                        <div class="home-featured-list-item-container row align-items-center justify-content-center">
                                            <div class="home-featured-list-text-container col-md-5 p-0 col-12">
                                                <div class="home-featured-list-text">
                                                    <h2 data-aos="fade" data-aos-delay="100" data-aos-offset="0" class="home-featured-list-project-name"><?=$value->title?></h2>
                                                    <div data-aos="fade" data-aos-delay="200" data-aos-offset="0" class="home-featured-list-project-location Roboto-Regular"><?=$value->location_name?></div>
                                                    <div data-aos="fade" data-aos-delay="300" data-aos-offset="0" class="home-featured-list-project-bhkcount Roboto-Regular"><?=$value->typology?></div>
                                                    <div data-aos="fade" data-aos-delay="400" data-aos-offset="0" class="home-featured-list-project-description Roboto-Regular"><?=(!empty($value->featured_description)?$value->featured_description:$value->short_description);?></div>
                                                    <div data-aos="fade" data-aos-delay="500" data-aos-offset="0" class="icon-button"><div class="round-button"><div class="circle"></div><i class="kalpataru-icon-arrow-right"></i></div> LEARN MORE</div>
                                                </div>
                                            </div>
                                            <div data-aos="fade" data-aos-delay="100" data-aos-offset="0" class="home-featured-list-img col-md-7 col-12">
                                                <div class="home-featured-list-img-container">
                                                    <img src="<?=$value->thumbnail_image?>" class="w-100" alt="<?=$value->thumbnail_imagealt?>">  
                                                </div>   
                                            </div>                                 
                                        </div>
                                    </a>
                                </div>

                                <?php
                            }
                            if ($key==3){
                                break;
                            }
                        }
                        ?>
                    </div>
                </div>
                <!-- <div class="swiper-pagination"></div>
                <div class="swiper-navigation-container">
                    <div class="swiper-button-prev hiddenOnDesktop"></div>
                    <div class="swiper-button-next hiddenOnDesktop"></div>
                </div> -->
                <div style="text-align: center;cursor: pointer;" id="load_more" class="projectListingLoadMore">
                    <?php
                    if (count($on_going)<=4) {
                        // echo 'No more data!';
                    }
                    else
                    {
                        // echo ' <a href="javascript:void(0);" >LOAD MORE</a>';
                        echo '<div onclick="loadMore()" class="icon-button"><div class="round-button"><div class="circle"></div><i class="kalpataru-icon-arrow-right"></i></div> LOAD MORE</div>';
                    }
                    ?>
                   
                </div>
                <input type="hidden" id="page_no" name="page_no" >
            </div>
        </div> 
        <?php endif; ?> 
        <!-- Top Picks Section end -->
    </div>

            <div class="mostSearchedPropery  d-none">
                <div class="container-fluid mainContainer">
                    <h2>PROJECTS AS PER CITIES</h2>
                    <div class="row">
                        <?php

                        $city_slug = $this->db->select('*')
                            ->from('cities')
                            ->get()->result();

                        foreach($city_slug as $cityVal): ?>
                            <div class="col-md-3 col-6">
                                <a class="nav-link" href="<?php echo base_url().'projects-in-'. $cityVal->slug; ?>">Projects in <?php echo $cityVal->title; ?></a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>



   <!-- ============================================= Footer Page For Project ===================================================== -->
   
    <!-- Page circle -->

<!--<div class="page-circle transition"></div>
<input type="hidden" id="chat_bot_url" value="<?php /*echo $this->config->item('bot_url'); */?>">-->

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
                        <li><a class="nav-link" href="<?php echo base_url(); ?>projects/residential">Residential Projects</a></li>
                        <li><a class="nav-link" href="<?php echo base_url(); ?>projects/commercial">Commercial Projects</a></li>
                        <li><a class="nav-link" href="<?php echo base_url(); ?>completed-projects">Completed Projects</a></li>
                    </ul>
                </div>

                <div class="col-6 col-md">
                    <ul class="footer-links">
                        <!-- <li><a class="nav-link head-nav-link" href="#">RESIDENTIAL</a></li> -->
                        <li><a class="nav-link" href="<?php echo base_url(); ?>group-company">Group Companies</a></li>
                        <li><a class="nav-link" href="<?php echo base_url(); ?>csr">CSR</a></li>
                        <li><a class="nav-link" href="<?php echo base_url(); ?>press">Press Release</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <ul class="footer-links">
                        <!-- <li><a class="nav-link head-nav-link" href="#">COMMERCIAL</a></li>										 -->
                        <li><a class="nav-link" href="<?php echo base_url(); ?>contact-us">Our Offices</a></li>
                        <li><a class="nav-link" href="https://careers.kalpataru.com/" target="_blank" >CAREERS</a></li>
                        <li><a class="nav-link" href="https://vendorconnect.kalpatarugroup.com/" target="_blank" >Vendor Connect</a></li>
                        <li><a class="nav-link" href="<?php echo base_url(); ?>investor">Investor</a></li>
                        <!-- <li><a class="nav-link" href="<?php echo base_url(); ?>sustainability">sustainability</a></li> -->
                    </ul>
                </div>

                <div class="col-6 col-md">
                    <ul class="footer-links">

                        <li><a class="nav-link" href="<?php echo base_url(); ?>awards">awards</a></li>
                        <li><a class="nav-link" target="_blank" href="<?= base_url('assets_web/pdf/RERA_PDF.pdf')?>">Rera</a></li>

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

	<?php if(isset($dynamic_footer)): ?>
	<div class="homePageFooter" style="display:block;">
		<?php if(isset($dynamic_footer['cities']) && !empty($dynamic_footer['cities'])): 
		/*$outerLoopCities = ceil(count($dynamic_footer['cities'])/4);
		$properties_count_cities = count($dynamic_footer['cities']);
		$list_count_cities = 0;
		$breakLoopOnCity = 3;*/ ?>
		<div class="mostSearchedPropery  d-none">
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

    <!--<div class="mostSearchedPropery">
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


    <div class="mostSearchedPropery  d-none">
        <div class="container-fluid mainContainer">
            <h2>PROJECTS AS PER City CONFIGURATION</h2>
            <div class="row">

                <?php if (!empty($property)):?>
                    <?php foreach ($property as $value):?>


                        <?php
                        $id = $value['city'];
                        $city_slug = $this->db->select('*')
                            ->from('cities')
                            ->where(['id'=>$id])
                            ->get()->row_array();
                        ?>

                        <div class="col-md-3 col-6">

                            <h3 class="project_as_per_typo"><a class="nav-link" href="<?=base_url().$city_slug['slug'].'/'.$value['slug']?>"><?php echo $__bhk ?> apartments in <?php echo $value['location_name']; ?></a></h3>

                        </div>

                    <?php endforeach;?>
                <?php endif;?>

            </div>
        </div>
    </div>


    <div class="mostSearchedPropery   d-none">
        <div class="container-fluid mainContainer">
            <h2>PROJECTS AS PER AREA CONFIGURATION</h2>
            <div class="row">
                <?php

                /*phpinfo();*/

                $typology = $this->db->select('typology_for_footer')->get('properties')->result_array();

                $topo=[];
                foreach ($typology as $typo)
                {

                    $list = explode(',',$typo['typology_for_footer']);
                    foreach($list as $i=>$v){
                        //$topo[]=$v;
                        /*$this->db->distinct();*/
                        /*$this->db->group_by('cities.title');*/
                        $this->db->select('properties.*,cities.title as city_name,locations.location as location_name,cities.slug as city_slug,locations.slug as location_slug');
                        $this->db->from('properties');
                        $this->db->join('cities', 'cities.id = properties.city', 'left');
                        $this->db->join('locations', 'locations.id = properties.location', 'left');
                        $this->db->order_by('city_name');
                        $this->db->group_by('city_name');
                        $this->db->where("FIND_IN_SET('$v' ,properties.typology_for_footer)");
                        $topo[$v] = $this->db->get()->result_array();

                    }
                }

               /* echo "<pre>";
                print_r($topo);
                exit;*/

                unset($topo['Office spaces']);

                ?>
                <?php foreach($topo as $bhk=>$value):?>
                    <?php foreach ($value as $item):?>
                        <?php
                        $id = $item['city'];
                        $city_slug = $this->db->select('*')
                            ->from('cities')
                            ->where(['id'=>$id])
                            ->get()->row_array();
                        ?>
                        <div class="col-md-3 col-6"  data-city="<?php echo $city_slug['slug'] ?>">
                            <?php $bhk_config = str_replace(' ','-',strtolower($bhk))?>
                            <!--<a class="nav-link" href="<?/*=base_url('project/').$city_slug['slug'].'/'.$item['property_type'] .'/' . $bhk_config */?>"><?php /*echo $bhk */?> apartment in <?php /*echo $item['city_name']; */?></a>-->
                            <h3 class="project_as_per_typo"><a class="nav-link" href="<?=base_url().$bhk_config.'-apartments-in-'.$city_slug['slug'] ?>"><?php echo $bhk ?> apartments in <?php echo $item['city_name']; ?></a></h3>
                        </div>
                    <?php endforeach;?>
                <?php endforeach; ?>
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
   
   <!-- ============================================= End Footer Page Project ============================================================= -->     


	
</div>
<?php include('footer-js.php'); ?>

<script type="text/javascript">
    $(function(){

        let text = window.location.pathname;
		
		/* var url = "<?php echo substr(current_url(),35) ?>"; */
		
		 var city = "<?php echo $onGoingVal->city_slug; ?>";

        let result = text.match('/projects-in-'+city);

        if (result == '/projects-in-'+city) {

             $("#OngoingProject").show();
			 $("#ProjectAsPerLocation").show();
             console.log(window.location.pathname);
			
        }
		
	
		

        if (window.location.pathname == '/projects') {
            $("#OngoingProject").hide();
			$("#ProjectAsPerLocation").show();
            console.log(window.location.pathname);
        }
		
    

    });
</script>

<!--	<script type="text/javascript">
    $(function(){

        if (window.location.pathname == '/projects') {

            $("#OngoingProject").hide();
			console.log(window.location.pathname);
        }
        else
        {
            $("#OngoingProject").show();
			console.log(window.location.pathname);
        }
    });
</script> -->


<script type="text/javascript">
    var page = 2;
    var nomore = 0;
    function loadMore()
    {
        var data_count = 4;
        var data_from = (page-1)*data_count;
        var data_to =   (page*data_count)-1; 
        var ongoing = <?php echo json_encode($on_going); ?>;
        var key=0;
        var data_html = "";
        var temp = "";
        for (var i = data_from; i <= data_to; i++) {
            if (i>(ongoing.length-1)) {
                nomore = 1;
                break;
            }
            if (key==0) {
                temp = ongoing[i].id;
            }
            var title = seoUrl(ongoing[i].title);
            var description = ongoing[i].short_description;
            if(ongoing[i].featured_description !== null){
                if(ongoing[i].featured_description.length > 0){
                    description = ongoing[i].featured_description;
                }
            }
            if (key==0 || key%2==0) {                              
                //+title+'/'+ongoing[i].id+'
                data_html += '<div class="swiper-slide home-featured-list-item w-100 col-9 p-0 scroll-to-'+ongoing[i].id+'"> <a href="<?=base_url()?>'+ongoing[i].city_slug+'/'+ongoing[i].slug+'"> <div class="home-featured-list-item-container row align-items-center justify-content-center"> <div data-aos="fade" data-aos-delay="100" data-aos-offset="0" class="home-featured-list-img col-md-7 col-12"> <div class="home-featured-list-img-container"> <img src="'+ongoing[i].thumbnail_image+'" class="w-100" alt="<?=$value->thumbnail_imagealt?>"> </div> </div> <div class="home-featured-list-text-container col-md-5 col-12"> <div class="home-featured-list-text"> <div data-aos="fade" data-aos-delay="100" data-aos-offset="0" class="home-featured-list-project-name">'+ongoing[i].title+'</div> <div data-aos="fade" data-aos-delay="200" data-aos-offset="0" class="home-featured-list-project-location Roboto-Regular">'+ongoing[i].location_name+'</div> <div data-aos="fade" data-aos-delay="300" data-aos-offset="0" class="home-featured-list-project-bhkcount Roboto-Regular">'+ongoing[i].typology+'</div> <div data-aos="fade" data-aos-delay="400" data-aos-offset="0" class="home-featured-list-project-description Roboto-Regular">'+description+'</div> <div data-aos="fade" data-aos-delay="500" data-aos-offset="0" class="icon-button"><div class="round-button"><div class="circle"></div><i class="kalpataru-icon-arrow-right"></i></div> LEARN MORE</div> </div> </div> </div> </a> </div>';
            }
            else{
                data_html += '<div class="swiper-slide home-featured-list-item w-100 col-9 p-0 scroll-to-'+ongoing[i].id+'"> <a href="<?=base_url()?>'+ongoing[i].city_slug+'/'+ongoing[i].slug+'"> <div class="home-featured-list-item-container row align-items-center justify-content-center"> <div class="home-featured-list-text-container col-md-5 p-0 col-12"> <div class="home-featured-list-text"> <div data-aos="fade" data-aos-delay="100" data-aos-offset="0" class="home-featured-list-project-name">'+ongoing[i].title+'</div> <div data-aos="fade" data-aos-delay="200" data-aos-offset="0" class="home-featured-list-project-location Roboto-Regular">'+ongoing[i].location_name+'</div> <div data-aos="fade" data-aos-delay="300" data-aos-offset="0" class="home-featured-list-project-bhkcount Roboto-Regular">'+ongoing[i].typology+'</div> <div data-aos="fade" data-aos-delay="400" data-aos-offset="0" class="home-featured-list-project-description Roboto-Regular">'+description+'</div> <div data-aos="fade" data-aos-delay="500" data-aos-offset="0" class="icon-button"><div class="round-button"><div class="circle"></div><i class="kalpataru-icon-arrow-right"></i></div> LEARN MORE</div> </div> </div> <div data-aos="fade" data-aos-delay="100" data-aos-offset="0" class="home-featured-list-img col-md-7 col-12"> <div class="home-featured-list-img-container"> <img src="'+ongoing[i].thumbnail_image+'" class="w-100" alt="<?=$value->thumbnail_imagealt?>"> </div> </div> </div> </a> </div>';
            }
            key++;
        }
        $(".on_going_container").append(data_html);
        AOS.init({
            duration: 600,
            disable: function() {
                var maxWidth = 800;
                return window.innerWidth < maxWidth;
            }
        });
        /*$('html, body').animate({
            scrollTop: $(".scroll-to-"+temp).offset().top-80
        }, 10);*/
        if (nomore==1) {
            $("#load_more").html("No more data!"); 
        }else{
            $('html, body').animate({
                scrollTop: $(".scroll-to-"+temp).offset().top-80
            }, 10);
        }
        page++;
    }
    function seoUrl(string) {
        string = string.toLowerCase();
        string = string.replace(/[^a-z0-9_\s-]/, '-');
        string = string.replace(/[\s-]+/, '-');
        string = string.replace(/[\s_]/, '-');
        return string;
    }
</script>
</body>
</html>