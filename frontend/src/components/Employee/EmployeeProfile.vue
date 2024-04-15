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
            <a class="nav-link collapsed" href="/empdashboard">
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
            <a class="nav-link" href="/empprofile">
              <i class="bi bi-folder-plus"></i>
              <span>Employee Profile</span>
            </a>
          </li><!-- End Dashboard Nav -->
      
    
        </ul>
    
        </aside><!-- End Sidebar-->
    
    
    
    
    
    
    
        <main id="main" class="main">

          <div class="pagetitle">
            <h1>Profile</h1>
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Users</li>
                <li class="breadcrumb-item active">Profile</li>
              </ol>
            </nav>
          </div><!-- End Page Title -->
      
          <section class="section profile">
            <div class="row">
              <div class="col-xl-4">
      
                <div class="card">
                  <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
      
                    <div style="width: 200px; height: 200px; overflow: hidden; border-radius: 50%;">
                      <div :style="getImageStyle(infos.image)"></div>
                    </div>
                    <h2>{{ infos.fullname }}</h2>
                    <h3>{{ infos.position }}</h3>
                    <div class="social-links mt-2">
                      <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                      <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                      <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                      <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                </div>
      
              </div>
      
              <div class="col-xl-8">
      
                <div class="card">
                  <div class="card-body pt-3">
                    <!-- Bordered Tabs -->
                    <ul class="nav nav-tabs nav-tabs-bordered">
      
                      <li class="nav-item">
                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                      </li>
      
                      <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                      </li>
      
                      <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Settings</button>
                      </li>
      
                      <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                      </li>
      
                    </ul>
                    <div class="tab-content pt-2">
      
                      <div class="tab-pane fade show active profile-overview" id="profile-overview">
                        <h5 class="card-title">About</h5>
                        <p class="small fst-italic">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</p>
      
                        <h5 class="card-title">Profile Details</h5>
      
                        <div class="row">
                          <div class="col-lg-3 col-md-4 label ">Full Name</div>
                          <div class="col-lg-9 col-md-8">{{ infos.fullname }}</div>
                        </div>

                        <div class="row">
                          <div class="col-lg-3 col-md-4 label">Username</div>
                          <div class="col-lg-9 col-md-8">{{ infos.username }}</div>
                        </div>
      
                        <div class="row">
                          <div class="col-lg-3 col-md-4 label">Position</div>
                          <div class="col-lg-9 col-md-8">{{ infos.position }}</div>
                        </div>

                        <div class="row">
                          <div class="col-lg-3 col-md-4 label">Email</div>
                          <div class="col-lg-9 col-md-8">{{ infos.email }}</div>
                        </div>

                        <div class="row">
                          <div class="col-lg-3 col-md-4 label">Usertype</div>
                          <div class="col-lg-9 col-md-8">{{ infos.usertype }}</div>
                        </div>

                      </div>
      
                      <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
      
                        <!-- Profile Edit Form -->
                        <!--<form>
                           <div class="row mb-3">
                            <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                            <div class="col-md-8 col-lg-9">
                              <img :src="'http://dilg.test/backend/uploads/' + infos.image" alt="Profile" class="rounded-circle" style="height: 100%; width: 100%">
                              <div class="pt-2">
                                <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                                <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                              </div>
                            </div>
                          </div> -->
