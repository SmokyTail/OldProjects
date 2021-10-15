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
     * ��� ��������� ��������, ���������� ��� ������� ������
     */
    $(window).scroll(function () {
        // ���� ������ ������ ������ 50px �� ���������� ������ "������"
        if ($(this).scrollTop() > 500) {
            $('.scrollUp').fadeIn();
        } else {
            $('.scrollUp').fadeOut();
        }
    });
    
    /** ��� ������� �� ������ �� ������������ � ������ �������� */
    $('.scrollUp').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });
});




	






