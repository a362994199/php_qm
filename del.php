<?php
require './public_function.php';
dbinit();
$e_id=isset($_GET['id'])? intval ($_GET['id']) : 0;
if(!empty($_POST)){
    $sql="delete from `dy_table` where `id`=$e_id";
    if($res=query(($sql))){
        header('Location: ./showlist.php');
        die;
    }else{
        die('删除失败');
    }
}
else{
    $sql="select * from `dy_table` where `id`=$e_id";
    $emp_info=fetchrow($sql);
    require './del_html.php';
}

?>