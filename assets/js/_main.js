/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can 
 * always reference jQuery with $, even when in .noConflict() mode.
 *
 * Google CDN, Latest jQuery
 * To use the default WordPress version of jQuery, go to lib/config.php and
 * remove or comment out: add_theme_support('jquery-cdn');
 * ======================================================================== */
var MainNav = {
  init: function(){
    if($(window).width() > 768){
      $('.navbar-default').waypoint('sticky');
    }
  }
};



var DancingSausages = {
  init: function(){
    $('.dancing-sausages img, .dancing-sausages svg').mouseenter(DancingSausages.dance);
    setInterval(function(){ DancingSausages.randomDanceOff(); }, 250);
  },
  
  dance: function(e){
    var $target = $(e.target);
    $target.addClass('animated bounce twice');
    
    $target.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
      $target.removeClass('animated bounce twice');
    });
  },
  
  randomDanceOff: function(){
    var e = {};
    var count;
    var max = $('.dancing-sausages img, .dancing-sausages svg').length;
    
    do {
      var randomNumber = Math.floor((Math.random() * $('.dancing-sausages img, .dancing-sausages svg').length));
      e.target = $('.dancing-sausages img, .dancing-sausages svg')[randomNumber];
      count++;
    } while($(e.target).hasClass('animated') === true && count < max);
    
    if($(e.target).hasClass('animated') === true){
      return false;
    }
    DancingSausages.dance(e);
  }
};


(function($) {
  
// Use this variable to set up the common and page specific functions. If you 
// rename this variable, you will also need to rename the namespace below.
var Roots = {
  // All pages
  common: {
    init: function() {
      // JavaScript to be fired on all pages
      $.localScroll({
        duration: 500,
        easing: 'easeInOutQuint',
        offset: ($(window).width() > 786 ? -($('.banner').height()/2) : 0)
      });

      $('#headerLanding').localScroll({
        duration: 500,
        easing: 'easeInOutQuint',
        offset: ($(window).width() > 786 ? -($('.banner').height()) : ($('.banner').height()/4))
      });
      
      $('[data-toggle=tooltip]').tooltip();
      
      
      
      /********* SVG HANDLING **********/
      if(!Modernizr.svg) {
        $('img[src*="svg"]').attr('src', function() {
          return $(this).attr('src').replace('.svg', '.png');
        });
      }else{
        // http://stackoverflow.com/questions/11978995/how-to-change-color-of-svg-image-using-css-jquery-svg-image-replacement
        $('img.svg-include').each(function(){
            var $img = $(this);
            var imgID = $img.attr('id');
            var imgClass = $img.attr('class');
            var imgURL = $img.attr('src');

            $.get(imgURL, function(data) {
                // Get the SVG tag, ignore the rest
                var $svg = $(data).find('svg');

                // Add replaced image's ID to the new SVG
                if(typeof imgID !== 'undefined') {
                    $svg = $svg.attr('id', imgID);
                }
                // Add replaced image's classes to the new SVG
                if(typeof imgClass !== 'undefined') {
                    $svg = $svg.attr('class', imgClass+' replaced-svg');
                }

                // Remove any invalid XML tags as per http://validator.w3.org
                $svg = $svg.removeAttr('xmlns:a');

                // Replace image with new SVG
                $img.replaceWith($svg);

            }, 'xml');

        });
      }
    }
  },
  // Home page
  home: {
    init: function() {
      // JavaScript to be fired on the home page
      MainNav.init();
      DancingSausages.init();
      $(window).resize(function(){
        $('.menu-name .h3').each(function(){
          $(this).width($(this).closest('.menu-name').height());
        });
      });
      $('#menus').masonry({
        itemSelector: '.menu',
        columnWidth: 0,
        gutter: 30,
      });
      $(window).resize();
      
      
      $(window).scroll(function(){
        var offset          = $('.location-clouds').offset();
        var scrollTop       = $(window).scrollTop()+$(window).height()-offset.top;
        var totalScrollArea = $('.location-clouds').height()+$(window).height();
        var scrollProgress  = scrollTop/totalScrollArea;
        
        if(scrollProgress >= 0 && scrollProgress <= 1){
          var totalMovement = 100;
          var startingPoint = 50;
          
          $('.location-clouds').css('transform', 'translate3d('+((scrollProgress*totalMovement)-startingPoint)+'px,0px, 0)');
        }
      });
      
    }
  },
  // About us page, note the change from about-us to about_us.
  page_template_template_store_layout: {
    init: function() {
      // JavaScript to be fired on the about us page
      $(".royalSlider").royalSlider({
          autoScaleSlider: true,
          keyboardNavEnabled: true,
          arrowsNavAutoHide: false,
          autoScaleSliderWidth: 800,
          autoScaleSliderHeight: 500,
          loopRewind: true
      });
      
      $('.styled-input-container').click(function(){
        $(this).find('input').focus();
      });
      
/*
      $('.remove_item').click(function(){
          Cart.removeItem($(this).data('itemId'), function(cart) {
            console.log("Item removed!");
          });
      });
*/
    }
  }
};

// The routing fires all common scripts, followed by the page specific scripts.
// Add additional events for more control over timing e.g. a finalize event
var UTIL = {
  fire: function(func, funcname, args) {
    var namespace = Roots;
    funcname = (funcname === undefined) ? 'init' : funcname;
    if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
      namespace[func][funcname](args);
    }
  },
  loadEvents: function() {
    UTIL.fire('common');

    $.each(document.body.className.replace(/-/g, '_').split(/\s+/),function(i,classnm) {
      UTIL.fire(classnm);
    });
  }
};

$(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
