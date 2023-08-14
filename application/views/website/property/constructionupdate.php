  <div id="construction_update" class="project-inner-construction-update-section no-overflow bigTitleAnimationSection">
                    <div class="container-fluid mainContainer">
                        <div class="double-bg-header">
                            <h2 class="double-main-heading" data-aos="fade"><!--<span id="construction_update_no"></span>--><?php //echo $sequence_no > 9 ? $sequence_no : "0"."4";

if($result[0]->position_construction_update_position<10){ echo '0';}
                            echo $result[0]->position_construction_update_position;
                             ?> <?=strtoupper($properties->title)?> CONSTRUCTION UPDATE</h2>
                            <div class="double-bg-heading">CONSTRUCT</div>
                        </div>
                        <div class="project-inner-contruction-update-slider divider-pagination">
                            <div class="swiper-container">
                                <div class="swiper-wrapper construction-update">

                                </div>
                                <div class="swiper-pagination"></div>
                                <div class="swiper-navigation-container">
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>