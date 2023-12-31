<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <title>Dashboard | Admin</title>
  <link rel="apple-touch-icon" href="<?=base_url()?>assets/images/favicon/apple-touch-icon-152x152.png">
  <link rel="shortcut icon" type="image/x-icon" href="<?=base_url()?>assets/images/favicon/favicon-32x32.png">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- BEGIN: VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/vendors/vendors.min.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/vendors/animate-css/animate.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/vendors/chartist-js/chartist.min.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/vendors/chartist-js/chartist-plugin-tooltip.css">
  <!-- END: VENDOR CSS-->
  <!-- BEGIN: Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/themes/vertical-modern-menu-template/materialize.min.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/themes/vertical-modern-menu-template/style.min.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/pages/dashboard-modern.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/pages/intro.min.css">
  <!-- END: Page Level CSS-->
  <!-- BEGIN: Custom CSS-->
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/custom/custom.css">
  <!-- END: Custom CSS-->
</head>
<!-- END: Head-->
<body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 2-columns   " data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">
  <?php include 'header.php'; ?>
  <!-- BEGIN: Page Main-->
  <div id="main">
    <div class="row">
      <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
      <div class="col s12">
        <div class="container">
          <div class="section">
           <!-- Current balance & total transactions cards-->
           <div class="row vertical-modern-dashboard">
            <div class="col s12 m4 l4">
             <!-- Current Balance -->
             <div class="card animate fadeLeft">
              <div class="card-content">
               <h6 class="mb-0 mt-0 display-flex justify-content-between">Current Balance <i
                 class="material-icons float-right">more_vert</i>
               </h6>
               <p class="medium-small">This billing cycle</p>
               <div class="current-balance-container">
                <div id="current-balance-donut-chart" class="current-balance-shadow"></div>
              </div>
              <h5 class="center-align">$ 50,150.00</h5>
              <p class="medium-small center-align">Used balance this billing cycle</p>
            </div>
          </div>
        </div>
        <div class="col s12 m8 l8 animate fadeRight">
         <!-- Total Transaction -->
         <div class="card">
          <div class="card-content">
           <h4 class="card-title mb-0">Total Transaction <i class="material-icons float-right">more_vert</i></h4>
           <p class="medium-small">This month transaction</p>
           <div class="total-transaction-container">
            <div id="total-transaction-line-chart" class="total-transaction-shadow"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Current balance & total transactions cards-->

  <!-- User statistics & appointment cards-->
  <div class="row">
    <div class="col s12 l5">
     <!-- User Statistics -->
     <div class="card user-statistics-card animate fadeLeft">
      <div class="card-content">
       <h4 class="card-title mb-0">User Statistics <i class="material-icons float-right">more_vert</i></h4>
       <div class="row">
        <div class="col s12 m6">
         <ul class="collection border-none mb-0">
          <li class="collection-item avatar">
           <i class="material-icons circle pink accent-2">trending_up</i>
           <p class="medium-small">This year</p>
           <h5 class="mt-0 mb-0">60%</h5>
         </li>
       </ul>
     </div>
     <div class="col s12 m6">
       <ul class="collection border-none mb-0">
        <li class="collection-item avatar">
         <i class="material-icons circle purple accent-4">trending_down</i>
         <p class="medium-small">Last year</p>
         <h5 class="mt-0 mb-0">40%</h5>
       </li>
     </ul>
   </div>
 </div>
 <div class="user-statistics-container">
  <div id="user-statistics-bar-chart" class="user-statistics-shadow ct-golden-section"></div>
</div>
</div>
</div>
</div>
<div class="col s12 l4">
 <!-- Recent Buyers -->
 <div class="card recent-buyers-card animate fadeUp">
  <div class="card-content">
   <h4 class="card-title mb-0">Recent Buyers <i class="material-icons float-right">more_vert</i></h4>
   <p class="medium-small pt-2">Today</p>
   <ul class="collection mb-0">
    <li class="collection-item avatar">
     <img src="<?=base_url()?>assets/images/avatar/avatar-7.png" alt="" class="circle" />
     <p class="font-weight-600">John Doe</p>
     <p class="medium-small">18, January 2019</p>
     <a href="#!" class="secondary-content"><i class="material-icons">star_border</i></a>
   </li>
   <li class="collection-item avatar">
     <img src="<?=base_url()?>assets/images/avatar/avatar-3.png" alt="" class="circle" />
     <p class="font-weight-600">Adam Garza</p>
     <p class="medium-small">20, January 2019</p>
     <a href="#!" class="secondary-content"><i class="material-icons">star_border</i></a>
   </li>
   <li class="collection-item avatar">
     <img src="<?=base_url()?>assets/images/avatar/avatar-5.png" alt="" class="circle" />
     <p class="font-weight-600">Jennifer Rice</p>
     <p class="medium-small">25, January 2019</p>
     <a href="#!" class="secondary-content"><i class="material-icons">star_border</i></a>
   </li>
 </ul>
