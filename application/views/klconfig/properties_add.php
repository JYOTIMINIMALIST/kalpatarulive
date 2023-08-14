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
    .step-pointer{
      pointer-events: none;
      }
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
                <h5 class="breadcrumbs-title mt-0 mb-0"><span>Add Properties</span></h5>
                <ol class="breadcrumbs mb-0">
                  <li class="breadcrumb-item"><a href="<?=base_url()?>">Home</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">Add Properties</a>
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
                        <h4 class="card-title">Add New Properties</h4>
                      </div>
                      <input type="hidden" class="insert_id" id="insert_id" name="insert_id" >
                      <ul class="stepper linear" id="linearStepper"> <!--id=linearStepper class=linear-->
                        <li class="step active step-1">
                          <div class="step-title waves-effect">Basic Details</div>
                          <form id="basic_details" name="basic_details">
                            <div class="step-content">
                              <div class="row">
                                <div class="col s12" style="padding-left: unset;padding-right: unset;">
                                  <div class="input-field col s12 m6">
                                    <select id="property_type" required name="property_type" type="text" class="validate error">
                                      <option value="" disabled selected>Select Category</option>
                                      <option value="residential">Residential</option>
                                      <option value="commercial">Commercial</option>
                                      <?php /*<option value="signature">Signature</option>*/ ?>
                                    </select>
                                    <label>Select Category</label>
                                  </div>
                                  <div class="input-field col s12 m6">
                                    <div><label>Property type</label></div>
                                    <div class="input-field col s4" style="margin: 0px;">
                                      <label>
                                        <input type="checkbox" id="top_picks" name="top_picks" class="filled-in"/>
                                        <span>TOP PICKS</span>
                                      </label>
                                    </div>
                                    <div class="input-field col s4" style="margin: 0px;">
                                      <label>
                                        <input type="checkbox" id="on_going" name="on_going" class="filled-in"/>
                                        <span>ON GOING</span>
                                      </label>
                                    </div>    
                                    <div class="input-field col s4" style="margin: 0px;">
                                      <label>
                                        <input type="checkbox" id="completed" name="completed" class="filled-in"/>
                                        <span>Completed</span>
                                      </label>
                                    </div>                                  
                                  </div>
                                </div>
                                <div class="input-field col m6 s12">
                                  <label for="title">Property Title:</label>
                                  <input type="text" id="title" name="title" class="validate">
                                  <span class="error-title"></span>
                                </div>
                                <div class="input-field col m6 s12">
                                  <label for="status">Status:</label>
                                  <input type="text" id="status" class="validate" name="status">
                                  <span class="error-status"></span>
                                </div>
                              </div>
                              <div class="row">
                                <div class="input-field col m3 s12">
                                  <select id="city" name="city" type="text" required onchange ="getLocations(this);" class="validate error">
                                    <option value="" disabled selected>Select City</option>
                                    <?php
                                    foreach ($cities as $key => $value) {
                                      echo '<option value="'.$value->id.'">'.$value->title.'</option>';
                                    }
                                    ?>
                                  </select>
                                  <label>Select City</label>
                                </div>
                                <div class="input-field col m3 s12 location-data">
                                  <select id="location" name="location" required type="text" class="validate error">
                                    <option value="" disabled selected>Select Location</option>
                                  </select>
                                  <label>Select Location</label>
                                </div>
                                <div class="input-field col m6 s12">
                                  <label for="price">Price:</label>
                                  <input type="text" class="validate" name="price" id="price">
                                  <span class="error-price"></span>
                                </div>
                              </div>
                              <div class="row">
                                <div class="input-field col m6 s12">
                                  <label for="possession">Possession:</label>
                                  <input type="text" class="validate" name="possession" id="possession">
                                  <span class="error-possession"></span>
                                </div>
                                <div class="input-field col m6 s12">
                                  <label for="typology">Typology:</label>
                                  <input type="text" class="validate" name="typology" id="typology">
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

                                </div>   
                              </div>
                              <div class="input-field col s12 m12">
                                <select id="banner_type" onchange="changeBannerType(this)" required name="banner_type" type="text" class="validate error">
                                  <option value="image">Image</option>
                                  <option value="video">Video</option>
                                </select>
                                <label>Select Banner type</label>
                              </div>
                              <div class="row banner-div">
                                <div class="col s12">
                                  <label>Select Banner  (1366 x 557)</label>
                                </div>
                                <div class="file-field input-field col s12">
                                  <div class="btn">
                                    <span>Choose</span>
                                    <input type="file" id="featured_images" name="featured_images" onchange="imagesPreview(this,1)">
                                  </div>
                                  <div class="file-path-wrapper">
                                    <input class="validate file-path file-path-basic" type="text" id="banner_url" name="banner_url" placeholder="Featured Banner Image">
                                    <span class="error-image_name"></span>
                                  </div>
                                </div>
                                <div class="featured_images_box col s12">

                                </div>   
                                <div class="col s12">
                                  <label>Select Mobile Banner (768 x 922)</label>
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

                                </div>

                                  <div class="input-field col s12 m6">
                                      <div><label>Is Popup Require on Initially ?  </label></div>
                                      <div class="input-field col s6" style="margin: 0px;">
                                          <select id="is_pop_reload" name="is_pop_reload" type="text" class="validate">
                                              <option value="" disabled selected>Select Option</option>
                                              <option value="1">Yes</option>
                                              <option value="0">No</option>
                                          </select>
                                      </div>
                                  </div>

                                  <div class="input-field col s12 m6">
                                      <div><label>Do you want to hide Hamburger menu bar ?  </label></div>
                                      <div class="input-field col s6" style="margin: 0px;">
                                          <select id="is_menu_bar" name="is_menu_bar" type="text" class="validate">
                                              <option value="" disabled selected>Select Option</option>
                                              <option value="1">Yes</option>
                                              <option value="0">No</option>
                                          </select>
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
                                  <input type="text" class="validate" id="featured_description" name="featured_description" value="">
                                  <span class="error-featured_description"></span>
                                </div>
                              </div>
                              <div class="row">
                                <div class="input-field col s12">
                                  <label for="short_description">Short Description:</label>
                                  <input type="text" class="validate" id="short_description" name="short_description">
                                  <span class="error-short_description"></span>
                                </div>
                              </div>
                              <?php /*<div class="row">
                               <div class="col s12">
                                <div class="input-field">
                                  <select data-placeholder="Select amenities" class="select2 select2-eminity-overview browser-default"
                                  id="overview_Amenity" name="overview_Amenity" multiple="multiple">
                                  <?php 
                                  foreach ($amenities as $key => $value) {
                                    echo '<option value="'.$value->id.'">'.$value->title.'</option>';
                                  }
                                  ?>
                                </select>
                                <span class="error-overview_Amenity"></span>
                              </div>
                            </div>
                          </div>*/ ?>
                          <div class="row">
                            <div class="file-field input-field col s12">
                              <div class="btn">
                                <span>Choose (500 x 644)</span>
                                <input type="file" id="overview_images" name="overview_images" onchange="imagesPreview(this,2)">
                              </div>
                              <div class="file-path-wrapper">
                                <input class="validate file-path file-path-overview" type="text" id="image_overview" name="image_overview" placeholder="Overview image (500 x 644)">
                                <span class="error-image_overview"></span>
                              </div>
                            </div>
                            <div class="overview_images_box col s12">
                            </div>   
                          </div>
                          <h4 class="card-title">Add More images</h4>
                          <div class="overview_more_images_section">
                            <div class="row overview_images_more_inner_0">
                              <div class="col m5 s11">
                                <div class="file-field input-field">
                                  <div class="btn">
                                    <span>Choose(500 x 644)</span>
                                    <input type="file" id="overview_images_more_0" name="overview_images_more_0" onchange="imagesOverview(this,0)">
                                  </div>
                                  <div class="file-path-wrapper">
                                    <input class="validate file-path file-path-overview" type="text" id="image_overview_more_0" name="image_overview_more_0" placeholder="Overview image(500 x 644)">
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
                              foreach ($amenities as $key => $value) {
                                echo '<option value="'.$value->id.'">'.$value->title.'</option>';
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
                      <input type="hidden" class="insert_id" id="insert_id" name="insert_id" >
                      <div class="row">
                       <div class="file-field input-field col s12">
                        <div class="btn">
                          <span>Choose</span>
                          <input type="file" id="brochure" name="brochure" multiple onchange="imagesPreview(this,1)">
                        </div>
                        <div class="file-path-wrapper">
                          <input class="validate file-path file-path-basic" type="text" id="file_brochure" name="file_brochure" placeholder="Brochure">
                          <span class="error-brochure"></span>
                        </div>
                      </div>
                      <div class="file-field input-field col s12">
                        <div class="btn">
                          <span>Choose</span>
                          <input type="file" id="floor_plan" name="floor_plan" multiple onchange="imagesPreview(this,1)">
                        </div>
                        <div class="file-path-wrapper">
                          <input class="validate file-path file-path-basic" type="text" id="file_floor_plan" name="file_floor_plan" placeholder="Floor Plan">
                          <span class="error-floor_plan"></span>
                        </div>
                      </div>
                      <div class="file-field input-field col s12">
                        <div class="btn">
                          <span>Choose</span>
                          <input type="file" id="master_plan" name="master_plan" multiple onchange="imagesPreview(this,1)">
                        </div>
                        <div class="file-path-wrapper">
                          <input class="validate file-path file-path-basic" type="text" id="file_master_plan" name="file_master_plan" placeholder="Master Plan">
                          <span class="error-master_plan"></span>
                        </div>
                      </div>
                      <div class="input-field col s10">
                        <span for="virtual_tour">Virtual Tour</span>
                        <input type="text" class="validate" name="virtual_tour" id="virtual_tour">
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
                    <input type="hidden" class="insert_id" id="insert_id" name="insert_id" >
                    <div class="row">
                      <div class="input-field col m12 s12">
                        <label for="rera">Kalpataru Magnus RERA</label>
                        <input type="text" class="validate" name="rera" id="rera" value="">
                        <span class="error-rera"></span>
                      </div> 
                       <div class="input-field col m12 s12">
                        <label for="map_url">Map URL</label>
                        <input type="text" class="validate" name="map_url" id="map_url" value="">
                        <span class="error-map_url"></span>
                      </div> 
                      <div class="file-field input-field col s12">
                        <div class="btn">
                          <span>Choose (1366 x 693)</span>
                          <input type="file" id="map_image" name="map_image" multiple onchange="imagesPreview(this,3)">
                        </div>
                        <div class="file-path-wrapper">
                          <input class="validate file-path file-path-basic" type="text" id="file_map_image" name="file_map_image" placeholder="Map Image(1366 x 693)">
                          <span class="error-map_image"></span>
                        </div>
                      </div>
                      <div class="map_image_box col s12">

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
                      <div class="row construction_section_inner_0" style="box-shadow: 0px 0px 1px 0 rgba(123,31,162,.5);padding:5px;">
                        <div class="input-field col m5 s11">
                          <label for="construction_title_0">Title text:</label>
                          <input type="text" class="validate construction-title" name="construction_title_0" id="construction_title_0">
                          <span class="error-construction_title_0"></span>
                        </div> 
                        <div class="input-field col m5 s11">
                          <label for="construction_short_description_0">Short text:</label>
                          <textarea id="construction_short_description_0" name="construction_short_description_0" data-id="0" class="materialize-textarea construction-text" style="height: 101px;"></textarea>
                          <span class="error-construction_short_description_0"></span>
                        </div>
                        <div class="col s10">
                          <div class="file-field input-field">
                            <div class="btn">
                              <span>Choose</span>
                              <input type="file" id="construction_image_0" name="construction_image_0" onchange="imagesConstruction(this,0)">
                            </div>
                            <div class="file-path-wrapper">
                              <input class="validate file-path file-path-construction" type="text" id="file_construction_image_0" name="file_construction_image_0" placeholder="Construction image">
                              <span class="error-construction_image"></span>
                            </div>
                          </div>
                          <div class="construction_images_box_0 construction_images_box">
                          </div> 
                        </div> 
                      </div>
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
                <div class="step-title waves-effect">Projects you may also like</div>
                <div class="step-content">
                  <form id="projects_details" name="projects_details">
                    <div class="row">
                     <div class="col s12">
                      <div class="input-field">
                        <select data-placeholder="Select Projects" class="select2 select2-eminity-overview browser-default"
                        id="projects" name="projects" multiple="multiple">
                        <?php 
                        foreach ($projects as $key => $value) {
                          echo '<option value="'.$value->id.'">'.$value->title.'</option>';
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
                <input type="hidden" class="insert_id" id="insert_id" name="insert_id" >
                <div class="row">
                 <div class="input-field col s12">
                  <label for="booking_link">URL:</label>
                  <input type="text" class="validate booking-url" name="booking_url" id="booking_url">
                  <span class="error-booking_url"></span>
                </div> 
                <div class="input-field col s12">
                  <label for="booking_text">Text:</label>
                  <textarea id="booking_text" name="booking_text" class="materialize-textarea" style="height: 101px;"></textarea>
                </div>
                <div class="file-field input-field col s12">
                  <div class="btn">
                    <span>Choose</span>
                    <input type="file" id="back_image" name="back_image" onchange="imagesPreview(this,4)">
                  </div>
                  <div class="file-path-wrapper">
                    <input class="validate file-path file-path-basic" type="text" id="file_back_image" name="file_back_image" placeholder="Background Image">
                    <span class="error-back_image"></span>
                  </div>
                </div>
                <div class="back_image_box col s12">

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
        <li class="step step-9 step-pointer">
            <div class="step-title waves-effect">SEO Details</div>
            <div class="step-content">
              <form id="seo_details" name="seo_details">
                <input type="hidden" class="insert_id" id="insert_id" name="insert_id" >
                <div class="row">
                 <div class="input-field col s12">
                  <label for="meta_title">Meta Title:</label>
                  <input type="text" class="validate" name="meta_title" id="meta_title">
                  <span class="error-meta_title"></span>
                </div> 
                <div class="input-field col s12">
                  <label for="meta_description">Meta Description:</label>
                  <textarea id="meta_description" name="meta_description" class="materialize-textarea" style="height: 101px;"></textarea>
                </div> 
               <div class="input-field col s12">
                  <label for="meta_tags">Meta Keywords:</label>
                  <input type="text" class="validate" name="meta_tags" id="meta_tags">
                  <span class="error-meta_tags"></span>
                </div> 
                <div class="input-field col s12">
                  <label for="booking_link">H1 Tag:</label>
                  <input type="text" class="validate booking-url" name="h1_tag" id="h1_tag">
                  <span class="error-h1_tag"></span>
                </div> 
                <div class="input-field col s12">
                  <label for="h2_tag">H2 Tag:</label>
                  <input type="text" class="validate booking-url" name="h2_tag" id="h2_tag">
                  <span class="error-h2_tag"></span>
                </div> 
                <div class="input-field col s12">
                  <label for="google_pixel">Google Pixel:</label>
                  <textarea id="google_pixel" name="google_pixel" class="materialize-textarea" style="height: 101px;"></textarea>
                </div> 
                <div class="input-field col s12">
                  <label for="facebook_pixel">Facebook Pixel:</label>
                  <textarea id="facebook_pixel" name="facebook_pixel" class="materialize-textarea" style="height: 101px;"></textarea>
                </div> 
                <div class="input-field col s12">
                  <label for="all_other_pixel">All Other Pixels: <small>(Only Pixles that can be added under &lt;head&gt;&lt;/head&gt; tag)</small></label>
                  <textarea id="all_other_pixel" name="all_other_pixel" rows="5" class="materialize-textarea"></textarea>
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
                <input type="hidden" class="insert_id" id="insert_id" name="insert_id" >
                <div class="row">
                 <div class="input-field col s12">
                  <label for="cavity1">Cavity 1:</label>
                  <textarea class="validate" name="cavity1" id="cavity1"></textarea>
                  <span class="error-cavity1"></span>
                </div>

                <div class="input-field col s12">
                  <label for="cavity2">Cavity 2:</label>
                  <textarea class="validate" name="cavity2" id="cavity2"></textarea>
                  <span class="error-cavity2"></span>
                </div>

                <div class="input-field col s12">
                  <label for="cavity3">Cavity 3:</label>
                  <textarea class="validate" name="cavity3" id="cavity3"></textarea>
                  <span class="error-cavity3"></span>
                </div>

                <div class="input-field col s12">
                  <label for="cavity4">Cavity 4:</label>
                  <textarea class="validate" name="cavity4" id="cavity4"></textarea>
                  <span class="error-cavity4"></span>
                </div>

                <div class="input-field col s12">
                  <label for="cavity5">Cavity 5:</label>
                  <textarea class="validate" name="cavity5" id="cavity5"></textarea>
                  <span class="error-cavity5"></span>
                </div>

                <div class="input-field col s12">
                  <label for="cavity6">Cavity 6:</label>
                  <textarea class="validate" name="cavity6" id="cavity6"></textarea>
                  <span class="error-cavity6"></span>
                </div>

                <div class="input-field col s12">
                  <label for="cavity7">Cavity 7:</label>
                  <textarea class="validate" name="cavity7" id="cavity7"></textarea>
                  <span class="error-cavity7"></span>
                </div>

                <div class="input-field col s12">
                  <label for="cavity8">Cavity 8 (Only Pixles that can be added under &lt;body&gt;&lt;/body&gt; tag):</label>
                  <textarea class="validate" name="cavity8" id="cavity8"></textarea>
                  <span class="error-cavity8"></span>
                </div> 
                
                <div class="input-field col s12">
                  <label for="other_cavities">Other cavities: <small>(Only Pixles that can be added under &lt;head&gt;&lt;/head&gt; tag)</small></label>
                  <textarea id="other_cavities" name="other_cavities" rows="5" class="materialize-textarea"></textarea>
                </div>

                <div class="input-field col s12">
                  <label for="thank_head">Thank you page tags(added under &lt;head&gt;&lt;/head&gt; tag):</label>
                  
                  <textarea class="validate" name="thank_head" id="thank_head"></textarea>
                  <span class="error-thank_head"></span>
                </div>

                <div class="input-field col s12">
                  <label for="thank_body">Thank you page tags(added under &lt;body&gt;&lt;/body&gt; tag):</label>
                  <textarea class="validate" name="thank_body" id="thank_body"></textarea>
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
        else if(type==2)
        {
         $(".overview_images_box").html('<span class="img-e-'+e+'"><img src="'+src+'" style="height:150px;margin-right:3px;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.12), 0 1px 5px 0 rgba(0,0,0,.2);margin:5px;" class="img-thumbnail overview_images_src"></span>');
         e++;
       }
       else if(type==3)
       {
        $(".map_image_box").html('');
        $(".map_image_box").html('<span class="img-e-'+e+'"><img src="'+src+'" style="height:150px;margin-right:3px;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.12), 0 1px 5px 0 rgba(0,0,0,.2);margin:5px;" class="img-thumbnail overview_images_src"></span>');
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
   var data1 = {"featured_description":featured_description,"short_description":short_description,"overview_Amenity":overview_Amenity,"overview_images":overview_images,"insert_id":insert_id,"overview_more_images":overview_more_images,"overview_more_text":overview_more_text}; 
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
        toastr.success("Overview details added");
        $(".step").removeClass('active');
        $(".step-3").addClass('active');
        $(".step-3.step-pointer").css("pointer-events","auto");
      }
    }
  });
 }
});

