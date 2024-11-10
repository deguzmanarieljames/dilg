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
                  <a class="nav-link active" href="unserviceable">
                    <i class="bi bi-clipboard-x"></i><span>Unserviceable</span>
                  </a>
                </li>
                <li>
                  <a href="returnedppe">
                    <i class="bi bi-box-arrow-left"></i><span>Returned PPE</span>
                  </a>
                </li>
                <li>
                  <a href="transferedppe">
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
          <h1>Unserviceable - Property, Plant and Equipment</h1>
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
              <div class="card" style="border-top: solid 30px #ffb4b4; border-bottom: solid 30px #ffb4b4;">
              <div class="card-body">

  <br>

      <!-- Dropdowns and Search Bar at the Top -->
<div class="row align-items-center">
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

  <!-- Status dropdown centered -->
  <div class="col-lg-2">
    <select v-model="selectedStatus" class="form-select">
      <option value="">Current Status</option>
      <option v-for="status in distinctStatus" :key="status" :value="status">{{ status }}</option>
    </select>
  </div>

  <!-- Search Bar -->
  <div class="col-lg-2 d-flex justify-content-end">
    <div class="InputContainer">
      <input placeholder="Search.." id="input" class="input" name="text" type="text" v-model="searchKeyword">
    </div>
  </div>
</div>

