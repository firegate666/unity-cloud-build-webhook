<?php

$filename_base = time();

$data = [
	'get' => $_GET,
	'post' => $_POST,
];

$json = json_encode($data, JSON_PRETTY_PRINT);

if ($json === false) {
	print json_last_error_msg();
}

file_put_contents($filename_base . ".json", $json);
chmod($filename_base . ".json", 0755);

