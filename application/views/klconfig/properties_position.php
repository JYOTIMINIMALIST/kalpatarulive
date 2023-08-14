
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
    /*.step-pointer{
      pointer-events: none;
      }*/
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
                        <!-- <h4 class="card-title">Edit Property</h4> -->
                        <?php
                        $ci = & get_instance();
                        $ci->load->model('common_m');
                        $title = $ci->common_m->seoUrl($properties->title);
 //$val = $ci->common_m->getAllPropertyposition($properties->id);

//echo $propertyposition[0]->property_overview_status;

                        ?>
                        <h4 class="card-title"><a href="<?=base_url()?>projects/<?=$properties->property_type?>/<?=$title?>/<?=$properties->id?>" target="_blank"><?=$properties->title?></a></h4>
                      </div>
                      <input type="hidden" class="insert_id" id="insert_id" name="insert_id" value="<?=$properties->id?>">
                    
                         
                          <form action="<?=base_url()?>klconfig/propertiesposition" method="post" id="basic_details" name="basic_details">
                          	<input type="hidden" class="insert_id" id="insert_id" name="postion_properties" value="<?=$properties->id?>">
	<input type="hidden" class="insert_id" id="insert_id" name="position_property_name" value="<?=$properties->slug?>">


                          	
                            <div class="step-content">
                              <div class="row">
                               <div class="col s12" style="padding-left: unset;padding-right: unset;">

  <div class="input-field col s12 m4">Overview</div>
 <div class="input-field col s12 m2">
  <select id="property_type" name="property_overview_status" type="text" class="validate">                     <option value="1" <?php if($propertyposition[0]->position_overview_status=='1'){echo 'selected';} ?>>Active </option>
  <option value="0" <?php if($propertyposition[0]->position_overview_status=='0'){echo 'selected';} ?>>Inactive</option>
                                                                </select>
                                </div>
                              
                         

 <div class="input-field col s12 m6">
  <select  name="property_overview_position" required>
                                <option value="">Select Position</option>
                                    
   <?php for($i=1;$i<=20;$i++){?>
<option value="<?php echo $i;?>" <?php if($propertyposition[0]->position_overview_position == $i){echo 'selected';} ?>>
  <?php echo $i; ?>
    
  </option>
                <?php } ?> 
                                  </select>
                                </div>
                              
                              </div>
                             
               


  <div class="col s12" style="padding-left: unset;padding-right: unset;">

  <div class="input-field col s12 m4">Amenities</div>

 <div class="input-field col s12 m2">
  <select id="property_type" name="property_amenities_status" class="validate">
  <option value="1" <?php if($propertyposition[0]->property_amenities_status=='1'){echo 'selected';} ?>>Active </option>
  <option value="0" <?php if($propertyposition[0]->property_amenities_status=='0'){echo 'selected';} ?>>Inactive</option>
                                                                 </select>
                                </div>


 <div class="input-field col s12 m6">
  <select name="property_amenities_position" >
                                <option value="">Select Position</option>
                                  
      <?php for($i=1;$i<=20;$i++){?>
<option value="<?php echo $i;?>" <?php if($propertyposition[0]->position_amenities_position == $i){echo 'selected';} ?>><?php echo $i; ?></option>
                <?php } ?> 
                                  </select>
                                </div>
                              
                              </div>



      <div class="col s12" style="padding-left: unset;padding-right: unset;">

  <div class="input-field col s12 m4">Resources</div>

   <div class="input-field col s12 m2">
  <select id="property_type" name="property_resources_status">
  <option value="1" <?php if($propertyposition[0]->position_resources_status=='1'){echo 'selected';} ?>>Active </option>
  <option value="0" <?php if($propertyposition[0]->position_resources_status=='0'){echo 'selected';} ?>>Inactive</option>
                                                                 </select>
                                </div>
 <div class="input-field col s12 m6">
  <select id="property_type" name="property_resources_position" class="validate" >
                                <option value="">Select Position</option>
                                                                   
