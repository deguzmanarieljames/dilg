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
  padding: 20px;
  border-radius: 10px;
  max-width: 600px;
  margin: auto;
  background: #f8f9fa;
}

.modal .close {
  position: absolute;
  top: 10px;
  right: 10px;
  font-size: 24px;
  cursor: pointer;
}

.form-label, h3 {
  color: #333;
}

.d-flex {
  display: flex;
  align-items: center;
}

.text-center {
  text-align: center;
}

.mt-2 {
  margin-top: 10px;
}

.mb-3 {
  margin-bottom: 15px;
}





.navbar {
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  background-color: #f8f9fa; /* Light background */
  border-radius: 10px;
  padding: 10px; /* Add some padding */
  max-width: 100%;
  background: linear-gradient(90deg, #faab80, #ffffff, #80faf4); /* Orange to blue-green gradient */
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
  background-color: #ff4d00; /* Active background color */
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
            <h1>Pending Section</h1>
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/ordering">Pending</a></li>
                <li class="breadcrumb-item active">Ordering</li>
              </ol>
            </nav>
          </div><!-- End Page Title -->
          <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <div class="container-fluid justify-content-center">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link1 " href="/ordering">
                      <i class="bi bi-cart-plus"></i> <span>Orders</span>
                    </a>
                  </li>
                  <div class="divider"></div>
                  <li class="nav-item">
                    <a class="nav-link1 active" href="/orderpending">
                      <i class="bi bi-truck"></i> <span>Incoming</span>
                    </a>
                  </li>
                  <div class="divider"></div>
                  <li class="nav-item">
                    <a class="nav-link1" href="/orderincoming">
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
                      <h5 class="section-title text-center">Pending Orders</h5>
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
                              <th>Purchase Request</th>
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
                                <!-- Conditional Rendering -->
                                <div v-if="ord.receipt">
                                  <template v-if="ord.receipt.endsWith('.pdf')">
                                    <div class="pdf-box" @click="openPdfInBlank(ord.receipt)">
                                      <i class="bx bxs-file-pdf pdf-icon"></i>
                                      <span class="pdf-text">Open PDF</span>
                                    </div>
                                  </template>
                                  <template v-else>
                                    <img ref="receiptverify" :src="`${this.baseURL}/uploads/${ord.receipt}`" @click="viewImageInFullscreen" alt="Returned Image" class="img-large img-thumbnail" />
                                  </template>
                                </div>
                                <div v-else>
                                  <!-- Display the Button if `ord.receipt` is null -->
                                  <div class="button-group">
                                    <a class="btn btn-warning" @click="selectRecord(ord)">
                                      <i class="bx bxs-camera"></i>
                                    </a>
                                  </div>
                                </div>
                              </td>
                              
                              <td>
                                <div class="button-group">
                                  <a class="btn btn-success" @click="generatePurchaseRequest(ord.id)">
                                    <i class="bx ri-file-list-line"></i>
                                  </a>
                                  <a class="btn btn-danger" @click="deleteRecord(ord.id)">
                                    <i class="bx bxs-trash"></i>
                                  </a>
                                </div>
                              </td>                              
                              <td>
                                <template v-if="ord.receipt">
                                  <button class="btn btn-primary" @click="openModal(ord)">Rate</button>
                                </template>
                                <template v-else>
                                  <span class="text-danger">Verify Receipt First!</span>
                                </template>
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
                      <label>Purchase Request:</label>
                      <div v-if="ord.receipt">
                        <template v-if="ord.receipt.endsWith('.pdf')">
                          <div class="pdf-box" @click="openPdfInBlank(ord.receipt)">
                            <i class="bx bxs-file-pdf pdf-icon"></i>
                            <span class="pdf-text">Open PDF</span>
                          </div>
                        </template>
                        <template v-else>
                          <img ref="receiptverify" :src="`${this.baseURL}/uploads/${ord.receipt}`" @click="viewImageInFullscreen" alt="Returned Image" class="img-large img-thumbnail" />
                        </template>
                      </div>
                      <div v-else>
                        <!-- Display the Button if `ord.receipt` is null -->
                        <div class="button-group">
                          <a class="btn btn-warning" @click="selectRecord(ord)">
                            <i class="bx bxs-camera"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="info-group">
                      <br><label>Action:</label>
                      <div class="button-group">
                        <a class="btn btn-success" @click="generatePurchaseRequest(ord.id)">
                          <i class="bx ri-file-list-line"></i>
                        </a>
                        <a class="btn btn-danger" @click="deleteRecord(ord.id)">
                          <i class="bx bxs-trash"></i>
                        </a>
                      </div>
                    </div>
                    <br>                    
                    <div class="info-group text-center">
                      <template v-if="ord.receipt">
                        <button class="btn btn-primary" @click="openModal(ord)">Rate</button>
                      </template>
                      <template v-else>
                        <span class="text-danger">Verify Receipt First!</span>
                      </template>
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
                      <label for="file" class="form-label"><h3><b>Upload Image or PDF:</b></h3></label>
                      <input type="file" class="form-control file-input" id="file" @change="handleFileUpload" accept="image/*,.pdf">
                    </div>
              
                    <div class="col-12 preview-section" v-if="filePreview">
                      <label class="form-label"><b>Preview</b></label>
                      <div class="file-preview-container">
                        <!-- Image Preview -->
                        <img :src="filePreview" v-if="isImageFile" alt="Image Preview" class="image-preview">
                        
                        <!-- PDF Preview -->
                        <div v-else>
                          <b>PDF Uploaded:</b> {{ selectedFile.name }}
                          <iframe :src="filePreview" width="100%" height="400px" class="pdf-preview"></iframe>
                        </div>
                      </div>
                    </div>
              
                    <div class="text-center action-buttons">
                      <button @click.prevent="updateVerification" type="submit" class="btn btn-primary">Submit</button>
                      <button type="reset" class="btn btn-secondary" @click="resetForm">Reset</button>
                    </div>
                  </form>
                </div>
              </div>



              <!-- <div class="modal" v-if="selectedRecord">
                <div class="modal-content">
                  <span class="close" @click="selectedRecord = null">&times;</span>
              
                  <form class="row g-3" enctype="multipart/form-data">
                    <div class="col-12 text-center mb-3">
                      <h3><b>Select Image Source</b></h3>
                    </div>
              
                    <div class="col-12 mb-3">
                      <div class="d-flex justify-content-center">
                        <input type="radio" id="upload" value="upload" v-model="imageSource" class="me-2">
                        <label for="upload" class="me-3">Upload Image</label>
                        
                        <input type="radio" id="capture" value="capture" v-model="imageSource" class="me-2">
                        <label for="capture">Capture Image</label>
                      </div>
                    </div>
              
                    <div class="col-12" v-if="imageSource === 'upload'">
                      <label for="image" class="form-label"><b>Upload Image</b></label>
                      <input type="file" class="form-control" id="image" @change="handleFileUpload" accept="image/*">
                    </div>
              
                    <div class="col-6" v-else-if="imageSource === 'capture'">
                      <label for="camera" class="form-label"><b>Capture Image</b></label>
                      <video id="camera" width="280" height="220" autoplay></video>
                      <div class="d-flex justify-content-between mt-2">
                        <button @click="startCamera" class="btn btn-primary">{{ cameraStarted ? 'Stop Camera' : 'Start Camera' }}</button>
                        <button @click="captureImage" class="btn btn-success" :disabled="!cameraStarted">Capture</button>
                      </div>
                    </div>
              
                    <div class="col-6 d-flex flex-column align-items-center">
                      <label class="form-label"><b>Preview</b></label>
                      <img :src="imagePreview" v-if="imagePreview" alt="Image Preview" class="border rounded" style="max-width: 280px; max-height: 220px;">
                    </div>
              
                    <div class="col-12 text-center mt-4">
                      <button @click="updateReceipt" type="submit" class="btn btn-primary me-2">Submit</button>
                      <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                  </form>
                </div>
              </div> -->
              





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
        baseURL() {
          return axios.defaults.baseURL;
        },
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
              infos:[],
              notifications: [],
              filter: 'all',
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

          openPdfInBlank(fileName) {
          const pdfUrl = `${this.baseURL}/pdfFiles/${fileName}`;
          const newTab = window.open('about:blank', '_blank');
          if (newTab) {
            newTab.document.write(
              `<html><body style="margin:0;padding:0;overflow:hidden;">
                <iframe src="${pdfUrl}" frameborder="0" style="width:100%;height:100%;"></iframe>
              </body></html>`
            );
            newTab.document.close();
          }
        },

        viewImageInFullscreen() {
          // Logic for viewing image in fullscreen
          const imageElement = this.$refs.receiptverify;
          if (imageElement) {
            const newWindow = window.open("", "_blank");
            newWindow.document.write(`<img src="${imageElement.src}" style="width: 100%; height: 100%; object-fit: contain;">`);
            newWindow.document.close();
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
        isValidImage(imageUrl) {
          // A simple check for common image file extensions
          const validExtensions = ['.jpg', '.jpeg', '.png', '.gif'];
          return validExtensions.some(ext => imageUrl.endsWith(ext));
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
            this.selectedFile = file;
            this.isImageFile = file.type.startsWith('image');

            // Generate a preview URL for the file
            this.filePreview = URL.createObjectURL(file);
          },
          async updateVerification() {
            try {
              const formData = new FormData();
              formData.append('file', this.selectedFile);

              const response = await axios.post(`/updateReceipt/${this.selectedRecord}`, formData, {
                headers: { 'Content-Type': 'multipart/form-data' }
              });

              if (response.data.status === 'success') {
                alert('File uploaded and record updated successfully');
                this.selectedRecord = null;
                this.getOrder();
              } else {
                alert('Failed to upload file');
              }
            } catch (error) {
              console.error("Error uploading file:", error);
            }
          },
          resetForm() {
            this.selectedFile = null;
            this.filePreview = null;
            this.isImageFile = false;
          },


          async generatePurchaseRequest(recordId) {
              try {

                  const response = await fetch(`${this.baseURL}/generatePurchaseRequest/${recordId}`, {
                      method: 'POST',
                      headers: {
                          'Content-Type': 'application/json',
                      },
                  });

                  if (response.ok) {
                      const blob = await response.blob();
                      const filename = `Purchase_Request.pdf`;
                      const url = window.URL.createObjectURL(blob);
                      
                      // Create a link element and trigger the download
                      const link = document.createElement('a');
                      link.href = url;
                      link.setAttribute('download', filename);
                      document.body.appendChild(link);
                      link.click();

                      // Cleanup
                      document.body.removeChild(link);
                      window.URL.revokeObjectURL(url);
                      console.log('PDF generated successfully');
                  } else {
                      console.error('Failed to generate PDF');
                  }
                  
                  this.setTimeout();  // If this is meant to stop the loading animation
              } catch (error) {
                  console.error('Error generating PDF:', error);
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




      },
      }
      </script>
    