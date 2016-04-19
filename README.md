[![Stories in Ready](https://badge.waffle.io/Colling-Media/The-Tradedesk-PHP-SDK.png?label=ready&title=Ready)](https://waffle.io/Colling-Media/The-Tradedesk-PHP-SDK)
# Tradedesk API
[![Build Status](https://travis-ci.org/Colling-Media/The-Tradedesk-PHP-SDK.svg?branch=master)](https://travis-ci.org/Colling-Media/The-Tradedesk-PHP-SDK)

This is the start of a PHP wrapper for the http://tradedesk.com API. We are building off v3 of their API.

This is still under development, recommended to not use for public use.


## Start
You must supply the API credentials you have from your account rep.

	$tradedesk = new Campaigns($username, $password);

## Campaigns

### List Camapigns
	$tradedesk->listCampaigns($advertiserId);

### Retrieve a Camapign
	$tradedesk->getCampaign($campaignId);

### Create a Camapign
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
			)
		),
		"Availability" => "string"
	);
	$tradedesk->createCampagin($options);

### Update a Campaign
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
			)
		),
		"Availability" => "string"
	);
	$tradedesk->updateCampaign($options);

## Creative

### Start
	$tradedesk = new Creative($username, $password);

### List Creative
	$tradedesk->listCreative($advertiserId);

### Retrieve a Creative
	$tradedesk->getCreative($campaignId);

