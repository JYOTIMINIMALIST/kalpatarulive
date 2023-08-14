<?php include('common.php'); $page='press-page'; ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Press | Kalpataru</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <?php include('header-css.php'); ?>
        <?php include('ga-code.php'); ?>
    </head>
    <body class="small-page">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]--> 
        <div class="page-content <?php echo $page; ?> position-relative gap_from_top">
            <div class="page-body">
                <?php include('header.php'); ?> 
                <!-- Main banner start-->
                <div class="common_banner backgroundImg position-relative">
                    <img class="w-100 d-none d-lg-block allDesktopBanner" src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/press-bannerNew.jpg?ver=1" alt="Press">
                    <img class="w-100 d-block d-lg-none allMobileBanner" src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/press-bannerNew.jpg?ver=1" alt="Press">
                     <!-- Video Provision -->
                    <!-- <video loop autoplay muted playsinline>
                          <source src="<?php echo base_url(); ?>videos/1.mp4" type="video/mp4">
                    </video> -->
                      <!-- Video Provision end-->
                    <div class="common_banner_text position-absolute">
                        <div class="container-fluid mainContainer h-100">
                            <div class="d-flex align-items-center h-100">
                                <h1 class="History-Pro mb-0" data-aos="fade" data-aos-offset="0">Press</h1>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pressContentWrapper">
                    <div class="pressFilterOptions">
                        <div class="container-fluid mainContainer">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 mb-md-2 mb-2 mb-lg-0">
                                    <div class="pressFilterBox pressSearch">
                                        <form>
                                            <div class="relative-box w-100 m-auto form_element pb-0">
                                                <input type="text" name="user_name" class="form-control w-100 filter_search" placeholder="Search">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 mb-md-2 mb-2 mb-lg-0">
                                    <div class="pressFilterBox">
                                        <div class="custom_dropdown_box">
                                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><div class="selectedValue">Select Projects</div>
                                                <div class="dropdown_arrow">
                                                    <span></span>
                                                    <span></span>
                                                </div>
                                            </a>
                                            <ul class="dropdown-menu project_dropdown">
                                                <li class="dropdown-item" data-id="0">Select Project</li>
                                                <?php if(isset($properties) && !empty($properties)):
                                                foreach($properties as $pKey=>$pVal): ?>
                                                <li class="dropdown-item" data-id="<?php echo $pVal->id; ?>"><?php echo $pVal->title; ?></li>
                                                <?php endforeach;
                                                endif; ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 mb-md-2 mb-2 mb-lg-0">
                                    <div class="pressFilterBox">
                                        <div class="custom_dropdown_box">
                                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><div class="selectedValue">Select Year</div>
                                                <div class="dropdown_arrow">
                                                    <span></span>
                                                    <span></span>
                                                </div>
                                            </a>
                                            <ul class="dropdown-menu year_dropdown">
                                                <li class="dropdown-item">Select Year</li>
                                                <?php if(isset($press_year) && !empty($press_year)):
                                                foreach($press_year as $yKey=>$yVal): ?>
                                                <li class="dropdown-item"><?php echo $yVal; ?></li>
                                                <?php endforeach;
                                                endif; ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 mb-md-2 mb-2 mb-lg-0">
                                    <div class="pressFilterBox">
                                        <div class="custom_dropdown_box">
                                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><div class="selectedValue">Select Month</div>
                                                <div class="dropdown_arrow">
                                                    <span></span>
                                                    <span></span>
                                                </div>
                                            </a>
                                            <ul class="dropdown-menu month_dropdown">
                                                <li class="dropdown-item" data-id="0">Select Month</li>
                                                <?php if(isset($press_month) && !empty($press_month)):
                                                foreach($press_month as $mKey=>$mVal): ?>
                                                <li class="dropdown-item" data-id="<?php echo $mVal->month_no; ?>"><?php echo $mVal->month_name; ?></li>
                                                <?php endforeach;
                                                endif; ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pressBoxesWrapper">
                        <div class="container-fluid mainContainer">
                            <div class="row">
                                <?php /*<div class="col-md-6">
                                    <div class="pressBox text-center">
                                        <div class="pressDate History-Pro mb-4">February 1, 2020</div>
                                        <p class="pressDesc mb-4">Information under Regulation 39(3) of the SEBI (Listing Obligations and DisclosureRequirements) Regulations, 2015</p>
                                        <a class="icon-button d-inline-flex" href="">
                                            <div class="round-button">
                                                <div class="circle"></div><i class="kalpataru-icon-arrow-right"></i>
                                            </div>READ MORE
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="pressBox text-center">
                                        <div class="pressDate History-Pro mb-4">February 1, 2020</div>
                                        <p class="pressDesc mb-4">Information under Regulation 39(3) of the SEBI (Listing Obligations and DisclosureRequirements) Regulations, 2015</p>
                                        <a class="icon-button d-inline-flex" href="">
                                            <div class="round-button">
                                                <div class="circle"></div><i class="kalpataru-icon-arrow-right"></i>
                                            </div>READ MORE
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="pressBox text-center">
                                        <div class="pressDate History-Pro mb-4">February 1, 2020</div>
                                        <p class="pressDesc mb-4">Information under Regulation 39(3) of the SEBI (Listing Obligations and DisclosureRequirements) Regulations, 2015</p>
                                        <a class="icon-button d-inline-flex" href="">
                                            <div class="round-button">
                                                <div class="circle"></div><i class="kalpataru-icon-arrow-right"></i>
                                            </div>READ MORE
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="pressBox text-center">
                                        <div class="pressDate History-Pro mb-4">February 1, 2020</div>
                                        <p class="pressDesc mb-4">Information under Regulation 39(3) of the SEBI (Listing Obligations and DisclosureRequirements) Regulations, 2015</p>
                                        <a class="icon-button d-inline-flex" href="">
                                            <div class="round-button">
                                                <div class="circle"></div><i class="kalpataru-icon-arrow-right"></i>
                                            </div>READ MORE
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="pressBox text-center">
                                        <div class="pressDate History-Pro mb-4">February 1, 2020</div>
                                        <p class="pressDesc mb-4">Information under Regulation 39(3) of the SEBI (Listing Obligations and DisclosureRequirements) Regulations, 2015</p>
                                        <a class="icon-button d-inline-flex" href="">
                                            <div class="round-button">
                                                <div class="circle"></div><i class="kalpataru-icon-arrow-right"></i>
                                            </div>READ MORE
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="pressBox text-center">
                                        <div class="pressDate History-Pro mb-4">February 1, 2020</div>
                                        <p class="pressDesc mb-4">Information under Regulation 39(3) of the SEBI (Listing Obligations and DisclosureRequirements) Regulations, 2015</p>
                                        <a class="icon-button d-inline-flex" href="">
                                            <div class="round-button">
                                                <div class="circle"></div><i class="kalpataru-icon-arrow-right"></i>
                                            </div>READ MORE
                                        </a>
                                    </div>
                                </div>*/ ?>
                            </div>

                            <nav class="pressPagination mt-lg-5 mb-lg-5 mt-md-3 mb-md-3" aria-label="Page navigation example">
                              <?php /*<ul class="pagination justify-content-center">
                                <li class="page-item">
                                  <a class="page-link" href="#" tabindex="-1">Previous</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item">
                                  <a class="page-link" href="#">Next</a>
                                </li>
                              </ul>*/ ?>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <?php include('footer.php'); ?>         
        </div>
        <?php include('footer-js.php'); ?>
         <script type="text/javascript">
            $(".nav-highlight").removeClass('active');
            $(".nav-press").addClass('active');

            $(document).ready(function(){
                //var categories = $.parseJSON('<? /*json_encode($sub_cat_selected);*/ ?>');
                var xhr = null;
                var data = {
                    "page" : 1,
                    "is_ajax" : 1
                }
                var project_id = '';
                var year = '';
                var month = '';
                //Load selected filtered products
                load_filter_data(data);

                $(".project_dropdown li").click(function(){
                    $('.year_dropdown').parents('.custom_dropdown_box').find('.selectedValue').html('Select Year');
                    $('.month_dropdown').parents('.custom_dropdown_box').find('.selectedValue').html('Select Month');
                    var selText = $(this).text();
                    var data_id = $(this).attr('data-id');
                    if(data_id == "0"){
                        project_id = "";
                    }else{
                        project_id = data_id;
                    }
                    year = "";
                    month = "";
                    data.reset_year_month = "yes";
                    data.reset_month = "";

                    load_filter_data(data);
                });

                $(document).on('click','.year_dropdown li',function(){
                    $('.month_dropdown').parents('.custom_dropdown_box').find('.selectedValue').html('Select Month');
                    var selText = $(this).text();
                    if(selText == "Select Year"){
                        year = "";
                    }else{
                        year = selText;
                    }
                    $(this).parents('.custom_dropdown_box').find('.selectedValue').html(selText);
                    month = "";
                    data.reset_year_month = "";
                    data.reset_month = "yes";
                    load_filter_data(data);
                });

                $(document).on('click','.month_dropdown li',function(){
                    var selText = $(this).text();
                    var month_id = $(this).attr('data-id');
                    if(month_id == "0"){
                        month = "";
                    }else{
                        month = month_id;
                    }
                    $(this).parents('.custom_dropdown_box').find('.selectedValue').html(selText);
                    data.reset_year_month = "";
                    data.reset_month = "";
                    load_filter_data(data);
                });

                $('.filter_search').keyup(function (e) {
                    e.preventDefault();
                    load_filter_data(data);

                    if($(this).val() == ''){
                        load_filter_data(data);
                    }
                });

                function load_filter_data(data){
                    $("#preloader").show(); 
                    var search_field = $('.filter_search').val();
                    if(search_field != ""){
                        var search_filter = search_field;
                    }else{
                        var search_filter = "<?php echo isset($get_url) && $get_url ? $get_url : ''; ?>";
                    }
                    var p_data = data;
                    //p_data.categories = categories;
                    p_data.search_filter = search_filter;
                    p_data.project_id = project_id;
                    p_data.month = month;
                    p_data.year = year;

                    if( xhr != null ) {
                        xhr.abort();
                        xhr = null;
                    }
                    xhr = $.ajax({
                        url: '<?= base_url(); ?>website/load_press_data',
                        data: p_data,
                        type: 'post',
                        dataType: 'json',
                        success: function(result){
                            $("#preloader").hide();
                            // console.log(result);return;
                            if(result["errCode"] == -1){
                                if(result['year_element'].length > 0){
                                    $('.year_dropdown').html(result['year_element']);
                                }
                                if(result['month_element'].length > 0){
                                    $('.month_dropdown').html(result['month_element']);
                                }
                                $(".pressBoxesWrapper .mainContainer .row").html(result["press_news"]);
                                $(".pressPagination").html(result["pagination"]);
                            }
                            else{
                                $(".pressBoxesWrapper .mainContainer .row").html('<div class="col-12"><p class="text-center">'+result["message"]+'</p></div>');
                                $(".pressPagination").html('');
                            }
                        }
                    })
                }

                $(document).on("click touch", ".pressPagination li a.page-link", function(){
                    var page = $(this).attr("data-page");
                    /*var data = [];
                    data["page"] = page;
                    data["is_ajax"] = 1;*/
                    var data = {
                        "page" : page,
                        "is_ajax" : 1
                    }
                    load_filter_data(data);
                    //Scroll top
                    //$(".productWrapper").scrollTop();
                    var $target = $('html,body');
                    setTimeout(function(){
                        $target.animate({scrollTop: $(".pressContentWrapper").offset().top-60}, 800);
                    }, 100);
                    
                });
            })
        </script>
    </body>
</html>
