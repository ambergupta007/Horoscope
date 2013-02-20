<?php
	//connect to the PHP SDK
	require 'src/facebook.php';
	$facebook = new Facebook(array(
		'appId'  => '471588239556777',
		'secret' => '65d13556a542763de2879b66c21e1faa'
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
