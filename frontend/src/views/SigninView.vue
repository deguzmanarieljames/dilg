<template>
    <div id="app" style="background-image: url('./img/color.jpg'); background-size: cover; background-attachment: fixed; height: 100%;">
        <main>
          <div class="container">

          <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
              <div class="container">
              <div class="row justify-content-center">
                  <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">


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
                                <input type="password" name="password" class="form-control" v-model="password" required>
                                <div class="invalid-feedback">Please enter your password!</div>
                          </div>

                          <div class="col-12">
                          <button class="btn btn-primary w-100" type="submit">Login</button>
                          </div>
                          <div class="col-12">
                          <p class="small mb-0">Don't have account? <a href="signup">Create an account</a></p>
                          </div>
                      </form>

                      </div>
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
import axios from 'axios';
import router from '@/router'


// import { initializeApp } from "firebase/app";
// import { getMessaging, getToken, onMessage } from "firebase/messaging";


//         const firebaseConfig = {
//         apiKey: "AIzaSyBYJFAEo7DoVcirECtaIzoqqAYn2OLW2qk",
//         authDomain: "ci4-backend-firebase.firebaseapp.com",
//         projectId: "ci4-backend-firebase",
//         storageBucket: "ci4-backend-firebase.appspot.com",
//         messagingSenderId: "876476699989",
//         appId: "1:876476699989:web:6c7fa2d9fe158d32530bdc",
//         measurementId: "G-NC5RW3RMWM"
//         };

//         // Initialize Firebase
//         const app = initializeApp(firebaseConfig);


//         const messaging = getMessaging();

//         onMessage(messaging, (payload) => {
//         console.log('Message received. ', payload);
//         // ...
//         });

//         getToken(messaging, { vapidKey: 'BGC0t0CBZEcyecRGyJXhY7CyvVyoMtwfBk9jkDR8JUyQyHG6OnTX7Ej-veEyaLOHHrtq34u8mhfpe5HRADwba4o' }).then((currentToken) => {
//         if (currentToken) {
//             // Send the token to your server and update the UI if necessary
//             console.log("Token is:",currentToken)
//             // ...
//         } else {
//             // Show permission request UI
//             console.log('No registration token available. Request permission to generate one.');
//             // ...
//         }
//         }).catch((err) => {
//         console.log('An error occurred while retrieving token. ', err);
//         // ...
//         });


  export default {
      data() {
          return{
              username: '',
              fullname: '',
              position: '',
              status:'',
              password: '',
              message: [],
          }
      },
      methods: {
        async signin(){
            const signdata = await axios.post("signin",{
                username: this.username,
                fullname: this.fullname,
                position: this.position,
                status: this.status,
                password: this.password
            });
            this.message = signdata.data.msg;
            if(signdata.data.msg === 'okay'){
                if(signdata.data.usertype === 'admin'){
                    sessionStorage.setItem("token", signdata.data.token);
                    router.push('/dashboard');
                }else if(signdata.data.usertype === 'user'){
                    if(signdata.data.verify === 'Successful'){
                        if(signdata.data.status === 'Approved'){
                        sessionStorage.setItem("token", signdata.data.token);
                        // sessionStorage.setItem("fullname", signdata.data.fullname);
                        // sessionStorage.setItem("position", signdata.data.position);
                        router.push('/empdashboard');
                        }else if(signdata.data.status === 'Declined'){
                            alert('Your account has been declined!');
                        }else{
                            alert('Your account has not yet been approved!');
                        }
                    }
                    else if(signdata.data.verify === 'Failed'){
                        alert('You have failed to verify your account!');
                    }
                    else{
                        alert('Your account has not yet been verified!');
                    }
                }else if(signdata.data.usertype === 'officer'){
                    sessionStorage.setItem("token", signdata.data.token);
                    router.push('/offadmin');
                }
            }else{
                alert("Wrong credentials"); 
                router.push('/');
            }
        }
      }
  }
</script>

<style scoped>
.logo {
    display: flex;
    align-items: center;
  }
  
  .logo-img {
    max-height: 60px;
    margin-right: 0.5rem;
  }
</style>