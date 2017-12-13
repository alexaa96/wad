<?php
	$title = "Administration section";
	require_once "head.php";
        require_once "nav.php";
        require_once 'configure.php';
?>
	<form class="form-horizontal" method="post" action="admin_verify.php" style="margin-top: 150px; margin-bottom: 160px;">
		<div class="form-group">
			<label for="name" class="control-label col-md-4">Name</label>
			<div class="col-md-4">
				<input type="text" name="name" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label for="pass" class="control-label col-md-4">Pass</label>
			<div class="col-md-4">
				<input type="password" name="pass" class="form-control">
			</div>
		</div>
		<input type="submit" name="submit" class="btn btn-primary">
	</form>
<?php
	require_once "footer.php";
?>