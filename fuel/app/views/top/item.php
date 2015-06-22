
<?php echo View::forge('inc/header');
	  echo Asset::js('shop.js') 
?>

	<form action="/top/in_cart" method="POST" onsubmit="return alert_cart()">
		<?php foreach ($target as $value){ ?>
			<input type="hidden" name="id" value="<?php echo $value['id']; ?>">
			<input type="hidden" name="name" value="<?php echo $value['name']; ?>">
			<input type="hidden" name="price" value="<?php echo $value['price']; ?>">

				<br><?php echo Asset::img('uploads/'.$value['id'].'.jpg', array('width'=>'100')); ?><br><br>
				<br>商品名<br><?php echo $value['name']; ?><br><br>
				<br>説明<br><?php echo $value['descripion']; ?><br><br>
				<br>カテゴリ<br><?php echo $value['category']; ?><br><br>
				<br>値段<br><?php echo $value['price']; ?>　円<br><br><br>	

			<input type="number" name="stock" id="stock" value="0" min="0" max="<?php echo $value['zaiko']; ?>"> 個
			<input type="submit" name="in" value="カートに入れる">
	</form>
		<?php } ?>


<?php echo View::forge('inc/footer'); ?>