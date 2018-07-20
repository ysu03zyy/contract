<?php
require_once ('../system/util/xml.php');

$email = $_POST ['email'];
$userPwd = $_POST ['userPwd'];

$xml = new xml ( "userInfo.xml", 'user' );
$data = $xml->xml_query ( 'select', 'email,=,' . $email, '' ); // select方法，取得数组
print_r ( $data );

if ($data [0] [userPwd] == $userPwd) {
	session_start ();
	$_SESSION ['email'] = $email;
	$_SESSION ['customerId'] = $data [0] [customerId];
	echo "<script language=\"javascript\">";
	echo "document.location=\"../investors.php\"";
	echo "</script>";
} else {
	echo "<script language=\"javascript\">";
	echo "alert('用户名密码有误');";
	echo "document.location=\"../index.php\"";
	echo "</script>";
}


