<?php echo View::forge('inc/header');
	  echo Asset::js('shop.js'); 
	  $cart =Session::get('cart');
?>

<?php if ($cart == '') {
	echo "カートが空です";
}else{

	$c =count($cart);
	for($i=0; $i <$c; $i++) { 
?>

	<?php echo Asset::img('uploads/'.$cart[$i]['i_id'].'.jpg', array('width'=>'50')); ?>
	<form action="/cart/del_item" method="POST" onsubmit="">
		<input type="hidden" name="del" id="del" value="<?php print $i; ?>">
		商品名　<?php echo ($cart[$i]['i_name']); ?> 　　
		金額　<?php echo ($cart[$i]['i_price']); ?>円　　
		個数　<?php echo ($cart[$i]['i_stock']); ?>個 
			<?php $total =($cart[$i]['total']); ?>
		　　
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
?>　円

	<br><br>
	<form action="/cart/sell" method="POST" onsubmit="return confirm_sell()">

		<input type="submit" value="購入">	
	</form>
<?php } ?>
<?php echo View::forge('inc/footer'); ?>