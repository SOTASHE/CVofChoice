<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Optimizing icon for all devices-->
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <!-- animate.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- Linking  Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>../assets/css/landing.css">
    <script type='text/javascript' src="<?php echo base_url(); ?>js/jquery.min.js"></script>
    <!--<script type='text/javascript' src="<?php echo base_url(); ?>../assets/javascript/main.js"></script>-->
  
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/01cb51acf5.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=MuseoModerno:wght@600&display=swap" rel="stylesheet">

    <title>Home | CV of Choice</title>
    </head>
<body>   
<section class= "img-fluid py-5" style="background-image:url('<?=base_url()?>../assets/images/jobs.png')">
 <nav class="py-3 navbar navbar-expand-lg navbar-light bg-light" role="navigation">
    <div style="position:fixed;"class="container-fluid blue-navbar" >
        <a class="navbar-brand" href="#">
          <div class="logo-image">
           <img src="../assets/images/official.png" class="img-circle img-fluid"  alt="our logo" width="140" height="130">
          </div>
        </a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a style="color: white;" class="nav-link">
              <select id="register" onchange="location = this.value;">
                  <option hidden>New Account</option>
                  <option value="<?php echo base_url('Seeker_Signup');?>">Job Seeker</option>
                  <option value="<?php echo base_url('Signup');?>">Recruiter</option>   
              </select>
          </a>
        </li>
        <li class="nav-item">
          <a style="color: white;" class="nav-link">
          <select id="login" onchange="location = this.value;">
                  <option hidden>Login</option>
                  <option value="<?php echo base_url('Signin');?>">Job Seeker</option>
                  <option value="<?php echo base_url('Recruiter_signin');?>">Recruiter</option>
             </select>
        </a>
        </li>
     

        <li class="nav-item">
          <a style="color: white;" class="nav-link" href="<?php echo base_url('About_us');?>">About Us</a>
        </li>

        <li class="nav-item">
          <a style="color: white;" class="nav-link" href="#">Resume Education</a>
        </li>
        </ul>

      <form style="color: white;" class="d-flex">
        <input style="color: rgb(105, 105, 236);" class="form-control me-2" type="search" placeholder="Search Job" aria-label="Search">
        <button style="color: white; border: none;"  class="btn btn-outline-success" type="submit">Search </button>
      </form>
    </div>
  </div>
</nav>
<div style="max-width: 1200px; margin:0px auto; padding: 46px;">

<div class="container the-container" >
<h1 style="color:rgb(105, 105, 236)" class="animate__animated animate__pulse header-adjuster ">Increasing access to employment .</h1>
    <div class="row" style="padding:20px;">
         
          <div class="col-md-4 blue-box text-center" style="color:white;">
            <div class="box">
                  <a href="#"><i class="fas fa-search fa-4x py-2 animate__animated animate__heartBeat animate__infinite" style="color:white;"></i></a>
                  <h4>Search for vacancies </h4>
            </div>
        </div>

          <div class="col-md-3 blue-box text-center" style="color:white;">
          <a href="#"> <i class="fas fa-upload fa-4x py-2 animate__animated animate__heartBeat animate__infinite" style="color:white;" ></i></a>
          <h4>Post a job</h4>
          </div>

             <div class="col-md-4 blue-box text-center" style="color:white;">
                  <a href="#">  <i class='fas fa-edit fa-4x py-2 animate__animated  animate__heartBeat animate__infinite' style="color:white;"></i></a>
                      <h4>Create a paperless resume</h4>
             </div>
        
     </div>
</div>
</section> 
<!--navbar ends-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
            
<footer  class="page-footer text-center font-small cyan darken-3 blue-navbar">

  <div class="container">
    <!-- Grid row-->
     <div class="image-adjust">
      <!-- Grid column -->
       <div class="col-md-12 py-5 home-footer " >
        <div class="mb-5 flex-center" style="color: white; padding: 7px 15px; margin: 0px 15px;" >
          <!-- Facebook -->
          <a class="fb-ic " style="background-color: rgb(105, 105, 236); color: white; padding: 7px 15px; margin: 0px 15px;" href="">
            <i class="fab fa-facebook-f fa-lg mr-md-5 mr-3 fa-3x" > </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic" style="background-color: rgb(105, 105, 236); color: white; padding: 7px 15px; margin: 0px 15px;" href="">
            <i class="fab fa-twitter fa-lg mr-md-5 mr-3 fa-3x"> </i>
          </a>
          <!--Linkedin -->
            <a class="li-ic"style="background-color: rgb(105, 105, 236); color: white; padding: 7px 15px; margin: 0px 15px;" href="">
                     <i class="fab fa-linkedin-in fa-lg mr-md-5 mr-3 fa-3x"> </i>
            </a>
                 <!--Instagram-->
            <a class="ins-ic" style=" background-color: rgb(105, 105, 236); color: white; padding: 7px 15px; margin: 0px 15px;" href="">
                      <i class="fab fa-instagram fa-lg  mr-md-5 mr-3 fa-3x"> </i>
            </a>

            <div class="footer-copyright text-center py-3">© 2021 Copyright:
                    <a href="#" style="color: white;">CV of Choice</a>
              </div>
        </div>
         <!-- Copyright -->
            
      </div>
      <!-- Grid column -->
    </div>
    <!-- Grid row-->
  </div>
</footer>
<!-- Footer -->

</html>