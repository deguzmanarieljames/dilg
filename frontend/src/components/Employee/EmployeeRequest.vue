<template>
<div id="app" style="background-image: url('./img/bg.png'); background-size: cover; background-attachment: fixed; height: 100%;">
        <!-- ======= Header ======= -->
        <header id="header" class="header fixed-top d-flex align-items-center">
  
      <div class="d-flex align-items-center justify-content-between">
        <a href="/empdashboard" class="logo d-flex align-items-center">
          <img src="./img/logo1.png" alt="">
          <span class="d-none d-lg-block" style="font-family: Times New Roman, Times, serif; font-size: 210%; color: rgb(42, 43, 72);">
            <i>DILG<sup style="font-size: 70%;">ence</sup></i>
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
          <a class="nav-link " href="/emprequest">
            <i class="bi bi-folder-plus"></i>
            <span>Request Equipment</span>
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
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                      <li class="dropdown-header text-start">
                        <h6>Filter</h6>
                      </li>
  
                      <li><a class="dropdown-item" href="#">Today</a></li>
                      <li><a class="dropdown-item" href="#">This Month</a></li>
                      <li><a class="dropdown-item" href="#">This Year</a></li>
                    </ul>
                  </div>
  
                  <div class="card-body">
                    <h5 class="card-title">Property Acquisition Request Form<span>/gaining possession to a property or equipment by the government</span></h5>

                                  <!-- Vertical Form -->
                    <form class="row g-3" @submit.prevent="send_request">
                      <!-- <div class="col-12">
                        <label for="empfullname" class="form-label">Employee Name</label>
                        <input type="text" class="form-control" id="empfullname" v-model="empfullname">
                      </div> -->
                      <div class="col-12">
                        <label for="particulars" class="form-label">Particulars</label>
                        <input type="text" class="form-control" id="particulars" v-model="particulars" required>
                      </div>
                      <div class="input-group">
                      <span class="input-group-text">Write here the description</span>
                      <textarea class="form-control" aria-label="With textarea" v-model="description" required></textarea>
                    </div>
                      <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
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
                <h5 class="card-title">Recent Request</h5>
  
                <table class="table">
                  <thead>
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
                <!-- <h1>Hello</h1>
                <div v-if="fullname && position">
                  <h2>Welcome, {{ fullname }}</h2>
                  <p>Your Position: {{ position }}</p>
                </div> -->
  
  
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
        const backgroundImage = `url('http://dilg.test/backend/uploads/${imageUrl}')`;
        
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
          this.getReq();
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
        this.$router.push('/');
      },

    }
  }
  </script>



