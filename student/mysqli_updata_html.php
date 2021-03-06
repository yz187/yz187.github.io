<?php if(!defined('APP')) die('error!');?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>查看论文信息</title>
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
.profile-table th,.profile-table td{padding-bottom: 10px;padding-top: 0px;}
.profile-table td{font-size: 14px;}
.profile-table .txttop{vertical-align: top;}
.profile-table select{border: 1px solid #ccc;min-width: 80px;height: 25px;}
.profile-table .description{font-size: 13px;width: 250px;height: 100px;border: 1px solid #ccc;}
</style>
<body class="body">
<div class="box">
	<h1>查看论文信息</h1>
	<form method="post" action="">
	<table class="profile-table">
	
	<tr><th>题目：</th><td><input type="text" name="题目" value="<?php echo $student['题目'];?>"/></td></tr>
	<tr><th>作者：</th><td><input type="text" name="作者" value="<?php echo $student['作者'];?>"/></td></tr>
	<tr><th>来源：</th><td><input type="text" name="来源" value="<?php echo $student['来源'];?>"/></td></tr>
	<tr><th>上传时间：</th><td><input type="text" name="上传时间" value="<?php echo $student['上传时间'];?>"/></td></tr>
	<tr><th>文本内容：</th><td><textarea class="description" name="文本内容" >
		<?php echo $student['文本内容'];?></textarea></td></tr>
	<tr><td colspan="2" class="td-btn">
	<input type="submit" value="返回" class="button"/>
	
	</td></tr>
	</table>
	</form>
	</div>
	</body>
	</html>