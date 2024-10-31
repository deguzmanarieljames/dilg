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
                </div>                  <span class="d-none d-md-block dropdown-toggle ps-2">{{ infos.fullname }}</span>
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
            <a class="nav-link " data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-menu-button-wide"></i><span>PROPERTY, PLANT AND EQUIPMENT</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content " data-bs-parent="#sidebar-nav">
              <li>
                <a class="nav-link active" href="empserviceable">
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
<h1>Database - Property, Plant and Equipment</h1>
<nav>
  <ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
  <li class="breadcrumb-item">Tables</li>
  <li class="breadcrumb-item active">Data</li>
  </ol>
</nav>
</div><!-- End Page Title -->

<section class="section">


<div class="row">
    <div class="col-lg-12">
      <div class="card">
      <div class="card-body">
    
      <table class="styled-table">
        <!-- Table header -->
        <thead>

          <tr>
        <th colspan="13" style="background-color: seagreen; color: white; text-align: center; 
        font-size: 16px;  line-height: 1.6; text-transform: uppercase;">Serviceable</th>
      </tr>
          <tr>
            <th>Image</th>
            <th>Entity</th>
            <th>Classification</th>
            <th>Code</th>
            <th>Article</th>
            <th>Particulars</th>
            <th>Model No.</th>
            <th>Serial No.</th>
            <th>Description</th>
            <th>Employee</th>
            <th>Status</th>
            <th>Date Recorded</th>
            <th>Date Returned</th>
          </tr>
        </thead>
        <tbody>
          <!-- Table rows -->
          <tr v-for="info in info" :key="info.id" @click="selectRecord(info)">
            <!-- <td scope="row">
              <img :src="generateQRCodeUrl(info.id)" alt="" style="width: 200px; height: 200px;">
            </td> -->
            <td scope="row"><img :src="info.image" alt="Inventory Image" style="max-width: 100px; max-height: 100px;" /></td>
            <td scope="row">{{ info.entityname }}</td>
            <td scope="row">{{ info.classification }}</td>
            <td scope="row">{{ info.code }}</td>
            <td scope="row">{{ info.article }}</td>
            <td scope="row">{{ info.particulars }}</td>
            <td scope="row">{{ info.modelno }}</td>
            <td scope="row">{{ info.serialno }}</td>
            <td scope="row">{{ info.fulldescription }}</td>
            <td scope="row">{{ info.empfullname }}</td>
            <td scope="row">{{ info.status }}</td>
            <td scope="row">{{ info.created_at }}</td>
            <td scope="row">{{ info.date_returned }}</td>
          </tr>
        </tbody>
      </table>
  

      </div>
  </div>
</div>
</div>
</section>

</main><!-- End #main -->
    
    
  
</div>
</template>


<script>

// Components
import axios from 'axios'
import QRCode from 'qrcode-generator';

export default{
data(){
    return{
        info:[],
        infos:[],
        entityname: "",
        particulars: "",
        classification: "",
        empfullname: "",
        code: "",
        qrCodeData: null,
    }
},
created(){
    this.getInfo()
    this.user();
},
async created() {
  // Call the user function to get user information
  await this.user()
  await this.getInfo(this.infos.fullname)

},
methods:{
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
      deleteRecord(id) {
        // Implement your delete logic here
      },
      async getInfo(id) {
          try {
              // Pass infos.fullname to the API call
              const inf = await axios.get(`getUserDataServiceable?id=${id}`);
              this.info = inf.data;
          } catch (error) {
              console.log(error);
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
  padding: 12px 15px;
  text-align: center;
  letter-spacing: .8px; 
  font-family: Arial, sans-serif;
  vertical-align: middle; 
  font-size: 14px;
  border: 1px solid black;
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



</style>