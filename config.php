<?php
try {
    $pdo = new PDO('mysql:dbname=first_iteh; host=localhost', 'root', 'root');
} catch (PDOException $e) {
    die($e->getMessage());
}