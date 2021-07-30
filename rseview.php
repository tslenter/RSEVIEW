<?php
require_once 'rs_init.php';

parse_str(implode('&', array_slice($argv, 1)), $_GET);

if(isset($_GET['q'])) {
        $q = $_GET['q'];
	$b = $_GET['b'];
        $query = $es->search([
		'size'=> $b,
		'index' => 'rsx-syslog*',
                'body'=>[
                        'query' => [
                                'bool' => [
                                        'should' => [
						'query_string' => [ 'query' => $q, 'fields'=> ['R_ISODATE', 'HOST_FROM', 'MESSAGE', 'LEGACY_MSGHDR']]
                                                ]
                                        ]
                                ],
			'sort' => [
				'R_ISODATE' => [
					'order' => 'desc'
					],
                                '_id' => [
                                        'order' => 'desc'
                                        ]
				]
			]
        ]);
}

if(isset($_GET['a'])) {
        $b = $_GET['b'];
        $query = $es->search([
                'size'=> $b,
		'index' => 'rsx-syslog*',
                'body'=>[
                        'query' => [
                                'wildcard' => [
					'MESSAGE' => '*'
					]
                                ],
                        'sort' => [
                                'R_ISODATE' => [
                                        'order' => 'desc'
                                        ],
                                '_id' => [
                                        'order' => 'desc'
                                        ]
                                ]
                        ]
        ]);
}

if($query['hits']['total']['value'] >=1) {
	$results = $query['hits']['hits'];
	$total_results = $query['hits']['total']['value'];
}

if (empty($total_results)) {
        echo ('No results ...'), PHP_EOL;
        die();
}

if ($total_results >= $b) {
	$total_results = $b;
}

function removeLastCharacter($string){
    return preg_replace('[\d$]', '', $string);
}

#Debug results array
#        echo '<pre>', print_r($query), '</pre>';
#	 echo '<pre>', print_r($query['hits']['hits']['0']['_source']['MESSAGE']), '</pre>';
for ($output_num = $total_results - 1; ; $output_num -= 1){
	if ($output_num < "0"){
		break;
	}
	$output_date = $results[$output_num]['_source']['R_ISODATE'];
	$output_host = $results[$output_num]['_source']['HOST_FROM'];
	$output_message = $results[$output_num]['_source']['MESSAGE'];
        $output_msghdr = $results[$output_num]['_source']['LEGACY_MSGHDR'];
	echo ("\033[33m$output_date\033[0m" . " " . "\033[32m$output_host\033[0m" . " " . "\033[11m$output_msghdr\033[0m" . "" . "\033[1m$output_message\033[0m"), PHP_EOL;
}
die();
?>
