<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <title>Gallery | Admin</title>
  <link rel="apple-touch-icon" href="<?=base_url()?>assets/images/favicon/apple-touch-icon-152x152.png">
  <link rel="shortcut icon" type="image/x-icon" href="<?=base_url()?>assets/images/favicon/favicon-32x32.png">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- BEGIN: VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/vendors/vendors.min.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/vendors/animate-css/animate.css">
  <!-- END: VENDOR CSS-->
  <!-- BEGIN: Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/themes/vertical-modern-menu-template/materialize.min.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/themes/vertical-modern-menu-template/style.min.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/vendors/magnific-popup/magnific-popup.css">
  <!-- END: Page Level CSS-->
  <!-- BEGIN: Custom CSS-->
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/vendors/sweetalert/sweetalert.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/custom/custom.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/pages/app-contacts.min.css">
  <!-- END: Custom CSS-->
  <style type="text/css">
    .city-icon img,.city-iconE img{
      width: 38px;
      border-radius: 50%;
      background-color: #f5f5f5;
      box-shadow: 0 2px 2px 0 rgba(0,0,0,.12);
    }
    .chip .chip-btn {
      font-size: 16px;
      float: right;
      padding-left: 8px;
      line-height: 32px;
      cursor: pointer;
    }
    .contact-compose-sidebar{
      width: 35.8rem !important;
    }
    .file-path-wrapper{
      width: 100% !important;
    }
  </style>
