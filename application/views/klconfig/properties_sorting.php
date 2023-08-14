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
    <title>Properties Sorting | Admin</title>
    <link rel="apple-touch-icon" href="<?=base_url()?>assets/images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?=base_url()?>assets/images/favicon/favicon-32x32.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/vendors/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/vendors/materialize-stepper/materialize-stepper.min.css">
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
                <h5 class="breadcrumbs-title mt-0 mb-0"><span>Sort Properties</span></h5>
                <ol class="breadcrumbs mb-0">
                  <li class="breadcrumb-item"><a href="<?=base_url()?>klconfig">Home</a>
                  </li>
                  <li class="breadcrumb-item"><a href="<?=base_url()?>klconfig/properties">Properties</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">Sort Properties</a>
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
              <div class="row">
                <div class="col s12">
                  <div class="card">
                    <div class="card-content">
                      <div class="card-header">
                        <h4 class="card-title">Properties</h4>
                      </div>
                      <div id="selected_media" class="row reorder-photos-list sortable">
                      <?php  foreach ($properties as $key => $value) { ?>
                        <div class="col s3 margin-top img-box" id="<?php echo $value->id; ?>" style="margin-bottom: 10px; cursor: move;">
                            <label class="thumbnail image-checkbox">
                                <img src="<?php echo $value->thumbnail_image; ?>" class="img-thumbnail m_content" style="height: 150px;width: 100%;">
                                <p style="font-size: 14px;min-height: 45px;color: #000;" title="<?php echo $value->title; ?>"><?php echo $value->title; ?></p>
                            </label>
                        </div>
                      <?php  } ?>
                      </div>
                      <div style="text-align: center;">
                        <button class="waves-effect waves dark btn btn-primary" type="button" id="submit_sort">Submit</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
    <?php include 'footer.php'?>
    <script src="<?=base_url()?>assets/js/scripts/customizer.min.js"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="<?=base_url()?>assets/js/scripts/app-invoice.min.js"></script>
    <script src="<?=base_url()?>assets/vendors/sweetalert/sweetalert.min.js"></script>
    <script src="<?=base_url()?>assets/js/scripts/extra-components-sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script type="text/javascript">
      $(".sidenav li a").removeClass('active');
      $(".nav-properties").addClass('active');
       $(document).ready(function(){
          $("#selected_media").sortable({ 
              tolerance: 'pointer'
          });
          $("#submit_sort").click(function(){
            var oSortable = $(".sortable").sortable("toArray");

            $.post('<?php echo base_url('klconfig/postSortProperties') ?>', { sortable : oSortable }, function(data){
              //$("#selected_media").html(data);
              swal("Order updated successfully.", "", "success").then((value) => {
                location.reload();
              });
            });
          });
      });
    </script>
  </body>
</html>