<!DOCTYPE html><html><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/images/favicon.png">
    <title>Blog Details | AI Agent - AI UI Kit</title>
    <link href="assets/css/glightbox.css" rel="stylesheet">
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
        <section class="pt-20 pb-28">
          <div class="wrapper">
            <div class="max-w-[642px] mx-auto text-center">
              <h1 class="mb-5 font-bold text-gray-800 text-3xl dark:text-white/90 md:text-5xl md:leading-[60px]">
                Generate your content with the power of AI
              </h1>
              <p class="text-gray-700 text-base mb-5 dark:text-gray-400">
                We work with ambitious start-up businesses through to large
                global organisations such as so we can tailor our services to
                suit your needs.
              </p>
              <div class="flex justify-center items-center text-sm text-gray-500 mb-3">
                <div class="flex gap-3 items-center">
                  <img src="assets/images/blog/user.png" class="size-10 rounded-full shrink-0" alt="">
                  <p class="text-gray-500 text-sm dark:text-gray-400">
                    Ashton Porter
                  </p>
                </div>
                <span class="mx-4">
                  <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" viewBox="0 0 6 6" fill="none">
                    <circle cx="3" cy="3.00177" r="3" fill="#98A2B3"></circle>
                  </svg>
                </span>
                <span class="dark:text-gray-400">July 5,2028</span>
                <span class="mx-4">
                  <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" viewBox="0 0 6 6" fill="none">
                    <circle cx="3" cy="3.00177" r="3" fill="#98A2B3"></circle>
                  </svg>
                </span>
                <span class="dark:text-gray-400">3 Comments</span>
              </div>
            </div>
            <div class="max-w-[980px] mx-auto my-10">
              <img src="assets/images/blog/blog-thumb.jpg" class="w-full rounded-[20px]" alt="">
            </div>
            <div class="max-w-[770px] mx-auto">
              <div class="space-y-3 mb-8">
                <p class="text-gray-700 text-base leading-7 dark:text-gray-400">
                  As discussed in the introduction post, one of the best things
                  about Ghost is just how much you can customize to turn your
                  site into something unique. Everything about your layout and
                  design can be changed, so you're not stuck with yet another
                  clone of a social network profile.
                </p>
                <p class="text-gray-700 text-base leading-7 dark:text-gray-400">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla
                  id quam at justo ullamcorper vulputate. Donec mattis aliquam
                  urna, sed placerat dolor volutpat vel. Maecenas posuere sem
                  purus, quis feugiat.
                </p>
                <p class="text-gray-700 text-base leading-7 dark:text-gray-400">
                  Sed ullamcorper dui at risus viverra, nec cursus leo
                  ullamcorper. Class aptent taciti sociosqu ad litora torquent
                  per conubia nostra, per inceptos himenaeos.
                </p>
                <p class="text-gray-700 text-base leading-7 dark:text-gray-400">
                  Curabitur pretium, libero vitae pharetra rhoncus, tellus urna
                  auctor orci, eu dictum diam diam nec neque. Pellentesque
                  habitant morbi tristique senectus et netus et malesuada fames
                  ac turpis egestas. Fusce congue dui nec dui lobortis maximus.
                  Morbi bibendum, nisi vel cursus.
                </p>
                <p class="text-gray-700 text-base leading-7 dark:text-gray-400">
                  Adipiscing elit. Nulla id quam at justo ullamcorper vulputate.
                  Donec mattis aliquam urna, sed placerat dolor volutpat vel.
                  Maecenas quis feugiat.
                </p>
              </div>
              <div class="mb-10">
                <h2 class="text-2xl font-bold text-gray-700 mb-4 dark:text-white/90">
                  Quisque rutrum varius lobortis
                </h2>
                <p class="text-gray-700 text-base leading-7 mb-4 dark:text-gray-400">
                  Sed ullamcorper dui at risus viverra, nec cursus leo
                  ullamcorper. Class aptent taciti sociosqu ad litora torquent
                  per conubia nostra, per inceptos himenaeos.
                </p>
                <p class="text-gray-700 text-base leading-7 mb-4 dark:text-gray-400">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla
                  id quam at justo ullamcorper vulputate. Donec mattis aliquam
                  urna, sed placerat dolor volutpat vel. Maecenas posuere sem
                  purus, quis feugiat.
                </p>
                <p class="text-gray-700 text-base leading-7 dark:text-gray-400">
                  As discussed in the introduction post, one of the best things
                  about Ghost is just how much you can customize to turn your
                  site into something unique. Everything about your layout and
                  design can be changed, so you're not stuck with yet another
                  clone of a social network profile.
                </p>
              </div>
              <ul class="list-inside list-disc mb-10 space-y-3">
                <li class="text-gray-700 text-base leading-7 dark:text-gray-400">
                  Introduction post, one of the best things about Ghost is just
                  how much you can netus et malesuada fames ac turpis egestas.
                  Fusce congue dui nec dui lobortis maximus.
                </li>
                <li class="text-gray-700 text-base leading-7 dark:text-gray-400">
                  how much you can netus et malesuada another clone of a social
                  network profile.
                </li>
                <li class="text-gray-700 text-base leading-7 dark:text-gray-400">
                  Sed ullamcorper dui at risus viverra, nec cursus leo
                  ullamcorper. Class aptent taciti sociosqu ad litora torquent
                  per conubia nostra, per inceptos himenaeos.
                </li>
                <li class="text-gray-700 text-base leading-7 dark:text-gray-400">
                  Libero vitae pharetra rhoncus, tellus urna auctor orci, eu
                  dictum diam
                </li>
              </ul>
              <div class="mb-10">
                <blockquote class="bg-gray-100 dark:bg-white/10 dark:text-gray-400 rounded-r-xl font-medium text-base leading-7 text-gray-700 border-l-3 border-primary-500 py-5 px-8">
                  “Success is not a destination. Success is a decision you make
                  on a daily, hourly, and even moment-to-moment basis.” —
                  Nicolas Cole
                </blockquote>
              </div>
              <div class="mb-10">
                <h2 class="text-2xl font-bold text-gray-700 mb-4 dark:text-white/90">
                  One of the best things
                </h2>
                <p class="text-gray-700 text-base leading-7 mb-4 dark:text-gray-400">
                  Sed ullamcorper dui at risus viverra, nec cursus leo
                  ullamcorper. Class aptent taciti sociosqu ad litora torquent
                  per conubia nostra, per cursus himenaeos.
                </p>
                <p class="text-gray-700 text-base leading-7 mb-4 dark:text-gray-400">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla
                  id quam at justo ullamcorper vulputate. Donec mattis aliquam
                  urna, sed placerat dolor volutpat vel. Maecenas posuere sem
                  purus, quis feugiat.
                </p>
                <p class="text-gray-700 text-base leading-7 dark:text-gray-400">
                  As discussed in the introduction post, one of the best things
                  about Ghost is just how much you can customize to turn your
                  site into something unique. Everything about your layout and
                  design can be changed, so you're not stuck with yet another
                  clone of a social network profile.
                </p>
              </div>
              <div class="grid grid-cols-2 gap-8">
                <img src="assets/images/blog/blog-thumb-md-1.png" class="w-full rounded-xl" alt="">
                <img src="assets/images/blog/blog-thumb-md-2.png" class="rounded-xl w-full" alt="">
              </div>
              <div class="mt-8">
                <p class="text-gray-700 text-base leading-7 mb-4 dark:text-gray-400">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla
                  id quam at justo ullamcorper vulputate. Donec mattis aliquam
                  urna, sed placerat dolor volutpat vel. Maecenas posuere sem
                  purus, quis feugiat.
                </p>
                <p class="text-gray-700 text-base leading-7 dark:text-gray-400">
                  As discussed in the introduction post, one of the best things
                  about Ghost is just how much you can customize to turn your
                  site into something unique. Everything about your layout and
                  design can be changed, so you're not stuck with yet another
                  clone of a social network profile.
                </p>
              </div>
              <div class="mt-14">
                <div class="flex gap-4 items-center">
                  <p class="text-gray-800 text-sm dark:text-white/90">
                    Share Post:
                  </p>
                  <div>
                    <a href="" class="w-10 dark:text-gray-400 h-10 inline-flex rounded-full dark:bg-white/10 bg-transparent items-center justify-center hover:bg-primary-500 hover:text-white transition-colors">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                        <g clip-path="url(#clip0_9213_5355)">
                          <path d="M13.4 13.825H15.4L16.2 10.625H13.4V9.025C13.4 8.2015 13.4 7.425 15 7.425H16.2V4.73708C15.9395 4.70248 14.9544 4.625 13.9144 4.625C11.7428 4.625 10.2 5.95049 10.2 8.38477V10.625H7.80005V13.825H10.2V20.625H13.4V13.825Z" fill="currentColor"></path>
                        </g>
                        <defs>
                          <clipPath id="clip0_9213_5355">
                            <rect width="24" height="24" fill="currentColor" transform="translate(0 0.625)"></rect>
                          </clipPath>
                        </defs>
                      </svg>
                    </a>
                    <a href="" class="w-10 dark:text-gray-400 h-10 inline-flex dark:bg-white/10 rounded-full bg-transparent items-center justify-center hover:bg-primary-500 hover:text-white transition-colors">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                        <g clip-path="url(#clip0_9213_5359)">
                          <path d="M9.09091 5.35229H4L10.0079 13.3628L4.32724 19.8977H6.25453L10.9006 14.553L14.9091 19.8977H20L13.7394 11.5503L19.1273 5.35229H17.2001L12.8468 10.3601L9.09091 5.35229Z" fill="currentColor"></path>
                        </g>
                        <defs>
                          <clipPath id="clip0_9213_5359">
                            <rect width="24" height="24" fill="currentColor" transform="translate(0 0.625)"></rect>
                          </clipPath>
                        </defs>
                      </svg>
                    </a>
                    <a href="" class="w-10 h-10 inline-flex dark:text-gray-400 dark:bg-white/10 rounded-full bg-transparent items-center justify-center hover:bg-primary-500 hover:text-white transition-colors">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                        <g clip-path="url(#clip0_9213_5363)">
                          <path d="M7.35785 6.74924C7.35754 7.43282 6.94282 8.04795 6.30925 8.30458C5.67569 8.56122 4.94979 8.4081 4.47385 7.91744C3.9979 7.42677 3.86696 6.69654 4.14277 6.07108C4.41858 5.44563 5.04605 5.04983 5.72931 5.07034C6.63682 5.09758 7.35826 5.84133 7.35785 6.74924ZM7.40821 9.67053H4.05041V20.1804H7.40821V9.67053ZM12.7136 9.67053H9.37253V20.1804H12.68V14.6652C12.68 11.5929 16.6842 11.3074 16.6842 14.6652V20.1804H20V13.5236C20 8.3442 14.0735 8.53727 12.68 11.0808L12.7136 9.67053Z" fill="currentColor"></path>
                        </g>
                        <defs>
                          <clipPath id="clip0_9213_5363">
                            <rect width="24" height="24" fill="currentColor" transform="translate(0 0.625)"></rect>
                          </clipPath>
                        </defs></svg></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
      <!-- Main End -->

       <?php include 'footer.html'; ?>
    </div>

    <!-- Main End -->
    <script defer="" src="assets/js/alpine.min.js"></script>
    <script defer="" src="assets/js/glightbox.min.js"></script>
    <script defer="" src="assets/js/app.js"></script>
  <script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'966dc2e2e889cf10',t:'MTc1MzgwNDExNC4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script>

</body></html>