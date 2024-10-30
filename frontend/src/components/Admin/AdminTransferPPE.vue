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
      
          <ul class="sidebar-nav" id="sidebar-nav">
      
            
            <li class="nav-heading">Home</li>
      
            <li class="nav-item">
              <a class="nav-link collapsed" href="/dashboard">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
              </a>
            </li><!-- End Dashboard Nav -->
      
            
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
                  <a class="nav-link active" href="returnedppe">
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
      
            <li class="nav-heading">input</li>
    
            <li class="nav-item">
            <a class="nav-link collapsed" href="/workspace">
                <i class="bi bi-folder-plus"></i>
                <span>Workspace</span>
            </a>
            </li>
    
            <li class="nav-heading">Stocks</li>
    
            <li class="nav-item">
              <a class="nav-link collapsed" href="/inventory">
                <i class="bi bi-folder-plus"></i>
                <span>Inventory</span>
              </a>
            </li>
    
    
            <li class="nav-heading">Security</li>
    
            <li class="nav-item">
              <a class="nav-link collapsed" href="/userverify">
                <i class="bi bi-folder-plus"></i>
                <span>User Verification</span>
              </a>
            </li><!-- End Dashboard Nav -->
      
          </ul>
      
          </aside><!-- End Sidebar-->
      
      
      
      
      
      
      
          <main id="main" class="main">
    
            <div class="pagetitle">
            <h1>Transfer - Property, Plant and Equipment</h1>
            <nav>
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Data</li>
                </ol>
            </nav>
            </div><!-- End Page Title -->
    
            <section class="section">
              <div v-if="record">
  
                      <div class="row">
                        <div class="col-xl-4">
                
                          <div class="card" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 15px; transition: box-shadow 0.3s ease-in-out;">
                            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                            
                              <!-- Profile Image with Glow Effect -->
                              <div style="width: 200px; height: 200px; overflow: hidden; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 0 15px 5px rgba(0, 123, 255, 0.6); margin-top: 50px;">
                                <img :src="record.image" style="width: 100%; height: 100%; object-fit: cover;">
                              </div>
                              
                              <br><br>
                              
                              <h3 style="color: rgb(0, 58, 218)"><b>{{ record.particulars }}</b></h3>
                              <h6>{{ record.classification }}</h6>
                              
                              <br>
                               
                            </div>
  
  
                            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                            
                              <!-- Profile Image with Glow Effect -->
                              <div style="width: 200px; height: 200px; overflow: hidden; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 0 15px 5px rgba(255, 200, 0, 0.6); margin-top: 50px;">
                                <img :style="getImageStyle(infor.image)" style="width: 100%; height: 100%; object-fit: cover;">
                              </div>
                              
                              <br><br>
                              
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
                                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">ITR</button>
                                </li>
                
                                <li class="nav-item">
                                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Transfer Now</button>
                                </li>
                
                                <li class="nav-item">
                                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">QR Code</button>
                                </li>
                
                              </ul>
                              <div class="tab-content pt-2">
                
                                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                  <div class="procurement-details">
                                    <h3 class="card-title" style="text-align: center;">Procurement Details</h3>
                                  
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
                                  <div style="position: relative;">

                                  <div class="row">
                                    <div class="col-md-12 text-right">
                                      <button @click="generatePDF(record.id)" type="submit" class="btn btn-outline-danger mt-3">Print</button>
                                    </div>
                                  </div>
                                  <!-- <h3 class="card-title" style="text-align: center;">Returned Document</h3> -->
                                    
                                  <div style="font-family: Arial; max-width: 80%; margin: 0 auto; display: block;">
                                    <!-- <p style="text-align: right; margin-right: 30px; font-size: 14px;"><i>Annex A.4</i></p> -->
                                    <br>
                                    <div class="container">
                                      <div style="text-align: center; font-size: 20px; margin-bottom: 20px; font-weight: bold;">INVENTORY TRANSFER REPORT</div>
                                    
                                      <div>
                                        <p style="text-align: left; float: left; font-size: 14px;">
                                          Entity Name: <u>{{ record.entityname }}</u>
                                        </p>
                                        <p style="text-align: right; float: right; font-size: 14px;">
                                          Fund Cluster: ________________________
                                        </p>
                                      </div>
                                    </div>
                                    <br>
                                    <table style="width: 100%; border-collapse: collapse;">
                                      <thead>
                                        <tr>
                                          <th colspan="4" style="border: 1px solid black; padding: 11px; text-align: center; height: 20px; background-color: #fff; font-weight: normal; font-size: 12px;">
                                            <b>From Accountable Officer/Agency/Fund Cluster: ________________________</b>
                                            <br><br>
                                            <b>To Accountable Officer/Agency/Fund Cluster: ________________________</b>
                                          </th>
                                          <th colspan="2" style="border: 1px solid black; padding: 11px; text-align: center; height: 20px; background-color: #fff; font-weight: normal; font-size: 12px;">
                                            <b>ITR Number: ______________</b>
                                            <br><br>
                                            <b>Date: ______________</b>
                                          </th>
                                        </tr>
                                        <tr>
                                          <th style="border: 1px solid black; padding: 11px; font-size: 12px;">Date</th>
                                          <th style="border: 1px solid black; padding: 11px; font-size: 12px;">Item No.</th>
                                          <th style="border: 1px solid black; padding: 11px; font-size: 12px;">ICS No./Date</th>
                                          <th style="border: 1px solid black; padding: 11px; font-size: 12px;">Description</th>
                                          <th style="border: 1px solid black; padding: 11px; font-size: 12px;">Amount</th>
                                          <th style="border: 1px solid black; padding: 11px; font-size: 12px;">Condition of Inventory</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td style="border: 1px solid black; padding: 11px; font-size: 12px;">{{ record.issue_date }}</td>
                                          <td style="border: 1px solid black; padding: 11px; font-size: 12px;">{{ record.issue_itemno }}</td>
                                          <td style="border: 1px solid black; padding: 11px; font-size: 12px;">{{ record.icsnumber }}</td>
                                          <td style="border: 1px solid black; padding: 11px; font-size: 12px;">{{ record.fulldescription }}</td>
                                          <td style="border: 1px solid black; padding: 11px; font-size: 12px;">{{ record.balanceamount }}</td>
                                          <td style="border: 1px solid black; padding: 11px; font-size: 12px;">{{ record.remarks }}</td>
                                        </tr>
                                        <tr>
                                          <td style="border: 1px solid black; padding: 11px; font-size: 12px;"></td>
                                          <td style="border: 1px solid black; padding: 11px; font-size: 12px;"></td>
                                          <td style="border: 1px solid black; padding: 11px; font-size: 12px;"></td>
                                          <td style="border: 1px solid black; padding: 11px; font-size: 12px;"></td>
                                          <td style="border: 1px solid black; padding: 11px; font-size: 12px;"></td>
                                          <td style="border: 1px solid black; padding: 11px; font-size: 12px;"></td>
                                        </tr>
                                        <tr>
                                          <td style="border: 1px solid black; padding: 11px; font-size: 12px;"></td>
                                          <td style="border: 1px solid black; padding: 11px; font-size: 12px;"></td>
                                          <td style="border: 1px solid black; padding: 11px; font-size: 12px;"></td>
                                          <td style="border: 1px solid black; padding: 11px; font-size: 12px;"></td>
                                          <td style="border: 1px solid black; padding: 11px; font-size: 12px;"></td>
                                          <td style="border: 1px solid black; padding: 11px; font-size: 12px;"></td>
                                        </tr>
                                        <tr>
                                          <td style="border: 1px solid black; padding: 11px; font-size: 12px;"></td>
                                          <td style="border: 1px solid black; padding: 11px; font-size: 12px;"></td>
                                          <td style="border: 1px solid black; padding: 11px; font-size: 12px;"></td>
                                          <td style="border: 1px solid black; padding: 11px; font-size: 12px;"></td>
                                          <td style="border: 1px solid black; padding: 11px; font-size: 12px;"></td>
                                          <td style="border: 1px solid black; padding: 11px; font-size: 12px;"></td>
                                        </tr>
                                        <tr style="text-align: left;">
                                          <th colspan="6" style="border: 1px solid black; padding: 11px; font-size: 12px;"><b>Reason/s for Transfer:</b>
                                            <br><br><br><br><br><br><br><br><br>
                                          </th>
                                        </tr>
                                        <tr style="font-size: 12px;">
                                          <th colspan="2" style="border: 1px solid black; padding: 11px;">
                                            <b>Approved by:</b>
                                            <br><br>
                                            Signature: &nbsp; ___________________
                                            <br><br>
                                            Printed Name: <u>Ronel Cacho</u>
                                            <br><br>
                                            Designation: <u>Provincial Director</u>
                                            <br><br>
                                            Date: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;___________________
                                          </th>
                                          <th colspan="2" style="border: 1px solid black; padding: 11px;">
                                            <b>Released/Issued by:</b>
                                            <br><br>
                                            Signature: &nbsp; ___________________
                                            <br><br>
                                            <u>SERVICEABLE - C/O RO CACHO</u>
                                            <br><br>
                                            <u>Property Officer</u>
                                            <br><br>
                                            _______________________
                                          </th>
                                          <th colspan="2" style="border: 1px solid black; padding: 11px;">
                                            <b>Released/Issued by:</b>
                                            <br><br>
                                            Signature: &nbsp; ___________________
                                            <br><br>
                                            ____________________________
                                            <br><br>
                                            ____________________________
                                            <br><br>
                                            ____________________________
                                          </th>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                  </div>
                                </div>
                                

                
                            <div class="tab-pane fade pt-3" id="profile-settings">
                              <h3 class="card-title" style="text-align: center;">Transfer Process</h3>
                            
                              <!-- Single Form with Two Columns -->
                              <form id="updateForm" method="POST" @submit.prevent="updateTransferRecord" enctype="multipart/form-data">
                                <div class="container">
                                  <div class="row">
                                    <!-- Column 1: Officer and Quantity Fields -->
                                    <div class="col-md-6">
                                      <!-- Officer Name Field -->
                                      <div class="mb-3">
                                        <label for="transfer_officeofficer" class="form-label">Officer</label>
                                        <select class="form-select" id="transfer_officeofficer" v-model="transfer_officeofficer" required>
                                          <option value="" disabled>Select Employee</option>
                                          <option v-for="employee in employees" :key="employee.empid" :value="employee.empfullname">{{ employee.empfullname }}</option>
                                        </select>
                                      </div>

                                      <div class="mb-3">
                                        <label for="acc_position" class="form-label">Position</label>
                                        <select class="form-select" id="acc_position" v-model="acc_empposition" required>
                                          <option value="" disabled>Select Employee</option>
                                          <option v-for="employee in employees" :key="employee.empid" :value="employee.empposition">{{ employee.empposition }}</option>
                                        </select>
                                      </div>
                            
                                      <!-- Quantity Field -->
                                      <div class="mb-3">
                                        <label for="transfer_quantity" class="form-label">Quantity</label>
                                        <input type="number" class="form-control" id="transfer_quantity" v-model="transfer_quantity" required>
                                      </div>

                                      <!-- Remarks Field -->
                                      <div class="mb-3">
                                        <label for="transfer_date" class="form-label">Date</label>
                                        <input type="date" class="form-control" id="transfer_date" v-model="transfer_date" required>
                                      </div>
                            
                                    </div>
                            
                                    <!-- Column 2: Image Verification (Image Upload) -->
                                    <div class="col-md-6">
                                      <div class="col-md-12">
                                        <label class="form-label">Choose Image Source:</label>
                                        <div>
                                          <input type="radio" id="upload" value="upload" v-model="imageSource" required>
                                          <label for="upload">Upload Image</label>
                                        </div>
                                        <div>
                                          <input type="radio" id="capture" value="capture" v-model="imageSource" required>
                                          <label for="capture">Capture Image</label>
                                        </div>
                                      </div>
                            
                                      <div class="col-md-6" v-if="imageSource === 'upload'">
                                        <!-- File upload input -->
                                        <label for="image" class="form-label">Upload Image</label>
                                        <input type="file" class="form-control" id="image" @change="handleFileUpload" accept="image/*" required>
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
                                    </div>
                                  </div>
                            
                                  <!-- Submit Button for the Whole Form -->
                                  <div class="row">
                                    <div class="col-md-12 text-center">
                                      <button type="submit" class="btn btn-primary">Transfer</button>
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </div>
                            
                
                                <div class="tab-pane fade pt-3" id="profile-change-password">
                                  <div class="row justify-content-center">
                                    <div class="col-lg-6 text-center">
                                          <br>
                                          <h3><b>Generate QR Code for Borrowing</b></h3>
                                          <!-- QR Code container with a fixed size -->
                                          <div class="qr-code-container">
                                            <img class="qr-img" v-if="qrCodeVisible" :src="qrCodeUrl" alt="QR Code" />
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
              infos:[],
              infor: [],
              employees: [],
              recordPropertynum: null,
              record: null,
              recordId: null,
              image: '',
              showAllDetails: false,
              qrCodeVisible: false, // Tracks if QR code is displayed
              qrCodeUrl: '', // Holds the generated QR code URL
              imageSource: 'upload',
              mediaStream: null,
              uploadedImage: false,
              cameraStarted: false,
              capturedImage: null,
              imageDataUrl: "",
              cameraButtonText: 'Start Camera',
              selectedImageFile: null,
              imagePreview: '',
              transfer_officeofficer: '',
              transfer_quantity: '',
              transfer_date: '',
              acc_empposition: '',
            }
      },
      
      mounted() {

      },
      computed: {
        imagePreview() {
          if (this.imageSource === 'upload') {
              return this.uploadedImage;
          } else if (this.imageSource === 'capture') {
              return this.capturedImage;
          } else {
              return null; // or a default placeholder image
          }
      },
      },
      created(){
          this.getInfo();
          this.fetchEmployeeNames();
          this.recordPropertynum = sessionStorage.getItem('selectedRecordId');
          if (this.recordPropertynum) {
            this.fetchRecord(this.recordPropertynum);
            // this.getAccOffInfo(this.recordId);
          };
          this.user();
      },
      methods:{
            async getInfo() {
              try {
                const response = await axios.get('getDataServiceable');
                this.info = response.data;
                // Extract employee names from info and store in employeeOptions
                this.employeeOptions = this.info.map(info => info.acc_officer);
              } catch (error) {
                console.log(error);
              }
            },

            async fetchRecord(id) {
            // Fetch the record from your API using the id
                try {
                    const response = await axios.get(`getRecordByPropertynum/${id}`);
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

            async fetchEmployeeNames() {
            // Use the CodeIgniter API endpoint to fetch the list of employee names
              try {
                const response = await axios.get('getEmployees');
                this.employees = response.data;
              } catch (error) {
                console.error('Error fetching employee names', error);
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
                    const response = await fetch(`http://dilg.test/backend/generateITRPDF/${recordId}`, {
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

            async updateTransferRecord() {
                try {
                    const formData = new FormData();
                    
                    // Append the updated data
                    formData.append('transfer_officeofficer', this.transfer_officeofficer);
                    formData.append('transfer_quantity', this.transfer_quantity);
                    formData.append('transfer_date', this.transfer_date);
                    formData.append('acc_empposition', this.acc_empposition);


                    formData.append('entityname', this.record.entityname);
                    formData.append('classification', this.record.classification);
                    formData.append('code', this.record.code);
                    formData.append('article', this.record.article);
                    formData.append('particulars', this.record.particulars);
                    formData.append('modelno', this.record.modelno);
                    formData.append('serialno', this.record.serialno);
                    formData.append('propertynumber', this.qrCodeData); // Use QR code data for propertynumber
                    formData.append('propertydate', this.record.propertydate);
                    formData.append('icsnumber', this.record.icsnumber);
                    formData.append('jevnumber', this.record.jevnumber);
                    formData.append('rec_unit', this.record.rec_unit);
                    formData.append('rec_quantity', this.record.rec_quantity);
                    formData.append('rec_unitcost', this.record.rec_unitcost);
                    formData.append('rec_totalcost', this.record.rec_totalcost);
                    formData.append('isstranadjamount', this.record.isstranadjamount);
                    formData.append('accimploss', this.record.accimploss);
                    formData.append('adjustedcost', this.record.adjustedcost);
                    formData.append('repair_nature', this.record.repair_nature);
                    formData.append('repair_amount', this.record.repair_amount);
                    formData.append('issue_itemno', this.record.issue_itemno);
                    // formData.append('issue_date', this.record.issue_date);
                    // formData.append('issue_quantity', this.record.issue_quantity);
                    formData.append('issue_officeofficer', this.record.issue_officeofficer);
                    formData.append('disposal_date', this.record.disposal_date);
                    formData.append('disposal_quantity', this.record.disposal_quantity);
                    formData.append('disposal_officeofficer', this.record.disposal_officeofficer);
                    formData.append('balancequantity', this.record.balancequantity);
                    formData.append('remarks', this.record.remarks);
                    formData.append('estimatedlife', this.record.estimatedlife);
                    formData.append('issued_officer', this.record.issued_officer);
                    formData.append('issued_offposition', this.record.issued_offposition);
                    formData.append('issued_date', this.record.issued_date);
                    formData.append('acc_officer', this.record.officer);
                    // formData.append('acc_empposition', this.record.acc_empposition);
                    // formData.append('acc_date', this.record.acc_date);
                    formData.append('itr_no', this.record.itr_no);
                    formData.append('itr_date', this.record.itr_date);
                    formData.append('rrsp_no', this.record.rrsp_no);
                    formData.append('rrsp_date', this.record.rrsp_date);
                    formData.append('reasonfortrans', this.record.reasonfortrans);
                    formData.append('reg_semiissuedserialno', this.record.reg_semiissuedserialno);
                    formData.append('reg_reissued_qty', this.record.reg_reissued_qty);
                    formData.append('reg_reissued_off', this.record.reg_reissued_off);
                    formData.append('reg_disposed_qty', this.record.reg_disposed_qty);
                    formData.append('reg_balance_quantity', this.record.reg_balance_quantity);
                    formData.append('reg_amount', this.record.reg_amount);
                    formData.append('reg_remarks', this.record.reg_remarks);
                    formData.append('property_officer', this.record.property_officer);
                    formData.append('approving_authority', this.record.approving_authority);
                    formData.append('image', this.record.image);

                    // Append the image if available
                    if (this.selectedImageFile) {
                      formData.append('transfered_image', this.selectedImageFile);
                    } else if (this.capturedImage) {
                      const blob = await fetch(this.capturedImage).then(res => res.blob());
                      const file = new File([blob], `image_${Date.now()}.png`, { type: 'image/png' });
                      formData.append('transfered_image', file);
                    }

                    const response = await axios.post(`/update_transfer/${this.record.propertynumber}`, formData, {
                      headers: {
                        'Content-Type': 'multipart/form-data'
                      }
                    });

                    if (response.data.status === 'success') {
                      console.log(response.data.message || "Record updated successfully");
                      alert(response.data.message || "Record updated successfully!");

                      window.location.href = '/returnedppe';
                    } else {
                      console.error("Failed to update record:", response.data.error || response.data.message);
                      alert(response.data.error || "Error updating record.");
                    }
                  } catch (error) {
                    console.error("Error updating record:", error.response?.data?.error || error.message);
                    alert("Error updating record again.");
                  }
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

            async logout(){
                  sessionStorage.removeItem('token');
                  this.$router.push('/');
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
    </style>
    
    