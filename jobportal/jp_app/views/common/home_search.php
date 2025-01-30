<!DOCTYPE html>
<html lang="en">

<head>
  <style>
    .flex {
      display: flex;
    }

    .flex-wrap {
      flex-wrap: wrap;
    }

    .justify-center {
      justify-content: center;
    }

    .gap-4 {
      gap: 1rem;
    }

    .items-center {
      align-items: center;
    }

    .gap-3 {
      gap: 0.75rem;
    }

    .px-6 {
      padding-left: 1.5rem;
      padding-right: 1.5rem;
    }

    .py-4 {
      padding-top: 1rem;
      padding-bottom: 1rem;
    }

    .bg-white {
      background-color: white;
    }

    .text-gray-700 {
      color: #4a5568;
    }

    .rounded-xl {
      border-radius: 0.75rem;
    }

    .shadow-md {
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .hover\:shadow-lg:hover {
      box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15);
    }

    .hover\:scale-105:hover {
      transform: scale(1.05);
    }

    .transition-transform {
      transition: transform 0.2s ease-in-out;
    }

    .text-indigo-600 {
      color: #5a67d8;
    }

    .text-xl {
      font-size: 1.25rem;
    }

    .bg-indigo-100 {
      background-color: #ebf4ff;
    }

    .p-2 {
      padding: 0.5rem;
    }

    .rounded-full {
      border-radius: 9999px;
    }

    .font-medium {
      font-weight: 500;
    }

    /* General Button Styles */
    .talent-button {
      font-family: 'Roboto', sans-serif;
      background: rgba(0, 128, 255, 0.15);
      /* Transparent background with custom color */
      backdrop-filter: blur(10px);
      /* Glass effect */
      border: 2px solid rgba(0, 128, 255, 0.3);
      /* Border with custom color */
      border-radius: 30px;
      padding: 12px 24px;
      margin: 5px;
      font-size: 16px;
      color: #fff;
      text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
      cursor: pointer;
      transition: all 0.3s ease;
      box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
      /* Subtle shadow */
    }

    /* Hover Effects */
    .talent-button:hover {
      background: rgba(0, 128, 255, 0.25);
      /* Slightly darker shade on hover */
      border-color: rgba(0, 128, 255, 0.5);
      transform: scale(1.05);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
    }

    /* Icon Styles */
    .talent-button i {
      margin-right: 10px;
      font-size: 18px;
      color: #ffdf00;
      /* Gold color for icons */
    }

    /* Active Button Styles */
    .talent-button:active {
      transform: scale(0.98);
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }


    /* padding-top: 50px; */
    /* Adjust depending on the navbar height to avoid content overlap */
  </style>
</head>


