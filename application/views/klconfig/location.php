<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <title>Location | Admin</title>
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
    .location-icon img,.location-iconE img{
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
              <h5 class="breadcrumbs-title mt-0 mb-0"><span>location</span></h5>
              <ol class="breadcrumbs mb-0">
                <li class="breadcrumb-item"><a href="<?=base_url()?>">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Location</a>
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
                        <h4 class="card-title">Locations</h4>
                      </div>
                      <div class="col s12">
                        <div class="section">
                          <?php
                          foreach ($location as $key => $value) {                            
                            ?>
                            <div class="chip gradient-45deg-purple-deep-orange gradient-shadow white-text">
                              <?=$value->location?>, <?=$value->title?>
                              <i class="material-icons chip-btn" onclick="locationdelete(<?=$value->id?>)">delete</i>
                              <i class="material-icons chip-btn" onclick="editLocation(<?=$value->id?>,'<?=$value->location?>','<?=$value->slug?>',<?=$value->city_id?>)">edit</i>
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
                  <h3 class="card-title contact-title-label">Add New location</h3>
                  <div class="close close-icon">
                    <i class="material-icons">close</i>
                  </div>
                </div>
                <div class="divider"></div>
                <!-- form start -->
                <form class="edit-contact-item mb-5 mt-5" id="form_location" name="form_location"> 
                  <div class="row">
                    <div class="input-field col s12">
                    <select id="city_id" name="city_id" type="text" class="validate">
                      <?php
                      foreach ($cities as $key => $value) {                            
                        ?>
                        <option value="<?=$value->id?>"><?=$value->title?></option>
                        <?php
                      }
                      ?>
                    </select>
                    <label>Select City</label>
                    <div id="error_city_id"></div>
                  </div>
                  <div class="input-field col s12">
                    <input id="location" name="location" type="text" class="validate">
                    <label for="location">Location Name</label>
                    <div id="error_location"></div>
                  </div>

                </div>

                <div class="card-action pl-0 pr-0 right-align">
                  <button class="mb-6 btn waves-effect waves-light gradient-45deg-purple-deep-orange" type="submit">
                    <span>Save location</span>
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
                <h3 class="card-title contact-title-label">Edit location</h3>
                <div class="close close-icon">
                  <i class="material-icons">close</i>
                </div>
              </div>
              <div class="divider"></div>
              <!-- form start -->
              <form class="edit-contact-item mb-5 mt-5" id="form_locationE" name="form_locationE">
                <input type="hidden" id="id" name="id">
                <div class="row">
                  <div class="input-field col s12 city-data">
                   
                  </div>
                <div class="input-field col s12">
                  <input id="locationE" name="locationE" type="text" class="validate">
                  <label class="label-location" for="error_locationE">location Name</label>
                </div>
                <div class="input-field col s12">
                  <input id="slugE" name="slugE" type="text" class="validate">
                  <label class="label-location" for="error_slugE">Slug</label>
                </div>
              </div>
              <div class="card-action pl-0 pr-0 right-align">
                <button class="mb-6 btn waves-effect waves-light gradient-45deg-purple-deep-orange" type="submit">
                  <span>Update location</span>
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
  $(".nav-location").addClass('active');
  function openForm()
  {
    $(".add-form").addClass('show');
  }
  function editLocation(id,title,slug,city_id)
  {

    $("#locationE").val(title);
    $("#slugE").val(slug);
    $("#id").val(id);
    $(".edit-form").addClass('show'); 
    $(".label-location").addClass("active");
    var city_data = '<select id="city_idE" name="city_idE" type="text" class="validate">';
    <?php
    foreach ($cities as $key => $value) {                            
      ?>
      var city_id1 = "<?=$value->id?>";
      var selected = "";
      if (city_id1==city_id) {
        selected = "selected";
      }
      city_data+='<option value="<?=$value->id?>" '+selected+'><?=$value->title?></option>';
      <?php
    }
    ?>
    city_data+='</select><label>Select Location</label>';
    $(".city-data").html(city_data);
    $('#city_idE').formSelect();
  }
  function locationdelete(id)
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
      var Catid = {"id":id,"table":"locations"};
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

$("form[name='form_location']").validate({
  errorElement: 'span',
  rules: {
    location: "required",
    city_id: "required"
  },
  errorPlacement: function(error, element) {
    if(element.attr("name") == "location") {
      error.appendTo("#error_location");
    }
    if(element.attr("name") == "city_id") {
      error.appendTo("#error_city_id");
    }
    else
    {
      error.insertAfter(element);
    }
  },
  submitHandler: function(form, event) {
   $("#preloader").show(); 
   var id = $("#id").val();
   var location = $("#location").val();
   var city_id = $("#city_id").val();
   var data = {"id":id,"location":location,"city_id":city_id}; 
   $.ajax({
    url: '<?=base_url()?>klconfig/saveLocation',
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
        window.location.href = "locations";
      }
    }
  });
 }
});

$("form[name='form_locationE']").validate({
  errorElement: 'span',
  rules: {
    locationE: "required",
    city_idE: "required"
  },
  errorPlacement: function(error, element) {
    if(element.attr("name") == "locationE") {
      error.appendTo("#error_locationE");
    }
    if(element.attr("name") == "city_idE") {
      error.appendTo("#error_city_idE");
    }
    else
    {
      error.insertAfter(element);
    }
  },
  submitHandler: function(form, event) {
   $("#preloader").show(); 
   var id = $("#id").val();
   var location = $("#locationE").val();
   var slug = $("#slugE").val();
   var city_id = $("#city_idE").val();
   var data = {"id":id,"location":location,"slug":slug,"city_id":city_id}; 
   $.ajax({
    url: '<?=base_url()?>klconfig/updateLocation',
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
        window.location.href = "locations";
      }
    }
  });
 }
});

</script>
</body>

</html>