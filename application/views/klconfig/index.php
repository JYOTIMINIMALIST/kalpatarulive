<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
  <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
  <meta name="author" content="ThemeSelect">
  <title>Login | Admin</title>
  <link rel="apple-touch-icon" href="<?=base_url()?>assets/images/favicon/apple-touch-icon-152x152.png">
  <link rel="shortcut icon" type="image/x-icon" href="<?=base_url()?>assets/images/favicon/favicon-32x32.png">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- BEGIN: VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/vendors/vendors.min.css">
  <!-- END: VENDOR CSS-->
  <!-- BEGIN: Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/themes/vertical-modern-menu-template/materialize.min.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/themes/vertical-modern-menu-template/style.min.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/pages/login.css">
  <!-- END: Page Level CSS-->
  <!-- BEGIN: Custom CSS-->
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/custom/custom.css">
  <!-- END: Custom CSS-->
  <style type="text/css">
    .text-red{
      color:red;
    }
    .input-error{
      margin-left: 30px;
    }
  </style>
</head>
<!-- END: Head-->
<body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 1-column login-bg   blank-page blank-page" data-open="click" data-menu="vertical-modern-menu" data-col="1-column">
  <div class="row">
    <div class="col s12">
      <div class="container"><div id="login-page" class="row">
        <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 login-card bg-opacity-8">
          <form class="login-form" id="login_form" name="login_form">
            <div class="row">
              <div class="input-field col s12">
                <h5 class="ml-4">Sign in</h5>
              </div>
            </div>
            <div class="row margin">
              <div class="input-field col s12">
                <i class="material-icons prefix pt-2">person_outline</i>
                <input id="email" name="email" type="text">
                <label for="email" class="center-align">Username</label>
                <span class="input-error error-email"></span>
              </div>
            </div>
            <div class="row margin">
              <div class="input-field col s12">
                <i class="material-icons prefix pt-2">lock_outline</i>
                <input id="password" name="password" type="password">
                <label for="password">Password</label>
                <span class="input-error error-password"></span>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <button href="index.html" class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">Login</button>
              </div>
            </div>
            <div class="row" style="visibility: hidden;">
              <div class="input-field col s6 m6 l6">
                <p class="margin medium-small"><a href="user-register.html">Register Now!</a></p>
              </div>
              <div class="input-field col s6 m6 l6">
                <p class="margin right-align medium-small"><a href="user-forgot-password.html">Forgot password ?</a></p>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="content-overlay"></div>
  </div>
</div>

<!-- BEGIN VENDOR JS-->
<script src="<?=base_url()?>assets/js/vendors.min.js"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<!-- END PAGE VENDOR JS-->
<!-- BEGIN THEME  JS-->
<script src="<?=base_url()?>assets/js/plugins.min.js"></script>
<script src="<?=base_url()?>assets/js/search.min.js"></script>
<script src="<?=base_url()?>assets/js/custom/custom-script.min.js"></script>
<script src="<?=base_url()?>assets/js/validation.js"></script>
<!-- END THEME  JS-->
<!-- BEGIN PAGE LEVEL JS-->
<!-- END PAGE LEVEL JS-->
<script type="text/javascript">
  $("form[name='login_form']").validate({
    rules: {
      email: {
        required: true,
        email: true
      },
      password: "required"
    },
    messages: {
      email: "<span class='text-red'>Enter a valid Email ID!</span>",
      password: "<span class='text-red'>Enter Your Password!</span>"
    },
    errorPlacement: function(error, element) {
      if(element.attr("name") == "email") {
        error.appendTo(".error-email");
      }
      else if(element.attr("name") == "password") {
        error.appendTo(".error-password");
      }
      else
      {
        error.insertAfter(element);
      }
    },
    submitHandler: function(form, event) {
     var email = $("#email").val();
     var password = $("#password").val();
     // var csrfName = "<?=$this->security->get_csrf_token_name(); ?>";
     // var csrfHash = "<?=$this->security->get_csrf_hash(); ?>";
     var data = {"email":email,"password":password}; 
     $.ajax({
      url: '<?=base_url()?>common/login',
      type: 'POST',
      data: JSON.stringify(data),
      contentType: 'application/json; charset=utf-8',
      datatype: 'JSON',
      async: true,
      success: function(data)
      {
        var value = JSON.parse(data);
        if(value.status=="success")
        {

          window.location.href = "<?=base_url()?>klconfig/properties";
        }
        else
        {
          $("#alert_close").show();
        }
      }
    });
   }
 });
</script>
</body>
</html>