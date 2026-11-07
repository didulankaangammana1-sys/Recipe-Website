
<?php
// Start the session so the header can show the login details.
session_start();

// Each recipe uses named fields so its details are easy to read.
$recipes = array(
    array(
        "name" => "Tomato Basil Pasta",
        "category" => "Lunch",
        "minutes" => 25,
        "photo_id" => "1279330",
        "ingredients" => "Pasta, Tomato, Garlic, Basil"
    ),

    array(
        "name" => "Mango Yogurt Bowl",
        "category" => "Breakfast",
        "minutes" => 10,
        "photo_id" => "1092730",
        "ingredients" => "Mango, Yogurt, Oats, Honey"
    ),

    array(
        "name" => "Vegetable Soup",
        "category" => "Dinner",
        "minutes" => 35,
        "photo_id" => "539451",
        "ingredients" => "Carrot, Potato, Vegetables"
    ),

    array(
        "name" => "Banana Pancakes",
        "category" => "Breakfast",
        "minutes" => 20,
        "photo_id" => "376464",
        "ingredients" => "Banana, Egg, Oats, Cinnamon"
    )
);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipes | Tasty Recipes</title>
    <link rel="stylesheet" href="shared.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="recipes.css">
</head>

<body>

<?php
// Show the shared navigation.
include "header.php";
?>

<main class="container section">

    <div class="page-heading">
        <h1>Explore Our <span>Recipes</span></h1>
        <p>Find your favourite recipes!</p>
    </div>

    <div class="recipe-grid">

        <?php
        // Repeat this card once for each recipe in the list.
        foreach ($recipes as $recipe) {
        ?>

        <div class="recipe-card">

            <div class="recipe-photo">
                <img
                    src="https://images.pexels.com/photos/<?php echo $recipe["photo_id"]; ?>/pexels-photo-<?php echo $recipe["photo_id"]; ?>.jpeg"
                    alt="<?php echo htmlspecialchars($recipe["name"]); ?>">
            </div>

            <div class="recipe-info">

                <h3><?php echo htmlspecialchars($recipe["name"]); ?></h3>

                <p><?php echo $recipe["category"]; ?> | <?php echo $recipe["minutes"]; ?> mins | Easy</p>

                <details>
                    <summary>View Ingredients</summary>
                    <p><?php echo htmlspecialchars($recipe["ingredients"]); ?></p>
                </details>

            </div>

        </div>

        <?php } ?>

    </div>

</main>

<?php
// Show the shared footer.
include "footer.php";
?>

</body>
</html>
