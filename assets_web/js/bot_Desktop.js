function letscheck(e){window.frames["overlay-iframe"].contentWindow.postMessage({call:"sendValue",value:e},"*")}function checkdevice(){var e,t={browser:null,machine:null,os:null,type:null},i=!1;e=navigator.userAgent||navigator.vendor||window.opera,(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(e)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(e.substr(0,4)))&&(i=!0),t.type=i?"Mobile":"Laptop";var a,n,o,s=(n=navigator.userAgent,o=n.match(/(opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*(\d+)/i)||[],/trident/i.test(o[1])?"Internet Explorer "+((a=/\brv[ :]+(\d+)/g.exec(n)||[])[1]||""):"Chrome"===o[1]&&null!==(a=n.match(/\b(OPR|Edge)\/(\d+)/))?a.slice(1).join(" ").replace("OPR","Opera"):(o=o[2]?[o[1],o[2]]:[navigator.appName,navigator.appVersion,"-?"],null!==(a=n.match(/version\/(\d+)/i))&&o.splice(1,1,a[1]),o.join(" ")));t.browser=s;var l=navigator.appVersion.indexOf("("),r=navigator.appVersion.indexOf(")"),c=(navigator.appVersion.substr(l+1,r-l-1),-1!=navigator.platform.indexOf("Win")?"Windows":-1!=navigator.platform.indexOf("Mac")?"MacOS":-1!=navigator.platform.indexOf("Linux")?-1!=navigator.appVersion.indexOf("Android")?"Linux Android":"Linux":-1!=navigator.platform.indexOf("iPhone")?"iPhone":-1!=navigator.platform.indexOf("iPad")?"iPad":"Unknown OS");return t.os=c,t}window.addEventListener("load",(function(){if(screen.width>991){var e=document.createElement("iframe");e.setAttribute("id","frame"),e.setAttribute("class","new-design-bot chatBot"),e.style.width="110px",e.style.height="110px",e.style.position="fixed",e.style.zIndex="100000",e.style.right=screen.width<=768||"Mobile"===checkdevice().type?"iPad"===checkdevice().os?"15px":"0":"15px",e.style.bottom=screen.width<=768||"Mobile"===checkdevice().type?"iPad"===checkdevice().os?"15px":"0":"-5px",e.style.border="none",e.style.visibility="hidden",e.style.opacity="1",e.addEventListener("load",(function(){e.style.visibility="visible"}));var t=document.getElementById("chat_bot_url").value,i='<!DOCTYPE html><html lang=en><head><meta charset=utf-8><meta http-equiv=X-UA-Compatible content="IE=edge"><meta name=viewport content="width=device-width,initial-scale=1"><link rel=icon href=/favicon.ico><title>Kalpataru</title><link href='+t+"css/app.bf47cc53.css rel=preload as=style><link href="+t+"css/chunk-vendors.7592fe7f.css rel=preload as=style><link href="+t+"js/app.6b4badcb.js rel=preload as=script><link href="+t+"js/chunk-vendors.5fdd22c0.js rel=preload as=script><link href="+t+"css/chunk-vendors.7592fe7f.css rel=stylesheet><link href="+t+"css/app.bf47cc53.css rel=stylesheet></head><body><noscript><strong>We're sorry but kalpataru doesn't work properly without JavaScript enabled. Please enable it to continue.</strong></noscript><div id=app></div><script src="+t+"js/chunk-vendors.5fdd22c0.js><\/script><script src="+t+"js/app.6b4badcb.js><\/script></body></html>";document.body.appendChild(e);var a=document.getElementById("frame").contentWindow.document;a.open(),a.write(i),a.close();var n=document.createElement("div");n.setAttribute("id","carousel-container"),n.setAttribute("class","carousel-container"),document.body.appendChild(n);var o=document.createElement("iframe");o.setAttribute("id","overlay-iframe"),o.sandbox="allow-forms allow-pointer-lock allow-popups allow-same-origin allow-scripts",o.style.height="100%",o.style.width="100%",o.style.border="none",o.style.backgroundColor="rgba(0,0,0,0.7)",o.style.display="none",o.style.visibility="hidden",o.style.position="fixed",o.style.top="0",o.style.zIndex="2147483647";var s=document.createElement("style");s.type="text/css";s.appendChild(document.createTextNode(".image-popup-animation{-webkit-animation: fade-in 0.6s ease-in-out;       -moz-animation: fade-in 0.6s ease-in-out;  -ms-animation: fade-in 0.6s ease-in-out;   -o-animation: fade-in 0.6s ease-in-out;   animation: fade-in 0.6s ease-in-out;}.image-closeup-animation{-webkit-animation: fade-out 0.6s ease-in-out;       -moz-animation: fade-out 0.6s ease-in-out;        -ms-animation: fade-out 0.6s ease-in-out;          -o-animation: fade-out 0.6s ease-in-out;            animation: fade-out 0.6s ease-in-out;}@keyframes fade-in{    0%{        opacity:0    }    100%{        opacity:1    }}@keyframes fade-out{    0%{        opacity:1    }    100%{        opacity:0    }}")),document.head.appendChild(s),document.body.appendChild(o);var l=document.getElementById("overlay-iframe").contentWindow.document;function r(){e.contentWindow.document.body||e.contentWindow.document.body.innerHTML?e.style.opacity="1":e.style.opacity="0",a.getElementById("chatbutton")&&a.getElementsByClassName("fab")[0].addEventListener("click",(function(){screen.width<=768||"Mobile"===checkdevice().type?"iPad"===checkdevice().os?"0"===window.getComputedStyle(a.getElementById("open")).getPropertyValue("opacity")?(e.style.width="110px",e.style.minHeight="50px",e.style.minWidth="50px",e.style.maxHeight="110px"):(e.style.height="calc(100% - 20px)",e.style.width="420px",e.style.minWidth="330px",e.style.maxHeight="750px",e.style.minHeight="600px"):"0"===window.getComputedStyle(a.getElementById("open")).getPropertyValue("opacity")?(e.style.height="110px",e.style.width="110px"):(e.style.height="100%",e.style.width="100%"):"0"===window.getComputedStyle(a.getElementById("open")).getPropertyValue("opacity")?(e.style.width="110px",e.style.minHeight="50px",e.style.minWidth="50px",e.style.maxHeight="110px"):(e.style.height="calc(100% - 20px)",e.style.width="420px",e.style.minWidth="330px",e.style.maxHeight="750px",e.style.minHeight="600px")}))}l.open(),l.write('<!DOCTYPE html><html lang="en" style="height:100%;width:100%;"><head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" /><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"><\/script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"><\/script><script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"><\/script><style>body{background-color: transparent;}.image-popup-animation{animation:animatezoom .6s}.image-closeup-animation{animation:zoom-out .6s}@keyframes animatezoom{from{transform:scale(0)}to{transform:scale(1)}} @keyframes zoom-out{from{transform:scale(1);} to{transform:scale(0);visibility: hidden;display: none;}} @media screen and (min-width: 992px) {.carousel-inner { width: 700px !important;} .zoomed_img { width: 700px !important; }} @media screen and  (min-width: 600px) and (max-width: 992px) { .carousel-inner { width: 500px !important; } .zoomed_img { width: 500px !important; }} @media screen and (min-width: 300px) and (max-width: 600px) { .carousel-inner { width: 350px !important; } .zoomed_img { width: 350px !important; }} .carousel-control-link:hover {color: #fff;text-decoration: none;} .carousel-control-link:not([href]):not([tabindex]), .carousel-control-link:not([href]):not([tabindex]):hover {color: #fff !important;} </style></head><body style="margin:0px;display:flex;flex-direction:column;height:100%; overflow: hidden;"><div style="align-self:flex-end;padding-right: 30px;height:50px;"><span class="fa fa-external-link carousel-control-link" style="font-size: 30px; cursor:  pointer;font-weight:900;"></span> &nbsp;<span style="color: #e7e7e7;font-size: 45px;cursor:  pointer;font-weight:900;" class="close-popup">&times;</span></div><div style="display:  flex;justify-content:  center;height: calc(100% - 50px);align-items:center;" id="image-popup"> <div><div id="propimages" class="carousel slide carousel-fade" data-ride="carousel"><ol class="carousel-indicators" id="carouselIndicDiv"></ol><div class="carousel-inner" id="carouselItemDiv"></div><a class="carousel-control-prev" href="#propimages" role="button" data-slide="prev"><span class="fa fa-chevron-circle-left fa-2x" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#propimages" role="button" data-slide="next"><span class="fa fa-chevron-circle-right fa-2x" aria-hidden="true"></span><span class="sr-only">Next</span></a></div></div><script type="text/javascript">window.addEventListener("message", function(event) { if (typeof event.data == "object" && event.data.call=="sendValue") { $(".carousel").carousel(event.data.value); }}, false);document.getElementsByClassName("close-popup")[0].addEventListener("click", function(params) {window.parent.postMessage("closeImage", "*");});document.getElementsByClassName("carousel-control-link")[0].addEventListener("click", function(params) {window.parent.postMessage("openinnewtab", "*");});<\/script></body></html>'),l.close(),setTimeout((function(){e.onload=function(){document.getElementById("frame").contentWindow.document;r()},r()}),500),window.addEventListener("resize",(function(){var t=document.getElementById("frame").contentWindow.document;t.getElementsByClassName("header-close")[0];screen.width<=768||"Mobile"===checkdevice().type?"iPad"===checkdevice().os?("1"===window.getComputedStyle(t.getElementById("open")).getPropertyValue("opacity")?(e.style.width="110px",e.style.minHeight="50px",e.style.minWidth="50px",e.style.maxHeight="110px",t.getElementsByClassName("fab")[0].style.display="flex"):(e.style.height="calc(100% - 20px)",e.style.minHeight="600px",e.style.minWidth="330px",e.style.maxHeight="750px",e.style.width="420px",t.getElementsByClassName("fab")[0].style.display="flex"),e.style.bottom="-5px",e.style.right="10px"):("1"===window.getComputedStyle(t.getElementById("open")).getPropertyValue("opacity")?(e.style.height="110px",e.style.height="110px",t.getElementsByClassName("fab")[0].style.display="flex"):(e.style.height="100%",e.style.width="100%",t.getElementsByClassName("fab")[0].style.display="flex"),e.style.bottom="0px",e.style.right="0px"):("1"===window.getComputedStyle(t.getElementById("open")).getPropertyValue("opacity")?(e.style.width="110px",e.style.minHeight="50px",e.style.minWidth="50px",e.style.maxHeight="110px",t.getElementsByClassName("fab")[0].style.display="flex"):(e.style.height="calc(100% - 20px)",e.style.minHeight="600px",e.style.minWidth="330px",e.style.maxHeight="750px",e.style.width="420px",t.getElementsByClassName("fab")[0].style.display="flex"),e.style.bottom="-5px",e.style.right="10px")})),window.addEventListener("message",(function(e){if("closeImage"==e.data){var t=document.getElementById("overlay-iframe").contentWindow.document;o.className="image-closeup-animation",setTimeout((function(){t.getElementById("carouselIndicDiv").innerHTML="",t.getElementById("carouselItemDiv").innerHTML="",o.style.display="none",o.style.visibility="hidden"}),500)}else if("openinnewtab"==e.data){t=document.getElementById("overlay-iframe").contentWindow.document;window.open(t.getElementById("carouselItemDiv").getElementsByClassName("active")[0].getElementsByClassName("zoomed_img")[0].src,"_blank")}else if(e.data&&function(e){try{JSON.parse(e)}catch(e){return!1}return!0}(e.data)){var i=JSON.parse(e.data);t=document.getElementById("overlay-iframe").contentWindow.document;if(i.type&&"carousel"===i.type){for(var a="",n="",s=0;s<i.activities[0].attachments.length;s++){var l,r;0===s?(l='<li data-target="#propimages" data-slide-to="'+s+'" class="active"></li>',r='                                 <div class="carousel-item active">                                 <img src="'+i.activities[0].attachments[s].content.images[0].url+'" class="d-block zoomed_img" alt="'+i.activities[0].attachments[s].content.text+'">                                 <div class="carousel-caption d-none d-md-block">'+i.activities[0].attachments[s].content.text+"</div>                                 </div>"):(l='<li data-target="#propimages" data-slide-to="'+s+'"></li>',r='                                     <div class="carousel-item">                                         <img src="'+i.activities[0].attachments[s].content.images[0].url+'" class="d-block zoomed_img" alt="'+i.activities[0].attachments[s].content.text+'">                                         <div class="carousel-caption d-none d-md-block">'+i.activities[0].attachments[s].content.text+"</div>                                     </div>"),a+=l,n+=r}t.getElementById("carouselIndicDiv").innerHTML=a,t.getElementById("carouselItemDiv").innerHTML=n,letscheck(i.index),window.setTimeout((function(){o.style.visibility="visible",o.style.display="block",o.className="image-popup-animation"}),250)}}}),!1)}}));