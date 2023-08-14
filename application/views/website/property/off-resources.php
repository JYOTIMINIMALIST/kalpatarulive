s



 <?php
                if ($properties->brochure!="" || $properties->floor_plan!="" || $properties->master_plan!="" || $properties->virtual_tour!="") {
                    $sequence_no = $sequence_no + 1;
                ?>
                <div id="resources" class="project-inner-resources-section no-overflow bigTitleAnimationSection">
                    <div class="container-fluid mainContainer">
                        <div class="double-bg-header">
                            <h2 class="double-main-heading" data-aos="fade"><?php //echo $sequence_no > 9 ? $sequence_no : "0"."6"; 
                            if($result[0]->position_resources_position<10){ echo '0';}
                            echo $result[0]->position_resources_position;?>  RESOURCES</h2>
                            <div class="double-bg-heading">RESOURCES</div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-5 order-md-2" data-aos="fade"><img src="<?=$properties->resource_image?>"  alt="<?php if($properties->resource_imagealt!=''){ echo $properties->resource_imagealt; }else { echo 'Resource Image';}?>" class="w-100"></div>
                            <div class="col-md-7 order-md-1">
                                <div class="download-section">
                                        <!-- <div class="download-form mb-4" data-aos="fade">
                                            <div class="d-flex align-items-center">
                                                <input class="download_Input_field" type="text" name="DownloadEmail" placeholder="Enter Email Address">
                                                <input class="download_btn transition" type="submit" name="submit" value="DOWNLOAD">
                                            </div>
                                        </div> -->
                                        <div class="download-list pr-md-5">
                                            <?php
                                            if ($properties->brochure!="") {
                                                ?>
                                                <div class="download-item d-md-flex justify-content-between align-items-center" data-aos="fade">
                                                    <div class="download-item-inner d-md-flex align-items-center">
                                                        <div class="download-item-img">
                                                            <img src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/icons/brochure.svg" class="w-100 h-100">
                                                        </div>
                                                        <div class="download-item-text">
                                                            Brochure
                                                        </div>
                                                    </div>
                                                    <div class="view-download-file">
                                                        <a class="icon-button" target="_blank" href="<?=$properties->brochure?>"><div class="round-button"><div class="circle"></div><i class="kalpataru-icon-arrow-right"></i></div> VIEW</a>
                                                    </div>
                                                </div>  
                                                <?php
                                            }
                                            if ($properties->floor_plan!="") {
                                                ?>
                                                <div class="download-item d-md-flex justify-content-between align-items-center" data-aos="fade">
                                                    <div class="download-item-inner d-md-flex align-items-center">
                                                        <div class="download-item-img">
                                                            <img src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/icons/brochure.svg" class="w-100 h-100">
                                                        </div>
                                                        <div class="download-item-text">
                                                            Floor Plan
                                                        </div>
                                                    </div>
                                                    <div class="view-download-file">
                                                        <a class="icon-button" target="_blank" href="<?=$properties->floor_plan?>"><div class="round-button"><div class="circle"></div><i class="kalpataru-icon-arrow-right"></i></div> VIEW</a>
                                                    </div>
                                                </div>   
                                                <?php
                                            }
                                            if ($properties->master_plan!="") {
                                                ?>
                                                <div class="download-item d-md-flex justify-content-between align-items-center" data-aos="fade">
                                                    <div class="download-item-inner d-md-flex align-items-center">
                                                        <div class="download-item-img">
                                                            <img src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/icons/brochure.svg" class="w-100 h-100">
                                                        </div>
                                                        <div class="download-item-text">
                                                            Master Plan
                                                        </div>
                                                    </div>
                                                    <div class="view-download-file">
                                                        <a class="icon-button" target="_blank" href="<?=$properties->master_plan?>"><div class="round-button"><div class="circle"></div><i class="kalpataru-icon-arrow-right"></i></div> VIEW</a>
                                                    </div>
                                                </div>   
                                                <?php
                                            }
                                            if ($properties->virtual_tour!="") {
                                                ?>
                                                <div class="download-item d-md-flex justify-content-between align-items-center" data-aos="fade">
                                                    <div class="download-item-inner d-md-flex align-items-center">
                                                        <div class="download-item-img">
                                                            <img src="<?php echo $this->config->item('cdn_url'); ?>assets_web/images/icons/VitualTour.svg" class="w-100 h-100">
                                                        </div>
                                                        <div class="download-item-text">
                                                            Virtual Tour
                                                        </div>
                                                    </div>
                                                    <div class="view-download-file">
                                                        <a class="icon-button" target="_blank" href="<?=$properties->virtual_tour?>"><div class="round-button"><div class="circle"></div><i class="kalpataru-icon-arrow-right"></i></div> VIEW</a>
                                                    </div>
                                                </div> 
                                                <?php
                                            }
                                            ?>                 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>

                   