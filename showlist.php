<?php
// $link = mysqli_connect('localhost','root','root','087cyh');
// if(!$link){
//     exit(mysqli_connect_error());
// }
// //设置字符集
// if(!mysqli_set_charset($link,'utf8')){
//     exit(mysqli_error($link));
// }

require './public_function.php';
dbinit();

$where='';

if(isset($_GET['keyword'])){
    $keyword=$_GET['keyword'];
    $keyword=mysqli_real_escape_string(dbinit(),$keyword);
    $where="where id like '%$keyword%' or name like '%$keyword%' or 职务 like '%$keyword%' or 出生日期 like '%$keyword%' or 入党时间 like '%$keyword%'";

}

$sql = "select * from dy_table $where ";
// $sql = 'select * from `087cyh1` $where';


// $res = mysqli_query($link,$sql);
// $emp_info=array();

// while($row=mysqli_fetch_assoc($res)){
//     $emp_info[]=$row;
// }

$emp_info=fetchall($sql);
require './list_html.php';
?>