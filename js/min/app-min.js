"use strict";$(document).ready(function(){var o="500",t="swing";$(".main-navigation a, .hero a").on("click",function(o){o.preventDefault(),$("html, body").animate({scrollTop:$($.attr(this,"href")).offset().top},"500","swing")}),$("#scroll-to-top").click(function(){$("html, body").animate({scrollTop:0},"500","swing")}),$(".carousel").slick({autoplay:!0,infinite:!0,arrows:!1,speed:1e3,pauseOnHover:!1})});