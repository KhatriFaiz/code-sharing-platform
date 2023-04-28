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
    <link rel="stylesheet" href="../css/style.css">
</head>

<body id="profile">
    <header>
        <div class="logo">
            <span>Code sharing platform</span>
        </div>
        <nav>
            <a href="../editor/create-new.php" class="btn" id="create-new-snippet-btn">Create New</a>
            <div class="user-details">
                <div class="user-avatar">
                    <img src="../images/user_avatar.jpg" alt="User avatar">
                </div>
            </div>
        </nav>
    </header>
    <div class="profile-navigation">
        <a href="<?php echo $_SERVER["REQUEST_URI"] ?>">Profile</a>
        <a href="#">My Snippets</a>
        <a href="#">Edit Profile</a>
        <a href="../logout.php">Log Out</a>
    </div>
    <div class="profile-details">
        <?php

        if (isset($_POST['edit-profile-submit'])) {
            $name = $_POST['name'];
            $username = $_POST['username'];
            $email = $_POST['email'];

            $sql1 = "UPDATE `users` SET `username`='$username',`email`='$email',`name`='$name' WHERE username={$SESSION['username']};";
            $result1 = mysqli_query($conn, $result1) or die("Query Failed.");

            echo $result1;

        }

        ?>
        <form method="post">
            <?php
            include "../config.php";

            $sql = "SELECT * FROM `users` WHERE `username`='{$_SESSION['username']}';";
            $result = mysqli_query($conn, $sql) or die("Query Failed.");

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {

                    ?>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" value="<?php echo $row['name'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" value="<?php echo $row['username'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" value="<?php echo $row['email'] ?>">
                    </div>
                    <?php

                }
            }
            ?>
            <button class="edit-profile-submit" name="edit-form-submit" id="edit-form-submit">Submit</button>
        </form>
        <div class="user-avatar-container">
            <div class="user-avatar">
                <img src="../images/user_avatar.jpg" alt="User Avatar">
            </div>
        </div>
    </div>

    <script src="../js/app.js"></script>
</body>

</html>