<?php if ($this->session->userdata('is_user_login') != TRUE): ?>


  <div class="candidatesection" style="display: inline;">

    <h1 style="color:red">Find Your Dream Opportunity. </h1>

    <?php echo form_open_multipart('job_search/search', array('name' => 'jsearch', 'id' => 'jsearch')); ?>
    <div class="col-md-10">
      <input type="text" required name="job_params" id="job_params" class="form-control" placeholder="Search for talents, jobs, or agencies..." />
    </div>

    <!-- <div class="col-md-4">
      <select class="form-control" name="jcity" id="jcity">
      	
        <option value="" selected>Select City</option>
        <?php if ($cities_res): foreach ($cities_res as $cities): ?>
        	<option value="<?php echo $cities->city_name; ?>"><?php echo $cities->city_name; ?></option>
        <?php endforeach;
        endif; ?>
      </select>
    </div> -->

    <div class="col-md-2">
      <input type="submit" name="job_submit" class="btn" id="job_submit" value="Search" />
    </div>
    <?php echo form_close(); ?>
    <div class="clear"></div>
  </div>





  <div class="employersection">
    <!-- <h3>Get Started Now</h3> -->
    <h2 className="text-3xl font-bold mb-6 text-white">Explore Talent Categories</h2>
    <!-- <a href="<?php echo base_url('employer/post_new_job'); ?>" class="postjobbtn" title="USA jobs">Post a Job</a>
      <input type="submit" value="Upload Resume" title="job search engine USA" class="btn" alt="job search engine USA" onClick="document.location='<?php echo base_url('login'); ?>'" />
      <div class="clear"></div> -->
    <div class="flex flex-wrap justify-center gap-4">
      <button class="flex items-center gap-3 px-6 py-4 bg-white text-gray-700 rounded-xl shadow-md hover:shadow-lg hover:scale-105 transition-transform talent-button">
        <span class="text-indigo-600 text-xl bg-indigo-100 p-2 rounded-full">
          <i class="fas fa-music"></i>
        </span>
        <span class="font-medium">Music</span>
      </button>
      <button class="flex items-center gap-3 px-6 py-4 bg-white text-gray-700 rounded-xl shadow-md hover:shadow-lg hover:scale-105 transition-transform talent-button">
        <span class="text-indigo-600 text-xl bg-indigo-100 p-2 rounded-full">
          <i class="fas fa-microphone-alt"></i>
        </span>
        <span class="font-medium">Singer</span>
      </button>
      <button class="flex items-center gap-3 px-6 py-4 bg-white text-gray-700 rounded-xl shadow-md hover:shadow-lg hover:scale-105 transition-transform talent-button">
        <span class="text-indigo-600 text-xl bg-indigo-100 p-2 rounded-full">
          <i class="fas fa-paint-brush"></i>
        </span>
        <span class="font-medium">Painter</span>
      </button>
      <button class="flex items-center gap-3 px-6 py-4 bg-white text-gray-700 rounded-xl shadow-md hover:shadow-lg hover:scale-105 transition-transform talent-button">
        <span class="text-indigo-600 text-xl bg-indigo-100 p-2 rounded-full">
          <i class="fas fa-theater-masks"></i>
        </span>
        <span class="font-medium">Actor</span>
      </button>
      <button class="flex items-center gap-3 px-6 py-4 bg-white text-gray-700 rounded-xl shadow-md hover:shadow-lg hover:scale-105 transition-transform talent-button">
        <span class="text-indigo-600 text-xl bg-indigo-100 p-2 rounded-full">
          <i class="fas fa-user-tie"></i>
        </span>
        <span class="font-medium">Casting Director</span>
      </button>
      <button class="flex items-center gap-3 px-6 py-4 bg-white text-gray-700 rounded-xl shadow-md hover:shadow-lg hover:scale-105 transition-transform talent-button">
        <span class="text-indigo-600 text-xl bg-indigo-100 p-2 rounded-full">
          <i class="fas fa-shoe-prints"></i>
        </span>
        <span class="font-medium">Dancer</span>
      </button>
    </div>
  </div>


  <?php else:

  if ($this->session->userdata('is_employer') == TRUE): ?>
    <div class="col-md-12">
      <div class="employersection">
        <div class="col-md-6 col-md-offset-3">
          <h1>Search Resume</h1>
          <?php echo form_open_multipart('resume_search/search', array('name' => 'rsearch', 'id' => 'rsearch')); ?>
          <div class="input-group">
            <input type="text" name="resume_params" class="form-control" id="resume_params" placeholder="Search Resume with Skill or Job Title" />
            <span class="input-group-btn">
              <input type="submit" name="resume_submit" class="btn" id="resume_submit" value="Search" />
            </span>
          </div>
          <?php echo form_close(); ?>
        </div>
        <div class="col-md-12">
          <h1>New Company Get Started</h1>
          <a href="<?php echo base_url('employer/post_new_job'); ?>" class="postjobbtn" title="USA jobs">Post a Job</a>
          <div class="clear"></div>
        </div>
        <div class="clear"></div>
      </div>
    </div>
  <?php else: ?>
    <div class="candidatesection" style="display: inline;">

      <h1 style="color:red">Find Your Dream Opportunity. </h1>

      <?php echo form_open_multipart('job_search/search', array('name' => 'jsearch', 'id' => 'jsearch')); ?>
      <div class="col-md-10">
        <input type="text" required name="job_params" id="job_params" class="form-control" placeholder="Search for talents, jobs, or agencies..." />
      </div>

      <!-- <div class="col-md-4">
<select class="form-control" name="jcity" id="jcity">
  
  <option value="" selected>Select City</option>
  <?php if ($cities_res): foreach ($cities_res as $cities): ?>
    <option value="<?php echo $cities->city_name; ?>"><?php echo $cities->city_name; ?></option>
  <?php endforeach;
    endif; ?>
