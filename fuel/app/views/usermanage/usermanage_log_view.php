<?php echo View::forge('inc/manage_header'); ?>

<div class="row" style="margin:20px; 0">
	<input type="button" value="戻る" onclick="location.href='/usermanage'" class="btn btn-primary">
</div>

<div class="row" style="margin:20px; 0">
	<form action="/usermanage/user_log" method="POST" class="form-inline">
		<div class="form-group">
			<input type="date" class="form-control" placeholder="from" id="from" name="from" value="<?php echo (isset($from))?$from:'';?>">
		</div>
		〜
		<div class="form-group">
			<input type="date" class="form-control" placeholder="to" id="to" name="to" value="<?php echo (isset($to))?$to:'';?>">
		</div>
		<input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
		<input type="submit" value="検索" class="btn btn-warning">
		<input type="button" value="クリア" class="btn btn-info" onclick="resetForm()">
		<script>
			function resetForm(){
				$("#from").val("");
				$("#to").val("");
			}
		</script>
	</form>
</div>
<div class="row" style="margin:20px; 0">
	<table class="table table-hover">
		<tr>
			<th style="width:220px;">日付</th>
			<th>商品名</th>
			<th style="width:100px;">個数</th>
			<th style="width:100px;">金額</th>
		</tr>
		<?php foreach($log_list as $log): ?>
		<tr>
			<td><?php echo $log['created']; ?></td>
			<td><?php echo $log['product_name']; ?></td>
			<td><?php echo $log['count']; ?></td>
			<td><?php echo $log['product_price'] * $log['count']; ?></td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>
<?php echo View::forge('inc/manage_footer'); ?>