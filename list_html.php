<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>学生信息列表</title>
    <style>
        .box {
            margin: 20px;
        }

        a:link {
            color: #000;
            text-decoration: none;
        }

        a:visited {
            color: #000;
        }

        .box .title {
            font-size: 22px;
            font-weight: bold;
            text-align: center;
        }

        .box table {
            width: 100%;
            margin-top: 15px;
            border-collapse: collapse;
            font-size: 12px;
            border: 1px solid #B5D6E6;
            min-width: 460px;
        }

        .box table th,
        .box table td {
            height: 20px;
            border: 1px solid #B5D6E6;
        }

        .box table th {
            background-color: #E8F6FC;
            font-weight: normal;
        }

        .box table td {
            text-align: center;
        }

        .parent {
            position: relative;
            top: 10px;
        }

        .search {
            width: 300px;
            height: 40px;
            border-radius: 18px;
            outline: none;
            border: 1px solid #ccc;
            padding-left: 20px;
            position: absolute;
        }

        .btn {
            height: 35px;
            width: 35px;
            position: absolute;
            background: url("搜索.png") no-repeat;
            top: 6px;
            left: 285px;
            border: none;
            outline: none;
            cursor: pointer;

        }

        .twinkle {
            width: 100px;
            height: 50px;
            border-radius: 20px;
            text-align: center;
            line-height: 50px;
            font-size: 20px;
            float: right;
            margin-bottom: 20px;
            margin-right: 30px;
            overflow: hidden;
            position: relative;
            border: 2px solid #2c3e50;
            color: #2c3e50;
            transition: background-color .2s;
        }

        .twinkle::before {
            content: "";
            position: absolute;
            width: 50px;
            height: 200%;
            background-color: rgba(255, 255, 255, .6);
            transform: skew(45deg) translate3d(-200px, 0, 0);
        }

        .twinkle:hover {
            background-color: #2c3e50;
        }

        .twinkle:hover::before {
            transition: ease-in-out .5s;
            transform: skew(45deg) translate3d(300px, 0, 0);
        }
    </style>

</head>

<body>
    <div class="twinkle">
        <a href="./add.php">添加党员</a>
    </div>
    <form action="" method="get">
        <div class="parent">
            <input class="search" type="text" name="keyword" placeholder="查找" />
            <input class="btn" type="submit" value=" " />
        </div>

        <div class="box">
            <h1 align="center">党员信息管理系统</h1>
            <div class="title">
                <table border="1">
                    <tr>
                        <th width="5%">编号</th>
                        <th>姓名</th>
                        <th>职务</th>
                        <th>出生日期</th>
                        <th>入党时间</th>
                        <th width="25%">相关操作</th>
                    </tr>
                    <?php if (!empty($emp_info)) { ?>
                        <?php foreach ($emp_info as $row) { ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['职务']; ?></td>
                                <td><?php echo $row['出生日期']; ?></td>
                                <td><?php echo $row['入党时间']; ?></td>
                                <td>
                                    <div class="center">
                                        <span>
                                            <img src="01.png" alt="" width="16" height="16" /><a href="<?php
                                                                                                        echo './update.php?id=' . $row['id'];
                                                                                                        ?>">编辑</a>&nbsp;&nbsp;
                                            <img src="02.png" alt="" width="16" height="16" /><a href="<?php
                                                                                                        echo './del.php?id=' . $row['id'];
                                                                                                        ?>">删除</a>
                                        </span>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    <?php } else { ?>
                        <tr>
                            <td colspan="6">暂无党员数据！</td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </form>

</body>