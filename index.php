<?php

require_once 'autoload.php';

$username = getenv("username");
$password = getenv("password");
$partnerID = getenv("partnerID");

$tradedesk = new Advertisers($username, $password);

foreach($tradedesk->listAdvertisers($partnerID) AS $advertiser) {
    print_r("|---- ".$advertiser['AdvertiserName']." ----|\n");
    print_r("|".$advertiser['Description']."|\n");
    print_r("|".$advertiser['CurrencyCode']."|\n");
    print_r("|--------|\n");
    print_r("\n");
}
