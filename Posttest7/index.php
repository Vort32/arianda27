<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Muhammad Arianda Saputra</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>   

    <!-- header -->
    <div class="medsos">
        <div class="container">
            <ul>
                <div class="toggle">
                    <input type="checkbox" id="darkmode-toggle" onchange="toggleDarkMode()"/>
                    <label for="darkmode-toggle"></label>
                </div>
            </ul>
        </div>
    </div>
<header>
        <div class="container">
        <h1><a href="index.html">Arianda</a></h1>
        <ul>
            <li class="active"><a href="crud/index.php">INPUTAN</a></li>
            <li><a href="Char/Hover.html">GALLERY</a></li>
            <li><a href="Cv/index2.html">ABOUT</a></li>
            <li><a href="School/School.html">ARTICLE</a></li>
            <?php
            session_start();
            if (isset($_SESSION['login'])) {
                echo '<li><a href="user/logout.php">LOGOUT</a></li>';
            } else {
                echo '<li><a href="user/login.php">LOGIN</a></li>';
            }
            ?>
        </ul>
        </div>
</header>

    

    <!--banner-->
    <section class="banner">
        <h2>WELCOME BACK SENSEI</h2>
        <div class="box2">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </section>

    <!--footer-->
    <footer>
        <div class="container"></div>
        <small>Copyright &copy; 2022 - Arianda. All Rights Reserved.</small>
    </footer>
    
    <!--wavy-->
    <div class="line line-1">
        <div class="wave wavel" style="background-image: url(1.png)"></div>
    </div>

    <div class="line line-2">
        <div class="wave wave2" style="background-image: url(2.png)"></div>
    </div>
    
    <div class="line line-3">
        <div class="wave wave3" style="background-image: url(3.png)"></div>
    </div>
    <script src="gelap.js"></script>
</body>
</html>
