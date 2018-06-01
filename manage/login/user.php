<?php
//声明文件解析的编码格式
header('Content-Type:text/html;charset=utf-8');
session_start();

if(isset($_GET['action'])&&$_GET['action']=='logout'){
	unset($_SESSION['userinfo']);
	if(empty($_SESSION)){
		session_destroy();
	}
	header('Location:login.php');
	die;
}

if(isset($_SESSION['userinfo'])){
	$login=true;
	$userinfo=$_SESSION['userinfo'];
}else{
	$login=false;
}

define('APP','itcast');
require 'user_html.php';