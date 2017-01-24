$(function(){
	var mm= document.getElementById('f_pas');
	var sub= document.getElementById('sbutton');
	var reg = /^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{6,20}$/;
	$('.ckbox').click(function(){
		if ($(".psw").attr("type") == "password") {
            $(".psw").attr("type", "text");
        }
        else {
            $(".psw").attr("type", "password");
        }	
	});
	mm.onkeyup = function(){
		if(reg.test(mm.value)){
			sub.style.backgroundColor="#d32727";
			sub.removeAttribute("disabled");
		}else{
			sub.setAttribute("disabled", true);
		}
	}
});