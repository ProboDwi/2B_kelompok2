<?php
// routes.php

require_once 'app/controllers/CategoriesController.php';
require_once 'app/controllers/OrdersController.php';
require_once 'app/controllers/PlantsController.php';
require_once 'app/controllers/UserController.php';
require_once 'app/controllers/HomeController.php';

$plantscontroller = new PlantsController();
$usercontroller = new UserController();
$orderscontroller = new OrdersController();
$categoriescontroller = new CategoriesController();
$homecontroller = new HomeController();

$url = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($url == '/home/index' || $url == '/') {
    $homecontroller->index();
}
elseif ($url == '/categories/index' || $url == '/') {
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
    $plantscontroller->index();
} elseif ($url == '/plants/create' && $requestMethod == 'GET') {
    $plantscontroller->create();
} elseif ($url == '/plants/store' && $requestMethod == 'POST') {
    $plantscontroller->store();
} elseif (preg_match('/\/plants\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $plantscontroller->edit($userId);
} elseif (preg_match('/\/plants\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $userId = $matches[1];
    $plantscontroller->update($userId, $_POST);
} elseif (preg_match('/\/plants\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $plantscontroller->delete($userId);
} 


  elseif ($url == '/user/index' || $url == '/') {
    $usercontroller->index();
} elseif ($url == '/user/create' && $requestMethod == 'GET') {
    $usercontroller->create();
} elseif ($url == '/user/store' && $requestMethod == 'POST') {
    $usercontroller->store();
} elseif (preg_match('/\/user\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $usercontroller->edit($userId);
} elseif (preg_match('/\/user\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $userId = $matches[1];
    $usercontroller->update($userId, $_POST);
} elseif (preg_match('/\/user\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $usercontroller->delete($userId);
} else {
    http_response_code(404);
    echo "404 Not Found";
}