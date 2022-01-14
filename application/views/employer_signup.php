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
   <nav class=" navbar navbar-expand-lg navbar-light bg-light py-3" role="navigation">
      <div style=" position:fixed;"class="container-fluid blue-navbar" >

        <a class="navbar-brand" href="#">
           <div class="logo-image">
                <img src="../assets/images/1.png" class="img-circle  img-fluid"  alt="our logo" width="140" height="130">
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
<section class="login  bg-light py-5">
     <div class="container">
          <div class="row the-row g-0">
             <div class="col-lg-12 text-center py-3">
              
             <h1 class="animate__animated animate__pulse" style="color: #fff;">New Recruiter Account</h1>
            
             <!-- the actual login form begins-->
            <form class="text-center">
                  <div class="form-row py-2 pt-5">
                      <div class="offset-2 col-lg-8 text-center">
                         <input type="text" class="input-field px-3 text-center" placeholder="Firstname "style="color:rgb(105, 105, 236);" required>
                       </div>
                   </div>

                   <div class="form-row py-2">
                          <div class="offset-2 col-lg-8">
                                <input type="text" class="input-field px-3 text-center" placeholder="Lastname " style="color:rgb(105, 105, 236);" required>
                          </div>
                    </div>

                    <div class="form-row py-2">
                          <div class="offset-2 col-lg-8">
                                <input type="digit" class="input-field px-3 text-center" placeholder="Contact Number " style="color:rgb(105, 105, 236);" required>
                          </div>
                    </div>

                    <div class="form-row py-2">
                          <div class="offset-2 col-lg-8">
                                <input type="email" class="input-field px-3 text-center" placeholder="Email " style="color:rgb(105, 105, 236);"required>
                          </div>
                    </div>

                    <div class="form-row py-2">
                          <div class="offset-2 col-lg-8">
                                <input type="text" class="input-field px-3 text-center" placeholder="Company Name " style="color:rgb(105, 105, 236);" required>
                          </div>
                    </div>

                    <div class="form-row py-2">
                          <div class="offset-2 col-lg-8 ">
                                <input type="text" class="input-field px-3 text-center " placeholder="Your position at the company " style="color:rgb(105, 105, 236);" required>
                          </div>
                    </div>

                      <div class="form-row py-3 white-text">
  
                                   <div class="offset-6 col-lg-3">
                                        <a href="<?php echo base_url('Employer_signup'); ?>"><button type="button" class="btn1">Next</button></a>
                                   </div>
                          
                      </div>
                   </div>
                   
            </form>
           
           </div>
     </div>
</section>
</body>
 
                   
         <!-- Footer -->     
