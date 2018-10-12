$(function(){
	var owl = $('.banner-carousal');
	owl.owlCarousel({
		loop: true
		, margin: 0
		, navRewind: false
		, nav: true,
		autoplay:true,
		autoplayTimeout:5000,
		dots: true
		, responsive: {
			0: {
				items: 1
			}
		}

	});
	$('.about-carousal').owlCarousel({
		loop: true,
		items: 4,
		autoplay:true,
		margin: 20
/*		responsive: {
			0: {
				items: 1
			}
		}*/
	})
});

$('.play').on('click',function(){
	owl.trigger('play.owl.autoplay',[5000])
})
$('.stop').on('click',function(){
	owl.trigger('stop.owl.autoplay')
})
$(window).scroll(function(){
	if ($(window).scrollTop() >= 150) {
		$('.sticky-head').show();
	}
	else {
		$('.sticky-head').hide();
	}
});
