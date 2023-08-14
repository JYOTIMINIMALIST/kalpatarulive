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
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/vendors/data-tables/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/vendors/data-tables/css/dataTables.checkboxes.css">
  <!-- END: VENDOR CSS-->
  <!-- BEGIN: Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/themes/vertical-modern-menu-template/materialize.min.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/themes/vertical-modern-menu-template/style.min.css">
  <!-- END: Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/pages/app-invoice.min.css">
  <!-- BEGIN: Custom CSS-->
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/custom/custom.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/vendors/sweetalert/sweetalert.css">
  <!-- END: Custom CSS-->
  <style type="text/css">
    .dt-checkboxes-cell{
      display: none;
    }
  </style>
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
              <h5 class="breadcrumbs-title mt-0 mb-0"><span>Press</span></h5>
              <ol class="breadcrumbs mb-0">
                <li class="breadcrumb-item"><a href="<?=base_url()?>">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Press</a>
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

            <!-- create invoice button-->
            <div class="invoice-create-btn">
              <a href="<?=base_url()?>klconfig/edit_press" class="btn waves-effect waves-light invoice-create border-round z-depth-4">
                <i class="material-icons">add</i>
                <span class="hide-on-small-only">Add Press News</span>
              </a>
            </div>
            
          <div class="responsive-table">
            <table class="table invoice-data-table white border-radius-4 pt-1">
              <thead>
                <tr>
                  <th>
                    <span>#</span>
                  </th>
                  <th>Title</th>
                  <th>Project</th>
                  <th>Article Date</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>
                <?php 
                $no = 0;
                foreach ($press as $key => $value) {
                  $no++;
                  ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?=$value->title?></td>
                    <td><?=$value->project_name?></td>
                    <td><?=date('d F, Y',strtotime($value->article_date))?></td>
                    <td>
                      <?php if($value->is_active == 0): ?>
                      <span class="chip lighten-5 red red-text">In-Active</span>
                      <?php else: ?>
                      <span class="chip lighten-5 green green-text">Active</span>
                      <?php endif; ?>
                    </td>
                    <td>
                      <div class="invoice-action">
                        <a href="<?=base_url()?>klconfig/edit_press/<?=$value->id?>" class="invoice-action-view mr-4">
                          <i class="material-icons">edit</i>
                        </a>
                        <a href="javascript:void(0);" onclick="deletePress(<?=$value->id?>)" class="invoice-action-edit">
                          <i class="material-icons">delete</i>
                        </a>
                      </div>
                    </td>
                  </tr>
                  <?php 
                }
                ?>
              </tbody>
            </table>
          </div>
        </section>
        <!-- END RIGHT SIDEBAR NAV -->
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
<!-- END THEME  JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="<?=base_url()?>assets/vendors/sweetalert/sweetalert.min.js"></script>
<script src="<?=base_url()?>assets/js/scripts/extra-components-sweetalert.min.js"></script>
<script type="text/javascript">
  $(".invoice-data-table").DataTable({
    columnDefs: [ {
        orderable: !1,
        targets: 5
    }],
    // order: [0, "asc"],
    dom: '<"top display-flex  mb-2"<"action-filters"f><"actions action-btns display-flex align-items-center">><"clear">rt<"bottom"p>',
    language: {
        search: "",
        searchPlaceholder: "Search"
    },
    select: {
        style: "multi",
        selector: "td:first-child>",
        items: "row"
    }
  });

  var e = $(".invoice-filter-action"),
      t = $(".invoice-create-btn"),
      i = $(".filter-btn");
  $(".action-btns").append(e, t), $(".dataTables_filter label").append(i)

  $(".sidenav li a").removeClass('active');
  $(".nav-press").addClass('active');
  function deletePress(id)
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
      var Catid = {"id":id,"table":"press_news"};
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
</script>
</body>
</html>