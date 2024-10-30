<template>
<div id="app" style="background-image: url('./img/color.jpg'); background-size: cover; background-attachment: fixed; height: 1650px;" @click="hideContextMenu">
        <!-- ======= Header ======= -->
        <header id="header" class="header fixed-top d-flex align-items-center">
  
      <div class="d-flex align-items-center justify-content-between">
        <a href="/dashboard" class="logo d-flex align-items-center">
          <img src="./img/logo1.png" alt="">
          <span class="d-none d-lg-block" style="font-family: Times New Roman, Times, serif; font-size: 100%; color: rgb(42, 43, 72);">
            <i>INVEN<sup style="font-size: 70%;">Track</sup></i>
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
                <i class="bi bi-circle"></i><span>Ledger Card</span>
              </a>
            </li>
            <li>
              <a href="propertycard">
                <i class="bi bi-circle"></i><span>Property Card</span>
              </a>
            </li>
            <li>
              <a href="ackreceipt">
                <i class="bi bi-circle"></i><span>Acknowledgement Receipt</span>
              </a>
            </li>
            <li>
              <a href="transferreport">
                <i class="bi bi-circle"></i><span>Transfer Report</span>
              </a>
            </li>
            <li>
              <a href="rlsddp">
                <i class="bi bi-circle"></i><span>RLSDDP</span>
              </a>
            </li>
          </ul>
        </li><!-- End Forms Nav -->

        <li class="nav-heading">input</li>

        <li class="nav-item">
        <a class="nav-link active" href="/workspace"> 
            <i class="bi bi-folder-plus"></i>
            <span>Workspace</span>
        </a>
        </li>
        <li class="nav-item">
          <a class="nav-link collapsed" href="/logbook">
            <i class="bi bi-folder-plus"></i>
            <span>Logbook</span>
          </a>
        </li><!-- End Input Nav -->

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
                          <h1>Procurement</h1>
                          <nav>
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="/workspace">Input</a></li>
                              <li class="breadcrumb-item active">Workspace</li>
                            </ol>
                          </nav>
                        </div><!-- End Page Title -->
                    
                          <section class="section">
                          <div class="row">
                          <!-- <form class="row g-3"> -->
                          <div class="row g-3" >


                            <div>
                              <div class="body">
                    <div class="radio-input">
                      <label>
                        <input
                          checked
                          value="inputs"
                          name="value-radio"
                          id="inputs"
                          type="radio"
                          v-model="activeTab"
                        />
                        <span>Inputs</span>
                      </label>

                      <label>
                        <input
                          value="records"
                          name="value-radio"
                          id="records"
                          type="radio"
                          v-model="activeTab"
                        />
                        <span>Records</span>
                      </label>

                      <label>
                        <input
                          value="requestTable"
                          name="value-radio"
                          id="requestTable"
                          type="radio"
                          v-model="activeTab"
                        />
                        <span>Request Table</span>
                      </label>

                      <span class="selection"></span>
                    </div>
                  </div>

                  <br>
                  <br>

    <!-- Tab Contents -->
    <div v-if="activeTab === 'inputs'">
      <!-- Content for Inputs Tab -->
       
  
            <form enctype="multipart/form-data" id="myForm">
             
              
              <div class="card">
                <div class="layout">
                <div class="card-body">
                  <div class="container-fluid">
                  <div class="row justify-content-center">
                    
        
            <!-- Page Navigation -->
            <div v-if="currentFormPage === 1">
              
              <!-- Page 1 Content -->
              <div class="row g-1">
                <label class="card-title text-center" style="font-size: 100%">Equipment</label>
                <div class="col-12">
                  <br>
                  <label for="particulars" class="form-label">Particulars</label>
                  <select class="form-select" id="particulars" v-model="formselectedParticular" @change="populateRecords" required>
                    <option value="" disabled>Select Particular</option>
                    <option v-for="item in inventory" :value="item.id" :key="item.id">{{ item.particulars }}</option>
                  </select>
                </div>

                <div>
                  <div class="col-12">
                    <label for="entityname" class="form-label">Entity Name</label>
                    <input type="text" disabled class="form-control" id="entityname" v-model="entityname">
                  </div>
                  <div class="col-12">
                    <label for="classification" class="form-label">Classification</label>
                    <input type="text" disabled class="form-control" id="classification" v-model="classification">
                  </div>
                  <div class="col-12">
                    <label for="code" class="form-label">Code</label>
                    <input type="text" disabled class="form-control" id="code" v-model="code">
                  </div>
                </div>

                <div class="section-divider"></div> <!-- Custom Divider -->

                <div class="row g-1">
                  <label class="card-title text-center" style="font-size: 100%">Description</label>
                  <div class="col-12">
                    <label for="article" class="form-label">Article</label>
                    <input type="text" disabled class="form-control" id="article" v-model="article">
                  </div>
                  <div class="col-6">
                    <label for="modelno" class="form-label">Model No.:</label>
                    <input type="text" disabled class="form-control" id="modelno" v-model="modelno">
                  </div>
                  <div class="col-6">
                    <label for="serialno" class="form-label">Serial No.:</label>
                    <input type="text" disabled class="form-control" id="serialno" v-model="serialno">
                    <br>
                  </div>
                </div>

                <div class="section-divider"></div> <!-- Custom Divider -->

                <div class="row g-1">
                  <label class="card-title text-center" style="font-size: 100%">Semi-expendable</label>
                  <div class="col-6">
                          <br>
                          <label for="propertynumber" class="form-label">Property Number</label>
                          <input type="text" class="form-control" id="propertynumber" v-model="propertynumber" placeholder="MDO-CPU-02">
                        </div>
                        <div class="col-6">
                          <br>
                          <label for="propertydate" class="form-label">Property Date</label>
                          <input type="date" class="form-control" id="propertydate" v-model="propertydate">
                        </div>
                      </div>

                      
                      <div class="section-divider"></div> <!-- Custom Divider -->
                            <br>
                      <div class="row g-1">
                        <label class="card-title text-center" style="font-size: 100%">Reference</label>
                        <div class="col-6">
                          <br>
                          <label for="icsnumber" class="form-label">ICS NO.</label>
                          <input type="text" class="form-control" id="icsnumber" v-model="icsnumber">
                        </div>
                        <div class="col-6">
                          <br>
                          <label for="jevnumber" class="form-label">JEV NO.</label>
                          <input type="text" class="form-control" id="jevnumber" v-model="jevnumber">
                        </div>
                      </div>

                      <div class="section-divider"></div> <!-- Custom Divider -->

                      <div class="row g-1">
                        <label class="card-title text-center" style="font-size: 100%">Receipt</label>
                        <div class="col-6">
                          <br>
                          <label for="rec_quantity" class="form-label">Receipt Quantity</label>
                          <input type="text" class="form-control" id="rec_quantity" v-model="rec_quantity" placeholder="0" required>
                        </div>
                        <div class="col-6">
                          <br>
                          <label for="rec_unit" class="form-label">Unit</label>
                          <select class="form-select" id="rec_unit" v-model="rec_unit" required>
                            <option value="unit">Unit</option>
                            <option value="set">Set</option>
                          </select>
                        </div>
                        <div class="col-6">
                          <br>
                          <label for="rec_unitcost" class="form-label">Receipt Unit Cost</label>
                    <input type="text" class="form-control" id="rec_unitcost" v-model="rec_unitcost" placeholder="0.00" disabled>
                  </div>
                  <div class="col-6">
                    <br>
                    <label for="rec_totalcost" class="form-label">Receipt Total Cost</label>
                    <input type="text" class="form-control" id="rec_totalcost" :value="totalCostFormatted" placeholder="0.00" disabled>
                    <br>
                  </div>
                </div>
<hr>
                <!-- Navigation Buttons -->
                <div style="display: flex; justify-content: flex-end;">
                          <button class="nextbtn" @click="nextPage">
                            <span>Next</span>
                          </button>
                        </div>
                        </div>
                    </div>
                  </div>
              

 
      <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-lg-14">
        <div class="card-body">
        <!-- <div class="card">
          <div class="card-body"> -->
            <!-- Page 2 Content -->
            <div v-if="currentFormPage === 2">
              <!-- Others -->
              <div class="row g-1">
                <label class="card-title text-center" style="font-size: 100%">Others</label>
                <div class="col-12">
                  <br>
                  <label for="isstranadjamount" class="form-label">Issue/ Transfer/ Adjustments (Amount)</label>
                  <input type="text" class="form-control" id="isstranadjamount" v-model="isstranadjamount" placeholder="0.00">
                </div>
                <div class="col-6">
                  <label for="accimploss" class="form-label">Acc Imp Loss</label>
                  <input type="text" class="form-control" id="accimploss" v-model="accimploss">
                </div>
                <div class="col-6">
                  <label for="adjustedcost" class="form-label">Adjusted Cost</label>
                  <input type="text" class="form-control" id="adjustedcost" v-model="adjustedcost" placeholder="0.00">
                  <br>
                </div>
              </div>

              <div class="section-divider"></div> <!-- Custom Divider -->

              <!-- History of Repair -->
              <div class="row g-1">
                <label class="card-title text-center" style="font-size: 100%">History of Repair</label>
                <div class="col-6">
                  <br>
                  <label for="repair_nature" class="form-label">Nature of Repair</label>
                  <input type="text" class="form-control" id="repair_nature" v-model="repair_nature">
                </div>
                <div class="col-6">
                  <br>
                  <label for="repair_amount" class="form-label">Repair Amount</label>
                  <input type="text" class="form-control" id="repair_amount" v-model="repair_amount">
                  <br>
                </div>
              </div>

              <div class="section-divider"></div> <!-- Custom Divider -->

              <!-- Issue -->
              <div class="row g-1">
                <label class="card-title text-center" style="font-size: 100%">Issue</label>
                <div class="col-12">
                  <br>
                  <label for="issue_date" class="form-label">Issue Item Date</label>
                  <input type="date" class="form-control" id="issue_date" v-model="issue_date" required>
                </div>
                <div class="col-12">
                  <label for="issue_officeofficer" class="form-label">Issue Office/Officer</label>
                  <input type="text" class="form-control" id="issue_officeofficer" v-model="issue_officeofficer" placeholder="Base sa nagamit ng system" required>
                </div>
              </div>

              <div class="section-divider"></div> <!-- Custom Divider -->

              <!-- Transfer -->
              <div class="row g-1">
                <label class="card-title text-center" style="font-size: 100%">Transfer</label>
                <div class="col-6">
                  <br>
                  <label for="transfer_date" class="form-label">Transfer Date</label>
                  <input type="date" class="form-control" id="transfer_date" v-model="transfer_date" required>
                </div>
                <div class="col-6">
                  <br>
                  <label for="transfer_quantity" class="form-label">Transfer Quantity</label>
                  <input type="text" class="form-control" id="transfer_quantity" v-model="transfer_quantity" required>
                </div>
                <div class="col-12">
                  <br>
                  <label for="transfer_officeofficer" class="form-label">Transfer Office/Officer</label>
                  <input type="text" class="form-control" id="transfer_officeofficer" v-model="transfer_officeofficer" required>
                </div>
              </div>

              <div class="section-divider"></div> <!-- Custom Divider -->

              <!-- Disposal -->
              <div class="row g-1">
                <label class="card-title text-center" style="font-size: 100%">Disposal</label>
                <div class="col-6">
                  <br>
                  <label for="disposal_date" class="form-label">Disposal Date</label>
                  <input type="date" class="form-control" id="disposal_date" v-model="disposal_date" required>
                </div>
                <div class="col-6">
                  <br>
                  <label for="disposal_quantity" class="form-label">Disposal Quantity</label>
                  <input type="text" class="form-control" id="disposal_quantity" v-model="disposal_quantity" required>
                </div>
                <div class="col-12">
                  <br>
                  <label for="disposal_officeofficer" class="form-label">Disposal Officer</label>
                  <input type="text" class="form-control" id="disposal_officeofficer" v-model="disposal_officeofficer" required>
                </div>
              </div>
              <br>
