/**
 * Created by Administrator on 2016/12/30.
 */
var buttonArr= document.getElementsByClassName("mui-row-col");
for(var i = 0; i < buttonArr.length;i++) {
    buttonArr[i].onclick = function() {
        //for循环遍历button数组长度
        for(var j = 0; j < buttonArr.length; j++) {
            //重置所有的button样式
            buttonArr[j].style.backgroundColor = "#FFFFFF";
            //给当前的(点击的那个)那个button添加样式
            this.style.backgroundColor = "#DFDFDF";
        }
    }
}