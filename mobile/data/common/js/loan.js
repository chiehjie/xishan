/**
 * Created by Administrator on 2016/12/30.
 */
var buttonArr= document.getElementsByClassName("mui-row-col");
for(var i = 0; i < buttonArr.length;i++) {
    buttonArr[i].onclick = function() {
        //forѭ������button���鳤��
        for(var j = 0; j < buttonArr.length; j++) {
            //�������е�button��ʽ
            buttonArr[j].style.backgroundColor = "#FFFFFF";
            //����ǰ��(������Ǹ�)�Ǹ�button�����ʽ
            this.style.backgroundColor = "#DFDFDF";
        }
    }
}