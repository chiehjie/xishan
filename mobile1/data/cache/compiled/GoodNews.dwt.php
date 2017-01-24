<!DOCTYPE html>
<html lang="en">
<head>
<meta name="Generator" content="ECTouch 1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <title>喜讯</title>
    <link rel="stylesheet" href="__PUBLIC__/bootstrap/css/style.css">
</head>
<body>
<header class="fixed">
    <div class="header">
        喜讯
    </div>
    <div class="position">
        <img src="themes/default/images/icon5.png" alt="">
    </div>
</header>
<div class="section">
    <span class="Location-boxOne">
        <img src="themes/default/images/search.png" alt="">
    </span>
    <input class="CommodityName" type="text" name="username" placeholder="搜索">
</div>
<div class="AddTo">
    <a href="<?php echo url('goodnews/add_friends');?>">
        <div class="sort_listOne">
            <div class="num_logo">
                <img src="themes/default/images/add.png" alt="">
            </div>
                <div class="num_name">
                    添加朋友
                </div>
        </div>
    </a>
    <a href="GroupChat.html">
        <div class="sort_listOne">
            <div class="num_logo">
                <img src="themes/default/images/qunliao.png" alt="">
            </div>
            <div class="num_name">群聊</div>
        </div>
    </a>
    <a href="MessageBox.html">
        <div class="sort_listOne">
            <div class="num_logo">
                <img src="themes/default/images/xiaox.png" alt="">
            </div>
            <div class="num_name">
                消息盒子
                <div class="news">
                    1
                </div>
            </div>
        </div>
    </a>
</div>
<div id="letter" ></div>
<div class="sort_box">
    <div class="sort_list">
        <div class="num_logo">
            <img src="themes/default/images/img.png" alt="">
        </div>
        <div class="num_name">张三</div>
    </div>
    <div class="sort_list">
        <div class="num_logo">
            <img src="themes/default/images/img.png" alt="">
        </div>
        <div class="num_name">张三</div>
    </div>
    <div class="sort_list">
        <div class="num_logo">
            <img src="themes/default/images/img.png" alt="">
        </div>
        <div class="num_name">x三</div>
    </div>
    <div class="sort_list">
        <div class="num_logo">
            <img src="themes/default/images/img.png" alt="">
        </div>
        <div class="num_name">李四</div>
    </div>
    <div class="sort_list">
        <div class="num_logo">
            <img src="themes/default/images/img.png" alt="">
        </div>
        <div class="num_name">王五</div>
    </div>
</div>
<div class="initials">
    <ul>
        <li><img src="themes/default/images/068.png"></li>
    </ul>
</div>

<?php echo $this->fetch('library/footer.lbi'); ?>

<script type="text/javascript" src="__PUBLIC__/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/jquery.charfirst.pinyin.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/sort.js"></script>

</body>
</html>