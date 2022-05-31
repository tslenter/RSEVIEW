<?php
$hosts = [
    [
        'host' => '127.0.0.1',
        'port' => '9200',
        'user' => '',
        'pass' => ''
    ]
];
require_once '/opt/RSEVIEW/vendor/autoload.php';
use Elasticsearch\ClientBuilder;
$es = ClientBuilder::create()->setHosts($hosts)->build();
?>
