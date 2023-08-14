<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <title>Home Page | Admin</title>
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
              <h5 class="breadcrumbs-title mt-0 mb-0"><span>Home Page</span></h5>
              <ol class="breadcrumbs mb-0">
                <li class="breadcrumb-item"><a href="<?=base_url()?>">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Home page</a>
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
                        <h4 class="card-title">Slider Properties</h4>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col s12 m6">
                        <div id="bordered-table" class="card card card-default scrollspy">
                          <div class="card-content">
                            <h4 class="card-title">Add to Slider</h4>                          
                            <div class="row">
                              <div class="col s12">
                              </div>
                              <div class="col s12">
                                <div class="input-field col s12">
                                  <i class="material-icons prefix">search</i>
                                  <input id="search_slider" name="search_slider" onkeyup="getPropertyKeyword(this,'slider')" type="text" class="validate">
                                  <label for="search_slider" class="">Search...</label>
                                </div>
                                <table class="bordered">
                                  <thead>
                                    <tr>
                                      <th>Property Title</th>
                                      <th>Category</th>
                                      <th style="width: 100px;">Add</th>
                                    </tr>
                                  </thead>
                                  <tbody id="slider_tbody">
                                    <tr> <td colspan="3" style="text-align: center;">Search property by title</td> </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col s12 m6">
                        <div id="bordered-table" class="card card card-default scrollspy">
                          <div class="card-content">
                            <h4 class="card-title">Slider Properties</h4>                          
                            <div class="row">
                              <div class="col s12">
                              </div>
                              <div class="col s12">

  <?php
                        $ci = & get_instance();
                        $ci->load->model('common_m');
                        //$properties = $this->Common_m->getAllDataWithCondition("properties","active=1 AND (slider=1 OR featured=1)");
$properties = $this->Common_m->getAllDataWithCondition("properties","active=1 AND slider=1 ");

                   //  print_r($properties)
 ?>
<form action="<?=base_url()?>klconfig/sliderposition" method="post">
 
                                <table class="bordered">
                                  <thead>
                                    <tr>
                                      <th>Property Title</th>
                                      <th>Category</th>
                                      <th style="width: 50px;">Order</th>
                                      <th style="width: 100px;">Remove</th>
                                    </tr>
                                  </thead>
                                  <tbody id="featured_slider_tbody1">

                                 <?php foreach($properties as $property){?>
                                   <tr> <td>
 <input type="hidden" class="insert_id" id="insert_id" name="properties[]" value="<?=$property->id?>">
                                    <?php echo $property->title; ?></td> 
                                    <td style = "text-transform:capitalize;"><?php echo $property->property_type; ?></td>
                                    <td>
                                      <select name="featuredslider[]">
                                        <option>select</option>
                                        <?php for($i=0;$i<=6;$i++){?>
<option  <?php if($property->slider_order == $i){?>selected="selected"<?php } ?>><?php echo $i;?></option>
                                        <?php } ?>
                                      </select>


                                      <?php //echo $property->slider_order; ?></td>
                                     <td><a onclick="featured('<?php echo $property->id; ?>','slider',0)" href="javascript:void(0);" class="waves-effect waves-light  btn gradient-45deg-red-pink box-shadow-none border-round mr-1 mb-1"><i class="material-icons">remove</i></a></td> </tr>
                             <?php    } ?>
                                                             

                             <tr><td colspan="4"><input type="submit" value="submit"></td></tr>       
                                  </tbody>




                                </table>

  </form>
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
            <div class="row">
              <div class="col s12">
                <div id="chips-styles" class="card card-default">
                  <div class="card-content">

                    <div class="row">
                      <div class="col s12">
                        <h4 class="card-title">Featured Properties</h4>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col s12 m6">
                        <div id="bordered-table" class="card card card-default scrollspy">
                          <div class="card-content">
                            <h4 class="card-title">Add to Featured</h4>                          
                            <div class="row">
                              <div class="col s12">
                              </div>
                              <div class="col s12">
                                <div class="input-field col s12">
                                  <i class="material-icons prefix">search</i>
                                  <input id="search_featured" name="search_featured" type="text" onkeyup="getPropertyKeyword(this,'featured')" class="validate">
                                  <label for="search_featured" class="">Search...</label>
                                </div>
                                <table class="bordered">
                                  <thead>
                                    <tr>
                                      <th>Title</th>
                                      <th>Category</th>
                                      <th style="width: 100px;">Add</th>
                                    </tr>
                                  </thead>
                                  <tbody id="featured_tbody">
                                    <tr> <td colspan="3" style="text-align: center;">Search Property by title</td> </tr>    
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col s12 m6">
                        <div id="bordered-table" class="card card card-default scrollspy">
                          <div class="card-content">
                            <h4 class="card-title">Featured Properties</h4>                          
                            <div class="row">
                              <div class="col s12">
                              </div>
                              <div class="col s12">

                                  <?php
                        $ci = & get_instance();
                        $ci->load->model('common_m');
                        //$properties = $this->Common_m->getAllDataWithCondition("properties","active=1 AND (slider=1 OR featured=1)");
$properties = $this->Common_m->getAllDataWithCondition("properties","active=1 AND featured=1 ");

                   //  print_r($properties)
 ?>
