//start user icon
$(document).ready(function() {

	var avatar = $("#header-avatar");
	var dropdown = $("#avatar-dropdownmenu");
	var bubble = $("#notification-bubble");
	
	avatar.click( function(event) {
		event.stopPropagation();
		dropdown.toggle();
	});
	
	// body click closes menu
	$("body").click( function() {
		dropdown.hide();
	});
	
	// determine if there are any notifications, display bubble if applicable
	if ( detectNotifications() ) {
		setTimeout(displayNotificationBubble, 2500);
	}
	
	function detectNotifications() {
		var bubbleTextLength = bubble.find('span').text().length;
		if (bubbleTextLength > 0) {
			return true;
		}
		else {
			return false;		
		}
	}
	
	
	function displayNotificationBubble() {
		var bubbleText = bubble.find('span');
		var bubbleTextWidth = bubbleText.outerWidth();
		var singleCharWidth = bubbleTextWidth / bubbleText.text().length;
		var textIndent = bubbleText.css('text-indent').substr(0, bubbleText.css('text-indent').length-2)-1;
		var initialBubbleWidth = parseInt(bubble.outerWidth());
		
		var desiredLeftMargin = bubbleTextWidth + (textIndent*2);
		avatar.animate({
			marginLeft: desiredLeftMargin
		}, 500);
		
		var desiredBubbleWidth = initialBubbleWidth + bubbleTextWidth + singleCharWidth;
		bubble.animate({
			width: desiredBubbleWidth
		}, 500);
	}
}); 
//enduser icon
(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Initiate the wowjs
    new WOW().init();
    
    
    // Dropdown on mouse hover
    const $dropdown = $(".dropdown");
    const $dropdownToggle = $(".dropdown-toggle");
    const $dropdownMenu = $(".dropdown-menu");
    const showClass = "show";
    
    $(window).on("load resize", function() {
        if (this.matchMedia("(min-width: 992px)").matches) {
            $dropdown.hover(
            function() {
                const $this = $(this);
                $this.addClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "true");
                $this.find($dropdownMenu).addClass(showClass);
            },
            function() {
                const $this = $(this);
                $this.removeClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "false");
                $this.find($dropdownMenu).removeClass(showClass);
            }
            );
        } else {
            $dropdown.off("mouseenter mouseleave");
        }
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });


    // Modal Video
    $(document).ready(function () {
        var $videoSrc;
        $('.btn-play').click(function () {
            $videoSrc = $(this).data("src");
        });
        console.log($videoSrc);

        $('#videoModal').on('shown.bs.modal', function (e) {
            $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
        })

        $('#videoModal').on('hide.bs.modal', function (e) {
            $("#video").attr('src', $videoSrc);
        })
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        margin: 25,
        dots: false,
        loop: true,
        nav : true,
        navText : [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
        responsive: {
            0:{
                items:1
            },
            768:{
                items:2
            }
        }
    });
    
})(jQuery);