<hr>
              <!-- Navigation Buttons -->

              <div class="d-flex justify-content-between mt-4">
                <button class="backbtn" @click="prevPage" :disabled="currentFormPage === 1">
                <svg height="16" width="16" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1024 1024">
                  <path d="M874.690416 495.52477c0 11.2973-9.168824 20.466124-20.466124 20.466124l-604.773963 0 188.083679 188.083679c7.992021 7.992021 7.992021 20.947078 0 28.939099-4.001127 3.990894-9.240455 5.996574-14.46955 5.996574-5.239328 0-10.478655-1.995447-14.479783-5.996574l-223.00912-223.00912c-3.837398-3.837398-5.996574-9.046027-5.996574-14.46955 0-5.433756 2.159176-10.632151 5.996574-14.46955l223.019353-223.029586c7.992021-7.992021 20.957311-7.992021 28.949332 0 7.992021 8.002254 7.992021 20.957311 0 28.949332l-188.073446 188.073446 604.753497 0C865.521592 475.058646 874.690416 484.217237 874.690416 495.52477z"></path>
                </svg>
                <span>Back</span>
              </button>
              <button class="nextbtn" @click="nextPage">
                            <span>Next</span>
                          </button>
              </div>
              </div>
              </div>
              </div>
              </div>
              </div>
                  
              <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-lg-14">
        <!-- <div class="card">
          <div class="card-body"> -->
            <!-- Page 3 Content -->
            <div v-if="currentFormPage === 3">
              <!-- Balance Quantity -->
              <div class="row g-1">
                <label class="card-title text-center" style="font-size: 100%">Balance Quantity</label>
                <div class="col-12">
                  <br>
                  <label for="remarks" class="form-label">Remarks</label>
                  <select class="form-select" id="remarks" v-model="remarks">
                    <option value="SERVICEABLE">SERVICEABLE</option>
                    <option value="UNSERVICEABLE">UNSERVICEABLE</option>
                  </select>
                </div>
                <div class="col-12">
                  <label for="estimatedlife" class="form-label">Estimated Useful Life</label>
                  <input type="text" class="form-control" id="estimatedlife" v-model="estimatedlife" required>
                </div>
              </div>

              <div class="section-divider"></div> <!-- Custom Divider -->

              <!-- Received from: (Issued by) -->
              <div class="row g-1">
                <label class="card-title text-center" style="font-size: 100%">Received from: (Issued by)</label>
                <div class="col-12">
                  <br>
                  <label for="issued_officer" class="form-label">Issued Officer</label>
                  <input type="text" class="form-control" id="issued_officer" v-model="issued_officer" placeholder="Nakabase din sa nagamit" required>
                </div>
                <div class="col-6">
                  <br>
                  <label for="issued_offposition" class="form-label">Issued Position</label>
                  <input type="text" class="form-control" id="issued_offposition" v-model="issued_offposition" required>
                </div>
                <div class="col-6">
                  <br>
                  <label for="issued_date" class="form-label">Issued Date</label>
                  <input type="date" class="form-control" id="issued_date" v-model="issued_date" required>
                  <br>
                </div>
              </div>

              <div class="section-divider"></div> <!-- Custom Divider -->

              <!-- Received by: (Accountable Officer) -->
              <div class="row g-3">
                <label class="card-title text-center" style="font-size: 100%">Received by: (Accountable Officer)</label>
                <div class="col-12">
                  <br>
                  <label for="acc_officer" class="form-label">Accountable Officer</label>
                  <select class="form-select" id="acc_officer" v-model="acc_officer" required>
                    <option value="" disabled>Select Employee</option>
                    <option v-for="employee in employees" :key="employee.empid" :value="employee.empfullname">{{ employee.empfullname }}</option>
                  </select>
                </div>
                <div class="col-12">
                  <label for="acc_empposition" class="form-label">Accountable Position</label>
                  <select class="form-select" id="acc_empposition" v-model="acc_empposition" required>
                    <option value="" disabled>Select Position</option>
                    <option v-for="employee in employees" :key="employee.empid" :value="employee.empposition">{{ employee.empposition }}</option>
                  </select>
                </div>
                <div class="col-12">
                  <label for="acc_date" class="form-label">Accountable Date</label>
                  <input type="date" class="form-control" id="acc_date" v-model="acc_date" required>
                  <br>
                </div>
              </div>

              <div class="section-divider"></div> <!-- Custom Divider -->

              <!-- Inventory Transfer Report -->
              <div class="row g-1">
                <label class="card-title text-center" style="font-size: 100%">Inventory Transfer Report</label>
                <div class="col-6">
                  <br>
                  <label for="itr_no" class="form-label">ITR Number</label>
                  <input type="text" class="form-control" id="itr_no" v-model="itr_no" required>
                </div>
                <div class="col-6">
                  <br>
                  <label for="itr_date" class="form-label">ITR Date</label>
                  <input type="date" class="form-control" id="itr_date" v-model="itr_date" required>
                </div>
                <div class="col-6">
                  <label for="rrsp_no" class="form-label">RRSP No.</label>
                  <input type="text" class="form-control" id="rrsp_no" v-model="rrsp_no" required>
                </div>
                <div class="col-6">
                  <label for="rrsp_date" class="form-label">RRSP Date</label>
                  <input type="date" class="form-control" id="rrsp_date" v-model="rrsp_date" required>
                </div>
                <div class="col-12">
                  <label for="reasonfortrans" class="form-label">Reason for Transfer</label>
                  <textarea class="form-control" id="reasonfortrans" v-model="reasonfortrans" required></textarea>
                </div>
              </div>
                <hr>
              <!-- Navigation Buttons -->
              <div class="d-flex justify-content-between mt-4">
                <button class="backbtn" @click="prevPage" :disabled="currentFormPage === 1">
                <svg height="16" width="16" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1024 1024">
                  <path d="M874.690416 495.52477c0 11.2973-9.168824 20.466124-20.466124 20.466124l-604.773963 0 188.083679 188.083679c7.992021 7.992021 7.992021 20.947078 0 28.939099-4.001127 3.990894-9.240455 5.996574-14.46955 5.996574-5.239328 0-10.478655-1.995447-14.479783-5.996574l-223.00912-223.00912c-3.837398-3.837398-5.996574-9.046027-5.996574-14.46955 0-5.433756 2.159176-10.632151 5.996574-14.46955l223.019353-223.029586c7.992021-7.992021 20.957311-7.992021 28.949332 0 7.992021 8.002254 7.992021 20.957311 0 28.949332l-188.073446 188.073446 604.753497 0C865.521592 475.058646 874.690416 484.217237 874.690416 495.52477z"></path>
                </svg>
                <span>Back</span>
              </button>
              <button class="nextbtn" @click="nextPage">
                            <span>Next</span>
                          </button>
              </div>
            </div>
      </div>
    </div>
  </div>


  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-lg-12">
        
      <!-- REGISTRY OF SEMI-EXPENDABLE PROPERTY ISSUED -->
      <div v-if="currentFormPage === 4">
      <div class="row g-1">
        <label class="card-title text-center" style="font-size: 100%">REGISTRY OF SEMI-EXPENDABLE PROPERTY ISSUED</label>
        <div class="section-divider"></div> <!-- Custom Divider -->
        
        <!-- Returned -->
        <label class="card-title" style="font-size: 100%">Returned</label>
        <div class="col-6">
          <br>
          <label for="reg_semiissuedserialno" class="form-label">SERIAL NO.:</label>
          <input type="text" class="form-control" id="reg_semiissuedserialno" v-model="reg_semiissuedserialno" required>
        </div>
        <div class="col-6">
          <br>
          <label for="reg_returned_qty" class="form-label">Returned Quantity</label>
          <input type="text" class="form-control" id="reg_returned_qty" v-model="reg_returned_qty" required>
        </div>

        <div class="section-divider"></div> <!-- Custom Divider -->

        <!-- Re-issued -->
        <label class="card-title text-center" style="font-size: 100%">Re-issued</label>
        <div class="col-12">
          <br>
          <label for="reg_reissued_qty" class="form-label">Re-issued Quantity</label>
          <input type="text" class="form-control" id="reg_reissued_qty" v-model="reg_reissued_qty" required>
        </div>
        <div class="col-12">
          <label for="reg_reissued_off" class="form-label">Re-issued Office/Officer</label>
          <input type="text" class="form-control" id="reg_reissued_off" v-model="reg_reissued_off" required>
        </div>

        <div class="section-divider"></div> <!-- Custom Divider -->

        <!-- Disposed -->
        <label class="card-title text-center" style="font-size: 100%">Disposed</label>
        <div class="col-12">
          <br>
          <label for="reg_disposed_qty" class="form-label">Disposed Quantity</label>
          <input type="text" class="form-control" id="reg_disposed_qty" v-model="reg_disposed_qty" required>
        </div>
        <div class="col-12">
          <label for="reg_balance_quantity" class="form-label">Balance Quantity</label>
          <input type="text" class="form-control" id="reg_balance_quantity" v-model="reg_balance_quantity" required>
        </div>
        <div class="col-12">
          <label for="reg_amount" class="form-label">Amount</label>
          <input type="text" class="form-control" id="reg_amount" v-model="reg_amount" required>
        </div>
        <div class="col-12">
          <label for="reg_remarks" class="form-label">Remarks</label>
          <select class="form-select" id="reg_remarks" v-model="reg_remarks" required>
            <option value="SERVICEABLE">SERVICEABLE</option>
            <option value="UNSERVICEABLE">UNSERVICEABLE</option>
          </select>
        </div>

        <div class="section-divider"></div> <!-- Custom Divider -->

        <!-- ASSIGNED OFFICER -->
        <label class="card-title text-center" style="font-size: 100%">ASSIGNED OFFICER</label>
        <br>
        <div class="col-12">
          <br>
          <label for="property_officer" class="form-label">Property Officer</label>
          <input type="text" class="form-control" id="property_officer" v-model="property_officer" placeholder="nakabase sa nagamit" required>
        </div>
        <div class="col-12">
          <br>
          <label for="approving_authority" class="form-label">Head of Office/ Approving Authority</label>
          <input type="text" class="form-control" id="approving_authority" v-model="approving_authority" placeholder="magbase sa position" required>
        </div>

        <!-- Buttons -->
        <br><br><br><br><br><br>
  
        <hr>
        
        <div class="d-flex justify-content-between align-items-center">
          <button class="backbtn" @click="prevPage" :disabled="currentFormPage === 1">
                <svg height="16" width="16" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1024 1024">
                  <path d="M874.690416 495.52477c0 11.2973-9.168824 20.466124-20.466124 20.466124l-604.773963 0 188.083679 188.083679c7.992021 7.992021 7.992021 20.947078 0 28.939099-4.001127 3.990894-9.240455 5.996574-14.46955 5.996574-5.239328 0-10.478655-1.995447-14.479783-5.996574l-223.00912-223.00912c-3.837398-3.837398-5.996574-9.046027-5.996574-14.46955 0-5.433756 2.159176-10.632151 5.996574-14.46955l223.019353-223.029586c7.992021-7.992021 20.957311-7.992021 28.949332 0 7.992021 8.002254 7.992021 20.957311 0 28.949332l-188.073446 188.073446 604.753497 0C865.521592 475.058646 874.690416 484.217237 874.690416 495.52477z"></path>
                </svg>
                <span>Back</span>
              </button>

  <button class="button1" @click="confirmReset" type="reset" style="width: 120px; height: 40px;">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-repeat" viewBox="0 0 16 16">
      <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z"></path>
      <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z"></path>
    </svg>
    Reset Form
  </button>

  <div class="d-flex">
    <button @click="saveOrUpdate" v-if="status !== 'update'" type="submit" class="button">
      Submit
    </button>
    <button @click="saveOrUpdate" v-if="status === 'update'" type="submit" class="button">
      Update
    </button>
  </div>
</div>

      
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div> 
</div>
      </form>
    </div>
    </div>


    <div v-if="activeTab === 'records'">

      <div class="updatemodal-backdrop" v-if="showUpdateFormModal">
  <div class="modal-card">
    <button class="delete" aria-label="close" @click="closeUpdateFormModal"></button>
    <section>
      <transition name="updatemodal-slide">
      <form enctype="multipart/form-data" id="myForm">
        <div class="card">
          <div class="layout">
            <div class="card-body">
              <div class="container-fluid">
                <div class="row justify-content-center">
                  <!-- Page Navigation -->
                  <div v-if="currentFormPage === 1">
                    <!-- Page 1 Content -->
                    <div class="row g-1">
                      <label class="card-title text-center" style="font-size: 100%">Equipment</label>
                      <div class="col-12">
                        <br>
                        <label for="particulars" class="form-label">Particulars</label>
                 <select class="form-select" id="particulars" v-model="formselectedParticular" @change="populateRecords" required>
                   <option value="" disabled>Select Particular</option>
                   <option v-for="item in inventory" :value="item.id" :key="item.id">{{ item.particulars }}</option>
                 </select>
               </div>

               <div>
                 <div class="col-12">
                   <label for="entityname" class="form-label">Entity Name</label>
                   <input type="text" disabled class="form-control" id="entityname" v-model="entityname">
                 </div>
                 <div class="col-12">
                   <label for="classification" class="form-label">Classification</label>
                   <input type="text" disabled class="form-control" id="classification" v-model="classification">
                 </div>
                 <div class="col-12">
                   <label for="code" class="form-label">Code</label>
                   <input type="text" disabled class="form-control" id="code" v-model="code">
                 </div>
               </div>

               <div class="section-divider"></div> <!-- Custom Divider -->

               <div class="row g-1">
                 <label class="card-title text-center" style="font-size: 100%">Description</label>
                 <div class="col-12">
                   <label for="article" class="form-label">Article</label>
                   <input type="text" disabled class="form-control" id="article" v-model="article">
                 </div>
                 <div class="col-6">
                   <label for="modelno" class="form-label">Model No.:</label>
                   <input type="text" disabled class="form-control" id="modelno" v-model="modelno">
                 </div>
                 <div class="col-6">
                   <label for="serialno" class="form-label">Serial No.:</label>
                   <input type="text" disabled class="form-control" id="serialno" v-model="serialno">
                   <br>
                 </div>
               </div>

               <div class="section-divider"></div> <!-- Custom Divider -->

               <div class="row g-1">
                 <label class="card-title text-center" style="font-size: 100%">Semi-expendable</label>
                 <div class="col-6">
                         <br>
                         <label for="propertynumber" class="form-label">Property Number</label>
                         <input type="text" class="form-control" id="propertynumber" v-model="propertynumber" placeholder="MDO-CPU-02">
                       </div>
                       <div class="col-6">
                         <br>
                         <label for="propertydate" class="form-label">Property Date</label>
                         <input type="date" class="form-control" id="propertydate" v-model="propertydate">
                       </div>
                     </div>

                     
                     <div class="section-divider"></div> <!-- Custom Divider -->
                           <br>
                     <div class="row g-1">
                       <label class="card-title text-center" style="font-size: 100%">Reference</label>
                       <div class="col-6">
                         <br>
                         <label for="icsnumber" class="form-label">ICS NO.</label>
                         <input type="text" class="form-control" id="icsnumber" v-model="icsnumber">
                       </div>
                       <div class="col-6">
                         <br>
                         <label for="jevnumber" class="form-label">JEV NO.</label>
                         <input type="text" class="form-control" id="jevnumber" v-model="jevnumber">
                       </div>
                     </div>

                     <div class="section-divider"></div> <!-- Custom Divider -->

                     <div class="row g-1">
                       <label class="card-title text-center" style="font-size: 100%">Receipt</label>
                       <div class="col-6">
                         <br>
                         <label for="rec_quantity" class="form-label">Receipt Quantity</label>
                         <input type="text" class="form-control" id="rec_quantity" v-model="rec_quantity" placeholder="0" required>
                       </div>
                       <div class="col-6">
                         <br>
                         <label for="rec_unit" class="form-label">Unit</label>
                         <select class="form-select" id="rec_unit" v-model="rec_unit" required>
                           <option value="unit">Unit</option>
                           <option value="set">Set</option>
                         </select>
                       </div>
                       <div class="col-6">
                         <br>
                         <label for="rec_unitcost" class="form-label">Receipt Unit Cost</label>
                   <input type="text" class="form-control" id="rec_unitcost" v-model="rec_unitcost" placeholder="0.00" disabled>
                 </div>
                 <div class="col-6">
                   <br>
                   <label for="rec_totalcost" class="form-label">Receipt Total Cost</label>
                   <input type="text" class="form-control" id="rec_totalcost" :value="totalCostFormatted" placeholder="0.00" disabled>
                   <br>
                 </div>
               </div>
