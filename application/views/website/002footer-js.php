<?php /*<script type="text/javascript" src='<?php echo base_url() ?>assets_web/js/jquery-1.11.2.js'></script>*/  ?>
<div id="preloader"><div class="PageLoader"></div></div>
<script type="text/javascript" src='<?php echo base_url() ?>assets_web/js/jquery.min.js'></script>
<?php
  if($this->config->item('chat_bot') == 0){
?>
  <script async type="text/javascript" src='<?php echo base_url() ?>assets_web/js/dev_bot.js?ver=1.6'></script>
<?php
  }else{
?>
<script async type="text/javascript" src='<?php echo base_url() ?>assets_web/js/bot_Desktop.js?ver=1.6'></script>
<?php
  }
?>
<!-- <script type="text/javascript" src="<?php echo base_url() ?>assets_web/js/modernizr-2.8.3-respond-1.4.2.min.js"></script> -->
<!-- <script type="text/javascript" src='<?php echo base_url() ?>assets_web/js/popper.min.js'></script> -->
<!-- <script type="text/javascript" src='<?php echo base_url() ?>assets_web/js/bootstrap.min.js'></script> -->
<!-- <script type="text/javascript" src="<?php echo base_url() ?>assets_web/js/aos.js"></script> -->
<!-- <script type="text/javascript" src="<?php echo base_url() ?>assets_web/js/swiper.min.js"></script> -->
<!-- <script type="text/javascript" src="<?php echo base_url() ?>assets_web/js/jquery.validate.min.js"></script> -->
<!-- <script src="<?php echo base_url() ?>assets_web/js/NewTweenMax.min.js"></script> -->
<!-- <script src="<?php echo base_url() ?>assets_web/js/ScrollMagic.min.js"></script> -->
<!-- <script src="<?php echo base_url() ?>assets_web/js/animation.gsap.js"></script> -->
<!-- <script src="<?php echo base_url() ?>assets_web/js/debug.addIndicators.min.js"></script> -->
<?php if($page == 'project-inner' || $page == 'about1' || $page == 'company_profile_page' || $page == 'gallery-page' || $page == 'csrPage'){ ?>
  <script type="text/javascript" src="<?php echo base_url() ?>assets_web/js/fancyBox.js"></script>
<?php }?>
<?php if($page == 'sustainability_page'){ ?>
  <script type="text/javascript" src="<?php echo base_url() ?>assets_web/js/jquery.fancybox.min.js"></script>
<?php }?>
<!-- <script type="text/javascript" src="<?php echo base_url() ?>assets_web/js/main.js?ver=1.92"></script> -->
<script type="text/javascript" src="<?php echo base_url() ?>assets_web/js/combine-min.js?ver=2.1"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets_web/js/validation.js"></script>
<script type="text/javascript">
  var controller = new ScrollMagic.Controller();

  $(".bigTitleAnimationSection").each(function() {
    var tl1 = new TimelineMax();
    var child = $(this).find(".double-bg-heading");
    tl1.to(child, 1, { x:-150, ease: Linear.easeNone});

    var scene = new ScrollMagic.Scene({
      triggerElement: this,
      triggerHook: 'onEnter',
      duration: "100%"
    })
    .setTween(tl1)
    .addTo(controller);
  });


        // Circle hide and show
        $(window).scroll(function(){
          $('.home-featured-section').each(function(){
            if($(window).scrollTop() >= $(this).offset().top + $(this).height() || $(window).scrollTop() < $(this).offset().top){
              $('.page-circle').removeClass('active');
            }
            else{
              $('.page-circle').addClass('active');
            }
          });
        });
        jQuery.validator.addMethod("emailfull", function(value, element) {
         return this.optional(element) || /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i.test(value);
       }, "Please enter a valid email address.");


        var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
        var device_type = "Desktop";
        if (isMobile) {
          device_type = "Mobile";
        } else {
          device_type = "Desktop";
        } 

        var utm_source = "<?=isset($_GET['utm_source']) ? $_GET['utm_source'] : ''?>";
        var utm_campaign = "<?=isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : ''?>";
        var utm_medium = "<?=isset($_GET['utm_medium']) ? $_GET['utm_medium'] : ''?>";