$("form[name='basic_details']").validate({
  errorElement: 'span',
  rules: {
    property_type: "required",
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
        var val_banner = $("#banner_url").val();
        var val_banner_mobile = $("#banner_url_mobile").val();
        if (val_banner_mobile=="" || val_banner_mobile==""){
          return true;
        } else {
          return false;
        }
      }
        else
        {
          if ($("#banner_url").val()=='' && $("#video_name").val()==''){
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
   var property_type = $("#property_type").val();
   var title = $("#title").val();
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

   $( ".featured_images_src" ).each(function( index ) {
    var base64 = $(this).attr('src');
    featured_images.push(base64);
  });
   var mobile_banner = new Array();
   $( ".mobile_images_src" ).each(function( index ) {
    var base64 = $(this).attr('src');
    mobile_banner.push(base64);
  });
   var thumbnail_images = new Array();
   $( ".thumbnail_images_src" ).each(function( index ) {
    var base64 = $(this).attr('src');
    thumbnail_images.push(base64);
  });
   var data = {"property_type":property_type,"top_picks":top_picks,"on_going":on_going,"completed":completed,"title":title,"status":status,"location":location,"city":city,"price":price,"possession":possession,"typology":typology,"footer_typology":footer_typology,"featured_images":featured_images,"banner_type":banner_type,"video_data":video_data,"mobile_video_data":mobile_video_data,"mobile_video_url":mobile_video_url,"banner_url":banner_url,"thumbnail_images":thumbnail_images,"mobile_banner":mobile_banner,"is_pop_reload":is_pop_reload,"is_menu_bar":is_menu_bar,"insert_id":insert_id};
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
        toastr.success("Basic details added");
        $(".insert_id").val(value.insert_id);
        $(".step").removeClass('active');
        $(".step-2").addClass('active');
        $(".step-pointer").css("pointer-events","auto");
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
        toastr.success("Amenities added");
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
        toastr.success("Resources added");
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
        toastr.success("Construction details added");
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
        toastr.success("You may also like projects added");
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
        toastr.success("Booking details added");
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
        toastr.success("SEO details added");
        // window.location.href = "<?=base_url()?>klconfig/properties";

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
    url: '<?=base_url()?>klconfig/media_pixcel_details',
    type: 'POST',
    mimeType: "multipart/form-data",
    contentType: false,
    cache: false,
    processData: false,
    data: data1, 
    success: function(data)
    {
      toastr.success("Media pixcel code added");
      $("#preloader").hide();
      var value = JSON.parse(data);
      if(value.status=="success")
      {
        // window.location.href = "<?=base_url()?>klconfig/properties";
      }
    }
  });
 }
});


