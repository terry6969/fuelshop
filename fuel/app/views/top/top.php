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
	<form action="/shop/show_cart" method="POST" onsubmit="">
		<input type="submit" value="カートを見る">	
	</form>
<!-- トップへ戻るボタン -->
	<form action="/shop/show_top" method="POST" onsubmit="">
		<input type="submit" value="トップへ戻る">	
	</form>
<!-- ログアウトボタン -->
	<form action="/shop/logout" method="POST" onsubmit="return confirm_logout()">
		<input type="submit" value="ログアウト">	
	</form>

<!-- 商品検索条件 -->
	<form action="/shop/c_search" method="post">
<!-- 在庫ラジオBOX -->
		<p>在庫：
			<input type="radio" name="r1" value="some"> あり
			<input type="radio" name="r1" value="all" checked> 全て
		</p>


		<select name="category" method="post">
<!-- カテゴリプルダウン -->
	<?php foreach ($cc as $value){ ?>
		<option value="category"><?php echo $value['name']; ?></option>
	<?php } ?>

		</select>	</form>
		<input type="submit" value="検索">


<!-- 商品一覧 -->
<table class="tablecollor" border="1">
		<tr>
			<td>画像</td>
			<td>商品</td>
			<td>カテゴリ</td>
		</tr>

		<tr>
			<td>画像</td>
			<td><a href="/shop/show_cart">商品</a></td>
			<td>カテゴリ</td>
		</tr>
	</table>

</body>
</html>