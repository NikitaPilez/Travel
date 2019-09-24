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
        // var countStar = elem.attr('data-count-star');
        var actionStar = 'put';
        var starContent = elem.parent().html();
        
        if($(this).hasClass('fas')) {
            actionStar = 'delete';
            elem.removeClass('fas').addClass('far');
        } else {
             elem.removeClass('far').addClass('fas');
        }

        $.ajax({
            method: 'POST',
            url: 'put-star',
            data: {postId: postId, actionStar: actionStar},
            success: function (data) {
                //changed count star.                
            },
        });
    });

})(jQuery, window);