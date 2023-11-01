<?php
require '../crud/koneksi.php';

if(isset($_POST['register'])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["confirm-password"]; // Perbaiki nama variabel ini

    if($password == $cpassword){
        $password = password_hash($password, PASSWORD_DEFAULT);
        $result = mysqli_query($conn, "SELECT username from user WHERE username = '$username' ");
        if(mysqli_num_rows($result) > 0){ // Perbaiki ini untuk memeriksa apakah ada hasil
            echo "<script> alert('Username sudah ada !!!');
            document.location.href='register.php';
            </script>";
        }else{
            $sql = "INSERT INTO user (username, password) VALUES ('$username', '$password')"; // Perbaiki query
            $result_query = mysqli_query($conn, $sql);

            if($result_query){
                echo "<script> alert( 'Registrasi Berhasil!!');
                document.location.href='login.php';
                </script>";
            }else{
                echo "<script> alert( 'Registrasi gagal!!');
                document.location.href='register.php';
                </script>";
            }
        }
    }else{
        echo "<script> alert('Password tidak sama !!!');
        document.location.href='register.php';
        </script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="user.css">
    <title>Register</title>
</head>
<body>
    <div class="register-container">
        <h2>Register</h2>
        <form method="POST" action="">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" placeholder="Choose a username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Choose a password" required>
            </div>
            <div class="form-group">
                <label for="confirm-password">Confirm Password:</label>
                <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm your password" required>
            </div>
            <button type="submit" name="register">Register</button>
        </form>
        <?php
        if (isset($error_message)) {
            echo '<p class="error-message">' . $error_message . '</p>';
        }
        ?>
        <p class="login-link">Already have an account? <a href="login.php">Login</a></p>
    </div>
</body>
</html>
