<?php
header('Content-Type:text/html;charset=utf-8');

$error=array();

if(!empty($_POST)){

	$username=isset($_POST['username'])? trim($_POST['username']):'';
	$password=isset($_POST['password'])?$_POST['password']:'';

	require 'check_form_lib.php';
	if(($result=checkUsername($username))!==true) $error[]=$result;
	if(($result=checkPassword($password))!==true) $error[]=$result;


	if(empty($error)){
		mysql_connect('localhost','root','yang0329...') or die('数据库连接失败！');
		mysql_query('set names utf8');
		mysql_query('use `manage`') or die('manage数据库不存在！');

		$sql="select `id`,`password` from `user` where `username`='$username'";
		if($rst=mysql_query($sql)){
			$row=mysql_fetch_assoc($rst);

			$password=md5($password);
			if($password==$row['password']){
				session_start();
				$_SESSION['userinfo']=array(
					'id'=>$row['id'],
					'username'=>$username
					);
				header('Location:user.php');
				die;
			}
		}
		$error[]='用户名不存在或密码错误。';
	}
}
define('APP','itcast');
require 'login_html.php';