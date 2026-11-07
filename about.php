<?php
// Start the session so this page can use the saved login details.
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About | Tasty Recipes</title>
   
    <link rel="stylesheet" href="shared.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="about.css">
    <script src="script.js" defer></script>
</head>

<body>

    <!-- Import Header -->
    <?php
    // Show the navigation shared by the website pages.
    include "header.php";
    ?>

    <main class="container">

        <!-- About Section -->
        <section class="about-hero">

            <div class="about-text">

                <p class="small-title">ABOUT US</p>

                <h1>
                    Our Passion for<br>
                    <span>Good Food</span>
                </h1>

                <p>
                    Tasty Recipes is a simple platform
                    to discover, share and enjoy
                    delicious recipes.
                </p>

                <p>
                    Our goal is to make home cooking
                    easy and enjoyable for everyone.
                </p>

                <a href="register.php" class="btn">
                    Join Our Community
                </a>

            </div>

            <div class="about-image">
                <img
                    src="https://images.unsplash.com/photo-1556911220-bff31c812dba?auto=format&fit=crop&w=1000&q=85"
                    alt="Preparing food in the kitchen">
            </div>

        </section>

        <!-- Website Features -->
        <section class="section">

            <div class="features-grid">

                <div class="feature">
                    <div class="feature-icon">👨‍🍳</div>
                    <h3>Easy Recipes</h3>
                    <p>
                        Simple and easy-to-follow recipes
                        for everyone.
                    </p>
                </div>

                <div class="feature">
                    <div class="feature-icon">👥</div>
                    <h3>Growing Community</h3>
                    <p>
                        Discover cooking ideas and
                        share your favorite meals.
                    </p>
                </div>

                <div class="feature">
                    <div class="feature-icon">♡</div>
                    <h3>Healthy Eating</h3>
                    <p>
                        Explore nutritious and
                        balanced meals.
                    </p>
                </div>

            </div>

        </section>

    </main>

    <!-- Import Footer -->
    <?php
    // Show the footer shared by the website pages.
    include "footer.php";
    ?>

</body>

</html>