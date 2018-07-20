<?php
require 'Constants.php';
execUpload();
function execUpload(){
	$timpstamp = date ( "YmdHis" );
	$doc_type = ".docx"; // ÎÄµµÀàÐÍ
	$contract_id = "php_upload_test"; 
	$sha1 = strtoupper ( sha1 ( APPSECRET . $contract_id) );
	$md5 = strtoupper ( md5 ($timpstamp ) );
	$sha2 = strtoupper ( sha1 ( APPID . $md5 . $sha1 ) );
	$base64 = base64_encode ( $sha2 );
	$file = 'F:/test.docx';
	$ch = curl_init();
	$post_data = array(
			'app_id' => APPID,
			'timestamp' => $timpstamp,
			'contract_id' => $contract_id,
			'doc_title' => 'test',
			'doc_type' => $doc_type,
			'msg_digest' => $base64,
			'file' => new CURLFile(realpath($file))
	);
	curl_setopt($ch, CURLOPT_HEADER, false);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch,CURLOPT_BINARYTRANSFER,true);
	curl_setopt($ch, CURLOPT_POSTFIELDS,$post_data);
	curl_setopt($ch, CURLOPT_URL, 'http://testapi.fadada.com:8888/api/uploaddocs.api');
	$info= curl_exec($ch);
	curl_close($ch);
	 
	print_r($info);

}