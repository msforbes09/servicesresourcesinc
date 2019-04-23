$(document).ready(function(){
	checkSize();
	$(window).resize(checkSize);

	$("#branches").hide();
	$(".tab-menu li").click(function(e){
		e.preventDefault()
		$('#default').hide();
		$('#branches').show();
		$(this).tab('show');
	});
});

function checkSize(){
	if ($("#med").css("float") == "none" ){
		$('.navbar-caption').text('SRI');
	}
	else {
		$('.navbar-caption').text('Service Resources Inc.');
	}
}