<div class="card col col-lg-5 mx-3 mx-lg-auto p-0">
	<div class="card-header">
		<h3 class="card-title">Add New</h3>
	</div>
	<div class="card-body">
		<!-- <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>"> -->
		<form method="" action="">
			
			<div class="form-group">
				<label for="title">Amount</label>
				<input value="123123" type="number" min="0" class="form-control" id="amount" name="amount" required title="number only" />
			</div>
			
			<div class="form-group">
				<label for="title">Buyer</label>
				<input value="sdadasd" type="text" pattern="^(?=.*[A-Za-z0-9])[A-Za-z0-9 _]*$" maxlength="20" class="form-control" id="buyer" name="buyer" required title="only letters, numbers and spaces, max 20 characters" />
			</div>
			
			<div class="form-group">
				<label for="title">Receipt ID</label>
				<input value="asdasdad" type="text" pattern="^[A-Za-z]+$" maxlength="20" class="form-control" id="receipt_id" name="receipt_id" required title="text only"/>
			</div>
			
			<div class="form-group">
				<label for="title">Buyer Email</label>
				<input value="sami@gmail.com" type="email" class="form-control" id="buyer_email" name="buyer_email" required title="email only"/>
			</div>			
						
			<div class="form-group">
				<label for="title">Items</label>
				<select multiple="multiple" class="multiselect form-control" id="items" name="items[]" required>
					<option value="Pen">Pen</option>
					<option value="Pencil">Pencil</option>
					<option value="Eraser">Eraser</option>
					<option value="Sharpner">Sharpner</option>
					<option value="Paper">Paper</option>					
					<option value="Stapler">Stapler</option>					
				</select>				
			</div>

			<div class="form-group">
				<label for="title">Note</label>
				<textarea class="form-control" id="note" name="note" required title="text only, limit 30 words"></textarea>
			</div>

			<div class="form-group">
				<label for="title">City</label>
				<input value="dhaka" type="text" pattern="^[A-Za-z]+$" class="form-control" id="city" name="city" required title="text only" />
			</div>

			<div class="form-group">
				<label for="title">Phone</label>
				<input value="123123" type="number" min="0" class="form-control" id="phone" name="phone" required title="number only" />
			</div>

			<div class="form-group">
				<label for="title">Entry By</label>
				<input value="123123" type="number" min="0" class="form-control" id="entry_by" name="entry_by" required title="number only" />
			</div>

			<input class="btn btn-primary" name="submit" type="submit" value="Submit" id="submitBtn"/>
			<a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>buyers">Cancel</a>
		</form>
	</div>
</div>
