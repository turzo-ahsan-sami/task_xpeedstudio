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
        if( empty( $post['amount'])      || $post['amount']      == '' ) return true;
        if( empty( $post['buyer'])       || $post['buyer']       == '' ) return true;
        if( empty( $post['receipt_id'])  || $post['receipt_id']  == '' ) return true;
        if( empty( $post['items'])       || $post['items']       == '' ) return true;
        if( empty( $post['buyer_email']) || $post['buyer_email'] == '' ) return true;
        if( empty( $post['buyer_ip'])    || $post['buyer_ip']    == '' ) return true;
        if( empty( $post['note'])        || $post['note']        == '' ) return true;
        if( empty( $post['city'])        || $post['city']        == '' ) return true;
        if( empty( $post['phone'])       || $post['phone']       == '' ) return true;
        if( empty( $post['hash_key'])    || $post['hash_key']    == '' ) return true;
        if( empty( $post['entry_by'])    || $post['entry_by']    == '' ) return true;        
        return false;
    }

}
?>