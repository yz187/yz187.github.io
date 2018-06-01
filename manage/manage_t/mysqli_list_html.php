<?php if(!defined('APP')) die('error!');?>
<!doctype html>
<html>
 <head>
  <meta charset="utf-8">
  <title>论文管理系统</title>

  <style>
  	.body{background-color: #f0f8fb;}
	.box{margin:20px;}
	.box .title{font-size:22px;font-weight:bold;text-align:center;}
	.box table{border-collapse:collapse;
	font-size:15px;border:1px solid #B5D6E6;margin-top: 5px;}
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
    <td width="80" height="25" class="topOption"><a href=""><font color="d0d9d6">收藏本页</font></a></td>
  </tr>
  <tr>
    <td width="80" height="25" class="topOption"><a href="../mysqli_showlist.php"><font color="d0d9d6">返回管理页面</font></a>&nbsp;</td>
  </tr>

</table>

	<form action="./mysqli_showlist.php" method="post">
	<div class="box">
		
		

			
    <table width="1000" border="1" >
  <tr>
    <td colspan="2" bgcolor="#3393ce">&nbsp;</td>
  </tr>
  <tr>
    <td><table border="1" width="165">
  <tr>
    <td height="25" class="leftMenu" >&nbsp;&nbsp;<img src="images/CreateLeads.gif" width="16" height="16">&nbsp;&nbsp;<a href="./mysqli_empAdd.php" target="self">添加教师&nbsp;&nbsp;&nbsp;&nbsp;</a></td>
  </tr>
  
  <tr>
    <td height="25" class="leftMenu">&nbsp;&nbsp;<img src="images/CreateLeads.gif" width="16" height="16">&nbsp;&nbsp;<a href="./showxiugaimima.php" target="_self">更改密码&nbsp;&nbsp;&nbsp;&nbsp;</a></td>

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
    <td colspan="6"><font color="red" size="3"> 论文管理系统：管理员管理>>管理教师</font>&nbsp;</td>
  </tr>
  <tr>
    <th width="5%">ID</th><th>工号</th><th>姓名</th><th>所属院系</th><th width="20%">操作</th>
			</tr>
			<?php  if(!empty($manage_t)) { ?>
			<?php foreach($manage_t as $row){ ?>
			<tr>
				 <td><?php echo $row['ID']; ?></td>
				 <td><?php echo $row['工号']; ?></td>
				 <td><?php echo $row['姓名']; ?></td>
				 <td><?php echo $row['所属院系']; ?></td>
				 
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