var GCLID = "<?=isset($_GET['GCLID']) ? $_GET['GCLID'] : ''?>";
        //var this_page = "<?php /*echo $_SERVER['REQUEST_URI'];*/ ?>";
        // console.log(this_page);
        $("form[name='book_popup_form']").validate({
          rules: {
            book_user_name: "required",
            book_user_email: {
              required:true,
              emailfull:true
            },
            book_user_contact_number: {
              required:true,
              minlength :function(){
                var country_code = $(".selected-book").html();
                if (country_code=="+91") {
                  return 10;
                }
                else
                {
                  return 7;
                }
              },
              maxlength :function(){
                var country_code = $(".selected-book").html();
                if (country_code=="+91") {
                  return 10;
                }
                else
                {
                  return 12;
                }
              },               
            }
          },
          messages: {
            book_user_contact_number : {
              minlength: "Please put min {0} digit contact number",
              maxlength: "Please put max {0} digit contact number"
            }
          },
          errorPlacement: function(error, element) {
            if(element.attr("name") == "book_user_name") {
              error.appendTo("#book_error_name");
            }else if(element.attr("name") == "book_user_email") {
              error.appendTo("#book_error_email");
            }else if(element.attr("name") == "book_user_contact_number") {
              error.appendTo("#book_error_contact");
            }
            else
            {
              error.insertAfter(element);
            }
          },
          submitHandler: function(form, event) {
             var country_code = $(".selected-book").html();
            var book_user_contact_number = $("#book_user_contact_number").val();
            var firstDigit = book_user_contact_number.toString()[0];
            if(country_code=="+91" && firstDigit==0)
            {
              $("#book_error_contact").html('<span id="c_num_bo">Contact number should not start with 0<span>');
              $( "#book_user_contact_number" ).focus();
            }
            else{
            $("#preloader").show(); 
            var book_user_name = $("#book_user_name").val();
            var book_user_email = $("#book_user_email").val();
            var book_user_contact_number = $("#book_user_contact_number").val();
            var country_code = $(".selected-book").html();
            var book_whatsapp = 0;
            var country = countryName(country_code);
            if($("#book_terms_conditions").prop('checked') == true){
             book_whatsapp = 1;
           }
           var url = "<?=$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>";

           var csrf_token = $("#book_csrf_token").val();

           var data = {"b_name":book_user_name,"b_email":book_user_email,"b_contactno":book_user_contact_number,"b_whatsapp":book_whatsapp,"url":url,"country":country,"device_type":device_type,"utm_source":utm_source,"utm_campaign":utm_campaign,"utm_medium":utm_medium,"csrf_token":csrf_token,"gclid":GCLID}; 
           $.ajax({
            url: '<?=base_url()?>website/salesforce',
            type: 'POST',
            data: JSON.stringify(data),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            async: true,
            success: function(data)
            {
              $("#preloader").hide();
              // $("#book_success").show();
              // $("#thankYouPage").show();
              // $('#thankYouPage').modal('show');
              // $('#bookNowForm').modal('hide');
              window.location.href = '<?=base_url()?>'+data["thankyou_slug"],
              setTimeout(function(){
               // $("#book_success").hide();
               $('#thankYouPage').modal('hide');
               $("#book_popup_form")[0].reset();
             }, 3000);
            }
          });
         }
       }
       });
        $("form[name='enquiry_popup_form']").validate({
          rules: {
            enquiry_user_name: "required",
            enquiry_user_email: {
              required:true,
              emailfull:true
            },
            enquiry_user_contact_number: {
              required:true,
              minlength :function(){
                var country_code = $(".selected-enquiry").html();
                if (country_code=="+91") {
                  return 10;
                }
                else
                {
                  return 7;
                }
              },
              maxlength :function(){
                var country_code = $(".selected-enquiry").html();
                if (country_code=="+91") {
                  return 10;
                }
                else
                {
                  return 12;
                }
              },               
            }
          },
          messages: {
            enquiry_user_contact_number : {
              minlength: "Please put min {0} digit contact number",
              maxlength: "Please put max {0} digit contact number"
            }
          },
          errorPlacement: function(error, element) {
            if(element.attr("name") == "enquiry_user_name") {
              error.appendTo("#enquiry_error_name");
            }else if(element.attr("name") == "enquiry_user_email") {
              error.appendTo("#enquiry_error_email");
            }else if(element.attr("name") == "enquiry_user_contact_number") {
              error.appendTo("#enquiry_error_contact");
            }
            else
            {
              error.insertAfter(element);
            }
          },
          submitHandler: function(form, event) {
            // Hide loader when form submit
            $("#preloader").hide();
            var country_code = $(".selected-enquiry").html();
            var book_user_contact_number = $("#enquiry_user_contact_number").val();
            var firstDigit = book_user_contact_number.toString()[0];
            if(country_code=="+91" && firstDigit==0)
            {
              $("#enquiry_error_contact").html('<span id="c_num_en">Contact number should not start with 0<span>');
              $( "#enquiry_user_contact_number" ).focus();
            }
            else{
              $("#preloader").show(); 
              var book_user_name = $("#enquiry_user_name").val();
              var book_user_email = $("#enquiry_user_email").val();
              var book_user_contact_number = $("#enquiry_user_contact_number").val();
              var country_code = $(".selected-enquiry").html();
              var country = countryName(country_code);
              var book_whatsapp = 0;
              if($("#enquiry_terms_conditions").prop('checked') == true){
               book_whatsapp = 1;
             }
             var url = "<?=$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>";

             var csrf_token = $("#book_csrf_token").val();

             var data = {"b_name":book_user_name,"b_email":book_user_email,"b_contactno":book_user_contact_number,"b_whatsapp":book_whatsapp,"url":url,"country":country,"device_type":device_type,"utm_source":utm_source,"utm_campaign":utm_campaign,"utm_medium":utm_medium,"csrf_token":csrf_token,"gclid":GCLID}; 
             $.ajax({
              url: '<?=base_url()?>website/salesforce',
              type: 'POST',
              data: JSON.stringify(data),
              contentType: 'application/json; charset=utf-8',
              dataType: 'json',
              async: true,
              success: function(data)
              {
              $("#preloader").hide();
              // $("#enquiry_success").show();
              // $('#thankYouPage').modal('show');
              // $('#enquiryPopupWrapper').modal('hide');
              window.location.href = '<?=base_url()?>'+data["thankyou_slug"],
              setTimeout(function(){
               // $("#enquiry_success").hide();
               $('#thankYouPage').modal('hide');
               $("#enquiry_popup_form")[0].reset();
             }, 3000);
            }
          });
           }
         }
       });

        function validateemail(x)  
        {  
          var atposition=x.indexOf("@");  
          var dotposition=x.lastIndexOf(".");  
          if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){    
            return true;  
          }  
        }  
        $( ".country-data .dropdown-item" ).click(function() {
          var country_code = $(this).html();
          if (country_code!="+91") {
            $("#c_num_en").remove();
            $("#c_num_bo").remove();
          }
        });

        function countryName(country_code)
        {
          var countries = {"+91":"India", "+355":"Albania", "+213":"Algeria", "+376":"Andorra", "+244":"Angola", "+264":"Anguilla", "+268":"Antigua and Barbuda", "+54":"Argentina", "+374":"Armenia", "+297":"Aruba", "+247":"Ascension Island", "+61":"Australia", "+43":"Austria", "+994":"Azerbaijan", "+242":"Bahamas", "+973":"Bahrain", "+880":"Bangladesh", "+246":"Barbados", "+375":"Belarus", "+32":"Belgium", "+501":"Belize", "+229":"Benin", "+441":"Bermuda", "+975":"Bhutan", "+591":"Bolivia", "+387":"Bosnia", "+267":"Botswana", "+55":"Brazil", "+673":"Brunei", "+359":"Bulgaria", "+226":"Burkina Faso", "+257":"Burundi", "+855":"Cambodia", "+237":"Cameroon", "+1":"Canada", "+238":"Cape Verde Islands", "+345":"Cayman Islands", "+236":"Central Africa Republic", "+235":"Chad", "+56":"Chile", "+86":"China", "+57":"Columbia", "+269":"Comoros Island", "+242":"Congo", "+682":"Cook Islands", "+506":"Costa Rica", "+385":"Croatia", "+53":"Cuba", "+357":"Cyprus", "+420":"Czech Republic", "+243":"Democratic Republic of Congo (Zaire)", "+45":"Denmark", "+246":"Diego Garcia", "+253":"Djibouti", "+767":"Dominica Islands", "+809":"Dominican Republic", "+593":"Ecuador", "+20":"Egypt", "+503":"El Salvador", "+240":"Equatorial Guinea", "+291":"Eritrea", "+372":"Estonia", "+251":"Ethiopia", "+298":"Faeroe Islands", "+500":"Falkland Islands", "+679":"Fiji Islands", "+358":"Finland", "+33":"France", "+594":"French Guiana", "+689":"French Polynesia", "+241":"Gabon", "+995":"Georgia", "+49":"Germany", "+233":"Ghana", "+350":"Gibraltar", "+30":"Greece", "+299":"Greenland", "+473":"Grenada", "+590":"Guadeloupe", "+671":"Guam", "+502":"Guatemala", "+245":"Guinea Bissau", "+224":"Guinea Republic", "+592":"Guyana", "+509":"Haiti", "+503":"Honduras", "+852":"Hong Kong", "+36":"Hungary", "+354":"Iceland", "+62":"Indonesia", "+98":"Iran", "+964":"Iraq", "+353":"Ireland", "+972":"Israel", "+39":"Italy", "+225":"Ivory Coast", "+876":"Jamaica", "+81":"Japan", "+962":"Jordan", "+7":"Kazakhstan", "+254":"Kenya", "+686":"Kiribati", "+850":"Korea, North", "+82":"Korea, South", "+965":"Kuwait", "+996":"Kyrgyzstan", "+856":"Laos", "+371":"latvia", "+961":"Lebanon", "+266":"Lesotho", "+231":"Liberia", "+218":"Libya", "+423":"Liechtenstein", "+370":"Lithuania", "+352":"Luxembourg", "+853":"Macau", "+389":"Macedonia (Fyrom)", "+261":"Madagascar", "+265":"Malawi", "+60":"Malaysia", "+960":"Maldives Republic", "+223":"Mali", "+356":"Malta", "+670":"Mariana Islands", "+692":"Marshall Islands", "+596":"Martinique", "+230":"Mauritius", "+269":"Mayotte Islands", "+52":"Mexico", "+691":"Micronesia", "+373":"Moldova", "+377":"Monaco", "+976":"Mongolia", "+664":"Montserrat", "+212":"Morocco", "+258":"Mozambique", "+95":"Myanmar (Burma)", "+264":"Namibia", "+674":"Nauru", "+977":"Nepal", "+31":"Netherlands", "+599":"Netherlands Antilles", "+687":"New Caledonia", "+64":"New Zealand", "+505":"Nicaragua", "+227":"Niger", "+234":"Nigeria", "+683":"Niue Island", "+672":"Norfolk Island", "+47":"Norway", "+968":"Oman", "+92":"Pakistan", "+680":"Palau", "+970":"Palestine", "+507":"Panama", "+675":"Papua New Guinea", "+595":"Paraguay", "+51":"Peru", "+63":"Philippines", "+48":"Poland", "+351":"Portugal", "+787":"Puerto Rico", "+974":"Qatar", "+262":"Reunion Island", "+40":"Romania", "+7":"Russia", "+250":"Rwanda", "+684":"Samoa (American)", "+685":"Samoa (Western)", "+378":"San Marino", "+239":"Sao Tome & Principe", "+966":"Saudi Arabia", "+221":"Senegal", "+381":"Serbia", "+248":"Seychelles", "+232":"Sierra Leone", "+65":"Singapore", "+421":"Slovak Republic", "+386":"Slovenia", "+677":"Solomon Islands", "+252":"Somalia", "+27":"South Africa", "+34":"Spain", "+94":"Sri Lanka", "+290":"St Helena", "+869":"St Kitts & Nevia", "+758":"St Lucia", "+249":"Sudan", "+597":"Surinam", "+268":"Swaziland", "+46":"Sweden", "+41":"Switzerland", "+963":"Syria", "+886":"Taiwan", "+992":"Tajikistan", "+255":"Tanzania", "+66":"Thailand", "+220":"The Gambia", "+228":"Togo", "+676":"Tonga", "+868":"Trinidad & Tobago", "+216":"Tunisia", "+90":"Turkey", "+993":"Turkmenistan", "+649":"Turks & Caicos Islands", "+688":"Tuvalu", "+256":"Uganda", "+380":"Ukraine", "+971":"United Arab Emirates", "+44":"United Kingdom", "+598":"Uruguay", "+1":"USA", "+998":"Uzbekistan", "+678":"Vanuatu", "+58":"Venezuela", "+84":"Vietnam", "+681":"Wallis & Futuna Islands", "+967":"Yemen Arab Republic", "+260":"Zambia", "+263":"Zimbabwe"};
           return (countries[country_code]);
        }

        function numchange(type)
        {
          if (type=='en') {
            $("#c_num_en").remove();
          }
          else
          {
            $("#c_num_bo").remove();
          }
        }
     </script>
	 
	 <!-- ==================== Ajax Search ================= -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
