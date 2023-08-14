                        <div id="locate" class="project-inner-location-section no-overflow bigTitleAnimationSection container-fluid mainContainer">
                        <div>
                        <div class="double-bg-header">
                            <div class="double-main-heading" data-aos="fade"><?php //echo $sequence_no > 9 ? $sequence_no : "0"."2";
                            if($result[0]->position_key_benifits_position<10){ echo '0';}
                            echo $result[0]->position_key_benifits_position;
                             ?> <?=strtoupper($properties->title)?> KEY BENEFITS</div>
                            <div class="double-bg-heading">KEY BENEFITS</div>
                        </div>
                 <?php /* ?>       <div class="row">
                            <div class="w-100 pt-md-3 project-inner-overview-slider divider-pagination">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <?php
                                        $imgtxtstr = $properties->overview_text_images;
                                        $imgtext = explode("<==>", $imgtxtstr);
                                        $over_data = $properties->over_alt;
                                        $over_datas = explode(',', $over_data);
                                        foreach ($imgtext as $key => $oit) {
                                            $it = explode("====", $oit);
                                            ?>
                                            <div class="swiper-slide p-0">
                                                <div class="overview-slider-container" data-aos="fade">
                                                    <div class="overview-slider-img" >
                                                        <img src="<?=isset($it[0]) ? $it[0] : ''?>"  alt="<?=$over_datas[$key]?>"  class="w-100">
                                                    </div>
                                                    <div class="overview-slider-text">
                                                        <?=isset($it[1]) ? $it[1] : ''?>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                        ?>                                           
                                    </div>
                                    <div class="swiper-pagination"></div>
                                    <div class="swiper-navigation-container">
                                        <div class="swiper-button-prev"></div>
                                        <div class="swiper-button-next"></div>
                                    </div>
                                </div>
                            </div>
                        </div> <?php */ ?>
                    </div>
                    
               




                 

                <div class="KeybenefitsLandmarksSlider" >
                <div class="swiper-container">
                <div class="swiper-wrapper">
    <?php
                                        $imgtxtstr = $properties->overview_text_images;
                                        $imgtext = explode("<==>", $imgtxtstr);
                                        $over_data = $properties->over_alt;
                                        $over_datas = explode(',', $over_data);
                                        foreach ($imgtext as $key => $oit) {
                                            $it = explode("====", $oit);
                                            ?>
                <div class="swiper-slide p-0" style="margin-top: 0px;">
                                                <div class="overview-slider-container" data-aos="fade">
                                                    <div class="overview-slider-img" >
                                                        <img src="<?=isset($it[0]) ? $it[0] : ''?>"  alt="<?=$over_datas[$key]?>"  class="w-100">
                                                    </div>
                                                    <div class="overview-slider-text">
                                                        <?=isset($it[1]) ? $it[1] : ''?>
                                                    </div>
                                                </div>
                                            </div>

    
<?php
}
?>
    

                            </div>
                            <div class="swiper-pagination"></div>
                            <div class="swiper-navigation-container">
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>

                            </div>

                            </div>

                            </div>