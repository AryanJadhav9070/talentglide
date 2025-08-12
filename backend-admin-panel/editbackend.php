<?php
include 'connection_databasssee.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $blog_id = $_POST['Id_blog'];
    $author = $_POST['Author_tg'];
    $date = $_POST['Date_tg'];
    $title = $_POST['Title_tg'];
    $tagline = $_POST['Tagline_tg'];
    $blogquote = $_POST['blogquote_tg'];
    $disc = $_POST['Disc_tg'];
    $status = isset($_POST['status']) ? "\0\1" : "\0\0";

    // Upload directory
    $uploadDir = 'uploads/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    // Function to handle image upload
    function uploadImage($fieldName, $uploadDir) {
        if (!empty($_FILES[$fieldName]['name']) && $_FILES[$fieldName]['error'] === UPLOAD_ERR_OK) {
            $originalName = basename($_FILES[$fieldName]['name']);
            $targetPath = $uploadDir . $originalName;

            // Validate image
            if (getimagesize($_FILES[$fieldName]['tmp_name']) !== false) {
                if (move_uploaded_file($_FILES[$fieldName]['tmp_name'], $targetPath)) {
                    return $originalName; // Store only file name in DB
                }
            }
        }
        return null; // No new upload
    }

    // Handle file uploads
    $mainImage = uploadImage('image_blog_grid_main', $uploadDir);
    $img1 = uploadImage('additional_img_1', $uploadDir);
    $img2 = uploadImage('additional_img_2', $uploadDir);

    // Start building SQL
    $sql = "UPDATE `blog-grid-tg-data` SET 
            `Author-tg` = ?,
            `Date-tg` = ?,
            `Title-tg` = ?,
            `Disc-tg` = ?,
            `Tagline-tg` = ?,
            `blogquote-tg` = ?,
            `status` = ?";

    // Add image columns only if new files uploaded
    if ($mainImage) $sql .= ", `image-blog-grid-main` = ?";
    if ($img1) $sql .= ", `additional-img-1` = ?";
    if ($img2) $sql .= ", `additional-img-2` = ?";

    $sql .= " WHERE `Id-blog` = ?";

    // Bind params dynamically
    $params = [$author, $date, $title, $disc, $tagline, $blogquote, $status];
    $types = "sssssss";

    if ($mainImage) { $params[] = $mainImage; $types .= "s"; }
    if ($img1) { $params[] = $img1; $types .= "s"; }
    if ($img2) { $params[] = $img2; $types .= "s"; }

    $params[] = $blog_id;
    $types .= "i";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param($types, ...$params);

    if ($stmt->execute()) {
        header("Location: manage_blogs.php?success=1");
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>
