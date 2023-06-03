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
    $where="where 姓名 like '%$keyword%'";
    $where="where id like '%$keyword%'";

}

$sql = "select * from 087cyh1 $where ";
// $sql = 'select * from `087cyh1` $where';


// $res = mysqli_query($link,$sql);
// $emp_info=array();

// while($row=mysqli_fetch_assoc($res)){
//     $emp_info[]=$row;
// }

$emp_info=fetchall($sql);
require './list_html.php';
?>