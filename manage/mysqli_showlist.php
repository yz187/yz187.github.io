<?php
//声明文件解析的编码格式
header('content-type:text/html;charset=utf-8');
include './public_sqli_fun.php';
include './page_function.php';
$sql = 'select *from manage'; 
$manage=fetchAll($link,$sql);

$where='';

if(isset($_POST['keyword'])){
	$keyword=$_POST['keyword'];
	$keyword=safeHandle($link,$keyword);
	$where="where 姓名 like '%$keyword%'";
}

$sql="select * from manage $where";

$page_size = 4;
$result=mysqli_query($link,'select count(*) from manage');
if (mysqli_num_rows($result) > 0) 
{
$count = mysqli_fetch_row($result);
//取出查询结果中的第一列的值
$count = $count[0];
//计算最大页数
$max_page = ceil($count/$page_size);
}
else 
  { echo "0 连接数据库失败!";exit;}

//获取当前选择的页码，并作容错处理
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$page = $page > $max_page ? $max_page : $page;
$page = $page < 1 ? 1 : $page;

//调用函数生成分页链接
 $page_html = makePageHtml($page,$max_page);

//拼接查询语句并执行，获取查询数据
$lim = ($page -1) * $page_size;
$sql = $sql."limit {$lim},{$page_size}";
$manage = query($link,$sql);
define('APP','itcast');
require './mysqli_list_html.php';
?>