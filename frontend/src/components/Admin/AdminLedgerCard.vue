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
              <a class="nav-link" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Documents</span><i class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="forms-nav" class="nav-content " data-bs-parent="#sidebar-nav">
                <li>
                  <a href="propertysticker">
                    <i class="bi bi-sticky"></i><span>Property Sticker</span>
                  </a>
                </li>
                <li>
                  <a class="nav-link active" href="ledgercard">
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
          <h1>Documents</h1>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </nav>
        </div><!-- End Page Title -->
    
        <section class="section dashboard">
          <div class="row">
          
                          <!-- Card 1 -->
                <div class="col-lg-4" @click="openModal(1)">
                  <div class="card info-card inventory-card">
                    <div class="card-body">
                      <div class="image-container">
                        <img src="./img/IIRUSP.png" class="img-fluid zoom-on-hover" alt="Document 1 Image">
                      </div>
                      <div class="mt-3">
                        <h5 class="card-title mt-2">INVENTORY AND INSPECTION REPORT OF UNSERVICEABLE SEMI-EXPENDABLE PROPERTY</h5>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Card 2 -->
                <div class="col-lg-4" @click="openModal(2)">
                  <div class="card info-card report-card">
                    <div class="card-body">
                      <div class="image-container">
                        <img src="./img/RPCSP.png" class="img-fluid zoom-on-hover" alt="Document 2 Image">
                      </div>
                      <div class="mt-3">
                        <h5 class="card-title mt-2">REPORT ON THE PHYSICAL COUNT OF SEMI-EXPENDABLE PROPERTY</h5>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Card 3 -->
                <div class="col-lg-4" @click="openModal(3)">
                  <div class="card info-card registry-card">
                    <div class="card-body">
                      <div class="image-container">
                        <img src="./img/RegSPI.png" class="img-fluid zoom-on-hover" alt="Document 3 Image">
                      </div>
                      <div class="mt-3">
                        <h5 class="card-title mt-2">REGISTRY OF SEMI-EXPENDABLE PROPERTY ISSUED</h5>
                      </div>
                    </div>
                  </div>
                </div>

                  </div>
      
          <!-- Modal 1 -->
          <div :class="{ 'modal-open': isModalOpen && modalIndex === 1 }">
            <div class="modal-overlay">
              <div class="modal-dialog">
                <div class="modal-content">

                  <div class="modal-header d-flex align-items-center" style="width: 100%;">
    <h5 class="modal-title text-white" style="background-color: seagreen; padding: 5px 15px; border-radius: 5px; text-transform: capitalize; flex-grow: 1; display: flex; justify-content: center; align-items: center;">
        Inventory and inspection report of unserviceable semi-expendable property
    </h5>
   
    <button class="closebtn" type="button" @click="closeModal">
                    <span class="X"></span>
                    <span class="Y"></span>
                    <div class="close">Close</div>
                  </button>
</div>


                                      <br>
                                      <div class="d-flex justify-content-between align-items-center">
                      <!-- Left side: Tabs Navigation -->
                      <ul class="nav nav-tabs" id="inventoryTabs">
                        <li class="nav-item">
                          <span 
                            class="nav-link" 
                            :class="{ active: currentTab === 'view' }" 
                            @click="currentTab = 'view'"
                          >
                            View Records
                          </span>
                        </li>
                        <li class="nav-item">
                          <span 
                            class="nav-link" 
                            :class="{ active: currentTab === 'update' }" 
                            @click="currentTab = 'update'"
                          >
                            Update Record
                          </span>
                        </li>
                      </ul>

                    <!-- Right side: Date Pickers, Show PDF, and Download PDF -->
                    <div class="d-flex align-items-center gap-2">
                      <!-- Start and End Date Pickers -->
                    <input 
                      type="date" 
                      v-model="startDate" 
                      class="form-control-sm custom-datepicker datepicker-start" 
                      placeholder="Start Date"
                    >

                    <input 
                      type="date" 
                      v-model="endDate" 
                      class="form-control-sm custom-datepicker datepicker-end" 
                      placeholder="End Date"
                    >


                      <!-- Show PDF Button -->
                      <!-- Show PDF Button -->
                    <button 
                      v-if="!showPdf" 
                      class="showbtn" 
                      @click="IIRUSPshowPDF"
                    >
                      <span class="transition"></span>
                      <span class="gradient"></span>
                      <span class="label">
                        <i class="fas fa-file-pdf"></i> Show PDF
                      </span>
                    </button>

                    <!-- Close PDF Button -->
                    <button 
                      v-else 
                      class="closepdfbtn" 
                      @click="showPdf = false"
                    >
                      <span class="transition"></span>
                      <span class="gradient"></span>
                      <span class="label">
                        <i class="fas fa-times"></i> Close PDF
                      </span>
                    </button>

                    <!-- Download PDF Button -->
                    <button 
                      class="downloadbtn ms-auto" 
                      @click="IIRUSPdownloadPDF"
                    >
                      <div class="button-wrapper">
                        <div class="text">Download PDF</div>
                        <span class="icon">
                          <svg 
                            xmlns="http://www.w3.org/2000/svg" 
                            aria-hidden="true" 
                            role="img" 
                            width="2em" 
                            height="2em" 
                            preserveAspectRatio="xMidYMid meet" 
                            viewBox="0 0 24 24"
                          >
                            <path 
                              fill="none" 
                              stroke="currentColor" 
                              stroke-linecap="round" 
                              stroke-linejoin="round" 
                              stroke-width="2" 
                              d="M12 15V3m0 12l-4-4m4 4l4-4M2 17l.621 2.485A2 2 0 0 0 4.561 21h14.878a2 2 0 0 0 1.94-1.515L22 17"
                            ></path>
                          </svg>
                        </span>
                      </div>
                    </button>

                    </div>

                        </div>

          <br>        
                  <div class="modal-body">
                    <!-- Responsive Container -->
                    <div class="d-flex flex-column flex-lg-row">
                      <!-- Table Content -->
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
    </div>
    <hr>
                      <div class="d-flex justify-content-between align-items-center">
    <!-- Show Entries Dropdown -->
  
                      <div class="table-responsive w-100">
                        <div v-show="currentTab === 'view'" id="view-tab">
                          <table class="office-table">
                            <thead>
  <tr>
    <th colspan="9" class="header-title" style="background-color: #123C5D ; color: white; font-size: 13px; letter-spacing: 1px; font-family: 'Roboto', sans-serif; padding: 5px 8px;font-weight: normal;">INVENTORY INSPECTON AND DISPOSAL</th>
  </tr>
  <tr>
    <th rowspan="2" style="background-color: #123C5D; color: white; font-size: 11px; letter-spacing: 1px; font-family: 'Roboto', sans-serif; padding: 5px 8px; font-weight: normal;">Date Acquired</th>
    <th rowspan="2" style="background-color: #123C5D; color: white; font-size: 11px; letter-spacing: 1px; font-family: 'Roboto', sans-serif; padding: 5px 8px; font-weight: normal;">Particulars/Articles</th>
    <th rowspan="2" style="background-color: #123C5D; color: white; font-size: 11px; letter-spacing: 1px; font-family: 'Roboto', sans-serif; padding: 5px 8px; font-weight: normal;">Semi-Expendable<br>Property No.</th>
    <th rowspan="2" style="background-color: #123C5D; color: white; font-size: 11px; letter-spacing: 1px; font-family: 'Roboto', sans-serif; padding: 5px 8px; font-weight: normal;">Quantity</th>
    <th rowspan="2" style="background-color: #123C5D; color: white; font-size: 11px; letter-spacing: 1px; font-family: 'Roboto', sans-serif; padding: 5px 8px; font-weight: normal;">Unit <br>Cost</th>
    <th rowspan="2" style="background-color: #123C5D; color: white; font-size: 11px; letter-spacing: 1px; font-family: 'Roboto', sans-serif; padding: 5px 8px; font-weight: normal;">Total <br>Cost</th>
    <th rowspan="2" style="background-color: #123C5D; color: white; font-size: 11px; letter-spacing: 1px; font-family: 'Roboto', sans-serif; padding: 5px 8px; font-weight: normal;">Accumulated<br>Impairment</th>
    <th rowspan="2" style="background-color: #123C5D; color: white; font-size: 11px; letter-spacing: 1px; font-family: 'Roboto', sans-serif; padding: 5px 8px; font-weight: normal;">Carrying <br>Amount</th>
    <th rowspan="2" style="background-color: #123C5D; color: white; font-size: 11px; letter-spacing: 1px; font-family: 'Roboto', sans-serif; padding: 5px 8px; font-weight: normal;">Remarks</th>
