<!DOCTYPE html>
<html lang="en">

<head>
  <?php //$this->load->view('common/meta_tags'); 
  ?>
  <meta name="keywords"
    content="Artist Katta,Talent Konnect, Singer, Painter, Musician,Production house,Actor etc.">
  <!-- <title><?php //echo $title; 
              ?></title> -->
  <title>Artist Katta</title>
  <meta name="description" content="">
  <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^3.2.7/dist/tailwind.min.css" />
  <!-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" /> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
  <style>
    .swiper {
      width: 100%;
      height: 400px;
    }

    .swiper-slide {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .swiper-slide img {
      /* max-width: 100%; */
      width: 300px !important;
      height: 300px !important;
      /* height: auto; */
      border-radius: 10px;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #f3f4f6;
      margin: 0;
      padding: 0;
      overflow-x: hidden;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
    }

    .swiper-button-prev,
    .swiper-button-next {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background-color: #4f46e5;
      color: white;
      padding: 10px;
      border-radius: 50%;
      opacity: 0;
      transition: opacity 0.3s;
    }

    .swiper-button-prev:hover,
    .swiper-button-next:hover {
      background-color: #4338ca;
    }

    .swiper-button-prev {
      left: -30px;
    }

    .swiper-button-next {
      right: -30px;
    }

    .group:hover .swiper-button-prev,
    .group:hover .swiper-button-next {
      opacity: 1;
    }

    .card {
      background-color: white;
      border-radius: 12px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s, box-shadow 0.3s;
      padding: 16px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      height: 380px;
    }

    .card:hover {
      transform: scale(1.05);
      box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
    }

    .card img {
      border-radius: 8px;
      margin-bottom: 16px;
      height: 160px;
      width: 100%;
      object-fit: cover;
    }

    .card h3 {
      font-size: 1.25rem;
      color: #1f2937;
      margin-bottom: 8px;
    }

    .card p {
      color: #6b7280;
      font-size: 0.875rem;
      margin: 4px 0;
    }

    .btn {
      background-color: #4f46e5;
      color: white;
      padding: 10px;
      border-radius: 8px;
      text-align: center;
      display: inline-block;
      width: 100%;
      transition: background-color 0.3s;
    }

    .btn:hover {
      background-color: #4338ca;
    }

    .py-10 {
      padding-top: 2.5rem;
      padding-bottom: 2.5rem;
    }

    .bg-gray-100 {
      background-color: #f3f4f6;
    }

    /* .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 1rem;
    } */

    .bg-white {
      background-color: #ffffff;
    }

    .shadow-md {
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .rounded-xl {
      border-radius: 1rem;
    }

    .flex {
      display: flex;
    }

    .flex-col {
      flex-direction: column;
    }

    .md\\:flex-row {
      flex-direction: row;
    }

    .items-center {
      align-items: center;
    }

    .justify-between {
      justify-content: space-between;
    }

    .p-8 {
      padding: 2rem;
    }

    .gap-8 {
      gap: 2rem;
    }

    .w-32 {
      width: 8rem;
    }

    .h-32 {
      height: 8rem;
    }

    .text-2xl {
      font-size: 1.5rem;
    }

    .font-bold {
      font-weight: 700;
    }

    .text-gray-800 {
      color: #1f2937;
    }

    .text-gray-600 {
      color: #4b5563;
    }

    .mt-2 {
      margin-top: 0.5rem;
    }

    .flex-wrap {
      flex-wrap: wrap;
    }

    .gap-3 {
      gap: 0.75rem;
    }

    .mt-4 {
      margin-top: 1rem;
    }

    .px-4 {
      padding-left: 1rem;
      padding-right: 1rem;
    }

    .py-2 {
      padding-top: 0.5rem;
      padding-bottom: 0.5rem;
    }

    .border-2 {
      border-width: 2px;
    }

    .border-indigo-600 {
      border-color: #4f46e5;
    }

    .text-indigo-600 {
      color: #4f46e5;
    }

    .rounded-full {
      border-radius: 9999px;
    }

    .hover\\:bg-indigo-600:hover {
      background-color: #4f46e5;
    }

    .hover\\:text-white:hover {
      color: #ffffff;
    }

    .transition {
      transition: all 0.3s ease;
    }

    .px-6 {
      padding-left: 1.5rem;
      padding-right: 1.5rem;
    }

    .py-3 {
      padding-top: 0.75rem;
      padding-bottom: 0.75rem;
    }

    .border-blue-600 {
      border-color: #2563eb;
    }

    .text-blue-600 {
      color: #2563eb;
    }

    .hover\\:bg-blue-600:hover {
      background-color: #2563eb;
    }

    .search-bar-container {
      position: absolute;
      /* Place it over the slider */
      top: 61%;
      /* Center vertically */
      left: 50%;
      /* Center horizontally */
      transform: translate(-50%, -50%);
      /* Perfect centering */
      z-index: 10;
      /* Ensure it appears above the slider */
      /* display: flex; */
      align-items: center;
      gap: 10px;
      /* Spacing between input and button */
    }

    .search-input {
      width: 300px;
      /* Adjust the width of the search input */
      padding: 10px;
      font-size: 16px;
      border: 2px solid #ddd;
      border-radius: 5px;
    }

    .search-button {
      padding: 10px 20px;
      font-size: 16px;
      background-color: #007bff;
      /* Button color */
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .search-button:hover {
      background-color: #0056b3;
      /* Darker shade on hover */
    }

    /* Slider */
    .carousel-container {
      position: relative;
      /* top: 0;
      left: 0;
      width: 100%;
      height: 100%; */
      overflow: hidden;
    }

    .carousel-slide {
      display: flex;
      animation: slide-animation 40s infinite;
      /* transition: transform 0.5s ease-in-out; */

      /* width: 400%; */
      /* Total slides * 100% */
      /* height: 100%; */
      /* animation: slide-animation 90s infinite; */
    }

    .carousel-slide .slide {
      flex: 0 0 100%;
      box-sizing: border-box;
    }

    button.prev,
    button.next {
      position: absolute;
      top: 32%;
      transform: translateY(-50%);
      background-color: rgba(0, 0, 0, 0.5);
      color: white;
      border: none;
      padding: 10px;
      cursor: pointer;
      z-index: 1;
    }

    button.prev {
      left: 10px;
    }

    button.next {
      right: 10px;
    }

    button.prev:hover,
    button.next:hover {
      background-color: rgba(0, 0, 0, 0.8);
    }

    .slide {
      flex: 1;
      /* Equal width for each slide */
    }

    .slide img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      /* Maintain aspect ratio and cover the area */
    }

    /* Animation for Slider */
    @keyframes slide-animation {
      0% {
        transform: translateX(0);
      }

      25% {
        transform: translateX(-100%);
      }

      50% {
        transform: translateX(-200%);
      }

      75% {
        transform: translateX(-300%);
      }

      100% {
        transform: translateX(0);
      }
    }
  </style>

  <script>
    window.onload = function() {
      const slides = document.querySelectorAll('.carousel-slide .slide');
      const totalSlides = slides.length;

      if (totalSlides === 0) {
        console.error("No slides found!");
        return; // Exit if no slides are found
      }

      let slideIndex = 0;

      function showSlide(index) {
        if (index >= totalSlides) {
          slideIndex = 0;
        } else if (index < 0) {
          slideIndex = totalSlides - 1;
        } else {
          slideIndex = index;
        }

        // Ensure the slides are fully loaded and accessible
        const slideWidth = slides[0].clientWidth; // Get the width of a single slide
        const slidePosition = -slideIndex * slideWidth; // Calculate the new position

        document.querySelector('.carousel-slide').style.transform = `translateX(${slidePosition}px)`;
      }

      function moveSlide(direction) {
        showSlide(slideIndex + direction);
      }

      // Initialize the first slide on page load
      showSlide(slideIndex);

      // Event listeners for buttons
      const prevButton = document.querySelector('.prev');
      const nextButton = document.querySelector('.next');

      if (prevButton && nextButton) {
        prevButton.addEventListener('click', function() {
          moveSlide(-1);
        });

        nextButton.addEventListener('click', function() {
          moveSlide(1);
        });
      }
    };
  </script>




  <?php $this->load->view('common/before_head_close'); ?>
</head>

<body>
  <?php $this->load->view('common/after_body_open'); ?>
  <div class="siteWraper">
    <!--Header-->
    <?php $this->load->view('common/header'); ?>
    <!--/Header-->
    <!--Search Block-->
    <div class="top-colSection">
      <!-- <div class="container">
        <div class="row">
         
          <div class="clear"></div>
        </div>
      </div> -->
      <div class="search-bar-container">
        <?php $this->load->view('common/home_search'); ?>
      </div>

      <div class="carousel-container">
        <div class="carousel-slide">
          <div class="slide">
            <img src="public/images/img1.jpeg" alt="Image 1">
          </div>
          <div class="slide">
            <img src="public/images/img2.jpeg" alt="Image 2">
          </div>
          <div class="slide">
            <img src="public/images/img3.jpeg" alt="Image 3">
          </div>
          <div class="slide">
            <img src="public/images/img4.jpeg" alt="Image 4">
          </div>

        </div>
        <!-- <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
        <button class="next" onclick="moveSlide(1)">&#10095;</button> -->
      </div>
    </div>
  </div>
  <!--/Search Block-->

  <!--Employers-->
  <div class="topemployerwrap">
    <div class="container">
      <div class="container flex items-center">

        <!-- <h2>Top Employers</h2> -->
        <!-- <strong>Total - <?php #echo $total_employers; 
                              ?></strong> -->
        <h2 className="text-4xl font-bold text-center mb-10 text-indigo-700">
          Top Talents
        </h2>

      </div>

      <div class="swiper">
        <div class="swiper-wrapper flex">
          <div class="swiper-slide w-[300px] h-[500px] flex justify-center items-center">
            <div
              class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition-transform transform hover:scale-105">
              <img src="public/css/admin/css/images/Painter.jpg" alt="Alex Painter"
                class="w-[300px] h-[450px] object-cover rounded-t-xl" />
              <div class="p-4 text-center">
                <h2 class="text-xl font-semibold text-gray-800">Alex Painter</h2>
                <!-- <p class="text-gray-500">Painter</p> -->
                <?php if ($this->session->userdata('is_user_login') == TRUE) { ?>
                  <a href="#" class="btn">Painter</a>
                <?php } else { ?>
                  <a href="<?php echo base_url('jobseeker-signup'); ?>" class="btn">Painter</a>
                <?php } ?>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div
              class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition-transform transform hover:scale-105">
              <img src="public/css/admin/css/images/sophia.jpg" alt="Sophie Singer"
                class="w-[300px] h-[450px] object-cover rounded-t-xl" />
              <div class="p-4 text-center">
                <h2 class="text-xl font-semibold text-gray-800">Sophie Singer</h2>
                <!-- <p class="text-gray-500">Singer</p> -->
                <?php if ($this->session->userdata('is_user_login') == TRUE) { ?>
                  <a href="#" class="btn">Singer</a>
                <?php } else { ?>
                  <a href="<?php echo base_url('jobseeker-signup'); ?>" class="btn">Singer</a>
                <?php } ?>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div
              class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition-transform transform hover:scale-105">
              <img src="public/css/admin/css/images/Macheal.png" alt="Michael Actor"
                class="w-[300px] h-[450px] object-cover rounded-t-xl" />
              <div class="p-4 text-center">
                <h2 class="text-xl font-semibold text-gray-800">Michael Actor</h2>
                <!-- <p class="text-gray-500">Actor</p> -->
                <?php if ($this->session->userdata('is_user_login') == TRUE) { ?>
                  <a href="#" class="btn">Actor</a>
                <?php } else { ?>
                  <a href="<?php echo base_url('jobseeker-signup'); ?>" class="btn">Actor</a>
                <?php } ?>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div
              class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition-transform transform hover:scale-105">
              <img src="public/css/admin/css/images/bella.jpg" alt="Ella Dancer"
                class="w-[300px] h-[450px] object-cover rounded-t-xl" />
              <div class="p-4 text-center">
                <h2 class="text-xl font-semibold text-gray-800">Ella Dancer</h2>
                <!-- <p class="text-gray-500">Dancer</p> -->
                <!-- <a href="#" class="btn">Dancer</a> -->
                <?php if ($this->session->userdata('is_user_login') == TRUE) { ?>
                  <a href="#" class="btn">Dancer</a>
                <?php } else { ?>
                  <a href="<?php echo base_url('jobseeker-signup'); ?>" class="btn">Dancer</a>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper">
        <div class="swiper-wrapper flex">
          <div class="swiper-slide w-[300px] h-[500px] flex justify-center items-center">
            <div
              class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition-transform transform hover:scale-105">
              <img src="public/css/admin/css/images/Painter.jpg" alt="Alex Painter"
                class="w-[300px] h-[450px] object-cover rounded-t-xl" />
              <div class="p-4 text-center">
                <h2 class="text-xl font-semibold text-gray-800">Alex Painter</h2>
                <!-- <p class="text-gray-500">Painter</p> -->
                <a href="#" class="btn">Painter</a>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div
              class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition-transform transform hover:scale-105">
              <img src="public/css/admin/css/images/sophia.jpg" alt="Sophie Singer"
                class="w-[300px] h-[450px] object-cover rounded-t-xl" />
              <div class="p-4 text-center">
                <h2 class="text-xl font-semibold text-gray-800">Sophie Singer</h>
                  <!-- <p class="text-gray-500">Singer</p> -->
                  <a href="#" class="btn">Singer</a>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div
              class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition-transform transform hover:scale-105">
              <img src="public/css/admin/css/images/Macheal.png" alt="Michael Actor"
                class="w-[300px] h-[450px] object-cover rounded-t-xl" />
              <div class="p-4 text-center">
                <h2 class="text-xl font-semibold text-gray-800">Michael Actor</h2>
                <!-- <p class="text-gray-500">Actor</p> -->
                <a href="#" class="btn">Actor</a>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div
              class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition-transform transform hover:scale-105">
              <img src="public/css/admin/css/images/bella.jpg" alt="Ella Dancer"
                class="w-[300px] h-[450px] object-cover rounded-t-xl" />
              <div class="p-4 text-center">
                <h2 class="text-xl font-semibold text-gray-800">Ella Dancer</h2>
                <!-- <p class="text-gray-500">Dancer</p> -->
                <a href="#" class="btn">Dancer</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Pagination -->
      <!-- <div class="swiper-pagination"></div> -->
      <!-- Navigation -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>

  </div>
  </div>
  <!-- <ul class="employersList">
          <?php
          #if($top_employer_result):
          #foreach($top_employer_result as $row_top_employer):
          #	$company_image_name = ($row_top_employer->company_logo)?$row_top_employer->company_logo:'no_logo.jpg';
          ?>
          <li><a href="<?php #echo base_url('company/'.$row_top_employer->company_slug); 
                        ?>" title="Jobs in <?php # echo $row_top_employer->company_name; 
                                            ?>"><img src="<?php # echo base_url('public/uploads/employer/thumb/'.$company_image_name); 
                                                          ?>" alt="<?php #echo base_url('company/'.$row_top_employer->company_slug); 
                                                                    ?>" /></a></li>
          <?php
          #endforeach;
          #endif;
          ?>
          <div class="clear"></div>
        </ul> -->
  </div>
  </div>
  <!--Employers Ends-->



  <div class="container">

    <div class="container flex items-center">
      <h2 class="text-4xl font-bold text-center mb-10 text-indigo-700">
        Top Agencies / Jobs
      </h2>
    </div>
    <div class="swiper group">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="card">
            <img src="public/css/admin/css/images/art.jpg" alt="Creative Arts Agency">
            <div>
              <h3>Creative Arts Agency</h3>
              <a href="#">Los Angeles, CA</a>
              <p>Casting Director</p>
            </div>
            <a href="#" class="btn">View Jobs</a>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="card">
            <img src="public/css/admin/css/images/music1.jpg" alt="MusicConnect">
            <div>
              <h3>MusicConnect</h3>
              <a href="#">New York, NY</a>
              <p>Music Production</p>
            </div>
            <a href="#" class="btn">View Jobs</a>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="card">
            <img src="public/css/admin/css/images/film.jpg" alt="FilmWorks Studios">
            <div>
              <h3>FilmWorks Studios</h3>
              <a href="#">Toronto, Canada</a>
              <p>Film Production</p>
            </div>
            <a href="#" class="btn">View Jobs</a>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="card">
            <img src="public/css/admin/css/images/stage.jpg" alt="StageLight Events">
            <div>
              <h3>StageLight Events</h3>
              <a href="#">London, UK</a>
              <p>Event Management</p>
            </div>
            <a href="#" class="btn">View Jobs</a>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="card">
            <img src="public/css/admin/css/images/dance1.jpg" alt="DanceHub">
            <div>
              <h3>DanceHub</h3>
              <a href="#">Paris, France</a>
              <p>Dance Academy</p>
            </div>
            <a href="#" class="btn">View Jobs</a>
          </div>
        </div>
      </div>

      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
  </div>

  </div>

  <!--/Latest Jobs Block-->

  <!--Cities-->
  <div class="container">
    <div class="container flex items-center">
      <h2 class="text-4xl font-bold text-center mb-10 text-indigo-700">
        Upcoming Events
      </h2>
    </div>
    <div class="w-full md:w-2/3 relative flex items-center">
      <div class="w-1/3">
        <img src="public/css/admin/css/images/joker1.png" alt="Events Icon" style="width: 200px;">
      </div>



      <div class="swiper">
        <div class="swiper-wrapper">
          <!-- Slide 1 -->
          <div class="swiper-slide">
            <div class="card">
              <img src="public/css/admin/css/images/artexpo.jpg" alt="Art Expo 2025">
              <div>
                <h3>Art Expo 2025</h3>
                <p>Feb 25, 2025 | 10:00 AM</p>
                <div class="tags">
                  <span class="tag tag-indigo">Exhibition</span>
                  <span class="tag tag-gray">1.2K Enrolled</span>
                </div>
              </div>
              <a href="#" class="btn">View Details</a>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="swiper-slide">
            <div class="card">
              <img src="public/css/admin/css/images/musicconcert.jpg" alt="Global Music Fest">
              <div>
                <h3>Global Music Fest</h3>
                <p>Mar 10, 2025 | 6:00 PM</p>
                <div class="tags">
                  <span class="tag tag-indigo">Concert</span>
                  <span class="tag tag-gray">3.5K Enrolled</span>
                </div>
              </div>
              <a href="#" class="btn">View Details</a>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="swiper-slide">
            <div class="card">
              <img src="public/css/admin/css/images/filmmaker.jpg" alt="Film Makers Meetup">
              <div>
                <h3>Film Makers Meetup</h3>
                <p>Apr 15, 2025 | 2:00 PM</p>
                <div class="tags">
                  <span class="tag tag-indigo">Workshop</span>
                  <span class="tag tag-gray">800 Enrolled</span>
                </div>
              </div>
              <a href="#" class="btn">View Details</a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card">
              <img src="public/css/admin/css/images/artexpo.jpg" alt="Art Expo 2025">
              <div>
                <h3>Art Expo 2025</h3>
                <p>Feb 25, 2025 | 10:00 AM</p>
                <div class="tags">
                  <span class="tag tag-indigo">Exhibition</span>
                  <span class="tag tag-gray">1.2K Enrolled</span>
                </div>
              </div>
              <a href="#" class="btn">View Details</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>


  <div class="py-10 bg-gray-100">
    <div class="container mx-auto bg-white shadow-md rounded-xl flex items-center justify-between p-8 gap-8">
      <!-- Left Icon/Illustration -->
      <div class="flex items-center justify-center">
        <img src="public/css/admin/css/images/pre-joker1.png" alt="Premium Services" class="w-32 h-32">
      </div>

      <!-- Center Content -->
      <div class="flex-1" style="margin-top: 25px; margin-bottom: 25px;">
        <h2 class="text-2xl font-bold text-gray-800">Unlock Premium Features for Faster Hiring</h2>
        <p class="text-gray-600 mt-2">
          Access exclusive tools to enhance your profile visibility, get priority applications, and stand out to agencies.
        </p>

        <!-- Feature Buttons -->
        <div class="flex flex-wrap gap-3 mt-4">
          <button class="flex items-center gap-2 px-4 py-2 border-2 border-indigo-600 text-indigo-600 rounded-full hover:bg-indigo-600 hover:text-white transition">
            <i class="fas fa-pen-nib"></i> Profile Optimization
          </button>
          <button class="flex items-center gap-2 px-4 py-2 border-2 border-indigo-600 text-indigo-600 rounded-full hover:bg-indigo-600 hover:text-white transition">
            <i class="fas fa-star"></i> Priority Connections
          </button>
          <button class="flex items-center gap-2 px-4 py-2 border-2 border-indigo-600 text-indigo-600 rounded-full hover:bg-indigo-600 hover:text-white transition">
            <i class="fas fa-user-tie"></i> Stand-Out
          </button>
        </div>
      </div>

      <!-- Right CTA Button -->
      <div class="flex items-center">
        <button class="px-6 py-3 border-2 border-blue-600 text-blue-600 rounded-full hover:bg-blue-600 hover:text-white transition">
          Learn More
        </button>
      </div>
    </div>
  </div>
  <!--Featured Jobs End-->


  <!-- <div class="container">
    <div class="advertise"><?php //echo $ads_row->bottom; 
                            ?></div>
  </div> -->


  <!--Footer-->
  <?php $this->load->view('common/footer'); ?>
  <?php $this->load->view('common/before_body_close'); ?>
  <!-- FlexSlider -->
  <script src="<?php echo base_url('public/js/jquery.flexslider.js'); ?>" type="text/javascript"></script>
  <script>
    // Can also be used with $(document).ready()
    $(window).load(function() {
      $('.flexslider').flexslider({
        animation: "slide",
        animationLoop: false,
        itemWidth: 250,
        minItems: 1,
        maxItems: 1
      });
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script>
    // Initialize Swiper
    const swiper = new Swiper('.swiper', {
      loop: true, // Enables infinite looping
      slidesPerView: 4, // Show 2 slides at a time (adjust as needed)
      spaceBetween: 10, // Space between slides in pixels
      // pagination: {
      //   el: '.swiper-pagination',
      //   clickable: true, // Pagination dots are clickable
      // },
      navigation: {
        nextEl: '.swiper-button-next', // Next button
        prevEl: '.swiper-button-prev', // Previous button
      },
      autoplay: {
        delay: 3000, // Automatically slide every 3 seconds
        disableOnInteraction: false, // Continue autoplay even after user interaction
      },
    });
  </script>
</body>

</html>