</div>
</div>
</div>
<div class="col s12 l3">
 <div class="card animate fadeRight">
  <div class="card-content">
   <h4 class="card-title mb-0">Conversion Ratio</h4>
   <div class="conversion-ration-container mt-8">
    <div id="conversion-ration-bar-chart" class="conversion-ration-shadow"></div>
  </div>
  <p class="medium-small center-align">This month conversion ratio</p>
  <h5 class="center-align mb-0 mt-0">62%</h5>
</div>
</div>
</div>
</div>
<!--/ Current balance & appointment cards-->

<div class="row">
  <div class="col s12 m6 l4">
   <div class="card padding-4 animate fadeLeft">
    <div class="row">
     <div class="col s5 m5">
      <h5 class="mb-0">1885</h5>
      <p class="no-margin">New</p>
      <p class="mb-0 pt-8">1,12,900</p>
    </div>
    <div class="col s7 m7 right-align">
      <i
      class="material-icons background-round mt-5 mb-5 gradient-45deg-purple-amber gradient-shadow white-text">perm_identity</i>
      <p class="mb-0">Total Clients</p>
    </div>
  </div>
</div>
<div id="chartjs" class="card pt-0 pb-0 animate fadeLeft">
  <div class="dashboard-revenue-wrapper padding-2 ml-2">
   <span class="new badge gradient-45deg-indigo-purple gradient-shadow mt-2 mr-2">+ $900</span>
   <p class="mt-2 mb-0 font-weight-600">Today's revenue</p>
   <p class="no-margin grey-text lighten-3">$40,512 avg</p>
   <h5>$ 22,300</h5>
 </div>
 <div class="sample-chart-wrapper card-gradient-chart">
   <canvas id="custom-line-chart-sample-three" class="center"></canvas>
 </div>
</div>
</div>
<div class="col s12 m6 l8">
 <div class="card subscriber-list-card animate fadeRight">
  <div class="card-content pb-1">
   <h4 class="card-title mb-0">Subscriber List <i class="material-icons float-right">more_vert</i></h4>
 </div>
 <table class="subscription-table responsive-table highlight">
   <thead>
    <tr>
     <th>Name</th>
     <th>Company</th>
     <th>Start Date</th>
     <th>Status</th>
     <th>Amount</th>
     <th>Action</th>
   </tr>
 </thead>
 <tbody>
  <tr>
   <td>Michael Austin</td>
   <td>ABC Fintech LTD.</td>
   <td>Jan 1,2019</td>
   <td><span class="badge pink lighten-5 pink-text text-accent-2">Close</span></td>
   <td>$ 1000.00</td>
   <td class="center-align"><a href="#"><i class="material-icons pink-text">clear</i></a></td>
 </tr>
 <tr>
   <td>Aldin Rakić</td>
   <td>ACME Pvt LTD.</td>
   <td>Jan 10,2019</td>
   <td><span class="badge green lighten-5 green-text text-accent-4">Open</span></td>
   <td>$ 3000.00</td>
   <td class="center-align"><a href="#"><i class="material-icons pink-text">clear</i></a></td>
 </tr>
 <tr>
   <td>İris Yılmaz</td>
   <td>Collboy Tech LTD.</td>
   <td>Jan 12,2019</td>
   <td><span class="badge green lighten-5 green-text text-accent-4">Open</span></td>
   <td>$ 2000.00</td>
   <td class="center-align"><a href="#"><i class="material-icons pink-text">clear</i></a></td>
 </tr>
 <tr>
   <td>Lidia Livescu</td>
   <td>My Fintech LTD.</td>
   <td>Jan 14,2019</td>
   <td><span class="badge pink lighten-5 pink-text text-accent-2">Close</span></td>
   <td>$ 1100.00</td>
   <td class="center-align"><a href="#"><i class="material-icons pink-text">clear</i></a></td>
 </tr>
</tbody>
</table>
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
<?php include 'footer.php'; ?>
<script src="<?=base_url()?>assets/vendors/chartjs/chart.min.js"></script>
<script src="<?=base_url()?>assets/vendors/chartist-js/chartist.min.js"></script>
<script src="<?=base_url()?>assets/vendors/chartist-js/chartist-plugin-tooltip.js"></script>
<script src="<?=base_url()?>assets/vendors/chartist-js/chartist-plugin-fill-donut.min.js"></script>
<script src="<?=base_url()?>assets/js/scripts/dashboard-modern.js"></script>
<script type="text/javascript">
    $(".sidenav li a").removeClass('active');
    $(".nav-dashboard").addClass('active');
  </script>
</body>

</html>