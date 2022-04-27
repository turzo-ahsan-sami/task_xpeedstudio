<div class="col-12">

    <div class="card col col-12 mx-3 mx-lg-auto p-0">
        <div class="card-header">
            <h3 class="card-title">Add New</h3>
        </div>
        <div class="card-body table-responsive">

            <?php if (isset($_SESSION['is_logged_in'])) : ?>

				<div class="row justify_space_between">
					<div class="ml-3">
						<a class="btn btn-primary btn-share mt-0" href="<?php echo ROOT_PATH; ?>buyers/add">Add New</a>
					</div>
					
					<div class="row mr-2">						

						<div class="form-group">
							<label for="fromDatePicker">From</label>
							<input type="date" class="form-control" id="fromDatePicker" name="fromDatePicker" />
						</div>
						&nbsp;
						<div class="form-group">
							<label for="toDatePicker">To</label>
							<input type="date" class="form-control" id="toDatePicker" name="toDatePicker" />
						</div>
						&nbsp;
						<div class="form-group">
							<label for="filterBtn"></label>							
							<input class="btn btn-primary mt_2em" name="filterBtn" type="submit" value="Filter" id="filterBtn" />
						</div>
					</div>
				</div>

				<table class="table">
					<thead class="thead-light">
						<tr>
							<th scope="col">SN</th>
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
						<?php $count = 0; ?>
						<?php foreach ($viewmodel as $item) : ?>
						<tr>
							<th scope="row"> <?php echo ++$count ?> </th>
							<td>
								<?php echo $item['amount'] ?>
							</td>
							<td>
								<?php echo $item['buyer'] ?>
							</td>
							<td>
								<?php echo $item['receipt_id'] ?>
							</td>
							<td>
								<?php echo $item['items'] ?>
							</td>
							<td>
								<?php echo $item['buyer_email'] ?>
							</td>
							<td>
								<?php echo $item['buyer_ip'] ?>
							</td>
							<td>
								<?php echo $item['note'] ?>
							</td>
							<td>
								<?php echo $item['city'] ?>
							</td>
							<td>
								<?php echo $item['phone'] ?>
							</td>
							<td>
								<?php echo $item['hash_key'] ?>
							</td>
							<td>
								<?php echo date("d F Y", strtotime($item['entry_at'])) ?>
							</td>
							<td>
								<?php echo $item['entry_by'] ?>
							</td>
							<td>
								<?php if (isset($_SESSION['is_logged_in'])) : ?>
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
    </div>
</div> 