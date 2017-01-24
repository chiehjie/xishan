/**
 * Created by Administrator on 2017/1/3.
 */
//名字验证
$(function(){
    $(".registerform").Validform({
        tiptype:3,
        datatype:{//传入自定义datatype类型【方式二】;
            "z2-4" : /^[\u4E00-\u9FA5\uf900-\ufa2d]{2,4}$/
        }
    });
});
//地址验证
var area1 = new LArea();
area1.init({
    'trigger': '#demo1', //触发选择控件的文本框，同时选择完毕后name属性输出到该位置
    'valueTo': '#value1', //选择完毕后id属性输出到该位置
    'keys': {
        id: 'id',
        name: 'name'
    }, //绑定数据源相关字段 id对应valueTo的value属性输出 name对应trigger的value属性输出
    'type': 1, //数据源类型
    'data': LAreaData //数据源
});
area1.value=[1,15,3];//控制初始位置，注意：该方法并不会影响到input的value
var area2 = new LArea();
area2.init({
    'trigger': '#demo2',
    'valueTo': '#value2',
    'keys': {
        id: 'value',
        name: 'text'
    },
    'type': 2,
    'data': [provs_data, citys_data, dists_data]
});
//邮箱验证
function youBian(){
    var ss=document.getElementById('youbian').value;
    var re= /^[1-9][0-9]{5}$/
    if(re.test(ss))
        document.getElementById('label5').innerText="";
    else
    {
        document.getElementById('label5').innerText="邮政编码格式不正确！";

    }
}
//身份证号验证
$(".registerform").Validform({
    tiptype:2,
    datatype:{//传入自定义datatype类型【方式二】;
        "idcard":function(gets,obj,curform,datatype){
            //该方法由佚名网友提供;

            var Wi = [ 7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2, 1 ];// 加权因子;
            var ValideCode = [ 1, 0, 10, 9, 8, 7, 6, 5, 4, 3, 2 ];// 身份证验证位值，10代表X;

            if (gets.length == 15) {
                return isValidityBrithBy15IdCard(gets);
            }else if (gets.length == 18){
                var a_idCard = gets.split("");// 得到身份证数组
                if (isValidityBrithBy18IdCard(gets)&&isTrueValidateCodeBy18IdCard(a_idCard)) {
                    return true;
                }
                return false;
            }
            return false;

            function isTrueValidateCodeBy18IdCard(a_idCard) {
                var sum = 0; // 声明加权求和变量
                if (a_idCard[17].toLowerCase() == 'x') {
                    a_idCard[17] = 10;// 将最后位为x的验证码替换为10方便后续操作
                }
                for ( var i = 0; i < 17; i++) {
                    sum += Wi[i] * a_idCard[i];// 加权求和
                }
                valCodePosition = sum % 11;// 得到验证码所位置
                if (a_idCard[17] == ValideCode[valCodePosition]) {
                    return true;
                }
                return false;
            }

            function isValidityBrithBy18IdCard(idCard18){
                var year = idCard18.substring(6,10);
                var month = idCard18.substring(10,12);
                var day = idCard18.substring(12,14);
                var temp_date = new Date(year,parseFloat(month)-1,parseFloat(day));
                // 这里用getFullYear()获取年份，避免千年虫问题
                if(temp_date.getFullYear()!=parseFloat(year) || temp_date.getMonth()!=parseFloat(month)-1 || temp_date.getDate()!=parseFloat(day)){
                    return false;
                }
                return true;
            }
            function isValidityBrithBy15IdCard(idCard15){
                var year =  idCard15.substring(6,8);
                var month = idCard15.substring(8,10);
                var day = idCard15.substring(10,12);
                var temp_date = new Date(year,parseFloat(month)-1,parseFloat(day));
                // 对于老身份证中的你年龄则不需考虑千年虫问题而使用getYear()方法
                if(temp_date.getYear()!=parseFloat(year) || temp_date.getMonth()!=parseFloat(month)-1 || temp_date.getDate()!=parseFloat(day)){
                    return false;
                }
                return true;
            }
        }
    }
});
$("#button").click(function(){
    $("#meng").css("display","block");
});