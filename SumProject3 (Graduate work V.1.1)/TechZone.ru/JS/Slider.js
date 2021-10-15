function SlideShow() {
	$current = $('.SlideShow .active');
	if($current.length == 0){
		$('.SlideShow div:first-child').addClass('active');
	}else {
		$next = $current.removeClass('active').next();
		if($next.length == 0){
			$('.SlideShow div:first-child').addClass('active');
		}else {
			$next.addClass('active');
		}
	}
	
	$current = $('.SlideShow2 .active2');
	if($current.length == 0){
		$('.SlideShow2 div:first-child').addClass('active2');
	}else {
		$next = $current.removeClass('active2').next();
		if($next.length == 0){
			$('.SlideShow2 div:first-child').addClass('active2');
		}else {
			$next.addClass('active2');
		}
	}
	
	$current = $('.SlideShow3 .active3');
	if($current.length == 0){
		$('.SlideShow3 div:first-child').addClass('active3');
	}else {
		$next = $current.removeClass('active3').next();
		if($next.length == 0){
			$('.SlideShow3 div:first-child').addClass('active3');
		}else {
			$next.addClass('active3');
		}
	}
	
	$current = $('.SliderPoint .activePoint');
	if($current.length == 0){
		$('.SliderPoint div:first-child').removeClass('unactivePoint');
		$('.SliderPoint div:first-child').addClass('activePoint');
	}else {
		$next = $current.removeClass('activePoint');
		$next = $current.addClass('unactivePoint').next();
		if($next.length == 0){
			$('.SliderPoint div:first-child').removeClass('unactivePoint');
			$('.SliderPoint div:first-child').addClass('activePoint');
		}else {
			$next.removeClass('unactivePoint');
			$next.addClass('activePoint');
		}
	}
} 

function SlideShowReverse() {
	$current = $('.SlideShow .active'); 
	if($current.length == 0) { 
		$('.SlideShow div:last-child').addClass('active'); 
	}else { 
		$prev = $current.removeClass('active').prev(); 
		if($prev.length == 0){ 
			$('.SlideShow div:last-child').addClass('active'); 
		}else { 
			$prev.addClass('active'); 
		}
	}
	
	$current = $('.SlideShow2 .active2'); 
	if($current.length == 0) { 
		$('.SlideShow2 div:last-child').addClass('active2'); 
	}else { 
		$prev = $current.removeClass('active2').prev(); 
		if($prev.length == 0){ 
			$('.SlideShow2 div:last-child').addClass('active2'); 
		}else { 
			$prev.addClass('active2'); 
		} 
	}
	
	$current = $('.SlideShow3 .active3'); 
	if($current.length == 0) { 
		$('.SlideShow3 div:last-child').addClass('active3'); 
	}else { 
		$prev = $current.removeClass('active3').prev(); 
		if($prev.length == 0){ 
			$('.SlideShow3 div:last-child').addClass('active3'); 
		}else { 
			$prev.addClass('active3'); 
		} 
	}
	
	$current = $('.SliderPoint .activePoint');
	if($current.length == 0){
		$('.SliderPoint div:last-child').removeClass('unactivePoint');
		$('.SliderPoint div:last-child').addClass('activePoint');
	}else {
		$prev = $current.removeClass('activePoint');
		$prev = $current.addClass('unactivePoint').prev();
		if($prev.length == 0){
			$('.SliderPoint div:last-child').removeClass('unactivePoint');
			$('.SliderPoint div:last-child').addClass('activePoint');
		}else {
			$prev.removeClass('unactivePoint');
			$prev.addClass('activePoint');
		}
	}
}

var timer = setInterval(SlideShow, 5000);

rightArrow.addEventListener("click", SlideShow);
rightArrow.addEventListener("click", SlideNext);

leftArrow.addEventListener("click", SlideShowReverse);
leftArrow.addEventListener("click", SlidePrev);

function SlideNext() {
	window.clearInterval(timer);	
	
	document.getElementById('progress-value').style.animationName = 'none';
	setTimeout(function (){
		timer = setInterval(SlideShow, 5000);
		document.getElementById('progress-value').style.animationName = 'load';
	}, 50);
}

function SlidePrev() {
	window.clearInterval(timer);	
		
	document.getElementById('progress-value').style.animationName = 'none';
	setTimeout(function (){
		timer = setInterval(SlideShow, 5000);
		document.getElementById('progress-value').style.animationName = 'load';
	}, 50);	
}