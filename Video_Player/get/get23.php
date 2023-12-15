<?php 
error_reporting(0);
function  fileget2($url,$timeout = 5) {
	$user_agent = "Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
	$curl = curl_init(); 
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_USERAGENT,$user_agent);
	curl_setopt($curl, CURLOPT_REFERER,$url) ;
	curl_setopt($curl, CURLOPT_AUTOREFERER, 1);
	curl_setopt($curl, CURLOPT_TIMEOUT, $timeout);
	curl_setopt($curl, CURLOPT_HEADER, 0); 
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl, CURLOPT_FOLLOWLOCATION,1);
	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, '0');
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, '0');
	curl_setopt($curl, CURLOPT_ENCODING, '');
	return curl_exec($curl);
	curl_close($curl);
}
$json = fileget2('http://api.yujn.cn/api/heisis.php?type=text',5);
echo $json;
?>