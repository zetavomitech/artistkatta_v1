<!DOCTYPE html>
<html lang="en">

<head>
  <style>
    .fixed-top {
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 50;
    }

    .fixed-top {
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 50;
      /* background: linear-gradient(135deg, #008080 0%, #00bfff 100%); */
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
      transition: all 0.2s ease-in;
    }

    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 20px;
    }

    .navbar-brand img {
      height: 50px;
      /* Update based on your logo's dimensions */
    }

    .navbar-collapse {
      display: flex;
      flex-grow: 1;
      justify-content: flex-end;
    }

    .nav {
      list-style: none;
      padding: 0;
      margin: 0;
      display: flex;
      align-items: center;
    }

    .nav li {
      margin-left: 20px;
    }

    .nav a {
      text-decoration: none;
      color: #ffffff;
      padding: 10px 15px;
      border-radius: 30px;
      transition: all 0.3s ease;
      font-weight: 600;
    }

    .nav a:hover {
      color: #ffcc29;
      /* Change text color on hover */
      background-color: rgba(255, 204, 41, 0.2);
      /* Optional: Background color change on hover */
    }

    /* .usertopbtn {
            display: flex;
            align-items: center;
        } */

    .loginBtn,
    .regBtn {
      text-decoration: none;
      padding: 10px 15px;
      border-radius: 30px;
      transition: all 0.3s ease;
      font-weight: 600;
      color: #ffffff;
      /* Match the link color */
      background-color: transparent;
      /* Transparent background to match the nav links */
    }
    .usertopbtn a.loginBtn:hover{
      color: #ffcc29;
      background-color: rgba(255, 204, 41, 0.2);
    }

    .loginBtn:hover,
    .regBtn:hover {
      color: #ffcc29;
      /* Same hover text color as nav links */
      background-color: rgba(255, 204, 41, 0.2);
      /* Same hover background color as nav links */

    }

    /* .loginBtn,
    .regBtn {
      text-decoration: none !important;
      padding: 10px 20px;
      border-radius: 25px;
      margin-left: 15px;
      transition: background-color 0.3s, color 0.3s, transform 0.3s;
      font-weight: bold;
    } */

    /* .loginBtn {
      background-color: #ffcc29;
      color: #008080;
    } */

    /* .loginBtn:hover {
      background-color: #ffc107;
      transform: translateY(-3px); */
      /* Slight lift on hover */
    /* } */

    .regBtn {
      border: 2px solid #ffcc29;
      color: #ffcc29;
    }

    .regBtn:hover {
      background-color: #ffcc29;
      color: white;
      transform: translateY(-3px);
    }

    .username {
      margin-left: 10px;
      color: #ffcc29;
      text-decoration: none;
      font-weight: bold;
    }

    .username:hover {
      text-decoration: underline;
    }

    @media (max-width: 768px) {
      .navbar-collapse {
        flex-direction: column;
        align-items: flex-start;
        background-color: rgba(0, 128, 128, 0.9);
        position: absolute;
        width: 100%;
        top: 60px;
        left: 0;
        display: none;
        transition: all 0.3s ease;
        padding: 10px 0;
      }

      .navbar-collapse.show {
        display: flex;
      }

      .navbar-header {
        flex: 1;
      }

      .nav {
        flex-direction: column;
        width: 100%;
      }

      .nav li {
        width: 100%;
        text-align: center;
        margin: 10px 0;
      }
    }
    .button-container {
      text-align: right;
      /* display: flex; */
      gap: 15px;
    }

    .button {
      padding: 10px 20px;
      font-size: 16px;
      font-weight: bold;
      border-radius: 5px;
      border: 2px solid #5a55f7;
      cursor: pointer;
      text-align: center;
      transition: background-color 0.3s ease, color 0.3s ease;
    }

    .sign-in {
      background-color: white;
      color: #5a55f7;
    }

    .sign-in:hover {
      background-color: #e6e5fc;
    }

    .sign-up {
      background-color: #5a55f7;
      color: white;
    }

    .sign-up:hover {
      background-color: #4943d0;
    }
  </style>
</head>

