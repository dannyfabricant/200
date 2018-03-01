jQuery(function ($) {
$(document).ready( function() {
    $("#Glide").glide({
        type: "carousel"
    });
    setTimeout(function() {
    	$('#carousel').animate({'opacity': 1}, 1000)
    }, 1200)

    navigation();

})

function navigation() {
	$('.link').click( function(event) {
		event.preventDefault();

		let link = $(this);
		let target = link.attr('href')
		let navHeight = $('header').outerHeight();
		let targetScroll = $(target).offset().top - navHeight;

		$('html,body').animate({'scrollTop': targetScroll + 'px'}, 400);

	})
}

});