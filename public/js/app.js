var pageLoadFunctions=function(){$(window).scroll(function(){$(this).scrollTop()>=50?$("#more").css({visibility:"hidden"}):$("#more").css({visibility:"visible"})}),$("#more").click(function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var t=$(this.hash);if(t=t.length?t:$("[name="+this.hash.slice(1)+"]"),t.length)return $("html,body").animate({scrollTop:t.offset().top},800),!1}})};pageLoadFunctions(),$(function(){"use strict";var t=$("#smooth"),o={debug:!1,blacklist:".no-smoothState",prefetch:!0,cacheLength:2,onStart:{duration:750,render:function(t){t.addClass("is-exiting"),i.restartCSSAnimations()}},onReady:{duration:0,render:function(t,o){t.removeClass("is-exiting"),t.html(o)}},onAfter:pageLoadFunctions},i=t.smoothState(o).data("smoothState")});