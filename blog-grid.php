<!DOCTYPE html><html><head>
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
        closeDropdowns() {
          this.activeDropdown = null;
        },
        init() {
          // Apply dark mode on page load if saved in localStorage
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
          
          // Close dropdowns when clicking outside
          document.addEventListener('click', (e) => {
            if (!e.target.closest('.nav-item') && !e.target.closest('.dropdown-menu') && !e.target.closest('.mobile-dropdown-toggle')) {
              this.closeDropdowns();
            }
          });
          
          // Reset activeDropdown when resizing to desktop
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

      <!-- Main Start -->
      <main>
        <section class="py-20">
          <div class="wrapper">
            <div class="mx-auto max-w-md text-center mb-14">
              <h2 class="text-4xl font-bold text-gray-800 mb-2 dark:text-white/90">
                Latest Posts & Blogs
              </h2>
              <p class="text-gray-700 text-base dark:text-gray-400">
                See all the latest posts & blogs we have ever written.
              </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
              <article class="overflow-hidden">
                <a href="blog-details.html" class="">
                  <img src="assets/images/blog/bt-1.jpg" alt="People collaborating on laptops" class="w-full h-48 object-cover rounded-[20px]">
                </a>
                <div class="mt-6">
                  <div class="flex items-center text-sm text-gray-500 mb-3">
                    <span class="dark:text-gray-400">By Anatoly</span>
                    <span class="mx-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" viewBox="0 0 6 6" fill="none">
                        <circle cx="3" cy="3.00177" r="3" fill="#98A2B3"></circle>
                      </svg>
                    </span>
                    <span class="dark:text-gray-400">July 12, 2025</span>
                  </div>
                  <h3 class="text-2xl font-semibold text-gray-800 dark:text-white/90 mb-3">
                    <a href="blog-details.html">
                      Why haven't we upscaled our web design agency
                    </a>
                  </h3>
                  <p class="text-gray-500 dark:text-gray-400">
                    Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed
                    non pharetra erat.
                  </p>
                </div>
              </article>
              <article class="overflow-hidden">
                <a href="blog-details.html" class="">
                  <img src="assets/images/blog/bt-2.jpg" alt="People collaborating on laptops" class="w-full h-48 object-cover rounded-[20px]">
                </a>
                <div class="mt-6">
                  <div class="flex items-center text-sm text-gray-500 mb-3">
                    <span class="dark:text-gray-400">By Anatoly</span>
                    <span class="mx-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" viewBox="0 0 6 6" fill="none">
                        <circle cx="3" cy="3.00177" r="3" fill="#98A2B3"></circle>
                      </svg>
                    </span>
                    <span class="dark:text-gray-400">July 12, 2025</span>
                  </div>
                  <h3 class="text-2xl font-semibold text-gray-800 dark:text-white/90 mb-3">
                    <a href="blog-details.html">
                      Why haven't we upscaled our web design agency
                    </a>
                  </h3>
                  <p class="text-gray-500 dark:text-gray-400">
                    Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed
                    non pharetra erat.
                  </p>
                </div>
              </article>
              <article class="overflow-hidden">
                <a href="blog-details.html" class="">
                  <img src="assets/images/blog/bt-3.jpg" alt="People collaborating on laptops" class="w-full h-48 object-cover rounded-[20px]">
                </a>
                <div class="mt-6">
                  <div class="flex items-center text-sm text-gray-500 mb-3">
                    <span class="dark:text-gray-400">By Anatoly</span>
                    <span class="mx-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" viewBox="0 0 6 6" fill="none">
                        <circle cx="3" cy="3.00177" r="3" fill="#98A2B3"></circle>
                      </svg>
                    </span>
                    <span class="dark:text-gray-400">July 12, 2025</span>
                  </div>
                  <h3 class="text-2xl font-semibold text-gray-800 dark:text-white/90 mb-3">
                    <a href="blog-details.html">
                      Why haven't we upscaled our web design agency
                    </a>
                  </h3>
                  <p class="text-gray-500 dark:text-gray-400">
                    Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed
                    non pharetra erat.
                  </p>
                </div>
              </article>
              <article class="overflow-hidden">
                <a href="blog-details.html" class="">
                  <img src="assets/images/blog/bt-4.jpg" alt="People collaborating on laptops" class="w-full h-48 object-cover rounded-[20px]">
                </a>
                <div class="mt-6">
                  <div class="flex items-center text-sm text-gray-500 mb-3">
                    <span class="dark:text-gray-400">By Anatoly</span>
                    <span class="mx-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" viewBox="0 0 6 6" fill="none">
                        <circle cx="3" cy="3.00177" r="3" fill="#98A2B3"></circle>
                      </svg>
                    </span>
                    <span class="dark:text-gray-400">July 12, 2025</span>
                  </div>
                  <h3 class="text-2xl font-semibold text-gray-800 dark:text-white/90 mb-3">
                    <a href="blog-details.html">
                      Why haven't we upscaled our web design agency
                    </a>
                  </h3>
                  <p class="text-gray-500 dark:text-gray-400">
                    Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed
                    non pharetra erat.
                  </p>
                </div>
              </article>
              <article class="overflow-hidden">
                <a href="blog-details.html" class="">
                  <img src="assets/images/blog/bt-5.jpg" alt="People collaborating on laptops" class="w-full h-48 object-cover rounded-[20px]">
                </a>
                <div class="mt-6">
                  <div class="flex items-center text-sm text-gray-500 mb-3">
                    <span class="dark:text-gray-400">By Anatoly</span>
                    <span class="mx-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" viewBox="0 0 6 6" fill="none">
                        <circle cx="3" cy="3.00177" r="3" fill="#98A2B3"></circle>
                      </svg>
                    </span>
                    <span class="dark:text-gray-400">July 12, 2025</span>
                  </div>
                  <h3 class="text-2xl font-semibold text-gray-800 dark:text-white/90 mb-3">
                    <a href="blog-details.html">
                      Why haven't we upscaled our web design agency
                    </a>
                  </h3>
                  <p class="text-gray-500 dark:text-gray-400">
                    Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed
                    non pharetra erat.
                  </p>
                </div>
              </article>
              <article class="overflow-hidden">
                <a href="blog-details.html" class="">
                  <img src="assets/images/blog/bt-6.jpg" alt="People collaborating on laptops" class="w-full h-48 object-cover rounded-[20px]">
                </a>
                <div class="mt-6">
                  <div class="flex items-center text-sm text-gray-500 mb-3">
                    <span class="dark:text-gray-400">By Anatoly</span>
                    <span class="mx-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" viewBox="0 0 6 6" fill="none">
                        <circle cx="3" cy="3.00177" r="3" fill="#98A2B3"></circle>
                      </svg>
                    </span>
                    <span class="dark:text-gray-400">July 12, 2025</span>
                  </div>
                  <h3 class="text-2xl font-semibold text-gray-800 dark:text-white/90 mb-3">
                    <a href="blog-details.html">
                      Why haven't we upscaled our web design agency
                    </a>
                  </h3>
                  <p class="text-gray-500 dark:text-gray-400">
                    Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed
                    non pharetra erat.
                  </p>
                </div>
              </article>
              <article class="overflow-hidden">
                <a href="blog-details.html" class="">
                  <img src="assets/images/blog/bt-7.jpg" alt="People collaborating on laptops" class="w-full h-48 object-cover rounded-[20px]">
                </a>
                <div class="mt-6">
                  <div class="flex items-center text-sm text-gray-500 mb-3">
                    <span class="dark:text-gray-400">By Anatoly</span>
                    <span class="mx-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" viewBox="0 0 6 6" fill="none">
                        <circle cx="3" cy="3.00177" r="3" fill="#98A2B3"></circle>
                      </svg>
                    </span>
                    <span class="dark:text-gray-400">July 12, 2025</span>
                  </div>
                  <h3 class="text-2xl font-semibold text-gray-800 dark:text-white/90 mb-3">
                    <a href="blog-details.html">
                      Why haven't we upscaled our web design agency
                    </a>
                  </h3>
                  <p class="text-gray-500 dark:text-gray-400">
                    Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed
                    non pharetra erat.
                  </p>
                </div>
              </article>
              <article class="overflow-hidden">
                <a href="blog-details.html" class="">
                  <img src="assets/images/blog/bt-8.jpg" alt="People collaborating on laptops" class="w-full h-48 object-cover rounded-[20px]">
                </a>
                <div class="mt-6">
                  <div class="flex items-center text-sm text-gray-500 mb-3">
                    <span class="dark:text-gray-400">By Anatoly</span>
                    <span class="mx-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" viewBox="0 0 6 6" fill="none">
                        <circle cx="3" cy="3.00177" r="3" fill="#98A2B3"></circle>
                      </svg>
                    </span>
                    <span class="dark:text-gray-400"> July 12, 2025</span>
                  </div>
                  <h3 class="text-2xl font-semibold text-gray-800 dark:text-white/90 mb-3">
                    <a href="blog-details.html">
                      Why haven't we upscaled our web design agency
                    </a>
                  </h3>
                  <p class="text-gray-500 dark:text-gray-400">
                    Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed
                    non pharetra erat.
                  </p>
                </div>
              </article>
              <article class="overflow-hidden">
                <a href="blog-details.html" class="">
                  <img src="assets/images/blog/bt-9.jpg" alt="People collaborating on laptops" class="w-full h-48 object-cover rounded-[20px]">
                </a>
                <div class="mt-6">
                  <div class="flex items-center text-sm text-gray-500 mb-3">
                    <span class="dark:text-gray-400">By Anatoly</span>
                    <span class="mx-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" viewBox="0 0 6 6" fill="none">
                        <circle cx="3" cy="3.00177" r="3" fill="#98A2B3"></circle>
                      </svg>
                    </span>
                    <span class="dark:text-gray-400">July 12, 2025</span>
                  </div>
                  <h3 class="text-2xl font-semibold text-gray-800 dark:text-white/90 mb-3">
                    <a href="blog-details.html">
                      Why haven't we upscaled our web design agency
                    </a>
                  </h3>
                  <p class="text-gray-500 dark:text-gray-400">
                    Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed
                    non pharetra erat.
                  </p>
                </div>
              </article>
            </div>

            <div class="flex justify-center mt-14 items-center space-x-2">
              <!-- Previous button -->
              <button class="px-4 h-10 py-2 border border-gray-300 shadow-theme-xs rounded-lg inline-flex justify-center items-center text-sm font-medium text-gray-700 bg-white dark:hover:bg-gray-900 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800 hover:bg-gray-50">
                Previous
              </button>

              <!-- Page 1 (active) -->
              <button class="px-4 py-2 size-10 rounded-md text-sm font-medium inline-flex justify-center items-center text-white bg-primary-500 hover:bg-primary-600">
                1
              </button>

              <!-- Page 2 -->
              <button class="px-4 py-2 size-10 inline-flex justify-center items-center hover:bg-gray-100 dark:hover:bg-gray-800 rounded-md text-sm font-medium text-gray-700 dark:text-gray-400">
                2
              </button>

              <!-- Page 3 -->
              <button class="px-4 py-2 size-10 inline-flex justify-center items-center hover:bg-gray-100 dark:hover:bg-gray-800 rounded-md text-sm font-medium text-gray-700 dark:text-gray-400">
                3
              </button>

              <!-- Ellipsis -->
              <span class="px-2 py-2 text-gray-500 dark:text-gray-400 inline-flex justify-center items-center">
                ...
              </span>

              <!-- Page 8 -->
              <button class="px-4 py-2 size-10 inline-flex justify-center items-center hover:bg-gray-100 dark:hover:bg-gray-800 rounded-md text-sm font-medium text-gray-700 dark:text-gray-400">
                8
              </button>

              <!-- Page 9 -->
              <button class="px-4 py-2 size-10 inline-flex justify-center items-center hover:bg-gray-100 dark:hover:bg-gray-800 rounded-md text-sm font-medium text-gray-700 dark:text-gray-400">
                9
              </button>

              <!-- Page 10 (appears twice in the reference image) -->
              <button class="px-4 py-2 size-10 inline-flex justify-center items-center hover:bg-gray-100 dark:hover:bg-gray-800 rounded-md text-sm font-medium text-gray-700 dark:text-gray-400">
                10
              </button>

              <button class="px-4 py-2 size-10 inline-flex justify-center items-center hover:bg-gray-100 dark:hover:bg-gray-800 rounded-md text-sm font-medium text-gray-700 dark:text-gray-400">
                10
              </button>

              <!-- Next button -->
              <button class="px-4 h-10 py-2 border border-gray-300 shadow-theme-xs rounded-lg inline-flex justify-center items-center text-sm font-medium text-gray-700 bg-white dark:hover:bg-gray-900 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800 hover:bg-gray-50">
                Next
              </button>
            </div>
          </div>
        </section>
      </main>
      <!-- Main End -->

      <?php include 'footer.html'; ?>
    </div>

    <script defer="" src="assets/js/alpine.min.js"></script>
    <script defer="" src="assets/js/glightbox.min.js"></script>
    <script defer="" src="assets/js/app.js"></script>
  <script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'966dc178cd183129',t:'MTc1MzgwNDA1Ni4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script>

</body></html>