<hr>
               <!-- Navigation Buttons -->
               <div style="display: flex; justify-content: flex-end;">
                         <button class="nextbtn" @click="nextPage">
                           <span>Next</span>
                         </button>
                       </div>
                       </div>
                   </div>
                 </div>
             


                    <div class="container-fluid">
                  <div class="row justify-content-center">
                    <div class="col-lg-14">
                      <div class="card-body">
                      
                          <!-- Page 2 Content -->
                          <div v-if="currentFormPage === 2">
                            <!-- Others -->
                            <div class="row g-1">
                              <label class="card-title text-center" style="font-size: 100%">Others</label>
                              <div class="col-12">
                                <br>
                                <label for="isstranadjamount" class="form-label">Issue/ Transfer/ Adjustments (Amount)</label>
                                <input type="text" class="form-control" id="isstranadjamount" v-model="isstranadjamount" placeholder="0.00">
                              </div>
                              <div class="col-6">
                                <label for="accimploss" class="form-label">Acc Imp Loss</label>
                                <input type="text" class="form-control" id="accimploss" v-model="accimploss">
                              </div>
                              <div class="col-6">
                                <label for="adjustedcost" class="form-label">Adjusted Cost</label>
                                <input type="text" class="form-control" id="adjustedcost" v-model="adjustedcost" placeholder="0.00">
                                <br>
                              </div>
                            </div>

                            <div class="section-divider"></div> <!-- Custom Divider -->

                            <!-- History of Repair -->
                            <div class="row g-1">
                              <label class="card-title text-center" style="font-size: 100%">History of Repair</label>
                              <div class="col-6">
                                <br>
                                <label for="repair_nature" class="form-label">Nature of Repair</label>
                                <input type="text" class="form-control" id="repair_nature" v-model="repair_nature">
                              </div>
                              <div class="col-6">
                                <br>
                                <label for="repair_amount" class="form-label">Repair Amount</label>
                                <input type="text" class="form-control" id="repair_amount" v-model="repair_amount">
                                <br>
                              </div>
                            </div>

                            <div class="section-divider"></div> <!-- Custom Divider -->

                            <!-- Issue -->
                            <div class="row g-1">
                              <label class="card-title text-center" style="font-size: 100%">Issue</label>
                              <div class="col-12">
                                <br>
                                <label for="issue_date" class="form-label">Issue Item Date</label>
                                <input type="date" class="form-control" id="issue_date" v-model="issue_date" required>
                              </div>
                              <div class="col-12">
                                <label for="issue_officeofficer" class="form-label">Issue Office/Officer</label>
                                <input type="text" class="form-control" id="issue_officeofficer" v-model="issue_officeofficer" placeholder="Base sa nagamit ng system" required>
                              </div>
                            </div>

                            <div class="section-divider"></div> <!-- Custom Divider -->

                            <!-- Transfer -->
                            <div class="row g-1">
                              <label class="card-title text-center" style="font-size: 100%">Transfer</label>
                              <div class="col-6">
                                <br>
                                <label for="transfer_date" class="form-label">Transfer Date</label>
                                <input type="date" class="form-control" id="transfer_date" v-model="transfer_date" required>
                              </div>
                              <div class="col-6">
                                <br>
                                <label for="transfer_quantity" class="form-label">Transfer Quantity</label>
                                <input type="text" class="form-control" id="transfer_quantity" v-model="transfer_quantity" required>
                              </div>
                              <div class="col-12">
                                <br>
                                <label for="transfer_officeofficer" class="form-label">Transfer Office/Officer</label>
                                <input type="text" class="form-control" id="transfer_officeofficer" v-model="transfer_officeofficer" required>
                              </div>
                            </div>

                            <div class="section-divider"></div> <!-- Custom Divider -->

                            <!-- Disposal -->
                            <div class="row g-1">
                              <label class="card-title text-center" style="font-size: 100%">Disposal</label>
                              <div class="col-6">
                                <br>
                                <label for="disposal_date" class="form-label">Disposal Date</label>
                                <input type="date" class="form-control" id="disposal_date" v-model="disposal_date" required>
                              </div>
                              <div class="col-6">
                                <br>
                                <label for="disposal_quantity" class="form-label">Disposal Quantity</label>
                                <input type="text" class="form-control" id="disposal_quantity" v-model="disposal_quantity" required>
                              </div>
                              <div class="col-12">
                                <br>
                                <label for="disposal_officeofficer" class="form-label">Disposal Officer</label>
                                <input type="text" class="form-control" id="disposal_officeofficer" v-model="disposal_officeofficer" required>
                              </div>
                            </div>
                            <br>
                <hr>
                            <!-- Navigation Buttons -->

                            <div class="d-flex justify-content-between mt-4">
                              <button class="backbtn" @click="prevPage" :disabled="currentFormPage === 1">
                              <svg height="16" width="16" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1024 1024">
                                <path d="M874.690416 495.52477c0 11.2973-9.168824 20.466124-20.466124 20.466124l-604.773963 0 188.083679 188.083679c7.992021 7.992021 7.992021 20.947078 0 28.939099-4.001127 3.990894-9.240455 5.996574-14.46955 5.996574-5.239328 0-10.478655-1.995447-14.479783-5.996574l-223.00912-223.00912c-3.837398-3.837398-5.996574-9.046027-5.996574-14.46955 0-5.433756 2.159176-10.632151 5.996574-14.46955l223.019353-223.029586c7.992021-7.992021 20.957311-7.992021 28.949332 0 7.992021 8.002254 7.992021 20.957311 0 28.949332l-188.073446 188.073446 604.753497 0C865.521592 475.058646 874.690416 484.217237 874.690416 495.52477z"></path>
                              </svg>
                              <span>Back</span>
                            </button>
                            <button class="nextbtn" @click="nextPage">
                                          <span>Next</span>
                                        </button>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                                
                            <div class="container-fluid">
                  <div class="row justify-content-center">
                    <div class="col-lg-14">
                      <!-- <div class="card">
                        <div class="card-body"> -->
                          <!-- Page 3 Content -->
                          <div v-if="currentFormPage === 3">
                            <!-- Balance Quantity -->
                            <div class="row g-1">
                              <label class="card-title text-center" style="font-size: 100%">Balance Quantity</label>
                              <div class="col-12">
                                <br>
                                <label for="remarks" class="form-label">Remarks</label>
                                <select class="form-select" id="remarks" v-model="remarks">
                                  <option value="SERVICEABLE">SERVICEABLE</option>
                                  <option value="UNSERVICEABLE">UNSERVICEABLE</option>
                                </select>
                              </div>
                              <div class="col-12">
                                <label for="estimatedlife" class="form-label">Estimated Useful Life</label>
                                <input type="text" class="form-control" id="estimatedlife" v-model="estimatedlife" required>
                              </div>
                            </div>

                            <div class="section-divider"></div> <!-- Custom Divider -->

                            <!-- Received from: (Issued by) -->
                            <div class="row g-1">
                              <label class="card-title text-center" style="font-size: 100%">Received from: (Issued by)</label>
                              <div class="col-12">
                                <br>
                                <label for="issued_officer" class="form-label">Issued Officer</label>
                                <input type="text" class="form-control" id="issued_officer" v-model="issued_officer" placeholder="Nakabase din sa nagamit" required>
                              </div>
                              <div class="col-6">
                                <br>
                                <label for="issued_offposition" class="form-label">Issued Position</label>
                                <input type="text" class="form-control" id="issued_offposition" v-model="issued_offposition" required>
                              </div>
                              <div class="col-6">
                                <br>
                                <label for="issued_date" class="form-label">Issued Date</label>
                                <input type="date" class="form-control" id="issued_date" v-model="issued_date" required>
                                <br>
                              </div>
                            </div>

                            <div class="section-divider"></div> <!-- Custom Divider -->

                            <!-- Received by: (Accountable Officer) -->
                            <div class="row g-3">
                              <label class="card-title text-center" style="font-size: 100%">Received by: (Accountable Officer)</label>
                              <div class="col-12">
                                <br>
                                <label for="acc_officer" class="form-label">Accountable Officer</label>
                                <select class="form-select" id="acc_officer" v-model="acc_officer" required>
                                  <option value="" disabled>Select Employee</option>
                                  <option v-for="employee in employees" :key="employee.empid" :value="employee.empfullname">{{ employee.empfullname }}</option>
                                </select>
                              </div>
                              <div class="col-12">
                                <label for="acc_empposition" class="form-label">Accountable Position</label>
                                <select class="form-select" id="acc_empposition" v-model="acc_empposition" required>
                                  <option value="" disabled>Select Position</option>
                                  <option v-for="employee in employees" :key="employee.empid" :value="employee.empposition">{{ employee.empposition }}</option>
                                </select>
                              </div>
                              <div class="col-12">
                                <label for="acc_date" class="form-label">Accountable Date</label>
                                <input type="date" class="form-control" id="acc_date" v-model="acc_date" required>
                                <br>
                              </div>
                            </div>

                            <div class="section-divider"></div> <!-- Custom Divider -->

                            <!-- Inventory Transfer Report -->
                            <div class="row g-1">
                              <label class="card-title text-center" style="font-size: 100%">Inventory Transfer Report</label>
                              <div class="col-6">
                                <br>
                                <label for="itr_no" class="form-label">ITR Number</label>
                                <input type="text" class="form-control" id="itr_no" v-model="itr_no" required>
                              </div>
                              <div class="col-6">
                                <br>
                                <label for="itr_date" class="form-label">ITR Date</label>
                                <input type="date" class="form-control" id="itr_date" v-model="itr_date" required>
                              </div>
                              <div class="col-6">
                                <label for="rrsp_no" class="form-label">RRSP No.</label>
                                <input type="text" class="form-control" id="rrsp_no" v-model="rrsp_no" required>
                              </div>
                              <div class="col-6">
                                <label for="rrsp_date" class="form-label">RRSP Date</label>
                                <input type="date" class="form-control" id="rrsp_date" v-model="rrsp_date" required>
                              </div>
                              <div class="col-12">
                                <label for="reasonfortrans" class="form-label">Reason for Transfer</label>
                                <textarea class="form-control" id="reasonfortrans" v-model="reasonfortrans" required></textarea>
                              </div>
                            </div>
                              <hr>
                            <!-- Navigation Buttons -->
                            <div class="d-flex justify-content-between mt-4">
                              <button class="backbtn" @click="prevPage" :disabled="currentFormPage === 1">
                              <svg height="16" width="16" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1024 1024">
                                <path d="M874.690416 495.52477c0 11.2973-9.168824 20.466124-20.466124 20.466124l-604.773963 0 188.083679 188.083679c7.992021 7.992021 7.992021 20.947078 0 28.939099-4.001127 3.990894-9.240455 5.996574-14.46955 5.996574-5.239328 0-10.478655-1.995447-14.479783-5.996574l-223.00912-223.00912c-3.837398-3.837398-5.996574-9.046027-5.996574-14.46955 0-5.433756 2.159176-10.632151 5.996574-14.46955l223.019353-223.029586c7.992021-7.992021 20.957311-7.992021 28.949332 0 7.992021 8.002254 7.992021 20.957311 0 28.949332l-188.073446 188.073446 604.753497 0C865.521592 475.058646 874.690416 484.217237 874.690416 495.52477z"></path>
                              </svg>
                              <span>Back</span>
                            </button>
                            <button class="nextbtn" @click="nextPage">
                                          <span>Next</span>
                                        </button>
                            </div>
                          </div>
                    </div>
                  </div>
                </div>


                <div class="container-fluid">
                  <div class="row justify-content-center">
                    <div class="col-lg-12">
                      
                    <!-- REGISTRY OF SEMI-EXPENDABLE PROPERTY ISSUED -->
                    <div v-if="currentFormPage === 4">
                    <div class="row g-1">
                      <label class="card-title text-center" style="font-size: 100%">REGISTRY OF SEMI-EXPENDABLE PROPERTY ISSUED</label>
                      <div class="section-divider"></div> <!-- Custom Divider -->
                      
                      <!-- Returned -->
                      <label class="card-title" style="font-size: 100%">Returned</label>
                      <div class="col-6">
                        <br>
                        <label for="reg_semiissuedserialno" class="form-label">SERIAL NO.:</label>
                        <input type="text" class="form-control" id="reg_semiissuedserialno" v-model="reg_semiissuedserialno" required>
                      </div>
                      <div class="col-6">
                        <br>
                        <label for="reg_returned_qty" class="form-label">Returned Quantity</label>
                        <input type="text" class="form-control" id="reg_returned_qty" v-model="reg_returned_qty" required>
                      </div>

                      <div class="section-divider"></div> <!-- Custom Divider -->

                      <!-- Re-issued -->
                      <label class="card-title text-center" style="font-size: 100%">Re-issued</label>
                      <div class="col-12">
                        <br>
                        <label for="reg_reissued_qty" class="form-label">Re-issued Quantity</label>
                        <input type="text" class="form-control" id="reg_reissued_qty" v-model="reg_reissued_qty" required>
                      </div>
                      <div class="col-12">
                        <label for="reg_reissued_off" class="form-label">Re-issued Office/Officer</label>
                        <input type="text" class="form-control" id="reg_reissued_off" v-model="reg_reissued_off" required>
                      </div>

                      <div class="section-divider"></div> <!-- Custom Divider -->

                      <!-- Disposed -->
                      <label class="card-title text-center" style="font-size: 100%">Disposed</label>
                      <div class="col-12">
                        <br>
                        <label for="reg_disposed_qty" class="form-label">Disposed Quantity</label>
                        <input type="text" class="form-control" id="reg_disposed_qty" v-model="reg_disposed_qty" required>
                      </div>
                      <div class="col-12">
                        <label for="reg_balance_quantity" class="form-label">Balance Quantity</label>
                        <input type="text" class="form-control" id="reg_balance_quantity" v-model="reg_balance_quantity" required>
                      </div>
                      <div class="col-12">
                        <label for="reg_amount" class="form-label">Amount</label>
                        <input type="text" class="form-control" id="reg_amount" v-model="reg_amount" required>
                      </div>
                      <div class="col-12">
                        <label for="reg_remarks" class="form-label">Remarks</label>
                        <select class="form-select" id="reg_remarks" v-model="reg_remarks" required>
                          <option value="SERVICEABLE">SERVICEABLE</option>
                          <option value="UNSERVICEABLE">UNSERVICEABLE</option>
                        </select>
                      </div>

                      <div class="section-divider"></div> <!-- Custom Divider -->

                      <!-- ASSIGNED OFFICER -->
                      <label class="card-title text-center" style="font-size: 100%">ASSIGNED OFFICER</label>
                      <br>
                      <div class="col-12">
                        <br>
                        <label for="property_officer" class="form-label">Property Officer</label>
                        <input type="text" class="form-control" id="property_officer" v-model="property_officer" placeholder="nakabase sa nagamit" required>
                      </div>
                      <div class="col-12">
                        <br>
                        <label for="approving_authority" class="form-label">Head of Office/ Approving Authority</label>
                        <input type="text" class="form-control" id="approving_authority" v-model="approving_authority" placeholder="magbase sa position" required>
                      </div>

                      <!-- Buttons -->
                      <br><br><br><br><br><br>
                
                      <hr>
                      
       <div class="d-flex justify-content-between align-items-center">
         <button class="backbtn" @click="prevPage" :disabled="currentFormPage === 1">
               <svg height="16" width="16" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1024 1024">
                 <path d="M874.690416 495.52477c0 11.2973-9.168824 20.466124-20.466124 20.466124l-604.773963 0 188.083679 188.083679c7.992021 7.992021 7.992021 20.947078 0 28.939099-4.001127 3.990894-9.240455 5.996574-14.46955 5.996574-5.239328 0-10.478655-1.995447-14.479783-5.996574l-223.00912-223.00912c-3.837398-3.837398-5.996574-9.046027-5.996574-14.46955 0-5.433756 2.159176-10.632151 5.996574-14.46955l223.019353-223.029586c7.992021-7.992021 20.957311-7.992021 28.949332 0 7.992021 8.002254 7.992021 20.957311 0 28.949332l-188.073446 188.073446 604.753497 0C865.521592 475.058646 874.690416 484.217237 874.690416 495.52477z"></path>
               </svg>
               <span>Back</span>
             </button>

                <button class="button1" @click="confirmReset" type="reset" style="width: 120px; height: 40px;">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-repeat" viewBox="0 0 16 16">
                    <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z"></path>
                    <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z"></path>
                  </svg>
                  Reset Form
                </button>

                <div class="d-flex">
                  <button @click="updatePPE" type="submit" class="button">Update</button>
                </div>
                </div>

                      <br><br><br>
                    </div>
                  </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div> 
                </div>
       
                    </form>
                        </transition>
                                </section>
                        
              </div>
            </div>
      <!-- Content for Records Tab -->
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
          <div class="card-body">
          <h5 class="card-title"></h5>

      <div class="row justify-content-center align-items-center">
        <!-- Dropdown for Employee -->
        <div class="col-lg-2">
          <select v-model="selectedEmployee" class="form-select" @change="onEmployeeChange">
            <option value="">Select Employee</option>
            <option v-for="acc_officer in distinctEmployees" :key="acc_officer" :value="acc_officer">{{ acc_officer }}</option>
          </select>
        </div>

  <!-- Dropdown for Classification -->
  <div class="col-lg-2">
    <select v-model="selectedClassification" class="form-select" :disabled="!selectedEmployee" @change="onEmployeeChange">
      <option value="">Select Classification</option>
      <option v-for="classification in distinctClassification" :key="classification" :value="classification">{{ classification }}</option>
    </select>
  </div>

  <!-- Dropdown for Article -->
  <div class="col-lg-2">
    <select v-model="selectedArticle" class="form-select" :disabled="!selectedEmployee || !selectedClassification" @change="onEmployeeChange">
      <option value="">Select Article</option>
      <option v-for="article in distinctArticle" :key="article" :value="article">{{ article }}</option>
    </select>
  </div>

  
  <!-- Dropdown for Particular -->
  <div class="col-lg-2">
    <select v-model="selectedParticular" class="form-select" :disabled="!selectedEmployee || !selectedClassification || !selectedArticle">
      <option value="">Select Particular</option>
      <option v-for="particular in distinctParticular" :key="particular" :value="particular">{{ particular }}</option>
    </select>
  </div>

  <!-- Status dropdown -->
  <div class="col-lg-2">
    <select v-model="selectedStatus" class="form-select">
      <option value="">Current Status</option>
      <option v-for="status in distinctStatus" :key="status" :value="status">{{ status }}</option>
    </select>
  </div>


