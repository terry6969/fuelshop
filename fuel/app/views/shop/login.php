<!DOCTYPE html>
<!-- ログイン用View -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Loginページ</title>
</head>
<body>

<?php
	echo Asset::js('shop.js'); 
?>

	<form action="/shop/login" method="POST" onsubmit="confirm_login()">
		<input type="text" name="id" id="id">:ID<br>
		<input type="text" name="pass" id="pass">:PASS<br>
		<input type="submit" value="ログイン">
	</form>

</body>
</html>