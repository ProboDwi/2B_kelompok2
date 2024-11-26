<?php
// routes.php

require_once 'app/controllers/PlantsController.php';

$plantscontroller = new PlantsController();
$url = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($url == '/plants/index' || $url == '/') {
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
} else {
    http_response_code(404);
    echo "404 Not Found";
}