
<?php

session_start();

require "db.php";

// Only accept the login form's POST request.
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: login.php");
    exit;
}

// Use empty text when a form field was not submitted.
$email = "";
if (isset($_POST["email"])) {
    $email = $_POST["email"];
}

// Remove spaces around the email and use lowercase letters.
$email = trim($email);
$email = strtolower($email);

$password = "";
if (isset($_POST["password"])) {
    $password = $_POST["password"];
}

// Check empty fields
if ($email === "") {
    die("Please enter email and password.");
}

if ($password === "") {
    die("Please enter email and password.");
}

// Find user in database
$sql = "SELECT id, full_name, password_hash
        FROM users
        WHERE email = ?
        LIMIT 1";

$statement = $pdo->prepare($sql);

// Pass the email separately from the SQL query.
$parameters = [$email];
$statement->execute($parameters);

$user = $statement->fetch(PDO::FETCH_ASSOC);

// Check that the user exists before checking the password.
if (!$user) {
    die("Incorrect email or password.");
}

$isPasswordCorrect = password_verify($password, $user["password_hash"]);
if (!$isPasswordCorrect) {
    die("Incorrect email or password.");
}

// Login successful
session_regenerate_id(true);

// Store user in session
$_SESSION["user_id"] = $user["id"];
$_SESSION["user_name"] = $user["full_name"];

// Redirect to Homepage
header("Location: index.php");
exit;

?>
