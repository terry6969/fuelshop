<html>
<head>
	<meta charset="UTF-8">
	<title>Itemページ</title>
</head>
<body>

<!-- カートを見るボタン -->
	<form action="/shop/show_cart" method="POST" onsubmit="">
		<input type="submit" value="カートを見る">	
	</form>
<!-- トップへ戻るボタン -->
	<form action="/shop/show_top" method="POST" onsubmit="">
		<input type="submit" value="トップへ戻る">	
	</form>
<!-- ログアウトボタン -->
	<form action="/shop/logout" method="POST" onsubmit="">
		<input type="submit" value="ログアウト">	
	</form>
	<br>画像<br><br>
	<br>説明<br><br>
	<br>カテゴリ<br><br>
	<br>金額<br><br>
	<br>
	<form action="/shop/logout" method="POST" onsubmit="">
	個数
	<input type="number" name="example1" value="1" min="0" max="9">個
	<input type="submit" value="購入">
	</form>
<!-- 戻るボタン -->
	<form action="/shop/show_top" method="POST" onsubmit="">
		<input type="submit" value="戻る">	
	</form>



</body>
</html>