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
	
		<br>画像<br><br>
		<br>説明<br><br>
		<br>カテゴリ<br><br>
		<br>金額<br><br><br>

	<form action="/top/show_cart" method="POST" onsubmit="">
		個数
		<input type="number" name="num" value="1" min="0" max="">個
		<input type="submit" value="カートに入れる">
	</form>
<!-- 戻るボタン -->
	<form action="/top/show_top" method="POST" onsubmit="">
		<input type="submit" value="戻る">	
	</form>



</body>
</html>