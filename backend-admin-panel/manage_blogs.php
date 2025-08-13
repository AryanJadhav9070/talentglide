<?php
// manage_blogs.php
// Place this file inside the appropriate folder and adjust include paths if necessary

// Include sidebar (leftaside). Assumes this echo's sidebar markup only (no conflicting <html>/<head> tags).
include 'leftasidde.php';

// Include DB connection. Adjust path if needed.
include 'connection_databasssee.php'; // this file should create $conn (mysqli)



// Read inputs (GET)
$search = isset($_GET['search']) ? trim($_GET['search']) : '';
$statusFilter = isset($_GET['status']) ? $_GET['status'] : 'All Status';
$sortOrder = isset($_GET['sort']) ? $_GET['sort'] : 'Newest First';

// Pagination: 9 per page
$limit = 9;
$page = isset($_GET['page']) && is_numeric($_GET['page']) && intval($_GET['page']) > 0 ? intval($_GET['page']) : 1;
$offset = ($page - 1) * $limit;

// Build WHERE conditions safely
$whereClauses = [];
$params = [];
$types = '';

if ($search !== '') {
    // We'll search Title, Author, Tagline
    $s = '%' . $conn->real_escape_string($search) . '%';
    $whereClauses[] = "(`Title-tg` LIKE '$s' OR `Author-tg` LIKE '$s' OR `Tagline-tg` LIKE '$s')";
}

if ($statusFilter === 'Active') {
    // try common representations: numeric 1 or hex 0x0001 or string "\0\1"
    // simplest: check numeric equality or equality to the hex literal
    $whereClauses[] = "(status = 1 OR status = 0x0001 OR status = '\0\1')";
} elseif ($statusFilter === 'Inactive') {
    $whereClauses[] = "(status = 0 OR status = 0x0000 OR status = '\0\0')";
}

$whereSQL = '';
if (count($whereClauses) > 0) {
    $whereSQL = 'WHERE ' . implode(' AND ', $whereClauses);
}

// Order by
$orderSQL = "ORDER BY `Date-tg` DESC";
if ($sortOrder === 'Oldest First') {
    $orderSQL = "ORDER BY `Date-tg` ASC";
}

// Get total count
$countSql = "SELECT COUNT(*) AS total FROM `blog-grid-tg-data` $whereSQL";
$countRes = $conn->query($countSql);
$totalRows = 0;
if ($countRes && $countRes->num_rows) {
    $countRow = $countRes->fetch_assoc();
    $totalRows = (int)$countRow['total'];
}
$totalPages = $totalRows > 0 ? ceil($totalRows / $limit) : 1;

// Fetch page rows (use LIMIT/OFFSET)
$fetchSql = "SELECT * FROM `blog-grid-tg-data` $whereSQL $orderSQL LIMIT $limit OFFSET $offset";
$result = $conn->query($fetchSql);
?>

