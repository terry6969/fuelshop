<?php echo View::forge('inc/header'); ?>

<?php
	echo Asset::js('shop.js'); 
	$cart =Session::get('cart');
?>

<?php 
$c =count($cart);
for($i=0; $i <$c; $i++) { 
	$del =$cart[$i]['i_id'];
?>

<?php echo Asset::img('uploads/'.$cart[$i]['i_id'].'.jpg', array('width'=>'50')); ?>
	<input type="hidden" name="id" value="<?php print ($del); ?>">
	商品名　<?php echo ($cart[$i]['i_name']); ?> 　　
	金額　<?php echo ($cart[$i]['i_price']); ?>　　
	個数　<?php echo ($cart[$i]['i_stock']); ?> 
	<?php $total =($cart[$i]['total']); ?>
	<form action="/cart/del_item" method="POST" onsubmit="">
		<input type="submit" value="削除">	
	</form><br>
<?php } ?>

	<br><br>
<?php 
	$c =count($cart);
	$sum =0;
	for($i=0; $i <$c; $i++) { 
		$sum = $sum + ($cart[$i]['total']);
	}echo "合計金額　：$sum";
?>

	<br><br>
	<form action="/cart/sell" method="POST" onsubmit="return confirm_sell()">
		<input type="hidden" name="id" value="<?php print"$id"; ?>">
		<input type="hidden" name="name" value="<?php print"$name"; ?>">
		<input type="hidden" name="price" value="<?php print"$price"; ?>">
		<input type="hidden" name="stock" value="<?php print"$stock"; ?>">
		<input type="hidden" name="total" value="<?php print"$total"; ?>">
		<input type="submit" value="購入">	
	</form>
