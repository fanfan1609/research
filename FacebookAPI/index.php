<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Testing Facebook</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
	
	require 'configure.php';
	$helper = new FacebookRedirectLoginHelper('http://workspace.local.com/research/FacebookAPI/redirect.php');
	$loginUrl = $helper->getLoginUrl();

	echo '<a href="$loginUrl">Login with FB</a>';
	?>
</body>
</html>