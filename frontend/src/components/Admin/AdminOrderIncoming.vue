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
              <a class="nav-link" href="/ordering">
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
            </li>
                    
      
          </ul>
      
          </aside><!-- End Sidebar-->
      
      
      
      
      
      
      
          <main id="main" class="main">
      
          <div class="pagetitle">
            <h1>Incoming Section</h1>
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/ordering">Incoming</a></li>
                <li class="breadcrumb-item active">Ordering</li>
              </ol>
            </nav>
          </div><!-- End Page Title -->
      <header>
        <nav>
          <ul style="list-style-type: none">
            <div class="row" >
              <div class="col-lg-4" align="center">
                <li class="nav-item"><a class="nav-link-collapsed" href="/ordering"><i class="bi bi-folder-plus"><span>Orders</span></i></a></li>
              </div>
              <div class="col-lg-4" align="center">
                <li class="nav-item"><a class="nav-link-collapsed" href="/orderpending"><i class="bi bi-folder-plus"><span>Pending</span></i></a></li>
              </div>
              <div class="col-lg-4" align="center">
                <li class="nav-item"><a class="nav-link" href="/orderincoming"><i class="bi bi-folder-plus"><span>Incoming</span></i></a></li>
              </div>
            </div>
          </ul>
        </nav>
      </header>
            <section class="section">
            <div class="row">
                <div class="col-lg-12">
    
    
    
    

    
                </div>
            </div>
            </section>
      
          </main><!-- End #main -->
    
      
          <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
        </div>
      </template>
    
    
    <script>
    
    // Components

    
    </script>
    