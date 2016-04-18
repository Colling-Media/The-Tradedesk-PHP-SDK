<?php

require_once 'autoload.php';

$username = getenv("username");
$password = getenv("password");
$partnerID = getenv("partnerID");

$tradedesk = new Advertisers($username, $password);

echo "<table width='100%'>";
echo "<thead><tr><th>Advertiser</th><th>Description</th><th>Currency Code</th></tr></thead><tbody>";
foreach($tradedesk->listAdvertisers($partnerID) AS $advertiser) {
    echo "<tr><td>$advertiser->AdvertiserName</td><td>$advertiser->Description</td><td>$advertiser->CurrencyCode</td></tr>";
}
echo "</tbody></table>";