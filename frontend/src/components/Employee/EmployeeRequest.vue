<template>
  <div id="app" style="background-image: url('./img/color.jpg'); background-size: cover; background-attachment: fixed; height: 100%;">
    <!-- ======= Header ======= -->
          <header id="header" class="header fixed-top d-flex align-items-center">
    
            <div class="d-flex align-items-center justify-content-between">
              <a href="/dashboard" class="logo d-flex align-items-center" style="position: relative;">
                <img src="./img/dilg-logo1.png" alt="" 
                     style="position: absolute; max-height: 220px; max-width: 220px; margin-left: -30px; z-index: 1;">
                <span style="font-family: 'Times New Roman', Times, serif; font-size: 25px; color: rgb(42, 43, 72); padding-left: 120px; z-index: 2; position: relative;">
                  INVENTrack
                </span>
              </a>
              <i class="bi bi-list toggle-sidebar-btn"></i>
            </div><!-- End Logo -->
    
        <nav class="header-nav ms-auto">
          <ul class="d-flex align-items-center">
    
            <li class="nav-item d-block d-lg-none">
              <a class="nav-link nav-icon search-bar-toggle " href="#">
                <i class="bi bi-search"></i>
              </a>
            </li><!-- End Search Icon-->
    
            <li class="nav-item dropdown">
    
              <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                <i class="bi bi-bell"></i>
                <span class="badge bg-primary badge-number">4</span>
              </a><!-- End Notification Icon -->
    
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
    
              </ul><!-- End Notification Dropdown Items -->
    
            </li><!-- End Notification Nav -->
    
            <li class="nav-item dropdown">
    
              <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                <i class="bi bi-chat-left-text"></i>
                <span class="badge bg-success badge-number">3</span>
              </a><!-- End Messages Icon -->
    
    
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
    
              </ul><!-- End Messages Dropdown Items -->
    
            </li><!-- End Messages Nav -->
    
            <li class="nav-item dropdown pe-3">
              <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                <div style="width: 50px; height: 50px; overflow: hidden; border-radius: 50%;">
                  <div :style="getImageStyle(infos.image)"></div>
                </div>
                <span class="d-none d-md-block dropdown-toggle ps-2">{{ infos.fullname }}</span>
              </a><!-- End Profile Image Icon -->
  
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                <li class="dropdown-header">
                  <h6>{{ infos.fullname }}</h6>
                  <span>{{ infos.position }}</span>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
    
                <li>
                  <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                    <i class="bi bi-person"></i>
                    <span>My Profile</span>
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
    
                <li>
                  <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                    <i class="bi bi-gear"></i>
                    <span>Account Settings</span>
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
    
                <li>
                  <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                    <i class="bi bi-question-circle"></i>
                    <span>Need Help?</span>
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
    
                <li>
                  <a class="dropdown-item d-flex align-items-center" href="javascript:void(0)" @click="logout">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Sign Out</span>
                  </a>
                </li>
    
              </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->
    
          </ul>
        </nav><!-- End Icons Navigation -->
    
        </header><!-- End Header -->
    
    
  
  
        <!-- ======= Sidebar ======= -->
        <aside id="sidebar" class="sidebar">
    
        <ul class="sidebar-nav" id="sidebar-nav">
    
          
          <li class="nav-heading">Home</li>
    
          <li class="nav-item">
            <a class="nav-link collapsed" href="/empdashboard">
              <i class="bi bi-grid"></i>
              <span>Dashboard</span>
            </a>
          </li><!-- End Dashboard Nav -->
    
          
          <li class="nav-heading">Pages</li>
          <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-menu-button-wide"></i><span>PROPERTY, PLANT AND EQUIPMENT</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
              <li>
                <a href="empserviceable">
                  <i class="bi bi-circle"></i><span>Serviceable</span>
                </a>
              </li>
              <li>
                <a href="empunserviceable">
                  <i class="bi bi-circle"></i><span>Unserviceable</span>
                </a>
              </li>
            </ul>
          </li><!-- End Components Nav -->
    
          <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-journal-text"></i><span>Documents</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
              <li>
                <a href="emppropertysticker">
                  <i class="bi bi-circle"></i><span>Property Sticker</span>
                </a>
              </li>
              <li>
                <a href="empledgercard">
                  <i class="bi bi-circle"></i><span>Ledger Card</span>
                </a>
              </li>
              <li>
                <a href="emppropertycard">
                  <i class="bi bi-circle"></i><span>Property Card</span>
                </a>
              </li>
              <li>
                <a href="empackreceipt">
                  <i class="bi bi-circle"></i><span>Acknowledgement Receipt</span>
                </a>
              </li>
              <li>
                <a href="emptransferreport">
                  <i class="bi bi-circle"></i><span>Transfer Report</span>
                </a>
              </li>
              <li>
                <a href="emprlsddp">
                  <i class="bi bi-circle"></i><span>RLSDDP</span>
                </a>
              </li>
            </ul>
          </li><!-- End Forms Nav -->
    
          <li class="nav-heading">input</li>
    
          <li class="nav-item">
            <a class="nav-link active" href="/emprequest">
              <i class="bi bi-folder-plus"></i>
              <span>Request Equipment</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link collapsed" href="/empqrcode">
              <i class="bi bi-folder-plus"></i>
              <span>Generate QR</span>
            </a>
          </li>
          
          <li class="nav-heading">user</li>
      
          <li class="nav-item">
            <a class="nav-link collapsed" href="/empprofile">
              <i class="bi bi-folder-plus"></i>
              <span>Employee Profile</span>
            </a>
          </li><!-- End Dashboard Nav -->
      
    
        </ul>
    
        </aside><!-- End Sidebar-->
    
    
    
        <main id="main" class="main">
    
        <div class="pagetitle">
          <h1>Dashboard</h1>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/empdashboard">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </nav>
        </div><!-- End Page Title -->
    
        <section class="section dashboard">
          <div class="row">
            <!-- Left side columns -->
            <div class="col-lg-6">
              <div class="row">
                <!-- Reports -->
                <div class="col-12">
                  <div class="card">
                    <div class="filter">
                      
                    </div>
                    <div class="card-body">
                      <h4 class="card-title">Property Acquisition Request Form</h4>
  
                      <br>
                      <!-- Vertical Form -->
                      <form class="row g-3" @submit.prevent="send_request">
                        <div class="col-12">
                          <label for="particulars" class="form-label">Particulars:</label>
                          <input type="text"  class="form-control" id="particulars" v-model="particulars" required>
                        </div>
                        <div class="">
                          <label class="form-label">Description:</label>
                          <br>
                          <textarea style= "height: 200px;" class="form-control" aria-label="With textarea" v-model="description" required></textarea>
  <br>
                        </div>
                        <div class="text-center">
                          <button type="reset" class="button1" style = "margin-right:40px;">Clear</button>
                          <button type="submit" class="button" style = "margin-right:30px;">Submit</button>
                        </div>
                      </form><!-- Vertical Form -->
                    </div>
                  </div>
                </div><!-- End Reports -->
              </div>
            </div><!-- End Left side columns -->
      
            <!-- Right side columns -->
            <div class="col-lg-6">
              <!-- Recent Activity -->
              <div class="card">
                <div class="card-body">
                  <table class="styled-table">
                    <thead>
  
                        
              <tr>
            <th colspan="5" class="whenMobile" >Recent Requests</th>
          </tr>
  
                      <tr>
                        <th scope="col">Particulars</th>
                        <th scope="col">Description</th>
                        <th scope="col">Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Feedback</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr v-for="inf in info">
                        <td scope="row">{{ inf.particulars }}</td>
                        <td scope="row">{{ inf.description }}</td>
                        <td scope="row">{{ inf.created_at }}</td>
                        <td scope="row">{{ inf.status }}</td>
                        <td scope="row">{{ inf.feedback }}</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div><!-- End Recent Activity -->
            </div><!-- End Right side columns -->
          </div>
        </section>
    
        </main><!-- End #main -->
    
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
      </div>
    </template>
  
  
  
  <script>
  
  import axios from 'axios'
  
  export default{
      data(){
          return{
              infos:[],
              info:[],
              empfullname: "",
              particulars: "",
              description: "",
              feedback: "",
              status: "",
              token: '',
          };
      },
      created(){
        this.getReq();
        this.user();
      },
  
  
      async created() {
      // Call the user function to get user information
      await this.user();
  
      // Call the getReq function with the user's ID to get filtered data
      await this.getReq(this.infos.fullname);
  },
  
      methods: {
        getImageStyle(imageUrl) {
        // Function to generate the background image style
          if (!imageUrl) {
            return {}; // Return an empty object if imageUrl is not provided
          }
          
          // Set the background image URL
          const backgroundImage = `url('https://inventrack.online/backend/uploads/${imageUrl}')`;
          
          // Set background size and position
          const backgroundSize = 'cover'; // Cover the entire container
          const backgroundPosition = '50% 50%'; // Center the image
          
          // Return the style object
          return {
            width: '100%',
            height: '100%',
            backgroundImage,
            backgroundSize,
            backgroundPosition,
            borderRadius: '50%' // Make the background circular
          };
        },
  
        async getReq(id) {
          try {
              const inf = await axios.get(`getReq?id=${id}`);
              this.info = inf.data;
          } catch (error) {
              console.log(error);
          }
      },
  
  
  
        // async getReq(){
        //     try {
        //         await this.user();
        //         const inf = await axios.get('getReq');
        //         this.info = inf.data;
        //     } catch (error) {
        //         console.log(error);
        //     }
        // },
  
        async user(){
          try{
            const id= sessionStorage.getItem("token")
            const response = await axios.get(`/users/${id}`, {
              id:id
            })
            this.infos = response.data;
  
          }catch(error){
            console.log(error);
          }
        },
  
  
  
        // async getReq() {
        //     try {
        //       await this.user();
        //       const empfullname = this.infos.fullname;
  
        //       // Use the new endpoint to fetch records based on the user's full name
        //       const inf = await axios.get('getReq', {
        //         params: { id: empfullname },
        //       });
  
        //       this.info = inf.data;
        //     } catch (error) {
        //       console.log(error);
        //     }
        //   },
        // mounted() {
        //   this.getReq();
        // },
  
        async send_request() {
          try {
            await this.user();
            const ins = await axios.post('send_request', {
              empfullname: this.infos.fullname,
              particulars: this.particulars,
              description: this.description
            });
  
            // Clear the form fields after a successful request
            this.empfullname = "";
            this.particulars = "";
            this.description = "";
  
            this.$emit('data-saved');
            this.getReq(this.infos.fullname);
          } catch (error) {
            // Handle errors
            console.error(error);
            this.empfullname = "";
            this.particulars = "";
            this.description = "";
            this.getReq();
          }
        },
  
        async logout(){
          sessionStorage.removeItem('token');
          this.$router.push('/signin');
      },
  
      }
    }
    </script>
  
  <style scoped>
  
  /* Sidebar background color */
  .sidebar {
    width: 300px;
    z-index: 1;
    background-color: #1b2f47; /* Background color for active links */
  }
  
  /* Sidebar text color and background for links */
  .sidebar .sidebar-nav .nav-link {
    background-color: #1b2f47; /* Background color for all sidebar links */
    color: white !important; /* Set text color to white */
    transition: all 0.3s ease; /* Add transition for smooth animation */
  }
  
  /* Sidebar text color and background when a link is active or hovered */
  .sidebar .sidebar-nav .nav-link.active {
    background: linear-gradient(to right, #1b2f47, #3e5b77);
    color: white !important;
    border-left: 4px solid #FFF; /* Optional: Add left border with highlight color */
    transition: all 0.3s ease;
  }
  
  .sidebar .sidebar-nav .nav-link:hover {
    background: linear-gradient(to right, #1b2f47, #3e5b77);
    color: white !important;
    transform: translateX(5px); /* Move the link to the right on hover */
    transition: all 0.3s ease;
  }
  
  /* Sidebar dropdown icon color */
  .sidebar .sidebar-nav .nav-link .bi,
  .sidebar .sidebar-nav .nav-content .bi {
    color: white !important;
    transition: all 0.3s ease;
  }
  
  /* Additional styles for sidebar sub-menus */
  .sidebar .sidebar-nav .nav-content a {
    background-color: #2c3e50; /* Slightly darker background for sub-menu items */
    color: #ffffff;
    transition: all 0.3s ease;
  }
  .sidebar .sidebar-nav .nav-content a:hover {
    background-color: #3e5b77;
    color: #ffffff;
    transform: translateX(5px); /* Move the sub-menu link to the right on hover */
    transition: all 0.3s ease;
  }
  
  .form-control {
    border: 2px solid transparent;
    width: 25em;
    height: 2.5em;
    padding-left: 0.8em;
    outline: none;
    overflow: hidden;
    background-color: #F3F3F3;
    border-radius: 10px;
    transition: all 0.5s;
  }
  
  .form-control:hover,
  .form-control:focus {
    border: 2px solid #4A9DEC;
    box-shadow: 0px 0px 0px 7px rgb(74, 157, 236, 20%);
    background-color: white;
  }
  
  .button {
    border: none;
    background-color: seagreen;
    color: white;
    font-size: 1rem; /* Adjusted font size */
    font-weight: 500;
    padding: 0.6rem 1.8rem; /* Adjusted padding */
    border-radius: 0.4rem; /* Slightly reduced border radius */
    box-shadow: 0 0.4rem 0.8rem rgba(0, 0, 0, 0.15); /* Slightly reduced box-shadow */
    cursor: pointer;
    transform: translate(1) translate(0, 0);
    transition: transform 225ms, box-shadow 225ms;
  }
  
  .button:hover {
    transform: scale(1.05) translate(0, -0.1rem);
    box-shadow: 0 0.4rem 0.8rem rgba(0, 0, 0, 0.35);
  }
  
  .button:active {
    transform: scale(1) translate(0, 0.1rem);
    box-shadow: 0 0.4rem 0.8rem rgba(0, 0, 0, 0.15);
  }
  
  .button1 {
    border: none;
    background-color: #C0392B;
    color: white;
    font-size: 1rem; /* Adjusted font size */
    font-weight: 500;
    padding: 0.6rem 1.8rem; /* Adjusted padding */
    border-radius: 0.4rem; /* Slightly reduced border radius */
    box-shadow: 0 0.4rem 0.8rem rgba(0, 0, 0, 0.15); /* Slightly reduced box-shadow */
    cursor: pointer;
    transform: translate(1) translate(0, 0);
    transition: transform 225ms, box-shadow 225ms;
  }
  
  .button1:hover {
    transform: scale(1.05) translate(0, -0.1rem);
    box-shadow: 0 0.4rem 0.8rem rgba(0, 0, 0, 0.35);
  }
  
  .button1:active {
    transform: scale(1) translate(0, 0.1rem);
    box-shadow: 0 0.4rem 0.8rem rgba(0, 0, 0, 0.15);
  }
  
  .styled-table {
      border-collapse: collapse;
      margin: 25px 0;
      font-size: 0.9em;
      min-width: 400px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
      border-collapse: collapse;
  }
  
  .styled-table thead tr {
      font-size: 14px;
      color: #fff;
      line-height: 1;
      background-color: #1b2f47; 
      text-align: center;
      letter-spacing: 2px;
  }
  
  .styled-table th,
  .styled-table td {
      padding: 12px 27px;
      text-align: center;
      letter-spacing: .8px; 
      font-family: Arial, sans-serif;
      vertical-align: middle; 
      font-size: 14px;
      border-bottom: 1px solid black;
  }
  
  .styled-table tbody tr {
      border-bottom: 1px solid #dddddd;
  }
  
  .styled-table tbody tr:nth-of-type(even) {
      background-color: #f3f3f3;
  }
  
  .styled-table tbody tr:last-of-type {
      border-bottom: 2px solid #009879;
  }
  
  .styled-table tbody tr.active-row {
      font-weight: bold;
      color: #009879;
  }
  
  .card-title {
    font-size: 19px;
    text-align: center;
    margin-top: 10px;
    margin-bottom: 10px;
  }
  .whenMobile{
    background-color: seagreen; 
    color: white; 

    font-size: 16px; 
    line-height: 1.6; 
    text-transform: uppercase;
  }

  .styled-table {
    width: 100%; /* Ensure the table takes the full width of its container */
    border-collapse: collapse; /* Collapse borders for a cleaner look */
    overflow-x: auto; /* Allow horizontal scrolling on small screens */
}
.styled-table th, .styled-table td{
  padding: 8px; 
  text-align: center;
}



.card-body {
    overflow-x: auto; /* Add horizontal scroll for card body */
}

/* Responsive Styles */
@media (max-width: 768px) {
    .styled-table {
        display: block; /* Enable block display for better control on smaller screens */
        overflow-x: auto; /* Allow horizontal scrolling */
        white-space: nowrap; /* Prevent wrapping of table cells */
    }

    .styled-table th, .styled-table td {
        white-space: nowrap; /* Prevent wrapping in table headers and data */
    }
    .form-control{
      width: 20rem;
    }
    #particulars.form-control{
      width: 20rem;
    }
    .styled-table th, .styled-table td{
  padding: 8px; 
  text-align: left;
}
}
  


  </style>
  
  
  