<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Tasty Recipes</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>

<body>
    <!-- Import Header -->
    <?php include "header.php"; ?>

    <div class="dashboard-layout">

        <!-- Sidebar -->
        <aside class="dashboard-sidebar">

            <h3>My Account</h3>

            <button
                class="side-link active"
                data-dashboard-view="recent">
                ▦ Dashboard
            </button>

            <a href="recipes.html" class="side-link">
                🍲 All Recipes
            </a>

            <button
                class="side-link"
                data-dashboard-view="favorites">
                ♡ My Favorites
            </button>

            <a href="about.html" class="side-link">
                ⓘ About Us
            </a>

        </aside>

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

            <!-- Dashboard Recipes -->
            <section class="section">

                <div class="section-heading">
                    <h2 id="dashboardHeading">
                        Recent Recipes
                    </h2>

                    <a href="recipes.php">
                        View All →
                    </a>
                </div>

                <div
                    class="recipe-grid"
                    id="dashboardRecipes">
                </div>

            </section>

        </main>

    </div>
    <!-- Import Footer -->
    <?php include "footer.php"; ?>




</body>

</html>