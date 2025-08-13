<?php
// Database connection
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "talentglide";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get blog statistics
$total_blogs = 0;
$enabled_blogs = 0;
$disabled_blogs = 0;

// Total blogs
$sql = "SELECT COUNT(*) as total FROM `blog-grid-tg-data`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $total_blogs = $row['total'];
}

// Enabled blogs (status = 1)
$sql = "SELECT COUNT(*) as enabled FROM `blog-grid-tg-data` WHERE status = 0x0001";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $enabled_blogs = $row['enabled'];
}

// Disabled blogs (status != 1)
$disabled_blogs = $total_blogs - $enabled_blogs;

// Recent blog activity
$recent_blogs = array();
$sql = "SELECT `Id-blog`, `Title-tg`, `Date-tg`, `Author-tg`, `status` FROM `blog-grid-tg-data` ORDER BY `Id-blog` DESC LIMIT 5";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $recent_blogs[] = $row;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .sidebar {
            transition: all 0.3s ease;
        }
        .mobile-menu {
            display: none;
        }
        @media (max-width: 768px) {
            .sidebar {
                position: fixed;
                left: -100%;
                top: 0;
                bottom: 0;
                z-index: 50;
            }
            .sidebar.active {
                left: 0;
            }
            .mobile-menu {
                display: block;
            }
            .overlay {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background-color: rgba(0,0,0,0.5);
                z-index: 40;
            }
            .overlay.active {
                display: block;
            }
        }
    </style>
</head>
<body class="bg-gray-100">
    <!-- Mobile menu button -->
    <button class="mobile-menu fixed top-4 left-4 z-50 p-2 bg-blue-600 text-white rounded-lg shadow-lg md:hidden">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Overlay for mobile menu -->
    <div class="overlay"></div>

    <!-- Container: Sidebar + Main Content -->
    <div class="flex min-h-screen">
        <!-- LEFT SIDEBAR -->
        <div class="sidebar w-64 bg-white shadow-md z-30">
            <div class="p-4 border-b border-gray-200">
                <h1 class="text-xl font-bold text-gray-800">Admin Panel</h1>
            </div>
            <nav class="p-4">
                <ul class="space-y-2">
                    <li>
                        <a href="dashboard_details.php" class="flex items-center p-2 text-gray-700 rounded-lg hover:bg-gray-100">
                            <i class="fas fa-tachometer-alt mr-3"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="add_blogtg.php" class="flex items-center p-2 text-gray-700 rounded-lg hover:bg-gray-100">
                            <i class="fas fa-blog mr-3"></i>
                            <span>Add Blog</span>
                        </a>
                    </li>
                    <li>
                        <a href="manage_blogs.php" class="flex items-center p-2 text-gray-700 rounded-lg hover:bg-gray-100">
                            <i class="fas fa-users mr-3"></i>
                            <span>Blog Management</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 text-gray-700 rounded-lg hover:bg-gray-100">
                            <i class="fas fa-cog mr-3"></i>
                            <span>Settings</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
