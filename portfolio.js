jQuery(document).ready(function($) {
	$('.websites').addClass('portfolio-active');
	$('#print').hide();
	$('#identity').hide();
	$('#websites').addClass("shown");
	

	$('.websites').click(function(){
		$(this).addClass('portfolio-active');
		$('.print').removeClass('portfolio-active');
		$('.identity').removeClass('portfolio-active');
		$('.shown').fadeOut("slow", function() {
			$('#websites').fadeIn("slow").addClass("shown");
		}).removeClass("shown");
		
	});

	$('.print').click(function(){
		$(this).addClass('portfolio-active');
		$('.websites').removeClass('portfolio-active');
		$('.identity').removeClass('portfolio-active');
		$('.shown').fadeOut("slow", function() {
			$('#print').fadeIn("slow").addClass("shown");
		}).removeClass("shown");
	
	});

	$('.identity').click(function(){
		$(this).addClass('portfolio-active');
		$('.websites').removeClass('portfolio-active');
		$('.print').removeClass('portfolio-active');
		$('.shown').fadeOut("slow", function() {
			$('#identity').fadeIn("slow").addClass("shown");
		}).removeClass("shown");

	});

	$('.portfolio').hover(function(){
		$(this).children('.entry-content').fadeToggle();
		$(this).children('img').toggleClass("rotate-img");
	});
});

