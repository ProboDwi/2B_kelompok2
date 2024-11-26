<?php
// routes.php

require_once 'app/controllers/CategoriesController.php';

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
} else {
    http_response_code(404);
    echo "404 Not Found";
}