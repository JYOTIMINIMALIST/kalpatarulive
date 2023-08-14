<style>

    /*LIGHTBOX STYLE*/

.lightbox {

  display: none;

  position: fixed;

  z-index: 999;

  top: 0;

  left: 0;

  width: 100%;

  height: 100%;

  background: rgba(0, 0, 0, 0.5);

}

.lightbox .lightbox-video {

  width: 100%;

  padding-bottom: 56%;

}

.lightbox iframe {

  position: absolute;

  height: 100%;

  width: 100%;

  left: 0;

  right: 0;

}

.lightbox img {

  display: block;

  margin: 0 auto;

}

.lightbox .lightbox-close {

  position: absolute;

  display: block;
  top: -5%;

  right: -5%;

  /*top: 10%;

  right: 7%;*/

  z-index:9;

  color: #ffffff;

  font-size: 26px;

  height: 50px;

  width: 50px;

  background: rgba(255, 255, 255, 0.3);

  border: 3px solid #ffffff;

  border-radius: 50%;

  line-height: 50px;

  text-align: center;

}

.lightbox .lightbox-close:hover {

  text-decoration: none;

}

.lightbox .lightbox-container {
  position: relative;
  max-width: 1024px;

  margin: 125px auto 25px;

}

/*media quries*/
@media only screen and (min-width: 992px){
  .lightbox .lightbox-container{
    max-width: 800px !important;
  }
}

@media only screen and (max-width: 991.5px){
  .lightbox .lightbox-container{
    max-width: 500px;
    margin: 100px auto 25px;
  }
  .lightbox .lightbox-close {
    font-size: 20px;
    height: 30px;
    width: 30px;
    border: 2px solid #ffffff;
    line-height: 30px;
  }
}
@media only screen and (max-width: 575px){
  .lightbox .lightbox-container{
    max-width: 450px;
  }
  .lightbox .lightbox-close {
    font-size: 15px;
    height: 25px;
    width: 25px;
    line-height: 25px;
  }
}
@media only screen and (max-width: 430px){
  .lightbox .lightbox-container{
    /*max-width: 365px;*/
    max-width: 350px;
  }
}
@media only screen and (max-width: 375px){
  .lightbox .lightbox-container{
    max-width: 315px;
  }
}
@media only screen and (max-width: 325px){
  .lightbox .lightbox-container{
    max-width: 260px;
  }
  .lightbox .lightbox-close {
    top: -9%;
    right: -9%;
    font-size: 11px;
    height: 20px;
    width: 20px;
    line-height: 20px;
  }
}
</style>





  <script>

  window.console = window.console || function(t) {};

</script>



  

  

  <script>

  if (document.location.search.match(/type=embed/gi)) {

    window.parent.postMessage("resize", "*");

  }

</script>


<?php $urlmmb = base_url().$this->uri->segment(1).'/'.$this->uri->segment(2); 

$this->db->select('*');
       $this->db->from('gallery');
       $this->db->where('type', 'image');
       $this->db->where('project_url', $urlmmb);
       
       $query = $this->db->get();
       
    //echo  $this->db->last_query();
       $resultvid = $query->result();
       //print_r($resultvid);

if(count($resultvid)>0){
?>




 <div id="locate" class="project-inner-location-section no-overflow bigTitleAnimationSection container-fluid mainContainer">

                            <div>

                                <div class="double-bg-header">

                                    <h2 class="double-main-heading" data-aos="fade"><?php // echo $sequence_no > 9 ? $sequence_no : "0"."9"; 



if($result[0]->position_gallery_position<10){ echo '0';}

                            echo $result[0]->position_gallery_position;



                                    ?> <?=strtoupper($properties->title)?>  GALLERY</h2>

                                    <div class="double-bg-heading">GALLERY</div>

                                </div>

                            </div>

                      

                      <div class="buildingLandmarksSlider">

                            <div class="swiper-container">

                                <div class="swiper-wrapper">
<?php
                          foreach ($resultvid as $key => $value) {
                            
  
     ?>
                                    <div class="swiper-slide">

                                        <div class="buildingLandmarksSlide" data-aos="fade">

                                       



    <img src="<?=$value->thumbnail?>" class="w-100" title="<?=$value->title?>" alt="<?=$value->title?>">



 <!--   <a href="#lightbox" class="lightbox-toggle"

   data-lightbox-type="video"

   data-lightbox-content="<?php echo $video_url;?>">    </a>       -->

                                        <div class="buildingLandmarksQualitiesTitle"><?=$value->title?></div>

                                        </div>

                                    </div>

                                
 <?php
                          }
                          ?>
                                

                                

                                

                                

                                <div class="swiper-pagination"></div>

                            </div>

                            <div class="swiper-navigation-container">

                                <div class="swiper-button-prev"></div>

                                <div class="swiper-button-next"></div>

                            </div>

                        </div>

                    </div>

                </div>





<div class="lbox"> </div>


<?php } ?>








  <!-- Modal -->



