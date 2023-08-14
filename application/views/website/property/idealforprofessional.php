
                
                <div id="professional" class="project-inner-overview-section no-overflow bigTitleAnimationSection" >
                    <div class="container-fluid mainContainer">
                        <div class="double-bg-header" style="margin: 5em 0;">
                            <div class="double-main-heading" data-aos="fade"><?php //echo $sequence_no > 9 ? $sequence_no : "0"."5"; 

if($result[0]->position_idealforprofessionals_position<10){ echo '0';}
                            echo $result[0]->position_idealforprofessionals_position;


                            ?> <?=strtoupper($properties->title)?> IDEAL FOR PROFESSIONALS
</div>
                            <div class="double-bg-heading">Professionals</div>
                        </div>
                    </div>
                </div>

                <div id="professional" class="project-inner-overview-section no-overflow bigTitleAnimationSection">
                    <div class="container-fluid mainContainer">
                        <div class="row align-items-center" style="padding-top:23px;">
                            <div class="col-md-5">
                                <div class="px-5" data-aos="fade">
                                    <img src="<?php echo $properties->idealforprofessionals_image; ?>" alt="IDEAL FOR PROFESSIONALS" class="w-100">
                                </div>
                            </div>
                            <div class="col-md-7 Roboto-Medium">
                                <div class="max-550 mx-auto">


<?php echo $properties->idealforprofessionals_short; ?>

 <!--  <h1 class="project-inner-header" data-aos="fade" data-aos-delay="100">  Your business address matters</h1>
                              
                                    <ul class="project-inner-description" style="font-size: 15px;">      
                                    
                                       
                                        <li>Situated right on LBS road, the center of IT, manufacturing and commercial sector</li>
                                        <li>Design aesthetics that delivers onto your brand image</li>
                                        <li>Multiple configurations available to suit every professional need – SMEs, CAs, Consultants and Lawyers</li>
                                        <li>Equipped with all facilities to ensure complete convenience and security within the workplace</li>


                                    </ul>
                             -->
                                </div>
                            </div>

                        </div>
                        
                    </div>
                </div>

