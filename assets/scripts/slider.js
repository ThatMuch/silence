 $(document).ready(function(){
	$('.slider-default').slick({
		dots: true,
	});
	$('.slider-fade').slick({
		autoplay: true,
		infinite: true,
		speed: 500,
		fade: true,
		cssEase: 'linear'
	  });
	  $('.slider-autoplay').slick({
		autoplay: true,
		autoplaySpeed: 3000,
		dots: true,
	});
  });


