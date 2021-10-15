$(function(){
	$('.Enter').click(function () {
		$('.ModalShadow').show();
		$('.ModalWindow').show();
	});
 
	$('.ModalShadow').click(function () {
		$('.ModalShadow').hide();
		$('.ModalWindow').hide();
	});
 
	$('.Close').click(function () {
		$('.ModalShadow').hide();
    	$('.ModalWindow').hide();
    });

});





$(document).ready(function(){
    /**
     * При прокрутке страницы, показываем или срываем кнопку
     */
    $(window).scroll(function () {
        // Если отступ сверху больше 50px то показываем кнопку "Наверх"
        if ($(this).scrollTop() > 500) {
            $('.scrollUp').fadeIn();
        } else {
            $('.scrollUp').fadeOut();
        }
    });
    
    /** При нажатии на кнопку мы перемещаемся к началу страницы */
    $('.scrollUp').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });
});




	






