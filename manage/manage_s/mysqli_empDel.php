<?php
//声明文件解析的编码格式
header('content-type:text/html;charset=utf-8');
require './public_sqli_fun.php';
$ID=isset($_GET['ID'])?intval($_GET['ID']):0;
	echo 'ID:'.$ID;
	$sql="delete from `manage_s` where `ID`=$ID";
	if($res=query($link,$sql)){
		header('Location: ./mysqli_showlist.php');
		die;
	}else{
		die('删除失败!');
	}
?>