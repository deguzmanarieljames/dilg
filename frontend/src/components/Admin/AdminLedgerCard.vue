<template>
  <div id="app" style="background-image: url('./img/bg.png'); background-size: cover; background-attachment: fixed; height: 100%;">
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
                <img src="./img/profile-img.jpg" alt="Profile" class="rounded-circle">
                <span class="d-none d-md-block dropdown-toggle ps-2">A. De Guzman</span>
              </a><!-- End Profile Iamge Icon -->
    
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                <li class="dropdown-header">
                  <h6>Ariel James De Guzman</h6>
                  <span>Web Designer</span>
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
            <a class="nav-link " data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-journal-text"></i><span>Documents</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content " data-bs-parent="#sidebar-nav">
              <li>
                <a href="propertysticker">
                  <i class="bi bi-circle"></i><span>Property Sticker</span>
                </a>
              </li>
              <li>
                <a href="ledgercard" class="active">
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
  
          <li class="nav-heading">Ordering</li>
      
          <li class="nav-item">
            <a class="nav-link collapsed" href="/ordering">
              <i class="bi bi-folder-plus"></i>
              <span>Ordering</span>
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
              <div class="card text-center h-100">
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
              <div class="card text-center h-100">
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
              <div class="card text-center h-100">
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
                  <div class="modal-header d-flex justify-content-between align-items-center">
                    <h5 class="modal-title">INVENTORY AND INSPECTION REPORT OF UNSERVICEABLE SEMI-EXPENDABLE PROPERTY</h5>
                    <div>
                      <!-- Show PDF Button -->
                      <button 
                        v-if="!showPdf" 
                        class="btn btn-outline-secondary btn-sm me-2" 
                        @click="showPDF"
                      >
                        <i class="fas fa-file-pdf"></i> Show PDF
                      </button>
                    
                      <!-- Close PDF Button -->
                      <button 
                        v-else 
                        class="btn btn-danger btn-sm me-2" 
                        @click="showPdf = false"
                      >
                        <i class="fas fa-times"></i> Close PDF
                      </button>
                    
                      <!-- Download PDF Button -->
                      <a 
                        class="btn btn-outline-primary btn-sm" 
                        @click="IIRUSPdownloadPDF"
                      >
                        <i class="fas fa-download"></i> Download PDF
                      </a>
  
                      <button class="btn btn-outline-secondary btn-sm me-2"
                      @click="closeModal"
                      >
                      <i class="fas fa-file-pdf"></i> Close 
                    </button>
                  </div>
                    
                  </div>
  
                  <!-- Tabs Navigation -->
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
                      >
                        Update Record
                      </span>
                    </li>
                  </ul>
  
                  <div class="modal-body">
                    <!-- Responsive Container -->
                    <div class="d-flex flex-column flex-lg-row">
                      <!-- Table Content -->
                      <div class="table-responsive w-100">
                        <div v-show="currentTab === 'view'" id="view-tab">
                          <table class="office-table">
                            <thead>
                              <tr>
                                <th colspan="9" class="header-title"><b>Inventory Inspection and Disposal</b></th>
                              </tr>
                              <tr>
                                <th rowspan="2"><b>Date Acquired</b></th>
                                <th rowspan="2"><b>Particulars/Articles</b></th>
                                <th rowspan="2"><b>Semi-Expendable Property No.</b></th>
                                <th rowspan="2"><b>Quantity</b></th>
                                <th rowspan="2"><b>Unit Cost</b></th>
                                <th rowspan="2"><b>Total Cost</b></th>
                                <th rowspan="2"><b>Accumulated Impairment</b></th>
                                <th rowspan="2"><b>Carrying Amount</b></th>
                                <th rowspan="2"><b>Remarks</b></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr v-for="unserv in info" :key="unserv.id" @click="openUpdateTab(unserv.id)">
                                <td>{{ unserv.issue_date }}</td>
                                <td>{{ unserv.fulldescription }}</td>
                                <td>{{ unserv.propertynumber }}</td>
                                <td>{{ unserv.rec_quantity }}</td>
                                <td>{{ unserv.rec_unitcost }}</td>
                                <td>{{ unserv.rec_totalcost }}</td>
                                <td>{{ unserv.accimploss }}</td>
                                <td>{{ unserv.rec_totalcost }}</td>
                                <td>{{ unserv.remarks }}</td>
                              </tr>
                            </tbody>
                          </table>
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
                    <h5 class="modal-title">REPORT ON THE PHYSICAL COUNT OF SEMI-EXPENDABLE PROPERTY</h5>
                    <button type="button" class="close" @click="closeModal">&times;</button>
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
                    <div class="tab-content" id="myTabContent">
                      <!-- Tab 1 -->
                      <div
                        class="tab-pane fade"
                        :class="{ show: currentTabModal2 === 'tab1', active: currentTabModal2 === 'tab1' }"
                        id="tab1"
                        role="tabpanel"
                        aria-labelledby="tab1-tab"
                      >
                        <table class="office-table">
                          <thead>
                            <tr>
                              <th colspan="11" class="header-title"><b>Inventory Inspection and Disposal</b></th>
                            </tr>
                            <tr>
                              <th rowspan="2"><b>Article</b></th>
                              <th rowspan="2"><b>Description</b></th>
                              <th rowspan="2"><b>Semi-Expendable Property No.</b></th>
                              <th rowspan="2"><b>Unit Measures</b></th>
                              <th rowspan="2"><b>Unit Value</b></th>
                              <th rowspan="2"><b>Date Acquired</b></th>
                              <th rowspan="2"><b>Balance Per Card</b></th>
                              <th rowspan="2"><b>On Hand Per Card</b></th>
                              <th rowspan="2"><b>Shortage/Overage Quantity</b></th>
                              <th rowspan="2"><b>Shortage/Overage Value</b></th>
                              <th rowspan="2"><b>Remarks</b></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr v-for="unserv in info" :key="unserv.id" @click="openUpdateTab(unserv.id)">
                              <td>{{ unserv.article }}</td>
                              <td>{{ unserv.fulldescription }}</td>
                              <td>{{ unserv.propertynumber }}</td>
                              <td>{{ unserv.rec_unit }}</td>
                              <td>{{ unserv.rec_unitcost }}</td>
                              <td>{{ unserv.issue_date }}</td>
                              <td>{{ unserv.issue_quantity }}</td>
                              <td>{{ unserv.issue_quantity }}</td>
                              <td>{{ unserv.issue_quantity - unserv.issue_quantity }}</td>
                              <td>{{ unserv.rec_unitcost * (unserv.issue_quantity - unserv.issue_quantity) }}</td>
                              <td>{{ unserv.remarks }}</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <!-- Tab 2 -->
                      <div
                        class="tab-pane fade"
                        :class="{ show: currentTabModal2 === 'tab2', active: currentTabModal2 === 'tab2' }"
                        id="tab2"
                        role="tabpanel"
                        aria-labelledby="tab2-tab"
                      >
                        <table class="office-table">
                          <thead>
                            <tr>
                              <th colspan="11" class="header-title"><b>Inventory Inspection and Disposal</b></th>
                            </tr>
                            <tr>
                              <th rowspan="2"><b>Article</b></th>
                              <th rowspan="2"><b>Description</b></th>
                              <th rowspan="2"><b>Semi-Expendable Property No.</b></th>
                              <th rowspan="2"><b>Unit Measures</b></th>
                              <th rowspan="2"><b>Unit Value</b></th>
                              <th rowspan="2"><b>Date Acquired</b></th>
                              <th rowspan="2"><b>Balance Per Card</b></th>
                              <th rowspan="2"><b>On Hand Per Card</b></th>
                              <th rowspan="2"><b>Shortage/Overage Quantity</b></th>
                              <th rowspan="2"><b>Shortage/Overage Value</b></th>
                              <th rowspan="2"><b>Remarks</b></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr v-for="unserv in info" :key="unserv.id" @click="openUpdateTab(unserv.id)">
                              <td>{{ unserv.article }}</td>
                              <td>{{ unserv.fulldescription }}</td>
                              <td>{{ unserv.propertynumber }}</td>
                              <td>{{ unserv.rec_unit }}</td>
                              <td>{{ unserv.rec_unitcost }}</td>
                              <td>{{ unserv.issue_date }}</td>
                              <td>{{ unserv.issue_quantity }}</td>
                              <td>{{ unserv.issue_quantity }}</td>
                              <td>{{ unserv.issue_quantity - unserv.issue_quantity }}</td>
                              <td>{{ unserv.rec_unitcost * (unserv.issue_quantity - unserv.issue_quantity) }}</td>
                              <td>{{ unserv.remarks }}</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" @click="closeModal">Close</button>
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
                    <h5 class="modal-title">REGISTRY OF SEMI-EXPENDABLE PROPERTY ISSUED</h5>
                    <!-- <button type="button" class="btn-close" @click="closeModal"></button> -->
                  </div>
                  <div class="modal-body">
                    <!-- Content for Modal 3 -->
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" @click="closeModal">Close</button>
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
  
  
  export default {
    data() {
      return {
        info: [],
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
        currentTab: 'view',
      };
    },
    created() {
      this.getInfo();
    },
    methods: {
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
      showPDF() {
        this.pdfUrl = 'http://dilg.test/backend/IIRUSP'; // Set the path to your PDF file
        this.showPdf = true;
      },
      closeModal() {
        this.isModalOpen = false;
        this.showPdf = false;
        this.pdfUrl = '';
      },
      async IIRUSPdownloadPDF() {
        try {
          // Send HTTP request to backend to generate PDFs for all records
          const response = await fetch('http://dilg.test/backend/IIRUSP', {
              method: 'GET',
              headers: {
                  'Content-Type': 'application/json',
              },
          });
  
          // Check if the response is successful
          if (response.ok) {
              const blob = await response.blob();
              const filename = 'IIRUSP_PDF.pdf'; // Adjust the filename if needed
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
      async logout(){
        sessionStorage.removeItem('token');
        this.$router.push('/');
      }
    }
  }
  </script>
  
  <style scoped>
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
    overflow-y: auto; /* Allows scrolling if content overflows */
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
    font-size: 14px;
  }
  
  .header-title {
    background-color: #3e5871;
    text-align: center;
    font-size: 18px;
    padding: 15px;
    border-bottom: 2px solid #ccc;
  }
  
  .office-table th {
    border-right: 1px solid #bbb;
  }
  
  .office-table td {
    border-right: 1px solid #eee;
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
  </style>
  
  