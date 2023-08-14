<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Thank you | Kalpataru Group | Leading Real Estate Developer in India</title>
    <meta name="description" content="Kalpataru Group is a leading real estate developer in India founded in the year 1969, engaged in designing luxurious housing projects.">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="icon" type="image/x-icon" href="https://www.kalpataru.com/assets_web/images/favicon.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff"> 
    <meta name="theme-color" content="#ffffff">

    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '133558455601275');
        fbq('track', 'PageView');
        fbq('track', 'Lead');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=133558455601275&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Facebook Pixel Code -->

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,500&display=swap" rel="stylesheet">
    <!-- <link rel="icon" href="img/favicon.jpg" type="image/x-icon">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon"> -->
    <!-- <link rel="stylesheet" href="assets_web/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets_web/css/swiper.min.css">
    <link rel="stylesheet" href="assets_web/css/aos.css" /> -->
    <!-- <link rel="stylesheet" href="https://www.kalpataru.com/assets_web/css/main.css?v"> -->
    <!-- <link rel="stylesheet" href="https://www.kalpataru.com/assets_web/css/main.css?ver=3.9"> -->
    <link rel="stylesheet" href="https://www.kalpataru.com/assets_web/css/combine-mini.css?ver=3.5" />
    <style type="text/css">
        .notFoundWrap{height: 100vh; width: 100%; display: flex; justify-content: center; align-items: center; flex-wrap: nowrap; background-image: url(https://d2j4tkbto6uvqv.cloudfront.net/kalpataru/assets_web/images/company-profile/banner2.jpg?ver=1); background-repeat: no-repeat; background-position: center; background-size: cover;}
        .notFoundWrap h1, .notFoundWrap p{width: 100%; text-align: center; color: #fff}
        .notFoundWrap h1{font-size: 100px; margin-bottom: 20px;}
        .notFoundWrap p{font-size: 20px;}
        .notFoundWrap button{border: solid 1px #fff; line-height: 48px; color: #fff; background-color: transparent; margin: auto; width: 100%; margin-top: 20px; }
        .notFoundWrap button a{color: #fff;}
        .notFoundWrap button:hover{background-color: #fff; color: #000}
        .notFoundWrap button:hover a{color: #000;}
    </style>

    <?php
        echo isset($properties->thank_head) && $properties->thank_head != "" ? $properties->thank_head : '';
    ?>
</head>
<body class="small-page home-page">
    <?php
        echo isset($properties->thank_body) && $properties->thank_body != "" ? $properties->thank_body : '';
    ?>
    <div class="notFoundWrap">
        <div class="notFoundWrapIn">
            <!-- <h1>404</h1> -->
            <p>Thank you for your enquiry.<br>Someone from our team will get in touch with you soon.</p>
            <?php //print_r($_SERVER); ?>
            <div class="col-md-5 col-8 m-auto">
                <button class="transition"><a href="javascript:void(0)" onclick="window.history.back();" title="">Back to Website</a></button>
            </div>
        </div>
    </div>
    <?php unset($_SESSION['thankyou']); ?>
</body>
</html>
