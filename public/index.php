<?php

require_once __DIR__ . '/../app/init.php';
require_once __DIR__ . '/../routes/web.php';

$request = isset($_GET['url']) ? rtrim($_GET['url'], '/') : '';

if(array_key_exists($request, $routes)) {
    echo "TRUE IT DOES EXIST";
} else {
    echo "it does not exist";
}
