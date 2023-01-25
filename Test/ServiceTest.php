<?php

require_once __DIR__ . "/../Service/TodolistService.php";
require_once __DIR__ . "/../Config/Database.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";

use Repository\TodolistRepoImp;
use Entity\TodoList;
use Service\todolistServiceImp;

$con = Database::getCon();
$repo = new TodolistRepoImp($con);
$service = new todolistServiceImp($repo);
$service->addTodolist("Belajar");
$service->addTodolist("Makan");
$service->addTodolist("Mandi");
$service->addTodolist("Main");
$service->removeTodolist(10);
$service->showTodolist();
