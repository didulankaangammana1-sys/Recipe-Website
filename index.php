<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Tasty Recipes</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>

<body>

    <!-- Import Header -->
    <?php include "header.php"; ?>

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

            <a href="recipes.html" class="btn">
                Explore Recipes
            </a>

        </div>

        <div class="hero-image">
            <img
                src="https://images.unsplash.com/photo-1551183053-bf91a1d81141?auto=format&fit=crop&w=1000&q=85"
                alt="Delicious pasta">
        </div>

    </section>

    <!-- Popular Recipes -->
    <section class="container section">

        <div class="section-heading">
            <h2>Popular Recipes</h2>
            <a href="recipes.php">View All →</a>
        </div>

        <!-- Recipe cards added using JavaScript -->
        <div class="recipe-grid" id="popularRecipes"></div>

    </section>

    <!-- Import Footer -->
    <?php include "footer.php"; ?>


</body>

</html>