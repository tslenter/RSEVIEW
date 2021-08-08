<?php
require_once '/opt/RSEVIEW/vendor/autoload.php';
use Elasticsearch\ClientBuilder;
$es = ClientBuilder::create()->setHosts(['127.0.0.1:9200'])->build();
?>
