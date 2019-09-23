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
        var actionStar = 'put';

        if($(this).hasClass('fas')) {
            actionStar = 'delete';
        }

        $.ajax({
            method: 'POST',
            url: 'put-star',
            data: {postId: postId, actionStar: actionStar},
            success: function (data) {
                if(data.hasStar){
                    elem.removeClass('far').addClass('fas');
                } else {
                    elem.removeClass('fas').addClass('far');
                }
            },
        });
    });

})(jQuery, window);