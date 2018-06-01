<?php
//声明文件解析的编码格式
header('content-type:text/html;charset=utf-8');

//引入功能函数文件
require './public_sqli_fun.php';

//初始化数据库
//dbInit();

//判断是否有表单提交
if(!empty($_POST)){

	//声明变量$fields，用来保存字段信息
	$fields = array('论文题目','上传教师','选题学生','上传时间');

	//声明变量$values，用来保存值信息
	$values = array(); 
	
	//遍历$fields，获取输入员工数据的键和值
	foreach($fields as $k => $v){

		$data = isset($_POST[$v]) ? $_POST[$v] : '';
		if($data=='') die($v.'字段不能为空');
		$data = safeHandle($link,$data);

		//把字段使用反引号包裹，赋值给$fields数组
		$fields[$k] = "`$v`";

		//把值使用单引号包裹，赋值给$values数组
		$values[] = "'$data'";
	}
	
	//将$fields数组以逗号连接，赋值给$fields，组成insert语句中的字段部分
	$fields = implode(',', $fields);

	//将$values数组以逗号连接，赋值给$values，组成insert语句中的值部分
	$values = implode(',', $values);
	
	//最后把$fields和$values拼接到insert语句中，注意要指定表名
	$sql = "insert into `teacher` ($fields) values ($values)";

	//执行SQL
	if($res = query($link,$sql)){
		//成功时返回到 mysqli_showList.php
		header('Location: ./mysqli_showlist.php');
		//停止脚本
		die;
	}else{
		//执行失败
		die('论文信息添加失败');
	}
}
//没有表单提交时，显示员工添加页面
define('APP', 'itcast');
require './mysqli_add_html.php';