<?php for($i=1;$i<=20;$i++){?>
<option value="<?php echo $i;?>" <?php if($propertyposition[0]->position_resources_position == $i){echo 'selected';} ?>><?php echo $i; ?></option>
                <?php } ?> 








                                  </select>
                                </div>
                              
                              </div>







      <div class="col s12" style="padding-left: unset;padding-right: unset;">

  <div class="input-field col s12 m4">Construction Update</div>

   <div class="input-field col s12 m2">
  <select id="property_type" name="property_construction_update_status"  class="validate">
   <option value="1" <?php if($propertyposition[0]->position_construction_update_status=='1'){echo 'selected';} ?>>Active </option>
  <option value="0" <?php if($propertyposition[0]->position_construction_update_status=='0'){echo 'selected';} ?>>Inactive</option>
                                                                 </select>
                                </div>
 <div class="input-field col s12 m6">
  <select id="property_type" name="property_construction_update_position" >
                                                  <option value="">Select Position</option>                      
<?php for($i=1;$i<=20;$i++){?>
<option value="<?php echo $i;?>" <?php if($propertyposition[0]->position_construction_update_position == $i){echo 'selected';} ?>><?php echo $i; ?></option>
                <?php } ?> 

                 </select>
                                </div>
                              
                              </div>




   <div class="col s12" style="padding-left: unset;padding-right: unset;">

  <div class="input-field col s12 m4">COMMERCIAL FOOTPRINT</div>
 <div class="input-field col s12 m2">
  <select id="property_type" name="property_commercial_status" class="validate">
   <option value="1" <?php if($propertyposition[0]->position_commercial_footprint_status=='1'){echo 'selected';} ?>>Active </option>
  <option value="0" <?php if($propertyposition[0]->position_commercial_footprint_status=='0'){echo 'selected';} ?>>Inactive</option>
                                                                 </select>
                                </div>

 <div class="input-field col s12 m6">
  <select id="property_type" name="property_commercial_position" class="validate">
                                <option value="">Select Position</option>
                               <?php for($i=1;$i<=20;$i++){?>   
                              <option value="<?php echo $i;?>" <?php if($propertyposition[0]->position_commercial_footprint_position == $i){echo 'selected';} ?>><?php echo $i; ?></option>
                                <?php } ?> 
                                  </select>
                                </div>
                              
                              </div>


                                    <div class="col s12" style="padding-left: unset;padding-right: unset;">

  <div class="input-field col s12 m4">KEY BENEFITS</div>

   <div class="input-field col s12 m2">
  <select id="property_type" name="property_key_benifits_status" class="validate">
   <option value="1" <?php if($propertyposition[0]->position_key_benifits_status=='1'){echo 'selected';} ?>>Active </option>
  <option value="0" <?php if($propertyposition[0]->position_key_benifits_status=='0'){echo 'selected';} ?>>Inactive</option>
                                                                 </select>
                                </div>
 <div class="input-field col s12 m6">
  <select id="property_type" name="property_key_benifits_position" class="validate">
                                <option value="">Select Position</option>
                      
