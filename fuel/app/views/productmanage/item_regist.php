<?php
$mode = 0;
$url = '/productmanage/regist_item';
$button = '登録';
$selected = '';

if (isset($target)){
	$mode = 1;
	$url = '/productmanage/update_item';
	$button = '更新';
}
?>

<!DOCTYPE HTML>
<html>
<head>
	<mate charset="utf-8">
	<title>商品登録</title>
</head>
<body>
	<form action="<?php echo $url; ?>" method="POST" enctype="multipart/form-data">
	<table>
		<tr>
			<td>
				商品名:
			</td>
			<td>
				<input name="item_n" type="text" id="item_n" value="<?php echo ($mode == 1)?$target['name']:''; ?>">
			</td>
		</tr>
		<tr>
			<td>
				カテゴリー:
			</td>
			<td>
				<select name="item_c">
					<?php foreach ($res as $value): ?>
						<?php if ($mode == 1) { ?>
							<?php echo $selected = ($target['category_tb_id'] == $value['id'])?'selected':''; ?>
						<?php } ?>
						<option value="<?php echo $value['id']; ?>" <?php echo $selected; ?>><?php echo $value['name']; ?></option>
					<?php endforeach; ?>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				説明:
			</td>
			<td>
				<input type="text" id="item_d" name="item_d" value="<?php echo ($mode == 1)?$target['descripion']:''; ?>">
			</td>
		</tr>
		<tr>
			<td>
				金額:
			</td>
			<td>
				<input type="text" id="item_p" name="item_p" value="<?php echo ($mode == 1)?$target['price']:''; ?>">
			</td>
		</tr>
		<tr>
			<td>
				画像:
			</td>
			<td>
				<input type="file" name="item_img">
			</td>
		</tr>
		<tr>
			<td>
				<?php if ($mode == 1){ ?>
					<input type="hidden" value="<?php echo $target['id']; ?>" name="id_h" id="id_h">
				<?php } ?>
				<input type="submit" value="<?php echo $button; ?>" id="item_r" name="item_r">
			</td>
		</tr>
	</table>
	</form>
</body>
</html>