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
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-menu-button-wide"></i><span>PROPERTY, PLANT AND EQUIPMENT</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
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
            <a class="nav-link" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-journal-text"></i><span>Documents</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content " data-bs-parent="#sidebar-nav">
              <li>
                <a class="nav-link active" href="propertysticker">
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
        <h1>Property Sticker</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item active">Property Sticker</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->


  
      <section class="section dashboard">
        <div class="row">
          <div v-if="isMobile" class="mobile-overlay">
            <div class="overlay-content">
              <h2>This application is only available on desktop</h2>
              <p>Please resize your screen or access it from a desktop browser.</p>
            </div>
          </div>

          <!-- Items area -->
          <div class="col-lg-6">
            
            <!-- Dropdown for filtering by Person Accountable -->
            <div class="filter-container">
              <label for="accountableFilter" class="filter-label">Filter by Person Accountable:</label>
              <select id="accountableFilter" v-model="selectedAccountable" class="custom-select">
                <option value="">All</option>
                <option v-for="officer in uniqueAccountables" :key="officer" :value="officer">{{ officer }}</option>
              </select>
            </div>
            

            <div class="drag-area" ref="itemsContainer" @dragover.prevent @drop="onDrop('items')">
              
              <table class="table table-bordered table-hover" style="background-color: #fff; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); font-size: 13px;">
                <thead>
                  <tr>
                    <th>Property No./Description</th>
                    <th>Model No.</th>
                    <th>Serial No.</th>
                    <th>Acquisition Date/Cost</th>
                    <th>Person Accountable</th>
                    <th>Remarks</th>
                    <th>Options</th>
                  </tr>
                </thead>
                <transition-group tag="tbody" name="row-animation">
                  
                  <tr
                    v-for="item in filteredItems"
                    :key="item.id"
                    @dragstart="startDrag($event, item)"
                    @dragend="endDrag"
                    draggable="true"
                    :class="['table-row', { dragging: item.isDragging }]"
                    style="background-color: white; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15); transition: box-shadow 0.3s ease; padding: 10px; margin-bottom: 5px;"
                  >
                    <td>{{ item.fulldescription }}</td>
                    <td>{{ item.modelno }}</td>
                    <td>{{ item.serialno }}</td>
                    <td>{{ item.propertydate }} / {{ item.rec_unitcost }}</td>
                    <td>{{ item.acc_officer }}</td>
                    <td>{{ item.issue_officeofficer }}</td>
                    <td>
                      <div class="button-container">
                        <button @click="selectRecord(item)" class="noselect preview-button">
                          <span class="text">Preview</span>
                          <span class="icon">
                            <i class="bi bi-eye-fill"></i>
                          </span>
                        </button>
                      </div>
                    </td>          
                  </tr>
                </transition-group>
              </table>
            </div>
          </div>


          <!-- Box area -->
          <div class="col-lg-6">
            <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 10px;">
              <label class="filter-label" style="font-size: 25px">-- To be printed --</label>
              <!-- Clear Box Button on the right side of the label -->
              <button class="noselect preview-button" @click="clearBox">
                <span class="text">Clear Box</span>
                <span class="icon">
                  <i class="bi bi-x-circle-fill"></i>
                </span>
              </button>
            </div>

            <div class="drag-area" ref="boxContainer" @dragover.prevent @drop="onDrop('box')">
              <div v-if="downloadSuccessMessage" class="success-message" style="text-align: center; color: green; padding: 20px;">
                The items were successfully downloaded. Disappearing in {{ downloadSuccessMessage }} seconds...
              </div>
              
              <table v-else class="table table-bordered table-hover" style="background-color: #fff; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); font-size: 13px;">
                <thead>
                  <tr>
                    <th>Property No./Description</th>
                    <th>Model No.</th>
                    <th>Serial No.</th>
                    <th>Acquisition Date/Cost</th>
                    <th>Person Accountable</th>
                    <th>Remarks</th>
                    <th>Options</th>
                  </tr>
                </thead>
                <transition-group tag="tbody" name="row-animation">
                  <tr
                    v-for="item in box"
                    :key="item.id"
                    @click="selectRecord(item)"
                    @dragstart="startDrag($event, item)"
                    @dragend="endDrag"
                    draggable="true"
                    :class="['table-row', { dragging: item.isDragging }]"
                    style="background-color: white; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15); transition: box-shadow 0.3s ease; padding: 10px; margin-bottom: 5px;"
                  >
                    <td>{{ item.fulldescription }}</td>
                    <td>{{ item.modelno }}</td>
                    <td>{{ item.serialno }}</td>
                    <td>{{ item.propertydate }} / {{ item.rec_unitcost }}</td>
                    <td>{{ item.acc_officer }}</td>
                    <td>{{ item.issue_officeofficer }}</td>
                    <td>
                      <div class="button-container">
                        <button @click="selectRecord(item)" class="noselect preview-button">
                          <span class="text">Preview</span>
                          <span class="icon">
                            <i class="bi bi-eye-fill"></i>
                          </span>
                        </button>
                      </div>
                    </td>  
                  </tr>
                </transition-group>
              </table>
            </div>
            
            
            <!-- Print Button -->
            <div v-if="box.length > 0" style="text-align: center; margin-top: 20px;">
              <button class="noselect preview-button" @click="printBoxContent">
                <span class="text">Print</span>
                <span class="icon">
                  <i class="bi bi-download"></i>
                </span>
              </button>
            </div>
          </div>

          <!-- Modal component to display selected record -->
          <div class="modal" v-if="selectedInfo">
            <div class="modal-content">
              <span class="close" @click="closeModal">&times;</span>
              
              <!-- The container of the actual HTML to capture (hidden but rendered offscreen) -->
              <div ref="captureArea" style="position: absolute; top: -9999px;">
                <div class="container" style="width: 70%; max-width: 600px; margin: 0 auto; border: 1px solid #ccc; padding: 20px; background-color: #fff; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                  <div style="text-align: center; margin-bottom: 20px;">
                    <p>Republic of the Philippines
                      <br>
                      <b>Department of the Interior and Local Government</b>
                      <br>
                      MIMAROPA Region
                      <br>
                      <i style="color: red;"><b>PROPERTY INVENTORY STICKER</b></i>
                    </p>
                  </div>
                  <div class="property-info">
                    <p>Property No./Description : <b style="color: blue;">MDO - LT - 2022-02</b>
                      <br>
                      <b style="color: blue;">{{selectedInfo.fulldescription}}</b>
                      __________________________________________________
                      <br>
                      Model No.: <b style="color: blue;">{{selectedInfo.modelno}}</b>
                      <br>
                      Serial No.: <b style="color: blue;">{{selectedInfo.serialno}}</b>
                      
                      <QRCodeGenerator 
                      class="qr-img" 
                      :src="QrCodeData(selectedInfo.propertynumber)" 
                      :data="qrCodeData" 
                      :logoUrl="logoImageUrl" 
                      style="transform: scale(0.3); width: 300px; height: 300px; float: right; margin: -100px -100px -100px -100px;" />
                    
                    
                    
                      <br>
                      Acquisition Date/Cost: <b style="color: blue;">{{selectedInfo.propertydate}} {{selectedInfo.rec_unitcost}}</b>
                      <br>
                      Person Accountable: <b style="color: blue;">{{selectedInfo.acc_officer}}</b>
                      <br>
                      Remarks: <b style="color: blue;">{{selectedInfo.issue_officeofficer}}</b>
                    </p>
                    <br>
                    <div style="text-align: center; white-space: pre;">
                      <pre>__________________  _________________________</pre>
                      <pre>COA Representative  Authorized Representative</pre>
                    </div>
                  </div>
                  <div class="note">
                    <p style="text-align: center; color: red;"><b>NOTE: PLEASE DO NOT REMOVE</b></p>
                  </div>
                </div>
              </div>

              <!-- Loading Spinner while the image is being generated -->
              <div v-if="loading" class="loading-spinner">
                <div class="spinner"></div>
              </div>

              <!-- The generated image will be displayed here only when available -->
              <div v-if="!loading && imageData">
                <img :src="imageData" alt="Captured Image" style="width: 100%; max-width: 600px;" />
              </div>
            </div>
          </div>

          <!--  ADD BUTTON HERE THAT WILL LEAD TO /editsps  -->
          <button @click="navigateToEditSPS" class="navigate-button">Go to Edit SPS</button>
        </div>
      </section>
  
      </main><!-- End #main -->
  
      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    </div>
  </template>


