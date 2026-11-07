
<?php

// Database information
$host = "localhost";
$database = "tasty_recipes";
$username = "root";
$password = "";

try {

    // Build the connection details using the values above.
    $connectionString = "mysql:host=" . $host . ";dbname=" . $database . ";charset=utf8mb4";

    // Create the database connection used by the login and registration files.
    $pdo = new PDO($connectionString, $username, $password);

    // Report database errors as exceptions that try/catch can handle.
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Let MySQL handle prepared queries and their separate input values.
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

} catch (PDOException $error) {

    // Stop if PHP could not connect to the database.
    die("Database connection failed!");

}

?>