<?php for($i=1;$i<=20;$i++){?>
<option value="<?php echo $i;?>" <?php if($propertyposition[0]->position_key_benifits_position == $i){echo 'selected';} ?>><?php echo $i; ?></option>
                <?php } ?> 


                                  </select>
                                </div>
                              
                              </div>





                                    <div class="col s12" style="padding-left: unset;padding-right: unset;">

  <div class="input-field col s12 m4">BEST FOR INVESTMENT</div>
   <div class="input-field col s12 m2">
  <select id="property_type" name="property_bestforinvestment_status" class="validate">
    <option value="1" <?php if($propertyposition[0]->position_bestforinvestment_status=='1'){echo 'selected';} ?>>Active </option>
  <option value="0" <?php if($propertyposition[0]->position_bestforinvestment_status=='0'){echo 'selected';} ?>>Inactive</option>
                                                                 </select>
                                </div>
 <div class="input-field col s12 m6">
  <select id="property_type" name="property_bestforinvestment_position" class="validate">
                                <option value="">Select Position</option>                                    
                               <?php for($i=1;$i<=20;$i++){?>
<option value="<?php echo $i;?>" <?php if($propertyposition[0]->position_bestforinvestment_position == $i){echo 'selected';} ?>><?php echo $i; ?></option>
                <?php } ?> 
                                  </select>
                                </div>
                              
                              </div>






                                    <div class="col s12" style="padding-left: unset;padding-right: unset;">

  <div class="input-field col s12 m4">IDEAL FOR PROFESSIONALS</div>
   <div class="input-field col s12 m2">
  <select id="property_type" name="property_idealforprofessionals_status" class="validate">
     <option value="1" <?php if($propertyposition[0]->position_idealforprofessionals_status=='1'){echo 'selected';} ?>>Active </option>
  <option value="0" <?php if($propertyposition[0]->position_idealforprofessionals_status=='0'){echo 'selected';} ?>>Inactive</option>
                                                                 </select>
                                </div>
 <div class="input-field col s12 m6">
  <select id="property_type" name="property_idealforprofessionals_position" class="validate">
                                <option value="">Select Position</option>                                     <?php for($i=1;$i<=20;$i++){?>
<option value="<?php echo $i;?>" <?php if($propertyposition[0]->position_idealforprofessionals_position == $i){echo 'selected';} ?>><?php echo $i; ?></option>
                <?php } ?> 
                                  </select>
                                </div>
                              
                              </div>







                                    <div class="col s12" style="padding-left: unset;padding-right: unset;">

  <div class="input-field col s12 m4">GALLERY</div>
   <div class="input-field col s12 m2">
  <select id="property_type" name="property_gallery_status" class="validate">
   <option value="1" <?php if($propertyposition[0]->position_gallery_status=='1'){echo 'selected';} ?>>Active </option>
  <option value="0" <?php if($propertyposition[0]->position_gallery_status=='0'){echo 'selected';} ?>>Inactive</option>
                                                                 </select>
                                </div>
 <div class="input-field col s12 m6">
  <select id="property_type" name="property_gallery_position" class="validate">
                                <option value="">Select Position</option>                                      
                      <?php for($i=1;$i<=20;$i++){?>
<option value="<?php echo $i;?>" <?php if($propertyposition[0]->position_gallery_position == $i){echo 'selected';} ?>><?php echo $i; ?></option>
                <?php } ?>     
                                  </select>
                                </div>
                              
                              </div>


 <div class="col s12" style="padding-left: unset;padding-right: unset;">

  <div class="input-field col s12 m4">Locate</div>
   <div class="input-field col s12 m2">
  <select id="property_type" name="property_locate_status" class="validate">
   <option value="1" <?php if($propertyposition[0]->position_locate_status=='1'){echo 'selected';} ?>>Active </option>
  <option value="0" <?php if($propertyposition[0]->position_locate_status=='0'){echo 'selected';} ?>>Inactive</option>
                                                                 </select>
                                </div>
 <div class="input-field col s12 m6">
  <select id="property_type" name="property_locate_position" class="validate">
                                <option value="">Select Position</option>  

<?php for($i=1;$i<=20;$i++){?>
<option value="<?php echo $i;?>" <?php if($propertyposition[0]->postion_locate_position == $i){echo 'selected';} ?>><?php echo $i; ?></option>
                <?php } ?>                
                                  </select>
                                </div>
                              
                              </div>


 <div class="col s12" style="padding-left: unset;padding-right: unset;">

  <div class="input-field col s12 m4">Rera</div>
   <div class="input-field col s12 m2">
  <select id="property_type" name="property_rera_status" class="validate">
   <option value="1" <?php if($propertyposition[0]->position_rera_status=='1'){echo 'selected';} ?>>Active </option>
  <option value="0" <?php if($propertyposition[0]->position_rera_status=='0'){echo 'selected';} ?>>Inactive</option>
                                                                 </select>
                                </div>
 <div class="input-field col s12 m6">
  <select id="property_type" name="property_rera_position" class="validate">
                                <option value="">Select Position</option>  

<?php for($i=1;$i<=20;$i++){?>
<option value="<?php echo $i;?>" <?php if($propertyposition[0]->position_rera_position == $i){echo 'selected';} ?>><?php echo $i; ?></option>
                <?php } ?>                
                                  </select>
                                </div>
                              
                              </div>

    <div class="col s12" style="padding-left: unset;padding-right: unset;">

<div class="input-field col s12 m4">Video Gallery</div>
 <div class="input-field col s12 m2">
<select id="property_type" name="property_videogallery_status" class="validate">
 <option value="1" <?php if($propertyposition[0]->position_videogallery_status=='1'){echo 'selected';} ?>>Active </option>
<option value="0" <?php if($propertyposition[0]->position_videogallery_status=='0'){echo 'selected';} ?>>Inactive</option>
                                                               </select>
                              </div>
