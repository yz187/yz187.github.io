<?php
//声明文件解析的编码格式
header('Content-Type:text/html;charset=utf-8');

echo '<h2>接收到新用户注册！</h2>';
echo '<p>用户名：'.$_POST['username'].'</p>';
echo '<p>邮箱：'.$_POST['email'].'</p>';
echo '<p>IP地址：'.$_SERVER['REMOTE_ADDR'].'</p>';
echo '<p>浏览器环境：'.$_SERVER['HTTP_USER_AGENT'].'</p>';
echo '<p>请求来源：'.$_SERVER['HTTP_REFERER'].'</p>';
echo '<p>注册成功,请登录<a href=login.html>登录</a></p>';

$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];

$server_name = "localhost";  
$user_name = "root";  
$pass_word = "yang0329...";  
$dbname = "lunwenms";  
$conn = new mysqli($server_name, $user_name, $pass_word, $dbname);      
    // Check connection  
if ($conn->connect_error) {  
    die("连接失败: " . $conn->connect_error);  
}    

//设置字符集
mysqli_query($conn,'set names utf8');

$username=mysqli_real_escape_string($conn,$username);
$email=mysqli_real_escape_string($conn,$email);

$sql="select `id` from `user` where `username`='$username'";
$rst=$conn->query($sql);
if(mysqli_num_rows($rst)>0){
	echo "user:".$username."<br>";
	die('用户名已存在，请换个用户名。<a href=register_html.html>注册</a>');
}

$password=md5($password);
$sql="insert into `user` (`username`,`password`,`email`)values('$username','$password','$email')";
$rst=$conn->query($sql);

if($rst){
	echo "<script>alert('执行成功')</script>";
}else{
	echo '执行失败：'.mysql_error();
}
$conn->close();