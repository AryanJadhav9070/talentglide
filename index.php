<!DOCTYPE html><html><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/images/favicon.png">
    <link href="assets/css/glightbox.css" rel="stylesheet">
    <link href="assets/css/output.css" rel="stylesheet">
    <title>Talent Glide | Best staffing agency in North America</title>
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
    <div class="dark:bg-dark-primary">
      
    <?php include 'header.html';?>

      <!-- Main Start -->
      <main>
        <!-- Hero Start -->
        <section class="pt-16 relative overflow-hidden">
          <div class="wrapper">
            <div class="max-w-[800px] mx-auto">
              <div class="text-center pb-16">
                <div class="rounded-full mb-6 h-10 gradient-border inline-flex items-center">
                  <div class="bg-white dark:bg-dark-primary py-2 text-sm items-center gap-2 px-5 inline-flex dark:text-white/90 rounded-full z-10 relative">
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M15.1699 0.58575C14.9429 -0.19525 13.7499 -0.19525 13.5229 0.58575L13.2029 1.69275C12.5109 4.07875 11.5669 5.94175 8.99994 6.58375L7.80794 6.88175C7.63097 6.91697 7.47168 7.01246 7.35721 7.15195C7.24274 7.29144 7.18018 7.4663 7.18018 7.64675C7.18018 7.8272 7.24274 8.00206 7.35721 8.14155C7.47168 8.28104 7.63097 8.37653 7.80794 8.41175L8.99994 8.70975C11.5669 9.35275 12.5109 11.2157 13.2029 13.6007L13.5229 14.7078C13.7499 15.4897 14.9429 15.4897 15.1699 14.7078L15.4899 13.6007C16.1819 11.2157 17.1269 9.35275 19.6939 8.71075L20.8839 8.41175C21.0609 8.37653 21.2202 8.28104 21.3347 8.14155C21.4491 8.00206 21.5117 7.8272 21.5117 7.64675C21.5117 7.4663 21.4491 7.29144 21.3347 7.15195C21.2202 7.01246 21.0609 6.91697 20.8839 6.88175L19.6939 6.58375C17.1269 5.94175 16.1819 4.07875 15.4899 1.69375L15.1699 0.58575Z" fill="url(#paint0_linear_9274_1469)"></path>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5.28304 11.8368C5.14704 11.3488 4.43104 11.3488 4.29604 11.8368L4.10304 12.5288C3.68805 14.0188 3.12205 15.1838 1.58104 15.5858L0.867045 15.7718C0.759268 15.7971 0.663206 15.8581 0.594451 15.9448C0.525695 16.0316 0.488281 16.1391 0.488281 16.2498C0.488281 16.3605 0.525695 16.4679 0.594451 16.5547C0.663206 16.6415 0.759268 16.7025 0.867045 16.7278L1.58104 16.9148C3.12104 17.3158 3.68805 18.4808 4.10304 19.9708L4.29604 20.6628C4.43104 21.1518 5.14704 21.1518 5.28304 20.6628L5.47605 19.9708C5.89005 18.4808 6.45805 17.3158 7.99804 16.9148L8.71204 16.7278C8.81982 16.7025 8.91588 16.6415 8.98464 16.5547C9.05339 16.4679 9.09081 16.3605 9.09081 16.2498C9.09081 16.1391 9.05339 16.0316 8.98464 15.9448C8.91588 15.8581 8.81982 15.7971 8.71204 15.7718L7.99804 15.5858C6.45805 15.1848 5.89005 14.0198 5.47605 12.5288L5.28304 11.8368Z" fill="url(#paint1_linear_9274_1469)"></path>
                      <defs>
                        <linearGradient id="paint0_linear_9274_1469" x1="7.18018" y1="0" x2="21.5117" y2="15.2943" gradientUnits="userSpaceOnUse">
                          <stop stop-color="#FF58D5"></stop>
                          <stop offset="1" stop-color="#FFA0E7"></stop>
                        </linearGradient>
                        <linearGradient id="paint1_linear_9274_1469" x1="9.09081" y1="11.4708" x2="0.488281" y2="21.0295" gradientUnits="userSpaceOnUse">
                          <stop stop-color="#7A5AF8"></stop>
                          <stop offset="1" stop-color="#B5A2FF"></stop>
                        </linearGradient>
                      </defs>
                    </svg>
                    <p>Looking for top staffing firm?</p>
                  </div>
                </div>
                <h1 class="text-gray-700 mx-auto font-bold mb-4 text-4xl sm:text-[50px] dark:text-white/90 sm:leading-[64px] max-w-[700px]">
                  Connecting Elite Talent with Leading Employers Across US, Canada and India

                </h1>
                <p class="max-w-[537px] text-center mx-auto dark:text-gray-400 text-gray-500 text-base">
               We help companies across the U.S. , Canada and India hire top-tier professionals — faster, smarter, and with unmatched precision.               </p>
                <div class="mt-9 flex sm:flex-row flex-col gap-3 relative z-30 items-center justify-center">
                
                  <a href="https://www.youtube.com/watch?v=_iHmNaQBtKk" class="rounded-full video-popup flex h-12 gap-3 items-center text-sm border bg-white dark:bg-white/10 dark:border-white/[0.05] dark:text-white border-gray-100 p-1.5 pr-6">
                    <span class="size-9 rounded-full gradient-bg-two inline-flex items-center justify-center text-sm font-medium">
                      <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.5 3.71077L3.5 12.3482C3.5 13.5211 4.78545 14.2402 5.78489 13.6265L12.8183 9.30776C13.7717 8.7223 13.7717 7.33672 12.8183 6.75125L5.7849 2.43251C4.78545 1.81882 3.5 2.53795 3.5 3.71077Z" fill="white"></path>
                      </svg>
                    </span>
                    Watch Intro
                  </a>
                </div>
              </div>
            </div>
            <div class="max-w-[1000px] mx-auto relative">
              <div class="p-3 sm:p-[18px] relative z-30 rounded-[32px] border border-white/30 dark:border-white/10 bg-white/20">
                <img src="assets/images/hero/Gemini_Generated_Image_xaf884xaf884xaf8.png" alt="" class="w-full rounded-2xl block dark:hidden">
                <img src="assets/images/hero/Gemini_Generated_Image_xaf884xaf884xaf8.png" alt="" class="w-full rounded-2xl hidden dark:block">
              </div>
              <div class="absolute hidden lg:block z-10 -top-20 -translate-y-20 left-1/2 -translate-x-1/2">
                <svg width="1300" height="1001" viewBox="0 0 1300 1001" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g opacity="0.7" filter="url(#filter0_f_9279_7148)">
                    <circle cx="800" cy="500.03" r="300" fill="#4E6EFF"></circle>
                  </g>
                  <g opacity="0.3" filter="url(#filter1_f_9279_7148)">
                    <circle cx="500" cy="500.03" r="300" fill="#FF58D5"></circle>
                  </g>
                  <defs>
                    <filter id="filter0_f_9279_7148" x="300" y="0.029541" width="1000" height="1000" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                      <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                      <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
                      <feGaussianBlur stdDeviation="100" result="effect1_foregroundBlur_9279_7148"></feGaussianBlur>
                    </filter>
                    <filter id="filter1_f_9279_7148" x="0" y="0.029541" width="1000" height="1000" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                      <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                      <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
                      <feGaussianBlur stdDeviation="100" result="effect1_foregroundBlur_9279_7148"></feGaussianBlur>
                    </filter>
                  </defs>
                </svg>
              </div>
            </div>
          </div>
          <div class="hero-glow-bg w-full h-[670px] absolute z-10 bottom-0"></div>
          <div class="wrapper">
            <div class="max-w-[1016px] relative z-30 mx-auto pt-14 pb-16">
              <p class="text-center text-white/50 text-lg font-medium">
                Trusted by worlds largest companies including...
              </p>
              <div class="flex flex-wrap justify-center items-center gap-7 md:gap-14 mt-10">
                <img src="assets/images/brands/ConexisLogo Square Green-Black-V2.webp" class="opacity-70 transition hover:opacity-100" alt="" style="height:94px;">
                <img src="assets/images/brands/cropped-Stepuphr_logo_2021.webp" class="opacity-70 transition hover:opacity-100" alt="" style="height:64px;">
                <img src="assets/images/brands/PEAK_logo.webp" class="opacity-70 transition hover:opacity-100" alt="" style="height:94px;">
                <img src="assets/images/brands/totam_logo.webp" class="opacity-70 transition hover:opacity-100" alt="" style="height:64px;">
                <img src="assets/images/brands/vectornew1.webp" class="opacity-70 transition hover:opacity-100" alt="" style="height:54px;">
               
              </div>
            </div>
          </div>
          <!-- <div class="hidden lg:block">
            <img src="assets/images/hero/shape-left-1.svg" class="absolute top-14 left-16 floating-1" alt="">
            <img src="assets/images/hero/shape-left-2.svg" class="absolute left-[145px] top-[298px] floating-2" alt="">
            <img src="assets/images/hero/shape-right-1.svg" class="absolute right-16 top-[108px] floating-3" alt="">
            <img src="assets/images/hero/shape-right-2.svg" class="absolute top-[316px] right-[298px] floating-4" alt="">
          </div> -->
        </section>
        <!-- Hero End -->

        <!-- Core Feature Start -->
        <section class="py-28 bg-gray-50 dark:bg-white/[0.01]">
          <div class="wrapper">
            <div class="max-w-2xl mx-auto mb-12 text-center">
              <h2 class="mb-3 font-bold text-center text-gray-800 text-3xl dark:text-white/90 md:text-title-lg">
                Industries we serve
              </h2>
              <p class="max-w-xl mx-auto leading-6 text-gray-500 dark:text-gray-400">
Whether you’re a startup building your first team or an enterprise expanding into new regions—we’ve got you covered.              </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6 sm:gap-8">
              <div class="core-feature-wrapper bg-white p-9 border border-gray-200 dark:border-white/[0.03] dark:bg-white/[0.05]">
                <div class="core-feature-icon mb-9">
                  <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="white" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10l9-7 9 7M4 10h16v10H4V10zM8 21V10M16 21V10" />
</svg>

                </div>
                <h3 class="mb-4 text-gray-800 dark:text-white/90 font-bold text-xl md:text-2xl max-w-[312px]">
                  BFSI
                </h3>
                <p class="text-gray-500 max-w-[312px] dark:text-gray-400">
                  We deliver finance experts driving innovation, digital transformation, compliance, and customer success across BFSI firms.
                </p>
              </div>
              <div class="core-feature-wrapper bg-white p-9 border border-gray-200 dark:border-white/[0.03] dark:bg-white/[0.05]">
                <div class="core-feature-icon mb-9">
                 <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="white" stroke="currentColor" stroke-width="2"
  stroke-linecap="round" stroke-linejoin="round">
  <path d="M4 2v6a6 6 0 0 0 12 0V2" />
  <path d="M12 12v2a4 4 0 0 1-8 0v-2" />
  <circle cx="20" cy="10" r="2" />
  <path d="M20 12v2a4 4 0 0 1-4 4h-1" />
</svg>

                </div>
                <h3 class="mb-4 text-gray-800 dark:text-white/90 font-bold text-xl md:text-2xl max-w-[312px]">
                  Healthcare
                </h3>
                <p class="text-gray-500 max-w-[312px] dark:text-gray-400">
                 Providing healthcare professionals and tech talent supporting patient care, compliance, systems, and operational excellence.
                </p>
              </div>
              <div class="core-feature-wrapper bg-white p-9 border border-gray-200 dark:border-white/[0.03] dark:bg-white/[0.05]">
                <div class="core-feature-icon mb-9">
                 <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="white" stroke="currentColor"
  stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
  <circle cx="9" cy="21" r="1" />
  <circle cx="20" cy="21" r="1" />
  <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6" />
</svg>

                </div>
                <h3 class="mb-4 text-gray-800 dark:text-white/90 font-bold text-xl md:text-2xl max-w-[312px]">
                  Retails & Ecommerce
                </h3>
                <p class="text-gray-500 max-w-[312px] dark:text-gray-400">
                 Connecting brands with digital, logistics, and analytics talent to elevate retail and online commerce success.
                </p>
              </div>
              <div class="core-feature-wrapper bg-white p-9 border border-gray-200 dark:border-white/[0.03] dark:bg-white/[0.05]">
                <div class="core-feature-icon mb-9">
                  <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="white"
  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
  <path d="M20 17.58A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 4 16.25" />
  <path d="M12 12v1" />
  <path d="M12 17v1" />
  <path d="M14.6 13.5l-.5.87" />
  <path d="M9.4 13.5l.5.87" />
  <path d="M9.4 16.5l.5-.87" />
  <path d="M14.6 16.5l-.5-.87" />
  <circle cx="12" cy="15" r="2" />
</svg>

                </div>
                <h3 class="mb-4 text-gray-800 dark:text-white/90 font-bold text-xl md:text-2xl max-w-[312px]">
                  Saas Companies
                </h3>
                <p class="text-gray-500 max-w-[312px] dark:text-gray-400">
                 Scaling SaaS teams with engineers, product managers, and customer experts accelerating software growth journeys.
                </p>
              </div>
              <div class="core-feature-wrapper bg-white p-9 border border-gray-200 dark:border-white/[0.03] dark:bg-white/[0.05]">
                <div class="core-feature-icon mb-9">
                  <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="white"
  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
  <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4a2 2 0 0 0 1-1.73z" />
  <polyline points="3.27 6.96 12 12.01 20.73 6.96" />
  <line x1="12" y1="22.08" x2="12" y2="12" />
</svg>

                </div>
                <h3 class="mb-4 text-gray-800 dark:text-white/90 font-bold text-xl md:text-2xl max-w-[312px]">
                  Product based companies
                </h3>
                <p class="text-gray-500 max-w-[312px] dark:text-gray-400">
                 We source top talent for product design, development, scalability, innovation, and market-ready solutions.
                </p>
              </div>
              <div class="core-feature-wrapper bg-white p-9 border border-gray-200 dark:border-white/[0.03] dark:bg-white/[0.05]">
                <div class="core-feature-icon mb-9">
                 <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="white"
  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
  <path d="M3 21v-8l5 5V9l5 5V3l9 6v12H3z" />
  <path d="M18 21a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
  <path d="M18 18v.01" />
</svg>

                </div>
                <h3 class="mb-4 text-gray-800 dark:text-white/90 font-bold text-xl md:text-2xl max-w-[312px]">
                 Engineering & Manufacturing
                </h3>
                <p class="text-gray-500 max-w-[312px] dark:text-gray-400">
                 Supplying engineers and specialists for automation, production, design, and innovation in industrial development sectors.
                </p>
              </div>
            </div>
          </div>
        </section>
        <!-- Core Feature End -->

        <!-- Tab Start -->
        <section class="py-14 md:py-28 dark:bg-dark-primary">
          <div class="wrapper">
            <div class="max-w-2xl mx-auto mb-12 text-center">
              <h2 class="mb-3 font-bold text-center text-gray-800 dark:text-white/90 text-3xl md:text-title-lg">
                 Industry-Focused Staffing Solutions, Delivered with Precision.
              </h2>
              <p class="max-w-2xl mx-auto leading-6 text-gray-500 dark:text-gray-400">
                 At TalentGlide, we match top-tier professionals to your industry's unique demands—fast, reliable, and scalable.
              </p>
            </div>
            <div class="max-w-[1008px] mx-auto">
              <div x-data="{ activeTab: 'text' }">
                <!-- Tab Navigation -->
                <div class="flex flex-wrap sm:justify-center mx-auto gap-2 p-1 w-full mb-8 dark:bg-white/[0.05] bg-gray-100 rounded-2xl lg:rounded-full max-w-fit">
                  <button @click="activeTab = 'text'" :class="{ 'bg-white dark:text-white/90 dark:bg-white/10 text-gray-800': activeTab === 'text', 'text-gray-500 dark:text-gray-400 bg-transparent': activeTab !== 'text' }" class="flex items-center h-12 gap-2 px-4 py-3 text-sm font-medium transition-colors duration-200 rounded-full">
                   
                   IT Staffing
                  </button>

                  <button @click="activeTab = 'image'" :class="{ 'bg-white dark:text-white/90 dark:bg-white/10 text-gray-800': activeTab === 'image', 'text-gray-500 dark:text-gray-400 bg-transparent': activeTab !== 'image' }" class="flex items-center h-12 gap-2 px-4 py-3 text-sm font-medium transition-colors duration-200 rounded-full">
                    
                   Engineering & Manufacturing staffing
                  </button>

                  <button @click="activeTab = 'code'" :class="{ 'bg-white dark:text-white/90 dark:bg-white/10 text-gray-800': activeTab === 'code', 'text-gray-500 dark:text-gray-400 bg-transparent': activeTab !== 'code' }" class="flex items-center h-12 gap-2 px-4 py-3 text-sm font-medium transition-colors duration-200 rounded-full">
                    Healthcare Staffing
                  </button>

                 
                </div>

                <!-- Tab Content -->
                <div class="overflow-hidden tab-img-bg rounded-4xl">
                 
                  <div x-show="activeTab === 'text'" class="p-6">
                    <div class="p-3 tab-img-overlay">
                      <img src="assets/images/tab-image/2149241221.webp" alt="" class="w-full rounded-2xl block dark:hidden">
                      <img src="assets/images/tab-image/2149241221.webp" alt="" class="w-full rounded-2xl hidden dark:block">
                    </div>
                  </div>

                  
                  <div x-show="activeTab === 'image'" class="p-6" style="display: none">
                    <div class="p-3 tab-img-overlay">
                      <img src="assets/images/tab-image/4148.webp" alt="" class="w-full rounded-2xl block dark:hidden">
                      <img src="assets/images/tab-image/4148.webp" alt="" class="w-full rounded-2xl hidden dark:block">
                    </div>
                  </div>

                 
                  <div x-show="activeTab === 'code'" class="p-6" style="display: none">
                    <div class="p-3 tab-img-overlay">
                      <img src="assets/images/tab-image/successful-medical-team.webp" alt="" class="w-full rounded-2xl block dark:hidden">
                      <img src="assets/images/tab-image/successful-medical-team.webp" alt="" class="w-full rounded-2xl hidden dark:block">
                    </div>
                  </div>

                  
                </div>

                <!-- Bottom Section -->
                <div class="mt-6 text-center">
                  <h2 class="mb-2 text-xl font-bold text-gray-800 dark:text-white/90">
                     The Right Talent for Every Industry
                  </h2>
                  <p class="max-w-xl mx-auto mb-6 text-sm text-gray-500 dark:text-gray-400">
                     Whether you're scaling your tech team or staffing critical roles in healthcare or manufacturing—TalentGlide delivers results.
                  </p>
                  <button class="px-6 py-3 text-sm font-medium text-white transition-colors rounded-full bg-primary-500 hover:bg-primary-600">
                    Get a consultation now
                  </button>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Tab End -->

        <!-- Benefits Start -->
        <section class="bg-gray-900 py-14 md:py-28">
          <div class="wrapper">
            <div class="max-w-2xl mx-auto mb-12 text-center">
              <h2 class="max-w-lg mx-auto mb-3 font-bold text-center text-white dark:text-white/90 text-3xl md:text-title-lg">
                The key benefits of using our tools.
              </h2>
              <p class="max-w-2xl mx-auto text-base dark: font-normal leading-6 text-white/50">
                Unlock the Potential of Innovation. Discover the Advanced AI
                Tools Transforming Your Ideas into Reality with Unmatched
                Precision and Intelligence.
              </p>
            </div>
            <div class="max-w-[1008px] mx-auto">
              <div class="grid lg:grid-cols-12 gap-8">
                <div class="lg:col-span-6">
                  <div class="relative flex flex-col justify-between bg-primary-500 rounded-[20px] p-9 md:p-13">
                    <div class="max-w-sm mb-32">
                      <h3 class="font-bold text-white text-2xl md:text-3xl mb-4">
                      Build Elite Teams That Scale With You
                      </h3>
                      <p class="text-base text-white/70">
                      We connect high-performing professionals with companies that are shaping the future. From tech to healthcare, we’ve got the talent.
                      </p>
                    </div>
                    <div>
                     
                      <img src="assets/images/benefits/bn-1.svg" class="-mb-8 md:-mb-11" alt="">
                    </div>
                  </div>
                </div>
                <div class="lg:col-span-6">
                  <div class="benefits-bg rounded-[20px] p-12 overflow-hidden">
                    <div>
                      <img src="assets/images/benefits/bn-2.svg" alt="">
                    </div>
                    <div>
                      <h3 class="font-bold max-w-xs text-white text-2xl md:text-3xl mb-4">
                        Hire Faster, Smarter & With Confidence
                      </h3>
                      <p class="text-base max-w-sm text-white/70">
                        We pre-screen, verify, and match the best candidates — so you don’t have to waste time filtering.
                        Get. Set. Hire.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="lg:col-span-12">
                  <div class="lg:px-12 p-8 bg-[#2D0B70] lg:pb-0 lg:p-12 relative rounded-[20px] h-full lg:flex lg:flex-row justify-between bg-cover flex-col gap-5">
                    <div class="max-w-sm relative z-10">
                      <h3 class="font-bold text-white text-2xl md:text-3xl mb-4">
                       Your Next Great Hire is Just a Click Away
                      </h3>
                      <p class="text-base text-white/70 mb-8">
                       From entry-level to executive roles, TalentGlide helps you find the right people — fast. No noise, just results.
                      </p>
                      <a href="contact.html" class="font-medium inline-block text-sm text-white rounded-full bg-primary-500 hover:bg-primary-600 transition py-3 px-6">
                        Schedule a free hiring consultation
                      </a>
                    </div>
                    <div>
                      <img src="assets/images/benefits/29013792_7450160-removebg-preview.png" class="hidden lg:block relative z-10" alt="">
                    </div>
                    <img src="assets/images/benefits/blur-shape.png" alt="" class="h-full w-full -z-0 absolute top-0 right-0">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Benefits End -->

        <!-- Testimonial Start -->
        <section class="md:py-28 py-14 relative" x-data="{ showAll: false }">
          <div class="wrapper">
            <div>
              <div class="max-w-2xl mx-auto mb-12 text-center">
                <h2 class="mb-3 font-bold text-center text-gray-800 text-3xl dark:text-white/90 md:text-title-lg">
                  What our uses says
                </h2>
                <p class="max-w-xl mx-auto leading-6 text-gray-500 dark:text-gray-400">
                 Discover how TalentGlide is reshaping the future of staffing with intelligent tools, unmatched precision, and real-world impact. Our users trust us to transform ideas into results—and here’s what they have to say.
                </p>
              </div>

              <!-- Testimonials Grid -->
              <div class="grid grid-cols-1 gap-8 md:grid-cols-2 xl:grid-cols-3">

                <!-- Testimonial 1: Indian CEO -->
                <div class="p-2 bg-gray-50 dark:bg-white/5 dark:border-gray-800 dark:hover:border-white/10 border rounded-[20px] border-gray-100 hover:border-primary-200 transition">
                  <div class="flex items-center p-3 mb-3 bg-white/90 dark:bg-white/[0.03] rounded-2xl">
                    <div>
                      <img src="assets/images/users/145856969_0684456b-aa2b-4631-86f7-93ceaf33303c.svg" alt="Amit Sharma" class="w-[52px] h-[52px] ring-2 ring-white dark:ring-gray-700 mr-4 rounded-full drop-shadow-[0_8px_20px_rgba(0,0,0,0.08)]">
                    </div>
                    <div>
                      <h3 class="text-gray-800 font-base dark:text-white/90">Amit Sharma</h3>
                      <p class="text-sm text-gray-500 dark:text-gray-400">CEO, India</p>
                    </div>
                  </div>
                  <div class="p-5 rounded-2xl bg-white/90 dark:bg-white/[0.03]">
                    <p class="text-base leading-6 text-gray-700 dark:text-gray-400">
                      TalentGlide has been a game-changer for our hiring process. Their team truly understands what trust means in business. Every candidate we hired was pre-vetted and matched our needs perfectly. Highly recommended for anyone who values integrity and results.
                    </p>
                  </div>
                </div>

                <!-- Testimonial 2: US Founder -->
                <div class="p-2 bg-gray-50 dark:bg-white/5 dark:border-gray-800 dark:hover:border-white/10 border rounded-[20px] border-gray-100 hover:border-primary-200 transition">
                  <div class="flex items-center p-3 mb-3 dark:bg-white/[0.03] bg-white/90 rounded-2xl">
                    <div>
                      <img src="assets/images/users/145856969_0684456b-aa2b-4631-86f7-93ceaf33303c.svg" alt="Jessica Lee" class="w-[52px] h-[52px] ring-2 ring-white dark:ring-gray-700 mr-4 rounded-full drop-shadow-[0_8px_20px_rgba(0,0,0,0.08)]">
                    </div>
                    <div>
                      <h3 class="text-gray-800 font-base dark:text-white/90">Jessica Lee</h3>
                      <p class="text-sm text-gray-500 dark:text-gray-400">Founder, USA</p>
                    </div>
                  </div>
                  <div class="p-5 rounded-2xl bg-white/90 dark:bg-white/[0.03]">
                    <p class="text-base leading-6 text-gray-700 dark:text-gray-400">
                      As a founder, trust is everything. TalentGlide delivered on every promise and made our expansion seamless. Their transparent process and genuine care for our success set them apart from every other staffing partner we've tried.
                    </p>
                  </div>
                </div>

                <!-- Testimonial 3: Canadian CEO -->
                <div class="p-2 bg-gray-50 dark:bg-white/5 dark:border-gray-800 dark:hover:border-white/10 border rounded-[20px] border-gray-100 hover:border-primary-200 transition">
                  <div class="flex items-center p-3 mb-3 bg-white/90 rounded-2xl dark:bg-white/[0.03]">
                    <div>
                      <img src="assets/images/users/145856969_0684456b-aa2b-4631-86f7-93ceaf33303c.svg" alt="Sophie Martin" class="w-[52px] h-[52px] ring-2 ring-white dark:ring-gray-700 mr-4 rounded-full drop-shadow-[0_8px_20px_rgba(0,0,0,0.08)]">
                    </div>
                    <div>
                      <h3 class="text-gray-800 font-base dark:text-white/90">Sophie Martin</h3>
                      <p class="text-sm text-gray-500 dark:text-gray-400">CEO, Canada</p>
                    </div>
                  </div>
                  <div class="p-5 rounded-2xl bg-white/90 dark:bg-white/[0.03]">
                    <p class="text-base leading-6 text-gray-700 dark:text-gray-400">
                      Working with TalentGlide restored my faith in recruitment agencies. Their honesty and commitment to our goals made every step easy. I trust them to deliver the right talent every time.
                    </p>
                  </div>
                </div>

                <!-- Testimonial 4: Indian Founder -->
                <div class="p-2 bg-gray-50 dark:bg-white/5 dark:border-gray-800 dark:hover:border-white/10 border rounded-[20px] border-gray-100 hover:border-primary-200 transition">
                  <div class="flex items-center p-3 mb-3 bg-white/90 rounded-2xl dark:bg-white/[0.03]">
                    <div>
                      <img src="assets/images/users/145856969_0684456b-aa2b-4631-86f7-93ceaf33303c.svg" alt="Priya Desai" class="w-[52px] h-[52px] ring-2 ring-white dark:ring-gray-700 mr-4 rounded-full drop-shadow-[0_8px_20px_rgba(0,0,0,0.08)]">
                    </div>
                    <div>
                      <h3 class="text-gray-800 font-base dark:text-white/90">Priya Desai</h3>
                      <p class="text-sm text-gray-500 dark:text-gray-400">Founder, India</p>
                    </div>
                  </div>
                  <div class="p-5 rounded-2xl bg-white/90 dark:bg-white/[0.03]">
                    <p class="text-base leading-6 text-gray-700 dark:text-gray-400">
                      I value transparency and reliability, and TalentGlide exceeded my expectations. Their team is dedicated, responsive, and truly cares about building long-term relationships. I recommend them to anyone looking for trustworthy partners.
                    </p>
                  </div>
                </div>

                <!-- Testimonial 5: US CEO -->
                <div class="p-2 bg-gray-50 dark:bg-white/5 dark:border-gray-800 dark:hover:border-white/10 border rounded-[20px] border-gray-100 hover:border-primary-200 transition">
                  <div class="flex items-center p-3 mb-3 dark:bg-white/[0.03] bg-white/90 rounded-2xl">
                    <div>
                      <img src="assets/images/users/145856969_0684456b-aa2b-4631-86f7-93ceaf33303c.svg" alt="Michael Carter" class="w-[52px] h-[52px] ring-2 ring-white dark:ring-gray-700 mr-4 rounded-full drop-shadow-[0_8px_20px_rgba(0,0,0,0.08)]">
                    </div>
                    <div>
                      <h3 class="text-gray-800 font-base dark:text-white/90">Michael Carter</h3>
                      <p class="text-sm text-gray-500 dark:text-white">CEO, USA</p>
                    </div>
                  </div>
                  <div class="p-5 rounded-2xl bg-white/90 dark:bg-white/[0.03]">
                    <p class="text-base leading-6 text-gray-700 dark:text-gray-400">
                      The team at TalentGlide is professional and genuinely invested in our success. Their approach is honest and straightforward, making it easy to trust their recommendations. We’ve built a lasting partnership thanks to their integrity.
                    </p>
                  </div>
                </div>

                <!-- Testimonial 6: Canadian Founder -->
                <div class="p-2 bg-gray-50 dark:bg-white/5 dark:border-gray-800 dark:hover:border-white/10 border rounded-[20px] border-gray-100 hover:border-primary-200 transition">
                  <div class="flex items-center p-3 mb-3 dark:bg-white/[0.03] bg-white/90 rounded-2xl">
                    <div>
                      <img src="assets/images/users/145856969_0684456b-aa2b-4631-86f7-93ceaf33303c.svg" alt="Rajiv Singh" class="w-[52px] h-[52px] ring-2 ring-white dark:ring-gray-700 mr-4 rounded-full drop-shadow-[0_8px_20px_rgba(0,0,0,0.08)]">
                    </div>
                    <div>
                      <h3 class="text-gray-800 font-base dark:text-white/90">Rajiv Singh</h3>
                      <p class="text-sm text-gray-500 dark:text-gray-400">Founder, Canada</p>
                    </div>
                  </div>
                  <div class="p-5 rounded-2xl bg-white/90 dark:bg-white/[0.03]">
                    <p class="text-base leading-6 text-gray-700 dark:text-gray-400">
                      TalentGlide’s commitment to building trust is evident in every interaction. They listen, understand, and deliver exactly what we need. I appreciate their honesty and highly recommend their services.
                    </p>
                  </div>
                </div>

                <!-- Hidden testimonials (shown when "Show more" is clicked) -->
                <template x-if="showAll">
                  <!-- Testimonial 7 -->
                  <div class="p-2 bg-gray-50 dark:bg-white/5 dark:border-gray-800 dark:hover:border-white/10 border rounded-[20px] border-gray-100 hover:border-primary-200 transition">
                    <div class="flex items-center p-3 mb-3 bg-white/90 dark:bg-white/[0.03] rounded-2xl">
                      <div>
                        <img src="assets/images/users/145856969_0684456b-aa2b-4631-86f7-93ceaf33303c.svg" alt="Ralph Edwards" class="w-[52px] h-[52px] ring-2 ring-white dark:ring-gray-700 mr-4 rounded-full drop-shadow-[0_8px_20px_rgba(0,0,0,0.08)]">
                      </div>
                      <div>
                        <h3 class="text-gray-800 font-base dark:text-white/90">
                          Ralph Edwards
                        </h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400">
                          HR, USA
                        </p>
                      </div>
                    </div>
                    <div class="p-5 rounded-2xl bg-white/90 dark:bg-white/[0.03]">
                      <p class="text-base leading-6 text-gray-700 dark:text-gray-400">
                        As a Senior Software Developer I found TailAdmin perfect
                        write code that easy can be used in my projects, which
                        some are production already.
                      </p>
                    </div>
                  </div>
                </template>

                <template x-if="showAll">
                  <!-- Testimonial 8 -->
                  <div class="p-2 bg-gray-50 dark:bg-white/5 dark:border-gray-800 dark:hover:border-white/10 border rounded-[20px] border-gray-100 hover:border-primary-200 transition">
                    <div class="flex items-center p-3 mb-3 bg-white/90 dark:bg-white/[0.03] rounded-2xl">
                      <div>
                        <img src="assets/images/users/145856969_0684456b-aa2b-4631-86f7-93ceaf33303c.svg" alt="Ralph Edwards" class="w-[52px] h-[52px] ring-2 ring-white dark:ring-gray-700 mr-4 rounded-full drop-shadow-[0_8px_20px_rgba(0,0,0,0.08)]">
                      </div>
                      <div>
                        <h3 class="text-gray-800 font-base dark:text-white/90">
                          Darlene Robertson
                        </h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400">
                          Placement officer, Canada
                        </p>
                      </div>
                    </div>
                    <div class="p-5 rounded-2xl bg-white/90 dark:bg-white/[0.03]">
                      <p class="text-base leading-6 text-gray-700 dark:text-gray-400">
                        As a Senior Software Developer I found TailAdmin perfect
                        write code that easy can be used in my projects, which
                        some are production already.
                      </p>
                    </div>
                  </div>
                </template>

                <template x-if="showAll">
                  <!-- Testimonial 9 -->
                  <div class="p-2 bg-gray-50 dark:bg-white/5 dark:border-gray-800 dark:hover:border-white/10 border rounded-[20px] border-gray-100 hover:border-primary-200 transition">
                    <div class="flex items-center p-3 mb-3 bg-white/90 dark:bg-white/[0.03] rounded-2xl">
                      <div>
                        <img src="assets/images/users/145856969_0684456b-aa2b-4631-86f7-93ceaf33303c.svg" alt="Ralph Edwards" class="w-[52px] h-[52px] ring-2 ring-white dark:ring-gray-700 mr-4 rounded-full drop-shadow-[0_8px_20px_rgba(0,0,0,0.08)]">
                      </div>
                      <div>
                        <h3 class="text-gray-800 font-base dark:text-white/90">
                          Devon Lane
                        </h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400">
                          Co-Founder, USA
                        </p>
                      </div>
                    </div>
                    <div class="p-5 rounded-2xl bg-white/90 dark:bg-white/[0.03] d">
                      <p class="text-base leading-6 text-gray-700 dark:text-gray-400">
                        As a Senior Software Developer I found TailAdmin perfect
                        write code that easy can be used in my projects, which
                        some are production already.
                      </p>
                    </div>
                  </div>
                </template>
              </div>

              <!-- Show More Button -->
              <div class="mt-8 text-center relative z-10">
                <button @click="showAll = !showAll" class="inline-flex items-center dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 px-6 py-3.5 text-sm font-medium text-gray-800 bg-white border border-gray-200 dark:hover:bg-gray-900 rounded-full shadow-theme-xs hover:bg-gray-50 focus:outline-none">
                  <span x-text="showAll ? 'Show less...' : 'Show more...'">Show more...</span>
                </button>
              </div>
            </div>
          </div>
          <template x-if="!showAll">
            <div class="white-gradient h-[264px] w-full absolute bottom-0"></div>
          </template>
        </section>
        <!-- Testimonial End -->

        
        <!-- <section class="py-14 md:py-28 bg-gray-50 overflow-hidden dark:bg-white/[0.03]">
          <div class="wrapper">
            <div class="max-w-2xl mx-auto mb-12 text-center">
              <h2 class="mb-3 font-bold text-center text-gray-800 text-3xl dark:text-white/90 md:text-title-lg">
                Start Your Content Creation Journey with AI
              </h2>
              <p class="max-w-xl mx-auto leading-6 text-gray-500 dark:text-gray-400">
                Collaborate with AI to generate content that resonates with your
                audience, drives and delivers meaningful results across all
                platforms.
              </p>
            </div>

            <div x-data="{ annual: false }">
              
              <div class="flex justify-center relative z-30 mt-12">
                <div class="relative flex p-1 bg-white dark:bg-dark-primary rounded-full shadow-theme-xs">
                  <button @click="annual = false" :class="!annual ? 'bg-gray-800 dark:bg-white/[0.05]  text-white' : 'bg-transparent  dark:text-gray-400 text-gray-700'" class="relative px-6 py-2 text-sm font-medium transition-colors duration-200 rounded-full">
                    Monthly
                  </button>
                  <button @click="annual = true" class="relative flex items-center pl-6 pr-2 py-2 text-sm font-medium transition-colors duration-200 rounded-full" :class="annual ? 'bg-gray-800 text-white dark:bg-white/[0.05]' : 'bg-transparent text-gray-700 dark:text-gray-400'">
                    Annually
                    <span class="ml-2 bg-orange-400 text-white text-xs px-2 py-0.5 rounded-full">Save 20%</span>
                  </button>
                </div>
              </div>

              <div class="relative">
                
                <div class="mt-12 z-30 relative space-y-4 sm:mt-16 sm:space-y-0 sm:grid sm:grid-cols-2 sm:gap-6 lg:max-w-6xl lg:mx-auto lg:grid-cols-4">
                 
                  <div class="bg-white dark:bg-dark-primary rounded-[20px] shadow-one">
                    <div class="p-8">
                      <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-400">
                        Free
                      </h2>
                      <p class="flex items-baseline mt-4">
                        <span class="text-4xl font-semibold text-gray-800 dark:text-white/90">$0</span>
                        <span class="ml-1 text-sm font-normal text-gray-500 dark:text-gray-400">Per month</span>
                      </p>
                      <p class="mt-3 text-sm text-gray-500 dark:text-gray-400">
                        Sed ut perspiciatis unde omnis iste natus ut perspic
                        iatis.
                      </p>
                      <button class="block w-full px-8 py-3.5 dark:bg-dark-primary dark:text-white/90 transition dark:hover:bg-gray-800 dark:border-gray-800 mt-7 text-sm font-medium text-center text-gray-800 cursor-pointer bg-white border border-gray-200 rounded-full hover:bg-gray-50">
                        Try it for free
                      </button>
                    </div>
                    <div class="px-8 pb-7">
                      <ul class="space-y-3">
                        <li class="flex items-start">
                          <div class="flex-shrink-0 text-gray-500 dark:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                              <path d="M13.4017 5.2793L6.12172 12.5593L2.59839 9.036" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                          </div>
                          <p class="ml-2 text-sm text-gray-800 dark:text-white/90">
                            Some limited features only
                          </p>
                        </li>
                        <li class="flex items-start">
                          <div class="flex-shrink-0 text-gray-500 dark:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                              <path d="M13.4017 5.2793L6.12172 12.5593L2.59839 9.036" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                          </div>
                          <p class="ml-2 text-sm text-gray-800 dark:text-white/90">
                            400 messaging limits
                          </p>
                        </li>
                        <li class="flex items-start">
                          <div class="flex-shrink-0 text-gray-500 dark:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                              <path d="M13.4017 5.2793L6.12172 12.5593L2.59839 9.036" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                          </div>
                          <p class="ml-2 text-sm text-gray-800 dark:text-white/90">
                            Limited Projects
                          </p>
                        </li>
                        <li class="flex items-start">
                          <div class="flex-shrink-0 text-gray-500 dark:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                              <path d="M13.4017 5.2793L6.12172 12.5593L2.59839 9.036" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                          </div>
                          <p class="ml-2 text-sm text-gray-800 dark:text-white/90">
                            20,000 Words
                          </p>
                        </li>
                      </ul>
                    </div>
                  </div>

                  
                  <div class="bg-white dark:bg-dark-primary relative border-2 border-primary-500 rounded-[20px] shadow-one">
                    <div class="p-8">
                      <div class="flex items-center justify-between">
                        <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-400">
                          Plus plan
                        </h2>
                        <span class="px-2 py-1 text-xs font-medium dark:text-pir rounded-full dark:bg-primary-500/15 bg-primary-50 text-primary-500">
                          Popular
                        </span>
                      </div>
                      <p class="flex items-baseline mt-4">
                        <span class="text-4xl font-semibold text-gray-800 dark:text-white/90" x-text="annual ? '$16' : '$20'"></span>
                        <span class="ml-1 text-sm text-gray-500 dark:text-gray-400" x-text="annual ? 'Per year' : 'Per month'">
                        </span>
                      </p>
                      <p class="mt-3 text-sm text-gray-500 dark:text-gray-400">
                        Billed at periods under limits, see rates of people who
                        use.
                      </p>
                      <button class="block w-full gradient-btn px-8 py-3.5 mt-7 text-sm font-medium text-center text-white rounded-full">
                        Purchase Now
                      </button>
                    </div>
                    <div class="px-8 pb-7">
                      <ul class="space-y-3">
                        <li class="flex items-start">
                          <div class="flex-shrink-0 dark:text-gray-400 text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                              <path d="M13.4017 5.2793L6.12172 12.5593L2.59839 9.036" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                          </div>
                          <p class="ml-2 text-sm text-gray-800 dark:text-white/90">
                            Everything in Free
                          </p>
                        </li>
                        <li class="flex items-start dark:text-gray-400 text-gray-500">
                          <div class="flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                              <path d="M13.4017 5.2793L6.12172 12.5593L2.59839 9.036" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                          </div>
                          <p class="ml-2 text-sm text-gray-800 dark:text-white/90">
                            2000 messaging limits
                          </p>
                        </li>
                        <li class="flex items-start">
                          <div class="flex-shrink-0 dark:text-gray-400 text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                              <path d="M13.4017 5.2793L6.12172 12.5593L2.59839 9.036" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                          </div>
                          <p class="ml-2 text-sm text-gray-800 dark:text-white/90">
                            Unlimited Projects
                          </p>
                        </li>
                        <li class="flex items-start">
                          <div class="flex-shrink-0 dark:text-gray-400 text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                              <path d="M13.4017 5.2793L6.12172 12.5593L2.59839 9.036" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                          </div>
                          <p class="ml-2 text-sm text-gray-800 dark:text-white/90">
                            Open AI Key Integration
                          </p>
                        </li>
                        <li class="flex items-start">
                          <div class="flex-shrink-0 dark:text-gray-400 text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                              <path d="M13.4017 5.2793L6.12172 12.5593L2.59839 9.036" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                          </div>
                          <p class="ml-2 text-sm text-gray-800 dark:text-white/90">
                            80,000 Words
                          </p>
                        </li>
                        <li class="flex items-start">
                          <div class="flex-shrink-0 dark:text-gray-400 text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                              <path d="M13.4017 5.2793L6.12172 12.5593L2.59839 9.036" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                          </div>
                          <p class="ml-2 text-sm text-gray-800 dark:text-white/90">
                            Consistent support
                          </p>
                        </li>
                      </ul>
                    </div>
                  </div>

                 
                  <div class="bg-white rounded-[20px] dark:bg-dark-primary shadow-one">
                    <div class="p-8">
                      <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-400">
                        Pro plan
                      </h2>
                      <p class="flex items-baseline mt-4">
                        <span class="text-4xl font-semibold text-gray-800 dark:text-white/90" x-text="annual ? '$24' : '$30'"></span>
                        <span class="ml-1 text-sm text-gray-500 dark:text-gray-400" x-text="annual ? 'Per year' : 'Per month'">
                        </span>
                      </p>
                      <p class="mt-3 text-sm text-gray-500 dark:text-gray-400">
                        Billed at periods under limits, see rates of people who
                        use.
                      </p>
                      <button class="block w-full dark:hover:bg-primary-500 transition dark:bg-white/[0.05] hover:bg-gray-900 px-8 py-3.5 mt-6 text-sm font-medium text-center rounded-full text-white bg-gray-700">
                        Purchase Now
                      </button>
                    </div>
                    <div class="px-8 pb-7">
                      <ul class="space-y-3">
                        <li class="flex items-start">
                          <div class="flex-shrink-0 dark:text-gray-400 text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                              <path d="M13.4017 5.2793L6.12172 12.5593L2.59839 9.036" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                          </div>
                          <p class="ml-2 text-sm text-gray-800 dark:text-white/90">
                            Everything in Free
                          </p>
                        </li>
                        <li class="flex items-start dark:text-gray-400 text-gray-500">
                          <div class="flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                              <path d="M13.4017 5.2793L6.12172 12.5593L2.59839 9.036" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                          </div>
                          <p class="ml-2 text-sm text-gray-800 dark:text-white/90">
                            5000 messaging limits
                          </p>
                        </li>
                        <li class="flex items-start">
                          <div class="flex-shrink-0 dark:text-gray-400 text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                              <path d="M13.4017 5.2793L6.12172 12.5593L2.59839 9.036" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                          </div>
                          <p class="ml-2 text-sm text-gray-800 dark:text-white/90">
                            Unlimited Projects
                          </p>
                        </li>
                        <li class="flex items-start">
                          <div class="flex-shrink-0 dark:text-gray-400 text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                              <path d="M13.4017 5.2793L6.12172 12.5593L2.59839 9.036" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                          </div>
                          <p class="ml-2 text-sm text-gray-800 dark:text-white/90">
                            Open AI Key Integration
                          </p>
                        </li>
                        <li class="flex items-start">
                          <div class="flex-shrink-0 dark:text-gray-400 text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                              <path d="M13.4017 5.2793L6.12172 12.5593L2.59839 9.036" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                          </div>
                          <p class="ml-2 text-sm text-gray-800 dark:text-white/90">
                            1,00,000 Words
                          </p>
                        </li>
                        <li class="flex items-start">
                          <div class="flex-shrink-0 dark:text-gray-400 text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                              <path d="M13.4017 5.2793L6.12172 12.5593L2.59839 9.036" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                          </div>
                          <p class="ml-2 text-sm text-gray-800 dark:text-white/90">
                            Consistent support
                          </p>
                        </li>
                      </ul>
                    </div>
                  </div>

                 
                  <div class="bg-white rounded-[20px] dark:bg-dark-primary shadow-one">
                    <div class="p-8">
                      <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-400">
                        Enterprise
                      </h2>
                      <p class="flex items-baseline mt-4">
                        <span class="text-4xl font-semibold text-gray-800 dark:text-white/90">Let's talk</span>
                      </p>
                      <p class="mt-3 text-sm text-gray-500 dark:text-gray-400">
                        Sed ut perspiciatis unde omnis iste natus ut perspic
                        iatis.
                      </p>
                      <button class="block dark:hover:bg-primary-500 w-full px-8 transition dark:bg-white/[0.03] hover:bg-gray-900 py-3.5 mt-6 text-sm font-medium text-center rounded-full text-white bg-gray-700">
                        Contact Sales
                      </button>
                    </div>
                    <div class="px-8 pb-7">
                      <ul class="space-y-3">
                        <li class="flex items-start">
                          <div class="flex-shrink-0 dark:text-gray-400 text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                              <path d="M13.4017 5.2793L6.12172 12.5593L2.59839 9.036" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                          </div>
                          <p class="ml-2 text-sm text-gray-800 dark:text-white/90">
                            Everything in Free
                          </p>
                        </li>
                        <li class="flex items-start dark:text-gray-400 text-gray-500">
                          <div class="flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                              <path d="M13.4017 5.2793L6.12172 12.5593L2.59839 9.036" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                          </div>
                          <p class="ml-2 text-sm text-gray-800 dark:text-white/90">
                            5000 messaging limits
                          </p>
                        </li>
                        <li class="flex items-start">
                          <div class="flex-shrink-0 dark:text-gray-400 text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                              <path d="M13.4017 5.2793L6.12172 12.5593L2.59839 9.036" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                          </div>
                          <p class="ml-2 text-sm text-gray-800 dark:text-white/90">
                            Unlimited Projects
                          </p>
                        </li>
                        <li class="flex items-start">
                          <div class="flex-shrink-0 dark:text-gray-400 text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                              <path d="M13.4017 5.2793L6.12172 12.5593L2.59839 9.036" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                          </div>
                          <p class="ml-2 text-sm text-gray-800 dark:text-white/90">
                            Open AI Key Integration
                          </p>
                        </li>
                        <li class="flex items-start">
                          <div class="flex-shrink-0 dark:text-gray-400 text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                              <path d="M13.4017 5.2793L6.12172 12.5593L2.59839 9.036" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                          </div>
                          <p class="ml-2 text-sm text-gray-800 dark:text-white/90">
                            Unlimited Words
                          </p>
                        </li>
                        <li class="flex items-start">
                          <div class="flex-shrink-0 dark:text-gray-400 text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                              <path d="M13.4017 5.2793L6.12172 12.5593L2.59839 9.036" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                          </div>
                          <p class="ml-2 text-sm text-gray-800 dark:text-white/90">
                            Consistent support
                          </p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="absolute hidden lg:block top-0 z-10">
                  <svg width="1099" height="960" viewBox="0 0 1099 960" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g opacity="0.2" filter="url(#filter0_f_9282_10364)">
                      <circle cx="479.835" cy="480.254" r="179.665" fill="#FF58D5"></circle>
                    </g>
                    <g opacity="0.1" filter="url(#filter1_f_9282_10364)">
                      <circle cx="619.165" cy="480.254" r="179.665" fill="#4E6EFF"></circle>
                    </g>
                    <defs>
                      <filter id="filter0_f_9282_10364" x="0.169678" y="0.589355" width="959.33" height="959.33" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                        <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
                        <feGaussianBlur stdDeviation="150" result="effect1_foregroundBlur_9282_10364"></feGaussianBlur>
                      </filter>
                      <filter id="filter1_f_9282_10364" x="139.5" y="0.589355" width="959.33" height="959.33" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                        <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
                        <feGaussianBlur stdDeviation="150" result="effect1_foregroundBlur_9282_10364"></feGaussianBlur>
                      </filter>
                    </defs>
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </section> -->
       

        <!-- Faq Start -->
        <section class="py-14 md:py-28">
          <div class="wrapper">
            <div class="max-w-2xl mx-auto mb-12 text-center">
              <h2 class="mb-3 font-bold text-center text-gray-800 text-3xl dark:text-white/90 md:text-title-lg" id="faq">
                Frequently Asked Questions
              </h2>
              <p class="max-w-md mx-auto leading-6 text-gray-500 dark:text-gray-400">
                Answered all frequently asked questions, Still confused? feel
                free contact with us
              </p>
            </div>
            <div class="max-w-[600px] mx-auto">
              <!-- Parent component with shared state -->
              <div class="space-y-4" x-data="{ activeItem: 1 }">
                <!-- FAQ Item 1 -->
                <div class="pb-5 border-b border-gray-200 dark:border-gray-800">
                  <button type="button" class="flex items-center justify-between w-full text-left" @click="activeItem = activeItem === 1 ? null : 1">
                    <span class="text-lg font-medium text-gray-800 dark:text-white/90">How does TalentGlide help in finding top talent?</span>
                    <span class="flex-shrink-0 ml-6">
                      <span x-show="activeItem === 1" class="text-xl text-gray-400">
                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_9283_3094)">
                            <path d="M5 11.9194V13.9194H19V11.9194H5Z" fill="#98A2B3"></path>
                          </g>
                          <defs>
                            <clipPath id="clip0_9283_3094">
                              <rect width="24" height="24" fill="white" transform="translate(0 0.919434)"></rect>
                            </clipPath>
                          </defs>
                        </svg>
                      </span>
                      <span x-show="activeItem !== 1" class="text-xl text-gray-400" style="display: none">
                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_9283_3101)">
                            <path d="M11 11.9194V5.91943H13V11.9194H19V13.9194H13V19.9194H11V13.9194H5V11.9194H11Z" fill="currentColor"></path>
                          </g>
                          <defs>
                            <clipPath id="clip0_9283_3101">
                              <rect width="24" height="24" fill="currentColor" transform="translate(0 0.919434)"></rect>
                            </clipPath>
                          </defs>
                        </svg>
                      </span>
                    </span>
                  </button>
                  <div class="mt-5" x-show="activeItem === 1">
                    <p class="text-base leading-7 text-gray-500 dark:text-gray-400">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                      Aenean luctus magna quis tellus euismod, eget pharetra leo
                      mollis. Donec eget lacus non elit blandit pharetra vitae
                      volutpat libero.
                    </p>
                  </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="pb-5 border-b border-gray-200 dark:border-gray-800">
                  <button type="button" class="flex items-center justify-between w-full text-left" @click="activeItem = activeItem === 2 ? null : 2">
                    <span class="text-lg font-medium text-gray-800 dark:text-white/90">Can I track multiple job openings at once?</span>
                    <span class="flex-shrink-0 ml-6">
                      <span x-show="activeItem === 2" class="text-xl text-gray-400">
                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_9283_3094)">
                            <path d="M5 11.9194V13.9194H19V11.9194H5Z" fill="currentColor"></path>
                          </g>
                          <defs>
                            <clipPath id="clip0_9283_3094">
                              <rect width="24" height="24" fill="currentColor" transform="translate(0 0.919434)"></rect>
                            </clipPath>
                          </defs>
                        </svg>
                      </span>
                      <span x-show="activeItem !== 2" class="text-xl text-gray-400" style="display: none">
                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_9283_3101)">
                            <path d="M11 11.9194V5.91943H13V11.9194H19V13.9194H13V19.9194H11V13.9194H5V11.9194H11Z" fill="currentColor"></path>
                          </g>
                          <defs>
                            <clipPath id="clip0_9283_3101">
                              <rect width="24" height="24" fill="currentColor" transform="translate(0 0.919434)"></rect>
                            </clipPath>
                          </defs>
                        </svg>
                      </span>
                    </span>
                  </button>
                  <div class="mt-4" x-show="activeItem === 2" style="display: none">
                    <p class="text-base leading-7 text-gray-500 dark:text-gray-400">
                      The number of "Projects" refers to the total number of
                      separate workspaces you can create and manage within your
                      account. Each project can have its own settings, team
                      members, and resources.
                    </p>
                  </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="pb-5 border-b border-gray-200 dark:border-gray-800">
                  <button type="button" class="flex items-center justify-between w-full text-left" @click="activeItem = activeItem === 3 ? null : 3">
                    <span class="text-lg font-medium text-gray-800 dark:text-white">Can I view detailed candidate profiles before shortlisting?</span>
                    <span class="flex-shrink-0 ml-6">
                      <span x-show="activeItem === 3" class="text-xl text-gray-400">
                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_9283_3094)">
                            <path d="M5 11.9194V13.9194H19V11.9194H5Z" fill="currentColor"></path>
                          </g>
                          <defs>
                            <clipPath id="clip0_9283_3094">
                              <rect width="24" height="24" fill="currentColor" transform="translate(0 0.919434)"></rect>
                            </clipPath>
                          </defs>
                        </svg>
                      </span>
                      <span x-show="activeItem !== 3" class="text-xl text-gray-400" style="display: none">
                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_9283_3101)">
                            <path d="M11 11.9194V5.91943H13V11.9194H19V13.9194H13V19.9194H11V13.9194H5V11.9194H11Z" fill="currentColor"></path>
                          </g>
                          <defs>
                            <clipPath id="clip0_9283_3101">
                              <rect width="24" height="24" fill="currentColor" transform="translate(0 0.919434)"></rect>
                            </clipPath>
                          </defs>
                        </svg>
                      </span>
                    </span>
                  </button>
                  <div class="mt-4" x-show="activeItem === 3" style="display: none">
                    <p class="text-base leading-7 text-gray-500 dark:text-gray-400">
                      Yes, you can upgrade to a higher plan at any time. When
                      you upgrade, you'll be charged the prorated difference for
                      the remainder of your current billing cycle. Your new
                      features will be available immediately after upgrading.
                    </p>
                  </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="pb-5 border-b border-gray-200 dark:border-gray-800">
                  <button type="button" class="flex items-center justify-between w-full text-left" @click="activeItem = activeItem === 4 ? null : 4">
                    <span class="text-lg font-medium text-gray-800 dark:text-white/90">Does TalentGlide support international hiring?</span>
                    <span class="flex-shrink-0 ml-6">
                      <span x-show="activeItem === 4" class="text-xl text-gray-400">
                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_9283_3094)">
                            <path d="M5 11.9194V13.9194H19V11.9194H5Z" fill="currentColor"></path>
                          </g>
                          <defs>
                            <clipPath id="clip0_9283_3094">
                              <rect width="24" height="24" fill="currentColor" transform="translate(0 0.919434)"></rect>
                            </clipPath>
                          </defs>
                        </svg>
                      </span>
                      <span x-show="activeItem !== 4" class="text-xl text-gray-400" style="display: none">
                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_9283_3101)">
                            <path d="M11 11.9194V5.91943H13V11.9194H19V13.9194H13V19.9194H11V13.9194H5V11.9194H11Z" fill="currentColor"></path>
                          </g>
                          <defs>
                            <clipPath id="clip0_9283_3101">
                              <rect width="24" height="24" fill="currentColor" transform="translate(0 0.919434)"></rect>
                            </clipPath>
                          </defs>
                        </svg>
                      </span>
                    </span>
                  </button>
                  <div class="mt-4" x-show="activeItem === 4" style="display: none">
                    <p class="text-base leading-7 text-gray-500 dark:text-gray-400">
                      "Unlimited Projects" means you can create as many projects
                      as you need without any restrictions. This allows you to
                      organize your work efficiently without worrying about
                      hitting a project limit.
                    </p>
                  </div>
                </div>

                <!-- FAQ Item 5 -->
                <div class="pb-5 border-b border-gray-200 dark:border-gray-800">
                  <button type="button" class="flex items-center justify-between w-full text-left" @click="activeItem = activeItem === 5 ? null : 5">
                    <span class="text-lg font-medium text-gray-800 dark:text-white/90">Do you offer onboarding support for new clients?</span>
                    <span class="flex-shrink-0 ml-6">
                      <span x-show="activeItem === 5" class="text-xl text-gray-400">
                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_9283_3094)">
                            <path d="M5 11.9194V13.9194H19V11.9194H5Z" fill="currentColor"></path>
                          </g>
                          <defs>
                            <clipPath id="clip0_9283_3094">
                              <rect width="24" height="24" fill="currentColor" transform="translate(0 0.919434)"></rect>
                            </clipPath>
                          </defs>
                        </svg>
                      </span>
                      <span x-show="activeItem !== 5" class="text-xl text-gray-400" style="display: none">
                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_9283_3101)">
                            <path d="M11 11.9194V5.91943H13V11.9194H19V13.9194H13V19.9194H11V13.9194H5V11.9194H11Z" fill="currentColor"></path>
                          </g>
                          <defs>
                            <clipPath id="clip0_9283_3101">
                              <rect width="24" height="24" fill="currentColor" transform="translate(0 0.919434)"></rect>
                            </clipPath>
                          </defs>
                        </svg>
                      </span>
                    </span>
                  </button>
                  <div class="mt-4" x-show="activeItem === 5" style="display: none">
                    <p class="text-base leading-7 text-gray-500 dark:text-gray-400">
                      To add your OpenAI API key, go to your account settings
                      and navigate to the "API Keys" section. Click on "Add New
                      Key", paste your OpenAI API key, and save your changes.
                      The key will be securely stored and used for all
                      AI-powered features.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Faq End -->
      </main>
      <!-- Main End -->

      <!-- Footer Start -->
     <?php include 'footer.html'; ?>
      <!-- Footer End -->
    </div>

    <script defer="" src="assets/js/alpine.min.js"></script>
    <script defer="" src="assets/js/glightbox.min.js"></script>
    <script defer="" src="assets/js/app.js"></script>
  <script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'966dbeb5ed28b97a',t:'MTc1MzgwMzk0My4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script>

</body></html>