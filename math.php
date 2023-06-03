<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
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

        body {
            background-color: #eee;
            font-size: 14px;
        }

        table {
            color: #2b2b2b;
            width: 100%;
        }

        .bordered {
            border: solid #dadada 1px;
            background-color: #fff;
            text-align: center;
        }

        .bordered tr,
        td {
            border: solid #dadada 1px;
            padding: 10px;
        }

        .bordered tr:nth-child(1) {
            font-weight: bold;
        }

        .bordered tr:nth-child(5) {
            text-align: right;
        }

        .bordered tr:nth-child(6) {
            text-align: right;
        }

        span {
            color: red;
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
    <?php
    const dis = 0.8;
    $cyh1 = '电脑';
    $cyh2 = '平板';
    $cyh3 = '手机';
    $cyh1_num = 3;
    $cyh2_num = 6;
    $cyh3_num = 9;
    $cyh1_rmb = 9000;
    $cyh2_rmb = 6000;
    $cyh3_rmb = 3000;
    $cyh1_total = $cyh1_num * $cyh1_rmb;
    $cyh2_total = $cyh2_num * $cyh1_rmb;
    $cyh3_total = $cyh3_num * $cyh1_rmb;
    $total = ($cyh1_total + $cyh2_total + $cyh3_total) * dis;
    $cyh = "<table class=\"bordered\">";
    $cyh .= "<tr><td>商品名称</td><td>购买数量</td><td>商品价格</td></tr>";
    $cyh .= "<tr><td>$cyh1</td><td>$cyh1_num</td><td>$cyh1_rmb</td></tr>";
    $cyh .= "<tr><td>$cyh2</td><td>$cyh2_num</td><td>$cyh2_rmb</td></tr>";
    $cyh .= "<tr><td>$cyh3</td><td>$cyh3_num</td><td>$cyh3_rmb</td></tr>";
    $cyh .= "<tr><td colspan=\"3\"><span>商品折扣：</span>" . dis . "</td></tr>";
    $cyh .= "<tr><td colspan=\"3\"><span>总价格：</span>{$total}元</td></tr>";
    $cyh .= "</table>";
    echo $cyh;
    ?>
</body>

</html>