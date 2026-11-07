<?php
// Start the session so this page can use the saved login details.
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Tasty Recipes</title>
    
    <link rel="stylesheet" href="shared.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="index.css">
    <script src="script.js" defer></script>
</head>

<body>

    <!-- Import Header -->
    <?php
    // Show the navigation shared by the website pages.
    include "header.php";
    ?>

    <!-- Hero Section -->
    <section class="hero">

        <div class="hero-text">

            <h1>
                Discover<br>
                Delicious <span>Recipes</span>
            </h1>

            <p class="tagline">Cook • Share • Enjoy</p>

            <p>
                Find easy and tasty recipes from around
                the world. Make your cooking journey
                simple and fun!
            </p>

            <a href="recipes.php" class="btn">
                Explore Recipes
            </a>

        </div>

        <div class="hero-image">
            <img
                src="https://images.unsplash.com/photo-1551183053-bf91a1d81141?auto=format&fit=crop&w=1000&q=85"
                alt="Delicious pasta">
        </div>

    </section>

  
    <!-- Import Footer -->
    <?php
    // Show the footer shared by the website pages.
    include "footer.php";
    ?>


</body>

</html>