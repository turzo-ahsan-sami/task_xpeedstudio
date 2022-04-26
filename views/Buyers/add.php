<div class="card col col-lg-5 mx-3 mx-lg-auto p-0">
	<div class="card-header">
		<h3 class="card-title">Add New</h3>
	</div>
	<div class="card-body">
		<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
			
			<div class="form-group">
				<label for="title">Amount</label>
				<input type="number" min="0" class="form-control" id="amount" name="amount" required title="number only" />
			</div>
			
			<div class="form-group">
				<label for="title">Buyer</label>
				<input type="text" pattern="^(?=.*[A-Za-z0-9])[A-Za-z0-9 _]*$" maxlength="20" class="form-control" id="buyer" name="buyer" required title="only letters, numbers and spaces, max 20 characters" />
			</div>
			
			<div class="form-group">
				<label for="title">Receipt ID</label>
				<input type="text" pattern="/^[A-Za-z]+$/" maxlength="20" class="form-control" id="receipt_id" name="receipt_id" required title="text only"/>
			</div>

			<input class="btn btn-primary" name="submit" type="submit" value="Submit" />
			<a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>buyers">Cancel</a>
		</form>
	</div>
</div>