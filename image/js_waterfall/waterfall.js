$(function(){
	$('.box-top').hover(function () {
	        $(this).find('.mys').first().css({
		        'height':$(this).find('img').first().innerHeight()
		    });

		    $(this).find('.mys').first().show();
		    $(this).find('.detail').first().show();
        },
        function () {
            $(this).find('.mys').first().hide();
            $(this).find('.detail').first().hide();
        }
    );

})