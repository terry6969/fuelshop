<!DOCTYPE html>
<!-- ログイン用View -->
<html>
<head>
	<meta charset="UTF-8">
	<title>ログイン</title>
</head>
<body>
	<form action="/login/login" method="POST" onsubmit="return confirm_login()">
		<input type="text" name="id" id="id">:ID<br>
		<input type="text" name="pass" id="pass">:PASS<br>
		<input type="submit" value="ログイン">
<?php 
	if (isset($msg)) {
		print "$msg";
	}
?>
	</form>

</body>
</html>