<?php
    $dsn = 'mysql:host=localhost;dbname=my_guitar_shop2';
    $username = 'Jackie';
    $password = 'Jackie123';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>

