<!-- the section below contains the login form-->
<section class="login bg-light py-5">
     <div class="container">
          <div class="row the-row g-0">
             <div class="col-lg-12 text-center py-5">
              
             <h1 class="animate__animated animate__pulse" style="color: #fff;">Recruiter Account Login</h1>
            <!-- the actual login form begins-->
            <form class="text-center">
              
                  <div class="form-row py-3 pt-5">
                       <div class="offset-4 col-lg-4 text-center">
                          <i id="filtersubmit" class="fa fa-envelope fa-2x" aria-hidden="true"></i>
                          <input type="text" class="input-field px-3 " placeholder="Email :" required >       
                       </div>
                   </div>

                   <div class="form-row">
                        <div class="offset-4 col-lg-4">
                           <i id="filtersubmit" class="fas fa-lock fa-2x " aria-hidden="true"></i>
                           <input type="passord" class="input-field px-3" placeholder="Password :" required>
                        </div>
                   </div>

                          <div class="form-row py-3 white-text">
                                  <p style="color:white;">No Account yet?<a style=" text-decoration: none !important;color:white;" href="#">  Create Account</a></p>
                                  <div class="offset-5 col-lg-2">
                                       <button class="btn1"><a href="Employer_feed" style=" text-decoration: none !important;">Login</a></button>
                                       <p style="color:white;" class="py-2">forgot password?<a style=" text-decoration: none !important;color:white;" href="#">Click here</a></p>
                                  </div>
                          
                          </div>
                   </div>
                   
            </form>

            <script>
                 const togglePassword = document.querySelector("#togglePassword");
                 const password = document.querySelector("#password");

                 togglePassword.addEventListener("click", function() {
                      // toggle the type attribute
                 const type = password.getAttribute("type") === "password" ? "text" : "password";
                 password.setAttribute("type", type);

                 // toggle the icon
                 this.classList.toggle("bi-eye");
                   });

                    // prevent form submit
                   const form = document.querySelector("form");
                   form.addEventListener('submit', function(e) {
                   e.preventDefault();
                     });

            </script>
           
           </div>
     </div>
</section>