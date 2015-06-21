<?php echo View::forge('inc/manage_header'); ?>

<div class="row" style="margin:20px; 0">
	<input type="button" value="新規登録" onclick="location.href='/usermanage/regist_user_view'" class="btn btn-primary">
</div>

<div class="row" style="margin:20px; 0">
	<table class="table table-hover">
		<tr>
			<th style="width:120px;">ID</th>
			<th>ユーザー名</th>
			<th style="width:100px;">履歴</th>
			<th style="width:100px;"></th>
		</tr>
		<?php foreach($user_list as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><a href="/usermanage/update_user_view?id=<?php echo $user['id']; ?>"><?php echo $user['name'] ?></a></td>
			<td>
				<input type="button" value="参照" onclick="location.href='/usermanage/user_log?user_id=<?php echo $user['id']; ?>'" class="btn btn-primary">
			</td>
			<td>
				<form action="/usermanage/delete_user" method="POST" >
					<input type="hidden" class="form-control" id="id" name="id" value="<?php echo $user['id'] ?>">
					<input class="btn btn-success" name="delete_btn" type="submit" value="削除" >
				</form>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>


<?php echo View::forge('inc/manage_footer'); ?>