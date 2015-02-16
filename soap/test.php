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
	'location' =>	'http://c2b.local.com:8090/soapServer/service',
	'uri'	=>	'http://c2b.local.com:8090/soapServer/service'
);
// $client=new SoapClient(NULL,$options);
// // echo $client->test(); //Hello,World!
// echo $client->calculation(1,2); //Hello,World!
include_once 'client.php';
$client = new Client(null,$options);

// $response = $client->bidNotify(); DONE
// $response = $client->submitNotify(); DONE
// $response = $client->questionNotify(); DONE
// $response = $client->soldNotify(); DONE
$response = $client->closeNotify();
var_dump($response);
