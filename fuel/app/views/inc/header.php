<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
<?php
	$seg1 =Uri::segment(1);
	$seg2 =Uri::segment(2);
?>

	<title><?php print($seg2); ?></title>
	<?php echo Asset::css('bootstrap.css'); ?>
</head>
<body>
	<div class="container">
		<?php if($seg1 !== 'login'){ ?>
		<div class="row" style="margin-top:30px;">
			<input type="button" value="カートを見る" onclick="location.href='/cart/cart'" />
			<input type="button" value="TOPへ" onclick="location.href='/top/top'" />
			<input type="button" value="ログアウト" onclick="location.href='/login/logout'" style="float:right;" />
		</div>
		<?php } ?><br><br>