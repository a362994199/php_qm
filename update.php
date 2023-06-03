<?php
require './public_function.php';
dbinit();
$id=isset($_GET['id'])?intval($_GET['id']):0;

if(!empty($_POST)){
    $update=array();
    $fields=array('id','name','职务','出生日期','入党时间');
   
    foreach($fields as $v){
        $data=isset($_POST[$v])?$_POST[$v]:'';
        if($data=='')die($v.'字段不能为空');
        $data=safehandle($data);
        $update[]="`$v`='$data'";
    }
    $values=implode(',', $update);
    $sql="update `dy_table` set $values  where `id`=$id";
    if($res=query(($sql))){
        header('Location:./showlist.php');
        die;
    }else{
        die('修改失败');
    }
}else{
    $sql="select * from `dy_table` where `id`=$id";
    $emp_info=fetchrow($sql);
    require './update_html.php';
}
?>