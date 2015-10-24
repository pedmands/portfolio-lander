jQuery(document).ready(function($) {
	$('#websites').addClass('show');
	$('.websites').addClass('portfolio-active');
	

	$('.websites').click(function(){
		$(this).addClass('portfolio-active');
		$('.print').removeClass('portfolio-active');
		$('.identity').removeClass('portfolio-active');
		$('#websites').addClass('show');
		$('#print').removeClass('show');
		$('#identity').removeClass('show');

	});

	$('.print').click(function(){
		$(this).addClass('portfolio-active');
		$('.websites').removeClass('portfolio-active');
		$('.identity').removeClass('portfolio-active');
		$('#print').addClass('show');
		$('#websites').removeClass('show');
		$('#identity').removeClass('show');
	
	});

	$('.identity').click(function(){
		$(this).addClass('portfolio-active');
		$('.websites').removeClass('portfolio-active');
		$('.print').removeClass('portfolio-active');
		$('#identity').addClass('show');
		$('#websites').removeClass('show');
		$('#print').removeClass('show');

	});

	$('.portfolio').hover(function(){
		$(this).children('.entry-content').slideToggle();

	});
});

