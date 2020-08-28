
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
        
