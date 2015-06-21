<!DOCTYPE HTML>
<html>
<head>
	<mate charset="utf-8">
	<title>商品管理</title>
	<style>
		table{
			border-collapse:collapse;
			width:500px;
			height:100px;
			position:absolute;
			left:50%;
			top:20%;
			margin-left:-250px;
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
		input#regist_b{
			width:100px;
			height:50px;
			color:blue;
		}
		input#delete_i{
			color:red;
		}
	</style>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<?php echo Asset::js('base.js'); ?>
</head>
<body>
	<input type="button" value="新規" onclick="location.href='/productmanage/show_regist_item'" id="regist_b">

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
			<td align="center">
			<form action="/productmanage/delete_item" method="POST" onsubmit="return confirmDelete(<?php echo $value['id']; ?>)">
				<input type='submit' value='削除' id='delete_i'>
				<input type='hidden' value='<?php echo $value['id']; ?>' id='i_id' name='i_id'>
			</form>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>