<?php
try {
    $pdo = new PDO(
    'mysql:host=localhost;dbname=films;charset=utf8mb4',
    'root',
    'root',
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]
);
} catch(PDOException $e) {
    echo $e->getMessage();
}


$stmt = $pdo->query("SELECT Title FROM films");
$users = $stmt->fetchAll();
echo '<pre>';
print_r($users);
echo '</pre>';


