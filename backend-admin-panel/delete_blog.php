<?php
header('Content-Type: application/json');

include 'connection_databasssee.php'; 
$id = $_POST['id'] ?? null;

if (!$id) {
    echo json_encode(['success' => false, 'message' => 'No blog ID provided']);
    exit;
}

// Delete the blog
$sql = "DELETE FROM `blog-grid-tg-data` WHERE `Id-blog` = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    echo json_encode(['success' => true, 'message' => 'Blog deleted successfully']);
} else {
    echo json_encode(['success' => false, 'message' => 'Error deleting blog: ' . $stmt->error]);
}

$stmt->close();
$conn->close();
?>
