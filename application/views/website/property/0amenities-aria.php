<style type="text/css">
  .content {
    display: none;
  }

  div span {
    float: right;
    cursor: pointer;
  }

  .heading {
    background-color: #fff;
  }

  .arrow-down {
    background-color: #fff;
  }

  .arrow-up {
    background-color: #fff;
  }

  .amenitiesNewtitle {
    margin-top: 15px;
  }

  .amenitiesNewcontent li {
    list-style: none;
    padding-left: 15px;
  }

  @media all and (max-width: 770px) {
    .amenitiesNewcontent {
      margin: 0 !important;
      margin-block-start: 0px !important;
      margin-block-end: 0px !important;
      padding-inline-start: 0px !important;
    }
  }

  .amenitiesNewcontent:last-child {
    margin-bottom: 15px !important;
  }
</style>
<script src="https://code.jquery.com/jquery-1.4.2.min.js" type="application/javascript"></script>
<div id="amenities" class="project-inner-amenities-section no-overflow bigTitleAnimationSection">
  <div class="container-fluid mainContainer">
    <div class="double-bg-header">
      <h2 class="double-main-heading" data-aos="fade"><?php //echo $sequence_no > 9 ? $sequence_no : "0"."7";
                                                      if ($result[0]->position_amenities_position < 10) {
                                                        echo '0';
                                                      }
                                                      echo $result[0]->position_amenities_position;
                                                      ?> AMENITIES</h2>
      <div class="double-bg-heading">AMENITIES</div>
    </div>
    <div class="row">



      <div class="col-sm-3" id="accordion">
        <div class="amenitiess-slider-container d-md-flex align-items-center aos-init aos-animate amenitiesNewtitle" data-aos="fade" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <div class="amenities-slider-img grey-icon-bg"> <img src="https://d2j4tkbto6uvqv.cloudfront.net/kalpataru/5f956a91c06c7.svg" alt="Ample Parking" class="w-100 h-100"> </div>
          <div class="amenitiess-slider-text"> Community Park + </div>
        </div>


        <div id="collapseOne" class="panel-collapse collapse in amenities-slider-img" role="tabpanel" aria-labelledby="headingOne">
          <ul class="amenitiesNewcontent amenitiess-slider-text">
            <li>- Event Lawn With Stage</li>
            <li>- Barbeque Deck</li>
            <li>- Senior Citizen Pavilion</li>
          </ul>
        </div>
      </div>

      <div class="col-sm-3" id="accordion">
        <div class="amenitiess-slider-container d-md-flex align-items-center aos-init aos-animate amenitiesNewtitle" data-aos="fade" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">

          <div class="amenities-slider-img grey-icon-bg"> <img src="https://d2j4tkbto6uvqv.cloudfront.net/kalpataru/5f956a91c06c7.svg" alt="Ample Parking" class="w-100 h-100"> </div>
          <div class="amenitiess-slider-text">Health Club + </div>


        </div>


        <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
          <ul class="amenitiesNewcontent amenitiess-slider-text">
            <li>- Multi-purpose Hall with outdoor party area</li>
            <li>- Games room</li>
            <li>- Kids’ Play Area</li>
            <li>- Gymnasium</li>
          </ul>
        </div>
      </div>

      <div class="col-sm-3" id="accordion">
        <div class="amenitiess-slider-container d-md-flex align-items-center aos-init aos-animate amenitiesNewtitle" data-aos="fade" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
          <div class="amenities-slider-img grey-icon-bg"> <img src="https://d2j4tkbto6uvqv.cloudfront.net/kalpataru/5f956a91c06c7.svg" alt="Ample Parking" class="w-100 h-100"> </div>
          <div class="amenitiess-slider-text"> Celebration Park + </div>
        </div>


        <div id="collapseThree" class="panel-collapse collapse in amenities-slider-img" role="tabpanel" aria-labelledby="headingThree">
          <ul class="amenitiesNewcontent amenitiess-slider-text">
            <li>- Retreat Plaza</li>
            <li>- Open Yoga Deck</li>
            <li>- Camping Site With Star Gazing Deck</li>
            <li>- Multi- purpose Sports Lawn</li>
            <li>- Kids’ Play Area</li>
          </ul>
        </div>
      </div>

      <div class="col-sm-3" id="accordion">
        <div class="amenitiess-slider-container d-md-flex align-items-center aos-init aos-animate amenitiesNewtitle" data-aos="fade" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
          <div class="amenities-slider-img grey-icon-bg"> <img src="https://d2j4tkbto6uvqv.cloudfront.net/kalpataru/5f956a91c06c7.svg" alt="Ample Parking" class="w-100 h-100"> </div>
          <div class="amenitiess-slider-text"> Forest Park + </div>
        </div>


        <div id="collapseFour" class="panel-collapse collapse in amenities-slider-img" role="tabpanel" aria-labelledby="headingFour">
          <ul class="amenitiesNewcontent amenitiess-slider-text">
            <li>- Community Farming</li>
            <li>- Picnic Lawn</li>
            <li>- Treehouse</li>
            <li>- Nature Pocket</li>
          </ul>
        </div>
      </div>

      <div class="col-sm-3" id="accordion">
        <div class="amenitiess-slider-container d-md-flex align-items-center aos-init aos-animate amenitiesNewtitle" data-aos="fade" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
          <div class="amenities-slider-img grey-icon-bg"> <img src="https://d2j4tkbto6uvqv.cloudfront.net/kalpataru/5f956a91c06c7.svg" alt="Ample Parking" class="w-100 h-100"> </div>
          <div class="amenitiess-slider-text"> Sensory Garden + </div>
        </div>


        <div id="collapseFive" class="panel-collapse collapse in amenities-slider-img" role="tabpanel" aria-labelledby="headingFive">
          <ul class="amenitiesNewcontent amenitiess-slider-text">
            <li>- Bird Feeder Area</li>
            <li>- Herb Garden</li>
            <li>- Reflexology Path</li>
            <li>- Sensory Garden</li>
            <li>- Labyrinth with Lawn Area</li>
            <li>- Kids’ Play Area</li>
            <li>- Nature Pocket</li>
          </ul>
        </div>
      </div>

      <div class="col-sm-3" id="accordion">
        <div class="amenitiess-slider-container d-md-flex align-items-center aos-init aos-animate amenitiesNewtitle" data-aos="fade" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
          <div class="amenities-slider-img grey-icon-bg"> <img src="https://d2j4tkbto6uvqv.cloudfront.net/kalpataru/5f956a91c06c7.svg" alt="Ample Parking" class="w-100 h-100"> </div>
          <div class="amenitiess-slider-text">Dune Park + </div>
        </div>


        <div id="collapseSix" class="panel-collapse collapse in amenities-slider-img" role="tabpanel" aria-labelledby="headingSix">
          <ul class="amenitiesNewcontent amenitiess-slider-text">
            <li>- Children’s Play Mound</li>
            <li>- Sit- out Areas</li>
          </ul>
        </div>
      </div>

      <div class="col-sm-3" id="accordion">
        <div class="amenitiess-slider-container d-md-flex align-items-center aos-init aos-animate amenitiesNewtitle" data-aos="fade" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
          <div class="amenities-slider-img grey-icon-bg"> <img src="https://d2j4tkbto6uvqv.cloudfront.net/kalpataru/5f956a91c06c7.svg" alt="Ample Parking" class="w-100 h-100"> </div>
          <div class="amenitiess-slider-text">Strolling Park + </div>
        </div>


        <div id="collapseSeven" class="panel-collapse collapse in amenities-slider-img" role="tabpanel" aria-labelledby="headingSeven">
          <ul class="amenitiesNewcontent amenitiess-slider-text">
            <li>- Multipurpose Lawn with stage</li>
            <li>- Art And Hobby Corner with nature retreat area</li>
            <li>- Kids’ Play Area</li>
            <li>- Senior Citizen Pavilion</li>
          </ul>
        </div>
      </div>

      <div class="col-sm-3" id="accordion">
        <div class="amenitiess-slider-container d-md-flex align-items-center aos-init aos-animate amenitiesNewtitle" data-aos="fade" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
          <div class="amenities-slider-img grey-icon-bg"> <img src="https://d2j4tkbto6uvqv.cloudfront.net/kalpataru/5f956a91c06c7.svg" alt="Ample Parking" class="w-100 h-100"> </div>
          <div class="amenitiess-slider-text"> Sound Of Nature Park + </div>
        </div>


        <div id="collapseEight" class="panel-collapse collapse in amenities-slider-img" role="tabpanel" aria-labelledby="headingEight">
          <ul class="amenitiesNewcontent amenitiess-slider-text">
            <li>- Multipurpose Lawn</li>
            <li>- Bird Bath</li>
            <li>- Wind Chimes And Bamboo Chimes</li>
            <li>- Kids’ Play Area</li>
            <li>- Deciduous Tree Walk & Bamboo Walk area</li>
            <li>- Senior Citizen Area</li>
            <li>- Nature Pocket</li>
          </ul>
        </div>
      </div>

      <div class="col-sm-3" id="accordion">
        <div class="amenitiess-slider-container d-md-flex align-items-center aos-init aos-animate amenitiesNewtitle" data-aos="fade" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
          <div class="amenities-slider-img grey-icon-bg"> <img src="https://d2j4tkbto6uvqv.cloudfront.net/kalpataru/5f956a91c06c7.svg" alt="Ample Parking" class="w-100 h-100"> </div>
          <div class="amenitiess-slider-text"> Fitness Park + </div>
        </div>


        <div id="collapseNine" class="panel-collapse collapse in amenities-slider-img" role="tabpanel" aria-labelledby="headingNine">
          <ul class="amenitiesNewcontent amenitiess-slider-text">
            <li>- Multipurpose Sports Court</li>
            <li>- Net Cricket</li>
            <li>- Amphitheater</li>
            <li>- Swing Ringr</li>
            <li>- Fitness Loop</li>
            <li>- Senior Citizen Pavilion</li>
            <li>- Kids' Play Area</li>
            <li>- Nature Pockets</li>
          </ul>
        </div>
      </div>
    </div>

  </div>
</div>