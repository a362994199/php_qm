<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            
        }
        body {
            margin: 0;
            padding: 0;
            background-color: #eee;
            font-family: sans-serif;
            /* height: 2000px; */
        }

        .nav {
            width: 100%;
            height: 100px;
            background-color: #00FFFF;
        }

        .item {
            position: fixed;
            /*固定在页面顶部*/
            top: 10px;
            right: 20%;
            margin: 0;
            padding: 0;
            display: flex;
            /*弹性布局，使li排成一行*/
        }

        .item li {
            list-style: none;

        }

        .item li a {
            position: relative;
            display: block;
            padding: 10px 20px;
            margin: 20px 0;
            text-decoration: none;
            text-transform: uppercase;
            /*将字符转为大写*/
            color: #262626;
            font-weight: bold;
            /* transition: 0.5s; */
        }

        .item li a:hover {
            color: #fff;
        }

        .item li a:before {
            /*a:before，在a链接之前添加新内容，这里添加上下边框*/
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-top: 1px solid #000;
            border-bottom: 1px solid #000;
            transform: scaleY(2);
            /*拉长边框两倍*/
            opacity: 0;
            /*边距不显示*/
            transition: 0.5s;
            z-index: -1;
        }

        .item li a:hover:before {
            transform: scaleY(1);
            /*拉长边框两倍*/
            opacity: 1;
        }

        .item li a:after {
            content: '';
            position: absolute;
            top: 1px;
            left: 0;
            width: 100%;
            height: 100%;
            background: #000;
            transform: scale(0);
            transition: 0.5s;
            z-index: -1;
        }

        .item li a:hover:after {
            transform: scale(1);
        }

        .box {
            background: url(087.jpg) no-repeat;
            height: 190px;
            width: 480px;
            border: 1px solid #ccc;
            text-align: left;
            background-color: white;
            opacity: 0.8;
        }

        h2 {
            text-align: center;
        }

        p {
            padding-left: 62px;
        }
    </style>
</head>

<body>
    <div class="nav">
        <ul class="item">
            <li><a href="login.php">登录页面</a></li>
            <li><a href="server.php">服务器信息显示</a></li>
            <li><a href="math.php">商品价格计算</a></li>
            <li><a href="score.php">判断学生等级</a></li>
            <li><a href="leap.php">判断是否为闰年</a></li>
            <li><a href="pyth.php">九九乘法表</a></li>
            <li><a href="order.php">成绩单显示</a></li>
        </ul>
    </div>
    <div class="box">
        <?php
        $name = '海盗船长';
        $score = 100;
        $str = '';
        if (is_int($score) || is_float($score)) {
            if ($score >= 64 && $score <= 100) {
                $str = '👑';
            } elseif ($score >= 16 && $score < 64) {
                $str = '☀';
            } elseif ($score >= 4 && $score < 16) {
                $str = '🌙';
            } elseif ($score >= 1 && $score < 4) {
                $str = '⭐';
            } elseif ($score >= 0 && $score < 1) {
                $str = '未达到评级水平';
            } else {
                $str = '等级范围必须是0-100之间';
            }
        } else {
            $str = '输入的等级不是数值';
            $score = '输入错误';
        }
        echo "<h2>等级评定表</h2><p>姓名:$name<p>活跃级数： $score <P>等级:$str;"
        ?>
    </div>
</body>

</html>