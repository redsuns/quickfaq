jQuery(document).ready( function($) {
	$(".content-link").click(function() {
		toShow = $(this).attr("id");
		$(".answer").slideUp();
		$("#content_" + toShow).slideDown();
		return false;
	});
});