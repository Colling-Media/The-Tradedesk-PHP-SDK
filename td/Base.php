<?php
function debug($text, $debug = "true") {
	if($debug == "true") {
		if(is_array($text)) {
			print_r($text);
		} else {
			print_r($text);
		}
	}
}
const CURL_SSL = false;

class Tradedesk {
	private $_userLogin = "";
    private $_userPass = "";
	protected $_ttd_auth_header = "";

    function __construct($login = NULL, $pass = NULL) {
        if(!isset($login) || !isset($pass)) throw new Exception('Login and password required.');

		debug("Logging In...\n");

        $this->_userLogin = $login;
        $this->_userPass = $pass;

		debug("User: {$this->_userLogin}\n");
		debug("Pass: {$this->_userPass}\n");

        $postFields = array(
			"Login" => $this->_userLogin,
			"Password" => $this->_userPass,
			"TokenExpirationInMinutes" => 10
		);

        $ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,"https://api.thetradedesk.com/v3/authentication");
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postFields));
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, CURL_SSL);
		$result = json_decode(curl_exec($ch), true);
		if (curl_errno($ch)) { 
		   print curl_error($ch); 
		} 
		curl_close ($ch);

		if(!isset($result["Token"])) throw new Exception('Could not log in');
		
		debug($result);

		$this->_ttd_auth_header = array("Content-Type:application/json", "TTD-Auth:".$result["Token"]);
    }

}
?>