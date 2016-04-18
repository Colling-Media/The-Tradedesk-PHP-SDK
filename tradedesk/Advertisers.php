<?php
class Advertisers extends Tradedesk {
    /*
		List all the campagins that belong to an Advertiser.
		@param $advertiserID required
			Get the Advertiser ID from the database or based on current user.
	*/
    function listAdvertisers($partnerID) {
        $postFields = array(
            "PartnerId" => $partnerID,
            "PageStartIndex" => 0,
            "PageSize" => NULL
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://api.thetradedesk.com/v3/advertiser/query/partner");
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
}
?>