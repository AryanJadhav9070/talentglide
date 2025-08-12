<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Talent Glide | Dashboard</title>
    <!-- Include Tailwind CSS via CDN for styling -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Include Alpine.js via CDN for interactivity -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        /* Custom CSS for a clean, modern look */
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap');
        body {
            font-family: 'Inter', sans-serif;
        }

        .gradient-bg-two {
            background-image: linear-gradient(to right, #FF58D5, #FFA0E7);
        }
        
        .hero-glow-bg {
            background-image: radial-gradient(circle at 50% 100%, rgba(78, 110, 255, 0.2), rgba(255, 255, 255, 0));
        }

        .gradient-border {
            position: relative;
            z-index: 1;
            padding: 2px;
            border-radius: 9999px; /* This makes it a pill shape */
            background: linear-gradient(90deg, #FF58D5 0%, #B5A2FF 100%);
        }

        /* The original code used these gradient colors, so I've recreated them here. */
        .core-feature-icon {
            background-image: linear-gradient(135deg, #7A5AF8, #B5A2FF);
            padding: 10px;
            border-radius: 12px;
        }
    </style>
</head>
<body x-data="{ mobileMenuOpen: false, activePage: 'dashboard' }" class="bg-gray-100 text-gray-800 transition-colors duration-300">

    
        
        <!-- Sidebar - hidden on mobile, shown on desktop -->
        <!-- The sidebar is fixed, and uses Alpine.js to toggle its visibility on mobile devices -->
        <aside class="fixed inset-y-0 left-0 w-64 bg-white shadow-lg transform lg:translate-x-0 transition-transform duration-300 ease-in-out z-50"
               :class="{ '-translate-x-full': !mobileMenuOpen, 'translate-x-0': mobileMenuOpen }">
            <div class="p-6">
                <!-- Logo -->
                <a href="#" class="flex items-center space-x-2">
                    <img src="https://placehold.co/40x40/7A5AF8/FFFFFF?text=TG" alt="Logo" class="rounded-lg">
                    <span class="text-xl font-bold">TalentGlide</span>
                </a>
            </div>
            
            <!-- Navigation links -->
            <nav class="mt-6">
                <!-- Each link uses Alpine.js to set the active page and apply a different style -->
<a href="dashboard_details.php" 
   class="flex items-center py-2 px-6 hover:bg-gray-100 transition-colors duration-200"
   :class="{ 
       'border-l-4 border-purple-500 font-bold text-purple-700 bg-gray-100': activePage === 'Blogs', 
       'text-gray-600': activePage !== 'Blogs' 
   }">
    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
              d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h2a2 2 0 002-2v-3.328a7 7 0 00-2.344-4.648A7 7 0 0012 5.292a7 7 0 00-2.344 4.648A7 7 0 008 17.672V21h8">
        </path>
    </svg>
    Dashboard
</a>


<a href="add_blogtg.php" 
   class="flex items-center py-2 px-6 hover:bg-gray-100 transition-colors duration-200"
   :class="{ 
       'border-l-4 border-purple-500 font-bold text-purple-700 bg-gray-100': activePage === 'Blogs', 
       'text-gray-600': activePage !== 'Blogs' 
   }">
    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
              d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h2a2 2 0 002-2v-3.328a7 7 0 00-2.344-4.648A7 7 0 0012 5.292a7 7 0 00-2.344 4.648A7 7 0 008 17.672V21h8">
        </path>
    </svg>
    Blogs
</a>



                <a href="#" @click.prevent="activePage = 'jobposts'; mobileMenuOpen = false" 
                   class="flex items-center py-2 px-6 hover:bg-gray-100 transition-colors duration-200"
                   :class="{ 'border-l-4 border-purple-500 font-bold text-purple-700 bg-gray-100': activePage === 'jobposts', 'text-gray-600': activePage !== 'jobposts' }">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M10 12h.01"></path></svg>
                    Job Posts
                </a>
            </nav>
        </aside>

        </div>
    </div>