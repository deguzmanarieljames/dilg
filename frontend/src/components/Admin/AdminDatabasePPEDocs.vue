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
              <a class="nav-link active" href="databaseppe">
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
    
            <div class="pagetitle d-flex align-items-center justify-content-between">
              <h1 style="font-size: 30px;">Overview</h1>
              <button class="btn btn-primary" @click="goBack" style="padding: 5px 15px; display: inline-flex; align-items: center; transition: all 0.3s ease;">
                <i class="bi bi-box-arrow-in-right" style="margin-right: 10px; font-size: 18px; transition: transform 0.3s ease, margin-right 0.3s ease;"></i>
                <span style="transition: opacity 0.3s ease;">Back to Table</span>
              </button>
            </div><!-- End Page Title -->            
            
            
    
            <section class="section">
            <div v-if="record">

                    <div class="row">
                      <div class="col-xl-4">
              
                        <div class="card" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 15px; transition: box-shadow 0.3s ease-in-out;">
                          <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                          
                            <!-- Profile Image with Glow Effect -->
                            <div style="width: 200px; height: 200px; overflow: hidden; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 0 15px 5px rgba(0, 123, 255, 0.6); margin-top: 50px;">
                              <img :src="`http://dilg.test/backend/uploads/${record.image}`" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            
                            <br>
                            
                            <h3 style="color: rgb(0, 58, 218)"><b>{{ record.particulars }}</b></h3>
                            <h6>{{ record.classification }}</h6>
                          </div>


                          <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                          
                            <!-- Profile Image with Glow Effect -->
                            <div style="width: 200px; height: 200px; overflow: hidden; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 0 15px 5px rgba(255, 200, 0, 0.6); margin-top: 5px;">
                              <img :style="getImageStyle(infor.image)" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            
                            <br>
                            
                            <h3 style="color: rgb(0, 58, 218)"><b>{{ infor.fullname }}</b></h3>
                            <h6>{{ infor.position }}</h6>
                            
                            <br>
                             
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
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Docs</button>
                              </li>
              
                              <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Verification</button>
                              </li>
              
                              <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">QR Code</button>
                              </li>
              
                            </ul>
                            <div class="tab-content pt-2">
              
                              <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                <div class="procurement-details">      
                                  <h3 class="card-title" style="text-align: center;">Equipment Details</h3>                          
                                  <div class="row">
                                    <div class="col-md-4">
                                      <h6 class="section-title">Basic Information</h6>
                                      <div class="info-group">
                                        <label>Entity Name</label>
                                        <p>{{ record.entityname }}</p>
                                      </div>
                                      <div class="info-group">
                                        <label>Code</label>
                                        <p>{{ record.code }}</p>
                                      </div>
                                      <div class="info-group">
                                        <label>Article</label>
                                        <p>{{ record.article }}</p>
                                      </div>
                                      <div class="info-group">
                                        <label>Model No</label>
                                        <p>{{ record.modelno }}</p>
                                      </div>
                                      <div class="info-group">
                                        <label>Serial No</label>
                                        <p>{{ record.serialno }}</p>
                                      </div>
                                      <div class="info-group">
                                        <label>Property Date</label>
                                        <p>{{ record.propertynumber }}</p>
                                      </div>
                                      <div class="info-group">
                                        <label>Property Date</label>
                                        <p>{{ record.propertydate }}</p>
                                      </div>
                                      <!-- Received Quantity -->
                                      <div class="info-group">
                                        <label>Received Quantity</label>
                                        <p>{{ record.rec_quantity }}</p>
                                      </div>
                                      <!-- Received Unit -->
                                      <div class="info-group">
                                        <label>Received Unit</label>
                                        <p>{{ record.rec_unit }}</p>
                                      </div>
                                      <!-- Received Unit Cost -->
                                      <div class="info-group">
                                        <label>Received Unit Cost</label>
                                        <p>{{ record.rec_unitcost }}</p>
                                      </div>
                                      <!-- Received Total Cost -->
                                      <div class="info-group">
                                        <label>Received Total Cost</label>
                                        <p>{{ record.rec_totalcost }}</p>
                                      </div>
                                      <!-- Accounting Officer -->
                                      <div class="info-group">
                                        <label>Accounting Officer</label>
                                        <p>{{ record.acc_officer }}</p>
                                      </div>
                                      <!-- Accounting Officer Position -->
                                      <div class="info-group">
                                        <label>Position</label>
                                        <p>{{ record.acc_empposition }}</p>
                                      </div>
                
                                    </div>
                        
                                    <!-- Right Column -->
                                    <div class="col-md-8">
                                      <h6 class="section-title">Other</h6>
                                      <div class="info-group">
                                        <label>Classification</label>
                                        <p>{{ record.classification }}</p>
                                      </div>
                                  
                                      <!-- Particulars -->
                                      <div class="info-group">
                                        <label>Particulars</label>
                                        <p>{{ record.particulars }}</p>
                                      </div>
                                  
                                      <!-- ICS Number -->
                                      <div class="info-group">
                                        <label>ICS Number</label>
                                        <p>{{ record.icsnumber }}</p>
                                      </div>
                                  
                                      <!-- JEV Number -->
                                      <div class="info-group">
                                        <label>JEV Number</label>
                                        <p>{{ record.jevnumber }}</p>
                                      </div>
                                  
                                      <!-- Issue Item No -->
                                      <div class="info-group">
                                        <label>Issue Item No</label>
                                        <p>{{ record.issue_itemno }}</p>
                                      </div>
                                  
                                      <!-- Issue Date -->
                                      <div class="info-group">
                                        <label>Issue Date</label>
                                        <p>{{ record.issue_date }}</p>
                                      </div>
                                  
                                      <!-- Issued Officer -->
                                      <div class="info-group">
                                        <label>Issued Officer</label>
                                        <p>{{ record.issued_officer }}</p>
                                      </div>
                                  
                                      <!-- Issued Officer Position -->
                                      <div class="info-group">
                                        <label>Position</label>
                                        <p>{{ record.issued_offposition }}</p>
                                      </div>
                                  
                                      <!-- Property Officer -->
                                      <div class="info-group">
                                        <label>Property Officer</label>
                                        <p>{{ record.property_officer }}</p>
                                      </div>
                                  
                                      <!-- Approving Authority -->
                                      <div class="info-group">
                                        <label>Approving Authority</label>
                                        <p>{{ record.approving_authority }}</p>
                                      </div>
                
                                    </div>
                                  </div>
                                </div>
                              </div>
                              
                              
                              




              
                              <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                                <!-- Bordered Tabs -->
                                <ul class="nav nav-tabs nav-tabs-bordered justify-content-end">
                  
                                  <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#docu-ics">ICS</button>
                                  </li>
                  
                                  <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#docu-spc">SPC</button>
                                  </li>
                  
                                  <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#docu-splc">SPLC</button>
                                  </li>
                  
                                </ul>
                                <div class="tab-content pt-2">
  
                                  <div class="tab-pane fade show active docu-ics pt-3" id="docu-ics">
                                    <div style="max-width: 800px; margin: 0 auto; font-family: Arial; padding: 20px;">
                                      <!-- Title and Button Icon in Flexbox for alignment -->
                                      <div style="max-width: 800px; margin: 0 auto; font-family: Arial; padding: 20px;">
                                        <!-- Title and Button Icon in Flexbox for alignment -->
                                        <div style="display: flex; justify-content: center; align-items: center; margin-bottom: 20px; position: relative;">
                                          <div style="font-size: 23px; font-weight: bold; flex-grow: 1; text-align: center;">Inventory Custodian Slip</div>
                                          <button @click="generatePDF(record.id)" style="background-color: transparent; border: none; cursor: pointer; font-size: 24px; position: absolute; right: 0;">
                                            <i class="bx bxs-file-pdf" style="color: red;"></i>
                                          </button>
                                        </div>
                                      </div>                                    
                                    <div style="margin-bottom: 8px;">
                                        <p>Entity Name: <u>{{ record.entityname }}</u></p>
                                        <p>Fund Cluster: <u>{{ record.icsnumber }}</u></p>
                                    </div>
                                    <div style="overflow-x: auto;">
                                        <table style="width: 100%; border-collapse: collapse; font-size: 10px;">
                                            <thead>
                                                <tr>
                                                    <th rowspan="2" style="border: 0.5px solid #000; padding: 7px; text-align: center; height: 32px;">Quantity</th>
                                                    <th rowspan="2" style="border: 0.5px solid #000; padding: 7px; text-align: center; height: 32px;">Unit</th>
                                                    <th colspan="2" style="border: 0.5px solid #000; padding: 7px; text-align: center; height: 32px; background-color: #f2f2f2;">Amount</th>
                                                    <th rowspan="2" style="border: 0.5px solid #000; padding: 7px; text-align: center; height: 32px;">Description</th>
                                                    <th rowspan="2" style="border: 0.5px solid #000; padding: 7px; text-align: center; height: 32px;">Item No.</th>
                                                    <th rowspan="2" style="border: 0.5px solid #000; padding: 7px; text-align: center; height: 32px;">Estimated Useful Life</th>
                                                </tr>
                                                <tr>
                                                    <th style="border: 0.5px solid #000; padding: 7px; text-align: center; height: 32px; background-color: #f2f2f2;">Unit Cost</th>
                                                    <th style="border: 0.5px solid #000; padding: 7px; text-align: center; height: 32px; background-color: #f2f2f2;">Total Cost</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td style="border: 0.5px solid #000; padding: 7px; text-align: center; height: 32px;">{{ record.rec_quantity }}</td>
                                                    <td style="border: 0.5px solid #000; padding: 7px; text-align: center; height: 32px;">{{ record.rec_unit }}</td>
                                                    <td style="border: 0.5px solid #000; padding: 7px; text-align: center; height: 32px;">{{ record.rec_unitcost }}</td>
                                                    <td style="border: 0.5px solid #000; padding: 7px; text-align: center; height: 32px;">{{ record.rec_totalcost }}</td>
                                                    <td style="border: 0.5px solid #000; padding: 7px; text-align: center; height: 32px; width: 150px; white-space: normal;">
                                                      {{ record.fulldescription }}
                                                  </td>                                                
                                                    <td style="border: 0.5px solid #000; padding: 7px; text-align: center; height: 32px;">{{ record.propertynumber }}</td>
                                                    <td style="border: 0.5px solid #000; padding: 7px; text-align: center; height: 32px;">{{ record.estimatedlife }}</td>
                                                </tr>
                                                
                                                <!-- <tr>
                                                    <td style="border: 0.5px solid #000; padding: 7px; text-align: center; height: 32px;"></td>
                                                    <td style="border: 0.5px solid #000; padding: 7px; text-align: center; height: 32px;"></td> 
                                                    <td style="border: 0.5px solid #000; padding: 7px; text-align: center; height: 32px;"></td>
                                                    <td style="border: 0.5px solid #000; padding: 7px; text-align: center; height: 32px;"></td>
                                                    <td style="border: 0.5px solid #000; padding: 7px; text-align: center; height: 32px;"></td>
                                                    <td style="border: 0.5px solid #000; padding: 7px; text-align: center; height: 32px;"></td>
                                                    <td style="border: 0.5px solid #000; padding: 7px; text-align: center; height: 32px;"></td>
                                                </tr> -->
                                                
                                                <!-- End of blank rows -->
                                                <tr>
                                                    <td colspan="4" style="border: 0.5px solid #000; padding: 7px; text-align: center; height: 32px;">
                                                        Received from:<br><br><br><b><u>{{ record.issued_officer }}</u></b><br>Signature Over Printed Name<br><br><u><b>{{ record.issued_offposition }}</b></u><br>Position/Office<br><br><b><u>{{ record.issued_date }}</u></b><br>Date
                                                    </td>
                                                    <td colspan="5" style="border: 0.5px solid #000; padding: 7px; text-align: center; height: 32px;">
                                                        Received by:<br><br><br><b><u>{{ record.acc_officer }}</u></b><br>Signature Over Printed Name<br><br><u><b>{{ record.acc_empposition }}</b></u><br>Position/Office<br><br><b><u>{{ record.acc_date }}</u></b><br>Date
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="tab-pane fade docu-spc pt-3" id="docu-spc">
                                    <div style="max-width: 800px; margin: 0 auto; font-family: Arial; padding: 20px;">
                                      <table style="width: 100%; border-collapse: collapse;">
                                        <thead>
                                          <tr>
                                            <th colspan="12" style="border: 1px solid black; padding: 7px; font-size: 10px; background-color: #fff; font-weight: normal;">
  
  
                                              <p style="text-align: right; margin-right: 30px; font-size: 11px;"><i>Annex A.1</i></p>
                                              <div style="display: flex; justify-content: center; align-items: center; margin-bottom: 20px; position: relative;">
                                                <div style="font-size: 23px; font-weight: bold; flex-grow: 1; text-align: center;">SEMI-EXPENDABLE PROPERTY CARD</div>
                                                <button @click="generatePDFSPC" style="background-color: transparent; border: none; cursor: pointer; font-size: 24px; position: absolute; right: 0;">
                                                  <i class="bx bxs-file-pdf" style="color: red;"></i>
                                                </button>
                                              </div>                                            <div style="font-size: 10px;">
                                                <p style="text-align: left; float: left;">Entity Name: <u style="color: blue">{{ record.entityname }}</u></p>
                                              </div>
                                            </th>
                                          </tr>
                                          <tr>
                                            <th colspan="8" style="border: 1px solid black; padding: 7px; font-size: 10px; background-color: #fff; font-weight: normal;">
                                              <b>Semi-expendable Property:<u style="color: blue">{{ record.classification }}</u></b>
                                            </th>
                                            <th colspan="3" style="border: 1px solid black; padding: 7px; font-size: 10px; background-color: #fff; font-weight: normal;">
                                              <b>Semi-expendable Property Number: <u style="color: blue">{{ record.propertynumber }}</u></b>
                                            </th>
                                          </tr>
                                          <tr>
                                            <th colspan="8" style="border: 1px solid black; padding: 7px; font-size: 10px; background-color: #fff; font-weight: normal;">
                                              <b>Description: <u style="color: blue">{{ record.fulldescription }}</u></b>
                                            </th>
                                            <th colspan="1" style="border: 1px solid black; padding: 7px; font-size: 10px;"></th>
                                            <th colspan="1" style="border: 1px solid black; padding: 7px; font-size: 10px;"></th>
                                            <th colspan="1" style="border: 1px solid black; padding: 7px; font-size: 10px;"></th>
                                          </tr>
                                          <tr>
                                            <th rowspan="2" style="border: 1px solid black; padding: 7px; font-size: 10px;">Date</th>
                                            <th rowspan="2" style="border: 1px solid black; padding: 7px; font-size: 10px;">Reference</th>
                                            <th colspan="3" style="border: 1px solid black; padding: 7px; font-size: 10px;">Receipt</th>
                                            <th colspan="3" style="border: 1px solid black; padding: 7px; font-size: 10px;">Issue/Transfer/Disposal</th>
                                            <th colspan="1" style="border: 1px solid black; padding: 7px; font-size: 10px;">Balance</th>
                                            <th rowspan="2" style="border: 1px solid black; padding: 7px; font-size: 10px;">Amounts</th>
                                            <th rowspan="2" style="border: 1px solid black; padding: 7px; font-size: 10px;">Remarks</th>
                                          </tr>
                                          <tr>
                                            <th style="border: 1px solid black; padding: 7px; font-size: 10px;">Quantity</th>
                                            <th style="border: 1px solid black; padding: 7px; font-size: 10px;">Unit Cost</th>
                                            <th style="border: 1px solid black; padding: 7px; font-size: 10px;">Total Cost</th>
                                            <th style="border: 1px solid black; padding: 7px; font-size: 10px;">Item No.</th>
                                            <th style="border: 1px solid black; padding: 7px; font-size: 10px;">Quantity</th>
                                            <th style="border: 1px solid black; padding: 7px; font-size: 10px;">Office/Officer</th>
                                            <th style="border: 1px solid black; padding: 7px; font-size: 10px;">Quantity</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td style="border: 1px solid black; padding: 7px; font-size: 10px; color: blue;">{{ record.propertydate }}</td>
                                            <td style="border: 1px solid black; padding: 7px; font-size: 10px; color: blue;">{{ record.icsnumber }}</td>
                                            <td style="border: 1px solid black; padding: 7px; font-size: 10px; color: blue;">{{ record.rec_quantity }}</td>
                                            <td style="border: 1px solid black; padding: 7px; font-size: 10px; color: blue;">{{ record.rec_unitcost }}</td>
                                            <td style="border: 1px solid black; padding: 7px; font-size: 10px; color: blue;">{{ record.rec_totalcost }}</td>
                                            <td style="border: 1px solid black; padding: 7px; font-size: 10px; color: blue;">{{ record.propertynumber }}</td>
                                            <td style="border: 1px solid black; padding: 7px; font-size: 10px; color: blue;">{{ record.issue_quantity }}</td>
                                            <td style="border: 1px solid black; padding: 7px; font-size: 10px; color: blue;">{{ record.issue_officeofficer }}</td>
                                            <td style="border: 1px solid black; padding: 7px; font-size: 10px; color: blue;">{{ record.balancequantity }}</td>
                                            <td style="border: 1px solid black; padding: 7px; font-size: 10px; color: blue;">{{ record.balanceamount }}</td>
                                            <td style="border: 1px solid black; padding: 7px; font-size: 10px; color: blue;">{{ record.remarks }}</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                    
                                  </div>
                                  <div class="tab-pane fade docu-splc pt-3" id="docu-splc">
                                    <div style="max-width: 800px; margin: 0 auto; font-family: Arial; padding: 20px;">
                                    <table style="width: 100%; border-collapse: collapse;">
                                      <thead>
                                        <tr>
                                          <th colspan="12" style="border: 1px solid black; padding: 7px; font-size: 10px; background-color: #fff; font-weight: normal;">
  
                                            <p style="text-align: right; margin-right: 30px; font-size: 11px;"><i>Annex A.2</i></p>
                                            <br>
                                            <div style="display: flex; justify-content: center; align-items: center; margin-bottom: 20px; position: relative;">
                                              <div style="font-size: 23px; font-weight: bold; flex-grow: 1; text-align: center;">SEMI-EXPENDABLE PROPERTY LEDGER CARD</div>
                                              <button @click="generatePDFSPLC" style="background-color: transparent; border: none; cursor: pointer; font-size: 24px; position: absolute; right: 0;">
                                                <i class="bx bxs-file-pdf" style="color: red;"></i>
                                              </button>
                                            </div>                                             
                                            <div style="font-size: 10px;">
                                                <p style="text-align: left; float: left; margin: 5px 0;">Entity Name: <u style="color: blue">{{ record.entityname }}</u></p>
                                                <div style="clear: both;"></div>
                                            </div>
                                            <br>
                                          </th>
                                        </tr>
                                        <tr>
                                          <th colspan="6" style="font-size: 9px; border: 1px solid black; padding: 7px; text-align: center; background-color: #fff; font-weight: normal; color: blue;">
                                            <b>Semi-expendable Property: <u>{{ record.classification }}</u></b>
                                          </th>
                                          <th colspan="4" style="font-size: 9px; border: 1px solid black; padding: 7px; text-align: center; background-color: #fff; font-weight: normal; color: blue;">
                                            <b>Semi-expendable Property Number: <u>{{ record.propertynumber }}</u></b>
                                          </th>
                                        </tr>
                                        <tr>
                                          <th colspan="6" style="font-size: 9px; border: 1px solid black; padding: 7px; text-align: center; background-color: #fff; font-weight: normal; color: blue;">
                                            <b>Description: <u>{{ record.fulldescription }}</u></b>
                                          </th>
                                          <th style="font-size: 9px; border: 1px solid black; padding: 7px; text-align: center; background-color: #fff; font-weight: normal;"><b>UACS Object Code:</b></th>
                                          <th style="font-size: 9px; border: 1px solid black; padding: 7px; text-align: center; background-color: #fff; font-weight: normal; color: blue;"><b>{{ record.code }}</b></th>
                                          <th colspan="2" style="font-size: 9px; border: 1px solid black; padding: 7px; text-align: center; background-color: #fff; font-weight: normal;"><b>Repair History</b></th>
                                        </tr>
                                        <tr>
                                          <th rowspan="2" style="border: 1px solid black; padding: 7px; text-align: center; font-size: 9px; height: 20px;"><b>Date</b></th>
                                          <th rowspan="2" style="border: 1px solid black; padding: 7px; text-align: center; font-size: 9px; height: 20px;"><b>Reference</b></th>
                                          <th colspan="3" style="border: 1px solid black; padding: 7px; text-align: center; font-size: 9px; height: 20px;"><b>Receipt</b></th>
                                          <th rowspan="2" style="border: 1px solid black; padding: 7px; text-align: center; font-size: 9px; height: 20px;"><b>Issue/Transfer/Adjustments</b></th>
                                          <th rowspan="2" style="border: 1px solid black; padding: 7px; text-align: center; font-size: 9px; height: 20px;"><b>Accumulated Impairment Loss</b></th>
                                          <th rowspan="2" style="border: 1px solid black; padding: 7px; text-align: center; font-size: 9px; height: 20px;"><b>Adjusted Cost</b></th>
                                          <th rowspan="2" style="border: 1px solid black; padding: 7px; text-align: center; font-size: 9px; height: 20px;"><b>Nature of Repair</b></th>
                                          <th rowspan="2" style="border: 1px solid black; padding: 7px; text-align: center; font-size: 9px; height: 20px;"><b>Amount</b></th>
                                        </tr>
                                        <tr>
                                          <th style="border: 1px solid black; padding: 7px; text-align: center; font-size: 9px; height: 20px;"><b>Quantity</b></th>
                                          <th style="border: 1px solid black; padding: 7px; text-align: center; font-size: 9px; height: 20px;"><b>Unit Cost</b></th>
                                          <th style="border: 1px solid black; padding: 7px; text-align: center; font-size: 9px; height: 20px;"><b>Total Cost</b></th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <!-- Repeat rows with empty cells as needed -->
                                        <tr>
                                          <td style="border: 1px solid black; padding: 7px; text-align: center; font-size: 9px; height: 20px; color: blue;">{{ record.propertydate }}</td>
                                          <td style="border: 1px solid black; padding: 7px; text-align: center; font-size: 9px; height: 20px; color: blue;">{{ record.icsnumber }}</td>
                                          <td style="border: 1px solid black; padding: 7px; text-align: center; font-size: 9px; height: 20px; color: blue;">{{ record.rec_quantity }}</td>
                                          <td style="border: 1px solid black; padding: 7px; text-align: center; font-size: 9px; height: 20px; color: blue;">{{ record.rec_unitcost }}</td>
                                          <td style="border: 1px solid black; padding: 7px; text-align: center; font-size: 9px; height: 20px; color: blue;">{{ record.rec_totalcost }}</td>
                                          <td style="border: 1px solid black; padding: 7px; text-align: center; font-size: 9px; height: 20px; color: blue;">{{ record.isstranadjamount }}</td>
                                          <td style="border: 1px solid black; padding: 7px; text-align: center; font-size: 9px; height: 20px; color: blue;">{{ record.accimploss }}</td>
                                          <td style="border: 1px solid black; padding: 7px; text-align: center; font-size: 9px; height: 20px; color: blue;">{{ record.adjustedcost }}</td>
                                          <td style="border: 1px solid black; padding: 7px; text-align: center; font-size: 9px; height: 20px; color: blue;">{{ record.repair_nature }}</td>
                                          <td style="border: 1px solid black; padding: 7px; text-align: center; font-size: 9px; height: 20px; color: blue;">{{ record.repair_amount }}</td>
                                        </tr>
                                        <!-- Add more rows as needed -->
                                      </tbody>
                                    </table>
                                  </div>
                                  </div>
                                  
                  
                                  </div>
                                </div>
                                <div class="tab-pane fade pt-3" id="profile-settings">
                                  <h3 class="card-title" style="text-align: center;">Image Verification</h3>
  
                                  <div style="overflow: hidden; display: flex; align-items: center; justify-content: center;">
                                    <img ref="imageverification" :src="`http://dilg.test/backend/uploads/${record.imageverification}`" style="width: 100%; height: 100%; object-fit: cover; cursor: pointer;" @click="viewImageInFullscreen">
                                  </div>                                                                   
                                  <h3 class="card-title" style="text-align: center;">Click the image to fullscreen</h3>
              
                
                                </div>
                
                                <div class="tab-pane fade pt-3" id="profile-change-password">
                                  <div class="row justify-content-center">
                                    <div class="col-lg-6 text-center">
                                          <br>
                                          <h3><b>Generate QR Code for Borrowing</b></h3>
                                          <!-- QR Code container with a fixed size -->
                                          <div class="qr-code-container">
                                            <!-- <img class="qr-img" v-if="qrCodeVisible" :src="qrCodeUrl" alt="QR Code" /> -->
                                            <QRCodeGenerator class="qr-img" v-if="qrCodeVisible" :data="qrCodeData" :logoUrl="logoImageUrl" />
                                          </div>
                                          <button @click="toggleQrCode" class="btn btn-primary mt-3">
                                            {{ qrCodeVisible ? 'Close' : 'Generate QR Code' }}
                                          </button>
                                    </div>
                                  </div>
                
                                </div>
              
                            </div><!-- End Bordered Tabs -->
              
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
    import axios from 'axios';
    import jsQR from "jsqr";
    import QRCode from 'qrcode-generator';
    import html2pdf from 'html2pdf.js';
    import QRCodeGenerator from "../../components/QRCodeGenerator.vue";

    
    export default {
      components: {
        QRCodeGenerator,
      },
      data() {
        return {
            notifications: [],
            filter: 'all',
            infos: [],
            recordId: null,
            record: null,
            image: '',
            showAllDetails: false,
            infor: [],
            qrCodeVisible: false, // Tracks if QR code is displayed
            qrCodeUrl: '', // Holds the generated QR code URL
            qrCodeData: null, // Replace with your dynamic ID or data
            logoImageUrl: "./img/dilg-logo.png", // Local or external logo URL
        }
      },
      mounted() {
        // this.fetchNotifications();
      },
      created() {
        // Retrieve the record ID from session storage
        this.recordId = sessionStorage.getItem('selectedRecordId');
        if (this.recordId) {
        this.fetchRecord(this.recordId);
        // this.getAccOffInfo(this.recordId);
        };
        this.user();
        // this.getUserInfo(this.infos.fullname);
        // this.getAccOffInfo(this.record.acc_officer);
        this.fetchNotifications();
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
      }
    },

    methods: {
      goBack() {
        // Use the browser's history API to go back to the previous page
        this.$router.go(-1);
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
        toggleQrCode() {
        if (this.qrCodeVisible) {
            // If QR code is visible, hide it
            this.qrCodeVisible = false;
            this.qrCodeData = '';
        } else {
            // If not visible, generate and show the QR code
            const id = this.record.propertynumber; // Replace with dynamic data if necessary
            this.qrCodeData = id;
            this.qrCodeVisible = true;
        }
        },
        viewImageInFullscreen() {
          const img = this.$refs.imageverification; // Access the image via ref

          // Save original styles
          const originalStyles = {
            width: img.style.width,
            height: img.style.height,
            objectFit: img.style.objectFit
          };

          // Apply fullscreen mode styles (original size)
          img.style.width = 'auto';
          img.style.height = 'auto';
          img.style.objectFit = 'contain';

          // Request fullscreen
          if (img.requestFullscreen) {
            img.requestFullscreen();
          } else if (img.mozRequestFullScreen) { // Firefox
            img.mozRequestFullScreen();
          } else if (img.webkitRequestFullscreen) { // Chrome, Safari, and Opera
            img.webkitRequestFullscreen();
          } else if (img.msRequestFullscreen) { // IE/Edge
            img.msRequestFullscreen();
          }

          // Event listener for exiting fullscreen and restoring original styles
          const exitHandler = () => {
            // Restore original styles when exiting fullscreen
            img.style.width = originalStyles.width;
            img.style.height = originalStyles.height;
            img.style.objectFit = originalStyles.objectFit;

            document.removeEventListener('fullscreenchange', exitHandler);
            document.removeEventListener('webkitfullscreenchange', exitHandler);
            document.removeEventListener('mozfullscreenchange', exitHandler);
            document.removeEventListener('MSFullscreenChange', exitHandler);
          };

          // Listen for exit from fullscreen
          document.addEventListener('fullscreenchange', exitHandler);
          document.addEventListener('webkitfullscreenchange', exitHandler);
          document.addEventListener('mozfullscreenchange', exitHandler);
          document.addEventListener('MSFullscreenChange', exitHandler);
        },
        async fetchRecord(id) {
        // Fetch the record from your API using the id
            try {
                const response = await axios.get(`getRecordById/${id}`);
                this.record = response.data;
                console.log("This is ", this.record.acc_officer);
                
                // Call getAccOffInfo here after the record is fetched
                if (this.record.acc_officer) {
                    this.getAccOffInfo(this.record.acc_officer);
                }
            } catch (error) {
                console.error(error);
            }
        },

        async getAccOffInfo(name) {
            try {
                const inf = await axios.get(`/offinfo/${name}`);
                this.infor = inf.data;
                console.log("id is ", name);
                console.log(this.infor.fullname);
            } catch (error) {
                console.log(error);
            }
        },
    
        // async getUserInfo(id){
        //               try {
        //                   const inf = await axios.get(`getDataUser?id=${id}`);
        //                   this.info = inf.data;
        //               } catch (error) {
        //                   console.log(error);
        //               }
        //           },
    
          async user(){
            try{
              const id= sessionStorage.getItem("token")
              const response = await axios.get(`/users/${id}`, {
                id:id
              })
              this.infos = response.data;
              console.log(this.infos.fullname);
    
            }catch(error){
              console.log(error);
            }
          },
          getImageStyle(image) {
          // Function to generate the background image style
            if (!image) {
              return {}; // Return an empty object if imageUrl is not provided
            }
            
            // Set the background image URL
            const backgroundImage = `url('http://dilg.test/backend/uploads/${image}')`;
            
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

          async generatePDF(recordId) {
            try {
                // Send HTTP request to backend
                const response = await fetch(`http://dilg.test/backend/generateICSPDF/${recordId}`, {
                    method: 'GET', // Adjust the method accordingly
                    headers: {
                        'Content-Type': 'application/json', // Adjust the content type if needed
                    },
                });

                // Check if the response is successful
                if (response.ok) {
                    const blob = await response.blob();
                    const filename = 'generated_pdf.pdf'; // Adjust the filename if needed
                    const url = window.URL.createObjectURL(new Blob([blob]));
                    const link = document.createElement('a');
                    link.href = url;
                    link.setAttribute('download', filename);
                    document.body.appendChild(link);
                    link.click();
                    link.parentNode.removeChild(link);
                    console.log('PDF generated successfully');
                } else {
                    console.error('Failed to generate PDF');
                }
            } catch (error) {
                // Handle any errors that occur during the request
                console.error('Error:', error);
            }
        },

        async generatePDFSPC() {
          try {

              const response = await fetch('http://dilg.test/backend/employeeRecordsPDF', {
                  method: 'POST',
                  headers: {
                      'Content-Type': 'application/json',
                  },
                  body: JSON.stringify({ id: this.record.id }),
              });

              if (response.ok) {
                  const blob = await response.blob();
                  const filename = `${this.record.acc_officer}_records.pdf`;
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

        async generatePDFSPLC() {
          try {

              const response = await fetch('http://dilg.test/backend/employeeRecordsSPLC', {
                  method: 'POST',
                  headers: {
                      'Content-Type': 'application/json',
                  },
                  body: JSON.stringify({ id: this.record.id }),
              });

              if (response.ok) {
                  const blob = await response.blob();
                  const filename = `${this.record.acc_officer}_records.pdf`;
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
    
    
        async logout(){
          sessionStorage.removeItem('token');
          this.$router.push('/signin');
         },
    
      },
    
    }
    </script>
    
    <style scoped>
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

    .qr-code-container {
      width: 300px;
      height: 300px;
      margin: 0 auto; /* Center the QR code */
      display: flex;
      justify-content: center;
      align-items: center;
      border: 1px dashed #ccc; /* To show a border when QR code is not visible */
    }
    
    .qr-img {
      width: 300px;
      height: 300px;
    }
    
    .btn:hover {
      cursor: pointer;
    }
  
  .btn:hover i {
    margin-right: 0;
    transform: translateX(50px);
  }
  
  .btn:hover span {
    opacity: 0;
  }
  
  .btn:hover {
    cursor: pointer;
  }
  
  .btn:hover i {
    margin-right: 0;
    transform: translateX(50px);
  }
  
  .btn:hover span {
    opacity: 0;
  }
    </style>
    
    
    
    
    