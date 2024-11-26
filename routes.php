<?php
// routes.php

require_once 'app/controllers/OrdersController.php';

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
} else {
    http_response_code(404);
    echo "404 Not Found";
}