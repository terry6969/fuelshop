
<?php echo View::forge('inc/header');
	  echo Asset::js('shop.js'); 
?>

	<form action="/top/in_cart" method="POST" onsubmit="">
		<?php foreach ($target as $value){ ?>
			<input type="hidden" name="id" value="<?php echo $value['id']; ?>">
			<input type="hidden" name="name" value="<?php echo $value['name']; ?>">
			<input type="hidden" name="price" value="<?php echo $value['price']; ?>">

				<br>画像ID:<?php echo $value['id']; ?><br><br>
				<br>商品名<br><?php echo $value['name']; ?><br><br>
				<br>カテゴリ<br><?php echo $value['category']; ?><br><br>
				<br>値段<br><?php echo $value['price']; ?>　円<br><br><br>	

			<input type="number" name="stock" value="1" min="1" max="<?php echo $value['zaiko']; ?>"> 個
			<input type="submit" name="in" value="カートに入れる">
	</form>
		<?php } ?>


<?php echo View::forge('inc/footer'); ?>