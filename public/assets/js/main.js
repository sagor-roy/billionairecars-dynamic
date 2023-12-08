
(function ($) {
	"use Strict";

	$('.select2').select2({
		minimumResultsForSearch: Infinity
	});

	$('.navbar-toggler').on('click', function () {
		let icon = $(this).find('i');
		// Toggle the class based on the current state
		if (icon.hasClass('fa-bars')) {
			icon.removeClass('fa-bars').addClass('fa-times');
		} else {
			icon.removeClass('fa-times').addClass('fa-bars');
		}
	});

	// Get the button
	var mybutton = document.getElementById("backToTopBtn");

	window.onscroll = function () {
		myFunction()
		if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
			mybutton.style.display = "block";
		} else {
			mybutton.style.display = "none";
		}
	}

	mybutton.addEventListener("click", function () {
		document.body.scrollTop = 0; // For Safari
		document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE, and Opera
	});

	var navbar = document.getElementById("sticky_navbar");
	function myFunction() {
		if (window.pageYOffset >= 200) {
			navbar.classList.add("sticky");
		} else {
			navbar.classList.remove("sticky");
		}
	}

	var swiper = new Swiper(".mySwiper", {
		slidesPerView: 1,
		spaceBetween: 20,
		navigation: {
			nextEl: ".button-next",
			prevEl: ".button-prev",
		},
		breakpoints: {
			575: {
				slidesPerView: 1,
				spaceBetween: 20,
			},
			576: {
				slidesPerView: 2,
				spaceBetween: 20,
			},
			900: {
				slidesPerView: 3,
				spaceBetween: 20,
			},
			1024: {
				slidesPerView: 4,
				spaceBetween: 20,
			},
		}
	});


	$('.product-details-images').each(function () {
		var $this = $(this);
		var $thumb = $this.siblings('.product-details-thumbs, .tab-style-left');
		$this.slick({
			arrows: false,
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplay: false,
			autoplaySpeed: 5000,
			dots: false,
			infinite: true,
			centerMode: false,
			centerPadding: 0,
			asNavFor: $thumb,
		});
	});

	$('.product-details-thumbs').each(function () {
		var $this = $(this);
		var $details = $this.siblings('.product-details-images');
		$this.slick({
			slidesToShow: 4,
			slidesToScroll: 1,
			autoplay: false,
			autoplaySpeed: 5000,
			dots: false,
			infinite: true,
			focusOnSelect: true,
			centerMode: true,
			centerPadding: 0,
			prevArrow: '<span class="slick-prev"><i class="fa fa-angle-left"></i></span>',
			nextArrow: '<span class="slick-next"><i class="fa fa-angle-right"></i></span>',
			asNavFor: $details,
		});
	});
})(jQuery);


