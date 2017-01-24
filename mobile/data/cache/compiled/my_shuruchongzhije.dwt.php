<!DOCTYPE html>
<html lang="en">
<head>
<meta name="Generator" content="ECTouch 1.0" />
    <title>输入充值金额</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="css/mui.css"/>
    <style>
        *{
            padding:0;
            margin:0;
            font-family: "Microsoft YaHei","微软雅黑", helvetica, arial, verdana, tahoma, sans-serif;
        }
        .headerBox{
            font-size: 1em;
            background-color: rgb(255,255,255);
            padding-top: 15px;
            padding-bottom: 15px;
        }
        .headerBox div:nth-child(1){
            position: absolute;
            text-align: center;
            font-size: 1.3em;
            left: 5%;
            top: 13px;
            color: #727272;
        }
        .headerBox div:nth-child(2){
            text-align: center;
        }
        input[type='number']{
            padding: 0;
            margin: 0;
            border: none;
            font-size: 0.9em;
            font-family: "微软雅黑";
        }
        .mui-col-xs-2 p{
            height: 40px;
            line-height: 40px;
            margin: 0;
        }
        input[type='submit']{
            background-color: #E4E4E4;
            border: none;
            color: #b7b7b7;
            font-size: 0.9em;
            font-family: "微软雅黑";
        }
    </style>
</head>
<body>
    <header>
        <div class="mui-row headerBox">
            <div class="mui-action-back mui-icon mui-icon-left-nav "></div>
            <div class="mui-col-xs-12">
                账户充值
            </div>
        </div>
    </header>
    <form action="">
        <div class="mui-row" style="background: white;margin-top: 30px">
            <div class="mui-col-xs-2">
                <p style="width: 100%;text-align: center">金额</p>
            </div>
            <div class="mui-col-xs-10">
                <input type="number" placeholder="请输入充值金额" id="text"/>
            </div>
        </div>
        <div class="mui-row">
            <div class="mui-col-xs-1"></div>
            <div class="mui-col-xs-10">
                <input type="submit" id="xz" value="选择充值方式" style="width: 100%;height: 40px;margin-top: 30px" disabled="disabled"/>
            </div>
            <div class="mui-col-xs-1"></div>
        </div>
    </form>
    <script src="js/mui.js"></script>
    <script src="js/jquery-1.11.3.js"></script>
    <script>
        $(function(){
            var text=document.getElementById("text");
            var xz=document.getElementById('xz');
            text.onkeyup=function(){
                xz.style.backgroundColor="#d32727";
                xz.removeAttribute("disabled");
            }
        })
    </script>
</body>
</html>