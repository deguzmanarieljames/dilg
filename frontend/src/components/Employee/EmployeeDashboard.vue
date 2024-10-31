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
            <h1 class="dashboard-title">SERVICEABLE</h1>
            <!-- Display each record in a separate container -->
            <div class="col-lg-4" v-for="infos in infor" :key="infos.id" @click="storeRecordId(infos.id)"
                draggable="true"
                @dragstart="dragStart($event, infos)"
                @dragover="dragOver($event)"
                @dragleave="dragLeave($event)"
                @drop="drop($event, infos)"
                :data-id="infos.id">
              <div class="card mb-3" :class="{'transition-right': transitionRight, 'transition-left': transitionLeft}">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img :src="infos.image" alt="Inventory Image" class="inventory-image" />
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">{{ infos.particulars }}</h5>
                      <p class="card-text">{{ infos.classification }}</p>
                      <p class="card-text">{{ infos.article }}</p>
                      <p class="card-text">
                        <br>
                        <span v-if="infos.status === 'Serviceable'" class="status-serviceable">
                          <i class="bi bi-bookmark-check">&nbsp;&nbsp;</i>
                          <small class="text-muted">{{ infos.status }}</small>
                        </span>
                        <span v-if="infos.status === 'Unserviceable'" class="status-unserviceable">
                          <i class="bi bi-bookmark-x">&nbsp;&nbsp;</i>
                          <small class="text-muted">{{ infos.status }}</small>
                        </span>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
          <div class="row">
            <h1 class="dashboard-title">UNSERVICEABLE</h1>
            <!-- Display each record in a separate container -->
            <div class="col-lg-4" v-for="infos in inforunser" :key="infos.id"
                draggable="true"
                @dragstart="dragStart($event, infos)"
                @dragover="dragOver($event)"
                @dragleave="dragLeave($event)"
                @drop="drop($event, infos)"
                :data-id="infos.id">
              <div class="card mb-3" :class="{'transition-right': transitionRight, 'transition-left': transitionLeft}" style=" background-color: #FFCCCB;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img :src="infos.image" alt="Inventory Image" class="inventory-image" />
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">{{ infos.particulars }}</h5>
                      <p class="card-text">{{ infos.classification }}</p>
                      <p class="card-text">{{ infos.article }}</p>
                      <p class="card-text">
                        <br>
                        <span v-if="infos.status === 'Serviceable'" class="status-serviceable">
                          <i class="bi bi-bookmark-check">&nbsp;&nbsp;</i>
                          <small class="text-muted">{{ infos.status }}</small>
                        </span>
                        <span v-if="infos.status === 'Unserviceable'" class="status-unserviceable">
                          <i class="bi bi-bookmark-x">&nbsp;&nbsp;</i>
                          <small class="text-muted">{{ infos.status }}</small>
                        </span>
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
  import axios from 'axios';
  import QRCode from 'qrcode-generator';
  export default {
    data() {
      return {
        infos: [],
        infor: [],
        inforunser: [],
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
      };
    },
    created() {
      this.initData();
    },
    methods: {
      async initData() {
        await this.getUser();
        await this.getInfo(this.infos.fullname);
        await this.getInfoUnser(this.infos.fullname);
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
        const backgroundImage = `url('https://inventrack.online/backend/uploads/${imageUrl}')`;
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
      dragStart(event, info) {
        this.dragCardId = info.id;
        event.dataTransfer.setData('text/plain', '');
        event.currentTarget.classList.add('dragging');
      },
      dragOver(event) {
        event.preventDefault();
        event.dataTransfer.dropEffect = 'move';
        const dropTarget = event.currentTarget;
        dropTarget.classList.add('dragging-over');
        const draggedIndex = this.info.findIndex(item => item.id === this.dragCardId);
        const dropTargetIndex = this.info.findIndex(item => item.id === dropTarget.getAttribute('data-id'));
        if (draggedIndex !== dropTargetIndex) {
          const draggedInfo = this.info[draggedIndex];
          this.info.splice(draggedIndex, 1);
          this.info.splice(dropTargetIndex, 0, draggedInfo);
          this.triggerTransition(draggedIndex, dropTargetIndex);
        }
      },
      dragLeave(event) {
        event.currentTarget.classList.remove('dragging-over');
      },
      drop(event, info) {
        event.preventDefault();
        const draggedInfoIndex = this.info.findIndex(item => item.id === this.dragCardId);
        const droppedInfoIndex = this.info.findIndex(item => item.id === info.id);
        const draggedInfo = this.info[draggedInfoIndex];
        document.querySelectorAll('.card').forEach(card => card.classList.remove('dragging', 'dragging-over'));
        if (draggedInfoIndex !== droppedInfoIndex) {
          this.info.splice(draggedInfoIndex, 1);
          this.info.splice(droppedInfoIndex, 0, draggedInfo);
          this.triggerTransition(draggedInfoIndex, droppedInfoIndex);
        }
        this.dragCardId = null;
        this.saveCardOrder();
      },
      triggerTransition(draggedIndex, dropTargetIndex) {
        if (draggedIndex < dropTargetIndex) {
          this.transitionRight = true;
          this.transitionLeft = false;
        } else {
          this.transitionRight = false;
          this.transitionLeft = true;
        }
        setTimeout(() => {
          this.transitionRight = false;
          this.transitionLeft = false;
        }, 300); // The duration should match the CSS animation duration
      },
      saveCardOrder() {
        const cardOrder = this.info.map(item => item.id);
        localStorage.setItem('cardOrder', JSON.stringify(cardOrder));
      },
      loadCardOrder() {
        const cardOrder = JSON.parse(localStorage.getItem('cardOrder'));
        if (cardOrder) {
          const orderedInfo = [];
          cardOrder.forEach(id => {
            const item = this.info.find(infoItem => infoItem.id === id);
            if (item) {
              orderedInfo.push(item);
            }
          });
          this.info = orderedInfo;
        }
      },
      applyCardOrder() {
        const cardOrder = JSON.parse(localStorage.getItem('cardOrder'));
        if (cardOrder) {
          const orderedInfo = [];
          cardOrder.forEach(id => {
            const item = this.info.find(infoItem => infoItem.id === id);
            if (item) {
              orderedInfo.push(item);
            }
          });
          this.info = orderedInfo;
        }
      }
    }
  };
  
  </script>
  
  
  
  <style scoped>
  .dashboard-title {
    font-size: 2.5rem; /* Larger font size */
    font-weight: bold; /* Bold text */
    color: #343a40; /* Dark gray color */
    margin-bottom: 20px; /* Spacing below the heading */
    text-align: right; /* Align left */
    border-bottom: 2px solid #7f8fa0; /* Add a blue bottom border */
    padding-bottom: 10px; /* Padding below the text */
    letter-spacing: 1px; /* Slight letter spacing for better readability */
  }
  
  
  .card {
    box-sizing: border-box;
    width: 500px;
    height: 300px;
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
    font-weight: bolder;
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
  
  .card.dragging {
    opacity: 0.7;
    transition: none;
  }
  
  .card.dragging-over {
    border: 2px dashed #ff6347;
    animation: pulse 0.3s ease-in-out;
  }
  
  .transition-right {
    animation: slide-right 0.3s forwards;
  }
  
  .transition-left {
    animation: slide-left 0.3s forwards;
  }
  
  @keyframes pulse {
    0%, 100% {
      transform: scale(1);
    }
    50% {
      transform: scale(1.05);
    }
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
  
  .inventory-image {
    max-width: 150px; /* Adjust as needed */
    max-height: 150px; /* Adjust as needed */
    width: auto;
    height: auto;
    padding: 20px 0 0 20px;
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