</tr>

</thead>
                            <tbody>

                         
                             
                                <tr v-for="unservice in paginatedInfo" :key="unservice.id" @click="openUpdateTab(unservice.id)">
                              

                                <td>{{ unservice.issue_date }}</td>
                                <td>{{ unservice.fulldescription }}</td>
                                <td>{{ unservice.propertynumber }}</td>
                                <td>{{ unservice.rec_quantity }}</td>
                                <td>{{ unservice.rec_unitcost }}</td>
                                <td>{{ unservice.rec_totalcost }}</td>
                                <td>{{ unservice.accimploss }}</td>
                                <td>{{ unservice.rec_totalcost }}</td>
                                <td>{{ unservice.remarks }}</td>
                              </tr>
                             


        
                        
                            </tbody>
                          </table>
                        </div>
                        <hr>

              <!-- Pagination... -->
                    <div class="card-body">
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

          
                        <div v-show="currentTab === 'update'" id="update-tab">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Update Record</h5>
                              <button type="button" class="close" @click="cancelUpdate" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form @submit.prevent="updateRecord">
                                <div class="container">
                                  <!-- Group 1 -->
                                  <div class="row">
                                    <h3>Group 1</h3>
                                    <div class="form-group col-12 col-md-6 col-lg-4">
                                      <label for="issue_date">Date Acquired</label>
                                      <input type="date" id="issue_date" v-model="issue_date" class="form-control" disabled>
                                    </div>
                                    <div class="form-group col-12 col-md-6 col-lg-8">
                                      <label for="description">Particulars/Articles</label>
                                      <input type="text" id="description" v-model="fulldescription" class="form-control" disabled>
                                    </div>
                                    <div class="form-group col-12 col-md-6 col-lg-4">
                                      <label for="propertynumber">Semi-Expendable Property No.</label>
                                      <input type="text" id="propertynumber" v-model="propertynumber" class="form-control" disabled>
                                    </div>
                                    <div class="form-group col-12 col-md-6 col-lg-4">
                                      <label for="rec_quantity">Quantity</label>
                                      <input type="text" id="rec_quantity" v-model="rec_quantity" class="form-control" disabled>
                                    </div>
                                    <div class="form-group col-12 col-md-6 col-lg-4">
                                      <label for="rec_unitcost">Unit Cost</label>
                                      <input type="text" id="rec_unitcost" v-model="rec_unitcost" class="form-control" disabled>
                                    </div>
                                    <div class="form-group col-12 col-md-6 col-lg-4">
                                      <label for="rec_totalcost">Total Cost</label>
                                      <input type="text" id="rec_totalcost" v-model="rec_totalcost" class="form-control" disabled>
                                    </div>
                                    <div class="form-group col-12 col-md-6 col-lg-4">
                                      <label for="accimploss">Accumulated Impairment</label>
                                      <input type="text" id="accimploss" v-model="accimploss" class="form-control" disabled>
                                    </div>
                                    <div class="form-group col-12 col-md-6 col-lg-4">
                                      <label for="remarks">Remarks</label>
                                      <input type="text" id="remarks" v-model="remarks" class="form-control" disabled>
                                    </div>
                                  </div>
                                  <hr>
                                  <!-- Group 2 -->
                                  <div class="row">
                                    <h3>Group 2</h3>
                                    <h4>Disposal</h4>
                                    <div class="form-group col-12 col-md-6 col-lg-4">
                                      <label for="sale">Sale</label>
                                      <input type="text" id="sale" v-model="sale" class="form-control" disabled>
                                    </div>
                                    <div class="form-group col-12 col-md-6 col-lg-8">
                                      <label for="transfer">Transfer</label>
                                      <input type="text" id="transfer" v-model="transfer" class="form-control" disabled>
                                    </div>
                                    <div class="form-group col-12 col-md-6 col-lg-4">
                                      <label for="destruction">Destruction</label>
                                      <input type="text" id="destruction" v-model="destruction" class="form-control" disabled>
                                    </div>
                                    <div class="form-group col-12 col-md-6 col-lg-4">
                                      <label for="others">Others(Specify)</label>
                                      <input type="text" id="others" v-model="others" class="form-control" disabled>
                                    </div>
                                    <div class="form-group col-12 col-md-6 col-lg-4">
                                      <label for="total">Total</label>
                                      <input type="text" id="total" v-model="total" class="form-control" disabled>
                                    </div>
                                    <h4>Appraised Value</h4>
                                    <div class="form-group col-12 col-md-6 col-lg-4">
                                      <label for="appraised_value">Appraised Value</label>
                                      <input type="text" id="appraised_value" v-model="appraised_value" class="form-control" disabled>
                                    </div>
                                    <h4>Record of Sales</h4>
                                    <div class="form-group col-12 col-md-6 col-lg-4">
                                      <label for="qr_no">QR No.</label>
                                      <input type="text" id="qr_no" v-model="qr_no" class="form-control" disabled>
                                    </div>
                                    <div class="form-group col-12 col-md-6 col-lg-4">
                                      <label for="amount">Amount</label>
                                      <input type="text" id="amount" v-model="amount" class="form-control" disabled>
                                    </div>
                                  </div>
                                  <button type="submit" class="btn btn-primary mt-3">Update</button>
                                  <button type="button" class="btn btn-secondary mt-3" @click="cancelUpdate">Cancel</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                                          
                        
                      </div>
          
                      <!-- PDF Viewer -->
                      <div v-if="showPdf" class="pdf-viewer w-100 w-lg-50 mt-3 mt-lg-0 ml-lg-3">
                        <iframe v-if="pdfUrl" :src="pdfUrl" style="width: 100%; height: 800px;" frameborder="0"></iframe>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>




          <!-- Modal 2 -->
          <div :class="{ 'modal-open': isModalOpen && modalIndex === 2 }">
            <div class="modal-overlay">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title text-white" style="background-color: seagreen; padding: 5px 15px; border-radius: 5px; text-transform: capitalize; flex-grow: 1; display: flex; justify-content: center; align-items: center;">
                      Report on the Physical Count of Semi-Expendable Property
                    </h5>
                   
                  <button class="closebtn" type="button" @click="closeModal">
                    <span class="X"></span>
                    <span class="Y"></span>
                    <div class="close">Close</div>
                  </button>
                  </div>

                  <div>
                
              </div>
                
                  <div class="modal-body">
                    <!-- Tabs -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button
                          class="nav-link"
                          :class="{ active: currentTabModal2 === 'tab1' }"
                          id="tab1-tab"
                          data-bs-toggle="tab"
                          data-bs-target="#tab1"
                          type="button"
                          role="tab"
                          aria-controls="tab1"
                          aria-selected="true"
                          @click="currentTabModal2 = 'tab1'"
                        >
                          High Valued
                        </button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button
                          class="nav-link"
                          :class="{ active: currentTabModal2 === 'tab2' }"
                          id="tab2-tab"
                          data-bs-toggle="tab"
                          data-bs-target="#tab2"
                          type="button"
                          role="tab"
                          aria-controls="tab2"
                          aria-selected="false"
                          @click="currentTabModal2 = 'tab2'"
                        >
                          Low Valued
                        </button>
                      </li>
                    </ul>
                <br>
                    <div class="tab-content" id="myTabContent">
                      <!-- Tab 1 -->
                      <div
                        class="tab-pane fade"
                        :class="{ show: currentTabModal2 === 'tab1', active: currentTabModal2 === 'tab1' }"
                        id="tab1"
                        role="tabpanel"
                        aria-labelledby="tab1-tab"
                      >
                        <div class="d-flex justify-content-end mb-3">
                          <!-- Date Filters -->
                      

                            <input 
                              type="date" 
                              v-model="RPCSPHIGHstartDate"
                              class="form-control-sm custom-datepicker datepicker-start2" 
                              placeholder="Start Date"
                            >

                            <input 
                              type="date" 
                              v-model="RPCSPHIGHendDate"
                              class="form-control-sm custom-datepicker datepicker-end2" 
                              placeholder="End Date"
                            >

                            <button 
                              v-if="!isRPCSPHIGHPdfVisible"
                              class="showbtn me-4" 
                              @click="RPCSPHIGHshowPDF"
                            >
                              <span class="transition"></span>
                              <span class="gradient"></span>
                              <span class="label">
                                <i class="fas fa-file-pdf"></i> Show PDF
                              </span>
                            </button>

                            <!-- Close PDF Button -->
                            <button 
                              v-if="isRPCSPHIGHPdfVisible"
                              class="closepdfbtn me-4" 
                            @click="RPCSPHIGHPdfClose"
                            >
                              <span class="transition"></span>
                              <span class="gradient"></span>
                              <span class="label">
                                <i class="fas fa-times"></i> Close PDF
                              </span>
                            </button>

                                                
                        <!-- Download PDF Button -->
                        <button 
                          class="downloadbtn" 
                          @click="RPCSPHIGHdownloadPDF"
                        >
                          <div class="button-wrapper">
                            <div class="text">Download PDF</div>
                            <span class="icon">
                              <svg 
                                xmlns="http://www.w3.org/2000/svg" 
                                aria-hidden="true" 
                                role="img" 
                                width="2em" 
                                height="2em" 
                                preserveAspectRatio="xMidYMid meet" 
                                viewBox="0 0 24 24"
                              >
                                <path 
                                  fill="none" 
                                  stroke="currentColor" 
                                  stroke-linecap="round" 
                                  stroke-linejoin="round" 
                                  stroke-width="2" 
                                  d="M12 15V3m0 12l-4-4m4 4l4-4M2 17l.621 2.485A2 2 0 0 0 4.561 21h14.878a2 2 0 0 0 1.94-1.515L22 17"
                                ></path>
                              </svg>
                            </span>
                          </div>
                        </button>

            
                        </div>
                          <hr>
                              <div class="content-wrapper">
                                <table class="office-table">
                              <thead>
                              <tr>
                                <th colspan="11" style="background-color: #123C5D; color: white; font-size: 13px; letter-spacing: 1px; font-family: 'Roboto', sans-serif; padding: 5px 8px; font-weight: 400;">
                                  <b>Inventory Inspection and Disposal</b>
                                </th>
                              </tr>
                              <tr>
                                <th rowspan="2" style="background-color: #123C5D; color: white; font-size: 11px; letter-spacing: 1px; font-family: 'Roboto', sans-serif; padding: 5px 8px; font-weight: normal;"><b>Article</b></th>
                                <th rowspan="2" style="background-color: #123C5D; color: white; font-size: 11px; letter-spacing: 1px; font-family: 'Roboto', sans-serif; padding: 5px 8px; font-weight: normal;"><b>Description</b></th>
                                <th rowspan="2" style="background-color: #123C5D; color: white; font-size: 11px; letter-spacing: 1px; font-family: 'Roboto', sans-serif; padding: 5px 8px; font-weight: normal;"><b>Semi-Expendable <br> Property No.</b></th>
                                <th rowspan="2" style="background-color: #123C5D; color: white; font-size: 11px; letter-spacing: 1px; font-family: 'Roboto', sans-serif; padding: 5px 8px; font-weight: normal;"><b>Unit <br> Measures</b></th>
                                <th rowspan="2" style="background-color: #123C5D; color: white; font-size: 11px; letter-spacing: 1px; font-family: 'Roboto', sans-serif; padding: 5px 8px; font-weight: normal;"><b>Unit <br>Value</b></th>
                                <th rowspan="2" style="background-color: #123C5D; color: white; font-size: 11px; letter-spacing: 1px; font-family: 'Roboto', sans-serif; padding: 5px 8px; font-weight: normal;"><b>Date <br>Acquired</b></th>
                                <th rowspan="2" style="background-color: #123C5D; color: white; font-size: 11px; letter-spacing: 1px; font-family: 'Roboto', sans-serif; padding: 5px 8px; font-weight: normal;"><b>Balance <br> Per Card</b></th>
                                <th rowspan="2" style="background-color: #123C5D; color: white; font-size: 11px; letter-spacing: 1px; font-family: 'Roboto', sans-serif; padding: 5px 8px; font-weight: normal;"><b>On Hand <br> Per Card</b></th>
                                <th rowspan="2" style="background-color: #123C5D; color: white; font-size: 11px; letter-spacing: 1px; font-family: 'Roboto', sans-serif; padding: 5px 8px; font-weight: normal;"><b>Shortage/<br>Overage <br>Quantity</b></th>
                                <th rowspan="2" style="background-color: #123C5D; color: white; font-size: 11px; letter-spacing: 1px; font-family: 'Roboto', sans-serif; padding: 5px 8px; font-weight: normal;"><b>Shortage/<br>Overage <br>Value</b></th>
                                <th rowspan="2" style="background-color: #123C5D; color: white; font-size: 11px; letter-spacing: 1px; font-family: 'Roboto', sans-serif; padding: 5px 8px; font-weight: normal;"><b>Remarks</b></th>
                              </tr>
                            </thead>

                            <tbody>
                              <tr v-for="highval in highdata" :key="highval.id">
                                <td>{{ highval.article }}</td>
                                <td>{{ highval.fulldescription }}</td>
                                <td>{{ highval.propertynumber }}</td>
                                <td>{{ highval.rec_unit }}</td>
                                <td>{{ highval.rec_unitcost }}</td>
                                <td>{{ highval.issue_date }}</td>
                                <td>{{ highval.issue_quantity }}</td>
                                <td>{{ highval.issue_quantity }}</td>
                                <td>{{ highval.issue_quantity - highval.issue_quantity }}</td>
                                <td>{{ highval.rec_unitcost * (highval.issue_quantity - highval.issue_quantity) }}</td>
                                <td>{{ highval.remarks }}</td>
                              </tr>
                            </tbody>
                          </table>

                          <iframe
                            v-if="isRPCSPHIGHPdfVisible && RPCSPHIGHpdfUrl"
                            :src="RPCSPHIGHpdfUrl"
                            class="pdf-iframe"
                            width="100%"
                            height="600px"
                          ></iframe>
                        </div>
                      </div>

                      <!-- Tab 2 -->
                      <div
                        class="tab-pane fade"
                        :class="{ show: currentTabModal2 === 'tab2', active: currentTabModal2 === 'tab2' }"
                        id="tab2"
                        role="tabpanel"
                        aria-labelledby="tab2-tab"
                      >
                        <div class="d-flex justify-content-end mb-3">
                          
                      
              

                        <input 
                              type="date" 
                              v-model="RPCSPLOWstartDate"
                              class="form-control-sm custom-datepicker datepicker-start" 
                              placeholder="Start Date"
                            >

                            <input 
                              type="date" 
                              v-model="RPCSPLOWendDate"
                              class="form-control-sm custom-datepicker datepicker-end" 
                              placeholder="End Date"
                            >

                            <button 
                             v-if="!isRPCSPLOWPdfVisible"
                              class="showbtn me-4" 
                               @click="RPCSPLOWshowPDF"
                            >
                              <span class="transition"></span>
                              <span class="gradient"></span>
                              <span class="label">
                                <i class="fas fa-file-pdf"></i> Show PDF
                              </span>
                            </button>

                            <!-- Close PDF Button -->
                            <button 
                              v-if="isRPCSPLOWPdfVisible"
                              class="closepdfbtn me-4" 
                          @click="RPCSPLOWPdfClose"
                            >
                              <span class="transition"></span>
                              <span class="gradient"></span>
                              <span class="label">
                                <i class="fas fa-times"></i> Close PDF
                              </span>
                            </button>

                                              
                      <!-- Download PDF Button -->
                      <button 
                        class="downloadbtn" 
                        @click="RPCSPLOWdownloadPDF"
                      >
                        <div class="button-wrapper">
                          <div class="text">Download PDF</div>
                          <span class="icon">
                            <svg 
                              xmlns="http://www.w3.org/2000/svg" 
                              aria-hidden="true" 
                              role="img" 
                              width="2em" 
                              height="2em" 
                              preserveAspectRatio="xMidYMid meet" 
                              viewBox="0 0 24 24"
                            >
                              <path 
                                fill="none" 
                                stroke="currentColor" 
                                stroke-linecap="round" 
                                stroke-linejoin="round" 
                                stroke-width="2" 
                                d="M12 15V3m0 12l-4-4m4 4l4-4M2 17l.621 2.485A2 2 0 0 0 4.561 21h14.878a2 2 0 0 0 1.94-1.515L22 17"
                              ></path>
                            </svg>
                          </span>
                        </div>
                        
                      </button>



                        </div>


                        <div class="content-wrapper">
                          <table class="office-table">
                            <thead>
                              <tr>
                                <th colspan="11" style="background-color: #123C5D; color: white; font-size: 13px; letter-spacing: 1px; font-family: 'Roboto', sans-serif; padding: 5px 8px; font-weight: 400;">
                                  <b>Inventory Inspection and Disposal</b>
                                </th>
                              </tr>
                              <tr>
                                <th rowspan="2" style="background-color: #123C5D; color: white; font-size: 11px; letter-spacing: 1px; font-family: 'Roboto', sans-serif; padding: 5px 8px; font-weight: normal;"><b>Article</b></th>
                                <th rowspan="2" style="background-color: #123C5D; color: white; font-size: 11px; letter-spacing: 1px; font-family: 'Roboto', sans-serif; padding: 5px 8px; font-weight: normal;"><b>Description</b></th>
                                <th rowspan="2" style="background-color: #123C5D; color: white; font-size: 11px; letter-spacing: 1px; font-family: 'Roboto', sans-serif; padding: 5px 8px; font-weight: normal;"><b>Semi-Expendable <br> Property No.</b></th>
                                <th rowspan="2" style="background-color: #123C5D; color: white; font-size: 11px; letter-spacing: 1px; font-family: 'Roboto', sans-serif; padding: 5px 8px; font-weight: normal;"><b>Unit <br> Measures</b></th>
                                <th rowspan="2" style="background-color: #123C5D; color: white; font-size: 11px; letter-spacing: 1px; font-family: 'Roboto', sans-serif; padding: 5px 8px; font-weight: normal;"><b>Unit <br>Value</b></th>
                                <th rowspan="2" style="background-color: #123C5D; color: white; font-size: 11px; letter-spacing: 1px; font-family: 'Roboto', sans-serif; padding: 5px 8px; font-weight: normal;"><b>Date <br>Acquired</b></th>
                                <th rowspan="2" style="background-color: #123C5D; color: white; font-size: 11px; letter-spacing: 1px; font-family: 'Roboto', sans-serif; padding: 5px 8px; font-weight: normal;"><b>Balance <br> Per Card</b></th>
                                <th rowspan="2" style="background-color: #123C5D; color: white; font-size: 11px; letter-spacing: 1px; font-family: 'Roboto', sans-serif; padding: 5px 8px; font-weight: normal;"><b>On Hand <br> Per Card</b></th>
                                <th rowspan="2" style="background-color: #123C5D; color: white; font-size: 11px; letter-spacing: 1px; font-family: 'Roboto', sans-serif; padding: 5px 8px; font-weight: normal;"><b>Shortage/<br>Overage <br>Quantity</b></th>
                                <th rowspan="2" style="background-color: #123C5D; color: white; font-size: 11px; letter-spacing: 1px; font-family: 'Roboto', sans-serif; padding: 5px 8px; font-weight: normal;"><b>Shortage/<br>Overage <br>Value</b></th>
                                <th rowspan="2" style="background-color: #123C5D; color: white; font-size: 11px; letter-spacing: 1px; font-family: 'Roboto', sans-serif; padding: 5px 8px; font-weight: normal;"><b>Remarks</b></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr v-for="lowval in lowdata" :key="lowval.id">
                                <td>{{ lowval.article }}</td>
                                <td>{{ lowval.fulldescription }}</td>
                                <td>{{ lowval.propertynumber }}</td>
                                <td>{{ lowval.rec_unit }}</td>
                                <td>{{ lowval.rec_unitcost }}</td>
                                <td>{{ lowval.issue_date }}</td>
                                <td>{{ lowval.issue_quantity }}</td>
                                <td>{{ lowval.issue_quantity }}</td>
                                <td>{{ lowval.issue_quantity - lowval.issue_quantity }}</td>
                                <td>{{ lowval.rec_unitcost * (lowval.issue_quantity - lowval.issue_quantity) }}</td>
                                <td>{{ lowval.remarks }}</td>
                              </tr>
                            </tbody>
                          </table>

                          <iframe
                            v-if="isRPCSPLOWPdfVisible && RPCSPLOWpdfUrl"
                            :src="RPCSPLOWpdfUrl"
                            class="pdf-iframe"
                            width="100%"
                            height="600px"
                          ></iframe>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>

      
          <!-- Modal 3 -->
          <div :class="{ 'modal-open': isModalOpen && modalIndex === 3 }">
            <div class="modal-overlay">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title text-white" style="background-color: seagreen; padding: 5px 15px; border-radius: 5px; text-transform: capitalize; flex-grow: 1; display: flex; justify-content: center; align-items: center;">
                      Registry of Semi-Expendable Property Issued
                    </h5>
                    <button class="closebtn" type="button" @click="closeModal">
                    <span class="X"></span>
                    <span class="Y"></span>
                    <div class="close">Close</div>
                  </button>
                  </div>
                  <hr>
                  <div class="modal-body">
                    <div class="d-flex justify-content-start">
                        <div class="col-lg-3">
                          <select v-model="selectedClassification" class="form-select" @change="fetchFilteredData">
                            <option value="">All Classifications</option>
                            <option v-for="classification in classifications" :key="classification" :value="classification.classification">
                              {{ classification.classification }}
                            </option>
                          </select>
                        </div>

                        <div class="ml-auto d-flex align-items-center">
                          <button 
                            v-if="!isRegSPIPdfVisible"
                            class="showbtn me-4" 
                            @click="RegSPIshowPDF"
                          >
                            <span class="transition"></span>
                            <span class="gradient"></span>
                            <span class="label">
                              <i class="fas fa-file-pdf"></i> Show PDF
                            </span>
                          </button>

                          <!-- Close PDF Button -->
                          <button 
                            v-if="isRegSPIPdfVisible"
                            class="closepdfbtn me-4" 
                            @click="RegSPIPdfClose" 
                          >
                            <span class="transition"></span>
                            <span class="gradient"></span>
                            <span class="label">
                              <i class="fas fa-times"></i> Close PDF
                            </span>
                          </button>

                          <!-- Download PDF Button -->
                          <button 
                            class="downloadbtn" 
                            @click="RegSPIdownloadPDF"
                          >
                            <div class="button-wrapper">
                              <div class="text">Download PDF</div>
                              <span class="icon">
                                <svg 
                                  xmlns="http://www.w3.org/2000/svg" 
                                  aria-hidden="true" 
                                  role="img" 
                                  width="2em" 
                                  height="2em" 
                                  preserveAspectRatio="xMidYMid meet" 
                                  viewBox="0 0 24 24"
                                >
                                  <path 
                                    fill="none" 
                                    stroke="currentColor" 
                                    stroke-linecap="round" 
                                    stroke-linejoin="round" 
                                    stroke-width="2" 
                                    d="M12 15V3m0 12l-4-4m4 4l4-4M2 17l.621 2.485A2 2 0 0 0 4.561 21h14.878a2 2 0 0 0 1.94-1.515L22 17"
                                  ></path>
                                </svg>
                              </span>
                            </div>
                          </button>
                        </div>
                      </div>

                      <hr>
    
                    <div class="content-wrapper">
                      <table class="office-table">
                        <thead>
                          <tr>
                            <th colspan="15" style="background-color: #123C5D; color: white; font-size: 11px; font-weight: normal; letter-spacing: 1px; font-family: 'Roboto', sans-serif; padding: 5px 8px;"> <b>Inventory Inspection and Disposal</b></th>
                          </tr>
                          <tr>
                            <th rowspan="2" style="background-color: #123C5D; color: white; font-size: 11px; font-weight: normal; letter-spacing: 1px; font-family: 'Roboto', sans-serif; padding: 5px 8px;"><b>Date</b></th>
                            <th colspan="2" style="background-color: #123C5D; color: white; font-size: 11px; font-weight: normal; letter-spacing: 1px; font-family: 'Roboto', sans-serif; padding: 5px 8px;"><b>Reference</b></th>
                            <th rowspan="2" style="background-color: #123C5D; color: white; font-size: 11px; font-weight: normal; letter-spacing: 1px; font-family: 'Roboto', sans-serif; padding: 5px 8px;"><b>Item Description</b></th>
                            <th rowspan="2" style="background-color: #123C5D; color: white; font-size: 11px; font-weight: normal; letter-spacing: 1px; font-family: 'Roboto', sans-serif; padding: 5px 8px;"><b>Estimated Useful Life</b></th>
                            <th colspan="2" style="background-color: #123C5D; color: white; font-size: 11px; font-weight: normal; letter-spacing: 1px; font-family: 'Roboto', sans-serif; padding: 5px 8px;"><b>Issued</b></th>
                            <th colspan="2" style="background-color: #123C5D; color: white; font-size: 11px; font-weight: normal; letter-spacing: 1px; font-family: 'Roboto', sans-serif; padding: 5px 8px;"><b>Returned</b></th>
                            <th colspan="2" style="background-color: #123C5D; color: white; font-size: 11px; font-weight: normal; letter-spacing: 1px; font-family: 'Roboto', sans-serif; padding: 5px 8px;"><b>Re-issued</b></th>
                            <th rowspan="2" style="background-color: #123C5D; color: white; font-size: 11px; font-weight: normal; letter-spacing: 1px; font-family: 'Roboto', sans-serif; padding: 5px 8px;"><b>Disposed</b></th>
                            <th rowspan="2" style="background-color: #123C5D; color: white; font-size: 11px; font-weight: normal; letter-spacing: 1px; font-family: 'Roboto', sans-serif; padding: 5px 8px;"><b>Balance</b></th>
                            <th rowspan="2" style="background-color: #123C5D; color: white; font-size: 11px; font-weight: normal; letter-spacing: 1px; font-family: 'Roboto', sans-serif; padding: 5px 8px;"><b>Amount</b></th>
                            <th rowspan="2" style="background-color: #123C5D; color: white; font-size: 11px; font-weight: normal; letter-spacing: 1px; font-family: 'Roboto', sans-serif; padding: 5px 8px;"><b>Remarks</b></th>
                          </tr>
                          <tr>
                            <th style="background-color: #123C5D; color: white; font-size: 11px; font-weight: normal; letter-spacing: 1px; font-family: 'Roboto', sans-serif; padding: 5px 8px;"><b>ICS/RRSP No.</b></th>
                            <th style="background-color: #123C5D; color: white; font-size: 11px; font-weight: normal; letter-spacing: 1px; font-family: 'Roboto', sans-serif; padding: 5px 8px;"><b>Semi-expendable Property No.</b></th>
                            <th style="background-color: #123C5D; color: white; font-size: 11px; font-weight: normal; letter-spacing: 1px; font-family: 'Roboto', sans-serif; padding: 5px 8px;"><b>Quantity</b></th>
                            <th style="background-color: #123C5D; color: white; font-size: 11px; font-weight: normal; letter-spacing: 1px; font-family: 'Roboto', sans-serif; padding: 5px 8px;"><b>Office/Officer</b></th>
                            <th style="background-color: #123C5D; color: white; font-size: 11px; font-weight: normal; letter-spacing: 1px; font-family: 'Roboto', sans-serif; padding: 5px 8px;"><b>Quantity</b></th>
                            <th style="background-color: #123C5D; color: white; font-size: 11px; font-weight: normal; letter-spacing: 1px; font-family: 'Roboto', sans-serif; padding: 5px 8px;"><b>Office/Officer</b></th>
                            <th style="background-color: #123C5D; color: white; font-size: 11px; font-weight: normal; letter-spacing: 1px; font-family: 'Roboto', sans-serif; padding: 5px 8px;"><b>Quantity</b></th>
                            <th style="background-color: #123C5D; color: white; font-size: 11px; font-weight: normal; letter-spacing: 1px; font-family: 'Roboto', sans-serif; padding: 5px 8px;"><b>Office/Officer</b></th>
                          </tr>
                        </thead>

                        <tbody>
                          <tr v-for="regspi in filteredInfo" :key="regspi.id">
                            <td>{{ regspi.propertydate }}</td>
                            <td>{{ regspi.icsnumber }}</td>
                            <td>{{ regspi.propertynumber }}</td>
                            <td>{{ regspi.fulldescription }}</td>
                            <td>{{ regspi.estimatedlife }}</td>
                            <td>{{ regspi.issue_quantity }}</td>
                            <td>{{ regspi.issue_officeofficer }}</td>
                            <td>{{ regspi.reg_returned_qty }}</td>
                            <td>{{ regspi.reg_returned_off }}</td>
                            <td>{{ regspi.reg_reissued_qty }}</td>
                            <td>{{ regspi.reg_reissued_off }}</td>
                            <td>{{ regspi.reg_disposed_qty }}</td>
                            <td>{{ regspi.reg_balance_quantity }}</td>
                            <td>{{ regspi.reg_amount }}</td>
                            <td>{{ regspi.reg_remarks }}</td>
                          </tr>
                        </tbody>
                      </table>
                      

                      <iframe
                        v-if="isRegSPIPdfVisible && RegSPIpdfUrl"
                        :src="RegSPIpdfUrl"
                        class="pdf-iframe"
                        width="100%"
                        height="600px"
                      ></iframe>
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
  import axios from 'axios'
  import flatpickr from 'flatpickr';
  import 'flatpickr/dist/flatpickr.min.css';


  
  
  export default {
    data() {
      return {
        notifications: [],
        filter: 'all',
        info: [],
        infos:[],
        unserv: [],
        highdata: [],
        lowdata: [],
        isModalOpen: false,
        modalIndex: null,
        currentTab: 'view', // Default tab is 'view'
        currentTabModal2: 'tab1',
        selectedRecord: {}, // Object to hold the selected record for editing
        modalTitle: '',
        modalImage: '',
        issue_date: '',
        fulldescription: '',
        propertynumber: '',
        rec_quantity: '',
        rec_unitcost: '',
        rec_totalcost: '',
        accimploss: '',
        rec_totalcost: '',
        remarks: '',
        showPdf: false,
        pdfUrl: '',
        RPCSPHIGHpdfUrl: '',
        RPCSPLOWpdfUrl: '',
        RegSPIpdfUrl: '',
        isRPCSPHIGHPdfVisible: false,
        isRPCSPLOWPdfVisible: false,
        isRegSPIPdfVisible: false,
        filteredInfo: [],
        classifications: [], // Holds the classification options
        selectedClassification: '', // Currently selected classification
        RegSPIpdfUrl: null,
        startDate: '',
        endDate: '',
        RPCSPHIGHstartDate: '',
        RPCSPHIGHendDate: '',
        RPCSPLOWstartDate: '',
        RPCSPLOWendDate: '',
        searchKeyword: '',
        currentPage: 1,
        pageSize: 10
      };
    },
    watch: {
      startDate() {
        this.IIRUSPgetData();
        this.IIRUSPshowPDF();
      },
      endDate() {
        this.IIRUSPgetData();
        this.IIRUSPshowPDF();
      },
      RPCSPHIGHstartDate() {
        this.RPCSPHIGHgetData();
        this.RPCSPHIGHshowPDF();
      },
      RPCSPHIGHendDate() {
        this.RPCSPHIGHgetData();
        this.RPCSPHIGHshowPDF();
      },
      RPCSPLOWstartDate() {
        this.RPCSPLOWgetData();
        this.RPCSPLOWshowPDF();
      },
      RPCSPLOWendDate() {
        this.RPCSPLOWgetData();
        this.RPCSPLOWshowPDF();
      },
    },
    created() {
      this.getInfo();
      this.IIRUSPgetData();
      this.RPCSPHIGHgetData();
      this.RPCSPLOWgetData();
      this.fetchFilteredData();
      this.fetchNotifications();
      this.user();
      this.getUserInfo(this.infos.fullname);
    },
    mounted() {
      flatpickr('.custom-datepicker', {
      dateFormat: 'Y-m-d',
      // You can use default locale settings or customize them
      locale: {
        firstDayOfWeek: 1,
        weekdays: {
          shorthand: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
          longhand: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday']
        },
        months: {
          shorthand: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
          longhand: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']
        }
      }
    });


    // Fetch classifications and data
    this.fetchClassifications();
    this.fetchFilteredData(); // Fetch all data initially
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

    paginatedInfo() {
      const startIndex = (this.currentPage - 1) * this.pageSize;
      const endIndex = startIndex + this.pageSize;
      return this.filteredInfos.slice(startIndex, endIndex);
    },

    totalPages() {
      return Math.ceil(this.filteredInfos.length / this.pageSize);
    },

    currentPageRecords() {
      const startIndex = (this.currentPage - 1) * this.pageSize + 1;
      const endIndex = Math.min(startIndex + this.pageSize - 1, this.filteredInfos.length);
      return `Showing ${startIndex} - ${endIndex} of ${this.filteredInfos.length} records`;
    },
    filteredInfos() {
      let filteredData = this.unserv;

      // Filtering logic (optional based on employee, classification, etc.)
      if (this.searchKeyword !== '') {
        const keyword = this.searchKeyword.toLowerCase();
        filteredData = filteredData.filter(unserv => 
          (unserv.entityname && unserv.entityname.toLowerCase().includes(keyword)) ||
          (unserv.acc_officer && unserv.acc_officer.toLowerCase().includes(keyword)) ||
          (unserv.classification && unserv.classification.toLowerCase().includes(keyword)) ||
          (unserv.article && unserv.article.toLowerCase().includes(keyword)) ||
          (unserv.code && unserv.code.toLowerCase().includes(keyword)) ||
          (unserv.created_at && unserv.created_at.toLowerCase().includes(keyword)) ||
          (unserv.status && unserv.status.toLowerCase().includes(keyword)) ||
          (unserv.particulars && unserv.particulars.toLowerCase().includes(keyword))
        );
      }

      return filteredData;
    },

    
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

      updatePageSize(size) {
        this.pageSize = size;
        this.currentPage = 1; // Reset to page 1 whenever page size changes
      },
      goToPage(pageNumber) {
        this.currentPage = pageNumber;
      },

      addCustomButtons(flatpickrInstance) {
      // Create 'Reset' button
      const resetButton = document.createElement('button');
      resetButton.textContent = 'Reset';
      resetButton.className = 'flatpickr-button';
      resetButton.addEventListener('click', () => {
        flatpickrInstance.clear();
      });

      // Create 'Today' button
      const todayButton = document.createElement('button');
      todayButton.textContent = 'Today';
      todayButton.className = 'flatpickr-button';
      todayButton.addEventListener('click', () => {
        flatpickrInstance.setDate(new Date());
      });

      // Append buttons to the calendar
      const calendarContainer = document.querySelector('.flatpickr-calendar');
      if (calendarContainer) {
        calendarContainer.appendChild(todayButton);
        calendarContainer.appendChild(resetButton);
      }
    },

      async getInfo() {
        try {
          const response = await axios.get('getdata');
          this.info = response.data;
        } catch (error) {
          console.log(error);
        }
      },
  
  

      openModal(index) {
        this.isModalOpen = true;
        this.modalIndex = index;
        this.currentTab = 'view'; // Reset to the view tab when modal opens
      },
      closeModal() {
        this.isModalOpen = false;
        this.showPdf = false;
        this.pdfUrl = '';
      },
      openUpdateTab(recordId) {
        this.currentTab = 'update';
        this.unservId = recordId;
        const selectedRecord = this.info.find(record => record.id === recordId);
  
        this.issue_date = selectedRecord.issue_date;
        this.fulldescription = selectedRecord.fulldescription;
        this.propertynumber = selectedRecord.propertynumber;
        this.rec_quantity = selectedRecord.rec_quantity;
        this.rec_unitcost = selectedRecord.rec_unitcost;
        this.rec_totalcost = selectedRecord.rec_totalcost;
        this.accimploss = selectedRecord.accimploss;
        this.rec_totalcost = selectedRecord.rec_totalcost;
        this.remarks = selectedRecord.remarks;
      },
      async updateRecord() {
        try {
          const formData = new FormData();
  
            // Append the updated data
            formData.append('id', this.unservId);
            formData.append('issue_date', this.issue_date);
            formData.append('propertynumber', this.propertynumber);
            formData.append('rec_quantity', this.rec_quantity);
            formData.append('rec_unitcost', this.rec_unitcost);
            formData.append('accimploss', this.accimploss);
            formData.append('remarks', this.remarks);
  
            const response = await axios.post(`/updateIIRUSP/${this.unservId}`, formData, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            });
  
            if (response.data.status === 'success') {
                alert('Record updated!');
                this.currentTab = 'view';
                this.status = ""; // reset status after update
                this.getInfo();
                console.log("Record updated successfully");
            } else {
                console.error("Failed to update record:", response.data.message);
            }
        } catch (error) {
            console.error("Error updating record:", error);
        }
      },
      cancelUpdate() {
        this.currentTab = 'view'; // Switch back to 'view' tab
      },


//-------------------------------------------ALL ABOUT IIRUSP-------------------------------------------

        IIRUSPshowPDF() {
           const start = this.startDate ? `start_date=${this.startDate}` : '';
           const end = this.endDate ? `&end_date=${this.endDate}` : '';
           const queryParams = start || end ? `?${start}${end}` : '';

           this.pdfUrl = `${this.baseURL}/IIRUSP${queryParams}`;
           this.showPdf = true;
         },
        async IIRUSPdownloadPDF() {
          try {
            const start = this.startDate ? `start_date=${this.startDate}` : '';
            const end = this.endDate ? `&end_date=${this.endDate}` : '';
            const queryParams = start || end ? `?${start}${end}` : '';

            const response = await fetch(`${this.baseURL}/IIRUSP${queryParams}`, {
              method: 'GET',
              headers: {
                'Content-Type': 'application/json',
              },
            });

            if (response.ok) {
              const blob = await response.blob();
              const filename = 'IIRUSP_PDF.pdf';
              const url = window.URL.createObjectURL(blob);
              const link = document.createElement('a');
              link.href = url;
              link.setAttribute('download', filename);
              document.body.appendChild(link);
              link.click();
              document.body.removeChild(link);
              console.log('PDF generated successfully');
            } else {
              console.error('Failed to generate PDF');
            }
          } catch (error) {
            console.error('Error generating PDFs:', error);
          }
        },
        async IIRUSPgetData() {
          try {
            const start = this.startDate ? `start_date=${this.startDate}` : '';
            const end = this.endDate ? `&end_date=${this.endDate}` : '';
            const queryParams = start || end ? `?${start}${end}` : '';

            const response = await axios.get(`${this.baseURL}/IIRUSPgetData${queryParams}`);
            this.unserv = response.data;
          } catch (error) {
            console.log(error);
          }
        },



      // IIRUSPshowPDF() {
      //   this.pdfUrl = `${this.baseURL}/IIRUSP`; // Set the path to your PDF file
      //   this.showPdf = true;
      // },
      // async IIRUSPdownloadPDF() {
      //   try {
      //     // Send HTTP request to backend to generate PDFs for all records
      //     const response = await fetch(`${this.baseURL}/IIRUSP`, {
      //         method: 'GET',
      //         headers: {
      //             'Content-Type': 'application/json',
      //         },
      //     });
  
      //     // Check if the response is successful
      //     if (response.ok) {
      //         const blob = await response.blob();
      //         const filename = 'IIRUSP_PDF.pdf'; // Adjust the filename if needed
      //         const url = window.URL.createObjectURL(blob);
      //         const link = document.createElement('a');
      //         link.href = url;
      //         link.setAttribute('download', filename);
      //         document.body.appendChild(link);
      //         link.click();
      //         document.body.removeChild(link);
      //         console.log('PDF generated successfully');
      //         this.setTimeout();
      //     } else {
      //         console.error('Failed to generate PDF');
      //     }
      //   } catch (error) {
      //       console.error('Error generating PDFs:', error);
      //   }
      // },
      // async IIRUSPgetData() {
      //   try {
      //     const response = await axios.get('IIRUSPgetData');
      //     this.unserv = response.data;
      //   } catch (error) {
      //     console.log(error);
      //   }
      // },



//-------------------------------------------ALL ABOUT RPCSP-------------------------------------------

      async RPCSPHIGHgetData() {
        try {
          const start = this.RPCSPHIGHstartDate ? `start_date=${this.RPCSPHIGHstartDate}` : '';
          const end = this.RPCSPHIGHendDate ? `&end_date=${this.RPCSPHIGHendDate}` : '';
          const queryParams = start || end ? `?${start}${end}` : '';

          const response = await axios.get(`RPCSPHIGHgetData${queryParams}`);
          this.highdata = response.data;
        } catch (error) {
          console.log(error);
        }
      },

      async RPCSPLOWgetData() {
        try {
          const start = this.RPCSPLOWstartDate ? `start_date=${this.RPCSPLOWstartDate}` : '';
          const end = this.RPCSPLOWendDate ? `&end_date=${this.RPCSPLOWendDate}` : '';
          const queryParams = start || end ? `?${start}${end}` : '';

          const response = await axios.get(`RPCSPLOWgetData${queryParams}`);
          this.lowdata = response.data;
        } catch (error) {
          console.log(error);
        }
      },


      RPCSPHIGHshowPDF() {
        const start = this.RPCSPHIGHstartDate ? `start_date=${this.RPCSPHIGHstartDate}` : '';
        const end = this.RPCSPHIGHendDate ? `&end_date=${this.RPCSPHIGHendDate}` : '';
        const queryParams = start || end ? `?${start}${end}` : '';

        
        this.RPCSPHIGHpdfUrl = `${this.baseURL}/RPCSPHIGH${queryParams}`; // Set the path to your PDF file
        this.isRPCSPHIGHPdfVisible = true;
      },
      async RPCSPHIGHdownloadPDF() {
        try {
          const start = this.RPCSPHIGHstartDate ? `start_date=${this.RPCSPHIGHstartDate}` : '';
          const end = this.RPCSPHIGHendDate ? `&end_date=${this.RPCSPHIGHendDate}` : '';
          const queryParams = start || end ? `?${start}${end}` : '';

          
          // Send HTTP request to backend to generate PDFs for all records
          const response = await fetch(`${this.baseURL}/RPCSPHIGH${queryParams}`, {
              method: 'GET',
              headers: {
                  'Content-Type': 'application/json',
              },
          });
  
          // Check if the response is successful
          if (response.ok) {
              const blob = await response.blob();
              const filename = 'RPCSPHIGH_PDF.pdf'; // Adjust the filename if needed
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
      RPCSPLOWshowPDF() {
        const start = this.RPCSPLOWstartDate ? `start_date=${this.RPCSPLOWstartDate}` : '';
        const end = this.RPCSPLOWendDate ? `&end_date=${this.RPCSPLOWendDate}` : '';
        const queryParams = start || end ? `?${start}${end}` : '';

        
        this.RPCSPLOWpdfUrl = `${this.baseURL}/RPCSPLOW${queryParams}`; // Set the path to your PDF file
        this.isRPCSPLOWPdfVisible = true;
      },
      async RPCSPLOWdownloadPDF() {
        try {
          // Send HTTP request to backend to generate PDFs for all records
          const start = this.RPCSPLOWstartDate ? `start_date=${this.RPCSPLOWstartDate}` : '';
          const end = this.RPCSPLOWendDate ? `&end_date=${this.RPCSPLOWendDate}` : '';
          const queryParams = start || end ? `?${start}${end}` : '';

          
          // Send HTTP request to backend to generate PDFs for all records
          const response = await fetch(`${this.baseURL}/RPCSPLOW${queryParams}`, {
              method: 'GET',
              headers: {
                  'Content-Type': 'application/json',
              },
          });
  
          // Check if the response is successful
          if (response.ok) {
              const blob = await response.blob();
              const filename = 'RPCSPLOW_PDF.pdf'; // Adjust the filename if needed
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
      RPCSPHIGHPdfClose() {
        this.isRPCSPHIGHPdfVisible = false;
      },
      RPCSPLOWPdfClose() {
        this.isRPCSPLOWPdfVisible = false;
      },


//-------------------------------------------ALL ABOUT RegSPI-------------------------------------------


      RegSPIshowPDF() {
        const classification = this.selectedClassification || ''; // Default to all records if no classification is selected
        this.RegSPIpdfUrl = `${this.baseURL}/RegSPI/${classification}`; // Set the path to your PDF file
        this.isRegSPIPdfVisible = true;
      },
      RegSPIPdfClose() {
        this.isRegSPIPdfVisible = false;
      },
      async RegSPIdownloadPDF() {
        try {
          const classification = this.selectedClassification || ''; // Default to all records if no classification is selected
          
          // Adjust the URL based on the classification
          const url = classification 
            ? `${this.baseURL}/RegSPI/${classification}` 
            : `${this.baseURL}/RegSPI`;
          
          // Send HTTP request to backend to generate PDFs for all records
          const response = await fetch(url, {
              method: 'GET',
              headers: {
                  'Content-Type': 'application/json',
              },
          });

          // Check if the response is successful
          if (response.ok) {
              const blob = await response.blob();
              const filename = 'RegSPI_PDF.pdf'; // Adjust the filename if needed
              const downloadUrl = window.URL.createObjectURL(blob);
              const link = document.createElement('a');
              link.href = downloadUrl;
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

      async fetchClassifications() {
        try {
          const response = await fetch(`${this.baseURL}/getClassifications`);
          this.classifications = await response.json();
        } catch (error) {
          console.error('Error fetching classifications:', error);
        }
      },
      async fetchFilteredData() {
  try {
    // Adjust the URL based on the classification
    const classification = this.selectedClassification || ''; // Default to an empty string if no classification is selected
    const url = classification 
      ? `${this.baseURL}/RegSPIdata/${classification}` 
      : `${this.baseURL}/RegSPIdata`;

    const response = await fetch(url);
    
    if (response.ok) {
      this.info = await response.json(); // Store all data
      this.filterTableData(); // Call the function to filter data
    } else {
      console.error('Failed to fetch data');
    }
  } catch (error) {
    console.error('Error fetching filtered data:', error);
  }
},

filterTableData() {
  // If no classification is selected, show all records
  this.filteredInfo = this.selectedClassification
    ? this.info.filter(item => item.classification === this.selectedClassification)
    : this.info;
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



      async logout(){
          sessionStorage.removeItem('token');
          this.$router.push('/signin');
      },
    }
  }
  </script>
  
  <style scoped>

/* Center the h5 titles */
.card.info-card h5.card-title {
  text-align: center; /* Center the title */
  font-size: 16px; /* You can adjust this size if needed */
  line-height: 1.2;
}

/* Adjust the height of each card */
.card.info-card {
  margin-bottom: 20px;
  padding: 15px; /* Reduce the padding to reduce the overall height */
  max-height: 350px; /* You can adjust the max-height if needed */
  overflow: hidden; /* Ensures content doesn't spill over */
}

/* Optional: You can also adjust the image size slightly to fit the new height */
.card.info-card .image-container img {
  max-height: 200px; /* Reduce image size */
  object-fit: contain; /* Ensure the image maintains its aspect ratio */
}


/* Specific styles for each card */
.card.info-card.inventory-card { 
  background-color: #F6FFE7; /* Soft mint */
  color: #223A3F; /* Deep teal */
  border-bottom: 20px solid #B9E8C7; /* Mint green */
}

.card.info-card.report-card { 
  background-color: #FFEEDD; /* Light coral */
  color: #2C2E40; /* Dark gray */
  border-bottom: 20px solid #F7BFB4; /* Coral pink */
}

.card.info-card.registry-card { 
  background-color: #D3E0F5; /* Soft medium blue */
  color: #0F1A3C; /* Dark navy */
  border-bottom: 20px solid #97B4D6; /* Muted blue */
}

.card.info-card {
  margin-bottom: 20px;
}

.card.info-card.inventory-tracking-card {
  background-color: #FFFAE5; /* Warm light yellow */
  color: #47392B; /* Dark brown */
  border-bottom: 17px solid #F3DFA6; /* Soft gold */
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


  /* Modal Overlay */
  .modal-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5);
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 1050;
  opacity: 0; /* Start hidden */
  visibility: hidden; /* Hide from view */
  transition: opacity 0.3s ease, visibility 0.3s ease;
}

/* Modal Open State */
.modal-open .modal-overlay {
  opacity: 1;
  visibility: visible;
}

/* Modal Dialog */
.modal-dialog {
  max-width: 80%; /* Adjusted to accommodate the table */
  max-height: 100%; /* Adjusted for larger content */
  background-color: white;
  padding: 20px;
  border-radius: 5px;
  overflow-y: auto; /* Allows scrolling if content overflows vertically */
  overflow-x: hidden; /* Prevents horizontal scrolling */
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3); /* Add a subtle shadow */
}

/* Responsive Modal */
@media (max-width: 768px) {
  .modal-dialog {
    max-width: 95%; /* More responsive for smaller screens */
    max-height: 90%;
  }
}

  
  /* Ensure all cards have the same height */
  .card {
    height: 100%;
    display: flex;
    flex-direction: column;
  }
  
  .image-container {
    overflow: hidden;
    height: 200px;
  }
  
  /* Zoom effect on hover */
  .zoom-on-hover {
    transition: transform 0.3s ease-in-out;
  }
  
  .zoom-on-hover:hover {
    transform: scale(1.1);
  }
  
  /* Adjust image to cover the container */
  .image-container img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
  
  .office-table {
    width: 100%;
    border-collapse: collapse;
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
  }
  
  .office-table thead {
    background-color: #2f4f6f;
    color: white;
    text-align: left;
  }
  
  .office-table thead th {
    padding: 10px;
    font-size: 10px;
    border-bottom: 2px solid #ccc;
  }
  
  .office-table tbody tr:nth-child(even) {
    background-color: #f2f2f2;
  }
  
  .office-table tbody tr:hover {
    background-color: #e6e6e6;
  }
  
  .office-table tbody td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
    font-size: 10px;
  }
  
  .header-title {
    background-color: #3e5871;
    text-align: center;
    font-size: 18px;
    padding: 15px;
    border-bottom: 2px solid #ccc;
  }
  
  .office-table th {
  font-weight: normal;  /* Ensure normal font weight for table headers */
  border-right: 1px solid #bbb;
}

.office-table td {
  font-weight: normal;  /* Ensure normal font weight for table data */
}

  
  .office-table th:last-child, 
  .office-table td:last-child {
    border-right: none;
  }
  
  .office-table th[rowspan], 
  .office-table th[colspan] {
    text-align: center;
    vertical-align: middle;
  }
  
  .office-table th, .office-table td {
    white-space: nowrap;
  }
  
  /* Center all numbers in the table */
  .office-table td {
    text-align: left; /* Default alignment for non-numeric data */
  }
  
  .office-table td:nth-child(n+3):nth-child(-n+17) {
    text-align: center; /* Center numbers in the relevant columns */
  }
  .closebtn {
  position: relative;
  width: 2.6em; /* Slightly reduced width */
  height: 2.5em; /* Slightly reduced height */
  border: none;
  background: none;
}

.X, .Y {
  content: '';
  position: absolute;
  top: 50%;
  left: 50%;
  width: 1.5em; /* Reduced line width */
  height: 1.5px;
  background-color: black;
  transform-origin: center;
}

.X {
  transform: translate(-50%, -50%) rotate(45deg);
}

.Y {
  transform: translate(-50%, -50%) rotate(-45deg);
}

.close {
  position: absolute;
  display: flex;
  align-items: center;
  justify-content: center;
  bottom: -40%;
  left: 70%;
  width: 3em;
  height: 1.7em;
  font-size: 16px;
  background-color: black;
  color: #000;
  border: 1px solid #000;
  pointer-events: none;
  opacity: 0;
}

.closebtn:hover {
  background-color: rgb(210, 0, 0);
}

.closebtn:hover .X, .closebtn:hover .Y {
  background-color: white; /* 'X' color changes to white on hover */
}

.closebtn:active {
  background-color: rgb(130, 0, 0);
}

.closebtn:hover > .close {
  animation: close 0.2s forwards 1.25s;
}

@keyframes close {
  100% {
    opacity: 1;
  }
}




.custom-datepicker {
  padding: 0.4rem 0.8rem;
  font-size: 13px;
  border: 1px solid #dce2e6;
  border-radius: 0.375rem;
  background: #ffffff;
  transition: all 0.2s ease;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  color: #333;
  font-family: 'Roboto', sans-serif;
  height: 2.5rem;
  width: 8.9rem;
}

.custom-datepicker:focus {
  outline: none;
  border-color: #0056b3;
  box-shadow: 0 0 0 0.2rem rgba(0, 86, 179, 0.25);
}

.custom-datepicker:hover {
  background: #f5f7f9;
}

.flatpickr-button {
  margin: 0 2px;
  padding: 0.3rem 0.6rem;
  font-size: 12px;
  border: 1px solid #dce2e6;
  border-radius: 0.375rem;
  background: #ffffff;
  color: #007bff;
  cursor: pointer;
}

.flatpickr-button:hover {
  background: #007bff;
  color: #ffffff;
}

/* Custom Button Styles */
.showbtn {
  font-size: 14px; /* Font size */
  padding: 0.6em 1.5em; /* Padding */
  font-weight: 500;
  background: #1f2937;
  color: white;
  border: none;
  position: relative;
  overflow: hidden;
  border-radius: 0.6em;
  cursor: pointer;
}

.showbtn .gradient {
  position: absolute;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  border-radius: 0.6em;
  margin-top: -0.25em;
  background-image: linear-gradient(
    rgba(0, 0, 0, 0),
    rgba(0, 0, 0, 0),
    rgba(0, 0, 0, 0.3)
  );
}

.showbtn .label {
  position: relative;
  top: -1px;
}

.showbtn .transition {
  transition-timing-function: cubic-bezier(0, 0, 0.2, 1);
  transition-duration: 500ms;
  background-color: rgba(16, 185, 129, 0.6);
  border-radius: 9999px;
  width: 0;
  height: 0;
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
}

.showbtn:hover .transition {
  width: 14em;
  height: 14em;
}

.showbtn:active {
  transform: scale(0.97);
}




/* Custom Button Styles */
.closepdfbtn {
  font-size: 14px; /* Font size */
  padding: 0.6em 1.5em; /* Padding */
  font-weight: 500;
  background: #1f2937;
  color: white;
  border: none;
  position: relative;
  overflow: hidden;
  border-radius: 0.6em;
  cursor: pointer;
}

.closepdfbtn .gradient {
  position: absolute;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  border-radius: 0.6em;
  margin-top: -0.25em;
  background-image: linear-gradient(
    rgba(0, 0, 0, 0),
    rgba(0, 0, 0, 0),
    rgba(0, 0, 0, 0.3)
  );
}

.closepdfbtn .label {
  position: relative;
  top: -1px;
}

.closepdfbtn .transition {
  transition-timing-function: cubic-bezier(0, 0, 0.2, 1);
  transition-duration: 500ms;
  background-color: rgba(255, 99, 99, 0.6); /* Lighter Red */
  border-radius: 9999px;
  width: 0;
  height: 0;
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
}

.closepdfbtn:hover .transition {
  width: 14em;
  height: 14em;
}

.closepdfbtn:active {
  transform: scale(0.97);
}

/* Custom Button Styles */
.downloadbtn {
  --width: 130px;
  --height: 38px;
  --tooltip-height: 35px;
  --tooltip-width: 90px;
  --gap-between-tooltip-to-button: 18px;
  --button-color: #1163ff;
  --tooltip-color: #fff;
  width: var(--width);
  height: var(--height);
  background: var(--button-color);
  position: relative;
  text-align: center;
  border-radius: 0.45em;
  font-size: 14px;
  transition: background 0.3s;
  display: flex;
  align-items: center;
  justify-content: center;
  text-decoration: none; /* Remove underline */
  color: white; /* Text color */
}

.downloadbtn::before {
  position: absolute;
  content: attr(data-tooltip);
  width: var(--tooltip-width);
  height: var(--tooltip-height);
  background-color: var(--tooltip-color);
  font-size: 0.9rem;
  color: #111;
  border-radius: .25em;
  line-height: var(--tooltip-height);
  bottom: calc(var(--height) + var(--gap-between-tooltip-to-button) + 30px);
  left: calc(50% - var(--tooltip-width) / 2);
}

.downloadbtn::after {
  position: absolute;
  content: '';
  width: 0;
  height: 0;
  border: 10px solid transparent;
  border-top-color: var(--tooltip-color);
  left: calc(50% - 10px);
  bottom: calc(150% + var(--gap-between-tooltip-to-button) - 30px);
}

.downloadbtn::after, .downloadbtn::before {
  opacity: 0;
  visibility: hidden;
  transition: all 0.5s;
}

.text {
  display: flex;
  align-items: center;
  justify-content: center;
}

.button-wrapper, .text, .icon {
  overflow: hidden;
  position: absolute;
  width: 100%;
  height: 100%;
  left: 0;
  color: #fff;
}

.text {
  top: 0;
}

.text, .icon {
  transition: top 0.3s; /* Faster transition */
}

.icon {
  color: #fff;
  top: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.icon svg {
  width: 24px;
  height: 24px;
}

.downloadbtn:hover {
  background: #6c18ff;
}

.downloadbtn:hover .text {
  top: -100%;
}

.downloadbtn:hover .icon {
  top: 0;
}


/* Align the datepickers to the left and add spacing */
.datepicker-start {
  margin-left: 160px;   /* Make sure the start date is fully left aligned */
  margin-right: 20px; /* Add space between start and end date */
}

.datepicker-end {
  margin-left: 0; /* Align the end date next to the start date */
  margin-right: 160px; /* Add space between start and end date */
}

/* Align the datepickers to the left and add spacing */
.datepicker-start2 {
  margin-left: 0;   /* Make sure the start date is fully left aligned */
  margin-right: 20px; /* Add space between start and end date */
}

.datepicker-end2 {
  margin-left: 10px; /* Align the end date next to the start date */
  margin-right: 830px; /* Add space between start and end date */
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