<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<div class="navbar">
    <header>
        <nav>
            <h1>The Men in black</h1>
                <a href="home.php" <?php if ($file === 'home.php') echo 'active' ?>>Home</a>
                <a href="login.php" <?php if ($file === 'login.php') echo 'active' ?>>Login</a>
                <a href="about-us.php"<?php if ($file === 'about-us.php') echo 'active' ?>>About us</a>
            </ul>
        </nav>
    </header>
</div>
</html>