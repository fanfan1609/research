<?php
require_once("nusoap/lib/nusoap.php");

function getProd($category){
	// file_put_contents("log.txt", "Category is put :" . $category . "\n");
	if($category == 'books'){
		return join(",",array(
			"The WordPress Anthology",
            "PHP Master: Write Cutting Edge Code",
            "Build Your Own Website the Right Way"
		));
	} else {
		return "No products listed under that category";
	}
}

$server = new soap_server();
$server->configureWSDL("productList","urn:productList");

$server->register("getProd",
	array("category" => "xsd:string"),
	array("return" => "xsd:string"),
	"urn:productList",
	"urn:productList#getProd",
	"rpc",
	"encoded",
	"Get a listing of products by category");
$server->service($HTTP_RAW_POST_DATA);