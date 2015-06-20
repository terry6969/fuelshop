<!DOCTYPE html>
<!-- ログイン用View -->
<?php echo View::forge('inc/header'); ?>
<html>
<head>
	<meta charset="UTF-8">
	<title>login</title>
</head>
<body>

	<form action="/login/login_check" method="POST" onsubmit="return confirm_login()">
		<input type="text" name="id" id="id">:ID<br>
		<input type="text" name="pass" id="pass">:PASS<br>
		<input type="submit" value="ログイン"><br>
<?php 
	if (isset($msg)) {
		print "$msg";
	}
?>
	</form>

</body>
</html>