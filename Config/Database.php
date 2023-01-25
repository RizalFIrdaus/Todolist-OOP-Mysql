<?php

class Connection
{
    static function db(): PDO
    {
        $host = "localhost";
        $port = 3306;
        $dbname = "todolistOOP";
        $username = "root";
        $password = "";

        return new PDO("mysql:host=$host:$port;dbname=$dbname", $username, $password);
    }
}
