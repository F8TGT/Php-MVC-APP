<?php

require_once __DIR__ . '/../app/init.php';

$routes = [
    '' => 'HomeController@index',
    'testing' => 'TestingController@index@testing',
];

if(array_key_exists('', $routes)) {
    echo "TRUE IT DOES EXIST";
} else {
    echo "it does not exist";
}
