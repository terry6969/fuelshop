<!DOCTYPE HTML>
<html>
<head>
	<mate charset="utf-8">
	<title>商品管理</title>
	<style>
		table{
			border-collapse:collapse;
			width:300px;
			height:100px;
			position:absolute;
			left:50%;
			top:20%;
			margin-left:-150px;
			margin-top:-50px;
		}
		th{
			border:solid 1px;
			padding:0.5em;
		}
		td{
			border:solid 1px;
			padding:0.5em;
		}
	</style>
</head>
<body>
	<input type="button" value="新規" onclick="location.href='/productmanage/show_regist_item'">

	<table>
		<tr>
			<th>ID</th>
			<th>商品名</th>
			<th>カテゴリー</th>
		</tr>
		<?php foreach ($res as $value): ?>
		<tr>
			<td><?php echo $value['id']; ?></td>
			<td><a href="/productmanage/show_update_item?id=<?php echo $value['id']; ?>"><?php echo $value['product_tb_name']; ?></td>
			<td><?php echo $value['name']; ?></td>
			<td>
			<form action="/productmanage/delete_item" method="POST">
				<input type='submit' value='削除' id='delete_i'>
				<input type='hidden' value='<?php echo $value['id']; ?>' id='i_id' name='i_id'>
			</form>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>