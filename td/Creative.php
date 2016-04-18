<?php
class Creative extends Tradedesk {
	/*
		List all the creatives that belong to an Advertiser.
		@param $advertiserID required
			Get the Advertiser ID from the database or based on current user.
	*/
	function listCreative($advertiserID = NULL) {
		if(!isset($advertiserID)) throw new Exception("Must supply a advertiser ID");

		$postFields = array(
			"AdvertiserId" => $advertiserID,
			"PageStartIndex" => 0,
			"PageSize" => NULL
		);
		debug($postFields);
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,"https://api.thetradedesk.com/v3/creative/query/advertiser");
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postFields));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, CURL_SSL);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $this->_ttd_auth_header);
		$result = json_decode(curl_exec($ch), true);
		if (curl_errno($ch)) { 
		   print curl_error($ch); 
		} 
		curl_close ($ch);
		return $result;
	}
	/*
		Get a specific creative by ID.
		@param $creativeID required
			Get the Advertiser ID from the database or based on current user.
	*/
	function getCreative($creativeID = NULL) {
		if(!isset($creativeID)) throw new Exception("Must supply a advertiser ID");

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,"https://api.thetradedesk.com/v3/creative/".$creativeID);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, CURL_SSL);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $this->_ttd_auth_header);
		$result = json_decode(curl_exec($ch), true);
		if (curl_errno($ch)) { 
		   print curl_error($ch); 
		} 
		curl_close ($ch);
		return $result;
	}
	/*
		Create a creative.
		@param $creativeID required
			Get the Advertiser ID from the database or based on current user.
	*/
	function createCreative($options) {
		if(!isset($options)) throw new Exception("Must supply the options");
		if(!is_array($options)) throw new Exception("Options must be an array");

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,"https://api.thetradedesk.com/v3/creative");
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($options));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, CURL_SSL);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $this->_ttd_auth_header);
		$result = json_decode(curl_exec($ch), true);
		if (curl_errno($ch)) { 
		   print curl_error($ch); 
		} 
		curl_close ($ch);
		return $result;
	}
	/*
		Update a creative.
		@param $creativeID required
			Get the Advertiser ID from the database or based on current user.
	*/
	function createCreative($options) {
		if(!isset($options)) throw new Exception("Must supply the options");
		if(!is_array($options)) throw new Exception("Options must be an array");

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,"https://api.thetradedesk.com/v3/creative");
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($options));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, CURL_SSL);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $this->_ttd_auth_header);
		$result = json_decode(curl_exec($ch), true);
		if (curl_errno($ch)) { 
		   print curl_error($ch); 
		} 
		curl_close ($ch);
		return $result;
	}
}
?>