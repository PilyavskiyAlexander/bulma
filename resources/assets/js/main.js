window.onload = function() {

    $('.make-main-image').on('click', function(e){
        e.preventDefault(); e.stopPropagation();
        $('.main-image').attr('src', $(this).attr('src'));
    });

    var $attach = $('.attach-project-file'),
        $remove = $('.remove-project-file'),
        $name = $('.attached-project-file');

// initially hide the remove button
    $remove.hide();

// do this when file input has changed
// i.e.: a file has been selected
    $attach.on('change', function() {
        var val = $(this).val();
        if (val !== '') {
            // if value different than empty

            // show the file name as text
            // hide/text/fadeIn creates a nice effect when changing the text

        $(this).parents('.field').children('.attached-project-file')
                .hide()
                .text(val)
                .fadeIn();

            // show the remove button
            $remove.fadeIn();
        } else {
            // if value empty, means the file has been removed

            // show the default text
            $name
                .hide()
                .text('Click to select a file')
                .fadeIn();

            // hide remove button
            $remove.fadeOut();
        }
    });

    // remove selected file when clicking the remove button
    // prevent click bubbling to the parent label and triggering file selection
        $remove.on('click', function(e) {
            e.preventDefault();
            e.stopPropagation();

            $attach
                .val('')
                .change(); // trigger change event
        });

        $('#searchInput').on('change', function(){
            $('#search_product_brand').val($(this).val());
        });

};