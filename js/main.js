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


// Sticky Navbar
$(window).scroll(function () {
    if ($(this).scrollTop() > 45) {
        $('.navbar').addClass('sticky-top shadow-sm');
    } else {
        $('.navbar').removeClass('sticky-top shadow-sm');
    }
});
    
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
        });
    } else {
        $dropdown.off("mouseenter mouseleave");
    }
});

window.addEventListener("scroll", function () {
    const navbar = document.querySelector(".navbar");
    if (window.scrollY > 45) {
        navbar.classList.add("sticky-top", "shadow-sm");
    } else {
        navbar.classList.remove("sticky-top", "shadow-sm");
    }
});
    
// Facts counter
$('[data-toggle="counter-up"]').counterUp({
    delay: 10,
    time: 2000
}); 

// Back to top button
$(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
        $('.back-to-top').fadeIn('slow');
    } else {
        $('.back-to-top').fadeOut('slow');
    }
});
$('.back-to-top').click(function () {
    $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
    return false;
});

// Testimonial carousel section start here 
function equalizeTestimonialHeights() {
  var maxHeight = 0;
  $('.testimonial-item').css('height', 'auto').each(function () {
    maxHeight = Math.max(maxHeight, $(this).outerHeight());
  }).height(maxHeight);
}

$(function () {
  $('.testimonial-carousel').on('initialized.owl.carousel resized.owl.carousel refreshed.owl.carousel', function () {
    setTimeout(equalizeTestimonialHeights, 100);
  });

  $('.testimonial-carousel').owlCarousel({
    loop:true,
    margin:20,
    autoplay:true,
    autoplayTimeout:3000,
    autoplaySpeed:800,
    smartSpeed:800,
    dots:true,
    responsive:{
        0:   {items:1,center:false},
        576: {items:1,center:true},
        768: {items:2,center:true},
        992: {items:3,center:true}
    }
  });
});
// Testimonial carousel section end here

// Vendor carousel
$('.vendor-carousel').owlCarousel({
    loop: true,
    margin: 45,
    dots: false,
    loop: true,
    autoplay: true,
    smartSpeed: 1000,
    responsive: {
        0:{
            items:2
        },
        576:{
            items:4
        },
        768:{
            items:6
        },
        992:{
            items:8
            }
        }
    });
})(jQuery);






