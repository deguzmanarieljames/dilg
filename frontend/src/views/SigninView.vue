<template>
  <div id="app">
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
                          <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                          <p class="text-center small">Enter your username & password to login</p>
                      </div>

                      <form class="row g-3" @submit.prevent="signin">

                          <div class="col-12">
                          <label for="username" class="form-label">Username</label>
                          <div class="input-group ">
                              <span class="input-group-text" id="inputGroupPrepend">@</span>
                              <input type="text" name="username" class="form-control" id="username" v-model="username" required>
                              <div class="invalid-feedback">Please enter your username.</div>
                          </div>
                          </div>

                          <div class="col-12">
                          <label for="password" class="form-label">Password</label>
                          <input type="text" name="password" class="form-control" id="password" v-model="password" required>
                          <div class="invalid-feedback">Please enter your password!</div>
                          </div>

                          <div class="col-12">
                          <button class="btn btn-primary w-100" type="submit">Login</button>
                          </div>
                          <div class="col-12">
                          <p class="small mb-0">Don't have account? <a href="pages-register.html">Create an account</a></p>
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
          return{
              username: "",
              password: "",
              errorMsg: [],
          }
      },
      methods: {
        async signin(){
            const signdata = await axios.post("signin",{
                username: this.username,
                password: this.password
            });
            console.log(signdata.data);
        }
      }
  }
</script>