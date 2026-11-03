
<header class="navbar">

    <!-- Logo -->
    <a href="index.php" class="logo">
        Tasty <span>Recipes</span>
    </a>

    <!-- Menu Button -->
    <button class="menu-btn" id="menuBtn"
            type="button" aria-label="Open menu"
            aria-expanded="false" aria-controls="menuContent">
        ☰
    </button>

    <!-- Navigation -->
    <div class="menu-content" id="menuContent">

        <nav class="nav-links">
            <a href="index.php">Home</a>
            <a href="recipes.php">Recipes</a>
            <a href="about.php">About</a>
            <a href="dashboard.php">Dashboard</a>
        </nav>

        <div class="nav-buttons">

            <?php if (isset($_SESSION["user_id"])): ?>

                <span>
                    Hello,
                    <?= htmlspecialchars($_SESSION["user_name"] ?? "User") ?>
                </span>

                <form action="logout.php" method="POST">
                    <button type="submit" class="btn btn-small">
                        Logout
                    </button>
                </form>

            <?php else: ?>

                <a href="login.php">Login</a>
                <a href="register.php" class="btn btn-small">
                    Sign Up
                </a>

            <?php endif; ?>

        </div>

    </div>

</header>

<script>
    const button = document.getElementById("menuBtn");
    const menu = document.getElementById("menuContent");

    button.addEventListener("click", function() {
        let open = menu.classList.toggle("show");

        button.textContent = open ? "✕" : "☰";
        button.setAttribute("aria-expanded", open);
        button.setAttribute(
            "aria-label",
            open ? "Close menu" : "Open menu"
        );
    });
</script>
