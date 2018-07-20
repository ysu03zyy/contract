<?php
/**
 * 调用文档签署接口
 */
require 'Constants.php';
session_start ();
$api_url = "http://testapi.fadada.com:8888/api/extsign.api";
$return_url = "http://127.0.0.1/sample/tips.php";
$notify_url = "http://127.0.0.1/sample/tips.php";
if (isset ( $_SESSION ['email'] ) && isset ( $_SESSION ['customerId'] )) {
	$customer_id = $_SESSION ['customerId'];// 客户编号
	$timpstamp = date ( "YmdHis" );
	$transaction_id = $timpstamp; // 交易号
	$contract_id = "liuyue1"; // 合同编号
	$doc_title = "演示借款合同标题"; // 合同标题
	$client_role = "1"; // 签署角色
	$doc_type = ".docx"; // 文档类型
	$sha1 = strtoupper ( sha1 ( APPSECRET . $customer_id) );
	$md5 = strtoupper ( md5 ( $transaction_id . $timpstamp ) );
	$sha2 = strtoupper ( sha1 ( APPID . $md5 . $sha1 ) );
	$base64 = base64_encode ( $sha2 );
	$get_url = $api_url . "?timestamp=" . $timpstamp . "&transaction_id=" . $transaction_id . "&contract_id=" . $contract_id . "&doc_type=" . $doc_type . "" . "&return_url=" . urlencode ( $return_url ) . "&client_role=" . $client_role . "&customer_id=" . $customer_id . "" . "&doc_title=" . urlencode ( $doc_title ) . "&app_id=" . APPID . "&msg_digest=" . $base64 . "&notify_url=" . urlencode ( $notify_url ) . "&v=2.0";
	echo "<script language=\"javascript\">";
	echo "document.location='$get_url'";
	echo "</script>";
} else {
	// 请先登陆
	echo "<script language=\"javascript\">";
	echo "alert('请先登陆');";
	echo "document.location=\"../index.php\"";
	echo "</script>";
}