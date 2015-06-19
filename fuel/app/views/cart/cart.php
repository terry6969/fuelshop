<?php echo View::forge('inc/header'); ?>

<?php
	echo Asset::js('shop.js'); 
?>

	<br>画像　名前　金額　個数 カテゴリ<br><br>
	<br>画像　名前　金額　個数 カテゴリ<br><br>
	<br>画像　名前　金額　個数 カテゴリ<br><br>
	<br><br>
	合計金額　：<br><br>
	<form action="/cart/sell" method="POST" onsubmit="return confirm_sell()">
		<input type="submit" value="購入">	
	</form>


<?php echo View::forge('inc/footer'); ?>