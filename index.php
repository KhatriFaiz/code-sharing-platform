<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: http://localhost/csp/login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code Sharing Platform</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <header>
        <div class="logo">
            <span>Code sharing platform</span>
        </div>
        <nav>
            <p>
                <?php echo $_SESSION['username']; ?>
            <div class="header-user-menu">
                <a href="logout.php">Logout</a>
            </div>
            </p>
            <a href="./editor.php" class="btn" id="create-new-snippet-btn">Create New</a>
        </nav>
    </header>
    <section id="snippets-grid">
        <div class="container">
            <div class="snippet-card">
                <a href="#">
                    <h3>Snippet Title</h3>
                    <a href="#" class="snippet-author-name">Akshay Kumar</a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo cupiditate soluta in est enim
                        deserunt deleniti ullam natus repellat expedita.</p>
                </a>
            </div>
            <div class="snippet-card">
                <a href="#">
                    <h3>Snippet Title</h3>
                    <a href="#" class="snippet-author-name">Akshay Kumar</a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo cupiditate soluta in est enim
                        deserunt deleniti ullam natus repellat expedita.</p>
                </a>
            </div>
            <div class="snippet-card">
                <a href="#">
                    <h3>Snippet Title</h3>
                    <a href="#" class="snippet-author-name">Akshay Kumar</a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo cupiditate soluta in est enim
                        deserunt deleniti ullam natus repellat expedita.</p>
                </a>
            </div>
            <div class="snippet-card">
                <a href="#">
                    <h3>Snippet Title</h3>
                </a>
                <a href="#" class="snippet-author-name">Akshay Kumar</a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo cupiditate soluta in est enim
                    deserunt deleniti ullam natus repellat expedita.</p>
            </div>
            <div class="snippet-card">
                <a href="#">
                    <h3>Snippet Title</h3>
                    <a href="#" class="snippet-author-name">Akshay Kumar</a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo cupiditate soluta in est enim
                        deserunt deleniti ullam natus repellat expedita.</p>
                </a>
            </div>
            <div class="snippet-card">
                <a href="#">
                    <h3>Snippet Title</h3>
                    <a href="#" class="snippet-author-name">Akshay Kumar</a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo cupiditate soluta in est enim
                        deserunt deleniti ullam natus repellat expedita.</p>
                </a>
            </div>
        </div>
    </section>
    <script src="./js/app.js"></script>
</body>

</html>