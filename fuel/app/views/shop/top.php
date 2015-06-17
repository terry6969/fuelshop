<!DOCTYPE html>
<!-- ログイン用View -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Topページ</title>
</head>
<body>

<!-- カートへ移動ボタン -->
	<form action="/shop/show_cart" method="POST" onsubmit="">
		<input type="submit" value="カートを見る">	
	</form>
<!-- ログアウトボタン -->
	<form action="/shop/logout" method="POST" onsubmit="">
		<input type="submit" value="ログアウト">	
	</form>
<!-- 商品検索条件 -->
	<form action="/shop/c_search" method="post">
<!-- 在庫ラジオBOX -->
		<p>在庫：
			<input type="radio" name="r1" value="some"> あり
			<input type="radio" name="r1" value="all" checked> 全て
		</p>
<!-- カテゴリプルダウン -->
		<select name="category" method="post">
			<option value="category">カテゴリ1</option>
			<option value="category">カテゴリ2</option>
			<option value="category">カテゴリ3</option>
		</select>
		<input type="submit" value="検索">
	</form>

<!-- 商品一覧 -->
画像　<a href="/shop/show_item">名前</a> カテゴリ


</body>
</html>