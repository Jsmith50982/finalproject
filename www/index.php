<?php 
	require_once 'Mobile_Detect.php';
	$detect = new Mobile_Detect;

	if($detect->isMobile()){
		header('Location: ./final_mobile.html');
	}else{
		header('Location: ./final_pc.html');
	}
?>
 <!DOCTYPE html>
 
<html>
<head>
	<meta charset="UTF-8">
	<title>Final Project Redirect</title>
</head>
<body>

<br><br>
<a href="./index.html">Back to Home!</a>
</body>
</html>