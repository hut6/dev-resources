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
    $hosts[] = str_replace("www.", "", $check['hostname']);
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

?> 
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    
                    <h1>Missing</h1>
    
                    <?php 

                        foreach ($domains->data as $domain) {
                            $domain = str_replace("www.", "", $domain->domain);
                            if (!in_array($domain, $hosts)) {
                                echo $domain."<br>";
                            }
                        }

                    ?>

                </div>

            </div>

        </div>

    </body>
</html>