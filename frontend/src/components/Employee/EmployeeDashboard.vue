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
    
    
            <li class="nav-item dropdown">
    
              <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                <i class="bi bi-bell"></i>
                <span class="badge bg-primary badge-number">4</span>
              </a><!-- End Notification Icon -->
    
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
    
              </ul><!-- End Notification Dropdown Items -->
    
            </li><!-- End Notification Nav -->
    
  
    
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
            <a class="nav-link active" href="/empdashboard">
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
                  <i class="bi bi-clipboard-check"></i><span>Serviceable</span>
                </a>
              </li>
              <li>
                <a href="empunserviceable">
                  <i class="bi bi-clipboard-x"></i><span>Unserviceable</span>
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
              <i class="bi bi-send"></i>
              <span>Request Equipment</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link collapsed" href="/empqrcode">
              <i class="bi bi-qr-code"></i>
              <span>Generate QR</span>
            </a>
          </li>
          
          <li class="nav-heading">user</li>
    
          <li class="nav-item">
            <a class="nav-link collapsed" href="/empprofile">
              <i class="bi bi-person"></i>
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
            <!-- First Column: Employee Supplies -->
            <div class="col-lg-4">
              <h1 class="dashboard-title">EMPLOYEE SUPPLIES</h1>
              <div class="col-lg-12" v-for="supply in employeeSupplies" :key="supply.id">
                <div class="card mb-3" :class="{'transition-right': transitionRight, 'transition-left': transitionLeft}" style="background-color: #FFF9CC;">
                  <div class="row g-0">
                    <div class="col-md-4">
                      <div class="inventory-image-container">
                        <img :src="supply.image" alt="Inventory Image" class="inventory-image" />
                      </div>
                    </div>                    
                    <div class="col-md-8">
                      <div class="card-body">
                        <p class="card-title" style="font-size: 20px; margin-bottom: -5px;">{{ supply.item }}</p>
                        <p class="card-text">{{ supply.description }}</p>
                        <p class="card-text" style="font-size: 15px; margin-bottom: -5px;">Quantity: {{ supply.issue_quantity }}</p>
                        <p class="card-text" style="font-size: 15px;">No. of days to spent: {{ supply.no_days }}</p>
                        
                        <!-- Countdown Timer -->
                        <p class="card-text">
                          <span v-if="supply.status === 'Currently Consuming'" class="status-serviceable">
                            <i class="bi bi-bookmark-check">&nbsp;&nbsp;</i>
                            <small class="text-muted">{{ supply.status }}</small>
                            <br />
                            <small class="text-muted">Time Remaining: <br>{{ supply.countdown }}</small>
                          </span>
                          <span v-if="supply.status === 'Consumed'" class="status-unserviceable">
                            <i class="bi bi-bookmark-x">&nbsp;&nbsp;</i>
                            <small class="text-muted">{{ supply.status }}</small>
                          </span>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            
            <!-- Divider -->
            <div class="divider"></div>
        
            <!-- Second Column: Serviceable and Unserviceable -->
            <div class="col-lg-7">
              <h1 class="dashboard-title">SERVICEABLE</h1>
              <div class="row">
                <div class="col-lg-6" v-for="infos in infor" :key="infos.id" @click="storeRecordId(infos.id)">
                  <div class="card mb-3" :class="{'transition-right': transitionRight, 'transition-left': transitionLeft}">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <div class="inventory-image-container">
                          <img :src="infos.image" alt="Inventory Image" class="inventory-image" />
                        </div>
                      </div>                      
                      <div class="col-md-8">
                        <div class="card-body">
                          <p class="card-title" style="font-size: 20px; margin-bottom: -10px;">{{ infos.particulars }}</p>
                          <p>{{ infos.classification }}</p>
                          <p class="card-text">
                            <span v-if="infos.remarks === 'SERVICEABLE'" class="status-serviceable">
                              <i class="bi bi-bookmark-check">&nbsp;&nbsp;</i>
                              <small class="text-muted">{{ infos.remarks }}</small>
                            </span>
                            <span v-if="infos.remarks === 'UNSERVICEABLE'" class="status-unserviceable">
                              <i class="bi bi-bookmark-x">&nbsp;&nbsp;</i>
                              <small class="text-muted">{{ infos.remarks }}</small>
                            </span>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        
              <h1 class="dashboard-title">UNSERVICEABLE</h1>
              <div class="row">
                <div class="col-lg-6" v-for="infos in inforunser" :key="infos.id">
                  <div class="card mb-3" :class="{'transition-right': transitionRight, 'transition-left': transitionLeft}" style="background-color: #FFCCCB;">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <div class="inventory-image-container">
                          <img :src="infos.image" alt="Inventory Image" class="inventory-image" />
                        </div>
                      </div>                      
                      <div class="col-md-8">
                        <div class="card-body">
                          <p class="card-title">{{ infos.particulars }}</p>
                          <p>{{ infos.classification }}</p>
                          <p class="card-text">
                            <span v-if="infos.remarks === 'SERVICEABLE'" class="status-serviceable">
                              <i class="bi bi-bookmark-check">&nbsp;&nbsp;</i>
                              <small class="text-muted">{{ infos.remarks }}</small>
                            </span>
                            <span v-if="infos.remarks === 'UNSERVICEABLE'" class="status-unserviceable">
                              <i class="bi bi-bookmark-x">&nbsp;&nbsp;</i>
                              <small class="text-muted">{{ infos.remarks }}</small>
                            </span>
                          </p>
                        </div>
                      </div>
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
  import axios from 'axios';
  import QRCode from 'qrcode-generator';
  export default {
    data() {
      return {
        infos: [],
        infor: [],
        inforunser: [],
        employeeSupplies: [],
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
        dragCardId: null,
        transitionRight: false,
        transitionLeft: false,
        countdownInterval: null
      };
    },
    created() {
      this.initData();
    },
    mounted() {
      this.startCountdown();
    },
    beforeDestroy() {
      clearInterval(this.countdownInterval);
    },
    methods: {
      startCountdown() {
        this.countdownInterval = setInterval(() => {
          this.updateCountdowns();
        }, 1000); // Update every second
      },
      updateCountdowns() {
        // Loop through each supply and calculate the remaining time
        this.employeeSupplies.forEach(supply => {
          if (supply.status === 'Currently Consuming') {
            supply.countdown = this.calculateCountdown(supply.end_date);
          }
        });
      },
      calculateCountdown(endDate) {
        const now = new Date();
        const end = new Date(endDate);

        // Get the difference in milliseconds
        const diff = end - now;

        if (diff <= 0) {
          return "Expired"; // If the countdown is over
        }

        // Calculate days, months, hours, minutes, and seconds
        const months = end.getMonth() - now.getMonth() + (12 * (end.getFullYear() - now.getFullYear()));
        const days = Math.floor(diff / (1000 * 60 * 60 * 24));
        const hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((diff % (1000 * 60)) / 1000);

        // Return the formatted countdown
        return `${months}m ${days}d ${hours}h ${minutes}m ${seconds}s`;
      },
      async initData() {
        await this.getUser();
        await this.getInfo(this.infos.fullname);
        await this.getInfoUnser(this.infos.fullname);
        await this.getEmployeeSupplies(this.infos.fullname); // Fetch supplies based on the employee's fullname
      },
      storeRecordId(recordId) {
        // Save the record ID to session storage
        sessionStorage.setItem('selectedRecordId', recordId);
        
        // Redirect to the new page
        this.$router.push({ path: '/empdatabaseppedocs' });
      },
      getImageStyle(imageUrl) {
        if (!imageUrl) {
          return {};
        }
        const backgroundImage = `url('http://dilg.test/backend/uploads/${imageUrl}')`;
        const backgroundSize = 'cover';
        const backgroundPosition = '50% 50%';
        return {
          width: '100%',
          height: '100%',
          backgroundImage,
          backgroundSize,
          backgroundPosition,
          borderRadius: '50%'
        };
      },
      onDecode(result) {
        this.scannedId = result;
      },
      generateQRCodeUrl(id) {
        const typeNumber = 0;
        const errorCorrectionLevel = 'L';
        const qr = QRCode(typeNumber, errorCorrectionLevel);
        qr.addData(id);
        qr.make();
        const imageUrl = qr.createDataURL();
        return imageUrl;
      },
      async getInfo(id) {
        try {
          const inf = await axios.get(`getDataUser?id=${id}`);
          this.infor = inf.data;
          this.applyCardOrder();
        } catch (error) {
          console.log(error);
        }
      },
      async getEmployeeSupplies(fullname) {
        try {
          const response = await axios.get(`getEmployeeSuppliesByFullname/${fullname}`); // Modify this endpoint as needed
          this.employeeSupplies = response.data;
        } catch (error) {
          console.log(error);
        }
      },
      async getInfoUnser(id) {
        try {
          const inf = await axios.get(`getDataUserUnserviceable?id=${id}`);
          this.inforunser = inf.data;
          this.applyCardOrder();
        } catch (error) {
          console.log(error);
        }
      },
      async getUser() {
        try {
          const id = sessionStorage.getItem("token");
          const response = await axios.get(`/users/${id}`, {
            id: id
          });
          this.infos = response.data;
        } catch (error) {
          console.log(error);
        }
      },
      async logout() {
        sessionStorage.removeItem('token');
        this.$router.push('/signin');
      },
    }
  };
  
  </script>
  
  
  
  <style scoped>
  .countdown {
    font-size: 14px;
    font-weight: bold;
    color: #e74c3c; /* Red color for countdown */
    margin-bottom: 10px;
  }  



  .dashboard-title {
    font-size: 1.5rem; /* Larger font size */
    font-weight: bold; /* Bold text */
    color: #343a40; /* Dark gray color */
    margin-bottom: 20px; /* Spacing below the heading */
    text-align: left; /* Align left */
    border-bottom: 2px solid #939ca5; /* Add a blue bottom border */
    padding-bottom: 10px; /* Padding below the text */
    letter-spacing: 1px; /* Slight letter spacing for better readability */
  }
  
  
  .card {
    box-sizing: border-box;
    width: 400px;
    height: 250px;
    background-color: lightblue;
    border: 2px;
    border-color: #BED0EB;
    box-shadow: 12px 17px 51px rgba(0, 0, 0, 0.22);
    backdrop-filter: blur(6px);
    border-radius: 17px;
    text-align: center;
    cursor: pointer;
    transition: transform 0.3s, box-shadow 0.3s, border 0.3s, opacity 0.3s;
    display: flex;
    align-items: center;
    justify-content: center;
    user-select: none;
    font-weight: bold;
    font-size: 15px;
    color: black;
    margin-left: 22px; 
    margin-bottom: 23px !important;
  }
  
  .card:hover {
    border: 1px solid black;
    transform: scale(1.05);
    box-shadow: 15px 20px 60px rgba(0, 0, 0, 0.3);
  }
  
  .card:active {
    transform: scale(0.95) rotateZ(1.7deg);
  }
  
  .status-serviceable {
    background-color: #dff8d0; /* Light green color */
    border: 1px solid #4CAF50; /* Green border */
    color: #4CAF50; /* Green text color */
    border-radius: 20px; /* Round border radius */
    padding: 5px 10px; /* Add padding */
    display: inline-block; /* Display as inline-block for rectangular shape */
    transition: background-color 0.3s ease; /* Smooth transition for background color */
  }
  
  .status-unserviceable {
    background-color: #fbdcdc; /* Light red color */
    border: 1px solid #f44336; /* Red border */
    color: #f44336; /* Red text color */
    border-radius: 20px; /* Round border radius */
    padding: 5px 10px; /* Add padding */
    display: inline-block; /* Display as inline-block for rectangular shape */
    transition: background-color 0.3s ease; /* Smooth transition for background color */
  }
  
  .status-serviceable:hover,
  .status-unserviceable:hover {
    opacity: 0.9; /* Reduce opacity on hover */
  }
  
  .inventory-image-container {
    width: 120px; /* Fixed size for the circular container */
    height: 120px;
    border-radius: 50%; /* Makes the container a circle */
    overflow: hidden; /* Ensures the image stays within the circle */
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #f0f0f0; /* Optional: background color for better visibility */
    margin: 10px auto; /* Centers the container within the column */
    
    border-style: solid;
    border-color: lightgray; /* Change to desired border color */
    border-width: 3px; /* Adjust thickness of the border */
  }
  
  
  .inventory-image {
    width: 100%; /* Makes the image cover the container */
    height: 100%;
    object-fit: cover; /* Ensures the image fits within the circle without distortion */
  }
  
  

  .divider {
    width: 2px; /* Adjust the width of the divider */
    background: linear-gradient(180deg, #80faf4, #ff9900); /* Orange to blue-green gradient */
    height: auto; /* Set to auto or a fixed height */
    display: inline-block; /* Align it with columns */
    margin: 0 2px; /* Spacing around the divider */
  }
  
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
  </style>