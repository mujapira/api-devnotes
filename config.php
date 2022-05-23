<?php

$pdo = new \PDO($_ENV['MYSQL_URL']);

$array = [
    'error' => '',
    'result' => []
];