<div id="videoPopupWrapper" class="modal fade" role="videoPopupWrapper">



  <div class="modal-dialog" >







    <!-- Modal content-->



    <div class="modal-content" style="padding: 0em 0em;">



  

  <iframe width="100%" height="315" src="https://www.youtube.com/embed/Z0PG6BCtZ18" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>   



    



        <button type="button" class="btn btn-default" data-dismiss="modal" >Close</button>







  </div>



  </div>



</div>   







    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>



  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>

      <script id="rendered-js" >

$('.lbox').append(`

    <div class="lightbox">

      

      <div class="lightbox-container">

        <div class="row">
        <a href="#lightbox" class="lightbox-close lightbox-toggle">X</a>
          <div class="col-sm-12 lightbox-column">

            

          </div>

        </div>

      </div>

    </div>

  `);



$('.lightbox-toggle').on('click', event => {

  event.preventDefault();

  $('.lightbox').fadeToggle('fast');



  let context = $(event.currentTarget).attr('data-lightbox-type');

  let content = $(event.currentTarget).attr('data-lightbox-content');

  console.log(event);

  if (context == 'video') {

    $('.lightbox-column').append(`

        <div class="lightbox-video">

        <iframe src="${content}" frameborder="0" allowfullscreen> </iframe>

        </div>

    `);

  } else if (context == 'image') {

    $('.lightbox-column').append(`

        <img src="${content}" class="img-" frameborder="0" allowfullscreen>

    `);

  }

});



$('.lightbox-close').on('click', event => {

  event.preventDefault();

  $('.lightbox-column > *').remove();

});

//# sourceURL=pen.js







$("#videoPopupWrapper").modal('show');















    </script>


<?php /* ?>
 <div id="locate" class="project-inner-location-section no-overflow bigTitleAnimationSection container-fluid mainContainer">
                            <div>
                                <div class="double-bg-header">
                                    <h2 class="double-main-heading" data-aos="fade"><?php // echo $sequence_no > 9 ? $sequence_no : "0"."9"; 

if($result[0]->position_gallery_position<10){ echo '0';}
                            echo $result[0]->position_gallery_position;
                                    ?> <?=strtoupper($properties->title)?> Gallery</h2>
                                    <div class="double-bg-heading">Gallery</div>
                                </div>
                            </div>
                      
                      <div class="buildingLandmarksSlider">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="buildingLandmarksSlide" data-aos="fade">
                                        <img src="<?php echo base_url(); ?>assets_web/images/50-years-of-KL/high speed lift 316-X-376-3C.jpg" class="w-100" title=" High Speed Elevators" alt=" High Speed Elevators">
                                             
                                        <div class="buildingLandmarksQualitiesTitle">Multitier security</div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="buildingLandmarksSlide" data-aos="fade">
                                            <img src="<?php echo base_url(); ?>assets_web/images/50-years-of-KL/9 levels of car park 316-X-376-5.jpg" class="w-100" title="9 Levels of car park" alt="9 Levels of car park" >
                                            <div class="buildingLandmarksQualitiesTitle">9 Levels of car park</div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="buildingLandmarksSlide" data-aos="fade">
                                             <img src="<?php echo base_url(); ?>assets_web/images/50-years-of-KL/3 tier security 316-X-376-4.jpg" class="w-100" title="3 Tier security" alt="3 Tier security">
                                           
                                            <div class="buildingLandmarksQualitiesTitle"> High Speed Elevators</div>
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
                                            <img src="<?php echo base_url(); ?>assets_web/images/50-years-of-KL/Relaxsation area 316-X-376-2.jpg" class="w-100" alt="Relaxation Area" title="Uncompromised Quality">
                                            <div class="buildingLandmarksQualitiesTitle">Relaxation Area</div>
                                        </div>
                                    </div>
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
                
                <?php */ ?>