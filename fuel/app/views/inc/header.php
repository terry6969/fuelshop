<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Loginページ</title>
	<?php echo Asset::css('bootstrap.css'); ?>
</head>
<body>
	<div class="container">
		<?php if(!isset($islogin_page)): ?>
		<div class="row" style="margin-top:20px;">
			<input type="button" value="カートを見る" onclick="location.href=''" />
			<input type="button" value="TOPへ" onclick="location.href='/top'" />
			<input type="button" value="ログアウト" onclick="location.href='/login/logout'" style="float:right;" />
		</div>
		<?php endif; ?>