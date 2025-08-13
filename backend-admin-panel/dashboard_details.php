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
                        <a href="dashboard.php" class="flex items-center p-2 text-gray-700 rounded-lg hover:bg-gray-100">
                            <i class="fas fa-tachometer-alt mr-3"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="add_blogtg.php" class="flex items-center p-2 text-gray-700 rounded-lg hover:bg-gray-100">
                            <i class="fas fa-blog mr-3"></i>
                            <span>Blog Management</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 text-gray-700 rounded-lg hover:bg-gray-100">
                            <i class="fas fa-users mr-3"></i>
                            <span>User Management</span>
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

        <!-- RIGHT SIDE (Main Content) -->
        <div class="flex-1 p-6 overflow-y-auto">
            <!-- Dashboard Section -->
            <div class="space-y-8">
                <!-- Header -->
                <div class="flex justify-between items-center mb-6">
                    <h1 class="text-2xl font-bold text-gray-800">Blog Dashboard</h1>
                </div>

                <!-- KPI Cards -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Total Blogs Card -->
                    <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-500">Total Blogs</p>
                                <p class="text-3xl font-bold mt-1"><?php echo $total_blogs; ?></p>
                            </div>
                            <div class="w-14 h-14 rounded-full bg-gradient-to-r from-blue-500 to-indigo-500 flex items-center justify-center text-white">
                                <i class="fas fa-blog text-xl"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Enabled Blogs Card -->
                    <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-500">Enabled Blogs</p>
                                <p class="text-3xl font-bold mt-1 text-green-600"><?php echo $enabled_blogs; ?></p>
                            </div>
                            <div class="w-14 h-14 rounded-full bg-gradient-to-r from-green-500 to-teal-500 flex items-center justify-center text-white">
                                <i class="fas fa-check-circle text-xl"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Disabled Blogs Card -->
                    <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-500">Disabled Blogs</p>
                                <p class="text-3xl font-bold mt-1 text-red-600"><?php echo $disabled_blogs; ?></p>
                            </div>
                            <div class="w-14 h-14 rounded-full bg-gradient-to-r from-red-500 to-pink-500 flex items-center justify-center text-white">
                                <i class="fas fa-times-circle text-xl"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Activity + Blog Table -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <!-- Recent Activity -->
                    <div class="lg:col-span-1 bg-white p-6 rounded-xl shadow-md">
                        <h2 class="text-xl font-bold mb-4 text-gray-800">Recent Activity</h2>
                        <ul class="space-y-4">
                            <?php foreach ($recent_blogs as $blog): ?>
                            <li class="flex items-start">
                                <div class="p-2 rounded-full <?php echo $blog['status'] == 0x0001 ? 'bg-green-500' : 'bg-red-500'; ?> mr-3">
                                    <i class="fas fa-blog text-white text-sm"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-medium">
                                        <?php echo htmlspecialchars($blog['Title-tg']); ?>
                                        <span class="text-xs ml-2 <?php echo $blog['status'] == 0x0001 ? 'text-green-600' : 'text-red-600'; ?>">
                                            (<?php echo $blog['status'] == 0x0001 ? 'Enabled' : 'Disabled'; ?>)
                                        </span>
                                    </p>
                                    <p class="text-xs text-gray-500 mt-1">
                                        By <?php echo htmlspecialchars($blog['Author-tg']); ?> on <?php echo htmlspecialchars($blog['Date-tg']); ?>
                                    </p>
                                </div>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <!-- Blog Table -->
                    <div class="lg:col-span-2 bg-white p-6 rounded-xl shadow-md">
                        <div class="flex justify-between items-center mb-4">
                            <h2 class="text-xl font-bold text-gray-800">All Blogs</h2>
                            <a href="add_blog.php" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                                <i class="fas fa-plus mr-2"></i>Add New Blog
                            </a>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Author</th>
                                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <?php foreach ($recent_blogs as $blog): ?>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-4 py-3 whitespace-nowrap text-sm font-medium text-gray-900"><?php echo $blog['Id-blog']; ?></td>
                                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500"><?php echo htmlspecialchars(substr($blog['Title-tg'], 0, 30)); ?><?php echo strlen($blog['Title-tg']) > 30 ? '...' : ''; ?></td>
                                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500"><?php echo htmlspecialchars($blog['Author-tg']); ?></td>
                                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500"><?php echo htmlspecialchars($blog['Date-tg']); ?></td>
                                        <td class="px-4 py-3 whitespace-nowrap">
                                            <span class="px-2 py-1 text-xs font-semibold rounded-full <?php echo $blog['status'] == 0x0000 ? 'text-green-800 bg-green-100' : 'text-red-800 bg-red-100'; ?>">
                                                <?php echo $blog['status'] == 0x0000 ? 'Enabled' : 'Disabled'; ?>
                                            </span>
                                        </td>
                                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">
                                            <a href="edit_blog.php?id=<?php echo $blog['Id-blog']; ?>" class="text-blue-600 hover:text-blue-900 mr-3"><i class="fas fa-edit"></i></a>
                                            <a href="delete_blog.php?id=<?php echo $blog['Id-blog']; ?>" class="text-red-600 hover:text-red-900"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Mobile menu toggle
        document.querySelector('.mobile-menu').addEventListener('click', function() {
            document.querySelector('.sidebar').classList.toggle('active');
            document.querySelector('.overlay').classList.toggle('active');
        });

        // Close sidebar when clicking overlay
        document.querySelector('.overlay').addEventListener('click', function() {
            document.querySelector('.sidebar').classList.remove('active');
            this.classList.remove('active');
        });
    </script>
</body>
</html>
