<?php if(!defined('APP')) die('error!');?>
<!doctype html>
<html>
 <head>
  <meta charset="utf-8">
  <title>查看历年论文题目</title>

  <style>
  .body{background-color: #f0f8fb;}
	.box{margin:20px;}
	.box .title{font-size:22px;font-weight:bold;text-align:center;}
	.box table{margin-top:15px;border-collapse:collapse;
	font-size:15px;border:1px solid #B5D6E6;}
	.box table th,.box table td{height:20px;border:1px solid #B5D6E6;}
	.box table th{background-color:#E8F6FC;font-weight:normal;text-align: center;}
	.box table td{text-align:center;}
  </style>

  <script language=javascript>
  function edit(){
  	var msg="您真的确定要修改吗？\n\n请确认！";
  	if(confirm(msg)==true){
  		return true;
  	}else{
  		return false;
  	}
  }
  function del(){
  	var msg="您真的确定要删除吗？\n\n请确认！";
  	if(confirm(msg)==true){
  		return true;
  	}else{
  		return false;
  	}
  }
  </script>
</head>
<body class="body">
<table background="../images/bg.jpg" width="1280" height="100" cellpadding="0" cellspacing="0" class="mainbar" align="center">
  <tr>
    <td colspan="2" valign="top"><div id=topbarTop></div></td>
  </tr>
  <tr>
    <td width="900" rowspan="3"><br>
        
        <br>    </td>
    <td width="80" height="25" class="topOption"><a href="">收藏本页</a?</td>
  </tr>
 <tr>
    <td width="80" height="25" class="topOption">&nbsp;</td>
  </tr>
  <tr>
    <td width="80" height="25" class="topOption"><a href="../login.htm">退出系统</a></td>
  </tr>
</table>

	<form action="./mysqli_showlist.php" method="post">
	<div class="box">
		
		<div class="search" align="right">快速查询：<input type="text" name="keyword"/>
		<input type="submit" value="提交" /></div>

			
    <table width="1000" border="1">
  <tr>
    <td colspan="2" bgcolor="#3393ce">&nbsp;</td>
  </tr>
  <tr>
    <td><table border="1" width="180">
  <tr>
    <td height="25" class="leftMenu" >&nbsp;&nbsp;<img src="../images/CreateLeads.gif" width="16" height="16">&nbsp;&nbsp;<a href="./mysqli_empAdd.php" target="self">添加论文信息&nbsp;&nbsp;&nbsp;&nbsp;</a></td>
  </tr>
  <tr>
     <td height="25" class="leftMenu">&nbsp;&nbsp;<img src="../images/CreateLeads.gif" width="16" height="16">&nbsp;&nbsp;<a href="./show.php" target="_self">查看历年论文题目</a></td>

  </tr>

  <tr>
    <td height="25" class="leftMenu">&nbsp;&nbsp;<img src="../images/CreateLeads.gif" width="16" height="16">&nbsp;&nbsp;<a href="./showxiugaimima.php" target="_self">更改密码&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></td>

  </tr>
  
  <tr>
    <td height="25">&nbsp;</td>
  </tr>
  <tr>
    <td class="lineImg" bgcolor="#3393ce">&nbsp;</td>

  </tr>
</table>
&nbsp;</td>
    <td><table width="1100" border="1">
  <tr>
    <td colspan="6"><font color="red" size="3"> 论文管理系统：教师管理>>查看论文题目</font>&nbsp;</td>
  </tr>
  <tr>
    <th width="5%">ID</th><th>论文题目</th><th>上传教师</th><th>选题学生</th><th>上传时间</th><th width="20%">操作</th>
			</tr>
			<?php  if(!empty($teacher)) { ?>
			<?php foreach($teacher as $row){ ?>
			<tr>
				 <td><?php echo $row['ID']; ?></td>
				 <td><?php echo $row['论文题目']; ?></td>
				 <td><?php echo $row['上传教师']; ?></td>
				 <td><?php echo $row['选题学生']; ?></td>
				 <td><?php echo $row['上传时间']; ?></td>
		<td>
			<div align="center">
				<span>
				<img src="images/edt.gif" width="16" height="16" />
				<a href="<?php echo './mysqli_empUpdata.php?ID='.$row['ID']?>"
				onclick="javascript:return edit()">编辑</a>&nbsp;&nbsp;
				<img src="images/del.gif" width="16" height="16" />
				<a href="<?php echo './mysqli_empDel.php?ID='.$row['ID']?>"
				onclick="javascript:return edit()">删除</a>&nbsp;&nbsp;
				</span>
			</div>
		</td>

			</tr>
			<?php }?>
			<?php }else{ ?>
			<tr><td colspan="6">查询的结果不存在！</td></tr>
			<?php }?>
  </tr>
</table>
</form>
			<div class="page" align="right"><?php echo $page_html; ?></div>
			
&nbsp;</td>
  </tr>
</table>

		
</body>
</html>