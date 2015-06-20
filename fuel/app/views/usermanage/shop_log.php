<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>購入履歴</title>
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
		td{
			border:solid 1px;
			padding:0.5em;
		}
		th{
			border:solid 1px;
			padding:0.5em;
		}
	</style>
</head>
<body>
	<form action="/usermanage/search_log" method="POST">
		from<input type="text" name="date_f" id="date_f" value="<?php echo (isset($from))?$from:''; ?>">
		～to<input type="text" name="date_t" id="date_t" value="<?php echo (isset($to))?$to:''; ?>"><br><br>
		<input type="submit" value="検索" name="search_b" id="search_b">
	</form>

	<table>
		<tr>
			<th>日付</th>
			<th>商品名</th>
			<th>個数</th>
			<th>金額</th>
		</tr>
		<?php foreach ($res as $value): ?>
		<tr>
			<td><?php echo $value['created']; ?></td>
			<td><?php echo $value['name']; ?></td>
			<td><?php echo $value['count']; ?></td>
			<td><?php echo ($value['price']*$value['count']); ?></td>
		</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>