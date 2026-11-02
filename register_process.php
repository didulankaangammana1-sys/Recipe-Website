
<?php

session_start();

// Connect database
require "db.php";

// Check form submission
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: register.php");
    exit;
}

// Get form details
$name = trim($_POST["full_name"] ?? "");
$email = strtolower(trim($_POST["email"] ?? ""));
$password = $_POST["password"] ?? "";
$confirm = $_POST["confirm_password"] ?? "";

// Validate inputs
if ($name === "" || $email === "" || $password === "") {
    die("Please fill all fields.");
}

if (
    strlen($name) > 100 ||
    strlen($email) > 190 ||
    !filter_var($email, FILTER_VALIDATE_EMAIL)
) {
    die("Invalid name or email address.");
}

if (strlen($password) < 8) {
    die("Password must contain at least 8 characters.");
}

if ($password !== $confirm) {
    die("Passwords do not match.");
}

// Hash password
$hashedPassword = password_hash(
    $password,
    PASSWORD_DEFAULT
);

// Save user
try {

    $sql = "INSERT INTO users
            (full_name, email, password_hash)
            VALUES (?, ?, ?)";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        $name,
        $email,
        $hashedPassword
    ]);

    // User ID
    $userId = $pdo->lastInsertId();

    // Start login session
    session_regenerate_id(true);

    $_SESSION["user_id"] = $userId;
    $_SESSION["user_name"] = $name;

    // Redirect to Homepage
    header("Location: index.php");
    exit;

} catch (PDOException $e) {

    if ($e->getCode() === "23000") {
        die("This email is already registered.");
    }

    die("Registration failed. Please try again.");

}

?>