<footer  class="py-5 page-footer text-center font-small cyan darken-3 blue-navbar">
  <div class="container">
      <!-- Grid column -->
       <div class="col-md-12  home-footer">
         <!-- Grid column -->
      
         <div class="row">
      <!-- Grid column -->
      <div class="col-md-2 mx-auto">

                                            <!-- Jobs by province -->
        <p class=" blue-background font-weight-bold text-uppercase mt-3 mb-4">Candidates by location</hp>

        <ul class="list-unstyled ">
          <li>
            <a href="#!" style=" text-decoration: none !important;" class="blue-background mx-2">Gauteng ()</a>
          </li>
          <li>
            <a href="#!" style=" text-decoration: none !important;" class="blue-background mx-2">KwaZulu Natal ()</a>
          </li>
          <li>
            <a href="#!" style=" text-decoration: none !important;" class="blue-background mx-2">Eastern Cape ()</a>
          </li>
          <li>
            <a href="#!" style=" text-decoration: none !important;" class="blue-background mx-2">Limpopo ()</a>
          </li>
          <li>
            <a href="#!" style=" text-decoration: none !important;" class="blue-background mx-2">Western Cape ()</a>
          </li>
          <li>
            <a href="#!" style=" text-decoration: none !important;" class="blue-background mx-2">Northen Cape ()
           </a>
          </li>
          <li>
            <a href="#!" style=" text-decoration: none !important;" class="blue-background mx-2">Mpumalanga ()</a>
          </li>
          <li>
            <a href="#!" style=" text-decoration: none !important;" class="blue-background mx-2">Northen Cape ()
           </a>
          </li>
          <li>
            <a href="#!" style=" text-decoration: none !important;" class="blue-background mx-2">Free State ()</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 mx-auto">

        <!-- Links -->
        <p class="blue-background  font-weight-bold text-uppercase mt-3 mb-4">Search graduates</p>

        <ul class="list-unstyled">
          <li>
            <a href="#!" style=" text-decoration: none !important;" class="blue-background mx-2">computer science &IT ()</a>
          </li>
          <li>
            <a href="#!" style=" text-decoration: none !important;" class="blue-background mx-2">Accounting and Business ()</a>
          </li>
          <li>
            <a href="#!" style=" text-decoration: none !important;" class="blue-background mx-2">Human Resources ()</a>
          </li>
          <li>
            <a href="#!" style=" text-decoration: none !important;"class="blue-background mx-2">Law ()</a>
          </li>
          <li>
            <a href="#!" style=" text-decoration: none !important;" class="blue-background mx-2">Mathematics & Statistics ()</a>
          </li>
          <li>
            <a href="#!" style=" text-decoration: none !important;" class="blue-background mx-2">Agriculture ()</a>
          </li>
          <li>
            <a href="#!" style=" text-decoration: none !important;" class="blue-background mx-2">Engineering ()</a>
          </li>
         
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 mx-auto">

                                  <!-- Jobs by sector -->
        <p class=" blue-background font-weight-bold text-uppercase mt-3 mb-4">Candidates by sector</p>

        <ul class="list-unstyled">
          <li>
            <a href="#!" style=" text-decoration: none !important;" class="blue-background mx-2">IT and Software ()</a>
          </li>
          <li>
            <a href="#!" style=" text-decoration: none !important;" class="blue-background mx-2">Finance ()</a>
          </li>
          <li>
            <a href="#!" style=" text-decoration: none !important;" class="blue-background mx-2">Sales ()</a>
          </li>
          <li>
            <a href="#!" style=" text-decoration: none !important;" class="blue-background mx-2">Engineering ()</a>
          </li>
          <li>
            <a href="#!" style=" text-decoration: none !important;" class=" blue-background mx-2">Manufacturing ()</a>
          </li>
          <li>
            <a href="#!" style=" text-decoration: none !important;" class="blue-background mx-2">Accounting ()</a>
          </li>
          <li>
            <a href="#!"  style=" text-decoration: none !important;" class="blue-background mx-2">Insurance Jobs ()</a>
          </li>
          <li>
            <a href="#!" style=" text-decoration: none !important;" class="blue-background mx-2">Administration ()</a>
          </li>
          <li>
            <a href="#!" style=" text-decoration: none !important;" class="blue-background mx-2">General Workers ()</a>
          </li>
        </ul>
        
      </div>
                        <!--Our contacts-->
      <div class="col-md-2 mx-auto">
     
         <p class=" blue-background font-weight-bold text-uppercase mt-3 mb-4">Our Contacts</p>

           <p class="blue-background mx-2">
              <i class="fas fa-home mr-3"></i> Madadeni, N 93 Section 7, Newcastle, South Africa
           </p>
             
         
            <p  class="blue-background mx-2">
              <i class="fas fa-envelope mr-3"></i> info@cvofchoice.com 
            </p>

            <p class="blue-background mx-2">
               <i class="fas fa-phone mr-3"></i> + 011 0000 000
            </p>
    
      </div>
     

    </div>
  

  </div>
  <hr/>
           <div class="py-5 mb-5 flex-center " >
                       <!-- Facebook -->
               <a class="fb-ic mx-3"  href="">
                  <i class="fab fa-facebook-f fa-lg mr-md-5 fa-2x blue-background " > </i>
               </a>
                        <!-- Twitter -->
               <a class="tw-ic mx-3"  href="">
                    <i class="fab fa-twitter fa-lg mr-md-5 fa-2x blue-background"> </i>
               </a>
                         <!--Linkedin -->
               <a class="li-ic mx-3" href="">
                     <i class="fab fa-linkedin-in fa-lg mr-md-5 fa-2x blue-background "> </i>
               </a>
                 
                         <!--Instagram-->
                <a class="ins-ic mx-3"  href="">
                       <i class="fab fa-instagram fa-lg  mr-md-5  fa-2x blue-background"> </i>
                </a>
            
                <a class=" blue-background mx-3" style=" text-decoration: none !important;" href="#">Terms of Service

                </a>
                          
                       <!-- Copyright -->
            <div  class=" blue-background footer-copyright text-center py-3 mx-2">© 2022 Copyright:
                <a href="#" style=" text-decoration: none !important;" class="blue-background mx-3">CV of Choice</a>
                <p class="blue-background mx-3 py-3">Affiliated with <a href="http://www.creativelizard.co.za" style=" text-decoration: none !important;" class="blue-background">CreativeLizard (Pty) Ltd.</a></p>
            </div>

          </div>
        
      </div>
      
     
  </div>
</footer>
</html>