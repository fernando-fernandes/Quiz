
    // Sidebar
    $('.nav-disabled').click(function(){
        event.preventDefault();
    });

    $('.sidebar-btn').click(function(){
        $('.sidebar, .content').toggleClass('active');
    });

    // Ajustar largura PPT
    (function mostrarPPT(){
        var container = $('.container-ppt');
        var quizcard = $('.quizCard');

        if(quizcard.is(':visible')) {
            container.width('100%');
            $('.content').css('padding','60px 0 20px')
        } else {
            $('.content').css('padding','0')
        }
    })();
        


    // Km conquistados
    $('.km-number').each(function(){
           
      var $el = $(this),
        text = $el.text(),
        len = text.length,
        newCont = '';
      
      for(var i=0; i<len; i++){
        newCont += '<span>'+ text.charAt(i) +'</span>';
      }
      
      $el.html(newCont);
           
    });
    
    