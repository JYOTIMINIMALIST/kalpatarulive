<?php include('common.php'); $page='searchResultsPage'; ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Search Results | Kalpataru</title>
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
                <!-- Filter container for listing page start-->
                <div class="listing_filter_section">
                    <div class="container-fluid mainContainer">
                        <div class="listing_filter_inner" data-aos="fade" data-aos-offset="0">
                            <div class="filter_btnsWrapper d-flex align-items-center justify-content-between w-100">
                                <!-- <div class="d-none filter_btns mr-3 transition align-items-center">
                                    <img class="transition"src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/icons/sorting-icon.png" alt="Sorting" title="">
                                    <p class="mb-0">Sort</p>
                                </div> -->
                                <div class="searchResultTitle">Showing <?=count($properties)?> results</div>
                                <div class="filter_btns transition d-flex align-items-center" data-toggle="modal" data-target="#searchPopupWrapper">
                                    <img class="transition" src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/icons/filters-icon.png" alt="Filter" title="">
                                    <p class="mb-0">Filter</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Filter container for listing page end-->

                <!-- Top Picks Section start -->
                <div class="listing_page_section listing_top_picks_section">
                    <div class="container-fluid mainContainer">
                        <div class="swiper-container">      
                            <div class="swiper-wrapper home-featured-list">
                             <?php
                             foreach ($properties as $key => $value) {    
                                $ci = & get_instance();
                                $ci->load->model('common_m');
                                $title = $ci->common_m->seoUrl($value->title);
                                if ($key==0 || $key%2==0) {
                                    ?>
                                <div class="swiper-slide home-featured-list-item w-100 col-9 p-0">
                                    <a href="<?=base_url().$value->city_slug.'/'.$value->slug?>"> <?php /*=$title?>/<?=$value->id*/ ?>
                                        <div class="home-featured-list-item-container row align-items-center justify-content-center">
                                            <div class="home-featured-list-img col-md-7 col-12" data-aos="fade" data-aos-delay="100" data-aos-offset="0">
                                                <div class="home-featured-list-img-container">
                                                    <img src="<?=$value->thumbnail_image?>" class="w-100"  alt="<?=$value->thumbnail_imagealt?>">  
                                                </div>                                      
                                            </div>
                                            <div class="home-featured-list-text-container col-md-5 col-12">
                                                <div class="home-featured-list-text">
                                                    <div class="home-featured-list-project-name" data-aos="fade" data-aos-delay="100" data-aos-offset="0"><?=$value->title?></div>
                                                    <div class="home-featured-list-project-location Roboto-Regular" data-aos="fade" data-aos-delay="200" data-aos-offset="0"><?=$value->location_name?></div>
                                                    <div data-aos="fade" data-aos-delay="300" data-aos-offset="0" class="home-featured-list-project-bhkcount Roboto-Regular"><?=$value->typology?></div>
                                                    <div class="home-featured-list-project-description Roboto-Regular" data-aos="fade" data-aos-delay="300" data-aos-offset="0"><?=(!empty($value->featured_description)?$value->featured_description:$value->short_description);?></div>
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
                                 <?php
                                }
                                else{
                                    ?>
                                <div class="swiper-slide home-featured-list-item w-100 col-9 p-0">
                                    <a href="<?=base_url().$value->city_slug.'/'.$value->slug?>"> <?php /*=$title?>/<?=$value->id*/ ?>
                                        <div class="home-featured-list-item-container row align-items-center justify-content-center">
                                            <div class="home-featured-list-text-container col-md-5 p-0 col-12">
                                                <div class="home-featured-list-text">
                                                    <div class="home-featured-list-project-name" data-aos="fade" data-aos-delay="100" data-aos-offset="0"><?=$value->title?></div>
                                                    <div class="home-featured-list-project-location Roboto-Regular" data-aos="fade" data-aos-delay="200" data-aos-offset="0"><?=$value->location_name?></div>
                                                    <div data-aos="fade" data-aos-delay="300" data-aos-offset="0" class="home-featured-list-project-bhkcount Roboto-Regular"><?=$value->typology?></div>
                                                    <div class="home-featured-list-project-description Roboto-Regular" data-aos="fade" data-aos-delay="300" data-aos-offset="0"><?=(!empty($value->featured_description)?$value->featured_description:$value->short_description);?></div>
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
                                            <div class="home-featured-list-img col-md-7 col-12" data-aos="fade" data-aos-delay="100" data-aos-offset="0">
                                                <div class="home-featured-list-img-container">
                                                    <img src="<?=$value->thumbnail_image?>" class="w-100" alt="<?=$value->thumbnail_imagealt?>">  
                                                </div>   
                                            </div>                                 
                                        </div>
                                    </a>
                                </div>
                                 <?php
                                }
                            }
                            ?>
                                <!-- <div class="swiper-slide home-featured-list-item w-100 col-9 p-0">
                                    <div class="home-featured-list-item-container row align-items-center justify-content-center">
                                        <div class="home-featured-list-img col-md-7 col-12" data-aos="fade" data-aos-delay="100" data-aos-offset="0">
                                            <div class="home-featured-list-img-container">
                                                <img src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/featured-03.jpg" class="w-100">  
                                            </div>  
                                        </div>                                    
                                        <div class="home-featured-list-text-container col-md-5 col-12">
                                            <div class="home-featured-list-text">
                                                <div class="home-featured-list-project-name" data-aos="fade" data-aos-delay="100" data-aos-offset="0">KALPATARU RADIANCE</div>
                                                <div class="home-featured-list-project-location Roboto-Regular" data-aos="fade" data-aos-delay="200" data-aos-offset="0">GOREGAON WEST</div>
                                                <div class="home-featured-list-project-description Roboto-Regular" data-aos="fade" data-aos-delay="300" data-aos-offset="0">Spacious residences are designed to redefine your lifestyle</div>
                                                <div class="typeOfBHK d-flex align-items-center flex-wrap" data-aos="fade" data-aos-delay="400" data-aos-offset="0">
                                                    <div class="bHkBox">2 BHK</div>
                                                    <div class="bHkBox">3 BHK</div>
                                                    <div class="bHkBox">4 BHK</div>
                                                </div>
                                                <a class="icon-button" href="#" data-aos="fade" data-aos-delay="500" data-aos-offset="0"><div class="round-button"><div class="circle"></div><i class="kalpataru-icon-arrow-right"></i></div> LEARN MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide home-featured-list-item w-100 col-9 p-0">
                                    <div class="home-featured-list-item-container row align-items-center justify-content-center">
                                        <div class="home-featured-list-text-container col-md-5 p-0 col-12">
                                            <div class="home-featured-list-text">
                                                <div class="home-featured-list-project-name" data-aos="fade" data-aos-delay="100" data-aos-offset="0">KALPATARU BLISS APARTMENTS</div>
                                                <div class="home-featured-list-project-location Roboto-Regular" data-aos="fade" data-aos-delay="200" data-aos-offset="0">KALINA</div>
                                                <div class="home-featured-list-project-description Roboto-Regular" data-aos="fade" data-aos-delay="300" data-aos-offset="0">Designed to create a living experience the likes of which you’ll rarely see</div>
                                                <div class="typeOfBHK d-flex align-items-center flex-wrap" data-aos="fade" data-aos-delay="400" data-aos-offset="0">
                                                    <div class="bHkBox">2 BHK</div>
                                                    <div class="bHkBox">3 BHK</div>
                                                    <div class="bHkBox">4 BHK</div>
                                                </div>
                                                <a class="icon-button" href="#" data-aos="fade" data-aos-delay="500" data-aos-offset="0"><div class="round-button"><div class="circle"></div><i class="kalpataru-icon-arrow-right"></i></div> LEARN MORE</a>
                                            </div>
                                        </div>
                                        <div class="home-featured-list-img col-md-7 col-12" data-aos="fade" data-aos-delay="100" data-aos-offset="0">
                                            <div class="home-featured-list-img-container">
                                                <img src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/featured-02.jpg" class="w-100">  
                                            </div>   
                                        </div>                                 
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div> 

              <!--   <div class="listing_page_section">
                    <div class="container-fluid mainContainer">
                        <div class="swiper-container">
                            <div class="swiper-wrapper home-featured-list">
                                <div class="swiper-slide home-featured-list-item w-100 col-9 p-0">
                                    <div class="home-featured-list-item-container row align-items-center justify-content-center">
                                        <div class="home-featured-list-img col-md-7 col-12" data-aos="fade" data-aos-delay="100" data-aos-offset="0">
                                            <div class="home-featured-list-img-container">
                                                <img src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/featured-01.jpg" class="w-100">  
                                            </div>                                      
                                        </div>
                                        <div class="home-featured-list-text-container col-md-5 col-12">
                                            <div class="home-featured-list-text">
                                                <div class="home-featured-list-project-name" data-aos="fade" data-aos-delay="100" data-aos-offset="0">KALPATARU IMPERIA</div>
                                                <div class="home-featured-list-project-location Roboto-Regular" data-aos="fade" data-aos-delay="200" data-aos-offset="0">SANTACRUZ WEST</div>
                                                <div class="home-featured-list-project-description Roboto-Regular" data-aos="fade" data-aos-delay="300" data-aos-offset="0">Designed to create a living experience the likes of which you’ll rarely see</div>
                                                <div class="typeOfBHK d-flex align-items-center flex-wrap" data-aos="fade" data-aos-delay="400" data-aos-offset="0">
                                                    <div class="bHkBox">2 BHK</div>
                                                    <div class="bHkBox">3 BHK</div>
                                                    <div class="bHkBox">4 BHK</div>
                                                </div>
                                                <a class="icon-button" href="#" data-aos="fade" data-aos-delay="500" data-aos-offset="0"><div class="round-button"><div class="circle"></div><i class="kalpataru-icon-arrow-right"></i></div> LEARN MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="swiper-slide home-featured-list-item w-100 col-9 p-0">
                                    <div class="home-featured-list-item-container row align-items-center justify-content-center">
                                        <div class="home-featured-list-text-container col-md-5 p-0 col-12">
                                            <div class="home-featured-list-text">
                                                <div class="home-featured-list-project-name" data-aos="fade" data-aos-delay="100" data-aos-offset="0">KALPATARU BLISS APARTMENTS</div>
                                                <div class="home-featured-list-project-location Roboto-Regular" data-aos="fade" data-aos-delay="200" data-aos-offset="0">KALINA</div>
                                                <div class="home-featured-list-project-description Roboto-Regular" data-aos="fade" data-aos-delay="300" data-aos-offset="0">Designed to create a living experience the likes of which you’ll rarely see</div>
                                                <div class="typeOfBHK d-flex align-items-center flex-wrap" data-aos="fade" data-aos-delay="400" data-aos-offset="0">
                                                    <div class="bHkBox">2 BHK</div>
                                                    <div class="bHkBox">3 BHK</div>
                                                    <div class="bHkBox">4 BHK</div>
                                                </div>
                                                <a class="icon-button" href="#" data-aos="fade" data-aos-delay="500" data-aos-offset="0"><div class="round-button"><div class="circle"></div><i class="kalpataru-icon-arrow-right"></i></div> LEARN MORE</a>
                                            </div>
                                        </div>
                                        <div class="home-featured-list-img col-md-7 col-12" data-aos="fade" data-aos-delay="100" data-aos-offset="0">
                                            <div class="home-featured-list-img-container">
                                                <img src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/featured-02.jpg" class="w-100">  
                                            </div>   
                                        </div>                                 
                                    </div>
                                </div>
                                <div class="swiper-slide home-featured-list-item w-100 col-9 p-0">
                                    <div class="home-featured-list-item-container row align-items-center justify-content-center">
                                        <div class="home-featured-list-img col-md-7 col-12" data-aos="fade" data-aos-delay="100" data-aos-offset="0">
                                            <div class="home-featured-list-img-container">
                                                <img src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/featured-03.jpg" class="w-100">  
                                            </div>  
                                        </div>                                    
                                        <div class="home-featured-list-text-container col-md-5 col-12">
                                            <div class="home-featured-list-text">
                                                <div class="home-featured-list-project-name" data-aos="fade" data-aos-delay="100" data-aos-offset="0">KALPATARU RADIANCE</div>
                                                <div class="home-featured-list-project-location Roboto-Regular" data-aos="fade" data-aos-delay="200" data-aos-offset="0">GOREGAON WEST</div>
                                                <div class="home-featured-list-project-description Roboto-Regular" data-aos="fade" data-aos-delay="300" data-aos-offset="0">Spacious residences are designed to redefine your lifestyle</div>
                                                <div class="typeOfBHK d-flex align-items-center flex-wrap" data-aos="fade" data-aos-delay="400" data-aos-offset="0">
                                                    <div class="bHkBox">2 BHK</div>
                                                    <div class="bHkBox">3 BHK</div>
                                                    <div class="bHkBox">4 BHK</div>
                                                </div>
                                                <a class="icon-button" href="#" data-aos="fade" data-aos-delay="500" data-aos-offset="0"><div class="round-button"><div class="circle"></div><i class="kalpataru-icon-arrow-right"></i></div> LEARN MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide home-featured-list-item w-100 col-9 p-0">
                                    <div class="home-featured-list-item-container row align-items-center justify-content-center">
                                        <div class="home-featured-list-text-container col-md-5 p-0 col-12">
                                            <div class="home-featured-list-text">
                                                <div class="home-featured-list-project-name" data-aos="fade" data-aos-delay="100" data-aos-offset="0">KALPATARU BLISS APARTMENTS</div>
                                                <div class="home-featured-list-project-location Roboto-Regular" data-aos="fade" data-aos-delay="200" data-aos-offset="0">KALINA</div>
                                                <div class="home-featured-list-project-description Roboto-Regular" data-aos="fade" data-aos-delay="300" data-aos-offset="0">Designed to create a living experience the likes of which you’ll rarely see</div>
                                                <div class="typeOfBHK d-flex align-items-center flex-wrap" data-aos="fade" data-aos-delay="400" data-aos-offset="0">
                                                    <div class="bHkBox">2 BHK</div>
                                                    <div class="bHkBox">3 BHK</div>
                                                    <div class="bHkBox">4 BHK</div>
                                                </div>
                                                <a class="icon-button" href="#" data-aos="fade" data-aos-delay="500" data-aos-offset="0"><div class="round-button"><div class="circle"></div><i class="kalpataru-icon-arrow-right"></i></div> LEARN MORE</a>
                                            </div>
                                        </div>
                                        <div class="home-featured-list-img col-md-7 col-12" data-aos="fade" data-aos-delay="100" data-aos-offset="0">
                                            <div class="home-featured-list-img-container">
                                                <img src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/featured-02.jpg" class="w-100">  
                                            </div>   
                                        </div>                                 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>  -->
                <!-- Top Picks Section end -->
            </div>
            <?php include('footer.php'); ?>         
        </div>
        <?php include('footer-js.php'); ?>
    </body>
</html>