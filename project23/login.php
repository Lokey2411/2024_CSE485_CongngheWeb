<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project23</title>
</head>
<body>
    <div class="container">
        <form action="process_login.php" method="post" enctype="multipart/form-data">
            <h2>Login</h2>
            <label for="username">Username</label>
            <input type="text" name="username" placeholder="Enter Username" required>
            <label for="passwprd">Password</label>
            <input type="password" name="password" placeholder="Enter Password" required>

            <?php
            session_start();
            if (isset($_SESSION['error'])) {
                echo "<span class='text-danger fw-bold mt-2'>".$_SESSION['error']."</span>";
                unset($_SESSION['error']);
            }
            ?>

            <button type="submit" class="btn">Login</button>
        </form>
    </div>
</body>
</html>