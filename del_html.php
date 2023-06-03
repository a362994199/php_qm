<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: #eee;margin: 0;padding: 0;
        }
        .box{
            width: 400px;
            margin: 15px;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #fff;
        }
        .box h1{
            font-size: 20px;
            text-align: center;
        }
        .profile-table th{
            font-weight: normal;
            text-align: right;
        }
        .profile-table input{
            width: 180px;
            border: 1px solid #0099ff;
            color: #000;
            height: 25px;
            margin: 0 5px;
            
        }
        .profile-table .td-btn{
            text-align: center;
            padding-top: 10px;
        }
        .profile-table th,.profile-table td{
            padding-bottom: 10px;
        }
        .profile-table td{
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="box">
        <h1>删除党员资料</h1>
        <form  method="post">
            <table class="profile-table">
                <tr>
                    <th>编号：</th>
                    <td><input type="text" name="id" value="<?php echo $emp_info['id'];?>"></td>
                </tr>
                <tr>
                    <th>姓名：</th>
                    <td><input type="text" name="name" value="<?php echo $emp_info['name'];?>">></td>
                </tr>
                <tr>
                    <th>职务：</th>
                    <td><input type="text" name="职务" value="<?php echo $emp_info['职务'];?>">></td>
                </tr>
                <tr>
                    <th>出生日期：</th>
                    <td><input type="date" name="出生日期" value="<?php echo $emp_info['出生日期'];?>">></td>
                </tr>
                <tr>
                    <th>入党时间：</th>
                    <td><input type="date" name="入党时间" value="<?php echo $emp_info['入党时间'];?>">></td>
                </tr>
                <tr>
                    <td colspan="2" class="td-btn">
                        <input type="submit" value="删除资料" class="button">
                        <input type="reset" value="重新填写" class="button">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>