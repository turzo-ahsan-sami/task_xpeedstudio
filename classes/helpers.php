<?php
class Helpers{

    public static function dd($data){
		echo '<pre>';
		die(var_dump($data));
		echo '</pre>';
	}

	public static function getUserIp(){
		return getenv('HTTP_CLIENT_IP')?:
        getenv('HTTP_X_FORWARDED_FOR')?:
        getenv('HTTP_X_FORWARDED')?:
        getenv('HTTP_FORWARDED_FOR')?:
        getenv('HTTP_FORWARDED')?:
        getenv('REMOTE_ADDR');
	}
	
    public static function getHashKey($receiptId){
        $salt = 'f1nd1ngn3m0';
		return hash ( "sha512", $salt . $receiptId );
	}

    public static function validate($post){
        if( empty( $post['amount'] ) ) return true;
        if( empty( $post['buyer'] ) ) return true;
        if( empty( $post['receipt_id'] ) ) return true;
        if( empty( $post['items'] ) ) return true;
        if( empty( $post['buyer_email'] ) ) return true;
        if( empty( $post['buyer_ip'] ) ) return true;
        if( empty( $post['note'] ) ) return true;
        if( empty( $post['city'] ) ) return true;
        if( empty( $post['phone'] ) ) return true;
        if( empty( $post['hash_key'] ) ) return true;
        if( empty( $post['entry_by'] ) ) return true;        
        return false;
    }

}
?>