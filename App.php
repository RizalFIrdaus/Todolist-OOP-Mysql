<?php

use Repository\TodolistRepoImp;
use Service\todolistServiceImp;
use View\todolistView;
use Config\Database;

require_once __DIR__ . "/Entity/Todolist.php";
require_once __DIR__ . "/Helper/Input.php";
require_once __DIR__ . "/Repository/TodolistRepository.php";
require_once __DIR__ . "/Service/TodolistService.php";
require_once __DIR__ . "/View/TodolistView.php";
require_once __DIR__ . "/Config/Database.php";


echo "APP Todolist created by rizal" . PHP_EOL;

$con = Database::getCon();
$todolistRepo = new TodolistRepoImp($con);
$todolistService = new todolistServiceImp($todolistRepo);
$todolistView = new todolistView($todolistService);
$todolistView->showTodolist();
