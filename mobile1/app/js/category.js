/**
 * Created by Administrator on 2016/12/26.
 */
var buttonArr = document.getElementsByClassName("box");
var divArr=document.getElementsByClassName("content");
for(var i = 0; i < buttonArr.length;i++) {
    buttonArr[i].onclick = function() {
        //for循环遍历button数组长度
        for(var j = 0; j < buttonArr.length; j++) {
            //重置所有的button样式
            buttonArr[j].style.backgroundColor = "#FFFFFF";
            //给当前的(点击的那个)那个button添加样式
            this.style.backgroundColor = "#EFEFEF";
            //隐藏所有的div
            divArr[j].style.display = "none";
            //判断当前点击是按钮数组中的哪一个？
            if(this == buttonArr[j]) {
                //显示点击按钮对应的div
                divArr[j].style.display = "block";
            }
        }
    }
}