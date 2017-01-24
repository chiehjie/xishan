$(function(){
	$("#chose_bank").bind('click',function(){
		if($('.bank_xl').hide()){
		$('.bank_xl').show();
		$(".jt_xz").attr("src","images/jtx.png");
		}
		//if($('.bank_xl').css('display','none')){
		//	$('.bank_xl').hide();
		//	$(".jt_xz").attr("src","images/jtx1.png");
		//}
	});
	$(".hotBank-list-ico").bind('click',function(){
		$('#chose_input').val($(this).attr('title'));
		$('.bank_xl').hide();
		$(".jt_xz").attr("src","images/jtx1.png");
	});
	//第二个密保问题
	$("#chose_bank2").bind('click',function(){
			$('.bank_xl2').show();
			$(".jt_xz2").attr("src","images/jtx.png");
	});
	$(".hotBank-list-ico2").bind('click',function(){
		$('#chose_input2').val($(this).attr('title'));
		$('.bank_xl2').hide();
		$(".jt_xz2").attr("src","images/jtx1.png");
	});

});