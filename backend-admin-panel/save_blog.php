<?php
include 'connection_databasssee.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $author = $_POST['Author_tg'];
    $date = $_POST['Date_tg'];
    $title = $_POST['Title_tg'];
    $tagline = $_POST['Tagline_tg'];
    $blogquote = $_POST['blogquote_tg'];
    $disc = $_POST['Disc_tg'];
    
    // Set default status to active (1)
    $status = "\0\1"; // Binary representation of status=1

    $uploadDir = 'uploads/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    // Function to handle file uploads
    function saveUploadedFile($inputName, $uploadDir) {
        if (isset($_FILES[$inputName]) && $_FILES[$inputName]['error'] === UPLOAD_ERR_OK) {
            // Generate unique filename
            $fileExt = pathinfo($_FILES[$inputName]['name'], PATHINFO_EXTENSION);
            $fileName = uniqid() . '.' . $fileExt;
            $targetPath = $uploadDir . $fileName;
            
            // Check if file is an image
            $check = getimagesize($_FILES[$inputName]['tmp_name']);
            if ($check !== false) {
                if (move_uploaded_file($_FILES[$inputName]['tmp_name'], $targetPath)) {
                    return $targetPath;
                }
            }
        }
        return null;
    }

    // Handle file uploads - make required fields truly required
    $mainImagePath = saveUploadedFile('image_blog_grid_main', $uploadDir);
    $img1Path = saveUploadedFile('additional_img_1', $uploadDir);
    $img2Path = saveUploadedFile('additional_img_2', $uploadDir);

    // Validate required fields
    if (!$mainImagePath) {
        http_response_code(400);
        echo "Main image upload failed or not provided.";
        exit;
    }

    // Set default paths for optional images if not provided
    $img1Path = $img1Path ?: '';
    $img2Path = $img2Path ?: '';

    // Insert query with status field
    $sql = "INSERT INTO `blog-grid-tg-data` (
        `Author-tg`, `Date-tg`, `Title-tg`, `Disc-tg`, `Tagline-tg`, `blogquote-tg`,
        `image-blog-grid-main`, `additional-img-1`, `additional-img-2`, `status`
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        http_response_code(500);
        echo "Database error: " . $conn->error;
        exit;
    }

    $stmt->bind_param(
        "ssssssssss",
        $author,
        $date,
        $title,
        $disc,
        $tagline,
        $blogquote,
        $mainImagePath,
        $img1Path,
        $img2Path,
        $status
    );

    if ($stmt->execute()) {
        // Success - redirect to blog list or show success message
        header("Location: manage_blogs.php?success=1");
        exit;
    } else {
        http_response_code(500);
        echo "Database insert failed: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    http_response_code(405);
    echo "Invalid request method.";
}