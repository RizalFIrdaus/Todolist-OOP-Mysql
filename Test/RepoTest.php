<?php
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Config/Database.php";


use Entity\TodoList;
use Repository\TodolistRepoImp;
use Config\Database;


$con = Database::getCon();
$testRepo = new TodolistRepoImp($con);
$todo1 = new TodoList("Belajar PHP Database");
$todo2 = new TodoList("Belajar PHP WEB");
// $testRepo->save($todo1);
// $testRepo->save($todo2);
$testRepo->remove(2);
