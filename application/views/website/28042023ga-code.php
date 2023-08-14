<?php $urll = $_SERVER['REQUEST_URI'];
$urlk.= $_SERVER['HTTP_HOST'];   
$urlk.= $_SERVER['REQUEST_URI'];    
$url_components = parse_url($urlk);
$urlm = $url_components['path'];
$tokens = explode('/', $urlm);
$cntm = count($tokens);
$thepath = $tokens[$cntm-1];





	if($this->config->item("env") == "production"){
   
?>	

        <!-- PageView Facebook Pixel Code -->
        <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                n.callMethod.apply(n,arguments):n.queue.push(arguments)};
                if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
                n.queue=[];t=b.createElement(e);t.async=!0;
                t.src=v;s=b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t,s)}(window, document,'script',
                'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '133558455601275');
            fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
                       src="https://www.facebook.com/tr?id=133558455601275&ev=PageView&noscript=1"
            /></noscript>
        <!-- End Facebook Pixel Code -->



<?php if($urll == '/mumbai/kalpataru-oceana' || $thepath == 'kalpataru-oceana'){ ?>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-240659316-1"></script>
<script>
 window.dataLayer = window.dataLayer || [];
 function gtag(){dataLayer.push(arguments);}
 gtag('js', new Date());
 gtag('config', 'UA-240659316-1');
</script>
<?php } ?>


<?php if($urll == '/noida/kalpataru-vista' || $thepath == 'kalpataru-vista'){ ?>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-240885040-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
   gtag('config', 'UA-240885040-1');
</script>
<?php } ?>
        



<?php if($urll == '/lonavala/amoda-reserve-south-park' || $thepath == 'amoda-reserve-south-park'){ ?>
<!-- Google tag (gtag.js) --> 
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-240969935-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-240969935-1');
</script>
<?php } ?>


<?php if($urll == '/mumbai/kalpataru-elegante' || $thepath == 'kalpataru-elegante'){ ?>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-240946085-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-240946085-1');
</script>
<?php } ?>




<?php if($urll == '/mumbai/kalpataru-vienta' || $thepath == 'kalpataru-vienta'){ ?>
<!-- Global site tag (gtag.js) - Google Analytics -->

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-240950285-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-240950285-1');
</script>
<?php } ?>



        

       
<script async src="https://www.googletagmanager.com/gtag/js?id=G-1P0FYHWGSY"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-1P0FYHWGSY');
</script>


<!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-40061160-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-40061160-1');
        </script>
<?php
	}
?>


<?php if($urll == '/mumbai/kalpataru-magnus' || $thepath == 'kalpataru-magnus'){ ?>
<!-- Global site tag (gtag.js) - Google Analytics -->

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-118974966-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-118974966-2');
</script>

<?php } ?>


<?php if($urll == '/raigad/kalpataru-aria' || $thepath == 'kalpataru-aria'){ ?>
<!-- Global site tag (gtag.js) - Google Analytics -->

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KXQR7C9');</script>
<!-- End Google Tag Manager -->
<?php } ?>


<?php if($urll == '/mumbai/kalpataru-imperia' || $thepath == 'kalpataru-imperia'){ ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PHCJFBJ');</script>
<!-- End Google Tag Manager -->

<?php } ?>


<?php if($urll == '/pune/kalpataru-jade-skyline' || $thepath == 'kalpataru-jade-skyline'){ ?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PHBF4CK');</script>
<!-- End Google Tag Manager -->



<!-- Google tag (gtag.js) -->

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-250498127-1"></script>

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
   gtag('config', 'UA-250498127-1');
</script>

<?php } ?>


<?php if($urll == '/mumbai/kalpataru-prive' || $thepath == 'kalpataru-prive'){ ?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MCFQWVD');</script>
<!-- End Google Tag Manager -->


<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '905299360620421');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=905299360620421&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->



<?php } ?>


<meta name="google-site-verification" content="V_5kXw9TDz33d1DYMOTmwvD1G074MFsrvpcn7aqV3Yg" />