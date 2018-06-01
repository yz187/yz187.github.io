<?php
//声明文件解析的编码格式
header('content-type:text/html;charset=utf-8');
require './public_sqli_fun.php';
$ID=isset($_GET['ID'])?intval($_GET['ID']):0;
if(!empty($_POST)){
	$update=array();
	$fields=array('题目','作者','来源','上传时间','文本内容');
	
	foreach ($fields as $v) {
		$data=isset($_POST[$v])?$_POST[$v]:'';
		if($data=='')die($v.'字段不能为空');
		$data=safeHandle($link,$data);
		echo "<script>alert(".$data.")</script>";
		$update[]="`$v`='$data'";
	}
	$update_str=implode(',',$update);
	$sql="update `student` set $update_str where `ID`=$ID";
	if($res=query($link,$sql)){
		header("Location: ./mysqli_showlist.php");
		die;
	}else{
		die('论文信息修改失败!');
	}
}else{
	$sql="select * from `student` where `ID`=$ID";
	$student=fetchRow($link,$sql);
	define('APP','itcast');
    require './mysqli_updata_html.php';
}
?>