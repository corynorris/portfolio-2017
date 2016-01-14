

var smoothScroll = function() {

  // Hide more content indicator after scroll
    $(window).scroll(function() {
      if ($(this).scrollTop() >= 50) { //use `this`, not `document`
          $('#more').css({
              'visibility': 'hidden'
          });
      } else {
          $('#more').css({
              'visibility': 'visible'
          });
      }
  });

  
  $('#more').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
};

smoothScroll();

$(function() {
    'use strict';
    var $page = $('#smooth'),
        options = {
            debug: false,
            blacklist: '#more',
            prefetch: true,
            cacheLength: 2,
            forms: 'form',
            onStart: {
                duration: 750, // Duration of our animation
                render: function($container) {
                    // Add your CSS animation reversing class
                    $container.addClass('is-exiting');
                    // Restart your animation
                    smoothState.restartCSSAnimations();
                }
            },
            onReady: {
                duration: 0,
                render: function($container, $newContent) {
                    // Remove your CSS animation reversing class
                    $container.removeClass('is-exiting');
                    // Inject the new content
                    $container.html($newContent);
                }
            },
            onAfter: smoothScroll
            
        },
        smoothState = $page.smoothState(options).data('smoothState');
});
