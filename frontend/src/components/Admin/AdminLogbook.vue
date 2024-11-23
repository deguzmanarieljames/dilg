<style scoped>
.edit {
  border-radius: 12px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.edits {
  padding: 20px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center; /* Center text */
  height: 100%; /* Ensures the card takes full height for centering */
}

.video-container {
  position: relative;
  width: 100%;
  height: auto;
  border-radius: 10px;
  background-color: #ffffff;
  overflow: hidden;
  margin-bottom: 20px;
}

.video-display {
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 10px;
}

.button-container {
  display: flex;
  justify-content: center;
  gap: 15px;
  margin-top: 20px;
}

button {
  width: 150px;
  font-size: 16px;
  padding: 10px;
  border-radius: 8px;
  transition: all 0.3s ease;
}

button:hover {
  transform: scale(1.05);
}

button i {
  margin-right: 8px;
}

button:focus {
  outline: none;
}

@media (max-width: 768px) {
  .button-container {
    flex-direction: column;
    gap: 10px;
  }

  button {
    width: 100%;
  }
}



/* Modal Background */
.modal {
  display: flex;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.5);
  justify-content: center;
  align-items: center;
  animation: modal-animation 0.3s ease-in-out;
}

@keyframes modal-animation {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}

/* Modal Content */
.modal-content {
  background-color: #fff;
  border-radius: 8px;
  width: 90%;
  max-width: 600px;
  padding: 20px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  animation: modal-content-animation 0.3s ease-in-out;
}

@keyframes modal-content-animation {
  from {
    transform: translateY(-50px);
  }
  to {
    transform: translateY(0);
  }
}

/* Close Button */
.close {
  color: #aaa;
  font-size: 28px;
  font-weight: bold;
  position: absolute;
  top: 15px;
  right: 15px;
  cursor: pointer;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}

/* Card Design */
.modal-card {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

/* Video Container */
.video-container {
  position: relative;
  width: 80%;
  height: 300px;
  border: 2px solid #ddd;
  border-radius: 8px;
  background-color: #000;
  overflow: hidden;
  margin-bottom: 20px;
}

.video-display {
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 8px;
}

/* QR Result Section */
.qr-result {
  width: 100%;
  margin: 10px 0;
  text-align: center;
  font-size: 16px;
  color: #333;
}

/* Button Container */
.button-container {
  display: flex;
  justify-content: center;
  gap: 15px;
  margin-top: 20px;
}

button {
  width: 150px;
  font-size: 16px;
  padding: 10px;
  border-radius: 8px;
  transition: all 0.3s ease;
}

button:hover {
  transform: scale(1.05);
}

button i {
  margin-right: 8px;
}

button:focus {
  outline: none;
}

/* Responsive Design */
@media (max-width: 768px) {
  .modal-content {
    padding: 15px;
  }

  .video-container {
    height: 200px;
  }

  button {
    width: 100%;
  }

  .button-container {
    flex-direction: column;
    gap: 10px;
  }
}


.selected {
  border: 2px solid #007bff;
  background-color: aquamarine;
}
#qr-video {
  width: 300px;
  height: 300px;
}
#qr-result {
  margin-top: 10px;
}
.inventory-image {
  max-width: 100px; 
  max-height: 100px; 
  width: auto;
  height: auto;
  padding: 20px 0 0 20px;
}
/* General Styling */
.card {
  border-radius: 10px;
  margin-bottom: 20px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Table Styling */
.table {
  width: 100%;
  border-collapse: collapse;
}

.table th, .table td {
  text-align: left;
  padding: 12px 15px;
  font-size: 16px;
}

.table thead {
  background-color: #007bff;
  color: white;
}

.table-striped tbody tr:nth-child(odd) {
  background-color: #f9f9f9;
}

.table-hover tbody tr:hover {
  background-color: #f1f1f1;
}

.table td, .table th {
  border-bottom: 1px solid #ddd;
}

/* Button Styling */
.btn {
  padding: 8px 16px;
  border-radius: 5px;
  font-size: 14px;
  transition: background-color 0.3s ease;
}

.btn-success {
  background-color: #28a745;
  border: none;
}

.btn-success:hover {
  background-color: #218838;
}

/* Responsive Design */
@media (max-width: 768px) {
  .table th, .table td {
    font-size: 14px;
    padding: 8px 10px;
  }

  .card-body {
    padding: 20px;
  }

  .card-title {
    font-size: 20px;
  }

  .card-text {
    font-size: 14px;
  }
}


    .calendar {
  background-color: #fff; 
  color: #000; 
  border-radius: 20px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); 
  width: 100%; 
  height: auto;
  padding: 20px 20px 20px 20px;
  margin-bottom: 30px;
}

