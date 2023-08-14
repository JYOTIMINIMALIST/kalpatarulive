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
    <title>Press | Admin</title>
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
                <h5 class="breadcrumbs-title mt-0 mb-0"><span><?php echo $meta_title; ?></span></h5>
                <ol class="breadcrumbs mb-0">
                  <li class="breadcrumb-item"><a href="<?=base_url()?>">Home</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#"><?php echo $meta_title; ?></a>
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="col s12">
        <div class="container">
          <div class="section">
            <div class="row">
              <div class="col s12">
                <div id="chips-styles" class="card card-default">
                  <div class="card-content">
                    <!-- Chips Styles -->
                    <form class="edit_press_form mb-5 mt-5" id="edit_press_form" name="edit_press_form"> 
                      <?php if(isset($press) && !empty($press->id)): ?>
                      <input type="hidden" id="id" name="id" value="<?=$press->id;?>">
                      <?php endif; ?>
                      <div class="row">
                        <div class="col s12">
                          <h4 class="card-title"><?php echo $meta_title; ?></h4>
                        </div>
                        <div class="input-field col s12">
                          <select id="project_id" name="project_id" class="validate" required>
                            <option value="">Select Project</option>
                            <?php if(isset($properties) && !empty($properties)):
                            foreach($properties as $pKey=>$pVal):
                              $selected = "";
                              if(isset($press) && ($press->project_id == $pVal->id)){
                                $selected = "selected";
                              } ?>
                            <option value="<?php echo $pVal->id; ?>" <?php echo $selected; ?>><?php echo $pVal->title; ?></option>
                            <?php endforeach; 
                            endif; ?>
                          </select>
                          <label>Projects List</label>
                          <div id="error_project_id"></div>
                        </div> 
                        <div class="input-field col s12">
                          <input id="title" name="title" type="text" value="<?php echo (isset($press)?$press->title:''); ?>" class="validate">
                          <label for="title">Title</label>
                          <div id="error_title"></div>
                        </div>
                        <div class="input-field col s12">
                          <textarea id="description" name="description" class="materialize-textarea"><?php echo (isset($press)?$press->description:''); ?></textarea>
                          <label for="title">Description</label>
                        </div>
                        <div class="input-field col s12">
                          <input id="article_date" name="article_date" type="date" value="<?php echo (isset($press)?$press->article_date:''); ?>" class="validate">
                          <label for="article_date">Article Date</label>
                          <div id="error_article_date"></div>
                        </div>
                        <small class="pl-1">Note: Please add either link or attachment</small>
                        <div class="input-field col s12">
                          <input id="external_link" name="external_link" type="text" value="<?php echo (isset($press)?$press->external_link:''); ?>" class="validate">
                          <label for="external_link">External Link</label>
                          <div id="error_external_link"></div>
                        </div>
                        <div class="file-field input-field col <?php echo (isset($press) && !empty($press->pdf_file)?'s8':'s12'); ?> file-input">
                          <div class="btn">
                            <span>Choose</span>
                            <input type="file" id="file" name="file">
                          </div>
                          <div class="file-path-wrapper">
                            <input class="file-path validate" name="pdf_file" type="text" placeholder="Upload File Attachment">
                          </div>
                        </div>
                        <?php if(isset($press) && !empty($press->pdf_file)): ?>
                        <div class="input-field col s4">
                          <a class="input-field col s8" target="_blank" href="<?php echo $press->pdf_file; ?>" title="">View Attachment</a>&nbsp;&nbsp;
                          <button class="waves-effect waves-light btn gradient-45deg-red-pink z-depth-4 mr-1 mb-2" type="button" onclick="removeAttachment('<?php echo $press->id; ?>')">X</button> </div>
                        <?php endif; ?>
                        <div class="input-field col s12 file-box">

                        </div>
                        <div class="file-data">

                        </div>
                        <div class="input-field col s12">
                          <select id="is_active" name="is_active" class="validate" required>
                            <option value="">---Select---</option>
                            <option <?php echo (isset($press)?(($press->is_active == 1)?'selected':''):''); ?> value="1">Active</option>
                            <option <?php echo (isset($press)?(($press->is_active == 0)?'selected':''):''); ?> value="0">In Active</option>
                          </select>
                          <label>Status</label>
                          <div id="error_is_active"></div>
                        </div> 
                      </div>
                      <div class="card-action pl-0 pr-0 right-align">
                        <button class="mb-6 btn waves-effect waves-light gradient-45deg-purple-deep-orange" type="submit">
                          <span>Save</span>
                        </button>
                      </div>
                    </form>
                  </div>
                  <div class="content-overlay"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END: Page Main-->
    <?php include 'footer.php'?>
    <script src="<?=base_url()?>assets/vendors/sweetalert/sweetalert.min.js"></script>
    <script src="<?=base_url()?>assets/vendors/imagesloaded.pkgd.min.js"></script>
    <script src="<?=base_url()?>assets/js/scripts/extra-components-sweetalert.min.js"></script>
    <script src="<?=base_url()?>assets/js/validation.js"></script>
    <script>
      $(".sidenav li a").removeClass('active');
      $(".nav-press").addClass('active');
      function imagesPreview(input,type) {
        if (input.files) {
          var filesAmount = input.files.length;
          for (var i = 0; i < filesAmount; i++)   {
            var reader = new FileReader();
            reader.onload = function(event) {
              var src = event.target.result;  
              if (type==1) {             
                $(".file-box").html('<span class="avatar-contact avatar-online"><img id="icon_src" style="height:100px;" src="'+src+'" alt="avatar"></span>');
              }
              else
              {
                $(".file-boxE").html('<span class="avatar-contact avatar-online"><img id="icon_src" style="height:100px;" src="'+src+'" alt="avatar"></span>');
              }
            }
            reader.readAsDataURL(input.files[i]);
          }
        }
      }

      function removeAttachment(id){
        swal({
          title: "Are you sure?",
          text: "You won't be able to revert this!",
          type: "warning",
          showCancelButton: !0,
          confirmButtonClass: "btn btn-success",
          cancelButtonClass: "btn btn-danger m-l-10",
          confirmButtonText: "Yes, delete it!",
          closeOnCancel: true,
          buttons: {
            cancel: true,
            delete: 'Yes, Delete It'
          }
        }).then(function(isConfirm) { 
          if(isConfirm)
          {
            var Catid = {"id":id,"table":"press_news"};
            $.ajax({
              url:'<?=base_url()?>klconfig/removePressAttachment',
              type: 'POST',
              data: JSON.stringify(Catid),
              contentType: 'application/json; charset=utf-8',
              datatype: 'JSON',
              async: false,
              success: function(data)
              {
                var value = JSON.parse(data);
                if(value.status == 'success')
                {    
                  swal("Deleted successfully.", "", "success").then((value) => {
                    location.reload();
                  });
                }
                else
                {
                  swal("Something went wrong!", "", "warning");
                }
              }
            });
          }
        });
      }

      $(document).ready(function(){
        $("form[name='edit_press_form']").validate({
          errorElement: 'div',
          rules: {
            project_id: "required",
            title: "required",
            article_date: "required",
            is_active: "required",
          },
          submitHandler: function(form, event) {
           $("#preloader").show(); 
           var data1 = new FormData($('#edit_press_form')[0]);
           $.ajax({
            url: '<?=base_url()?>klconfig/edit_press',
            type: 'POST',
            mimeType: "multipart/form-data",
            contentType: false,
            cache: false,
            processData: false,
            data: data1,
            success: function(data){
              $("#preloader").hide();
              var value = JSON.parse(data);
              if(value.status=="success"){
                if (value.redirect_url) {
                  window.location.href = value.redirect_url;
                }
              }
            }
          });
         }
        });
      })
    </script>
  </body>
</html>