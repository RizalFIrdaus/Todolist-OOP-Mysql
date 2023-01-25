<?php

namespace Repository;

use Entity\TodoList;


interface TodolistRepo
{
    public function save(TodoList $todoList): void;
    public function remove(int $number): bool;
    public function findAll(): array;
}

class TodolistRepoImp implements TodolistRepo
{

    private \PDO $connection;

    public function __construct(\PDO $connection)
    {
        $this->connection = $connection;
    }

    public function save(TodoList $todoList): void
    {
        $sql = "INSERT INTO todolist(todo) VALUES(?);";
        $st = $this->connection->prepare($sql);
        $st->execute([$todoList->getTodo()]);
    }
    public function remove(int $number): bool
    {
        $sql = "SELECT id FROM todolist WHERE id= ?;";
        $st = $this->connection->prepare($sql);
        $st->execute([$number]);

        if ($st->fetch()) {
            $sql = "DELETE FROM todolist WHERE id = ?;";
            $st = $this->connection->prepare($sql);
            $st->execute([$number]);
            return true;
        } else {
            // Tidak ada todolist dengan id yang di input
            return false;
        }
    }
    public function findAll(): array
    {
        $result = [];
        $sql = "SELECT * FROM todolist;";
        $st = $this->connection->prepare($sql);
        $st->execute();

        foreach ($st as $row) {
            $todoList = new TodoList();
            $todoList->setId($row["id"]);
            $todoList->setTodo($row["todo"]);
            $result[] = $todoList;
        }
        return $result;
    }
}
