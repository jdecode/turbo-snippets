<?php

require_once 'config.php';
require_once 'functions.php';

/**
 * Test connection code
 */

$api = new cfunctions();
$data = array('user' => API_USER, 'pass' => SECRET);
$url = 'https://merchant-api.jet.com/api/token';
$return = $api->_get_curl_data($url, $data);

prx($return);

