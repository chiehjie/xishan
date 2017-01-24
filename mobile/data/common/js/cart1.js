/**
 * Created by Administrator on 2017/1/14.
 */
function byId(id){
    return document.getElementById(id);
}
var ul = byId('ul');
var hide = byId('hide');
var aLi = ul.getElementsByTagName('li');
var himg = document.getElementsByClassName('hiden_img')[0];
var img = himg.getElementsByTagName('img')[0];
var images = ['images/cup.png','images/cup2.png','images/cup.png','images/cup2.png',];
for(var i = 0;i < aLi.length;i++){
    aLi[i].aa = i;
    aLi[i].onclick = function(){
        for(j = 0;j < aLi.length;j++){
            aLi[j].className = '';
        }
        img.src = images[this.aa];
        this.className = 'tli';
        i = this.aa;
    }
}
var uul = byId('uul');
var hide2 = byId('hide2');
var aLli = uul.getElementsByTagName('li');
var heimg = document.getElementsByClassName('hide_img')[0];
var ig = heimg.getElementsByTagName('img')[0];
var imags = ['images/cup2.png','images/cup.png','images/cup2.png','images/cup.png',];
for(var k = 0;k < aLli.length;k++){
    aLli[k].as = k;
    aLli[k].onclick = function(){
        for(h = 0;h < aLli.length;h++){
            aLli[h].className = '';
        }
        ig.src = imags[this.as];
        this.className = 'tli';
        k = this.as;
    }
}
$(function(){
    $('.artop').click(function(){
        $('#hide').css('display','block');
    })
    $('.close').click(function(){
        $('#hide').css('display','none');
    })
    $('.hide_bot').click(function(){
        $('#hide').css('display','none');
    })

    $('.ardown').click(function(){
        $('#hide2').css('display','block');
    })
    $('.close').click(function(){
        $('#hide2').css('display','none');
    })
    $('.hide_bot').click(function(){
        $('#hide2').css('display','none');
    })
})