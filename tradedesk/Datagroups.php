<?php
class Datagroups extends Tradedesk {
	/*
		List all the datagroups that belong to an Advertiser.
		@param $advertiserID required
			Get the Advertiser ID from the database or based on current user.
	*/
	function listDatagroups($advertiserID = NULL) {
		if(!isset($advertiserID)) throw new Exception("Must supply a advertiser ID");

		$postFields = array(
			"AdvertiserId" => $advertiserID,
			"PageStartIndex" => 0,
			"PageSize" => NULL
		);
		debug($postFields);
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,"https://api.thetradedesk.com/v3/datagroup/query/advertiser");
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
		Get a specific datagroup by ID.
		@param $datagroupID required
			Get the datagroup ID from the list of datagroups.
	*/
	function getDatagroup($datagroupID = NULL) {
		if(!isset($datagroupID)) throw new Exception("Must supply a datagroup ID");

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,"https://api.thetradedesk.com/v3/datagroup/".$creativeID);
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
		Create a datagroup.
		@param $options required
			The array of options required to create a datagroup.
	*/
	function createDatagroup($options) {
		if(!isset($options)) throw new Exception("Must supply the options");
		if(!is_array($options)) throw new Exception("Options must be an array");

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,"https://api.thetradedesk.com/v3/datagroup");
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
		Update a datagroup.
		@param $datagroupID required
			The array of options required to update a datagroup.
	*/
	function updateDatagroup($options) {
		if(!isset($options)) throw new Exception("Must supply the options");
		if(!is_array($options)) throw new Exception("Options must be an array");

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,"https://api.thetradedesk.com/v3/datagroup");
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