<?php
require './public_function.php';
dbinit();
//检查一个变量是否为空
if(!empty($_POST)){
    $fields=array('id','user','pass');
    $value=array();
    foreach($fields as $k=>$v){
        $data=isset($_POST[$v])?$_POST[$v]:'';// isset() 测试一个被设置成 NULL 的变量，将返回 FALSE
        if($data=='')die($v.'字段不能为空');
        $data=safehandle($data);//过滤字符串中的HTML特殊字符
        $fields[$k]="`$v`";
        $values[]="'$data'";
    }
    $fields=implode(',',$fields);  //把数组元素组合为字符串
    $values=implode(',',$values);
    $sql="insert into `user` ($fields) values ($values)";
    if($res=query(($sql))){
        header('Location: ./login.php');
        die;
    }else{
        die('添加失败');
    }
}
require './add_login_html.php';
?>