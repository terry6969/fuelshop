<!-- TOP用View -->
<?php echo View::forge('inc/header'); ?>

<div class="row" style="margin:20px; 0">
	<div class="row">
		<form action="/top" method="POST" >
			<div class="form-inline">
				カテゴリー：
				<select class="form-control" style="width:200px;" name="s_category">
				<option value="0">選択して下さい</option>
				<?php foreach ($category_list as $category): ?>
					<option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
				<?php endforeach; ?>
				</select>
			</div>
			<div class="row form-inline" style="margin-left:10px;margin-bottom:20px;">
				
				<div class="radio" style="float:left;">
					在庫：
					<label>
						<input type="radio" name="s_zaiko" id="s_zaiko" value="1" checked>あり
					</label>
				</div>
				<div class="radio" style="float:left;">
					<label>
						<input type="radio" name="s_zaiko" id="s_zaiko" value="0">全て
					</label>
				</div>
			</div>
			<input class="btn btn-success" name="search_btn" type="submit" value="検索" >
		<form>
	</div>
</div>
	<div class="row">
		<table class="table table-hover">
			<?php foreach($product_list as $product): ?>
				<tr>
					<td style="width:150px;">
						<div style="width:100px;height:100px;border:solid 1px #000;">画像</div>
					</td>
					<td><?php echo $product['name'] ?></td>
					<td><?php echo $product['category_name'] ?></td>
				</tr>
			<?php endforeach; ?>
		</table>
	</div>

	
<?php echo View::forge('inc/footer'); ?>