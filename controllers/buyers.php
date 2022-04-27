<?php

class Buyers extends Controller
{
    protected function Index()
    {
        $viewmodel = new BuyerModel();
        $this->returnView($viewmodel->Index(), true);
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

				$viewmodel = new BuyerModel();
				$viewmodel->store($post);

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
 