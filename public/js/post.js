(function ($, window) {
    "use strict";

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
 
    $('.js-star-post').click(function (event) {
        var elem = $(this);
        var postId = elem.attr('data-post-id');
        var countStar = parseInt(elem.siblings('.js-count-star').text(), 10);
        var actionStar = 'put';

        if($(this).hasClass('fas')) {
            actionStar = 'delete';
            countStar--;
            elem.addClass('far').removeClass('fas');
        } else {
            countStar++;
            elem.addClass('fas').removeClass('far');
        }

        elem.siblings('.js-count-star').text(countStar);

        $.ajax({
            method: 'POST',
            url: 'put-star',
            data: {postId: postId, actionStar: actionStar},
        });
    });

})(jQuery, window);