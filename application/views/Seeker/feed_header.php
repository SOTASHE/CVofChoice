<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Optimizing icon for all device screen sizes-->
    <link rel="apple-touch-icon" sizes="180x180" href="<?=base_url()?>../assets/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=base_url()?>../assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url()?>../assets/images/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <!-- animate.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- Linking  Custom CSS and javascript-->
    <script type='text/javascript' src="<?php echo base_url(); ?>../assets/javascript/main.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>../assets/css/landing.css">
    <script type='text/javascript' src="<?php echo base_url(); ?>js/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/01cb51acf5.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=MuseoModerno:wght@600&display=swap" rel="stylesheet">
    <title>Job Seeker Feed| CV of Choice</title>
</head>
<body>   
<section class= "img-fluid py-5">
 <nav class="py-3 navbar navbar-expand-lg navbar-light bg-light" role="navigation">
    <div style="position:fixed;"class="container-fluid blue-navbar" >
        <a class="navbar-brand" href="#">
          <div class="logo-image">
           <img src="<?=base_url()?>../assets/images/3.png" class="img-circle img-fluid"  alt="our logo" width="130" height="120">
          </div>
        </a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
         <form style="color: white;" class="d-flex">
             <input style="color: rgb(105, 105, 236);" class="form-control me-2" type="search" placeholder="job title, keywords" aria-label="Search">
             <input style="color: rgb(105, 105, 236);" class="form-control me-2" type="search" placeholder="city or province" aria-label="Search">
             <button style="color: white; border: none;"  class="btn btn-outline-success" type="submit">Search </button>
          </form>
          <li class="nav-item">
             <a style="color: white;" class="nav-link" href="<?php echo base_url('');?>"><i class="fa fa-envelope-o fa-2x" aria-hidden="true"></i></a>
          </li>

          <li class="nav-item">
             <a style="color: white;" class="nav-link" href="#"><i class="fa fa-bell fa-2x" aria-hidden="true"></i></a>
         </li>

         <li class="nav-item">
            <a style="color: white;" class="nav-link" href="#"><i class="fa fa-user-circle-o fa-2x" aria-hidden="true"></i></a>
        </li>
       </ul>
     </div>
  </div>
  <!--navbar ends-->
</nav>