<<<<<<< HEAD
<html>
<head>
	<meta charset="UTF-8">
	<title>Itemページ</title>
</head>
<body>
<?php
	echo Asset::js('shop.js'); 

?>

<!-- カートを見るボタン -->
	<form action="/top/show_cart" method="POST" onsubmit="">
		<input type="submit" value="カートを見る">	
	</form>
<!-- トップへ戻るボタン -->
	<form action="/top/show_top" method="POST" onsubmit="">
		<input type="submit" value="トップへ戻る">	
	</form>
<!-- ログアウトボタン -->
	<form action="/top/logout" method="POST" onsubmit="return confirm_logout()">
		<input type="submit" value="ログアウト">	
	</form>




<!-- 商品検索条件 -->
	<form action="/top/c_search" method="post">
<!-- 在庫ラジオBOX -->
		<p>在庫：
			<input type="radio" name="stock" value="s_only"> あり
			<input type="radio" name="stock" value="s_all" checked> 全て
		</p>
<!-- カテゴリプルダウン -->
		<select name="category" method="post">
		<option value="c_all">全て</option>
			<?php foreach ($category_list as $value){ ?>
		<option value="<?php echo $value['name']; ?>"><?php echo $value['name']; ?></option>
			<?php } ?>
		</select>
		<input type="submit" value="検索">
	</form>





<!-- 商品一覧 -->
<table class="tablecollor" border="1">
		<tr>
			<td>画像</td>
			<td>商品</td>
			<td>カテゴリ</td>
		</tr>
	<?php foreach ($item_list as $value){ ?>
		<tr>
			<td>画像</td>
			<td><a href="/top/show_item"><?php echo $value['product_name']; ?></a></td>
			<td><?php echo $value['category_name']; ?></td>
				<?php } ?>
		</tr>
	</table>

</body>
</html>

<?php


?>
=======
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
		<?php foreach($product_list as $product): ?>
			<table class="table table-hover">
				<tr>
					<td style="width:150px;">
						<div style="width:100px;height:100px;border:solid 1px #000;">画像</div>
					</td>
					<td><?php echo $product['name'] ?></td>
					<td><?php echo $product['category_name'] ?></td>
				</tr>
			</table>
		<?php endforeach; ?>
	</div>

	
<?php echo View::forge('inc/footer'); ?>
>>>>>>> d48cdbb5a2a391b54a2afbd102f5da0a940e81bb
