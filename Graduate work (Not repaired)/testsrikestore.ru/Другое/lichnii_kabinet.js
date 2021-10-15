$(document).ready(function() {
// Форма обратной связи................................./

var regVr22 = "<img style='margin-bottom:-4px; width=16px; height=16px;' src='images/tenor.gif' alt='Отправка...' width='16px' height='16px'><div><span style='font: 11px Verdana; color:#333; margin-left:6px;'>Сообщение обрабатывается...</span></div><br />";
$("#submit").click(function(){
		$("#loadBarImgPass").html(regVr22).show();
		var familiya = $("#familiya").val();
		var name = $("#name").val();
		var otchestvo = $("#otchestvo").val();
		var user_login = $("#user_login").val();
		var email = $("#email").val();
		var phone = $("#phone").val();
		var user_password = $("#user_password").val();
		var user_login = $("#user_login").val();
		var repeat_password = $("#repeat_password").val();
		var checkbox_click = $("#checkbox_click").val();
		$.ajax({
			type: "POST",
			url: "/markiz/block/save_user.php",
			data: {"familiya": familiya, "name": name, "otchestvo": otchestvo, "user_login":user_login,"email":email,"phone":phone,"user_password":user_password,"repeat_password":repeat_password,"checkbox_click":checkbox_click},
			cache: false,
			success: function(response){
		var messageResp = "<p style='font-family:Verdana; font-size:11px; color:green; border:1px solid #00CC00; padding:10px; margin:20px; border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px; background-color:#fff;'>Спасибо, <strong>";
		var resultStat = "!</strong> Ваше сообщение отправлено!</p>";
		var oll = (messageResp + familiya + resultStat);
				if(response == 1){
				$("#loadBarImgPass").html(oll).fadeIn(3000);
				$("#familiya").val("");
				$("#name").val("");
				$("#otchestvo").val("");
				$("#user_login").val("");
				$("#email").val("");
				$("#phone").val("");
				$("#user_password").val("");
				$("#repeat_password").val("");
				$("#checkbox_click").val("");
				} else {
		$("#loadBarImgPass").html(response).fadeIn(3000); }
										}
		});
		return false;
});
});
$(function(){
    $('.enter').click(function () {
      $('.modal-shadow').show();
    $('.modal-window').show();
    });
 
    $('.modal-shadow').click(function () {
      $('.modal-shadow').hide();
    $('.modal-window').hide();
    });
 
    $('.close').click(function () {
      $('.modal-shadow').hide();
    $('.modal-window').hide();
    });
});

