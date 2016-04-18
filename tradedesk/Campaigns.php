<?php
class Campaigns extends Tradedesk {
	/*
		List all the campagins that belong to an Advertiser.
		@param $advertiserID required
			Get the Advertiser ID from the database or based on current user.
	*/
	function listCampaigns($advertiserID = NULL) {
		if(!isset($advertiserID)) throw new Exception("Must supply a advertiser ID");

		$postFields = array(
			"AdvertiserId" => $advertiserID,
			"PageStartIndex" => 0,
			"PageSize" => NULL
		);
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,"https://api.thetradedesk.com/v3/campaign/query/advertiser");
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
		Get a specific campaign based on the Campaign ID.
		@param $campaignID required
			Get the Campaign ID from the listCampaigns() function.
	*/
	function getCampaign($campaignID = NULL) {
		if(!isset($campaignID)) throw new Exception("Must supply a Campaign ID");

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,"https://api.thetradedesk.com/v3/campaign/".$campaignID);
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
		Create a campaign.
		@param $options required
			The options section must include the information that is required to create a campaign.
	*/
	function createCampaign($options = NULL) {
		if(!isset($options)) throw new Exception("Must include the campaign options");
		if(!is_array($options)) throw new Exception("Campaign Options must be an array");
		if(!isset($options["AdvertiserId"])) throw new Exception("Options must include AdvertiserId");
		if(!isset($options["CampaignName"])) throw new Exception("Options must include the CampaignName");
		if(!isset($options["Budget"])) throw new Exception("Options must include the budget");
		if(!isset($options["Budget"]["Amount"])) throw new Exception("Budget must include Amount");
		if(!isset($options["Budget"]["CurrencyCode"])) throw new Exception("Budget must include CurrencyCode");
		if(!isset($options["StartDate"])) throw new Exception("Options must include StartDate");
		if(!isset($options["CampaignConversionReportingColumns"])) throw new Exception("Options must include CampaignConversionReportingColumns");

		/*
			//Options Array Example
			$options = array(
				"AdvertiserId" => "string",
				"CampaignName" => "string",
				"Description" => "string",
				"Budget" => array(
					"Amount" => "int",
					"CurrencyCode" => "string"
				),
				"BudgetInImpressions" => "int",
				"DailyBudget" => array(
					"Amount" => "int",
					"CurrencyCode" => "string"
				),
				"DailyBudgetInImpressions" => "int",
				"StartDate" => "DateTime",
				"EndDate" => "DateTime",
				"PartnerCostPercentageFee" => "decimal",
				"PartnerCPMFee" => array(
					"Amount" => "int",
					"CurrencyCode" => "string"
				),
				"PartnerCPCFee" => array(
					"Amount" => "int",
					"CurrencyCode" => "string"
				),
				"CampaignConversionReportingColumns" => array(
					array(
						"TrackingTagId" => "string",
						"TrackingTagName" => "string",
						"ReportingColumnId" => "int",
						"CrossDeviceAttributionModelId" => "string"
					),
					array(
						"TrackingTagId" => "string",
						"TrackingTagName" => "string",
						"ReportingColumnId" => "int",
						"CrossDeviceAttributionModelId" => "string"
					),
				),
				"Availability" => "string"
			);
		*/

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,"https://api.thetradedesk.com/v3/campaign");
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
		Update a campaign.
		@param $options required
			The options section must include the information that is required to update a campaign.
	*/
	function updateCampaign($options = NULL) {
		if(!isset($options)) throw new Exception("Must include the campaign options");
		if(!is_array($options)) throw new Exception("Campaign Options must be an array");
		if(!isset($options["CampaignId"])) throw new Exception("Options must include the CampaignId");

		/*
			//Options Array Example
			$options = array(
				"CampaignId" => "string",
				"CampaignName" => "string",
				"Description" => "string",
				"Budget" => array(
					"Amount" => "int",
					"CurrencyCode" => "string"
				),
				"BudgetInImpressions" => "int",
				"DailyBudget" => array(
					"Amount" => "int",
					"CurrencyCode" => "string"
				),
				"DailyBudgetInImpressions" => "int",
				"StartDate" => "DateTime",
				"EndDate" => "DateTime",
				"PartnerCostPercentageFee" => "decimal",
				"PartnerCPMFee" => array(
					"Amount" => "int",
					"CurrencyCode" => "string"
				),
				"PartnerCPCFee" => array(
					"Amount" => "int",
					"CurrencyCode" => "string"
				),
				"CampaignConversionReportingColumns" => array(
					array(
						"TrackingTagId" => "string",
						"TrackingTagName" => "string",
						"ReportingColumnId" => "int",
						"CrossDeviceAttributionModelId" => "string"
					),
					array(
						"TrackingTagId" => "string",
						"TrackingTagName" => "string",
						"ReportingColumnId" => "int",
						"CrossDeviceAttributionModelId" => "string"
					),
				),
				"Availability" => "string"
			);
		*/

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,"https://api.thetradedesk.com/v3/campaign");
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