<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Footer</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    .bg-gray-900 {
      background-color: #1a202c;
    }
    .text-white {
      color: #ffffff;
    }
    .py-10 {
      padding: 2.5rem 0;
    }
    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 1rem;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }
    .flex {
      display: flex;
    }
    .flex-col {
      flex-direction: column;
    }
    .gap-4 > *:not(:last-child) {
      margin-right: 1rem;
    }
    .text-2xl {
      font-size: 1.5rem;
    }
    .font-bold {
      font-weight: 700;
    }
    .text-indigo-500 {
      color: #4f46e5;
    }
    .text-teal-500 {
      color: #14b8a6;
    }
    .hover\\:text-indigo-400:hover {
      color: #818cf8;
    }
    .mb-3 {
      margin-bottom: 0.75rem;
    }
    .text-sm {
      font-size: 0.875rem;
    }
    .mt-8 {
      margin-top: 2rem;
    }
    .pt-4 {
      padding-top: 1rem;
    }
    .text-center {
      text-align: center;
    }
    .space-y-2 > *:not(:last-child) {
      margin-bottom: 0.5rem;
    }
    .w-35 {
      width: 140px;
    }
    .w-38 {
      width: 152px;
    }
    a {
      text-decoration: none;
    }
    a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <footer class="bg-gray-900 text-white py-10">
    <div class="container">
      <!-- Logo and Social Media -->
      <div class="flex flex-col">
        <h2 class="text-2xl font-bold text-indigo-500 mb-3">
          Talent<span class="text-teal-500">Konnect</span>
        </h2>
        <p>Connecting talents with top agencies and opportunities.</p>
        <div class="flex gap-4 mt-4">
          <a href="#" target="_blank" class="hover:text-indigo-400">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="#" target="_blank" class="hover:text-indigo-400">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="#" target="_blank" class="hover:text-indigo-400">
            <i class="fab fa-linkedin-in"></i>
          </a>
          <a href="#" target="_blank" class="hover:text-indigo-400">
            <i class="fab fa-twitter"></i>
          </a>
        </div>
      </div>

      <!-- About Section -->
      <div>
        <h3 class="font-semibold text-lg mb-3">About</h3>
        <ul class="space-y-2">
          <li><a href="#" class="hover:text-indigo-400">About Us</a></li>
          <li><a href="#" class="hover:text-indigo-400">Careers</a></li>
          <li><a href="#" class="hover:text-indigo-400">Contact</a></li>
          <li><a href="#" class="hover:text-indigo-400">Sitemap</a></li>
        </ul>
      </div>

      <!-- Support Section -->
      <div>
        <h3 class="font-semibold text-lg mb-3">Support</h3>
        <ul class="space-y-2">
          <li><a href="#" class="hover:text-indigo-400">Help Center</a></li>
          <li><a href="#" class="hover:text-indigo-400">FAQs</a></li>
          <li><a href="#" class="hover:text-indigo-400">Report Issue</a></li>
          <li><a href="#" class="hover:text-indigo-400">Trust & Safety</a></li>
        </ul>
      </div>

      <!-- App Download Section -->
      <div>
        <h3 class="font-semibold text-lg mb-3">Get Our App</h3>
        <p class="text-sm mb-3">Stay connected with the latest opportunities.</p>
        <div class="flex gap-3">
          <a href="#" target="_blank">
            <img src="public/css/admin/css/images/googlePlay.png" alt="Google Play" class="w-38">
          </a>
          <a href="#" target="_blank">
            <img src="public/css/admin/css/images/appleStore.png" alt="App Store" class="w-35">
          </a>
        </div>
      </div>
    </div>

    <!-- Copyright -->
    <div class="border-t border-gray-700 mt-8 pt-4 text-center text-sm">
      <p>© 2025 TalentConnect. All rights reserved.</p>
    </div>
  </footer>
</body>
</html>
