<?php
header('Content-Type: application/json');

include 'connection_databasssee.php'; 



$id = $_POST['id'] ?? null;
$status = $_POST['status'] ?? null;

if (!$id || $status === null) {
    echo json_encode(['success' => false, 'message' => 'Missing parameters']);
    exit;
}

// Convert status to binary (as per your database structure)
$binaryStatus = $status ? "\0\1" : "\0\0";

// Update the status
$sql = "UPDATE `blog-grid-tg-data` SET `status` = ? WHERE `Id-blog` = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("si", $binaryStatus, $id);

if ($stmt->execute()) {
    echo json_encode(['success' => true, 'message' => 'Status updated successfully']);
} else {
    echo json_encode(['success' => false, 'message' => 'Error updating status: ' . $stmt->error]);
}

$stmt->close();
$conn->close();
?>