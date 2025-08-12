<?php 
include 'leftasidde.php';
include 'connection_databasssee.php';

// Get the blog ID from URL parameter
$blog_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Fetch blog data from database
$sql = "SELECT * FROM `blog-grid-tg-data` WHERE `Id-blog` = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $blog_id);
$stmt->execute();
$result = $stmt->get_result();
$blog = $result->fetch_assoc();

if (!$blog) {
    die("Blog not found");
}

// Convert binary status to checkbox value
$status_checked = $blog['status'] == "\0\1" ? 'checked' : '';
?>

<!-- CKEditor CDN -->
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    primary: {
                        50: '#f0f9ff',
                        100: '#e0f2fe',
                        200: '#bae6fd',
                        300: '#7dd3fc',
                        400: '#38bdf8',
                        500: '#0ea5e9',
                        600: '#0284c7',
                        700: '#0369a1',
                        800: '#075985',
                        900: '#0c4a6e',
                    }
                }
            }
        }
    }
</script>
<style>
    .input-focus-effect:focus {
        box-shadow: 0 0 0 3px rgba(14, 165, 233, 0.3);
    }
    /* CKEditor customization */
    .ck-editor__editable {
        min-height: 200px;
    }
    .ck.ck-editor {
        box-shadow: none !important;
        border: 1px solid #e5e7eb !important;
        border-radius: 0.5rem !important;
    }
    .ck.ck-toolbar {
        border: none !important;
        border-bottom: 1px solid #e5e7eb !important;
        border-radius: 0.5rem 0.5rem 0 0 !important;
        background-color: #f9fafb !important;
    }
    .ck.ck-editor__editable:not(.ck-editor__nested-editable) {
        border-radius: 0 0 0.5rem 0.5rem !important;
    }
    /* File info styling */
    .file-info {
        transition: all 0.2s ease;
        max-width: 90%;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
</style>
</head>

<div class="bg-white rounded-xl w-full max-w-4xl p-8 shadow-lg" style="margin-left:20%; margin-right:20%; margin-top:2%; margin-bottom:2%;">
    <!-- Header with back button and title -->
    <div class="flex items-center mb-8">
        <a href="manage_blogs.php" class="mr-4 p-2 rounded-full bg-gray-100 hover:bg-gray-200 transition">
            <i class="fas fa-arrow-left text-gray-700"></i>
        </a>
        <div>
            <h1 class="text-2xl font-bold text-gray-800">Edit Blog Post</h1>
            <p class="text-gray-500">Edit the details below to update your blog</p>
        </div>
    </div>

    <form action="editbackend.php" method="POST" enctype="multipart/form-data" class="space-y-6" onsubmit="return validateForm()">
        <input type="hidden" name="Id_blog" value="<?= $blog['Id-blog'] ?>">

        <!-- Two column layout for first fields -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Author -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Author</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="fas fa-user text-primary-500"></i>
                    </div>
                    <input type="text" name="Author_tg" placeholder="John Doe" required
                        value="<?= htmlspecialchars($blog['Author-tg']) ?>"
                        class="pl-10 w-full p-3 rounded-lg bg-gray-50 border border-gray-200 text-gray-700 placeholder-gray-400 focus:outline-none input-focus-effect transition">
                </div>
            </div>

            <!-- Date -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Publish Date</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="fas fa-calendar text-primary-500"></i>
                    </div>
                    <input type="date" name="Date_tg" required
                        value="<?= htmlspecialchars($blog['Date-tg']) ?>"
                        class="pl-10 w-full p-3 rounded-lg bg-gray-50 border border-gray-200 text-gray-700 placeholder-gray-400 focus:outline-none input-focus-effect transition">
                </div>
            </div>
        </div>

        <!-- Title -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Blog Title</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i class="fas fa-heading text-primary-500"></i>
                </div>
                <input type="text" name="Title_tg" placeholder="The Future of Web Development" required
                    value="<?= htmlspecialchars($blog['Title-tg']) ?>"
                    class="pl-10 w-full p-3 rounded-lg bg-gray-50 border border-gray-200 text-gray-700 placeholder-gray-400 focus:outline-none input-focus-effect transition">
            </div>
        </div>

        <!-- Two column layout for tagline and quote -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Tagline -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Tagline</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="fas fa-tag text-primary-500"></i>
                    </div>
                    <textarea name="Tagline_tg" rows="2" placeholder="A catchy one-liner..." required
                        class="pl-10 w-full p-3 rounded-lg bg-gray-50 border border-gray-200 text-gray-700 placeholder-gray-400 focus:outline-none input-focus-effect transition"><?= htmlspecialchars($blog['Tagline-tg']) ?></textarea>
                </div>
            </div>

            <!-- Blog Quote -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Featured Quote</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="fas fa-quote-right text-primary-500"></i>
                    </div>
                    <textarea name="blogquote_tg" rows="2" placeholder="An inspiring quote..." required
                        class="pl-10 w-full p-3 rounded-lg bg-gray-50 border border-gray-200 text-gray-700 placeholder-gray-400 focus:outline-none input-focus-effect transition"><?= htmlspecialchars($blog['blogquote-tg']) ?></textarea>
                </div>
            </div>
        </div>

        <!-- Description with CKEditor -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Description</label>
            <textarea name="Disc_tg" id="editor" rows="4" placeholder="Write your blog content here..." required
                class="hidden"><?= htmlspecialchars($blog['Disc-tg']) ?></textarea>
            <div id="editor-container"></div>
        </div>

        <!-- Status Toggle -->
        <div class="flex items-center">
            <label class="inline-flex items-center cursor-pointer">
                <input type="checkbox" name="status" value="1" class="sr-only peer" <?= $status_checked ?>>
                <div class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-primary-300 dark:peer-focus:ring-primary-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary-600"></div>
                <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">Active Status</span>
            </label>
        </div>

        <!-- Image Uploads -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Main Image -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Featured Image</label>
                <div class="relative group">
                    <div class="flex flex-col items-center justify-center w-full h-32 rounded-lg border-2 border-dashed border-gray-300 hover:border-primary-500 transition cursor-pointer bg-gray-50">
                        <div class="text-center">
                            <i class="fas fa-camera text-2xl text-primary-500 mb-2"></i>
                            <p class="text-xs text-gray-500 file-info">
                                <?= basename($blog['image-blog-grid-main']) ?: 'Click to upload' ?>
                            </p>
                        </div>
                        <input type="file" name="image_blog_grid_main" accept="image/*"
                            class="absolute inset-0 w-full h-full opacity-0 cursor-pointer file-input"
                            onchange="showFileName(this)">
                    </div>
                    <?php if ($blog['image-blog-grid-main']): ?>
                        <div class="mt-2 text-xs text-gray-500">Current: <?= basename($blog['image-blog-grid-main']) ?></div>
                        <input type="hidden" name="existing_image_blog_grid_main" value="<?= $blog['image-blog-grid-main'] ?>">
                    <?php endif; ?>
                </div>
            </div>

            <!-- Additional Image 1 -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Additional Image</label>
                <div class="relative group">
                    <div class="flex flex-col items-center justify-center w-full h-32 rounded-lg border-2 border-dashed border-gray-300 hover:border-primary-500 transition cursor-pointer bg-gray-50">
                        <div class="text-center">
                            <i class="fas fa-image text-2xl text-primary-500 mb-2"></i>
                            <p class="text-xs text-gray-500 file-info">
                                <?= basename($blog['additional-img-1']) ?: 'Optional' ?>
                            </p>
                        </div>
                        <input type="file" name="additional_img_1" accept="image/*"
                            class="absolute inset-0 w-full h-full opacity-0 cursor-pointer file-input"
                            onchange="showFileName(this)">
                    </div>
                    <?php if ($blog['additional-img-1']): ?>
                        <div class="mt-2 text-xs text-gray-500">Current: <?= basename($blog['additional-img-1']) ?></div>
                        <input type="hidden" name="existing_additional_img_1" value="<?= $blog['additional-img-1'] ?>">
                    <?php endif; ?>
                </div>
            </div>

            <!-- Additional Image 2 -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Additional Image</label>
                <div class="relative group">
                    <div class="flex flex-col items-center justify-center w-full h-32 rounded-lg border-2 border-dashed border-gray-300 hover:border-primary-500 transition cursor-pointer bg-gray-50">
                        <div class="text-center">
                            <i class="fas fa-image text-2xl text-primary-500 mb-2"></i>
                            <p class="text-xs text-gray-500 file-info">
                                <?= basename($blog['additional-img-2']) ?: 'Optional' ?>
                            </p>
                        </div>
                        <input type="file" name="additional_img_2" accept="image/*"
                            class="absolute inset-0 w-full h-full opacity-0 cursor-pointer file-input"
                            onchange="showFileName(this)">
                    </div>
                    <?php if ($blog['additional-img-2']): ?>
                        <div class="mt-2 text-xs text-gray-500">Current: <?= basename($blog['additional-img-2']) ?></div>
                        <input type="hidden" name="existing_additional_img_2" value="<?= $blog['additional-img-2'] ?>">
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="flex flex-col sm:flex-row justify-end gap-4 pt-6">
            <button type="button" onclick="window.location.href='manage_blogs.php'" class="px-6 py-3 rounded-lg border border-gray-300 text-gray-700 hover:bg-gray-50 transition">
                Cancel
            </button>
            <button type="submit" class="px-6 py-3 bg-primary-600 hover:bg-primary-700 text-white font-medium rounded-lg shadow-md transition flex items-center justify-center">
                <i class="fas fa-save mr-2"></i> Update Blog
            </button>
        </div>
    </form>
</div>

<script>
    // Initialize CKEditor
    CKEDITOR.replace('editor', {
        toolbar: [
            { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat'] },
            { name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock'] },
            { name: 'links', items: ['Link', 'Unlink'] },
            { name: 'insert', items: ['Image', 'Table', 'HorizontalRule', 'SpecialChar'] },
            { name: 'styles', items: ['Styles', 'Format', 'Font', 'FontSize'] },
            { name: 'colors', items: ['TextColor', 'BGColor'] },
            { name: 'tools', items: ['Maximize', 'ShowBlocks'] },
            { name: 'document', items: ['Source'] }
        ],
        removePlugins: 'elementspath',
        resize_enabled: false,
        height: 300,
        contentsCss: [
            'https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css',
            'body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif; font-size: 14px; line-height: 1.5; color: #374151; }'
        ]
    });

    // Show file name when selected
    function showFileName(input) {
        const fileInfo = input.closest('.group').querySelector('.file-info');
        
        if (input.files && input.files.length > 0) {
            fileInfo.textContent = input.files[0].name;
            fileInfo.classList.add('font-medium', 'text-primary-600');
            fileInfo.classList.remove('text-gray-500');
        } else {
            fileInfo.textContent = input.required ? 'Click to upload' : 'Optional';
            fileInfo.classList.remove('font-medium', 'text-primary-600');
            fileInfo.classList.add('text-gray-500');
        }
    }

    // Form validation
    function validateForm() {
        var editorData = CKEDITOR.instances.editor.getData();
        document.querySelector('textarea[name="Disc_tg"]').value = editorData;
        
        if (!editorData.trim()) {
            alert('Please enter blog content');
            return false;
        }
        
        return true;
    }

    // Initialize file names display
    document.querySelectorAll('.file-input').forEach(input => {
        if (input.files && input.files.length > 0) {
            showFileName(input);
        }
    });
</script>