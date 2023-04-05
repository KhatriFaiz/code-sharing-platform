<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body id="signup-page">
    <div id="signup-header">
        <h2>Code Sharing Platform</h2>
    </div>
    <main>
        <div class="auth-form">
            <h1>Sign Up</h1>
            <form>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" />
                <label for="email">Email</label>
                <input type="email" id="email" name="email" />
                <label for="username">Username</label>
                <input type="text" name="username" id="username" />
                <label for="password">Password</label>
                <input type="password" name="password" id="password" />
                <button type="submit">Sign Up</button>
            </form>
            <p>Already have an account? <a href="login.php">Login</a></p>
        </div>
    </main>
    <script src="./js/app.js"></script>
</body>

</html>