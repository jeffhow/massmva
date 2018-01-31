(function( $ ) {
  
  /**
   * Font Face Observer Promise for Google Web Fonts
   */
  var robotoSlab = new FontFaceObserver('Roboto Slab');
  var openSans = new FontFaceObserver('Open Sans');

  Promise.all([robotoSlab.load(), openSans.load()]).then(function () {
    $('body').addClass('fonts-loaded');
  });
  
  /**
   * Search Model Focus
   * Note, Mobile autofocus may require "fastclick library"
   * https://stackoverflow.com/questions/6287478/mobile-safari-autofocus-text-field
   */
  $('#searchModal').on('shown.bs.modal', function (e) {
    $('#searchInput').focus();
  })

  /**
   * Header Scroll
   */
  $(document).ready(function() {
    $(window).scroll(function () {
        //if you hard code, then use console
        //.log to determine when you want the 
        //nav bar to stick.
        if( $('#wpadminbar').height() == 32 ){
          fixedClass = 'navbar-fixed-with-admin-bar';
        }else{
          fixedClass = 'navbar-fixed';
        }
        
        //console.log($(window).scrollTop())
      if ($(window).scrollTop() > 125) {
        $('#masthead').addClass( fixedClass );
        $('main').css('margin-top', '200px');
      }
      if ($(window).scrollTop() < 126) {
        $('#masthead').removeClass( fixedClass );
        $('main').css('margin-top', '0');
      }
    });
  });
  
 
})( jQuery );