<template>
<div id="app" style="background-image: url('./img/bg.png'); background-size: cover; background-attachment: fixed; height: 100%;">
        <!-- ======= Header ======= -->
        <header id="header" class="header fixed-top d-flex align-items-center">
  
      <div class="d-flex align-items-center justify-content-between">
        <a href="/empdashboard" class="logo d-flex align-items-center">
          <img src="./img/logo1.png" alt="">
          <span class="d-none d-lg-block" style="font-family: Times New Roman, Times, serif; font-size: 100%; color: rgb(42, 43, 72);">
            <i>INVEN<sup style="font-size: 70%;">Track</sup></i>
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
          <a class="nav-link " href="/empdashboard">
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
          <a class="nav-link collapsed" href="/emprequest">
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
          <!-- Display each record in a separate container -->
          <div class="col-lg-4" v-for="info in info" :key="info.id">
            <div class="card mb-3">
              <div class="row g-0">
                <div class="col-md-4">
                  <img :src="info.image" alt="Inventory Image" class="inventory-image" />
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">{{ info.particulars }}</h5>
                    <p class="card-text">{{ info.classification }}</p>
                    <p class="card-text">{{ info.article }}</p>
                    <!-- <p class="card-text" :class="{'status-serviceable': info.status === 'Serviceable', 'status-unserviceable': info.status === 'Unserviceable'}"><small class="text-muted">{{ info.status }}</small></p> -->
                    <p class="card-text">
                      <span v-if="info.status === 'Serviceable'" class="status-serviceable">
                        <i class="bi bi-bookmark-check"></i> <!-- Add bookmark-check icon -->
                      </span>
                      <span v-if="info.status === 'Unserviceable'" class="status-unserviceable">
                        <i class="bi bi-bookmark-x"></i> <!-- Add bookmark-x icon -->
                      </span>
                      <!-- <small class="text-muted">{{ info.status }}</small> -->
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
  
      </main><!-- End #main -->
   </div>
  </template>



<script>
import axios from 'axios'
import QRCode from 'qrcode-generator';

export default {
  data(){
        return{
            infos:[],
            info:[],
            empfullname: "",
            particulars: "",
            token: '',
            entityname: '',
            classification: '',
            code: '',
            status: '',
            created_at: '',
            date_returned: '',
            video: null,
            resultElement: null,
            startButton: null,
            stopButton: null,
            isCameraOn: false,
            stream: null,
            qrCodeData: null,
        };
    },
    created(){
      this.user();
      this.getInfo();
    },

    async created() {
    // Call the user function to get user information
    await this.user()
    await this.getInfo(this.infos.fullname)

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
      onDecode(result) {
          this.scannedId = result;
          // Implement any additional logic after scanning the QR code
        },
        // generateQRCodeUrl(id) {
        //   return `https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=${id}`;
        // },

        generateQRCodeUrl(id) {
          // Use qrcode-generator to generate QR code
          const typeNumber = 0;
          const errorCorrectionLevel = 'L';
          const qr = QRCode(typeNumber, errorCorrectionLevel);
          qr.addData(id);
          qr.make();

          // Convert QR code data to a data URL
          const imageUrl = qr.createDataURL();

          return imageUrl;
        },

      async getInfo(id){
              try {
                  const inf = await axios.get(`getDataUser?id=${id}`);
                  this.info = inf.data;
              } catch (error) {
                  console.log(error);
              }
          },

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

      async logout(){
        sessionStorage.removeItem('token');
        this.$router.push('/');
      },
      /*async created(){
        const signdata = await axios.get('user', {
          headers: {
            
          }
        });
      } */
    }
  }
  </script>

<style scoped>
.status-serviceable {
  background-color: #dff8d0; /* Light green color */
  border: 1px solid #4CAF50; /* Green border */
  color: #4CAF50; /* Green text color */
  border-radius: 20px; /* Round border radius */
  padding: 5px 10px; /* Add padding */
  display: inline-block; /* Display as inline-block for rectangular shape */
  transition: background-color 0.3s ease; /* Smooth transition for background color */
}

/* Define the light red color for unserviceable items */
.status-unserviceable {
  background-color: #fbdcdc; /* Light red color */
  border: 1px solid #f44336; /* Red border */
  color: #f44336; /* Red text color */
  border-radius: 20px; /* Round border radius */
  padding: 5px 10px; /* Add padding */
  display: inline-block; /* Display as inline-block for rectangular shape */
  transition: background-color 0.3s ease; /* Smooth transition for background color */
}

/* Hover effect */
.status-serviceable:hover,
.status-unserviceable:hover {
  opacity: 0.9; /* Reduce opacity on hover */
}
.inventory-image {
  max-width: 150px; /* Adjust as needed */
  max-height: 150px; /* Adjust as needed */
  width: auto;
  height: auto;
  padding: 20px 0 0 20px;
}

</style>