<hr>
<!-- Show Entries and Download Serviceable Document at the Bottom -->
<div class="row align-items-center">
  <!-- Show Entries -->
  <div class="col-lg-6">
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

  <!-- Download Serviceable Document -->
  <div class="col-lg-6 d-flex justify-content-end">
    <div class="accordion accordion-body text-end" id="faq-group-2">
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button btn btn-outline-info collapsed" data-bs-target="#faqsTwo-1" type="button" data-bs-toggle="collapse">
            Download Serviceable Documents
          </button>
        </h2>
        <!-- Loading animation -->
        <div v-if="loading" class="text-center mt-1">
          <div class="loading-line"></div>
        </div>
        <div id="faqsTwo-1" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
          <div class="row mt-3">
            <div class="col-lg-12 align-items-center">
              <button class="download" type="button" @click="unserviceablePDF">
                <span class="button__text">Download</span>
                <span class="button__icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 35" id="bdd05811-e15d-428c-bb53-8661459f9307" data-name="Layer 2" class="svg"><path d="M17.5,22.131a1.249,1.249,0,0,1-1.25-1.25V2.187a1.25,1.25,0,0,1,2.5,0V20.881A1.25,1.25,0,0,1,17.5,22.131Z"></path><path d="M17.5,22.693a3.189,3.189,0,0,1-2.262-.936L8.487,15.006a1.249,1.249,0,0,1,1.767-1.767l6.751,6.751a.7.7,0,0,0,.99,0l6.751-6.751a1.25,1.25,0,0,1,1.768,1.767l-6.752,6.751A3.191,3.191,0,0,1,17.5,22.693Z"></path><path d="M31.436,34.063H3.564A3.318,3.318,0,0,1,.25,30.749V22.011a1.25,1.25,0,0,1,2.5,0v8.738a.815.815,0,0,0,.814.814H31.436a.815.815,0,0,0,.814-.814V22.011a1.25,1.25,0,1,1,2.5,0v8.738A3.318,3.318,0,0,1,31.436,34.063Z"></path></svg></span>
              </button>
            </div>
          </div>
        </div>
      </div>
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
          <th rowspan="2"><b>View All</b></th> <!-- View All button column -->
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
        <tr v-for="info in paginatedInfo" :key="info.id">
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
          <td>
            <button @click="toggleRowVisibility(info)">View All</button>
          </td>
        </tr>
        <tr v-if="info.showDetails" v-for="info in paginatedInfo" :key="info.id + '-details'">
          <!-- Detailed row with additional information -->
          <td colspan="12">
            <div>
              <p><b>ICS No:</b> {{ info.icsnumber }}</p>
              <p><b>JEV No:</b> {{ info.jevnumber }}</p>
              <p><b>Quantity:</b> {{ info.rec_quantity }}</p>
              <p><b>Unit:</b> {{ info.rec_unit }}</p>
              <p><b>Unit Cost:</b> {{ info.rec_unitcost }}</p>
              <p><b>Total Cost:</b> {{ info.rec_totalcost }}</p>
              <p><b>Issue/ Transfer/ Adjustments (Amount):</b> {{ info.isstranadjamount }}</p>
              <p><b>Accummulated Impairment Loss:</b> {{ info.accimploss }}</p>
              <p><b>Adjusted Cost:</b> {{ info.adjustedcost }}</p>
              <p><b>Nature of Repair:</b> {{ info.repair_nature }}</p>
              <p><b>Repair Amount:</b> {{ info.repair_amount }}</p>
              <p><b>Issue Item No:</b> {{ info.issue_itemno }}</p>
              <p><b>Issue Date:</b> {{ info.issue_date }}</p>
              <p><b>Issue Quantity:</b> {{ info.issue_quantity }}</p>
              <p><b>Issue Office/Officer:</b> {{ info.issue_officeofficer }}</p>
              <p><b>Transfer Date:</b> {{ info.transfer_date }}</p>
              <p><b>Transfer Quantity:</b> {{ info.transfer_quantity }}</p>
              <p><b>Transfer Office/Officer:</b> {{ info.transfer_officeofficer }}</p>
              <p><b>Disposal Date:</b> {{ info.disposal_date }}</p>
              <p><b>Disposal Quantity:</b> {{ info.disposal_quantity }}</p>
              <p><b>Disposal Office/Officer:</b> {{ info.disposal_officeofficer }}</p>
              <p><b>Balance Quantity:</b> {{ info.balancequantity }}</p>
              <p><b>Balance Amount:</b> {{ info.balanceamount }}</p>
              <p><b>Remarks:</b> {{ info.remarks }}</p>
              <p><b>Estimated Useful Life:</b> {{ info.estimatedlife }}</p>
              <p><b>Issued Officer:</b> {{ info.issued_officer }}</p>
              <p><b>Issued Position/Office:</b> {{ info.issued_offposition }}</p>
              <p><b>Issued Date:</b> {{ info.issued_date }}</p>
              <p><b>Accountable Officer:</b> {{ info.acc_officer }}</p>
              <p><b>Accountable Position:</b> {{ info.acc_empposition }}</p>
              <p><b>Accountable Date:</b> {{ info.acc_date }}</p>
              <p><b>ITR No:</b> {{ info.itr_no }}</p>
              <p><b>ITR Date:</b> {{ info.itr_date }}</p>
              <p><b>RRSP No:</b> {{ info.rrsp_no }}</p>
              <p><b>RRSP Date:</b> {{ info.rrsp_date }}</p>
              <p><b>Reason for Transfer:</b> {{ info.reasonfortrans }}</p>
              <p><b>Returned Quantity:</b> {{ info.reg_returned_qty }}</p>
              <p><b>Returned Office:</b> {{ info.reg_returned_off }}</p>
              <p><b>Re-issued Quantity:</b> {{ info.reg_reissued_qty }}</p>
              <p><b>Re-issued Office:</b> {{ info.reg_reissued_off }}</p>
              <p><b>Disposed Quantity:</b> {{ info.reg_disposed_qty }}</p>
              <p><b>Balance Quantity:</b> {{ info.reg_balance_quantity }}</p>
              <p><b>Amount:</b> {{ info.reg_amount }}</p>
              <p><b>Remarks:</b> {{ info.reg_remarks }}</p>
              <p><b>Property Officer:</b> {{ info.property_officer }}</p>
              <p><b>Head of Office/ Approving Authority:</b> {{ info.approving_authority }}</p>
            </div>
          </td>
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
              const response = await axios.get('getDataUnserviceable');
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