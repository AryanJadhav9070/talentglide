<!DOCTYPE html><html><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/images/favicon.png">
    <title>Best staffing agency in USA | TalentGlide</title>
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
       <h1 class="mb-5 font-bold text-gray-800 text-3xl whitespace-nowrap dark:text-white/90 md:text-5xl">
  Your trusted staffing partner
</h1>

        <p class="text-gray-700 text-base mb-5 dark:text-gray-400">
          No fluff. Just results.
        </p>
        <div class="flex justify-center items-center text-sm text-gray-500 mb-3">
          <div class="flex gap-3 items-center">
           
            <p class="text-gray-500 text-sm dark:text-gray-400">
             TalentGlide
            </p>
          </div>
          <span class="mx-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" viewBox="0 0 6 6" fill="none">
              <circle cx="3" cy="3.00177" r="3" fill="#98A2B3"></circle>
            </svg>
          </span>
          <span class="dark:text-gray-400">Best staffing agency in North america</span>
          <span class="mx-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" viewBox="0 0 6 6" fill="none">
              <circle cx="3" cy="3.00177" r="3" fill="#98A2B3"></circle>
            </svg>
          </span>
          <span class="dark:text-gray-400">Staffing, consulting and more</span>
        </div>
      </div>
      
      <!-- Left-Right Layout Section -->
      <div class="max-w-[980px] mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 my-10">
        <!-- Left Column (Image) -->
        <div class="order-2 md:order-1">
          <img src="assets/images/aboutuspic.webp" class="w-full rounded-[20px]" alt="">
        </div>
        
        <!-- Right Column (Content) -->
        <div class="order-1 md:order-2">
          <div class="space-y-3 mb-8">
            <p class="text-gray-700 text-base leading-7 dark:text-gray-400">
             At TalentGlide, we’re not just another staffing vendor or consulting shop. We’re a partner in your growth journey. Born out of real-world hiring challenges and sales roadblocks, we created a model that works—because we’ve been on your side of the table. We combine speed, tech, and sharp execution to help you do more with less. No fluff. Just results.
            </p>
            <p class="text-gray-700 text-base leading-7 dark:text-gray-400">
              Whether you’re a startup building your first team or an enterprise expanding into new regions—we’ve got you covered.
            </p>
           
           
          </div>
          
          
        </div>
      </div>
      
      <div class="max-w-[770px] mx-auto mb-10">
        <blockquote class="bg-gray-100 dark:bg-white/10 dark:text-gray-400 rounded-r-xl font-medium text-base leading-7 text-gray-700 border-l-3 border-primary-500 py-5 px-8">
          "Great companies are built on great people — we bring you the talent that makes success inevitable." - TalentGlide
          
        </blockquote>
      </div>

     


      

      <!-- New Left-Right Section -->
      <div class="max-w-[980px] mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 my-10">
        <!-- Left Column (Text Content) -->
        <div class="order-1">
          <div class="mb-10" style="margin-top:30px;">
            
            <h2 class="text-2xl font-bold text-gray-700 mb-4 dark:text-white/90">
              Top staffing agency in US, Canada, India
            </h2>
            <p class="text-gray-700 text-base leading-7 mb-4 dark:text-gray-400">
             We operate across the US, Canada and India, delivering both onshore and offshore hiring solutions. Our sweet spot is IT staffing, but we also excel in Non-IT, Engineering, and Healthcare roles. Clients include SMEs, MSPs, and direct enterprises across BFSI, Healthcare, Retail, and more. We specialize in finding hard-to-source talent fast—thanks to our AI-powered sourcing combined with deep recruiter expertise. Our turnaround times are sharp, and we consistently outperform on quality and speed.
            </p>
           
          </div>
        </div>
        
        <!-- Right Column (Images) -->
        <div class="order-2">
          <div class="grid grid-cols-2 gap-8">
            <img src="assets/images/hired.png" class="w-full rounded-xl hidden lg:block" alt="hire IT staff in india ">
            <img src="assets/images/interview.webp" class="rounded-xl w-full hidden lg:block" alt="hire IT staff in usa">
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