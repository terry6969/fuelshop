<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>在庫管理</title>
	<?php echo Asset::css('bootstrap.css'); ?>
</head>
<body>
	<div class="container" style="margin-top:100px;">
		<div class="row">
			<form action="/zaikomanage/zaiko_regist" method="POST">
				<?php if(isset($msg)): ?>
				<span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:#FF0000;float:left;"></span><span style="color:#FF0000;float:left;"><?php echo $msg; ?></span>
				<?php endif; ?>
				<input class="btn btn-success" type="submit" value="更新" style="float:right;margin-bottom:10px;">
				<table class="table table-hover">
					<tr>
						<th style="width:400px;">商品名</th>
						<th>在庫数</th>
					</tr>
					
					<?php foreach ($zaiko_data as $key => $value): ?>
					<tr>
						<td><?php echo $value['name'] ?></td>
						<td><input type="text" value="<?php echo $value['count'] ?>" name="zaiko[<?php echo $value['id'] ?>]"></td>
					</tr>
					<?php endforeach; ?>
				</table>
				<input class="btn btn-success" type="submit" value="更新" style="float:right;">
			<form>
		</div>
	</div>
	
</body>
</html>