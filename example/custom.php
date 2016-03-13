<?php

require_once(__DIR__.'/vendor/autoload.php');

use alsvanzelf\debby;

$options = [
	'notify_address' => 'devops@example.com',
	'root_dir'       => '/path/to/project/',
	'smtp_login'     => [
		'host' => 'smtp.example.com',
		'port' => 587,
		'ssl'  => 'ssl',
		'user' => 'devops@example.com',
		'pass' => 'password',
	],
];
$debby = new debby\debby($options);

$results = $debby->check();
$debby->notify($results);
