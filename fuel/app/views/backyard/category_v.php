<!DOCTYPE HTML>
<html>
<head>
	<meta charset='utf-8'>
	<title>カテゴリー管理</title>
	<style>
		.test{
			width:240px;
			height:100px;
			position:absolute;
			left:50%;
			top:10%;
			margin-left:-120px;
			margin-top:-50px;
		}
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
		td{
			border:solid 1px;
			padding:0.5em;
		}
	</style>
</head>
<body>
	<form class='test' action='/backyard/category' method='POST'>
		<input type='text' name='cr' id='cr'>
		<input type='submit' value='登録' id='cr_b'>
	</form>
	<table>
		<tr>
			<td>
				カテゴリー名
			</td>
		</tr>

		<?php foreach ($res as $value): ?>
			<tr>
				<td>
					<?php echo $value['name']; ?>
				</td>
				<td>
					<form action='/backyard/category' method='POST'>
						<input type='submit' value='削除' id='delete_c'>
						<input type='hidden' value='<?php echo $value['id']; ?>' id='c_id' name='c_id'>
					</form>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>