### Create a Creative
	$options = array(
		"AdvertiserId" => "string",
		"CreativeName" => "string",
		"Description" => "string",
		"ImageAttributes" => array(
			"ImageContent" => "string",
			"AdTechnologyIds" => array(
				"string",
				"string",
				"string"
			) ,
			"RightMediaOfferTypeId" => 1,
			"Width" => 1,
			"Height" => 1,
			"ImageUrl" => "string",
			"ThirdPartyImpressionTrackingUrl" => "string",
			"ThirdPartyImpressionTrackingUrl2" => "string",
			"ThirdPartyImpressionTrackingUrl3" => "string",
			"ThirdPartyTrackingTags" => array(
				"string",
				"string",
				"string"
			) ,
			"IsSecurable" => true,
			"ClickthroughUrl" => "string",
			"LandingPageUrl" => "string"
		) ,
		"FacebookAttributes" => array(
			"ImageContent" => "string",
			"Width" => 1,
			"Height" => 1,
			"ImageUrl" => "string",
			"ThirdPartyImpressionTrackingUrl" => "string",
			"ThirdPartyImpressionTrackingUrl2" => "string",
			"ThirdPartyImpressionTrackingUrl3" => "string",
			"ClickthroughUrl" => "string",
			"LandingPageUrl" => "string",
			"FacebookTitle" => "string",
			"FacebookBody" => "string",
			"FacebookRelatedFanPageUrl" => "string",
			"IsDynamicPlaceholder" => true
		) ,
		"FacebookPagePostAttributes" => array(
			"ImageContent" => "string",
			"Width" => 1,
			"Height" => 1,
			"ImageUrl" => "string",
			"ThirdPartyImpressionTrackingUrl" => "string",
			"ThirdPartyImpressionTrackingUrl2" => "string",
			"ThirdPartyImpressionTrackingUrl3" => "string",
			"ClickthroughUrl" => "string",
			"LandingPageUrl" => "string",
			"UserMessage" => "string",
			"Title" => "string",
			"Body" => "string",
			"FacebookRelatedFanPageUrl" => "string"
		) ,
		"FlashAttributes" => array(
			"FlashContent" => "string",
			"AdTechnologyIds" => array(
				"string",
				"string",
				"string"
			) ,
			"RightMediaOfferTypeId" => 1,
			"Width" => 1,
			"Height" => 1,
			"FlashUrl" => "string",
			"ThirdPartyImpressionTrackingUrl" => "string",
			"ThirdPartyImpressionTrackingUrl2" => "string",
			"ThirdPartyImpressionTrackingUrl3" => "string",
			"ThirdPartyTrackingTags" => array(
				"string",
				"string",
				"string"
			) ,
			"IsSecurable" => true,
			"ClickthroughUrl" => "string",
			"LandingPageUrl" => "string",
			"FlashClickTrackingParameterName" => "string"
		) ,
		"ThirdPartyTagAttributes" => array(
			"AdTag" => "string",
			"AdTechnologyIds" => array(
				"string",
				"string",
				"string"
			) ,
			"RightMediaOfferTypeId" => 1,
			"Width" => 1,
			"Height" => 1,
			"LandingPageUrls" => array(
				"string",
				"string",
				"string"
			) ,
			"AdServerName" => "string",
			"AdServerCreativeId" => "string",
			"IsSecurable" => true
		) ,
		"TradeDeskHostedVideoAttributes" => array(
			"VideoContent" => "string",
			"VideoUploadAttributes" => array(
				"VideoCreativeId" => "string",
				"VideoCreativeExtension" => "string"
			) ,
			"AdTechnologyIds" => array(
				"string",
				"string",
				"string"
			) ,
			"RightMediaOfferTypeId" => 1,
			"CompanionCreativeIds" => array(
				"string",
				"string",
				"string"
			) ,
			"Skippable" => true,
			"ClickthroughUrl" => "string",
			"LandingPageUrl" => "string",
			"TrackingEvents" => array(
				array(
					"EventType" => "Midpoint",
					"EventUrl" => "string"
				) ,
				array(
					"EventType" => "Midpoint",
					"EventUrl" => "string"
				) ,
				array(
					"EventType" => "Midpoint",
					"EventUrl" => "string"
				)
			) ,
			"Duration" => 1,
			"VastTagUrl" => "string",
			"VideoEncodingComplete" => true,
			"IsSecurable" => true
		) ,
		"ThirdPartyHostedVideoAttributes" => array(
			"VastXmlUrl" => "string",
			"AllowIncompleteMediaFiles" => true,
			"Duration" => 1,
			"LandingPageUrl" => "string",
			"AdTechnologyIds" => array(
				"string",
				"string",
				"string"
			) ,
			"RightMediaOfferTypeId" => 1,
			"ThirdPartyImpressionTrackingUrl" => "string",
			"Skippable" => true,
			"IsSecurable" => true
		) ,
		"Html5Attributes" => array(
			"HtmlFileContent" => "string",
			"ZipArchiveContent" => "string",
			"PrimaryHtmlFileName" => "string",
			"BackupImageContent" => "string",
			"Width" => 1,
			"Height" => 1,
			"HtmlFileUrl" => "string",
			"BackupImageUrl" => "string",
			"AdTechnologyIds" => array(
				"string",
				"string",
				"string"
			) ,
			"RightMediaOfferTypeId" => 1,
			"ClickthroughUrl" => "string",
			"UseClickthroughAsDefault" => true,
			"LandingPageUrls" => array(
				"string",
				"string",
				"string"
			) ,
			"ClickTrackingParameterName" => "string",
			"ThirdPartyTrackingTags" => array(
				"string",
				"string",
				"string"
			) ,
			"IsSecurable" => true
		) ,
		"CreativeAuditStatuses" => array(
			array(
				"CreativeAuditor" => "AppNexus",
				"AuditStatus" => "string",
				"ReasonForStatus" => "string"
			) ,
			array(
				"CreativeAuditor" => "AppNexus",
				"AuditStatus" => "string",
				"ReasonForStatus" => "string"
			) ,
			array(
				"CreativeAuditor" => "AppNexus",
				"AuditStatus" => "string",
				"ReasonForStatus" => "string"
			)
		)
	);
	$tradedesk->createCreative($options);

