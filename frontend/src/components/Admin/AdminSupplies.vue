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
            <a class="nav-link active" href="/supplies">
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
          <h1>Supplies</h1>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/supplies">Stocks</a></li>
              <li class="breadcrumb-item active">Supplies</li>
            </ol>
          </nav>
        </div><!-- End Page Title -->
      
          <!-- Section for the Stock Table -->
        <section class="section">
          <div class="row">
            <div class="col-lg-12" style="font-size: medium;">
  
              <div class="card" style="border-left: 30px solid #80faf4;">
                <div class="card-body">
          
                <br>
                <!-- Add Item Button -->
                <div class="button-container">
                  <button @click="showAddItemModal = true" class="noselect">
                    <span class="text">Add Item</span>
                    <span class="icon">
                      <svg viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg"></svg>
                      <span class="buttonSpan">+</span>
                    </span>
                  </button>
                </div>
                <br>
          
                <!-- Search Bar and Show Entries Dropdown -->
                <div class="d-flex justify-content-between align-items-center container-inventory" >
                  <!-- Show Entries Dropdown -->
                  <div class="d-flex align-items-center">
                    <span class="me-2">Show</span>
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
                    <span class="ms-2">entries</span>
                  </div>
          
                  <!-- Centered Dropdowns -->
                  <div class="filters-container d-flex align-items-center">
                    <!-- Filters: Select Classification, Article, Particulars, Current Status -->
                    <select v-model="selectedSupplier" class="form-select me-2" @change="handleSupplierChange">
                      <option value="">Select Supplier</option>
                      <option v-for="supplier in distinctSupplier" :key="supplier" :value="supplier">{{ supplier }}</option>
                    </select>
          
                    <select v-model="selectedItem" class="form-select me-2" :disabled="!selectedSupplier" @change="handleItemChange">
                      <option value="">Select Item</option>
                      <option v-for="item in filteredItem" :key="item" :value="item">{{ item }}</option>
                    </select>
          
                    <select v-model="selectedDescription" class="form-select me-2" :disabled="!selectedItem">
                      <option value="">Select Description</option>
                      <option v-for="description in filteredDescription" :key="description" :value="description">{{ description }}</option>
                    </select>
          
                    <!-- <select v-model="selectedStatus" class="form-select">
                      <option value="">Current Status</option>
                      <option v-for="status in distinctStatus" :key="status" :value="status">{{ status }}</option>
                    </select> -->
                  </div>
          
                  <!-- Search Bar -->
                  <div class="InputContainer">
                    <input placeholder="Search..." id="input" class="input" name="text" type="text" v-model="searchQuery">
                  </div>
                </div>
          
          
                <!-- Backdrop for Darkening Effect -->
                <div v-if="showAddItemModal" class="modal-backdrop"></div>
          
                <!-- Add Item Modal -->
                <transition name="modal-slide">
                  <div v-if="showAddItemModal" class="modal fade show d-block" tabindex="-1" role="dialog" aria-labelledby="addItemModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-xl" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="addItemModalLabel">Add Item</h5>
                                  <button type="button" class="btn-close" @click="showAddItemModal = false" aria-label="Close"></button>
                              </div>
                                <div class="modal-body">
                                    <form class="row g-3" enctype="multipart/form-data">
                                    <!-- Form fields here -->
                                    <div class="col-md-6">
                                        <label for="supplier" class="form-label">Supplier</label>
                                        <input type="text" class="form-control" id="supplier" v-model="supplier" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="item" class="form-label">Item</label>
                                        <input type="text" class="form-control" id="item" v-model="item" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="description" class="form-label">Description</label>
                                        <input type="text" class="form-control" id="description" v-model="description" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="unit_measurement" class="form-label">Unit Measurement</label>
                                        <input type="text" class="form-control" id="unit_measurement" v-model="unit_measurement" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="item_code" class="form-label">Code</label>
                                        <input type="text" class="form-control" id="item_code" v-model="item_code" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="rec_quantity" class="form-label">Receipt Quantity</label>
                                        <input type="text" class="form-control" id="rec_quantity" v-model="rec_quantity">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="rec_unitcost" class="form-label">Receipt Unit Cost</label>
                                        <input type="text" class="form-control" id="rec_unitcost" v-model="rec_unitcost">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="rec_totalcost" class="form-label">Receipt Total Cost</label>
                                        <input type="text" class="form-control" id="rec_totalcost" :value="totalCostFormatted" required disabled placeholder="0">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="no_days" class="form-label">No. of Days</label>
                                        <input type="text" class="form-control" id="no_days" v-model="no_days">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="date" class="form-label">Date Arrived</label>
                                        <input type="date" class="form-control" id="date" v-model="date">
                                    </div>
                            
                                    <div class="row">
                                      <!-- Left Column: Upload and Capture -->
                                      <div class="col-md-6">
                                        <label class="form-label"><strong>Choose Image Source:</strong></label>
                                        <div class="image-source-options d-flex justify-content-around">
                                          <input type="radio" id="upload" value="upload" v-model="imageSource" class="radio-input">
                                          <label for="upload" class="radio-label">Upload Image</label>
                                    
                                          <input type="radio" id="capture" value="capture" v-model="imageSource" class="radio-input">
                                          <label for="capture" class="radio-label">Capture Image</label>
                                        </div>
                                    
                                        <!-- File Upload Section -->
                                        <div v-if="imageSource === 'upload'" class="mt-3">
                                          <label for="image" class="form-label"><strong>Upload Image</strong></label>
                                          <input type="file" class="form-control file-input" id="image" @change="handleFileUpload" accept="image/*">
                                        </div>
                                    
                                        <!-- Camera Capture Section -->
                                        <div v-else-if="imageSource === 'capture'" class="mt-3">
                                          <label for="camera" class="form-label"><strong>Capture Image</strong></label>
                                          <div class="video-container">
                                            <video id="camera" width="100%" height="auto" autoplay></video>
                                            <div class="camera-controls mt-2">
                                              <button type="button" @click="startCamera" class="btn btn-primary">
                                                {{ cameraStarted ? 'Stop Camera' : 'Start Camera' }}
                                              </button>
                                              <button type="button" @click="captureImage" class="btn btn-success" :disabled="!cameraStarted">
                                                Capture
                                              </button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    
                                      <!-- Right Column: Preview Section -->
                                      <div class="col-md-6 text-center">
                                        <label class="form-label"><strong>Image Preview:</strong></label>
                                        <div class="preview-container mt-2">
                                          <img :src="imagePreview" v-if="imagePreview" alt="Image Preview" class="img-fluid image-preview">
                                        </div>
                                      </div>
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
                            <button @click="saveOrUpdate" v-if="status !== 'update'" type="submit" class="button">Submit</button>
                            <button @click="saveOrUpdate" v-if="status === 'update'" type="submit" class="button">Update</button>
                            
                            
                            </div>
                
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                </transition>
          
                <br>
                <br>
                        
          
                <div class="wrapper">
                  <div class="table-container" style="overflow-x: auto; max-height: 500px;">
                    <table class="table-compact">
                      <qrcode-stream @decode="onDecode" />
                    
                      <thead style="width: 100%;">
                        <tr>
                          <th scope="col">Image</th>
                          <th scope="col">Date</th>
                          <th scope="col">Supplier</th>
                          <th scope="col">Item</th>
                          <th scope="col">Description</th>
                          <th scope="col">Unit Measurement</th>
                          <th scope="col">Item Code</th>
                          <th scope="col">Receipt Quantity</th>
                          <th scope="col">Receipt UnitCost</th>
                          <th scope="col">Receipt TotalCost</th>
                          <th scope="col">Issue Quantity</th>
                          <th scope="col">Issue UnitCost</th>
                          <th scope="col">Issue TotalCost</th>
                          <th scope="col">Balance Quantity</th>
                          <th scope="col">Balance UnitCost</th>
                          <th scope="col">Balance TotalCost</th>
                          <th scope="col">No. of Days</th>
                          <th scope="col" class="sticky-col">Action</th>

                        </tr>
                      </thead>
                      <tbody>
                        <tr v-for="sup in paginatedInfo" :key="sup.id" :class="{ 'inactive-row': sup.status === 'inactive' }">
                          <td scope="row">
                            <img :src="`http://dilg.test/backend/uploads/${sup.image}`" alt="Inventory Image" style="max-width: 60px; max-height: 60px;" />
                          </td>
                          <td scope="row">{{ sup.date }}</td>
                          <td scope="row">{{ sup.supplier }}</td>
                          <td scope="row">{{ sup.item }}</td>
                          <td scope="row">{{ sup.description }}</td>
                          <td scope="row">{{ sup.unit_measurement }}</td>
                          <td scope="row">{{ sup.item_code }}</td>
                          <td scope="row">{{ sup.rec_quantity }}</td>
                          <td scope="row">{{ sup.rec_unitcost }}</td>
                          <td scope="row">{{ sup.rec_totalcost }}</td>
                          <td scope="row">{{ sup.issue_quantity }}</td>
                          <td scope="row">{{ sup.issue_unitcost }}</td>
                          <td scope="row">{{ sup.issue_totalcost }}</td>
                          <td scope="row">{{ sup.bal_quantity }}</td>
                          <td scope="row">{{ sup.bal_unitcost }}</td>
                          <td scope="row">{{ sup.bal_totalcost }}</td>
                          <td scope="row">{{ sup.no_days }}</td>
                          <td class="sticky-col">
                            <button class="btn btn-outline-success" @click="selectRecord(sup)"><i class="bx ri-file-list-line"></i></button>
                            <button @click="placeRecord(sup.id)" class="btn btn-warning"><i class="bx bxs-arrow-from-right"></i></button>
                            <button @click="deleteRecord(sup.id)" class="btn btn-danger"><i class="ri-delete-bin-6-line"></i></button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    
                  </div>
                <br>
                <br>
                  <!-- I-update ang table at idagdag ang pagination controls -->
                  <div class="card-body">
                  <!-- Iba pang content ng card... -->
                  <div class="text-center">
                  <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center mb-0">
                      <li class="page-item" :class="{ 'disabled': currentPage === 1 }">
                        <a class="page-link" href="#" @click.prevent="currentPage = Math.max(currentPage - 1, 1)">Previous</a>
                      </li>
                      <li class="page-item" v-for="page in totalPages" :key="page" :class="{ 'active': currentPage === page }">
                        <a class="page-link" href="#" @click.prevent="currentPage = page">{{ page }}</a>
                      </li>
                      <li class="page-item" :class="{ 'disabled': currentPage === totalPages }">
                        <a class="page-link" href="#" @click.prevent="currentPage = Math.min(currentPage + 1, totalPages)">Next</a>
                      </li>
                    </ul>
                  </nav>
                  <br>
                  <div class="page-records">
                  <p>{{ currentPageRecords }}</p>
                </div>
          
                </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>




    <div class="employee-card-container">
      <div v-for="employee in emp" :key="employee.id" class="card employee-card" style="background-color: beige">
        <div class="row g-0 text-center align-items-center">
          <div class="col-md-4 d-flex flex-column align-items-center p-3">
            <div class="image-container mb-2">
              <div :style="getImageStyle(employee.image)"></div>
            </div>
            <h5 class="employee-name">{{ employee.fullname }}</h5>
            <p class="employee-position">{{ employee.position }}</p>
          </div>
          <div class="col-md-8 p-3">
            <h4 class="employee-name">Issued Supplies</h4>
            <!-- Scrollable Table Container -->
            <div class="table-container1">
              <table class="table table-bordered table-hover">
                <thead class="table-header">
                  <tr>
                    <th>Item Code</th>
                    <th>Item</th>
                    <th>Description</th>
                    <th>Quantity</th>
                    <th>Days</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="supply in empsup[employee.fullname]" :key="supply.id" @click="deleteEmployeeRecord(supply.id)">
                    <td>{{ supply.item_code }}</td>
                    <td>{{ supply.item }}</td>
                    <td>{{ supply.description }}</td>
                    <td>{{ supply.issue_quantity }}</td>
                    <td>{{ supply.no_days }}</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    
    

    <div>
      <div style="display: flex; justify-content: center; margin-top: 20px;">
        <button @click="openIssueModal" style="padding: 10px 20px; background-color: #004466; color: white; border: none; border-radius: 4px; font-size: 1em; cursor: pointer;">Issue Supply</button>
      </div>      
    
      <!-- Issue Supply Modal -->
      <div v-if="showIssueModal" style="position: fixed; top: 0; left: 0; width: 100vw; height: 100vh; background-color: rgba(0, 0, 0, 0.5); display: flex; justify-content: center; align-items: center; z-index: 1000;">
        <div style="width: 400px; background-color: white; padding: 20px; border-radius: 8px; box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.2); position: relative;">
          <h3 style="text-align: center; margin-bottom: 20px; font-size: 1.5em; color: #333;">Issue Supply</h3>
      
          <!-- Form for issuing supply -->
          <form @submit.prevent="issueSupply" enctype="multipart/form-data" style="display: flex; flex-direction: column; gap: 15px;">
            
            <!-- Employee Select -->
            <label for="employee" style="font-weight: bold; color: #555;">Select Employee</label>
            <select v-model="selectedEmployee" id="employee" required style="padding: 10px; border: 1px solid #ccc; border-radius: 4px; font-size: 1em;">
              <option value="" disabled>Select an employee</option>
              <option v-for="employee in employees" :value="employee.fullname" :key="employee.id">{{ employee.fullname }}</option>
            </select>
      
            <!-- Supply Select -->
            <label for="supply" style="font-weight: bold; color: #555;">Select Supply</label>
            <select v-model="selectedSupply" id="supply" required style="padding: 10px; border: 1px solid #ccc; border-radius: 4px; font-size: 1em;">
              <option value="" disabled>Select a supply</option>
              <option v-for="supply in supplies" :value="supply.item_code" :key="supply.id">{{ supply.description }}</option>
            </select>
      
            <!-- Quantity Input -->
            <label for="quantity" style="font-weight: bold; color: #555;">Quantity</label>
            <input type="number" v-model="issueQuantity" id="quantity" min="1" required style="padding: 10px; border: 1px solid #ccc; border-radius: 4px; font-size: 1em;" />
      
            <!-- Buttons -->
            <div style="display: flex; justify-content: space-between; gap: 10px; margin-top: 20px;">
              <button type="submit" style="flex: 1; padding: 10px; background-color: #004466; color: white; border: none; border-radius: 4px; font-size: 1em; cursor: pointer;">Issue</button>
              <button type="button" @click="closeIssueModal" style="flex: 1; padding: 10px; background-color: #bbb; color: white; border: none; border-radius: 4px; font-size: 1em; cursor: pointer;">Cancel</button>
            </div>
          </form>
        </div>
      </div>      
    </div>
    







  
  <!-- Modal component to display selected record -->
  <div class="modal-backdrop" v-if="selectedInfo">
    <div class="modal fade show d-block">
      <div class="modal-dialog modal-xl modal-dialog" role="document">
        <div class="modal-content" style="
              font-family: Calibri;
              font-size: 14px;
              line-height: 1.5;
              color: #333;
              background-color: #f9f9f9;
              padding: 20px;">
          <span class="close" @click="selectedInfo = null">&times;</span>
          <div class="col-lg-16">
            <div>
              <p style="text-align: right; margin-right: 30px; font-family: Arial, sans-serif;">
                <i>Annex A.3</i>
              </p>
              <div style="max-width: 800px; margin: 0 auto; padding: 20px; font-family: Arial, sans-serif;">
                <div style="text-align: center; font-size: 23px; font-weight: bold; margin-bottom: 20px;">
                  Inventory Custodian Slip
                </div>
                <div style="margin-bottom: 8px;">
                  <p>Entity Name: <u>D{{selectedInfo.entityname}}</u></p>
                  <p>Fund Cluster: <u>'1</u></p>
                </div>
                <div style="overflow-x: auto;">
                  <table style="width: 100%; border-collapse: collapse; font-size: 10px;">
                    <thead>
                      <tr>
                        <th rowspan="2" style="border: 0.5px solid #000; padding: 7px; text-align: center;">Quantity</th>
                        <th rowspan="2" style="border: 0.5px solid #000; padding: 7px; text-align: center;">Unit</th>
                        <th colspan="2" style="border: 0.5px solid #000; padding: 7px; text-align: center;">Amount</th>
                        <th rowspan="2" style="border: 0.5px solid #000; padding: 7px; text-align: center;">Description</th>
                        <th rowspan="2" style="border: 0.5px solid #000; padding: 7px; text-align: center;">Item No.</th>
                        <th rowspan="2" style="border: 0.5px solid #000; padding: 7px; text-align: center;">Estimated Useful Life</th>
                      </tr>
                      <tr>
                        <th style="border: 0.5px solid #000; padding: 7px; text-align: center;">Unit Cost</th>
                        <th style="border: 0.5px solid #000; padding: 7px; text-align: center;">Total Cost</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td style="border: 0.5px solid #000; padding: 7px; text-align: center;">{{ selectedInfo.quantity }}</td>
                        <td style="border: 0.5px solid #000; padding: 7px; text-align: center;">{{ selectedInfo.unit }}</td>
                        <td style="border: 0.5px solid #000; padding: 7px; text-align: center;">{{ selectedInfo.unitcost }}</td>
                        <td style="border: 0.5px solid #000; padding: 7px; text-align: center;">{{ selectedInfo.totalcost }}</td>
                        <td style="border: 0.5px solid #000; padding: 7px; text-align: center;">{{ selectedInfo.fulldescription }}</td>
                        <td style="border: 0.5px solid #000; padding: 7px; text-align: center;">{{ selectedInfo.propertynumber }}</td>
                        <td style="border: 0.5px solid #000; padding: 7px; text-align: center;">{{ selectedInfo.estimatedlife }}</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
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
    
    
    export default{
    
    computed:{
      filteredNotifications() {
        if (this.filter === 'unread') {
          return this.notifications.filter(notification => notification.status === 'unread');
        }
        return this.notifications;
      },
      unreadCount() {
        return this.notifications.filter(notification => notification.status === 'unread').length;
      },
      imagePreview() {
            if (this.imageSource === 'upload') {
                return this.uploadedImage;
            } else if (this.imageSource === 'capture') {
                return this.capturedImage;
            } else {
                return null; // or a default placeholder image
            }
        },
        totalCost() {
              return this.rec_quantity * this.rec_unitcost;
            },
        totalCostFormatted() {
              // Format total Cost with commas
              return this.totalCost.toLocaleString();
            },
  
        paginatedInfo() {
        const startIndex = (this.currentPage - 1) * this.pageSize;
        const endIndex = startIndex + this.pageSize;
        return this.filteredSupplies.slice(startIndex, endIndex);
        },
        totalPages() {
        return Math.ceil(this.filteredSupplies.length / this.pageSize);
        },
        currentPageRecords() {
        const startIndex = (this.currentPage - 1) * this.pageSize + 1;
        const endIndex = Math.min(startIndex + this.pageSize - 1, this.filteredSupplies.length);
        return `Showing ${startIndex} - ${endIndex} of ${this.filteredSupplies.length} records`;
        },
        
            distinctSupplier() {
            return [...new Set(this.suppliestable.map(sup => sup.supplier))];
            },
            filteredItem() {
            return [...new Set(this.suppliestable.filter(sup => sup.supplier === this.selectedSupplier).map(sup => sup.item))];
            },
            filteredDescription() {
            return [...new Set(this.suppliestable.filter(sup => sup.item === this.selectedItem).map(sup => sup.description))];
            },
            // distinctStatus() {
            // return [...new Set(this.supplies.map(sup => sup.status))];
            // },
            filteredSupplies() {
            let filtered = this.suppliestable;
            if (this.selectedSupplier) {
                filtered = filtered.filter(sup => sup.supplier === this.selectedSupplier);
            }
            if (this.selectedItem) {
                filtered = filtered.filter(sup => sup.item === this.selectedItem);
            }
            if (this.selectedDescription) {
                filtered = filtered.filter(sup => sup.description === this.selectedDescription);
            }
            // if (this.selectedStatus) {
            //     filtered = filtered.filter(sup => sup.status === this.selectedStatus);
            // }
            return filtered.filter(sup => {
                return (
                sup.supplier.toLowerCase().includes(this.searchQuery.toLowerCase()) ||
                sup.item.toLowerCase().includes(this.searchQuery.toLowerCase()) ||
                sup.description.toLowerCase().includes(this.searchQuery.toLowerCase()) ||
                sup.unit_measurement.toLowerCase().includes(this.searchQuery.toLowerCase()) ||
                sup.item_code.toString().toLowerCase().includes(this.searchQuery.toLowerCase())
                // sup.status.toLowerCase().includes(this.searchQuery.toLowerCase())
                );
            });
            },
        
        },
        data(){
            return{
                notifications: [],
                filter: 'all',
                showAddItemModal: false,  // Para ipakita o itago ang Add Item modal
                id: "",
                suppliestable:[],
                supplies:[],
                emp:[],
                empsup:[],
                employeeSupplies: {},
                info:[],
                infos:[],
                date: '',
                supplier: '',
                showIssueModal: false,
                employees: [],
                supplies: [],
                selectedEmployee: '',
                selectedSupply: '',
                issueQuantity: 1,
                item: '',
                description: '',
                unit_measurement: '',
                item_code: '',
                rec_quantity: '',
                rec_unitcost: '',
                rec_totalcost: '',
                issue_quantity: '',
                issue_unitcost: '',
                issue_totalcost: '',
                bal_quantity: '',
                bal_unitcost: '',
                bal_totalcost: '',
                no_days: '',
                image: null,
                status: "",
                statusId: "",
                mediaStream: null,
                cameraStarted: false,
                capturedImage: null,
                imageDataUrl: "",
                cameraButtonText: 'Start Camera',
                selectedImageFile: null,
                imageSource: 'upload',
                imagePreview: '',
                searchQuery: '',
                selectedInfo: null,
                selectedSupplier: '',
                selectedItem: '',
                selectedDescription: '',
                selectedStatus: '',
                currentPage: 1, // Current page number
                pageSize: 10, // Default page size
        
            }
        },
        created(){
            this.getSuppliesTable()
            this.user();
            this.getUserInfo(this.infos.fullname);
            this.getInfo();
            this.getEmployees();
            this.getEmployeeSupplies();
            this.fetchNotifications();

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
          openIssueModal() {
            this.showIssueModal = true;
            this.fetchSupplies();
            this.fetchEmployees();
          },
          closeIssueModal() {
            this.showIssueModal = false;
            this.selectedEmployee = '';
            this.selectedSupply = '';
            this.issueQuantity = 1;
          },
          async fetchSupplies() {
            try {
              const response = await axios.get('/getSupplies');
              this.supplies = response.data;
            } catch (error) {
              console.error(error);
            }
          },
          async fetchEmployees() {
            try {
              const response = await axios.get('/getEmployeesSup');
              this.employees = response.data;
            } catch (error) {
              console.error(error);
            }
          },
          async issueSupply() {
            if (!this.selectedEmployee || !this.selectedSupply || !this.issueQuantity) {
              alert('Please select all fields');
              return;
            }

            // Create a FormData object
            const formData = new FormData();
            formData.append('fullname', this.selectedEmployee);
            formData.append('item_code', this.selectedSupply);
            formData.append('issue_quantity', this.issueQuantity);

            try {
              const response = await axios.post('/issueSupply', formData, {
                headers: {
                  'Content-Type': 'multipart/form-data'
                }
              });
              
              alert(response.data.success);
              this.closeIssueModal();
              this.getEmployeeSupplies();
              this.getSuppliesTable();
            } catch (error) {
              alert(error.response.data.error || 'Failed to issue supply');
            }
          },








        selectRecord(supplies) {
            this.selectedInfo = supplies;
        },
        generateQRCodeUrl(id) {
            return `https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=${id}`;
        },
        handleSupplierChange() {
            this.selectedItem = '';
            this.selectedDescription = '';
            },
        handleItemChange() {
            this.selectedDescription = '';
            },
        handleFileUpload(event) {
                const file = event.target.files[0];
                if (file) {
                    this.uploadedImage = URL.createObjectURL(file);
                    this.selectedImageFile = file;
                    this.imagePreview = this.uploadedImage;
                }
            },
            updatePageSize(size) {
        this.pageSize = size;
        this.currentPage = 1; // Reset to first page
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
        
            deleteRecord(id) {
            // Implement your delete logic here
            },
            /*async deleteRecord(recordId){
                const confirm = window.confirm("are you sure you want to delete this?");
                if (confirm){
                    await axios.post("del", {
                    id: recordId,
                });
                this.getInventory();
                }
            }, */




            
            async getSuppliesTable(){
                try {
                    const sup = await axios.get('getSupplies');
                    this.suppliestable = sup.data;
                    console.log(this.suppliestable);
                } catch (error) {
                    console.log(error);
                }
            },


            async getEmployees() {
              try {
                const employees = await axios.get('getEmployeesSup');
                this.emp = employees.data;
              } catch (error) {
                console.log(error);
              }
            },

            async getEmployeeSupplies() {
              try {
                const response = await axios.get('getEmployeeSupplies');
                const data = response.data;

                // Organize supplies by employee's fullname
                const organizedData = {};
                data.forEach(supply => {
                  if (!organizedData[supply.fullname]) {
                    organizedData[supply.fullname] = [];
                  }
                  organizedData[supply.fullname].push(supply);
                });

                this.empsup = organizedData; // Now empsup is an object grouped by fullname
              } catch (error) {
                console.log(error);
              }
            },


            







            async getInfo() {
                try {
                const response = await axios.get('getdata');
                this.info = response.data;
                // Extract employee names from info and store in employeeOptions
                this.employeeOptions = this.info.map(info => info.acc_officer);
                } catch (error) {
                console.log(error);
                }
            },
            async save() {
                try {
                    // Compute totalcost
            
                    // Create a FormData object and append the computed totalcost
                    const formData = new FormData();
                    if (this.selectedImageFile) {
                        formData.append('image', this.selectedImageFile);
                    }
                    else if (this.capturedImage) {
                        // Convert the captured image to a file
                        const blob = await fetch(this.capturedImage).then(res => res.blob());
                        const file = new File([blob], `image_${Date.now()}.png`, { type: 'image/png' });
                        formData.append('image', file);
                    }
            
                    // Append other form data including the computed totalcost
                    formData.append('supplier', this.supplier);
                    formData.append('item', this.item);
                    formData.append('description', this.description);
                    formData.append('unit_measurement', this.unit_measurement);
                    formData.append('item_code', this.item_code);
                    formData.append('rec_quantity', this.rec_quantity);
                    formData.append('rec_unitcost', this.rec_unitcost);
                    formData.append('rec_totalcost', this.rec_quantity * this.rec_unitcost);
                    formData.append('no_days', this.no_days);
                    formData.append('date', this.date);
            
                    // Now you can submit the formData to your backend endpoint using Axios or any other method
                    await axios.post('/saveSupplies', formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                    });
            
                    // Reset the form and emit the 'data-saved' event
                    this.resetForm();
                    this.$emit('data-saved');
            
                    // Trigger notification
                    await axios.post('/triggerNotification')
                    .then(response => {
                        console.log('Notification triggered successfully');
                    })
                    .catch(error => {
                        console.error('Error triggering notification:', error);
                    });
            
                } catch (error) {
                    console.error('Error saving:', error);
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
        

        
            async saveOrUpdate() {
            if (this.status === "update") {
                await this.updateRecord();
            } else {
                await this.save();
            }
            },
        

        async updateRecord() {
            try {
                const formData = new FormData();
        
                // Append the updated data
                formData.append('id', this.statusId);
                formData.append('supplier', this.supplier);
                formData.append('item', this.item);
                formData.append('description', this.description);
                formData.append('unit_measurement', this.unit_measurement);
                formData.append('item_code', this.item_code);
                formData.append('rec_quantity', this.rec_quantity);
                formData.append('rec_unitcost', this.rec_unitcost);
                formData.append('rec_totalcost', this.rec_quantity * this.rec_unitcost);
                formData.append('no_days', this.no_days);
                formData.append('date', this.date);
    
        
                // Always append the image field, even if it's not changed
                if (this.capturedImage) {
                    const blob = await fetch(this.capturedImage).then(res => res.blob());
                    const file = new File([blob], `image_${Date.now()}.png`, { type: 'image/png' });
                    formData.append('image', file);
                    alert("Error a");
                } else if (this.selectedImageFile) {
                    formData.append('image', this.selectedImageFile);
                    alert("Error b");
                } else {
                    // If the image is not changed, you can append the existing image data
                    formData.append('image', this.imagePreview);
                    alert(this.imagePreview);
                }
        
                const response = await axios.post(`/updateSupplies/${this.statusId}`, formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                });
        
                if (response.data.status === 'success') {
                    this.resetForm();
                    this.status = ""; // reset status after update
                    this.getSuppliesTable();
                    console.log("Record updated successfully");
                    alert("Success 1");
                } else {
                    console.error("Failed to update record:", response.data.message);
                    alert("Error 2");
                }
            } catch (error) {
                console.error("Error updating record:", error);
                alert("Error 3");
            }
        },
        
        placeRecord(recordId) {
            // set status to update and statusId to the record id
            this.status = "update";
            this.statusId = recordId;
        
            // fetch the record details and set them to the form
            const record = this.suppliestable.find(sup => sup.id === recordId);
            this.date = record.date;
            this.supplier = record.supplier;
            this.item = record.item;
            this.description = record.description;
            this.unit_measurement = record.unit_measurement;
            this.item_code = record.item_code;
            this.rec_quantity = record.rec_quantity;
            this.rec_unitcost = record.rec_unitcost;
            this.rec_totalcost = record.rec_totalcost;
            // this.issue_quantity = record.issue_quantity;
            // this.issue_unitcost = record.issue_unitcost;
            // this.issue_totalcost = record.issue_totalcost;
            // this.bal_quantity = record.bal_quantity;
            // this.bal_unitcost = record.bal_unitcost;
            // this.bal_totalcost = record.bal_totalcost;
            this.no_days = record.no_days;
            
            this.imagePreview = `http://dilg.test/backend/uploads/${record.image}`;
            this.showAddItemModal = true; // Ito ang nagtatakda na ipapakita ang modal
        
            console.log(recordId);
        },
    
        
            resetForm() {
                    this.date = "",
                    this.supplier = "",
                    this.item = "",
                    this.description = "",
                    this.unit_measurement = "",
                    this.item_code = "",
                    this.rec_quantity = "",
                    this.rec_unitcost = "",
                    this.rec_totalcost = "",
                    // this.issue_quantity = "",
                    // this.issue_unitcost = "",
                    // this.issue_totalcost = "",
                    // this.bal_quantity = "",
                    // this.bal_unitcost = "",
                    // this.bal_totalcost = "",
                    this.no_days = "",
                    this.cameraStarted = false;
                    this.capturedImage = null;
                    this.uploadedImage = null;
                    this.imagePreview = "";
                },
        
            
            async deleteRecord(recordId){
            const confirm = window.confirm("Are you sure that you want to delete this record?");
            if(confirm){
                const ins = await axios.post('delSupplies', {
                id: recordId,
            });
            this.getSuppliesTable();
            }
            },

            async deleteEmployeeRecord(recordId){
              const confirm = window.confirm("Are you sure that you want to delete this record?");
              if(confirm){
                  const ins = await axios.post('delEmployeeSupplies', {
                  id: recordId,
              });
              this.getSuppliesTable();
              this.getEmployeeSupplies();
              }
            },
        
        
            async updateAvailability(id, newAvailability) {
            try {
                const response = await axios.post('updateAvailability', { id, availability: newAvailability });
                if (response.status === 200) {
                console.log(response.data);
                this.getInventory(); // Assuming this function fetches the updated data
                } else {
                console.error('Error updating availability:', response.data.error);
                }
            } catch (error) {
                console.error('Network error:', error.message);
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
                borderRadius: '50%', // Make the background circular
                };
            },
        
            async logout(){
                sessionStorage.removeItem('token');
                this.$router.push('/signin');
            },
        },
        beforeDestroy() {
            if (this.mediaStream) {
            this.mediaStream.getTracks().forEach(track => {
                track.stop();
            });
            }
        },
        }
    </script>
  
   
  <style scoped>
  .page-link {
    z-index: 0;
  }









  .image-container {
    display: flex;
    align-items: center;
    width: 100px;
    height: 100px;
    border-radius: 50%; /* Circular container */
  }
  
  .image-container div {
    width: 100%;
    height: 100%;
    background-size: cover; /* Ensures the image covers the whole area */
    background-position: center center; /* Centers the image */
    background-repeat: no-repeat; /* Avoids repeating the image */
    border-radius: 50%; /* Circular shape */
  }


/* Container for the scrollable table */
.table-container1 {
  max-height: 200px; /* Set a fixed height for scrollable area */
  overflow-y: auto;
  overflow-x: hidden; /* Optional: hides horizontal scroll */
  padding-right: 5px; /* Optional: adds some space for scrollbar */
}

/* Styling for the rest of the card layout */
.employee-card-container {
  display: grid;
  grid-template-columns: 1fr;
  gap: 20px;
  max-width: 1600px;
  margin: auto;
  padding: 10px;
}

@media (min-width: 768px) {
  .employee-card-container {
    grid-template-columns: 1fr 1fr;
  }
}

.employee-card {
  border: 1px solid #ddd;
  border-radius: 8px;
  box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  background-color: #fff;
}

.image-container {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 100px;
  height: 100px;
  overflow: hidden;
  border-radius: 50%;
  background-color: #f0f0f0;
  border: 2px solid #ddd;
}

.image-container div {
  width: 100%;
  height: 100%;
  background-size: cover;
  background-position: center;
}

.employee-name {
  font-weight: bold;
  font-size: 1.2em;
  color: #333;
}

.employee-position {
  font-size: 1em;
  color: #666;
}

.table {
  margin: 0;
  font-size: 0.85em;
}

.table-header th {
  background-color: #004466;
  color: #ffffff;
  font-weight: 600;
}

.table-bordered th, .table-bordered td {
  border-color: #ccc;
}

.table-hover tbody tr:hover {
  background-color: #f9f9f9;
}








.form-group {
  padding: 20px;
  background-color: #f8f9fa;
  border-radius: 8px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.form-label {
  font-weight: bold;
  color: #333;
}

.image-source-options {
  gap: 20px;
}

.radio-label {
  display: inline-block;
  padding: 10px 20px;
  border: 2px solid #007bff;
  border-radius: 20px;
  color: #007bff;
  cursor: pointer;
  transition: background-color 0.3s ease, color 0.3s ease;
}

.radio-input {
  display: none;
}

.radio-input:checked + .radio-label {
  background-color: #007bff;
  color: #ffffff;
}

.file-input {
  padding: 8px;
  border-radius: 6px;
}

.video-container {
  display: flex;
  flex-direction: column;
  align-items: center;
  border: 1px solid #dee2e6;
  padding: 15px;
  border-radius: 8px;
  background-color: #e9ecef;
}

.camera-controls {
  display: flex;
  gap: 10px;
  justify-content: center;
}

.preview-container {
  display: flex;
  justify-content: center;
  align-items: center;
  border: 1px solid #dee2e6;
  padding: 15px;
  border-radius: 8px;
  background-color: #f8f9fa;
  height: 85%;
}

.image-preview {
  max-width: 100%;
  max-height: 250px;
  border-radius: 8px;
  border: 1px solid #ced4da;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}














  
  
  /* Backdrop for darkening effect */
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
  
  
  .page-records {
    text-align: left;
    float: left;
  }
  
  /* Container for the button */
  .button-container {
    display: flex;
    justify-content: flex-end; /* Aligns items to the far right */
    padding: 10px; /* Optional padding for spacing */
  }
  
  /* Style for the button */
  button.noselect {
    width: 140px; /* Adjust as needed */
    height: 40px;
    cursor: pointer;
    display: flex;
    align-items: center;
    background: #00a600;
    border: none;
    border-radius: 5px;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.15);
    position: relative; /* To position the icon absolutely within the button */
  }
  
  button.noselect,
  button.noselect span {
    transition: 200ms;
  }
  
  button.noselect .text {
    color: white;
    font-weight: bold;
    font-size: 15px; /* Reduced font size */
    margin-left: 15px; /* Adjust as needed */
  }
  
  button.noselect .icon {
    position: absolute;
    right: 10px; /* Position the icon inside the button */
    height: 40px;
    width: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  
  button.noselect svg {
    width: 15px;
    fill: #eee;
  }
  
  button.noselect:hover {
    background: #00a600;
  }
  
  button.noselect:active {
    background: #00cc00;
  }
  
  button.noselect:hover .text {
    color: transparent;
  }
  
  button.noselect:hover .icon {
    left: 50%;
    transform: translateX(-65%); /* Centering the icon on hover */
    width: 40px; /* Keeps the icon size consistent */
    border-left: none;
  }
  
  button.noselect:focus {
    outline: none;
  }
  
  button.noselect:active .icon svg {
    transform: scale(0.8);
  }
  
  .buttonSpan {
    color: white;
    font-size: 24px;
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
  
  .button-container {
    margin-left: auto; /* Align the Add Item button to the right */
  }
  
  .input-group {
    margin-top: 10px; /* Space between the search bar and dropdowns */
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
  
  
  /* For the container */
  .table-container {
    position: relative;
    overflow-x: auto; /* Ensure horizontal scroll works */
  }
  
  /* For the sticky columns */
  .sticky-col {
    position: sticky;
    right: 0;
    background-color: white; /* Set background color to white */
    z-index: 1; /* Ensure it stays on top of scrolling content */
    border-left: 2px solid #ccc; /* Add left border for the sticky column */
  }
  
  /* Adjust the position for the second-to-last column */
  .sticky-col:nth-last-child(2) {
    right: 100px; /* Adjust this based on your column widths */
    background-color: white; /* Ensure background is also white for this column */
    box-shadow: -3px 0 6px rgba(0, 0, 0, 0.2); /* Same shadow for consistency */
    border-left: 2px solid #ccc; /* Add left border for the sticky column */
  }
  
  /* Additional styles for header cells in sticky columns */
  th.sticky-col {
    background-color: white; /* Background for header of sticky columns */
    z-index: 2; /* Ensure headers are above body rows */
    box-shadow: -3px 0 6px rgba(0, 0, 0, 0.25); /* Slightly stronger shadow for headers */
    border-left: 2px solid #ccc; /* Add left border for sticky header */
  }
  
  
  /* General table styling */
  table {
    width: 100%;
    border-collapse: collapse;
    font-size: 13px; /* Adjust font size as needed */
  }
  
  th, td {
    padding: 3px 7px; /* Adjust padding for better readability */
    text-align: center;
    white-space: nowrap; /* Prevent line breaks in cells */
    overflow: hidden; /* Hide overflowed content */
    text-overflow: ellipsis; /* Show ellipsis for overflowed content */
  }
  
  th {
    height: auto; /* Adjust height for header */
    white-space: nowrap;
  }
  
  /* Add shadow and padding to each row */
  tbody tr {
    padding: 10px; /* Add padding to the row */
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); /* Add shadow to the bottom */
    margin-bottom: 10px; /* Add space between rows */
    transition: box-shadow 0.3s; /* Smooth shadow transition on hover */
  }
  
  tbody tr:hover {
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3); /* Darker shadow on hover */
  }
  
  
  
  
  
  /* Optional: Add a wrapper for horizontal scrolling */
  .wrapper {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch; /* Enable smooth scrolling on mobile */
  } 
   .container-inventory{
      flex-wrap: wrap;
  
   
     
    }
  
  @media (max-width: 600px) {
  
   
    .form-select{
      width: 70%;
      padding: 10px;
      font-size: .6rem;
      font-weight: 400;
      line-height: 1.5;
      color: var(--bs-body-color);
    }
    .InputContainer{
      margin-top: 10px;
    }
    .me-2,.ms-2{
      font-size: 13px
    }
    .container-inventory{
      flex-wrap: wrap;
      gap: 10px;
     
    }
    .filters-container {
      flex-direction: column; /* Stack filters vertically */
      align-items: stretch; /* Stretch to full width */
    }
  
    .filters-container select {
      width: 100%; /* Full width on smaller screens */
      margin-bottom: 10px; /* Space between selects */
    }
  
    .InputContainer {
      width: 100%; /* Full width for search bar */
    }
  
    .button-group {
      flex-direction: column; /* Stack buttons vertically */
      align-items: center; /* Center buttons */
    }
  
    .button1 {
      width: 100%; /* Full width for buttons */
      margin-bottom: 10px; /* Space between buttons */
    }
    .InputContainer{
      width: 210px;
      box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.075);
    }
    .button-group {
      flex-direction: column; /* Stack buttons vertically */
      align-items: stretch; /* Stretch buttons to full width */
    }
  
    .button {
      width: 100%; /* Full width for buttons */
      margin-bottom: 10px; /* Space between buttons */
    }
  
    .form-label {
      font-size: 1rem; /* Adjust label font size */
    }
  
    .form-control, .form-select {
      font-size: 1rem; /* Adjust input font size */
      padding: 0.5rem; /* Padding for inputs */
    }
  
    .img-fluid {
      max-width: 100%; /* Ensure images do not overflow */
      height: auto; /* Maintain aspect ratio */
    }
  
    /* Adjust video for responsiveness */
    video {
      max-width: 100%; /* Video responsive */
      height: auto; /* Maintain aspect ratio */
    }
  
  }
  
  
  .inactive-row {
    background-color: #f0f0f0; /* Light gray background */
    color: #a9a9a9; /* Darker gray text */
    opacity: 0.6; /* Optional: slightly faded appearance */
  }
  
  </style>
  