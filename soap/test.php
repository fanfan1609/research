<?php
// client
// $options= array(
// 	'location' =>	'http://c2b.local.com/server.php',
// 	'uri'	=>	'http://c2b.local.com/server.php'
// );
// $client=new SoapClient(NULL,$options);
// echo $client->getMessage(); //Hello,World!
// echo $client->addNumbers(3,5); // 8 
// print_r($client->getObject(array('a'=>1,'b'=>2)));

$options= array(
	'location' =>	'http://c2b.local.com/soapServer/service',
	'uri'	=>	'http://c2b.local.com/soapServer/service'
);
// $client=new SoapClient(NULL,$options);
// // echo $client->test(); //Hello,World!
// echo $client->calculation(1,2); //Hello,World!
include_once 'client.php';
$client = new Client(null,$options);

$response = $client->bidNotify();
var_dump($response);
