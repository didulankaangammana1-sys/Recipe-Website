
<?php

// Database information
$host = "localhost";
$database = "tasty_recipes";
$username = "root";
$password = "";

try {

    // Connect PHP to MySQL
    $pdo = new PDO(
        "mysql:host=$host;dbname=$database;charset=utf8mb4",
        $username,
        $password
    );

    // Handle database errors
    $pdo->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

    $pdo->setAttribute(
        PDO::ATTR_EMULATE_PREPARES,
        false
    );

} catch (PDOException $e) {

    die("Database connection failed!");

}

?>
