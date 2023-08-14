<div id="locate" class="project-inner-location-section no-overflow bigTitleAnimationSection container-fluid mainContainer">

    <div>

        <div class="project-inner-rera-info" data-aos="fade">

            <div id="rera-accordian" role="tablist" aria-multiselectable="true">

                <div class="panel panel-default">

                    <div class="panel-heading" role="tab" id="rera-accordian">

                        <div class="panel-title">

                            <a class="d-block" data-bs-toggle="collapse" data-parent="#rera-accordian" href="#collapseRera" aria-expanded="false" aria-controls="collapseRera">

                                RERA DETAILS

                            </a>

                        </div>

                    </div>

                    <div id="collapseRera" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="rera-accordian">

                        <div class="contact_main_wrapper bigTitleAnimationSection mainContainer companyWrapperqr">







                            <div class="row">



                                <div class="col-xl-6">



                                    <div class="accordion" id="accordionExample">



                                        <?php foreach ($data2 as $key => $value) :



                                        ?>

                                            <div class="accordion-item">



                                                <div class="contactUsAccordionHeader" id="heading_<?php echo $key ?>">



                                                    <div class="headerContainer collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_<?php echo $key ?>" aria-expanded="false" aria-controls="collapse1">



                                                        <h2 class="mb-0"><?= $value->title ?></h2>

                                                        <div class="submenu_arrow">



                                                            <span></span>



                                                            <span></span>



                                                        </div>



                                                    </div>



                                                </div>







                                                <div id="collapse_<?php echo $key ?>" class="accordion-collapse collapse" aria-labelledby="heading_<?php echo $key ?>" data-bs-parent="#accordionExample">



                                                    <div class="accordion-body">



                                                        <div class="corporate_headquarters_box">



                                                            <h5 class="mb-0"><?= $value->text ?></h5>







                                                        </div>
                                                        <div class="hideImage">
                                                            <div><img src="<?= $value->image ?>"></div>
                                                        </div>







                                                    </div>



                                                </div>



                                            </div>



                                        <?php endforeach; ?>







                                    </div>



                                </div>



                                <div class="col-xl-6">



                                    <?php foreach ($data2 as $key => $value) :



                                    ?>



                                        <div class="custom-images" id="da">



                                            <div id="img_<?php echo $key ?>">
                                        
                                            <?php
                                                        $image = $value->image ;
                                                        if ($image): ?>
                                                                      <img src="<?= $value->image ?>">
                                                                <?php else: ?>
                                                                    <div></div>
                                                                <?php endif; ?>
                                        
                                        
                                        
                                        </div>

                                        





                                        </div>

                                    <?php endforeach; ?>



                                </div>









                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>













