<?php
// A PHP array is a simple way to keep sample data separate from page layout.
$recipes = [
    [
        'name' => 'Tomato Basil Pasta',
        'category' => 'Lunch',
        'description' => 'A comforting pasta with a quick tomato sauce and fresh herbs.',
        'time' => '25',
        'difficulty' => 'Easy',
        'emoji' => '🍝',
        'imageDescription' => 'A bowl of tomato pasta',
        'ingredients' => ['200 g pasta', '2 tomatoes', '1 garlic clove', 'A handful of basil', '1 tablespoon olive oil'],
    ],
    [
        'name' => 'Mango Yogurt Bowl',
        'category' => 'Breakfast',
        'description' => 'Creamy yogurt topped with sweet mango and crunchy oats.',
        'time' => '10',
        'difficulty' => 'Easy',
        'emoji' => '🥭',
        'imageDescription' => 'A bowl of mango, yogurt, and oats',
        'ingredients' => ['1 ripe mango', '1 cup plain yogurt', '3 tablespoons rolled oats', '1 teaspoon honey'],
    ],
    [
        'name' => 'Garden Vegetable Soup',
        'category' => 'Dinner',
        'description' => 'A warm bowl of vegetables simmered in a simple broth.',
        'time' => '35',
        'difficulty' => 'Easy',
        'emoji' => '🥣',
        'imageDescription' => 'A bowl of vegetable soup',
        'ingredients' => ['1 carrot', '1 potato', '1 cup chopped vegetables', '3 cups vegetable stock', 'Salt and pepper'],
    ],
    [
        'name' => 'Banana Oat Pancakes',
        'category' => 'Breakfast',
        'description' => 'Soft pancakes made with ripe banana and a few pantry basics.',
        'time' => '20',
        'difficulty' => 'Easy',
        'emoji' => '🥞',
        'imageDescription' => 'A stack of banana pancakes',
        'ingredients' => ['1 ripe banana', '1 egg', '1/2 cup oats', 'A pinch of cinnamon'],
    ],
];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipes | Tasty Recipes</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>

<body>

    <!-- Import Header -->
    <?php include "header.php"; ?>

    <main class="container section">

        <div class="page-heading">
            <h1>Explore Our <span>Recipes</span></h1>
            <p>Find something delicious to cook today!</p>
        </div>

        <!-- Search -->
        <div class="search-box">
            <input
                type="search"
                id="searchInput"
                placeholder="Search recipes..."
        </div>

        <div class="recipes-layout">

            <!-- Category Sidebar -->
            <aside class="category-sidebar">

                <h3>Categories</h3>

                <button class="category-btn active"
                    data-category="All">
                    All Recipes
                </button>

                <button class="category-btn"
                    data-category="Breakfast">
                    Breakfast
                </button>

                <button class="category-btn"
                    data-category="Lunch">
                    Lunch
                </button>

                <button class="category-btn"
                    data-category="Dinner">
                    Dinner
                </button>

                <button class="category-btn"
                    data-category="Desserts">
                    Desserts
                </button>

            </aside>

            <!-- Recipe Cards -->
            <div class="recipes-content">

                <h2>All Recipes</h2>


                <div class="recipe-grid" id="allRecipes">

                    <?php foreach ($recipes as $recipe): ?>

                        <div class="recipe-card">

                            <div class="recipe-info">

                                <h2><?= $recipe['emoji'] ?></h2>

                                <h3>
                                    <?= htmlspecialchars($recipe['name']) ?>
                                </h3>

                                <p>
                                    <?= htmlspecialchars($recipe['description']) ?>
                                </p>

                                <p>
                                    Category:
                                    <?= htmlspecialchars($recipe['category']) ?>
                                </p>

                                <p>
                                    Time: <?= $recipe['time'] ?> mins
                                </p>

                                <p>
                                    Difficulty:
                                    <?= htmlspecialchars($recipe['difficulty']) ?>
                                </p>

                            </div>

                        </div>

                    <?php endforeach; ?>

                </div>


            </div>

        </div>

    </main>
    <!-- Import Footer -->
    <?php include "footer.php"; ?>



</body>

</html>