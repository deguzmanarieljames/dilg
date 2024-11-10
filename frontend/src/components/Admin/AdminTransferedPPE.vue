<template>
  <div id="app" style="background-image: url('./img/color.jpg'); background-size: cover; background-attachment: fixed; height: 100%;">
            <!-- ======= Header ======= -->
            <header id="header" class="header fixed-top d-flex align-items-center" style="background-color: rgba(135, 206, 235, 0.7);">
      
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
      
              <!-- Notification Icon -->
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon" href="#" @click="fetchNotifications" data-bs-toggle="dropdown">
                  <i class="bi bi-bell"></i>
                  <span class="badge bg-danger badge-number">{{ unreadCount }}</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications" @click.stop>
                  <!-- Title and Tabs -->
                  <li class="dropdown-header">
                    <span class="notifications-title">Notifications</span>
                    <nav class="notifications-nav">
                      <button @click="filterNotifications('all')" :class="{ active: filter === 'all' }">All</button>
                      <button @click="filterNotifications('unread')" :class="{ active: filter === 'unread' }">Unread</button>
                    </nav>
                  </li>
                  <hr />

                  <!-- Notifications List -->
                  <li
                  v-for="notification in filteredNotifications"
                  :key="notification.id"
                  :class="['dropdown-item', notification.status === 'unread' ? 'notification-unread' : 'notification-read']"
                  @click="markAsRead(notification.id)"
                  >
                    <div class="notification-content">
                      <!-- Icon in a white circle -->
                      <div class="notification-icon-circle">
                        <i :class="notification.icon"></i> <!-- Icon from the database -->
                      </div>
                  
                      <!-- Message and Time -->
                      <div class="notification-details">
                        <span class="notification-message">{{ truncateMessage(notification.message) }}</span>
                        <span class="notification-time">{{ computeTimeAgo(notification.created_at) }}</span> <!-- Time below the message -->
                      </div>
                  
                      <!-- Unread Indicator Circle -->
                      <span class="notification-indicator" v-if="notification.status === 'unread'"></span>
                    </div>
                  </li>
                
                  <li v-if="filteredNotifications.length === 0" class="dropdown-item text-center">No notifications</li>
                </ul>
              </li>

      
              <!-- Profile Nav -->
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
                <a class="nav-link collapsed" href="/dashboard">
                  <i class="bi bi-grid"></i>
                  <span>Dashboard</span>
                </a>
              </li><!-- End Dashboard Nav -->
        
              
              <!-- Pages Section -->
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
                    <a href="/serviceable">
                      <i class="bi bi-clipboard-check"></i><span>Serviceable</span>
                    </a>
                  </li>
                  <li>
                    <a href="unserviceable">
                      <i class="bi bi-clipboard-x"></i><span>Unserviceable</span>
                    </a>
                  </li>
                  <li>
                    <a href="returnedppe">
                      <i class="bi bi-box-arrow-left"></i><span>Returned PPE</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link active" href="transferedppe">
                      <i class="bi bi-box-arrow-right"></i><span>Transfered PPE</span>
                    </a>
                </li>
                <li>
                    <a href="disposedppe">
                      <i class="bi bi-trash"></i><span>Disposed PPE</span>
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
                      <i class="bi bi-sticky"></i><span>Property Sticker</span>
                    </a>
                  </li>
                  <li>
                    <a href="ledgercard">
                      <i class="bi bi-folder2-open"></i><span>PPE Documents</span>
                    </a>
                  </li>
                </ul>
              </li><!-- End Forms Nav -->
              <!-- Input Section -->
              <li class="nav-heading">input</li>
              <li class="nav-item">
                <a class="nav-link collapsed" href="/workspace">
                  <i class="bi bi-pencil-square"></i>
                  <span>Workspace</span>
                </a>
              </li><!-- End Input Nav -->
              <li class="nav-item">
                <a class="nav-link collapsed" href="/logbook">
                  <i class="bi bi-calendar-check"></i>
                  <span>Logbook</span>
                </a>
              </li><!-- End Input Nav -->
              <!-- Stocks Section -->
              <li class="nav-heading">Stocks</li>
              <li class="nav-item">
                <a class="nav-link collapsed" href="/inventory">
                  <i class="bi bi-box-seam"></i>
                  <span>Inventory</span>
                </a>
              </li><!-- End Stocks Nav -->
              <li class="nav-item">
                <a class="nav-link collapsed" href="/supplies">
                  <i class="bi bi-stack"></i>
                  <span>Supplies</span>
                </a>
              </li>
              <!-- Ordering Section -->
              <li class="nav-heading">Ordering</li>
              <li class="nav-item">
                <a class="nav-link collapsed" href="/ordering">
                  <i class="bi bi-shop"></i>
                  <span>Ordering</span>
                </a>
              </li><!-- End Ordering Nav -->
              <!-- Security Section -->
              <li class="nav-heading">Security</li>
              <li class="nav-item">
                <a class="nav-link collapsed" href="/userverify">
                  <i class="bi bi-person-check"></i>
                  <span>User Verification</span>
                </a>
              </li><!-- End Security Nav -->
            </ul>
          </aside><!-- End Sidebar-->
      
      
      
      
      
      
      
          <main id="main" class="main">
    
            <div class="pagetitle">
            <h1>Transfered - Property, Plant and Equipment</h1>
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
                <div class="card" style="border-top: solid 30px #fffdb4; border-bottom: solid 30px #fffdb4;">
                <div class="card-body">
                    <br>
  
                            <!-- Dropdowns and Search Bar at the Top -->
                    <div class="row align-items-center">
                        <!-- Dropdown for Employee -->
                        <div class="col-lg-2">
                          <!-- Show Entries -->
                            <span class="me-2">Show</span> <!-- Added margin to the right -->
                            <div class="dropdown" style="display: inline-block;">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="showEntriesDropdown" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: white; color: black;">
                                {{ pageSize }}
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="showEntriesDropdown">
                                <li><a class="dropdown-item" href="#" @click="updatePageSize(10)">10</a></li>
                                <li><a class="dropdown-item" href="#" @click="updatePageSize(20)">20</a></li>
                                <li><a class="dropdown-item" href="#" @click="updatePageSize(30)">30</a></li>
                                <!-- Add more options as needed -->
                                </ul>
                            </div>
                            <span class="ms-2">entries</span> <!-- Added margin to the left -->
                        </div>
                        <!-- Dropdown for Employee -->
                        <div class="col-lg-2">
                        <select v-model="selectedEmployee" class="form-select" @change="onEmployeeChange">
                            <option value="">Select Employee</option>
                            <option v-for="acc_officer in distinctEmployees" :key="acc_officer" :value="acc_officer">{{ acc_officer }}</option>
                        </select>
                        </div>
                    
                        <!-- Dropdown for Classification -->
                        <div class="col-lg-2">
                        <select v-model="selectedClassification" class="form-select" :disabled="!selectedEmployee" @change="onEmployeeChange">
                            <option value="">Select Classification</option>
                            <option v-for="classification in distinctClassification" :key="classification" :value="classification">{{ classification }}</option>
                        </select>
                        </div>
                    
                        <!-- Dropdown for Article -->
                        <div class="col-lg-2">
                        <select v-model="selectedArticle" class="form-select" :disabled="!selectedEmployee || !selectedClassification" @change="onEmployeeChange">
                            <option value="">Select Article</option>
                            <option v-for="article in distinctArticle" :key="article" :value="article">{{ article }}</option>
                        </select>
                        </div>
                    
                        <!-- Dropdown for Particular -->
                        <div class="col-lg-2">
                        <select v-model="selectedParticular" class="form-select" :disabled="!selectedEmployee || !selectedClassification || !selectedArticle">
                            <option value="">Select Particular</option>
                            <option v-for="particular in distinctParticular" :key="particular" :value="particular">{{ particular }}</option>
                        </select>
                        </div>
        
                    
                        <!-- Search Bar -->
                        <div class="col-lg-2 d-flex justify-content-end">
                        <div class="InputContainer">
                            <input placeholder="Search.." id="input" class="input" name="text" type="text" v-model="searchKeyword">
                        </div>
                        </div>
                    </div>
                    

                        
                        <br>
                        
                        
                        
                        <div style="overflow-y: auto;">
                        
                        <table class="table-compact">
                            <!-- Table header -->
                            <thead>
                            <tr>
                                <th rowspan="2"><b>Image</b></th>
                                <th rowspan="2"><b>Entity Name</b></th>
                                <th rowspan="2"><b>Semi-expendable</b><br><b>Property Classification</b></th>
                                <th rowspan="2"><b>UACS</b><br><b>Object Code:</b></th>
                                <th colspan="4"><b>Description</b></th>
                                <th rowspan="2"><b>Full Description</b></th>
                                <th rowspan="2"><b>Semi-expendable</b><br><b>Property Number:</b></th>
                                <th rowspan="2"><b>Date</b></th>
                            </tr>
                            <tr>
                                <th><b>Article</b></th>
                                <th><b>Particulars</b></th>
                                <th><b>Model No.</b></th>
                                <th><b>Serial No.</b></th>
                            </tr>
                            </thead>
                        
                            <tbody>
                            <!-- Table rows -->
                            <tr v-for="info in paginatedInfo" :key="info.id" @click="selectRecord(info)">
                                <td><img :src="`http://dilg.test/backend/uploads/${info.image}`" alt="Inventory Image" style="max-width: 100px; max-height: 100px;" /></td>
                                <td>{{ info.entityname }}</td>
                                <td>{{ info.classification }}</td>
                                <td>{{ info.code }}</td>
                                <td>{{ info.article }}</td>
                                <td>{{ info.particulars }}</td>
                                <td>{{ info.modelno }}</td>
                                <td>{{ info.serialno }}</td>
                                <td>{{ info.fulldescription }}</td>
                                <td>{{ info.propertynumber }}</td>
                                <td>{{ info.propertydate }}</td>
                            </tr>
                            </tbody>
                        </table>
                        </div>
                    <!-- End Table with stripped rows -->
        
                    <!-- I-update ang table at idagdag ang pagination controls -->
                    <div class="card-body">
                    <!-- Iba pang content ng card... -->
                    <div class="text-center">
                    <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center mb-0"> <!-- Center pagination -->
                        <li class="page-item" :class="{ 'disabled': currentPage === 1 }">
                        <a class="page-link" href="#" @click.prevent="currentPage = Math.max(currentPage - 1, 1)">Previous</a>
                        </li>
                        <li class="page-item" v-for="page in totalPages" :key="page" :class="{ 'active': currentPage === page }">
                        <a class="page-link" href="#" @click.prevent="currentPage = page">{{ page }}</a>
                        </li>
                        <li class="page-item" :class="{ 'disabled': currentPage === totalPages }">
                        <a class="page-link" href="#" @click.prevent="currentPage = Math.min(currentPage + 1, totalPages)"><b>Next</b></a>
                        </li>
                    </ul>
                    </nav>
                    </div>
                    <div class="mt-3">
                    <p>{{ currentPageRecords }}</p> <!-- Moved current page records here -->
                    </div>
                    </div>
    
                </div>
            </div>
        </div>

        <!-- Modal component to display selected record -->
        <div class="modal-backdrop" v-if="selectedInfo">
          <div class="modal fade show d-block">
            <div class="modal-dialog modal-xl" role="document">
              <div class="modal-content modal-custom">
                <!-- Close button -->
                <span class="close" @click="selectedInfo = null">&times;</span>
        
                <!-- Header Section -->
                <div class="modal-header">
                  <h5 class="modal-title">Inventory Details</h5>
                </div>
        
                <!-- Body Content -->
                <div class="modal-body">
                  <div class="row">
                    <!-- Image Column -->
                    <div class="row justify-content-center mb-4">
                      <!-- Original Image -->
                      <div class="col-md-6 text-center">
                        <div class="info-group">
                          <label>Equipment</label>
                        </div>
                        <img :src="`http://dilg.test/backend/uploads/${selectedInfo.image}`" alt="Original Image" class="img-large img-thumbnail" />
                      </div>
                      <!-- Transferred Image -->
                      <div class="col-md-6 text-center">
                        <div class="info-group">
                          <label>Transfer Document</label>
                        </div>
                        <img :src="`http://dilg.test/backend/uploads/${selectedInfo.transfered_image}`" alt="Transferred Image" class="img-large img-thumbnail" />
                      </div>
                    </div>
        
                    <!-- Left Column -->
                    <div class="col-md-6">
                      <h6 class="section-title">Basic Information</h6>
                      <div class="info-group">
                        <label>Entity Name</label>
                        <p>{{ selectedInfo.entityname }}</p>
                      </div>
                      <div class="info-group">
                        <label>Code</label>
                        <p>{{ selectedInfo.code }}</p>
                      </div>
                      <div class="info-group">
                        <label>Article</label>
                        <p>{{ selectedInfo.article }}</p>
                      </div>
                      <div class="info-group">
                        <label>Model No</label>
                        <p>{{ selectedInfo.modelno }}</p>
                      </div>
                      <div class="info-group">
                        <label>Serial No</label>
                        <p>{{ selectedInfo.serialno }}</p>
                      </div>
                      <div class="info-group">
                        <label>Property Date</label>
                        <p>{{ selectedInfo.propertynumber }}</p>
                      </div>
                      <div class="info-group">
                        <label>Property Date</label>
                        <p>{{ selectedInfo.propertydate }}</p>
                      </div>
                      <!-- Received Quantity -->
                      <div class="info-group">
                        <label>Received Quantity</label>
                        <p>{{ selectedInfo.rec_quantity }}</p>
                      </div>
                      <!-- Received Unit -->
                      <div class="info-group">
                        <label>Received Unit</label>
                        <p>{{ selectedInfo.rec_unit }}</p>
                      </div>
                      <!-- Received Unit Cost -->
                      <div class="info-group">
                        <label>Received Unit Cost</label>
                        <p>{{ selectedInfo.rec_unitcost }}</p>
                      </div>
                      <!-- Received Total Cost -->
                      <div class="info-group">
                        <label>Received Total Cost</label>
                        <p>{{ selectedInfo.rec_totalcost }}</p>
                      </div>
                      <!-- Accounting Officer -->
                      <div class="info-group">
                        <label>Accounting Officer</label>
                        <p>{{ selectedInfo.acc_officer }}</p>
                      </div>
                      <!-- Accounting Officer Position -->
                      <div class="info-group">
                        <label>Accounting Officer Position</label>
                        <p>{{ selectedInfo.acc_empposition }}</p>
                      </div>

                    </div>
        
                    <!-- Right Column -->
                    <div class="col-md-6">
                      <h6 class="section-title">Other</h6>
                      <div class="info-group">
                        <label>Classification</label>
                        <p>{{ selectedInfo.classification }}</p>
                      </div>
                  
                      <!-- Particulars -->
                      <div class="info-group">
                        <label>Particulars</label>
                        <p>{{ selectedInfo.particulars }}</p>
                      </div>
                  
                      <!-- ICS Number -->
                      <div class="info-group">
                        <label>ICS Number</label>
                        <p>{{ selectedInfo.icsnumber }}</p>
                      </div>
                  
                      <!-- JEV Number -->
                      <div class="info-group">
                        <label>JEV Number</label>
                        <p>{{ selectedInfo.jevnumber }}</p>
                      </div>
                  
                      <!-- Issue Item No -->
                      <div class="info-group">
                        <label>Issue Item No</label>
                        <p>{{ selectedInfo.issue_itemno }}</p>
                      </div>
                  
                      <!-- Issue Date -->
                      <div class="info-group">
                        <label>Issue Date</label>
                        <p>{{ selectedInfo.issue_date }}</p>
                      </div>
                  
                      <!-- Issued Officer -->
                      <div class="info-group">
                        <label>Issued Officer</label>
                        <p>{{ selectedInfo.issued_officer }}</p>
                      </div>
                  
                      <!-- Issued Officer Position -->
                      <div class="info-group">
                        <label>Issued Officer Position</label>
                        <p>{{ selectedInfo.issued_offposition }}</p>
                      </div>
                  
                      <!-- Property Officer -->
                      <div class="info-group">
                        <label>Property Officer</label>
                        <p>{{ selectedInfo.property_officer }}</p>
                      </div>
                  
                      <!-- Approving Authority -->
                      <div class="info-group">
                        <label>Approving Authority</label>
                        <p>{{ selectedInfo.approving_authority }}</p>
                      </div>
                      <br>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>








        <!-- <div class="pagetitle">
            <h1>Transfer - Property, Plant and Equipment</h1>
            <nav>
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Data</li>
                </ol>
            </nav>
            </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                </div>

                </div>
        </div> -->
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
              notifications: [],
              filter: 'all',
              info:[],
              infos:[],
              // entityname: "",
              // particulars: "",
              // classification: "",
              // empfullname: "",
              // code: "",
              particulars: "",
              empfullname: "",
              status: "",
              created_at: "",
              date_returned: "",
              video: null,
              resultElement: null,
              startButton: null,
              stopButton: null,
              isCameraOn: false,
              stream: null,
              qrCodeData: null,
              selectedInfo: null,
              employeeOptions: [], // Array to store employee names
              selectedEmployee: '', // Selected employee from dropdown
              selectedEmployeePDF: '', // Selected employee from dropdown
              selectedClassification: '', // Selected classification from dropdown
              selectedArticle: '', // Selected article from dropdown
              selectedParticular: '', // Selected particular from dropdown
              selectedStatus: '', // Selected status from dropdown
              searchKeyword: '',
              currentPage: 1, // Current page number
              pageSize: 10, // Default page size
              previousEmployee: '', // Store the previous selected employee
              previousClassification: '', // Store the previous selected classification
              previousArticle: '', // Store the previous selected article
              previousParticular: '', // Store the previous selected particular
              loading: false,
          }
      },
      
      mounted() {
        this.video = document.getElementById("qr-video");
        this.resultElement = document.getElementById("qr-result");
        this.startButton = document.getElementById("start-camera");
        this.stopButton = document.getElementById("stop-camera");
      },
      created(){
          this.getInfo();
          this.fetchNotifications();
          this.user();
          this.getUserInfo(this.infos.fullname);
      },
      methods:{
        async fetchNotifications() {
          try {
            const response = await axios.get('notification');
            this.notifications = response.data; // Set notifications to the fetched data
          } catch (error) {
            console.error(error);
          }
        },
        computeTimeAgo(dateString) {
          const now = Date.now(); // Current time in milliseconds
          const notificationDate = new Date(dateString).getTime(); // Convert dateString to milliseconds
          const secondsAgo = Math.floor((now - notificationDate) / 1000); // Difference in seconds

          if (secondsAgo < 60) return `${secondsAgo}s ago`;
          if (secondsAgo < 3600) return `${Math.floor(secondsAgo / 60)}m ago`;
          if (secondsAgo < 86400) return `${Math.floor(secondsAgo / 3600)}h ago`;
          if (secondsAgo < 2592000) return `${Math.floor(secondsAgo / 86400)}d ago`;
          return `${Math.floor(secondsAgo / 2592000)}mo ago`;
        },
        truncateMessage(message) {
          return message.length > 70 ? message.substring(0, 67) + '...' : message;
        },
        filterNotifications(type) {
          this.filter = type;
        },

        async markAsRead(notificationId) {
          try {
            const response = await axios.post(`/markAsRead/${notificationId}`);
            console.log(response.data.msg); // Log the success message

            // Re-fetch notifications after marking one as read
            this.fetchNotifications();
          } catch (error) {
            console.error('Network error:', error.message);
          }
        },
        // transferItem() {
        //   // Save the record ID to session storage
        //   sessionStorage.setItem('selectedRecordId', this.selectedInfo.propertynumber);
          
        //   // Redirect to the new page
        //   this.$router.push({ path: '/transferppe' });
        // },
        selectRecord(info) {
          this.selectedInfo = info;
        },
        simulateLoading() {
          this.loading = true;
        },
            setTimeout() {
          this.loading = false;
        },
        selectRecord(info) {
          this.selectedInfo = info;
        },
        toggleRowVisibility(info) {
          info.showDetails = !info.showDetails;
        },
    
        async downloadEmployeeRecordsPDF() {
            try {
              this.simulateLoading();
               const response = await fetch('http://dilg.test/backend/employeeRecordsPDF', {
                   method: 'POST',
                   headers: {
                       'Content-Type': 'application/json',
                   },
                   body: JSON.stringify({ acc_officer: this.selectedEmployeePDF }),
               });
               if (response.ok) {
                   const blob = await response.blob();
                   const filename = `${this.selectedEmployeePDF}_records.pdf`; // Adjust the filename if needed
                   const url = window.URL.createObjectURL(new Blob([blob]));
                   const link = document.createElement('a');
                   link.href = url;
                   link.setAttribute('download', filename);
                   document.body.appendChild(link);
                   link.click();
                   link.parentNode.removeChild(link);
                   console.log('PDF generated successfully');
                   this.setTimeout();
               } else {
                   console.error('Failed to generate PDF');
               }
           } catch (error) {
               console.error('Error generating PDF:', error);
           }
        },
    
        async unserviceablePDF() {
        try {
            // Send HTTP request to backend to generate PDFs for all records
            this.simulateLoading();
            const response = await fetch('http://dilg.test/backend/unserviceablePDF', {
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
                this.setTimeout();
            } else {
                console.error('Failed to generate PDF');
            }
        } catch (error) {
            console.error('Error generating PDFs:', error);
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
            // async getInfo(){
            //       try {
            //           const inf = await axios.get('getDataServiceable');
            //           this.info = inf.data;
            //       } catch (error) {
            //           console.log(error);
            //       }
            //   },
            async getInfo() {
              try {
                const response = await axios.get('getDataTransferedServiceable');
                this.info = response.data;
                // Extract employee names from info and store in employeeOptions
                this.employeeOptions = this.info.map(info => info.acc_officer);
              } catch (error) {
                console.log(error);
              }
            },
            updatePageSize(size) {
              this.pageSize = size;
              this.getInfo();
            },
            onEmployeeChange() {
              // Reset selected values of dropdowns only if a new employee is selected
              if (this.selectedEmployee !== this.previousEmployee) {
                this.selectedClassification = '';
                this.selectedArticle = '';
                this.selectedParticular = '';
              }
              // Update the previous selected employee
              this.previousEmployee = this.selectedEmployee;
            },
            async logout(){
                sessionStorage.removeItem('token');
                this.$router.push('/signin');
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

          async getUserInfo(id){
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

              
      },
      computed: {
        filteredNotifications() {
          if (this.filter === 'unread') {
            return this.notifications.filter(notification => notification.status === 'unread');
          }
          return this.notifications;
        },
        unreadCount() {
          return this.notifications.filter(notification => notification.status === 'unread').length;
        },
        filteredInfo() {
          let filteredData = this.info;
    
          // Filter based on selected employee
          if (this.selectedEmployee !== '') {
            filteredData = filteredData.filter(info => info.acc_officer.toLowerCase() === this.selectedEmployee.toLowerCase());
          }
    
          // Filter based on selected classification
          if (this.selectedClassification !== '') {
            filteredData = filteredData.filter(info => info.classification.toLowerCase() === this.selectedClassification.toLowerCase());
          }
    
          // Filter based on selected article
          if (this.selectedArticle !== '') {
            filteredData = filteredData.filter(info => info.article.toLowerCase() === this.selectedArticle.toLowerCase());
          }
    
          // Filter based on selected particular
          if (this.selectedParticular !== '') {
            filteredData = filteredData.filter(info => info.particulars.toLowerCase() === this.selectedParticular.toLowerCase());
          }
    
          if (this.selectedStatus !== '') {
        filteredData = filteredData.filter(info => info.status.toLowerCase() === this.selectedStatus.toLowerCase());
      }
    
          // Filter based on search keyword
          if (this.searchKeyword !== '') {
            const keyword = this.searchKeyword.toLowerCase();
            filteredData = filteredData.filter(info => 
              (info.entityname && info.entityname.toLowerCase().includes(keyword)) ||
              (info.acc_officer && info.acc_officer.toLowerCase().includes(keyword)) ||
              (info.classification && info.classification.toLowerCase().includes(keyword)) ||
              (info.article && info.article.toLowerCase().includes(keyword)) ||
              (info.code && info.code.toLowerCase().includes(keyword)) ||
              (info.created_at && info.created_at.toLowerCase().includes(keyword)) ||
              (info.status && info.status.toLowerCase().includes(keyword)) ||
              (info.particulars && info.particulars.toLowerCase().includes(keyword))
            );
          }
    
          return filteredData;
        },
        paginatedInfo() {
          const startIndex = (this.currentPage - 1) * this.pageSize;
          const endIndex = startIndex + this.pageSize;
          return this.filteredInfo.slice(startIndex, endIndex);
        },
        totalPages() {
          return Math.ceil(this.filteredInfo.length / this.pageSize);
        },
        currentPageRecords() {
          const startIndex = (this.currentPage - 1) * this.pageSize + 1;
          const endIndex = Math.min(startIndex + this.pageSize - 1, this.filteredInfo.length);
          return `Showing ${startIndex} - ${endIndex} of ${this.filteredInfo.length} records`;
        },
        distinctEmployees() {
          const employeeSet = new Set();
          this.info.forEach(item => employeeSet.add(item.acc_officer));
          return Array.from(employeeSet);
        },
        distinctClassification() {
          const classificationSet = new Set();
          this.info.forEach(item => {
            if (item.acc_officer && typeof item.acc_officer === 'string' &&
                item.acc_officer.toLowerCase() === this.selectedEmployee.toLowerCase() &&
                item.classification && typeof item.classification === 'string') {
              classificationSet.add(item.classification);
            }
          });
          return Array.from(classificationSet);
        },
        distinctArticle() {
          const articleSet = new Set();
          this.info.forEach(item => {
            if (item.acc_officer && typeof item.acc_officer === 'string' &&
                item.acc_officer.toLowerCase() === this.selectedEmployee.toLowerCase() &&
                item.classification && typeof item.classification === 'string' &&
                item.classification.toLowerCase() === this.selectedClassification.toLowerCase() &&
                item.article && typeof item.article === 'string') {
              articleSet.add(item.article);
            }
          });
          return Array.from(articleSet);
        },
        distinctParticular() {
          const particularSet = new Set();
          this.info.forEach(item => {
            if (item.acc_officer &&
                item.acc_officer.toLowerCase() === this.selectedEmployee.toLowerCase() &&
                item.classification &&
                item.classification.toLowerCase() === this.selectedClassification.toLowerCase() &&
                item.article &&
                item.article.toLowerCase() === this.selectedArticle.toLowerCase() &&
                item.particulars &&
                typeof item.particulars === 'string') {
              particularSet.add(item.particulars);
            }
          });
          return Array.from(particularSet);
        },
        distinctStatus() {
        const statusSet = new Set();
        this.info.forEach(item => {
          if (item.status) {
            statusSet.add(item.status);
          }
        });
        return Array.from(statusSet);
      },
    }
    }
    </script>
    
    
  <style scoped>
  .page-link {
    z-index: 0;
  }

  .img-large {
    max-width: 100%;
    max-height: 100%;
    width: 500px;
    height: 500px;
    object-fit: cover;
    border-radius: 8px;
  }
  /* Backdrop for darkening effect */
.modal-backdrop {
  position: fixed;
  top: 0;
  left: 0;

  max-width: 100%;
  max-height: 100%;
  background: rgba(0, 0, 0, 0.5); /* Dark overlay with opacity */
  z-index: 1040; /* Ensure it sits behind the modal */
}

/* Adjust z-index of modal for stacking */
.modal {
  z-index: 1050; /* Ensure the modal is on top of the backdrop */
}

/* Slide transition (if needed) */
.modal-slide-enter-active {
  animation: slide-down 0.5s ease-out forwards;
}

.modal-slide-leave-active {
  animation: slide-up 0.5s ease-in forwards;
}

.modal-custom {
  width: 1400px;
  font-family: Calibri, sans-serif;
  font-size: 14px;
  color: #333;
  background-color: #f9f9f9;
  border-radius: 8px;
  box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
  padding: 20px;
  position: relative;
}

/* Close Button */
.modal-custom .close {
  position: absolute;
  top: 15px;
  right: 20px;
  font-size: 24px;
  color: #333;
  cursor: pointer;
}

/* Section Title */
.section-title {
  font-size: 16px;
  font-weight: bold;
  color: #555;
  margin-top: 10px;
  margin-bottom: 5px;
  border-bottom: 2px solid #e0e0e0;
  padding-bottom: 4px;
}

/* Information Group */
.info-group {
  margin-bottom: 3px;
}

.info-group label {
  font-weight: bold;
  font-size: 13px;
  color: #666;
  display: inline-block;
  width: 45%;
}

.info-group p {
  color: #1e7abf;
  font-size: 13px;
  text-transform: uppercase;
  display: inline-block;
}

/* Image Styling */
.img-thumbnail {
  max-width: 200px;
  max-height: 200px;
  border-radius: 8px;
  object-fit: cover;
}

/* Header Styling */
.modal-header {
  border-bottom: none;
  padding-bottom: 0;
}

/* Content alignment */
.modal-body {
  margin-top: 10px;
}


/* Keyframes for slide down and slide up */
@keyframes slide-down {
  0% {
    transform: translateY(-100%);
    opacity: 0;
  }
  100% {
    transform: translateY(0);
    opacity: 1;
  }
}

@keyframes slide-up {
  0% {
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    transform: translateY(-100%);
    opacity: 0;
  }
}


@media (max-width: 767px) {
  .modal-dialog {
    width: 100%; /* Full width on smaller screens */
    height: auto; /* Allow height to adjust based on content */
  }
}
  
  #qr-video {
    width: 300px;
    height: 300px;
  }
  #qr-result {
    margin-top: 10px;
  }
  
    .search-container {
      display: flex;
      justify-content: center;
      margin-bottom: 20px; /* Add margin to separate from the table */
    }
    
    .search-bar {
      width: 20%; /* Adjust width as needed */
      padding: 10px;
      font-size: 16px;
      border-radius: 5px;
      border: 1px solid #ccc;
      transition: all 0.3s ease;
    }
    
    .search-bar:focus {
      border-color: #66afe9;
      box-shadow: 0 0 5px #66afe9;
    }
    
    .pagination .page-item {
      display: inline-block;
      margin-right: 5px; /* Paggalang sa espasyo sa pagitan ng mga button */
    }
    
    .pagination .page-link {
      border: 1px solid #ced4da; /* Bawasan ang lapad ng border */
      color: #343a40; /* Itim na kulay ng text */
      border-radius: 0; /* Alisin ang radius ng border */
    }
    
    .pagination .page-link:hover {
      background-color: transparent; /* Alisin ang background color sa hover */
    }
    
    .pagination .page-item.disabled .page-link {
      pointer-events: none; /* Huwag pahintulutan ang pag-click kung ang button ay hindi aktibo */
    }
    
    .pagination .page-item.active .page-link {
      background-color: transparent; /* Alisin ang background color ng active button */
      border-color: #ced4da; /* Bawasan ang lapad ng border ng active button */
    }
    
    .pagination .page-link:focus {
      box-shadow: none; /* Alisin ang focus border */
    }
    
    .pagination .page-link.prev, .pagination .page-link.next {
      padding: 0; /* Alisin ang padding */
      border: none; /* Alisin ang border */
      background: none; /* Alisin ang background */
      font-size: 1.5rem; /* Taasan ang laki ng font */
      color: #343a40; /* Itim na kulay ng text */
    }
    
    .pagination .page-link.prev::after, .pagination .page-link.next::after {
      content: '\2190'; /* Isama ang Unicode character para sa arrow (left arrow) */
    }
    
    .pagination .page-link.next::after {
      content: '\2192'; /* Isama ang Unicode character para sa arrow (right arrow) */
    }
  
    .loading-line {
      width: 100%;
      height: 4px;
      background-color: #ffffff; /* Background color of the loading container */
      position: relative;
      overflow: hidden; /* Ensures the loading line stays within the container */
    }
    
    .loading-line::before {
      content: "";
      position: absolute;
      height: 100%;
      width: 50%;
      background-color: rgb(0, 68, 255); /* Color of the loading line */
      animation: loading 0.5s linear infinite; /* Faster looping animation */
    }
    
    @keyframes loading {
      0% {
        transform: translateX(-100%); /* Start from the left */
      }
      100% {
        transform: translateX(100%); /* Move to the right */
      }
    }
  
    .button {
    border: none;
    background-color: seagreen;
    color: white;
    font-size: 0.9rem; /* Slightly larger font size */
    font-weight: 500;
    padding: 0.5rem 1.4rem; /* Slightly increased padding */
    border-radius: 0.35rem; /* Slightly larger border radius */
    box-shadow: 0 0.3rem 0.6rem rgba(0, 0, 0, 0.15);
    cursor: pointer;
    transform: translate(1) translate(0, 0);
    transition: transform 225ms, box-shadow 225ms;
    display: block; /* Ensures the button is a block element for centering */
    margin: 0 auto; /* Centers button horizontally */
  }
  
  .button:hover {
    transform: scale(1.05) translate(0, -0.1rem);
    box-shadow: 0 0.4rem 0.8rem rgba(0, 0, 0, 0.35);
  }
  
  .button:active {
    transform: scale(1) translate(0, 0.1rem);
    box-shadow: 0 0.4rem 0.8rem rgba(0, 0, 0, 0.15);
  }
  
  .button1 {
      border: none;
      background-color: #C0392B;
      color: white;
    font-size: 0.9rem; /* Slightly larger font size */
    font-weight: 500;
    padding: 0.5rem 1.4rem; /* Slightly increased padding */
    border-radius: 0.35rem; /* Slightly larger border radius */
    box-shadow: 0 0.3rem 0.6rem rgba(0, 0, 0, 0.15);
    cursor: pointer;
    transform: translate(1) translate(0, 0);
    transition: transform 225ms, box-shadow 225ms;
    display: block; /* Ensures the button is a block element for centering */
    margin: 0 auto; /* Centers button horizontally */
    }
    
    .button1:hover {
      transform: scale(1.05) translate(0, -0.1rem);
      box-shadow: 0 0.4rem 0.8rem rgba(0, 0, 0, 0.35);
    }
    
    .button1:active {
      transform: scale(1) translate(0, 0.1rem);
      box-shadow: 0 0.4rem 0.8rem rgba(0, 0, 0, 0.15);
    }
    
    .box {
    position: relative; /* Create a positioning context */
    width: 100%; /* Full width of its container */
    height: 300px; /* Set a specific height; adjust as needed */
    overflow: hidden; /* Hide overflow to ensure clean edges */
    display: flex; /* Use flexbox for centering */
    justify-content: center; /* Center horizontally */
    align-items: center; /* Center vertically */
    border: 1px solid #ccc; /* Optional: Add border for visual debugging */
  }
  
  .box video {
    max-width: 100%; /* Ensure video does not exceed the width of the box */
    max-height: 100%; /* Ensure video does not exceed the height of the box */
  
  }
  
  
  .download {
    position: relative;
    width: 300px;
    height: 45px; /* Reduce the height */
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center; /* Center the text horizontally */
    border: 1px solid #17795E;
    background-color: #209978;
    overflow: hidden;
  }
  
  .button__text {
    color: #fff;
    font-weight: 600;
    font-size: 15px; /* Decrease the font size */
    margin-left: -20px; /* Move the text slightly to the left */
    transition: color 0.3s;
    z-index: 1; /* Ensure text is above icon */
  }
  
  .button__icon {
    position: absolute;
    height: 100%;
    width: 50px;
    background-color: #17795E;
    display: flex;
    align-items: center;
    justify-content: center;
    right: 0;
    transition: right 0.3s, width 0.3s, transform 0.3s, background-color 0.3s;
  }
  
  .svg {
    width: 21px;
    fill: #fff;
  }
  
  .download:hover {
    background: #17795E;
  }
  
  .download:hover .button__text {
    color: transparent;
  }
  
  .download:hover .button__icon {
    width: 100px;
    right: 50%;
    transform: translateX(50%);
  }
  
  .download:active .button__icon {
    background-color: #146c54;
  }
  
  .download:active {
    border: 1px solid #146c54;
  }
  
  * {
    font-family: sans-serif;
  }
  
  
  
  table {
    width: 100%;
    border-collapse: collapse;
    font-size: 13px; /* Adjust font size as needed */
  }
  
  th, td {
    border: 1px solid #dee2e6;
    padding: 4px 9px; /* Adjust padding for better readability */
    text-align: center;
    white-space: nowrap; /* Prevent line breaks in cells */
    overflow: hidden; /* Hide overflowed content */
    text-overflow: ellipsis; /* Show ellipsis for overflowed content */
  }
  
  th {
    height: 30px; /* Adjust height for header */
    white-space: nowrap;
  }
  
  img {
    max-width: 50px; /* Adjust image size as needed */
    max-height: 50px;
  }
  
  /* Optional: Add a wrapper for horizontal scrolling */
  .wrapper {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch; /* Enable smooth scrolling on mobile */
  }
  
  
    
      .InputContainer {
    width: 210px; /* Increased width */
    height: 45px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(to bottom, rgb(227, 213, 255), rgb(255, 231, 231));
    border-radius: 27px;
    overflow: hidden;
    cursor: pointer;
    box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.075);
  }
  
  .input {
    width: 200px; /* Increased width */
    height: 35px;
    border: none;
    outline: none;
    caret-color: rgb(255, 81, 0);
    background-color: rgb(255, 255, 255);
    border-radius: 27px;
    padding-left: 12px;
    letter-spacing: 0.8px;
    color: rgb(19, 19, 19);
    font-size: 13.8px;
  }
  @media (max-width: 600px) {
    .accordion-button{
      width: 80%;
      padding: 10px;
    }
      .InputContainer {
      margin-top: 10px;
  }
  .table-compact th, .table-compact td {
      font-size: 10px; /* Even smaller font size for mobile */
      padding: 2px;
      text-align: center;
    }
    
    .table-compact img {
      max-width: 25px; /* Further reduce image size */
      max-height: 25px; /* Further reduce image size */
    }
    .me-2{
      font-size: 15px;
      margin-right: 1px;
    }
  }
  
  
  
  
  </style>