<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | Tasty Recipes</title>

    <link rel="stylesheet" href="login.css?v=3">
</head>

<body>

    <div class="login-card">

        <!-- Website Logo -->
        <div class="logo">
            <div class="logo-icon">♨</div>
            <h1>Tasty <span>Recipes</span></h1>
            <p>Cook • Share • Enjoy</p>
        </div>

        <!-- Welcome Text -->
        <div class="heading">
            <h2>Welcome Back</h2>
            <p>Login to explore delicious recipes</p>
        </div>

        <!-- Login Form -->
        <form id="loginForm" action="login_process.php" method="POST">

            <div class="input-box">

                <input
                    type="email"
                    name="email"
                    placeholder="Email address"
                    required>
            </div>

            <div class="input-box">
                <input
                    type="password"
                    id="loginPassword"
                    name="password"
                    placeholder="Password"
                    required>

            </div>

            <!-- Login Button -->
            <button type="submit" class="main-btn">
                Login
            </button>

        </form>

        <!-- Divider -->
        <div class="divider">
            <span>OR</span>   <!-- span used for select and style a small part of text without create new line-->
        </div>

        <!-- Register Link -->
        <p class="bottom-text">
            Don't have an account?
            <a href="register.php">Sign up</a>
        </p>


    </div>


</body>

</html>