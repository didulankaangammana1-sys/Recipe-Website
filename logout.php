
<?php
// Open the current session so it can be cleared.
session_start();

// Remove the stored user details and end the session.
session_unset();
session_destroy();

// Return to the login page and stop running this file.
header("Location: login.php");
exit;
?>
