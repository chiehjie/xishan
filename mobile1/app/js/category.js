/**
 * Created by Administrator on 2016/12/26.
 */
var buttonArr = document.getElementsByClassName("box");
var divArr=document.getElementsByClassName("content");
for(var i = 0; i < buttonArr.length;i++) {
    buttonArr[i].onclick = function() {
        //forѭ������button���鳤��
        for(var j = 0; j < buttonArr.length; j++) {
            //�������е�button��ʽ
            buttonArr[j].style.backgroundColor = "#FFFFFF";
            //����ǰ��(������Ǹ�)�Ǹ�button�����ʽ
            this.style.backgroundColor = "#EFEFEF";
            //�������е�div
            divArr[j].style.display = "none";
            //�жϵ�ǰ����ǰ�ť�����е���һ����
            if(this == buttonArr[j]) {
                //��ʾ�����ť��Ӧ��div
                divArr[j].style.display = "block";
            }
        }
    }
}