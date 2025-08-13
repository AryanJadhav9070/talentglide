                                                                        
                                                                        <?php include 'leftasidde.php'; ?>

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
                                                                            </style>
                                                                        </head>

                                                                            

                                                                            <div class="bg-white rounded-xl w-full max-w-4xl p-8 shadow-lg" style="margin: 2%;">
                                                                                <!-- Header with back button and title -->
                                                                                <div class="flex items-center mb-8">
                                                                                    <a href="#" class="mr-4 p-2 rounded-full bg-gray-100 hover:bg-gray-200 transition">
                                                                                        <i class="fas fa-arrow-left text-gray-700"></i>
                                                                                    </a>
                                                                                    <div>
                                                                                        <h1 class="text-2xl font-bold text-gray-800">Create New Blog Post</h1>
                                                                                        <p class="text-gray-500">Fill in the details below to publish your blog</p>
                                                                                    </div>
                                                                                </div>

                                                                                <form action="save_blog.php" method="POST" enctype="multipart/form-data" class="space-y-6" onsubmit="return validateForm()">

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
                                                                                                    class="pl-10 w-full p-3 rounded-lg bg-gray-50 border border-gray-200 text-gray-700 placeholder-gray-400 focus:outline-none input-focus-effect transition"></textarea>
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
                                                                                                    class="pl-10 w-full p-3 rounded-lg bg-gray-50 border border-gray-200 text-gray-700 placeholder-gray-400 focus:outline-none input-focus-effect transition"></textarea>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <!-- Description with CKEditor -->
                                                                                    <div>
                                                                                        <label class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                                                                                        <textarea name="Disc_tg" id="editor" rows="4" placeholder="Write your blog content here..." required
                                                                                            class="hidden"></textarea>
                                                                                        <div id="editor-container"></div>
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
                                                                                            <p class="text-xs text-gray-500 file-info">Click to upload</p>
                                                                                        </div>
                                                                                        <input type="file" name="image_blog_grid_main" accept="image/*" required
                                                                                            class="absolute inset-0 w-full h-full opacity-0 cursor-pointer file-input"
                                                                                            onchange="showFileName(this)">
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <!-- Additional Image 1 -->
                                                                            <div>
                                                                                <label class="block text-sm font-medium text-gray-700 mb-2">Additional Image</label>
                                                                                <div class="relative group">
                                                                                    <div class="flex flex-col items-center justify-center w-full h-32 rounded-lg border-2 border-dashed border-gray-300 hover:border-primary-500 transition cursor-pointer bg-gray-50">
                                                                                        <div class="text-center">
                                                                                            <i class="fas fa-image text-2xl text-primary-500 mb-2"></i>
                                                                                            <p class="text-xs text-gray-500 file-info">Optional</p>
                                                                                        </div>
                                                                                        <input type="file" name="additional_img_1" accept="image/*"
                                                                                            class="absolute inset-0 w-full h-full opacity-0 cursor-pointer file-input"
                                                                                            onchange="showFileName(this)">
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <!-- Additional Image 2 -->
                                                                            <div>
                                                                                <label class="block text-sm font-medium text-gray-700 mb-2">Additional Image</label>
                                                                                <div class="relative group">
                                                                                    <div class="flex flex-col items-center justify-center w-full h-32 rounded-lg border-2 border-dashed border-gray-300 hover:border-primary-500 transition cursor-pointer bg-gray-50">
                                                                                        <div class="text-center">
                                                                                            <i class="fas fa-image text-2xl text-primary-500 mb-2"></i>
                                                                                            <p class="text-xs text-gray-500 file-info">Optional</p>
                                                                                        </div>
                                                                                        <input type="file" name="additional_img_2" accept="image/*"
                                                                                            class="absolute inset-0 w-full h-full opacity-0 cursor-pointer file-input"
                                                                                            onchange="showFileName(this)">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <script>
                                                                            function showFileName(input) {
                                                                                // Find the file-info element within the same upload container
                                                                                const fileInfo = input.closest('.group').querySelector('.file-info');
                                                                                
                                                                                if (input.files && input.files.length > 0) {
                                                                                    // Display the filename
                                                                                    fileInfo.textContent = input.files[0].name;
                                                                                    fileInfo.classList.add('font-medium', 'text-primary-600');
                                                                                    fileInfo.classList.remove('text-gray-500');
                                                                                } else {
                                                                                    // Reset to default text
                                                                                    fileInfo.textContent = input.required ? 'Click to upload' : 'Optional';
                                                                                    fileInfo.classList.remove('font-medium', 'text-primary-600');
                                                                                    fileInfo.classList.add('text-gray-500');
                                                                                }
                                                                            }

                                                                            // Initialize for any pre-selected files (if needed)
                                                                            document.querySelectorAll('.file-input').forEach(input => {
                                                                                if (input.files && input.files.length > 0) {
                                                                                    showFileName(input);
                                                                                }
                                                                            });
                                                                        </script>

                                                                        <style>
                                                                            /* Optional: Add some styling for the file name display */
                                                                            .file-info {
                                                                                transition: all 0.2s ease;
                                                                                max-width: 90%;
                                                                                white-space: nowrap;
                                                                                overflow: hidden;
                                                                                text-overflow: ellipsis;
                                                                            }
                                                                        </style>

                                                                                    <!-- Action Buttons -->
                                                                                    <div class="flex flex-col sm:flex-row justify-end gap-4 pt-6">
                                                                                        <button type="button" class="px-6 py-3 rounded-lg border border-gray-300 text-gray-700 hover:bg-gray-50 transition">
                                                                                            Save Draft
                                                                                        </button>
                                                                                        <button type="submit" class="px-6 py-3 bg-primary-600 hover:bg-primary-700 text-white font-medium rounded-lg shadow-md transition flex items-center justify-center">
                                                                                            <i class="fas fa-paper-plane mr-2"></i> Publish Blog
                                                                                        </button>
                                                                                    </div>

                                                                                </form>
                                                                            </div>

                                                                            <script>
                                                                                // Initialize CKEditor
                                                                                CKEDITOR.replace('editor', {
                                                                                    // Custom configuration options
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
                                                                                    // Remove some plugins if you don't need them
                                                                                    removePlugins: 'elementspath',
                                                                                    resize_enabled: false,
                                                                                    // Set the editor height
                                                                                    height: 300,
                                                                                    // Custom styles
                                                                                    contentsCss: [
                                                                                        'https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css',
                                                                                        'body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif; font-size: 14px; line-height: 1.5; color: #374151; }'
                                                                                    ]
                                                                                });

                                                                                // Update the form textarea with CKEditor content before submission
                                                                                document.querySelector('form').addEventListener('submit', function() {
                                                                                    var editorData = CKEDITOR.instances.editor.getData();
                                                                                    document.querySelector('textarea[name="Disc_tg"]').value = editorData;
                                                                                });


                                                                                    // Add form validation before submission
                                                                            function validateForm() {
                                                                                // Get CKEditor content
                                                                                var editorData = CKEDITOR.instances.editor.getData();
                                                                                document.querySelector('textarea[name="Disc_tg"]').value = editorData;
                                                                                
                                                                                // Basic validation
                                                                                if (!editorData.trim()) {
                                                                                    alert('Please enter blog content');
                                                                                    return false;
                                                                                }
                                                                                
                                                                                return true;
                                                                            }
                                                                            </script>
