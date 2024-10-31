<style scoped>

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

.body {
  display: flex;
  justify-content: flex-end; /* Align tabs to the right */
  width: 100%;
  padding-right: 20px;
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
                <a href="serviceable">
                  <i class="bi bi-circle"></i><span>Serviceable</span>
                </a>
              </li>
              <li>
                <a href="unserviceable">
                  <i class="bi bi-circle"></i><span>Unserviceable</span>
                </a>
              </li>
              <li>
                <a href="returnedppe">
                  <i class="bi bi-circle"></i><span>Returned PPE</span>
                </a>
              </li>
              <li>
                <a href="transferedppe">
                  <i class="bi bi-circle"></i><span>Transfered PPE</span>
                </a>
             </li>
             <li>
              <a href="disposedppe">
                <i class="bi bi-circle"></i><span>Disposed PPE</span>
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
                  <i class="bi bi-circle"></i><span>PPE Documents</span>
                </a>
              </li>
            </ul>
          </li><!-- End Forms Nav -->
          <!-- Input Section -->
          <li class="nav-heading">input</li>
          <li class="nav-item">
            <a class="nav-link collapsed" href="/workspace">
              <i class="bi bi-folder-plus"></i>
              <span>Workspace</span>
            </a>
          </li><!-- End Input Nav -->
          <li class="nav-item">
            <a class="nav-link active" href="/logbook">
              <i class="bi bi-folder-plus"></i>
              <span>Logbook</span>
            </a>
          </li><!-- End Input Nav -->
          <!-- Stocks Section -->
          <li class="nav-heading">Stocks</li>
          <li class="nav-item">
            <a class="nav-link collapsed" href="/inventory">
              <i class="bi bi-folder-plus"></i>
              <span>Inventory</span>
            </a>
          </li><!-- End Stocks Nav -->
          <!-- Ordering Section -->
          <!-- Security Section -->
          <li class="nav-heading">Security</li>
          <li class="nav-item">
            <a class="nav-link collapsed" href="/userverify">
              <i class="bi bi-folder-plus"></i>
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

<!-- Calendar Component -->
<div v-if="activeTab === 'calendar'">
  <full-calendar ref="fullCalendar" :options="calendarOptions" class="calendar" />
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
        <div class="card">
          <div class="card-body">
            <video id="qr-video" playsinline></video>
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
              <div v-if="employee">
                <form @submit.prevent="saveBorrowed" enctype="multipart/form-data">
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
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Borrowed Log</h5>
          <p>Please see all the borrowed logs of equipment inside the office.</p>
          <table class="table">
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
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Returned Log</h5>
          <p>Please see all the returned logs of equipment inside the office.</p>
          <table class="table">
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
    <video id="modal-qr-video" playsinline></video>
    <div id="modal-qr-result"></div>
    <button class="btn btn-success" id="modal-start-camera" @click="startModalCamera" v-show="!modalIsCameraOn">Scan</button>
    <button class="btn btn-danger" id="modal-stop-camera" @click="stopModalCamera" v-show="modalIsCameraOn">Stop</button>
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
        const backgroundImage = `url('https://inventrack.online/backend/uploads/${imageUrl}')`;
        
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
              this.employee = data.empfullname;
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
  
    async handleModalQRCode(qrCodeData) {
      const modalVideo = document.getElementById("modal-qr-video");
      if (modalVideo.readyState >= modalVideo.HAVE_ENOUGH_DATA) {
        if (this.selectedRecord) { // Use the selectedRecordId as recordId
          // Update the 'date_returned' column with the selected record ID and QR code data
          try {
            const currentDate = new Date().toISOString().split('T')[0]; // Get the current date in YYYY-MM-DD format
            const currentTime = new Date().toLocaleTimeString('en-US', { hour12: false }); // Get the current time in HH:MM:SS format (24-hour)

            const datetime = `${currentDate} ${currentTime}`; // Combine date and time

            const response = await axios.post(`/update_logbook_date_returned/${this.selectedRecord}/${qrCodeData}/${datetime}`, {
              // Pass the datetime obtained from the client-side
              date_returned: datetime,
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

  
      async selectRecord(selectedEvent) {
        this.selectedRecord = selectedEvent.id;
        console.log(this.selectedRecord);
        this.goBack();
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
  