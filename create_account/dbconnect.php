<?php
try {
    $db = new PDO('mysql:dbname=store;host=127.0.0.1;charset=utf8mb4', 'root', 'P@ssw0rd!');
}   catch (PDOException $e) {
    echo "データベース接続エラー　：".$e->getMessage();
}
?>