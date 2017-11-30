<?php

require __DIR__ . '/../vendor/autoload.php';
use diskover\Constants;

error_reporting(E_ALL ^ E_NOTICE);
require __DIR__ . "/../src/diskover/Diskover.php";

// get index cookies
$esIndex = getenv('APP_ES_INDEX') ?: getCookie('index');

require __DIR__ . "/d3_inc.php";

$data = [
    "name" => $path,
    "size" => $dirinfo[0],
    "count" => $dirinfo[1],
    "children" => get_file_mtime($client, $esIndex, $path, $filter, $mtime)
];

echo json_encode($data);