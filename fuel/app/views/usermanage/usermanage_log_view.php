<?php echo View::forge('inc/manage_header'); ?>

<?php echo Asset::js('bootstrap-datetimepicker.min.js'); ?>
<?php echo Asset::css('bootstrap-datetimepicker.min.css'); ?>
<div class="row" style="margin:20px; 0">
	<input type="button" value="戻る" onclick="location.href='/usermanage'" class="btn btn-primary">
</div>

<div class="row" style="margin:20px; 0">
	<form class="form-inline">
		<div class="form-group">
			
			<div class='input-group date' id='date_from' style="width:250px;">
				<input type="text" class="form-control" placeholder="from" data-format="dd/MM/yyyy hh:mm:ss">
				<span class="input-group-addon">
					<span class="glyphicon glyphicon-calendar"></span>
				</span>
			</div>
			<script type="text/javascript">
	            $(function () {
	                $('#date_from').datetimepicker();
	            });
	        </script>
		</div>
		〜
		<div class="form-group">
			
			<div class='input-group date' id='date_to' style="width:250px;">
				<input type="text" class="form-control" placeholder="to" data-format="dd/MM/yyyy hh:mm:ss">
				<span class="input-group-addon">
					<span class="glyphicon glyphicon-calendar"></span>
				</span>
			</div>
			<script type="text/javascript">
	            $(function () {
	                $('#date_to').datetimepicker();
	            });
	        </script>
		</div>
		<input type="submit" value="検索" class="btn btn-info">
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