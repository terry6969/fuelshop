<!-- ログイン用View -->
<?php echo View::forge('inc/header'); ?>

<div class="row" style="margin-top:200px;">
	<div class="container" style="width:200px;">
		<form action="/login/login" method="POST" data-toggle="validator">
			<?php if(isset($msg)): ?>
			<div class="row">
				<span class="glyphicon glyphicon-ok text-danger" aria-hidden="true"></span><span class="text-danger" ><?php echo $msg; ?></span>
			</div>
			<?php endif; ?>
			<div class="form-group">
    			<label for="input_id">ID</label>
				<input type="text" class="form-control" name="id" id="input_id"  maxlength="20" required>
			</div>
			<div class="form-group">
    			<label for="input_pass">PASSWORD</label>
				<input type="password" class="form-control" name="pass" id="input_pass" pattern="^[A-Za-z0-9]+$" maxlength="20" required>
			</div>
			<input class="btn btn-success" type="submit" value="ログイン" >
		<form>
	</div>
</div>
	
<?php echo View::forge('inc/footer'); ?>
