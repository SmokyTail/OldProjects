function SlideShow() { 
	$current = $('.SlideShow .active'); 
	if($current.length == 0) { 
		$('.SlideShow div:first-child').addClass('active'); 
	}else { 
		$next = $current.removeClass('active').next(); 
			if($next.length == 0){ 
				$('.SlideShow div:first-child').addClass('active'); 
			}else { 
				$next.addClass('active'); 
			} 
	} 
} 
setInterval(SlideShow,5000);



function SlideShow2() { 
	$current = $('.SlideShow2 .active2'); 
	if($current.length == 0) { 
		$('.SlideShow2 div:first-child').addClass('active2'); 
	}else { 
		$next = $current.removeClass('active2').next(); 
			if($next.length == 0){ 
				$('.SlideShow2 div:first-child').addClass('active2'); 
			}else { 
				$next.addClass('active2'); 
			} 
	} 
} 
setInterval(SlideShow2,5000);



function SlideShow3() { 
	$current = $('.SlideShow3 .active3'); 
	if($current.length == 0) { 
		$('.SlideShow3 div:first-child').addClass('active3'); 
	}else { 
		$next = $current.removeClass('active3').next(); 
			if($next.length == 0){ 
				$('.SlideShow3 div:first-child').addClass('active3'); 
			}else { 
				$next.addClass('active3'); 
			} 
	} 
}
setInterval(SlideShow3,5000);