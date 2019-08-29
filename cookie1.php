<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
  $name = 'language';
  $value = 'english';
  $expire = time() + 60*60*24*3; // 3 days from now
  $path = '/blog';
  $domain = 'www.mysite.com';
  $secure = isset($_SERVER['HTTPS']); // or use true/false
  $httponly = true;

  setcookie($name, $value, $expire, $path, $domain, $secure, $httponly);

	?>
</body>
</html>