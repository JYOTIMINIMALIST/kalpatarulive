<?php include('common.php'); $page='main_listing_page'; ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>New Construction Residential & Commercial Properties Near Me | Kalpataru</title>
    <meta name="description" content="Explore the top residential & commercial projects that opens up a world full of opportunities for you. Visit the website for more details on all our latest & upcoming projects.">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <?php include('header-css.php'); ?>
    <?php include('ga-code.php'); ?>

    <style type="text/css">
        .searchPopup .modal-content{padding: 20px;}
        .searchPopup .modal-title{color: #414040; font-family: 'Roboto', sans-serif; font-size: 1.2em; font-weight: 500; text-align: center; width: 100%;      letter-spacing: 3px;}
        .searchPopup .searchLabel{font-family: 'Roboto', sans-serif; font-size: 0.750em; font-weight: 500; color: #c09841; letter-spacing: 3px; width: 150px; margin-bottom: 0px !important;}
        .searchPopup .propertyTypeTabs, .searchPopup .locationsWrapper, .searchPopup .selectConfigurationWrapper{display: flex; align-items: center;     }
        .searchPopup .propertyTypeTab{font-size: 0.838em;     color: #727171;font-family: 'History-Pro'; width: calc(50% - 15px); text-align: center;}
        .searchPopup .modal-header{border-bottom: 1px solid #ccc;}
        .searchPopup .propertyTypeTabWrap{width: calc(100% - 150px)}
        .searchPopup .custom_dropdown_group{margin-left: 0px; margin-right: 0px; width: calc(100% - 150px);}
        .searchPopup .custom_dropdown_group .col-md-6{padding: 0px; margin-right: 30px; width: calc(50% - 15px); flex: none;     font-family: 'Roboto', sans-serif;}
        .searchPopup .custom_dropdown_group .col-md-6:last-child{margin-right: 0px; }
        .searchPopup .btn-group{width: calc(100% - 150px) !important}
        .searchPopup .selectedValue{font-family: 'Roboto', sans-serif; font-size: 0.638em;}
        .searchPopup .dropdown-toggle{border: none; border-bottom: solid 1px #000; padding: 0px;}
        .searchPopup .selectConfigurationWrapper{margin-top: 20px;}
        .searchPopup .selectConfigurationWrapper .btn-group .btn{border: none; padding: 0; width: auto; margin-right: 30px; flex: none; font-size: 0.738em;}
        .searchPopup.main_popup_wrapper .close{margin-top: 0px;}
        /*.searchPopup .searchPopup .searchLabel {width: 120px;}*/
        .searchPopup .selectConfigurationWrapper .btn-group .btn.active{background-color:transparent;color: #c09841;}
    </style>
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

                    <img class="w-100 d-none d-lg-block allDesktopBanner" src="<?php echo base_url() ?>assets_web/images/residentialBanner.jpg">
                    <img class="w-100 d-block d-lg-none allMobileBanner" src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/home-banner-mobile-01.jpg">

                    <div class="common_banner_text position-absolute">
                        <div class="container-fluid mainContainer h-100">
                            <div class="d-flex align-items-center h-100">
                                <h1 data-aos="fade" data-aos-offset="0" class="History-Pro mb-0">All Projects</h1>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Filter container for listing page start-->
                <div class="listing_filter_section bigTitleAnimationSection" data-aos="fade" data-aos-delay="100" data-aos-offset="0">
                    <div class="container-fluid mainContainer">
                        <div class="listing_filter_inner">
                            <h2 class="mb-0 History-Pro mobile_listing_main_title">All Projects</h2>
                            <div class="filter_btnsWrapper d-flex align-items-center justify-content-end">
                                <div class="d-none filter_btns mr-3 transition align-items-center">
                                    <img class="transition"src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/icons/sorting-icon.png" alt="Sorting" title="">
                                    <p class="mb-0">Sort</p>
                                </div>
                                <div class="filter_btns transition d-flex align-items-center" data-toggle="modal" data-target="#searchPopupWrapper">
                                    <img class="transition" src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/icons/filters-icon.png" alt="Filter" title="">
                                    <p class="mb-0">Filter</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Filter container for listing page end-->

                <?php if(isset($top_picks) && !empty($top_picks)): ?>
                <!-- Top Picks Section start -->
                <div class="listing_page_section listing_top_picks_section bigTitleAnimationSection">
                    <div class="container-fluid mainContainer">
                        <div class="double-bg-header">
                            <div class="double-main-heading double-main-heading-gold" data-aos="fade">01 TOP PICKS</div>
                            <div class="double-bg-heading double-bg-heading-gold">TOP PICKS</div>
                        </div>
                        <div class="swiper-container">
                            <div class="swiper-wrapper home-featured-list">
                                <?php
                                foreach ($top_picks as $key => $value) {
                                 $ci = & get_instance();
                                 $ci->load->model('common_m');
                                 $title = $ci->common_m->seoUrl($value->title);
                                 if ($key==0 || $key%2==0) {                              
                                    ?>
                                    <div class="swiper-slide home-featured-list-item w-100 col-9 p-0">
                                        <a href="<?=base_url().$value->city_slug.'/'.$value->slug?>"> <?php /*=$title?>/<?=$value->id*/ ?>
                                            <div class="home-featured-list-item-container row align-items-center justify-content-center">
                                                <div data-aos="fade" data-aos-delay="100" data-aos-offset="0" class="home-featured-list-img col-md-7 col-12">
                                                    <div class="home-featured-list-img-container">
                                                        <img src="<?=$value->thumbnail_image?>" class="w-100">  
                                                    </div>                                      
                                                </div>
                                                <div class="home-featured-list-text-container col-md-5 col-12">
                                                    <div class="home-featured-list-text">
                                                        <div data-aos="fade" data-aos-delay="100" data-aos-offset="0" class="home-featured-list-project-name"><?=$value->title?></div>
                                                        <div data-aos="fade" data-aos-delay="200" data-aos-offset="0" class="home-featured-list-project-location Roboto-Regular"><?=$value->location_name?></div>
                                                        <div data-aos="fade" data-aos-delay="300" data-aos-offset="0" class="home-featured-list-project-bhkcount Roboto-Regular"><?=$value->typology?></div>
                                                        <div data-aos="fade" data-aos-delay="400" data-aos-offset="0" class="home-featured-list-project-description Roboto-Regular"><?=(!empty($value->featured_description)?$value->featured_description:$value->short_description);?></div>
                                                        <div data-aos="fade" data-aos-delay="500" data-aos-offset="0" class="icon-button"><div class="round-button"><div class="circle"></div><i class="kalpataru-icon-arrow-right"></i></div> LEARN MORE</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div> 
                                    <?php
                                }
                                else{
                                    ?>
                                    <div class="swiper-slide home-featured-list-item w-100 col-9 p-0">
                                        <a href="<?=base_url().$value->city_slug.'/'.$value->slug?>"> <?php /*=$title?>/<?=$value->id*/ ?>
                                            <div class="home-featured-list-item-container row align-items-center justify-content-center">
                                                <div class="home-featured-list-text-container col-md-5 p-0 col-12">
                                                    <div class="home-featured-list-text">
                                                        <div data-aos="fade" data-aos-delay="100" data-aos-offset="0" class="home-featured-list-project-name"><?=$value->title?></div>
                                                        <div data-aos="fade" data-aos-delay="200" data-aos-offset="0" class="home-featured-list-project-location Roboto-Regular"><?=$value->location_name?></div>
                                                        <div data-aos="fade" data-aos-delay="300" data-aos-offset="0" class="home-featured-list-project-bhkcount Roboto-Regular"><?=$value->typology?></div>
                                                        <div data-aos="fade" data-aos-delay="400" data-aos-offset="0" class="home-featured-list-project-description Roboto-Regular"><?=(!empty($value->featured_description)?$value->featured_description:$value->short_description);?></div>
                                                        <div data-aos="fade" data-aos-delay="500" data-aos-offset="0" class="icon-button"><div class="round-button"><div class="circle"></div><i class="kalpataru-icon-arrow-right"></i></div> LEARN MORE</div>
                                                    </div>
                                                </div>
                                                <div data-aos="fade" data-aos-delay="100" data-aos-offset="0" class="home-featured-list-img col-md-7 col-12">
                                                    <div class="home-featured-list-img-container">
                                                        <img src="<?=$value->thumbnail_image?>" class="w-100">  
                                                    </div>   
                                                </div>                                 
                                            </div>
                                        </a>
                                    </div>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div> 
            <?php endif; ?>
            <!-- Top Picks Section end -->

            <?php if(isset($on_going) && !empty($on_going)): ?>
            <!-- Top Picks Section start -->
            <div class="listing_page_section listing_on_going_section  bigTitleAnimationSection">
                <div class="container-fluid mainContainer">
                    <div class="double-bg-header">
                        <div class="double-main-heading double-main-heading-gold" data-aos="fade">02 ON GOING</div>
                        <div class="double-bg-heading double-bg-heading-gold">ON GOING</div>
                    </div>
                    <div class="swiper-container">
                        <div class="swiper-wrapper home-featured-list on_going_container">
                            <?php
                            foreach ($on_going as $key => $value) {
                             $ci = & get_instance();
                             $ci->load->model('common_m');
                             $title = $ci->common_m->seoUrl($value->title);
                             if ($key==0 || $key%2==0) {                              
                                ?>
                                <div class="swiper-slide home-featured-list-item w-100 col-9 p-0">
                                    <a href="<?=base_url().$value->city_slug.'/'.$value->slug?>"> <?php /*=$title?>/<?=$value->id*/ ?>
                                        <div class="home-featured-list-item-container row align-items-center justify-content-center">
                                            <div data-aos="fade" data-aos-delay="100" data-aos-offset="0" class="home-featured-list-img col-md-7 col-12">
                                                <div class="home-featured-list-img-container">
                                                    <img src="<?=$value->thumbnail_image?>" class="w-100">  
                                                </div>                                      
                                            </div>
                                            <div class="home-featured-list-text-container col-md-5 col-12">
                                                <div class="home-featured-list-text">
                                                    <div data-aos="fade" data-aos-delay="100" data-aos-offset="0" class="home-featured-list-project-name"><?=$value->title?></div>
                                                    <div data-aos="fade" data-aos-delay="200" data-aos-offset="0" class="home-featured-list-project-location Roboto-Regular"><?=$value->location_name?></div>
                                                    <div data-aos="fade" data-aos-delay="300" data-aos-offset="0" class="home-featured-list-project-bhkcount Roboto-Regular"><?=$value->typology?></div>
                                                    <div data-aos="fade" data-aos-delay="400" data-aos-offset="0" class="home-featured-list-project-description Roboto-Regular"><?=(!empty($value->featured_description)?$value->featured_description:$value->short_description);?></div>
                                                    <div data-aos="fade" data-aos-delay="500" data-aos-offset="0" class="icon-button"><div class="round-button"><div class="circle"></div><i class="kalpataru-icon-arrow-right"></i></div> LEARN MORE</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div> 
                                <?php
                            }
                            else{
                                ?>
                                <div class="swiper-slide home-featured-list-item w-100 col-9 p-0">
                                    <a href="<?=base_url().$value->city_slug.'/'.$value->slug?>"> <?php /*=$title?>/<?=$value->id*/ ?>
                                        <div class="home-featured-list-item-container row align-items-center justify-content-center">
                                            <div class="home-featured-list-text-container col-md-5 p-0 col-12">
                                                <div class="home-featured-list-text">
                                                    <div data-aos="fade" data-aos-delay="100" data-aos-offset="0" class="home-featured-list-project-name"><?=$value->title?></div>
                                                    <div data-aos="fade" data-aos-delay="200" data-aos-offset="0" class="home-featured-list-project-location Roboto-Regular"><?=$value->location_name?></div>
                                                    <div data-aos="fade" data-aos-delay="300" data-aos-offset="0" class="home-featured-list-project-bhkcount Roboto-Regular"><?=$value->typology?></div>
                                                    <div data-aos="fade" data-aos-delay="400" data-aos-offset="0" class="home-featured-list-project-description Roboto-Regular"><?=(!empty($value->featured_description)?$value->featured_description:$value->short_description);?></div>
                                                    <div data-aos="fade" data-aos-delay="500" data-aos-offset="0" class="icon-button"><div class="round-button"><div class="circle"></div><i class="kalpataru-icon-arrow-right"></i></div> LEARN MORE</div>
                                                </div>
                                            </div>
                                            <div data-aos="fade" data-aos-delay="100" data-aos-offset="0" class="home-featured-list-img col-md-7 col-12">
                                                <div class="home-featured-list-img-container">
                                                    <img src="<?=$value->thumbnail_image?>" class="w-100">  
                                                </div>   
                                            </div>                                 
                                        </div>
                                    </a>
                                </div>

                                <?php
                            }
                            if ($key==3){
                                break;
                            }
                        }
                        ?>
                    </div>
                </div>
                <!-- <div class="swiper-pagination"></div>
                <div class="swiper-navigation-container">
                    <div class="swiper-button-prev hiddenOnDesktop"></div>
                    <div class="swiper-button-next hiddenOnDesktop"></div>
                </div> -->
                <div style="text-align: center;cursor: pointer;" id="load_more" class="projectListingLoadMore">
                    <?php
                    if (count($on_going)<=4) {
                        // echo 'No more data!';
                    }
                    else
                    {
                        // echo ' <a href="javascript:void(0);" >LOAD MORE</a>';
                        echo '<div onclick="loadMore()" class="icon-button"><div class="round-button"><div class="circle"></div><i class="kalpataru-icon-arrow-right"></i></div> LOAD MORE</div>';
                    }
                    ?>
                   
                </div>
                <input type="hidden" id="page_no" name="page_no" >
            </div>
        </div> 
        <?php endif; ?> 
        <!-- Top Picks Section end -->
    </div>
    <?php include('footer.php'); ?>         
</div>
<?php include('footer-js.php'); ?>
<script type="text/javascript">
    var page = 2;
    var nomore = 0;
    function loadMore()
    {
        var data_count = 4;
        var data_from = (page-1)*data_count;
        var data_to =   (page*data_count)-1; 
        var ongoing = <?php echo json_encode($on_going); ?>;
        var key=0;
        var data_html = "";
        var temp = "";
        for (var i = data_from; i <= data_to; i++) {
            if (i>(ongoing.length-1)) {
                nomore = 1;
                break;
            }
            if (key==0) {
                temp = ongoing[i].id;
            }
            var title = seoUrl(ongoing[i].title);
            var description = ongoing[i].short_description;
            if(ongoing[i].featured_description !== null){
                if(ongoing[i].featured_description.length > 0){
                    description = ongoing[i].featured_description;
                }
            }
            if (key==0 || key%2==0) {                              
                //+title+'/'+ongoing[i].id+'
                data_html += '<div class="swiper-slide home-featured-list-item w-100 col-9 p-0 scroll-to-'+ongoing[i].id+'"> <a href="<?=base_url()?>'+ongoing[i].city_slug+'/'+ongoing[i].slug+'"> <div class="home-featured-list-item-container row align-items-center justify-content-center"> <div data-aos="fade" data-aos-delay="100" data-aos-offset="0" class="home-featured-list-img col-md-7 col-12"> <div class="home-featured-list-img-container"> <img src="'+ongoing[i].thumbnail_image+'" class="w-100"> </div> </div> <div class="home-featured-list-text-container col-md-5 col-12"> <div class="home-featured-list-text"> <div data-aos="fade" data-aos-delay="100" data-aos-offset="0" class="home-featured-list-project-name">'+ongoing[i].title+'</div> <div data-aos="fade" data-aos-delay="200" data-aos-offset="0" class="home-featured-list-project-location Roboto-Regular">'+ongoing[i].location_name+'</div> <div data-aos="fade" data-aos-delay="300" data-aos-offset="0" class="home-featured-list-project-bhkcount Roboto-Regular">'+ongoing[i].typology+'</div> <div data-aos="fade" data-aos-delay="400" data-aos-offset="0" class="home-featured-list-project-description Roboto-Regular">'+description+'</div> <div data-aos="fade" data-aos-delay="500" data-aos-offset="0" class="icon-button"><div class="round-button"><div class="circle"></div><i class="kalpataru-icon-arrow-right"></i></div> LEARN MORE</div> </div> </div> </div> </a> </div>';
            }
            else{
                data_html += '<div class="swiper-slide home-featured-list-item w-100 col-9 p-0 scroll-to-'+ongoing[i].id+'"> <a href="<?=base_url()?>'+ongoing[i].city_slug+'/'+ongoing[i].slug+'"> <div class="home-featured-list-item-container row align-items-center justify-content-center"> <div class="home-featured-list-text-container col-md-5 p-0 col-12"> <div class="home-featured-list-text"> <div data-aos="fade" data-aos-delay="100" data-aos-offset="0" class="home-featured-list-project-name">'+ongoing[i].title+'</div> <div data-aos="fade" data-aos-delay="200" data-aos-offset="0" class="home-featured-list-project-location Roboto-Regular">'+ongoing[i].location_name+'</div> <div data-aos="fade" data-aos-delay="300" data-aos-offset="0" class="home-featured-list-project-bhkcount Roboto-Regular">'+ongoing[i].typology+'</div> <div data-aos="fade" data-aos-delay="400" data-aos-offset="0" class="home-featured-list-project-description Roboto-Regular">'+description+'</div> <div data-aos="fade" data-aos-delay="500" data-aos-offset="0" class="icon-button"><div class="round-button"><div class="circle"></div><i class="kalpataru-icon-arrow-right"></i></div> LEARN MORE</div> </div> </div> <div data-aos="fade" data-aos-delay="100" data-aos-offset="0" class="home-featured-list-img col-md-7 col-12"> <div class="home-featured-list-img-container"> <img src="'+ongoing[i].thumbnail_image+'" class="w-100"> </div> </div> </div> </a> </div>';
            }
            key++;
        }
        $(".on_going_container").append(data_html);
        AOS.init({
            duration: 600,
            disable: function() {
                var maxWidth = 800;
                return window.innerWidth < maxWidth;
            }
        });
        /*$('html, body').animate({
            scrollTop: $(".scroll-to-"+temp).offset().top-80
        }, 10);*/
        if (nomore==1) {
            $("#load_more").html("No more data!"); 
        }else{
            $('html, body').animate({
                scrollTop: $(".scroll-to-"+temp).offset().top-80
            }, 10);
        }
        page++;
    }
    function seoUrl(string) {
        string = string.toLowerCase();
        string = string.replace(/[^a-z0-9_\s-]/, '-');
        string = string.replace(/[\s-]+/, '-');
        string = string.replace(/[\s_]/, '-');
        return string;
    }
</script>
</body>
</html>