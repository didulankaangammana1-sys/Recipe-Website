
<?php
session_start();

/* Recipe Data */
$recipes = [
    [
        "name" => "Tomato Basil Pasta",
        "category" => "Lunch",
        "description" => "Delicious pasta with tomato sauce and fresh basil.",
        "time" => 25,
        "difficulty" => "Easy",
        "image" => "https://images.pexels.com/photos/1279330/pexels-photo-1279330.jpeg",
        "ingredients" => ["Pasta", "Tomatoes", "Garlic", "Basil", "Olive oil"]
    ],
    [
        "name" => "Mango Yogurt Bowl",
        "category" => "Breakfast",
        "description" => "Healthy yogurt bowl with fresh fruits and oats.",
        "time" => 10,
        "difficulty" => "Easy",
        "image" => "https://images.pexels.com/photos/1092730/pexels-photo-1092730.jpeg",
        "ingredients" => ["Mango", "Yogurt", "Oats", "Honey"]
    ],
    [
        "name" => "Garden Vegetable Soup",
        "category" => "Dinner",
        "description" => "Healthy vegetable soup with fresh ingredients.",
        "time" => 35,
        "difficulty" => "Easy",
        "image" => "https://images.pexels.com/photos/539451/pexels-photo-539451.jpeg",
        "ingredients" => ["Carrot", "Potato", "Vegetables", "Vegetable stock"]
    ],
    [
        "name" => "Banana Oat Pancakes",
        "category" => "Breakfast",
        "description" => "Soft and tasty pancakes made with bananas.",
        "time" => 20,
        "difficulty" => "Easy",
        "image" => "https://images.pexels.com/photos/376464/pexels-photo-376464.jpeg",
        "ingredients" => ["Banana", "Egg", "Oats", "Cinnamon"]
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Recipes | Tasty Recipes</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="index.css?v=5">
    <link rel="stylesheet" href="recipes.css?v=1">
</head>

<body>

    <!-- Header -->
    <?php include "header.php"; ?>

    <main class="container section">

        <!-- Page Heading -->
        <div class="page-heading">
            <h1>Explore Our <span>Recipes</span></h1>
            <p>Find something delicious to cook today!</p>
        </div>

        <!-- Search Box -->
        <div class="search-box">
            <input
                type="search"
                id="searchInput"
                placeholder="Search recipes...">
        </div>

        <div class="recipes-layout">

            <!-- Category Sidebar -->
            <aside class="category-sidebar">
                <h3>Categories</h3>

                <button class="category-btn active" data-category="All">
                    All Recipes
                </button>

                <button class="category-btn" data-category="Breakfast">
                    Breakfast
                </button>

                <button class="category-btn" data-category="Lunch">
                    Lunch
                </button>

                <button class="category-btn" data-category="Dinner">
                    Dinner
                </button>

                <button class="category-btn" data-category="Desserts">
                    Desserts
                </button>
            </aside>

            <!-- Recipes -->
            <div class="recipes-content">

                <h2 id="categoryTitle">All Recipes</h2>

                <div class="recipe-grid" id="allRecipes">

                    <?php foreach ($recipes as $recipe): ?>

                        <div class="recipe-card"
                             data-category="<?= htmlspecialchars($recipe['category']) ?>"
                             data-name="<?= htmlspecialchars($recipe['name']) ?>">

                            <!-- Recipe Image -->
                            <div class="recipe-photo">
                                <img
                                    src="<?= htmlspecialchars($recipe['image']) ?>"
                                    alt="<?= htmlspecialchars($recipe['name']) ?>"
                                    loading="lazy">
                            </div>

                            <!-- Recipe Details -->
                            <div class="recipe-info">

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

                                <!-- Ingredients -->
                                <details class="ingredients">
                                    <summary>View Ingredients</summary>

                                    <ul>
                                        <?php foreach ($recipe['ingredients'] as $ingredient): ?>
                                            <li>
                                                <?= htmlspecialchars($ingredient) ?>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </details>

                            </div>

                        </div>

                    <?php endforeach; ?>

                </div>

                <p id="noResults" class="empty-message" hidden>
                    No recipes found.
                </p>

            </div>
        </div>
    </main>

    <!-- Footer -->
    <?php include "footer.php"; ?>

    <script>
        const searchInput = document.getElementById("searchInput");
        const categoryButtons = document.querySelectorAll(".category-btn");
        const recipeCards = document.querySelectorAll(".recipe-card");
        const categoryTitle = document.getElementById("categoryTitle");
        const noResults = document.getElementById("noResults");

        let selectedCategory = "All";

        function filterRecipes() {

            let searchText = searchInput.value.toLowerCase().trim();
            let visibleCount = 0;

            recipeCards.forEach(function(card) {

                let name = card.dataset.name.toLowerCase();
                let category = card.dataset.category;

                let matchesSearch = name.includes(searchText);

                let matchesCategory =
                    selectedCategory === "All" ||
                    category === selectedCategory;

                if (matchesSearch && matchesCategory) {
                    card.hidden = false;
                    visibleCount++;
                } else {
                    card.hidden = true;
                }
            });

            noResults.hidden = visibleCount > 0;
        }

        /* Search Recipes */
        searchInput.addEventListener("input", filterRecipes);

        /* Filter by Category */
        categoryButtons.forEach(function(button) {

            button.addEventListener("click", function() {

                selectedCategory = button.dataset.category;

                categoryButtons.forEach(function(btn) {
                    btn.classList.remove("active");
                });

                button.classList.add("active");

                categoryTitle.textContent =
                    selectedCategory === "All"
                        ? "All Recipes"
                        : selectedCategory + " Recipes";

                filterRecipes();
            });
        });
    </script>

</body>
</html>
