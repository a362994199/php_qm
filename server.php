<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>服务器信息</title>
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
            border: 1px solid #DADADA;
            padding-top: 10px;
            background-color: #fff;
        }

        table tr,
        td {
            padding: 10px;
            text-align: right;
        }

        table th {
            border-bottom: 1px solid #DFE4E7;
            text-align: left;
            text-indent: 28px;
        }

        table td:nth-child(2) {
            text-align: left;
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
    <table>
        <tr>
            <th colspan="2">服务器信息展示</th>
        </tr>
        <tr>
            <td>当前PHP版本号:</td>
            <td><?php echo PHP_VERSION; ?></td>
        </tr>
        <tr>
            <td>操作系统的类型:</td>
            <td><?php echo PHP_OS; ?></td>
        </tr>
        <tr>
            <td>当前服务器时间:</td>
            <td><?php echo date('Y-m-d H:i:s'); ?></td>
        </tr>
    </table>
</body>

</html>