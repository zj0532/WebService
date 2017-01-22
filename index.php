<?php
header("Content-Type:text/html; charset=UTF8");
$wsdl = "http://localhost:1335/WebService.asmx?wsdl";  
$client=new SoapClient($wsdl,array(
	'encoding' => 'GBK'
));  
$param=array('name'=>'ÖÓÏ£¿µ');  
$ret = $client->HelloWorld($param); 
print_r($ret);
?>  