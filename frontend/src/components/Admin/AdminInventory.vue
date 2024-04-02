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
        <a class="nav-link collapsed" href="databaseppe">
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
        <a class="nav-link" href="/inventory">
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
      <h1>Inventory</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/inventory">Stocks</a></li>
          <li class="breadcrumb-item active">Inventory</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

      <section class="section">
      <div class="row">
          <div class="col-lg-4">

            <div class="card">
          <div class="card-body">
            <h5 class="card-title">Add Item</h5>





            <!-- Vertical Form -->
            <form class="row g-3" enctype="multipart/form-data">
              <div class="col-12">
                <label for="entityname" class="form-label">Entity Name</label>
                <input type="text" class="form-control" id="entityname" v-model="entityname" required>
              </div>
              <div class="col-12">
                <label for="classification" class="form-label">Classification</label>
                <input type="text" class="form-control" id="classification" v-model="classification" required>
              </div>
              <div class="col-12">
                <label for="code" class="form-label">Code</label>
                <input type="text" class="form-control" id="code" v-model="code" required>
              </div>
              <div class="col-12">
                <label for="article" class="form-label">Article</label>
                <input type="text" class="form-control" id="article" v-model="article" required>
              </div>
              <div class="col-12">
                <label for="particulars" class="form-label">Particulars</label>
                <input type="text" class="form-control" id="particulars" v-model="particulars" required>
              </div>
              <div class="col-12">
                <label for="modelno" class="form-label">Model No.:</label>
                <input type="text" class="form-control" id="modelno" v-model="modelno">
              </div>
              <div class="col-12">
                <label for="serialno" class="form-label">Serial No.:</label>
                <input type="text" class="form-control" id="serialno" v-model="serialno">
              </div>

              <!-- <div class="col-12">
                <label for="image" class="form-label">Upload Image</label>
                <input type="file" class="form-control" id="image" @change="handleFileUpload" accept="image/*">
              </div>
              <div class="col-12">
                <label class="form-label">Preview</label>
                <img :src="uploadedImage" v-if="uploadedImage" alt="Uploaded Image Preview" style="max-width: 100px; max-height: 100px;">
              </div>

              <div class="col-12">
                <label for="camera" class="form-label">Capture Image</label>
                <video id="camera" width="320" height="240" autoplay></video>
                <a @click="startCamera" class="btn btn-primary">{{ cameraStarted ? 'Stop Camera' : 'Start Camera' }}</a>
                <a @click="captureImage" class="btn btn-success" :disabled="!cameraStarted">Capture</a>
              </div>
              <div class="col-12">
                <label class="form-label">Preview</label>
                <img :src="capturedImage" alt="Captured Image" v-if="capturedImage">
              </div> -->

              <div class="col-12">
                  <label class="form-label">Choose Image Source:</label>
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
                  <label for="image" class="form-label">Upload Image</label>
                  <input type="file" class="form-control" id="image" @change="handleFileUpload" accept="image/*">
                  <!-- <div class="col-12">
                      <label class="form-label">Preview</label>
                      <img :src="uploadedImage" v-if="uploadedImage" alt="Uploaded Image Preview" style="max-width: 100px; max-height: 100px;">
                  </div> -->
              </div>

              <div class="col-12" v-else-if="imageSource === 'capture'">
                  <!-- Camera capture section -->
                  <label for="camera" class="form-label">Capture Image</label>
                  <video id="camera" width="320" height="240" autoplay></video>
                  <a @click="startCamera" class="btn btn-primary">{{ cameraStarted ? 'Stop Camera' : 'Start Camera' }}</a>
                  <a @click="captureImage" class="btn btn-success" :disabled="!cameraStarted">Capture</a>
              </div>
              <div class="col-12">
                  <label class="form-label">Image Preview</label>
                  <img :src="imagePreview" v-if="imagePreview" alt="Image Preview" style="max-width: 320px; max-height: 240px;">
              </div>

              <div class="col-12">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="text" class="form-control" id="quantity" v-model="quantity" required>
              </div>
              <div class="col-12">
                <label for="arrival" class="form-label">Arrival</label>
                <input type="datetime-local" class="form-control" id="arrival" v-model="arrival" required>
              </div>
              <div class="text-center">
                  <button @click="saveOrUpdate" v-if="status !== 'update'" type="submit" class="btn btn-primary">Submit</button>
                  <button @click="saveOrUpdate" v-if="status === 'update'" type="submit" class="btn btn-success">Update</button>
                  <button @click="resetForm" type="reset" class="btn btn-secondary">Reset</button>
              </div>
            </form><!-- Vertical Form -->

          </div>
        </div>

          </div>
 
          <div class="col-lg-8" style="font-size: medium;">




          <div class="card">
          <div class="card-body">
            <h5 class="card-title">Stocks</h5>

            <!-- <table class="table table-hover datatable">
              <thead>
                <tr>
                  <th scope="col">Image</th>
                  <th scope="col">Entity</th>
                  <th scope="col">Particulars</th>
                  <th scope="col">Classification</th>
                  <th scope="col">Qty</th>
                  <th scope="col">Arrival</th>
                  <th scope="col">Status</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="inv in inventory">
                  <td scope="row"><img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data={{ inv.id }}" alt=""></td>
                  <td scope="row">{{ inv.entityname }}</td>
                  <td scope="row">{{ inv.particulars }}</td>
                  <td scope="row">{{ inv.classification }}</td>
                  <td scope="row">{{ inv.quantity }}</td>
                  <td scope="row">{{ inv.arrival }}</td>
                  <td scope="row">{{ inv.status }}</td>
                  <td><button @click="deleteRecord(inv.id)" class="btn btn-danger">Delete</button></td>
                </tr>
              </tbody>
            </table> -->
            <div style="overflow-y: auto;">
            <qrcode-stream @decode="onDecode" />
              <table class="table datatable">
                <thead style="width: 100%;">
                  <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Entity</th>
                    <th scope="col">Classification</th>
                    <th scope="col">Code</th>
                    <th scope="col">Article</th>
                    <th scope="col">Particulars</th>
                    <th scope="col">Model No.</th>
                    <th scope="col">Serial No.</th>
                    <th scope="col">Full Description</th>
                    <th scope="col">Qty</th>
                    <th scope="col">Arrival</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="inv in inventory" :key="inv.id">
                    <td scope="row"><img :src="inv.image" alt="Inventory Image" style="max-width: 100px; max-height: 100px;"/></td>
                    <td scope="row">{{ inv.entityname }}</td>
                    <td scope="row">{{ inv.classification }}</td>
                    <td scope="row">{{ inv.code }}</td>
                    <td scope="row">{{ inv.article }}</td>
                    <td scope="row">{{ inv.particulars }}</td>
                    <td scope="row">{{ inv.modelno }}</td>
                    <td scope="row">{{ inv.serialno }}</td>
                    <td scope="row">{{ inv.fulldescription }}</td>
                    <td scope="row">{{ inv.quantity }}</td>
                    <td scope="row">{{ inv.arrival }}</td>
                    <td scope="row">{{ inv.status }}</td>
                    <td><button @click="placeRecord(inv.id)" class="btn btn-warning">Update</button>
                    <button @click="deleteRecord(inv.id)" class="btn btn-danger">Delete</button></td>
                  </tr>
                </tbody>
              </table>
              </div>
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
    }
},
data(){
    return{
        id: "",
        inventory:[],
        entityname: "",
        classification: "",
        code: "",
        article: "",
        particulars: "",
        modelno: "",
        serialno: "",
        fulldescription: "",
        quantity: "",
        arrival: "",
        image: null,
        status: "",
        statusId: "",
        mediaStream: null,
        cameraStarted: false,
        capturedImage: null,
        imageDataUrl: "",
        cameraButtonText: 'Start Camera',
        selectedImageFile: null,
        imageSource: 'upload',
        imagePreview: ''
    }
},
created(){
    this.getInventory()
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

    deleteRecord(id) {
      // Implement your delete logic here
    },
    /*async deleteRecord(recordId){
        const confirm = window.confirm("are you sure you want to delete this?");
        if (confirm){
            await axios.post("del", {
            id: recordId,
        });
        this.getInventory();
        }
    }, */
    async getInventory(){
        try {
            const inv = await axios.get('getInventory');
            this.inventory = inv.data;
            console.log(this.inventory);
        } catch (error) {
            console.log(error);
        }
    },

    async save() {
      try {

        // Create a FormData object and append the captured image file
        const formData = new FormData();
        if (this.selectedImageFile) {
            formData.append('image', this.selectedImageFile);
        }
        else if (this.capturedImage) {
            // Convert the captured image to a file
            const blob = await fetch(this.capturedImage).then(res => res.blob());
            const file = new File([blob], `image_${Date.now()}.png`, { type: 'image/png' });
            formData.append('image', file);
        }

        // Append other form data
        formData.append('entityname', this.entityname);
        formData.append('classification', this.classification);
        formData.append('code', this.code);
        formData.append('article', this.article);
        formData.append('particulars', this.particulars);
        formData.append('modelno', this.modelno);
        formData.append('serialno', this.serialno);
        formData.append('quantity', this.quantity);
        formData.append('arrival', this.arrival);

        // Now you can submit the formData to your backend endpoint using Axios or any other method
        await axios.post('/saveInventory', formData, {
          headers: {
            'Content-Type': 'multipart/form-data'
          }
        });

        this.resetForm();
        this.$emit('data-saved');
        this.getInventory();

        await axios.post('/triggerNotification')
          .then(response => {
            console.log('Notification triggered successfully');
          })
          .catch(error => {
            console.error('Error triggering notification:', error);
          });

        // Now you can submit the formData to your backend endpoint using Axios or any other method
        // Example using Axios:
        // await axios.post('/your-backend-endpoint', formData);

      } catch (error) {
        console.error('Error saving:', error);
      }
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

    // async save() {
    //   try {
    //     // Retrieve the selected image file
    //     const imageFile = this.$refs.image.files[0];

    //     // Use FormData to send both text and file data
    //     const formData = new FormData();
    //     formData.append('entityname', this.entityname);
    //     formData.append('particulars', this.particulars);
    //     formData.append('classification', this.classification);
    //     formData.append('quantity', this.quantity);
    //     formData.append('arrival', this.arrival);
    //     formData.append('image', imageFile);

    //     // Send data using axios.post with FormData
    //     const inv = await axios.post('saveInventory', formData, {
    //       headers: {
    //         'Content-Type': 'multipart/form-data',
    //       },
    //     });

    //     this.resetForm();
    //     this.$emit('data-saved');
    //     this.getInventory();

    //     await axios.post('/triggerNotification')
    //       .then(response => {
    //         console.log('Notification triggered successfully');
    //       })
    //       .catch(error => {
    //         console.error('Error triggering notification:', error);
    //       });

    //   } catch (error) {
    //     console.error('Error saving data:', error);
    //   }
    // },

    async saveOrUpdate() {
      if (this.status === "update") {
          await this.updateRecord();
      } else {
        await this.save();
      }
    },

    //     async updateRecord() {
//     try {
//         const data = {
//             id: this.statusId,
//             entityname: this.entityname,
//             particulars: this.particulars,
//             classification: this.classification,
//             quantity: this.quantity,
//             arrival: this.arrival,
//         };

//         const response = await axios.post(`/updateInventory/${this.statusId}`, data);
        
//         if (response.data.status === 'success') {
//             this.resetForm();
//             this.status = ""; // reset status after update
//             this.getInventory();
//             console.log("Hi");
//             console.log(this.statusId); // Accessing statusId from component's state
//             console.log(data);
//         } else {
//             console.error("Failed to update record:", response.data.message);
//         }
//     } catch (error) {
//         console.error("Error updating record:", error);
//     }
// },

async updateRecord() {
    try {
        const formData = new FormData();

        // Append the updated data
        formData.append('id', this.statusId);
        formData.append('entityname', this.entityname);
        formData.append('classification', this.classification);
        formData.append('code', this.code);
        formData.append('article', this.article);
        formData.append('particulars', this.particulars);
        formData.append('modelno', this.modelno);
        formData.append('serialno', this.serialno);
        formData.append('quantity', this.quantity);
        formData.append('arrival', this.arrival);

        // Always append the image field, even if it's not changed
        if (this.capturedImage) {
            const blob = await fetch(this.capturedImage).then(res => res.blob());
            const file = new File([blob], `image_${Date.now()}.png`, { type: 'image/png' });
            formData.append('image', file);
        } else if (this.selectedImageFile) {
            formData.append('image', this.selectedImageFile);
        } else {
            // If the image is not changed, you can append the existing image data
            formData.append('image', this.imagePreview);
        }

        const response = await axios.post(`/updateInventory/${this.statusId}`, formData, {
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
},

placeRecord(recordId) {
    // set status to update and statusId to the record id
    this.status = "update";
    this.statusId = recordId;

    // fetch the record details and set them to the form
    const record = this.inventory.find(inv => inv.id === recordId);
    this.entityname = record.entityname;
    this.classification = record.classification;
    this.code = record.code;
    this.article = record.article;
    this.particulars = record.particulars;
    this.modelno = record.modelno;
    this.serialno = record.serialno;
    this.quantity = record.quantity;
    this.arrival = record.arrival;
    this.imagePreview = record.image;

    console.log(recordId);
},



    resetForm() {
            this.entityname = "";
            this.classification = "";
            this.code = "";
            this.article = "";
            this.particulars = "";
            this.modelno = "";
            this.serialno = "";
            this.quantity = "";
            this.arrival = "";
            this.cameraStarted = false;
            this.capturedImage = null;
            this.uploadedImage = null;
            this.imagePreview = "";
        },

    
    async deleteRecord(recordId){
      const confirm = window.confirm("Are you sure that you want to delete this record?");
      if(confirm){
        const ins = await axios.post('delInventory', {
          id: recordId,
      });
      this.getInventory();
      }
    },

    async logout(){
        sessionStorage.removeItem('token');
        this.$router.push('/');
    }
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
