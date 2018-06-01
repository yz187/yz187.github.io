<?php if(!defined('APP')) die('error!');?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>修改管理员信息</title>
  <link rel="stylesheet" href="./js/jquery.datetimepicker.css"/>
  <script src="./js/jquery.js"></script>
  <script src="./js/jquery.datetimepicker.js"></script>

<style>
.body{background-color: #f0f8fb;}
.box{background-color: #eee;margin: 0;padding: 0;}
.box{width: 400px;margin: 15px auto;padding: 20px;border: 1px solid #ccc;background-color: #fff;}
.box h1{font-size: 20px;text-align: center;}
.profile-table{margin: 0 auto;}
.profile-table th{font-weight: normal;text-align: right;}
.profile-table input[type="text"]{width: 180;border: 1px solid #ccc;height: 22px;padding-left:4px;}
.profile-table .button{background-color: #0099ff;border: 1px solid #0099ff;color: #fff;width: 80px;
height: 25px;margin: 0 5px;cursor: pointer;}
.profile-table .td-btn{text-align: center;padding-top: 10px;}
.profile-table th,.profile-table td{padding-bottom: 10px;}
.profile-table td{font-size: 14px;}
.profile-table .txttop{vertical-align: top;}
.profile-table select{border: 1px solid #ccc;min-width: 80px;height: 25px;}
.profile-table .description{font-size: 13px;width: 250px;height: 60px;border: 1px solid #ccc;}
</style>
<body class="body">
<div class="box">
	<h1>修改管理员信息</h1>
	<form method="post" action="">
	<table class="profile-table">
	
	<tr><th>姓名：</th><td><input type="text" name="姓名" value="<?php echo $manage['姓名'];?>"/></td></tr>
	<tr><th>性别：</th><td><input type="radio" name="性别" value="男" id="male" 
	<?php if($manage['性别']=='男') echo 'checked';?>"/>
	<label for="male">男</label>
	<input type="radio" name="性别" value="女" id="female" 
	<?php if($manage['性别']=='女') echo 'checked';?>" /><label for="female">女</label></td></tr>
	<tr><th>邮箱：</th><td><input type="text" name="邮箱" value="<?php echo $manage['邮箱'];?>"/></td></tr>
	
	
	<tr><td colspan="2" class="td-btn">
	<input type="submit" value="保存资料" class="button"/>
	<input type="reset" value="重新填写" class="button"/>
	</td></tr>
	</table>
	</form>
	</div>
	</body>
	</html>