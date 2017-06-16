window.onload = function() {

    $('.make-main-image').on('click', function(e){
        e.preventDefault(); e.stopPropagation();
        $('.main-image').attr('src', $(this).attr('src'));
    })


};