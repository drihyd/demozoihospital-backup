var scrollToID=function(i){return $("html, body, .main-body").animate({scrollTop:$("#"+i).offset().top-15},500),!1};function init_gallery(){$(".gallery a").simpleLightbox()}$(".delete-confirm").click(function(){var i=$(this).attr("href");if(1!=confirm("Are you sure you want to delete this item?"))return!1;window.location(i)});var doctor_grid_adjust=function(){if($("#mqCheck-991").is(":visible")){$(".doctors-grid .item .wrapper").css("height","auto");var i=[];$(".doctors-grid .item .wrapper").each(function(){var e=$(this).outerHeight();i.push(e)});var e=(i=i.sort(function(i,e){return e-i}))[0];$(".doctors-grid .item .wrapper").css("height",e+"px")}else $(".doctors-grid .item .wrapper").css("height","auto")},updates_slides_adjust=function(){if($("#mqCheck-600").is(":visible")){$(".updates-list .item").css("height","auto");var i=[];$(".updates-list .item").each(function(){var e=$(this).outerHeight();i.push(e)});var e=(i=i.sort(function(i,e){return e-i}))[0];$(".updates-list .item").css("height",e+"px")}else $(".updates-list .item").css("height","auto")};function removeParam(i,e){var t=e.split("?")[0],s=[],a=-1!==e.indexOf("?")?e.split("?")[1]:"";if(""!==a){for(var o=(s=a.split("&")).length-1;o>=0;o-=1)s[o].split("=")[0]===i&&s.splice(o,1);t=t+"?"+s.join("&")}return t}function sidebar_adjust(){if($("#mqCheck-767").is(":visible"))$(".sidebar-nav").removeClass("fixed");else{var i=$("#inner-layout"),e=($("#sidebar-toggle"),i.offset().top),t=i.outerHeight(),s=$("#sidebar-nav ul").outerHeight(),a=$(document).scrollTop();a>e?$(".sidebar-nav").addClass("active"):$(".sidebar-nav").removeClass("active"),a>=e+0&&t-(a-e)-45>=s?$(".sidebar-nav").addClass("fixed"):$(".sidebar-nav").removeClass("fixed")}}$(".testimonialModal").on("hidden.bs.modal",function(){var i=$(this),e=$(i).find(".testimonialVideo"),t=e.attr("src");t=removeParam("autoplay",t),e.attr("src",t)}),$(".testimonialModal").on("show.bs.modal",function(){var i=$(this),e=$(i).find(".testimonialVideo"),t=e.attr("src");t+="&autoplay=1",e.attr("src",t)}),$(window).scroll(function(){$(document).scrollTop()>150?$("aside#sticky").addClass("visible"):$("aside#sticky").removeClass("visible")}),$("#aside-toggle").click(function(i){if($("html, body, .main-body").animate({scrollTop:0},500),$("#main-nav .navbar-collapse").hasClass("in"))return!1}),$(".doctor-filter .dropdown-menu").click(function(i){i.stopPropagation()}),$("#search-link").click(function(i){i.preventDefault(),$("body").toggleClass("show-search"),$("#search-field").select()}),$("#search-overlay").on("click",function(i){$("body").hasClass("show-search")&&$("body").removeClass("show-search")}),$(window).scroll(function(){$(document).scrollTop()>150?$("aside#sticky").addClass("visible"):$("aside#sticky").removeClass("visible")}),$("#aside-toggle").click(function(i){if($("html, body, .main-body").animate({scrollTop:0},500),$("#main-nav .navbar-collapse").hasClass("in"))return!1}),$("#sidebar-toggle").click(function(i){i.preventDefault(),$(".sidebar-nav").toggleClass("open")}),$(".specialities-slider").on("click",".slick-slide.link-trigger",function(i){i.stopPropagation();var e=$(this).attr("href");window.location.href=e});