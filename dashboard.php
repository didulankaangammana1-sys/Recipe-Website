<?php
// Start the session so this page can use the saved login details.
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Tasty Recipes</title>
    <link rel="stylesheet" href="shared.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="dashboard.css">
    <script src="script.js" defer></script>
</head>

<body>
    <!-- Import Header -->
    <?php
    // Show the navigation shared by the website pages.
    include "header.php";
    ?>

    <div class="dashboard-layout">

        <!-- Main Dashboard -->
        <main class="dashboard-content">

            <!-- Welcome Banner -->
            <section class="welcome-banner">

                <div>
                    <h1>Welcome Back, Food Lover!</h1>
                    <p>
                        Let's cook something amazing today!
                    </p>
                </div>

                <div class="welcome-icon">🍳</div>

            </section>

            <!-- Statistics -->
            <section class="stats-grid">

                <div class="stat-card">
                    <div class="stat-icon">🍽️</div>

                    <div>
                        <h2 id="totalRecipes">0</h2>
                        <p>Total Recipes</p>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-icon">❤️</div>

                    <div>
                        <h2 id="totalFavorites">0</h2>
                        <p>My Favorites</p>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-icon">📖</div>

                    <div>
                        <h2 id="totalCategories">0</h2>
                        <p>Categories</p>
                    </div>
                </div>
            </section>

        </main>

    </div>
    <!-- Import Footer -->
    <?php
    // Show the footer shared by the website pages.
    include "footer.php";
    ?>




</body>

</html>