/* Adjustments for smaller screens */
@media only screen and (max-width: 768px) {
  .calendar {
    width: 100%; 
    height: auto;
  }
}

@media (max-width: 768px) {
  .fc-daygrid-event {
    font-size: 10px; 
  }
}


::v-deep .fc-day, ::v-deep .fc-day-number {
  border: 1px solid rgb(114, 113, 113); 
  color: black !important;
}

::v-deep .fc-day, ::v-deep .fc-day-number {
  font-weight: bold !important; 
  color: black;
}

.side-panel {
  position: absolute;
  width: 350px;
  background-color: #ffffff; 
  border: 1px solid #ddd;
  padding: 20px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  transform: scale(0.8); 
  opacity: 0;
  border-radius: 8px;
  z-index: 1000; 
  transition: transform 0.4s ease-in-out, opacity 0.4s ease-in-out; 
}

.side-panel.visible {
  transform: scale(1); 
  opacity: 1;
}

.side-panel::before {
  content: '';
  position: absolute;
  top: calc(50% - 10px); 
  right: -10px; 
  border-width: 5px;
  border-style: solid;
  border-color: transparent transparent transparent #ddd; 
  transform: translateY(-50%) rotate(45deg); 
}

.button-container {
  display: flex;
  justify-content: space-between;
}