</head>
<!-- END: Head-->
<body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 2-columns   " data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">
  <?php include 'header.php'; ?>
  <!-- BEGIN: Page Main-->
  <!-- BEGIN: Page Main-->
  <div id="main">
    <div class="row">
      <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
      <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
        <!-- Search for small screen-->
        <div class="container">
          <div class="row">
            <div class="col s10 m6 l6">
              <h5 class="breadcrumbs-title mt-0 mb-0"><span>Gallery</span></h5>
              <ol class="breadcrumbs mb-0">
                <li class="breadcrumb-item"><a href="<?=base_url()?>">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Gallery</a>
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="col s12">
        <div class="container">
          <div class="section">
            <!-- Chips Styles -->
            <div class="row">
              <div class="col s12 m12 l12">
               <div id="Fixed-width-tabs" class="card card card-default scrollspy">
                <div class="card-content">
                  <div class="row">
                    <div class="col s12">
                     <ul class="tabs tabs-fixed-width tab-demo z-depth-1">
                      <li class="tab"><a class="active" href="#images">IMAGES</a></li>
                      <li class="tab"><a href="#video">VIDEOS</a></li>
                    </ul>
                  </div>
                  <div class="col s12">
                   <div id="images" class="col s12" style="margin-top: 30px;">
                    <div class="row">
                     <div class="col m12">
                      <div class="masonry-gallery-wrapper">
                        <div class="popup-gallery">
                          <div class="gallery-sizer"></div>
                          <div class="row">
                            <?php
                            foreach ($gallery as $key => $value) {
                              if ($value->type!='image') {
                                continue;
                              }
                              ?>
                              <div class="col s12 m3">

                                <div>
                                  <a href="<?=$value->thumbnail?>" title="<?=$value->title?>">
                                    <img style="height: 250px;" src="<?=$value->thumbnail?>" class="responsive-img mb-10" alt="<?=$value->title?>">
                                  </a>
                                  <i class="material-icons" onclick="deleteGallery(<?=$value->id?>);" style="position: absolute; margin-left: -30px;color:#fff; margin-top: 15px;font-size:20px;cursor:pointer;z-index: 5; color:#fff;">delete</i><i class="material-icons" data-toggle="modal" data-target=".bs-edit-modal-lg" onclick="editGallery(<?=$value->id?>);" style="position: absolute; margin-left: -55px;color:white; margin-top: 15px;font-size:20px;cursor:pointer;z-index: 5;color:#fff;">mode_edit</i>
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
                <div id="video" class="col s12" style="margin-top: 30px;">
                  <div class="row">
                   <div class="col m12">
                    <div class="masonry-gallery-wrapper">
                      <div class="">
                        <div class="gallery-sizer"></div>
                        <div class="row">
                          <?php
                          foreach ($gallery as $key => $value) {
                            if ($value->type=='image') {
                              continue;
                            }
                            if(strpos($value->video_url, 'amazonaws.com') !== false || strpos($value->video_url, 'cloudfront.net') !== false){
                              $video_url =  $value->video_url;
                              $type = 's3';
                            }
                            else
                            {
                              $link = $value->video_url;;
                              $video_id = explode("?v=", $link);
                              if (empty($video_id[1]))
                                $video_id = explode("/v/", $link); 
                              $video_id = explode("&", $video_id[1]);
                              $video_id = $video_id[0];
                              $video_url = 'https://www.youtube.com/embed/'.$video_id;
                              $type = 'youtube';
                            }
                            ?>
                            <div class="col s12 m3">
                              <div>
                                <a href="#modal1" class="modal-trigger" onclick="openVideo('<?=$value->title?>','<?=trim($video_url)?>','<?=$type?>');" title="<?=$value->title?>">
                                  <img style="height: 250px;" src="<?=$value->thumbnail?>" class="responsive-img mb-10" alt="<?=$value->title?>">
                                </a>
                                <i class="material-icons" onclick="deleteGallery(<?=$value->id?>);" style="position: absolute; margin-left: -30px;color:#fff; margin-top: 15px;font-size:20px;cursor:pointer;z-index: 5; color:#FFF;">delete</i><i class="material-icons" data-toggle="modal" data-target=".bs-edit-modal-lg" onclick="editGallery(<?=$value->id?>);" style="position: absolute; margin-left: -55px;color:white; margin-top: 15px;font-size:20px;cursor:pointer;z-index: 5;color:#FFF;">mode_edit</i>
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
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div style="bottom: 54px; right: 19px;" class="fixed-action-btn direction-top">
  <a href="<?=base_url()?>klconfig/galleryAdd" class="btn-floating btn-large primary-text gradient-shadow" href="javascript:void(0)">
    <i class="material-icons">add</i>
  </a>
</div>
<div id="modal1" class="modal">
  <div class="modal-content">
    <h6 id="video_title"></h6>
    <div style="width: 100%;">
      <video id="video_s3" width="100%" height="350" controls style="display: none;">
        <source id="video_s3_url" src="" type="video/mp4">
            Your browser does not support the video tag.
      </video>
      <iframe id="video_youtube" width="100%" height="350" style="display: none;"
      src="">
    </iframe>
    </div>
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat " onclick="closeVideo();">Close</a>
  </div>
</div>

</div>
<div class="content-overlay"></div>
</div>
</div>
</div>
<!-- END: Page Main-->
<!-- END: Page Main-->
<?php include 'footer.php'; ?>
<script src="<?=base_url()?>assets/js/scripts/ui-chips.min.js"></script>
<script src="<?=base_url()?>assets/js/scripts/app-contacts.min.js"></script>
<script src="<?=base_url()?>assets/vendors/data-tables/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>assets/vendors/sweetalert/sweetalert.min.js"></script>
<script src="<?=base_url()?>assets/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?=base_url()?>assets/vendors/imagesloaded.pkgd.min.js"></script>
<script src="<?=base_url()?>assets/js/scripts/extra-components-sweetalert.min.js"></script>
<script src="<?=base_url()?>assets/js/scripts/media-gallery-page.min.js?v=1"></script>
<script src="<?=base_url()?>assets/js/validation.js"></script>
<script src="<?=base_url()?>assets/js/scripts/advance-ui-modals.min.js"></script>
<script type="text/javascript">
  $(".sidenav li a").removeClass('active');
  $(".nav-gallery").addClass('active');
  function editGallery(id)
  {
    window.location.href = "<?=base_url()?>klconfig/editGallery?id="+id;
  }
  function deleteGallery(id)
  {
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
      var Catid = {"id":id,"table":"gallery"};
      $.ajax({
        url:'<?=base_url()?>klconfig/deleteData',
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
function openVideo(title,url,type)
{
  if (type=='s3') {
    $("#video_s3").show();
    $("#video_youtube").hide();

    $('#video_s3_url').attr("src",url);
    $("#video_s3")[0].load();
  }
  else
  {
    $("#video_youtube").show();
    $("#video_s3").hide();

    $('#video_youtube').attr("src",url);
  }
  $("#video_title").html(title);
}
function closeVideo()
{
  $('#video_s3_url').attr("src","");
  $('#video_youtube').attr("src","");
}
</script>
</body>

</html>