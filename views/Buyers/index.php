<!-- <?php var_dump($_SESSION['user_data']['id']); ?> -->

<div class="col-12">
	<?php if(isset($_SESSION['is_logged_in'])) : ?>
		<a class="btn btn-primary btn-share mt-0" href="<?php echo ROOT_PATH; ?>buyers/add">Add New</a>
		<table class="table">
			<thead class="thead-light">
				<tr>
				<th scope="col">#</th>
				<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($viewmodel as $item) : ?>
					<tr>
						  <th scope="row">1</th>
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