.back-button {
  background-color: red;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.return-button {
  background-color: rgb(0, 255, 0);
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.body {
  display: flex;
  justify-content: flex-end; /* Ensure the body div is aligned to the right */
  width: 100%;
  padding-right: 20px; /* Add padding to the right if needed */
}

.radio-input {
  --container_width: 640px; /* Adjust width for four tabs */
  position: relative;
  display: flex;
  align-items: center;
  justify-content: flex-end; /* Align tabs to the right side */
  border-radius: 10px;
  background-color: #fff;
  color: #000000;
  width: var(--container_width);
  overflow: hidden;
  border: 1px solid rgba(53, 52, 52, 0.226);
}

.radio-input label {
  width: 100%;
  padding: 13px;
  cursor: pointer;
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 1;
  font-weight: 600;
  letter-spacing: -1px;
  font-size: 15px;
  border-right: 1px solid rgba(53, 52, 52, 0.226);
  gap: 7px;
}

.radio-input label:last-child {
  border-right: none;
}

.selection {
  display: none;
  position: absolute;
  height: 100%;
  width: calc(var(--container_width) / 4); /* Adjust width for four tabs */
  z-index: 0;
  left: 0;
  top: 0;
  transition: .15s ease;
}

.radio-input label:has(input:checked) {
  color: #fff;
}

.radio-input label:has(input:checked) ~ .selection {
  background-color: rgb(11 117 223);
  display: inline-block;
}

.radio-input label:nth-child(1):has(input:checked) ~ .selection {
  transform: translateX(calc(var(--container_width) * 0/4));
}

.radio-input label:nth-child(2):has(input:checked) ~ .selection {
  transform: translateX(calc(var(--container_width) * 1/4));
}

.radio-input label:nth-child(3):has(input:checked) ~ .selection {
  transform: translateX(calc(var(--container_width) * 2/4));
}

.radio-input label:nth-child(4):has(input:checked) ~ .selection {
  transform: translateX(calc(var(--container_width) * 3/4));
}





.mark-all-read-btn-sm {
  background-color: #007bff;
  color: white;
  border: none;
  font-size: 12px;
  padding: 4px 8px;
  border-radius: 4px;
  cursor: pointer;
  margin-top: 5px; /* Adds a little spacing */
  float: middle; /* Aligns to the right for a cleaner look */
}

.mark-all-read-btn-sm:hover {
  background-color: #0056b3;
  box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2); /* Adds a subtle shadow */
}

</style>


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
                <!-- Mark All as Read Button (Visible only in Unread filter) -->
                <button
                  v-if="filter === 'unread' && filteredNotifications.length > 0"
                  class="mark-all-read-btn-sm"
                  @click="markAllAsRead"
                >
                  Mark All as Read
                </button>
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
        <!-- Sidebar Navigation -->
        <ul class="sidebar-nav" id="sidebar-nav">
          <!-- Home Section -->
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
            <a class="nav-link active" href="/logbook">
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
        <h1>Log Book</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item">Tables</li>
            <li class="breadcrumb-item active">Data</li>
            </ol>
        </nav>
        </div><!-- End Page Title -->
     
        <div class="body">
          <div class="radio-input">
            <label>
              <input
                value="calendar"
                name="value-radio"
                id="calendar"
                type="radio"
                v-model="activeTab"
              />
              <span>Calendar</span>
            </label>

            <label>
              <input
                value="scan"
                name="value-radio"
                id="scan"
                type="radio"
                v-model="activeTab"
              />
              <span>Scan</span>
            </label>

            <label>
              <input
                value="borrowed"
                name="value-radio"
                id="borrowed"
                type="radio"
                v-model="activeTab"
              />
              <span>Borrowed</span>
            </label>

            <label>
              <input
                value="returned"
                name="value-radio"
                id="returned"
                type="radio"
                v-model="activeTab"
              />
              <span>Returned</span>
            </label>

            <span class="selection"></span>
          </div>
        </div>
<br>
<!-- Calendar Component -->
<div v-if="activeTab === 'calendar'" >
  <full-calendar ref="fullCalendar" :options="calendarOptions" class="calendar" style="border-left: solid 30px #b8ffb4;"/>
  <div v-if="selectedEvent" 
       :class="['side-panel', { visible: sidePanelVisible }]" 
       :style="sidePanelPosition">
    <h2>Employee Details</h2>
    <br>
    <p><strong>Employee:</strong> {{ selectedEvent.employee }}</p>
    <p><strong>Equipment:</strong> {{ selectedEvent.particulars }}</p>
    <p><strong>Date Borrowed:</strong> {{ selectedEvent.dateBorrowed }}</p>
    <p><strong>Date Returned:</strong> {{ selectedEvent.dateReturned || 'Not Returned Yet' }}</p>
    <br>
    <div class="button-container">
      <button class="back-button" @click="goBack">Back</button>
      <button v-if="selectedEvent.backgroundColor === 'orange'" class="return-button" @click="selectRecord(selectedEvent)">Return</button>
    </div>
  </div>
</div>

<!-- Scan Component -->
<div v-if="activeTab === 'scan'">
  <section class="section">
    <div class="row">
      <div class="col-lg-4">
        <div class="card edit">
          <div class="card-body edits text-center">
            <!-- Video Display -->
            <div class="video-container">
              <video id="qr-video" class="video-display" playsinline></video>
            </div>
      
            <!-- Camera Control Buttons -->
            <div class="button-container mt-3">
              <button class="btn btn-success" id="start-camera" @click="startCamera" v-show="!isCameraOn">
                <i class="bi bi-camera"></i> Start Camera
              </button>
              <button class="btn btn-danger" id="stop-camera" @click="stopCamera" v-show="isCameraOn">
                <i class="bi bi-stop-circle"></i> Stop Camera
              </button>
            </div>
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
              <div v-if="employee">
                <form @submit.prevent="saveBorrowed" method="POST" enctype="multipart/form-data">
                  <h4><label for="employee"><b>Welcome!</b> </label>
                  <input type="text" id="employee" v-model="employee"></h4>
                  <hr>
                  <h5><label><i>Please Select the equipment that you want to borrow:</i></label></h5>
                  <br>
                  <div>
                    <div class="row">
                      <div class="col-lg-4" v-for="(inv, index) in inventory" :key="inv.id">
                        <div class="card mb-3" 
                            @click="selectParticular(inv.particulars)"
                            :class="{ 'selected': selectedParticular === inv.particulars }">
                          <div class="row g-0">
                            <div class="col-md-4">
                              <img :src="`${this.baseURL}/uploads/${inv.image}`" alt="Inventory Image" class="inventory-image" />
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
              </div>
              <h4 v-else><b><i>Kindly Scan the QR Code. Thank you!</i></b> {{ qrCodeData }}</h4>
            </div>
          </div>              
        </div>
      </div>
    </div>
  </section>
</div>

<!-- Borrowed Log Section -->
<div v-if="activeTab === 'borrowed'">
  <div class="row">
    <div class="col-lg-12">
      <div class="card shadow-sm" style="border-left: 30px solid #ffa341;">
        <div class="card-body">
          <h5 class="card-title mb-4">Borrowed Log</h5>
          <p class="card-text mb-4">Please see all the borrowed logs of equipment inside the office.</p>
          <table class="table table-striped table-hover">
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
              <tr v-for="info in borrowedInfo" :key="info.id">
                <td>{{ info.particulars }}</td>
                <td>{{ info.employee }}</td>
                <td>{{ info.date_borrowed }}</td>
                <td>{{ info.date_returned }}</td>
                <td>
                  <button class="btn btn-success" @click="selectRecord(info)">Scan</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Returned Log Section -->
<div v-if="activeTab === 'returned'">
  <div class="row">
    <div class="col-lg-12">
      <div class="card shadow-sm" style="border-left: 30px solid #80faf4;">
        <div class="card-body">
          <h5 class="card-title mb-4">Returned Log</h5>
          <p class="card-text mb-4">Please see all the returned logs of equipment inside the office.</p>
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th>Equipment</th>
                <th>Employee</th>
                <th>Date Borrowed</th>
                <th>Date Returned</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="info in returnedInfo" :key="info.id">
                <td>{{ info.particulars }}</td>
                <td>{{ info.employee }}</td>
                <td>{{ info.date_borrowed }}</td>
                <td>{{ info.date_returned }}</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Modal for Scanning -->
<div class="modal" v-if="selectedRecord">
  <div class="modal-content">
    <span class="close" @click="selectedRecord = null">&times;</span>

    <div class="modal-card">
      <!-- Video Display for QR Scanning -->
      <div class="video-container">
        <video id="modal-qr-video" class="video-display" playsinline></video>
      </div>
      
      <!-- QR Result Display -->
      <div id="modal-qr-result" class="qr-result"></div>

      <!-- Camera Control Buttons -->
      <div class="button-container mt-3">
        <button class="btn btn-success" id="modal-start-camera" @click="startModalCamera" v-show="!modalIsCameraOn">
          <i class="bi bi-camera"></i> Start Camera
        </button>
        <button class="btn btn-danger" id="modal-stop-camera" @click="stopModalCamera" v-show="modalIsCameraOn">
          <i class="bi bi-stop-circle"></i> Stop Camera
        </button>
      </div>
    </div>
  </div>
</div>



        </main><!-- End #main -->


        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    </div>
  </template>


  <script>
  // Components
  import axios from 'axios';
  import jsQR from "jsqr";
  import QRCode from 'qrcode-generator';
  import FullCalendar from '@fullcalendar/vue3';
  import dayGridPlugin from '@fullcalendar/daygrid';
  import interactionPlugin from '@fullcalendar/interaction';
  
  export default {
    components: {
      FullCalendar
    },
    data() {
      return {
        notifications: [],
        filter: 'all',
        activeTab: 'calendar', // Set the default active tab
        info: [],
        infos:[],
        inventory: [],
        empfullname: '',
        empposition: '',
        employee: '',
        position: '',
        selectedParticular: null,
        selectedDate: null,
        video: null,
        startButton: null,
        stopButton: null,
        isCameraOn: false,
        stream: null,
        cameraStarted: false,
        qrCodeData: null,
        selectedRecord: '',
        modalIsCameraOn: false,
        borrowedLogs: [],
        selectedEvent: null, 
        sidePanelVisible: false, 
        sidePanelPosition: { top: '0px', left: '0px' }, 
        // calendarOptions: {
        //       plugins: [dayGridPlugin, interactionPlugin],
        //       initialView: 'dayGridMonth',
        //       contentHeight: 'auto', 
        //       eventSources: [
        //         {
        //           events: this.calendarEvents,
        //           textColor: 'white'
        //         }
        //       ],
        //       titleFormat: { year: 'numeric', month: 'long', day: 'numeric' },
        //       dayHeaderFormat: { weekday: 'long' },
        //       eventClick: this.handleEventClick,
        //       eventContent: function(arg) {
        //         const title = arg.event.title; 
        //         const backgroundColor = arg.event.backgroundColor; 
        //         const html = `<div class="fc-content" style="background-color: ${backgroundColor}; text-align: center;">${title}</div>`;
            
        //         return { html: html };
        //       }
        // }
  
      };
    },
    computed: {
      baseURL() {
        return axios.defaults.baseURL;
      },
      filteredNotifications() {
        if (this.filter === 'unread') {
          return this.notifications.filter(notification => notification.status === 'unread');
        }
        return this.notifications;
      },
      unreadCount() {
        return this.notifications.filter(notification => notification.status === 'unread').length;
      },
      calendarEvents() {
        const events = [];
        this.info.forEach(log => {
          const dateBorrowed = new Date(log.date_borrowed);
          const timeBorrowed = dateBorrowed.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
          const dateReturned = log.date_returned;
          const eventSource = dateReturned ? 'returned' : 'borrowed';
          const backgroundColor = eventSource === 'returned' ? 'lightgreen' : 'orange';
          events.push({
            id: log.id, 
            title: timeBorrowed, 
            start: dateBorrowed,
            source: eventSource,
            backgroundColor: backgroundColor,
            extendedProps: {
              particulars: log.particulars,
              employee: log.employee,
              dateBorrowed: log.date_borrowed,
              dateReturned: log.date_returned
            }
          });
        });
        return events;
      },
      calendarEvents() {
      const events = [];
      this.info.forEach(log => {
        const dateBorrowed = new Date(log.date_borrowed);
        const timeBorrowed = dateBorrowed.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
        const dateReturned = log.date_returned;
        const eventSource = dateReturned ? 'returned' : 'borrowed';
        const backgroundColor = eventSource === 'returned' ? 'lightgreen' : 'orange';
        
        events.push({
          id: log.id,
          title: timeBorrowed,
          start: dateBorrowed,
          source: eventSource,
          backgroundColor: backgroundColor,
          extendedProps: {
            particulars: log.particulars,
            employee: log.employee,
            dateBorrowed: log.date_borrowed,
            dateReturned: log.date_returned
          }
        });
      });
      return events;
    },
      calendarOptions() {
        return {
          plugins: [dayGridPlugin, interactionPlugin],
          initialView: 'dayGridMonth',
          contentHeight: 'auto',
          events: this.calendarEvents, // Bind the computed property directly
          titleFormat: { year: 'numeric', month: 'long', day: 'numeric' },
          dayHeaderFormat: { weekday: 'long' },
          eventClick: this.handleEventClick,
          eventContent: function(arg) {
            const title = arg.event.title;
            const backgroundColor = arg.event.backgroundColor;
            const html = `<div class="fc-content" style="background-color: ${backgroundColor}; text-align: center;">${title}</div>`;
            return { html: html };
          }
        };
      },
  
  
  
      particulars: {
        get() {
          return this.selectedParticular;
        },
        set(value) {
          if (value === this.selectedParticular) {
            this.selectedParticular = '';
          } else {
            this.selectedParticular = value;
          }
        }
      },
      borrowedInfo() {
        return this.info.filter(item => !item.date_returned);
      },
      returnedInfo() {
        return this.info.filter(item => item.date_returned);
      }
    },
  
    mounted() {
    this.video = document.getElementById("qr-video");
    this.startButton = document.getElementById("start-camera");
    this.stopButton = document.getElementById("stop-camera");
    document.addEventListener('eventChange', this.handleEventChange);
    this.getInfo();
    this.getInventory();
    window.addEventListener('resize', this.handleWindowResize);
  },
  
  destroyed() {
      // Remove event listener when component is destroyed
      window.removeEventListener('resize', this.handleWindowResize);
    },
  
    created() {
      this.getInfo();
      this.getInventory();
      this.user();
      this.getUserInfo(this.infos.fullname);
      this.fetchNotifications();
    },

    watch: {
    activeTab(newTab) {
      if (newTab === 'calendar') {
        this.$nextTick(() => {
          if (this.$refs.fullCalendar) {
            this.$refs.fullCalendar.getApi().refetchEvents(); // Ensure the calendar is refreshed
          }
        });
      }
    }
  },
    methods: {
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
      updateCalendarEvents() {
        // Generate calendar events from borrowedLogs array
        const events = [];
        this.info.forEach(log => {
          events.push({
            title: log.employee,
            start: log.date_borrowed // Assuming this field contains the borrowing date
          });
        });
        this.$refs.fullCalendar.getApi().removeAllEvents(); 
        this.$refs.fullCalendar.getApi().addEventSource(events); 
        
      },

      handleEventClick(info) {
        const eventDetails = info.event.extendedProps;
        this.selectedEvent = {
          id: info.event.id, // Accessing the event ID directly from info.event
          particulars: eventDetails.particulars,
          employee: eventDetails.employee,
          dateBorrowed: eventDetails.dateBorrowed,
          dateReturned: eventDetails.dateReturned,
          backgroundColor: info.event.backgroundColor
        };
        this.showSidePanel(info.el);
        this.getInfo();
      },
  
      getImageStyle(imageUrl) {
        // Function to generate the background image style
        if (!imageUrl) {
          return {}; // Return an empty object if imageUrl is not provided
        }
        
        // Set the background image URL
        const backgroundImage = `url('${this.baseURL}/uploads/${imageUrl}')`;
        
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
  
      handleDateChange(date) {
        // Fetch data based on the selected date
        console.log('Selected date:', date);
        // You can use this selected date to filter your table data
      },
  
      startCamera() {
        // Access the video element directly via DOM
        const videoElement = document.getElementById("qr-video");

        navigator.mediaDevices
          .getUserMedia({ video: { facingMode: "environment" } })
          .then((videoStream) => {
            this.stream = videoStream;
            videoElement.srcObject = this.stream;
            videoElement.play();
            this.isCameraOn = true;

            // Control buttons via DOM, no need for instance variables
            const startButton = document.getElementById("start-camera");
            const stopButton = document.getElementById("stop-camera");
            startButton.style.display = "none";
            stopButton.style.display = "inline-block";

            this.tick(); // Start the QR scanning process
          })
          .catch((error) => {
            console.error("Error accessing camera:", error);
          });
      },

      async stopCamera() {
        if (this.stream) {
          const tracks = this.stream.getTracks();
          tracks.forEach((track) => track.stop());

          const videoElement = document.getElementById("qr-video");
          if (videoElement) {
            videoElement.pause();
            videoElement.srcObject = null;
            this.isCameraOn = false;

            // Control buttons via DOM, no need for instance variables
            const startButton = document.getElementById("start-camera");
            const stopButton = document.getElementById("stop-camera");
            if (startButton && startButton.style) {
              startButton.style.display = "inline-block";
            }
            if (stopButton && stopButton.style) {
              stopButton.style.display = "none";
            }
          }
        }
      },

      tick() {
        const videoElement = document.getElementById("qr-video");

        if (videoElement && videoElement.readyState === videoElement.HAVE_ENOUGH_DATA) {
          const canvasElement = document.createElement("canvas");
          canvasElement.width = videoElement.videoWidth;
          canvasElement.height = videoElement.videoHeight;
          const canvas = canvasElement.getContext("2d");
          canvas.drawImage(
            videoElement,
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
            this.fetchDataFromServer();
            this.stopCamera();  // Stop camera after QR code is detected
          }
        }

        if (this.isCameraOn) {
          requestAnimationFrame(this.tick);  // Continue scanning while camera is on
        }
      },

  
      fetchDataFromServer() {
        axios.get(`/fetchEmployee/${this.qrCodeData}`)
          .then((response) => {
            const data = response.data;
  
            if (data && Object.keys(data).length > 0) {
              // Update employee with fetched data
              this.employee = data.fullname;
            } else {
              // Clear employee data if no data found
              this.employee = "";
            }
          })
          .catch((error) => {
            console.error(error);
          });
      },
  
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
            console.error("Error accessing modal camera:", error);
          });
      },
  
      stopModalCamera() {
        if (this.modalStream) {
          const tracks = this.modalStream.getTracks();
          tracks.forEach((track) => track.stop());
          const modalVideo = document.getElementById("modal-qr-video");
          if (modalVideo) {
            modalVideo.pause();
            modalVideo.srcObject = null;
            this.modalIsCameraOn = false;
  
            const startButton = document.getElementById("modal-start-camera");
            const stopButton = document.getElementById("modal-stop-camera");
            if (startButton && startButton.style) {
              startButton.style.display = "inline-block";
            }
            if (stopButton && stopButton.style) {
              stopButton.style.display = "none";
            }
          }
        }
      },
  
      modalTick() {
        const modalVideo = document.getElementById("modal-qr-video");
        if (modalVideo && modalVideo.readyState === modalVideo.HAVE_ENOUGH_DATA) {
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
  
    // async handleModalQRCode(qrCodeData) {
    //   const modalVideo = document.getElementById("modal-qr-video");
    //   if (modalVideo.readyState >= modalVideo.HAVE_ENOUGH_DATA) {
    //     if (this.selectedRecord) { // Use the selectedRecordId as recordId
    //       // Update the 'date_returned' column with the selected record ID and QR code data
    //       try {
    //         const currentDate = new Date().toISOString().split('T')[0]; // Get the current date in YYYY-MM-DD format
    //         const currentTime = new Date().toLocaleTimeString('en-US', { hour12: false }); // Get the current time in HH:MM:SS format (24-hour)

    //         const datetime = `${currentDate} ${currentTime}`; // Combine date and time

    //         const response = await axios.post(`/update_logbook_date_returned/${this.selectedRecord}/${qrCodeData}/${datetime}`, {
    //           // Pass the datetime obtained from the client-side
    //           date_returned: datetime,
    //         });

    //         console.log(response.data);
    //         console.log("Date returned updated successfully");

    //         // Disable further scanning
    //         this.selectedRecord = null;

    //         // Reload the page using Vue Router
    //         this.$router.go();
    //       } catch (error) {
    //         console.error("Error updating date returned:", error);
    //       }
    //     } else {
    //       console.error("No record ID provided to update date returned.");
    //     }
    //   }
    // },

        async handleModalQRCode(qrCodeData) {
          const modalVideo = document.getElementById("modal-qr-video");
          if (modalVideo.readyState >= modalVideo.HAVE_ENOUGH_DATA) {
              if (this.selectedRecord) {
                  try {
                      const currentDate = new Date().toISOString().split('T')[0]; // Get current date
                      const currentTime = new Date().toLocaleTimeString('en-US', { hour12: false }); // Get current time
                      const datetime = `${currentDate} ${currentTime}`; // Combine date and time

                      const response = await axios.post(`/update_logbook_date_returned/${this.selectedRecord}/${qrCodeData}/${datetime}`, {
                          date_returned: datetime,
                      });

                      if (response.data.message === 'Successfully returned') {
                          // alert('Successfully returned!');
                      } else if (response.data.message === 'Scanned employee does not match the one who borrowed the equipment') {
                          alert('Error: The scanned employee is not the one who borrowed the equipment.');
                      }

                      // Disable further scanning and reload the page
                      this.selectedRecord = null;
                      this.$router.go();
                  } catch (error) {
                      console.error("Error updating date returned:", error);
                      alert('An error occurred while updating the record.');
                  }
              } else {
                  console.error("No record ID provided to update date returned.");
                  alert('No record selected for return.');
              }
          }
      },


  
      async selectRecord(selectedEvent) {
        this.selectedRecord = selectedEvent.id;
        console.log(this.selectedRecord);
        this.goBack();
      },
      // async saveBorrowed() {
      //   try {
      //     console.log(this.employee);
      //     console.log(this.particulars);
      //     const formData = new FormData();
      //     formData.append('employee', this.employee);
      //     formData.append('particulars', this.particulars);
  
      //     const response = await axios.post('/saveBorrowed', formData, {
      //       headers: {
      //         'Content-Type': 'multipart/form-data'
      //       }
      //     });
  
      //     console.log('Server response:', response.data);
  
      //     this.employee = "";
      //     this.particulars = "";
      //     this.stopCamera(); // Stop the camera after saving
      //     this.$emit('data-saved');
      //     this.getInfo();
      //     this.getInventory();
      //     this.qrCodeData = "";
      //   } catch (error) {
      //     console.error(error);
      //     this.employee = "";
      //     this.particulars = "";
      //   }
      // },

      async saveBorrowed() {
        try {
          console.log(this.employee);
          console.log(this.particulars);

          const formData = new FormData();
          formData.append('employee', this.employee);
          formData.append('particulars', this.particulars);

          const response = await axios.post('/saveBorrowed', formData, {
            headers: {
              'Content-Type': 'multipart/form-data'
            }
          });

          console.log('Server response:', response.data);

          if (response.data.success) {
            alert('Record saved successfully!');
          } else {
            alert(response.data.msg || 'Failed to save record.');
          }

          this.employee = "";
          this.particulars = "";
          this.stopCamera(); // Stop the camera after saving
          this.$emit('data-saved');
          this.getInfo();
          this.getInventory();
          this.qrCodeData = "";
        } catch (error) {
          console.error(error);
          // alert('An error occurred while saving the record.');
          alert('An error has occured.');
          this.employee = "";
          this.particulars = "";
        }
      },

  
      async getInventory(){
        try {
            const inv = await axios.get('getInventoryBorrow');
            this.inventory = inv.data;
            console.log(this.inv.data);
        } catch (error) {
            console.log(error);
        }
      },
  
      async getInfo() {
        try {
          const inf = await axios.get(`/getBorrowed`);
          this.info = inf.data;
  
          // Update calendar events
          this.$refs.fullCalendar.getApi().removeAllEvents(); // Remove existing events
          this.$refs.fullCalendar.getApi().addEventSource(this.calendarEvents); // Add new events
        } catch (error) {
          console.log(error);
        }
      },
  
      async logout(){
          sessionStorage.removeItem('token');
          this.$router.push('/signin');
      },
  
      updateCalendarEvents() {
        // Generate calendar events from borrowedLogs array
        const events = [];
        this.info.forEach(log => {
          events.push({
            title: log.employee,
            start: log.date_borrowed // Assuming this field contains the borrowing date
          });
        });
        this.$refs.fullCalendar.getApi().removeAllEvents(); 
        this.$refs.fullCalendar.getApi().addEventSource(events); 
        
      },
  
      goBack() {
        console.log('Back button clicked');
        this.sidePanelVisible = false; 
      },
  
      goReturn() {
        const borrowedItem = this.selectedEvent;
      
        axios.put(`/updateBorrowedItem/${borrowedItem.id}`, borrowedItem)
          .then(response => {
            console.log('Item returned successfully:', response.data);
            const calendar = this.$refs.fullCalendar.getApi();
            const event = calendar.getEventById(borrowedItem.id);
            if (event) {
              const eventElement = event.el;
              if (eventElement) {
                eventElement.style.backgroundColor = 'green';
                const changeEvent = new CustomEvent('eventChange', { bubbles: true });
                eventElement.dispatchEvent(changeEvent);
              }
            }
            location.reload();
          })
          .catch(error => {
            console.error('Error returning item:', error);
          });
      },
  
      showSidePanel(eventElement) {
        const rect = eventElement.getBoundingClientRect();
        const top = rect.top + window.scrollY;
        const left = rect.right + window.scrollX;
  
        this.sidePanelPosition = {
          top: `${top}px`,
          left: `${left + 20}px`
        };
  
        this.sidePanelVisible = true;
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
    }
  }
  
  </script>
  