<!--       
                          <div class="row mb-3">
                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                            <div class="col-md-8 col-lg-9">
                              <input name="fullName" type="text" class="form-control" id="fullName" value="Kevin Anderson">
                            </div>
                          </div>
      
                          <div class="row mb-3">
                            <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                            <div class="col-md-8 col-lg-9">
                              <textarea name="about" class="form-control" id="about" style="height: 100px">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</textarea>
                            </div>
                          </div>
      
                        </form> --><!-- End Profile Edit Form -->

                        <form class="row g-3" enctype="multipart/form-data">
                          <div class="row mb-3">
                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                            <div class="col-md-8 col-lg-9">
                              <input type="text" class="form-control" id="fullname" v-model="infos.fullname"  required>
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label for="username" class="col-md-4 col-lg-3 col-form-label">Username</label>
                            <div class="col-md-8 col-lg-9">
                              <input type="text" class="form-control" id="username" v-model="infos.username" required>
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label for="position" class="col-md-4 col-lg-3 col-form-label">Position</label>
                            <div class="col-md-8 col-lg-9">
                              <input type="text" class="form-control" id="position" v-model="infos.position" required>
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label for="email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                            <div class="col-md-8 col-lg-9">
                              <input type="text" class="form-control" id="email" v-model="infos.email" required>
                            </div>
                          </div>


                          <!--    <div class="col-12">
                           <label class="form-label">Choose Image Source:</label>
                              <div>
                                  <input type="radio" id="upload" value="upload" v-model="imageSource">
                                  <label for="upload">Upload Image</label>
                              </div>
                              <div>
                                  <input type="radio" id="capture" value="capture" v-model="imageSource">
                                  <label for="capture">Capture Image</label>
                              </div>
                          </div>-->
            
                          <div class="row mb-3">
                              <label for="image" class="col-md-4 col-lg-3 col-form-label">Upload Image</label>
                              <div class="col-md-8 col-lg-9">
                              <input type="file" class="form-control" id="image" @change="handleFileUpload" accept="image/*">
                            </div>
                          </div>
            
                          <!-- <div class="col-12" v-else-if="imageSource === 'capture'">
                              <label for="camera" class="form-label">Capture Image</label>
                              <video id="camera" width="320" height="240" autoplay></video>
                              <a @click="startCamera" class="btn btn-primary">{{ cameraStarted ? 'Stop Camera' : 'Start Camera' }}</a>
                              <a @click="captureImage" class="btn btn-success" :disabled="!cameraStarted">Capture</a>
                          </div>-->
                          <div class="col-12">
                              <label class="form-label">Image Preview</label>
                              <img :src="imagePreview" v-if="imagePreview" alt="Image Preview" style="max-width: 320px; max-height: 240px;">
                          </div>
                          <div class="text-center">
                              <button @click="updateEmployee" type="submit" class="btn btn-primary">Save Changes</button>
                          </div>
                        </form><!-- Vertical Form -->









      
                      </div>
      
                      <div class="tab-pane fade pt-3" id="profile-settings">
      
                        <!-- Settings Form -->
                        <form>
      
                          <div class="row mb-3">
                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email Notifications</label>
                            <div class="col-md-8 col-lg-9">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="changesMade" checked>
                                <label class="form-check-label" for="changesMade">
                                  Changes made to your account
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="newProducts" checked>
                                <label class="form-check-label" for="newProducts">
                                  Information on new products and services
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="proOffers">
                                <label class="form-check-label" for="proOffers">
                                  Marketing and promo offers
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="securityNotify" checked disabled>
                                <label class="form-check-label" for="securityNotify">
                                  Security alerts
                                </label>
                              </div>
                            </div>
                          </div>
      
                          <div class="text-center">
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                          </div>
                        </form><!-- End settings Form -->
      
                      </div>
      
                      <div class="tab-pane fade pt-3" id="profile-change-password">
                        <!-- Change Password Form -->
                        <form>
      
                          <div class="row mb-3">
                            <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                            <div class="col-md-8 col-lg-9">
                              <input name="password" type="password" class="form-control" id="currentPassword">
                            </div>
                          </div>
      
                          <div class="row mb-3">
                            <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                            <div class="col-md-8 col-lg-9">
                              <input name="newpassword" type="password" class="form-control" id="newPassword">
                            </div>
                          </div>
      
                          <div class="row mb-3">
                            <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                            <div class="col-md-8 col-lg-9">
                              <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                            </div>
                          </div>
      
                          <div class="text-center">
                            <button type="submit" class="btn btn-primary">Change Password</button>
                          </div>
                        </form><!-- End Change Password Form -->
      
                      </div>
      
                    </div><!-- End Bordered Tabs -->
      
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
  computed:{
  imagePreview() {
    return this.uploadedImage;
        }
    },
  data(){
        return{
            empid: '',
            infos:[],
            info:[],
            fullname: '',
            username: '',
            position: '',
            email: '',
            video: null,
            resultElement: null,
            startButton: null,
            stopButton: null,
            isCameraOn: false,
            stream: null,
            qrCodeData: null,
            selectedImageFile: null,
            imagePreview: ''
        };
    },
    created(){
      this.user();
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
      handleFileUpload(event) {
          const file = event.target.files[0];
          if (file) {
              this.uploadedImage = URL.createObjectURL(file);
              this.selectedImageFile = file;
              this.imagePreview = this.uploadedImage;
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

      async updateEmployee() {
          try {
              const formData = new FormData();
              const empid= this.infos.id;
              this.fullname = this.infos.fullname;
              this.username = this.infos.username;
              this.position = this.infos.position;
              this.email = this.infos.email;

              // Append the updated data
              formData.append('id', this.empid);
              formData.append('fullname', this.fullname);
              formData.append('username', this.username);
              formData.append('position', this.position);
              formData.append('email', this.email);
              formData.append('image', this.selectedImageFile);

              // Always append the image field, even if it's not changed
              // if (this.capturedImage) {
              //     const blob = await fetch(this.capturedImage).then(res => res.blob());
              //     const file = new File([blob], `image_${Date.now()}.png`, { type: 'image/png' });
              //     formData.append('image', file);
              // } else if (this.selectedImageFile) {
              //     formData.append('image', this.selectedImageFile);
              // } else {
              //     // If the image is not changed, you can append the existing image data
              //     formData.append('image', this.imagePreview);
              // }

              const response = await axios.post(`/updateEmployee/${empid}`, formData, {
                  headers: {
                      'Content-Type': 'multipart/form-data'
                  }
              });

              if (response.data.status === 'success') {
                  this.resetForm();
                  console.log("Record updated successfully");
              } else {
                  console.error("Failed to update record:", response.data.message);
              }
          } catch (error) {
              console.error("Error updating record:", error);
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