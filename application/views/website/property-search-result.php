<?php include('common.php'); $page='main_listing_page'; ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Projects | Kalpataru</title>
    <meta name="description" content="">
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
        <div class="common_banner backgroundImg position-relative">

            <img class="w-100 d-none d-lg-block allDesktopBanner" src="<?php echo base_url() ?>assets_web/images/residentialBanner.jpg">
            <img class="w-100 d-block d-lg-none allMobileBanner" src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/home-banner-mobile-01.jpg">

            <div class="common_banner_text position-absolute">
                <div class="container-fluid mainContainer h-100">
                    <div class="d-flex align-items-center h-100">
                        <h1 data-aos="fade" data-aos-offset="0" class="History-Pro mb-0">Search Result of <?php echo isset($_GET['search_box']) ? $_GET['search_box'] : ''?></h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="listing_page_section listing_top_picks_section">
            <div class="container-fluid mainContainer">
                <div class="swiper-container">
                    <div class="swiper-wrapper home-featured-list">
                        <?php if (!empty($property)):?>
                            <?php foreach ($property as $value):?>

                                <?php
                                    $id = $value['city'];
                                   $city_slug = $this->db->select('*')
                                                     ->from('cities')
                                                     ->where(['id'=>$id])
                                                     ->get()->row_array();
                                ?>

                                <div class="swiper-slide home-featured-list-item w-100 col-9 p-0">
                                    <a href="<?=base_url().$city_slug['slug'].'/'.$value['slug']?>"> <?php /*=$title?>/<?=$value->id*/ ?>
                                        <div class="home-featured-list-item-container row align-items-center justify-content-center">
                                            <div class="home-featured-list-img col-md-7 col-12" data-aos="fade" data-aos-delay="100" data-aos-offset="0">
                                                <div class="home-featured-list-img-container">
                                                    <img src="<?=$value['thumbnail_image']?>" class="w-100">
                                                </div>
                                            </div>
                                            <div class="home-featured-list-text-container col-md-5 col-12">
                                                <div class="home-featured-list-text">
                                                    <div class="home-featured-list-project-name" data-aos="fade" data-aos-delay="100" data-aos-offset="0"><?=$value['title']?></div>
                                                    <div class="home-featured-list-project-location Roboto-Regular" data-aos="fade" data-aos-delay="200" data-aos-offset="0"><?=$value['location_name']?></div>
                                                    <div data-aos="fade" data-aos-delay="300" data-aos-offset="0" class="home-featured-list-project-bhkcount Roboto-Regular"><?=$value['typology']?></div>
                                                    <div class="home-featured-list-project-description Roboto-Regular" data-aos="fade" data-aos-delay="300" data-aos-offset="0"><?=(!empty($value['featured_description'])?$value['featured_description']:$value['short_description']);?></div>
                                                    <div class="typeOfBHK d-flex align-items-center flex-wrap" data-aos="fade" data-aos-delay="400" data-aos-offset="0">
                                                        <?php
                                                        /*$typo = explode(",", $value->typology);
                                                          foreach ($typo as $key => $value_typo) {
                                                                echo '<div class="bHkBox">'.(int)($value_typo).' BHK</div>';
                                                            }  */
                                                        ?>
                                                    </div>
                                                    <div class="icon-button" data-aos="fade" data-aos-delay="500" data-aos-offset="0"><div class="round-button"><div class="circle"></div><i class="kalpataru-icon-arrow-right"></i></div> LEARN MORE</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                        <?php endforeach;?>
                        <?php else:?>

                        <div class="col-md-12">

                            <h3 class="text-center">No Result Found </h3>

                        </div>

                      <?php endif;?>



                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>




    </div>
    </div>
    <?php include('footer.php'); ?>

<?php include('footer-js.php'); ?>
</body>
</html>