<div class="input-field col s12 m6">
<select id="property_type" name="property_videogallery_position" class="validate">
                              <option value="">Select Position</option>  

<?php for($i=1;$i<=20;$i++){?>
<option value="<?php echo $i;?>" <?php if($propertyposition[0]->position_videogallery_position == $i){echo 'selected';} ?>><?php echo $i; ?></option>
              <?php } ?>                
                                </select>
                              </div>
                            
                            </div>


 <div class="col s12" style="padding-left: unset;padding-right: unset;">


<input type="submit" value="submit" class="btn waves-effect waves-light invoice-export border-round z-depth-4">
 </div>


                            </div>
                        
                
                    </div>
                 
                  
             
                </div>
                    
       
            </form>
          </div>
      
      
 
</div>
</div>
</div>
</div>
</section>
<!-- END RIGHT SIDEBAR NAV -->


<!-- kalpataru amenities-->

       <section class="invoice-list-wrapper section">
              <!-- create invoice button-->
              <!-- Options and filter dropdown button-->

              <div class="row">
                <div class="col s12">
                  <div class="card">
                    <div class="card-content">
                      <div class="card-header">
                        <!-- <h4 class="card-title">Edit Property</h4> -->
                        <?php
                        $ci = & get_instance();
                        $ci->load->model('common_m');
                        $title = $ci->common_m->seoUrl($properties->title);
 $projects = $ci->common_m->getprop($properties->id);

                      //  print_r($projects);
$amn = $projects[0]->amenities;

$amm = explode(',',$amn);


//echo $propertyposition[0]->property_overview_status;

                        ?>
                        <h4 class="card-title"><a><?=$properties->title?> Amenities</a></h4>
                      </div><div class="step-content">
                              <div class="row">
                               <div class="col s12" style="padding-left: unset;padding-right: unset;">


                      <div class="step-content">
                              <div class="row">
                               <div class="col s12" style="padding-left: unset;padding-right: unset;">

                      <input type="hidden" class="insert_id" id="insert_id" name="insert_id" value="<?=$properties->id?>">
                    
                         
                          <form action="<?=base_url()?>klconfig/amenitiesposition" method="post" id="basic_details" name="basic_details" onsubmit="return checkUnique()">

  <input type="hidden" class="insert_id" id="insert_id" name="postion_properties" value="<?=$properties->id?>">
  <input type="hidden" class="insert_id" id="insert_id" name="position_property_name" value="<?=$properties->slug?>">


                            
<?php for($i=0;$i<count($amm);$i++){?>

                          
                            
  <div class="input-field col s12 m2"><?php 
$amntp = $ci->common_m->getamenities($amm[$i]);
echo $amntp[0]->title; 
?>
    <input type="hidden" class="insert_id" id="insert_id" name="amenities[]" value="<?php echo $amm[$i];?>">

</div>
 <div class="input-field col s12 m2">
  <select id="amenities_position<?php echo $i;?>" name="amenities_position[]" >
<?php for($j=0;$j<=count($amm);$j++){


  ?>
                   <option value="<?php echo $j+1; ?>" <?php if($i == $j ){?> selected <?php } ?>><?php echo $j+1; ?> </option>
<?php } ?>
   </select>
                                </div>
                              
                         

<?php } ?>





 <div class="col s12" style="padding-left: unset;padding-right: unset;">


<input type="submit" value="submit" class="btn waves-effect waves-light invoice-export border-round z-depth-4" >
 </div>


                            </div>
                        
                
                    </div>
                 
                  
             
                </div>
                    
       
            </form>
          </div>
      
      
 
</div>
</div>
</div>
</div>
</section>




<!-- kalpataru amenities-->































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

<script>
    function checkUnique(elementID) {

<?php for($k=0;$k<count($amm);$k++){?>
  if(<?php for($i=$k;$i<count($amm);$i++){ if($i!=$k){?>document.getElementById('amenities_position<?php echo $k ?>').value == document.getElementById('amenities_position<?php echo $i ?>').value || <?php } } ?>document.getElementById('amenities_position<?php echo $k ?>').value == 50){
            alert("Duplicate Amenities Value");
            return false;
        }
        
        <?php } ?>
       

  
   
}
    
   </script>    






</body>
</html>