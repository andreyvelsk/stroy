$('.directions-blocks').slick({
				arrows: false,
				dots: true,
				slidesToShow: 4,
				slidesToScroll: 1,
				autoplay: true,
				autoplaySpeed: 2000,
				responsive: [
					{
						breakpoint: 768,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1
						}

					},
					{
						breakpoint: 993,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 1
						}
						
					},
					{
						breakpoint: 1200,
						settings: {
							slidesToShow: 3,
							slidesToScroll: 1
						}
						
					}
				]
				
			});

			$(document).ready(function() {
 				$('.top-nav_btn').click(function(event) {
  					event.preventDefault();
  					$('.top-nav_menu').toggleClass('top-nav_menu__active');
 				});

 				$('.left-sidebar_btn').click(function(event) {
  					event.preventDefault();
  					$('.left-sidebar_menu').toggleClass('left-sidebar_menu__active');
 				});
 			});