<body>
  <div class="topheader fixed-top">
    <div class="navbar navbar-default" role="navigation">
      <div class="col-md-2">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a class="navbar-brand" href="<?php echo base_url(); ?>" title="USA jobs website"><img src="<?php echo base_url('public/images/logo.jpeg'); ?>" alt="USA jobs website" /></a>
        </div>
      </div>
      <div class="col-md-<?php echo ($this->session->userdata('is_user_login') == TRUE) ? '6' : '6'; ?>">
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <?php

            if ($this->session->userdata('is_employer') == TRUE):
            ?>
              <li <?php echo active_link(''); ?>><a href="<?php echo base_url(); ?>"><i class="fa fa-home" aria-hidden="true"></i></a></li>
              <li <?php echo active_link('employer'); ?>><a href="<?php echo base_url('employer/dashboard'); ?>" title="My Dashboard">My Dashboard</a> </li>
              <li <?php echo active_link('search-resume'); ?>><a href="<?php echo base_url('search-resume'); ?>" title="Search Resume">Search Resume</a></li>
              <li <?php echo active_link('contact-us'); ?>><a href="<?php echo base_url('contact-us'); ?>" title="Contact Us">Contact Us</a></li>
              <li <?php echo active_link('indeed_jobs'); ?>><a href="<?php echo base_url('indeed_jobs'); ?>" title="Indeed Jobs">Indeed Jobs</a></li>
            <?php elseif ($this->session->userdata('is_job_seeker') == TRUE): ?>
              <li <?php echo active_link(''); ?>><a href="<?php echo base_url(); ?>"><i class="fa fa-home" aria-hidden="true"></i></a></li>
              <li <?php echo active_link('jobseeker'); ?>><a href="<?php echo base_url('jobseeker/dashboard'); ?>" title="My Dashboard">My Dashboard</a> </li>
              <li <?php echo active_link('search-jobs'); ?>><a href="<?php echo base_url('search-jobs'); ?>" title="Search Jobs">Jobs</a></li>
              <li <?php echo active_link('contact-us'); ?>><a href="<?php echo base_url('contact-us'); ?>" title="Agencies">Agencies</a></li>
              <!-- <li <?php echo active_link('indeed_jobs'); ?>><a href="<?php echo base_url('indeed_jobs'); ?>" title="Indeed Jobs">Indeed Jobs</a></li> -->
            <?php else: ?>
              <li class="inactive" <?php echo active_link(''); ?>><a href="<?php echo base_url(); ?>"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
              <li <?php echo active_link('search-jobs'); ?>><a href="<?php echo base_url('search-jobs'); ?>" title="Search Talent">Talent</a> </li>
              <li <?php echo active_link('search-resume'); ?>><a href="<?php echo base_url('search-resume'); ?>" title="Search Jobs">Jobs</a></li>
              <li <?php echo active_link('about-us.html'); ?>><a href="<?php echo base_url('about-us.html'); ?>" title="Agencies">Agencies</a></li>
              <li <?php echo active_link('contact-us'); ?>><a href="<?php echo base_url('contact-us'); ?>" title="Events">Events</a></li>
              <!-- <li <?php echo active_link('indeed_jobs'); ?>><a href="<?php echo base_url('indeed_jobs'); ?>" title="Indeed Jobs">Indeed Jobs</a></li> -->
            <?php endif; ?>
          </ul>
        </div>
      </div>
      <!--/.nav-collapse -->

      <div class="col-md-<?php echo ($this->session->userdata('is_user_login') == TRUE) ? '4' : '4'; ?>">
        <div class="usertopbtn button-container">
          <?php if ($this->session->userdata('is_user_login') != TRUE): ?>
            <!-- <a href="<?php echo base_url('employer-signup'); ?>" class="lookingbtn">Post a Job</a>
          <a href="<?php echo base_url('jobseeker-signup'); ?>" class="hiringbtn">Job Seeker</a> -->
            <a href="<?php echo base_url('login'); ?>" class="loginBtn button sign-in" title="Jobs openings">Login</a>
            <a href="<?php echo base_url('signup'); ?>" class="loginBtn button sign-up" title="Jobs openings">Signup</a>
          <?php else:
            $c_folder = ($this->session->userdata('is_employer') == TRUE) ? 'employer' : 'jobseeker';
          ?>
            <a href="<?php echo base_url('user/logout'); ?>" class="button regBtn">Logout</a>
            <div class="pull-right loginusertxt">Welcome, <a href="<?php echo base_url($c_folder . '/dashboard'); ?>" class="username"><?php echo $this->session->userdata('first_name'); ?>!</a></div>
          <?php endif; ?>
          <div class="clear"></div>
        </div>
      </div>

      <div class="clearfix"></div>
    </div>
  </div>
</body>

</html>