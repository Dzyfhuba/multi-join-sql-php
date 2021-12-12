<?php
require_once('connection.php');

try {
    $sql = "";
    $statement = $connection->prepare($sql);
    $statement->execute();
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$data = $statement->fetchAll();
