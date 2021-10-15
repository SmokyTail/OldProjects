$(function() {      
  $(window).Scroll(function(){
    if ($(this).ScrollTop() > 500) {
      $('.ScrollUp').fadeIn();
    } else {
      $('.ScrollUp').fadeOut();
    }
  });     
 
  $('.ScrollUp').click(function(){
    $("html, body").animate({ ScrollTop: 0 }, 700);
    return false;
  });
});