### Update a Creative
	$options = array(
		"AdvertiserId" => "string",
		"CreativeName" => "string",
		"Description" => "string",
		"ImageAttributes" => array(
			"ImageContent" => "string",
			"AdTechnologyIds" => array(
				"string",
				"string",
				"string"
			) ,
			"RightMediaOfferTypeId" => 1,
			"Width" => 1,
			"Height" => 1,
			"ImageUrl" => "string",
			"ThirdPartyImpressionTrackingUrl" => "string",
			"ThirdPartyImpressionTrackingUrl2" => "string",
			"ThirdPartyImpressionTrackingUrl3" => "string",
			"ThirdPartyTrackingTags" => array(
				"string",
				"string",
				"string"
			) ,
			"IsSecurable" => true,
			"ClickthroughUrl" => "string",
			"LandingPageUrl" => "string"
		) ,
		"FacebookAttributes" => array(
			"ImageContent" => "string",
			"Width" => 1,
			"Height" => 1,
			"ImageUrl" => "string",
			"ThirdPartyImpressionTrackingUrl" => "string",
			"ThirdPartyImpressionTrackingUrl2" => "string",
			"ThirdPartyImpressionTrackingUrl3" => "string",
			"ClickthroughUrl" => "string",
			"LandingPageUrl" => "string",
			"FacebookTitle" => "string",
			"FacebookBody" => "string",
			"FacebookRelatedFanPageUrl" => "string",
			"IsDynamicPlaceholder" => true
		) ,
		"FacebookPagePostAttributes" => array(
			"ImageContent" => "string",
			"Width" => 1,
			"Height" => 1,
			"ImageUrl" => "string",
			"ThirdPartyImpressionTrackingUrl" => "string",
			"ThirdPartyImpressionTrackingUrl2" => "string",
			"ThirdPartyImpressionTrackingUrl3" => "string",
			"ClickthroughUrl" => "string",
			"LandingPageUrl" => "string",
			"UserMessage" => "string",
			"Title" => "string",
			"Body" => "string",
			"FacebookRelatedFanPageUrl" => "string"
		) ,
		"FlashAttributes" => array(
			"FlashContent" => "string",
			"AdTechnologyIds" => array(
				"string",
				"string",
				"string"
			) ,
			"RightMediaOfferTypeId" => 1,
			"Width" => 1,
			"Height" => 1,
			"FlashUrl" => "string",
			"ThirdPartyImpressionTrackingUrl" => "string",
			"ThirdPartyImpressionTrackingUrl2" => "string",
			"ThirdPartyImpressionTrackingUrl3" => "string",
			"ThirdPartyTrackingTags" => array(
				"string",
				"string",
				"string"
			) ,
			"IsSecurable" => true,
			"ClickthroughUrl" => "string",
			"LandingPageUrl" => "string",
			"FlashClickTrackingParameterName" => "string"
		) ,
		"ThirdPartyTagAttributes" => array(
			"AdTag" => "string",
			"AdTechnologyIds" => array(
				"string",
				"string",
				"string"
			) ,
			"RightMediaOfferTypeId" => 1,
			"Width" => 1,
			"Height" => 1,
			"LandingPageUrls" => array(
				"string",
				"string",
				"string"
			) ,
			"AdServerName" => "string",
			"AdServerCreativeId" => "string",
			"IsSecurable" => true
		) ,
		"TradeDeskHostedVideoAttributes" => array(
			"VideoContent" => "string",
			"VideoUploadAttributes" => array(
				"VideoCreativeId" => "string",
				"VideoCreativeExtension" => "string"
			) ,
			"AdTechnologyIds" => array(
				"string",
				"string",
				"string"
			) ,
			"RightMediaOfferTypeId" => 1,
			"CompanionCreativeIds" => array(
				"string",
				"string",
				"string"
			) ,
			"Skippable" => true,
			"ClickthroughUrl" => "string",
			"LandingPageUrl" => "string",
			"TrackingEvents" => array(
				array(
					"EventType" => "Midpoint",
					"EventUrl" => "string"
				) ,
				array(
					"EventType" => "Midpoint",
					"EventUrl" => "string"
				) ,
				array(
					"EventType" => "Midpoint",
					"EventUrl" => "string"
				)
			) ,
			"Duration" => 1,
			"VastTagUrl" => "string",
			"VideoEncodingComplete" => true,
			"IsSecurable" => true
		) ,
		"ThirdPartyHostedVideoAttributes" => array(
			"VastXmlUrl" => "string",
			"AllowIncompleteMediaFiles" => true,
			"Duration" => 1,
			"LandingPageUrl" => "string",
			"AdTechnologyIds" => array(
				"string",
				"string",
				"string"
			) ,
			"RightMediaOfferTypeId" => 1,
			"ThirdPartyImpressionTrackingUrl" => "string",
			"Skippable" => true,
			"IsSecurable" => true
		) ,
		"Html5Attributes" => array(
			"HtmlFileContent" => "string",
			"ZipArchiveContent" => "string",
			"PrimaryHtmlFileName" => "string",
			"BackupImageContent" => "string",
			"Width" => 1,
			"Height" => 1,
			"HtmlFileUrl" => "string",
			"BackupImageUrl" => "string",
			"AdTechnologyIds" => array(
				"string",
				"string",
				"string"
			) ,
			"RightMediaOfferTypeId" => 1,
			"ClickthroughUrl" => "string",
			"UseClickthroughAsDefault" => true,
			"LandingPageUrls" => array(
				"string",
				"string",
				"string"
			) ,
			"ClickTrackingParameterName" => "string",
			"ThirdPartyTrackingTags" => array(
				"string",
				"string",
				"string"
			) ,
			"IsSecurable" => true
		) ,
		"CreativeAuditStatuses" => array(
			array(
				"CreativeAuditor" => "AppNexus",
				"AuditStatus" => "string",
				"ReasonForStatus" => "string"
			) ,
			array(
				"CreativeAuditor" => "AppNexus",
				"AuditStatus" => "string",
				"ReasonForStatus" => "string"
			) ,
			array(
				"CreativeAuditor" => "AppNexus",
				"AuditStatus" => "string",
				"ReasonForStatus" => "string"
			)
		)
	);
	$tradedesk->updateCreative($options);

