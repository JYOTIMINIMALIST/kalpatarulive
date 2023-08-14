                <div id="investment" class="project-inner-overview-section no-overflow bigTitleAnimationSection">
                    <div class="container-fluid mainContainer">
                        <div class="double-bg-header" style="margin: 5em 0;">
                            <div class="double-main-heading" data-aos="fade"><?php //echo $sequence_no > 9 ? $sequence_no : "0"."4"; 

if($result[0]->position_bestforinvestment_position<10){ echo '0';}
                            echo $result[0]->position_bestforinvestment_position;
                            ?> <?=strtoupper($properties->title)?> BEST FOR INVESTMENT
</div>
                            <div class="double-bg-heading">Investment</div>
                        </div>
                        <div class="row align-items-center">
                            
                            <div class="col-md-7 Roboto-Medium">
                                <div class="max-550 mx-auto">


<?php echo $properties->best_for_investment_short; ?>
<?php echo $properties->best_for_investment_desc; ?>
<!-- 
                                <h1 class="project-inner-header" data-aos="fade" data-aos-delay="100"> The best investment with high future returns</h1>
                            
                                <ul class="project-inner-description" style="font-size: 15px;">      
                                    
                                       
                                    <li> Surge in demand for Grand A office spaces in established Residential micro-market</li>
                                    <li> Commercial developments historically give higher rental yields</li>
                                    <li>Strategically located in the epicenter of business activities & upcoming key infrastructure – Goregaon Mulund Link road (GMLR) & Metro Line 4</li>
                                    <li>A branded development ensuring no risk</li>


                                </ul>
                              -->
                                   
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="px-5" data-aos="fade">
                                <img src="<?php echo $properties->best_for_investment_image; ?>" class="w-100" alt="The best investment with high future returns">
                                                   
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>