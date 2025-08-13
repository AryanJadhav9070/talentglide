<?php
include 'connection_databasssee.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $author     = $_POST['Author_tg'] ?? '';
    $date       = $_POST['Date_tg'] ?? '';
    $title      = $_POST['Title_tg'] ?? '';
    $tagline    = $_POST['Tagline_tg'] ?? '';
    $blogquote  = $_POST['blogquote_tg'] ?? '';

    // Keep CKEditor HTML exactly as entered
    $disc_html  = $_POST['Disc_tg'] ?? '';

    $status     = isset($_POST['status']) ? "\0\1" : "\0\0";

    // Upload directory
    $uploadDir = 'uploads/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    function uploadImage($fieldName, $uploadDir) {
        if (!empty($_FILES[$fieldName]['name']) && $_FILES[$fieldName]['error'] === UPLOAD_ERR_OK) {
            $originalName = basename($_FILES[$fieldName]['name']);
            $targetPath = $uploadDir . $originalName;

            if (getimagesize($_FILES[$fieldName]['tmp_name']) !== false) {
                if (move_uploaded_file($_FILES[$fieldName]['tmp_name'], $targetPath)) {
                    return $originalName;
                }
            }
        }
        return '';
    }

    $mainImage = uploadImage('image_blog_grid_main', $uploadDir);
    $img1      = uploadImage('additional_img_1', $uploadDir);
    $img2      = uploadImage('additional_img_2', $uploadDir);

    $sql = "INSERT INTO `blog-grid-tg-data`
            (`Author-tg`, `Date-tg`, `Title-tg`, `Disc-tg`, `Tagline-tg`, `blogquote-tg`, `status`, 
             `image-blog-grid-main`, `additional-img-1`, `additional-img-2`)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
        "ssssssssss",
        $author,
        $date,
        $title,
        $disc_html, // Keep raw CKEditor HTML
        $tagline,
        $blogquote,
        $status,
        $mainImage,
        $img1,
        $img2
    );

    if ($stmt->execute()) {
        header("Location: manage_blogs.php?success=1");
        exit();
    } else {
        echo "Error inserting record: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>
