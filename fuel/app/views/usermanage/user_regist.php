<?php

$mode = 0;
$url = '/usermanage/user_regist';
$button = '登録';
$func = 'return confirmUserregist(this)';

if (isset($target)){
	$mode = 1;
	$url = '/usermanage/user_update';
	$button = '更新';
	$func = 'return confirmUserupdate(this)';
}
?>


<!DOCTYPE HTML>
<html>
<head>
	<mate charset="utf-8">
	<title>ユーザー登録</title>
	<style>
		table{
			width:260px;
			height:200px;
			position:absolute;
			top:50%;
			left:50%;
			margin-top:-100px;
			margin-left:-130px;
		}
		input#user_r{
			width:80px;
		}
	</style>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<?php echo Asset::js('base.js'); ?>
</head>
<body>
	<form action="<?php echo $url; ?>" method="POST" onsubmit="<?php echo $func; ?>">
	<table>
		<tr>
			<th>名前:</th>
			<td>
				<input type="text" name="user_n" id="user_n" value="<?php echo ($mode == 1)?$target['name']:''; ?>">
			</td>
		</tr>
		<tr>
			<th>ID:</th>
			<td>
				<input type="text" name="user_i" id="user_i" value="<?php echo ($mode == 1)?$target['login_id']:''; ?>">
			</td>
		</tr>
		<tr>
			<th>Pass:</th>
			<td>
				<input type="text" id="user_p" name="user_p" value="<?php echo ($mode == 1)?$target['login_pass']:''; ?>">
			</td>
		</tr>
		<tr>
			<th>残金:</th>
			<td>
				<input type="text" id="user_z" name="user_z" value="<?php echo ($mode == 1)?$target['money']:''; ?>">
			</td>
		</tr>
		<tr>
			<td></td>
			<td align="right">
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