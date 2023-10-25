<?php
include 'koneksi.php';  // Include your database connection file (koneksi.php).

if (isset($_GET['id'])) {
    $ba_id = intval($_GET['id']); // Ensure the ID is an integer to prevent SQL injection.

    // Query to fetch the image name for deletion and check if the banner exists.
    $sql = "SELECT image_name FROM ba WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $ba_id);

    if ($stmt->execute()) {
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $image_name = $row['image_name'];

            // Delete the image from the "uploads" directory.
            if (unlink("uploads/$image_name")) {
                // Now, delete the banner data from the database.
                $delete_sql = "DELETE FROM ba WHERE id = ?";
                $delete_stmt = $conn->prepare($delete_sql);
                $delete_stmt->bind_param("i", $ba_id);

                if ($delete_stmt->execute()) {
                    $delete_stmt->close();  // Close the delete statement.

                    // Redirect to index.php after successful deletion.
                    header("Location: index.php");
                    exit(); // Ensure no other output is sent.
                } else {
                    echo "Error deleting banner: " . $delete_stmt->error;
                }
            } else {
                echo "Error deleting image file.";
            }
        } else {
            echo "Banner tidak ditemukan.";
        }
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close prepared statements.
    $stmt->close();
} else {
    echo "ID banner tidak diberikan.";
}
?>