<!-- Page content (keeps your styling with Tailwind) -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Manage Blogs | TalentGlide</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { font-family: 'Poppins', sans-serif; background-color:#f8fafc; }
        .card-shadow { box-shadow: 0 8px 30px rgba(0,0,0,0.06); }
        /* Make images have fixed height and curved corners with shadow */
        .card-image { height: 220px; border-radius: 14px; overflow: hidden; box-shadow: 0 6px 18px rgba(0,0,0,0.08); }
        .card-image img { width: 100%; height: 100%; object-fit: cover; display:block; }
        /* smaller card image for grid */
        .grid-thumb { height: 180px; border-radius: 12px; overflow: hidden; box-shadow: 0 6px 18px rgba(0,0,0,0.06); }
        .grid-thumb img { width:100%; height:100%; object-fit:cover; display:block; }
        /* line-clamp fallback (if you have plugin can use) */
        .line-clamp-3 { display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; }
    </style>
</head>
<body class="min-h-screen">

<!-- Main wrapper - aligns to the right of the sidebar from leftasidde.php -->
<div class="container mx-auto px-4 py-8 p-8" >

    <!-- Header -->
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8">
        <div>
            <h1 class="text-2xl font-bold text-gray-800">Blog Management</h1>
            <p class="text-gray-600">Manage all your blog posts in one place</p>
        </div>
        <div class="mt-4 md:mt-0">
            <a href="add_blogtg.php" class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg inline-flex items-center">
                <i class="fas fa-plus mr-2"></i> Add New Blog
            </a>
        </div>
    </div>

    <!-- Search / Filters -->
    <div class="bg-white rounded-lg p-4 mb-6 card-shadow">
        <form method="GET" class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <div class="relative flex-1">
                <input type="text" name="search" value="<?= htmlspecialchars($search) ?>"
                       placeholder="Search by title, author or tagline..."
                       class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
            </div>

            <div class="flex items-center space-x-2">
                <select name="status" class="border border-gray-300 rounded-lg px-3 py-2">
                    <option <?= $statusFilter === 'All Status' ? 'selected' : '' ?>>All Status</option>
                    <option <?= $statusFilter === 'Active' ? 'selected' : '' ?>>Active</option>
                    <option <?= $statusFilter === 'Inactive' ? 'selected' : '' ?>>Inactive</option>
                </select>

                <select name="sort" class="border border-gray-300 rounded-lg px-3 py-2">
                    <option <?= $sortOrder === 'Newest First' ? 'selected' : '' ?>>Newest First</option>
                    <option <?= $sortOrder === 'Oldest First' ? 'selected' : '' ?>>Oldest First</option>
                </select>

                <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg">
                    Apply
                </button>
            </div>
        </form>
    </div>

    <!-- Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php if ($result && $result->num_rows > 0): ?>
            <?php while ($row = $result->fetch_assoc()): ?>
                <?php
                    // Determine status text/class
                    $rawStatus = $row['status'];
                    $isActive = false;
                    // Accept multiple representations
                    if ($rawStatus === '1' || $rawStatus === 1 || $rawStatus === "\0\1" || $rawStatus === "\x00\x01" || strtoupper($rawStatus) === '0X0001') {
                        $isActive = true;
                    }
                    $statusText = $isActive ? 'Active' : 'Inactive';
                    $statusClass = $isActive ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800';

                    // image path logic - prefer uploads directory; if DB contains full path, use it.
                    $dbImage = $row['image-blog-grid-main'];
                    $imagePath = '';
                    if ($dbImage) {
                        // if looks like a filename (no slashes) -> prefix uploads folder (adjust if your uploads folder path differs)
                        if (strpos($dbImage, '/') === false && strpos($dbImage, '\\') === false) {
                            // try backend-admin-panel/uploads then uploads
                            if (file_exists(__DIR__ . '/backend-admin-panel/uploads/' . $dbImage)) {
                                $imagePath = 'backend-admin-panel/uploads/' . rawurlencode($dbImage);
                            } elseif (file_exists(__DIR__ . '/uploads/' . $dbImage)) {
                                $imagePath = 'uploads/' . rawurlencode($dbImage);
                            } else {
                                // file not present locally — still build path to common folder
                                $imagePath = 'backend-admin-panel/uploads/' . rawurlencode($dbImage);
                            }
                        } else {
                            // contains slashes -> assume it's already a path/URL
                            $imagePath = $dbImage;
                        }
                    } else {
                        // fallback placeholder
                        $imagePath = 'https://via.placeholder.com/800x600?text=No+Image';
                    }

                    // Short preview of description: we'll display sanitized text using strip_tags then htmlspecialchars to show raw text (no HTML)
                    // But for listing cards we keep truncated plain text.
                    $plainDisc = strip_tags($row['Disc-tg']); // remove HTML tags
                    $preview = mb_strlen($plainDisc) > 220 ? mb_substr($plainDisc, 0, 217) . '...' : $plainDisc;
                ?>
                <div class="bg-white rounded-lg overflow-hidden card-shadow">
                    <div class="grid-thumb">
                        <a href="../blog-details.php?id=<?= urlencode($row['Id-blog']) ?>">
                            <img src="<?= htmlspecialchars($imagePath) ?>" alt="Blog Image">
                        </a>
                    </div>
                    <div class="p-5">
                        <div class="flex justify-between items-start mb-2">
                            <div>
                                <span class="text-sm text-gray-500">By: <?= htmlspecialchars($row['Author-tg']) ?></span>
                                <span class="mx-2 text-gray-300">•</span>
                                <span class="text-sm text-gray-500"><?= htmlspecialchars($row['Date-tg']) ?></span>
                            </div>
                            <div class="flex space-x-2 items-center">
                                <span class="<?= $statusClass ?> text-xs font-medium px-2.5 py-0.5 rounded-full"><?= $statusText ?></span>
                            </div>
                        </div>

                        <h3 class="text-xl font-bold text-gray-800 mb-2"><?= htmlspecialchars($row['Title-tg']) ?></h3>
                        <p class="text-gray-600 text-sm mb-3"><?= htmlspecialchars($row['Tagline-tg']) ?></p>

                        <div class="bg-gray-100 p-3 rounded-lg mb-3">
                            <p class="text-gray-700 italic">"<?= htmlspecialchars($row['blogquote-tg']) ?>"</p>
                        </div>

<div class="text-gray-600 text-sm line-clamp-3 mb-4"><?= $preview ?></div>

                        <div class="flex justify-between items-center">
                            <div class="flex space-x-2">
                                <a href="../blog-details.php?id=<?= urlencode($row['Id-blog']) ?>" class="text-xs bg-gray-200 hover:bg-gray-300 text-gray-800 px-2 py-1 rounded inline-flex items-center">
                                    <i class="fas fa-eye mr-1"></i> View
                                </a>
                                <a href="edit_front.php?id=<?= urlencode($row['Id-blog']) ?>" class="text-xs bg-gray-200 hover:bg-gray-300 text-gray-800 px-2 py-1 rounded inline-flex items-center">
                                    <i class="fas fa-edit mr-1"></i> Edit
                                </a>
                            </div>
                            <span class="text-xs text-gray-500">ID: <?= htmlspecialchars($row['Id-blog']) ?></span>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <div class="col-span-full text-center py-12">
                <i class="fas fa-newspaper text-4xl text-gray-300 mb-4"></i>
                <h3 class="text-lg font-medium text-gray-500">No blog posts found</h3>
                <p class="text-gray-400 mt-1">Create your first blog post to get started</p>
            </div>
        <?php endif; ?>
    </div>

    <!-- Pagination -->
    <div class="flex justify-center mt-8">
        <nav class="inline-flex rounded-md shadow">
            <?php
                // build base query string preserving search/status/sort
                $qsBase = [];
                if ($search !== '') $qsBase['search'] = $search;
                if ($statusFilter !== '') $qsBase['status'] = $statusFilter;
                if ($sortOrder !== '') $qsBase['sort'] = $sortOrder;
                function makePageUrl($pageNum, $qsBase) {
                    $qs = array_merge($qsBase, ['page' => $pageNum]);
                    return '?' . http_build_query($qs);
                }
            ?>
            <?php if ($page > 1): ?>
                <a href="<?= makePageUrl($page - 1, $qsBase) ?>" class="px-3 py-2 rounded-l-md border border-gray-300 bg-white text-gray-500 hover:bg-gray-50">
                    <i class="fas fa-chevron-left"></i>
                </a>
            <?php endif; ?>

            <?php
                // Show page numbers with a reasonable window
                $start = max(1, $page - 3);
                $end = min($totalPages, $page + 3);
                if ($start > 1) {
                    echo '<a href="'.makePageUrl(1, $qsBase).'" class="px-4 py-2 border-t border-b border-gray-300 bg-white text-gray-500 hover:bg-gray-50">1</a>';
                    if ($start > 2) {
                        echo '<span class="px-4 py-2 border-t border-b border-gray-300 bg-white text-gray-500">...</span>';
                    }
                }
                for ($i = $start; $i <= $end; $i++) {
                    $active = $i === $page;
                    $classes = $active ? 'px-4 py-2 border-t border-b border-gray-300 bg-indigo-600 text-white font-medium' : 'px-4 py-2 border-t border-b border-gray-300 bg-white text-gray-500 hover:bg-gray-50';
                    echo '<a href="'.makePageUrl($i, $qsBase).'" class="'.$classes.'">'.$i.'</a>';
                }
                if ($end < $totalPages) {
                    if ($end < $totalPages - 1) {
                        echo '<span class="px-4 py-2 border-t border-b border-gray-300 bg-white text-gray-500">...</span>';
                    }
                    echo '<a href="'.makePageUrl($totalPages, $qsBase).'" class="px-4 py-2 border-t border-b border-gray-300 bg-white text-gray-500 hover:bg-gray-50">'.$totalPages.'</a>';
                }
            ?>

            <?php if ($page < $totalPages): ?>
                <a href="<?= makePageUrl($page + 1, $qsBase) ?>" class="px-3 py-2 rounded-r-md border border-gray-300 bg-white text-gray-500 hover:bg-gray-50">
                    <i class="fas fa-chevron-right"></i>
                </a>
            <?php endif; ?>
        </nav>
    </div>

</div>

<!-- Optional small JS for delete/toggle behavior can be added similarly to previous file if needed -->

</body>
</html>
