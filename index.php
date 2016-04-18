<?php

require_once 'autoload.php';

$username = getenv("username");
$password = getenv("password");
$partnerID = getenv("partnerID");

$tradedesk = new Advertisers($username, $password);

print_r($tradedesk->listAdvertisers($partnerID));