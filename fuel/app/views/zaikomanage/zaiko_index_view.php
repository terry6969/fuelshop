<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>在庫管理</title>
	<?php echo Asset::css('bootstrap.css'); ?>
</head>
<body>
	<table class="table table-hover">
		<tr>
			<th>商品名</th>
			<th>在庫数</th>
		</tr>
		<?php var_dump($zaiko_data); ?>
		<?php foreach ($zaiko_data as $key => $value): ?>
		<tr>
			<td></td>
			<td></td>
		</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>