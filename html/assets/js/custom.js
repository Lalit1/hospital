// This  is common js
$(document).ready(function () {
	$(".plustext").bind("click", function () {
		var size = parseInt($('p').css("font-size"));
		if ($(this).hasClass("plus")) {
			size = size + 1;
			if (size >= 17) {
				size = 17;
			}
		}
		else if ($(this).hasClass("level")) {
			size = 14;
		}
		else {
			size = size - 1;
			if (size <= 11) {
				size = 11;
			}
		}
		$('p').css("font-size", size);
	});
	/*$(".plustext").on("click", function () {
		alert('plus');
		var pfontsize =
	});
	$(".minustext").on("click", function () {
		resizeText(-1);
		alert('minus');
	});
	$(".levelsize").on("click", function () {
		$(p).css('font-size', '14rem');
		alert('14px');
	});*/
	$('.search-form-icon').click(function () {
		$(this).parent('.search-form').toggleClass('open');
	});
	$('.humburger').click(function () {
		$(this).next('ul').slideToggle();
	});
	$('.home-gallery-thumb-img').on('click', function () {
		var src = $(this).attr('src');
		$('.home-gallery-big-img').attr('src', src);
		//alert(src);
	});
	$(".goto-main-content").on('click', function (event) {
		if (this.hash !== "") {
			event.preventDefault();
			var hash = this.hash;
			$('html, body').animate({
				scrollTop: $(hash).offset().top - 78
			}, 800, function () {
				//window.location.hash = hash;
			});
		}
	});
	$(window).bind('scroll', function () {
		//var navHeight = $(window).height() - 39;
		if ($(window).scrollTop() > 158) {
			$('.main-nav').addClass('fixed');
		}
		else {
			$('.main-nav').removeClass('fixed');
		}
	});
});

function resizeText(multiplier) {
	if (document.p.style.fontSize == "") {
		document.p.style.fontSize = "1.4px";
	}
	document.p.style.fontSize = parseFloat(document.p.style.fontSize) + (multiplier * 0.2) + "px";
}