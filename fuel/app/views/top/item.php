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
	<form action="/top/show_top" method="POST" onsubmit="">
		<input type="submit" value="トップへ戻る">	
	</form>
<!-- ログアウトボタン -->
	<form action="/cart/logout" method="POST" onsubmit="return confirm_logout()">
		<input type="submit" value="ログアウト">	
	</form>
		<?php foreach ($target as $value){ ?>

			<br>画像ID:<?php echo $value['id']; ?><br><br>
			<br>商品名<?php echo $value['name']; ?><br><br>
			<br>カテゴリ<?php echo $value['category']; ?><br><br>
			<br>値段<?php echo $value['price']; ?><br><br><br>		

			<form action="/top/show_cart" method="POST" onsubmit="">
				<input type="number" name="num" value="1" min="0" max="<?php echo $value['zaiko']; ?>">個
		<?php } ?>
				<input type="submit" value="カートに入れる">
			</form>
<!-- 戻るボタン -->
	<form action="/top/show_top" method="POST" onsubmit="">
		<input type="submit" value="戻る">	
	</form>



</body>
</html>