<style scoped>
.selected {
  border: 2px solid #007bff; /* Change color as needed */
  background-color: aquamarine;
}
#qr-video {
  width: 400px;
  height: 400px;
}
#qr-result {
  margin-top: 10px;
}
.inventory-image {
  max-width: 100px; /* Adjust as needed */
  max-height: 100px; /* Adjust as needed */
  width: auto;
  height: auto;
  padding: 20px 0 0 20px;
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
  
        
        <li class="nav-heading">Verify</li>
  
        <li class="nav-item">
          <a class="nav-link collapsed" href="offadmin">
            <i class="bi bi-clipboard-data"></i>
            <span>Verification of PPE</span>
          </a>
        </li>

        <li class="nav-heading">Borrow</li>

        <li class="nav-item">
          <a class="nav-link " href="offlogbook">
            <i class="bi bi-clipboard-data"></i>
            <span>Logbook</span>
          </a>
        </li>
  
      </ul>
  
      </aside><!-- End Sidebar-->
  
  
  
  
  
  
  
      <main id="main" class="main">

        <div class="pagetitle">
        <h1>Log Book</h1>
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
                      <!-- <div id="qr-result"></div> -->
                      <button class="btn btn-success" id="start-camera" @click="startCamera" v-show="!isCameraOn">Scan</button>
                      <button class="btn btn-danger" id="stop-camera" @click="stopCamera" v-show="isCameraOn">Stop</button>
                  </div>
              </div>
          </div>
          
          <div class="col-lg-8" align="center">
              <div class="card">
                <div class="card-body">
                  <hr>
                  <h2>Scan Result</h2>
                  <hr>
                  <div id="display-data">
                      <!-- Display fetched data here -->
                      <p v-if="employee">
                        <form @submit.prevent="saveBorrowed" enctype="multipart/form-data">
                          <h4><label for="employee"><b>Welcome!</b>  </label>
                          <input type="text" id="employee" v-model="employee"></h4>
                          <hr>
                          <h5><label><i>Please Select the equipment that you want to borrow:</i></label></h5>
                          <br>
                          <div>
                            <div class="row">
                              <div class="col-lg-4" v-for="(inv, index) in inventory" :key="inv.id">
                                  <!-- Use a click event to handle card selection -->
                                  <div class="card mb-3" 
                                      @click="selectParticular(inv.particulars)"
                                      :class="{ 'selected': selectedParticular === inv.particulars }">
                                      <div class="row g-0">
                                        <div class="col-md-4">
                                          <img :src="inv.image" alt="Inventory Image" class="inventory-image" />
                                        </div>
                                          <div class="col-md-8">
                                              <div class="card-body">
                                                  <h6 class="card-title">{{ inv.particulars }}</h6>
                                                  <p class="card-text">Available: {{ inv.quantity }}</p>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                            </div>
          
                          
                          </div>
                          <button type="submit" class="btn btn-primary">Borrow</button>
                      </form>
                      </p>
                      <h4 v-else><b><i>Kindly Scan the QR Code. Thank you!</i></b> {{ qrCodeData }}</h4>
                  </div>
              </div>              
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Borrowed Log</h5>
                    <p>Please see all the borrowed log of equipments inside the office.</p>
                    <!-- Table with stripped rows -->
                    <table class="table">
                        <!-- Table header -->
                        <thead>
                            <tr>
                                <th>Equipment</th>
                                <th>Employee</th>
                                <th>Date Borrowed</th>
                                <th>Date Returned</th>
                                <th>Scan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Table rows -->
                            <tr v-for="info in borrowedInfo" :key="info.id">
                                <td scope="row">{{ info.particulars }}</td>
                                <td scope="row">{{ info.employee }}</td>
                                <td scope="row">{{ info.date_borrowed }}</td>
                                <td scope="row">{{ info.date_returned }}</td>
                                <td scope="row">
                                  <button class="btn btn-success" @click="selectRecord(info)">Scan</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Returned Log</h5>
                    <p>Please see all the returned log of equipments inside the office.</p>
                    <!-- Table with stripped rows -->
                    <table class="table">
                        <!-- Table header -->
                        <thead>
                            <tr>
                                <th>Equipment</th>
                                <th>Employee</th>
                                <th>Date Borrowed</th>
                                <th>Date Returned</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Table rows -->
                            <tr v-for="info in returnedInfo" :key="info.id">
                                <td scope="row">{{ info.particulars }}</td>
                                <td scope="row">{{ info.employee }}</td>
                                <td scope="row">{{ info.date_borrowed }}</td>
                                <td scope="row">{{ info.date_returned }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>

        <div class="modal" v-if="selectedRecord">
          <div class="modal-content">
            <span class="close" @click="selectedRecord = null">&times;</span>
      
            <!-- Video element for camera -->
            <video id="modal-qr-video" playsinline></video>
            <div id="modal-qr-result"></div>
            <button class="btn btn-success" id="modal-start-camera" @click="startModalCamera" v-show="!modalIsCameraOn">Scan</button>
            <button class="btn btn-danger" id="modal-stop-camera" @click="stopModalCamera" v-show="modalIsCameraOn">Stop</button>
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

export default{
computed:{

},
  data(){
      return{
        info:[],    
        inventory: [],    
        empfullname: '',
        empposition: '',  
        employee: '',
        position: '',
        selectedParticular: null,
        video: null,
        // resultElement: null,
        startButton: null,
        stopButton: null,
        isCameraOn: false,
        stream: null,
        cameraStarted: false,
        qrCodeData: null,
        selectedRecord: '',
        modalIsCameraOn: false,
        modalStream: null,
      }
  },
  computed: {
      particulars: {
            get() {
                return this.selectedParticular;
            },
            set(value) {
                if (value === this.selectedParticular) {
                    // Deselect if the same particular is selected again
                    this.selectedParticular = '';
                } else {
                    this.selectedParticular = value;
                }
            }
        },
      borrowedInfo() {
          // Filter the data where date_returned is not set
          return this.info.filter(item => !item.date_returned);
          },
      returnedInfo() {
          // Filter the data where date_returned is set
          return this.info.filter(item => item.date_returned);
      }
  },
  mounted() {
    this.video = document.getElementById("qr-video");
    // this.resultElement = document.getElementById("qr-result");
    this.startButton = document.getElementById("start-camera");
    this.stopButton = document.getElementById("stop-camera");
  },
  created(){
      this.getInfo()
      this.getInventory()
  },
  methods:{
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
    selectParticular(particular) {
            // Set the selected particular when the card is clicked
            this.selectedParticular = particular;
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
        async stopCamera() {
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
            // this.resultElement.innerHTML = code.data;
            this.fetchDataFromServer();

            // Continue scanning after processing each frame
            this.tick();
            this.stopCamera();
          }
        }
        if (this.isCameraOn) {
          requestAnimationFrame(this.tick);
        }
      },

        fetchDataFromServer() {
            axios.get(`/fetchEmployee/${this.qrCodeData}`)
                .then((response) => {
                    const data = response.data;

                    if (data && Object.keys(data).length > 0) {
                        // Update employee with fetched data
                        this.employee = data.empfullname;
                    } else {
                        // Clear employee data if no data found
                        this.employee = '';
                    }
                })
                .catch((error) => {
                    console.error("Error fetching data:", error);
                });
        },




// -----------------------------------------------------------------------------------------

startModalCamera() {
      navigator.mediaDevices
        .getUserMedia({ video: { facingMode: "environment" } })
        .then((videoStream) => {
          this.modalStream = videoStream;
          const modalVideo = document.getElementById("modal-qr-video");
          modalVideo.srcObject = this.modalStream;
          modalVideo.play();
          this.modalIsCameraOn = true;
          const startButton = document.getElementById("modal-start-camera");
          const stopButton = document.getElementById("modal-stop-camera");
          startButton.style.display = "none";
          stopButton.style.display = "inline-block";
          this.modalTick();
        })
        .catch((error) => {
          console.error("Error accessing camera:", error);
        });
    },

    // Method to stop the camera in the modal
    stopModalCamera() {
      if (this.modalStream) {
        const tracks = this.modalStream.getTracks();
        tracks.forEach((track) => track.stop());

        const modalVideo = document.getElementById("modal-qr-video");
        modalVideo.pause();
        modalVideo.srcObject = null;
        this.modalIsCameraOn = false;

        const startButton = document.getElementById("modal-start-camera");
        const stopButton = document.getElementById("modal-stop-camera");
        startButton.style.display = "inline-block";
        stopButton.style.display = "none";
      }
    },

    // Method to continuously scan QR codes in the modal
    modalTick() {
      const modalVideo = document.getElementById("modal-qr-video");
      if (modalVideo.readyState === modalVideo.HAVE_ENOUGH_DATA) {
        const canvasElement = document.createElement("canvas");
        canvasElement.width = modalVideo.videoWidth;
        canvasElement.height = modalVideo.videoHeight;
        const canvas = canvasElement.getContext("2d");
        canvas.drawImage(
          modalVideo,
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

        if (code && code.data) {
          this.handleModalQRCode(code.data);
        }
      }
      if (this.modalIsCameraOn) {
        requestAnimationFrame(this.modalTick);
      }
    },

    // Method to handle the QR code scanned in the modal
    // async handleModalQRCode(qrCodeData) {
    //   // Update the 'date_returned' column
    //   try {
    //     const response = await axios.post(`/update_logbook_date_returned/${qrCodeData}`, {
    //       date_returned: new Date().toISOString().split('T')[0]
    //     });
    //     console.log(response.data);
    //     console.log("Date returned updated successfully");
    //     // Additional actions if needed
    //   } catch (error) {
    //     console.error("Error updating date returned:", error);
    //   }
    // },
    // async handleModalQRCode(qrCodeData) {
    //     if (this.selectedRecord) { // Use the selectedRecordId as recordId
    //       // Update the 'date_returned' column with the selected record ID and QR code data
    //       try {
    //         const options = {
    //           timeZone: 'Asia/Manila', // Set the timezone to Manila
    //           year: 'numeric',
    //           month: '2-digit',
    //           day: '2-digit',
    //           hour: '2-digit',
    //           minute: '2-digit',
    //           second: '2-digit',
    //           hour12: false // Use 24-hour format
    //         };
    //         const timestamp = new Date().toLocaleString('en-PH', options); // Get the timestamp in Manila timezone
    //         const response = await axios.post(`/update_logbook_date_returned/${this.selectedRecord}/${qrCodeData}`, {
    //           // Pass the timestamp obtained from the client-side
    //           date_returned: timestamp,
    //         });
    //         console.log(response.data);
    //         console.log("Date returned updated successfully");
    //         // Additional actions if needed
    //       } catch (error) {
    //         console.error("Error updating date returned:", error);
    //       }
    //     } else {
    //       console.error("No record ID provided to update date returned.");
    //     }
    //   },

    async handleModalQRCode(qrCodeData) {
      const modalVideo = document.getElementById("modal-qr-video");
      if (modalVideo.readyState >= modalVideo.HAVE_ENOUGH_DATA) {
        if (this.selectedRecord) { // Use the selectedRecordId as recordId
          // Update the 'date_returned' column with the selected record ID and QR code data
          try {
            const options = {
              timeZone: 'Asia/Manila', // Set the timezone to Manila
              year: 'numeric',
              month: '2-digit',
              day: '2-digit',
              hour: '2-digit',
              minute: '2-digit',
              second: '2-digit',
              hour12: false // Use 24-hour format
            };
            const timestamp = new Date().toLocaleString('en-PH', options); // Get the timestamp in Manila timezone
            const response = await axios.post(`/update_logbook_date_returned/${this.selectedRecord}/${qrCodeData}`, {
              // Pass the timestamp obtained from the client-side
              date_returned: timestamp,
            });
            console.log(response.data);
            console.log("Date returned updated successfully");

            // Disable further scanning
            this.selectedRecord = null;

            // Reload the page using Vue Router
            this.$router.go();
          } catch (error) {
            console.error("Error updating date returned:", error);
          }
        } else {
          console.error("No record ID provided to update date returned.");
        }
      }
    },




// ------------------------------------------------------------------------------------------



      async selectRecord(info) {
          this.selectedRecord = info.id;
          console.log(this.selectedRecord);
        },
      async saveBorrowed() {
        try {
          const formData = new FormData();
          formData.append('employee', this.employee);
          formData.append('particulars', this.particulars);

          const response = await axios.post('/saveBorrowed', formData, {
            headers: {
              'Content-Type': 'multipart/form-data'
            }
          });

          console.log('Server response:', response.data);

          this.employee = "";
          this.particulars = "";
          this.stopCamera(); // Stop the camera after saving
          this.$emit('data-saved');
          this.getInfo();
          this.getInventory();
          this.qrCodeData = "";
        } catch (error) {
          console.error(error);
          this.employee = "";
          this.particulars = "";
        }
      },


      async getInventory(){
        try {
            const inv = await axios.get('getInventory');
            this.inventory = inv.data;
            console.log(this.inventory);
        } catch (error) {
            console.log(error);
        }
    },

    async getInfo() {
            try {
                // Pass infos.fullname to the API call
                const inf = await axios.get(`/getBorrowed`);
                this.info = inf.data;
            } catch (error) {
                console.log(error);
            }
        },
        async logout(){
              sessionStorage.removeItem('token');
              this.$router.push('/');
        },
       
  },

}
</script>