<?php

namespace Config;

class Database
{
    static function getCon(): \PDO
    {
        $host = "localhost";
        $port = 3306;
        $dbname = "todolistOOP";
        $username = "root";
        $password = "";

        return new \PDO("mysql:host=$host:$port;dbname=$dbname", $username, $password);
    }
}
