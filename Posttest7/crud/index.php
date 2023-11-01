<?php
include 'koneksi.php';

$banners = [];

$result = $conn->query("SELECT * FROM ba");

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $banners[] = $row;
    }
}

function displayBanner($banner)
{
    echo '<div class="banner">
            <div class="banner-wrapper">
                <img src="uploads/' . $banner['image_name'] . '" alt="' . $banner['nama'] . '">
                <div class="banner-description">
                    <h2>' . $banner['nama'] . '</h2>
                    <p>' . $banner['school'] . '</p>
                    <p>' . $banner['rarity'] . '</p>
                    <p>' . $banner['role'] . '</p>
                    <p>' . $banner['weapon_type'] . '</p>
                    <p>' . $banner['armor_type'] . '</p>
                    <div class="banner-actions">
                        <a href="edit.php?id=' . $banner['id'] . '">
                            <button>Edit</button>
                        </a>
                        <a href="hapus.php?id=' . $banner['id'] . '">
                            <button>Delete</button>
                        <a href="tambah.php?id=' . $banner['id'] . '">
                            <button>Tambah</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Char</title>
    <link rel="stylesheet" href="crud.css">
</head>
<body>

<header>
<nav class="navbar">
    <div class="logo" style="display: flex; justify-content: center; align-items: center;">
        <img src="../img/logo2.png" alt="Logo" style="height: 100px;">
    </div>
    <div class="datetime">
        <p id="date"></p>
        <p id="time"></p>
    </div>
</nav>
</header>

<div class="shortcut-link">
    <a href="tambah.php">Tambah Karakter</a>
</div>
<div class="shortcut-link">
    <a href="../index.php">HOME</a>
</div>

<section id="home" class="body-content">    
        <?php
        foreach ($banners as $banner) {
            displayBanner($banner);
        }
        ?>
</section>


<script>
function updateDateTime() {
    const dateElement = document.getElementById("date");
    const timeElement = document.getElementById("time");
    const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
    const currentDateTime = new Date();
    dateElement.textContent = currentDateTime.toLocaleDateString('en-US', options);
    timeElement.textContent = currentDateTime.toLocaleTimeString();
}
setInterval(updateDateTime, 1000);
updateDateTime();
</script>


</body>
</html>
