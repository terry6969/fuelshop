<!DOCTYPE HTML>
<html>
<head>
	<mate charset="utf-8">
	<title>ユーザー登録</title>
</head>
<body>
	<form action="/usermanage/user_regist" method="POST">
	<table>
		<tr>
			<td>
				名前:
			</td>
			<td>
				<input type="text" name="user_n" id="user_n">
			</td>
		</tr>
		<tr>
			<td>
				ID:
			</td>
			<td>
				<input type="text" name="user_i" id="user_i">
			</td>
		</tr>
		<tr>
			<td>
				Pass:
			</td>
			<td>
				<input type="text" id="user_p" name="user_p">
			</td>
		</tr>
		<tr>
			<td>
				残金:
			</td>
			<td>
				<input type="text" id="user_z" name="user_z">
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" value="登録" id="user_r" name="user_r">
			</td>
		</tr>
	</table>
	</form>
</body>
</html>