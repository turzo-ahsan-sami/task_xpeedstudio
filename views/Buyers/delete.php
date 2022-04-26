<div class="card col col-md-6 mx-3 mx-md-auto p-3 text-center">
	<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
		<input type="hidden" name="id" value="<?php echo $viewmodel; ?>"/>
		<input type="submit" name="submit" class="btn btn-danger" value="Confirm" />
		<a class="btn btn-secondary" href="<?php echo ROOT_PATH; ?>buyers">Cancel</a>
	</form>
</div>