## Datagroups

### Start
	$tradedesk = new DataGroup($username, $password);

### List Datagroups
	$tradedesk->listDatagroups($advertiserId);

### Retrieve a Datagroup
	$tradedesk->getDatagroup($datagroupId);

### Create a Datagroup
	$options = array(
		"AdvertiserId" => "string",
		"DataGroupName" => "string",
		"Description" => "string",
		"IsSharable" => true,
		"FirstPartyDataIds" => array(
			"int",
			"int"
			...
		),
		"ThirdPartyDataIds" => array(
			"string",
			"string",
			"string",
			...
		)
	);
	$tradedesk->createDatagroup($options);

### Update a Datagroup
	$options = array(
		"DataGroupId" => "string",
		"DataGroupName" => "string",
		"Description" => "string",
		"IsSharable" => true,
		"FirstPartyDataIds" => array(
			"int",
			"int"
			...
		),
		"ThirdPartyDataIds" => array(
			"string",
			"string",
			"string",
			...
		)
	);
	$tradedesk->createDatagroup($options);

## DMP (Data Management Platform)

## Start
	$tradedesk = new DMP($username, $password);

### Search DMP for Third Party Data
	$options = array(
		"CategoryIds" => array(
			1,
			2,
			3
		),
		"BrandIds" => array(
			"sample string 1",
			"sample string 2",
			"sample string 3"
		),
		"SortFields" => array(
			array(
				"FieldId" => "FullPath",
				"Ascending" => true
			),
			array(
				"FieldId" => "FullPath",
				"Ascending" => true
			),
			array(
				"FieldId" => "FullPath",
				"Ascending" => true
			)
		),
		"SearchTerms" => array(
			"sample string 1",
			"sample string 2",
			"sample string 3"
		),
		"UniqueCountMinimum" => 1,
		"UniqueCountMaximum" => 1,
		"DataRateFilters" => array(
			"CPMFilter" => array(
				"MinimumCPM" => array(
					"Amount" => 1.0,
					"CurrencyCode" => "USD"
				),
				"MaximumCPM" => array(
					"Amount" => 1.0,
					"CurrencyCode" => "USD"
				)
			),
			"PercentOfMediaCostFilter" => array(
				"MinimumPercent" => 1.0,
				"MaximumPercent" => 1.0
			)
		)
	);
	$tradedesk->searchDMPThirdParty($advertiserID, $options);
