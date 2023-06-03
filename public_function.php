<?php
function dbinit(){
    $link = mysqli_connect('localhost','root','root','087cyh');
if(!$link){
    exit(mysqli_connect_error());
}
//设置字符集
if(!mysqli_set_charset($link,'utf8')){
    exit(mysqli_error($link));
}
return $link;
}
function query($sql){
    $link=mysqli_connect('localhost','root','root','087cyh');
    if($result=mysqli_query($link,$sql)){
        return $result;
    }else{
        echo 'SQL执行失败<br>';
        echo '错误的SQL行为',$sql,'<br>';
        echo '错误代码为：',mysqli_errno($sql),'<br>';
        echo '错误信息为：',mysqli_error($sql),'<br>';
        die;
    }
}
function fetchall($sql){
    if($result=query($sql)){
        $rows=array();
        while($row=mysqli_fetch_array($result)){
            $rows[]=$row;
        }
    mysqli_free_result($result);
        return $rows;
    }else{
        return false;
    }
}
function safehandle($data){
    $link=mysqli_connect('localhost','root','root','087cyh');
    $data=htmlspecialchars($data);
    $data=mysqli_real_escape_string($link,$data);
    return $data;
}
function fetchrow($sql){
    if($result=query($sql)){
        $row=mysqli_fetch_array($result);
        return $row;
    }else{
        return false;
    }
}
?>