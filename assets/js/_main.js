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
      $('.navbar').waypoint('sticky');
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
      
      MainNav.init();
    }
  },
  // Home page
  home: {
    init: function() {
      // JavaScript to be fired on the home page
      DancingSausages.init();
            
      $('.menu-name .h3').width($('.menu-name').height());

      $('#menus').masonry({
        itemSelector: '.menu',
        columnWidth: 0,
        gutter: 30,
      });
      
    }
  },
  // About us page, note the change from about-us to about_us.
  about_us: {
    init: function() {
      // JavaScript to be fired on the about us page
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
