
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
  <style type="text/css">
    /*.step-pointer{
      pointer-events: none;
      }*/
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
                        <h4 class="card-title">Edit Property</h4>
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
                                    <option value="signature" <?php if ($properties->property_type=='signature') { echo 'selected'; }?>>Signature</option>
                                  </select>
                                </div>
                                <div class="input-field col s12 m6">
                                  <div><label>Property type</label></div>
                                  <div class="input-field col s6" style="margin: 0px;">
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
                                  <div class="input-field col s6" style="margin: 0px;">
                                    <label>
                                      <?php
                                      $chk_on = "";
                                      if ($properties->on_going) {
                                        $chk_on = "checked";
                                      }
                                      ?>
                                      <input type="checkbox" id="on_going" <?=$chk_on?> name="on_going" class="filled-in"/>
                                      <span>ON GOING</span>
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
                                <label for="status">Status:</label>
                                <input type="text" id="status" class="validate" name="status" value="<?=$properties->status?>">
                                <span class="error-status"></span>
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
                            </div>
                            <div class="row">
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
                            </div>
                            <div class="row">
                              <div class="file-field input-field col s12">
                                <div class="btn">
                                  <span>Choose</span>
                                  <input type="file" id="thumbnail_images" name="thumbnail_images" onchange="imagesPreview(this,11)">
                                </div>
                                <div class="file-path-wrapper">
                                  <input class="validate file-path-basic" type="text" id="thumbnail_image_name" name="thumbnail_image_name" placeholder="Thumbnail Image">
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
                                <label for="short_description">Short Description:</label>
                                <input type="text" class="validate" id="short_description" name="short_description" value="<?=$properties->short_description?>">
                                <span class="error-short_description"></span>
                              </div>
                            </div>
                            <div class="row">
                             <div class="col s12">
                              <div class="input-field">
                                <select data-placeholder="Select amenities" class="select2 select2-eminity-overview browser-default"
                                id="overview_Amenity" name="overview_Amenity" multiple="multiple">
                                <?php 
                                $amarray = explode(",",$properties->overview_amenity);
                                  // print_r($amarray);
                                foreach ($amenities as $key => $valueam) { 
                                  $amselected = "";
                                  if (in_array($valueam->id, $amarray)) {
                                    $amselected = "selected";
                                  }                                   
                                  echo '<option value="'.$valueam->id.'" '.$amselected.'>'.$valueam->title.'</option>';
                                }
                                ?>
                              </select>
                              <span class="error-overview_Amenity"></span>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="file-field input-field col s12">
                            <div class="btn">
                              <span>Choose</span>
                              <input type="file" id="overview_images" name="overview_images" onchange="imagesPreview(this,2)">
                            </div>
                            <div class="file-path-wrapper">
                              <?php
                              $oviarr = explode("/",$properties->overview_image);
                              $imgnameov = array_pop($oviarr);
                              ?>
                              <input class="validate file-path file-path-overview" type="text" id="image_overview" name="image_overview" placeholder="Overview image" value="<?=$imgnameov?>">
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
                                    <span>Choose</span>
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
                              <textarea id="overview_image_more_text_<?=$key?>" name="overview_image_more_text_<?=$key?>" data-id="0" class="materialize-textarea overview_text_more" style="height: 101px;"><?=$itarr[1]?></textarea>
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
                                <span>Choose</span>
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
                $virtual_tourarr = explode("/", $properties->virtual_tour);
                $virtual_tour_name = array_pop($virtual_tourarr);
                ?>
                <input type="hidden" class="insert_id" id="insert_id" name="insert_id" value="<?=$properties->id?>">
                <div class="row">
                 <div class="file-field input-field col s10">
                  <div class="btn">
                    <span>Choose</span>
                    <input type="file" id="brochure" name="brochure" multiple onchange="imagesPreview(this,1)">
                  </div>
                  <div class="file-path-wrapper">
                    <input class="validate file-path file-path-basic" type="text" id="file_brochure" name="file_brochure" placeholder="Brochure" value="<?=$brochur_name?>">
                    <span class="error-brochure"></span>
                  </div>
                </div>
                <div class="file-field input-field col s10">
                  <div class="btn">
                    <span>Choose</span>
                    <input type="file" id="floor_plan" name="floor_plan" multiple onchange="imagesPreview(this,1)">
                  </div>
                  <div class="file-path-wrapper">
                    <input class="validate file-path file-path-basic" type="text" id="file_floor_plan" name="file_floor_plan" placeholder="Floor Plan" value="<?=$floor_plan_name?>">
                    <span class="error-floor_plan"></span>
                  </div>
                </div>
                <div class="file-field input-field col s10">
                  <div class="btn">
                    <span>Choose</span>
                    <input type="file" id="master_plan" name="master_plan" multiple onchange="imagesPreview(this,1)">
                  </div>
                  <div class="file-path-wrapper">
                    <input class="validate file-path file-path-basic" type="text" id="file_master_plan" name="file_master_plan" placeholder="Master Plan" value="<?=$master_plan_name?>">
                    <span class="error-master_plan"></span>
                  </div>
                </div>
                <div class="file-field input-field col s10">
                  <div class="btn">
                    <span>Choose</span>
                    <input type="file" id="virtual_tour" name="virtual_tour" multiple onchange="imagesPreview(this,1)">
                  </div>
                  <div class="file-path-wrapper">
                    <input class="validate file-path file-path-basic" type="text" id="file_virtual_tour" name="file_virtual_tour" placeholder="Virtual Tour" value="<?=$virtual_tour_name?>">
                    <span class="error-virtual_tour"></span>
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
        <li class="step step-5 step-pointer">
          <div class="step-title waves-effect">Locate</div>
          <div class="step-content">
            <form id="map_details" name="map_details">
              <input type="hidden" class="insert_id" id="insert_id" name="insert_id" value="<?=$properties->id?>">
              <div class="row">
                <div class="file-field input-field col s12">
                  <div class="btn">
                    <span>Choose</span>
                    <input type="file" id="map_image" name="map_image" multiple onchange="imagesPreview(this,3)">
                  </div>
                  <div class="file-path-wrapper">
                    <?php
                    $maparr = explode("/", $properties->map_image);
                    $map_image_name = array_pop($maparr);
                    ?>
                    <input class="validate file-path file-path-basic" type="text" id="file_map_image" name="file_map_image" placeholder="Map Image" value="<?=$map_image_name?>">
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
          <div class="step-title waves-effect">Construction Update</div>
          <div class="step-content">
            <form id="construction_details" name="construction_details">
              <div class="construction_section">
                <?php
                foreach ($construction_details as $key => $valuecons) {
                  $conarr = explode("/",$valuecons->image);
                  $cimgname = array_pop($conarr);
                  ?>
                  <div class="row construction_section_inner_<?=$key?>" style="box-shadow: 0px 0px 1px 0 rgba(123,31,162,.5);padding:5px;">
                    <div class="input-field col m5 s11">
                      <label for="construction_title_<?=$key?>">Title text:</label>
                      <input type="text" class="validate construction-title" name="construction_title_<?=$key?>" id="construction_title_<?=$key?>" value="<?=$valuecons->title?>">
                      <span class="error-construction_title_<?=$key?>"></span>
                    </div> 
                    <div class="input-field col m5 s11">
                      <label for="construction_short_description_<?=$key?>">Short text:</label>
                      <textarea id="construction_short_description_<?=$key?>" name="construction_short_description_<?=$key?>" data-id="0" class="materialize-textarea construction-text" style="height: 101px;"><?=$valuecons->text?></textarea>
                      <span class="error-construction_short_description_<?=$key?>"></span>
                    </div>
                    <div class="col s10">
                      <div class="file-field input-field">
                        <div class="btn">
                          <span>Choose</span>
                          <input type="file" id="construction_image_<?=$key?>" name="construction_image_<?=$key?>" onchange="imagesConstruction(this,<?=$key?>)">
                        </div>
                        <div class="file-path-wrapper">
                          <input class="validate file-path file-path-construction" type="text" id="file_construction_image_<?=$key?>" name="file_construction_image_<?=$key?>" placeholder="Construction image" value="<?=$cimgname?>">
                          <span class="error-construction_image"></span>
                        </div>
                      </div>
                      <div class="construction_images_box_<?=$key?> construction_images_box">
                        <span class="img-ec-<?=$key?>"><img src="<?=$valuecons->image?>" style="height:150px;margin-right:3px;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.12), 0 1px 5px 0 rgba(0,0,0,.2);margin:5px;" class="img-thumbnail construction_images_src construction_images_src_<?=$key?>"></span>
                      </div> 
                    </div> 
                    <?php 
                    if ($key>0) {                    
                      ?>
                      <div class="input-field col m1 s1"> <button class="waves-effect waves-light btn gradient-45deg-red-pink z-depth-4 mr-1 mb-2" type="button" onclick="removeConstructionSection(<?=$key?>)">X</button> </div>
                      <?php
                    }
                    ?>
                  </div>
                  <?php
                }
                ?>
              </div>
              <div class="row construction_images_more_0">
                <div class="col s12" style="text-align: right;">
                  <a class="waves-effect waves-light  btn gradient-45deg-light-blue-cyan box-shadow-none border-round mr-1 mb-1" onclick="addMoreConstruction()">+ Add more</a>
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
          <div class="step-title waves-effect">Kalpataru experience</div>
          <div class="step-content">
            <form id="experience_details" name="experience_details">
              <div class="experience_section">
                <?php
                foreach ($kalpataru_experience as $key => $value) {
                  $eximgarr =  explode("/",$value->image);
                  $eximagename = array_pop($eximgarr);
                  ?>
                  <div class="row experience_section_inner_<?=$key?>" style="box-shadow: 0px 0px 1px 0 rgba(123,31,162,.5);padding:5px;">
                    <div class="input-field col m5 s11">
                      <label for="experience_title_<?=$key?>">Title text:</label>
                      <input type="text" class="validate experience-title" name="experience_title_<?=$key?>" id="experience_title_<?=$key?>" value="<?=$value->title?>">
                      <span class="error-experience_title_<?=$key?>"></span>
                    </div> 
                    <div class="input-field col m5 s11">
                      <label for="experience_short_description_<?=$key?>">Short text:</label>
                      <textarea id="experience_short_description_<?=$key?>" name="experience_short_description_<?=$key?>" data-id="0" class="materialize-textarea experience-text" style="height: 101px;"><?=$value->text?></textarea>
                      <span class="error-experience_short_description_<?=$key?>"></span>
                    </div>
                    <div class="col s10">
                      <div class="file-field input-field">
                        <div class="btn">
                          <span>Choose</span>
                          <input type="file" id="experience_image_<?=$key?>" name="experience_image_<?=$key?>" onchange="imagesExperience(this,<?=$key?>)">
                        </div>
                        <div class="file-path-wrapper">
                          <input class="validate file-path file-path-experience" type="text" id="file_experience_image_<?=$key?>" name="file_experience_image_<?=$key?>" placeholder="Image" value="<?=$eximagename?>">
                          <span class="error-experience_image"></span>
                        </div>
                      </div>
                      <div class="experience_images_box_<?=$key?> experience_images_box">
                        <span class="img-e-<?=$key?>"><img src="<?=$value->image?>" style="height:150px;margin-right:3px;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.12), 0 1px 5px 0 rgba(0,0,0,.2);margin:5px;" class="img-thumbnail experience_images_src experience_images_src_<?=$key?>"></span>
                      </div> 
                    </div> 
                    <?php 
                    if ($key>0) {                    
                      ?>
                      <div class="input-field col m1 s1"> <button class="waves-effect waves-light btn gradient-45deg-red-pink z-depth-4 mr-1 mb-2" type="button" onclick="removeExperienceSection(<?=$key?>)">X</button> </div>
                      <?php
                    }
                    ?>
                  </div>
                  <?php 
                }
                if (count($kalpataru_experience)==0) {
                  ?>
                  <div class="row experience_section_inner_0" style="box-shadow: 0px 0px 1px 0 rgba(123,31,162,.5);padding:5px;">
                    <div class="input-field col m5 s11">
                      <label for="experience_title_0">Title text:</label>
                      <input type="text" class="validate experience-title" name="experience_title_0" id="experience_title_0">
                      <span class="error-experience_title_0"></span>
                    </div> 
                    <div class="input-field col m5 s11">
                      <label for="experience_short_description_0">Short text:</label>
                      <textarea id="experience_short_description_0" name="experience_short_description_0" data-id="0" class="materialize-textarea experience-text" style="height: 101px;"></textarea>
                      <span class="error-experience_short_description_0"></span>
                    </div>
                    <div class="col s10">
                      <div class="file-field input-field">
                        <div class="btn">
                          <span>Choose</span>
                          <input type="file" id="experience_image_0" name="experience_image_0" onchange="imagesExperience(this,0)">
                        </div>
                        <div class="file-path-wrapper">
                          <input class="validate file-path file-path-experience" type="text" id="file_experience_image_0" name="file_experience_image_0" placeholder="Image">
                          <span class="error-experience_image"></span>
                        </div>
                      </div>
                      <div class="experience_images_box_0 experience_images_box">
                      </div> 
                    </div> 
                  </div>
                  <?php
                }
                ?>
              </div>
              <div class="row experience_images_more_0">
                <div class="col s12" style="text-align: right;">
                  <a class="waves-effect waves-light  btn gradient-45deg-light-blue-cyan box-shadow-none border-round mr-1 mb-1" onclick="addMoreExperience()">+ Add more</a>
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
          <div class="step-title waves-effect">Kalpataru way</div>
          <div class="step-content">
            <form id="way_details" name="way_details">
              <div class="way_section">
                <?php
                foreach ($kalpataru_way as $key => $value) {
                  $wayimgarr =  explode("/",$value->image);
                  $wayimagename = array_pop($wayimgarr);
                  ?>
                  <div class="row way_section_inner_<?=$key?>" style="box-shadow: 0px 0px 1px 0 rgba(123,31,162,.5);padding:5px;">
                    <div class="input-field col m5 s11">
                      <label for="way_title_<?=$key?>">Title text:</label>
                      <input type="text" class="validate way-title" name="way_title_<?=$key?>" id="way_title_<?=$key?>" value="<?=$value->title?>">
                      <span class="error-way_title_<?=$key?>"></span>
                    </div> 
                    <div class="input-field col m5 s11">
                      <label for="way_short_description_<?=$key?>">Short text:</label>
                      <textarea id="way_short_description_<?=$key?>" name="way_short_description_<?=$key?>" data-id="0" class="materialize-textarea way-text" style="height: 101px;"><?=$value->text?></textarea>
                      <span class="error-way_short_description_<?=$key?>"></span>
                    </div>
                    <div class="col s10">
                      <div class="file-field input-field">
                        <div class="btn">
                          <span>Choose</span>
                          <input type="file" id="way_image_<?=$key?>" name="way_image_<?=$key?>" onchange="imagesWay(this,<?=$key?>)">
                        </div>
                        <div class="file-path-wrapper">
                          <input class="validate file-path file-path-way" type="text" id="file_way_image_<?=$key?>" name="file_way_image_<?=$key?>" placeholder="way image" value="<?=$wayimagename?>">
                          <span class="error-way_image"></span>
                        </div>
                      </div>
                      <div class="way_images_box_<?=$key?> way_images_box">
                        <span class="img-e-'<?=$key?>'"><img src="<?=$value->image?>" style="height:150px;margin-right:3px;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.12), 0 1px 5px 0 rgba(0,0,0,.2);margin:5px;" class="img-thumbnail way_images_src way_images_src_<?=$key?>"></span>
                      </div> 
                    </div> 
                    <?php
                    if ($key>0) {
                      ?>
                      <div class="input-field col m1 s1"> <button class="waves-effect waves-light btn gradient-45deg-red-pink z-depth-4 mr-1 mb-2" type="button" onclick="removeWaySection(<?=$key?>)">X</button> 
                      </div>
                      <?php
                    }
                    ?>
                  </div>
                  <?php 
                }
                if (count($kalpataru_way)==0) {
                  ?>
                  <div class="row way_section_inner_0" style="box-shadow: 0px 0px 1px 0 rgba(123,31,162,.5);padding:5px;">
                    <div class="input-field col m5 s11">
                      <label for="way_title_0">Title text:</label>
                      <input type="text" class="validate way-title" name="way_title_0" id="way_title_0">
                      <span class="error-way_title_0"></span>
                    </div> 
                    <div class="input-field col m5 s11">
                      <label for="way_short_description_0">Short text:</label>
                      <textarea id="way_short_description_0" name="way_short_description_0" data-id="0" class="materialize-textarea way-text" style="height: 101px;"></textarea>
                      <span class="error-way_short_description_0"></span>
                    </div>
                    <div class="col s10">
                      <div class="file-field input-field">
                        <div class="btn">
                          <span>Choose</span>
                          <input type="file" id="way_image_0" name="way_image_0" onchange="imagesWay(this,0)">
                        </div>
                        <div class="file-path-wrapper">
                          <input class="validate file-path file-path-way" type="text" id="file_way_image_0" name="file_way_image_0" placeholder="way image">
                          <span class="error-way_image"></span>
                        </div>
                      </div>
                      <div class="way_images_box_0 way_images_box">

                      </div> 
                    </div> 
                  </div>
                  <?php
                }
                ?>

              </div>
              <div class="row way_images_more_0">
                <div class="col s12" style="text-align: right;">
                  <a class="waves-effect waves-light  btn gradient-45deg-light-blue-cyan box-shadow-none border-round mr-1 mb-1" onclick="addMoreWay()">+ Add more</a>
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
          <div class="step-title waves-effect">Feature video</div>
          <div class="step-content">
            <form id="video_details" name="video_details">
              <div class="video_section">
                <?php
                $vid = $properties->videos;
                $video_arr = explode(",", $vid);
                foreach ($video_arr as $key => $value) {
                  ?>
                  <div class="row video_section_inner_<?=$key?>" style="box-shadow: 0px 0px 1px 0 rgba(123,31,162,.5);padding:5px;">
                    <div class="input-field col s11">
                      <label for="video_url">Video Url (Youtube):</label>
                      <input type="text" class="validate video-url" name="video_url" id="video_url" value="<?=$value?>">
                      <span class="error-video_url_<?=$key?>"></span>
                    </div>  
                    <?php
                    if ($key>0) {
                      ?>
                      <div class="input-field col m1 s1"> <button class="waves-effect waves-light btn gradient-45deg-red-pink z-depth-4 mr-1 mb-2" type="button" onclick="removeVideoSection(<?=$key?>)">X</button>
                      </div>
                      <?php
                    }
                    ?>
                  </div>
                  <?php
                }
                ?>
              </div>
              <div class="row video_more_0">
                <div class="col s12" style="text-align: right;">
                  <a class="waves-effect waves-light  btn gradient-45deg-light-blue-cyan box-shadow-none border-round mr-1 mb-1" onclick="addMoreVideo()">+ Add more</a>
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
        <li class="step step-10 step-pointer">
          <div class="step-title waves-effect">Awards</div>
          <div class="step-content">
            <form id="award_details" name="award_details">
              <div class="award_section">
               <?php
               foreach ($kalpataru_awards as $key => $value) {
                $awardsimgarr =  explode("/",$value->image);
                $awardsimagename = array_pop($awardsimgarr);
                ?>
                <div class="row award_section_inner_<?=$key?>" style="box-shadow: 0px 0px 1px 0 rgba(123,31,162,.5);padding:5px;">
                  <div class="input-field col s11">
                    <label for="award_short_description_<?=$key?>">Description:</label>
                    <textarea id="award_short_description_<?=$key?>" name="award_short_description_<?=$key?>" data-id="0" class="materialize-textarea award-text"><?=$value->description?></textarea>
                    <span class="error-award_short_description_<?=$key?>"></span>
                  </div>
                  <div class="col s11">
                    <div class="file-field input-field">
                      <div class="btn">
                        <span>Choose</span>
                        <input type="file" id="award_image_<?=$key?>" name="award_image_<?=$key?>" onchange="imagesAward(this,<?=$key?>)">
                      </div>
                      <div class="file-path-wrapper">
                        <input class="validate file-path file-path-award" type="text" id="file_award_image_<?=$key?>" name="file_award_image_<?=$key?>" placeholder="award image" value="<?=$awardsimagename?>">
                        <span class="error-award_image"></span>
                      </div>
                    </div>
                    <div class="award_images_box_<?=$key?> award_images_box">
                      <span class="img-e-<?=$key?>"><img src="<?=$value->image?>" style="height:150px;margin-right:3px;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.12), 0 1px 5px 0 rgba(0,0,0,.2);margin:5px;" class="img-thumbnail award_images_src award_images_src_<?=$key?>"></span>
                    </div> 
                  </div> 
                  <?php
                  if ($key>0) {
                    ?>
                    <div class="input-field col m1 s1"> <button class="waves-effect waves-light btn gradient-45deg-red-pink z-depth-4 mr-1 mb-2" type="button" onclick="removeAwardSection(<?=$key?>)">X</button> </div>
                    <?php
                  }
                  ?>
                </div>
                <?php 
              }
              if (count($kalpataru_awards)==0) {
                ?>
                <div class="row award_section_inner_0" style="box-shadow: 0px 0px 1px 0 rgba(123,31,162,.5);padding:5px;">
                  <div class="input-field col s11">
                    <label for="award_short_description_0">Description:</label>
                    <textarea id="award_short_description_0" name="award_short_description_0" data-id="0" class="materialize-textarea award-text"></textarea>
                    <span class="error-award_short_description_0"></span>
                  </div>
                  <div class="col s11">
                    <div class="file-field input-field">
                      <div class="btn">
                        <span>Choose</span>
                        <input type="file" id="award_image_0" name="award_image_0" onchange="imagesAward(this,0)">
                      </div>
                      <div class="file-path-wrapper">
                        <input class="validate file-path file-path-award" type="text" id="file_award_image_0" name="file_award_image_0" placeholder="award image">
                        <span class="error-award_image"></span>
                      </div>
                    </div>
                    <div class="award_images_box_0 award_images_box">
                    </div> 
                  </div> 
                </div>
                <?php
              }
              ?>
            </div>
            <div class="row award_images_more_0">
              <div class="col s12" style="text-align: right;">
                <a class="waves-effect waves-light  btn gradient-45deg-light-blue-cyan box-shadow-none border-round mr-1 mb-1" onclick="addMoreAward()">+ Add more</a>
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
      <li class="step step-11 step-pointer">
        <div class="step-title waves-effect">Our Experts</div>
        <div class="step-content">
          <form id="expert_details" name="expert_details">
            <div class="expert_section">
             <?php
             foreach ($kalpataru_experts as $key => $value) {
              $expertsimgarr =  explode("/",$value->image);
              $expertsimagename = array_pop($expertsimgarr);
              ?>
              <div class="row expert_section_inner_<?=$key?>" style="box-shadow: 0px 0px 1px 0 rgba(123,31,162,.5);padding:5px;">
                <div class="input-field col m5 s11">
                  <label for="expert_name_<?=$key?>">Name:</label>
                  <input type="text" class="validate expert-title" name="expert_name_<?=$key?>" id="expert_name_<?=$key?>" value="<?=$value->name?>">
                  <span class="error-expert_name_<?=$key?>"></span>
                </div> 
                <div class="input-field col m5 s11">
                  <label for="expert_designation_<?=$key?>">Designation:</label>
                  <input type="text" class="validate expert-designation" name="expert_designation_<?=$key?>" id="expert_designation_<?=$key?>" value="<?=$value->designation?>">
                  <span class="error-expert_designation_<?=$key?>"></span>
                </div>
                <div class="col s10">
                  <div class="file-field input-field">
                    <div class="btn">
                      <span>Choose</span>
                      <input type="file" id="expert_image_<?=$key?>" name="expert_image_<?=$key?>" onchange="imagesExpert(this,<?=$key?>)">
                    </div>
                    <div class="file-path-wrapper">
                      <input class="validate file-path file-path-expert" type="text" id="file_expert_image_<?=$key?>" name="file_expert_image_<?=$key?>" placeholder="Image" value="<?=$expertsimagename?>">
                      <span class="error-expert_image"></span>
                    </div>
                  </div>
                  <div class="expert_images_box_<?=$key?> expert_images_box">
                    <span class="img-e-'+exprt+'"><img src="<?=$value->image?>" style="height:150px;margin-right:3px;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.12), 0 1px 5px 0 rgba(0,0,0,.2);margin:5px;" class="img-thumbnail expert_images_src expert_images_src_<?=$key?>"></span>
                  </div> 
                </div> 
                <?php
                if ($key>0) {
                  ?>
                  <div class="input-field col m1 s1"> <button class="waves-effect waves-light btn gradient-45deg-red-pink z-depth-4 mr-1 mb-2" type="button" onclick="removeExpertSection(<?=$key?>)">X</button> </div>
                  <?php
                }
                ?>
              </div>
              <?php
            }
            if (count($kalpataru_experts)==0) {
              ?>
              <div class="row expert_section_inner_0" style="box-shadow: 0px 0px 1px 0 rgba(123,31,162,.5);padding:5px;">
                <div class="input-field col m5 s11">
                  <label for="expert_name_0">Name:</label>
                  <input type="text" class="validate expert-title" name="expert_name_0" id="expert_name_0">
                  <span class="error-expert_name_0"></span>
                </div> 
                <div class="input-field col m5 s11">
                  <label for="expert_designation_0">Designation:</label>
                  <input type="text" class="validate expert-designation" name="expert_designation_0" id="expert_designation_0">
                  <span class="error-expert_designation_0"></span>
                </div>
                <div class="col s10">
                  <div class="file-field input-field">
                    <div class="btn">
                      <span>Choose</span>
                      <input type="file" id="expert_image_0" name="expert_image_0" onchange="imagesExpert(this,0)">
                    </div>
                    <div class="file-path-wrapper">
                      <input class="validate file-path file-path-expert" type="text" id="file_expert_image_0" name="file_expert_image_0" placeholder="Image">
                      <span class="error-expert_image"></span>
                    </div>
                  </div>
                  <div class="expert_images_box_0 expert_images_box">
                  </div> 
                </div> 
              </div>
              <?php
            }
            ?>
          </div>
          <div class="row expert_images_more_0">
            <div class="col s12" style="text-align: right;">
              <a class="waves-effect waves-light  btn gradient-45deg-light-blue-cyan box-shadow-none border-round mr-1 mb-1" onclick="addMoreExpert()">+ Add more</a>
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
    <li class="step step-12 step-pointer">
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
<li class="step step-13 step-pointer">
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
          Submit
          <i class="material-icons right">arrow_forward</i>
        </button>
      </div>
    </div>
  </div>
