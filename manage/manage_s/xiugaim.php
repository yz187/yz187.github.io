<?php if(!defined('APP')) die('error!');?>
<!doctype html>
<html>
 <head>
  <meta charset="utf-8">
  <title>修改密码</title>

  <style>
  .body{background-color: #f0f8fb;}
	.box{margin:20px;}
	.box .title{font-size:22px;font-weight:bold;text-align:center;}
	.box table{margin-top:15px;border-collapse:collapse;
	font-size:15px;border:1px solid #B5D6E6;}
	.box table th,.box table td{height:20px;border:1px solid #B5D6E6;}
	.box table th{background-color:#E8F6FC;font-weight:normal;text-align: center;}
	
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
    <td width="80" height="25" class="topOption"><a href="">收藏本页</a></td>
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
		
		

			
    <table width="1000" border="1">
  <tr>
    <td colspan="2" bgcolor="#3393ce">&nbsp;</td>
  </tr>
  <tr>
    <td><table border="1" width="165">
  <tr>
    <td height="25" class="leftMenu" >&nbsp;&nbsp;<img src="./images/CreateLeads.gif" width="16" height="16">&nbsp;&nbsp;<a href="./mysqli_empAdd.php" target="self">上传论文&nbsp;&nbsp;</a></td>
  </tr>
  <tr>
     <td height="25" class="leftMenu">&nbsp;&nbsp;<img src="./images/CreateLeads.gif" width="16" height="16">&nbsp;&nbsp;<a href="./show.php" target="_self">管理学生&nbsp;&nbsp;&nbsp;&nbsp;</a></td>

  </tr>
  <tr>
     <td height="25" class="leftMenu">&nbsp;&nbsp;<img src="./images/CreateLeads.gif" width="16" height="16">&nbsp;&nbsp;<a href="./show.php" target="_self">管理教师&nbsp;&nbsp;&nbsp;&nbsp;</a></td>

  </tr>
  <tr>
    <td height="25" class="leftMenu">&nbsp;&nbsp;<img src="./images/CreateLeads.gif" width="16" height="16">&nbsp;&nbsp;<a href="./showxiugaimima.php" target="_self">更改密码</a></td>

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
    <td colspan="6"><font color="red" size="3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;论文管理系统：管理员管理>>更改密码</font>&nbsp;</td>
  </tr>
  <tr align="center" bgcolor="#FFFFFF">
        <td width="225">用户名</td>
        <td width="568" align="left"><input name="textfield" type="text" class="addInput"></td>
        </tr>
      <tr align="center" bgcolor="#FFFFFF">
        <td>原密码</td>
        <td align="left"><input name="textfield2" type="password" class="addInput"></td>
      </tr>
      <tr align="center" bgcolor="#FFFFFF">
        <td>新密码</td>
        <td align="left"><input name="textfield3" type="password" class="addInput"></td>
      </tr>
      <tr align="left" bgcolor="#FFFFFF" clospan="2">
        <td valign="right" class="submitLine" colspan="2">
        &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<input name="submit" type="submit" class="submit" value="保存">
  &nbsp;<input name="reset"  type="button" class="submit"  value="返回" onClick="goTarget('system.htm')"></td>

      </tr>

</table>
</form>
			
  </tr>
</table>

		
</body>
</html>