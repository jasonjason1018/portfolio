"use strict";function _classCallCheck(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}function _defineProperties(e,t){for(var o=0;o<t.length;o++){var i=t[o];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}function _createClass(e,t,o){return t&&_defineProperties(e.prototype,t),o&&_defineProperties(e,o),e}var tag=document.createElement("script");tag.src="https://www.youtube.com/iframe_api";var player,firstScriptTag=document.getElementsByTagName("script")[0];function onYouTubeIframeAPIReady(){player=new YT.Player("player",{height:"100%",width:"100%",videoId:"5sw6nQSvTPY",playerVars:{autoplay:0,controls:1,showinfo:0,modestbranding:0,loop:1,autohide:0,rel:0}})}firstScriptTag.parentNode.insertBefore(tag,firstScriptTag);var LightBox=function(){function e(){_classCallCheck(this,e),$(".lightBox__container").css("opacity",0)}return _createClass(e,[{key:"open",value:function(e){$(".lightBox").fadeIn(300),player&&setTimeout(function(){player.loadVideoById(e,0,"default"),$(".lightBox__container").css("opacity",1)},200)}},{key:"close",value:function(){$(".lightBox").fadeOut(300),$(".lightBox__container").css("opacity",0),player&&setTimeout(function(){player.stopVideo()},200)}}]),e}(),lightBox=new LightBox;$(".video__player").on("click",function(){var e=$(this).attr("data-id");lightBox.open(e)}),$(".lightBox__close").on("click",function(){lightBox.close()});var indexScrollTop=$(window).scrollTop(),windowH=.7*$(window).height();windowH<indexScrollTop&&$(".menu__item").eq(1).addClass("menu__item--active"),$(window).scroll(function(){$(this).scrollTop()>windowH?$(".menu__item").eq(1).addClass("menu__item--active"):$(".menu__item").eq(1).removeClass("menu__item--active")});