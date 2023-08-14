<?php include('common.php'); $page='project-inner'; ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?=$properties->meta_title?></title>
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
</head>
<body class="small-page">
    <div class="page-content <?php echo $page; ?> position-relative grey-page gap_from_top">
        <div class="page-body">
            <?php include('header.php'); ?> 
            <?php
                
                if ($properties->banner_type=='video') {
                    $background = '';
                }
                else
                {
                    $background = $properties->featured_images;
                }
            ?>
            <div class="common_banner backgroundImg position-relative <?php if ($properties->banner_type=='video') { echo "video_added"; } ?>" style="background-image:url('<?=$background?>');">
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
                                <h1><?=$properties->title?></h1>
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
                                <div class="project-list d-flex" data-aos="fade" data-aos-delay="100" data-aos-offset="0"><div class="icon-img"><img src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/icons/status.png" class="w-100"></div> Status: <?=$properties->status?></div>
                                <div class="project-list d-flex" data-aos="fade" data-aos-delay="200" data-aos-offset="0"><div class="icon-img"><img src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/icons/location.png" class="w-100"></div> Location: <?=$properties->location_name?>, <?=$properties->city_name?></div>
                                <div class="project-list d-flex" data-aos="fade" data-aos-delay="300" data-aos-offset="0"><div class="icon-img"><img src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/icons/price.png" class="w-100"></div> Price: <?=$properties->price?></div>
                                <div class="project-list d-flex" data-aos="fade" data-aos-delay="400" data-aos-offset="0"><div class="icon-img"><img src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/icons/possesion.png" class="w-100"></div> Possession: <?=$properties->possession?></div>
                                <div class="project-list d-flex" data-aos="fade" data-aos-delay="500" data-aos-offset="0"><div class="icon-img"><img src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/icons/typology.png" class="w-100"></div> Typology: <?=$properties->typology?></div>
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
                                    <img src="<?=$properties->overview_image?>" class="w-100">
                                </div>
                            </div>
                            <div class="col-md-7 Roboto-Medium">
                                <div class="max-550 mx-auto">
                                    <div class="project-inner-header" data-aos="fade" data-aos-delay="100"><?=$properties->title?></div>
                                    <h2 class="project-inner-description" data-aos="fade" data-aos-delay="200"><?=$properties->short_description?></h2>
                                    <ul class="project-inner-overview-list d-none">      
                                        <?php
                                        foreach ($amenities as $key => $value) {
                                            ?>                      
                                            <li data-aos="fade" data-aos-delay="300">
                                                <div class="grey-icon-bg">
                                                    <img src="<?=$value->icon?>" class="w-100 h-100">
                                                </div>
                                                <?=$value->title?>
                                            </li>
                                            <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="w-100 pt-md-3 project-inner-overview-slider divider-pagination">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <?php
                                        $imgtxtstr = $properties->overview_text_images;
                                        $imgtext = explode("<==>", $imgtxtstr);
                                        foreach ($imgtext as $key => $oit) {
                                            $it = explode("====", $oit);
                                            ?>
                                            <div class="swiper-slide p-0">
                                                <div class="overview-slider-container" data-aos="fade">
                                                    <div class="overview-slider-img" >
                                                        <img src="<?=isset($it[0]) ? $it[0] : ''?>" class="w-100">
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
                </div>

                <?php
                    $sequence_no = $sequence_no + 1;
                ?>

                <div id="amenities" class="project-inner-amenities-section no-overflow bigTitleAnimationSection">
                    <div class="container-fluid mainContainer">
                        <div class="double-bg-header">
                            <div class="double-main-heading" data-aos="fade"><?php echo $sequence_no > 9 ? $sequence_no : "0".$sequence_no; ?>  AMENITIES</div>
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

                <?php
                if ($properties->brochure!="" || $properties->floor_plan!="" || $properties->master_plan!="" || $properties->virtual_tour!="") {
                    $sequence_no = $sequence_no + 1;
                ?>
                <div id="resources" class="project-inner-resources-section no-overflow bigTitleAnimationSection">
                    <div class="container-fluid mainContainer">
                        <div class="double-bg-header">
                            <div class="double-main-heading" data-aos="fade"><?php echo $sequence_no > 9 ? $sequence_no : "0".$sequence_no; ?>  RESOURCES</div>
                            <div class="double-bg-heading">RESOURCES</div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-5 order-md-2" data-aos="fade"><img src="<?=$properties->resource_image?>" class="w-100"></div>
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
                                                            <img src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/icons/brochure.svg" class="w-100 h-100">
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
                                                            <img src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/amenities-01.png" class="w-100 h-100">
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
                                                            <img src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/amenities-01.png" class="w-100 h-100">
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
                                                            <img src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/icons/VitualTour.svg" class="w-100 h-100">
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
                    <?php
                    if($properties->rera!="" || $properties->map_image!=""){
                        $sequence_no = $sequence_no + 1;
                        ?>
                        <div id="locate" class="project-inner-location-section no-overflow bigTitleAnimationSection container-fluid mainContainer">
                            <div>
                                <div class="double-bg-header">
                                    <div class="double-main-heading" data-aos="fade"><?php echo $sequence_no > 9 ? $sequence_no : "0".$sequence_no; ?>  LOCATE</div>
                                    <div class="double-bg-heading">LOCATE</div>
                                </div>
                            </div>
                            <?php
                            if ($properties->map_image!="") {
                                ?>
                                <div class="map_image_wrap" data-aos="fade">
                                    <a target="_blank" href="<?=$properties->map_url?>"><img src="<?=$properties->map_image?>" class="w-100"></a>
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
                   <div id="construction_update" class="project-inner-construction-update-section no-overflow bigTitleAnimationSection">
                    <div class="container-fluid mainContainer">
                        <div class="double-bg-header">
                            <div class="double-main-heading" data-aos="fade"><span id="construction_update_no"></span>  CONSTRUCTION UPDATE</div>
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
                </div>

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

                <div id="project_you_may_like" class="project-inner-project-you-may-like-section no-overflow bigTitleAnimationSection">
                    <div class="container-fluid mainContainer">
                        <div class="double-bg-header">
                            <div class="double-main-heading" data-aos="fade"><span id="project_you_may_like_no"></span> PROJECTS YOU MAY ALSO LIKE</div>
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
                </div>
            </div>                
        </div> 

        <?php include('footer.php'); ?>
    </div>
    <?php include('footer-js.php'); ?>
    <script type="text/javascript">
        var i =1;
        $( window ).scroll(function() {
            if (i==1) {
                var id = "<?=$properties->id?>";
                var propertyid = {"id":id};

                var sequence_no = '<?php echo $sequence_no; ?>';

                $.ajax({
                  url:'<?=base_url()?>website/getDataOnScroll',
                  type: 'POST',
                  data: JSON.stringify(propertyid),
                  contentType: 'application/json; charset=utf-8',
                  datatype: 'JSON',
                  async: false,
                  success: function(data)
                  {
                    var value = JSON.parse(data);
                    var amenities = "";

                    if (value.amenities.length==0) {
                        //$("#amenities").hide();
                    }
                    for (var j =0; j<value.amenities.length;j++) {
                        amenities+='<div class="swiper-slide"> <div class="amenitiess-slider-container d-md-flex align-items-center" data-aos="fade"> <div class="amenities-slider-img grey-icon-bg"> <img src="'+value.amenities[j].icon+'" class="w-100 h-100"> </div> <div class="amenitiess-slider-text"> '+value.amenities[j].title+' </div> </div> </div>';
                    }
                    $(".amenities-container").html(amenities);

                    var  construction_details = "";
                    if (value.construction_details.length==0) {
                        $("#construction_update").hide();
                    }else{
                        sequence_no = parseInt(sequence_no) + 1;
                        $("#construction_update_no").html("0"+sequence_no);
                    }
                    for (var k =0; k<value.construction_details.length;k++) {
                        construction_details += '<div class="swiper-slide"> <div class="contruction-update-slider-container row align-items-center"> <div data-aos="fade" class="contruction-update-slider-img col-md-8"> <img src="'+value.construction_details[k].image+'" class="w-100"> </div> <div class="contruction-update-slider-text col-md-4"> <div data-aos="fade" data-aos-delay="100" class="contruction-update-project-name">'+value.construction_details[k].title+'</div> <div data-aos="fade" data-aos-delay="200" class="contruction-update-project-description">'+value.construction_details[k].text+'</div> </div> </div> </div>';
                    }
                    $(".construction-update").html(construction_details);

                    var  property_details = "";
                    if (value.property_details.length==0) {
                        $("#project_you_may_like").hide();
                    }else{
                        sequence_no = parseInt(sequence_no) + 1;
                        $("#project_you_may_like_no").html("0"+sequence_no);
                    }
                    for (var l =0; l<value.property_details.length;l++) {
                        property_details += '<div class="swiper-slide"> <div class="you-may-like-slider-container" data-aos="fade"> <div class="you-may-like-slider-img"> <img src="'+value.property_details[l].thumbnail_image+'" class="w-100"> </div> <a href="'+value.property_details[l].rel_link+'"><div class="you-may-like-slider-heading"> '+value.property_details[l].title+' </div> <div class="you-may-like-slider-description d-flex justify-content-between"> <div class="you-may-like-slider-location">'+value.property_details[l].location_name+', '+value.property_details[l].city_name+'</div> <div class="you-may-like-slider-size">'+value.property_details[l].typology+'</div> </div></a> </div> </div>';
                    }
                    $(".related-project").html(property_details);
                    AOS.init();
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
            renderFraction: function (currentClass, totalClass) {
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
</body>
</html>
