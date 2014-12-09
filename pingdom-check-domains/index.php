<?php

require_once __DIR__ . '/vendor/autoload.php';

$username = ''; // Pingdom username
$password = ''; // Pingdom password
$token    = ''; // Pingdom application key (32 characters)

$pingdom = new \Pingdom\Client($username, $password, $token);

// List of checks
$checks  = $pingdom->getChecks();

$hosts = array();

foreach ($checks as $check) {
    $domain = str_replace("www.", "", $check['hostname']);;
    $hosts[$domain] = $domain;
}

// Use Sequel DB for example to copy the list of domains as JSON. Paste it here.
$domains = json_decode('{
	"data":
	[
		{
			"domain": "domain1.com.au"
		},
		{
			"domain": "domain2.com.au"
		}
	]
}');  

foreach ($domains->data as $domain) {
    $domain = str_replace("www.", "", $domain->domain);
    if (!in_array($domain, $hosts)) {
        echo $domain."<br>";
    }
}
