 <?php
                    $sequence_no = 0;
                    $sequence_no = $sequence_no + 1;
                ?>

                <div id="overview" class="project-inner-overview-section no-overflow bigTitleAnimationSection">
                    <div class="container-fluid mainContainer">
                        <div class="double-bg-header">
                            <div class="double-main-heading" data-aos="fade">
                            <?php //echo $sequence_no > 9 ? $sequence_no : "0".$sequence_no; 

                            if($result[0]->position_overview_position<10){ echo '0';}
                            echo $result[0]->position_overview_position;?>  OVERVIEW</div>
                            <div class="double-bg-heading">OVERVIEW</div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-5">
                                <div class="px-5" data-aos="fade">
                                    <img src="<?=$properties->overview_image?>" class="w-100">
                                </div>
                            </div>
                            <div class="col-md-7 Roboto-Medium">
                                <div class="max-550 mx-auto">
                                    <h1 class="project-inner-header" data-aos="fade" data-aos-delay="100"><?=$properties->title?></h1>
                                    <p class="project-inner-description">
                                        <?=$properties->short_description?>
                                  <!--  Introducing iconic Offices for iconic businesses, now built at an  iconic landmark: Mulund. Kalpataru Summit is an accredited Grade A office space offering the best international amenities, crafted for select professionals & investments. An exemplary 33-storeyed structure, located right at the LBS marg in Mulund, is made for the perfect upgrade to your business prestige. Kalpataru Summit, Mumbai's new business center, is designed to reflect growth, productivity & profitability.-->
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                    </div>



                </div>