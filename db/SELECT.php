<?php
require "connection.php";
require "functions.php";

// Инструкция SELECT используется для выбора данных из базы данных
$stmt = $pdo->query("SELECT Title FROM films");
$users = $stmt->fetchAll();
outPut($users);