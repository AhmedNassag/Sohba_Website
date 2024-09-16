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


    $(window).on("load resize", function () {
        if (this.matchMedia("(min-width: 992px)").matches) {
            $dropdown.hover(
                function () {
                    const $this = $(this);
                    $this.addClass(showClass);
                    $this.find($dropdownToggle).attr("aria-expanded", "true");
                    $this.find($dropdownMenu).addClass(showClass);
                },
                function () {
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
        $('html, body').animate({ scrollTop: 0 }, 1500, 'easeInOutExpo');
        return false;
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        dots: true,
        loop: true,
        center: true,
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            }
        }
    });


    (function ($) {
        $('.vendor-carousel').owlCarousel({
            loop: true,
            margin: 45,
            rtl: true, // Enable RTL mode
            dots: false,
            autoplay: true,
            smartSpeed: 1000,
            responsive: {
                0: {
                    items: 3
                },
                576: {
                    items: 4
                },
                768: {
                    items: 6
                },
                992: {
                    items: 8
                }
            }
        });
    
        // Add event listeners for custom buttons
        $('.btn-prev').on('click', function () {
            $('.vendor-carousel').trigger('prev.owl.carousel');
        });
    
        $('.btn-next').on('click', function () {
            $('.vendor-carousel').trigger('next.owl.carousel');
        });
    
    })(jQuery);
    

})(jQuery);

// ^==============our team section




//! inputs placeholders



//& Function to move the li elements into the sidebar for small screens start



document.addEventListener('DOMContentLoaded', function () {
    flatpickr("#datepicker", {
        // your options here
    });

    flatpickr("#another-datepicker", {
        // your options here
    });

    flatpickr("#another-datepicker-two", {
        // your options here
    });
    flatpickr("#datepicker-in-cat", {
        // your options here
    });
});
function handleDateInput(event) {
    const inputId = event.target.id;

    if (inputId === 'datepicker') {
        // Handle datepicker input
    } else if (inputId === 'another-datepicker') {
        // Handle another datepicker input
    }
    else if (inputId === 'another-datepicker-two') {
        // Handle another datepicker input
    }
    else if (inputId === 'datepicker-in-cat') {
        // Handle another datepicker input
    }
}
// Initialize Flatpickr
flatpickr("#datepicker-in-cat", {
    // Options for Flatpickr
    dateFormat: "Y-m-d",
    onChange: function (selectedDates, dateStr, instance) {
        handleDateInput(selectedDates, dateStr, instance);
    }
});

// Handle date input changes
function handleDateInput(selectedDates, dateStr, instance) {
    console.log("Selected Date:", dateStr);
    // Add custom logic to handle the date input
}

$(".custom-carousel").owlCarousel({
    autoWidth: true,
    loop: true,
    rtl: true, // Enable RTL mode
    dots:true
});

$(document).ready(function () {
    $(".custom-carousel .item").click(function () {
        $(".custom-carousel .item").not($(this)).removeClass("active");
        $(this).toggleClass("active");
    });
});


document.getElementById('primaryPhone').addEventListener('input', function() {
    const countryCode = '+20'; // Replace with your desired country code
    const phoneNumber = this.value;
    document.getElementById('primaryPhoneWithCode').value = countryCode + phoneNumber;
});

document.getElementById('secondaryPhone').addEventListener('input', function() {
    const countryCode = '+20'; // Replace with your desired country code
    const phoneNumber = this.value;
    document.getElementById('secondaryPhoneWithCode').value = countryCode + phoneNumber;
});
