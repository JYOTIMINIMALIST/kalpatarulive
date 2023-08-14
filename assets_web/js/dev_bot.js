function letscheck(index) {
  var frame = window.frames['overlay-iframe'];
  frame.contentWindow.postMessage({ call: 'sendValue', value: index }, '*');
}
function checkdevice() {
  /* eslint-disable */
  var devicedetails = {
    browser: null,
    machine: null,
    os: null,
    type: null
  };

  var check = false;
  (function (a) {
    if (
      /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(
        a
      ) ||
      /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(
        a.substr(0, 4)
      )
    )
      check = true;
  })(navigator.userAgent || navigator.vendor || window.opera);
  if (check) {
    devicedetails.type = 'Mobile';
  } else {
    devicedetails.type = 'Laptop';
  }
  var sayswho = (function () {
    var ua = navigator.userAgent,
      tem,
      M =
        ua.match(
          /(opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*(\d+)/i
        ) || [];
    if (/trident/i.test(M[1])) {
      tem = /\brv[ :]+(\d+)/g.exec(ua) || [];
      return 'Internet Explorer ' + (tem[1] || '');
    }
    if (M[1] === 'Chrome') {
      tem = ua.match(/\b(OPR|Edge)\/(\d+)/);
      if (tem !== null)
        return tem
          .slice(1)
          .join(' ')
          .replace('OPR', 'Opera');
    }
    M = M[2] ? [M[1], M[2]] : [navigator.appName, navigator.appVersion, '-?'];
    if ((tem = ua.match(/version\/(\d+)/i)) !== null) M.splice(1, 1, tem[1]);
    return M.join(' ');
  })();

  devicedetails.browser = sayswho;

  var initbrac = navigator.appVersion.indexOf('(');
  var endbrac = navigator.appVersion.indexOf(')');
  var simulationdevicedetails = navigator.appVersion.substr(
    initbrac + 1,
    endbrac - initbrac - 1
  );
  var platformName = (function () {
    if (navigator.platform.indexOf('Win') != -1) {
      return 'Windows';
    } else if (navigator.platform.indexOf('Mac') != -1) {
      return 'MacOS';
    } else if (navigator.platform.indexOf('Linux') != -1) {
      if (navigator.appVersion.indexOf('Android') != -1) {
        return 'Linux Android';
      } else {
        return 'Linux';
      }
    } else if (navigator.platform.indexOf('iPhone') != -1) {
      return 'iPhone';
    } else if (navigator.platform.indexOf('iPad') != -1) {
      return 'iPad';
    } else {
      return 'Unknown OS';
    }
  })();

  devicedetails.os = platformName;

  return devicedetails;
}
window.addEventListener('load', function () {
  var ifrm = document.createElement('iframe');
  ifrm.setAttribute('id', 'frame');
  ifrm.setAttribute('class', 'new-design-bot chatBot');
  ifrm.style.width = '110px';
  ifrm.style.height = '110px';
  ifrm.style.position = 'fixed';
  ifrm.style.zIndex = '100000';
  ifrm.style.right =
    screen.width <= 768 || checkdevice().type === 'Mobile'
      ? checkdevice().os === 'iPad'
        ? '15px'
        : '0'
      : '15px';
  ifrm.style.bottom =
    screen.width <= 768 || checkdevice().type === 'Mobile'
      ? checkdevice().os === 'iPad'
        ? '15px'
        : '0'
      : '-5px';
  ifrm.style.border = 'none';
  ifrm.style.visibility = 'hidden';
  ifrm.style.opacity = '1';
  ifrm.addEventListener('load', function () {
    ifrm.style.visibility = 'visible';
  });

  var chatbot_url = document.getElementById('chat_bot_url').value;

  var html = '<!DOCTYPE html><html lang=en><head><meta charset=utf-8><meta http-equiv=X-UA-Compatible content="IE=edge"><meta name=viewport content="width=device-width,initial-scale=1"><link rel=icon href=/favicon.ico><title>Kalpataru</title><link href='+chatbot_url+'css/app.645d605b.css rel=preload as=style><link href='+chatbot_url+'css/chunk-vendors.7b2e5081.css rel=preload as=style><link href='+chatbot_url+'js/app.d4bff1a1.js rel=preload as=script><link href='+chatbot_url+'js/chunk-vendors.f86ddddd.js rel=preload as=script><link href='+chatbot_url+'css/chunk-vendors.7b2e5081.css rel=stylesheet><link href='+chatbot_url+'css/app.645d605b.css rel=stylesheet></head><body><noscript><strong>We\'re sorry but kalpataru doesn\'t work properly without JavaScript enabled. Please enable it to continue.</strong></noscript><div id=app></div><script src='+chatbot_url+'js/chunk-vendors.f86ddddd.js></script><script src='+chatbot_url+'js/app.d4bff1a1.js></script></body></html>'
  document.body.appendChild(ifrm);

  var element = document.getElementById('frame').contentWindow.document;
  element.open();
  element.write(html);
  element.close();

  var bot_wrapper = document.createElement('div');
  bot_wrapper.setAttribute('id', 'carousel-container');
  bot_wrapper.setAttribute('class', 'carousel-container');

  document.body.appendChild(bot_wrapper);

  var overlayIframe = document.createElement('iframe');
  overlayIframe.setAttribute('id', 'overlay-iframe');
  overlayIframe.sandbox =
    'allow-forms allow-pointer-lock allow-popups allow-same-origin allow-scripts';
  overlayIframe.style.height = '100%';
  overlayIframe.style.width = '100%';
  overlayIframe.style.border = 'none';
  overlayIframe.style.backgroundColor = 'rgba(0,0,0,0.7)';
  overlayIframe.style.display = 'none';
  overlayIframe.style.visibility = 'hidden';
  overlayIframe.style.position = 'fixed';
  overlayIframe.style.top = '0';
  overlayIframe.style.zIndex = '2147483647';
  var iframeOverlayStyle = document.createElement('style');
  iframeOverlayStyle.type = 'text/css';
  var iframeOverlayStyleContent =
    ".image-popup-animation{-webkit-animation: fade-in 0.6s ease-in-out;-moz-animation: fade-in 0.6s ease-in-out;  -ms-animation: fade-in 0.6s ease-in-out;   -o-animation: fade-in 0.6s ease-in-out;   animation: fade-in 0.6s ease-in-out;}.image-closeup-animation{-webkit-animation: fade-out 0.6s ease-in-out;       -moz-animation: fade-out 0.6s ease-in-out;        -ms-animation: fade-out 0.6s ease-in-out;          -o-animation: fade-out 0.6s ease-in-out;            animation: fade-out 0.6s ease-in-out;}@keyframes fade-in{    0%{        opacity:0    }    100%{        opacity:1    }}@keyframes fade-out{    0%{        opacity:1    }    100%{        opacity:0    }} .fa-chevron-circle-left:before{ color:black !important;} .fa-chevron-circle-right:before{ color:black !important;}";

  var overlayIframeHTML =
    '<!DOCTYPE html><html lang="en" style="height:100%;width:100%;"><head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" /><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script><script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script><style>body{background-color: transparent;}.image-popup-animation{animation:animatezoom .6s}.image-closeup-animation{animation:zoom-out .6s}@keyframes animatezoom{from{transform:scale(0)}to{transform:scale(1)}} @keyframes zoom-out{from{transform:scale(1);} to{transform:scale(0);visibility: hidden;display: none;}} @media screen and (min-width: 992px) { .carousel-inner { width: 700px !important;} .zoomed_img { width: 700px !important; }} @media screen and  (min-width: 600px) and (max-width: 992px) { .carousel-inner { width: 500px !important; } .zoomed_img { width: 500px !important; }} @media screen and (min-width: 300px) and (max-width: 600px) { .carousel-inner { width: 350px !important; } .zoomed_img { width: 350px !important; }} .carousel-control-link:hover {color: #fff;text-decoration: none;} .carousel-control-link:not([href]):not([tabindex]), .carousel-control-link:not([href]):not([tabindex]):hover {color: #fff !important;}.image-popup-animation{-webkit-animation: fade-in 0.6s ease-in-out;-moz-animation: fade-in 0.6s ease-in-out;  -ms-animation: fade-in 0.6s ease-in-out;   -o-animation: fade-in 0.6s ease-in-out;   animation: fade-in 0.6s ease-in-out;}.image-closeup-animation{-webkit-animation: fade-out 0.6s ease-in-out;       -moz-animation: fade-out 0.6s ease-in-out;        -ms-animation: fade-out 0.6s ease-in-out;          -o-animation: fade-out 0.6s ease-in-out;            animation: fade-out 0.6s ease-in-out;}@keyframes fade-in{    0%{        opacity:0    }    100%{        opacity:1    }}@keyframes fade-out{    0%{        opacity:1    }    100%{        opacity:0    }} .fa-chevron-circle-left:before{ color:black !important;} .fa-chevron-circle-right:before{ color:black !important;} </style></head><body style="margin:0px;display:flex;flex-direction:column;height:100%; overflow: hidden;"><div style="align-self:flex-end;padding-right: 30px;height:50px;"><span class="fa fa-external-link carousel-control-link" style="font-size: 30px; cursor:  pointer;font-weight:900;"></span> &nbsp;<span style="color: #e7e7e7;font-size: 45px;cursor:  pointer;font-weight:900;" class="close-popup">&times;</span></div><div style="display:  flex;justify-content:  center;height: calc(100% - 50px);align-items:center;" id="image-popup"> <div><div id="propimages" class="carousel slide carousel-fade" data-ride="carousel"><ol class="carousel-indicators" id="carouselIndicDiv"></ol><div class="carousel-inner" id="carouselItemDiv"></div><a class="carousel-control-prev" href="#propimages" role="button" data-slide="prev"><span class="fa fa-chevron-circle-left fa-2x"  aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#propimages" role="button" data-slide="next"><span class="fa fa-chevron-circle-right fa-2x"  aria-hidden="true"></span><span class="sr-only">Next</span></a></div></div><script type="text/javascript">window.addEventListener("message", function(event) { if (typeof event.data == "object" && event.data.call=="sendValue") { $(".carousel").carousel(event.data.value); }}, false);document.getElementsByClassName("close-popup")[0].addEventListener("click", function(params) {window.parent.postMessage("closeImage", "*");});document.getElementsByClassName("carousel-control-link")[0].addEventListener("click", function(params) {window.parent.postMessage("openinnewtab", "*");});</script></body></html>';

  iframeOverlayStyle.appendChild(
    document.createTextNode(iframeOverlayStyleContent)
  );
  document.head.appendChild(iframeOverlayStyle);
  document.body.appendChild(overlayIframe);
  var overlayIframeElement = document.getElementById('overlay-iframe')
    .contentWindow.document;
  overlayIframeElement.open();
  overlayIframeElement.write(overlayIframeHTML);
  overlayIframeElement.close();

  function loadIframeData() {
    if (
      ifrm.contentWindow.document.body ||
      ifrm.contentWindow.document.body.innerHTML
    ) {
      ifrm.style.opacity = '1';
    } else {
      ifrm.style.opacity = '0';
    }

    if (element.getElementById('chatbutton')) {
      element
        .getElementsByClassName('fab')[0]
        .addEventListener('click', function () {
          if (screen.width <= 768 || checkdevice().type === 'Mobile') {
            if (checkdevice().os === 'iPad') {
              if (
                window
                  .getComputedStyle(element.getElementById('open'))
                  .getPropertyValue('opacity') === '0'
              ) {
                ifrm.style.width = '110px';
                ifrm.style.minHeight = '50px';
                ifrm.style.minWidth = '50px';
                ifrm.style.maxHeight = '110px';
              } else {
                ifrm.style.height = 'calc(100% - 20px)';
                ifrm.style.width = '420px';
                ifrm.style.minWidth = '330px';
                ifrm.style.maxHeight = '750px';
                ifrm.style.minHeight = '600px';
              }
            } else {
              if (
                window
                  .getComputedStyle(element.getElementById('open'))
                  .getPropertyValue('opacity') === '0'
              ) {
                ifrm.style.height = '110px';
                ifrm.style.width = '110px';
              } else {
                ifrm.style.height = '100%';
                ifrm.style.width = '100%';
              }
            }
          } else {
            if (
              window
                .getComputedStyle(element.getElementById('open'))
                .getPropertyValue('opacity') === '0'
            ) {
              ifrm.style.width = '110px';
              ifrm.style.minHeight = '50px';
              ifrm.style.minWidth = '50px';
              ifrm.style.maxHeight = '110px';
            } else {
              ifrm.style.height = 'calc(100% - 20px)';
              ifrm.style.width = '420px';
              ifrm.style.minWidth = '330px';
              ifrm.style.maxHeight = '750px';
              ifrm.style.minHeight = '600px';
            }
          }
        });
    }
  }

  setTimeout(function () {
    ifrm.onload = function () {
      var element = document.getElementById('frame').contentWindow.document;
      loadIframeData();
    };
    loadIframeData();
  }, 500);

  window.addEventListener('resize', function () {
    var element = document.getElementById('frame').contentWindow.document;
    var headerclose = element.getElementsByClassName('header-close')[0];
    if (screen.width <= 768 || checkdevice().type === 'Mobile') {
      if (checkdevice().os === 'iPad') {
        if (
          window
            .getComputedStyle(element.getElementById('open'))
            .getPropertyValue('opacity') === '1'
        ) {
          ifrm.style.width = '110px';
          ifrm.style.minHeight = '50px';
          ifrm.style.minWidth = '50px';
          ifrm.style.maxHeight = '110px';
          element.getElementsByClassName('fab')[0].style.display = 'flex';
        } else {
          ifrm.style.height = 'calc(100% - 20px)';
          ifrm.style.minHeight = '600px';
          ifrm.style.minWidth = '330px';
          ifrm.style.maxHeight = '750px';
          ifrm.style.width = '420px';
          element.getElementsByClassName('fab')[0].style.display = 'flex';
        }
        ifrm.style.bottom = '-5px';
        ifrm.style.right = '10px';
      } else {
        if (
          window
            .getComputedStyle(element.getElementById('open'))
            .getPropertyValue('opacity') === '1'
        ) {
          ifrm.style.height = '110px';
          ifrm.style.height = '110px';
          element.getElementsByClassName('fab')[0].style.display = 'flex';
        } else {
          ifrm.style.height = '100%';
          ifrm.style.width = '100%';
          element.getElementsByClassName('fab')[0].style.display = 'flex';
        }
        ifrm.style.bottom = '0px';
        ifrm.style.right = '0px';
      }
    } else {
      if (
        window
          .getComputedStyle(element.getElementById('open'))
          .getPropertyValue('opacity') === '1'
      ) {
        ifrm.style.width = '110px';
        ifrm.style.minHeight = '50px';
        ifrm.style.minWidth = '50px';
        ifrm.style.maxHeight = '110px';
        element.getElementsByClassName('fab')[0].style.display = 'flex';
      } else {
        ifrm.style.height = 'calc(100% - 20px)';
        ifrm.style.minHeight = '600px';
        ifrm.style.minWidth = '330px';
        ifrm.style.maxHeight = '750px';
        ifrm.style.width = '420px';
        element.getElementsByClassName('fab')[0].style.display = 'flex';
      }
      ifrm.style.bottom = '-5px';
      ifrm.style.right = '10px';
    }
  });

  function isValidJSON(payload) {
    try {
      JSON.parse(payload);
    } catch (e) {
      return false;
    }
    return true;
  }

  window.addEventListener(
    'message',
    function (data) {
      if (data.data == 'closeImage') {
        var overlayIframeContent = document.getElementById('overlay-iframe')
          .contentWindow.document;
        overlayIframe.className = 'image-closeup-animation';
        setTimeout(function () {
          overlayIframeContent.getElementById('carouselIndicDiv').innerHTML =
            '';
          overlayIframeContent.getElementById('carouselItemDiv').innerHTML = '';
          overlayIframe.style.display = 'none';
          overlayIframe.style.visibility = 'hidden';
        }, 500);
      }
      else if (data.data == 'closeurl') {
        var ifrm2 = document.getElementById('hello');
        ifrm2.style.display = 'none';
        ifrm2.style.visibility = 'hidden';

        ifrm2.parentNode.removeChild(ifrm2);
      }

      else if (data.data == 'openinnewtab') {
        var overlayIframeContent = document.getElementById('overlay-iframe')
          .contentWindow.document;
        window.open(
          overlayIframeContent
            .getElementById('carouselItemDiv')
            .getElementsByClassName('active')[0]
            .getElementsByClassName('zoomed_img')[0].src,
          '_blank'
        );
      } else {
        if (data.data) {
          if (isValidJSON(data.data)) {
            var payload = JSON.parse(data.data);
            var overlayIframeContent = document.getElementById('overlay-iframe')
              .contentWindow.document;
            if (payload.type && payload.type === 'carousel') {
              var istring = '',
                carostring = '';
              for (
                var index = 0;
                index < payload.activities[0].attachments.length;
                index++
              ) {
                var indicatorLine, carouselItem;
                if (index === 0) {
                  indicatorLine =
                    '<li data-target="#propimages" data-slide-to="' +
                    index +
                    '" class="active"></li>';
                  carouselItem =
                    ' \
                                <div class="carousel-item active"> \
                                <img src="' +
                    payload.activities[0].attachments[index].content.images[0]
                      .url +
                    '" class="d-block zoomed_img" alt="' +
                    payload.activities[0].attachments[index].content.text +
                    '"> \
                                <div class="carousel-caption d-none d-md-block">' +
                    payload.activities[0].attachments[index].content.text +
                    '</div> \
                                </div>';
                } else {
                  indicatorLine =
                    '<li data-target="#propimages" data-slide-to="' +
                    index +
                    '"></li>';
                  carouselItem =
                    ' \
                                    <div class="carousel-item"> \
                                        <img src="' +
                    payload.activities[0].attachments[index].content.images[0]
                      .url +
                    '" class="d-block zoomed_img" alt="' +
                    payload.activities[0].attachments[index].content.text +
                    '"> \
                                        <div class="carousel-caption d-none d-md-block">' +
                    payload.activities[0].attachments[index].content.text +
                    '</div> \
                                    </div>';
                }
                istring += indicatorLine;
                carostring += carouselItem;
              }
              overlayIframeContent.getElementById(
                'carouselIndicDiv'
              ).innerHTML = istring;
              overlayIframeContent.getElementById(
                'carouselItemDiv'
              ).innerHTML = carostring;
              letscheck(payload.index);
              window.setTimeout(function () {
                overlayIframe.style.visibility = 'visible';
                overlayIframe.style.display = 'block';
                overlayIframe.className = 'image-popup-animation';
              }, 250);
            }
          }
        }
        if (payload.type && payload.type == "htmlurl") {
          console.log("hello1", payload);
          var ifrm = undefined;
          var ifrm = document.createElement("iframe");
          ifrm.setAttribute("id", "hello");
          ifrm.style.height = '100%';
          ifrm.style.width = '100%';
          ifrm.style.border = 'none';
          ifrm.style.backgroundColor = 'rgba(0,0,0,0.7)';
          ifrm.style.display = 'block';
          ifrm.style.visibility = 'visible';
          ifrm.style.position = 'fixed';
          ifrm.style.top = '0';
          ifrm.style.zIndex = '2147483648';


          var html1 = "<!DOCTYPE html><html lang=en><head><script>function callUrl(){window.parent.postMessage('closeurl', '*');}</script></head><body><div onclick='callUrl()' style='position:fixed;display:block;font-size:30px;font-weight:600;top: 11px;color: white;right:10px;font-family: sans-serif;z-index:9999999;cursor:pointer;'>X</div><iframe id='siteurl' src=" + payload.text + " style='height: 36pc;border:none; padding: 21px;width: 96%;' ></iframe></body></html>"



          var iframeOverlayStyle1 = document.createElement('style');
          iframeOverlayStyle1.type = 'text/css';




          document.body.appendChild(ifrm);
          var over = document.getElementById('hello')
            .contentWindow.document;
          over.open();
          over.write(html1);
          over.close();



        }
      }
    },
    false
  );
});
