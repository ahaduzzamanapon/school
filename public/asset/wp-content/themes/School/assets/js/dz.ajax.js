function contactForm(){var e;window.verifyRecaptchaCallback=function(e){jQuery("input[data-recaptcha]").val(e).trigger("change")},window.expiredRecaptchaCallback=function(){jQuery("input[data-recaptcha]").val("").trigger("change")},jQuery(".dzForm").submit((function(t){t.preventDefault(),jQuery(".dzFormMsg").html('<div class="gen alert alert-success">Submitting..</div>');var r=jQuery(this).attr("action"),s=jQuery(this).serialize();$.ajax({method:"POST",url:r,data:s,dataType:"json",success:function(t){1==t.status&&(e='<div class="gen alert alert-success">'+t.msg+"</div>"),0==t.status&&(e='<div class="err alert alert-danger">'+t.msg+"</div>"),jQuery(".dzFormMsg").html(e),jQuery(".dzForm")[0].reset(),grecaptcha.reset()}})})),setInterval((function(){jQuery(".dzFormMsg .alert").hide(1e3)}),1e4),jQuery(".dzSubscribe").submit((function(t){t.preventDefault();var r=jQuery(this).attr("action"),s=jQuery(this).serialize();$.ajax({method:"POST",url:r,data:s,dataType:"json",success:function(t){1==t.status&&(e='<p style="color: #34A853">'+t.msg+"</p>"),0==t.status&&(e='<p style="color: #EA4335">'+t.msg+"</p>"),jQuery(".dzSubscribeMsg").html(e),jQuery(".dzSubscribe")[0].reset()}})})),setInterval((function(){jQuery(".dzSubscribeMsg p").hide(1e3)}),5e3)}function init_map(){var e={zoom:10,center:new google.maps.LatLng(51.5073509,-.12775829999998223),mapTypeId:google.maps.MapTypeId.ROADMAP,styles:[{featureType:"all",elementType:"labels.text.fill",stylers:[{saturation:36},{color:"#000000"},{lightness:40}]},{featureType:"all",elementType:"labels.text.stroke",stylers:[{visibility:"on"},{color:"#000000"},{lightness:16}]},{featureType:"all",elementType:"labels.icon",stylers:[{visibility:"off"}]},{featureType:"administrative",elementType:"geometry.fill",stylers:[{color:"#000000"},{lightness:20}]},{featureType:"administrative",elementType:"geometry.stroke",stylers:[{color:"#000000"},{lightness:17},{weight:1.2}]},{featureType:"landscape",elementType:"geometry",stylers:[{color:"#000000"},{lightness:20}]},{featureType:"poi",elementType:"geometry",stylers:[{color:"#000000"},{lightness:21}]},{featureType:"road.highway",elementType:"geometry.fill",stylers:[{color:"#000000"},{lightness:17}]},{featureType:"road.highway",elementType:"geometry.stroke",stylers:[{color:"#000000"},{lightness:29},{weight:.2}]},{featureType:"road.arterial",elementType:"geometry",stylers:[{color:"#000000"},{lightness:18}]},{featureType:"road.local",elementType:"geometry",stylers:[{color:"#000000"},{lightness:16}]},{featureType:"transit",elementType:"geometry",stylers:[{color:"#000000"},{lightness:19}]},{featureType:"water",elementType:"geometry",stylers:[{color:"#000000"},{lightness:17}]}]},t=new google.maps.Map(document.getElementById("gmap_canvas"),e);marker=new google.maps.Marker({map:t,position:new google.maps.LatLng(51.5073509,-.12775829999998223)}),infowindow=new google.maps.InfoWindow({content:"<strong>Title</strong><br>London, United Kingdom<br>"}),google.maps.event.addListener(marker,"click",(function(){infowindow.open(t,marker)}))}jQuery("#gmap_canvas").length>1&&google.maps.event.addDomListener(window,"load",init_map),jQuery(document).ready((function(){"use strict";contactForm()}));