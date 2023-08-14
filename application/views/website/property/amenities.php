<div id="amenities" class="project-inner-amenities-section no-overflow bigTitleAnimationSection">
                    <div class="container-fluid mainContainer">
                        <div class="double-bg-header">
                        <h2 class="double-main-heading" data-aos="fade"><?php //echo $sequence_no > 9 ? $sequence_no : "0"."7";
if($result[0]->position_amenities_position<10){ echo '0';}
                            echo $result[0]->position_amenities_position;
                        ?> <?=strtoupper($properties->title)?> AMENITIES</h2>
                            <div class="double-bg-heading">AMENITIES</div>
                        </div>
                        <div class="row">
                            <div class="w-100 pt-md-3 px-md-4 project-inner-amenities-slider divider-pagination">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper amenities-container">

                                    </div>
                                    <div class="swiper-pagination"></div>
                                    <div class="swiper-navigation-container">
                                        <div class="swiper-button-prev hiddenOnDesktop"></div>
                                        <div class="swiper-button-next hiddenOnDesktop"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="container-fluid mainContainer px-md-4 pt-md-4">
                                <div class="icon-button mb-4 d-inline-flex show-amenities-btn"><div class="round-button"><div class="circle"></div><i class="kalpataru-icon-arrow-right"></i></div> SHOW ALL AMENITIES</div>        
                            </div>
                        </div>
                    </div>
                </div>


              