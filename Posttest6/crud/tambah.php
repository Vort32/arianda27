<?php
include 'koneksi.php';  // Include your database connection file (koneksi.php).
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $school = $_POST['school'];
    $rarity = $_POST['rarity'];
    $role = $_POST['role'];
    $weapon_type = $_POST['weapon_type'];
    $armor_type = $_POST['armor_type'];

    // Proses upload gambar
    $image_name = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    $image_path = 'uploads/' . $image_name;

    if (move_uploaded_file($image_tmp, $image_path)) {
        // Pemeriksaan duplikat berdasarkan nama
        $duplicateCheck = mysqli_query($conn, "SELECT * FROM ba WHERE nama = '$name'");

        if (mysqli_num_rows($duplicateCheck) > 0) {
            echo "<script>alert('Banner dengan nama tersebut sudah ada.'); window.location='tambah.php';</script>";
        } else {
            // Query untuk menambahkan banner
            $sql = "INSERT INTO ba (nama, school, rarity, role, weapon_type, armor_type, image_name)
                    VALUES ('$name', '$school', '$rarity', '$role', '$weapon_type', '$armor_type', '$image_name')";

            if ($conn->query($sql) === TRUE) {
                // Jika berhasil, arahkan kembali ke index.php setelah 2 detik
                echo "<script>alert('Banner berhasil ditambahkan.'); window.location='index.php';</script>";
                exit();
            }
        }
    } else {
        echo "<script>alert('Gagal mengunggah gambar.'); window.location='index.php';</script>";
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Char</title>
    <link rel="stylesheet" href="tamb.css"><!-- Include your CSS file here -->
</head>
<body>
    <h2>Add Karakter</h2>
    <form action="tambah.php" method="post" enctype="multipart/form-data">
        <label>Nama       : <input type="text" name="name" required></label><br>
        <label>school     : <input type="text" name="school"></label><br>
        <label>rarity     : <input type="text" name="rarity"></label><br>
        <label>role       : <input type="text" name="role"></label><br>
        <label>weapon_type: <input type="text" name="weapon_type"></label><br>
        <label>armor_type : <input type="text" name="armor_type"></label><br>
        <label>Image      : <input type="file" name="image"></label><br>
        <input type="submit" value="Add Char">
    </form>
</body>
</html>
