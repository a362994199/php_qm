<?php

    //验证用户名（2-16位，只允许汉字，数字下划线）

    function checkUsername($username){
        if(!preg_match('/^[\w\x{4e00}-\x{9fa5}]{2,10}$/u',$username)){
            return '用户名格式不符合要求';
        }
        return true;
    }
    
    //验证密码（6-16位，只允许英文字母，数字下划线）
    function checkPassword($password){
        if(!preg_match('/^\w{6,16}$/',$password)){
            return '密码格式不符合要求';
        }
        return true;
    }
?>
