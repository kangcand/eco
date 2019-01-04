/*
*
* QuantumPro
* Author: http://authenticgoods.co
*
*/

$(function() {
  AOS.init();

  $(window).scroll(function() {
    var $purchaseBtn = $('.navbar-nav').find('.btn-pill');
    if ($(window).scrollTop() >= 80) {
      $('.header-wrapper').addClass('is-fixed');
    } else {
      $('.header-wrapper').removeClass('is-fixed');
    }
    if ($('.header-wrapper').hasClass('is-fixed') && $('.navbar-nav .btn-pill.btn-outline-white').length > 0) {
      $purchaseBtn.removeClass('btn-outline-white');
      $purchaseBtn.addClass('btn-outline-primary');
    }
    if (!$('.header-wrapper').hasClass('is-fixed')) {
      $purchaseBtn.addClass('btn-outline-white');
      $purchaseBtn.removeClass('btn-outline-primary');
    }
  });


  // Select all links with hashes
  $('a[href*="#"]').not('[href="#"]').not('[href="#0"]').not('[data-toggle="tab"]').on('click', function(event) {
    // On-page links
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top

        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });

  $('.navbar-nav .dropdown').hover(function() {
    $(this).find('.dropdown-menu').addClass('drop-up').stop(true, true).delay(200).fadeIn(500);
  }, function() {
    $(this).find('.dropdown-menu').removeClass('drop-up').stop(true, true).delay(200).fadeOut(500);
  });

});