</form>
</div>
</li>
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
<!-- END THEME  JS-->
<!-- BEGIN PAGE LEVEL JS-->
<!-- <script src="<?=base_url()?>assets/js/scripts/form-select2.min.js"></script> -->
<script src="<?=base_url()?>assets/js/scripts/app-invoice.min.js"></script>
<script src="<?=base_url()?>assets/js/scripts/form-wizard.min.js"></script>
<script src="<?=base_url()?>assets/js/validation.js"></script>
<script type="text/javascript">
  $(".sidenav li a").removeClass('active');
  $(".nav-properties").addClass('active');
  $(".select2-eminity-overview").select2({dropdownAutoWidth:!0,width:"100%",placeholder:"Search amenities"});
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
    overview_image_more_text_0: "required",
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
   var data1 = {"short_description":short_description,"overview_Amenity":overview_Amenity,"overview_images":overview_images,"insert_id":insert_id,"overview_more_images":overview_more_images,"overview_more_text":overview_more_text}; 
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
    image_name: {
      required: function(){
        if ($(".featured_images_src")[0]){
          return false;
        } else {
          return true;
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
    else if(element.attr("name") == "image_name") {
      error.appendTo(".error-image_name");
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
   if ($("#top_picks").prop("checked")==true) { 
     top_picks = 1;
   } 
   if ($("#on_going").prop("checked")==true) { 
     on_going = 1;
   } 
   var title = $("#title").val();
   var status = $("#status").val();
   var city = $("#city").val();
   var location = $("#location").val();
   var price = $("#price").val();
   var possession = $("#possession").val();
   var typology = $("#typology").val();
   var featured_images = new Array();
   $(".featured_images_src" ).each(function( index ) {
    var base64 = $(this).attr('src');
    featured_images.push(base64);
  });
   var thumbnail_images = new Array();
   $(".thumbnail_images_src" ).each(function( index ) {
    var base64 = $(this).attr('src');
    thumbnail_images.push(base64);
  });
   var data = {"property_type":property_type,"city":city,"top_picks":top_picks,"on_going":on_going,"title":title,"status":status,"location":location,"price":price,"possession":possession,"typology":typology,"featured_images":featured_images,"thumbnail_images":thumbnail_images,"insert_id":insert_id}; 
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
  rules: {
    file_brochure: "required",
    file_floor_plan: "required",
    file_master_plan: "required",
    file_virtual_tour: "required"
  },
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
   var data1 = new FormData($('#resources_details')[0]);
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
  rules: {
    file_map_image: "required"
  },
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
   var construction_image = new Array();
   $(".construction_images_src" ).each(function( index ) {
    var base64 = $(this).attr('src');
    construction_image.push(base64);
  });
   var insert_id = $("#insert_id").val();
   var data = {"construction_title":construction_title,"construction_text":construction_text,"construction_image":construction_image,"insert_id":insert_id}; 
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
$("form[name='experience_details']").validate({
  errorElement: 'span',
  rules: {
    experience_title_0: "required",
    experience_short_description_0: "required",
    file_experience_image_0: "required"
  },
  submitHandler: function(form, event) {
   $("#preloader").show(); 
   var experience_title = new Array();
   $( ".experience-title" ).each(function( index ) {
    var text = $(this).val();
    experience_title.push(text);
  });
   var experience_text = new Array();
   $( ".experience-text" ).each(function( index ) {
    var text = $(this).val();
    experience_text.push(text);
  });
   var experience_image = new Array();
   $(".experience_images_src" ).each(function( index ) {
    var base64 = $(this).attr('src');
    experience_image.push(base64);
  });
   var data = {"experience_title":experience_title,"experience_text":experience_text,"experience_image":experience_image,"insert_id":insert_id}; 
   $.ajax({
    url: '<?=base_url()?>klconfig/saveExperienceDetails',
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

$("form[name='way_details']").validate({
  errorElement: 'span',
  rules: {
    way_title_0: "required",
    way_short_description_0: "required",
    file_way_image_0: "required"
  },
  submitHandler: function(form, event) {
   $("#preloader").show(); 
   var way_title = new Array();
   $( ".way-title" ).each(function( index ) {
    var text = $(this).val();
    way_title.push(text);
  });
   var way_text = new Array();
   $( ".way-text" ).each(function( index ) {
    var text = $(this).val();
    way_text.push(text);
  });
   var way_image = new Array();
   $(".way_images_src" ).each(function( index ) {
    var base64 = $(this).attr('src');
    way_image.push(base64);
  });
   var data = {"way_title":way_title,"way_text":way_text,"way_image":way_image,"insert_id":insert_id}; 
   $.ajax({
    url: '<?=base_url()?>klconfig/saveWayDetails',
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

$("form[name='video_details']").validate({
  errorElement: 'span',
  rules: {
    video_url_0: "required"
  },
  submitHandler: function(form, event) {
   $("#preloader").show(); 
   var video_url = new Array();
   $( ".video-url" ).each(function( index ) {
    var text = $(this).val();
    video_url.push(text);
  });
   var data = {"video_url":video_url,"insert_id":insert_id}; 
   $.ajax({
    url: '<?=base_url()?>klconfig/saveVideoDetails',
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
        $(".step").removeClass('active');
        $(".step-10").addClass('active');
        if ($(".step-9").hasClass('done')) {
        }
        else
        {
          $(".step-9").addClass('done');
        }
        $(".step-10.step-pointer").css("pointer-events","auto");
      }
    }
  });
 }
});

$("form[name='award_details']").validate({
  errorElement: 'span',
  rules: {
    award_short_description_0: "required",
    file_award_image_0: "required"
  },
  submitHandler: function(form, event) {
   $("#preloader").show(); 
   var award_text = new Array();
   $( ".award-text" ).each(function( index ) {
    var text = $(this).val();
    award_text.push(text);
  });
   var award_image = new Array();
   $(".award_images_src" ).each(function( index ) {
    var base64 = $(this).attr('src');
    award_image.push(base64);
  });
   var data = {"award_text":award_text,"award_image":award_image,"insert_id":insert_id}; 
   $.ajax({
    url: '<?=base_url()?>klconfig/saveAwardDetails',
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
$("form[name='expert_details']").validate({
  errorElement: 'span',
  rules: {
    expert_name_0: "required",
    expert_designation_0: "required",
    file_expert_image_0: "required"
  },
  submitHandler: function(form, event) {
   $("#preloader").show(); 
   var expert_name = new Array();
   $( ".expert-title" ).each(function( index ) {
    var text = $(this).val();
    expert_name.push(text);
  });
   var expert_designation = new Array();
   $( ".expert-designation" ).each(function( index ) {
    var text = $(this).val();
    expert_designation.push(text);
  })
   var expert_image = new Array();
   $(".expert_images_src" ).each(function( index ) {
    var base64 = $(this).attr('src');
    expert_image.push(base64);
  });
   var data = {"expert_name":expert_name,"expert_designation":expert_designation,"expert_image":expert_image,"insert_id":insert_id}; 
   $.ajax({
    url: '<?=base_url()?>klconfig/saveExpertDetails',
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
        $(".step").removeClass('active');
        $(".step-13").addClass('active');
        if ($(".step-12").hasClass('done')) {
        }
        else
        {
          $(".step-12").addClass('done');
        }
        $(".step-13.step-pointer").css("pointer-events","auto");
      }
    }
  });
 }
});
$("form[name='booking_details']").validate({
  errorElement: 'span',
  rules: {
    booking_url: "required",
    booking_text: "required",
    file_back_image: "required"
  },
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
        // $(".step").removeClass('active');
        // $(".step-13").addClass('active');
        // if ($(".step-12").hasClass('done')) {
        // }
        // else
        // {
        //   $(".step-12").addClass('done');
        // }

        // $(".step-13.step-pointer").css("pointer-events","auto");
        window.location.href = "<?=base_url()?>klconfig/properties";
      }
    }
  });
 }
});


var oic = "<?=count($oiarr)?>";
function addMoreOverviewImages()
{
  if (oic<=3) {
    $(".overview_more_images_section").append('<div class="row overview_images_more_inner_'+oic+'"> <div class="col m5 s11"> <div class="file-field input-field"> <div class="btn"> <span>Choose</span> <input type="file" id="overview_images_more_'+oic+'" name="overview_images_more_'+oic+'" onchange="imagesOverview(this,'+oic+')"> </div> <div class="file-path-wrapper"> <input class="validate file-path file-path-overview" type="text" id="image_overview_more_'+oic+'" name="image_overview_more_'+oic+'" placeholder="Overview image"> <span class="error-image_overview_more_'+oic+'"></span> </div> </div> <div class="overview_images_box_more_'+oic+' overview_images_box_more"> </div> </div> <div class="input-field col m6 s11"> <label for="short_description">Text:</label> <textarea id="overview_image_more_text_'+oic+'" name="overview_image_more_text_'+oic+'" data-id="'+oic+'" class="materialize-textarea overview_text_more"></textarea> <span class="overview_image_more_text_'+oic+'"></span> </div><div class="input-field col m1 s1"> <button class="waves-effect waves-light btn gradient-45deg-red-pink z-depth-4 mr-1 mb-2" type="button" onclick="removeOverviewSection('+oic+')">X</button> </div></div>');
    $('.file-path-overview').each(function () {
      $(this).rules("add", {
        required: true
      });
    });
    $('.overview_text_more').each(function () {
      $(this).rules("add", {
        required: true
      });
    });
    oic++;
  }
}

var con = "<?=count($construction_details)?>";
function addMoreConstruction()
{
  $(".construction_section").append('<div class="row construction_section_inner_'+con+'" style="box-shadow: 0px 0px 1px 0 rgba(123,31,162,.5);padding:5px;"> <div class="input-field col m5 s11"> <label for="construction_title_'+con+'">Title text:</label> <input type="text" class="validate construction-title" name="construction_title_'+con+'" id="construction_title_'+con+'"> <span class="error-construction_title_'+con+'"></span> </div> <div class="input-field col m5 s11"> <label for="construction_short_description_'+con+'">Short text:</label> <textarea id="construction_short_description_'+con+'" name="construction_short_description_'+con+'" class="materialize-textarea construction-text" style=""></textarea> <span class="error-construction_short_description_'+con+'"></span> </div> <div class="col s10"> <div class="file-field input-field"> <div class="btn"> <span>Choose</span> <input type="file" id="construction_image_'+con+'" name="construction_image_'+con+'" onchange="imagesConstruction(this,'+con+')"> </div> <div class="file-path-wrapper"> <input class="validate file-path file-path-construction" type="text" id="file_construction_image_'+con+'" name="file_construction_image_'+con+'" placeholder="Construction image"> <span class="error-construction_image"></span> </div> </div> <div class="construction_images_box_'+con+' construction_images_box"> </div> </div><div class="input-field col m1 s1"> <button class="waves-effect waves-light btn gradient-45deg-red-pink z-depth-4 mr-1 mb-2" type="button" onclick="removeConstructionSection('+con+')">X</button> </div> </div>');
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
var vid = <?=count($video_arr)?>;
function addMoreVideo()
{
  $(".video_section").append('<div class="row video_section_inner_'+vid+'" style="box-shadow: 0px 0px 1px 0 rgba(123,31,162,.5);padding:5px;"> <div class="input-field col s11"> <label for="video_url">Video Url (Youtube):</label> <input type="text" class="validate video-url" name="video_url" id="video_url"> <span class="error-video_url_'+vid+'"></span> </div> <div class="input-field col m1 s1"> <button class="waves-effect waves-light btn gradient-45deg-red-pink z-depth-4 mr-1 mb-2" type="button" onclick="removeVideoSection('+vid+')">X</button> </div></div>');
  $('.video-url').each(function () {
    $(this).rules("add", {
      required: true
    });
  });
  vid++;
}
var awa = "<?=count($kalpataru_awards)?>";
function addMoreAward()
{
  $(".award_section").append('<div class="row award_section_inner_'+awa+'" style="box-shadow: 0px 0px 1px 0 rgba(123,31,162,.5);padding:5px;"> <div class="input-field col s11"> <label for="award_short_description_'+awa+'">Description:</label> <textarea id="award_short_description_'+awa+'" name="award_short_description_'+awa+'" data-id="0" class="materialize-textarea award-text"></textarea> <span class="error-award_short_description_'+awa+'"></span> </div> <div class="col s11"> <div class="file-field input-field"> <div class="btn"> <span>Choose</span> <input type="file" id="award_image_'+awa+'" name="award_image_'+awa+'" onchange="imagesAward(this,'+awa+')"> </div> <div class="file-path-wrapper"> <input class="validate file-path file-path-award" type="text" id="file_award_image_'+awa+'" name="file_award_image_'+awa+'" placeholder="award image"> <span class="error-award_image"></span> </div> </div> <div class="award_images_box_'+awa+' award_images_box"> </div> </div> <div class="input-field col m1 s1"> <button class="waves-effect waves-light btn gradient-45deg-red-pink z-depth-4 mr-1 mb-2" type="button" onclick="removeAwardSection('+awa+')">X</button> </div></div>');
  $('.award-text').each(function () {
    $(this).rules("add", {
      required: true
    });
  });
  $('.file-path-award').each(function () {
    $(this).rules("add", {
      required: true
    });
  });
  awa++;
}
var expt = "<?=count($kalpataru_experts)?>";
function addMoreExpert()
{
  $(".expert_section").append('<div class="row expert_section_inner_'+expt+'" style="box-shadow: 0px 0px 1px 0 rgba(123,31,162,.5);padding:5px;"> <div class="input-field col m5 s11"> <label for="expert_name_'+expt+'">Name:</label> <input type="text" class="validate expert-name" name="expert_name_'+expt+'" id="expert_name_'+expt+'"> <span class="error-expert_name_'+expt+'"></span> </div> <div class="input-field col m5 s11"> <label for="expert_designation_'+expt+'">Designation:</label> <input type="text" class="validate expert-designation" name="expert_designation_'+expt+'" id="expert_designation_'+expt+'"> <span class="error-expert_designation_'+expt+'"></span> </div> <div class="col s10"> <div class="file-field input-field"> <div class="btn"> <span>Choose</span> <input type="file" id="expert_image_'+expt+'" name="expert_image_'+expt+'" onchange="imagesExpert(this,'+expt+')"> </div> <div class="file-path-wrapper"> <input class="validate file-path file-path-expert" type="text" id="file_expert_image_'+expt+'" name="file_expert_image_'+expt+'" placeholder="Image"> <span class="error-expert_image"></span> </div> </div> <div class="expert_images_box_'+expt+' expert_images_box"> </div> </div><div class="input-field col m1 s1"> <button class="waves-effect waves-light btn gradient-45deg-red-pink z-depth-4 mr-1 mb-2" type="button" onclick="removeExpertSection('+expt+')">X</button> </div> </div>');
  $('.expert-name').each(function () {
    $(this).rules("add", {
      required: true
    });
  });
  $('.expert-designation').each(function () {
    $(this).rules("add", {
      required: true
    });
  });
  $('.file-path-expert').each(function () {
    $(this).rules("add", {
      required: true
    });
  });
  expt++;
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
</script>
</body>
</html>