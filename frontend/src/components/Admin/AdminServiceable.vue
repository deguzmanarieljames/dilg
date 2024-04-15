<style scoped>
#qr-video {
  width: 300px;
  height: 300px;
}
#qr-result {
  margin-top: 10px;
}
</style>


<template>
<div id="app" style="background-image: url('./img/bg.png'); background-size: cover; background-attachment: fixed; height: 100%;">
        <!-- ======= Header ======= -->
        <header id="header" class="header fixed-top d-flex align-items-center">
  
      <div class="d-flex align-items-center justify-content-between">
        <a href="/dashboard" class="logo d-flex align-items-center">
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
          <a class="nav-link collapsed" href="databaseppe">
            <i class="bi bi-clipboard-data"></i>
            <span>Database PPE</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-menu-button-wide"></i><span>PROPERTY, PLANT AND EQUIPMENT</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="components-nav" class="nav-content " data-bs-parent="#sidebar-nav">
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
        <h1>Serviceable - Property, Plant and Equipment</h1>
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
            <div class="col-lg-4">

              <div class="card">
                <div class="card-body">


                  <video id="qr-video" playsinline></video>
                  <div id="qr-result"></div>
                  <button class="btn btn-success" id="start-camera" @click="startCamera" v-show="!isCameraOn">Scan</button>
                  <button class="btn btn-danger" id="stop-camera" @click="stopCamera" v-show="isCameraOn">Stop</button>



                </div>
            </div>

            </div>

            <div class="col-lg-8">

            <div class="card">
              <div class="card-body">
                <hr>
                <h2>Result</h2>
                <hr>
                <div id="display-data">
                  <!-- Display fetched data here -->
                </div>



              </div>
            </div>

            </div>
        </div>

        
        <div class="row">
              <div class="col-lg-12">
                <div class="card">
                <div class="card-body">
                <h5 class="card-title">Acquisition</h5>
                <p> Refers to the act of gaining possession to a property or equipment by the government.</p>
                <!-- Table with stripped rows -->
                <table class="table datatable">
                    <thead>
                    <tr>
                        <th>Image</th>
                        <th>Entity</th>
                        <th>Particulars</th>
                        <th>Classification</th>
                        <th>Assigned</th>
                        <th>Code</th>
                        <th>Status</th>
                        <th datatype="date" data-format="YYYY/DD/MM">Date Recorded</th>
                        <th>Date Returned</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="info in info" :key="info.id">
                      <td scope="row">
                        <img :src="generateQRCodeUrl(info.id)" alt="">
                      </td>
                        <td scope="row">{{ info.entityname }}</td>
                        <td scope="row">{{ info.particulars }}</td>
                        <td scope="row">{{ info.classification }}</td>
                        <td scope="row">{{ info.empfullname }}</td>
                        <td scope="row">{{ info.code }}</td>
                        <td scope="row">{{ info.status }}</td>
                        <td scope="row">{{ info.created_at }}</td>
                        <td scope="row">{{ info.date_returned }}</td>
                    </tr>
                    </tbody>
                </table>
                <!-- End Table with stripped rows -->

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
// import QrcodeStream from "vue-qrcode-reader";
import jsQR from "jsqr";
import QRCode from 'qrcode-generator';

export default{
  components: {
    // QrcodeStream,
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
      }
  },
  mounted() {
    this.video = document.getElementById("qr-video");
    this.resultElement = document.getElementById("qr-result");
    this.startButton = document.getElementById("start-camera");
    this.stopButton = document.getElementById("stop-camera");
  },
  created(){
      this.getInfo()
  },
  methods:{
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
        async getInfo(){
              try {
                  const inf = await axios.get('getDataServiceable');
                  this.info = inf.data;
              } catch (error) {
                  console.log(error);
              }
          },

        async logout(){
              sessionStorage.removeItem('token');
              this.$router.push('/');
        },





        startCamera() {
        navigator.mediaDevices
        .getUserMedia({ video: { facingMode: "environment" } })
        .then((videoStream) => {
          this.stream = videoStream;
          this.video.srcObject = this.stream;
          this.video.play();
          this.isCameraOn = true;
          this.startButton.style.display = "none";
          this.stopButton.style.display = "inline-block";
          this.tick();
        })
        .catch((error) => {
          console.error("Error accessing camera:", error);
        });
        },
        stopCamera() {
          if (this.stream) {
            const tracks = this.stream.getTracks();
            tracks.forEach((track) => track.stop());
            
            if (this.video) {
              this.video.pause();
              this.video.srcObject = null;
              this.isCameraOn = false;

              if (this.startButton && this.startButton.style) {
                this.startButton.style.display = "inline-block";
              }

              if (this.stopButton && this.stopButton.style) {
                this.stopButton.style.display = "none";
              }
            }
          }
        },
        tick() {
        if (this.video.readyState === this.video.HAVE_ENOUGH_DATA) {
          const canvasElement = document.createElement("canvas");
          canvasElement.width = this.video.videoWidth;
          canvasElement.height = this.video.videoHeight;
          const canvas = canvasElement.getContext("2d");
          canvas.drawImage(
            this.video,
            0,
            0,
            canvasElement.width,
            canvasElement.height
          );
          const imageData = canvas.getImageData(
            0,
            0,
            canvasElement.width,
            canvasElement.height
          );
          const code = jsQR(imageData.data, imageData.width, imageData.height);

          if (code && code.data !== this.qrCodeData) {
            this.qrCodeData = code.data;
            this.resultElement.innerHTML = "QR Code detected: " + code.data;
            this.fetchDataFromServer();

            // Continue scanning after processing each frame
            this.tick();
          }
        }
        if (this.isCameraOn) {
          requestAnimationFrame(this.tick);
        }
      },

      fetchDataFromServer() {
          axios.get(`/fetch_data/${this.qrCodeData}`)
              .then((response) => {
                  const data = response.data;
                  const displayElement = document.getElementById("display-data");

                  if (data && Object.keys(data).length > 0) {
                      const fields = [
                          'entityname',
                          'particulars',
                          'classification',
                          'code',
                          'empfullname',
                          'status',
                          'created_at',
                          'date_returned'
                          // Add more fields as needed
                      ];

                      // Update the date_returned field with the current date
                      data.date_returned = new Date().toISOString().split('T')[0];

                      // Perform the updateDateReturned call here if needed
                      this.updateDateReturned();

                      const htmlContent = fields.map(field => `<p>${field.replace('_', ' ').toUpperCase()}: ${data[field]}</p>`).join('');
                      displayElement.innerHTML = htmlContent;
                  } else {
                      displayElement.innerHTML = `<p>No data found for ID: ${this.qrCodeData}</p>`;
                  }
              })
              .catch((error) => {
                  console.error("Error fetching data:", error);
              });
      },

      updateDateReturned() {
        axios.post(`/update_date_returned/${this.qrCodeData}`, {
          date_returned: new Date().toISOString().split('T')[0]
        })
        .then((response) => {
          console.log(response.data);
          console.log("Date returned updated successfully");
          // You can perform additional actions here if needed
        })
        .catch((error) => {
          console.error("Error updating date returned:", error);
        });
      },
          
  }
}
</script>