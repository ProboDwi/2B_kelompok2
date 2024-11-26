<?php
// routes.php

require_once 'app/controllers/OrdersController.php';
require_once 'app/controllers/PlantsController.php';
require_once 'app/controllers/UserController.php';

$orderscontroller = new OrdersController();
$url = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($url == '/orders/index' || $url == '/') {
    $orderscontroller->index();
} elseif ($url == '/orders/create' && $requestMethod == 'GET') {
    $orderscontroller->create();
} elseif ($url == '/orders/store' && $requestMethod == 'POST') {
    $orderscontroller->store();
} elseif (preg_match('/\/orders\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $orderscontroller->edit($userId);
} elseif (preg_match('/\/orders\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $userId = $matches[1];
    $orderscontroller->update($userId, $_POST);
} elseif (preg_match('/\/orders\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $orderscontroller->delete($userId);
}

  elseif ($url == '/plants/index' || $url == '/') {
    $controller->index();
} elseif ($url == '/plants/create' && $requestMethod == 'GET') {
    $controller->create();
} elseif ($url == '/plants/store' && $requestMethod == 'POST') {
    $controller->store();
} elseif (preg_match('/\/plants\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $controller->edit($userId);
} elseif (preg_match('/\/plants\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $userId = $matches[1];
    $controller->update($userId, $_POST);
} elseif (preg_match('/\/plants\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $controller->delete($userId);
} 


  elseif ($url == '/user/index' || $url == '/') {
    $controller->index();
} elseif ($url == '/user/create' && $requestMethod == 'GET') {
    $controller->create();
} elseif ($url == '/user/store' && $requestMethod == 'POST') {
    $controller->store();
} elseif (preg_match('/\/user\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $controller->edit($userId);
} elseif (preg_match('/\/user\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $userId = $matches[1];
    $controller->update($userId, $_POST);
} elseif (preg_match('/\/user\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $orderscontroller->delete($userId);
} else {
    http_response_code(404);
    echo "404 Not Found";
}