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




.modal-backdrop {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
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



.navbar {
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  background-color: #f8f9fa; /* Light background */
  border-radius: 10px;
  padding: 10px; /* Add some padding */
  max-width: 100%;
  background: linear-gradient(90deg, #faab80, #ffffff); /* Orange to blue-green gradient */
}

.navbar-nav {
  display: contents; /* Use flexbox to align items */
  justify-content: center; /* Center items horizontally */
  flex-wrap: nowrap; /* Prevent wrapping on smaller screens */
  padding-left: 0; /* Remove default padding */
  margin: 0; /* Remove default margin */
}

.nav-link1 {
  font-size: 1.1rem;
  padding: 10px 15px;
  transition: background-color 0.3s, color 0.3s;
}

.nav-link1:hover {
  background-color: #e2e6ea; /* Light background on hover */
  color: #007bff; /* Change text color on hover */
}

.nav-link1.active {
  background-color: #00b00c; /* Active background color */
  color: #fff; /* Active text color */
  border-radius: 5px; /* Rounded corners for active link */
}

.divider {
  height: 40px; /* Divider height to center align */
  width: 1px; /* Divider width */
  background-color: #dee2e6; /* Light grey color */
  margin: 0 10px; /* Spacing around the divider */
}

@media (max-width: 576px) {
  .navbar-nav {
    justify-content: center; /* Keep items centered on mobile */
    flex-wrap: nowrap; /* Ensure items stay horizontal */
  }

  .nav-link1 {
    font-size: 1rem; /* Smaller font size for mobile */
  }

  .divider {
    display: none; /* Hide dividers on mobile for simplicity */
  }
}



.table {
  width: 100%;
  margin-bottom: 1rem;
  color: #212529;
  border-collapse: collapse;
}

.table thead th {
  background: linear-gradient(180deg, #ffffff, #80faf4);
  color: #000000;
  text-align: center;
  padding: 12px;
}

.table tbody tr {
  transition: background-color 0.3s;
}

.table tbody tr:hover {
  background-color: #f1f1f1;
}

.table td {
  padding: 12px;
  text-align: center;
  border: 1px solid #dee2e6;
}

/* Mobile Styles */
.mobile-card-view {
  display: none; /* Hide by default */
}

@media (max-width: 768px) {
  .table-responsive {
    display: none; /* Hide the table on mobile */
  }

  .mobile-card-view {
    display: block; /* Show mobile card view on smaller screens */
    margin-bottom: 1rem; /* Spacing between cards */
    border: 1px solid #dee2e6; /* Card border */
    border-radius: 5px; /* Rounded corners */
    background: #f9f9f9; /* Background color */
    padding: 1rem; /* Inner padding */
  }

  .mobile-card-view h5 {
    margin-top: 0; /* Remove top margin for card title */
  }
}

.section-title {
  font-size: 20px;
  font-weight: bold;
  color: #555;
  margin-top: 10px;
  margin-bottom: 5px;
  border-bottom: 2px solid #e0e0e0;
  padding-bottom: 10px;
  padding-top: 20px;
}

.info-group {
  margin-bottom: 3px; /* Space between info groups */
}

.info-group label {
  font-weight: bold; /* Bold labels */
  font-size: 13px; /* Set label font size */
  color: #666; /* Label color */
  display: inline-block; /* Inline display for labels */
  width: 45%; /* Fixed width for labels */
}

.info-group p {
  color: #1e7abf; /* Value text color */
  font-size: 13px; /* Set value font size */
  text-transform: uppercase; /* Uppercase transformation */
  display: inline-block; /* Inline display for values */
}


.status-pending {
  background-color: yellow; /* Yellow background for Pending */
  color: #333; /* Dark text color */
  padding: 5px 10px; /* Padding for button-like appearance */
  border-radius: 20px; /* Rounded corners */
  display: inline-block; /* Display inline */
  font-weight: bold; /* Bold text */
}

.status-ordered {
  background-color: green; /* Green background for Ordered */
  color: white; /* White text color */
  padding: 5px 10px; /* Padding for button-like appearance */
  border-radius: 20px; /* Rounded corners */
  display: inline-block; /* Display inline */
  font-weight: bold; /* Bold text */
}

.status-canceled {
  background-color: red; /* Red background for Canceled */
  color: white; /* White text color */
  padding: 5px 10px; /* Padding for button-like appearance */
  border-radius: 20px; /* Rounded corners */
  display: inline-block; /* Display inline */
  font-weight: bold; /* Bold text */
}

.button-group {
  display: flex; /* Use flexbox to align buttons */
  gap: 10px; /* Add some space between buttons */
  justify-content: flex-start; /* Align buttons to the start */
  margin-top: 10px; /* Space above the button group */
}

@media (max-width: 768px) {
  .button-group {
    flex-direction: row; /* Keep buttons in a row for mobile */
    justify-content:center; /* Space buttons evenly */
  }
}

.button-group {
  display: flex;
  justify-content: center; /* Center align the buttons */
  gap: 1rem; /* Space between buttons */
}

.button, .button1 {
  width: 120px;
  height: 40px;
  font-size: 14px;
  padding: 0.5rem 1rem; /* Adjust as needed */
}

/* Other existing styles remain the same */
.button {
  border: none;
  background-color: seagreen;
  color: white;
  font-size: 0.9rem; /* Slightly larger font size */
  font-weight: 500;
  border-radius: 0.35rem; /* Slightly larger border radius */
  box-shadow: 0 0.3rem 0.6rem rgba(0, 0, 0, 0.15);
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

.button1 {
  color: white;
  background-color: #C0392B;
  font-weight: 500;
  border-radius: 0.5rem;
  font-size: 0.904rem; /* Smaller font size */
  line-height: 1.7rem; /* Adjusted line height */
  padding-left: 1rem; /* Reduced padding */
  padding-right: 1rem; /* Reduced padding */
  padding-top: 0.5rem; /* Reduced padding */
  padding-bottom: 0.5rem; /* Reduced padding */
  cursor: pointer;
  text-align: center;
  margin-right: 0.5rem;
  display: inline-flex;
  align-items: center;
  border: none;

}


.button1:hover {
  background-color: maroon;
}

.button1 svg {
  display: inline;
  width: 1.3rem;
  height: 1.3rem;
  margin-right: 0.75rem;
  color: white;
}

.button1:focus svg {
  animation: spin_357 0.5s linear;
}

@keyframes spin_357 {
  from {
    transform: rotate(0deg);
  }

  to {
    transform: rotate(360deg);
  }
}

.button, .button1 {
  width: 120px;
  height: 40px;
  font-size: 14px;
  padding: 0.5rem 1rem; /* Adjust as needed */
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
                <a class="nav-link active" href="/ordering">
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
            <h1>Arrived Section</h1>
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/ordering">Arrived</a></li>
                <li class="breadcrumb-item active">Ordering</li>
              </ol>
            </nav>
          </div><!-- End Page Title -->
          <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <div class="container-fluid justify-content-center">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link1" href="/ordering">
                      <i class="bi bi-cart-plus"></i> <span>Orders</span>
                    </a>
                  </li>
                  <div class="divider"></div>
                  <li class="nav-item">
                    <a class="nav-link1" href="/orderpending">
                      <i class="bi bi-truck"></i> <span>Incoming</span>
                    </a>
                  </li>
                  <div class="divider"></div>
                  <li class="nav-item">
                    <a class="nav-link1 active" href="/orderincoming">
                      <i class="bi bi-cart-check"></i> <span>Ordered</span>
                    </a>
                  </li>
                </ul>
              </div>
            </nav>
          </header>
          <br><br>
      <section class="section">
        <div class="row">
            <div class="col-lg-12">


              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="section-title text-center">Arrived Orders</h5>
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Article</th>
                              <th>Particulars</th>
                              <th>Shop</th>
                              <th>Quantity</th>
                              <th>Total Amount</th>
                              <th>Date Ordered</th>
                              <th>Status</th>
                              <th>Receipt Verification</th>
                              <th>Action</th>
                              <th>Rating</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr v-for="ord in order" :key="ord.id" class="table-row">
                              <td>{{ ord.article }}</td>
                              <td>{{ ord.particulars }}</td>
                              <td>{{ ord.shop }}</td>
                              <td>{{ ord.quantity }}</td>
                              <td>{{ ord.totalamount }}</td>
                              <td>{{ ord.date_ordered }}</td>
                              <td>
                                <span :class="getStatusClass(ord.status)">
                                  {{ ord.status }}
                                </span>
                              </td>                              
                              <td>
                                <img :src="ord.receipt" alt="Inventory Image" style="max-width: 100px; max-height: 100px;" />
                              </td>
                              <td>
                                <div class="button-group">
                                  <a class="btn btn-warning" @click="selectRecord(ord)">
                                    <i class="bx bxs-camera"></i>
                                  </a>
                                  <a class="btn btn-danger" @click="deleteRecord(ord.id)">
                                    <i class="bx bxs-trash"></i>
                                  </a>
                                </div>
                              </td>                              
                              <td>
                                <button class="btn btn-primary" @click="openInventoryModal(ord)">Place to Inventory</button>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <!-- Mobile Card View -->
              <div class="mobile-card-view" v-for="ord in order" :key="ord.id">
                <div class="card">
                  <div class="card-body">
                    <h5 class="section-title">{{ ord.particulars }}</h5>
                    <div class="info-group">
                      <label>Article:</label>
                      <p>{{ ord.article }}</p>
                    </div>
                    <div class="info-group">
                      <label>Shop:</label>
                      <p>{{ ord.shop }}</p>
                    </div>
                    <div class="info-group">
                      <label>Quantity:</label>
                      <p>{{ ord.quantity }}</p>
                    </div>
                    <div class="info-group">
                      <label>Total Amount:</label>
                      <p>{{ ord.totalamount }}</p>
                    </div>
                    <div class="info-group">
                      <label>Date Ordered:</label>
                      <p>{{ ord.date_ordered }}</p>
                    </div>
                    <div class="info-group">
                      <label>Status:</label>
                      <span :class="getStatusClass(ord.status)">
                        {{ ord.status }}
                      </span>
                    </div>                    
                    <div class="info-group">
                      <label>Receipt:</label>
                      <img :src="ord.receipt" alt="Inventory Image" style="max-width: 100px; max-height: 100px;" />
                    </div>
                    <div class="info-group">
                      <br><label>Action:</label>
                      <div class="button-group">
                        <a class="btn btn-warning" @click="selectRecord(ord)">
                          <i class="bx bxs-camera"></i>
                        </a>
                        <a class="btn btn-danger" @click="deleteRecord(ord.id)">
                          <i class="bx bxs-trash"></i>
                        </a>
                      </div>
                    </div>
                    <br>                    
                    <div class="info-group text-center">
                      <button class="btn btn-primary" @click="openInventoryModal(ord)">Place to Inventory</button>
                    </div>
                  </div>
                </div>
              </div>

 


              <!-- Backdrop for Darkening Effect -->
              <div v-if="showAddItemModal" class="modal-backdrop"></div>

              <transition name="modal-slide">
                <div v-if="showAddItemModal" class="modal fade show d-block" tabindex="-1" role="dialog" aria-labelledby="addItemModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addItemModalLabel">Add Item</h5>
                                <button type="button" class="btn-close" @click="showAddItemModal = false" aria-label="Close"></button>
                            </div>
                    <div class="modal-body">
                      <form class="row g-3" method="POST" @submit.prevent="save" enctype="multipart/form-data">
                        <!-- Form fields here -->
                        <div class="col-md-6">
                          <label for="entityname" class="form-label">Entity Name</label>
                          <input type="text" class="form-control" id="entityname" v-model="entityname" required>
                        </div>
                        <div class="col-md-6">
                          <label for="classification" class="form-label">Classification</label>
                          <input type="text" class="form-control" id="classification" v-model="classification" required>
                        </div>
                        <div class="col-md-6">
                          <label for="code" class="form-label">Code</label>
                          <input type="text" class="form-control" id="code" v-model="code" required>
                        </div>
                        <div class="col-md-6">
                          <label for="article" class="form-label">Article</label>
                          <input type="text" class="form-control" id="article" v-model="article" required>
                        </div>
                        <div class="col-md-6">
                          <label for="particulars" class="form-label">Particulars</label>
                          <input type="text" class="form-control" id="particulars" v-model="particulars" required>
                        </div>
                        <div class="col-md-6">
                          <label for="modelno" class="form-label">Model No.</label>
                          <input type="text" class="form-control" id="modelno" v-model="modelno">
                        </div>
                        <div class="col-md-6">
                          <label for="serialno" class="form-label">Serial No.</label>
                          <input type="text" class="form-control" id="serialno" v-model="serialno">
                        </div>
                        <div class="col-md-6">
                          <label for="propertynumber" class="form-label">Semi Expendable Property No.</label>
                          <input type="text" class="form-control" id="propertynumber" v-model="propertynumber">
                        </div>
                        <div class="col-md-6">
                          <label for="propertydate" class="form-label">Date Arrived:</label>
                          <input type="date" class="form-control" id="propertydate" v-model="propertydate">
                        </div>
                        <div class="col-md-6">
                          <label for="quantity" class="form-label">Quantity</label>
                          <input type="text" class="form-control" id="quantity" v-model="quantity" required placeholder="0">
                        </div>
                        <div class="col-md-6">
                          <label for="unit" class="form-label">Unit</label>
                          <select class="form-select" id="unit" v-model="unit" required>
                            <option value="unit">Unit</option>
                            <option value="set">Set</option>
                          </select>
                        </div>
                        <div class="col-md-6">
                          <label for="unitcost" class="form-label">Unit Cost</label>
                          <input type="text" class="form-control" id="unitcost" v-model="unitcost" required placeholder="0">
                        </div>
                        <div class="col-md-6">
                          <label for="totalcost" class="form-label">Total Cost</label>
                          <input type="text" class="form-control" id="totalcost" :value="totalCostFormatted" required disabled placeholder="0">
                        </div>
              
                        <div class="col-md-12">
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
              
                        <div class="col-md-6" v-if="imageSource === 'upload'">
                          <!-- File upload input -->
                          <label for="image" class="form-label">Upload Image</label>
                          <input type="file" class="form-control" id="image" @change="handleFileUpload" accept="image/*">
                        </div>
              
                        <div class="col-md-6" v-else-if="imageSource === 'capture'">
                          <!-- Camera capture section -->
                          <label for="camera" class="form-label">Capture Image</label>
                          <video id="camera" width="100%" height="auto" autoplay></video>
                          <a @click="startCamera" class="btn btn-primary mt-2">{{ cameraStarted ? 'Stop Camera' : 'Start Camera' }}</a>
                          <a @click="captureImage" class="btn btn-success mt-2" :disabled="!cameraStarted">Capture</a>
                        </div>
              
                        
                        <div class="col-md-6">
                          <label class="form-label">Image Preview:</label>
                          <img :src="imagePreview" v-if="imagePreview" alt="Image Preview" class="img-fluid">
                          <br>
                        </div>
              <br>
              <hr>
                        <div class="button-group mt-6">
              
                          <button class="button1" @click="resetForm" type="reset" style="width: 120px; height: 40px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-repeat" viewBox="0 0 16 16">
                  <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z"></path>
                  <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z"></path>
                </svg>
                Reset
              </button>
                <button type="submit" class="button">Submit</button>              
               
              </div>
              
              
              
              
              
              
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              </transition>





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
        totalCost() {
          return this.quantity * this.unitcost;
        },
        totalAmountFormatted() {
          // Format total amount with commas
          return this.totalAmount.toLocaleString();
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
      },
      data(){
          return{
              infos:[],
              notifications: [],
              filter: 'all',
              id: "",
              inventory:[],
              order:[],
              entityname: "",
              classification: "",
              article: "",
              particulars: "",
              quantity: "",
              unit: "",
              unitcost: "",
              totalamount: "",
              propertynumber: "",
              propertydate: "",
              shop: "",
              date_ordered: "",
              number_rating: "",
              status: "",
              code: "",
              serialno: "",
              modelno: "",
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
              showAddItemModal: false,

          }
      },
      created(){
          this.getOrder();
          this.fetchNotifications();
          this.user();
          this.getUserInfo(this.infos.fullname);
      },
      mounted() {
        this.order.forEach(ord => {
          ord.userRating = ord.number_rating;
          ord.hoverRating = 0;
          ord.confirmRating = false;
        });
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
        openInventoryModal(order) {
            // Set form fields in the modal based on the selected order's data
            this.classification = order.classification;
            this.article = order.article;
            this.particulars = order.particulars;
            this.quantity = order.quantity;
            this.unit = order.unit;
            this.unitcost = order.unitcost;
            this.propertydate = order.date_arrived;  // Assuming date_arrived maps to propertydate

            // Optionally, if you want to redirect to `/inventory` while keeping the modal open
            // this.$router.push('/inventory');

            // Show the modal
            this.showAddItemModal = true;
        },
        getStatusClass(status) {
          if (status === 'Pending') {
            return 'status-pending'; // Class for Pending status
          } else if (status === 'Ordered') {
            return 'status-ordered'; // Class for Ordered status
          } else if (status === 'Canceled') {
            return 'status-canceled'; // Class for Canceled status
          }
          return ''; // Default class (optional)
        },




        async getOrder() {
          try {
            const ord = await axios.get('getOrderReceived');
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

        changeRating(ord) {
          ord.confirmRating = false;
          ord.hoverRating = 0;
        },
        async selectRecord(ord) {
          this.selectedRecord = ord.id;
          console.log(this.selectedRecord);
        },

        async save() {
          try {
            // Create a FormData object and append the computed total cost
            const formData = new FormData();
            
            if (this.selectedImageFile) {
              formData.append('image', this.selectedImageFile);
            } else if (this.capturedImage) {
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
            formData.append('propertynumber', this.propertynumber);
            formData.append('propertydate', this.propertydate);
            formData.append('quantity', this.quantity);
            formData.append('unit', this.unit);
            formData.append('unitcost', this.unitcost);
            formData.append('totalcost', this.quantity * this.unitcost);

            // Submit the formData
            await axios.post('/saveInventory', formData, {
              headers: {
                'Content-Type': 'multipart/form-data'
              }
            });

            console.log('Record saved successfully'); // Log on success

            // Reset form and close modal
            this.showAddItemModal = false;

            // Alert success message
            alert('Record successfully added!');
            
            // Redirect to /inventory
            window.location.href = '/inventory';

          } catch (error) {
            console.error('Error saving:', error);
            alert('There was an error saving the record. Please try again.');
            window.location.href = '/inventory'; // Optional: Show error notification
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

          async deleteRecord(recordId){
            const confirm = window.confirm("Are you sure that you want to delete this record?");
            if(confirm){
              const ins = await axios.post('delOrder', {
                id: recordId,
            });
            this.getOrder();
            }
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
      }
      </script>
    