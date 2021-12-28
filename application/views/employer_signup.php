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
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/01cb51acf5.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=MuseoModerno:wght@600&display=swap" rel="stylesheet">
    <title>Recruiter New Account | CV of Choice</title>
</head>

<body>
<section class="py-5">
   <nav class="py-3 navbar navbar-expand-lg navbar-light bg-light" role="navigation">
    <div style=" position:fixed;"class="container-fluid blue-navbar" >

      <a class="navbar-brand" href="#">
        <div class="logo-image">
              <img src="../assets/images/official.png" class="img-circle  img-fluid"  alt="our logo" width="140" height="130">
        </div>
      </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
         <li class="nav-item">
              <a style="color: white;" class="nav-link" href="<?php echo base_url('Landing_page');?>">Home</a>
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
          <a style="color: white;" class="nav-link" href="#">Resume Education</a>
        </li>

        <li class="nav-item">
          <a style="color: white;" class="nav-link" href="<?php echo base_url('About_us');?>">About Us</a>
        </li>
    </ul>
  </div>
</div>
</nav>
</section>

<!-- the section below contains the login form-->
<section class="login py-5 bg-light my-5">
     <div class="container">
          <div class="row the-row g-0">
             <div class="col-lg-12 text-center py-5">
              
             <h1 class="animate__animated animate__pulse" style="color: #fff;">New Recruiter Account</h1>
            
             <!-- the actual login form begins-->
            <form class="text-center">
                  <div class="form-row py-2 pt-5">
                      <div class="offset-2 col-lg-8 text-center">
                         <input type="text" class="inp px-3 text-center" placeholder="Firstname "style="color:rgb(105, 105, 236);" required>
                       </div>
                   </div>

                   <div class="form-row py-2">
                          <div class="offset-2 col-lg-8">
                                <input type="text" class="inp px-3 text-center" placeholder="Lastname " style="color:rgb(105, 105, 236);" required>
                          </div>
                    </div>

                    <div class="form-row py-2">
                          <div class="offset-2 col-lg-8">
                                <input type="digit" class="inp px-3 text-center" placeholder="Contact Number " style="color:rgb(105, 105, 236);" required>
                          </div>
                    </div>

                    <div class="form-row py-2">
                          <div class="offset-2 col-lg-8">
                                <input type="email" class="inp px-3 text-center" placeholder="Email " style="color:rgb(105, 105, 236);"required>
                          </div>
                    </div>

                    <div class="form-row py-2">
                          <div class="offset-2 col-lg-8">
                                <input type="text" class="inp px-3 text-center" placeholder="Company Name " style="color:rgb(105, 105, 236);" required>
                          </div>
                    </div>

                    <div class="form-row py-2">
                          <div class="offset-2 col-lg-8 ">
                                <input type="text" class="inp px-3 text-center " placeholder="Your position at the company " style="color:rgb(105, 105, 236);" required>
                          </div>
                    </div>

                      <div class="form-row py-3 white-text">
  
                                   <div class="offset-6 col-lg-3">
                                          <form method="POST" action="<?php  echo base_url(); ?>​Signup">
                                              <button type="submit" class="btn1">Next</button>
                                          </form>
                                   </div>
                          
                      </div>
                   </div>
                   
            </form>
           
           </div>
     </div>
</section>
  </body>
  <footer class="page-footer text-center font-small cyan darken-3 blue-navbar">
  <!-- Footer Elements -->
  <div class="container">
    <!-- Grid row-->
    <div class="row">
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

            <div class="footer-copyright text-center py-5">2021 Copyright © <a href="#" style="color: white;">CV of Choice</a>.&nbsp; All rights reserved
                    
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