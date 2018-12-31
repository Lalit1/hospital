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


$(document).on('click',".dpt-side", function(e){

	var id = $(this).data('id');
	console.log(id);
	$(this).addClass('side-active').siblings().removeClass('side-active');
	$('.dpt-cnt-main').hide('slow');
	$('.dpt-cnt-'+id).show('slow');

});

$(document).on('click',"#user-toggle", function(){
	$('.user-box').toggle('slow');
});


$(function() {
    // Multiple images preview in browser
    var imagesPreview = function(input, placeToInsertImagePreview) {

    	if (input.files) {
    		var filesAmount = input.files.length;

    		for (i = 0; i < filesAmount; i++) {
    			var reader = new FileReader();

    			reader.onload = function(event) {
    				$($.parseHTML('<img>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
    			}

    			reader.readAsDataURL(input.files[i]);
    		}
    	}

    };

    $('#banner-img').on('change', function() {
    	imagesPreview(this, 'div.banner-gallery');
    });
});


/*edit functionality on admin edit-department*/
$(document).on('click', '#dept_edit', function(){
	var title = $(this).closest('tr.dept-tr').find('p#dept_title').html();
	var content = $(this).closest('tr.dept-tr').find('p#dept_content').html();
	var id = $(this).closest('tr.dept-tr').find('p#dept_id').html();

	$('.title-input').val(title);
	$('.content-input').val(content);
	$('.id-input').val(id);

	$("html, body").animate({ scrollTop: 0 }, "slow");
});