<br>
<br>
<br>
<br>



<!-- Search Bar and Show Entries Dropdown -->
<div class="d-flex justify-content-between align-items-center">
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

    <!-- Search Bar -->
    
      <div class="InputContainer">
      <input placeholder="Search.." id="input" class="input" name="text" type="text" v-model="searchKeyword">
    </div>
  </div>
</div>

<br>

          <div style="overflow-y: auto;">
            <table>
          <!-- Table header -->
          <thead>
            
            <tr>
  <th rowspan="2"><b>ID</b></th>
  <th rowspan="2"><b>Image</b><br><b>Verification</b></th>
  <th rowspan="2"><b>Image</b></th>
  <th rowspan="2"><b>Entity Name</b></th>
  <th rowspan="2"><b>Semi-expendable Property Classification</b></th>
  <th rowspan="2"><b>UACS Object Code:</b></th>

  <th colspan="4"><b>Description</b></th>

  <th rowspan="2"><b>Full Description</b></th>
  <th rowspan="2">
    <b>Semi-expendable</b><br>
    <b>Property Number:</b>
</th>

  <th rowspan="2"><b>Date</b></th>

  <th colspan="2"><b>Reference</b></th>
  <th colspan="4" style="background-color: blue; color: white;"><b>Receipt</b></th>

  <th rowspan="2" style="background-color: blue; color: white;"><b>"Issue/ Transfer/ Adjustments (Amount)"</b></th>
  <th rowspan="2" style="background-color: blue; color: white;"><b>Accummulated Impairment Loss</b></th>
  <th rowspan="2" style="background-color: blue; color: white;"><b>Adjusted Cost</b></th>

  <th colspan="2" style="background-color: blue; color: white;"><b>History of Repair</b></th>
  <th colspan="4" style="background-color: #20ff6a; color: black;"><b>Issue</b></th>
  <th colspan="3" style="background-color: #07ad41; color: black;"><b>Transfer</b></th>
  <th colspan="3" style="background-color: orange; color: black;"><b>Disposal</b></th>
  <th colspan="1"><b>Balance</b></th>

  <th rowspan="2"><b>Amount</b></th>
  <th rowspan="2"><b>Remarks</b></th>
  <th rowspan="2"><b>ESTIMATED USEFUL LIFE</b></th>

  <th colspan="3" style="background-color: #16fa54; color: black;"><b>Received from: (Issued by)</b></th>
  <th colspan="3" style="background-color: #16fa54; color: black;"><b>Received by: (Accountable Officer)</b></th>
  <th colspan="2" style="background-color: #07ad41; color: black;"><b>INVENTORY TRANSFER REPORT</b></th>
  <th colspan="3" style="background-color: #07ad41; color: black;"><b></b></th>

  <th rowspan="2" style="background-color: blue; color: white;"><b>"REPORT OF SEMI-EXP PROP ISSUEDSERIAL NO.:"</b></th>

  <th colspan="2" style="background-color: blue; color: white;"><b>Returned</b></th>
  <th colspan="2" style="background-color: blue; color: white;"><b>Re-issued</b></th>
  <th colspan="1" style="background-color: blue; color: white;"><b>Disposed</b></th>
  <th colspan="1" style="background-color: blue; color: white;"><b>Balance</b></th>

  <th rowspan="2" style="background-color: blue; color: white;"><b>Amount</b></th>
  <th rowspan="2" style="background-color: blue; color: white;"><b>Remarks</b></th>
  <th rowspan="2"><b>Property Officer</b></th>
  <th rowspan="2"><b>Head of Office/ Approving Authority</b></th>
 

</tr>
<tr>
  <th><b>Article</b></th>
  <th><b>Particulars</b></th>
  <th><b>Model No.</b></th>
  <th><b>Serial No.</b></th>

  <th><b>ICS No.</b></th>
  <th><b>JEV No.</b></th>

  <th style="background-color: blue; color: white;"><b>Quantity</b></th>
  <th style="background-color: blue; color: white;"><b>Unit</b></th>
  <th style="background-color: blue; color: white;"><b>Unit Cost</b></th>
  <th style="background-color: blue; color: white;"><b>Total Cost</b></th>

  <th style="background-color: blue; color: white;"><b>Nature of Repair</b></th>
  <th style="background-color: blue; color: white;"><b>Amount</b></th>

  <th style="background-color: #20ff6a; color: black;"><b>Item No.</b></th>
  <th style="background-color: #20ff6a; color: black;"><b>Date</b></th>
  <th style="background-color: #20ff6a; color: black;"><b>Quantity</b></th>
  <th style="background-color: #20ff6a; color: black;"><b>Office/Officer</b></th>

  <th style="background-color: #07ad41; color: black;"><b>Date</b></th>
  <th style="background-color: #07ad41; color: black;"><b>Quantity</b></th>
  <th style="background-color: #07ad41; color: black;"><b>Office/Officer</b></th>

  <th style="background-color: orange; color: black;"><b>Date</b></th>
  <th style="background-color: orange; color: black;"><b>Quantity</b></th>
  <th style="background-color: orange; color: black;"><b>Office/Officer</b></th>

  <th><b>Quantity</b></th>

  <th style="background-color: #16fa54; color: black;"><b>Name</b></th>
  <th style="background-color: #16fa54; color: black;"><b>Position/Office</b></th>
  <th style="background-color: #16fa54; color: black;"><b>Date</b></th>
  
  <th style="background-color: #16fa54; color: black;"><b>Name</b></th>
  <th style="background-color: #16fa54; color: black;"><b>Position</b></th>
  <th style="background-color: #16fa54; color: black;"><b>Date</b></th>

  <th style="background-color: #07ad41; color: black;"><b>"ITR NO.(YYYY-MON-NO. SERIES-RCC)"</b></th>
  <th style="background-color: #07ad41; color: black;"><b>ITR DATE</b></th>

  <th style="background-color: #07ad41; color: black;"><b>"RRSP NO.(YYYY-MON-NO. SERIES-RCC)"</b></th>
  <th style="background-color: #07ad41; color: black;"><b>RRSP DATE</b></th>
  <th style="background-color: #07ad41; color: black;"><b>REASON FOR TRANSFER</b></th>

  <th style="background-color: blue; color: white;"><b>Quantity</b></th>
  <th style="background-color: blue; color: white;"><b>Office/Officer</b></th>
  <th style="background-color: blue; color: white;"><b>Quantity</b></th>
  <th style="background-color: blue; color: white;"><b>Office/Officer</b></th>
  <th style="background-color: blue; color: white;"><b>Quantity</b></th>
  <th style="background-color: blue; color: white;"><b>Quantity</b></th>

</tr>
          </thead>
          
          <tbody>
            <!-- Table rows -->
            <tr v-for="info in paginatedInfo" :key="info.id" @contextmenu.prevent="openContextMenu(info.id, $event)">
            
              <!-- <td scope="row">
                <img :src="generateQRCodeUrl(info.id)" alt="" style="width: 200px; height: 200px;">
              </td> -->
              <!-- <td scope="row">
                <a class="btn btn-success" @click="generatePDF(info.id)"><i class="bx bxs-download"></i></a>
                <a class="btn btn-warning" @click="selectRecord(info)"><i class="bx bxs-camera"></i></a>
                <button @click="placeRecord(inv.id)" class="btn btn-warning"><i class="bx bxs-arrow-from-right"></i></button>
                <button @click="deleteRecord(inv.id)" class="btn btn-danger"><i class="ri-delete-bin-6-line"></i></button>
              </td> -->
              <!-- <td scope="row">
                <div class="dropdown">
                    <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bx bxs-menu"></i>
                    </a>
            
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="btn btn-outline-success" @click="generatePDF(info.id)"><i class="bx bxs-download"></i>Generate PDF</a></li>
                        <li><a class="btn btn-outline-warning" @click="selectRecord(info)"><i class="bx bxs-camera">  </i>Capture a File</a></li>
                        <li><button @click="openUpdateFormModal(info.id)" class="btn btn-outline-info"><i class="bx bxs-arrow-from-right">    </i>Modify Record</button></li>
                        <li><button @click="deleteRecord(info.id)" class="btn btn-outline-danger"><i class="ri-delete-bin-6-line">    </i>Delete Record</button></li>
                    </ul>
                </div>
              </td> -->

              <td scoped="row">
                {{ info.id }}
                <div v-if="showContextMenu && contextMenuRecordId === info.id" class="context-menu" :style="{ top: contextMenuY + 'px', left: contextMenuX + 'px' }">
                  <a class="btn btn-success" @click="generatePDF(info.id)"><i class="bx bxs-download"></i>Generate PDF</a>
                  <a class="btn btn-warning" @click="selectRecord(info)"><i class="bx bxs-camera"></i>Capture Image</a>
                  <a @click="openUpdateFormModal(info.id)" class="btn btn-info"><i class="bx bxs-arrow-from-right"></i>Update Record</a>
                  <a @click="deleteRecord(info.id)" class="btn btn-danger"><i class="ri-delete-bin-6-line"></i>Delete Record</a>
                </div>
              </td>
              <td scope="row"><img :src="info.imageverification" alt="Verification Image" style="max-width: 6px; max-height: 60px;" /></td>
              <td scope="row"><img :src="info.image" alt="Inventory Image" style="max-width: 60px; max-height: 60px;" /></td>
              <td scope="row">{{ info.entityname }}</td>
              <td scope="row">{{ info.classification }}</td>
              <td scope="row">{{ info.code }}</td>
              <td scope="row">{{ info.article }}</td>
              <td scope="row">{{ info.particulars }}</td>
              <td scope="row">{{ info.modelno }}</td>
              <td scope="row">{{ info.serialno }}</td>
              <td scope="row">{{ info.fulldescription }}</td>
              <td scope="row">{{ info.propertynumber }}</td>
              <td scope="row">{{ info.propertydate }}</td>
              <td scope="row">{{ info.icsnumber }}</td>
              <td scope="row">{{ info.jevnumber }}</td>
              <td scope="row">{{ info.rec_quantity }}</td>
              <td scope="row">{{ info.rec_unit }}</td>
              <td scope="row">{{ info.rec_unitcost }}</td>
              <td scope="row">{{ info.rec_totalcost }}</td>
              <td scope="row">{{ info.isstranadjamount }}</td>
              <td scope="row">{{ info.accimploss }}</td>
              <td scope="row">{{ info.adjustedcost }}</td>
              <td scope="row">{{ info.repair_nature }}</td>
              <td scope="row">{{ info.repair_amount }}</td>
              <td scope="row">{{ info.issue_itemno }}</td>
              <td scope="row">{{ info.issue_date }}</td>
              <td scope="row">{{ info.issue_quantity }}</td>
              <td scope="row">{{ info.issue_officeofficer }}</td>
              <td scope="row">{{ info.transfer_date }}</td>
              <td scope="row">{{ info.transfer_quantity }}</td>
              <td scope="row">{{ info.transfer_officeofficer }}</td>
              <td scope="row">{{ info.disposal_date }}</td>
              <td scope="row">{{ info.disposal_quantity }}</td>
              <td scope="row">{{ info.disposal_officeofficer }}</td>
              <td scope="row">{{ info.balancequantity }}</td>
              <td scope="row">{{ info.balanceamount }}</td>
              <td scope="row">{{ info.remarks }}</td>
              <td scope="row">{{ info.estimatedlife }}</td>
              <td scope="row">{{ info.issued_officer }}</td>
              <td scope="row">{{ info.issued_offposition }}</td>
              <td scope="row">{{ info.issued_date }}</td>
              <td scope="row">{{ info.acc_officer }}</td>
              <td scope="row">{{ info.acc_empposition }}</td>
              <td scope="row">{{ info.acc_date }}</td>
              <td scope="row">{{ info.itr_no }}</td>
              <td scope="row">{{ info.itr_date }}</td>
              <td scope="row">{{ info.rrsp_no }}</td>
              <td scope="row">{{ info.rrsp_date }}</td>
              <td scope="row">{{ info.reasonfortrans }}</td>
              <td scope="row">{{ info.reg_semiissuedserialno }}</td>
              <td scope="row">{{ info.reg_returned_qty }}</td>
              <td scope="row">{{ info.reg_returned_off }}</td>
              <td scope="row">{{ info.reg_reissued_qty }}</td>
              <td scope="row">{{ info.reg_reissued_off }}</td>
              <td scope="row">{{ info.reg_disposed_qty }}</td>
              <td scope="row">{{ info.reg_balance_quantity }}</td>
              <td scope="row">{{ info.reg_amount }}</td>
              <td scope="row">{{ info.reg_remarks }}</td>
              <td scope="row">{{ info.property_officer }}</td>
              <td scope="row">{{ info.approving_authority }}</td>
            </tr>
          </tbody>
        </table>
          </div>
          <!-- End Table with stripped rows -->
