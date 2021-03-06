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
			<form action="/zaikomanage/zaiko_regist" method="POST" data-toggle="validator">
				<?php if(isset($msg)): ?>
				<span class="glyphicon glyphicon-ok text-success" aria-hidden="true" style="float:left;"></span><span class="text-success" style="float:left;"><?php echo $msg; ?></span>
				<?php endif; ?>
				<input class="btn btn-success" type="submit" value="更新" style="float:right;margin-bottom:10px;">
				<table class="table table-hover">
					<tr>
						<th style="width:70%;">商品名</th>
						<th>在庫数</th>
					</tr>
					
					<?php foreach ($zaiko_data as $key => $value): ?>
					<tr>
						<td><?php echo $value['name'] ?></td>
						<td><input class="form-control" type="text" value="<?php echo $value['count'] ?>" name="zaiko[<?php echo $value['id'] ?>]" pattern="^[0-9]+$" maxlength="11" required></td>
					</tr>
					<?php endforeach; ?>
				</table>
				<input class="btn btn-success" type="submit" value="更新" style="float:right;">
			<form>
		</div>
	</div>
	
</body>
</html>