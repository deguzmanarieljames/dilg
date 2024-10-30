<style scoped>
.star-rating {
  font-size: 2rem;
  color: #ffd700;
  cursor: pointer;
}

.star {
  color: #ccc;
  transition: color 0.2s;
}

.star.hovered,
.star.selected {
  color: #ffd700;
}

.star:hover ~ .star {
  color: #ccc;
}


.modal {
  background: rgba(0, 0, 0, 0.5);
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
}

.modal-dialog {
  max-width: 500px;
}

.modal-content {
  background: white;
  padding: 20px;
  border-radius: 5px;
}


</style>
<template>
    <div id="app" style="background-image: url('./img/bg.png'); background-size: cover; background-attachment: fixed; height: 100%;">
            <!-- ======= Header ======= -->
            <header id="header" class="header fixed-top d-flex align-items-center">
      
              <div class="d-flex align-items-center justify-content-between">
                <a href="/dashboard" class="logo d-flex align-items-center">
                  <img src="./img/dilg-logo1.png" alt="" style="max-height: 92px; max-width: 92px">
                  <span class="d-none d-lg-block" style="font-family: Times New Roman, Times, serif; font-size: 25px; color: rgb(42, 43, 72);padding-left: 10px">
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
              <a class="nav-link collapsed" href="/inventory">
                <i class="bi bi-folder-plus"></i>
                <span>Inventory</span>
              </a>
            </li>

            <li class="nav-heading">Ordering</li>
    
            <li class="nav-item">
              <a class="nav-link" href="/ordering">
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
            </li>
                    
      
          </ul>
      
          </aside><!-- End Sidebar-->
      
      
      
      
      
      
      
          <main id="main" class="main">
      
          <div class="pagetitle">
            <h1>Pending Section</h1>
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/ordering">Pending</a></li>
                <li class="breadcrumb-item active">Ordering</li>
              </ol>
            </nav>
          </div><!-- End Page Title -->
      <header>
        <nav>
          <ul style="list-style-type: none">
            <div class="row" >
              <div class="col-lg-4" align="center">
                <li class="nav-item"><a class="nav-link-collapsed" href="/ordering"><i class="bi bi-folder-plus"><span>Orders</span></i></a></li>
              </div>
              <div class="col-lg-4" align="center">
                <li class="nav-item"><a class="nav-link" href="/orderpending"><i class="bi bi-folder-plus"><span>Pending</span></i></a></li>
              </div>
              <div class="col-lg-4" align="center">
                <li class="nav-item"><a class="nav-link-collapsed" href="/orderincoming"><i class="bi bi-folder-plus"><span>Incoming</span></i></a></li>
              </div>
            </div>
          </ul>
        </nav>
      </header>
      <section class="section">
        <div class="row">
            <div class="col-lg-12">


              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Pending Orders</h5>
                      <!-- Table with stripped rows -->
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Article</th>
                            <th>Particulars</th>
                            <th>Shop</th>
                            <th>Quantity</th>
                            <th>Total Amount</th>
                            <th datatype="date" data-format="YYYY/DD/MM">Date Ordered</th>
                            <th>Status</th>
                            <th>Receipt Verification</th>
                            <th>Action</th>
                            <th>Rating</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr v-for="ord in order" :key="ord.id">
                            <td>{{ ord.article }}</td>
                            <td>{{ ord.particulars }}</td>
                            <td>{{ ord.shop }}</td>
                            <td>{{ ord.quantity }}</td>
                            <td>{{ ord.totalamount }}</td>
                            <td>{{ ord.date_ordered }}</td>
                            <td>{{ ord.status }}</td>
                            <td>
                              <img :src="ord.receipt" alt="Inventory Image" style="max-width: 100px; max-height: 100px;" />
                            </td>
                            <td>
                              <a class="btn btn-warning" @click="selectRecord(ord)">
                                <i class="bx bxs-camera"></i>
                              </a>
                            </td>
                            <td>
                              <button class="btn btn-primary" @click="openModal(ord)">Rate</button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <!-- End Table with stripped rows -->
                    </div>
                  </div>
                </div>
              </div>
              
              <div v-if="showRatingModal" class="modal" tabindex="-1" role="dialog" style="display: block;">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Rate Order</h5>
                      <button type="button" class="close" @click="closeModal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div v-if="!currentOrder.confirmRating" class="star-rating" align="center">
                        <span 
                          v-for="star in 5" 
                          :key="star" 
                          class="star" 
                          :class="{ selected: star <= currentOrder.userRating, hovered: star <= currentOrder.hoverRating }" 
                          @mouseover="highlightStars(currentOrder, star)" 
                          @mouseleave="resetStars(currentOrder)" 
                          @click="selectRating(star)">
                          &#9733;
                        </span>
                      </div>
                      <div v-else align="center">
                        <button class="btn btn-outline-info rounded-pill" @click="rateRecord(currentOrder)">Rate Now</button>
                        <button class="btn btn-outline-secondary rounded-pill" @click="changeRating(currentOrder)">Change Rating</button>
                      </div>
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
                  <button @click="updateReceipt" type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
              </div>
              </form>



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
      import axios from 'axios'
      
      
      export default{
      
      computed:{
        totalAmount() {
          return this.quantity * this.unitcost;
        },
        totalAmountFormatted() {
          // Format total amount with commas
          return this.totalAmount.toLocaleString();
        },
      },
      data(){
          return{
              id: "",
              inventory:[],
              order:[],
              entityname: "",
              classification: "",
              article: "",
              particular: "",
              quantity: "",
              unit: "",
              unitcost: "",
              totalamount: "",
              shop: "",
              date_ordered: "",
              number_rating: "",
              status: "",
              receipt: null,
              mediaStream: null,
              cameraStarted: false,
              capturedImage: null,
              imageDataUrl: "",
              cameraButtonText: 'Start Camera',
              selectedImageFile: null,
              imageSource: 'upload',
              imagePreview: '',
              selectedRecord: '',
              showRatingModal: false,
              currentOrder: null,

          }
      },
      created(){
          this.getOrder()
      },
      mounted() {
        this.order.forEach(ord => {
          ord.userRating = ord.number_rating;
          ord.hoverRating = 0;
          ord.confirmRating = false;
        });
      },
      methods:{
        async getOrder() {
          try {
            const ord = await axios.get('getOrder');
            this.order = ord.data;
            this.order.forEach(ord => {
              ord.userRating = ord.number_rating;
              ord.hoverRating = 0;
              ord.confirmRating = false;
            });
            console.log(this.order);
          } catch (error) {
            console.log(error);
          }
        },
        openModal(ord) {
          this.currentOrder = ord;
          this.showRatingModal = true;
        },
        closeModal() {
          this.showRatingModal = false;
          this.currentOrder = null;
        },
        highlightStars(ord, star) {
          ord.hoverRating = star;
        },
        resetStars(ord) {
          ord.hoverRating = 0;
        },
        selectRating(star) {
          // Debug: Log the selected star
          console.log('Selected star:', star);

          this.currentOrder.userRating = star;
          this.currentOrder.confirmRating = true;
        },
        async rateRecord(ord) {
          // Debug: Log the currentOrder object before sending the request
          console.log('Current order:', ord);

          const number_rating = ord.userRating;
          ord.confirmRating = false;
          const id = ord.id;

          // Debug: Log the rating value before sending the request
          console.log('Rating to be sent:', ord.number_rating);

          try {
            const response = await axios.post(`/updateRating/${id}/${number_rating}`, {
            });

            console.log(response.data);
            this.closeModal();
            this.$emit('data-saved');
            this.getOrder();
          } catch (error) {
            console.error(error);
          }
        },
        changeRating(ord) {
          ord.confirmRating = false;
          ord.hoverRating = 0;
        },
        async selectRecord(ord) {
          this.selectedRecord = ord.id;
          console.log(this.selectedRecord);
        },


          async updateReceipt() {
            try {
                const formData = new FormData();
                // formData.append('id', this.selectedRecord);

                // Always append the image field, even if it's not changed
                if (this.capturedImage) {
                    const blob = await fetch(this.capturedImage).then(res => res.blob());
                    const file = new File([blob], `image_${Date.now()}.png`, { type: 'image/png' });
                    formData.append('receipt', file);
                } else if (this.selectedImageFile) {
                    formData.append('receipt', this.selectedImageFile);
                } else {
                    // If the image is not changed, you can append the existing image data
                    formData.append('receipt', this.imagePreview);
                }

                const response = await axios.post(`/updateReceipt/${this.selectedRecord}`, formData, {
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



      
          resetForm() {
                  this.classification = "";
                  this.article = "";
                  this.particular = "";
                  this.unit = "";
                  this.unitcost = "";
                  this.totalamount = "";
                  this.shop = "";
                  this.quantity = "";
                  this.date_ordered = "";
              },
      
      
      
          async logout(){
              sessionStorage.removeItem('token');
              this.$router.push('/');
          },


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



      },
      }
      </script>
    