var oic = 1;
function addMoreOverviewImages()
{
  if (oic<=30) {
    $(".overview_more_images_section").append('<div class="row overview_images_more_inner_'+oic+'"> <div class="col m5 s11"> <div class="file-field input-field"> <div class="btn"> <span>Choose(500 x 644)</span> <input type="file" id="overview_images_more_'+oic+'" name="overview_images_more_'+oic+'" onchange="imagesOverview(this,'+oic+')"> </div> <div class="file-path-wrapper"> <input class="validate file-path file-path-overview" type="text" id="image_overview_more_'+oic+'" name="image_overview_more_'+oic+'" placeholder="Overview image(500 x 644)"> <span class="error-image_overview_more_'+oic+'"></span> </div> </div> <div class="overview_images_box_more_'+oic+' overview_images_box_more"> </div> </div> <div class="input-field col m6 s11"> <label for="short_description">Text:</label> <textarea id="overview_image_more_text_'+oic+'" name="overview_image_more_text_'+oic+'" data-id="'+oic+'" class="materialize-textarea overview_text_more"></textarea> <span class="overview_image_more_text_'+oic+'"></span> </div><div class="input-field col m1 s1"> <button class="waves-effect waves-light btn gradient-45deg-red-pink z-depth-4 mr-1 mb-2" type="button" onclick="removeOverviewSection('+oic+')">X</button> </div></div>');
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

var con = 1;
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

var exp = 1;
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
var way = 1;
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
var vid = 1;
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
var awa = 1;
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
var expt = 1;
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
var ov = 0;
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
var co = 0;
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

var ex = 0;
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
var w = 0;
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
var awad = 0;
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
var exprt = 0;
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

function changeBannerType(a)
{
  var type = $(a).val();
  if(type=='image')
  {
    $('.banner-div').html('<div class="col s12"> <label>Select Banner</label> </div><div class="file-field input-field col s12"> <div class="btn"> <span>Choose</span> <input type="file" id="featured_images" name="featured_images" onchange="imagesPreview(this,1)"> </div> <div class="file-path-wrapper"> <input class="validate file-path-basic" type="text" id="image_name" name="image_name" placeholder="Featured Banner Image"> <span class="error-image_name"></span> </div> </div> <div class="featured_images_box col s12"> </div><div class="col s12"> <label>Select Mobile Banner</label> </div><div class="file-field input-field col s12"> <div class="btn"> <span>Choose</span> <input type="file" id="featured_images_mobile" name="featured_images_mobile" onchange="imagesPreview(this,8)"> </div> <div class="file-path-wrapper"> <input class="validate file-path file-path-basic" type="text" id="banner_url_mobile" name="banner_url_mobile" placeholder="Mobile Banner Image"> <span class="error-image_name"></span> </div> </div> <div class="mobile_images_box col s12"> </div>');
  }
  else
  {
    $('.banner-div').html('<div class="file-field input-field col s12"> <div class="btn"> <span>Choose</span> <input type="file" onchange = "uploadVideo()" id="featured_video" name="featured_video"> </div> <div class="file-path-wrapper"> <input class="validate file-path file-path-basic" type="text" id="video_name" name="video_name" placeholder="Upload Desktop Banner Video"> <span class="error-video_name"></span> </div> </div><div class="col m12" style="text-align: center;font-weight: bold;">--OR--</div> <div class="input-field col m12 s12"> <label for="banner_url">Desktop Video url</label> <input type="text" class="validate" name="banner_url" id="banner_url"><input type="hidden" id="video_data" name="video_data"> </div><div class="file-field input-field col s12"> <div class="btn"> <span>Choose</span> <input type="file" onchange = "uploadVideoMobile()" id="mobile_featured_video" name="mobile_featured_video"> </div> <div class="file-path-wrapper"> <input class="validate file-path file-path-basic" type="text" id="mobile_video_name" name="mobile_video_name" placeholder="Upload Banner Video"> <span class="error-mobile_video_name"></span> </div> </div><div class="col m12" style="text-align: center;font-weight: bold;">--OR--</div> <div class="input-field col m12 s12"> <label for="mobile_video_url">Mobile Video url</label> <input type="text" class="validate" name="mobile_video_url" id="mobile_video_url"><input type="hidden" id="mobile_video_data" name="mobile_video_data"> </div>');
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

$( ".step" ).click(function() {
  $(".step").removeClass('active');
  $(this).addClass('active');
});
</script>
</body>
</html>