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

        if ($(this).hasClass('fa-star')) {
            actionStar = 'delete';
            countStar--;
            elem.addClass('fa-star-o').removeClass('fa-star');
        } else {
            countStar++;
            elem.addClass('fa-star').removeClass('fa-star-o');
        }

        elem.siblings('.js-count-star').text(countStar);

        $.ajax({
            method: 'POST',
            url: 'put-star',
            data: {postId: postId, actionStar: actionStar},
        });
    });

})(jQuery, window);