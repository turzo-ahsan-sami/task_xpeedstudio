<div class="card col col-lg-5 mx-3 mx-lg-auto p-0">
    <div class="card-header">
        <h3 class="card-title">Update</h3>
    </div>
    <div class="card-body">
        <form method="" action="">

            <div class="form-group">
                <label for="title">Amount</label>
                <input value="<?php echo $viewmodel['amount']; ?>" type="number" min="0" class="form-control" id="amount" name="amount" required title="number only" />
            </div>

            <div class="form-group">
                <label for="title">Buyer</label>
                <input value="<?php echo $viewmodel['buyer']; ?>" type="text" pattern="^(?=.*[A-Za-z0-9])[A-Za-z0-9 _]*$" maxlength="20" class="form-control" id="buyer" name="buyer" required title="only letters, numbers and spaces, max 20 characters" />
            </div>

            <div class="form-group">
                <label for="title">Receipt ID</label>
                <input value="<?php echo $viewmodel['receipt_id']; ?>" type="text" pattern="^[A-Za-z]+$" maxlength="20" class="form-control" id="receipt_id" name="receipt_id" required title="text only" />
            </div>

            <div class="form-group">
                <label for="title">Buyer Email</label>
                <input value="<?php echo $viewmodel['buyer_email']; ?>" type="email" class="form-control" id="buyer_email" name="buyer_email" required title="email only" />
            </div>

            <div class="form-group">
                <label for="title">Items</label>
                <select multiple="multiple" class="multiselect form-control" id="items" name="items[]" required>
                    <option <?php if (strpos($viewmodel['items'], "Pen") !== false) {
                                echo ("selected");
                            } ?> value="Pen">Pen</option>
                    <option <?php if (strpos($viewmodel['items'], "Pencil") !== false) {
                                echo ("selected");
                            } ?> value="Pencil">Pencil</option>
                    <option <?php if (strpos($viewmodel['items'], "Eraser") !== false) {
                                echo ("selected");
                            } ?> value="Eraser">Eraser</option>
                    <option <?php if (strpos($viewmodel['items'], "Sharpner") !== false) {
                                echo ("selected");
                            } ?> value="Sharpner">Sharpner</option>
                    <option <?php if (strpos($viewmodel['items'], "Paper") !== false) {
                                echo ("selected");
                            } ?> value="Paper">Paper</option>
                    <option <?php if (strpos($viewmodel['items'], "Stapler") !== false) {
                                echo ("selected");
                            } ?> value="Stapler">Stapler</option>
                </select>
            </div>

            <div class="form-group">
                <label for="title">Note</label>
                <textarea value="<?php echo $viewmodel['note']; ?>" class="form-control" id="note" name="note" required title="text only, limit 30 words"><?php echo $viewmodel['note']; ?></textarea>
            </div>

            <div class="form-group">
                <label for="title">City</label>
                <input value="<?php echo $viewmodel['city']; ?>" type="text" pattern="^[A-Za-z]+$" class="form-control" id="city" name="city" required title="text only" />
            </div>

            <div class="form-group">
                <label for="title">Phone</label>
                <input value="<?php echo $viewmodel['phone']; ?>" type="number" min="0" class="form-control" id="phone" name="phone" required title="number only" />
            </div>

            <div class="form-group">
                <label for="title">Entry By</label>
                <input value="<?php echo $viewmodel['entry_by']; ?>" type="number" min="0" class="form-control" id="entry_by" name="entry_by" required title="number only" />
            </div>

			<input type="hidden" id="username" name="username" value="<?php echo $_SESSION['user_data']['name']; ?>" />
            <input type="hidden" id="id" name="id" value="<?php echo $viewmodel['id']; ?>" />
            <input class="btn btn-primary" name="submit" type="submit" value="Update" id="updateBtn" />

            <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>buyers">Cancel</a>
        </form>
    </div>
</div> 