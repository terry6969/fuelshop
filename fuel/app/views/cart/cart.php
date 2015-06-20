<?php echo View::forge('inc/header'); ?>

<?php
	echo Asset::js('shop.js'); 
	$total =$price * $stock;
?>
画像<?php print"$id"; ?>　　
商品名<?php print"$name"; ?> 　　
金額<?php print"$price"; ?>　　
個数<?php print"$stock"; ?> 
	<form action="/cart/del_item" method="POST" onsubmit="">
		<input type="submit" value="削除">	
	</form>　
	　
	<br><br>
	合計金額　：<?php print"$total"; ?><br><br>
	<form action="/cart/comp" method="POST" onsubmit="return confirm_sell()">
	<input type="hidden" name="total" value="<?php print"$total"; ?>">
		<input type="submit" value="購入">	
	</form>

<?php echo View::forge('inc/footer'); ?>