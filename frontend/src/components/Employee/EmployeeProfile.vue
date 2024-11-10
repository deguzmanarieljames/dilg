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

          <li class="nav-item">
            <a class="nav-link collapsed" href="/empqrcode">
              <i class="bi bi-folder-plus"></i>
              <span>Generate QR</span>
            </a>
          </li>
          
          <li class="nav-heading">user</li>
    
          <li class="nav-item">
            <a class="nav-link active" href="/empprofile">
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
                    <br>
                    
                    <ul class="wrapper">
                      <li class="icon facebook">
                        <span class="tooltip" >Facebook</span>
                        <svg
                          viewBox="0 0 320 512"
                          height="1.2em"
                          fill="currentColor"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"
                          ></path>
                        </svg>
                      </li>
                      <li class="icon twitter">
                        <span class="tooltip">Twitter</span>
                        <svg
                          height="1.8em"
                          fill="currentColor"
                          viewBox="0 0 48 48"
                          xmlns="http://www.w3.org/2000/svg"
                          class="twitter"
                        >
                          <path
                            d="M42,12.429c-1.323,0.586-2.746,0.977-4.247,1.162c1.526-0.906,2.7-2.351,3.251-4.058c-1.428,0.837-3.01,1.452-4.693,1.776C34.967,9.884,33.05,9,30.926,9c-4.08,0-7.387,3.278-7.387,7.32c0,0.572,0.067,1.129,0.193,1.67c-6.138-0.308-11.582-3.226-15.224-7.654c-0.64,1.082-1,2.349-1,3.686c0,2.541,1.301,4.778,3.285,6.096c-1.211-0.037-2.351-0.374-3.349-0.914c0,0.022,0,0.055,0,0.086c0,3.551,2.547,6.508,5.923,7.181c-0.617,0.169-1.269,0.263-1.941,0.263c-0.477,0-0.942-0.054-1.392-0.135c0.94,2.902,3.667,5.023,6.898,5.086c-2.528,1.96-5.712,3.134-9.174,3.134c-0.598,0-1.183-0.034-1.761-0.104C9.268,36.786,13.152,38,17.321,38c13.585,0,21.017-11.156,21.017-20.834c0-0.317-0.01-0.633-0.025-0.945C39.763,15.197,41.013,13.905,42,12.429"
                          ></path>
                        </svg>
                      </li>
                      <li class="icon instagram">
                        <span class="tooltip">Instagram</span>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          height="1.2em"
                          fill="currentColor"
                          class="bi bi-instagram"
                          viewBox="0 0 16 16"
                        >
                          <path
                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"
                          ></path>
                        </svg>
                      </li>
                    </ul>


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
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                      </li>
      
                    </ul>
                    <div class="tab-content pt-2">
      
                      <div class="tab-pane fade show active profile-overview" id="profile-overview">
      
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
                          <br>
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
                              <label class="form-label">&nbsp;Image Preview</label>
                              <img :src="imagePreview" v-if="imagePreview" alt="Image Preview" style="max-width: 320px; max-height: 240px;
                              margin-left: 190px;">
                          </div>
                          
                          <div class="text-center">
                            <br>
                              <button @click="updateEmployee" type="submit" class="button" style= "margin-right: 140px;">Save Changes</button>
                          </div>
                        </form><!-- Vertical Form -->
      
                      </div>
      
                      <div class="tab-pane fade pt-3" id="profile-change-password">
                        <!-- Change Password Form -->
                        <form @submit.prevent="changePassword">
                          <div class="row mb-3">
                            <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                            <div class="col-md-8 col-lg-9">
                              <input v-model="password.current" name="password" type="password" class="form-control" id="currentPassword" />
                            </div>
                          </div>
                    
                          <div class="row mb-3">
                            <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                            <div class="col-md-8 col-lg-9">
                              <input v-model="password.new" name="newpassword" type="password" class="form-control" id="newPassword" />
                            </div>
                          </div>
                    
                          <div class="row mb-3">
                            <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                            <div class="col-md-8 col-lg-9">
                              <input v-model="password.reNew" name="renewpassword" type="password" class="form-control" id="renewPassword" />
                            </div>
                          </div>
                    
                          <div class="text-center">
                            <br />
                            <button type="submit" class="button" style="margin-right: 140px;">Change Password</button>
                          </div>
                        </form>                    
      
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
            imagePreview: '',
            password: {
              current: '',
              new: '',
              reNew: ''
            }
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

      async changePassword() {
        if (this.password.new !== this.password.reNew) {
          console.error("New passwords do not match!");
          alert("New passwords do not match!");
          return;
        }

        try {
          const response = await fetch('http://dilg.test/backend/changePassword', {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json'
            },
            body: JSON.stringify({
              id: this.infos.id, // Pass userId
              currentPassword: this.password.current,
              newPassword: this.password.new
            })
          });

          const result = await response.json();
          if (result.msg === 'passwordChanged') {
            alert('Password changed successfully!');
          } else {
            alert(result.error || 'Failed to change password');
          }
        } catch (error) {
          console.error('An error occurred:', error);
          alert('An error occurred while changing the password');
        }
      },



      async logout(){
          sessionStorage.removeItem('token');
          this.$router.push('/signin');
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

<style scoped>

.sidebar {
  width: 300px;
  z-index: 1;
  background-color: #1b2f47; /* Background color for active links */
}

/* Sidebar text color and background for links */
.sidebar .sidebar-nav .nav-link {
  background-color: #1b2f47; 
  color: white !important; 
  transition: all 0.3s ease;
}

/* Sidebar text color and background when a link is active or hovered */
.sidebar .sidebar-nav .nav-link.active {
  background: linear-gradient(to right, #1b2f47, #3e5b77);
  color: white !important;
  border-left: 4px solid #FFF;
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

.form-control {
  border: 2px solid transparent;
  width: 25em;
  height: 2.5em;
  padding-left: 0.8em;
  outline: none;
  overflow: hidden;
  background-color: #F3F3F3;
  border-radius: 10px;
  transition: all 0.5s;
}

.form-control:hover,
.form-control:focus {
  border: 2px solid #4A9DEC;
  box-shadow: 0px 0px 0px 7px rgb(74, 157, 236, 20%);
  background-color: white;
}

.button {
  border: none;
  background-color: seagreen;
  color: white;
  font-size: 1rem; 
  font-weight: 500;
  padding: 0.6rem 1.8rem; 
  border-radius: 0.4rem;
  box-shadow: 0 0.4rem 0.8rem rgba(0, 0, 0, 0.15);
  cursor: pointer;
  transform: translate(1) translate(0, 0);
  transition: transform 225ms, box-shadow 225ms;
}

.button:hover {
  transform: scale(1.05) translate(0, -0.1rem);
  box-shadow: 0 0.4rem 0.8rem rgba(0, 0, 0, 0.35);
}

.button:active {
  transform: scale(1) translate(0, 0.1rem);
  box-shadow: 0 0.4rem 0.8rem rgba(0, 0, 0, 0.15);
}

.label,
.col-lg-9 {
  font-size: 16px; 
}

/* From Uiverse.io by david-mohseni */ 
.wrapper {
  display: inline-flex;
  list-style: none;
  height: 120px;
  width: 100%;
  padding-top: 40px;
  font-family: "Poppins", sans-serif;
  justify-content: center;
}

.wrapper .icon {
  position: relative;
  background: #fff;
  border-radius: 50%;
  margin: 10px;
  width: 50px;
  height: 50px;
  font-size: 18px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
  cursor: pointer;
  transition: all 0.2s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.wrapper .tooltip {
  position: absolute;
  top: 0;
  font-size: 14px;
  background: #fff;
  color: #fff;
  padding: 5px 8px;
  border-radius: 5px;
  box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
  opacity: 0;
  pointer-events: none;
  transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.wrapper .tooltip::before {
  position: absolute;
  content: "";
  height: 8px;
  width: 8px;
  background: #fff;
  bottom: -3px;
  left: 50%;
  transform: translate(-50%) rotate(45deg);
  transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.wrapper .icon:hover .tooltip {
  top: -45px;
  opacity: 1;
  visibility: visible;
  pointer-events: auto;
}

.wrapper .icon:hover span,
.wrapper .icon:hover .tooltip {
  text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.1);
}

.wrapper .facebook:hover,
.wrapper .facebook:hover .tooltip,
.wrapper .facebook:hover .tooltip::before {
  background: #1877f2;
  color: #fff;
}

.wrapper .twitter:hover,
.wrapper .twitter:hover .tooltip,
.wrapper .twitter:hover .tooltip::before {
  background: #1da1f2;
  color: #fff;
}

.wrapper .instagram:hover,
.wrapper .instagram:hover .tooltip,
.wrapper .instagram:hover .tooltip::before {
  background: #e4405f;
  color: #fff;
}



</style>