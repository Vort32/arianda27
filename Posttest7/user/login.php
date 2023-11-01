<?php
session_start();
require '../crud/koneksi.php'; 

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result  = mysqli_query($conn, "SELECT * from user WHERE username = '$username' ");
    if(mysqli_num_rows($result) > 0){
        $row  = mysqli_fetch_assoc($result);
        
        if(password_verify($password, $row['password'])){
            $_SESSION['login'] = true;
            header("location: ../index.php");
            exit;   
        }
    }
    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="user.css">
    <title>Login</title>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form method="POST" action="login.php">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" placeholder="Enter your username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <button type="submit" name="login">Login</button>
            <a href="../index.php" class="home-link">Home</a>
        </form>
        <?php
        if (isset($error)) {
            echo '<p class="error-message">Login failed. Please check your username and password.</p>';
        }
        ?>
        <p class="register-link">Belum Punya Akun? <a href="register.php">Register</a></p>
    </div>    
</body>
</html>
