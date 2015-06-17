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
	<form action="/cart/show_cart" method="POST" onsubmit="">
		<input type="submit" value="カートを見る">	
	</form>
<!-- トップへ戻るボタン -->
	<form action="/cart/show_top" method="POST" onsubmit="">
		<input type="submit" value="トップへ戻る">	
	</form>
<!-- ログアウトボタン -->
	<form action="/cart/logout" method="POST" onsubmit="return confirm_logout()">
		<input type="submit" value="ログアウト">	
	</form>
	

	<br>画像　名前　金額　個数 カテゴリ<br><br>
	<br>画像　名前　金額　個数 カテゴリ<br><br>
	<br>画像　名前　金額　個数 カテゴリ<br><br>
	<br><br>
	合計金額　：<br><br>
	<form action="/cart/sell" method="POST" onsubmit="return confirm_sell()">
		<input type="submit" value="購入">	
	</form>