<template>
  <div id="app" style="background-image: url('./img/good.png'); background-size: cover; background-attachment: fixed;">
      <main>
          <div class="container">

          <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
              <div class="container">
              <div class="row justify-content-center">
                  <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                    <div class="d-flex justify-content-center py-4">
                      <a href="/" class="logo d-flex align-items-center w-auto">
                      <img src="./img/logo1.png" alt="">
                      <span class="d-none d-lg-block" style="font-family:Times New Roman, Times, serif; font-size: 210%;">
                        <i>DILG<sup style="font-size: 70%;">ence</sup></i>
                      </span>
                      </a>
                  </div><!-- End Logo -->

                  <div class="card mb-3">

                      <div class="card-body">

                      <div class="pt-4 pb-2">
                          <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                          <p class="text-center small">Enter your personal details to create account</p>
                      </div>

                      <form class="row g-3 needs-validation" @submit.prevent="signup">

                          <div v-if="message === 'error'">Invalid response</div>
                          <div class="col-12">
                          <label for="username" class="form-label">Username</label>
                          <div class="input-group has-validation">
                              <span class="input-group-text" id="inputGroupPrepend">@</span>
                              <input type="text" name="username" class="form-control" id="username" v-model="username" required>
                              <div class="invalid-feedback">Please choose a username.</div>
                          </div>
                          </div>

                          <div class="col-12">
                          <label for="fullname" class="form-label">Your Fullname</label>
                          <input type="fullname" name="fullname" class="form-control" id="fullname" v-model="fullname" required>
                          <div class="invalid-feedback">Please enter your full name!</div>
                          </div>

                          <div class="col-12">
                          <label for="position" class="form-label">Your Position</label>
                          <input type="position" name="position" class="form-control" id="position" v-model="position" required>
                          <div class="invalid-feedback">Please enter your full name!</div>
                          </div>

                          <div class="col-12">
                          <label for="email" class="form-label">Your Email</label>
                          <input type="email" name="email" class="form-control" id="email" v-model="email" required>
                          <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                          </div>

                          <!-- <div class="col-12">
                          <label for="usertype" class="form-label">User Type</label>
                          <input type="usertype" name="usertype" class="form-control" id="usertype" v-model="usertype" required>
                          <div class="invalid-feedback">Please enter a the user type!</div>
                          </div> -->

                          <div class="col-12">
                          <label for="password" class="form-label">Password</label>
                          <input type="password" name="password" class="form-control" id="password" v-model="password" required>
                          <div class="invalid-feedback">Please enter your password!</div>
                          </div>

                          <div class="col-12">
                          <label for="passwordConfirm" class="form-label">Confirm Password</label>
                          <input type="password" name="passwordConfirm" class="form-control" id="passwordConfirm" v-model="passwordConfirm" required>
                          <div class="invalid-feedback">Please enter the same password above!</div>
                          </div>


                          <div v-if="message === 'passwordMismatch'">Passwords do not match</div>

                          <div class="col-12">
                          <div class="form-check">
                              <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                              <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                              <div class="invalid-feedback">You must agree before submitting.</div>
                          </div>
                          </div>
                          <div class="col-12">
                          <button class="btn btn-primary w-100" type="submit">Create Account</button>
                          </div>
                          <div class="col-12">
                          <p class="small mb-0">Already have an account? <a href="signin">Log in</a></p>
                          </div>
                      </form>

                      </div>
                  </div>

                  <div class="credits">
                      <!-- All the links in the footer should remain intact. -->
                      <!-- You can delete the links only if you purchased the pro version. -->
                      <!-- Licensing information: https://bootstrapmade.com/license/ -->
                      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                  </div>

                  </div>
              </div>
              </div>

          </section>

          </div>
      </main><!-- End #main -->
  </div>
</template>


<script> 
  import router from '@/router'; 
  import axios from 'axios'; 

  export default { 

    data() { 
      return { 
        username: '', 
        fullname: '',
        position: '',
        email: '',
        password: '', 
        passwordConfirm: '', 
        message: [], 
      }; 

    }, 

    methods: { 
      async signup() { 
        if (this.password === this.passwordConfirm) { 
          const data = await axios.post("signup", { 
            username: this.username,
            fullname: this.fullname,
            position: this.position,
            email: this.email,
            password: this.password 
          }); 

          this.message = data.data.msg; 
          if (data.data.msg === 'okay') { 
            this.sendVerificationEmail(data.data.token);
            alert('Registered successfully. Check your email for verification.');
            router.push('/');
          } 
        } else { 
          this.message = "passwordMismatch"; 
        } 
      },

      async sendVerificationEmail(token) {
        const response = await axios.post('send-verification-email', {
          email: this.email,
          token: token,
        });
        
        if (response.data.msg === 'emailSent') {
          alert('Verification email sent. Please check your inbox.');
        } else {
          alert('Failed to send verification email.');
        }
      },
    }
  }; 
</script> 