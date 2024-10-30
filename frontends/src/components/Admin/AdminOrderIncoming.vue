<style scoped>
* {
    margin: 0;
    padding: 0;
}
body {
    background: #f0f4f3;
    font-family: 'Roboto', sans-serif;
}
.button {
    border: 1px solid #fff;
    border-radius: 20px;
    color: #fff;
    font-size: 11px;
    font-weight: 500;
    letter-spacing: 1px;
    padding: 15px 60px;
    text-decoration: none;
    text-transform: uppercase;
}
input[type="email"],
input[type="password"],
input[type="text"] {
    background: #f4f8f7;
    border: none;
    font-weight: 300;
    margin: 5px;
    padding: 10px;
    width: 280px;
}
.submit-btn {
    border: none;
    border-radius: 25px;
    color: #fff;
    cursor: pointer;
    font-size: 11px;
    letter-spacing: 1px;
    margin-top: 20px;
    padding: 15px 50px;
    text-transform: uppercase;
}
#login .submit-btn {
    background: #3aa7b1;
}
#register .submit-btn {
    background: #3aaf9f;
}
#container {
    background: white;
    border-radius: 10px;
    height: 670px;
    margin: 5% auto;
    overflow: hidden;
    width:700px;
}
.social-login {
    border: 1px solid #ccc;
    border-radius: 50px;
    height: 15px;
    padding: 10px;
    width: 15px;
}
#login {
    background: #fff;
    float: left;
    height: 150%;
    position: relative;
    width: 50%;
    text-align: center;
    top: -550px;
    z-index: 1;
}
#register {
    background: #fff;
    float: right;
    height: 100%;
    position: relative;
    width: 50%;
    text-align: center;
    bottom: 106%;
    z-index: 1;
}
#login h1,
#register h1 {
    padding: 20% 0 25px;
}
#login h1 {
    color: #3aa7b1;
}
#register h1 {
    color: #3aaf9f;
}
#login p,
#register p {
    font-size: 12px;
    font-weight: 300;
    letter-spacing: 0.3px;
    padding: 20px;
}
#forgot-pass {
    border-bottom: 1px solid #ccc;
    color: #000;
    font-size: 12px;
    font-weight: 500;
    letter-spacing: 0.3px;
    padding: 3px;
    text-decoration: none;
}
#cover {
    background: #3aa7b1;
    color: #fff;
    height: 680px;
    margin: 0 0 0 50%;
    position: relative;
    text-align: center;
    transition: margin 0.7s, background 0.5s, display 1s, width 1s;
    width: 50%;
    z-index: 5;
    size: 100px;
}
#cover h1 {
    padding-top: 38%;
}
#cover p {
    font-weight: 300;
    line-height: 22px;
    padding: 30px 45px 40px;
}
.sign-in {
    display: none;
}
.sub {
    position: relative;
    top: -11px;
}
#cover:target {
    background: #3aaf9f;
    margin: 0;
}
#cover:target .sign-up {
    display: none;
}
#cover:target .sign-in {
    display: inline-block;
}
#cover:target .login-div {
    width: 35%;
}
@media (max-width: 768px) {
    #container {
        flex-direction: column;
        height: auto;
    }
    #login, #register {
        width: 100%;
    }
    #cover {
        position: relative;
        width: 100%;
        height: auto;
        margin: 0;
    }
    #cover:target {
        width: 100%;
    }
}
</style>
<template>
    <div id="app" style="background-image: url('./img/bg.png'); background-size: cover; background-attachment: fixed; height: 100%;">
      <div id="info">
      </div>
      <div id="container">
          <!-- Cover Box -->
          <div id="cover">
              <!-- Sign Up Section -->
              <h1 class="sign-up">Hello, Friend!</h1>
              <p class="sign-up">Enter your personal details<br> and start a journey with us</p>
              <a class="button sign-up" href="#cover">Sign Up</a>
              <!-- Sign In Section -->
              <h1 class="sign-in">Welcome Back!</h1>
              <p class="sign-in">To keep connected with us please<br> login with your personal info</p>
              <br>
              <a class="button sub sign-in" href="#">Sign In</a>
          </div>
          <!-- Login Box -->
          <div id="login">
              <h1>Login to Your Account</h1>
              <p>Enter your username & password to login</p>
              <form>
                  <div>
                      <label for="login-username">Username</label>
                      <div class="input-group">
                          <span class="input-group-text" id="inputGroupPrepend">@</span>
                          <input type="text" name="username" id="login-username" required>
                      </div>
                  </div>
                  <div>
                      <label for="login-password">Password</label>
                      <input type="password" name="password" id="login-password" required>
                  </div>
                  <div>
                      <p class="small mb-0">Don't have an account? <a href="#cover">Create an account</a></p>
                  </div>
                  <input class="submit-btn" type="submit" value="Log In">
              </form>
          </div>
          <!-- Register Box -->
          <div id="register">
              <h1>Create an Account</h1>
              <p>Enter your personal details to create account</p>
              <form>
                  <div>
                      <label for="register-username">Username</label>
                      <div class="input-group">
                          <span class="input-group-text" id="inputGroupPrepend">@</span>
                          <input type="text" name="username" id="register-username" required>
                      </div>
                  </div>
                  <div>
                      <label for="register-fullname">Your Full Name</label>
                      <input type="text" name="fullname" id="register-fullname" required>
                  </div>
                  <div>
                      <label for="register-position">Your Position</label>
                      <input type="text" name="position" id="register-position" required>
                  </div>
                  <div>
                      <label for="register-email">Your Email</label>
                      <input type="email" name="email" id="register-email" required>
                  </div>
                  <div>
                      <label for="register-password">Password</label>
                      <input type="password" name="password" id="register-password" required>
                  </div>
                  <div>
                      <label for="register-password-confirm">Confirm Password</label>
                      <input type="password" name="passwordConfirm" id="register-password-confirm" required>
                  </div>
                  <div>
                      <div>
                          <input type="checkbox" name="terms" id="accept-terms" required>
                          <label for="accept-terms">
                              I agree and accept the <a href="#">terms and conditions</a>
                          </label>
                      </div>
                  </div>
                  <div>
                      <input class="submit-btn" type="submit" value="Sign Up">
                  </div>
                  <div>
                      <p class="small mb-0">Already have an account? <a href="#cover">Log in</a></p>
                  </div>
              </form>
          </div>
      </div>
        </div>
      </template>
    
    
    <script>
    
    // Components

    
    </script>
    