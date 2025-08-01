<!DOCTYPE html><html><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/images/favicon.png">
    <title>Contact | Best staffing agency in USA</title>
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
        <section class="py-28 relative">
          <div class="wrapper">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
              <!-- Google Map Section -->
              <div class="h-full">
                <div class="h-full rounded-2xl overflow-hidden shadow-theme-xs border border-gray-300 dark:border-gray-700">
                  <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2923.923098146414!2d-106.31382272423454!3d42.8668439711496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8760e8a3d5a3d5a3%3A0x9e8a3d5a3d5a3d5a!2s5830%20E%202nd%20St%2C%20Ste%207000%20%2317606%2C%20Casper%2C%20WY%2082609%2C%20USA!5e0!3m2!1sen!2sus!4v1620000000000!5m2!1sen!2sus" 
                    width="100%" 
                    height="100%" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy"
                    class="min-h-[500px]"
                  ></iframe>
                </div>
              </div>
              
              <!-- Contact Form Section -->
              <div class="contact-wrapper border p-10 sm:p-14 relative z-30 bg-white border-gray-100 dark:bg-dark-primary dark:border-gray-800 rounded-2xl">
                <div class="text-center mb-12">
                  <h3 class="text-gray-800 font-bold dark:text-white text-3xl mb-2">
                    Need any Help? Get in touch 👋
                  </h3>
                  <p class="text-gray-500 dark:text-gray-400">
                    Open a ticket, we will get back to you ASAP
                  </p>
                </div>
                <form>
                  <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div>
                      <label for="firstName" class="mb-1 block dark:text-gray-400 text-gray-700 font-medium text-sm">First Name</label>
                      <input type="text" class="border w-full text-sm dark:text-white/90 dark:placeholder:text-white/30 dark:border-gray-700 text-gray-800 placeholder:text-sm placeholder:text-gray-400 focus:border-primary-300 dark:focus:border-primary-500 focus:outline-0 focus:ring-3 focus:ring-primary-300/20 text-left h-12 shadow-theme-xs border-gray-300 rounded-full px-5 py-2.5" placeholder="Andrew">
                    </div>
                    <div>
                      <label for="lastName" class="mb-1 block dark:text-gray-400 font-medium text-sm">Last Name</label>
                      <input type="text" class="border w-full text-sm dark:text-white/90 dark:border-gray-700 text-gray-800 placeholder:text-sm placeholder:text-gray-400 focus:border-primary-300 dark:focus:border-primary-500 focus:outline-0 focus:ring-3 focus:ring-primary-300/20 text-left h-12 shadow-theme-xs dark:placeholder:text-white/30 border-gray-300 rounded-full px-5 py-2.5" placeholder="Johnson">
                    </div>
                    <div class="col-span-full">
                      <label for="lastName" class="mb-1 block dark:text-gray-400 font-medium text-sm">Email address</label>
                      <input type="text" class="border w-full text-sm dark:text-white/90 dark:border-gray-700 text-gray-800 placeholder:text-sm placeholder:text-gray-400 focus:border-primary-300 dark:focus:border-primary-500 focus:outline-0 focus:ring-3 focus:ring-primary-300/20 text-left h-12 shadow-theme-xs dark:placeholder:text-white/30 border-gray-300 rounded-full px-5 py-2.5" placeholder="example@gmail.com">
                    </div>
                    <div class="col-span-full">
                      <label for="message" class="mb-1 block dark:text-gray-400 font-medium text-sm">Message</label>
                      <textarea type="text" rows="6" class="border w-full text-sm dark:text-white/90 dark:border-gray-700 text-gray-800 placeholder:text-sm placeholder:text-gray-400 dark:placeholder:text-white/30 focus:border-primary-300 dark:focus:border-primary-500 focus:outline-0 focus:ring-3 focus:ring-primary-300/20 text-left shadow-theme-xs resize-none border-gray-300 rounded-3xl px-5 py-4" placeholder="Type your message"></textarea>
                    </div>
                    <div class="col-span-full">
                      <button class="bg-primary-500 hover:bg-primary-600 transition h-12 py-3 px-6 w-full font-medium text-white text-sm rounded-full">
                        Send Message
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <span class="absolute -bottom-32 left-1/2 -translate-x-1/2 z-0">
            <svg width="930" height="760" viewBox="0 0 930 760" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g opacity="0.3" filter="url(#filter0_f_9248_10254)">
                <circle cx="380.335" cy="380.335" r="179.665" fill="#FF58D5"></circle>
              </g>
              <g opacity="0.7" filter="url(#filter1_f_9248_10254)">
                <circle cx="549.665" cy="380.335" r="179.665" fill="#4E6EFF"></circle>
              </g>
              <defs>
                <filter id="filter0_f_9248_10254" x="0.669922" y="0.6698" width="759.33" height="759.33" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                  <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                  <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
                  <feGaussianBlur stdDeviation="100" result="effect1_foregroundBlur_9248_10254"></feGaussianBlur>
                </filter>
                <filter id="filter1_f_9248_10254" x="170" y="0.6698" width="759.33" height="759.33" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                  <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                  <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
                  <feGaussianBlur stdDeviation="100" result="effect1_foregroundBlur_9248_10254"></feGaussianBlur>
                </filter>
              </defs>
            </svg>
          </span>
        </section>
      </main>
      <!-- Main End -->

      <?php include 'footer.html'; ?>

    
    </div>

    <script defer="" src="assets/js/alpine.min.js"></script>
    <script defer="" src="assets/js/glightbox.min.js"></script>
    <script defer="" src="assets/js/app.js"></script>
  <script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'966de381aeff434e',t:'MTc1MzgwNTQ1MC4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script>

</body></html>