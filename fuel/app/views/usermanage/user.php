<!DOCTYPE HTML>
<html>
<head>
	<mate charset="utf-8">
	<title>ユーザー管理</title>
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
	<input type="button" value="新規" onclick="location.href='/usermanage/show_user_regist'">

	<table>
		<tr>
			<th>ID</th>
			<th>名前</th>
			<th></th>
			<th></th>
		</tr>
		<?php foreach ($res as $value): ?>
			<tr>
				<td><?php echo $value['login_id']; ?></td>
				<td><a href="/usermanage/show_user_update?id=<?php echo $value['id']; ?>"><?php echo $value['name']; ?></td>
				<td>
				<form action="/usermanage/user_delete" method="POST">
					<input type="submit" value="削除" name="delete_b" id="delete_b">
					<input type="hidden" value="<?php echo $value['id']; ?>" name="id_d" id="id_d">
				</form>
				</td>
				<td>
				<form>
					<input type="submit" value="履歴" name="log_b" id="log_b">
				</form>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>