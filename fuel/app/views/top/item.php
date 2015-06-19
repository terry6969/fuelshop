
<?php echo View::forge('inc/header'); ?>

<?php
	echo Asset::js('shop.js'); 
?>


		<?php foreach ($target as $value){ ?>

			<br>画像ID:<?php echo $value['id']; ?><br><br>
			<br>商品名<br><?php echo $value['name']; ?><br><br>
			<br>カテゴリ<br><?php echo $value['category']; ?><br><br>
			<br>値段<br><?php echo $value['price']; ?>　円<br><br><br>		

			<form action="/cart/cart" method="POST" onsubmit="">
				<input type="number" name="num" value="1" min="1" max="<?php echo $value['zaiko']; ?>"> 個
				<input type="submit" name="sell" value="カートに入れる">
			</form>
		<?php } ?>


<?php echo View::forge('inc/footer'); ?>