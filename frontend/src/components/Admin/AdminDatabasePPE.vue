<style scoped>
#qr-video {
  width: 500px;
  height: 500px;
}
#qr-result {
  margin-top: 10px;
}
table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }

    th, td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }

    th {
      background-color: #f2f2f2;
    }

    /* Responsive styles */
    @media screen and (max-width: 600px) {
      table, tr, td {
        display: block;
      }

      td {
        border: none;
        position: relative;
      }

      td::before {
        content: attr(data-label);
        font-weight: bold;
        position: absolute;
        top: 0;
        left: 50%;
        transform: translate(-50%, 0);
      }

      /* Make the table scrollable on smaller screens */
      table {
        overflow-y: auto;
      }
    }
</style>


<template>
<div id="app" style="background-image: url('./img/bg.png'); background-size: cover; background-attachment: fixed; height: 100%;">
        <!-- ======= Header ======= -->
        <header id="header" class="header fixed-top d-flex align-items-center">
  
      <div class="d-flex align-items-center justify-content-between">
        <a href="/dashboard" class="logo d-flex align-items-center">
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
              <img src="./img/profile-img.jpg" alt="Profile" class="rounded-circle">
              <span class="d-none d-md-block dropdown-toggle ps-2">A. De Guzman</span>
            </a><!-- End Profile Iamge Icon -->
  
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
              <li class="dropdown-header">
                <h6>Ariel James De Guzman</h6>
                <span>Web Designer</span>
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
          <a class="nav-link collapsed" href="/dashboard">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
          </a>
        </li><!-- End Dashboard Nav -->
  
        
        <li class="nav-heading">Pages</li>
  
        <li class="nav-item">
          <a class="nav-link " href="databaseppe">
            <i class="bi bi-clipboard-data"></i>
            <span>Database PPE</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-menu-button-wide"></i><span>PROPERTY, PLANT AND EQUIPMENT</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
              <a href="serviceable">
                <i class="bi bi-circle"></i><span>Serviceable</span>
              </a>
            </li>
            <li>
              <a href="unserviceable">
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
              <a href="propertysticker">
                <i class="bi bi-circle"></i><span>Property Sticker</span>
              </a>
            </li>
            <li>
              <a href="ledgercard">
                <i class="bi bi-circle"></i><span>Ledger Card</span>
              </a>
            </li>
            <li>
              <a href="propertycard">
                <i class="bi bi-circle"></i><span>Property Card</span>
              </a>
            </li>
            <li>
              <a href="ackreceipt">
                <i class="bi bi-circle"></i><span>Acknowledgement Receipt</span>
              </a>
            </li>
            <li>
              <a href="transferreport">
                <i class="bi bi-circle"></i><span>Transfer Report</span>
              </a>
            </li>
            <li>
              <a href="rlsddp">
                <i class="bi bi-circle"></i><span>RLSDDP</span>
              </a>
            </li>
          </ul>
        </li><!-- End Forms Nav -->
  
        <li class="nav-heading">input</li>

        <li class="nav-item">
        <a class="nav-link collapsed" href="/workspace">
            <i class="bi bi-folder-plus"></i>
            <span>Workspace</span>
        </a>
        </li>

        <li class="nav-heading">Stocks</li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="/inventory">
            <i class="bi bi-folder-plus"></i>
            <span>Inventory</span>
          </a>
        </li>

        <li class="nav-heading">Ordering</li>
    
        <li class="nav-item">
          <a class="nav-link collapsed" href="/ordering">
            <i class="bi bi-folder-plus"></i>
            <span>Ordering</span>
          </a>
        </li>

        <li class="nav-heading">Security</li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="/userverify">
            <i class="bi bi-folder-plus"></i>
            <span>User Verification</span>
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
            <div class="col-lg-6">

            </div>
        </div>

        
        <div class="row">
              <div class="col-lg-12">
                <div class="card">
                <div class="card-body">
                <h5 class="card-title">Acquisition</h5>
                <p> Refers to the act of gaining possession to a property or equipment by the government.</p>
                <!-- Table with stripped rows -->
                <div style="overflow-y: auto;">
                  <table class="table datatable">
                <!-- Table header -->
                <thead>
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
                <!-- End Table with stripped rows -->

                </div>
            </div>
        </div>
        </div>

          <!-- Modal component to display selected record -->
          <div class="modal" v-if="selectedInfo">
            <div class="modal-content">
              <span class="close" @click="selectedInfo = null">&times;</span>
              <div class="row">
                <div class="col-lg-6">
                  <img :src="generateQRCodeUrl(selectedInfo.id)" alt="" style="width: 100%; height: auto;">
                </div>
                <div class="col-lg-6">
                  <h6>{{ selectedInfo.entityname }}</h6>
                  <h6>{{ selectedInfo.classification }}</h6>
                    <h6>{{ selectedInfo.code }}</h6>
                    <h6>{{ selectedInfo.article }}</h6>
                    <h6>{{ selectedInfo.particulars }}</h6>
                    <h6>{{ selectedInfo.modelno }}</h6>
                    <h6>{{ selectedInfo.serialno }}</h6>
                    <h6>{{ selectedInfo.fulldescription }}</h6>
                    <h6>{{ selectedInfo.empfullname }}</h6>
                    <h6>{{ selectedInfo.status }}</h6>
                    <h6>{{ selectedInfo.created_at }}</h6>
                    <h6>{{ selectedInfo.date_returned }}</h6>
                  <!-- Display other details of the selected record -->
                </div>
              </div>
            </div>
          </div>


        </section>

        </main><!-- End #main -->

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    </div>
  </template>


