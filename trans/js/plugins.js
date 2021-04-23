/*global $, jquery, alert ,console ,scrollY ,fromhere,staticsection,body,footer,subscribesection*/



$(function () {

	$(window).scroll(function () {
		if (window.pageYOffset > 1600) {
			$('#prog-1-1').css({
				width: '90%',
				maxWidth: '90%',
				transition: '3s all ease-in-out'
			});
			$('#prog-2-2').css({
				width: '80%',
				maxWidth: '80%',
				transition: '3s all ease-in-out'
			});
			$('#prog-3-3').css({
				width: '50%',
				maxWidth: '50%',
				transition: '3s all ease-in-out'
			});
			$('#prog-4-4').css({
				width: '60%',
				maxWidth: '60%',
				transition: '3s all ease-in-out'
			});

		}
	});
	

	"use strict";
	$('.toggle-class').click(function () {
		$('.search-box').toggle(500);
		$('.toggle-class').toggleClass('fa-search');
		$('.toggle-class').toggleClass('fa-close');

	});
	$('.form-quote input').focus(function () {
		$(this).css('background-color', 'white');
	});
	$('.form-quote input').focusout(function () {
		$(this).css('background-color', '#f3f3f3');
	});
	$('.form-quote textarea').focus(function () {
		$(this).css('background-color', 'white');
	});
	$('.form-quote textarea').focusout(function () {
		$(this).css('background-color', '#f3f3f3');
	});



	var a = 0;

	var oTop = $('#counter').offset().top - window.innerHeight;
	if (a == 0 && $(window).scrollTop() > oTop) {
		$('.counter-value').each(function () {
			var $this = $(this),
				countTo = $this.attr('data-count');
			$({
				countNum: $this.text()
			}).animate({
					countNum: countTo
				},

				{

					duration: 2000,
					easing: 'swing',
					step: function () {
						$this.text(Math.floor(this.countNum));
					},
					complete: function () {
						$this.text(this.countNum);
						//alert('finished');
					}

				});
		});
		a = 1;
	}

	$(window).scroll(function () {

		var oTop = $('#counter').offset().top - window.innerHeight;
		if (a == 0 && $(window).scrollTop() > oTop) {
			$('.counter-value').each(function () {
				var $this = $(this),
					countTo = $this.attr('data-count');
				$({
					countNum: $this.text()
				}).animate({
						countNum: countTo
					},

					{

						duration: 2000,
						easing: 'swing',
						step: function () {
							$this.text(Math.floor(this.countNum));
						},
						complete: function () {
							$this.text(this.countNum);
							//alert('finished');
						}

					});
			});
			a = 1;
		}

	});
	
	$(window).scroll(function () {
		
		if (window.pageYOffset > 125) {
			$('.navbar-default').css({
				position: 'fixed',
				top: '0px',
				zIndex: '20',
				width: '100%'
			});
		} else {
			$('.navbar-default').css({
				position: 'unset',
				top: '0px',
				zIndex: '20',
				width: '100%'
			});
		}




		if (window.pageYOffset > 5728) {
			$('#prog-1').css({
				width: '90%',
				maxWidth: '90%',
				transition: '3s all ease-in-out'
			});
			$('#prog-2').css({
				width: '80%',
				maxWidth: '80%',
				transition: '3s all ease-in-out'
			});
			$('#prog-3').css({
				width: '50%',
				maxWidth: '50%',
				transition: '3s all ease-in-out'
			});
			$('#prog-4').css({
				width: '60%',
				maxWidth: '60%',
				transition: '3s all ease-in-out'
			});

		}

		
	});


	if (window.pageYOffset > 125) {
		$('.navbar-default').css({
			position: 'fixed',
			top: '0px',
			zIndex: '20',
			width: '100%'
		});
	} else {
		$('.navbar-default').css({
			position: 'unset',
			top: '0px',
			zIndex: '20',
			width: '100%'
		});
	}








	if (window.pageYOffset > 5728) {
		$('#prog-1').css({
			width: '90%',
			maxWidth: '90%',
			transition: '3s all ease-in-out'
		});
		$('#prog-2').css({
			width: '80%',
			maxWidth: '80%',
			transition: '3s all ease-in-out'
		});
		$('#prog-3').css({
			width: '50%',
			maxWidth: '50%',
			transition: '3s all ease-in-out'
		});
		$('#prog-4').css({
			width: '60%',
			maxWidth: '60%',
			transition: '3s all ease-in-out'
		});

	}




});



if ($(window).width() > 900) {
	$('.owl-first').owlCarousel({
		autoplay: true,
		autoHeight: true,
		center: true,
		stagePadding: 100,
		navigation: true,
		rtl: true,
		loop: true,
		nav: true,
		navText: ["<i class='fa fa-long-arrow-right fa-2x'></i>", "<i class='fa fa-long-arrow-left fa-2x'></i>"],
		items: 1,
		dots: false,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 1
			},
			1000: {
				items: 1
			}
		}
	});

}

//owl
$('.owl-first').owlCarousel({
	autoplay: true,
	center: true,
	navigation: true,
	rtl: true,
	loop: true,
	nav: true,
	navText: ["<i class='fa fa-long-arrow-right fa-2x'></i>", "<i class='fa fa-long-arrow-left fa-2x'></i>"],
	items: 1,
	dots: false,
	responsive: {
		0: {
			items: 1
		},
		600: {
			items: 1
		},
		1000: {
			items: 1
		}
	}
});

//owl-2
$('.owl-two').owlCarousel({
	navigation: true,
	autoplay: true,
	rtl: true,
	loop: true,
	nav: false,
	items: 1,
	dots: false,
	margin: 100,
	responsive: {
		0: {
			items: 1
		},
		600: {
			items: 4
		},
		1000: {
			items: 5
		}
	}
});


//owl-3
$('.owl-three').owlCarousel({
	navigation: true,
	dots: true,
	autoplay: true,
	rtl: true,
	loop: true,
	nav: false,
	items: 50,
	responsive: {
		0: {
			items: 1
		},
		600: {
			items: 1
		},
		1000: {
			items: 1
		}
	}
});

$(function () {
	'use strict';
	$('.calendar').pignoseCalendar({
		theme: 'dark' // light, dark, blue

	});
});
if ($(window).width() > 900) {
	window.onscroll = function () {
		'use strict';
		if (body.clientHeight > 3000) {
			if (window.pageYOffset >= staticsection.clientHeight) {
				$('.static-section').css({
					position: 'fixed',
					width: '29%',
					left: '7%',
					bottom: '50px'

				});
			} else {
				$('.static-section').css({
					position: 'unset',
					width: '33.3333%'

				});
			}

			if (window.pageYOffset >= fromhere.clientHeight - 150) {
				$('.static-section').css({
					position: 'fixed',
					width: '29%',
					bottom: window.pageYOffset - body.clientHeight + footer.clientHeight + window.innerHeight + 200

				});
			}
		}
	};
	if (body.clientHeight > 3000) {
		if (window.pageYOffset >= staticsection.clientHeight) {
			$('.static-section').css({
				position: 'fixed',
				width: '29%',
				left: '7%',
				bottom: '50px'

			});
		} else {
			$('.static-section').css({
				position: 'unset',
				width: '33.3333%'

			});
		}

		if (window.pageYOffset >= fromhere.clientHeight - 150) {
			$('.static-section').css({
				position: 'fixed',
				width: '29%',
				bottom: window.pageYOffset - body.clientHeight + footer.clientHeight + window.innerHeight + 200

			});
		}
	}


}