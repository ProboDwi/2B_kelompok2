<?php
// routes.php

require_once 'app/controllers/UserController.php';

$usercontroller = new UserController();
$url = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($url == '/user/index' || $url == '/') {
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