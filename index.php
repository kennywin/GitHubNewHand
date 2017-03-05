<?php
session_start();
require_once "config.php";
require_once "function.php";
require_once 'smarty/libs/Smarty.class.php';
$smarty = new Smarty;
$var='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
var_dump($var);

if (isset($_POST['user_name'])) {
    $smarty->assign('user_name', $_POST['user_name']);
}

class user{
	public $name="Tad";
	public function sex(){
		
	if (($_POST['user_name'])==$this->name){
		return "先生";
	}
		
	
}
}
$user= new user;
$smarty->assign('user',$user);

$smarty->assign('shop_name', _SHOP_NAME); //assign將內容塞入變數名稱shop_name

$smarty->display('index.html');  //利用$smarty物件的disply()方法指定要用的樣本檔(view或Blade)
