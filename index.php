<?php
	//connect to the PHP SDK
	require 'php-sdk/facebook.php';
	$facebook = new Facebook(array(
		'appId'  => 'YOUR_APP_ID',
		'secret' => 'YOUR_APP_SECRET'
	));
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Facebook PHP</title>
</head>
<body>
<h1>Hello World</h1>
</body>
</html>
