<!-- the section below contains the login form-->
<section class="login  bg-light py-5">
     <div class="container">
          <div class="row the-row g-0">
             <div class="col-lg-12 text-center py-3">
              
             <h1 class="animate__animated animate__pulse" style="color: #fff;">New Recruiter Account</h1>
            
             <!-- the actual login form begins-->
            <form class="text-center">
                  
                    <div class="form-row py-2 pt-5">
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
                                <input type="Password" autocomplete="current-password" name="password" id="password" class="input-field px-3 text-center" placeholder="Password" style="color:rgb(105, 105, 236);"required>
                                <i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>
                          </div>
                    </div>

                    <div class="form-row py-3 white-text">
                          <div class="offset-6 col-lg-3">
                                <a href="<?php echo base_url('Recruiter/Employer_signup'); ?>"><button type="button" class="btn1">Next</button></a>
                          </div> 
                    </div>
              </div>
                   
            </form>
            <script>
                     const togglePassword = document.querySelector("#togglePassword");
                     const password = document.querySelector("#password");

                     togglePassword.addEventListener("click", function () {
                     // toggle the type attribute
                     const type = password.getAttribute("type") === "password" ? "text" : "password";
                     password.setAttribute("type", type);
            
                         // toggle the icon
                      this.classList.toggle("bi-eye");
                           });

                       // prevent form submit
                       const form = document.querySelector("form");
                       form.addEventListener('submit', function (e) {
                        e.preventDefault();
                        });
              </script>
           
           </div>
     </div>
</section>
</body>
 
 