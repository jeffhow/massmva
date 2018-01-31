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
  $(window).scroll(function() {
    var height = $(window).scrollTop();
    var headerht = $('.mva-banner').height();
    var wpadminbarht = ( $('#wpadminbar').height() > 32 ) ? 0 : $('#wpadminbar').height();
    var targetht = 35+wpadminbarht;
    var bannerht = 160;
    
    // console.log ("scroll height: "+height+", headerht: "+headerht+", adminbarht: "+wpadminbarht);
    
    if( height  >= (bannerht-targetht) ){
      if( headerht == 160 ){
        $('.mva-banner').css('height', targetht);
      }
    }else{
      if(height  < (targetht) ){
        if( headerht == targetht ){
          $(".mva-banner").css('height', bannerht);
        }
      }
    }
  });
  
 
})( jQuery );