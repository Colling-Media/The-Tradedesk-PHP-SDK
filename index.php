<?php

require_once 'autoload.php';

$username = getenv("username");
$username = getenv("password");
$username = getenv("partnerID");

$tradedesk = new Advertisers($username, $password);
print_r($tradedesk->listAdvertisers($partnerID));