<form action="<?=base_url()?>klconfig/featuredposition" method="post">
  
                                <table class="bordered">
                                  <thead>
                                    <tr>
                                      <th>Title</th>
                                      <th>Category</th>
                                      <th>Order</th>
                                      <th style="width: 100px;">Remove</th>
                                    </tr>
                                  </thead>
                                  <tbody id="featured_featured_tbody1">
                                   <?php foreach($properties as $property){?>
                                   <tr> <td>
<input type="hidden" class="insert_id" id="insert_id" name="properties[]" value="<?=$property->id?>">
                                    <?php echo $property->title; ?></td> 
                                    <td style = "text-transform:capitalize;"><?php echo $property->property_type; ?></td>
                                    <td>
                                      <select name="featuredslider[]">
                                        <option>select</option>
                                      <?php for($i=0;$i<=6;$i++){?>
<option  <?php if($property->featured_order == $i){?>selected="selected"<?php } ?>><?php echo $i;?></option>
                                        <?php } ?>
                                      </select>


                                      <?php //echo $property->slider_order; ?></td>
                                     <td><a onclick="featured('<?php echo $property->id; ?>','featured',0)" href="javascript:void(0);" class="waves-effect waves-light  btn gradient-45deg-red-pink box-shadow-none border-round mr-1 mb-1"><i class="material-icons">remove</i></a></td> </tr>
                             <?php    } ?>     

                             <tr><td colspan="4"><input type="submit" value="submit"></td></tr>                              
                                  </tbody>
                                </table>
</form>
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
    $(".nav-home").addClass('active');
    getFeaturedProperties();
    function getFeaturedProperties()
    {
      $("#preloader").show();
      $.ajax({
        url: '<?=base_url()?>klconfig/getFeaturedProperties',
        type: 'POST',
        contentType: 'application/json; charset=utf-8',
        datatype: 'JSON',
        async: true,
        success: function(data)
        {
          $("#preloader").hide();
          var value = JSON.parse(data);
          var slider = "";
          for(var i = 0; i < value.slider.length; i++){
            slider += '<tr> <td>'+value.slider[i].title+'</td> <td style = "text-transform:capitalize;">'+value.slider[i].property_type+'</td><td>'+value.slider[i].slider_order+'</td> <td><a onclick="featured('+value.slider[i].id+',\'slider\',0)" href="javascript:void(0);" class="waves-effect waves-light  btn gradient-45deg-red-pink box-shadow-none border-round mr-1 mb-1"><i class="material-icons">remove</i></a></td> </tr>';
          }
          if (slider!="") {
            $("#featured_slider_tbody").html(slider);
          }
          var featured = "";
          for(var i = 0; i < value.featured.length; i++){
            featured += '<tr> <td>'+value.featured[i].title+'</td> <td style = "text-transform:capitalize;">'+value.featured[i].property_type+'</td><td>'+value.featured[i].featured_order+'</td> <td><a href="javascript:void(0);" onclick="featured('+value.featured[i].id+',\'featured\',0)" class="waves-effect waves-light  btn gradient-45deg-red-pink box-shadow-none border-round mr-1 mb-1"><i class="material-icons">remove</i></a></td> </tr>';
          }
          if (featured!="") {
            $("#featured_featured_tbody").html(featured);
          }
        }
      });
    }
    function getProperty(keyword,type)
    {
      $("#preloader").show();
      var data = {"keyword":keyword,"type":type}; 
      $.ajax({
        url: '<?=base_url()?>klconfig/getProperties',
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
            var tabledata = "";
            if (type=="slider") {
              for(var i = 0; i < value.properties.length; i++){
                tabledata += '<tr> <td>'+value.properties[i].title+'</td> <td style = "text-transform:capitalize;">'+value.properties[i].property_type+'</td> <td><a onclick="featured('+value.properties[i].id+',\'slider\',1)" href="javascript:void(0);" class="waves-effect waves-light  btn gradient-45deg-light-blue-cyan box-shadow-none border-round mr-1 mb-1"><i class="material-icons">add</i></a></td> </tr>';
              }
              $("#slider_tbody").html(tabledata);
            }
            else
            {
              for(var i = 0; i < value.properties.length; i++){
                tabledata += '<tr> <td>'+value.properties[i].title+'</td> <td style = "text-transform:capitalize;">'+value.properties[i].property_type+'</td> <td><a onclick="featured('+value.properties[i].id+',\'featured\',1)" href="javascript:void(0);" class="waves-effect waves-light  btn gradient-45deg-light-blue-cyan box-shadow-none border-round mr-1 mb-1"><i class="material-icons">add</i></a></td> </tr>';
              }
              $("#featured_tbody").html(tabledata);
            }
          }
          else
          {
           if (type=="slider") {
            $("#slider_tbody").html('<tr> <td colspan="3" style="text-align: center;">Search Property with title</td> </tr>');
          }
          else
          {
            $("#featured_tbody").html('<tr> <td colspan="3" style="text-align: center;">Search Property with title</td> </tr>');
          }
        }
      }
    });
    }

    function getPropertyKeyword(keyword,type)
    {
      var key = $(keyword).val(); 
      var keylenght = key.length;
      if (keylenght>3) {
        getProperty(key,type);
      }
    }
    function getPropertyOnAdd(keyword,type)
    {
      var key = keyword; 
      var keylenght = key.length;
      if (keylenght>3) {
        getProperty(key,type);
      }
    }
    function featured(id,type,status)
    {
      $("#preloader").show();
      var data = {"id":id,"type":type,"status":status}; 
      $.ajax({
        url: '<?=base_url()?>klconfig/featured',
        type: 'POST',
        data: JSON.stringify(data),
        contentType: 'application/json; charset=utf-8',
        datatype: 'JSON',
        async: true,
        success: function(data)
        {
          if (type=='slider') {
            var keyword = $("#search_slider").val();
            if (keyword!="") {
              getPropertyOnAdd(keyword,type);
            }
          }
          else
          {
            var keyword = $("#search_featured").val();
            if (keyword!="") {
              getPropertyOnAdd(keyword,type);
            }
          }
          getFeaturedProperties();
          location.reload();
        }
      });
    }
  </script>
</body>

</html>