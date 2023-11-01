<?php
include 'koneksi.php';  // Include your database connection file (koneksi.php).

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $banner_id = $_POST['banner_id'];
    $name = $_POST['name'];
    $school = $_POST['school'];
    $rarity = $_POST['rarity'];
    $role = $_POST['role'];
    $weapon_type = $_POST['weapon_type'];
    $armor_type = $_POST['armor_type'];

    // Check if a new image has been uploaded
    if ($_FILES['image']['size'] > 0) {
        // Remove the old image
        $old_image_name = $_POST['old_image_name'];
        unlink("uploads/$old_image_name");

        // Process the upload of the new image
        $new_image_name = $_FILES['image']['name'];
        $new_image_tmp = $_FILES['image']['tmp_name'];
        $new_image_path = 'uploads/' . $new_image_name;
        move_uploaded_file($new_image_tmp, $new_image_path);

        // Update the image name in the database
        $sql = "UPDATE ba SET nama='$name', school='$school', rarity='$rarity', role='$role', weapon_type='$weapon_type', armor_type='$armor_type', image_name='$new_image_name' WHERE id=$banner_id";
    } else {
        // If no new image is uploaded
        $sql = "UPDATE ba SET nama='$name', school='$school', rarity='$rarity', role='$role', weapon_type='$weapon_type', armor_type='$armor_type' WHERE id=$banner_id";
    }

    if ($conn->query($sql) === TRUE) {
        // Redirect to index.php with an alert
        echo '<script>alert("Banner berhasil diperbarui."); window.location = "index.php";</script>';
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Fetch the data to be edited
if (isset($_GET['id'])) {
    $banner_id = $_GET['id'];
    $result = $conn->query("SELECT * FROM ba WHERE id=$banner_id");

    if ($result->num_rows > 0) {
        $banner = $result->fetch_assoc();
    } else {
        echo "Banner tidak ditemukan.";
        exit();
    }
} else {
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Char</title>
    <link rel="stylesheet" href="edi.css"> <!-- Include your CSS file here -->
</head>
<body>
    <h2>Edit Banner</h2>
    <form action="edit.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="banner_id" value="<?php echo $banner['id']; ?>">
        <input type="hidden" name="old_image_name" value="<?php echo $banner['image_name']; ?>">

        <!-- Update the input fields with existing data -->
        <label>Nama       : <input type="text" name="name" value="<?php echo $banner['nama']; ?>" required></label><br>
        <label>school     : <input type="text" name="school" value="<?php echo $banner['school']; ?>"></label><br>
        <label>rarity     : <input type="text" name="rarity" value="<?php echo $banner['rarity']; ?>"></label><br>
        <label>role       : <input type="text" name="role" value="<?php echo $banner['role']; ?>"></label><br>
        <label>weapon_type: <input type="text" name="weapon_type" value="<?php echo $banner['weapon_type']; ?>"></label><br>
        <label>armor_type : <input type="text" name="armor_type" value="<?php echo $banner['armor_type']; ?>"></label><br>
        <label>Image      : <input type="file" name="image"></label><br>
        <input type="submit" value="Update Banner">
    </form>
</body>
</html>
