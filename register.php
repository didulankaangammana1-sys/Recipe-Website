
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Register | Tasty Recipes</title>

    <link rel="stylesheet" href="register.css">
</head>

<body>

    <div class="login-card register-card">

        <!-- Website Logo -->
        <div class="logo">
            <div class="logo-icon">♨</div>
            <h1>Tasty <span>Recipes</span></h1>
            <p>Cook • Share • Enjoy</p>
        </div>

        <!-- Heading -->
        <div class="heading">
            <h2>Create an Account</h2>
            <p>Join us to discover and share amazing recipes</p>
        </div>

        <!-- Registration Form -->
        <form id="registerForm" action="register_process.php" method="POST">

            <!-- Full Name -->
            <div class="input-box">
                <input
                    type="text"
                    id="fullName"
                    placeholder="Full name"
                    autocomplete="name"
                    name="full_name"
                    required
                >
            </div>

            <!-- Email -->
            <div class="input-box">
                <input
                    type="email"
                    id="email"
                    placeholder="Email address"
                    autocomplete="email"
                    name="email"
                    required
                >
            </div>

            <!-- Password -->
            <div class="input-box">
                <input
                    type="password"
                    name="password"
                    id="registerPassword"
                    placeholder="Password"
                    minlength="8"
                    required
                >
            </div>

            <!-- Confirm Password -->
            <div class="input-box">
                <input
                    type="password"
                    name="confirm_password"
                    id="confirmPassword"
                    placeholder="Confirm password"
                    minlength="8"
                    required
                >

            </div>

            <!-- Register Button -->
            <button type="submit" class="main-btn">
                Sign Up
            </button>

        </form>

        <!-- Login Link -->
        <p class="bottom-text">
            Already have an account?
            <a href="login.php">Login</a>
        </p>

    </div>
     
<script>


document.getElementById("registerForm")
    .addEventListener("submit", function(event) {

        let password =
            document.getElementById("registerPassword").value;

        let confirmPassword =
            document.getElementById("confirmPassword").value;

        if (password !== confirmPassword) {

            event.preventDefault();

            alert("Passwords do not match!");
        }

    });


</script>
</body>
</html>


</body>
</html>