<script>
import axios from 'axios';
import html2canvas from 'html2canvas';
import QRCodeGenerator from "../../components/QRCodeGenerator.vue";

export default {
  components: {
     QRCodeGenerator,
  },
  data() {
    return {
      notifications: [],
      filter: 'all',
      info: [],
      infos:[],
      selectedInfo: null,
      imageData: [],
      loading: false, 
      items: [], // Your existing items array
      selectedAccountable: '', // This will hold the selected accountable person
      box: [],
      isDragging: false,
      currentlyDragging: null,
      downloadSuccessMessage: false,
      isMobile: false,
      qrCodeData: null, // Replace with your dynamic ID or data
      logoImageUrl: "./img/dilg-logo.png", // Local or external logo URL
    }
  },
  watch: {
    selectedInfo(newVal) {
      if (newVal) {
        this.generateQRCodeUrl();
        this.$nextTick(() => {
          setTimeout(() => {
            this.generateImage(); // Adding a delay to ensure rendering
          }, 500);
        });
      }
    },
  },
  computed: {
    // Get unique accountable persons for dropdown options
    uniqueAccountables() {
      const employeeSet = new Set();
      this.info.forEach(item => employeeSet.add(item.acc_officer));
      return Array.from(employeeSet);
    },
    // Filtered items based on the selected accountable person
    filteredItems() {
      if (!this.selectedAccountable) {
        return this.items; // Return all items if no filter is selected
      }
      return this.items.filter(item => item.acc_officer === this.selectedAccountable);
    },
    filteredNotifications() {
      if (this.filter === 'unread') {
        return this.notifications.filter(notification => notification.status === 'unread');
      }
      return this.notifications;
    },
    unreadCount() {
      return this.notifications.filter(notification => notification.status === 'unread').length;
    }

  },
  mounted() {
    this.fetchItems();
    this.checkScreenSize();
    window.addEventListener("resize", this.checkScreenSize);
  },
  beforeDestroy() {
    window.removeEventListener("resize", this.checkScreenSize);
  },

  created(){
      this.getInfo();
      this.fetchNotifications();
      this.user();
      this.getUserInfo(this.infos.fullname);
  },

  methods: {
    QrCodeData() {
      const id = this.selectedInfo.propertynumber; // Replace with dynamic data if necessary
      this.qrCodeData = id;
      console.log(this.qrCodeData);
    },
    navigateToEditSPS() {
      this.$router.push('/editsps');
    },
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
    async getInfo() {
      try {
        const response = await axios.get('getdata');
        this.info = response.data;
        // Extract employee names from info and store in employeeOptions
        // this.employeeOptions = this.info.map(info => info.acc_officer);
      } catch (error) {
        console.log(error);
      }
    },
    async generateImage() {
      const captureArea = this.$refs.captureArea;

      if (captureArea) {
        this.loading = true;  // Show the loading spinner

        try {
          console.log("Starting to capture area...");

          // Capture the area using html2canvas
          const canvas = await html2canvas(captureArea);

          // Convert the canvas to a base64-encoded image
          this.imageData = canvas.toDataURL('image/png');

          console.log("Image captured successfully!");
        } catch (error) {
          console.error("Error generating image:", error);
        } finally {
          this.loading = false;  // Hide the loading spinner once done
        }
      } else {
        console.error("Capture area not found.");
      }
    },
    closeModal() {
      this.selectedInfo = null;
      this.imageData = null; // Reset the image when the modal is closed
    },
    generateQRCodeUrl(id) {
          return `https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=${id}`;
        },

    async printBoxContent() {
      const ids = this.box.map(item => item.id);

      try {
        const response = await axios.post('/stickerPDF', { ids }, {
          responseType: 'blob'
        });

        const link = document.createElement('a');
        link.href = URL.createObjectURL(new Blob([response.data], { type: 'application/pdf' }));
        link.download = 'stickers.pdf';
        link.click();

        // Clear the box items and start countdown
        this.clearBox();
        this.downloadSuccessMessage = 5; // Set initial countdown value to 5 seconds

        // Start the countdown interval
        const countdownInterval = setInterval(() => {
          if (this.downloadSuccessMessage > 1) {
            this.downloadSuccessMessage -= 1; // Decrement each second
          } else {
            this.downloadSuccessMessage = false; // Hide message after 0 seconds
            clearInterval(countdownInterval); // Clear interval after countdown
          }
        }, 1000); // Update every 1 second

      } catch (error) {
        console.error('Error printing box content:', error);
      }
    },
    


    fetchItems() {
      axios
        .get("http://dilg.test/backend/getdata")
        .then((response) => {
          this.items = response.data;
        })
        .catch((error) => {
          console.error("Error fetching items:", error);
        });
    },

    toggleDrag(item) {
      if (item.isDragging) {
        this.endDrag();
      } else {
        this.startDrag(item);
      }
    },
    startDrag(event, item) {
      event.dataTransfer.effectAllowed = 'move';
      event.dataTransfer.setData('text/plain', item.id); // Use item ID or any unique identifier
      this.currentlyDragging = item;
      item.isDragging = true;
    },
    endDrag() {
      if (this.currentlyDragging) {
        this.currentlyDragging.isDragging = false;
        this.currentlyDragging = null;
      }
    },
    onDrop(area) {
      const itemId = event.dataTransfer.getData('text/plain');
      const item = this.items.find(i => i.id == itemId) || this.box.find(i => i.id == itemId);

      if (item) {
        if (area === 'box') {
          if (!this.box.includes(item)) {
            this.items.splice(this.items.indexOf(item), 1);
            this.box.unshift(item); // Insert at the beginning
          }
        } else {
          if (!this.items.includes(item)) {
            this.box.splice(this.box.indexOf(item), 1);
            this.items.unshift(item); // Insert at the beginning
          }
        }
        this.endDrag(); // Reset dragging state
      }
    },
    clearBox() {
      // Move items back to 'items' if needed
      this.items = [...this.items, ...this.box];
      // Clear the box
      this.box = [];
    },



    selectRecord(info) {
      this.selectedInfo = info;
      console.log(info);
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


  
    async logout(){
          sessionStorage.removeItem('token');
          this.$router.push('/signin');
      },

    checkScreenSize() {
      // Set mobile to true if screen width is below 768px
      this.isMobile = window.innerWidth < 768;
    },
  }
}
</script>

<style scoped>


.navigate-button {
  margin-top: 20px;
  padding: 10px 20px;
  background-color: #007bff;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.navigate-button:hover {
  background-color: #0056b3;
}




.table-row {
  background-color: white;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15);
  transition: box-shadow 0.3s ease;
  padding: 10px;
  margin-bottom: 5px; /* This may not always work as intended */
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

.modal {
  display: flex;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(52, 52, 52, 0.5);
  justify-content: center;
  align-items: center;
}

.modal-content {
  background-color: #f9f9f9;
  padding: 20px;
  border: 1px solid #888;
  width: 600px;
  max-width: 90%;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
  font-family: Calibri, sans-serif;
  font-size: 14px;
  line-height: 1.5;
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

.loading-spinner {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100%;
}

.spinner {
  border: 8px solid #f3f3f3; /* Light grey */
  border-top: 8px solid #3498db; /* Blue */
  border-radius: 50%;
  width: 60px;
  height: 60px;
  animation: spin 1s linear infinite;
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

.drag-area {
  min-height: 300px;
  border: 2px dashed #ccc;
  padding: 10px;
  background-color: #f9f9f9;
}

.card-grid {
  display: flex;
  flex-wrap: wrap;
  gap: 15px;
}

.item {
  width: calc(33.3333% - 10px); /* 3 items per row, adjusting for margin */
  cursor: pointer;
  transition: transform 0.3s ease, background-color 0.3s ease;
}

.item.dragging {
  transform: scale(1.05);
  background-color: #e0e0e0;
}

.card-animation-enter-active,
.card-animation-leave-active {
  transition: all 0.5s ease;
}

.card-animation-enter,
.card-animation-leave-to {
  transform: translateY(20px);
  opacity: 0;
}



.button-container {
  display: flex; /* Center the button */
  justify-content: center; /* Center the button horizontally */
}

button.noselect {
  width: 140px; /* Adjust as needed */
  height: 40px;
  cursor: pointer;
  display: flex;
  align-items: center;
  background: #fff700; /* Green background */
  border: none;
  border-radius: 5px; /* Rounded corners */
  box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.15); /* Shadow effect */
  position: relative; /* To position the icon absolutely within the button */
  overflow: hidden; /* Hide overflowing elements */
  transition: background 200ms; /* Transition for background color */
  position: relative;
}

button.noselect .text {
  color: rgb(7, 99, 0); /* Text color */
  font-weight: bold; /* Bold text */
  font-size: 15px; /* Font size */
  margin-left: 40px; /* Margin for text */
  transition: color 200ms; /* Transition for text color */
}

button.noselect .icon {
  position: absolute; /* Position the icon */
  right: 10px; /* Position the icon inside the button */
  height: 40px; /* Icon height */
  width: 40px; /* Icon width */
  display: flex;
  align-items: center; /* Center vertically */
  justify-content: center; /* Center horizontally */
  opacity: 0; /* Initially hidden */
  transition: opacity 200ms, left 200ms, transform 200ms; /* Smooth transitions */
}

button.noselect:hover {
  background: #00cc00; /* Change background on hover */
}

button.noselect:hover .text {
  color: transparent; /* Hide text color on hover */
}

button.noselect:hover .icon {
  left: 50%; /* Center the icon */
  transform: translateX(-50%); /* Adjust to center the icon */
  opacity: 1; /* Show the icon on hover */
  width: 40px; /* Keeps the icon size consistent */
}

button.noselect:focus {
  outline: none; /* Remove outline on focus */
}

.buttonSpan {
  color: white; /* Color for additional text or icon */
  font-size: 24px; /* Icon size */
}

.filter-container {
  margin-bottom: 10px; /* Space below the filter */
  display: flex; /* Use flexbox to align items */
  align-items: center; /* Center items vertically */
}

.filter-label {
  margin-right: 10px; /* Space between label and dropdown */
  font-weight: bold; /* Make label bold */
  color: #333; /* Dark color for readability */
}

.custom-select {
  padding: 8px; /* Add padding for a better touch target */
  border: 1px solid #ccc; /* Light border */
  border-radius: 5px; /* Rounded corners */
  background-color: #fff; /* White background */
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Light shadow for depth */
  transition: border-color 0.3s; /* Smooth transition for border color */
  font-size: 14px; /* Font size */
  color: #555; /* Font color */
  cursor: pointer; /* Pointer cursor on hover */
}

/* Change border color on focus */
.custom-select:focus {
  border-color: #007bff; /* Blue border on focus */
  outline: none; /* Remove default outline */
}

/* Optional: Change background color on hover */
.custom-select:hover {
  background-color: #f8f9fa; /* Light grey on hover */
}

.main {
  position: relative;
}


/* SCREEN */
.mobile-overlay {
  position:absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.8); /* Semi-transparent background */
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  z-index: 0; /* Ensure it covers everything */
}

.overlay-content {
  text-align: center;
}


</style>
