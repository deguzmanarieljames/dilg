<template>
    <div class="landing-page">
      <!-- Header Section -->
      <header class="header">
        <div class="logo">
            <img src="./img/dilg-logo1.png" alt="" 
                style="position: absolute; max-height: 220px; max-width: 220px; margin-left: -42px; z-index: 1;">
            <span class="glow-text">
                INVENTrack
            </span>
        </div>
        <button class="signin-btn" @click="goToSignIn">Sign In</button>
      </header>
  
      <!-- Body Section -->
      <div class="body">
        <div class="content">
            <img src="./img/dilg-logo.png" alt="Additional Image" class="additional-image" />
          <div class="welcome-message">
            <h1>Welcome to InvenTrack DILG</h1>
            <p>This system helps you monitor your supplies and equipment.</p>
          </div>
        </div>
        <!-- Background Image -->
        <div class="background-image" :style="{ background: `url('/img/color.jpg') no-repeat center center`, backgroundSize: 'cover' }"></div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    methods: {
      goToSignIn() {
        this.$router.push("/signin");
      },
    },
  };
  </script>
  
  <style scoped>
  .glow-text {
    font-family: 'Times New Roman', Times, serif;
    font-size: 25px;
    color: rgb(42, 43, 72); /* Base color of the text */
    padding-left: 90px;
    z-index: 2;
    position: relative;
    text-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 15px #fff, 0 0 20px #fff;
  }
  /* Root styling for the landing page */
  .landing-page {
    height: 100vh;
    display: flex;
    flex-direction: column;
    overflow: hidden;
  }
  
  /* Header styling */
  .header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem 2rem;
    background: linear-gradient(90deg, #20b2aa, #ff7f50); /* Orange to blue-green gradient */
    color: #fff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }
  
  
  .logo {
    display: flex;
    align-items: center;
  }
  
  .logo-img {
    max-height: 60px;
    margin-right: 0.5rem;
  }
  
  .title {
    font-family: 'Times New Roman', Times, serif;
    font-size: 1.5rem;
    font-weight: bold;
    color: rgb(42, 43, 72);
  }
  
  .signin-btn {
    padding: 0.5rem 1rem;
    font-size: 1rem;
    color: #fff;
    background: linear-gradient(90deg, #007bff, #ff7f50); /* Blue to orange gradient */
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background 0.3s ease; /* Smooth transition for hover */
  }
  
  .signin-btn:hover {
    background: linear-gradient(90deg, #0056b3, #ff5733); /* Darker blue to a darker orange on hover */
  }  
  
  /* Body styling */
  .body {
    flex: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    overflow: hidden;
  }
  
  .content {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    position: relative;
    z-index: 1;
    max-width: 600px;
    color: #fff;
  }
  
  .welcome-message h1 {
    font-size: 3rem;
    margin-bottom: 0.5rem;
  }
  
  .welcome-message p {
    font-size: 1.25rem;
    line-height: 1.5;
  }
  
  .additional-image {
    margin-top: 2rem;
    max-width: 300px;
    max-height: 300px;
  }
  
  /* Background image styling */
  .background-image {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    filter: brightness(0.5); /* Darkens the background */
    z-index: 0;
  }
  
  /* Responsive styling */
  @media (max-width: 768px) {
    .welcome-message h1 {
      font-size: 2.5rem;
    }
  
    .welcome-message p {
      font-size: 1rem;
    }
  
    .additional-image {
      margin-top: 1.5rem;
      max-width: 250px;
    }
  }
  
  @media (max-width: 480px) {
    .welcome-message h1 {
      font-size: 2rem;
    }
  
    .welcome-message p {
      font-size: 0.9rem;
    }
  
    .additional-image {
      max-width: 200px;
    }
  }
  </style>
  