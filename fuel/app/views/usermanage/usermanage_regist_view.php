<?php echo View::forge('inc/manage_header'); ?>
<div class="row" style="margin:20px; 0">
	<input type="button" value="戻る" onclick="location.href='/usermanage'" class="btn btn-primary">
</div>
<div class="row" style="margin:20px; 0">
	<form action="<?php echo (isset($target))?'/usermanage/update_user':'/usermanage/regist_user'; ?>" method="POST" enctype="multipart/form-data" >
		<div class="form-group">
			<label for="login_id">ユーザーID</label>
			<input type="text" class="form-control" id="login_id" name="login_id" placeholder="ユーザーID" pattern="^[A-Za-z0-9]+$" value="<?php echo (isset($target))?$target['login_id']:''; ?>" required>
		</div>
		<div class="form-group">
			<label for="login_pass">パスワード</label>
			<input type="password" class="form-control" id="login_pass" name="login_pass" placeholder="パスワード" pattern="^[A-Za-z0-9]+$" value="<?php echo (isset($target))?$target['login_pass']:''; ?>" required>
		</div>
		<div class="form-group">
			<label for="name">ユーザー名</label>
			<input type="text" class="form-control" id="name" name="name" placeholder="ユーザー名" value="<?php echo (isset($target))?$target['name']:''; ?>" required>
		</div>
		<div class="form-group">
			<label for="money">残金</label>
			<input type="text" class="form-control" id="money" name="money" placeholder="残金" pattern="^[0-9]+$" maxlength="11" value="<?php echo (isset($target))?$target['money']:''; ?>" required>
		</div>
		<?php if(isset($target)): ?>
			<input type="hidden" name="id" value="<?php echo $target['id'] ?>">
		<?php endif; ?>
		<button type="submit" class="btn btn-success">登録</button>
	</form>
</div>


<?php echo View::forge('inc/manage_footer'); ?>