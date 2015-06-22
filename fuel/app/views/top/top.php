
<?php echo View::forge('inc/header'); ?>

<?php echo Asset::js('shop.js'); 

?>

<!-- 商品検索条件 -->
	<form action="/top/top" method="post">
<!-- 在庫ラジオBOX -->
		<p>在庫：
			<input type="radio" name="stock" id="stock" value="some"> あり
			<input type="radio" name="stock" id="stock" value="all" checked> 全て
		</p>
<!-- カテゴリプルダウン -->
		<select name="category" method="post">
		<option value="c_all">全て</option>
			<?php foreach ($category_list as $value){ ?>
		<option value="<?php echo $value['name']; ?>"><?php echo $value['name']; ?></option>
			<?php } ?>
		</select>
		<input type="submit" value="検索" name="search_b" id="search_b">
	</form><br>
<!-- 商品一覧 -->
<table class="tablecollor" border="1">
		<tr>
			<td>画像</td>
			<td>商品</td>
			<td>金額</td>
			<td>カテゴリ</td>
		</tr>
	<?php foreach ($item_list as $value){ ?>
		<tr>
			<td><?php echo Asset::img('uploads/'.$value['id'].'.jpg', array('width'=>'50')); ?></td>
			<td><a href="/top/item?id=<?php echo $value['id']?>"><?php echo $value['product_name']; ?></a></td>
			<td><?php echo $value['price']; ?></td>
			<td><?php echo $value['category_name']; ?></td>
			
	<?php } ?>
		</tr>
	</table>

<?php echo View::forge('inc/footer'); ?>