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
          <a class="nav-link " href="offadmin">
            <i class="bi bi-clipboard-data"></i>
            <span>Verification of PPE</span>
          </a>
        </li>

        <li class="nav-heading">Borrow</li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="offlogbook">
            <i class="bi bi-clipboard-data"></i>
            <span>Logbook</span>
          </a>
        </li>
  
      </ul>
  
      </aside><!-- End Sidebar-->
  
  
  
  
  
  
  
      <main id="main" class="main">

        <div class="pagetitle">
        <h1>Database PPE - Verification</h1>
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
                <h5 class="card-title">Pending</h5> 
                <div class="col-lg-6"> <!-- Use col-lg-6 to make both elements half width on large screens -->
                  <div class="form-group">
                      <!-- Dropdown to filter by employee -->
                      <select v-model="selectedEmployee" @change="downloadEmployeeRecordsPDF" class="form-select mt-3 animated-dropdown">
                          <option value="">Select Employee</option>
                          <option v-for="employee in distinctEmployees" :key="employee" :value="employee">{{ employee }}</option>
                      </select>
                  </div>
              </div>
              <div class="col-lg-6 text-end"> <!-- Use col-lg-6 and text-end to align the button to the right -->
                  <!-- Download All button -->
                  <a class="btn btn-warning" @click="recordsPDF()"><i class="ri-download-2-line"></i> Download All</a>
              </div>

                <br>
                <div style="overflow-y: auto;">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Entity</th>
                    <th>Classification</th>
                    <th>Code</th>
                    <th>Article</th>
                    <th>Particulars</th>
                    <th>Model No.</th>
                    <th>Serial No.</th>
                    <th>Description</th>
                    <th>Employee</th>
                    <th>Date Recorded</th>
                    <th>Image Verification</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- <tr v-for="info in info" :key="info.id" @click="selectRecord(info)"> -->
                  <tr v-for="info in info" :key="info.id">
                      <!-- <td scope="row">
                      <img :src="generateQRCodeUrl(info.id)" alt="" style="width: 200px; height: 200px;">
                    </td> -->
                    <td scope="row">{{ info.entityname }}</td>
                    <td scope="row">{{ info.classification }}</td>
                    <td scope="row">{{ info.code }}</td>
                    <td scope="row">{{ info.article }}</td>
                    <td scope="row">{{ info.particulars }}</td>
                    <td scope="row">{{ info.modelno }}</td>
                    <td scope="row">{{ info.serialno }}</td>
                    <td scope="row">{{ info.fulldescription }}</td>
                    <td scope="row">{{ info.empfullname }}</td>
                    <td scope="row">{{ info.created_at }}</td>
                    <td scope="row"><img :src="info.imageverification" alt="Generate and Capture to Verify" style="max-width: 100px; max-height: 100px;" /></td>
                    <td scope="row">
                      <a class="btn btn-success" @click="generatePDF(info.id)"><i class="bx bxs-download"></i></a>
                      <a class="btn btn-warning" @click="selectRecord(info)"><i class="bx bxs-camera"></i></a>
                    </td>
                  </tr>
                </tbody>
              </table>
                </div>
                <!-- End Table with stripped rows -->

                </div>
            </div>
        </div>
        </div>


        <div class="modal" v-if="selectedRecord">
            <div class="modal-content">
              <span class="close" @click="selectedRecord = null">&times;</span>


              <form class="row g-3" enctype="multipart/form-data">
                <div class="col-12">
                  <label class="form-label"><h3><b>Choose Image Source:</b></h3></label>
                  <div>
                      <input type="radio" id="upload" value="upload" v-model="imageSource">
                      <label for="upload">Upload Image</label>
                  </div>
                  <div>
                      <input type="radio" id="capture" value="capture" v-model="imageSource">
                      <label for="capture">Capture Image</label>
                  </div>
              </div>

              <div class="col-12" v-if="imageSource === 'upload'">
                  <!-- File upload input -->
                  <label for="image" class="form-label"><b>Upload Image</b></label>
                  <input type="file" class="form-control" id="image" @change="handleFileUpload" accept="image/*">
              </div>

              <div class="col-6" v-else-if="imageSource === 'capture'">
                  <!-- Camera capture section -->
                  <label for="camera" class="form-label"><b>Capture Image</b></label>
                  <video id="camera" width="280" height="220" autoplay></video>
                  <a @click="startCamera" class="btn btn-primary">{{ cameraStarted ? 'Stop Camera' : 'Start Camera' }}</a>
                  <a @click="captureImage" class="btn btn-success" :disabled="!cameraStarted">Capture</a>
              </div>
              <div class="col-6">
                  <label class="form-label text-center"><b>Preview</b></label>
                  <img :src="imagePreview" v-if="imagePreview" alt="Image Preview" style="max-width: 280px; max-height: 220px;">
              </div>
              <div class="text-center">
                  <button @click="updateVerification" type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
              </div>
              </form>



            </div>
          </div>


                    <!-- Modal component to display selected record -->
          <!-- <div class="modal" v-if="selectedInfo">
            <div class="modal-content">
              <span class="close" @click="selectedInfo = null">&times;</span>
                <div class="row">
                  <div class="col-lg-6">
                    <img :src="generateQRCodeUrl(selectedInfo.id)" alt="" style="width: 100%; height: auto;">
                  </div>
                  <div class="col-lg-6">
                    <h3>{{ selectedInfo.entityname }}</h3>
                    <h3>{{ selectedInfo.particulars }}</h3>
                    <h3>{{ selectedInfo.classification }}</h3>
                    <h3>{{ selectedInfo.empfullname }}</h3>
                    <h3>{{ selectedInfo.code }}</h3>
                    <h3>{{ selectedInfo.status }}</h3>
                    <h3>{{ selectedInfo.date_returned }}</h3>
                  </div>
                </div>
            </div>
          </div> -->


        </section>

        </main><!-- End #main -->

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    </div>
  </template>


