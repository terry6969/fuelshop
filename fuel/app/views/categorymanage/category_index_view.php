<?php echo View::forge('inc/manage_header'); ?>

<div class="row" style="margin:20px; 0">
	<form action="/categorymanage" method="POST" class="form-inline" data-toggle="validator">
		<div class="form-group form-inline">
			<input type="text" class="form-control" id="category_name" name="category_name" placeholder="新規カテゴリー名入力" required>
		</div>
		<input class="btn btn-success" name="regist_btn" type="submit" value="登録" >
	</form>
</div>

<div class="row" style="margin:20px; 0">
	<table class="table table-hover">
		<tr>
			<th>カテゴリー</th>
			<th></th>
		</tr>
		<?php foreach($category_list as $category): ?>
		<tr>
			<td><?php echo $category['name'] ?></td>
			<td>
				<form action="/categorymanage" method="POST" >
					<input type="hidden" class="form-control" id="category_id" name="category_id" value="<?php echo $category['id'] ?>">
					<input class="btn btn-success" name="delete_btn" type="submit" value="削除" >
				</form>

			</td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>


<?php echo View::forge('inc/manage_footer'); ?>