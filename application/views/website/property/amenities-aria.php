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
    cursor: pointer;
  }
  .amenitiesNewcontent {margin-left: 24px;}

  .amenitiesNewcontent li {
    list-style: none;
    padding-left: 15px;
    position: relative;
  }
  .amenitiesNewcontent li::before{
    position: absolute;
    content: "-";
    z-index: 99;
    left: 0;
    top: 0;
  }

  @media all and (max-width: 770px) {
    .amenities-slider-img{margin: auto !important;}
    .amenitiesNewtitle{display: flex !important;}
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


  /*rks*/
  .swpamenities {
    /*width: 193.824px;*/
    margin-right: 0px !important;
  }

  @media only screen and (max-width: 600px) {
    .hide-mobile {
      display: none;
    }
  }

  @media only screen and (min-width: 680px) {
    .hide-pc {
      display: none;
    }
  }

.rotate1
{
 width:20px;
}
</style>


  <script>
          $(document).ready(function () {
            $(".rotatemenu1").click(function () {
              $(".rotate1").toggleClass("open-caret");
            });
          });
        </script>
<script src="https://code.jquery.com/jquery-1.4.2.min.js" type="application/javascript"></script>
<div id="amenities" class="project-inner-amenities-section no-overflow bigTitleAnimationSection">
  <div class="container-fluid mainContainer">
    <div class="double-bg-header">
      <h2 class="double-main-heading" data-aos="fade"><?php //echo $sequence_no > 9 ? $sequence_no : "0"."7";
                                                      if ($result[0]->position_amenities_position < 10) {
                                                        echo '0';
                                                      }
                                                      echo $result[0]->position_amenities_position;
                                                      ?> <?=strtoupper($properties->title)?> AMENITIES</h2>
      <div class="double-bg-heading">AMENITIES</div>
    </div>
    <div class="row hide-mobile">



      <div class="col-sm-3" id="accordion">
        <div class="amenitiess-slider-container d-md-flex align-items-center aos-init aos-animate amenitiesNewtitle" data-aos="fade" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <div class="amenities-slider-img grey-icon-bg"> <img src="https://d2j4tkbto6uvqv.cloudfront.net/kalpataru/5f92707aa7963.svg" alt="Ample Parking" class="w-100 h-100"> </div>
          <div class="amenitiess-slider-text"> Community Park <img class="rotate1" src="https://dev.kalpataru.com/assets_web/images/downgoldenarrow.png" data-target="#sub1" data-toggle="collapse"> </div>
        </div>


        <div id="collapseOne" class="panel-collapse collapse in amenities-slider-img" role="tabpanel" aria-labelledby="headingOne">
          <ul class="amenitiesNewcontent amenitiess-slider-text">
            <li>Event Lawn With Stage</li>
            <li>Barbeque Deck</li>
            <li>Senior Citizen Pavilion</li>
          </ul>
        </div>
      </div>

      <div class="col-sm-3" id="accordion">
        <div class="amenitiess-slider-container d-md-flex align-items-center aos-init aos-animate amenitiesNewtitle" data-aos="fade" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">

          <div class="amenities-slider-img grey-icon-bg"> <img src="https://d2j4tkbto6uvqv.cloudfront.net/kalpataru/5fa8ffc188b2c.svg" alt="Ample Parking" class="w-100 h-100"> </div>
          <div class="amenitiess-slider-text">Health Club <img class="rotate1" src="https://dev.kalpataru.com/assets_web/images/downgoldenarrow.png" data-target="#sub1" data-toggle="collapse"> </div>


        </div>


        <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
          <ul class="amenitiesNewcontent amenitiess-slider-text">
            <li>Multi-purpose Hall with outdoor party area</li>
            <li>Event Lawn </li>
            <li>Games room</li>
            <li>Kids’ Play Area</li>
            <li>Gymnasium</li>
          </ul>
        </div>
      </div>

      <div class="col-sm-3" id="accordion">
        <div class="amenitiess-slider-container d-md-flex align-items-center aos-init aos-animate amenitiesNewtitle" data-aos="fade" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
          <div class="amenities-slider-img grey-icon-bg"> <img src="https://d2j4tkbto6uvqv.cloudfront.net/kalpataru/5f956dc88ad74.svg" alt="Ample Parking" class="w-100 h-100"> </div>
          <div class="amenitiess-slider-text"> Celebration Park <img class="rotate1" src="https://dev.kalpataru.com/assets_web/images/downgoldenarrow.png" data-target="#sub1" data-toggle="collapse"> </div>
        </div>


        <div id="collapseThree" class="panel-collapse collapse in amenities-slider-img" role="tabpanel" aria-labelledby="headingThree">
          <ul class="amenitiesNewcontent amenitiess-slider-text">
            <li>Retreat Plaza</li>
            <li>Open Yoga Deck</li>
            <li>Camping Site With Star Gazing Deck</li>
            <li>Multi- purpose Sports Lawn</li>
            <li>Kids’ Play Area</li>
          </ul>
        </div>
      </div>

      <div class="col-sm-3" id="accordion">
        <div class="amenitiess-slider-container d-md-flex align-items-center aos-init aos-animate amenitiesNewtitle" data-aos="fade" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
          <div class="amenities-slider-img grey-icon-bg"> <img src="https://d2j4tkbto6uvqv.cloudfront.net/kalpataru/5f956ceeaf277.svg" alt="Ample Parking" class="w-100 h-100"> </div>
          <div class="amenitiess-slider-text"> Forest Park <img class="rotate1" src="https://dev.kalpataru.com/assets_web/images/downgoldenarrow.png" data-target="#sub1" data-toggle="collapse"> </div>
        </div>


        <div id="collapseFour" class="panel-collapse collapse in amenities-slider-img" role="tabpanel" aria-labelledby="headingFour">
          <ul class="amenitiesNewcontent amenitiess-slider-text">
            <li>Community Farming</li>
            <li>Picnic Lawn</li>
            <li>Treehouse</li>
            <li>Nature Pocket</li>
          </ul>
        </div>
      </div>

      <div class="col-sm-3" id="accordion">
        <div class="amenitiess-slider-container d-md-flex align-items-center aos-init aos-animate amenitiesNewtitle" data-aos="fade" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
          <div class="amenities-slider-img grey-icon-bg"> <img src="https://d2j4tkbto6uvqv.cloudfront.net/kalpataru/5f95714924ac4.svg" alt="Ample Parking" class="w-100 h-100"> </div>
          <div class="amenitiess-slider-text"> Sensory Garden <img class="rotate1" src="https://dev.kalpataru.com/assets_web/images/downgoldenarrow.png" data-target="#sub1" data-toggle="collapse"> </div>
        </div>


        <div id="collapseFive" class="panel-collapse collapse in amenities-slider-img" role="tabpanel" aria-labelledby="headingFive">
          <ul class="amenitiesNewcontent amenitiess-slider-text">
            <li>Bird Feeder Area</li>
            <li>Herb Garden</li>
            <li>Reflexology Path</li>
            <li>Sensory Garden</li>
            <li>Labyrinth with Lawn Area</li>
            <li>Kids’ Play Area</li>
            <li>Nature Pocket</li>
          </ul>
        </div>
      </div>

      <div class="col-sm-3" id="accordion">
        <div class="amenitiess-slider-container d-md-flex align-items-center aos-init aos-animate amenitiesNewtitle" data-aos="fade" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
          <div class="amenities-slider-img grey-icon-bg"> <img src="https://d3smrpuo7zidc0.cloudfront.net/kalpataru/6239acbac238a.svg" alt="Ample Parking" class="w-100 h-100"> </div>
          <div class="amenitiess-slider-text">Dune Park <img class="rotate1" src="https://dev.kalpataru.com/assets_web/images/downgoldenarrow.png" data-target="#sub1" data-toggle="collapse"> </div>
        </div>


        <div id="collapseSix" class="panel-collapse collapse in amenities-slider-img" role="tabpanel" aria-labelledby="headingSix">
          <ul class="amenitiesNewcontent amenitiess-slider-text">
            <li>Children’s Play Mound</li>
            <li>Sit- out Areas</li>
          </ul>
        </div>
      </div>

      <div class="col-sm-3" id="accordion">
        <div class="amenitiess-slider-container d-md-flex align-items-center aos-init aos-animate amenitiesNewtitle" data-aos="fade" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
          <div class="amenities-slider-img grey-icon-bg"> <img src="https://d2j4tkbto6uvqv.cloudfront.net/kalpataru/5f956a91c06c7.svg" alt="Ample Parking" class="w-100 h-100"> </div>
          <div class="amenitiess-slider-text">Strolling Park <img class="rotate1" src="https://dev.kalpataru.com/assets_web/images/downgoldenarrow.png" data-target="#sub1" data-toggle="collapse"> </div>
        </div>


        <div id="collapseSeven" class="panel-collapse collapse in amenities-slider-img" role="tabpanel" aria-labelledby="headingSeven">
          <ul class="amenitiesNewcontent amenitiess-slider-text">
            <li>Multipurpose Lawn with stage</li>
            <li>Art And Hobby Corner with nature retreat area</li>
            <li>Kids’ Play Area</li>
            <li>Senior Citizen Pavilion</li>
          </ul>
        </div>
      </div>

      <div class="col-sm-3" id="accordion">
        <div class="amenitiess-slider-container d-md-flex align-items-center aos-init aos-animate amenitiesNewtitle" data-aos="fade" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
          <div class="amenities-slider-img grey-icon-bg"> <img src="https://d3smrpuo7zidc0.cloudfront.net/kalpataru/6228aa91462b0.svg" alt="Ample Parking" class="w-100 h-100"> </div>
          <div class="amenitiess-slider-text"> Sound Of Nature Park <img class="rotate1" src="https://dev.kalpataru.com/assets_web/images/downgoldenarrow.png" data-target="#sub1" data-toggle="collapse"> </div>
        </div>


        <div id="collapseEight" class="panel-collapse collapse in amenities-slider-img" role="tabpanel" aria-labelledby="headingEight">
          <ul class="amenitiesNewcontent amenitiess-slider-text">
            <li>Multipurpose Lawn</li>
            <li>Bird Bath</li>
            <li>Wind Chimes And Bamboo Chimes</li>
            <li>Kids’ Play Area</li>
            <li>Deciduous Tree Walk & Bamboo Walk area</li>
            <li>Senior Citizen Area</li>
            <li>Nature Pocket</li>
          </ul>
        </div>
      </div>

      <div class="col-sm-3" id="accordion">
        <div class="amenitiess-slider-container d-md-flex align-items-center aos-init aos-animate amenitiesNewtitle" data-aos="fade" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
          <div class="amenities-slider-img grey-icon-bg"> <img src="https://d2j4tkbto6uvqv.cloudfront.net/kalpataru/5f956cc74bdbb.svg" alt="Ample Parking" class="w-100 h-100"> </div>
          <div class="amenitiess-slider-text"> Fitness Park <img class="rotate1" src="https://dev.kalpataru.com/assets_web/images/downgoldenarrow.png" data-target="#sub1" data-toggle="collapse"> </div>
        </div>


        <div id="collapseNine" class="panel-collapse collapse in amenities-slider-img" role="tabpanel" aria-labelledby="headingNine">
          <ul class="amenitiesNewcontent amenitiess-slider-text">
            <li>Multipurpose Sports Court</li>
            <li>Net Cricket</li>
            <li>Amphitheater</li>
            <li>Swing Ring</li>
            <li>Fitness Loop</li>
            <li>Senior Citizen Pavilion</li>
            <li>Kids' Play Area</li>
            <li>Nature Pockets</li>
          </ul>
        </div>
      </div>




<!--New-->
<div class="col-sm-3" id="accordion">
        <div class="amenitiess-slider-container d-md-flex align-items-center aos-init aos-animate amenitiesNewtitle" data-aos="fade" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="true" aria-controls="collapseNine">
          <div class="amenities-slider-img grey-icon-bg"> <img src="https://dev.kalpataru.com/assets_web/images/Multi-PurposeCourt.svg" alt="Ample Parking" class="w-100 h-100"> </div>
          <div class="amenitiess-slider-text"> Multi Purpose Court
 <img class="rotate1" src="https://dev.kalpataru.com/assets_web/images/downgoldenarrow.png" data-target="#sub1" data-toggle="collapse"> </div>
        </div>


        <div id="collapseTen" class="panel-collapse collapse in amenities-slider-img" role="tabpanel" aria-labelledby="headingNine">
          <ul class="amenitiesNewcontent amenitiess-slider-text">
            <li>Seating Area</li>
            <li>Multipurpose Sports Court : Fitness Park</li>
          
          </ul>
        </div>
      </div>

<!--New-->

<!--New-->
<div class="col-sm-3" id="accordion">
        <div class="amenitiess-slider-container d-md-flex align-items-center aos-init aos-animate amenitiesNewtitle" data-aos="fade" data-toggle="collapse" data-parent="#accordion" href="#collapse11" aria-expanded="true" aria-controls="collapseNine">
          <div class="amenities-slider-img grey-icon-bg"> <img src="https://dev.kalpataru.com/assets_web/images/OrchardPark.svg" alt="Ample Parking" class="w-100 h-100"> </div>
          <div class="amenitiess-slider-text"> Orchard Park
 <img class="rotate1" src="https://dev.kalpataru.com/assets_web/images/downgoldenarrow.png" data-target="#sub1" data-toggle="collapse"> </div>
        </div>
        <div id="collapse11" class="panel-collapse collapse in amenities-slider-img" role="tabpanel" aria-labelledby="headingNine">
          <ul class="amenitiesNewcontent amenitiess-slider-text">
            <li>Fruit orchard area</li>
            <li>Miyawaki Forest</li>
            <li>Seating Area</li>

          </ul>
        </div>
      </div>

<!--New-->

<!--New-->
<div class="col-sm-3" id="accordion">
        <div class="amenitiess-slider-container d-md-flex align-items-center aos-init aos-animate amenitiesNewtitle" data-aos="fade" data-toggle="collapse" data-parent="#accordion" href="#collapse12" aria-expanded="true" aria-controls="collapseNine">
          <div class="amenities-slider-img grey-icon-bg"> <img src="https://dev.kalpataru.com/assets_web/images/VegetableHobbyPark.svg" alt="Ample Parking" class="w-100 h-100"> </div>
          <div class="amenitiess-slider-text">Vegetable Hobby Park<img class="rotate1" src="https://dev.kalpataru.com/assets_web/images/downgoldenarrow.png" data-target="#sub1" data-toggle="collapse"> </div>
        </div>


        <div id="collapse12" class="panel-collapse collapse in amenities-slider-img" role="tabpanel" aria-labelledby="headingNine">
          <ul class="amenitiesNewcontent amenitiess-slider-text">
            <li>Multipurpose Lawn</li>
            <li>Vegetable Hobby Garden</li>
            <li>Seating Area</li>
          </ul>
        </div>
      </div>

<!--New-->

<!--New-->
<div class="col-sm-3" id="accordion">
        <div class="amenitiess-slider-container d-md-flex align-items-center aos-init aos-animate amenitiesNewtitle" data-aos="fade" data-toggle="collapse" data-parent="#accordion" href="#collapse13" aria-expanded="true" aria-controls="collapseNine">
          <div class="amenities-slider-img grey-icon-bg"> <img src="https://dev.kalpataru.com/assets_web/images/KidsPlayArea.svg" alt="Ample Parking" class="w-100 h-100"> </div>
          <div class="amenitiess-slider-text"> Kid's Play Area
 <img class="rotate1" src="https://dev.kalpataru.com/assets_web/images/downgoldenarrow.png" data-target="#sub1" data-toggle="collapse"> </div>
        </div>


        <div id="collapse13" class="panel-collapse collapse in amenities-slider-img" role="tabpanel" aria-labelledby="headingNine">
          <ul class="amenitiesNewcontent amenitiess-slider-text">
            <li>Kids’ Play area with Play Lawn</li>
            <li>Seating Area</li>
          
          </ul>
        </div>
      </div>

<!--New-->

<!--New-->
<div class="col-sm-3" id="accordion">
        <div class="amenitiess-slider-container d-md-flex align-items-center aos-init aos-animate amenitiesNewtitle" data-aos="fade" data-toggle="collapse" data-parent="#accordion" href="#collapse14" aria-expanded="true" aria-controls="collapseNine">
          <div class="amenities-slider-img grey-icon-bg"> <img src="https://dev.kalpataru.com/assets_web/images/TerrainPark.svg" alt="Ample Parking" class="w-100 h-100"> </div>
          <div class="amenitiess-slider-text"> Terrain Park
 <img class="rotate1" src="https://dev.kalpataru.com/assets_web/images/downgoldenarrow.png" data-target="#sub1" data-toggle="collapse"> </div>
        </div>


        <div id="collapse14" class="panel-collapse collapse in amenities-slider-img" role="tabpanel" aria-labelledby="headingNine">
          <ul class="amenitiesNewcontent amenitiess-slider-text">
            <li>Sloped Lawn</li>
            <li>Flower Bed</li>
            <li>Strolling Garden</li>
          </ul>
        </div>
      </div>

<!--New-->

<!--New-->
<div class="col-sm-3" id="accordion">
        <div class="amenitiess-slider-container d-md-flex align-items-center aos-init aos-animate amenitiesNewtitle" data-aos="fade" data-toggle="collapse" data-parent="#accordion" href="#collapse15" aria-expanded="true" aria-controls="collapseNine">
          <div class="amenities-slider-img grey-icon-bg"> <img src="https://dev.kalpataru.com/assets_web/images/GrandCommercialHealthClub.svg" alt="Ample Parking" class="w-100 h-100"> </div>
          <div class="amenitiess-slider-text">Grand Commercial Health Club: Outdoor Amenities
 <img class="rotate1" src="https://dev.kalpataru.com/assets_web/images/downgoldenarrow.png" data-target="#sub1" data-toggle="collapse"> </div>
        </div>


        <div id="collapse15" class="panel-collapse collapse in amenities-slider-img" role="tabpanel" aria-labelledby="headingNine">
          <ul class="amenitiesNewcontent amenitiess-slider-text">
            <li> Swimming pool with Deck</li>
            <li> Lawn Tennis Court</li>
            <li>Futsal court</li>
          
          </ul>
        </div>
      </div>

<!--New-->

<!--New-->
<div class="col-sm-3" id="accordion">
        <div class="amenitiess-slider-container d-md-flex align-items-center aos-init aos-animate amenitiesNewtitle" data-aos="fade" data-toggle="collapse" data-parent="#accordion" href="#collapse16" aria-expanded="true" aria-controls="collapseNine">
          <div class="amenities-slider-img grey-icon-bg"> <img src="https://dev.kalpataru.com/assets_web/images/GrandCommercialHealthClub.svg" alt="Ample Parking" class="w-100 h-100"> </div>
          <div class="amenitiess-slider-text">Grand Commercial Health Club: Indoor&nbsp;Amenities
 <img class="rotate1" src="https://dev.kalpataru.com/assets_web/images/downgoldenarrow.png" data-target="#sub1" data-toggle="collapse"> </div>
        </div>


        <div id="collapse16" class="panel-collapse collapse in amenities-slider-img" role="tabpanel" aria-labelledby="headingNine">
          <ul class="amenitiesNewcontent amenitiess-slider-text">
            <li>     
            Grand entrance with Lobby area</li>
            <li>Banquet hall</li>
            <li>Guest rooms and suites</li>
            <li>Meeting Rooms</li>
            <li>Spa</li>
            <li>Dining restaurant</li>
            <li>Fitness Centre</li>
            <li>Yoga room</li>
            <li>Kids Play area</li>
            <li>Indoor games room</li>
            <li>Indoor Badminton Court</li>
            <li>Squash Court</li>
            
          </ul>
        </div>
      </div>

<!--New-->






<!--New-->
<div class="col-sm-3" id="accordion">
        <div class="amenitiess-slider-container d-md-flex align-items-center aos-init aos-animate amenitiesNewtitle" data-aos="fade" data-toggle="collapse" data-parent="#accordion" href="#collapse16" aria-expanded="true" aria-controls="collapseNine">
          <div class="amenities-slider-img grey-icon-bg"> <img src="https://d3smrpuo7zidc0.cloudfront.net/kalpataru/647e20cc64232.svg" alt="Ample Parking" class="w-100 h-100"> </div>
          <div class="amenitiess-slider-text">Swing Park</div>


      </div>
                                                    </div>
<!--New-->


<!--New-->
<div class="col-sm-3" id="accordion">
        <div class="amenitiess-slider-container d-md-flex align-items-center aos-init aos-animate amenitiesNewtitle" data-aos="fade" data-toggle="collapse" data-parent="#accordion" href="#collapse16" aria-expanded="true" aria-controls="collapseNine">
          <div class="amenities-slider-img grey-icon-bg"> <img src="https://d3smrpuo7zidc0.cloudfront.net/kalpataru/647e206e3f484.svg" alt="Ample Parking" class="w-100 h-100"> </div>
          <div class="amenitiess-slider-text">Hurdle Park
  </div>
      </div>
      </div>
<!--New-->









    </div>

  </div>
</div>









<!--Mobile slider-->


<div id="locate" class="project-inner-location-section no-overflow bigTitleAnimationSection container-fluid mainContainer hide-pc">

  <div class="buildingLandmarksSlider">
    <div class="swiper-container">
      <div class="swiper-wrapper">

        <!--one slider-->
        <div class="swiper-slide swpamenities">
          <div class="buildingLandmarksSlide" data-aos="fade">

            <!--one-->
            <div class="col-sm-3" id="accordion">
              <div class="amenitiess-slider-container d-md-flex align-items-center aos-init aos-animate amenitiesNewtitle" data-aos="fade" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <div class="amenities-slider-img grey-icon-bg"> <img src="https://d2j4tkbto6uvqv.cloudfront.net/kalpataru/5f92707aa7963.svg" alt="Ample Parking" class="w-100 h-100"> </div>
                <div class="amenitiess-slider-text"> Community Park <img class="rotate1" src="https://dev.kalpataru.com/assets_web/images/downgoldenarrow.png" data-target="#sub1" data-toggle="collapse"> </div>
              </div>


              <div id="collapseOne" class="panel-collapse collapse in amenities-slider-img" role="tabpanel" aria-labelledby="headingOne">
                <ul class="amenitiesNewcontent amenitiess-slider-text">
                  <li>Event Lawn With Stage</li>
                  <li>Barbeque Deck</li>
                  <li>Senior Citizen Pavilion</li>
                </ul>
              </div>
            </div>
            <!--one-->
          </div>
        </div>
        <!--one slider-->




        <div class="swiper-slide">
          <div class="buildingLandmarksSlide" data-aos="fade">
            <div class="col-sm-3" id="accordion">
              <div class="amenitiess-slider-container d-md-flex align-items-center aos-init aos-animate amenitiesNewtitle" data-aos="fade" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">

                <div class="amenities-slider-img grey-icon-bg"> <img src="https://d2j4tkbto6uvqv.cloudfront.net/kalpataru/5f956a91c06c7.svg" alt="Ample Parking" class="w-100 h-100"> </div>
                <div class="amenitiess-slider-text">Health Club <img class="rotate1" src="https://dev.kalpataru.com/assets_web/images/downgoldenarrow.png" data-target="#sub1" data-toggle="collapse"> </div>


              </div>


              <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
                <ul class="amenitiesNewcontent amenitiess-slider-text">
                  <li>Multi-purpose Hall with outdoor party area</li>
                  <li>Games room</li>
                  <li>Kids’ Play Area</li>
                  <li>Gymnasium</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
















        <div class="swiper-slide">
          <div class="buildingLandmarksSlide" data-aos="fade">
            <div class="col-sm-3" id="accordion">
              <div class="amenitiess-slider-container d-md-flex align-items-center aos-init aos-animate amenitiesNewtitle" data-aos="fade" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                <div class="amenities-slider-img grey-icon-bg"> <img src="https://d2j4tkbto6uvqv.cloudfront.net/kalpataru/5f956dc88ad74.svg" alt="Ample Parking" class="w-100 h-100"> </div>
                <div class="amenitiess-slider-text"> Celebration Park <img class="rotate1" src="https://dev.kalpataru.com/assets_web/images/downgoldenarrow.png" data-target="#sub1" data-toggle="collapse"> </div>
              </div>


              <div id="collapseThree" class="panel-collapse collapse in amenities-slider-img" role="tabpanel" aria-labelledby="headingThree">
                <ul class="amenitiesNewcontent amenitiess-slider-text">
                  <li>Retreat Plaza</li>
                  <li>Open Yoga Deck</li>
                  <li>Camping Site With Star Gazing Deck</li>
                  <li>Multi- purpose Sports Lawn</li>
                  <li>Kids’ Play Area</li>
                </ul>
              </div>
            </div>
          </div>
        </div>




        <!-- <div class="swiper-slide">
                                        <div class="buildingLandmarksSlide" data-aos="fade">
                                            <img src="<?php echo base_url(); ?>assets_web/images/50-years-of-KL/Power backup 316-X-376-1.jpg" class="w-100" title="Power backup" alt="Power backup">
                                            <div class="buildingLandmarksQualitiesTitle">Power backup</div>
                                        </div>
                                    </div>-->
        <div class="swiper-slide">
          <div class="buildingLandmarksSlide">
            <div class="col-sm-3" id="accordion">
              <div class="amenitiess-slider-container d-md-flex align-items-center aos-init aos-animate amenitiesNewtitle" data-aos="fade" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                <div class="amenities-slider-img grey-icon-bg"> <img src="https://d2j4tkbto6uvqv.cloudfront.net/kalpataru/5f956ceeaf277.svg" alt="Ample Parking" class="w-100 h-100"> </div>
                <div class="amenitiess-slider-text"> Forest Park <img class="rotate1" src="https://dev.kalpataru.com/assets_web/images/downgoldenarrow.png" data-target="#sub1" data-toggle="collapse"> </div>
              </div>


              <div id="collapseFour" class="panel-collapse collapse in amenities-slider-img" role="tabpanel" aria-labelledby="headingFour">
                <ul class="amenitiesNewcontent amenitiess-slider-text">
                  <li>Community Farming</li>
                  <li>Picnic Lawn</li>
                  <li>Treehouse</li>
                  <li>Nature Pocket</li>
                </ul>
              </div>
            </div>

          </div>
        </div>



        <div class="swiper-slide">
          <div class="buildingLandmarksSlide">
            <div class="col-sm-3" id="accordion">
              <div class="amenitiess-slider-container d-md-flex align-items-center aos-init aos-animate amenitiesNewtitle" data-aos="fade" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                <div class="amenities-slider-img grey-icon-bg"> <img src="https://d2j4tkbto6uvqv.cloudfront.net/kalpataru/5f956a91c06c7.svg" alt="Ample Parking" class="w-100 h-100"> </div>
                <div class="amenitiess-slider-text"> Sensory Garden <img class="rotate1" src="https://dev.kalpataru.com/assets_web/images/downgoldenarrow.png" data-target="#sub1" data-toggle="collapse"> </div>
              </div>


              <div id="collapseFive" class="panel-collapse collapse in amenities-slider-img" role="tabpanel" aria-labelledby="headingFive">
                <ul class="amenitiesNewcontent amenitiess-slider-text">
                  <li>Bird Feeder Area</li>
                  <li>Herb Garden</li>
                  <li>Reflexology Path</li>
                  <li>Sensory Garden</li>
                  <li>Labyrinth with Lawn Area</li>
                  <li>Kids’ Play Area</li>
                  <li>Nature Pocket</li>
                </ul>
              </div>
            </div>
          </div>
        </div>






        <div class="swiper-slide">
          <div class="buildingLandmarksSlide">
            <div class="col-sm-3" id="accordion">
              <div class="amenitiess-slider-container d-md-flex align-items-center aos-init aos-animate amenitiesNewtitle" data-aos="fade" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                <div class="amenities-slider-img grey-icon-bg"> <img src="https://d3smrpuo7zidc0.cloudfront.net/kalpataru/6239acbac238a.svg" alt="Ample Parking" class="w-100 h-100"> </div>
                <div class="amenitiess-slider-text">Dune Park <img class="rotate1" src="https://dev.kalpataru.com/assets_web/images/downgoldenarrow.png" data-target="#sub1" data-toggle="collapse"> </div>
              </div>


              <div id="collapseSix" class="panel-collapse collapse in amenities-slider-img" role="tabpanel" aria-labelledby="headingSix">
                <ul class="amenitiesNewcontent amenitiess-slider-text">
                  <li>Children’s Play Mound</li>
                  <li>Sit- out Areas</li>
                </ul>
              </div>
            </div>
          </div>
        </div>




        <div class="swiper-slide">
          <div class="buildingLandmarksSlide">
            <div class="col-sm-3" id="accordion">
              <div class="amenitiess-slider-container d-md-flex align-items-center aos-init aos-animate amenitiesNewtitle" data-aos="fade" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                <div class="amenities-slider-img grey-icon-bg"> <img src="https://d3smrpuo7zidc0.cloudfront.net/kalpataru/602215170fa59.svg" alt="Ample Parking" class="w-100 h-100"> </div>
                <div class="amenitiess-slider-text">Strolling Park <img class="rotate1" src="https://dev.kalpataru.com/assets_web/images/downgoldenarrow.png" data-target="#sub1" data-toggle="collapse"> </div>
              </div>


              <div id="collapseSeven" class="panel-collapse collapse in amenities-slider-img" role="tabpanel" aria-labelledby="headingSeven">
                <ul class="amenitiesNewcontent amenitiess-slider-text">
                  <li>Multipurpose Lawn with stage</li>
                  <li>Art And Hobby Corner with nature retreat area</li>
                  <li>Kids’ Play Area</li>
                  <li>Senior Citizen Pavilion</li>
                </ul>
              </div>
            </div>
          </div>
        </div>



        <div class="swiper-slide">
          <div class="buildingLandmarksSlide">
            <div class="col-sm-3" id="accordion">
              <div class="amenitiess-slider-container d-md-flex align-items-center aos-init aos-animate amenitiesNewtitle" data-aos="fade" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                <div class="amenities-slider-img grey-icon-bg"> <img src="https://d3smrpuo7zidc0.cloudfront.net/kalpataru/6228aa91462b0.svg" alt="Ample Parking" class="w-100 h-100"> </div>
                <div class="amenitiess-slider-text"> Sound Of Nature Park <img class="rotate1" src="https://dev.kalpataru.com/assets_web/images/downgoldenarrow.png" data-target="#sub1" data-toggle="collapse"> </div>
              </div>


              <div id="collapseEight" class="panel-collapse collapse in amenities-slider-img" role="tabpanel" aria-labelledby="headingEight">
                <ul class="amenitiesNewcontent amenitiess-slider-text">
                  <li>Multipurpose Lawn</li>
                  <li>Bird Bath</li>
                  <li>Wind Chimes And Bamboo Chimes</li>
                  <li>Kids’ Play Area</li>
                  <li>Deciduous Tree Walk & Bamboo Walk area</li>
                  <li>Senior Citizen Area</li>
                  <li>Nature Pocket</li>
                </ul>
              </div>
            </div>
          </div>
        </div>












<!--New-->
<div class="swiper-slide">
          <div class="buildingLandmarksSlide">
<div class="col-sm-3" id="accordion">
        <div class="amenitiess-slider-container d-md-flex align-items-center aos-init aos-animate amenitiesNewtitle" data-aos="fade" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="true" aria-controls="collapseNine">
          <div class="amenities-slider-img grey-icon-bg"> <img src="https://dev.kalpataru.com/assets_web/images/Multi-PurposeCourt.svg" alt="Ample Parking" class="w-100 h-100"> </div>
          <div class="amenitiess-slider-text"> Multi Purpose Court
 <img class="rotate1" src="https://dev.kalpataru.com/assets_web/images/downgoldenarrow.png" data-target="#sub1" data-toggle="collapse"> </div>
        </div>


        <div id="collapseTen" class="panel-collapse collapse in amenities-slider-img" role="tabpanel" aria-labelledby="headingNine">
          <ul class="amenitiesNewcontent amenitiess-slider-text">
            <li>Seating Area</li>
            <li>Multipurpose Sports Court : Fitness Park</li>
          
          </ul>
        </div>
      </div>
      </div>
      </div>
<!--New-->

<!--New-->
<div class="swiper-slide">
          <div class="buildingLandmarksSlide">
<div class="col-sm-3" id="accordion">
        <div class="amenitiess-slider-container d-md-flex align-items-center aos-init aos-animate amenitiesNewtitle" data-aos="fade" data-toggle="collapse" data-parent="#accordion" href="#collapse11" aria-expanded="true" aria-controls="collapseNine">
          <div class="amenities-slider-img grey-icon-bg"> <img src="https://dev.kalpataru.com/assets_web/images/OrchardPark.svg" alt="Ample Parking" class="w-100 h-100"> </div>
          <div class="amenitiess-slider-text"> Orchard Park
 <img class="rotate1" src="https://dev.kalpataru.com/assets_web/images/downgoldenarrow.png" data-target="#sub1" data-toggle="collapse"> </div>
        </div>
        <div id="collapse11" class="panel-collapse collapse in amenities-slider-img" role="tabpanel" aria-labelledby="headingNine">
          <ul class="amenitiesNewcontent amenitiess-slider-text">
            <li>Fruit orchard area</li>
            <li>Miyawaki Forest</li>
            <li>Seating Area</li>

          </ul>
        </div>
      </div>
      </div>
      </div>
<!--New-->

<!--New-->
<div class="swiper-slide">
          <div class="buildingLandmarksSlide">
<div class="col-sm-3" id="accordion">
        <div class="amenitiess-slider-container d-md-flex align-items-center aos-init aos-animate amenitiesNewtitle" data-aos="fade" data-toggle="collapse" data-parent="#accordion" href="#collapse12" aria-expanded="true" aria-controls="collapseNine">
          <div class="amenities-slider-img grey-icon-bg"> <img src="https://dev.kalpataru.com/assets_web/images/VegetableHobbyPark.svg" alt="Ample Parking" class="w-100 h-100"> </div>
          <div class="amenitiess-slider-text">Vegetable Hobby Park<img class="rotate1" src="https://dev.kalpataru.com/assets_web/images/downgoldenarrow.png" data-target="#sub1" data-toggle="collapse"> </div>
        </div>


        <div id="collapse12" class="panel-collapse collapse in amenities-slider-img" role="tabpanel" aria-labelledby="headingNine">
          <ul class="amenitiesNewcontent amenitiess-slider-text">
            <li>Multipurpose Lawn</li>
            <li>Vegetable Hobby Garden</li>
            <li>Seating Area</li>
          </ul>
        </div>
      </div>
      </div>
      </div>
<!--New-->

<!--New-->
<div class="swiper-slide">
          <div class="buildingLandmarksSlide">
<div class="col-sm-3" id="accordion">
        <div class="amenitiess-slider-container d-md-flex align-items-center aos-init aos-animate amenitiesNewtitle" data-aos="fade" data-toggle="collapse" data-parent="#accordion" href="#collapse13" aria-expanded="true" aria-controls="collapseNine">
          <div class="amenities-slider-img grey-icon-bg"> <img src="https://dev.kalpataru.com/assets_web/images/KidsPlayArea.svg" alt="Ample Parking" class="w-100 h-100"> </div>
          <div class="amenitiess-slider-text"> Kid's Play Area
 <img class="rotate1" src="https://dev.kalpataru.com/assets_web/images/downgoldenarrow.png" data-target="#sub1" data-toggle="collapse"> </div>
        </div>


        <div id="collapse13" class="panel-collapse collapse in amenities-slider-img" role="tabpanel" aria-labelledby="headingNine">
          <ul class="amenitiesNewcontent amenitiess-slider-text">
            <li>Kids’ Play area with Play Lawn</li>
            <li>Seating Area</li>
          
          </ul>
        </div>
      </div>
      </div>
      </div>
<!--New-->

<!--New-->
<div class="swiper-slide">
          <div class="buildingLandmarksSlide">
<div class="col-sm-3" id="accordion">
        <div class="amenitiess-slider-container d-md-flex align-items-center aos-init aos-animate amenitiesNewtitle" data-aos="fade" data-toggle="collapse" data-parent="#accordion" href="#collapse14" aria-expanded="true" aria-controls="collapseNine">
          <div class="amenities-slider-img grey-icon-bg"> <img src="https://dev.kalpataru.com/assets_web/images/TerrainPark.svg" alt="Ample Parking" class="w-100 h-100"> </div>
          <div class="amenitiess-slider-text"> Terrain Park
 <img class="rotate1" src="https://dev.kalpataru.com/assets_web/images/downgoldenarrow.png" data-target="#sub1" data-toggle="collapse"> </div>
        </div>


        <div id="collapse14" class="panel-collapse collapse in amenities-slider-img" role="tabpanel" aria-labelledby="headingNine">
          <ul class="amenitiesNewcontent amenitiess-slider-text">
            <li>Sloped Lawn</li>
            <li>Flower Bed</li>
            <li>Strolling Garden</li>
          </ul>
        </div>
      </div>
      </div>
      </div>
<!--New-->

<!--New-->
<div class="swiper-slide">
          <div class="buildingLandmarksSlide">
<div class="col-sm-3" id="accordion">
        <div class="amenitiess-slider-container d-md-flex align-items-center aos-init aos-animate amenitiesNewtitle" data-aos="fade" data-toggle="collapse" data-parent="#accordion" href="#collapse15" aria-expanded="true" aria-controls="collapseNine">
          <div class="amenities-slider-img grey-icon-bg"> <img src="https://dev.kalpataru.com/assets_web/images/GrandCommercialHealthClub.svg" alt="Ample Parking" class="w-100 h-100"> </div>
          <div class="amenitiess-slider-text">Grand Commercial Health Club: Outdoor Amenities
 <img class="rotate1" src="https://dev.kalpataru.com/assets_web/images/downgoldenarrow.png" data-target="#sub1" data-toggle="collapse"> </div>
        </div>


        <div id="collapse15" class="panel-collapse collapse in amenities-slider-img" role="tabpanel" aria-labelledby="headingNine">
          <ul class="amenitiesNewcontent amenitiess-slider-text">
            <li> Swimming pool with Deck</li>
            <li> Lawn Tennis Court</li>
            <li>Futsal court</li>
          
          </ul>
        </div>
      </div>
      </div>
      </div>
<!--New-->

<!--New-->
<div class="swiper-slide">
          <div class="buildingLandmarksSlide">
<div class="col-sm-3" id="accordion">
        <div class="amenitiess-slider-container d-md-flex align-items-center aos-init aos-animate amenitiesNewtitle" data-aos="fade" data-toggle="collapse" data-parent="#accordion" href="#collapse16" aria-expanded="true" aria-controls="collapseNine">
          <div class="amenities-slider-img grey-icon-bg"> <img src="https://dev.kalpataru.com/assets_web/images/GrandCommercialHealthClub.svg" alt="Ample Parking" class="w-100 h-100"> </div>
          <div class="amenitiess-slider-text">Grand Commercial Health Club: Indoor&nbsp;Amenities
 <img class="rotate1" src="https://dev.kalpataru.com/assets_web/images/downgoldenarrow.png" data-target="#sub1" data-toggle="collapse"> </div>
        </div>


        <div id="collapse16" class="panel-collapse collapse in amenities-slider-img" role="tabpanel" aria-labelledby="headingNine">
          <ul class="amenitiesNewcontent amenitiess-slider-text">
            <li>     
            Grand entrance with Lobby area</li>
            <li>Banquet hall</li>
            <li>Guest rooms and suites</li>
            <li>Meeting Rooms</li>
            <li>Spa</li>
            <li>Dining restaurant</li>
            <li>Fitness Centre</li>
            <li>Yoga room</li>
            <li>Kids Play area</li>
            <li>Indoor games room</li>
            <li>Indoor Badminton Court</li>
            <li>Squash Court</li>
            
          </ul>
        </div>
      </div>
      </div>
      </div>
<!--New-->





        <div class="swiper-slide">
          <div class="buildingLandmarksSlide">
            <div class="col-sm-3" id="accordion">
              <div class="amenitiess-slider-container d-md-flex align-items-center aos-init aos-animate amenitiesNewtitle" data-aos="fade" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                <div class="amenities-slider-img grey-icon-bg"> <img src="https://d2j4tkbto6uvqv.cloudfront.net/kalpataru/5f956a91c06c7.svg" alt="Ample Parking" class="w-100 h-100"> </div>
                <div class="amenitiess-slider-text"> Fitness Park <img class="rotate1" src="https://dev.kalpataru.com/assets_web/images/downgoldenarrow.png" data-target="#sub1" data-toggle="collapse"> </div>
              </div>


              <div id="collapseNine" class="panel-collapse collapse in amenities-slider-img" role="tabpanel" aria-labelledby="headingNine">
                <ul class="amenitiesNewcontent amenitiess-slider-text">
                  <li>Multipurpose Sports Court</li>
                  <li>Net Cricket</li>
                  <li>Amphitheater</li>
                  <li>Swing Ringr</li>
                  <li>Fitness Loop</li>
                  <li>Senior Citizen Pavilion</li>
                  <li>Kids' Play Area</li>
                  <li>Nature Pockets</li>
                </ul>
              </div>
            </div>
          </div>
        </div>






<!--New-->
<div class="swiper-slide">
          <div class="buildingLandmarksSlide">
<div class="col-sm-3" id="accordion">
        <div class="amenitiess-slider-container d-md-flex align-items-center aos-init aos-animate amenitiesNewtitle" data-aos="fade" data-toggle="collapse" data-parent="#accordion" href="#collapse16" aria-expanded="true" aria-controls="collapseNine">
          <div class="amenities-slider-img grey-icon-bg"> <img src="https://d3smrpuo7zidc0.cloudfront.net/kalpataru/647e20cc64232.svg" alt="Ample Parking" class="w-100 h-100"> </div>
          <div class="amenitiess-slider-text">Swing Park</div>


      </div>
           </div>
           </div>
           </div>
<!--New-->


<!--New-->
<div class="swiper-slide">
          <div class="buildingLandmarksSlide">
<div class="col-sm-3" id="accordion">
        <div class="amenitiess-slider-container d-md-flex align-items-center aos-init aos-animate amenitiesNewtitle" data-aos="fade" data-toggle="collapse" data-parent="#accordion" href="#collapse16" aria-expanded="true" aria-controls="collapseNine">
          <div class="amenities-slider-img grey-icon-bg"> <img src="https://d3smrpuo7zidc0.cloudfront.net/kalpataru/647e206e3f484.svg" alt="Ample Parking" class="w-100 h-100"> </div>
          <div class="amenitiess-slider-text">Hurdle Park
  </div>
      </div>
      </div>
      </div>
           </div>
<!--New-->






      </div>
      <div class="swiper-pagination"></div>
    </div>
    <div class="swiper-navigation-container">
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
  </div>
</div>
</div>