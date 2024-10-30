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
                  <a class="nav-link active" href="serviceable">
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
            <h1>Return - Property, Plant and Equipment</h1>
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
                                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">RRSP</button>
                                </li>
                
                                <li class="nav-item">
                                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Return Now</button>
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
                                  <h3 class="card-title" style="text-align: center;">Returned Document</h3>
                                    
                                    <div style="font-family: Arial; max-width: 80%; margin: 0 auto; display: block;">
                                      <table style="width: 100%; border-collapse: collapse;">
                                        <thead>
                                          <tr>
                                            <th colspan="6" style="border: 1px solid black; padding: 11px; text-align: center; font-family: Arial; font-size: 14px; background-color: #fff; font-weight: normal;">
                                              <br>
                                              <div style="text-align: center; font-size: 20px; margin-bottom: 20px; font-weight: bold;">RECEIPT OF RETURNED SEMI-EXPANDABLE PROPERTY</div>
                                            </th>
                                          </tr>
                                          <tr>
                                            <th rowspan="2" colspan="4" style="border: 1px solid black; padding: 11px; text-align: center; font-family: Arial; font-size: 14px; background-color: #fff; font-weight: normal;">
                                              <b>Entity Name: </b><b style="color: blue">{{ record.entityname }}</b>
                                            </th>
                                            <th rowspan="1" colspan="2" style="border: 1px solid black; padding: 11px; text-align: center; font-family: Arial; font-size: 14px; background-color: #fff; font-weight: normal;">
                                              <b>Date: ______________</b>
                                            </th>
                                          </tr>
                                          <tr>
                                            <th colspan="2" style="border: 1px solid black; padding: 11px; text-align: center; font-family: Arial; font-size: 14px; background-color: #fff; font-weight: normal;">
                                              <b>RRSP No. ______________</b>
                                            </th>
                                          </tr>
                                          <tr>
                                            <th colspan="6" style="border: 1px solid black; padding: 11px; text-align: center; font-family: Arial; font-size: 14px; background-color: #fff; font-weight: normal;">
                                              <b>This is to acknowledge receipt of the returned Semi-expendable Property</b>
                                            </th>
                                          </tr>
                                          <tr>
                                            <th colspan="2" style="border: 1px solid black; padding: 11px; text-align: center; font-family: Arial; font-size: 14px; background-color: #fff; font-weight: normal;">
                                              <b>Item Description</b>
                                            </th>
                                            <th style="border: 1px solid black; padding: 11px; text-align: center; font-family: Arial; font-size: 14px; background-color: #fff; font-weight: normal;">
                                              <b>Quantity</b>
                                            </th>
                                            <th style="border: 1px solid black; padding: 11px; text-align: center; font-family: Arial; font-size: 14px; background-color: #fff; font-weight: normal;">
                                              <b>ICS No.</b>
                                            </th>
                                            <th style="border: 1px solid black; padding: 11px; text-align: center; font-family: Arial; font-size: 14px; background-color: #fff; font-weight: normal;">
                                              <b>End-User</b>
                                            </th>
                                            <th style="border: 1px solid black; padding: 11px; text-align: center; font-family: Arial; font-size: 14px; background-color: #fff; font-weight: normal;">
                                              <b>Remarks</b>
                                            </th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td colspan="2" style="border: 1px solid black; padding: 11px; text-align: center; font-family: Arial; font-size: 14px; height: 20px; color: blue;">
                                              {{ record.fulldescription }}
                                            </td>
                                            <td style="border: 1px solid black; padding: 11px; text-align: center; font-family: Arial; font-size: 14px; height: 20px; color: blue;">
                                              {{ record.issue_quantity }}
                                            </td>
                                            <td style="border: 1px solid black; padding: 11px; text-align: center; font-family: Arial; font-size: 14px; height: 20px; color: blue;">
                                              {{ record.icsnumber }}
                                            </td>
                                            <td style="border: 1px solid black; padding: 11px; text-align: center; font-family: Arial; font-size: 14px; height: 20px; color: blue;">
                                              {{ record.acc_officer }}
                                            </td>
                                            <td style="border: 1px solid black; padding: 11px; text-align: center; font-family: Arial; font-size: 14px; height: 20px; color: blue;">
                                              {{ record.remarks }}
                                            </td>
                                          </tr>
                                          <!-- Empty rows for additional entries -->
                                          <tr v-for="i in 5" :key="i">
                                            <td colspan="2" style="border: 1px solid black; padding: 11px; text-align: center; font-family: Arial; font-size: 14px; height: 20px;"></td>
                                            <td style="border: 1px solid black; padding: 11px; text-align: center; font-family: Arial; font-size: 14px; height: 20px;"></td>
                                            <td style="border: 1px solid black; padding: 11px; text-align: center; font-family: Arial; font-size: 14px; height: 20px;"></td>
                                            <td style="border: 1px solid black; padding: 11px; text-align: center; font-family: Arial; font-size: 14px; height: 20px;"></td>
                                            <td style="border: 1px solid black; padding: 11px; text-align: center; font-family: Arial; font-size: 14px; height: 20px;"></td>
                                          </tr>
                                          <tr>
                                            <td colspan="3" style="border: 1px solid black; padding: 11px; text-align: center; font-family: Arial; font-size: 14px;">
                                              Returned by:<br><br><br><b><u>{{ record.acc_officer }}</u></b><br>End User<br><br>______________<br>Date
                                            </td>
                                            <td colspan="3" style="border: 1px solid black; padding: 11px; text-align: center; font-family: Arial; font-size: 14px;">
                                              Received by:<br><br><br><b><u>{{ record.property_officer }}</u></b><br>Head Property and/or Supply Division/Unit<br><br>______________<br>Date
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                                

                
                            <div class="tab-pane fade pt-3" id="profile-settings">
                              <h3 class="card-title" style="text-align: center;">Return Verification</h3>
                            
                              <!-- Single Form with Two Columns -->
                              <form id="updateForm" method="POST" @submit.prevent="updateReturnRecord" enctype="multipart/form-data">
                                <div class="container">
                                  <div class="row">
                                    <!-- Column 1: Officer and Quantity Fields -->
                                    <div class="col-md-6">
                                      <!-- Officer Name Field -->
                                      <div class="mb-3">
                                        <label for="reg_returned_off" class="form-label">Officer</label>
                                        <input type="text" class="form-control" id="reg_returned_off" v-model="record.acc_officer" required>
                                      </div>
                            
                                      <!-- Quantity Field -->
                                      <div class="mb-3">
                                        <label for="reg_returned_qty" class="form-label">Quantity</label>
                                        <input type="number" class="form-control" id="reg_returned_qty" v-model="record.issue_quantity" required>
                                      </div>

                                      <!-- Remarks Field -->
                                      <div class="mb-3">
                                        <label for="remarks" class="form-label">Remarks</label>
                                        <input type="text" class="form-control" id="remarks" v-model="record.remarks" required>
                                      </div>
                            
                                    </div>
                            
                                    <!-- Column 2: Image Verification (Image Upload) -->
                                    <div class="col-md-6">
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
                                    </div>
                                  </div>
                            
                                  <!-- Submit Button for the Whole Form -->
                                  <div class="row">
                                    <div class="col-md-12 text-center">
                                      <button type="submit" class="btn btn-primary">Return</button>
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
              record: {
                acc_officer: '',
                issue_quantity: '',
                remarks: '',
                uploadedImage: ''
              }
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
                    const response = await fetch(`http://dilg.test/backend/generateRRSPPDF/${recordId}`, {
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

            async updateReturnRecord() {
              try {
                const formData = new FormData();

                // Append the updated data
                formData.append('reg_returned_off', this.record.acc_officer);
                formData.append('reg_returned_qty', this.record.issue_quantity);
                formData.append('remarks', this.record.remarks);
                formData.append('reg_remarks', this.record.remarks);

                // Append the image if available
                if (this.selectedImageFile) {
                  formData.append('returned_image', this.selectedImageFile);
                } else if (this.capturedImage) {
                  // Convert captured image to file
                  const blob = await fetch(this.capturedImage).then(res => res.blob());
                  const file = new File([blob], `image_${Date.now()}.png`, { type: 'image/png' });
                  formData.append('returned_image', file);
                }

                // Use `record.propertynumber` directly in the URL
                const response = await axios.post(`/update_return/${this.record.propertynumber}`, formData, {
                  headers: {
                    'Content-Type': 'multipart/form-data'
                  }
                });

                // Handle response
                if (response.data.status === 'success') {
                  console.log(response.data.message);
                  alert(response.data.message);
                  window.location.href = response.data.redirect_url;
                } else {
                  console.error("Error updating record:", response.data.error);
                  alert(response.data.error);
                  window.location.href = response.data.redirect_url;
                }
              } catch (error) {
                console.error("Error updating record:", error.response ? error.response.data.error : error.message);
                alert("Error updating record. Please try again.");
                window.location.href = '/returnppe';
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
    
    