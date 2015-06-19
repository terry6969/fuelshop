<?php

$mode = 0;
$url = '/usermanage/user_regist';
$button = '登録';

if (isset($target)){
	$mode = 1;
	$url = '/usermanage/user_update';
	$button = '更新';
}
?>


<!DOCTYPE HTML>
<html>
<head>
	<mate charset="utf-8">
	<title>ユーザー登録</title>
</head>
<body>
	<form action="<?php echo $url; ?>" method="POST">
	<table>
		<tr>
			<td>名前:</td>
			<td>
				<input type="text" name="user_n" id="user_n" value="<?php echo ($mode == 1)?$target['name']:''; ?>">
			</td>
		</tr>
		<tr>
			<td>ID:</td>
			<td>
				<input type="text" name="user_i" id="user_i" value="<?php echo ($mode == 1)?$target['login_id']:''; ?>">
			</td>
		</tr>
		<tr>
			<td>Pass:</td>
			<td>
				<input type="text" id="user_p" name="user_p" value="<?php echo ($mode == 1)?$target['login_pass']:''; ?>">
			</td>
		</tr>
		<tr>
			<td>残金:</td>
			<td>
				<input type="text" id="user_z" name="user_z" value="<?php echo ($mode == 1)?$target['money']:''; ?>">
			</td>
		</tr>
		<tr>
			<td>
				<?php if ($mode == 1){ ?>
					<input type="hidden" value="<?php echo $target['id']; ?>" name="id_h" id="id_h">
				<?php } ?>
				<input type="submit" value="<?php echo $button; ?>" id="user_r" name="user_r">
			</td>
		</tr>
	</table>
	</form>
</body>
</html>