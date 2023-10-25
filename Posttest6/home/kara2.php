
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

    // Output the HTML structure with appropriate classes
    echo "<div class='uploaded-image'><a href='../img/$img'><img src='../img/$img' alt='Uploaded Image'></a></div>";
    echo "<div class='character-info'>";
    echo "<p><strong>Nama Karakter:</strong> " . $game_name . "</p>";
    echo "<p><strong>Role Karakter:</strong> " . $name_kar . "</p>";
    echo "<p><strong>Tahun Rilis:</strong> " . $release_year . "</p>";
    echo "<p><strong>Jenis Synergy:</strong> " . $game_type . "</p>";
    echo "<p><strong>Deskripsi Karakter:</strong> " . $description . "</p>";
    echo "</div>";
}
?>

