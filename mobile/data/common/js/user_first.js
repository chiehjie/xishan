/**
 * Created by Administrator on 2017/1/6.
 */
window.onload = function(){
    var cd = document.getElementsByClassName('bordernone')[0];
    var inpt = document.getElementsByClassName('active')[0];
    var str = document.getElementsByClassName('icon')[0];
    var reg = /^1[3|4|5|7|8][0-9]{9}$/;
    cd.onkeyup = function(){
        if(reg.test(cd.value)){
            inpt.disabled = false;
            inpt.style.background = '#d32727';
            inpt.style.color = '#fff';
        }else{
            inpt.disabled = true;
            inpt.style.background = '#e4e4e4';
            inpt.style.color = '#b7b7b7';
        }
    }
}
