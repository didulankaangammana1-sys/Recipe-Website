 <header class="navbar">

        <a href="index.php" class="logo">
            👨‍🍳 Tasty <span>Recipes</span>
        </a>

        <nav class="nav-links">
            <a href="index.php" class="active">Home</a>
            <a href="recipes.php">Recipes</a>
            <a href="about.php">About</a>
            <a href="dashboard.php">Dashboard</a>
        </nav>

        
<div class="nav-buttons">

    <?php if (isset($_SESSION["user_id"])): ?>

        <span>
            Hello,
            <?= htmlspecialchars($_SESSION["user_name"]) ?>
        </span>

        <form action="logout.php" method="POST">
            <button type="submit" class="btn btn-small">
                Logout
            </button>
        </form>

    <?php else: ?>

        <a href="login.php" class="login-link">
            Login
        </a>

        <a href="register.php" class="btn btn-small">
            Sign Up
        </a>

    <?php endif; ?>

</div>


    </header>