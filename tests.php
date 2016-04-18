<?php

require_once 'autoload.php';

$username = getenv("username");
$password = getenv("password");
$partnerID = getenv("partnerID");

//Okay, first we test the login function
if($tradedesk = new Tradedesk($username, $password)) {
    print_r("Login succeeded\n");
}

//Second, get a list of advertisers
$tradedesk = new Advertisers($username, $password);
$advertisers = $tradedesk->listAdvertisers($partnerID);
if(!isset($advertisers['ResultCount'])) {
    throw new Exception('Failed to get advertisers.');
} else {
    print_r("Advertisers Fetched \n");
}

//Third, get a list of campaigns
$tradedesk = new Campaigns($username, $password);
$campaigns = $tradedesk->listCampaigns($advertisers['Result'][0]['AdvertiserId']);
if(!isset($campaigns['ResultCount'])) {
    throw new Exception('Failed to get campaigns.');
} else {
    print_r("Campaigns Fetched \n");
}
