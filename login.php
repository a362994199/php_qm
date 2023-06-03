<?php
    header('Content-Type:text/html;charset=utf-8');
    $error = array(); //保存错误信息
    if(!empty($_POST)){
        //当有表单提交时
        $username  = isset($_POST['username']) ? trim($_POST['username']) : '';
        $password  = isset($_POST['password']) ? $_POST['password'] : '';
        require 'check_form.lib.php';
        if(($result = checkUsername($username)) !== true) $error[] = $result;
        if(($result = checkPassword($password)) !== true) $error[] = $result;

        //表单验证通过，再到数据库中验证
        if(empty($error)){
            require './public_function.php';
            dbInit();
            $sql = "select * from `user` where `user` = '$username' and `pass` = '$password'";
            //执行成功时，跳转到showList.php页面，当执行失败时，显示错误信息
            if($res = fetchRow($sql)){
                header("Location:./showList.php");
                die;
            }
            else{
                die('登录失败。用户名不存在或密码错误！');
            }
        }
    }
    //加载HTML模板文件
    require 'login_html.php';
?>
