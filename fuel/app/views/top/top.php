
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
