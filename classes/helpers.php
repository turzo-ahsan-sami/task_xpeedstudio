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
}
?>