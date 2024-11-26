<?php
// routes.php

require_once 'app/controllers/CategoriesController.php';
require_once 'app/controllers/OrdersController.php';
require_once 'app/controllers/PlantsController.php';
require_once 'app/controllers/UserController.php';

$categoriescontroller = new CategoriesController();
$url = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($url == '/categories/index' || $url == '/') {
    $categoriescontroller->index();
} elseif ($url == '/categories/create' && $requestMethod == 'GET') {
    $categoriescontroller->create();
} elseif ($url == '/categories/store' && $requestMethod == 'POST') {
    $categoriescontroller->store();
} elseif (preg_match('/\/categories\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $categoriescontroller->edit($userId);
} elseif (preg_match('/\/categories\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $userId = $matches[1];
    $categoriescontroller->update($userId, $_POST);
} elseif (preg_match('/\/categories\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $categoriescontroller->delete($userId);
}

  elseif ($url == '/orders/index' || $url == '/') {
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
    $categoriescontroller->delete($userId);
} else {
    http_response_code(404);
    echo "404 Not Found";
}