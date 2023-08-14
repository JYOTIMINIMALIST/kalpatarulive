<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <title>Amenities | Admin</title>
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
  <!-- END: Page Level CSS-->
  <!-- BEGIN: Custom CSS-->
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/vendors/sweetalert/sweetalert.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/custom/custom.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/pages/app-contacts.min.css">
  <!-- END: Custom CSS-->
  <style type="text/css">
    .amenity-icon img,.amenity-iconE img{
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
              <h5 class="breadcrumbs-title mt-0 mb-0"><span>Amenities</span></h5>
              <ol class="breadcrumbs mb-0">
                <li class="breadcrumb-item"><a href="<?=base_url()?>">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Amenities</a>
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
              <div class="col s12">
                <div id="chips-styles" class="card card-default">
                  <div class="card-content">

                    <div class="row">
                      <div class="col s12">
                        <h4 class="card-title">Amenities</h4>
                      </div>
                      <div class="col s12">
                        <div class="section">
                          <?php
                          foreach ($amenities as $key => $value) {                            
                            ?>
                            <div class="chip gradient-45deg-purple-deep-orange gradient-shadow white-text">
                              <img src="<?=$value->icon?>" alt="Materialize">
                              <?=$value->title?>
                              <i class="material-icons chip-btn" onclick="deleteAminity(<?=$value->id?>)">delete</i>
                              <i class="material-icons chip-btn" onclick="editEminity(<?=$value->id?>,'<?=$value->title?>','<?=$value->icon?>')">edit</i>
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
          <div style="bottom: 54px; right: 19px;" class="fixed-action-btn direction-top">
            <a class="btn-floating btn-large primary-text gradient-shadow" onclick="openForm();" href="javascript:void(0)">
              <i class="material-icons">add</i>
            </a>
          </div>
          <div class="contact-compose-sidebar add-form">
            <div class="card quill-wrapper">
              <div class="card-content pt-0">
                <div class="card-header display-flex pb-2">
                  <h3 class="card-title contact-title-label">Create New Amenity</h3>
                  <div class="close close-icon">
                    <i class="material-icons">close</i>
                  </div>
                </div>
                <div class="divider"></div>
                <!-- form start -->
                <form class="edit-contact-item mb-5 mt-5" id="form_amenity" name="form_amenity"> 
                  <div class="row">
                    <div class="input-field col s12">
                      <input id="title" name="title" type="text" class="validate">
                      <label for="title">Amenity title</label>
                      <div id="error_title"></div>
                    </div>
                    <div class="file-field input-field col s12">
                      <div class="btn">
                        <span>Choose</span>
                        <input type="file" id="icon" name="icon" onchange="imagesPreview(this,1)">
                      </div>
                      <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" placeholder="Upload an Icon">
                      </div>

                      <div class="amenity-icon">

                      </div>
                    </div>
                    <div class="input-field col s12">
                      <div id="error_icon"></div>
                    </div>
                  </div>

                  <div class="card-action pl-0 pr-0 right-align">
                    <button class="mb-6 btn waves-effect waves-light gradient-45deg-purple-deep-orange" type="submit">
                      <span>Save amenity</span>
                    </button>
                  </div>
                </form>
                <!-- form start end-->
              </div>
            </div>
          </div>

          <div class="contact-compose-sidebar edit-form">
            <div class="card quill-wrapper">
              <div class="card-content pt-0">
                <div class="card-header display-flex pb-2">
                  <h3 class="card-title contact-title-label">Edit Amenity</h3>
                  <div class="close close-icon">
                    <i class="material-icons">close</i>
                  </div>
                </div>
                <div class="divider"></div>
                <!-- form start -->
                <form class="edit-contact-item mb-5 mt-5" id="form_amenityE" name="form_amenityE">
                  <input type="hidden" id="id" name="id">
                  <div class="row">
                    <div class="input-field col s12">
                      <input id="titleE" name="titleE" type="text" class="validate">
                      <label id="label-title" for="titleE">Amenity title</label>
                      <div id="error_titleE"></div>
                    </div>
                      <div class="input-field col s12">
                      <input id="svgE" name="svgE" type="text" class="validate">
                      <label id="label-svgE" for="svgE">Amenity Svg Alt Tag</label>
                      <div id="error_svgE"></div>
                    </div>
                    <div class="file-field input-field col s12">
                      <div class="btn">
                        <span>Choose</span>
                        <input type="file" id="iconE" name="iconE" onchange="imagesPreview(this,2)">
                      </div>
                      <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" placeholder="Upload an Icon">
                      </div>

                      <div class="amenity-iconE">

                      </div>
                    </div>
                    <div class="input-field col s12">
                      <div id="error_iconE"></div>
                    </div>
                  
                  
                  </div>
                  <div class="card-action pl-0 pr-0 right-align">
                    <button class="mb-6 btn waves-effect waves-light gradient-45deg-purple-deep-orange" type="submit">
                      <span>Update amenity</span>
                    </button>
                  </div>
                </form>

                <!-- form start end-->
              </div>
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
  <script src="<?=base_url()?>assets/js/scripts/extra-components-sweetalert.min.js"></script>
  <script src="<?=base_url()?>assets/js/validation.js"></script>
  <script type="text/javascript">
    $(".sidenav li a").removeClass('active');
    $(".nav-amenities").addClass('active');
    function imagesPreview(input,type) {
      if (input.files) {
       var filesAmount = input.files.length;
       for (var i = 0; i < filesAmount; i++)   {
        var reader = new FileReader();
        reader.onload = function(event) {
         var src = event.target.result;  
         if (type==1) {             
          $(".amenity-icon").html('<span class="avatar-contact avatar-online"><img id="icon_src" style="width:40px;height:40px;" src="'+src+'" alt="avatar"></span>');
        }
        else
        {
          $(".amenity-iconE").html('<span class="avatar-contact avatar-online"><img id="icon_srcE" style="width:40px;height:40px;" src="'+src+'" alt="avatar"></span>');
        }
      }
      reader.readAsDataURL(input.files[i]);
    }
  }
}
function openForm()
{
  $(".add-form").addClass('show');
}
function editEminity(id,title,icon)
{
  $(".amenity-iconE").html('<span class="avatar-contact avatar-online"><img id="icon_srcE" style="width:40px;height:40px;" src="'+icon+'" alt="avatar"></span>');
  var d = $("#titleE").val(title);

  $("#id").val(id);
  $(".edit-form").addClass('show'); 
  $("#label-title").addClass("active");
}
function deleteAminity(id)
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
    var Catid = {"id":id,"table":"amenities"};
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

$("form[name='form_amenity']").validate({
  rules: {
    title: "required"
  },

  errorPlacement: function(error, element) {
    if(element.attr("name") == "title") {
      error.appendTo("#error_title");
    }
    if(element.attr("name") == "svgalt") {
      error.appendTo("#error_svgalt");
    }
    else if(element.attr("name") == "icon") {
      error.appendTo("#error_icon");
    }
    else
    {
      error.insertAfter(element);
    }
  },
  submitHandler: function(form, event) {
   $("#preloader").show(); 
   var id = $("#id").val();
   var title = $("#title").val();
   var svgalt = $("#svgalt").val();
   var icon = $("#icon_src").attr('src');
   var icon_imageE = new Array();
   icon_imageE = [icon];
   var data = {"id":id,"title":title,"svgalt":svgalt,"icon":icon_imageE}; 
   $.ajax({
    url: '<?=base_url()?>klconfig/saveAmenities',
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
        window.location.href = "amenities";
      }
    }
  });
 }
});

$("form[name='form_amenityE']").validate({
  rules: {
    titleE: "required"
  },
  errorPlacement: function(error, element) {
    if(element.attr("name") == "titleE") {
      error.appendTo("#error_titleE");
    }
    if(element.attr("name") == "svgE") {
      error.appendTo("#error_svgE");
    }
    
    else if(element.attr("name") == "iconE") {
      error.appendTo("#error_iconE");
    }
    else
    {
      error.insertAfter(element);
    }
  },
  submitHandler: function(form, event) {
   $("#preloader").show(); 
   var id = $("#id").val();
   var titleE = $("#titleE").val();
   var svgE = $("#svgE").val();
   var iconE = $("#icon_srcE").attr('src');
   var icon_imageE = new Array();
   icon_imageE = [iconE];
   var data = {"id":id,"title":titleE,"svgalt":svgE,"icon":icon_imageE}; 
   $.ajax({
    url: '<?=base_url()?>klconfig/updateAmenities',
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
        window.location.href = "amenities";
      }
    }
  });
 }
});

</script>
</body>

</html>