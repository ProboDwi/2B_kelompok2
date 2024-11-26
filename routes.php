<?php
// routes.php

require_once 'app/controllers/OrdersController.php';

$controller = new OrdersController();
$url = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($url == '/orders/index' || $url == '/') {
    $controller->index();
} elseif ($url == '/orders/create' && $requestMethod == 'GET') {
    $controller->create();
} elseif ($url == '/orders/store' && $requestMethod == 'POST') {
    $controller->store();
} elseif (preg_match('/\/orders\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $controller->edit($userId);
} elseif (preg_match('/\/orders\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $userId = $matches[1];
    $controller->update($userId, $_POST);
} elseif (preg_match('/\/orders\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $controller->delete($userId);
} else {
    http_response_code(404);
    echo "404 Not Found";
}