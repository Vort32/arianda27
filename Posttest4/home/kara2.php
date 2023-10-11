<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['file'])) {
    $img = $_FILES["file"]["name"];
    $game_name = $_POST["game_name"];
    $tempName = $_FILES["file"]["tmp_name"];
    $release_year = $_POST["release_year"];
    $game_type = $_POST["game_type"];
    $name_kar = $_POST["name_kar"];
    $description = $_POST["description"];
    move_uploaded_file($tempName, "../img/" . $img);

    // Lakukan sesuatu dengan data yang diterima, seperti menyimpannya ke database.

    // Contoh: Menampilkan data yang diterima
    echo "<a href='../img/$img'><img src='../img/$img' alt='Uploaded Image'></a>";
    echo "<hr/>";
    echo "Nama Karakter         : " . $game_name . "<br>";
    echo "Role Karakter         : " . $name_kar . "<br>";
    echo "Tahun Rilis           : " . $release_year . "<br>";
    echo "Jenis Synergy         : " . $game_type . "<br>";
    echo "Deskripsi Karakter    : " . $description . "<br>";
}
?>