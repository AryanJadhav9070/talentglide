<?php 
include 'leftasidde.php';

// Database connection with XAMPP default credentials
$servername = "localhost";
$username = "root";  // Default XAMPP username
$password = "";      // Default XAMPP password (empty)
$dbname = "talentglide";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch all blogs from database
$sql = "SELECT * FROM `blog-grid-tg-data`";
$result = $conn->query($sql);

// Close connection (we'll reopen if needed for actions)
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Management | TalentGlide</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8fafc;
        }
        .card-shadow {
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }
    </style>
</head>
<body class="bg-gray-50" style="margin-left:20%; margin-right:20%; margin-top:2%; margin-bottom:2%;">
    <div class="container mx-auto px-4 py-8">
        <!-- Header -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8">
            <div>
                <h1 class="text-2xl font-bold text-gray-800">Blog Management</h1>
                <p class="text-gray-600">Manage all your blog posts in one place</p>
            </div>
            <div class="mt-4 md:mt-0">
                <button class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg flex items-center">
                    <i class="fas fa-plus mr-2"></i> Add New Blog
                </button>
            </div>
        </div>

        <!-- Search and Filter -->
        <div class="bg-white rounded-lg p-4 mb-6 card-shadow">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                <div class="relative flex-1">
                    <input type="text" placeholder="Search blogs..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                    <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                </div>
                <div class="flex items-center space-x-2">
                    <select class="border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                        <option>All Status</option>
                        <option>Active</option>
                        <option>Inactive</option>
                    </select>
                    <select class="border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                        <option>Sort by Date</option>
                        <option>Newest First</option>
                        <option>Oldest First</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Blog Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $status = $row['status'] == "\0\1" ? 1 : 0; // Convert binary status to 0/1
                    $statusText = $status ? 'Active' : 'Inactive';
                    $statusClass = $status ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800';
                    $toggleText = $status ? 'Disable' : 'Enable';
                    $toggleIcon = $status ? 'toggle-on' : 'toggle-off';
                    
                    // Handle binary image data (this is a simplified approach)
                    $mainImage = "https://via.placeholder.com/400x300";
                    if (!empty($row['image-blog-grid-main'])) {
                        // In a real application, you would save the images to files and reference them
                        // This is just a placeholder for demonstration
                        $mainImage = ($row['image-blog-grid-main']);
                    }
                    ?>
                    <div class="bg-white rounded-lg overflow-hidden card-shadow">
                        <!-- Blog Image -->
                        <div class="h-48 bg-gray-200 relative">
                            <img src="<?= htmlspecialchars($row['image-blog-grid-main']) ?>" alt="Blog Image" class="w-full h-full object-cover">
                            <div class="absolute top-2 right-2">
                                <span class="<?php echo $statusClass; ?> text-xs font-medium px-2.5 py-0.5 rounded-full"><?php echo $statusText; ?></span>
                            </div>
                        </div>
                        
                        <!-- Blog Content -->
                        <div class="p-5">
                            <div class="flex justify-between items-start mb-2">
                                <div>
                                    <span class="text-sm text-gray-500">By: <?php echo htmlspecialchars($row['Author-tg']); ?></span>
                                    <span class="mx-2 text-gray-300">•</span>
                                    <span class="text-sm text-gray-500"><?php echo htmlspecialchars($row['Date-tg']); ?></span>
                                </div>
                                <div class="flex space-x-2">
<a href="edit_front.php?id=<?php echo $row['Id-blog']; ?>" class="text-indigo-600 hover:text-indigo-800">
    <i class="fas fa-edit"></i>