<script src="https://twitter.github.io/typeahead.js/js/handlebars.js"></script>
<script src="https://twitter.github.io/typeahead.js/releases/latest/typeahead.bundle.js"></script>


<script>
    $(function(){
        var sample_data = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            prefetch:'<?php echo base_url(); ?>website/fetch',
            remote:{
                url:'<?php echo base_url(); ?>website/fetch/%QUERY',
                wildcard:'%QUERY'
            }
        });


        $('#prefetch .typeahead').typeahead(null, {
            name: 'sample_data',
            display: 'name',
            source:sample_data,
            limit:10,
            templates:{
                suggestion:Handlebars.compile('<div class="row">' +
                    '<div class="col-md-12" style="padding-right:5px; padding-left:5px;">{{name}}</div>' +
                    '</div>')
            }
        });
    });
</script>

<script>
    $(document).ready(function(){
        var submitIcon = $('.searchbox-icon');
        var inputBox = $('.searchbox-input');
        var searchBox = $('.searchbox');
        var isOpen = false;
        submitIcon.click(function(){
            if(isOpen == false){
                searchBox.addClass('searchbox-open');
                inputBox.focus();
                isOpen = true;
            } else {
                searchBox.removeClass('searchbox-open');
                inputBox.focusout();
                isOpen = false;
            }
        });
        submitIcon.mouseup(function(){
            return false;
        });
        searchBox.mouseup(function(){
            return false;
        });
        $(document).mouseup(function(){
            if(isOpen == true){
                $('.searchbox-icon').css('display','block');
                submitIcon.click();
            }
        });
    });
    function buttonUp(){
        var inputVal = $('.searchbox-input').val();
        inputVal = $.trim(inputVal).length;
        if( inputVal !== 0){
            $('.searchbox-icon').css('display','none');
        } else {
            $('.searchbox-input').val('');
            $('.searchbox-icon').css('display','block');
        }
    }
</script>

<script>
    window.onload = function() {
        var input = document.getElementById("search_box").focus();
    }
</script>

<script>

    $(function(){

        $(".search-text").on("click",function(){
            $('i').hide();
        });

        //
        //$('.mostSearchedPropery [data-city]').sort();
        var city_list=$('.mostSearchedPropery [data-city]').parent();
        var city_items=city_list.children('[data-city]').get();
            city_items.sort(function(a,b){
                //return $(a).text().toUpperCase().localeCompare($(b).text().toUpperCase());
                return String.prototype.localeCompare.call($(a).data('city').toLowerCase(), $(b).data('city').toLowerCase());
            });
        //console.log(city_items);
        city_list.empty().append(city_items);
    });

</script>
