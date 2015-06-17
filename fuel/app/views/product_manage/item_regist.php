<!DOCTYPE HTML>
<html>
<head>
	<mate charset="utf-8">
	<title>商品登録</title>
</head>
<body>
	<form action="/backyard/regist_item" method="POST">
	<table>
		<tr>
			<td>
				商品名:
			</td>
			<td>
				<input name="item_n" type="text" id="item_n">
			</td>
		</tr>
		<tr>
			<td>
				カテゴリー:
			</td>
			<td>
				<select name="item_c">
					<?php foreach ($res as $value): ?>
						<option value="<?php echo $value['name']; ?>"><?php echo $value['name']; ?></option>
					<?php endforeach; ?>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				説明:
			</td>
			<td>
				<input type="text" id="item_d" name="item_d">
			</td>
		</tr>
		<tr>
			<td>
				金額:
			</td>
			<td>
				<input type="text" id="item_p" name="item_p">
			</td>
		</tr>
		<tr>
			<td>
				画像：
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" value="登録" id="item_r" name="item_r">
			</td>
		</tr>
	</table>
	</form>
</body>
</html>