<?php include('common.php'); $page='project-inner'; ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Kalpataru</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <?php include('header-css.php'); ?>
        <?php include('ga-code.php'); ?>
        <script src='https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.js'></script>
        <link href='https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.css' rel='stylesheet' />
    </head>
    <body class="small-page">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]--> 
        <div class="page-content <?php echo $page; ?> position-relative">
            <div class="page-body">
                <?php include('header.php'); ?> 
                <div class="maps-container">
                    <style type="text/css">
                        #info {
                            display: block;
                            position: relative;
                            margin: 0px auto;
                            width: 50%;
                            padding: 10px;
                            border: none;
                            border-radius: 3px;
                            font-size: 12px;
                            text-align: center;
                            color: #222;
                            background: #fff;
                        }
                    </style>
                    <div id='map' style='width: 100%; height: 400px;'></div>
                    <pre id="info"></pre>
                    <script>
                        mapboxgl.accessToken = 'pk.eyJ1IjoibWFja3JhbCIsImEiOiJjazVnYjc2ZHcwNXl1M2twZTVpZjVnaG9uIn0.Sj4aeLGGlZm2M8BcQ1unpQ';
                        var map = new mapboxgl.Map({
                            container: 'map', // container id
                            style: 'mapbox://styles/mapbox/streets-v11',
                            center: [72.8289, 18.9494], // starting position
                            zoom: 9 // starting zoom
                        });
                             
                        map.on('mousemove', function(e) {
                            document.getElementById('info').innerHTML =
                            // e.point is the x, y coordinates of the mousemove event relative
                            // to the top-left corner of the map
                            JSON.stringify(e.point) +
                            '<br />' +
                            // e.lngLat is the longitude, latitude geographical position of the event
                            JSON.stringify(e.lngLat.wrap());
                        });
                    </script>
                </div>
                
            </div>            
            <?php include('footer.php'); ?>
        </div>
        <?php include('footer-js.php'); ?>
    </body>
</html>