<br>
          <!-- I-update ang table at idagdag ang pagination controls -->
          <div class="card-body">
<!-- Iba pang content ng card... -->
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

          </div>
      </div>
  </div>
  </div>



  <div class="modal" v-if="selectedRecord">
    <div class="modal-content">
      <span class="close" @click="selectedRecord = null">&times;</span>


      <form class="row g-3" enctype="multipart/form-data">
        <div class="col-12">
          <label class="form-label"><h3><b>Choose Image Source:</b></h3></label>
          <div>
              <input type="radio" id="upload" value="upload" v-model="imageSource">
              <label for="upload">Upload Image</label>
          </div>
          <div>
              <input type="radio" id="capture" value="capture" v-model="imageSource">
              <label for="capture">Capture Image</label>
          </div>
      </div>

      <div class="col-12" v-if="imageSource === 'upload'">
          <!-- File upload input -->
          <label for="image" class="form-label"><b>Upload Image</b></label>
          <input type="file" class="form-control" id="image" @change="handleFileUpload" accept="image/*">
      </div>

      <div class="col-6" v-else-if="imageSource === 'capture'">
          <!-- Camera capture section -->
          <label for="camera" class="form-label"><b>Capture Image</b></label>
          <video id="camera" width="280" height="220" autoplay></video>
          <a @click="startCamera" class="btn btn-primary">{{ cameraStarted ? 'Stop Camera' : 'Start Camera' }}</a>
          <a @click="captureImage" class="btn btn-success" :disabled="!cameraStarted">Capture</a>
      </div>
      <div class="col-6">
          <label class="form-label text-center"><b>Preview</b></label>
          <img :src="imagePreview" v-if="imagePreview" alt="Image Preview" style="max-width: 280px; max-height: 220px;">
      </div>
      <div class="text-center">
          <button @click="updateVerification" type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-secondary">Reset</button>
      </div>
      </form>



    </div>
  </div>




    </div>





    
    <div v-if="activeTab === 'requestTable'">
      <!-- Content for Request Table Tab -->
     

      <div class="col-lg-12">
              <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-12">
                   
                  </div>
<br>
                  <div class="d-flex justify-content-center align-items-center">
  <div class="col-lg-4">
    <div class="accordion w-100" id="faq-group-2">
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed btn btn-outline-info" data-bs-target="#faqsTwo-1" type="button" data-bs-toggle="collapse">
            Download the records through a documented PDF
          </button>
        </h2>
        <div id="faqsTwo-1" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
          <div class="accordion-body">
            <div class="row align-items-center justify-content-center mt-3">
              <div class="col-lg-6 mb-2">
                <select v-model="selectedEmployeePDF" @change="downloadEmployeeRequest" class="form-select animated-dropdown w-100">
                  <option value="" disabled>Select Employee</option>
                  <option v-for="empfullname in distinctReqEmployees" :key="empfullname" :value="empfullname">{{ empfullname }}</option>
                </select>
              </div>
              <div class="col-lg-6 mb-2 text-end">
                <button class="btn btn-warning w-100" @click="requestPDF"><i class="ri-download-2-line"></i> Download All</button>
              </div>
            </div>
            <!-- Loading animation -->
            <div v-if="loading" class="text-center mt-1">
              <div class="loading-line"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

                    <!-- Modal -->
                    <div class="modal" v-if="showModal">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Provide Feedback</h5>
                            <button type="button" class="close" @click="closeModal">
                              <span>&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <label for="feedbackInput">Feedback:</label>
                            <textarea id="feedbackInput" v-model="feedback" class="form-control"></textarea>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" @click="closeModal">Close</button>
                            <button type="button" class="btn btn-primary" @click="submitFeedback">Submit</button>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Search Bar and Show Entries Dropdown -->
<div class="d-flex justify-content-between align-items-center">
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

    <!-- Search Bar -->
    
      <div class="InputContainer">
      <input placeholder="Search.." id="input" class="input" name="text" type="text" v-model="searchKeyword">
    </div>
  </div>

<br>
              
<div class="wrapper">
  <table class="table-compact">
                  <thead>
                    <tr>
                      <th scope="col">Employee</th>
                      <th scope="col">Particulars</th>
                      <th scope="col">Description</th>
                      <th scope="col">Status</th>
                      <th scope="col">Feedback</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="req in requests" :key="req.id">
                      <td scope="row">{{ req.empfullname }}</td>
                      <td scope="row">{{ req.particulars }}</td>
                      <td scope="row">{{ req.description }}</td>
                      <td scope="row">{{ req.status }}</td>
                      <td scope="row">{{ req.feedback }}</td>
                      <td>
                        <div>
                          <button @click="updatereqStatus(req.id, 'Approved')" class="btn btn-outline-success"><i class="ri-checkbox-circle-line"></i>Approve</button><button @click="updatereqStatus(req.id, 'Declined')" class="btn btn-outline-danger"><i class="ri-close-circle-line"></i>Decline</button>
                        </div>
                      </td>
                        <!-- <td><button @click="deleteRecord(req.id)" class="btn btn-warning">Message</button></td> -->
                    </tr>
                  </tbody>
                </table>
              </div>
                   <!-- End Table with stripped rows -->
