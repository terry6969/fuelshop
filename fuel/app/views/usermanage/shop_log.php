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
<?php echo var_dump($res); ?>
	from<input type="text" name="date_f" id="date_f">
	～to<input type="text" name="date_t" id="date_t"><br><br>
	<input type="submit" value="検索" name="search_b" id="search_b">

	<table>
		<tr>
			<th>日付</th>
			<th>商品名</th>
			<th>個数</th>
			<th>金額</th>
		</tr>
	</table>
</body>
</html>