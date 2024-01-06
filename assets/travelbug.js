$(document).ready(function(){

    var checkScrollBar = function(){
      $('.bg-dark').css({
        backgroundColor: $(this).scrollTop() > 1 ?
          'rgba(0, 0, 0,0.9)' : 'transparent'
      })
    }
    $(window).on('load resize scroll', checkScrollBar)
    });