<script>

// Components
import axios from 'axios'
import QRCode from 'qrcode-generator';

export default{
computed:{
    imagePreview() {
        if (this.imageSource === 'upload') {
            return this.uploadedImage;
        } else if (this.imageSource === 'capture') {
            return this.capturedImage;
        } else {
            return null; // or a default placeholder image
        }
    },
    distinctEmployees() {
    const employeeSet = new Set();
    this.info.forEach(item => employeeSet.add(item.empfullname));
    return Array.from(employeeSet);
  },
  // Filtered table data based on selected employee
  filteredInfo() {
    if (this.selectedEmployee) {
      return this.info.filter(item => item.empfullname === this.selectedEmployee);
    } else {
      return this.info;
    }
  }
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
          showModal: false,
          selectedRecord: '',
          selectedInfo: null,
          recordId: "",
          imageverification: null,

          mediaStream: null,
          cameraStarted: false,
          capturedImage: null,
          imageDataUrl: "",
          cameraButtonText: 'Start Camera',
          selectedImageFile: null,
          imageSource: 'upload',
          imagePreview: '',
          selectedEmployee: ''
      }
  },
  created(){
      this.getInfo()
  },
  methods:{
    handleFileUpload(event) {
        const file = event.target.files[0];
        if (file) {
            this.uploadedImage = URL.createObjectURL(file);
            this.selectedImageFile = file;
            this.imagePreview = this.uploadedImage;
        }
    },
  async startCamera() {
    const videoElement = document.getElementById('camera');
    if (!this.cameraStarted) {
      if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
        try {
          const stream = await navigator.mediaDevices.getUserMedia({ video: true });
          videoElement.srcObject = stream;
          this.mediaStream = stream;
          this.cameraStarted = true;
          this.cameraButtonText = 'Stop Camera';
        } catch (error) {
          console.error('Error accessing camera:', error);
        }
      } else {
        console.error('getUserMedia is not supported');
      }
    } else {
      // Stop the camera
      if (this.mediaStream) {
        this.mediaStream.getTracks().forEach(track => {
          track.stop();
        });
      }
      this.cameraStarted = false;
      this.cameraButtonText = 'Start Camera';
    }
  },
    async captureImage() {
      if (!this.cameraStarted) {
        console.error('Camera not started yet');
        return;
      }

      const canvas = document.createElement('canvas');
      canvas.width = 320;
      canvas.height = 240;
      const context = canvas.getContext('2d');
      context.drawImage(document.getElementById('camera'), 0, 0, 320, 240);
      const imageDataUrl = canvas.toDataURL('image/png');

      // Set the captured image for preview
      this.capturedImage = imageDataUrl;
      this.imagePreview = this.capturedImage;
    },


    async updateVerification() {
    try {
        const formData = new FormData();
        // formData.append('id', this.selectedRecord);

        // Always append the image field, even if it's not changed
        if (this.capturedImage) {
            const blob = await fetch(this.capturedImage).then(res => res.blob());
            const file = new File([blob], `image_${Date.now()}.png`, { type: 'image/png' });
            formData.append('imageverification', file);
        } else if (this.selectedImageFile) {
            formData.append('imageverification', this.selectedImageFile);
        } else {
            // If the image is not changed, you can append the existing image data
            formData.append('imageverification', this.imagePreview);
        }

        const response = await axios.post(`/updateVerification/${this.selectedRecord}`, formData, {
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        });

        if (response.data.status === 'success') {
            this.resetForm();
            this.status = ""; // reset status after update
            this.getInventory();
            console.log("Record updated successfully");
        } else {
            console.error("Failed to update record:", response.data.message);
        }
    } catch (error) {
        console.error("Error updating record:", error);
    }
    console.log(this.imagePreview);
},
dataURLtoFile(dataUrl) {
      const binary = atob(dataUrl.split(',')[1]);
      const array = [];
      for (let i = 0; i < binary.length; i++) {
        array.push(binary.charCodeAt(i));
      }
      return new File([new Uint8Array(array)], 'image.png', { type: 'image/png' });
    },
    beforeDestroy() {
    if (this.mediaStream) {
      this.mediaStream.getTracks().forEach(track => {
        track.stop();
      });
    }
  },

        async selectRecord(info) {
          this.selectedRecord = info.id;
          console.log(this.selectedRecord);
        },
        generateRecord(info) {
          this.selectedInfo = info; // Set the selected record
        },

        async generatePDF(recordId) {
            try {
                // Send HTTP request to backend
                const response = await fetch(`http://dilg.test/backend/generatepdf/${recordId}`, {
                    method: 'GET', // Adjust the method accordingly
                    headers: {
                        'Content-Type': 'application/json', // Adjust the content type if needed
                    },
                });

                // Check if the response is successful
                if (response.ok) {
                    const blob = await response.blob();
                    const filename = 'generated_pdf.pdf'; // Adjust the filename if needed
                    const url = window.URL.createObjectURL(new Blob([blob]));
                    const link = document.createElement('a');
                    link.href = url;
                    link.setAttribute('download', filename);
                    document.body.appendChild(link);
                    link.click();
                    link.parentNode.removeChild(link);
                    console.log('PDF generated successfully');
                } else {
                    console.error('Failed to generate PDF');
                }
            } catch (error) {
                // Handle any errors that occur during the request
                console.error('Error:', error);
            }
        },

        async recordsPDF() {
        try {
            // Send HTTP request to backend to generate PDFs for all records
            const response = await fetch('http://dilg.test/backend/recordsPDF', {
                method: 'GET',
                headers: {
                    'Content-Type': 'application/json',
                },
            });

            // Check if the response is successful
            if (response.ok) {
                const blob = await response.blob();
                const filename = 'generated_pdf_all.pdf'; // Adjust the filename if needed
                const url = window.URL.createObjectURL(blob);
                const link = document.createElement('a');
                link.href = url;
                link.setAttribute('download', filename);
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
                console.log('PDF generated successfully');
            } else {
                console.error('Failed to generate PDF');
            }
        } catch (error) {
            console.error('Error generating PDFs:', error);
        }
    },

        async downloadEmployeeRecordsPDF() {
            try {
                const response = await fetch('http://dilg.test/backend/employeeRecordsPDF', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({ acc_officer: this.selectedEmployee }),
                });

                if (response.ok) {
                    const blob = await response.blob();
                    const filename = `${this.selectedEmployee}_records.pdf`; // Adjust the filename if needed
                    const url = window.URL.createObjectURL(new Blob([blob]));
                    const link = document.createElement('a');
                    link.href = url;
                    link.setAttribute('download', filename);
                    document.body.appendChild(link);
                    link.click();
                    link.parentNode.removeChild(link);
                    console.log('PDF generated successfully');
                } else {
                    console.error('Failed to generate PDF');
                }
            } catch (error) {
                console.error('Error generating PDF:', error);
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
                  const inf = await axios.get('getOfficerVerifyPPE');
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
  beforeDestroy() {
    if (this.mediaStream) {
      this.mediaStream.getTracks().forEach(track => {
        track.stop();
      });
    }
  },
}
</script>

<style scoped>
.animated-dropdown {
  width: 50%; /* Set the width to half of its container */
  transition: width 0.3s ease; /* Add animation transition */
}

.animated-dropdown:hover {
  width: 50%; /* Expand to full width on hover */
}

#qr-video {
  width: 300px;
  height: 300px;
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



