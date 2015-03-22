!function($){"use strict";function t(t,e,i,o,n){var a={url:spuvar.ajax_url,data:t,cache:!1,type:"POST",dataType:"json",timeout:3e4},n=n||!1,i=i||!1,o=o||!1;e&&(a.url=e),i&&(a.success=i),o&&(a.error=o),n&&(a.dataType=n),$.ajax(a)}function e(t,e,i){if(i){var o=new Date;o.setTime(o.getTime()+24*i*60*60*1e3);var n="; expires="+o.toGMTString()}else var n="";document.cookie=t+"="+e+n+"; path=/"}function i(t){for(var e=t+"=",i=document.cookie.split(";"),o=0;o<i.length;o++){for(var n=i[o];" "==n.charAt(0);)n=n.substring(1,n.length);if(0==n.indexOf(e))return n.substring(e.length,n.length)}return null}function o(){FB.Event.subscribe("edge.create",function(t,e){var i=$(e).parents(".spu-box").data("box-id");i&&SPU.hide(i)}),p=!0,clearInterval(l)}function n(t){var e=$(t.target).parents(".spu-box").data("box-id");e&&SPU.hide(e)}function a(t){if("on"==t.state){var e=jQuery(".spu-gogl").data("box-id");e&&SPU.hide(e)}}function r(t){if("confirm"==t.type){var e=jQuery(".spu-gogl").data("box-id");e&&SPU.hide(e)}}function s(){if(spuvar_social.facebook)try{FB.XFBML.parse()}catch(t){}spuvar_social.google&&gapi.plusone.go(),spuvar_social.twitter&&twttr.widgets.load()}var d=function(){function o(t){var e=d[t],i=$(window).width(),o=$(window).height(),n=e.outerHeight(),a=e.outerWidth(),r=e.data("width"),s=0,u=o/2-n/2,c="fixed",f=$(document).scrollTop();e.hasClass("spu-centered")&&(i>r&&(s=i/2-a/2),e.css({left:s,position:c,top:u})),n+50>o&&(c="absolute",u=f,e.css({position:c,top:u,bottom:"auto"}))}function n(t){var e=$(t).find(".spu-facebook");if(e.length){var i=e.find(".fb-like > span").width();if(0==i){var o=e.find(".fb-like").data("layout");e.append("box_count"==o?'<style type="text/css"> #'+$(t).attr("id")+" .fb-like iframe, #"+$(t).attr("id")+" .fb_iframe_widget span, #"+$(t).attr("id")+" .fb_iframe_widget{ height: 63px !important;width: 80px !important;}</style>":'<style type="text/css"> #'+$(t).attr("id")+" .fb-like iframe, #"+$(t).attr("id")+" .fb_iframe_widget span, #"+$(t).attr("id")+" .fb_iframe_widget{ height: 20px !important;width: 80px !important;}</style>")}}}function a(t,i){var n=d[t],a=$("#spu-bg-"+t),r=n.data("bgopa");if(n.is(":animated"))return!1;if(i===!0&&n.is(":visible")||i===!1&&n.is(":hidden"))return!1;if(i===!1){var s=parseInt(n.data("cookie"));s>0&&e("spu_box_"+t,!0,s)}else $(window).resize(function(){o(t)}),o(t);var u=n.data("spuanimation");return"fade"===u?n.fadeToggle("slow"):n.slideToggle("slow"),i===!0&&r>0?a.fadeIn():a.fadeOut(),i}var r=$(window).height(),s=spuvar.is_admin,d=[];return $(".spu-content").children().first().css({"margin-top":0,"padding-top":0}).end().last().css({"margin-bottom":0,"padding-bottom":0}),$(".spu-box").each(function(){spuvar.safe_mode&&$(this).prependTo("body");var e=$(this),o=e.data("trigger"),u=0,c=1===parseInt(e.data("test-mode")),f=e.data("box-id"),p=1===parseInt(e.data("auto-hide")),l=parseInt(e.data("seconds-close")),h=parseInt(e.data("trigger-number"),10),g="percentage"==o?parseInt(e.data("trigger-number"),10)/100:.8,w=g*$(document).height();n(e),$(".spu-google").width($(".spu-google").width()-20),$(".spu-twitter").width($(".spu-twitter ").width()-50);var m=0,v=0,b=e.outerWidth(),y=e.find(".spu-content").width(),_=e.data("total");$(".spu-shortcode").wrapAll('<div class="spu_shortcodes"/>'),_&&!spuvar.disable_style&&$(window).width()>b&&($(this).find(".spu-shortcode").each(function(){m+=$(this).width()}),v=y-m-_),v>0&&($(this).find(".spu-shortcode").each(function(){$(this).css("margin-left",v/2)}),2==_?$(this).find(".spu-shortcode").last().css("margin-left",0):3==_&&$(this).find(".spu-shortcode").first().css("margin-left",0)),$(document).keyup(function(t){27==t.keyCode&&a(f,!1)});var x=navigator.userAgent,T=x.match(/iPad/i)||x.match(/iPhone/i)?"touchstart":"click";$("body").on(T,function(t){void 0!==t.originalEvent&&a(f,!1)}),$("body").on(T,".spu-box",function(t){t.stopPropagation()}),e.hide().css("left",""),d[f]=e;var k=function(){u&&clearTimeout(u),u=window.setTimeout(function(){var t=$(window).scrollTop(),e=t+r>=w;e?(p||$(window).unbind("scroll",k),a(f,!0)):a(f,!1)},100)},P=function(){u&&clearTimeout(u),u=window.setTimeout(function(){a(f,!0)},1e3*h)},j=i("spu_box_"+f);if((void 0==j||""==j||s&&c)&&("seconds"==o?P():($(window).bind("scroll",k),k()),window.location.hash&&window.location.hash.length>0)){var I=window.location.hash,S;I.substring(1)===e.attr("id")&&setTimeout(function(){a(f,!0)},100)}e.find(".spu-close-popup").click(function(){a(f,!1),"percentage"==o&&$(window).unbind("scroll",k)}),$('a[href="#'+e.attr("id")+'"]').click(function(){return a(f,!0),!1}),e.find(".gform_wrapper form").addClass("gravity-form"),e.on("submit",'form:not(".wpcf7-form, .gravity-form")',function(e){e.preventDefault(),track(f,!0);var i=!0,o=$(this),n=o.serialize(),r=o.attr("action"),s=function(t,e,i){console.log("Spu Form error: "+e+" - "+i)},d=function(t){var e=$(t).filter("#spu-"+f).html();$("#spu-"+f).html(e),$("#spu-"+f).find(".mc4wp-form-error").length||setTimeout(function(){a(f,!1)},1e3*spuvar.seconds_confirmation_close)};return t(n,r,d,s,"html"),i}),$("body").on("mailsent.wpcf7",function(){a(f,!1)}),$(document).on("gform_confirmation_loaded",function(){a(f,!1)})}),{show:function(t){return a(t,!0)},hide:function(t){return a(t,!1)},request:function(e,i,o,n){return t(e,i,o,n)}}};if(spuvar.ajax_mode){var u={pid:spuvar.pid,referrer:document.referrer},c=function(t){$("body").append(t),s(),window.SPU=d()},f=function(t,e,i){console.log("Problem loading popups - error: "+e+" - "+i)};t(u,spuvar.ajax_mode_url,c,f,"html")}else jQuery(window).load(function(){window.SPU=d()});var p=!1,l=setInterval(function(){"undefined"==typeof FB||p||o()},1e3);"undefined"!=typeof twttr&&twttr.ready(function(t){t.events.bind("tweet",n),t.events.bind("follow",n)})}(jQuery);