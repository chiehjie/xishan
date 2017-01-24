$(function(){
	$('.text').focus(function(){
		$('#sub').css('background',' ');
	})
	$('.text').blur(function(){	
		$('#sub').css({'background':'#D32727','color':'#fff'});
			$('#sub').removeClass('disabled');
	})
})