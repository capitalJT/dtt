// $(document).foundation();
$(document).ready(function(){

  var dttDuration = '500';
  var dttEasing = 'swing';

  // scroll to target
  $('.main-navigation a, .hero a').on('click', function(event){
    event.preventDefault();

    $('html, body').animate({
      scrollTop: $( $.attr(this, 'href') ).offset().top
    }, dttDuration, dttEasing);
  });

  // scroll to top
  var scroll_top_icon = $('#scroll-to-top');

  scroll_top_icon.click(function(){
    $("html, body").animate({scrollTop:0}, dttDuration, dttEasing);
  });
  
  // carousel
  $('.carousel').slick({
    autoplay:true,
    infinite: true,
    arrows:false,
    speed: 1000,
    pauseOnHover: false
  });
});