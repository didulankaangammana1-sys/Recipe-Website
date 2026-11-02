
<?php

session_start();

require "db.php";

// Check form submission
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: login.php");
    exit;
}

// Get login details
$email = strtolower(trim($_POST["email"] ?? ""));
$password = $_POST["password"] ?? "";

// Check empty fields
if ($email === "" || $password === "") {
    die("Please enter email and password.");
}

// Find user in database
$sql = "SELECT id, full_name, password_hash
        FROM users
        WHERE email = ?
        LIMIT 1";

$stmt = $pdo->prepare($sql);

$stmt->execute([$email]);

$user = $stmt->fetch(PDO::FETCH_ASSOC);

// Check email and password
if (
    !$user ||
    !password_verify(
        $password,
        $user["password_hash"]
    )
) {
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
