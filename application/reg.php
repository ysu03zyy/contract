<?php
/**
 * 调用申请证书接口
 */
require '../system/util/HttpClient.class.php';
require '../system/util/Crypt3Des.php';
require 'Constants.php';
require '../system/util/xml.php';

date_default_timezone_set ( 'PRC' );

$email = $_POST ['email'];
$customerName = $_POST ['customerName'];
$idCard = $_POST ['idCard'];
$mobile = $_POST ['mobile'];
$userPwd = $_POST ['userPwd'];
$timpstamp = date ( "YmdHis" );

$id_mobile = Crypt3Des::encrypt ( $idCard . "|" . $mobile, APPSECRET ); // 对身份证、手机号进行3des加密

$msg_digest = base64_encode ( strtoupper ( sha1 ( APPID . strtoupper ( md5 ( $timpstamp ) ) . strtoupper ( sha1 ( APPSECRET ) ) ) ) ); // 消息摘要

$httpclient = new HttpClient ( "http://testapi.fadada.com:8888/api/" );
$httpclient->setDebug ( true );
$responseContent = $httpclient->quickPost ( "http://testapi.fadada.com:8888/api/syncPerson_auto.api", array (
		"app_id" => APPID,
		"timestamp" => $timpstamp,
		"v" => v,
		"customer_name" => $customerName,
		"email" => $email,
		"id_mobile" => $id_mobile,
		"msg_digest" => $msg_digest 
) );
//echo $responseContent;
$res = json_decode($responseContent);
if($res->result == 'success'){
	/**
	 * 将用户数据入库
	 */
	$xml = new xml("userInfo.xml","user");
	$newarray = array(
			"email"=>$email,
			"customerName"=>$customerName,
			"idCard"=>$idCard,
			"mobile"=>$mobile,
			"userPwd"=>$userPwd,
			"customerId"=>$res->customer_id
	);
	$insert=$xml->xml_query('insert','','',$newarray);
	
	echo "<script language=\"javascript\">";
	echo "alert('注册成功');";
	echo "document.location=\"../index.php\"";
	echo "</script>";
}else{
	echo $responseContent."<br>";
	echo "<a href='../reg.php'>点击这里，返回</a>";
}

  
