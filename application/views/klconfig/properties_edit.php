
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
  <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
  <meta name="author" content="ThemeSelect">
  <title>Properties | Admin</title>
  <link rel="apple-touch-icon" href="<?=base_url()?>assets/images/favicon/apple-touch-icon-152x152.png">
  <link rel="shortcut icon" type="image/x-icon" href="<?=base_url()?>assets/images/favicon/favicon-32x32.png">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- BEGIN: VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/vendors/vendors.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/vendors/select2/select2.min.css" type="text/css">
  <link rel="stylesheet" href="<?=base_url()?>assets/vendors/select2/select2-materialize.css" type="text/css">

  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/vendors/data-tables/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/vendors/data-tables/css/dataTables.checkboxes.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/vendors/materialize-stepper/materialize-stepper.min.css">

  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/pages/form-select2.min.css">
  <!-- END: VENDOR CSS-->
  <!-- BEGIN: Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/themes/vertical-modern-menu-template/materialize.min.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/themes/vertical-modern-menu-template/style.min.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/pages/form-select2.min.css">
  <!-- END: Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/pages/form-wizard.min.css">
  <!-- BEGIN: Custom CSS-->
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/custom/custom.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
  <style type="text/css">
    /*.step-pointer{
      pointer-events: none;
      }*/
      .dropdown-content{max-height: 300px;}
    </style>
    <!-- END: Custom CSS-->
  </head>
  <!-- END: Head-->
  <body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 2-columns  app-page " data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">

    <?php include 'header.php' ?>
    <!-- BEGIN: Page Main-->
    <div id="main">
      <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
        <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
          <!-- Search for small screen-->
          <div class="container">
            <div class="row">
              <div class="col s10 m6 l6">
                <h5 class="breadcrumbs-title mt-0 mb-0"><span>Edit Properties</span></h5>
                <ol class="breadcrumbs mb-0">
                  <li class="breadcrumb-item"><a href="<?=base_url()?>">Home</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">Edit Properties</a>
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="col s12">
          <div class="container">
            <!-- invoice list -->
            <section class="invoice-list-wrapper section">
              <!-- create invoice button-->
              <!-- Options and filter dropdown button-->

              <div class="row">
                <div class="col s12">
                  <div class="card">
                    <div class="card-content">
                      <div class="card-header">
                        <!-- <h4 class="card-title">Edit Property</h4> -->
                        <?php
                        $ci = & get_instance();
                        $ci->load->model('common_m');
                        $title = $ci->common_m->seoUrl($properties->title);
                        ?>
                        <h4 class="card-title"><a href="<?=base_url()?>projects/<?=$properties->property_type?>/<?=$title?>/<?=$properties->id?>" target="_blank"><?=$properties->title?></a></h4>
                      </div>
                      <input type="hidden" class="insert_id" id="insert_id" name="insert_id" value="<?=$properties->id?>">
                      <ul class="stepper linear" id="linearStepper"> <!--id=linearStepper class=linear-->
                        <li class="step active step-1">
                          <div class="step-title waves-effect">Basic Details</div>
                          <form id="basic_details" name="basic_details">
                            <div class="step-content">
                              <div class="row">
                               <div class="col s12" style="padding-left: unset;padding-right: unset;">
                                <div class="input-field col s12 m6">
                                  <select id="property_type" name="property_type" type="text" class="validate">
                                    <option value="residential"
                                    <?php if ($properties->property_type=='residential') { echo 'selected'; }?> >Residential</option>
                                    <option value="commercial" <?php if ($properties->property_type=='commercial') { echo 'selected'; }?>>Commercial</option>
                                    <?php /*<option value="signature" <?php if ($properties->property_type=='signature') { echo 'selected'; }?>>Signature</option>*/ ?>
                                  </select>
                                </div>
                                <div class="input-field col s12 m6">
                                  <div><label>Property type</label></div>
                                  <div class="input-field col s4" style="margin: 0px;">
                                    <label>
                                      <?php
                                      $chk_top = "";
                                      if ($properties->top_picks==1) {
                                        $chk_top = "checked";
                                      }
                                      ?>
                                      <input type="checkbox" id="top_picks" <?=$chk_top?> name="top_picks" class="filled-in"/>
                                      <span>TOP PICKS</span>
                                    </label>
                                  </div>
                                  <div class="input-field col s4" style="margin: 0px;">
                                    <label>
                                      <?php
                                      $chk_on = "";
                                      if ($properties->on_going==1) {
                                        $chk_on = "checked";
                                      }
                                      ?>
                                      <input type="checkbox" id="on_going" <?=$chk_on?> name="on_going" class="filled-in"/>
                                      <span>ON GOING</span>
                                    </label>
                                  </div>     
                                  <div class="input-field col s4" style="margin: 0px;">
                                    <label>
                                      <?php
                                      $chk_cmp = "";
                                      if ($properties->completed==1) {
                                        $chk_cmp = "checked";
                                      }
                                      ?>
                                      <input type="checkbox" id="completed" <?=$chk_cmp?> name="completed" class="filled-in"/>
                                      <span>Completed</span>
                                    </label>
                                  </div>                                  
                                </div>
                              </div>
                              <div class="input-field col m6 s12">
                                <label for="title">Property Title:</label>
                                <input type="text" id="title" name="title" class="validate" value="<?=$properties->title?>">
                                <span class="error-title"></span>
                              </div>
                              <div class="input-field col m6 s12">
                                <label for="slug">Slug:</label>
                                <input type="text" id="slug" name="slug" class="validate" value="<?=$properties->slug?>">
                                <span class="error-slug"></span>
                              </div>
                              <div class="input-field col s12">
                                <label for="status">Status:</label>
                                <input type="text" id="status" class="validate" name="status" value="<?=$properties->status?>">
                                <span class="error-status"></span>
                              </div>
                            </div>
                            <div class="row">
                              <div class="file-field input-field col s11">
                                <div class="btn">
                                  <span>Choose</span>
                                  <input type="file" id="property_logo" name="property_logo" onchange="imagesPreview(this,12)">
                                </div>
                                <div class="file-path-wrapper">
                                  <input class="validate file-path-basic" type="text" id="property_logo_name" name="property_logo_name" placeholder="Property Logo">
                                  <span class="error-property_logo_name"></span>
                                </div>

                              </div>
                              <?php if(isset($properties->property_logo) && !empty($properties->property_logo)): ?>
                              <div class="input-field col m1 s1"> <button class="waves-effect waves-light btn gradient-45deg-red-pink z-depth-4 mr-1 mb-2" type="button" onclick="removePropertyLogo()">X</button> </div>
                              <?php endif; ?>
                              <div class="property_logo_box col s12">
                                <?php
                                $logoimgarr = explode(",", $properties->property_logo);
                                foreach ($logoimgarr as $key => $logoimage) {                                      
                                  ?>
                                  <span class="img-logo-<?=$key?>"><img src="<?=$logoimage?>" style="height:150px;margin-right:3px;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.12), 0 1px 5px 0 rgba(0,0,0,.2);margin:5px;" class="img-thumbnail property_logos_src"></span>
                                  <?php
                                }
                                ?>
                              </div>   
                            </div>
                            <div class="row">
                              <div class="input-field col m3 s12">
                                <select id="city" name="city" type="text" required onchange ="getLocations(this);" class="validate error">
                                  <option value="" disabled selected>Select City</option>
                                  <?php

                                  foreach ($cities as $key => $value) {
                                    $selected_city = "";
                                    if ($value->id==$properties->city) {
                                      $selected_city = "selected";
                                    }
                                    echo '<option value="'.$value->id.'" '.$selected_city.'>'.$value->title.'</option>';
                                  }
                                  ?>
                                </select>
                                <label>Select City</label>
                              </div>
                              <div class="input-field col m3 s12 location-data">
                                <select id="location" name="location" required type="text" class="validate error">
                                  <option value="" disabled selected>Select Location</option>
                                  <?php

                                  foreach ($locations as $key => $value) {
                                    $selected_location = "";
                                    if ($value->id==$properties->location) {
                                      $selected_location = "selected";
                                    }
                                    echo '<option value="'.$value->id.'" '.$selected_location.'>'.$value->location.'</option>';
                                  }
                                  ?>
                                </select>
                                <label>Select Location</label>
                              </div>
                              <div class="input-field col m6 s12">
                                <label for="price">Price:</label>
                                <input type="text" class="validate" name="price" id="price" value="<?=$properties->price?>">
                                <span class="error-price"></span>
                              </div>
                            </div>
                            <div class="row">
                              <div class="input-field col m6 s12">
                                <label for="possession">Possession:</label>
                                <input type="text" class="validate" name="possession" id="possession" value="<?=$properties->possession?>">
                                <span class="error-possession"></span>
                              </div>
                              <div class="input-field col m6 s12">
                                <label for="typology">Typology:</label>
                                <input type="text" class="validate" name="typology" id="typology" value="<?=$properties->typology?>">
                                <span class="error-typology"></span>
                              </div>
                              <div class="input-field col s12">
                                <select data-placeholder="Select Typology" class="select2 select2-footer-typology browser-default"
                                id="footer_typology" name="footer_typology" multiple="multiple">
                                <?php 
                                $typoArr = explode(",",$properties->typology_for_footer);
                                  // print_r($amarray);
                                foreach ($typologies as $key => $valueTypo) { 
                                  $selected = "";
                                  if (in_array($valueTypo->name, $typoArr)) {
                                    $selected = "selected";
                                  }                                   
                                  echo '<option value="'.$valueTypo->name.'" '.$selected.'>'.$valueTypo->name.'</option>';
                                }
                                ?>
                                </select>
                                <small>(Typology for dynamic footer configuration)</small>
                                <span class="error-footer-typology"></span>
                              </div>
                            </div>
                            <div class="row">
                              <div class="file-field input-field col s12">
                                <div class="btn">
                                  <span>Choose</span>
                                  <input type="file" id="thumbnail_images" name="thumbnail_images" onchange="imagesPreview(this,11)">
                                </div>
                                <div class="file-path-wrapper">
                                  <input class="validate file-path-basic" type="text" id="thumbnail_image_name" name="thumbnail_image_name" placeholder="Thumbnail Image (600 x 370)">
                                  <span class="error-thumbnail_image_name"></span>
                                </div>

                              </div>
                              <div class="thumbnail_images_box col s12">
                                <?php
                                $timgarr = explode(",", $properties->thumbnail_image);
                                foreach ($timgarr as $key => $timage) {                                      
                                  ?>
                                  <span class="img-te-<?=$key?>"><img src="<?=$timage?>" style="height:150px;margin-right:3px;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.12), 0 1px 5px 0 rgba(0,0,0,.2);margin:5px;" class="img-thumbnail thumbnail_images_src"></span>
                                  <?php
                                }
                                ?>
                              </div>   
                            </div>
                            <div class="input-field col s12 m12">
                              <select id="banner_type" onchange="changeBannerType(this)" required name="banner_type" type="text" class="validate error">
                                <option <?php if ($properties->banner_type=='image') { echo 'selected'; }?> value="image">Image</option>
                                <option <?php if ($properties->banner_type=='video') { echo 'selected'; }?> value="video">Video</option>
                              </select>
                              <label>Select Banner type</label>
                            </div>
                            <div class="row banner-div">
                              <?php
                              if ($properties->banner_type=='image') {
                                ?>
                                 <div class="col s12">
                                  <label>Select Banner (1366 x 557)</label>
                                </div>
                                <div class="file-field input-field col s12">
                                  <div class="btn">
                                    <span>Choose</span>
                                    <input type="file" id="featured_images" name="featured_images" onchange="imagesPreview(this,1)">
                                  </div>
                                  <div class="file-path-wrapper">
                                    <input class="validate file-path-basic" type="text" id="image_name" name="image_name" placeholder="Featured Image">
                                    <span class="error-image_name"></span>
                                  </div>

                                </div>
                                <div class="featured_images_box col s12">
                                  <?php
                                  $fimgarr = explode(",", $properties->featured_images);
                                  foreach ($fimgarr as $key => $fimage) {                                      
                                    ?>
                                    <span class="img-e-<?=$key?>"><img src="<?=$fimage?>" style="height:150px;margin-right:3px;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.12), 0 1px 5px 0 rgba(0,0,0,.2);margin:5px;" class="img-thumbnail featured_images_src"></span>
                                    <?php
                                  }
                                  ?>
                                </div>  
                                <div class="col s12">
                                  <label>Select Mobile Banner  (768 x 922)</label>
                                </div>
                                <div class="file-field input-field col s12">
                                  <div class="btn">
                                    <span>Choose</span>
                                    <input type="file" id="featured_images_mobile" name="featured_images_mobile" onchange="imagesPreview(this,8)">
                                  </div>
                                  <div class="file-path-wrapper">
                                    <input class="validate file-path file-path-basic" type="text" id="banner_url_mobile" name="banner_url_mobile" placeholder="Mobile Banner Image">
                                    <span class="error-image_name"></span>
                                  </div>
                                </div>
                                <div class="mobile_images_box col s12">
                                     <span class="img-e-<?=$key?>"><img src="<?=$properties->featured_images_mobile?>" style="height:150px;margin-right:3px;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.12), 0 1px 5px 0 rgba(0,0,0,.2);margin:5px;" class="img-thumbnail mobile_images_src"></span>
                                </div>  
                                <?php
                              }
                              else
                              { 
                                $video1 = "";
                                $video2 = "";
                                if(strpos($properties->featured_video, 'amazonaws.com') !== false || strpos($properties->featured_video, 'cloudfront.net') !== false){
                                  $video1 = $properties->featured_video;
                                }
                                else
                                {
                                  $video2 = $properties->featured_video;
                                }


                                $video3 = "";
                                $video4 = "";
                                if(strpos($properties->featured_mobile_video, 'amazonaws.com') !== false || strpos($properties->featured_mobile_video, 'cloudfront.net') !== false){
                                  $video3 = $properties->featured_mobile_video;
                                }
                                else
                                {
                                  $video4 = $properties->featured_mobile_video;
                                }
                                ?>
                                <div class="file-field input-field col s12">
                                  <label for="banner_url">Upload Desktop video</label><br>
                                </div>
                                <div class="file-field input-field col s12">
                                 <div class="btn"> <span>Choose</span> <input type="file" onchange = "uploadVideo()" id="featured_video" name="featured_video"> </div>
                                 <div class="file-path-wrapper"> <input class="validate file-path file-path-basic" type="text" id="video_name" name="video_name" placeholder="Upload Banner Video"> <span class="error-video_name"></span> </div>
                               </div>
                               <?php
                               if ($video1!="") {
                                echo '<div class="video-url-div" for="video" style="text-align: right;float: right;">'.trim($video1).'&nbsp;&nbsp;<span style="font-size:24px;color:red;cursor:pointer;" onclick="removeVideo()">x</span><br><br></div>';
                               }
                               ?>
                               <!-- <div class="file-field input-field col s12"> -->
                                <!-- </div> -->
                               <div class="col m12" style="text-align: center;font-weight: bold;">--OR--</div>
                               <div class="input-field col m12 s12"> <label for="banner_url">Desktop Video url</label> <input type="text" class="validate" name="banner_url" value="<?=trim($video2)?>" id="banner_url"><input type="hidden" id="video_data" name="video_data" value="<?=trim($video1)?>"> </div>
                                

                                <div class="file-field input-field col s12">
                                  <label for="banner_url">Upload mobile video</label><br>
                                </div>
                                <div class="file-field input-field col s12">
                                 <div class="btn"> <span>Choose</span> <input type="file" onchange = "uploadVideoMobile()" id="mobile_featured_video" name="mobile_featured_video"> </div>
                                 <div class="file-path-wrapper"> <input class="validate file-path file-path-basic" type="text" id="mobile_video_name" name="mobile_video_name" placeholder="Upload mobile Banner Video"> <span class="error-mobile_video_name1"></span> </div>
                               </div>
                               <?php
                               if ($video3!="") {
                                echo '<div class="video-url-div1" for="video" style="text-align: right;float: right;">'.trim($video3).'&nbsp;&nbsp;<span style="font-size:24px;color:red;cursor:pointer;" onclick="removeVideo1()">x</span><br><br></div>';
                               }
                               ?>
                               <!-- <div class="file-field input-field col s12"> -->
                                <!-- </div> -->
                               <div class="col m12" style="text-align: center;font-weight: bold;">--OR--</div>
                               <div class="input-field col m12 s12"> <label for="mobile_video_url">Mobile Video url</label> <input type="text" class="validate" name="mobile_video_url" value="<?=trim($video4)?>" id="mobile_video_url"><input type="hidden" id="mobile_video_data" name="mobile_video_data" value="<?=trim($video3)?>"> </div>
                                <?php
                              }
                              ?>

                                <div class="input-field col s12 m6">
                                    <div><label>Is Popup Require on Initially ?  </label></div>
                                    <div class="input-field col s6" style="margin: 0px;">
                                        <select id="is_pop_reload" name="is_pop_reload" type="text" class="validate">
                                            <option value="" disabled selected>Select Option</option>
                                            <option value="1"  <?php if ($properties->is_pop_reload == 1){echo "selected";}?>>Yes</option>
                                            <option value="0" <?php if ($properties->is_pop_reload == 0){echo "selected";}?>>No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="input-field col s12 m6">
                                    <div><label>Do you want to hide Hamburger menu bar ?</label></div>
                                    <div class="input-field col s6" style="margin: 0px;">
                                        <select id="is_menu_bar" name="is_menu_bar" type="text" class="validate">
                                            <option value="" disabled selected>Select Option</option>
                                            <option value="1" <?php if ($properties->is_menu_bar == 1){echo "selected";}?>>Yes</option>
                                            <option value="0" <?php if ($properties->is_menu_bar == 0){echo "selected";}?>>No</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="input-field col s12 m6">
                                    <div><label>Featured images Alt Tag </label></div>
                                    <div class="input-field col s6" style="margin: 0px;">
                                    <input type="text" id="featured_img_alt" name="featured_img_alt" class="validate" value="<?=$properties->featured_img_alt?>">
                                    <span class="error-featuredimgalt"></span>   
                                    </div>
                                </div>

                                <div class="input-field col s12 m6">
                                    <div><label>Featured Mobile Alt Tag </label></div>
                                    <div class="input-field col s6" style="margin: 0px;">
                                    <input type="text" id="featured_ial_mobile" name="featured_ial_mobile" class="validate" value="<?=$properties->featured_ial_mobile?>">
                                    <span class="error-mobalt"></span>   
                                    </div>
                                </div>

                                <div class="input-field col s12 m6">
                                    <div><label>Thumbnail Alt Tag </label></div>
                                    <div class="input-field col s6" style="margin: 0px;">
                                    <input type="text" id="thumbnail_imagealt" name="thumbnail_imagealt" class="validate" value="<?=$properties->thumbnail_imagealt?>">
                                    <span class="error-thumbnail_imagealt"></span>   
                                    </div>
                                </div>

                                <div class="input-field col s12 m6">
                                    <div><label>Map Alt Tag </label></div>
                                    <div class="input-field col s6" style="margin: 0px;">
                                    <input type="text" id="map_imagealt" name="map_imagealt" class="validate" value="<?=$properties->map_imagealt?>">
                                    <span class="error-mopalt"></span>   
                                    </div>
                                </div>

                                

                                <div class="input-field col s12 m6">
                                    <div><label>Cverview Alt Tag </label></div>
                                    <div class="input-field col s6" style="margin: 0px;">
                                    <input type="text" id="overview_imagealt" name="overview_imagealt" class="validate" value="<?=$properties->overview_imagealt?>">
                                    <span class="error-overviewalt"></span>   
                                    </div>
                                </div>

                                <div class="input-field col s12 m6">
                                    <div><label>Resource Alt Tag </label></div>
                                    <div class="input-field col s6" style="margin: 0px;">
                                    <input type="text" id="resource_imagealt" name="resource_imagealt" class="validate" value="<?=$properties->resource_imagealt?>">
                                    <span class="error-resourcealt"></span>   
                                    </div>
                                </div>



                            </div>
                            <div class="error-banner"></div>
                            <div class="step-actions">
                              <div class="row">
                                <div class="col m4 s12 mb-3" style="visibility: hidden;">
                                  <button class="red btn btn-reset" type="reset">
                                    <i class="material-icons left">clear</i>Reset
                                  </button>
                                </div>
                                <div class="col m4 s12 mb-3">
                                  <button class="btn btn-light previous-step" disabled>
                                    <i class="material-icons left">arrow_back</i>
                                    Prev
                                  </button>
                                </div>
                                <div class="col m4 s12 mb-3">
                                  <button class="waves-effect waves dark btn btn-primary" type="submit">
                                    Next
                                    <i class="material-icons right">arrow_forward</i>
                                  </button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </form>
                      </li>
                      <li class="step step-2 step-pointer">
                        <div class="step-title waves-effect">Overview</div>
                        <div class="step-content">
                          <form id="overview_details" name="overview_details">
                            <div class="row">
                              <div class="input-field col s12">
                                <label for="featured_description">Featured Description: <small>(Description for projecst listing and projects under homepage banner)</small></label>
                                <input type="text" class="validate" id="featured_description" name="featured_description" value="<?=$properties->featured_description?>">
                                <span class="error-featured_description"></span>
                              </div>
                            </div>
                            <div class="row">
                              <div class="input-field col s12">
                                <label for="short_description">Short Description:</label>
                                <input type="text" class="validate" id="short_description" name="short_description" value="<?=$properties->short_description?>">
                                <span class="error-short_description"></span>
                              </div>
                            </div>
                            
                        <div class="row">
                          <div class="file-field input-field col s12">
                            <div class="btn">
                              <span>Choose (500 x 644)</span>
                              <input type="file" id="overview_images" name="overview_images" onchange="imagesPreview(this,2)">
                            </div>
                            <div class="file-path-wrapper">
                              <?php
                              $oviarr = explode("/",$properties->overview_image);
                              $imgnameov = array_pop($oviarr);
                              ?>
                              <input class="validate file-path file-path-overview" type="text" id="image_overview" name="image_overview" placeholder="Overview image (500 x 644)" value="<?=$imgnameov?>">
                              <span class="error-image_overview"></span>
                            </div>
                          </div>
                          <div class="overview_images_box col s12">
                            <span class="img-eo-0"><img src="<?=$properties->overview_image?>" style="height:150px;margin-right:3px;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.12), 0 1px 5px 0 rgba(0,0,0,.2);margin:5px;" class="img-thumbnail overview_images_src"></span>
                          </div>   
                        </div>
                        <h4 class="card-title">Add More images</h4>
                        <div class="overview_more_images_section">
                          <?php
                          $overview_text_images = $properties->overview_text_images;
                          $oiarr = explode("<==>", $overview_text_images);
                          $over_data = $properties->over_alt;
                          $over_datas = explode(',', $over_data);
                          if ($overview_text_images!="") {
                           foreach ($oiarr as $key => $valueoi) {
                            $itarr = explode("====",$valueoi);
                            $imgmere = explode("/", $itarr[0]);
                            $imgname = array_pop($imgmere);
                            ?>
                            <div class="row overview_images_more_inner_<?=$key?>">
                              <div class="col m5 s11">
                                <div class="file-field input-field">
                                  <div class="btn">
                                    <span>Choose(500 x 644)</span>
                                    <input type="file" id="overview_images_more_<?=$key?>" name="overview_images_more_<?=$key?>" onchange="imagesOverview(this,<?=$key?>)">
                                  </div>
                                  <div class="file-path-wrapper">
                                    <input class="validate file-path file-path-overview" type="text" id="image_overview_more_<?=$key?>" name="image_overview_more_<?=$key?>" placeholder="Overview image" value="<?=$imgname?>">
                                    <span class="error-image_overview_more_<?=$key?>"></span>
                                  </div>
                                </div>
                                <div class="overview_images_box_more_<?=$key?> overview_images_box_more">
                                 <span class="img-e-<?=$key?>"><img src="<?=$itarr[0]?>" style="height:150px;margin-right:3px;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.12), 0 1px 5px 0 rgba(0,0,0,.2);margin:5px;" class="img-thumbnail overview_more_images_src overview_more_images_src_'+type+'"></span>
                               </div> 
                             </div>  
                             <div class="input-field col m6 s11">
                              <label for="short_description">Text:</label>
                              <textarea id="overview_image_more_text_<?=$key?>" name="overview_image_more_text_<?=$key?>" data-id="0" class="materialize-textarea overview_text_more" style="height: 101px;"><?=isset($itarr[1]) ? $itarr[1] : '';?></textarea>
                            </div>

                            <div class="input-field col m6 s11">
                                <label for="over_alt">ALt Tag:</label>
                                <input type="text" id="over_alt" name="over_alt" value="<?=$over_datas[$key]?>"  value data-id="0" class="materialize-text over_alt" style="height: 101px;">
                              </div>
                            <?php
                            if ($key>0) {
                              ?>
                              <div class="input-field col m1 s1"> <button class="waves-effect waves-light btn gradient-45deg-red-pink z-depth-4 mr-1 mb-2" type="button" onclick="removeOverviewSection(<?=$key?>)">X</button> </div>
                              <?php
                            }
                            ?>
                          </div>
                          <?php
                        }
                      }
                      else{
                        ?>
                        <div class="row overview_images_more_inner_0">
                          <div class="col m5 s11">
                            <div class="file-field input-field">
                              <div class="btn">
                                <span>Choose(500 x 644)</span>
                                <input type="file" id="overview_images_more_0" name="overview_images_more_0" onchange="imagesOverview(this,0)">
                              </div>
                              <div class="file-path-wrapper">
                                <input class="validate file-path file-path-overview" type="text" id="image_overview_more_0" name="image_overview_more_0" placeholder="Overview image">
                                <span class="error-image_overview_more_0"></span>
                              </div>
                            </div>
                            <div class="overview_images_box_more_0 overview_images_box_more">

                            </div> 
                          </div>  
                          <div class="input-field col m6 s11">
                            <label for="short_description">Text:</label>
                            <textarea id="overview_image_more_text_0" name="overview_image_more_text_0" data-id="0" class="materialize-textarea overview_text_more" style="height: 101px;"></textarea>
                          </div>
                        </div>
                        <?php
                      }
                      ?>
                    </div>
                    <div class="row">
                      <div class="col m5 s11">
                        <span class="error-image_overview_more"></span>
                      </div>
                      <div class="col m6 s11">
                        <span class="error-image_text_overview_more"></span>
                      </div>
                    </div>
                    <div class="row overview_images_more_0">
                      <div class="col s12" style="text-align: right;">
                        <a class="waves-effect waves-light  btn gradient-45deg-light-blue-cyan box-shadow-none border-round mr-1 mb-1" onclick="addMoreOverviewImages()">+ Add more</a>
                      </div>
                    </div>
                    <div class="step-actions">
                      <div class="row">
                        <div class="col m4 s12 mb-3">
                          <button class="red btn btn-reset" type="reset" style="visibility: hidden;">
                            <i class="material-icons left">clear</i>Reset
                          </button>
                        </div>
                        <div class="col m4 s12 mb-3">
                          <button class="btn btn-light previous-step">
                            <i class="material-icons left">arrow_back</i>
                            Prev
                          </button>
                        </div>
                        <div class="col m4 s12 mb-3">
                          <button class="waves-effect waves dark btn btn-primary" type="submit">
                            Next
                            <i class="material-icons right">arrow_forward</i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </li>
              <li class="step step-3 step-pointer">
                <div class="step-title waves-effect">Amenities</div>
                <div class="step-content">
                  <form id="amenity_details" name="amenity_details">
                    <div class="row">
                     <div class="col s12">
                      <div class="input-field">
                        <select data-placeholder="Select amenities" class="select2 select2-eminity-overview browser-default"
                        id="amenity" name="amenity" multiple="multiple">
                        <?php 
                        $amenities_ex = explode(",",$properties->amenities); 
                        foreach ($amenities as $key => $value) {
                          $selected_an = "";
                          if (in_array($value->id, $amenities_ex)) {
                            $selected_an = "selected";
                          }
                          echo '<option value="'.$value->id.'" '.$selected_an.'>'.$value->title.'</option>';
                        }
                        ?>
                      </select>
                      <span class="error-amenity"></span>
                    </div>
                  </div>
                </div>
                <div class="step-actions">
                  <div class="row">
                    <div class="col m4 s12 mb-3">
                      <button class="red btn btn-reset" type="reset" style="visibility: hidden;">
                        <i class="material-icons left">clear</i>Reset
                      </button>
                    </div>
                    <div class="col m4 s12 mb-3">
                      <button class="btn btn-light previous-step">
                        <i class="material-icons left">arrow_back</i>
                        Prev
                      </button>
                    </div>
                    <div class="col m4 s12 mb-3">
                      <button class="waves-effect waves dark btn btn-primary" type="submit">
                        Next
                        <i class="material-icons right">arrow_forward</i>
                      </button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </li>
          <li class="step step-4 step-pointer">
            <div class="step-title waves-effect">Resources</div>
            <div class="step-content">
              <form id="resources_details" name="resources_details">
                <?php
                $brochurearr = explode("/", $properties->brochure);
                $brochur_name = array_pop($brochurearr);
                $floor_planarr = explode("/", $properties->floor_plan);
                $floor_plan_name = array_pop($floor_planarr);
                $master_planarr = explode("/", $properties->master_plan);
                $master_plan_name = array_pop($master_planarr);
                ?>
                <input type="hidden" class="insert_id" id="insert_id" name="insert_id" value="<?=$properties->id?>">
                <div class="row">
                 <div class="file-field input-field col s10">
                  <div class="btn">
                    <span>Choose (Brochure)</span>
                    <input type="file" id="brochure" name="brochure" multiple onchange="imagesPreview(this,1)">
                  </div>
                  <div class="file-path-wrapper">
                    <input class="validate file-path file-path-basic" type="text" id="file_brochure" name="file_brochure" placeholder="Brochure" value="<?=$brochur_name?>">
                    <span class="error-brochure"></span>
                  </div>
                </div>
                <?php if(!empty($properties->brochure)): ?>
                <div class="input-field col s1"><button class="waves-effect waves-light btn gradient-45deg-red-pink z-depth-4 mr-1 mb-2" type="button" onclick="removeResource(this,'brochure',<?=$properties->id?>)">X</button></div>
                <?php endif; ?>
                <div class="file-field input-field col s10">
                  <div class="btn">
                    <span>Choose (Floor Plan)</span>
                    <input type="file" id="floor_plan" name="floor_plan" multiple onchange="imagesPreview(this,1)">
                  </div>
                  <div class="file-path-wrapper">
                    <input class="validate file-path file-path-basic" type="text" id="file_floor_plan" name="file_floor_plan" placeholder="Floor Plan" value="<?=$floor_plan_name?>">
                    <span class="error-floor_plan"></span>
                  </div>
                </div>
                <?php if(!empty($properties->floor_plan)): ?>
                <div class="input-field col s1"><button class="waves-effect waves-light btn gradient-45deg-red-pink z-depth-4 mr-1 mb-2" type="button" onclick="removeResource(this,'floor_plan',<?=$properties->id?>)">X</button></div>
                <?php endif; ?>
                <div class="file-field input-field col s10">
                  <div class="btn">
                    <span>Choose (Master Plan)</span>
                    <input type="file" id="master_plan" name="master_plan" multiple onchange="imagesPreview(this,1)">
                  </div>
                  <div class="file-path-wrapper">
                    <input class="validate file-path file-path-basic" type="text" id="file_master_plan" name="file_master_plan" placeholder="Master Plan" value="<?=$master_plan_name?>">
                    <span class="error-master_plan"></span>
                  </div>
                </div>
                <?php if(!empty($properties->master_plan)): ?>
                <div class="input-field col s1"><button class="waves-effect waves-light btn gradient-45deg-red-pink z-depth-4 mr-1 mb-2" type="button" onclick="removeResource(this,'master_plan',<?=$properties->id?>)">X</button></div>
                <?php endif; ?>
                <div class="input-field col s10">
                  <span for="virtual_tour">Virtual Tour</span>
                  <input type="text" class="validate" name="virtual_tour" id="virtual_tour" value="<?=$properties->virtual_tour?>">
                  <span class="error-virtual_tour"></span>
                </div>
              </div>
              <div class="row">
                      <div class="file-field input-field col s12">
                        <div class="btn">
                          <span>Choose</span>
                          <input type="file" id="resource_images" name="resource_images" onchange="imagesPreview(this,15)">
                        </div>
                        <div class="file-path-wrapper">
                          <input class="validate file-path-basic" type="text" id="resource_image_name" name="resource_image_name" placeholder="Resource Image">
                          <span class="error-resource_image_name"></span>
                        </div>

                      </div>
                      <div class="resource_images_box col s12">
                        <?php
                          if ($properties->resource_image!="") {
                              echo '<span class=""><img src="'.$properties->resource_image.'" style="height:150px;margin-right:3px;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.12), 0 1px 5px 0 rgba(0,0,0,.2);margin:5px;" class="img-thumbnail resource_images_src"></span>';
                          }
                        ?>
                      </div>   
                    </div>
              <div class="step-actions">
                <div class="row">
                  <div class="col m4 s12 mb-3">
                    <button class="red btn btn-reset" type="reset" style="visibility: hidden;">
                      <i class="material-icons left">clear</i>Reset
                    </button>
                  </div>
                  <div class="col m4 s12 mb-3">
                    <button class="btn btn-light previous-step">
                      <i class="material-icons left">arrow_back</i>
                      Prev
                    </button>
                  </div>
                  <div class="col m4 s12 mb-3">
                    <button class="waves-effect waves dark btn btn-primary" type="submit">
                      Next
                      <i class="material-icons right">arrow_forward</i>
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </li>
        <li class="step step-5 step-pointer">
          <div class="step-title waves-effect">Locate</div>
          <div class="step-content">
            <form id="map_details" name="map_details">
              <input type="hidden" class="insert_id" id="insert_id" name="insert_id" value="<?=$properties->id?>">
              <div class="row">
                <div class="input-field col m12 s12">
                  <label for="rera">Kalpataru Magnus RERA</label>
                  <input type="text" class="validate" name="rera" id="rera" value="<?=$properties->rera?>">
                  <span class="error-rera"></span>
                </div> 
                <div class="input-field col m12 s12">
                  <label for="map_url">Map URL</label>
                  <input type="text" class="validate" name="map_url" id="map_url" value="<?=$properties->map_url?>">
                  <span class="error-map_url"></span>
                </div> 
                <div class="file-field input-field col s12">
                  <div class="btn">
                    <span>Choose(1366 x 693)</span>
                    <input type="file" id="map_image" name="map_image" multiple onchange="imagesPreview(this,3)">
                  </div>
                  <div class="file-path-wrapper">
                    <?php
                    $maparr = explode("/", $properties->map_image);
                    $map_image_name = array_pop($maparr);
                    ?>
                    <input class="validate file-path file-path-basic" type="text" id="file_map_image" name="file_map_image" placeholder="Map Image (1366 x 693)" value="<?=$map_image_name?>">
                    <span class="error-map_image"></span>
                  </div>
                </div>
                <div class="map_image_box col s12">
                  <span class="img-eaa-0"><img src="<?=$properties->map_image?>" style="height:150px;margin-right:3px;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.12), 0 1px 5px 0 rgba(0,0,0,.2);margin:5px;" class="img-thumbnail map_images_src"></span>
                </div>   
              </div>
              <div class="step-actions">
                <div class="row">
                  <div class="col m4 s12 mb-3">
                    <button class="red btn btn-reset" type="reset" style="visibility: hidden;">
                      <i class="material-icons left">clear</i>Reset
                    </button>
                  </div>
                  <div class="col m4 s12 mb-3">
                    <button class="btn btn-light previous-step">
                      <i class="material-icons left">arrow_back</i>
                      Prev
                    </button>
                  </div>
                  <div class="col m4 s12 mb-3">
                    <button class="waves-effect waves dark btn btn-primary" type="submit">
                      Next
                      <i class="material-icons right">arrow_forward</i>
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </li>
    
        <li class="step step-6 step-pointer">
                                                <div class="step-title waves-effect">Construction Update </div>
                                                <div class="step-content">
                                                    <form id="construction_details" name="construction_details">
                                                        <div class="construction_section">
                                                            <?php
                                                            foreach ($construction_details as $key => $valuecons) {
                                                            $conarr = explode("/",$valuecons->image);
                                                            $cimgname = array_pop($conarr);
                                                            ?>
                                                            <div class="row ddd construction_section_inner_<?=$key?>"
                                                                style="box-shadow: 0px 0px 1px 0 rgba(123,31,162,.5);padding:5px;">
                                                                <div class="input-field col m5 s11">
                                                                    <label for="construction_title_<?=$key?>">Title
                                                                        text:</label>
                                                                    <input type="text"
                                                                        class="validate construction-title"
                                                                        name="construction_title_<?=$key?>"
                                                                        id="construction_title_<?=$key?>"
                                                                        value="<?=$valuecons->title?>">
                                                                    <span
                                                                        class="error-construction_title_<?=$key?>"></span>
                                                                </div>
                                                                <div class="input-field col m5 s11">
                                                                    <label
                                                                        for="construction_short_description_<?=$key?>">Short
                                                                        text:</label>
                                                                    <textarea
                                                                        id="construction_short_description_<?=$key?>"
                                                                        name="construction_short_description_<?=$key?>"
                                                                        data-id="0"
                                                                        class="materialize-textarea construction-text"
                                                                        style="height: 101px;"><?=$valuecons->text?></textarea>
                                                                    <span
                                                                        class="error-construction_short_description_<?=$key?>"></span>
                                                                </div>

                                                                <div class="row construction_section_inner_<?=$key?>"
                                                                    style="box-shadow: 0px 0px 1px 0 rgba(123,31,162,.5);padding:5px;">
                                                                    <div class="input-field col m5 s11">
                                                                        <label for="construction_altdata">Title Alt
                                                                            Tag:</label>
                                                                        <input type="text"
                                                                            class="validate construction_altdata"
                                                                            name="construction_altdata"
                                                                            id="construction_altdata"
                                                                            value="<?=$valuecons->alt?>">
                                                                        <span class="error-construction_altdata"></span>
                                                                    </div>

                                                                    <div class="col s10">
                                                                        <div class="file-field input-field">
                                                                            <div class="btn">
                                                                                <span>Choose</span>
                                                                                <input type="file"
                                                                                    id="construction_image_<?=$key?>"
                                                                                    name="construction_image_<?=$key?>"
                                                                                    onchange="imagesConstruction(this,<?=$key?>)">
                                                                            </div>
                                                                            <div class="file-path-wrapper">
                                                                                <input
                                                                                    class="validate file-path file-path-construction"
                                                                                    type="text"
                                                                                    id="file_construction_image_<?=$key?>"
                                                                                    name="file_construction_image_<?=$key?>"
                                                                                    placeholder="Construction image"
                                                                                    value="<?=$cimgname?>">
                                                                                <span
                                                                                    class="error-construction_image"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="construction_images_box_<?=$key?> construction_images_box">
                                                                            <span class="img-ec-<?=$key?>"><img
                                                                                    src="<?=$valuecons->image?>"
                                                                                    style="height:150px;margin-right:3px;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.12), 0 1px 5px 0 rgba(0,0,0,.2);margin:5px;"
                                                                                    class="img-thumbnail construction_images_src construction_images_src_<?=$key?>"></span>
                                                                        </div>
                                                                    </div>
                                                                    <?php 
                                                                    if (isset($key)) {                    
                                                                    ?>
                                                                    <div class="input-field col m1 s1"> <button
                                                                            class="waves-effect waves-light btn gradient-45deg-red-pink z-depth-4 mr-1 mb-2"
                                                                            type="button"
                                                                            onclick="removeConstructionSection(<?=$key?>)">X</button>
                                                                    </div>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                </div>
                                                            </div>
                                                            <?php
                                                            }
                                                            ?>
                                                        </div>
                                                        <div class="row construction_images_more_0">
                                                            <div class="col s12" style="text-align: right;">
                                                                <a class="waves-effect waves-light  btn gradient-45deg-light-blue-cyan box-shadow-none border-round mr-1 mb-1"
                                                                    onclick="addMoreConstruction()">+ Add more</a>
                                                            </div>
                                                        </div>
                                                        <div class="step-actions">
                                                            <div class="row">
                                                                <div class="col m4 s12 mb-3">
                                                                    <button class="red btn btn-reset" type="reset"
                                                                        style="visibility: hidden;">
                                                                        <i class="material-icons left">clear</i>Reset
                                                                    </button>
                                                                </div>
                                                                <div class="col m4 s12 mb-3">
                                                                    <button class="btn btn-light previous-step">
                                                                        <i class="material-icons left">arrow_back</i>
                                                                        Prev
                                                                    </button>
                                                                </div>
                                                                <div class="col m4 s12 mb-3">
                                                                    <button
                                                                        class="waves-effect waves dark btn btn-primary"
                                                                        type="submit">
                                                                        Next
                                                                        <i
                                                                            class="material-icons right">arrow_forward</i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </li>

                                            <li class="step step-6 step-pointer">
          <div class="step-title waves-effect">Rera Update</div>
          <div class="step-content">
            <form id="rera_details" name="rera_details">
              <div class="rera_section">
                <?php
                foreach ($rera_details as $key => $valuecons) {
                  $conarr = explode("/",$valuecons->image);
                  $cimgname = array_pop($conarr);
                  ?>
                  <div class="row rera_section_inner_<?=$key?>" style="box-shadow: 0px 0px 1px 0 rgba(123,31,162,.5);padding:5px;">
                    <div class="input-field col m5 s11">
                      <label for="rera_title_<?=$key?>">Title text:</label>
                      <input type="text" class="validate rera-title" name="rera_title_<?=$key?>" id="rera_title_<?=$key?>" value="<?=$valuecons->title?>">
                      <span class="error-rera_title_<?=$key?>"></span>
                    </div> 
                    <div class="input-field col m5 s11">
                      <label for="rera_short_description_<?=$key?>">Short text:</label>
                      <textarea id="rera_short_description_<?=$key?>" name="rera_short_description_<?=$key?>" data-id="0" class="materialize-textarea rera-text" style="height: 101px;"><?=$valuecons->text?></textarea>
                      <span class="error-rera_short_description_<?=$key?>"></span>
                    </div>
                    <div class="row rera_section_inner_<?=$key?>" style="box-shadow: 0px 0px 1px 0 rgba(123,31,162,.5);padding:5px;">
                    

                    <div class="col s10">
                      <div class="file-field input-field">
                        <div class="btn">
                          <span>Choose</span>
                          <input type="file" id="rera_image_<?=$key?>" name="rera_image_<?=$key?>" onchange="imagesrera(this,<?=$key?>)">
                        </div>
                        <div class="file-path-wrapper">
                          <input class="validate file-path file-path-rera" type="text" id="file_rera_image_<?=$key?>" name="file_rera_image_<?=$key?>" placeholder="rera image" value="<?=$cimgname?>">
                        
                        </div>
                      </div>
                      <div class="rera_images_box_<?=$key?> rera_images_box">
                        <span class="img-ec-<?=$key?>"><img src="<?=$valuecons->image?>" style="height:150px;margin-right:3px;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.12), 0 1px 5px 0 rgba(0,0,0,.2);margin:5px;" class="img-thumbnail rera_images_src rera_images_src_<?=$key?>"></span>
                      </div> 
                    </div> 
                    <?php 
                    if ($key>0) {                    
                      ?>
                      <div class="input-field col m1 s1"> <button class="waves-effect waves-light btn gradient-45deg-red-pink z-depth-4 mr-1 mb-2" type="button" onclick="removereraSection(<?=$key?>)">X</button> </div>
                      <?php
                    }
                    ?>
                  </div>
                  <?php
                }
                ?>
              </div>
              <div class="row rera_images_more_0">
                <div class="col s12" style="text-align: right;">
                  <a class="waves-effect waves-light  btn gradient-45deg-light-blue-cyan box-shadow-none border-round mr-1 mb-1" onclick="addMorerera()">+ Add more</a>
                </div>
              </div>
              <div class="step-actions">
                <div class="row">
                  <div class="col m4 s12 mb-3">
                    <button class="red btn btn-reset" type="reset" style="visibility: hidden;">
                      <i class="material-icons left">clear</i>Reset
                    </button>
                  </div>
                  <div class="col m4 s12 mb-3">
                    <button class="btn btn-light previous-step">
                      <i class="material-icons left">arrow_back</i>
                      Prev
                    </button>
                  </div>
                  <div class="col m4 s12 mb-3">
                    <button class="waves-effect waves dark btn btn-primary" type="submit">
                      Next
                      <i class="material-icons right">arrow_forward</i>
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </li>
        <li class="step step-7 step-pointer">
          <div class="step-title waves-effect">Projects you may also like</div>
          <div class="step-content">
            <form id="projects_details" name="projects_details">
              <div class="row">
               <div class="col s12">
                <div class="input-field">
                  <select data-placeholder="Select Projects" class="select2 select2-eminity-overview browser-default"
                  id="projects" name="projects" multiple="multiple">
                  <?php 
                  $projectsarr = explode(',', $properties->projects);
                  foreach ($projects as $key => $value) {
                    $selectpro = "";
                    if (in_array($value->id, $projectsarr)) {
                      $selectpro = "selected";
                    }
                    echo '<option value="'.$value->id.'" '.$selectpro.'>'.$value->title.'</option>';
                  }
                  ?>
                </select>
                <span class="error-projects"></span>
              </div>
            </div>
          </div>
          <div class="step-actions">
            <div class="row">
              <div class="col m4 s12 mb-3">
                <button class="red btn btn-reset" type="reset" style="visibility: hidden;">
                  <i class="material-icons left">clear</i>Reset
                </button>
              </div>
              <div class="col m4 s12 mb-3">
                <button class="btn btn-light previous-step">
                  <i class="material-icons left">arrow_back</i>
                  Prev
                </button>
              </div>
              <div class="col m4 s12 mb-3">
                <button class="waves-effect waves dark btn btn-primary" type="submit">
                  Next
                  <i class="material-icons right">arrow_forward</i>
                </button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </li>
    <li class="step step-8 step-pointer">
      <div class="step-title waves-effect">Booking Details</div>
      <div class="step-content">
        <form id="booking_details" name="booking_details">
          <input type="hidden" class="insert_id" id="insert_id" name="insert_id" value="<?=$properties->id?>">
          <div class="row">
           <div class="input-field col s12">
            <label for="booking_link">URL:</label>
            <input type="text" class="validate booking-url" name="booking_url" id="booking_url" value="<?=$properties->booking_url?>">
            <span class="error-booking_url"></span>
          </div> 
          <div class="input-field col s12">
            <label for="booking_text">Text:</label>
            <textarea id="booking_text" name="booking_text" class="materialize-textarea" style="height: 101px;"><?=$properties->booking_text?></textarea>
          </div>
          <div class="file-field input-field col s12">
            <div class="btn">
              <span>Choose</span>
              <input type="file" id="back_image" name="back_image" onchange="imagesPreview(this,4)">
            </div>
            <?php
            $bookarr = explode("/", $properties->booking_background);
            $book_image_name = array_pop($bookarr );
            ?>
            <div class="file-path-wrapper">
              <input class="validate file-path file-path-basic" type="text" id="file_back_image" name="file_back_image" placeholder="Background Image" value="<?=$book_image_name?>">
              <span class="error-back_image"></span>
            </div>
          </div>
          <div class="back_image_box col s12">
           <span class="img-b-0"><img src="<?=$properties->booking_background?>" style="height:150px;margin-right:3px;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.12), 0 1px 5px 0 rgba(0,0,0,.2);margin:5px;" class="img-thumbnail booking_images_src"></span>
         </div>   
       </div>
       <div class="step-actions">
        <div class="row">
          <div class="col m4 s12 mb-3">
            <button class="red btn btn-reset" type="reset" style="visibility: hidden;">
              <i class="material-icons left">clear</i>Reset
            </button>
          </div>
          <div class="col m4 s12 mb-3">
            <button class="btn btn-light previous-step">
              <i class="material-icons left">arrow_back</i>
              Prev
            </button>
          </div>
          <div class="col m4 s12 mb-3">
            <button class="waves-effect waves dark btn btn-primary" type="submit">
              Next
              <i class="material-icons right">arrow_forward</i>
            </button>
          </div>
        </div>
      </div>
    </form>
  </div>
</li>
<li class="step step-9 step-pointer">
    <div class="step-title waves-effect">SEO Details</div>
    <div class="step-content">
      <form id="seo_details" name="seo_details">
        <input type="hidden" class="insert_id" id="insert_id" name="insert_id" value="<?=$properties->id?>">
        <div class="row">
         <div class="input-field col s12">
          <label for="meta_title">Meta Title:</label>
          <input type="text" class="validate" name="meta_title" id="meta_title" value="<?=$properties->meta_title?>">
          <span class="error-meta_title"></span>
        </div> 
        <div class="input-field col s12">
          <label for="meta_description">Meta Description:</label>
          <textarea id="meta_description" name="meta_description" class="materialize-textarea" style="height: 101px;"> <?=$properties->meta_description?></textarea>
        </div> 
       <div class="input-field col s12">
          <label for="meta_tags">Meta Keywords:</label>
          <input type="text" class="validate" name="meta_tags" id="meta_tags" value="<?=$properties->meta_tags?>">
          <span class="error-meta_tags"></span>
        </div> 
        <div class="input-field col s12">
          <label for="booking_link">H1 Tag:</label>
          <input type="text" class="validate booking-url" name="h1_tag" id="h1_tag" value="<?=$properties->h1_tag?>">
          <span class="error-h1_tag"></span>
        </div> 
        <div class="input-field col s12">
          <label for="h2_tag">H2 Tag:</label>
          <input type="text" class="validate booking-url" name="h2_tag" id="h2_tag" value="<?=$properties->h2_tag?>">
          <span class="error-h2_tag"></span>
        </div> 
        <div class="input-field col s12">
          <label for="google_pixel">Google Pixel:</label>
          <textarea id="google_pixel" name="google_pixel" class="materialize-textarea" style="height: 101px;"><?=$properties->google_pixel?></textarea>
        </div> 
        <div class="input-field col s12">
          <label for="facebook_pixel">Facebook Pixel:</label>
          <textarea id="facebook_pixel" name="facebook_pixel" class="materialize-textarea" style="height: 101px;"><?=$properties->facebook_pixel?></textarea>
        </div>
        <div class="input-field col s12">
          <label for="all_other_pixel">All Other Pixels: <small>(Only Pixles that can be added under &lt;head&gt;&lt;/head&gt; tag)</small></label>
          <textarea id="all_other_pixel" name="all_other_pixel" rows="5" class="materialize-textarea"><?=$properties->all_other_pixel?></textarea>
        </div>
      </div>
      <div class="step-actions">
        <div class="row">
          <div class="col m4 s12 mb-3">
            <button class="red btn btn-reset" type="reset" style="visibility: hidden;">
              <i class="material-icons left">clear</i>Reset
            </button>
          </div>
          <div class="col m4 s12 mb-3">
            <button class="btn btn-light previous-step">
              <i class="material-icons left">arrow_back</i>
              Prev
            </button>
          </div>
          <div class="col m4 s12 mb-3">
            <button class="waves-effect waves dark btn btn-primary" type="submit">
              Submit
              <i class="material-icons right">arrow_forward</i>
            </button>
          </div>
        </div>
      </div>
    </form>
  </div>
</li>

<li class="step step-10 step-pointer">
    <div class="step-title waves-effect">Media Pixel</div>
    <div class="step-content">
      <form id="media_pixcel_details" name="media_pixcel_details">
        <input type="hidden" class="insert_id" id="insert_id" name="insert_id" value="<?=$properties->id?>">
        <div class="row">
         <div class="input-field col s12">
          <label for="cavity1">Cavity 1:</label>
          <textarea class="materialize-textarea" name="cavity1" id="cavity1"><?=$properties->cavity1; ?></textarea>
          <span class="error-cavity1"></span>
        </div>

        <div class="input-field col s12">
          <label for="cavity2">Cavity 2:</label>
          <textarea class="materialize-textarea" name="cavity2" id="cavity2"><?=$properties->cavity2; ?></textarea>
          <span class="error-cavity2"></span>
        </div>

        <div class="input-field col s12">
          <label for="cavity3">Cavity 3:</label>
          <textarea class="materialize-textarea" name="cavity3" id="cavity3"><?=$properties->cavity3; ?></textarea>
          <span class="error-cavity3"></span>
        </div>

        <div class="input-field col s12">
          <label for="cavity4">Cavity 4:</label>
          <textarea class="materialize-textarea" name="cavity4" id="cavity4"><?=$properties->cavity4; ?></textarea>
          <span class="error-cavity4"></span>
        </div>

        <div class="input-field col s12">
          <label for="cavity5">Cavity 5:</label>
          <textarea class="materialize-textarea" name="cavity5" id="cavity5"><?=$properties->cavity5; ?></textarea>
          <span class="error-cavity5"></span>
        </div>

        <div class="input-field col s12">
          <label for="cavity6">Cavity 6:</label>
          <textarea class="materialize-textarea" name="cavity6" id="cavity6"><?=$properties->cavity6; ?></textarea>
          <span class="error-cavity6"></span>
        </div>

        <div class="input-field col s12">
          <label for="cavity7">Cavity 7:</label>
          <textarea class="materialize-textarea" name="cavity7" id="cavity7"><?=$properties->cavity7; ?></textarea>
          <span class="error-cavity7"></span>
        </div>

        <div class="input-field col s12">
          <label for="cavity8">Cavity 8 (Only Pixles that can be added under &lt;body&gt;&lt;/body&gt; tag):</label>
          <textarea class="materialize-textarea" name="cavity8" id="cavity8"><?=$properties->cavity8; ?></textarea>
          <span class="error-cavity8"></span>
        </div> 
        
        <div class="input-field col s12">
          <label for="other_cavities">Other cavities: <small>(Only Pixles that can be added under &lt;head&gt;&lt;/head&gt; tag)</small></label>
          <textarea id="other_cavities" name="other_cavities" rows="5" class="materialize-textarea"><?=$properties->other_cavities?></textarea>
        </div>

        <div class="input-field col s12">
          <label for="thank_head">Thank you page tags(added under &lt;head&gt;&lt;/head&gt; tag):</label>
          <textarea class="materialize-textarea" name="thank_head" id="thank_head"><?=$properties->thank_head; ?></textarea>
          <span class="error-thank_head"></span>
        </div>

        <div class="input-field col s12">
          <label for="thank_body">Thank you page tags(added under &lt;body&gt;&lt;/body&gt; tag):</label>
          <textarea class="materialize-textarea" name="thank_body" id="thank_body"><?=$properties->thank_body; ?></textarea>
          <span class="error-thank_body"></span>
        </div>

      </div>
      <div class="step-actions">
        <div class="row">
          <div class="col m4 s12 mb-3">
            <button class="red btn btn-reset" type="reset" style="visibility: hidden;">
              <i class="material-icons left">clear</i>Reset
            </button>
          </div>
          <div class="col m4 s12 mb-3">
            <button class="btn btn-light previous-step">
              <i class="material-icons left">arrow_back</i>
              Prev
            </button>
          </div>
          <div class="col m4 s12 mb-3">
            <button class="waves-effect waves dark btn btn-primary" type="submit">
              Next
              <i class="material-icons right">arrow_forward</i>
            </button>
          </div>
        </div>
      </div>
    </form>
  </div>
</li>


<!--COMMERCIAL rks-->
  <li class="step step-11 step-pointer">
          <div class="step-title waves-effect">Commercial Footprint</div>
          <div class="step-content">
            <form id="commercial_footprint" name="commercial_footprint" method="post">
              <input type="hidden" class="insert_id" id="insert_id" name="insert_id" value="<?=$properties->id?>">
              <div class="row">
                <div class="input-field col m12 s12">
                  <label for="short_description" style="left: 1.75rem">Short Description</label>
                  <textarea class="validate" name="cfootprint_short" id="cfootprint_short" ><?=$properties->cfootprint_short?></textarea>
                  <span class="error-rera"></span>
                </div> 
                <div class="input-field col m12 s12">
                  <label for="map_url">Description</label>
                  <input type="text" class="validate" name="cfootprint_desc" id="cfootprint_desc" value="<?=$properties->cfootprint_desc?>">
                  <span class="error-map_url"></span>
                </div> 
                <div class="file-field input-field col s12">
                  <div class="btn">
                    <span>Choose(1366 x 693)</span>
                    <input type="file" id="cfootprint_image_one" name="cfootprint_image_one" onchange="imagesPreview(this,16)">


                  </div>
                  <div class="file-path-wrapper">
                    <?php
                    $maparr = explode("/", $properties->cfootprint_image_one);
                    $map_image_name = array_pop($maparr);
                    ?>
                    <input class="validate file-path file-path-basic" type="text" id="cfootprint_image_one" name="cfootprint_image_one" placeholder="Image (1366 x 693)" value="<?=$map_image_name?>">
                    <span class="cf1_image_box"></span>
                  </div>
                </div>
                <div class="map_image_box col s12">
                  <span class="img-eaa-0"><img src="<?=$properties->cfootprint_image_one?>" style="height:150px;margin-right:3px;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.12), 0 1px 5px 0 rgba(0,0,0,.2);margin:5px;" class="img-thumbnail map_images_src"></span>
                </div>  

<!--two-->
    <div class="file-field input-field col s12">
                  <div class="btn">
                    <span>Choose(1366 x 693)</span>
                    <input type="file" id="cfootprint_image_two" name="cfootprint_image_two" multiple onchange="imagesPreview(this,17)">
                  </div>
                  <div class="file-path-wrapper">
                    <?php
                    $maparr = explode("/", $properties->cfootprint_image_four);
                    $map_image_name = array_pop($maparr);
                    ?>
                    <input class="validate file-path file-path-basic" type="text" id="cfootprint_image_two" name="cfootprint_image_two" placeholder="Image (1366 x 693)" value="<?=$map_image_name?>">
                    <span class="cf2_image_box"></span>
                  </div>
                </div>
                <div class="map_image_box col s12">
                  <span class="img-eaa-0"><img src="<?=$properties->cfootprint_image_two?>" style="height:150px;margin-right:3px;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.12), 0 1px 5px 0 rgba(0,0,0,.2);margin:5px;" class="img-thumbnail map_images_src"></span>
                </div> 
                <!--two-->

<!--three-->
    <div class="file-field input-field col s12">
                  <div class="btn">
                    <span>Choose(1366 x 693)</span>
                    <input type="file" id="cfootprint_image_three" name="cfootprint_image_three" multiple onchange="imagesPreview(this,18)">
                  </div>
                  <div class="file-path-wrapper">
                    <?php
                    $maparr = explode("/", $properties->cfootprint_image_four);
                    $map_image_name = array_pop($maparr);
                    ?>
                    <input class="validate file-path file-path-basic" type="text" id="cfootprint_image_three" name="cfootprint_image_three" placeholder="Image (1366 x 693)" value="<?=$map_image_name?>">
                    <span class="cf3_image_box"></span>
                  </div>
                </div>
                <div class="map_image_box col s12">
                  <span class="img-eaa-0"><img src="<?=$properties->cfootprint_image_three?>" style="height:150px;margin-right:3px;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.12), 0 1px 5px 0 rgba(0,0,0,.2);margin:5px;" class="img-thumbnail map_images_src"></span>
                </div> 
                <!--three-->

 <!--four-->
    <div class="file-field input-field col s12">
                  <div class="btn">
                    <span>Choose(1366 x 693)</span>
                    <input type="file" id="cfootprint_image_four" name="cfootprint_image_four" multiple onchange="imagesPreview(this,19)">
                  </div>
                  <div class="file-path-wrapper">
                    <?php
                    $maparr = explode("/", $properties->cfootprint_image_four);
                    $map_image_name = array_pop($maparr);
                    ?>
                    <input class="validate file-path file-path-basic" type="text" id="cfootprint_image_four" name="cfootprint_image_four" placeholder="Image (1366 x 693)" value="<?=$map_image_name?>">
                    <span class="cf4_image_box"></span>
                  </div>
                </div>
                <div class="map_image_box col s12">
                  <span class="img-eaa-0"><img src="<?=$properties->cfootprint_image_four?>" style="height:150px;margin-right:3px;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.12), 0 1px 5px 0 rgba(0,0,0,.2);margin:5px;" class="img-thumbnail map_images_src"></span>
                </div> 
                <!--four-->

                <!--five-->
    <div class="file-field input-field col s12">
                  <div class="btn">
                    <span>Choose(1366 x 693)</span>
                    <input type="file" id="cfootprint_image_five" name="cfootprint_image_five" multiple onchange="imagesPreview(this,20)">
                  </div>
                  <div class="file-path-wrapper">
                    <?php
                    $maparr = explode("/", $properties->cfootprint_image_five);
                    $map_image_name = array_pop($maparr);
                    ?>
                    <input class="validate file-path file-path-basic" type="text" id="cfootprint_image_five" name="cfootprint_image_five" placeholder="Image (1366 x 693)" value="<?=$map_image_name?>">
                    <span class="cf5_image_box"></span>
                  </div>
                </div>
                <div class="map_image_box col s12">
                  <span class="img-eaa-0"><img src="<?=$properties->cfootprint_image_five?>" style="height:150px;margin-right:3px;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.12), 0 1px 5px 0 rgba(0,0,0,.2);margin:5px;" class="img-thumbnail map_images_src"></span>
                </div> 
                <!--five-->

                <!--six-->
    <div class="file-field input-field col s12">
                  <div class="btn">
                    <span>Choose(1366 x 693)</span>
                    <input type="file" id="cfootprint_image_six" name="cfootprint_image_six" multiple onchange="imagesPreview(this,21)">
                  </div>
                  <div class="file-path-wrapper">
                    <?php
                    $maparr = explode("/", $properties->cfootprint_image_six);
                    $map_image_name = array_pop($maparr);
                    ?>
                    <input class="validate file-path file-path-basic" type="text" id="cfootprint_image_six" name="cfootprint_image_six" placeholder="Image (1366 x 693)" value="<?=$map_image_name?>">
                    <span class="cf6_image_box"></span>
                  </div>
                </div>
                <div class="map_image_box col s12">
                  <span class="img-eaa-0"><img src="<?=$properties->cfootprint_image_six?>" style="height:150px;margin-right:3px;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.12), 0 1px 5px 0 rgba(0,0,0,.2);margin:5px;" class="img-thumbnail map_images_src"></span>
                </div> 
                <!--six-->













              </div>
              <div class="step-actions">
                <div class="row">
                  <div class="col m4 s12 mb-3">
                    <button class="red btn btn-reset" type="reset" style="visibility: hidden;">
                      <i class="material-icons left">clear</i>Reset
                    </button>
                  </div>
                  <div class="col m4 s12 mb-3">
                    <button class="btn btn-light previous-step">
                      <i class="material-icons left">arrow_back</i>
                      Prev
                    </button>
                  </div>
                  <div class="col m4 s12 mb-3">
                    <button class="waves-effect waves dark btn btn-primary" type="submit">
                      Next
                      <i class="material-icons right">arrow_forward</i>
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </li>

<!--COMMERCIAL-->






<!--BEST FOR INVESTMENT-->
 <li class="step step-12 step-pointer">
          <div class="step-title waves-effect">Best For Investment</div>
          <div class="step-content">
            <form id="best_for_investment" name="best_for_investment">
              <input type="hidden" class="insert_id" id="insert_id" name="insert_id" value="<?=$properties->id?>">
              <div class="row">
                <div class="input-field col m12 s12">
                  <label for="short_description" style="left: 1.75rem">Short Description</label>
                  <textarea class="validate" name="best_for_investment_short" id="best_for_investment_short" ><?=$properties->best_for_investment_short?></textarea>
                  <span class="error-rera"></span>
                </div> 
                <div class="input-field col m12 s12">
                  <label for="map_url">Description</label>
                  <input type="text" class="validate" name="best_for_investment_desc" id="best_for_investment_desc" value="<?=$properties->best_for_investment_desc?>">
                  <span class="error-map_url"></span>
                </div> 
                <div class="file-field input-field col s12">
                  <div class="btn">
                    <span>Choose(1366 x 693)</span>
                    <input type="file" id="best_for_investment_image" name="best_for_investment_image" multiple onchange="imagesPreview(this,22)">
                  </div>
                  <div class="file-path-wrapper">
                    <?php
                    $maparr = explode("/", $properties->best_for_investment_image);
                    $map_image_name = array_pop($maparr);
                    ?>
                <input class="validate file-path file-path-basic" type="text" id="best_for_investment_image" name="best_for_investment_image" placeholder="Image (1366 x 693)" value="<?=$map_image_name?>">
                    <span class="cf22_image_box"></span>
                  </div>
                </div>
                <div class="map_image_box col s12">
                  <span class="img-eaa-0"><img src="<?=$properties->best_for_investment_image?>" style="height:150px;margin-right:3px;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.12), 0 1px 5px 0 rgba(0,0,0,.2);margin:5px;" class="img-thumbnail map_images_src"></span>
                </div>   
              </div>
              <div class="step-actions">
                <div class="row">
                  <div class="col m4 s12 mb-3">
                    <button class="red btn btn-reset" type="reset" style="visibility: hidden;">
                      <i class="material-icons left">clear</i>Reset
                    </button>
                  </div>
                  <div class="col m4 s12 mb-3">
                    <button class="btn btn-light previous-step">
                      <i class="material-icons left">arrow_back</i>
                      Prev
                    </button>
                  </div>
                  <div class="col m4 s12 mb-3">
                    <button class="waves-effect waves dark btn btn-primary" type="submit">
                      Next
                      <i class="material-icons right">arrow_forward</i>
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </li>

<!--BEST FOR INVESTMENT-->



<!--IDEAL FOR PROFESSIONALS-->
 <li class="step step-13 step-pointer">
          <div class="step-title waves-effect">Ideal For Professionals</div>
          <div class="step-content">
            <form id="ideal_for_professionals" name="ideal_for_professionals">
              <input type="hidden" class="insert_id" id="insert_id" name="insert_id" value="<?=$properties->id?>">
              <div class="row">
                <div class="input-field col m12 s12">
                  <label for="short_description" style="left: 1.75rem">Short Description</label>
                  <textarea class="validate" name="idealforprofessionals_short" id="idealforprofessionals_short" ><?=$properties->idealforprofessionals_short?></textarea>
                  <span class="error-rera"></span>
                </div> 
                <div class="input-field col m12 s12">
                  <label for="map_url">Description</label>
                  <input type="text" class="validate" name="idealforprofessionals_desc" id="idealforprofessionals_desc" value="<?=$properties->idealforprofessionals_desc?>">
                  <span class="error-map_url"></span>
                </div> 
                <div class="file-field input-field col s12">
                  <div class="btn">
                    <span>Choose(1366 x 693)</span>
                    <input type="file" id="idealforprofessionals_image" name="idealforprofessionals_image" multiple onchange="imagesPreview(this,3)">
                  </div>
                  <div class="file-path-wrapper">
                    <?php
                    $maparr = explode("/", $properties->idealforprofessionals_image);
                    $map_image_name = array_pop($maparr);
                    ?>
                    <input class="validate file-path file-path-basic" type="text" id="file_map_image" name="file_map_image" placeholder="sImage (1366 x 693)" value="<?=$map_image_name?>">
                    <span class="error-map_image"></span>
                  </div>
                </div>
                <div class="map_image_box col s12">
                  <span class="img-eaa-0"><img src="<?=$properties->idealforprofessionals_image?>" style="height:150px;margin-right:3px;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.12), 0 1px 5px 0 rgba(0,0,0,.2);margin:5px;" class="img-thumbnail map_images_src"></span>
                </div>   
              </div>
              <div class="step-actions">
                <div class="row">
                  <div class="col m4 s12 mb-3">
                    <button class="red btn btn-reset" type="reset" style="visibility: hidden;">
                      <i class="material-icons left">clear</i>Reset
                    </button>
                  </div>
                  <div class="col m4 s12 mb-3">
                    <button class="btn btn-light previous-step">
                      <i class="material-icons left">arrow_back</i>
                      Prev
                    </button>
                  </div>
                  <div class="col m4 s12 mb-3">
                    <button class="waves-effect waves dark btn btn-primary" type="submit">
                      Submit
                      <i class="material-icons right">arrow_forward</i>
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </li>
<!--IDEAL FOR PROFESSIONALS-->









</ul>
</div>
</div>
</div>
</div>
</section>
<!-- END RIGHT SIDEBAR NAV -->
</div>
<div class="content-overlay"></div>
</div>
</div>
</div>
<!-- END: Page Main-->

<?php include 'footer.php'?>


<!-- BEGIN PAGE VENDOR JS-->
<script src="<?=base_url()?>assets/vendors/data-tables/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>assets/vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js"></script>
<script src="<?=base_url()?>assets/vendors/data-tables/js/datatables.checkboxes.min.js"></script>
<script src="<?=base_url()?>assets/js/scripts/customizer.min.js"></script>
<script src="<?=base_url()?>assets/vendors/materialize-stepper/materialize-stepper.min.js"></script>
<script src="<?=base_url()?>assets/vendors/select2/select2.full.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<!-- END THEME  JS-->
<!-- BEGIN PAGE LEVEL JS-->
<!-- <script src="<?=base_url()?>assets/js/scripts/form-select2.min.js"></script> -->
<script src="<?=base_url()?>assets/js/scripts/app-invoice.min.js"></script>
<script src="<?=base_url()?>assets/js/scripts/form-wizard.min.js"></script>
<script src="<?=base_url()?>assets/js/validation.js"></script>
<script type="text/javascript">

  toastr.options = {
    "closeButton": false,
    "debug": false,
    "newestOnTop": false,
    "progressBar": false,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  }

  $(".sidenav li a").removeClass('active');
  $(".nav-properties").addClass('active');
  $(".select2-eminity-overview").select2({dropdownAutoWidth:!0,width:"100%",placeholder:"Search amenities"});
  $(".select2-footer-typology").select2({dropdownAutoWidth:!0,width:"100%",placeholder:"Search Typology",tags:true});
  $("#aminity").select2({dropdownAutoWidth:!0,width:"100%",placeholder:"Search amenities"});
  $('select[required]').css({
    position: 'absolute',
    display: 'inline',
    height: 0,
    padding: 0,
    border: '1px solid rgba(255,255,255,0)',
    width: 0
  });
  var e = 0;
  function imagesPreview(input,type) {
    if (input.files) {
     var filesAmount = input.files.length;
     for (var i = 0; i < filesAmount; i++)   {
      var reader = new FileReader();
      reader.onload = function(event) {
       var src = event.target.result;  
       var filename="";
       if (type==1) {   
          // var filename = input.files[e].name;
          $(".error-image_name").html('');
          $(".featured_images_box").html('<span class="img-e-'+e+'"><img src="'+src+'" style="height:150px;margin-right:3px;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.12), 0 1px 5px 0 rgba(0,0,0,.2);margin:5px;" class="img-thumbnail featured_images_src"></span>');
          e++;
        } 
        else if (type==11) {   
          // var filename = input.files[e].name;
          $(".error-thumbnail_image_name").html('');
          $(".thumbnail_images_box").html('<span class="img-e-'+e+'"><img src="'+src+'" style="height:150px;margin-right:3px;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.12), 0 1px 5px 0 rgba(0,0,0,.2);margin:5px;" class="img-thumbnail thumbnail_images_src"></span>');
          e++;
        }
        else if (type==12) {   
          // var filename = input.files[e].name;
          $(".error-property_logo_name").html('');
          $(".property_logo_box").html('<span class="img-logo-'+e+'"><img src="'+src+'" style="height:150px;margin-right:3px;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.12), 0 1px 5px 0 rgba(0,0,0,.2);margin:5px;" class="img-thumbnail property_logos_src"></span>');
          e++;
        }
        else if(type==2)
        {
         $(".overview_images_box").html('<span class="img-eo-'+e+'"><img src="'+src+'" style="height:150px;margin-right:3px;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.12), 0 1px 5px 0 rgba(0,0,0,.2);margin:5px;" class="img-thumbnail overview_images_src"></span>');
         e++;
       }
       else if(type==3)
       {
        $(".map_image_box").html('');
        $(".map_image_box").html('<span class="img-e-'+e+'"><img src="'+src+'" style="height:150px;margin-right:3px;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.12), 0 1px 5px 0 rgba(0,0,0,.2);margin:5px;" class="img-thumbnail map_images_src"></span>');
        e++;
      }
      else if(type==4)
      {
        $(".back_image_box").html('');
        $(".back_image_box").html('<span class="img-b-'+e+'"><img src="'+src+'" style="height:150px;margin-right:3px;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.12), 0 1px 5px 0 rgba(0,0,0,.2);margin:5px;" class="img-thumbnail back_images_src"></span>');
        e++;
      }
      else if(type==8)
      {
        $(".mobile_images_box").html('');
        $(".mobile_images_box").html('<span class="img-b-'+e+'"><img src="'+src+'" style="height:150px;margin-right:3px;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.12), 0 1px 5px 0 rgba(0,0,0,.2);margin:5px;" class="img-thumbnail mobile_images_src"></span>');
        e++;
      }
      else if(type==15)
      {
        $(".resource_images_box").html('');
        $(".resource_images_box").html('<span class="img-b-'+e+'"><img src="'+src+'" style="height:150px;margin-right:3px;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.12), 0 1px 5px 0 rgba(0,0,0,.2);margin:5px;" class="img-thumbnail resource_images_src"></span>');
        e++;
      }

 else if(type==16)
      {
        $(".cf1_image_box").html('');
        $(".cf1_image_box").html('<span class="img-b-'+e+'"><img src="'+src+'" style="height:150px;margin-right:3px;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.12), 0 1px 5px 0 rgba(0,0,0,.2);margin:5px;" class="img-thumbnail back_images_src"></span>');
        e++;
      }
else if(type==17)
      {
        $(".cf2_image_box").html('');
        $(".cf2_image_box").html('<span class="img-b-'+e+'"><img src="'+src+'" style="height:150px;margin-right:3px;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.12), 0 1px 5px 0 rgba(0,0,0,.2);margin:5px;" class="img-thumbnail back_images_src"></span>');
        e++;
      }
      else if(type==18)
      {
        $(".cf3_image_box").html('');
        $(".cf3_image_box").html('<span class="img-b-'+e+'"><img src="'+src+'" style="height:150px;margin-right:3px;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.12), 0 1px 5px 0 rgba(0,0,0,.2);margin:5px;" class="img-thumbnail back_images_src"></span>');
        e++;
      }
      else if(type==19)
      {
        $(".cf4_image_box").html('');
        $(".cf4_image_box").html('<span class="img-b-'+e+'"><img src="'+src+'" style="height:150px;margin-right:3px;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.12), 0 1px 5px 0 rgba(0,0,0,.2);margin:5px;" class="img-thumbnail back_images_src"></span>');
        e++;
      }
      else if(type==20)
      {
        $(".cf5_image_box").html('');
        $(".cf5_image_box").html('<span class="img-b-'+e+'"><img src="'+src+'" style="height:150px;margin-right:3px;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.12), 0 1px 5px 0 rgba(0,0,0,.2);margin:5px;" class="img-thumbnail back_images_src"></span>');
        e++;
      }

 else if(type==21)
      {
        $(".cf6_image_box").html('');
        $(".cf6_image_box").html('<span class="img-b-'+e+'"><img src="'+src+'" style="height:150px;margin-right:3px;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.12), 0 1px 5px 0 rgba(0,0,0,.2);margin:5px;" class="img-thumbnail back_images_src"></span>');
        e++;
      }

else if(type==22)
      {
        $(".cf22_image_box").html('');
        $(".cf22_image_box").html('<span class="img-b-'+e+'"><img src="'+src+'" style="height:150px;margin-right:3px;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.12), 0 1px 5px 0 rgba(0,0,0,.2);margin:5px;" class="img-thumbnail back_images_src"></span>');
        e++;
      }










    }
    reader.readAsDataURL(input.files[i]);
  }
}
}
function removeImg(e,name,classname)
{
  $('.img-'+e).remove();
}
$("form[name='overview_details']").validate({
  errorElement: 'span',
  rules: {
    short_description: "required",
    overview_Amenity: "required",
    image_overview_more_0: "required",
    // overview_image_more_text_0: "required",
    image_overview: {
      required: function(){
        if ($(".overview_images_src")[0]){
          return false;
        } else {
          return true;
        }
      }
    }
  },
  errorPlacement: function(error, element) {
    if(element.attr("name") == "short_description") {
      error.appendTo(".error-short_description");
    }
    else if(element.attr("name") == "overview_Amenity") {
      error.appendTo(".error-overview_Amenity");
    }
    else if(element.attr("name") == "image_overview") {
      error.appendTo(".error-image_overview");
    }
    else
    {
      error.insertAfter(element);
    }
  },
  submitHandler: function(form, event) {
   $("#preloader").show(); 
   var insert_id = $("#insert_id").val();
   var featured_description = $("#featured_description").val();
   var short_description = $("#short_description").val();
   var overview_Amenity = $("#overview_Amenity").val();
   var overview_images = new Array();
   var oia = $( ".overview_images_src" ).attr('src');
   overview_images = [oia];

   var overview_more_images = new Array();
   $( ".overview_more_images_src" ).each(function( index ) {
    var base64 = $(this).attr('src');
    overview_more_images.push(base64);
  });
   var overview_more_text = new Array();
   $( ".overview_text_more" ).each(function( index ) {
    var text = $(this).val();
    overview_more_text.push(text);
  });
  var over_alt = new Array();
   $( ".over_alt" ).each(function( index ) {
    var text = $(this).val();
    over_alt.push(text);
  });
   var data1 = {"featured_description":featured_description,"short_description":short_description,"overview_Amenity":overview_Amenity,"overview_images":overview_images,"insert_id":insert_id,"overview_more_images":overview_more_images,"overview_more_text":overview_more_text,"over_alt":over_alt}; 
   $.ajax({
    url: '<?=base_url()?>klconfig/saveOverviewDetails',
    type: 'POST',
    data: JSON.stringify(data1),
    contentType: 'application/json; charset=utf-8',
    datatype: 'JSON',
    async: true,
    success: function(data)
    {
      $("#preloader").hide();
      var value = JSON.parse(data);
      if(value.status=="success")
      {
        toastr.success("Overview details updated");
        $(".step").removeClass('active');
        $(".step-3").addClass('active');
        $(".step-3.step-pointer").css("pointer-events","auto");
      }
    }
  });
 }
});

$("form[name='basic_details']").validate({
  errorElement : 'div',
  rules: {
    title: "required",
    status: "required",
    city: "required",
    location: "required",
    price: "required",
    possession: "required",
    typology: "required",
    footer_typology: "required",
    banner_url: {
      required: function(){
        var banner_type = $("#banner_type").val();
        if (banner_type=='image') {
          if ($(".featured_images_src")[0]){
            return false;
          } else {
            return true;
          }
        }
        else
        {
          if ($("#banner_url").val()=='' && $("#video_data").val()==''){
            return true;
          }
          else
          {
            return false;
          }
        }
      }
    },
    thumbnail_image_name: {
      required: function(){
        if ($(".thumbnail_images_src")[0]){
          return false;
        } else {
          return true;
        }
      }
    }
  },
  errorPlacement: function(error, element) {
    if(element.attr("name") == "title") {
      error.appendTo(".error-title");
    }
    else if(element.attr("name") == "status") {
      error.appendTo(".error-status");
    }
    else if(element.attr("name") == "price") {
      error.appendTo(".error-price");
    }
    else if(element.attr("name") == "possession") {
      error.appendTo(".error-possession");
    }
    else if(element.attr("name") == "typology") {
      error.appendTo(".error-typology");
    }
    else if(element.attr("name") == "footer_typology") {
      error.appendTo(".error-footer-typology");
    }
    else if(element.attr("name") == "banner_url") {
      error.appendTo(".error-banner");
    }
    else if(element.attr("name") == "featured_img_alt") {
      error.appendTo(".error-featuredimgalt");
    }
    else if(element.attr("name") == "featured_ial_mobile") {
      error.appendTo(".error-mobalt");
    }
    else if(element.attr("name") == "featured_img_alt") {
      error.appendTo(".error-thumbnail_imagealt");
    }
    else if(element.attr("name") == "featured_ial_mobile") {
      error.appendTo(".error-mopalt");
    }
    else if(element.attr("name") == "featured_img_alt") {
      error.appendTo(".error-overviewalt");
    }
    else if(element.attr("name") == "featured_ial_mobile") {
      error.appendTo(".error-resourcealt");
    }


    else
    {
      error.insertAfter(element);
    }
  },
  submitHandler: function(form, event) {
   $("#preloader").show(); 
   var insert_id = $("#insert_id").val();
   var property_type = $("#property_type").val();
   var top_picks = 0;
   var on_going = 0;
   var completed = 0;
   if ($("#top_picks").prop("checked")==true) { 
     top_picks = 1;
   } 
   if ($("#on_going").prop("checked")==true) { 
     on_going = 1;
   } 
    if ($("#completed").prop("checked")==true) { 
     completed = 1;
   } 
   var title = $("#title").val();
   var featured_img_alt= $("#featured_img_alt").val();
   var featured_ial_mobile= $("#featured_ial_mobile").val();
   var thumbnail_imagealt= $("#thumbnail_imagealt").val();
   var map_imagealt= $("#map_imagealt").val();
   var overview_imagealt= $("#overview_imagealt").val();
   var resource_imagealt=$('#resource_imagealt').val();
   var slug = $("#slug").val();
   var status = $("#status").val();
   var city = $("#city").val();
   var location = $("#location").val();
   var price = $("#price").val();
   var possession = $("#possession").val();
   var typology = $("#typology").val();
   var footer_typology = $("#footer_typology").val();
   var banner_type = $("#banner_type").val();
   var video_data = $("#video_data").val();
   var mobile_video_data = $("#mobile_video_data").val();
   var mobile_video_url = $("#mobile_video_url").val();
   var banner_url = $("#banner_url").val();
   var featured_images = new Array();
   var is_pop_reload = $("#is_pop_reload").val();
   var is_menu_bar = $("#is_menu_bar").val();
  
   //alert(featured_img_alt);

   $(".featured_images_src" ).each(function( index ) {
    var base64 = $(this).attr('src');
    featured_images.push(base64);
  });
   var mobile_banner = new Array();
   $( ".mobile_images_src" ).each(function( index ) {
    var base64 = $(this).attr('src');
    mobile_banner.push(base64);
  });
   var thumbnail_images = new Array();
   $(".thumbnail_images_src" ).each(function( index ) {
    var base64 = $(this).attr('src');
    thumbnail_images.push(base64);
  });
   var property_logo_images = new Array();
   $(".property_logos_src" ).each(function( index ) {
    var base64 = $(this).attr('src');
    property_logo_images.push(base64);
  });
   var data = {"property_type":property_type,"city":city,"top_picks":top_picks,"on_going":on_going,"completed":completed,"title":title,"slug":slug,"status":status,"location":location,"price":price,"possession":possession,"typology":typology,"footer_typology":footer_typology,"featured_images":featured_images,"banner_type":banner_type,"video_data":video_data,"mobile_video_data":mobile_video_data, "mobile_video_url": mobile_video_url,"banner_url":banner_url,"thumbnail_images":thumbnail_images,"property_logo_images":property_logo_images,"mobile_banner":mobile_banner,"is_pop_reload":is_pop_reload,"is_menu_bar":is_menu_bar,"insert_id":insert_id,"featured_img_alt":featured_img_alt,"featured_ial_mobile":featured_ial_mobile,"thumbnail_imagealt":thumbnail_imagealt,"map_imagealt":map_imagealt,"overview_imagealt":overview_imagealt,"resource_imagealt":resource_imagealt,};
 
   $.ajax({
    url: '<?=base_url()?>klconfig/saveBasicDetails',
    type: 'POST',
    data: JSON.stringify(data),
    contentType: 'application/json; charset=utf-8',
    datatype: 'JSON',
    async: true,
    success: function(data)
    {
      $("#preloader").hide();
      var value = JSON.parse(data);
      if(value.status=="success")
      {
        toastr.success("Basic details updated");

        $(".step").removeClass('active');
        $(".step-2").addClass('active');
        $(".step-2.step-pointer").css("pointer-events","auto");
      }
    }
  });
 }
});
$("form[name='amenity_details']").validate({
  rules: {
    amenity: "required"
  },
  errorPlacement: function(error, element) {
    if(element.attr("name") == "amenity") {
      error.appendTo(".error-amenity");
    }
    else
    {
      error.insertAfter(element);
    }
  },
  submitHandler: function(form, event) {
   $("#preloader").show(); 
   var insert_id = $("#insert_id").val();
   var amenities = $("#amenity").val();
   var data = {"amenities":amenities,"insert_id":insert_id}; 
   $.ajax({
    url: '<?=base_url()?>klconfig/saveAmenitiesDetails',
    type: 'POST',
    data: JSON.stringify(data),
    contentType: 'application/json; charset=utf-8',
    datatype: 'JSON',
    async: true,
    success: function(data)
    {
      $("#preloader").hide();
      var value = JSON.parse(data);
      if(value.status=="success")
      {
        toastr.success("Amenities updated");
        $(".step").removeClass('active');
        $(".step-4").addClass('active');
        if ($(".step-3").hasClass('done')) {
        }
        else
        {
          $(".step-3").addClass('done');
        }

        $(".step-4.step-pointer").css("pointer-events","auto");
      }
    }
  });
 }
});
$("form[name='resources_details']").validate({
  // rules: {
  //   file_brochure: "required",
  //   file_floor_plan: "required",
  //   file_master_plan: "required",
  //   file_virtual_tour: "required"
  // },
  errorPlacement: function(error, element) {
    if(element.attr("name") == "brochure") {
      error.appendTo(".error-brochure");
    }
    else if(element.attr("name") == "floor_plan") {
      error.appendTo(".error-floor_plan");
    }
    else if(element.attr("name") == "master_plan") {
      error.appendTo(".error-master_plan");
    }
    else if(element.attr("name") == "virtual_tour") {
      error.appendTo(".error-virtual_tour");
    }
    else
    {
      error.insertAfter(element);
    }
  },
  submitHandler: function(form, event) {
   $("#preloader").show(); 
   var resource_images_src = "";
   $(".resource_images_src" ).each(function( index ) {
    var base64 = $(this).attr('src');
    resource_images_src = base64;
  });
   var data1 = new FormData($('#resources_details')[0]);
   data1.append('resource_image', resource_images_src);
   $.ajax({
    url: '<?=base_url()?>klconfig/saveResources',
    type: 'POST',
    mimeType: "multipart/form-data",
    contentType: false,
    cache: false,
    processData: false,
    data: data1, 
    success: function(data)
    {
      $("#preloader").hide();
      var value = JSON.parse(data);
      if(value.status=="success")
      {
        toastr.success("Resources updated");
        $(".step").removeClass('active');
        $(".step-5").addClass('active');
        if ($(".step-4").hasClass('done')) {
        }
        else
        {
          $(".step-4").addClass('done');
        }

        $(".step-5.step-pointer").css("pointer-events","auto");
      }
    }
  });
 }
});
$("form[name='map_details']").validate({
  // rules: {
  //   file_map_image: "required"
  // },
  errorPlacement: function(error, element) {
    if(element.attr("name") == "file_map_image") {
      error.appendTo(".error-map_image");
    }
    else
    {
      error.insertAfter(element);
    }
  },
  submitHandler: function(form, event) {
   $("#preloader").show(); 
   var data1 = new FormData($('#map_details')[0]);
   $.ajax({
    url: '<?=base_url()?>klconfig/saveMapDetails',
    type: 'POST',
    mimeType: "multipart/form-data",
    contentType: false,
    cache: false,
    processData: false,
    data: data1, 
    success: function(data)
    {
      $("#preloader").hide();
      var value = JSON.parse(data);
      if(value.status=="success")
      {
        toastr.success("Map details updated");
        $(".step").removeClass('active');
        $(".step-6").addClass('active');
        if ($(".step-5").hasClass('done')) {
        }
        else
        {
          $(".step-5").addClass('done');
        }

        $(".step-6.step-pointer").css("pointer-events","auto");
      }
    }
  });
 }
});


$("form[name='construction_details']").validate({
  errorElement: 'span',
  rules: {
    construction_title_0: "required",
    construction_short_description_0: "required",
    file_construction_image_0: "required"
  },
  submitHandler: function(form, event) {
   $("#preloader").show(); 
   var construction_title = new Array();
   $( ".construction-title" ).each(function( index ) {
    var text = $(this).val();
    construction_title.push(text);
  });
   var construction_text = new Array();
   $( ".construction-text" ).each(function( index ) {
    var text = $(this).val();
    construction_text.push(text);
  });
  var construction_altdata = new Array();
   $( ".construction_altdata").each(function( index ) {
    var text = $(this).val();
    construction_altdata.push(text);
  });
   var construction_image = new Array();
   $(".construction_images_src" ).each(function( index ) {
    var base64 = $(this).attr('src');
    construction_image.push(base64);
  });
   var insert_id = $("#insert_id").val();
   var data = {"construction_title":construction_title,"construction_text":construction_text,"construction_alt":construction_altdata,"construction_image":construction_image,"insert_id":insert_id}; 
   $.ajax({
    url: '<?=base_url()?>klconfig/saveConstructionDetails',
    type: 'POST',
    data: JSON.stringify(data),
    contentType: 'application/json; charset=utf-8',
    datatype: 'JSON',
    async: true,
    success: function(data)
    {
      $("#preloader").hide();
      var value = JSON.parse(data);
      if(value.status=="success")
      {
        toastr.success("Construction details updated");
        $(".step").removeClass('active');
        $(".step-7").addClass('active');
        if ($(".step-6").hasClass('done')) {
        }
        else
        {
          $(".step-6").addClass('done');
        }
        $(".step-7.step-pointer").css("pointer-events","auto");
      }
    }
  });
 }
});


$("form[name='rera_details']").validate({
  errorElement: 'span',
  rules: {
    rera_title_0: "required",
    rera_short_description_0: "required",
    
  }
});
$('#rera_details').submit(function (e) {
  e.preventDefault();
    
   $("#preloader").show(); 
   var rera_title = new Array();
   $( ".rera-title" ).each(function( index ) {
    var text = $(this).val();
    rera_title.push(text);
  });
   var rera_text = new Array();
   $( ".rera-text" ).each(function( index ) {
    var text = $(this).val();
    rera_text.push(text);
  });
  
   var rera_image = new Array();
   $(".rera_images_src" ).each(function( index ) {
    var base64 = $(this).attr('src');
    rera_image.push(base64);
  });
   var insert_id = $("#insert_id").val();
   var data = {"rera_title":rera_title,"rera_text":rera_text,"rera_image":rera_image,"insert_id":insert_id}; 
   
  
   $.ajax({
    url: '<?=base_url()?>klconfig/savereraDetails',
    type: 'POST',
    data: JSON.stringify(data),
    contentType: 'application/json; charset=utf-8',
    datatype: 'JSON',
    async: true,
    success: function(data)
    {
      $("#preloader").hide();
      var value = JSON.parse(data);
      if(value.status=="success")
      {
        toastr.success("rera details updated");
        $(".step").removeClass('active');
        $(".step-7").addClass('active');
        if ($(".step-6").hasClass('done')) {
        }
        else
        {
          $(".step-6").addClass('done');
        }
        $(".step-7.step-pointer").css("pointer-events","auto");
      }
    }
    });
  
  });


$("form[name='projects_details']").validate({
  rules: {
    projects: "required"
  },
  errorPlacement: function(error, element) {
    if(element.attr("name") == "projects") {
      error.appendTo(".error-projects");
    }
    else
    {
      error.insertAfter(element);
    }
  },
  submitHandler: function(form, event) {
   $("#preloader").show(); 
   var insert_id = $("#insert_id").val();
   var projects = $("#projects").val();
   var data = {"projects":projects,"insert_id":insert_id}; 
   $.ajax({
    url: '<?=base_url()?>klconfig/saveProjectDetails',
    type: 'POST',
    data: JSON.stringify(data),
    contentType: 'application/json; charset=utf-8',
    datatype: 'JSON',
    async: true,
    success: function(data)
    {
      $("#preloader").hide();
      var value = JSON.parse(data);
      if(value.status=="success")
      {
        toastr.success("You may also like projects updated");
        $(".step").removeClass('active');
        $(".step-8").addClass('active');
        if ($(".step-7").hasClass('done')) {
        }
        else
        {
          $(".step-7").addClass('done');
        }
        $(".step-8.step-pointer").css("pointer-events","auto");
      }
    }
  });
 }
});
$("form[name='booking_details']").validate({
  errorElement: 'span',
  // rules: {
  //   booking_url: "required",
  //   booking_text: "required",
  //   file_back_image: "required"
  // },
  submitHandler: function(form, event) {
   $("#preloader").show(); 
   var data1 = new FormData($('#booking_details')[0]);
   $.ajax({
    url: '<?=base_url()?>klconfig/saveBookingDetails',
    type: 'POST',
    mimeType: "multipart/form-data",
    contentType: false,
    cache: false,
    processData: false,
    data: data1, 
    success: function(data)
    {
      $("#preloader").hide();
      var value = JSON.parse(data);
      if(value.status=="success")
      {
        toastr.success("Booking details updated");
        $(".step").removeClass('active');
        $(".step-9").addClass('active');
        if ($(".step-8").hasClass('done')) {
        }
        else
        {
          $(".step-8").addClass('done');
        }
        $(".step-9.step-pointer").css("pointer-events","auto");
      }
    }
  });
 }
});
$("form[name='seo_details']").validate({
  errorElement: 'span',
  // rules: {
  //   meta_title: "required",
  //   meta_description: "required",
  //   meta_tags: "required",
  //   h1_tag: "required",
  //   h2_tag: "required"
  // },
  submitHandler: function(form, event) {
   $("#preloader").show(); 
   var data1 = new FormData($('#seo_details')[0]);
   $.ajax({
    url: '<?=base_url()?>klconfig/saveSeoDetails',
    type: 'POST',
    mimeType: "multipart/form-data",
    contentType: false,
    cache: false,
    processData: false,
    data: data1, 
    success: function(data)
    {
      $("#preloader").hide();
      var value = JSON.parse(data);
      if(value.status=="success")
      {
        toastr.success("SEO details updated");
        $(".step").removeClass('active');
        $(".step-10").addClass('active');
        if ($(".step-9").hasClass('done')) {
        }
        else
        {
          $(".step-9").addClass('done');
        }
        $(".step-10.step-pointer").css("pointer-events","auto");
        //window.location.href = "<?=base_url()?>klconfig/properties";
      }
    }
  });
 }
});

$("form[name='media_pixcel_details']").validate({
  errorElement: 'span',
  // rules: {
  //   meta_title: "required",
  //   meta_description: "required",
  //   meta_tags: "required",
  //   h1_tag: "required",
  //   h2_tag: "required"
  // },
  submitHandler: function(form, event) {
   $("#preloader").show(); 
   var data1 = new FormData($('#media_pixcel_details')[0]);
   $.ajax({
    url: '<?=base_url()?>klconfig/saveMediaPixelDetails',
    type: 'POST',
    mimeType: "multipart/form-data",
    contentType: false,
    cache: false,
    processData: false,
    data: data1, 
    success: function(data)
    {
      toastr.success("Media pixcel code updated");
      $("#preloader").hide();
      var value = JSON.parse(data);
      if(value.status=="success")
      {
         $(".step").removeClass('active');
        $(".step-11").addClass('active');
        if ($(".step-10").hasClass('done')) {
        }
        else
        {
          $(".step-10").addClass('done');
        }
        //window.location.href = "<?=base_url()?>klconfig/properties";
      }
    }
  });
 }
});

/*new code rks */


$("form[name='commercial_footprint']").validate({
  // rules: {
  //   file_map_image: "required"
  // },
  errorPlacement: function(error, element) {
    if(element.attr("name") == "file_map_image") {
      error.appendTo(".error-map_image");
    }
    else
    {
      error.insertAfter(element);
    }
  },
  submitHandler: function(form, event) {
   $("#preloader").show(); 
   var data1 = new FormData($('#commercial_footprint')[0]);
   $.ajax({
    url: '<?=base_url()?>klconfig/saveCfootprintDetails',
    type: 'POST',
    mimeType: "multipart/form-data",
    contentType: false,
    cache: false,
    processData: false,
    data: data1, 
    success: function(data)
    {
      $("#preloader").hide();
      var value = JSON.parse(data);
      if(value.status=="success")
      {
        toastr.success("Commercial Footprints details updated");
        $(".step").removeClass('active');
        $(".step-11").addClass('active');
        if ($(".step-10").hasClass('done')) {
        }
        else
        {
          $(".step-10").addClass('done');
        }

       // $(".step-11.step-pointer").css("pointer-events","auto");
      }
    }
  });
 }
});




$("form[name='best_for_investment']").validate({
  // rules: {
  //   file_map_image: "required"
  // },
  errorPlacement: function(error, element) {
    if(element.attr("name") == "file_map_image") {
      error.appendTo(".error-map_image");
    }
    else
    {
      error.insertAfter(element);
    }
  },
  submitHandler: function(form, event) {
   $("#preloader").show(); 
   var data1 = new FormData($('#best_for_investment')[0]);
   $.ajax({
    url: '<?=base_url()?>klconfig/saveBestforinvestmentDetails',
    type: 'POST',
    mimeType: "multipart/form-data",
    contentType: false,
    cache: false,
    processData: false,
    data: data1, 
    success: function(data)
    {
      $("#preloader").hide();
      var value = JSON.parse(data);
      if(value.status=="success")
      {
        toastr.success("Best for investment updated");
        $(".step").removeClass('active');
        $(".step-12").addClass('active');
        if ($(".step-11").hasClass('done')) {
        }
        else
        {
          $(".step-11").addClass('done');
        }

        $(".step-12.step-pointer").css("pointer-events","auto");
      }
    }
  });
 }
});













$("form[name='ideal_for_professionals']").validate({
  // rules: {
  //   file_map_image: "required"
  // },
  errorPlacement: function(error, element) {
    if(element.attr("name") == "file_map_image") {
      error.appendTo(".error-map_image");
    }
    else
    {
      error.insertAfter(element);
    }
  },
  submitHandler: function(form, event) {
   $("#preloader").show(); 
   var data1 = new FormData($('#ideal_for_professionals')[0]);
   $.ajax({
    url: '<?=base_url()?>klconfig/saveIdealforprofessionalsDetails',
    type: 'POST',
    mimeType: "multipart/form-data",
    contentType: false,
    cache: false,
    processData: false,
    data: data1, 
    success: function(data)
    {
      $("#preloader").hide();
      var value = JSON.parse(data);
      if(value.status=="success")
      {
      /*  toastr.success("Ideal for professionals details updated");
        $(".step").removeClass('active');
        $(".step-12").addClass('active');
        if ($(".step-13").hasClass('done')) {
        }
        else
        {
          $(".step-13").addClass('done');
        }

        $(".step-12.step-pointer").css("pointer-events","auto");
        */
        window.location.href = "<?=base_url()?>klconfig/properties";
      }
    }
  });
 }
});

/*

$("form[name='commercial_footprint']").validate({
  rules: {
    projects: "required"
  },
   submitHandler: function(form, event) {
   $("#preloader").show(); 
   var insert_id = $("#insert_id").val();
   var cfootprint_short = $("#cfootprint_short").val();
   var cfootprint_desc = $("#cfootprint_desc").val();
   var cfootprint_image_one = $("#cfootprint_image_one").val();
   var cfootprint_image_two = $("#cfootprint_image_two").val();
   var cfootprint_image_three = $("#cfootprint_image_three").val();
   var cfootprint_image_four = $("#cfootprint_image_four").val();
   var cfootprint_image_five = $("#cfootprint_image_five").val();
   var cfootprint_image_six = $("#cfootprint_image_six").val();

   var data = {"projects":projects,"insert_id":insert_id}; 
   $.ajax({
    url: '<?=base_url()?>klconfig/saveCfootprintDetails',
    type: 'POST',
    data: JSON.stringify(data),
    contentType: 'application/json; charset=utf-8',
    datatype: 'JSON',
    async: true,
    success: function(data)
    {
      //console.log(data);
      $("#preloader").hide();

      var value = JSON.parse(data);
      if(value.status=="success")
      {
        toastr.success("You may also like projects updated");
        $(".step").removeClass('active');
        $(".step-11").addClass('active');
        if ($(".step-10").hasClass('done')) {
        }
        else
        {
          $(".step-10").addClass('done');
        }
        $(".step-11.step-pointer").css("pointer-events","auto");
      }
    }
  });
 }
});
*/

/*new code rks*/









var oic = "<?=count($oiarr)?>";
function addMoreOverviewImages()
{
  if (oic<=30) {
    $(".overview_more_images_section").append('<div class="row overview_images_more_inner_'+oic+'"> <div class="col m5 s11"> <div class="file-field input-field"> <div class="btn"> <span>Choose(500 x 644)</span> <input type="file" id="overview_images_more_'+oic+'" name="overview_images_more_'+oic+'" onchange="imagesOverview(this,'+oic+')"> </div> <div class="file-path-wrapper"> <input class="validate file-path file-path-overview" type="text" id="image_overview_more_'+oic+'" name="image_overview_more_'+oic+'" placeholder="Overview image(500 x 644)"> <span class="error-image_overview_more_'+oic+'"></span> </div> </div> <div class="overview_images_box_more_'+oic+' overview_images_box_more"> </div> </div><div class="input-field col m6 s11"> <label for="short_description">Text:</label> <textarea id="overview_image_more_text_'+oic+'" name="overview_image_more_text_'+oic+'" data-id="'+oic+'" class="materialize-textarea overview_text_more"></textarea> <span class="overview_image_more_text_'+oic+'"></span> </div><div class="input-field col m6 s11"> <label for="over_alt">Alt tag:</label>  <input type="text" id="over_alt_'+oic+'" name="over_alt_'+oic+'"  data-id="0" class="materialize-text over_alt" style="height: 101px;"><span class="over_alt_'+oic+'"></span> </div><div class="input-field col m1 s1"> <button class="waves-effect waves-light btn gradient-45deg-red-pink z-depth-4 mr-1 mb-2" type="button" onclick="removeOverviewSection('+oic+')">X</button> </div></div>');
    $('.file-path-overview').each(function () {
      $(this).rules("add", {
        required: true
      });
    });
    // $('.overview_text_more').each(function () {
    //   $(this).rules("add", {
    //     required: true
    //   });
    // });
    oic++;
  }
}

var con = "<?=count($construction_details)?>";
function addMoreConstruction()
{
  $(".construction_section").append('<div class="row construction_section_inner_'+con+'" style="box-shadow: 0px 0px 1px 0 rgba(123,31,162,.5);padding:5px;"> <div class="input-field col m5 s11"> <label for="construction_title_'+con+'">Title text:</label> <input type="text" class="validate construction-title" name="construction_title_'+con+'" id="construction_title_'+con+'"> <span class="error-construction_title_'+con+'"></span> </div> <div class="input-field col m5 s11"> <label for="construction_short_description_'+con+'">Short text:</label> <textarea id="construction_short_description_'+con+'" name="construction_short_description_'+con+'" class="materialize-textarea construction-text" style=""></textarea> <span class="error-construction_short_description_'+con+'"></span> </div> <div class="input-field col m5 s11"> <label for="construction_altdata_'+con+'">Alt tag:</label> <input type="text" class="validate construction-alt" name="construction_altdata_'+con+'" id="construction_altdata_'+con+'"> <span class="error-construction_altdata_'+con+'"></span> </div><div class="col s10"> <div class="file-field input-field"> <div class="btn"> <span>Choose</span> <input type="file" id="construction_image_'+con+'" name="construction_image_'+con+'" onchange="imagesConstruction(this,'+con+')"> </div> <div class="file-path-wrapper"> <input class="validate file-path file-path-construction" type="text" id="file_construction_image_'+con+'" name="file_construction_image_'+con+'" placeholder="Construction image"> <span class="error-construction_image"></span> </div> </div> <div class="construction_images_box_'+con+' construction_images_box"> </div> </div><div class="input-field col m1 s1"> <button class="waves-effect waves-light btn gradient-45deg-red-pink z-depth-4 mr-1 mb-2" type="button" onclick="removeConstructionSection('+con+')">X</button> </div> </div>');
  $('.construction-title').each(function () {
    $(this).rules("add", {
      required: true
    });
  });
  $('.construction-text').each(function () {
    $(this).rules("add", {
      required: true
    });
  });
  $('.file-path-construction').each(function () {
    $(this).rules("add", {
      required: true
    });
  });
  con++;
}


var rera = "<?=count($rera_details)?>";
function addMorerera()
{
  $(".rera_section").append('<div class="row rera_section_inner_'+rera+'" style="box-shadow: 0px 0px 1px 0 rgba(123,31,162,.5);padding:5px;"> <div class="input-field col m5 s11"> <label for="rera_title_'+rera+'">Title text:</label> <input type="text" class="validate rera-title" name="rera_title_'+rera+'" id="rera_title_'+rera+'"> <span class="error-rera_title_'+rera+'"></span> </div> <div class="input-field col m5 s11"> <label for="rera_short_description_'+rera+'">Short text:</label> <textarea id="rera_short_description_'+rera+'" name="rera_short_description_'+rera+'" class="materialize-textarea rera-text" style=""></textarea> <span class="error-rera_short_description_'+rera+'"></span> </div><div class="col s10"> <div class="file-field input-field"> <div class="btn"> <span>Choose</span> <input type="file" id="rera_image_'+rera+'" name="rera_image_'+rera+'" onchange="imagesrera(this,'+rera+')"> </div> <div class="file-path-wrapper"> <input class="validate file-path file-path-rera" type="text" id="file_rera_image_'+rera+'" name="file_rera_image_'+rera+'" placeholder="rera image"> </div> </div> <div class="rera_images_box_'+rera+' rera_images_box"> </div> </div><div class="input-field col m1 s1"> <button class="waves-effect waves-light btn gradient-45deg-red-pink z-depth-4 mr-1 mb-2" type="button" onclick="removereraSection('+rera+')">X</button> </div> </div>');
  $('.rera-title').each(function () {
    $(this).rules("add", {
      required: true
    });
  });
  $('.rera-text').each(function () {
    $(this).rules("add", {
      required: true
    });
  });
  $('.file-path-rera').each(function () {
    $(this).rules("add", {
      required: true
    });
  });
  rera++;
}


var exp = "<?=count($kalpataru_experience)?>";
function addMoreExperience()
{
  $(".experience_section").append('<div class="row experience_section_inner_'+exp+'" style="box-shadow: 0px 0px 1px 0 rgba(123,31,162,.5);padding:5px;"> <div class="input-field col m5 s11"> <label for="experience_title_'+exp+'">Title text:</label> <input type="text" class="validate experience-title" name="experience_title_'+exp+'" id="experience_title_'+exp+'"> <span class="error-experience_title_'+exp+'"></span> </div> <div class="input-field col m5 s11"> <label for="experience_short_description_'+exp+'">Short text:</label> <textarea id="experience_short_description_'+exp+'" name="experience_short_description_'+exp+'" class="materialize-textarea experience-text" style=""></textarea> <span class="error-experience_short_description_'+exp+'"></span> </div> <div class="col s10"> <div class="file-field input-field"> <div class="btn"> <span>Choose</span> <input type="file" id="experience_image_'+exp+'" name="experience_image_'+exp+'" onchange="imagesExperience(this,'+exp+')"> </div> <div class="file-path-wrapper"> <input class="validate file-path file-path-experience" type="text" id="file_experience_image_'+exp+'" name="file_experience_image_'+exp+'" placeholder="experience image"> <span class="error-experience_image"></span> </div> </div> <div class="experience_images_box_'+exp+' experience_images_box"> </div> </div><div class="input-field col m1 s1"> <button class="waves-effect waves-light btn gradient-45deg-red-pink z-depth-4 mr-1 mb-2" type="button" onclick="removeExperienceSection('+exp+')">X</button> </div> </div>');
  $('.experience-title').each(function () {
    $(this).rules("add", {
      required: true
    });
  });
  $('.experience-text').each(function () {
    $(this).rules("add", {
      required: true
    });
  });
  $('.file-path-experience').each(function () {
    $(this).rules("add", {
      required: true
    });
  });
  exp++;
}
var way = "<?=count($kalpataru_way)?>";
function addMoreWay()
{
  $(".way_section").append('<div class="row way_section_inner_'+way+'" style="box-shadow: 0px 0px 1px 0 rgba(123,31,162,.5);padding:5px;"> <div class="input-field col m5 s11"> <label for="way_title_'+way+'">Title text:</label> <input type="text" class="validate way-title" name="way_title_'+way+'" id="way_title_'+way+'"> <span class="error-way_title_'+way+'"></span> </div> <div class="input-field col m5 s11"> <label for="way_short_description_'+way+'">Short text:</label> <textarea id="way_short_description_'+way+'" name="way_short_description_'+way+'" class="materialize-textarea way-text" style=""></textarea> <span class="error-way_short_description_'+way+'"></span> </div> <div class="col s10"> <div class="file-field input-field"> <div class="btn"> <span>Choose</span> <input type="file" id="way_image_'+way+'" name="way_image_'+way+'" onchange="imagesWay(this,'+way+')"> </div> <div class="file-path-wrapper"> <input class="validate file-path file-path-way" type="text" id="file_way_image_'+way+'" name="file_way_image_'+way+'" placeholder="way image"> <span class="error-way_image"></span> </div> </div> <div class="way_images_box_'+way+' way_images_box"> </div> </div><div class="input-field col m1 s1"> <button class="waves-effect waves-light btn gradient-45deg-red-pink z-depth-4 mr-1 mb-2" type="button" onclick="removeWaySection('+way+')">X</button> </div> </div>');
  $('.way-title').each(function () {
    $(this).rules("add", {
      required: true
    });
  });
  $('.way-text').each(function () {
    $(this).rules("add", {
      required: true
    });
  });
  $('.file-path-way').each(function () {
    $(this).rules("add", {
      required: true
    });
  });
  way++;
}

var ov = "<?=count($oiarr)?>";
function imagesOverview(input,type) {
  if (input.files) {
   var filesAmount = input.files.length;
   for (var i = 0; i < filesAmount; i++)   {
    var reader = new FileReader();
    reader.onload = function(event) {
     var src = event.target.result;  
     var filename="";
     $(".overview_images_box_more_"+type).html('<span class="img-e-'+ov+'"><img src="'+src+'" style="height:150px;margin-right:3px;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.12), 0 1px 5px 0 rgba(0,0,0,.2);margin:5px;" class="img-thumbnail overview_more_images_src overview_more_images_src_'+type+'"></span>');
     ov++;
   }
   reader.readAsDataURL(input.files[i]);
 }
}
}
function removeOverviewSection(a)
{
  $(".overview_images_more_inner_"+a).remove();
  oic--;
}
var co = <?=count($construction_details)?>;
function imagesConstruction(input,type) {
  if (input.files) {
   var filesAmount = input.files.length;
   for (var i = 0; i < filesAmount; i++)   {
    var reader = new FileReader();
    reader.onload = function(event) {
     var src = event.target.result;  
     var filename="";
     $(".construction_images_box_"+type).html('<span class="img-e-'+co+'"><img src="'+src+'" style="height:150px;margin-right:3px;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.12), 0 1px 5px 0 rgba(0,0,0,.2);margin:5px;" class="img-thumbnail construction_images_src construction_images_src_'+type+'"></span>');
     co++;
   }
   reader.readAsDataURL(input.files[i]);
 }
}
}

var rera= <?=count($rera_details)?>;
function imagesrera(input,type) {
  if (input.files) {
   var filesAmount = input.files.length;
   for (var i = 0; i < filesAmount; i++)   {
    var reader = new FileReader();
    reader.onload = function(event) {
     var src = event.target.result;  
     var filename="";
     $(".rera_images_box_"+type).html('<span class="img-e-'+rera+'"><img src="'+src+'" style="height:150px;margin-right:3px;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.12), 0 1px 5px 0 rgba(0,0,0,.2);margin:5px;" class="img-thumbnail rera_images_src rera_images_src_'+type+'"></span>');
     rera++;
   }
   reader.readAsDataURL(input.files[i]);
 }
}
}

var ex = "<?=count($kalpataru_experience)?>";
function imagesExperience(input,type) {
  if (input.files) {
   var filesAmount = input.files.length;
   for (var i = 0; i < filesAmount; i++)   {
    var reader = new FileReader();
    reader.onload = function(event) {
     var src = event.target.result;  
     var filename="";
     $(".experience_images_box_"+type).html('<span class="img-e-'+ex+'"><img src="'+src+'" style="height:150px;margin-right:3px;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.12), 0 1px 5px 0 rgba(0,0,0,.2);margin:5px;" class="img-thumbnail experience_images_src experience_images_src_'+type+'"></span>');
     ex++;
   }
   reader.readAsDataURL(input.files[i]);
 }
}
}
var w = "<?=count($kalpataru_way)?>";
function imagesWay(input,type) {
  if (input.files) {
   var filesAmount = input.files.length;
   for (var i = 0; i < filesAmount; i++)   {
    var reader = new FileReader();
    reader.onload = function(event) {
     var src = event.target.result;  
     var filename="";
     $(".way_images_box_"+type).html('<span class="img-e-'+w+'"><img src="'+src+'" style="height:150px;margin-right:3px;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.12), 0 1px 5px 0 rgba(0,0,0,.2);margin:5px;" class="img-thumbnail way_images_src way_images_src_'+type+'"></span>');
     w++;
   }
   reader.readAsDataURL(input.files[i]);
 }
}
}
var awad = "<?=count($kalpataru_awards)?>";
function imagesAward(input,type) {
  if (input.files) {
   var filesAmount = input.files.length;
   for (var i = 0; i < filesAmount; i++)   {
    var reader = new FileReader();
    reader.onload = function(event) {
     var src = event.target.result;  
     var filename="";
     $(".award_images_box_"+type).html('<span class="img-e-'+awad+'"><img src="'+src+'" style="height:150px;margin-right:3px;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.12), 0 1px 5px 0 rgba(0,0,0,.2);margin:5px;" class="img-thumbnail award_images_src award_images_src_'+type+'"></span>');
     awad++;
   }
   reader.readAsDataURL(input.files[i]);
 }
}
}
var exprt = "<?=count($kalpataru_experts)?>";
function imagesExpert(input,type) {
  if (input.files) {
   var filesAmount = input.files.length;
   for (var i = 0; i < filesAmount; i++)   {
    var reader = new FileReader();
    reader.onload = function(event) {
     var src = event.target.result;  
     var filename="";
     $(".expert_images_box_"+type).html('<span class="img-e-'+exprt+'"><img src="'+src+'" style="height:150px;margin-right:3px;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.12), 0 1px 5px 0 rgba(0,0,0,.2);margin:5px;" class="img-thumbnail expert_images_src expert_images_src_'+type+'"></span>');
     exprt++;
   }
   reader.readAsDataURL(input.files[i]);
 }
}
}

function removeExperienceSection(a)
{
  $(".experience_section_inner_"+a).remove();
  exp--;
}
function removeWaySection(a)
{
  $(".way_section_inner_"+a).remove();
  way--;
}
function removeConstructionSection(a)
{
  $(".construction_section_inner_"+a).remove();
  c--;
}
function removereraSection(a)
{
  $(".rera_section_inner_"+a).remove();
  rera--;
}

function removeVideoSection(a)
{
  $(".video_section_inner_"+a).remove();
  vid--;
}
function removeAwardSection(a)
{
  $(".award_section_inner_"+a).remove();
  awa--;
}
function removeExpertSection(a)
{
  $(".expert_section_inner_"+a).remove();
  expt--;
}
function getLocations(city)
{
  $("#preloader").show();
  var city_id = $(city).val();
  var data = {"city_id":city_id}; 
  $.ajax({
    url: '<?=base_url()?>klconfig/getLocations',
    type: 'POST',
    data: JSON.stringify(data),
    contentType: 'application/json; charset=utf-8',
    datatype: 'JSON',
    async: true,
    success: function(data)
    {
      $("#preloader").hide();
      var value = JSON.parse(data);
      var options = ' <select id="location" name="location" required type="text" class="validate error"><option disabled selected value="">Select Location</option>';
      for (var i = 0; i < value.locations.length; i++) {
        options+='<option value="'+value.locations[i].id+'">'+value.locations[i].location+'</option>';
      }
      options+='</select><label>Select Location</label>';
      $(".location-data").html(options);
      $('#location').css({
        position: 'absolute',
        display: 'inline',
        height: 0,
        padding: 0,
        border: '1px solid rgba(255,255,255,0)',
        width: 0
      });
      $('#location').formSelect();
    }
  });
}
function changeBannerType(a)
{
  var type = $(a).val();
  if(type=='image')
  {
    $('.banner-div').html('<div class="col s12"> <label>Select Banner</label> </div><div class="file-field input-field col s12"> <div class="btn"> <span>Choose</span> <input type="file" id="featured_images" name="featured_images" onchange="imagesPreview(this,1)"> </div> <div class="file-path-wrapper"> <input class="validate file-path-basic" type="text" id="image_name" name="image_name" placeholder="Featured Banner Image"> <span class="error-image_name"></span> </div> </div> <div class="featured_images_box col s12"> </div><div class="col s12"> <label>Select Mobile Banner</label> </div><div class="file-field input-field col s12"> <div class="btn"> <span>Choose</span> <input type="file" id="featured_images_mobile" name="featured_images_mobile" onchange="imagesPreview(this,8)"> </div> <div class="file-path-wrapper"> <input class="validate file-path file-path-basic" type="text" id="banner_url_mobile" name="banner_url_mobile" placeholder="Mobile Banner Image"> <span class="error-image_name"></span> </div> </div> <div class="mobile_images_box col s12"> </div>');
  }
  else
  {
    $('.banner-div').html('<div class="file-field input-field col s12"> <div class="btn"> <span>Choose</span> <input type="file" onchange = "uploadVideo()" id="featured_video" name="featured_video"> </div> <div class="file-path-wrapper"> <input class="validate file-path file-path-basic" type="text" id="video_name" name="video_name" placeholder="Upload Banner Video"> <span class="error-video_name"></span> </div> </div><div class="col m12" style="text-align: center;font-weight: bold;">--OR--</div> <div class="input-field col m12 s12"> <label for="banner_url">Video url</label> <input type="text" class="validate" name="banner_url" id="banner_url"><input type="hidden" id="video_data" name="video_data"> </div><div class="file-field input-field col s12"> <div class="btn"> <span>Choose</span> <input type="file" onchange = "uploadVideoMobile()" id="mobile_featured_video" name="mobile_featured_video"> </div> <div class="file-path-wrapper"> <input class="validate file-path file-path-basic" type="text" id="mobile_video_name" name="mobile_video_name" placeholder="Upload Banner Video"> <span class="error-mobile_video_name"></span> </div> </div><div class="col m12" style="text-align: center;font-weight: bold;">--OR--</div> <div class="input-field col m12 s12"> <label for="mobile_video_url">Mobile Video url</label> <input type="text" class="validate" name="mobile_video_url" id="mobile_video_url"><input type="hidden" id="mobile_video_data" name="mobile_video_data"> </div>');
  }
}
function uploadVideo() {
  $("#preloader").show();
  jQuery.ajax({
    type: 'POST',
    url:'<?=base_url()?>klconfig/uploadVideo',
    data: new FormData($("#basic_details")[0]),
    processData: false, 
    contentType: false, 
    success: function(returnval) {
     $("#video_data").val(returnval);
     $("#preloader").hide();
   }
 });
}

function uploadVideoMobile() {
  $("#preloader").show();
  jQuery.ajax({
    type: 'POST',
    url:'<?=base_url()?>klconfig/mobileUploadVideo',
    data: new FormData($("#basic_details")[0]),
    processData: false, 
    contentType: false, 
    success: function(returnval) {
     $("#mobile_video_data").val(returnval);
     $("#preloader").hide();
   }
 });
}
function removeVideo()
{
  $('.video-url-div').remove();
  $('#video_data').val('');
}
$( ".step" ).click(function() {
  $(".step").removeClass('active');
  $(this).addClass('active');
});

function removeVideo1()
{
  $('.video-url-div1').remove();
  $('#mobile_video_data').val('');
}
$( ".step" ).click(function() {
  $(".step").removeClass('active');
  $(this).addClass('active');
});
function removePropertyLogo(){
  $(document).find('.property_logos_src').attr('src','');
}
function removeResource(this_attr,for_type,prop_id){
  if(confirm('Are you sure you want to remove this?')){
    $("#preloader").show(); 
    var type_name = for_type;
    $.ajax({
      url: '<?=base_url()?>klconfig/removeResource',
      data: {for_type:for_type,property:prop_id},
      type: 'post',
      dataType: 'json',
      success: function(returnval) {
        if(returnval.status == 'true'){
          toastr.success("Resources updated");
          $('#file_'+type_name).val('');
          $(this_attr).parent().remove();
        }else{
          toastr.error("Error updating resource");
        }
        $("#preloader").hide();
     }
    })
  }
}
</script>
</body>
</html>