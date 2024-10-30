<template>
    <div class="forbidden-view">
      <h1>Forbidden Action</h1>
      <p>You do not have access to this page. Thank you!</p>
      <router-link to="/signin">Go to Home</router-link>
    </div>
  </template>
  
  <script>
  export default {
    name: 'ForbiddenView',
  };
  </script>
  
  <style scoped>
  .forbidden-view {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh; /* Full viewport height */
    text-align: center;
  }
  
  h1 {
    color: #ff0000; /* Red color for forbidden message */
  }
  
  p {
    margin-top: 10px;
  }
  
  router-link {
    margin-top: 20px;
    text-decoration: underline;
    color: #007bff; /* Link color */
  }
  </style>
  