<br>
                <!-- I-update ang table at idagdag ang pagination controls -->
                <div class="card-body">
  <!-- Iba pang content ng card... -->
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


    </div>
  </div>





              </div>
              </div>
              


            </div>

            <div class="col-lg-16">


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
  computed: {
      rec_totalCost() {
            return this.rec_quantity * this.rec_unitcost;
          },
      totalCostFormatted() {
            // Format total Cost with commas
            return this.rec_totalCost.toLocaleString();
          },
    filteredInfo() {
      let filteredData = this.info;

      // Filter based on selected employee
      if (this.selectedEmployee !== '') {
        filteredData = filteredData.filter(info => info.empfullname.toLowerCase() === this.selectedEmployee.toLowerCase());
      }

      // Filter based on selected classification
      if (this.selectedClassification !== '') {
        filteredData = filteredData.filter(info => info.classification.toLowerCase() === this.selectedClassification.toLowerCase());
      }

      // Filter based on selected article
      if (this.selectedArticle !== '') {
        filteredData = filteredData.filter(info => info.article.toLowerCase() === this.selectedArticle.toLowerCase());
      }

      // Filter based on selected particular
      if (this.selectedParticular !== '') {
        filteredData = filteredData.filter(info => info.particulars.toLowerCase() === this.selectedParticular.toLowerCase());
      }

      if (this.selectedStatus !== '') {
    filteredData = filteredData.filter(info => info.status.toLowerCase() === this.selectedStatus.toLowerCase());
  }

      // Filter based on search keyword
      if (this.searchKeyword !== '') {
        const keyword = this.searchKeyword.toLowerCase();
        filteredData = filteredData.filter(info => 
          (info.entityname && info.entityname.toLowerCase().includes(keyword)) ||
          (info.empfullname && info.empfullname.toLowerCase().includes(keyword)) ||
          (info.classification && info.classification.toLowerCase().includes(keyword)) ||
          (info.article && info.article.toLowerCase().includes(keyword)) ||
          (info.code && info.code.toLowerCase().includes(keyword)) ||
          (info.created_at && info.created_at.toLowerCase().includes(keyword)) ||
          (info.status && info.status.toLowerCase().includes(keyword)) ||
          (info.particulars && info.particulars.toLowerCase().includes(keyword))
        );
      }

      return filteredData;
    },

    paginatedInfo() {
      const startIndex = (this.currentPage - 1) * this.pageSize;
      const endIndex = startIndex + this.pageSize;
      return this.filteredInfo.slice(startIndex, endIndex);
    },
    totalPages() {
      return Math.ceil(this.filteredInfo.length / this.pageSize);
    },
    currentPageRecords() {
      const startIndex = (this.currentPage - 1) * this.pageSize + 1;
      const endIndex = Math.min(startIndex + this.pageSize - 1, this.filteredInfo.length);
      return `Showing ${startIndex} - ${endIndex} of ${this.filteredInfo.length} records`;
    },
    
    distinctEmployees() {
      const employeeSet = new Set();
      this.info.forEach(item => employeeSet.add(item.acc_officer));
      return Array.from(employeeSet);
    },
    distinctReqEmployees() {
      const employeeSet = new Set();
      this.requests.forEach(requests => employeeSet.add(requests.empfullname));
      return Array.from(employeeSet);
    },
    distinctClassification() {
      const classificationSet = new Set();
      this.info.forEach(item => {
        if (item.empfullname && typeof item.empfullname === 'string' &&
            item.empfullname.toLowerCase() === this.selectedEmployee.toLowerCase() &&
            item.classification && typeof item.classification === 'string') {
          classificationSet.add(item.classification);
        }
      });
      return Array.from(classificationSet);
    },
    distinctArticle() {
      const articleSet = new Set();
      this.info.forEach(item => {
        if (item.empfullname && typeof item.empfullname === 'string' &&
            item.empfullname.toLowerCase() === this.selectedEmployee.toLowerCase() &&
            item.classification && typeof item.classification === 'string' &&
            item.classification.toLowerCase() === this.selectedClassification.toLowerCase() &&
            item.article && typeof item.article === 'string') {
          articleSet.add(item.article);
        }
      });
      return Array.from(articleSet);
    },
    distinctParticular() {
      const particularSet = new Set();
      this.info.forEach(item => {
        if (item.empfullname &&
            item.empfullname.toLowerCase() === this.selectedEmployee.toLowerCase() &&
            item.classification &&
            item.classification.toLowerCase() === this.selectedClassification.toLowerCase() &&
            item.article &&
            item.article.toLowerCase() === this.selectedArticle.toLowerCase() &&
            item.particulars &&
            typeof item.particulars === 'string') {
          particularSet.add(item.particulars);
        }
      });
      return Array.from(particularSet);
    },
    distinctStatus() {
    const statusSet = new Set();
    this.info.forEach(item => {
      if (item.status) {
        statusSet.add(item.status);
      }
    });
    return Array.from(statusSet);
  },
  populateRecords() {
      if (this.formselectedParticular) {
        // Filter the inventory to find the selected particular
        const selectedItem = this.inventory.find(item => item.id === this.formselectedParticular);
        if (selectedItem) {
          // Populate other fields based on the selected particular
          this.particulars = selectedItem.particulars;
          this.entityname = selectedItem.entityname;
          this.classification = selectedItem.classification;
          this.code = selectedItem.code;
          this.article = selectedItem.article;
          this.modelno = selectedItem.modelno;
          this.serialno = selectedItem.serialno;
          this.rec_unitcost = selectedItem.unitcost;
          // Add more fields if needed
        }
      }
    },
  },
  data() {
  return {
    currentFormPage: 1,
    activeTab: 'inputs', // Default active tab
    searchKeyword: '',
    currentPage: 1, // Current page number
    pageSize: 10, // Default page size
    info: [],
    infos: [],
    req: [],
    requests: [],
    entityname: "",
    classification: "",
    empfullname: "",
    code: "",
    article: '',
    particulars: '',
    modelno: '',
    serialno: '',
    description: '',
    propertynumber: '',
    propertydate: '',
    icsnumber: '',
    jevnumber: '',
    rec_quantity: '',
    rec_unit: '',
    rec_unitcost: '',
    rec_totalcost: '',
    isstranadjamount: '',
    accimploss: '',
    adjustedcost: '',
    repair_nature: '',
    repair_amount: '',
    issue_itemno: '',
    issue_date: '',
    issue_quantity: '',
    issue_officeofficer: '',
    transfer_date: '',
    transfer_quantity: '',
    transfer_officeofficer: '',
    disposal_date: '',
    disposal_quantity: '',
    disposal_officeofficer: '',
    balancequantity: '',
    balanceamount: '',
    remarks: '',
    estimatedlife: '',
    issued_officer: '',
    issued_offposition: '',
    issued_date: '',
    acc_officer: '',
    acc_empposition: '',
    acc_date: '',
    itr_no: '',
    itr_date: '',
    rrsp_no: '',
    rrsp_date: '',
    reasonfortrans: '',
    reg_semiissuedserialno: '',
    reg_returned_qty: '',
    reg_returned_off: '',
    reg_reissued_qty: '',
    reg_reissued_off: '',
    reg_disposed_qty: '',
    reg_balance_quantity: '',
    reg_amount: '',
    reg_remarks: '',
    property_officer: '',
    approving_authority: '',
    formselectedParticular: null,
    employees: [],
    inventory: [],
    message: [],
    showModal: false,
    showUpdateFormModal: false,
    feedback: '',
    selectedInfo: null,
    employeeOptions: [], // Array to store employee names
    selectedEmployee: '', // Selected employee from dropdown
    selectedClassification: '', // Selected classification from dropdown
    selectedArticle: '', // Selected article from dropdown
    selectedParticular: '', // Selected particular from dropdown
    selectedStatus: '', // Selected status from dropdown
    previousEmployee: '', // Store the previous selected employee
    previousClassification: '', // Store the previous selected classification
    previousArticle: '', // Store the previous selected article
    previousParticular: '', // Store the previous selected particular
    showContextMenu: false,
    contextMenuRecordId: null,
    contextMenuX: 0,
    contextMenuY: 0,
    scrollX: 0,
    scrollY: 0,
    mediaStream: null,
    cameraStarted: false,
    capturedImage: null,
    imageDataUrl: "",
    cameraButtonText: 'Start Camera',
    selectedImageFile: null,
    imageSource: 'upload',
    imagePreview: '',
    imageverification: null,
    employeeReqOptions: [],
    loading: false,
  };
},
  created(){
      this.getInfo()
      this.getReq()
      this.getInventory()
      this.user();
      this.getUserInfo(this.infos.fullname);
  },
  mounted() {
    window.addEventListener("scroll", this.hideContextMenu);
    window.addEventListener("click", this.hideContextMenu);
  },
  beforeDestroy() {
    window.removeEventListener("scroll", this.hideContextMenu);
    window.removeEventListener("click", this.hideContextMenu);

    if (this.mediaStream) {
      this.mediaStream.getTracks().forEach(track => {
        track.stop();
      });
    }
  },
  methods:{

    nextPage() {
    // Increment the form page number
    if (this.currentFormPage < 4) {
      this.currentFormPage++;
    }

    // Scroll to the top of the form using scrollTop
    const formElement = document.getElementById('myForm');
    if (formElement) {
      // Scroll to the top of the form
      formElement.scrollTop = 0;
      // Optional: Scroll to the top of the window
      window.scrollTo({ top: 0, behavior: 'smooth' });
    }
  },
  prevPage() {
  // Decrement the form page number
  if (this.currentFormPage > 1) {
    this.currentFormPage--;
  }

  // Scroll to the top of the form using scrollTop
  const formElement = document.getElementById('myForm');
  if (formElement) {
    // Scroll to the top of the form
    formElement.scrollTop = 0;
    // Optional: Scroll to the top of the window
    window.scrollTo({ top: 0, behavior: 'smooth' });
  }
},
    simulateLoading() {
    this.loading = true;
  },
      setTimeout() {
    this.loading = false;
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


    async updateVerification() {
      try {
          const formData = new FormData();
          // formData.append('id', this.selectedRecord);

          // Always append the image field, even if it's not changed
          if (this.capturedImage) {
              const blob = await fetch(this.capturedImage).then(res => res.blob());
              const file = new File([blob], `image_${Date.now()}.png`, { type: 'image/png' });
              formData.append('imageverification', file);
          } else if (this.selectedImageFile) {
              formData.append('imageverification', this.selectedImageFile);
          } else {
              // If the image is not changed, you can append the existing image data
              formData.append('imageverification', this.imagePreview);
          }

          const response = await axios.post(`/updateVerification/${this.selectedRecord}`, formData, {
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
        async selectRecord(info) {
          this.selectedRecord = info.id;
          console.log(this.selectedRecord);
        },



        async downloadEmployeeRequest() {
        try {
          this.simulateLoading();
           const response = await fetch('http://dilg.test/backend/employeeRequestPDF', {
               method: 'POST',
               headers: {
                   'Content-Type': 'application/json',
               },
               body: JSON.stringify({ empfullname: this.selectedEmployeePDF }),
           });
           if (response.ok) {
               const blob = await response.blob();
               const filename = `${this.selectedEmployeePDF}_records.pdf`; // Adjust the filename if needed
               const url = window.URL.createObjectURL(new Blob([blob]));
               const link = document.createElement('a');
               link.href = url;
               link.setAttribute('download', filename);
               document.body.appendChild(link);
               link.click();
               link.parentNode.removeChild(link);
               console.log('PDF generated successfully');
               this.setTimeout();
           } else {
               console.error('Failed to generate PDF');
           }
       } catch (error) {
           console.error('Error generating PDF:', error);
       }
    },

    async requestPDF() {
    try {
        // Send HTTP request to backend to generate PDFs for all records
        this.simulateLoading();
        const response = await fetch('http://dilg.test/backend/requestPDF', {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json',
            },
        });

        // Check if the response is successful
        if (response.ok) {
            const blob = await response.blob();
            const filename = 'generated_pdf_all.pdf'; // Adjust the filename if needed
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

    async generatePDF(recordId) {
            try {
                // Send HTTP request to backend
                const response = await fetch(`http://dilg.test/backend/generatepdf/${recordId}`, {
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
    openContextMenu(recordId, event) {
      // Prevent default behavior of right-click to show the context menu
      event.preventDefault();

      this.contextMenuRecordId = recordId;
      this.contextMenuX = event.clientX;
      this.contextMenuY = event.clientY + this.scrollY; // Adjust for scroll offset
      this.showContextMenu = true;

      setTimeout(() => {
        this.hideContextMenu();
      }, 1500);
    },
    hideContextMenu() {
      this.showContextMenu = false;
      this.contextMenuRecordId = null;
      this.contextMenuX = 0;
      this.contextMenuY = 0;
    },
    updateScroll() {
      this.scrollX = window.pageXOffset;
      this.scrollY = window.pageYOffset;
      if (this.showContextMenu) {
        // If context menu is open, adjust its position based on scroll offset
        this.contextMenuY += this.scrollY;
      }
    },
    openUpdateFormModal(recordId) {
      this.showUpdateFormModal = true;

          // set status to update and statusId to the record id
          // this.status = "update";
          this.statusId = recordId;

          // fetch the record details and set them to the form
          const record = this.info.find(info => info.id === recordId);
          this.entityname = record.entityname;
            this.classification = record.classification;
            this.code = record.code;
            this.article = record.article;
            this.particulars = record.particulars;
            this.modelno = record.modelno;
            this.serialno = record.serialno;
            this.propertynumber = record.propertynumber;
            this.propertydate = record.propertydate;
            this.icsnumber = record.icsnumber;
            this.jevnumber = record.jevnumber;
            this.rec_quantity = record.rec_quantity;
            this.rec_unit = record.rec_unit;
            this.rec_unitcost = record.rec_unitcost;
            // this.rec_totalcost = record.rec_totalcost;
            this.isstranadjamount = record.isstranadjamount;
            this.accimploss = record.accimploss;
            this.adjustedcost = record.adjustedcost;
            this.repair_nature = record.repair_nature;
            this.repair_amount = record.repair_amount;
            // this.issue_itemno = record.issue_itemno;
            this.issue_date = record.issue_date;
            // this.issue_quantity = record.issue_quantity;
            this.issue_officeofficer = record.issue_officeofficer;
            this.transfer_date = record.transfer_date;
            this.transfer_quantity = record.transfer_quantity;
            this.transfer_officeofficer = record.transfer_officeofficer;
            this.disposal_date = record.disposal_date;
            this.disposal_quantity = record.disposal_quantity;
            this.disposal_officeofficer = record.disposal_officeofficer;
            // this.balancequantity = record.balancequantity;
            // this.balanceamount = record.balanceamount;
            this.remarks = record.remarks;
            this.empfullname = record.empfullname;
            this.estimatedlife = record.estimatedlife;
            this.issued_officer = record.issued_officer;
            this.issued_offposition = record.issued_offposition;
            this.issued_date = record.issued_date;
            this.acc_officer = record.acc_officer;
            this.acc_empposition = record.acc_empposition;
            this.acc_date = record.acc_date;
            this.itr_no = record.itr_no;
            this.itr_date = record.itr_date;
            this.rrsp_no = record.rrsp_no;
            this.rrsp_date = record.rrsp_date;
            this.reasonfortrans = record.reasonfortrans;
            this.reg_semiissuedserialno = record.reg_semiissuedserialno;
            this.reg_returned_qty = record.reg_returned_qty;
            // this.reg_returned_off = record.reg_returned_off;
            this.reg_reissued_qty = record.reg_reissued_qty;
            this.reg_reissued_off = record.reg_reissued_off;
            this.reg_disposed_qty = record.reg_disposed_qty;
            this.reg_balance_quantity = record.reg_balance_quantity;
            this.reg_amount = record.reg_amount;
            this.reg_remarks = record.reg_remarks;
            this.property_officer = record.property_officer;
            this.approving_authority = record.approving_authority;

          console.log(recordId);
    },
    closeUpdateFormModal() {
      this.showUpdateFormModal = false;
    },


    updatereqStatus(id, newStatus) {
      // Show the modal
      this.showModal = true;
      // Save the id and newStatus for later use
      this.requestId = id;
      this.newStatus = newStatus;
    },
    closeModal() {
      // Close the modal and reset feedback
      this.showModal = false;
      this.feedback = '';
    },
    async submitFeedback() {
      try {
        const response = await axios.post('updatereqStatus', {
          id: this.requestId,
          status: this.newStatus,
          feedback: this.feedback
        });
        if (response.status === 200) {
          console.log(response.data);
          this.getReq();
          this.closeModal(); // Close the modal after successful submission
        } else {
          console.error('Error updating status:', response.data.error);
        }
      } catch (error) {
        console.error('Network error:', error.message);
      }
    },
      /*async deleteRecord(recordId){
          const confirm = window.confirm("are you sure you want to delete this?");
          if (confirm){
              await axios.post("del", {
              id: recordId,
          });
          this.getInfo();
          }
      }, */
      async getReq(){
          try {
              const req = await axios.get('getReqAdmin');
              this.requests = req.data;
              this.employeeReqOptions = this.requests.map(requests => requests.empfullname);

            
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
      updatePageSize(size) {
      this.pageSize = size;
      this.getInfo();
    },
    onEmployeeChange() {
      // Reset selected values of dropdowns only if a new employee is selected
      if (this.selectedEmployee !== this.previousEmployee) {
        this.selectedClassification = '';
        this.selectedArticle = '';
        this.selectedParticular = '';
      }
      // Update the previous selected employee
      this.previousEmployee = this.selectedEmployee;
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

    // async save() {
    //   try {
    //     // Compute totalcost

    //     // Create a FormData object and append the computed totalcost
    //     const formData = new FormData();
    //     // if (this.selectedImageFile) {
    //     //     formData.append('image', this.selectedImageFile);
    //     // }
    //     // else if (this.capturedImage) {
    //     //     // Convert the captured image to a file
    //     //     const blob = await fetch(this.capturedImage).then(res => res.blob());
    //     //     const file = new File([blob], `image_${Date.now()}.png`, { type: 'image/png' });
    //     //     formData.append('image', file);
    //     // }

    //     // Append other form data including the computed totalcost
    //     formData.append('entityname', this.entityname);
    //     formData.append('classification', this.classification);
    //     formData.append('code', this.code);
    //     formData.append('article', this.article);
    //     formData.append('particulars', this.particulars);
    //     formData.append('modelno', this.modelno);
    //     formData.append('serialno', this.serialno);
    //                 formData.append('propertynumber', this.propertynumber);
    //                 formData.append('propertydate', this.propertydate);
    //                 formData.append('icsnumber', this.icsnumber);
    //                 formData.append('jevnumber', this.jevnumber);
    //                 formData.append('rec_quantity', this.rec_quantity);
    //                 formData.append('rec_unit', this.rec_unit);
    //                 formData.append('rec_unitcost', this.rec_unitcost);
    //                 formData.append('rec_totalcost', this.rec_totalcost);
    //                 formData.append('isstranadjamount', this.isstranadjamount);
    //                 formData.append('accimploss', this.accimploss);
    //                 formData.append('adjustedcost', this.adjustedcost);
    //                 formData.append('repair_nature', this.repair_nature);
    //                 formData.append('repair_amount', this.repair_amount);
    //                 formData.append('issue_itemno', this.issue_itemno);
    //                 formData.append('issue_date', this.issue_date);
    //                 formData.append('issue_quantity', this.issue_quantity);
    //                 formData.append('issue_officeofficer', this.issue_officeofficer);
    //                 formData.append('transfer_date', this.transfer_date);
    //                 formData.append('transfer_quantity', this.transfer_quantity);
    //                 formData.append('transfer_officeofficer', this.transfer_officeofficer);
    //                 formData.append('disposal_date', this.disposal_date);
    //                 formData.append('disposal_quantity', this.disposal_quantity);
    //                 formData.append('disposal_officeofficer', this.disposal_officeofficer);
    //                 formData.append('balancequantity', this.balancequantity);
    //                 formData.append('balanceamount', this.balanceamount);
    //                 formData.append('remarks', this.remarks);
    //                 formData.append('empfullname', this.empfullname);
    //                 formData.append('estimatedlife', this.estimatedlife);
    //                 formData.append('issued_officer', this.issued_officer);
    //                 formData.append('issued_offposition', this.issued_offposition);
    //                 formData.append('issued_date', this.issued_date);
    //                 formData.append('acc_officer', this.acc_officer);
    //                 formData.append('acc_empposition', this.acc_empposition);
    //                 formData.append('acc_date', this.acc_date);
    //                 formData.append('itr_no', this.itr_no);
    //                 formData.append('itr_date', this.itr_date);
    //                 formData.append('rrsp_no', this.rrsp_no);
    //                 formData.append('rrsp_date', this.rrsp_date);
    //                 formData.append('reasonfortrans', this.reasonfortrans);
    //                 formData.append('reg_semiissuedserialno', this.reg_semiissuedserialno);
    //                 formData.append('reg_returned_qty', this.reg_returned_qty);
    //                 formData.append('reg_returned_off', this.reg_returned_off);
    //                 formData.append('reg_reissued_qty', this.reg_reissued_qty);
    //                 formData.append('reg_reissued_off', this.reg_reissued_off);
    //                 formData.append('reg_disposed_qty', this.reg_disposed_qty);
    //                 formData.append('reg_balance_quantity', this.reg_balance_quantity);
    //                 formData.append('reg_amount', this.reg_amount);
    //                 formData.append('reg_remarks', this.reg_remarks);
    //                 formData.append('property_officer', this.property_officer);
    //                 formData.append('approving_authority', this.approving_authority);

    //     // Now you can submit the formData to your backend endpoint using Axios or any other method
    //     await axios.post('/save', formData, {
    //       headers: {
    //         'Content-Type': 'multipart/form-data'
    //       }
    //     });

    //     // Reset the form and emit the 'data-saved' event
    //     this.resetForm();
    //     this.$emit('data-saved');

    //     // Trigger notification
    //     await axios.post('/triggerNotification')
    //       .then(response => {
    //         console.log('Notification triggered successfully');
    //       })
    //       .catch(error => {
    //         console.error('Error triggering notification:', error);
    //       });

    //   } catch (error) {
    //     console.error('Error saving:', error);
    //   }
    // },

    async saveOrUpdate() {
      if (this.status === "update") {
          await this.updatePPE();
      } else {
        await this.save();
      }
    },


    async save() {
  try {
    // Create a new FormData object
    const formData = new FormData();

    // Append each field to the FormData object
    formData.append('entityname', this.entityname);
    formData.append('classification', this.classification);
    formData.append('code', this.code);
    formData.append('article', this.article);
    formData.append('particulars', this.particulars);
    formData.append('modelno', this.modelno);
    formData.append('serialno', this.serialno);
    formData.append('propertynumber', this.propertynumber);
    formData.append('propertydate', this.propertydate);
    formData.append('icsnumber', this.icsnumber);
    formData.append('jevnumber', this.jevnumber);
    formData.append('rec_quantity', this.rec_quantity);
    formData.append('rec_unit', this.rec_unit);
    formData.append('rec_unitcost', this.rec_unitcost);
    formData.append('rec_totalcost', this.rec_totalcost);
    formData.append('isstranadjamount', this.isstranadjamount);
    formData.append('accimploss', this.accimploss);
    formData.append('adjustedcost', this.adjustedcost);
    formData.append('repair_nature', this.repair_nature);
    formData.append('repair_amount', this.repair_amount);
    formData.append('issue_date', this.issue_date);
    formData.append('issue_officeofficer', this.issue_officeofficer);
    formData.append('transfer_date', this.transfer_date);
    formData.append('transfer_quantity', this.transfer_quantity);
    formData.append('transfer_officeofficer', this.transfer_officeofficer);
    formData.append('disposal_date', this.disposal_date);
    formData.append('disposal_quantity', this.disposal_quantity);
    formData.append('disposal_officeofficer', this.disposal_officeofficer);
    formData.append('remarks', this.remarks);
    formData.append('empfullname', this.empfullname);
    formData.append('estimatedlife', this.estimatedlife);
    formData.append('issued_officer', this.issued_officer);
    formData.append('issued_offposition', this.issued_offposition);
    formData.append('issued_date', this.issued_date);
    formData.append('acc_officer', this.acc_officer);
    formData.append('acc_empposition', this.acc_empposition);
    formData.append('acc_date', this.acc_date);
    formData.append('itr_no', this.itr_no);
    formData.append('itr_date', this.itr_date);
    formData.append('rrsp_no', this.rrsp_no);
    formData.append('rrsp_date', this.rrsp_date);
    formData.append('reasonfortrans', this.reasonfortrans);
    formData.append('reg_semiissuedserialno', this.reg_semiissuedserialno);
    formData.append('reg_returned_qty', this.reg_returned_qty);
    formData.append('reg_returned_off', this.reg_returned_off);
    formData.append('reg_reissued_qty', this.reg_reissued_qty);
    formData.append('reg_reissued_off', this.reg_reissued_off);
    formData.append('reg_disposed_qty', this.reg_disposed_qty);
    formData.append('reg_balance_quantity', this.reg_balance_quantity);
    formData.append('reg_amount', this.reg_amount);
    formData.append('reg_remarks', this.reg_remarks);
    formData.append('property_officer', this.property_officer);
    formData.append('approving_authority', this.approving_authority);

    // Send the POST request with the FormData object
    const response = await axios.post('save', formData, {
      headers: {
        'Content-Type': 'multipart/form-data' // Set content type to multipart/form-data
      }
    });

    // Handle the response
    this.message = response.data.msg;
    if(response.data.msg === 'Cannot save data. Inventory status is inactive.') {
      alert('Cannot save data. Inventory status is inactive.');
    } else if(response.data.msg === 'Cannot save data. No matching inventory record found.') {
      alert('Cannot save data. No matching inventory record found.');
    }

    console.log('Server response:', response.data);
    // Clear the code only after successfully saving the record
    this.particulars = "";
    this.empfullname = "";

    this.$emit('data-saved');
    this.getInfo();
  } catch (error) {
    console.error(error);
    this.particulars = "";
    this.empfullname = "";
  }
},


    // async save() {
    //   try {

    //     const response = await axios.post('save', {
    //         entityname: this.entityname,
    //         classification: this.classification,
    //         code: this.code,
    //         article: this.article,
    //         particulars: this.particulars,
    //         modelno: this.modelno,
    //         serialno: this.serialno,
    //         propertynumber: this.propertynumber,
    //         propertydate: this.propertydate,
    //         icsnumber: this.icsnumber,
    //         jevnumber: this.jevnumber,
    //         rec_quantity: this.rec_quantity,
    //         rec_unit: this.rec_unit,
    //         rec_unitcost: this.rec_unitcost,
    //         isstranadjamount: this.isstranadjamount,
    //         accimploss: this.accimploss,
    //         adjustedcost: this.adjustedcost,
    //         repair_nature: this.repair_nature,
    //         repair_amount: this.repair_amount,
    //         issue_date: this.issue_date,
    //         issue_officeofficer: this.issue_officeofficer,
    //         transfer_date: this.transfer_date,
    //         transfer_quantity: this.transfer_quantity,
    //         transfer_officeofficer: this.transfer_officeofficer,
    //         disposal_date: this.disposal_date,
    //         disposal_quantity: this.disposal_quantity,
    //         disposal_officeofficer: this.disposal_officeofficer,
    //         remarks: this.remarks,
    //         estimatedlife: this.estimatedlife,
    //         issued_officer: this.issued_officer,
    //         issued_offposition: this.issued_offposition,
    //         acc_officer: this.acc_officer,
    //         acc_empposition: this.acc_empposition,
    //         acc_date: this.acc_date,
    //         itr_no: this.itr_no,
    //         itr_date: this.itr_date,
    //         rrsp_no: this.rrsp_no,
    //         rrsp_date: this.rrsp_date,
    //         reasonfortrans: this.reasonfortrans,
    //         reg_semiissuedserialno: this.reg_semiissuedserialno,
    //         reg_returned_qty: this.reg_returned_qty,
    //         reg_reissued_qty: this.reg_reissued_qty,
    //         reg_reissued_off: this.reg_reissued_off,
    //         reg_disposed_qty: this.reg_disposed_qty,
    //         reg_balance_quantity: this.reg_balance_quantity,
    //         reg_amount: this.reg_amount,
    //         reg_remarks: this.reg_remarks,
    //         property_officer: this.property_officer,
    //         approving_authority: this.approving_authority,
    //       });

    //       this.message = response.data.msg;
    //       if(response.data.msg === 'Cannot save data. Inventory status is inactive.'){
    //         alert('Cannot save data. Inventory status is inactive.');
    //       }
    //       else if(response.data.msg === 'Cannot save data. No matching inventory record found.'){
    //         alert('Cannot save data. No matching inventory record found.');
    //       }else if(response.data.msg === 'The Data is not saving, there is an error'){
    //         alert('There is an error!');
    //       }

    //       console.log('Server response:', response.data);
    //       // Clear the code only after successfully saving the record
    //       this.particulars = "";
    //       this.empfullname = "";

    //       this.$emit('data-saved');
    //       this.getInfo();
    //     } catch (error) {
    //       console.error(error);
    //       this.particulars = "";
    //       this.empfullname = "";
    //     }
    //   },


    async updatePPE() {
    try {
        const formData = new FormData();

        // Append the updated data
        formData.append('id', this.statusId);
        formData.append('entityname', this.entityname);
        formData.append('classification', this.classification);
        formData.append('code', this.code);
        formData.append('article', this.article);
        formData.append('particulars', this.particulars);
        formData.append('modelno', this.modelno);
        formData.append('serialno', this.serialno);
        formData.append('propertynumber', this.propertynumber);
        formData.append('propertydate', this.propertydate);
        formData.append('icsnumber', this.icsnumber);
        formData.append('jevnumber', this.jevnumber);
        formData.append('rec_quantity', this.rec_quantity);
        formData.append('rec_unit', this.rec_unit);
        formData.append('rec_unitcost', this.rec_unitcost);
        formData.append('isstranadjamount', this.isstranadjamount);
        formData.append('accimploss', this.accimploss);
        formData.append('adjustedcost', this.adjustedcost);
        formData.append('repair_nature', this.repair_nature);
        formData.append('repair_amount', this.repair_amount);
        formData.append('issue_date', this.issue_date);
        formData.append('issue_officeofficer', this.issue_officeofficer);
        formData.append('issued_date', this.issued_date);
        formData.append('transfer_date', this.transfer_date);
        formData.append('transfer_quantity', this.transfer_quantity);
        formData.append('transfer_officeofficer', this.transfer_officeofficer);
        formData.append('disposal_date', this.disposal_date);
        formData.append('disposal_quantity', this.disposal_quantity);
        formData.append('disposal_officeofficer', this.disposal_officeofficer);
        formData.append('remarks', this.remarks);
        formData.append('empfullname', this.empfullname);
        formData.append('estimatedlife', this.estimatedlife);
        formData.append('issued_officer', this.issued_officer);
        formData.append('issued_offposition', this.issued_offposition);
        formData.append('acc_officer', this.acc_officer);
        formData.append('acc_empposition', this.acc_empposition);
        formData.append('acc_date', this.acc_date);
        formData.append('itr_no', this.itr_no);
        formData.append('itr_date', this.itr_date);
        formData.append('rrsp_no', this.rrsp_no);
        formData.append('rrsp_date', this.rrsp_date);
        formData.append('reasonfortrans', this.reasonfortrans);
        formData.append('reg_semiissuedserialno', this.reg_semiissuedserialno);
        formData.append('reg_returned_qty', this.reg_returned_qty);
        formData.append('reg_returned_off', this.reg_returned_off);
        formData.append('reg_reissued_qty', this.reg_reissued_qty);
        formData.append('reg_reissued_off', this.reg_reissued_off);
        formData.append('reg_disposed_qty', this.reg_disposed_qty);
        formData.append('reg_balance_quantity', this.reg_balance_quantity);
        formData.append('reg_amount', this.reg_amount);
        formData.append('reg_remarks', this.reg_remarks);
        formData.append('property_officer', this.property_officer);
        formData.append('approving_authority', this.approving_authority);

        const response = await axios.post(`/updateppe/${this.statusId}`, formData, {
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
},
confirmReset() {
    if (confirm("Are you sure you want to reset all the forms?")) {
      this.resetForm();
    }
  },

  resetForm() {
    
    this.property_officer = '';
    this.approving_authority = '';
 
  },
      placeRecord(recordId) {
          // set status to update and statusId to the record id
          this.status = "update";
          this.statusId = recordId;

          // fetch the record details and set them to the form
          const record = this.info.find(info => info.id === recordId);
          // this.entityname = record.entityname;
          // this.classification = record.classification;
          // this.code = record.code;
          // this.article = record.article;
          // this.particulars = record.particulars;
          // this.modelno = record.modelno;
          // this.serialno = record.serialno;
          // this.quantity = record.quantity;
          // this.unit = record.unit;
          // this.unitcost = record.unitcost;
          // this.totalcost = record.totalcost;
          // this.imagePreview = record.image;

          this.entityname = record.entityname;
            this.classification = record.classification;
            this.code = record.code;
            this.article = record.article;
            this.particulars = record.particulars;
            this.modelno = record.modelno;
            this.serialno = record.serialno;
            this.propertynumber = record.propertynumber;
            this.propertydate = record.propertydate;
            this.icsnumber = record.icsnumber;
            this.jevnumber = record.jevnumber;
            this.rec_quantity = record.rec_quantity;
            this.rec_unit = record.rec_unit;
            this.rec_unitcost = record.rec_unitcost;
            // this.rec_totalcost = record.rec_totalcost;
            this.isstranadjamount = record.isstranadjamount;
            this.accimploss = record.accimploss;
            this.adjustedcost = record.adjustedcost;
            this.repair_nature = record.repair_nature;
            this.repair_amount = record.repair_amount;
            // this.issue_itemno = record.issue_itemno;
            this.issue_date = record.issue_date;
            // this.issue_quantity = record.issue_quantity;
            this.issue_officeofficer = record.issue_officeofficer;
            this.transfer_date = record.transfer_date;
            this.transfer_quantity = record.transfer_quantity;
            this.transfer_officeofficer = record.transfer_officeofficer;
            this.disposal_date = record.disposal_date;
            this.disposal_quantity = record.disposal_quantity;
            this.disposal_officeofficer = record.disposal_officeofficer;
            // this.balancequantity = record.balancequantity;
            // this.balanceamount = record.balanceamount;
            this.remarks = record.remarks;
            this.empfullname = record.empfullname;
            this.estimatedlife = record.estimatedlife;
            this.issued_officer = record.issued_officer;
            this.issued_offposition = record.issued_offposition;
            this.issued_date = record.issued_date;
            this.acc_officer = record.acc_officer;
            this.acc_empposition = record.acc_empposition;
            this.acc_date = record.acc_date;
            this.itr_no = record.itr_no;
            this.itr_date = record.itr_date;
            this.rrsp_no = record.rrsp_no;
            this.rrsp_date = record.rrsp_date;
            this.reasonfortrans = record.reasonfortrans;
            this.reg_semiissuedserialno = record.reg_semiissuedserialno;
            this.reg_returned_qty = record.reg_returned_qty;
            // this.reg_returned_off = record.reg_returned_off;
            this.reg_reissued_qty = record.reg_reissued_qty;
            this.reg_reissued_off = record.reg_reissued_off;
            this.reg_disposed_qty = record.reg_disposed_qty;
            this.reg_balance_quantity = record.reg_balance_quantity;
            this.reg_amount = record.reg_amount;
            this.reg_remarks = record.reg_remarks;
            this.property_officer = record.property_officer;
            this.approving_authority = record.approving_authority;

          console.log(recordId);
      },

      // async save() {
      //   try {
      //     const generatedCode = await this.generateUniqueCode();

      //     const response = await axios.post('save', {
      //       entityname: this.entityname,
      //       particulars: this.particulars,
      //       classification: this.classification,
      //       empfullname: this.empfullname,
      //       code: generatedCode.data,
      //     });

      //     console.log('Server response:', response.data);

      //     // Check if the response indicates a successful save
      //     if (response.status === 200) {
      //       // Clear the form fields after successfully saving the record
      //       this.entityname = "";
      //       this.particulars = "";
      //       this.classification = "";
      //       this.empfullname = "";
      //       this.code = "";

      //       this.$emit('data-saved');
      //       this.getInfo();
      //     } else {
      //       // Handle unsuccessful save (optional)
      //       console.error('Save failed:', response.data);
      //     }
      //   } catch (error) {
      //     // Log detailed error information
      //     console.error('Error during save:', error);
      //     if (error.response) {
      //       console.error('Response data:', error.response.data);
      //       console.error('Response status:', error.response.status);
      //     } else if (error.request) {
      //       console.error('No response received. Request:', error.request);
      //     } else {
      //       console.error('Error message:', error.message);
      //     }
      //   }
      // },




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
      
      async deleteRecord(recordId){
        const confirm = window.confirm("Are you sure that you want to delete this record?");
        if(confirm){
          const ins = await axios.post('del', {
            id: recordId,
        });
        this.getInfo();
        this.getReq();
        }
      },

      async logout(){
          sessionStorage.removeItem('token');
          this.$router.push('/');
      },

      // async fetchEmployeeDetails() {
      // // Use the CodeIgniter API endpoint to fetch employee details based on the selectedEmployee
      //   if (this.selectedEmployee) {
      //     try {
      //       const response = await fetch(`http://dilg.test/backend/public/getEmployee/${this.selectedEmployee}`);
      //       const data = await response.json();
      //       this.selectedEmployeeDetails = data;
      //     } catch (error) {
      //       console.error('Error fetching employee details', error);
      //     }
      //   } else {
      //     this.selectedEmployeeDetails = null;
      //   }
      // },
      async fetchEmployeeNames() {
        // Use the CodeIgniter API endpoint to fetch the list of employee names
        try {
          const response = await axios.get('getEmployees');
          this.employees = response.data;
        } catch (error) {
          console.error('Error fetching employee names', error);
        }
      },

    //   async getInventory(){
    //     try {
    //         const inv = await axios.get('getInventory');
    //         this.inventory = inv.data;
    //         console.log(this.inventory);
    //     } catch (error) {
    //         console.log(error);
    //     }
    // },
      


    //   async approveRecord(id) {
    //   try {
    //     // Assuming you have an API endpoint for approving records
    //     const response = await fetch(`/api/request/approve/${id}`, {
    //       method: 'PUT',
    //       headers: {
    //         'Content-Type': 'application/json'
    //         // Add any additional headers if needed
    //       }
    //     });

    //     if (response.ok) {
    //       // Update the status in the frontend
    //       const index = this.requests.findIndex(req => req.id === id);
    //       this.$set(this.requests, index, { ...this.requests[index], status: 'Approved' });

    //       console.log('Record approved successfully');
    //     } else {
    //       console.error('Failed to approve record');
    //     }
    //   } catch (error) {
    //     console.error('Error:', error);
    //   }
    // },
    // async declineRecord(id) {
    //   try {
    //     // Assuming you have an API endpoint for declining records
    //     const response = await fetch(`/api/request/decline/${id}`, {
    //       method: 'PUT',
    //       headers: {
    //         'Content-Type': 'application/json'
    //         // Add any additional headers if needed
    //       }
    //     });

    //     if (response.ok) {
    //       // Update the status in the frontend
    //       const index = this.requests.findIndex(req => req.id === id);
    //       this.$set(this.requests, index, { ...this.requests[index], status: 'Declined' });

    //       console.log('Record declined successfully');
    //     } else {
    //       console.error('Failed to decline record');
    //     }
    //   } catch (error) {
    //     console.error('Error:', error);
    //   }
    // },
    // async deleteRecord(id) {
    //   try {
    //     // Assuming you have an API endpoint for deleting records
    //     const response = await fetch(`/api/request/delete/${id}`, {
    //       method: 'DELETE',
    //       headers: {
    //         'Content-Type': 'application/json'
    //         // Add any additional headers if needed
    //       }
    //     });

    //     if (response.ok) {
    //       // Remove the record from the frontend
    //       this.requests = this.requests.filter(req => req.id !== id);

    //       console.log('Record deleted successfully');
    //     } else {
    //       console.error('Failed to delete record');
    //     }
    //   } catch (error) {
    //     console.error('Error:', error);
    //   }
    // },
    

//     async updatereqStatus(id, newStatus) {
//     try {
//         let feedback = ''; // Initialize feedback variable
//         // Prompt the user for feedback before approving or disapproving
//         if (newStatus === 'Approved' || newStatus === 'Declined') {
//             feedback = prompt('Please provide feedback:'); // Show prompt for feedback
//             if (feedback === null) return; // If user cancels, do nothing
//         }

//         const response = await axios.post('updatereqStatus', { id, status: newStatus, feedback });
//         if (response.status === 200) {
//             console.log(response.data);
//             this.getReq();
//         } else {
//             console.error('Error updating status:', response.data.error);
//         }
//     } catch (error) {
//         console.error('Network error:', error.message);
//     }
// },

    // async updatereqStatus(id, newStatus) {
    //     try {
    //       const response = await axios.post('updatereqStatus', { id, status: newStatus });
    //         if (response.status === 200) {
    //             console.log(response.data);
    //             this.getReq();
    //         } else {
    //             console.error('Error updating status:', response.data.error);
    //         }
    //     } catch (error) {
    //         console.error('Network error:', error.message);
    //     }
    //   },



  },
  mounted() {
    this.fetchEmployeeNames();
    this.getInventory();
  },
}
</script>

<style scoped>

.layout {
  width: 500px; /* Smaller width for the layout */
  height: 1380px; /* Smaller height for the layout */
  top: 30%; /* Adjust position if needed */
  left: 35%; /* Adjust position if needed */
  position: absolute; /* Ensure it positions correctly */
  background-color: white; /* White background for the layout */
}


.form-page {
  display: none;
}

.form-page.active {
  display: block;
}

.updatemodal-backdrop {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5); /* Dark overlay with opacity */
  z-index: 1040; /* Ensure it sits behind the modal */
}

/* Adjust z-index of modal for stacking */
.updatemodal {
  z-index: 1050; /* Ensure the modal is on top of the backdrop */
}

/* Slide transition (if needed) */
.updatemodal-slide-enter-active {
  animation: slide-down 0.5s ease-out forwards;
}

.updatemodal-slide-leave-active {
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
  .updatemodal-dialog {
    width: 100%; /* Full width on smaller screens */
    height: auto; /* Allow height to adjust based on content */
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
/* Ensure the parent container takes up full height and centers content */


.align-items-center {
  align-items: center;
}


/* Adjustments for the loading animation */
.loading-line {
  width: 100%;
  height: 4px;
  background-color: #ffffff; /* Background color of the loading container */
  position: relative;
  overflow: hidden; /* Ensures the loading line stays within the container */
}

.loading-line::before {
  content: "";
  position: absolute;
  height: 100%;
  width: 50%;
  background-color: rgb(0, 68, 255); /* Color of the loading line */
  animation: loading 0.5s linear infinite; /* Faster looping animation */
}

@keyframes loading {
  0% {
    transform: translateX(-100%); /* Start from the left */
  }
  100% {
    transform: translateX(100%); /* Move to the right */
  }
}
.context-menu {
  position: fixed;
  background-color: white;
  border: 1px solid #ccc;
  padding: 5px;
  z-index: 1000; /* Ensure the context menu is above other elements */
}

.context-menu a {
  display: block;
  padding: 8px 12px;
  color: #ffffff;
  text-decoration: none;
  margin: 10px;
}

.context-menu a:hover {
  background-color: aquamarine;
  color: #333;
}

.card-title {
  margin-bottom: -20px;
}

.section-divider {
  border-top: 1px solid #000; 
  margin: 20px 0; 
}

.form-control {
  border-width: 1px; 
  border-color: lightgray; 

}
.button {
  border: none;
  background-color: seagreen;
  color: white;
  font-size: 0.8rem; /* Mas maliit na font size */
  font-weight: 500;
  padding: 0.4rem 1rem; /* Binawasan ang padding */
  border-radius: 0.3rem; /* Mas maliit na border radius */
  box-shadow: 0 0.2rem 0.4rem rgba(0, 0, 0, 0.15);
  cursor: pointer;
  transform: translate(0, 0);
  transition: transform 225ms, box-shadow 225ms;
  display: block; /* Siguraduhing block element para sa centering */
  margin: 0 auto; /* Center ang button horizontally */
  width: 100px; /* Binawasan ang width */
  height: 35px; /* Binawasan ang height */
}

.button:hover {
  transform: scale(1.03) translate(0, -0.05rem);
  box-shadow: 0 0.3rem 0.6rem rgba(0, 0, 0, 0.35);
}

.button:active {
  transform: scale(1) translate(0, 0.05rem);
  box-shadow: 0 0.3rem 0.6rem rgba(0, 0, 0, 0.15);
}

.button1 {
  color: white;
  background-color: #C0392B;
  font-weight: 500;
  border-radius: 0.3rem; /* Parehong border radius sa .button */
  font-size: 0.8rem; /* Parehong font size sa .button */
  line-height: 1.5rem; /* Adjusted line height */
  padding-left: 0.4rem; /* Parehong padding sa .button */
  padding-right: 0.4rem; /* Parehong padding sa .button */
  padding-top: 0.4rem; /* Parehong padding sa .button */
  padding-bottom: 0.4rem; /* Parehong padding sa .button */
  cursor: pointer;
  text-align: center;
  margin-right: 0.3rem; /* Binawasan ang margin */
  display: inline-flex;
  align-items: center;
  border: none;
  width: 100px; /* Parehong width sa .button */
  height: 35px; /* Parehong height sa .button */
}

.button1:hover {
  background-color: maroon;
}

.button1 svg {
  display: inline;
  width: 1rem; /* Adjusted width */
  height: 1rem; /* Adjusted height */
  margin-right: 0.5rem; /* Binawasan ang margin */
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


/* Optional: Ensure width and height are set */
.button, .button1 {
  width: 100px; /* Binawasan ang width */
  height: 35px; /* Binawasan ang height */
  font-size: 12px; /* Mas maliit na font size */
  padding: 0.4rem 0.8rem; /* Binawasan ang padding */
}

.body {
  display: flex;
  justify-content: flex-end; /* Ensure the body div is aligned to the right */
  width: 100%;
  padding-right: 20px; /* Add padding to the right if needed */
}

.radio-input {
  --container_width: 480px;
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
  width: calc(var(--container_width) / 3);
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
  transform: translateX(calc(var(--container_width) * 0/3));
}

.radio-input label:nth-child(2):has(input:checked) ~ .selection {
  transform: translateX(calc(var(--container_width) * 1/3));
}

.radio-input label:nth-child(3):has(input:checked) ~ .selection {
  transform: translateX(calc(var(--container_width) * 2/3));
}

.InputContainer {
  width: 200px; /* Increased width */
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
  width: 190px; /* Increased width */
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


table {
  width: 100%;
  border-collapse: collapse;
  font-size: 13px; /* Adjust font size as needed */
}

th, td {
  border: 1px solid black;
  padding: 3px 9px; /* Adjust padding for better readability */
  text-align: center;
  white-space: nowrap; /* Prevent line breaks in cells */
  overflow: hidden; /* Hide overflowed content */
  text-overflow: ellipsis; /* Show ellipsis for overflowed content */
}

th {
  height: 30px; /* Adjust height for header */
  white-space: nowrap;
}

/* Optional: Add a wrapper for horizontal scrolling */
.wrapper {
  overflow-x: auto;
  -webkit-overflow-scrolling: touch; /* Enable smooth scrolling on mobile */
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


/* Next button styles */
.nextbtn {
  display: inline-block;
  border-radius: 3px;
  background-color: #4caf50; /* Background color (green) */
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 13px; /* Slightly smaller font size */
  padding: 8px; /* Slightly reduced padding */
  width: 90px; /* Keeping width same */
  transition: all 0.3s;
  cursor: pointer;
  margin: 5px;
}

.nextbtn span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.nextbtn span:after {
  content: '»';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -13px; /* Adjusted spacing */
  transition: 0.5s;
}

.nextbtn:hover span {
  padding-right: 13px; /* Adjusted spacing */
}

.nextbtn:hover span:after {
  opacity: 1;
  right: 0;
}

/* Back button styles */
.backbtn {
  display: inline-block;
  border-radius: 3px;
  background-color: #3d405b; /* Background color */
  border: none;
  color: #ffffff; /* Font color */
  text-align: center;
  font-size: 13px; /* Slightly smaller font size */
  padding: 8px; /* Slightly reduced padding */
  width: 90px; /* Keeping width same */
  transition: all 0.3s;
  cursor: pointer;
  margin: 5px;
}

.backbtn > svg {
  margin-right: 3px; /* Adjusted spacing */
  margin-left: 5px;
  font-size: 13px; /* Slightly smaller icon size */
  transition: all 0.2s ease-in;
  fill: #ffffff; /* SVG color to match font color */
}

.backbtn:hover > svg {
  font-size: 14px; /* Slightly larger icon size on hover */
  transform: translateX(-7px); /* Adjusted translation on hover */
}

.backbtn:hover {
  box-shadow: 4px 4px 15px rgba(0, 0, 0, 0.2), -4px -4px 15px rgba(255, 255, 255, 0.3);
  transform: translateY(-1px); /* Adjusted shadow and movement on hover */
}



</style>
