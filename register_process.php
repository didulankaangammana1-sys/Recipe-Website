
<?php

session_start();

// Connect database
require "db.php";

// Only accept the registration form's POST request.
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: register.php");
    exit;
}

// Use empty text when a form field was not submitted.
$fullName = "";
if (isset($_POST["full_name"])) {
    $fullName = $_POST["full_name"];
}
$fullName = trim($fullName);

$email = "";
if (isset($_POST["email"])) {
    $email = $_POST["email"];
}
$email = trim($email);
$email = strtolower($email);

$password = "";
if (isset($_POST["password"])) {
    $password = $_POST["password"];
}

$confirmPassword = "";
if (isset($_POST["confirm_password"])) {
    $confirmPassword = $_POST["confirm_password"];
}

// Check required fields before checking their lengths and formats.
if ($fullName === "") {
    die("Please fill all fields.");
}

if ($email === "") {
    die("Please fill all fields.");
}

if ($password === "") {
    die("Please fill all fields.");
}

$nameLength = strlen($fullName);
if ($nameLength > 100) {
    die("Invalid name or email address.");
}

$emailLength = strlen($email);
if ($emailLength > 190) {
    die("Invalid name or email address.");
}

$validEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$validEmail) {
    die("Invalid name or email address.");
}

$passwordLength = strlen($password);
if ($passwordLength < 8) {
    die("Password must contain at least 8 characters.");
}

if ($password !== $confirmPassword) {
    die("Passwords do not match.");
}

// Store a password hash instead of the original password.
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Save user
try {

    $sql = "INSERT INTO users
            (full_name, email, password_hash)
            VALUES (?, ?, ?)";

    $statement = $pdo->prepare($sql);

    // Pass the form values separately from the SQL query.
    $parameters = [
        $fullName,
        $email,
        $hashedPassword
    ];
    $statement->execute($parameters);

    // User ID
    $userId = $pdo->lastInsertId();

    // Start login session
    session_regenerate_id(true);

    $_SESSION["user_id"] = $userId;
    $_SESSION["user_name"] = $fullName;

    // Redirect to Homepage
    header("Location: index.php");
    exit;

} catch (PDOException $exception) {

    if ($exception->getCode() === "23000") {
        die("This email is already registered.");
    }

    die("Registration failed. Please try again.");

}

?>
