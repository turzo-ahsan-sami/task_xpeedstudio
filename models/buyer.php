<?php

class BuyerModel extends Model{
	public function Index(){
		if(isset($_SESSION['is_logged_in'])) {
			// $this->query('SELECT * FROM buyers WHERE entry_by = ' . $_SESSION['user_data']['id']);
			$this->query('SELECT * FROM buyers');
			$rows = $this->resultSet();
			return $rows;
		}
		
		return;
	}

	public function add(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if(isset($post['submit'])){
			if(
				$post['amount'] == '' 
				|| $post['buyer'] == ''
				|| $post['receipt_id'] == ''
				|| $post['items'] == ''
				|| $post['buyer_email'] == ''
				|| $post['buyer_ip'] == ''
				|| $post['note'] == ''
				|| $post['city'] == ''
				|| $post['phone'] == ''
				|| $post['hash_key'] == ''
				|| $post['entry_by'] == ''
			){
				Messages::setMsg('Please fill in the required fields', 'error');
				return;
			}
			// Insert into mySQL
			$this->query('INSERT INTO buyers (amount, buyer, receipt_id, items, buyer_email, buyer_ip, note, city, phone, hash_key, entry_by) VALUES (:amount, :buyer, :receipt_id, :items, :buyer_email, :buyer_ip, :note, :city, :phone, :hash_key, :entry_by)');
			
			$this->bind(':amount', 		$post['amount']);
			$this->bind(':buyer', 		$post['buyer']);
			$this->bind(':receipt_id',  $post['receipt_id']);
			$this->bind(':items', 		$post['items']);
			$this->bind(':buyer_email', $post['buyer_email']);
			$this->bind(':buyer_ip', 	$post['buyer_ip']);
			$this->bind(':note', 		$post['note']);
			$this->bind(':city', 		$post['city']);
			$this->bind(':phone', 		$post['phone']);
			$this->bind(':hash_key', 	$post['hash_key']);
			$this->bind(':entry_by', 	$post['entry_by']);			
			
			$this->execute();

			// Verify
			if($this->lastInsertId()){
				Messages::setMsg('Added', 'success');
				// Redirect
				header('Location: ' . ROOT_PATH . 'buyers');
				exit(0);
			}
		}

		return;
	}

	public function edit(){
		// Sanitize
		$get = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if(isset($post['submit'])){
			if(
				$post['amount'] == '' 
				|| $post['buyer'] == ''
				|| $post['receipt_id'] == ''
				|| $post['items'] == ''
				|| $post['buyer_email'] == ''
				|| $post['buyer_ip'] == ''
				|| $post['note'] == ''
				|| $post['city'] == ''
				|| $post['phone'] == ''
				|| $post['hash_key'] == ''
				|| $post['entry_by'] == ''
			){
				Messages::setMsg('Make sure the fields are not empty', 'error');
				$this->query('SELECT * FROM buyers WHERE id = :id');
				$this->bind(':id', $get['id']);
				return $this->single();
			}
			$this->query('UPDATE buyers SET amount = :amount, buyer = :buyer, receipt_id = :receipt_id, items = :items, buyer_email = :buyer_email, buyer_ip = :buyer_ip, note = :note, city = :city, phone = :phone, hash_key = :hash_key, entry_by = :entry_by, WHERE id = :id');
			
			$this->bind(':amount', 		$post['amount']);
			$this->bind(':buyer', 		$post['buyer']);
			$this->bind(':receipt_id',  $post['receipt_id']);
			$this->bind(':items', 		$post['items']);
			$this->bind(':buyer_email', $post['buyer_email']);
			$this->bind(':buyer_ip', 	$post['buyer_ip']);
			$this->bind(':note', 		$post['note']);
			$this->bind(':city', 		$post['city']);
			$this->bind(':phone', 		$post['phone']);
			$this->bind(':hash_key', 	$post['hash_key']);
			$this->bind(':entry_by', 	$post['entry_by']);
			$this->bind(':id', 			$post['id']);
			
			$this->execute();

			Messages::setMsg('Updated', 'success');
			header('Location: '. ROOT_PATH . 'buyers');
			exit(0);
		} else {
			if($get['id'] != NULL || $get['id'] != ''){
				// Fetch post using GET parameter value
				$this->query('SELECT count(*) FROM buyers WHERE id = :id');
				$this->bind(':id', $get['id']);
				$row = $this->countSet();
				if($row > 0){
					$this->query('SELECT * FROM buyers WHERE id = :id');
					$this->bind(':id', $get['id']);
					return $this->single();
				} else {
					header('Location: ' . ROOT_PATH . 'buyers');
				}
			} else {
				header('Location: ' . ROOT_PATH . 'buyers');
			}
		}
	}

	public function delete(){
		// Sanitize
		$get = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if(isset($post['submit'])){
			$this->query('DELETE FROM buyers WHERE id = :id');
			$this->bind(':id', $post['id']);
			$this->execute();

			Messages::setMsg('Deleted', 'success');
			header('Location: '. ROOT_PATH . 'buyers');
			exit(0);
		} else {
			if($get['id'] != NULL || $get['id'] != ''){
				// Fetch post using GET parameter value
				$this->query('SELECT count(*) FROM buyers WHERE id = :id');
				$this->bind(':id', $get['id']);
				$row = $this->countSet();
				if($row > 0){
					return $get['id'];
				} else {
					header('Location: ' . ROOT_PATH . 'buyers');
				}
			} else {
				header('Location: ' . ROOT_PATH . 'buyers');
			}
		}
	}
}

?>