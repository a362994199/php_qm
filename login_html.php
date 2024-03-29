<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>欢迎登录</title>
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





        a:link {
            color: #fff;
            text-decoration: none;
        }

        a:visited {
            color: #fff;
        }

        .reg {
            width: 400px;
            margin: 15px auto;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #fff;
        }

        .reg .title {
            text-align: center;
            padding-bottom: 10px;
        }

        .reg th {
            font-weight: normal;
            text-align: right;
        }

        .reg input {
            width: 180px;
            border: 1px solid #ccc;
            height: 20px;
            padding-left: 4px;
        }

        .reg .button {
            background-color: #0099ff;
            border: 1px solid #0099ff;
            color: #fff;
            width: 80px;
            height: 25px;
            margin: 0 5px;
            cursor: pointer;
        }

        .reg .td-btn {
            text-align: center;
            padding-top: 10px;
        }

        .error-box {
            width: 378px;
            margin: 15px;
            padding: 10px;
            background: #fff0f2;
            border: 1px dotted #ff0099;
            font-size: 14px;
            color: #ff0000;
        }

        .error-box ul {
            margin: 10px;
            padding-left: 25px;
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
    <form method="post">
        <table class="reg">
            <tr>
                <td class="title" colspan="2">欢迎登录</td>
            </tr>
            <tr>
                <th>用户名：</th>
                <td><input type="text" name="username" /></td>
            </tr>
            <tr>
                <th>密码：</th>
                <td><input type="password" name="password" /></td>
            </tr>
            <tr>
                <td colspan="2" class="td-btn">
                    <input type="submit" value="登录" class="button" />
                    <input type="reset" value="重新填写" class="button" />
                    <a href="<?php
                                echo './add_login.php';
                                ?>"><input type="button" class="button" value="注册"></a>
                </td>
            </tr>
        </table>
    </form>
    <?php if (!empty($error)) : ?>
        <div class="error-box">登录失败。错误信息如下：
            <ul><?php foreach ($error as $v) echo "<li>$v</li>"; ?></ul>
        </div>

    <?php endif; ?>
</body>

</html>