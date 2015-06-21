<?php echo View::forge('inc/manage_header'); ?>
<div class="row" style="margin:20px; 0">
	<input type="button" value="戻る" onclick="location.href='/productmanage'" class="btn btn-primary">
</div>
<div class="row" style="margin:20px; 0">
	<form action="<?php echo (isset($target))?'/productmanage/update_item':'/productmanage/regist_item'; ?>" method="POST" enctype="multipart/form-data" >
		<div class="form-group">
			<label for="name">商品名</label>
			<input type="text" class="form-control" id="name" name="name" placeholder="商品名" value="<?php echo (isset($target))?$target['name']:''; ?>" required>
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">カテゴリー</label>
			<select class="form-control" style="width:200px;" name="category_tb_id">
			<?php foreach ($category_list as $category): ?>
				<?php if(isset($target) && $category['id'] == $target['category_tb_id']): ?>
					<option value="<?php echo $category['id']; ?>" selected><?php echo $category['name']; ?></option>
				<?php else: ?>
					<option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
				<?php endif; ?>
				
			<?php endforeach; ?>
			</select>
		</div>
		<div class="form-group">
			<label for="descripion">説明</label>
			<textarea class="form-control" name="descripion" id="descripion" cols="30" rows="10"placeholder="説明" required><?php echo (isset($target))?$target['descripion']:''; ?></textarea>
		</div>
		<div class="form-group">
			<label for="price">金額</label>
			<input type="text" class="form-control" id="price" name="price" placeholder="金額" pattern="^[0-9]+$" maxlength="11" value="<?php echo (isset($target))?$target['price']:''; ?>" required>
		</div>
		<div class="form-group">
			<label for="p_image">商品画像</label>
			<input type="file" id="p_image" name="p_image" multiple="true" <?php echo (isset($target))?'':'required'; ?>>
			<p>jpgファイルのみ有効です</p>
			<?php 
				if(isset($target)){
					echo Asset::img('/uploads/'.$target['id'].'.jpg', array('style' => 'width:100px;height:100px;'));
				}
			?>
		</div>
		<?php if(isset($target)): ?>
			<input type="hidden" name="id" value="<?php echo $target['id'] ?>">
		<?php endif; ?>
		<button type="submit" class="btn btn-success">登録</button>
	</form>
</div>


<?php echo View::forge('inc/manage_footer'); ?>