</a>
                                    <button class="text-red-600 hover:text-red-800" onclick="showDeleteModal(<?php echo $row['Id-blog']; ?>)">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </div>
                            </div>
                            
                            <h3 class="text-xl font-bold text-gray-800 mb-2"><?php echo htmlspecialchars($row['Title-tg']); ?></h3>
                            <p class="text-gray-600 text-sm mb-3"><?php echo htmlspecialchars($row['Tagline-tg']); ?></p>
                            
                            <div class="bg-gray-100 p-3 rounded-lg mb-3">
                                <p class="text-gray-700 italic">"<?php echo htmlspecialchars($row['blogquote-tg']); ?>"</p>
                            </div>
                            
                            <p class="text-gray-600 text-sm line-clamp-3 mb-4"><?php echo htmlspecialchars($row['Disc-tg']); ?></p>
                            
                            <div class="flex justify-between items-center">
                                <div class="flex space-x-2">
                                    <button class="text-xs bg-gray-200 hover:bg-gray-300 text-gray-800 px-2 py-1 rounded">
                                        <i class="fas fa-eye mr-1"></i> View
                                    </button>
                                    <button class="text-xs bg-gray-200 hover:bg-gray-300 text-gray-800 px-2 py-1 rounded" 
                                            onclick="toggleStatus(<?php echo $row['Id-blog']; ?>, <?php echo $status; ?>)">
                                        <i class="fas fa-<?php echo $toggleIcon; ?> mr-1"></i> <?php echo $toggleText; ?>
                                    </button>
                                </div>
                                <span class="text-xs text-gray-500">ID: <?php echo $row['Id-blog']; ?></span>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo '<div class="col-span-full text-center py-12">
                    <i class="fas fa-newspaper text-4xl text-gray-300 mb-4"></i>
                    <h3 class="text-lg font-medium text-gray-500">No blog posts found</h3>
                    <p class="text-gray-400 mt-1">Create your first blog post to get started</p>
                    <button class="mt-4 bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg">
                        <i class="fas fa-plus mr-2"></i> Add New Blog
                    </button>
                </div>';
            }
            ?>
        </div>

        <!-- Pagination -->
        <div class="flex justify-center mt-8">
            <nav class="inline-flex rounded-md shadow">
                <a href="#" class="px-3 py-2 rounded-l-md border border-gray-300 bg-white text-gray-500 hover:bg-gray-50">
                    <i class="fas fa-chevron-left"></i>
                </a>
                <a href="#" class="px-4 py-2 border-t border-b border-gray-300 bg-white text-indigo-600 font-medium hover:bg-gray-50">1</a>
                <a href="#" class="px-4 py-2 border-t border-b border-gray-300 bg-white text-gray-500 hover:bg-gray-50">2</a>
                <a href="#" class="px-4 py-2 border-t border-b border-gray-300 bg-white text-gray-500 hover:bg-gray-50">3</a>
                <a href="#" class="px-3 py-2 rounded-r-md border border-gray-300 bg-white text-gray-500 hover:bg-gray-50">
                    <i class="fas fa-chevron-right"></i>
                </a>
            </nav>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div id="deleteModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
        <div class="bg-white rounded-lg p-6 max-w-md w-full">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-bold text-gray-800">Confirm Deletion</h3>
                <button onclick="closeModal()" class="text-gray-400 hover:text-gray-600">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <p class="text-gray-600 mb-6">Are you sure you want to delete this blog post? This action cannot be undone.</p>
            <div class="flex justify-end space-x-3">
                <button onclick="closeModal()" class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50">Cancel</button>
                <button id="confirmDelete" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">Delete</button>
            </div>
        </div>
    </div>

    <script>
        let currentBlogId = null;
        
        function showDeleteModal(blogId) {
            currentBlogId = blogId;
            document.getElementById('deleteModal').classList.remove('hidden');
        }
        
        function closeModal() {
            document.getElementById('deleteModal').classList.add('hidden');
            currentBlogId = null;
        }
        
        // Handle delete confirmation
        document.getElementById('confirmDelete').addEventListener('click', function() {
            if (currentBlogId) {
                // Send AJAX request to delete the blog
                fetch('delete_blog.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: 'id=' + currentBlogId
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Reload the page to see changes
                        window.location.reload();
                    } else {
                        alert('Error deleting blog: ' + data.message);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('An error occurred while deleting the blog');
                });
            }
            closeModal();
        });
        
        function toggleStatus(blogId, currentStatus) {
            // Send AJAX request to toggle status
            fetch('toggle_status.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: 'id=' + blogId + '&status=' + (currentStatus ? 0 : 1)
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Reload the page to see changes
                    window.location.reload();
                } else {
                    alert('Error updating status: ' + data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred while updating status');
            });
        }
    </script>
</body>
</html>