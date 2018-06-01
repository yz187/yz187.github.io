<?php if(!defined('APP')) die('error!');?>
<!doctype html>
<html>
 <head>
 <meta charset="utf-8">
 <title>学生管理中心</title>
 <style>
 body{background-color:#eee;margin:0;padding:0;background-image: url(../images/5.jpg);}
.box{width:400px;margin:15px;padding:30px;border:0px solid #ccc;background-color:#f7fefc;}
.error-box{text-align: center;margin: 15px;padding: 10px;background: #FFF0F2;border: 1px dotted #ff0099;font-size: 14px;color: #ff0000;}
.error-box a{color: #0066fff;}
.box .title{font-size: 20px;text-align: center;margin-bottom: 20px;}
.box .welcome{text-align: center;}
.box .welcome a{color: #0066ff;}
.box .welcome span{color: #ff0000;}
 </style>
 </head>
 <body class="body">
 <div class="box">
 	<div class="title">学生管理中心</div>
 	<?php if($login): ?>
 		<div class="welcome">“<span><?php echo $userinfo['username'];?>
 		</span>”您好，欢迎来到会学生管理中心！<a href="?action=logout">退出</a></div>
 	<?php else:?>
 		<div class="error-box">您还未登录，请先<a href="login.html">登录</a>
 		或<a href="register_html.html">注册新用户</a></div>
 		<?php endIf;?>
 		</div>
 		</body>
 		</html>

