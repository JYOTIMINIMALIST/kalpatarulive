  <?php
                    $sequence_no = $sequence_no + 1;
                ?>
                <?php
                    if($properties->rera!="" || $properties->map_image!=""){
                        $sequence_no = $sequence_no + 1;
                        ?>
                        <div id="locate" class="project-inner-location-section no-overflow bigTitleAnimationSection container-fluid mainContainer">
                            <div>
                                <div class="double-bg-header">
                                    <h2 class="double-main-heading" data-aos="fade"><?php // echo $sequence_no > 9 ? $sequence_no : "0"."8"; 
                                    if($result[0]->postion_locate_position<10){ echo '0';}
                            echo $result[0]->postion_locate_position;?> <?=strtoupper($properties->title)?> LOCATE</h2>
                                    <div class="double-bg-heading">Locate</div>
                                </div>
                            </div>
                            <?php
                            if ($properties->map_image!="") {
                                ?>
                                <div class="map_image_wrap" data-aos="fade">
                                    <a target="_blank" href="<?=$properties->map_url?>"><img src="<?=$properties->map_image?>" alt="<?php if($properties->map_imagealt!=''){ echo $properties->map_imagealt; }else { echo 'Map';}?>" class="w-100"></a>
                                    <div class="clickToGoMap">Click to view on Google Map</div>
                                </div>
                                <?php
                            }
                            ?>
                             </div>
                       <?php
                   }
                   ?>