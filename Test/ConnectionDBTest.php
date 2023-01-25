<?php

require_once __DIR__ . "/../Config/Database.php";

use Config\Database;

$con = Database::getCon();
echo "Berhasil Terhubung" . PHP_EOL;
