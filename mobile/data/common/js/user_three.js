/**
 * Created by Administrator on 2017/1/6.
 */
$(document).ready(function () {
    $(".ps_no").click(function () {
        var psNo = $(this).attr('num');
        var mima = $('.pswd').val();
        $(".pswd").val(mima + psNo);
        var changdu = $(".pswd").val().length;
        if (changdu == 6) {
            $('.ps_no').attr('disabled', true);
            alert('密码输入完成');
            $('.mySuccese').click(function(){

            })
            //return false;
            //验证完成
            //$('.mm_down').html("<div class='mm_xywc'><img src='yz.png' height='100' width='100' alt='这里放个勾' ><br />校验完成</div>");
        }
    });
    $(".del").click(function () {
        var psw = $('.pswd').val();
        var newpsw = psw.substring(0, psw.length - 1);
        $(".pswd").val(newpsw);
    });
});