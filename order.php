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

        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
        }

        .bordered {
            border: solid #ccc 1px;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            text-align: center;
        }

        .bordered tr,
        td {
            border: solid #ccc 1px;
            padding: 10px;
        }

        .bordered tr:nth-child(1) {
            background-color: aqua;
        }

        .bordered tr:nth-child(10) {
            text-align: right;
        }

        span {
            color: red;
            font-weight: bold;
        }

        h2 {
            text-align: center;
            margin: 9px 0;
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
    $goods = array(
        array('name' => 'c语言程序设计', 'price' => "96", 'num' => 4),
        array('name' => 'C++程序设计', 'price' => "96", 'num' => 3),
        array('name' => '办公软件', 'price' => "92", 'num' => 1),
        array('name' => '计算机网络', 'price' => "98", 'num' => 3),
        array('name' => 'web编程基础', 'price' => "83", 'num' => 3),
        array('name' => '数据库原理与应用', 'price' => "84", 'num' => 3),
        array('name' => 'linux操作系统', 'price' => "82", 'num' => 4),
        array('name' => '大学计算机基础', 'price' => "89", 'num' => 3),
    );
    $total = 0;
    $str = '<h2>成绩单</h2>';
    $str .= '<table class="bordered">';
    $str .= '<tr><td>课程名字</td><td>成绩</td><td>学分</td><td>学分绩点</td><td>成绩绩点</td></tr>';
    foreach ($goods as $values) {
        $str .= '<tr>';
        foreach ($values as $v) {
            $str .= '<td>' . $v . '</td>';
        }
        $num = $values['price'] / 10 - 5;
        $cyh = $values['num'] * $num;
        $str .= '<td>' . $cyh . '</td>';
        $str .= '<td>' . $num . '</td>';
        $str .= '</tr>';
        $total += $values['price'];
    }
    $str .= '<tr><td colspan="5">总成绩：<span>' . $total . '</span></td></tr></table>';
    echo $str;
    ?>
</body>

</html>