</select>
</div> -->

      <div class="col-md-2">
        <input type="submit" name="job_submit" class="btn" id="job_submit" value="Search" />
      </div>
      <?php echo form_close(); ?>
      <div class="clear"></div>
    </div>

    <div class="employersection">
      <!-- <h3>Get Started Now</h3> -->
      <h2 className="text-3xl font-bold mb-6 text-white">Explore Talent Categories</h2>
      <!-- <a href="<?php echo base_url('employer/post_new_job'); ?>" class="postjobbtn" title="USA jobs">Post a Job</a>
      <input type="submit" value="Upload Resume" title="job search engine USA" class="btn" alt="job search engine USA" onClick="document.location='<?php echo base_url('login'); ?>'" />
      <div class="clear"></div> -->
      <div class="flex flex-wrap justify-center gap-4">
        <button class="flex items-center gap-3 px-6 py-4 bg-white text-gray-700 rounded-xl shadow-md hover:shadow-lg hover:scale-105 transition-transform talent-button">
          <span class="text-indigo-600 text-xl bg-indigo-100 p-2 rounded-full">
            <i class="fas fa-music"></i>
          </span>
          <span class="font-medium">Music</span>
        </button>
        <button class="flex items-center gap-3 px-6 py-4 bg-white text-gray-700 rounded-xl shadow-md hover:shadow-lg hover:scale-105 transition-transform talent-button">
          <span class="text-indigo-600 text-xl bg-indigo-100 p-2 rounded-full">
            <i class="fas fa-microphone-alt"></i>
          </span>
          <span class="font-medium">Singer</span>
        </button>
        <button class="flex items-center gap-3 px-6 py-4 bg-white text-gray-700 rounded-xl shadow-md hover:shadow-lg hover:scale-105 transition-transform talent-button">
          <span class="text-indigo-600 text-xl bg-indigo-100 p-2 rounded-full">
            <i class="fas fa-paint-brush"></i>
          </span>
          <span class="font-medium">Painter</span>
        </button>
        <button class="flex items-center gap-3 px-6 py-4 bg-white text-gray-700 rounded-xl shadow-md hover:shadow-lg hover:scale-105 transition-transform talent-button">
          <span class="text-indigo-600 text-xl bg-indigo-100 p-2 rounded-full">
            <i class="fas fa-theater-masks"></i>
          </span>
          <span class="font-medium">Actor</span>
        </button>
        <button class="flex items-center gap-3 px-6 py-4 bg-white text-gray-700 rounded-xl shadow-md hover:shadow-lg hover:scale-105 transition-transform talent-button">
          <span class="text-indigo-600 text-xl bg-indigo-100 p-2 rounded-full">
            <i class="fas fa-user-tie"></i>
          </span>
          <span class="font-medium">Casting Director</span>
        </button>
        <button class="flex items-center gap-3 px-6 py-4 bg-white text-gray-700 rounded-xl shadow-md hover:shadow-lg hover:scale-105 transition-transform talent-button">
          <span class="text-indigo-600 text-xl bg-indigo-100 p-2 rounded-full">
            <i class="fas fa-shoe-prints"></i>
          </span>
          <span class="font-medium">Dancer</span>
        </button>
      </div>
    </div>

    <!-- <div class="col-md-12">
        <div class="candidatesection">
          <div class="row">

            <div class="col-md-8 col-md-offset-2">
              <h1>Search a job</h1>
              <? php // echo form_open_multipart('job_search/search', array('name' => 'jsearch', 'id' => 'jsearch')); 
              ?>
              <div class="input-group">
                <input type="text" name="job_params" id="job_params" class="form-control" placeholder="Job title or Skill" />
                <span class="input-group-btn">
                  <input type="submit" name="job_submit" id="job_submit" class="btn" value="Find" />
                </span>
              </div>
              <? php // echo form_close(); 
              ?>
            </div>

            <div class="col-md-12">
              <div class="employersection">
                <h3>Upload your resume</h3>
                <input type="submit" value="Upload Resume" title="job search engine USA" class="postjobbtn" alt="job search engine USA" onClick="document.location='<?php echo base_url('login'); ?>'" />
              </div>
              <div class="clear"></div>
            </div>
          </div>
          <div class="clear"></div>
        </div>
      </div> -->
  <?php endif; ?>
<?php endif; ?>