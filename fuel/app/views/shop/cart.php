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

	<br>画像　名前　金額　個数 カテゴリ<br><br>
	<br>画像　名前　金額　個数 カテゴリ<br><br>
	<br>画像　名前　金額　個数 カテゴリ<br><br>
	<br><br>
	合計金額　：<br><br>
	<form action="/shop/sell" method="POST" onsubmit="">
		<input type="submit" value="購入">	
	</form>