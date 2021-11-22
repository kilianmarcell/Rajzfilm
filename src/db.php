<?php

$db = new PDO("mysql:dbname={$config['DATABASE']};host={$config['HOST']};charset=utf8mb4",
$config['USER'],
$config['PASSWORD']);