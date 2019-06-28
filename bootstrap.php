<?php

use Elasticsearch\ClientBuilder;
require 'vendor/autoload.php';

define('ELASTICSEARCH_API', '10.0.75.1:9200');

$search_client = ClientBuilder::create()->setHosts( [ELASTICSEARCH_API] )->build();
