 $(document).ready(function(){
	$('.slider-default').slick({
		dots: true,
	});

	$('.slider-fade').slick({
		autoplay: true,
		infinite: true,
		autoplaySpeed:10000,
        speed:600,
		fade: !0,
		cssEase: 'linear',
		arrows: false,
	});

	  $('.slider-autoplay').slick({
		autoplay: true,
		autoplaySpeed: 9000,
		dots: true,
	});

	$('.slider-logo').slick({
		dots: true,
		infinite: true,
		slidesToShow: 5,
		slidesToScroll: 5,
		rows: 2,
		arrows: false,

		responsive: [
			{
				breakpoint: 1080,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 4,
				}
			},
			{
				breakpoint: 775,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3,
				}
			},
			{
				breakpoint: 600,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2,
				}
			}
		]
	});
  });


