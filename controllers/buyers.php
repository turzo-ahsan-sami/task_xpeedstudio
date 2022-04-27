<?php

class Buyers extends Controller
{
    protected function Index()
    {		
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		if( !empty($post) ) {
			$viewmodel = new BuyerModel();
			$this->returnView($viewmodel->Filter(), false, 'filter');
		} else {
			$viewmodel = new BuyerModel();
			$this->returnView($viewmodel->Index(), true);
		}
    }

    protected function add()
    {
        if (!isset($_SESSION['is_logged_in'])) {
            header('Location: ' . ROOT_PATH . 'buyers');
        } else {
			// Sanitize POST
            $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            if (isset($post['submission'])) {
                $post['buyer_ip'] = Helpers::getUserIp();
                $post['hash_key'] = Helpers::getHashKey($post['receipt_id']);
                
                if (Helpers::validate($post)) {
                    Messages::setMsg('Please fill in the required fields', 'error');
                    return;
                }

				$buyerModel = new BuyerModel();
				$res = $buyerModel->store($post);

				if( $res->res == 'success' ) {
					Messages::setMsg('Added', 'success');
                    // Redirect
                    header('Location: ' . ROOT_PATH . 'buyers');					
                    exit(0);
				} else {
					Messages::setMsg($res->msg, 'error');
                	exit(1);
				}
				
            } else {
                $viewmodel = new BuyerModel();
                $this->returnView($viewmodel->add(), true);
            }
        }
    }

    protected function edit()
    {
        if (!isset($_SESSION['is_logged_in'])) {
            header('Location: ' . ROOT_PATH . 'buyers');
        } else {
            $viewmodel = new BuyerModel();
            $this->returnView($viewmodel->edit(), true);
        }
    }

    protected function delete()
    {
        if (!isset($_SESSION['is_logged_in'])) {
            header('Location: ' . ROOT_PATH . 'buyers');
        } else {
            $viewmodel = new BuyerModel();
            $this->returnView($viewmodel->delete(), true);
        }
    }
}
 