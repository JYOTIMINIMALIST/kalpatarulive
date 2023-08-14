  <div class="enhancingEverydayLivesWrapper bigTitleAnimationSection">
                    <div class="container-fluid mainContainer" style="width: 100%">
                        <div class="double-bg-header" style="margin: 5em 0;">
                            <div class="double-main-heading" data-aos="fade"><?php //echo $sequence_no > 9 ? $sequence_no : "0"."4";
//print_r($properties);
//echo $properties->cfootprint_short;
//echo $properties->cfootprint_desc;
//echo $properties->cfootprint_image_one;
if($result[0]->position_commercial_footprint_position<10){ echo '0';}
                            echo $result[0]->position_commercial_footprint_position;
                             ?> <?=strtoupper($properties->title)?> OUR COMMERCIAL FOOTPRINT
</div>
                            <div class="double-bg-heading">Footprint</div>
                        </div>
                        <div class="enhancingEverydayInner row">
                            <div class="col-md-4" data-aos="fade" data-aos-delay="100">
                                <div class="enhancingEverydayLivesDesc" >
                                     <?php echo $properties->cfootprint_short; ?>

 <!-- <p class="mb-0"> Kalpataru has developed several landmark properties in the commercial realty space, such as Kalpataru Square which was Asia’s first Platinum LEED Certified building for Core and Shell by US Green Building Council.</p>

 <div class="row align-items-end">
                  <div class="row">
                            <div class="col-sm-6">
                                <div class="number-stats-list counter-box foot">
                                    <div class="number-stats-list-container" data-aos="fade" data-aos-delay="100">
                                        <div>
                                            <span class="number-stats-list-number count" counter-value="50" decimal-place="0">50 </span><span>+</span>
                                        </div>
                                        <div class="number-stats-list-text">Years of sustained growth</div>
                                    </div>
                                    <div class="number-stats-list-container" data-aos="fade" data-aos-delay="200">
                                        <span class="number-stats-list-number count" counter-value="110">110</span><span>+</span>
                                        <div class="number-stats-list-text">Landmark projects </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="number-stats-list counter-box foot" >
                                   
                                   
                                    <div class="number-stats-list-container" data-aos="fade" data-aos-delay="300">
                                        <div>
                                            <span class="number-stats-list-number count" counter-value="21" decimal-place="0">21</span><span>+</span>
                                        </div>
                                        <div class="number-stats-list-text">Million sq. m. delivered </div>
                                    </div>
                                    <div class="number-stats-list-container" data-aos="fade" data-aos-delay="400">
                                        <span class="number-stats-list-number count" counter-value="1.2 +"  decimal-place="1">1.2</span><span>+</span>
                                        <div class="number-stats-list-text">Million sq. m. commercial space delivered
 </div> -->
                                    </div>
                                </div>
                                <!-- <a class="icon-button mt-4 mb-4 d-md-none" href="<?=base_url()?>company-profile"><div class="round-button"><div class="circle"></div><i class="kalpataru-icon-arrow-right"></i></div> LEARN MORE</a>
                           -->
                            </div>
                                    </div>
                          <!--  <div class="col-md-8 home_about_mid_image pt-4" data-aos="fade" data-aos-delay="100">
                                <img src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/home-about-usNew.jpg" class="w-100">
                            </div>-->
                        </div>











                                </div>
                            </div>
                            <div class="col-md-8" data-aos="fade" data-aos-delay="300">
                                 <div class="enhancingEverydayLivesSlider">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
<?php if($properties->cfootprint_image_one!=''){?>
<div class="swiper-slide">
                                                <div class="enhancingEverydaySlide">
                                                    <img src="<?php echo $properties->cfootprint_image_one; ?>" class="w-100" title="Energy Efficiency" alt="Energy Efficiency">
                                                    <div class="enhancingEverydayTitle">
                                                    <h2>  Kalpataru Synergy, Santacruz E </h2>
                                                <p>  Grade A office Spaces house of MNCs </p>
                                                </div>
                                    </div>
                                            </div>
                                        <?php } ?>


<?php if($properties->cfootprint_image_two!=''){?>
<div class="swiper-slide">
                                                <div class="enhancingEverydaySlide">
                                                    <img src="<?php echo $properties->cfootprint_image_two; ?>" class="w-100" title="Energy Efficiency" alt="Energy Efficiency">
                                                    <div class="enhancingEverydayTitle">
                                                   <h2>Kalpataru Inspire, Santacruz E</h2>
                                                   <p>State of the art building</p>
                                                </div>
                                    </div>
                                            </div>
                                        <?php } ?>

                                        <?php if($properties->cfootprint_image_three!=''){?>
<div class="swiper-slide">
                                                <div class="enhancingEverydaySlide">
                                                    <img src="<?php echo $properties->cfootprint_image_three; ?>" class="w-100" title="Energy Efficiency" alt="Energy Efficiency">
                                                    <div class="enhancingEverydayTitle">
                                                    <h2> Kalpataru Square, Andheri E </h2>         
                                                   <p> 1st in Asia Platinum LEED certification </p>
                                                </div>
                                    </div>
                                            </div>
                                        <?php } ?>


                                        <?php if($properties->cfootprint_image_four!=''){?>
<div class="swiper-slide">
                                                <div class="enhancingEverydaySlide">
                                                    <img src="<?php echo $properties->cfootprint_image_four; ?>" class="w-100" title="Energy Efficiency" alt="Energy Efficiency">
                                                    <div class="enhancingEverydayTitle">
                                                   <h2>Kalpataru Prime, Thane W </h2>            
                                                    <p>  Landmark IT Building </p>
                                                </div>
                                    </div>
                                            </div>
                                        <?php } ?>

                                        <?php if($properties->cfootprint_image_five!=''){?>
<div class="swiper-slide">
                                                <div class="enhancingEverydaySlide">
                                                    <img src="<?php echo $properties->cfootprint_image_five; ?>" class="w-100" title="Energy Efficiency" alt="Energy Efficiency">
                                                    <div class="enhancingEverydayTitle">
                                                     <h2>Kalpataru Infinia, Shivaji nagar</h2>
                                                    <p>Ready to use office spaces</p>
                                                </div>
                                    </div>
                                            </div>
                                        <?php } ?>

                                        <?php if($properties->cfootprint_image_six!=''){?>
<div class="swiper-slide">
                                                <div class="enhancingEverydaySlide">
                                                    <img src="<?php echo $properties->cfootprint_image_six; ?>" class="w-100" title="Energy Efficiency" alt="Energy Efficiency">
                                                    <div class="enhancingEverydayTitle">
                                                   <h2>Kalpataru Avenue, Kandivali E</h2> 
                                                    <p>OC received office spaces</p>
                                                </div>
                                    </div>
                                            </div>
                                        <?php } ?>









                                         
                                          
                                            
                                            
                                            
                                            

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
                    </div>
                </div>