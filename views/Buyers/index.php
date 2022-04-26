<!-- <?php var_dump($_SESSION['user_data']['id']); ?> -->

<div class="col-12">
	<?php if(isset($_SESSION['is_logged_in'])) : ?>
		<a class="btn btn-primary btn-share mt-0" href="<?php echo ROOT_PATH; ?>buyers/add">Add New</a>
		<table class="table">
			<thead class="thead-light">
				<tr>
					<th scope="col">#</th>
					<th scope="col">amount</th>
					<th scope="col">buyer</th>
					<th scope="col">receipt_id</th>
					<th scope="col">items</th>
					<th scope="col">buyer_email</th>
					<th scope="col">buyer_ip</th>
					<th scope="col">note</th>
					<th scope="col">city</th>
					<th scope="col">phone</th>
					<th scope="col">hash_key</th>
					<th scope="col">entry_at</th>
					<th scope="col">entry_by</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($viewmodel as $item) : ?>
					<tr>
						<th scope="row">1</th>
						<td> <?php echo $item['amount'] ?> </td>
						<td> <?php echo $item['buyer'] ?> </td>
						<td> <?php echo $item['receipt_id'] ?> </td>
						<td> <?php echo $item['items'] ?> </td>
						<td> <?php echo $item['buyer_email'] ?> </td>
						<td> <?php echo $item['buyer_ip'] ?> </td>
						<td> <?php echo $item['note'] ?> </td>
						<td> <?php echo $item['city'] ?> </td>
						<td> <?php echo $item['phone'] ?> </td>
						<td> <?php echo $item['hash_key'] ?> </td>
						<td> <?php echo date("d F Y", strtotime($item['entry_at'])) ?> </td>
						<td> <?php echo $item['entry_by'] ?> </td>
						<td>
							<?php if(isset($_SESSION['is_logged_in'])) : ?>
								<a class="card-link text-success" href="<?php echo ROOT_PATH; ?>buyers/edit/<?php echo $item['id']; ?>">Edit</a>
								</br>
								<a class="card-link text-danger" href="<?php echo ROOT_PATH; ?>buyers/delete/<?php echo $item['id']; ?>">Delete</a>
							<?php endif; ?>
						</td>
					</tr>				
				<?php endforeach; ?>
			</tbody>
		</table>
	<?php else : ?>
		<div class="col col-lg-8 mt-5 mx-3 mx-lg-auto text-center">
			<p class="lead">Please login first</p>		
		</div>
	<?php endif; ?>

	
</div>