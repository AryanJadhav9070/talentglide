<?php
include 'backend-admin-panel/connection_databasssee.php';

// Pagination setup
$limit = 6; // max cards per page
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? intval($_GET['page']) : 1;
$offset = ($page - 1) * $limit;

// Count total blogs with status = 1
$count_sql = "SELECT COUNT(*) as total FROM `blog-grid-tg-data` WHERE status = 0x0001";
$count_result = mysqli_query($conn, $count_sql);
$count_row = mysqli_fetch_assoc($count_result);
$total_blogs = $count_row['total'];
$total_pages = ceil($total_blogs / $limit);

// Fetch blogs for current page
$sql = "SELECT * FROM `blog-grid-tg-data` WHERE status = 0x0001 ORDER BY `Id-blog` DESC LIMIT $limit OFFSET $offset";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/images/favicon.png">
    <title>Blog Grid - AI Agent UI Kit</title>
    <link href="assets/css/output.css" rel="stylesheet">
</head>
<body x-data="{
  mobileMenuOpen: false,
  activeDropdown: null,
  darkMode: localStorage.getItem('darkMode') === 'true',
  toggleDarkMode() {
    this.darkMode = !this.darkMode;
    localStorage.setItem('darkMode', this.darkMode);
    if (this.darkMode) {
      document.documentElement.classList.add('dark');
      document.documentElement.classList.remove('light');
    } else {
      document.documentElement.classList.add('light');
      document.documentElement.classList.remove('dark');
    }
  },
  toggleDropdown(dropdown) {
    if (window.innerWidth < 1024) {
      this.activeDropdown = this.activeDropdown === dropdown ? null : dropdown;
    }
  },
  closeDropdowns() { this.activeDropdown = null; },
  init() {
    const savedDarkMode = localStorage.getItem('darkMode') === 'true';
    if (savedDarkMode) {
      this.darkMode = true;
      document.documentElement.classList.add('dark');
      document.documentElement.classList.remove('light');
    } else {
      this.darkMode = false;
      document.documentElement.classList.add('light');
      document.documentElement.classList.remove('dark');
    }
    document.addEventListener('click', (e) => {
      if (!e.target.closest('.nav-item') && !e.target.closest('.dropdown-menu') && !e.target.closest('.mobile-dropdown-toggle')) {
        this.closeDropdowns();
      }
    });
    window.addEventListener('resize', () => {
      if (window.innerWidth >= 1024) {
        this.activeDropdown = null;
        this.mobileMenuOpen = false;
      }
    });
  }
}">
<div class="dark:bg-dark-secondary">
    <?php include 'header.html'; ?>

    <main>
        <section class="py-20">
            <div class="wrapper">
                <div class="mx-auto max-w-md text-center mb-14">
                    <h2 class="text-4xl font-bold text-gray-800 mb-2 dark:text-white/90">Latest Posts & Blogs</h2>
                    <p class="text-gray-700 text-base dark:text-gray-400">See all the latest posts & blogs we have ever written.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <?php while ($row = mysqli_fetch_assoc($result)): ?>
                        <article class="overflow-hidden">
                            <a href="blog-details.php?id=<?php echo $row['Id-blog']; ?>">
                                <img src="backend-admin-panel/uploads/<?php echo htmlspecialchars($row['image-blog-grid-main']); ?>" 
                                     alt="Blog Image" 
                                     class="w-full h-48 object-cover rounded-[20px]">
                            </a>
                            <div class="mt-6">
                                <div class="flex items-center text-sm text-gray-500 mb-3">
                                    <span class="dark:text-gray-400"><?php echo htmlspecialchars($row['Author-tg']); ?></span>
                                    <span class="mx-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" viewBox="0 0 6 6" fill="none">
                                            <circle cx="3" cy="3.00177" r="3" fill="#98A2B3"></circle>
                                        </svg>
                                    </span>
                                    <span class="dark:text-gray-400"><?php echo htmlspecialchars($row['Date-tg']); ?></span>
                                </div>
                                <h3 class="text-2xl font-semibold text-gray-800 dark:text-white/90 mb-3">
                                    <a href="blog-details.php?id=<?php echo $row['Id-blog']; ?>">
                                        <?php echo htmlspecialchars($row['Title-tg']); ?>
                                    </a>
                                </h3>
                                
                                
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>

                <!-- Pagination -->
                <div class="flex justify-center mt-14 items-center space-x-2">
                    <?php if ($page > 1): ?>
                        <a href="?page=<?php echo $page - 1; ?>" 
                           class="px-4 h-10 py-2 border border-gray-300 shadow-theme-xs rounded-lg inline-flex justify-center items-center text-sm font-medium text-gray-700 bg-white dark:hover:bg-gray-900 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800 hover:bg-gray-50">
                           Previous
                        </a>
                    <?php endif; ?>

                    <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                        <a href="?page=<?php echo $i; ?>" 
                           class="px-4 py-2 size-10 rounded-md text-sm font-medium inline-flex justify-center items-center <?php echo $i == $page ? 'text-white bg-primary-500 hover:bg-primary-600' : 'text-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800'; ?>">
                           <?php echo $i; ?>
                        </a>
                    <?php endfor; ?>

                    <?php if ($page < $total_pages): ?>
                        <a href="?page=<?php echo $page + 1; ?>" 
                           class="px-4 h-10 py-2 border border-gray-300 shadow-theme-xs rounded-lg inline-flex justify-center items-center text-sm font-medium text-gray-700 bg-white dark:hover:bg-gray-900 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800 hover:bg-gray-50">
                           Next
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.html'; ?>
</div>

<script defer src="assets/js/alpine.min.js"></script>
<script defer src="assets/js/glightbox.min.js"></script>
<script defer src="assets/js/app.js"></script>
</body>
</html>

















