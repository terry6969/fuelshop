<?php echo View::forge('inc/manage_header'); ?>

<div class="row" style="margin:20px; 0">
	<input type="button" value="新規登録" onclick="location.href='/productmanage/regist_item_view'" class="btn btn-primary">
</div>

<div class="row" style="margin:20px; 0">
	<table class="table table-hover">
		<tr>
			<th style="width:120px;">商品画像</th>
			<th>商品名</th>
			<th style="width:200px;">カテゴリー</th>
			<th style="width:100px;"></th>
		</tr>
		<?php foreach($product_list as $product): ?>
		<tr>
			<td>
				<?php echo Asset::img('/uploads/'.$product['id'].'.jpg', array('style' => 'width:100px;height:100px;')); ?>
			</td>
			<td><a href="/productmanage/update_item_view?id=<?php echo $product['id']; ?>"><?php echo $product['name'] ?></a></td>
			<td><?php echo $product['category_name'] ?></td>
			<td>
				<form action="/productmanage/delete_item" method="POST" >
					<input type="hidden" class="form-control" id="id" name="id" value="<?php echo $product['id'] ?>">
					<input class="btn btn-success" name="delete_btn" type="submit" value="削除" >
				</form>

			</td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>


<?php echo View::forge('inc/manage_footer'); ?>