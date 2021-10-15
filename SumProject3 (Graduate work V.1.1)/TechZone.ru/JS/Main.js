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
    $(window).scroll(function () {
        if ($(this).scrollTop() > 500) {
            $('.scrollUp').fadeIn();
        } else {
            $('.scrollUp').fadeOut();
        }
    });
    $('.scrollUp').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });
});

/*
async function getCases() {
	let res = await fetch('http://api.techzone.ru/cases');
	let cases = await res.json();
	
	cases.forEach((caser) => {
		if(caser.Status == 1) {
			var status = 'Есть в наличии';
		} else {
			var status = 'Нет в наличии';
		}
		
		if(caser.DiscountPrice != 0) {
			var dscImage =  `
				<img src="images/DISCOUNT.PNG" alt="">
			`
			var pricer = `
				<div class="ProductCostDisc">
					<p class="TProductCostDisc">${caser.Price} Р</p>
				</div>

				<div class="ProductCost">
					<p class="TProductCost">${caser.DiscountPrice} Р</p>
				</div>
			`;
		} else {
			var dscImage = '';
			var pricer =  `
				<div class="ProductCost">
					<p class="TProductCost">${caser.Price} Р</p>
				</div>
			`;
		}
		
		document.querySelector('.RightBlock').innerHTML += `
			<div class="Tovar" id="Tovar">
				
				<div class="Status">
					<p class="TProductStatus">${status}</p>
				</div>

				<div class="Discount">
					${dscImage}
				</div>
								
				<a href=""><div class="ProductPhoto">
					<img src="${caser.Image}" alt="${caser.Model}">
				</div></a>

				<a href=""><div class="ProductName">
					<p class="TProductName">${caser.Type} ${caser.Model} ${caser.MainColor}</p>
				</div></a>

				<div class="ProductInfo">
					<p class="TProductInfo">Производитель: ${caser.Manufacturer}, ${caser.Country}</p>
				</div>

				${pricer}

				<a href=""><div class="Buy">
					<p class="TButtonBuy">Добавить в корзину</p>
				</div></a>

			</div>
		`		
	})
}
getCases();
*/


$(function(){
	const links_with_id = $('.product_link_with_id');
	const cart_value = $("#cart_count");
	const BasketCount = $('#BasketCount')
	
	$.each(links_with_id, function(){
		$(this).bind('click', function(){
			let current_id = $(this).attr('data-id');
			
			$.post("api.php", {'course_id': current_id})
			.done(function(data) {
				cart_value.html(data);
				BasketCount.removeClass('counted');
			});
		});
	});
});