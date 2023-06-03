<?php
require './public_function.php';
dbinit();
if(!empty($_POST)){
    $fields=array('id','姓名','部门','出生日期','入职时间');
    $value=array();
    foreach($fields as $k=>$v){
        $data=isset($_POST[$v])?$_POST[$v]:'';
        if($data=='')die($v.'字段不能为空');
        $data=safehandle($data);
        $fields[$k]="`$v`";
        $values[]="'$data'";
    }
    $fields=implode(',',$fields);
    $values=implode(',',$values);
    $sql="insert into `087cyh1` ($fields) values ($values)";
    if($res=query(($sql))){
        header('Location: ./showlist.php');
        die;
    }else{
        die('添加失败');
    }
}
require './add_html.php';
?>