<script>

// Components
import axios from 'axios'
import jsQR from "jsqr";
import QRCode from 'qrcode-generator';
import html2pdf from 'html2pdf.js';

export default{
  components: {
  },
  data(){
      return{
          info:[],
          // entityname: "",
          // particulars: "",
          // classification: "",
          // empfullname: "",
          // code: "",
          video: null,
          resultElement: null,
          startButton: null,
          stopButton: null,
          isCameraOn: false,
          stream: null,
          qrCodeData: null,
          infos: [], // Assuming you have data for your table
          selectedInfo: null // Store the selected record
      }
  },
  created(){
      this.getInfo()
  },
  methods:{
        selectRecord(info) {
          this.selectedInfo = info; // Set the selected record
        },

        generatePDF() {
          // Get the data for a specific record (you might need to modify this logic)
         // Change this to the desired record ID
          const record = this.info.find(info => info.id);

          // Generate HTML content for the PDF based on the specific record
          if (record) {
              // Generate HTML content for the PDF based on the specific record
              const htmlContent = `
                <div>
                  <h2>Record Details</h2>
                  <p>Entity: ${record.entityname}</p>
                  <p>Particulars: ${record.particulars}</p>
                  <p>Classification: ${record.classification}</p>
                  <!-- Add more fields as needed -->
                </div>
              `;

              // Options for PDF generation
              const pdfOptions = {
                margin: 10,
                filename: 'record_details.pdf',
                image: { type: 'jpeg', quality: 0.98 },
                html2canvas: { scale: 2 },
                jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' },
              };

              // Generate PDF using html2pdf
              html2pdf().from(htmlContent).set(pdfOptions).outputPdf(pdf => {
                // Save or open the PDF file as needed
                const blob = new Blob([pdf], { type: 'application/pdf' });
                const link = document.createElement('a');
                link.href = window.URL.createObjectURL(blob);
                link.download = pdfOptions.filename;
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
              });
            } else {
              // Handle the case where the record is not found
              console.error(`Record with ID ${recordId} not found.`);
            }
                  },


        onDecode(result) {
          this.scannedId = result;
          // Implement any additional logic after scanning the QR code
        },
        generateQRCodeUrl(id) {
          return `https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=${id}`;
        },

        generateQRCodeUrl(id) {
          // Use qrcode-generator to generate QR code
          const typeNumber = 2;
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
        async getInfo(){
              try {
                  const inf = await axios.get('getdata');
                  this.info = inf.data;
              } catch (error) {
                  console.log(error);
              }
          },

        async logout(){
              sessionStorage.removeItem('token');
              this.$router.push('/');
        },
          
  }
}
</script>

<style>
/* CSS styles for modal */
.modal {
  display: flex;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(148, 203, 255, 0.5);
  animation-name: modal-animation;
  animation-duration: 0.5s;
}

.modal-content {
  background-color: #ffffff;
  margin: 10% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 90%; /* Adjust the width to fit smaller screens */
  max-width: 600px; /* Max width to ensure readability on larger screens */
  animation-name: modal-content-animation;
  animation-duration: 0.5s;
}

.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}

@keyframes modal-animation {
  from {
    top: -100%;
    opacity: 0;
  }
  to {
    top: 0;
    opacity: 1;
  }
}

@keyframes modal-content-animation {
  from {
    transform: translateY(-100%);
  }
  to {
    transform: translateY(0);
  }
}

@media (max-width: 768px) { /* Adjust for smaller screens */
  .modal-content {
    width: 90%;
    margin: 20px auto;
    padding: 10px;
  }
}
</style>



