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
            <div class="row">
              <div class="col s12">
                <div id="chips-styles" class="card card-default">
                  <div class="card-content">
                    <!-- Chips Styles -->
                    <form class="edit-contact-item mb-5 mt-5" id="form_gallery" name="form_gallery"> 
                      <div class="row">
                       <div class="col s12">
                        <h4 class="card-title">Add Image or Video</h4>
                      </div>
                        <div class="input-field col s12">
                          <select onchange="fileType(this,1)" id="type" name="type">
                            <option value="image">Image</option>
                            <option value="video">Video</option>
                          </select>
                          <label>Select Type</label>
                        </div> 
                        <div class="input-field col s12">
                          <input id="title" name="title" type="text" class="validate">
                          <label for="title">Title</label>
                          <div id="error_title"></div>
                        </div>
                        <div class="input-field col s12">
                          <input id="project_url" name="project_url" type="text" class="validate">
                          <label for="project_url">Project URL</label>
                          <div id="error_title"></div>
                        </div>
                        <div class="file-field input-field col s12 file-input">
                         <div class="btn">
                          <span>Choose</span>
                          <input type="file" id="file" name="file" onchange="imagesPreview(this,1)">
                        </div>
                        <div class="file-path-wrapper">
                          <input class="file-path validate" name="file_name" type="text" placeholder="Upload Image">
                        </div>
                      </div>
                      <div class="input-field col s12 file-box">

                      </div>
                      <div class="file-data">

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
</div>
<?php include 'footer.php'; ?>
<script src="<?=base_url()?>assets/js/scripts/ui-chips.min.js"></script>
<script src="<?=base_url()?>assets/js/scripts/app-contacts.min.js"></script>
<script src="<?=base_url()?>assets/vendors/data-tables/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>assets/vendors/sweetalert/sweetalert.min.js"></script>
<script src="<?=base_url()?>assets/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?=base_url()?>assets/vendors/imagesloaded.pkgd.min.js"></script>
<script src="<?=base_url()?>assets/js/scripts/extra-components-sweetalert.min.js"></script>
<script src="<?=base_url()?>assets/js/scripts/media-gallery-page.min.js"></script>
<script src="<?=base_url()?>assets/js/validation.js"></script>
<script type="text/javascript">
  $(".sidenav li a").removeClass('active');
  $(".nav-gallery").addClass('active');
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
function fileType(a,type)
{
  if ($(a).val()=='image') {
    var filetype = '';
  }
  else
  {
    var filetype = '<div class="file-field input-field col s12 file-input"> <div class="btn"> <span>Choose</span> <input type="file" id="video_file" name="video_file" onchange="uploadVideo()"> </div> <div class="file-path-wrapper"> <input class="file-path validate" type="text" name="video_name" placeholder="Upload Video"> </div> </div> <div class="col s12" style="text-align: center;">--OR--</div> <div class="input-field col s12"> <input id="video_url" name="video_url" type="text" class="validate"> <label for="video_url">Video URL</label> <div></div> </div><input type="hidden" id="video_data" name="video_data">';
  }
  if (type==1) {
    $(".file-data").html(filetype);
  }
  else
  {
    $(".file-dataE").html(filetype);
  }
}

function uploadVideo() {
  $("#preloader").show();
  jQuery.ajax({
    type: 'POST',
    url:'<?=base_url()?>klconfig/uploadGalleryVideo',
    data: new FormData($("#form_gallery")[0]),
    processData: false, 
    contentType: false, 
    success: function(returnval) {
     $("#video_data").val(returnval);
     $("#preloader").hide();
   }
 });
}
function uploadVideoE() {
  $("#preloader").show();
  jQuery.ajax({
    type: 'POST',
    url:'<?=base_url()?>klconfig/uploadGalleryVideo',
    data: new FormData($("#form_galleryE")[0]),
    processData: false, 
    contentType: false, 
    success: function(returnval) {
     $("#video_dataE").val(returnval);
     $("#preloader").hide();
   }
 });
}
$("form[name='form_gallery']").validate({
  errorElement: 'div',
  rules: {
    title: "required",
    file_name: "required",
    project_url: "required",
    video_url: {
      required: function(){
        if ($("#video_url").val()=='' && $("#video_data").val()==''){
          return true;
        }
        else
        {
          return false;
        }
      }
    },
  },
  submitHandler: function(form, event) {
   $("#preloader").show(); 
   var data1 = new FormData($('#form_gallery')[0]);
   $.ajax({
    url: '<?=base_url()?>klconfig/saveGallery',
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
        var type = $("#type").val();
        if (type=='image') {
          window.location.href = "gallery";
        }
        else
        {
          window.location.href = "gallery#video";
        }
      }
    }
  });
 }
});
</script>
</body>

</html>