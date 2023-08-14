<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <title>Cities | Admin</title>
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
              <h5 class="breadcrumbs-title mt-0 mb-0"><span>Cities</span></h5>
              <ol class="breadcrumbs mb-0">
                <li class="breadcrumb-item"><a href="<?=base_url()?>">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Cities</a>
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
                        <h4 class="card-title">Cities</h4>
                      </div>
                      <div class="col s12">
                        <div class="section">
                          <?php
                          foreach ($cities as $key => $value) {                            
                            ?>
                            <div class="chip gradient-45deg-purple-deep-orange gradient-shadow white-text">
                              <?=$value->title?>
                              <i class="material-icons chip-btn" onclick="deleteCity(<?=$value->id?>)">delete</i>
                              <i class="material-icons chip-btn" onclick="editCity(<?=$value->id?>,'<?=$value->title?>','<?=$value->slug?>')">edit</i>
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
                  <h3 class="card-title contact-title-label">Add New city</h3>
                  <div class="close close-icon">
                    <i class="material-icons">close</i>
                  </div>
                </div>
                <div class="divider"></div>
                <!-- form start -->
                <form class="edit-contact-item mb-5 mt-5" id="form_city" name="form_city"> 
                  <div class="row">
                    <div class="input-field col s12">
                      <input id="title" name="title" type="text" class="validate">
                      <label for="title">City Name</label>
                      <div id="error_title"></div>
                    </div>
                    <div class="input-field col s12">
                      <div id="error_icon"></div>
                    </div>
                  </div>

                  <div class="card-action pl-0 pr-0 right-align">
                    <button class="mb-6 btn waves-effect waves-light gradient-45deg-purple-deep-orange" type="submit">
                      <span>Save City</span>
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
                  <h3 class="card-title contact-title-label">Edit City</h3>
                  <div class="close close-icon">
                    <i class="material-icons">close</i>
                  </div>
                </div>
                <div class="divider"></div>
                <!-- form start -->
                <form class="edit-contact-item mb-5 mt-5" id="form_cityE" name="form_cityE">
                  <input type="hidden" id="id" name="id">
                  <div class="row">
                    <div class="input-field col s12">
                      <input id="titleE" name="titleE" type="text" class="validate">
                      <label id="label-title" for="titleE">City Name</label>
                      <div id="error_titleE"></div>
                    </div>
                    <div class="input-field col s12">
                      <input id="slugE" name="slugE" type="text" class="validate">
                      <label id="label-title" for="slugE">Slug</label>
                      <div id="error_slugE"></div>
                    </div>
                    <div class="input-field col s12">
                      <div id="error_iconE"></div>
                    </div>
                  </div>
                  <div class="card-action pl-0 pr-0 right-align">
                    <button class="mb-6 btn waves-effect waves-light gradient-45deg-purple-deep-orange" type="submit">
                      <span>Update City</span>
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
    $(".nav-cities").addClass('active');
    function imagesPreview(input,type) {
      if (input.files) {
       var filesAmount = input.files.length;
       for (var i = 0; i < filesAmount; i++)   {
        var reader = new FileReader();
        reader.onload = function(event) {
         var src = event.target.result;  
         if (type==1) {             
          $(".city-icon").html('<span class="avatar-contact avatar-online"><img id="icon_src" style="width:40px;height:40px;" src="'+src+'" alt="avatar"></span>');
        }
        else
        {
          $(".city-iconE").html('<span class="avatar-contact avatar-online"><img id="icon_srcE" style="width:40px;height:40px;" src="'+src+'" alt="avatar"></span>');
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
function editCity(id,title,slug,icon)
{
  $(".city-iconE").html('<span class="avatar-contact avatar-online"><img id="icon_srcE" style="width:40px;height:40px;" src="'+icon+'" alt="avatar"></span>');
  $("#titleE").val(title);
  $("#slugE").val(slug);
  $("#id").val(id);
  $(".edit-form").addClass('show'); 
  $("#label-title").addClass("active");
}
function deleteCity(id)
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
    var Catid = {"id":id,"table":"cities"};
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

$("form[name='form_city']").validate({
  rules: {
    title: "required"
  },
  errorPlacement: function(error, element) {
    if(element.attr("name") == "title") {
      error.appendTo("#error_title");
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
   var data = {"id":id,"title":title}; 
   $.ajax({
    url: '<?=base_url()?>klconfig/saveCities',
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
        window.location.href = "cities";
      }
    }
  });
 }
});

$("form[name='form_cityE']").validate({
  rules: {
    titleE: "required"
  },
  errorPlacement: function(error, element) {
    if(element.attr("name") == "titleE") {
      error.appendTo("#error_titleE");
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
   var slugE = $("#slugE").val();
   var data = {"id":id,"title":titleE,"slug":slugE,}; 
   $.ajax({
    url: '<?=base_url()?>klconfig/updateCities',
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
        window.location.href = "Cities";
      }
    }
  });
 }
});

</script>
</body>

</html>