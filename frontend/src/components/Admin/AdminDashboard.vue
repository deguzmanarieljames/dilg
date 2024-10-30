<template>
  <div id="app" style="background-image: url('./img/color.jpg'); background-size: cover; background-attachment: fixed; height: 100%;">
    <!-- Header -->
    <header id="header" class="header fixed-top d-flex align-items-center">
      <!-- Logo -->
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
      <!-- Icons Navigation -->
      <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
          <!-- Notification Icon -->
          <li class="nav-item dropdown">
            <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
              <i class="bi bi-bell"></i>
              <span class="badge bg-primary badge-number">4</span>
            </a><!-- End Notification Icon -->
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            </ul><!-- End Notification Dropdown Items -->
          </li><!-- End Notification Nav -->
          <!-- Messages Icon -->
          <li class="nav-item dropdown">
            <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
              <i class="bi bi-chat-left-text"></i>
              <span class="badge bg-success badge-number">3</span>
            </a><!-- End Messages Icon -->
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            </ul><!-- End Messages Dropdown Items -->
          </li><!-- End Messages Nav -->
          <!-- Profile Nav -->
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
              <li><hr class="dropdown-divider"></li>
              <li>
                <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                  <i class="bi bi-person"></i>
                  <span>My Profile</span>
                </a>
              </li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                  <i class="bi bi-gear"></i>
                  <span>Account Settings</span>
                </a>
              </li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                  <i class="bi bi-question-circle"></i>
                  <span>Need Help?</span>
                </a>
              </li>
              <li><hr class="dropdown-divider"></li>
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

    <!-- Sidebar -->
    <aside id="sidebar" class="sidebar">
      <!-- Sidebar Navigation -->
      <ul class="sidebar-nav" id="sidebar-nav">
        <!-- Home Section -->
        <li class="nav-heading">Home</li>
        <li class="nav-item">
           <a class="nav-link active" href="/dashboard">
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
              <a class="nav-link active" href="/serviceable">
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
        <!-- Input Section -->
        <li class="nav-heading">input</li>
        <li class="nav-item">
          <a class="nav-link collapsed" href="/workspace">
            <i class="bi bi-folder-plus"></i>
            <span>Workspace</span>
          </a>
        </li><!-- End Input Nav -->
        <!-- Stocks Section -->
        <li class="nav-heading">Stocks</li>
        <li class="nav-item">
          <a class="nav-link collapsed" href="/inventory">
            <i class="bi bi-folder-plus"></i>
            <span>Inventory</span>
          </a>
        </li><!-- End Stocks Nav -->
        <!-- Ordering Section -->
        <li class="nav-heading">Ordering</li>
        <li class="nav-item">
          <a class="nav-link collapsed" href="/ordering">
            <i class="bi bi-folder-plus"></i>
            <span>Ordering</span>
          </a>
        </li><!-- End Ordering Nav -->
        <!-- Security Section -->
        <li class="nav-heading">Security</li>
        <li class="nav-item">
          <a class="nav-link collapsed" href="/userverify">
            <i class="bi bi-folder-plus"></i>
            <span>User Verification</span>
          </a>
        </li><!-- End Security Nav -->
      </ul>
    </aside><!-- End Sidebar-->

  
      <main id="main" class="main">
  
      <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->
  
      <section class="section dashboard">
  <div class="row">
    <!-- Left side columns -->
    <div class="col-lg-8">
      <div class="row">
       <!-- Database PPE Card -->

  <div class="container">
    <!-- <div class="row ">  -->
      <div class="col-xl-6 col-md-12 mb-4 inventory-container">
        <div class="card info-card customers-card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <h5 class="card-title">Database PPE</h5>
                    <a href="/databaseppe" class="btn btn-view-all btn-content">
                        <span class="btn-title">View All</span>
                        <span class="icon-arrow">
                          <svg width="38px" height="30px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <path id="arrow-icon-one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#000000"></path>
                        <path id="arrow-icon-two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#000000"></path>
                        <path id="arrow-icon-three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#000000"></path>
                      </g>
                    </svg>
                        </span>
                    </a>
                </div>
                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-database"></i>
                    </div>
                    <div class="ps-3">
                        <h1>{{ ppeCount }}</h1>
                        <p class="mb-2"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

         <!-- Inventory Card -->
         <div class="col-xl-6 col-md-12 mb-4 inventory-container">
            <div class="card info-card inventory-card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between">
                    <h5 class="card-title">Total Inventory</h5>
                    <a href="/inventory" class="btn btn-view-all btn-content">
                      <span class="btn-title">View All</span>
                      <span class="icon-arrow">
                        <svg width="46px" height="30px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <path id="arrow-icon-one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#000000"></path>
                    <path id="arrow-icon-two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#000000"></path>
                    <path id="arrow-icon-three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#000000"></path>
                  </g>
                </svg>
                      </span>
                    </a>
                  </div>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-archive"></i>
                    </div>
                    <div class="ps-3">
                      <h1>{{ inventoryCount }}</h1>
                      <p class="mb-2"></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
          <!-- Employee Card -->
          <div class="col-xl-6 col-md-12 mb-4 inventory-container">
            <div class="card info-card employees-card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between">
                    <h5 class="card-title">Total Employees</h5>
                    <a href="/userverify" class="btn btn-view-all btn-content">
                      <span class="btn-title">View All</span>
                      <span class="icon-arrow">
                        <svg width="46px" height="30px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <path id="arrow-icon-one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#000000"></path>
                    <path id="arrow-icon-two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#000000"></path>
                    <path id="arrow-icon-three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#000000"></path>
                  </g>
                </svg>
              </span>
            </a>
          </div>
          <div class="d-flex align-items-center">
            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
              <i class="bi bi-people"></i>
            </div>
            <div class="ps-3">
              <h1>{{ employeeCount }}</h1>
              <p class="mb-2"></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
</div>

</div>

<div class="row">
  <!-- Left side columns -->
  <div class="col-lg-8">
    
    <div class="container">
          <div class="card info-card inventory-tracking-card">
              <div class="card-body">
                  <h5 class="card-title">Inventory Tracking</h5>
                  <div class="graph-container">
                      <canvas ref="BorrowChart" style="width: 75%; height: 500px;"></canvas>
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
import axios from 'axios';
import Chart from 'chart.js/auto';

export default {
  data() {
    return {
      employeeCount: 0,
      inventoryCount: 0,
      ppeCount: 0
    };
  },
  mounted() {
    this.fetchInventoryCount();
    this.fetchEmployeeCount();
    this.fetchTotalInventory();
    this.fetchPPECount();
  },

  methods: {
    async fetchInventoryCount() {
      try {
        const response = await axios.get('/getInventoryCount');
        const data = response.data;
        const particulars = data.particulars;
        const counts = data.counts;
        // Render charts for both BorrowChart and ReturnChart
        this.renderInventoryChart('BorrowChart', particulars, counts);
        this.renderInventoryChart('ReturnChart', particulars, counts); // Second graph
      } catch (error) {
        console.error('Error fetching inventory count:', error);
      }
    },

    async fetchEmployeeCount() {
      try {
        const response = await axios.get('/getEmployeeCount');
        this.employeeCount = response.data.employeeCount; 
        console.log('Employee Count:', this.employeeCount);
      } catch (error) {
        console.error('Error fetching employee count:', error);
      }
    },

    async fetchTotalInventory() {
      try {
        const response = await axios.get('/getTotalInventory');
        this.inventoryCount = response.data.inventoryCount; 
        console.log('Inventory Count:', this.inventoryCount);
      } catch (error) {
        console.error('Error fetching inventory count:', error);
      }
    },

    async fetchPPECount() {
      try {
        const response = await axios.get('/getPPECount');
        this.ppeCount = response.data.ppeCount;  
        console.log('PPE Count:', this.ppeCount);
      } catch (error) {
        console.error('Error fetching ppe count:', error);
      }
    },

    renderInventoryChart(refName, particulars, counts) {
      const ctx = this.$refs[refName].getContext('2d');
      new Chart(ctx, {
        type: 'bar',
        data: {
          labels: particulars,
          datasets: [{
            label: 'Borrow Counts',
            data: counts,
            backgroundColor: [
              'rgba(0, 0, 128, 0.6)', 
              'rgba(0, 128, 0, 0.6)', 
              'rgba(128, 0, 0, 0.6)', 
              'rgba(128, 0, 128, 0.6)', 
              'rgba(0, 128, 128, 0.6)', 
              'rgba(128, 128, 0, 0.6)'
            ],
            borderColor: [
              'rgba(0, 0, 128, 0.9)', 
              'rgba(0, 128, 0, 0.9)', 
              'rgba(128, 0, 0, 0.9)', 
              'rgba(128, 0, 128, 0.9)', 
              'rgba(0, 128, 128, 0.9)', 
              'rgba(128, 128, 0, 0.9)'
            ],
            borderWidth: 2,
            barThickness: 40,
            maxBarThickness: 70
          }]
        },
        options: {
          indexAxis: 'x',
          responsive: true,
          plugins: {
            legend: {
              position: 'top',
            },
            title: {
              display: true,
              text: 'Borrow Counts of Equipments',
              font: {
                size: 16,
              }
            }
          },
          scales: {
            y: {
              beginAtZero: true
            },
            x: {
              ticks: {
                font: {
                  size: 15,
                }
              }
            }
          },
          elements: {
            bar: {
              borderWidth: 1,
              borderSkipped: 'bottom',
              barThickness: 90,
              maxBarThickness: 60,
              borderRadius: 4,
            }
          }
        }
      });
    },
  }
};
</script>


<style scoped>

.container {
  display: flex;
  flex-direction: row;
  align-items: center;
}

.row, .inventory-container {
  margin-right: 30px;
}


.graph-container {
  position: relative;
}

.graph-container::before {
  content: '';
  position: absolute;
  top: -10px;
  left: -10px;
  width: calc(100% + 20px);
  height: calc(100% + 20px);
  background-color: #f2f2f2;
  border-radius: 30px;
  z-index: -1; 
}

/* Specific styles for each card */
.card.info-card.customers-card {
background-color: #FFEEF1;
color: #1b2f47; 
border-bottom: 17px solid #E6C9C9; 
}

.card.info-card.inventory-card {
background-color: #FFF2DC;
color: #1b2f47;
border-bottom: 17px solid #E6D3B0;
}

.card.info-card.employees-card {
background-color: #D8FAE7;
color: #1b2f47;
border-bottom: 17px solid #A3CD98; 
}

.card.info-card {
    margin-bottom: 20px;
}


.card.info-card.inventory-tracking-card {
  background-color: #F8FCFF;
  color: #1b2f47; 
}

.btn-conteiner {
  display: flex;
  justify-content: center;
  --color-text: #ffffff;
  --color-background: lightblue; 
}

.btn-content {
  display: flex;
  align-items: center;
  padding: 3px 19px;
  text-decoration: none;
  font-family: 'Poppins', sans-serif;
  font-weight: 600;
  font-size: 15px;
  color: var(--color-text);
  background: var(--color-background);
  transition: 1s;
  border-radius: 100px;
  box-shadow: 0 0 0.2em 0 var(--color-background);
}

.btn-content:hover, .btn-content:focus {
  transition: 0.5s;
  -webkit-animation: btn-content 1s;
  animation: btn-content 1s;
  outline: 0.1em solid transparent;
  outline-offset: 0.2em;
  box-shadow: 0 0 0.4em 0 var(--color-background);
  background-color: #80DEEA;
}

.btn-content .icon-arrow {
  transition: 0.5s;
  margin-right: 0px;
  transform: scale(0.6);
}

.btn-content:hover .icon-arrow {
  transition: 0.5s;
  margin-right: 25px;
}

.icon-arrow {
  width: 20px;
  margin-left: 15px;
  position: relative;
  top: 6%;
}

/* SVG */
#arrow-icon-one {
  transition: 0.4s;
  transform: translateX(-60%);
}

#arrow-icon-two {
  transition: 0.5s;
  transform: translateX(-30%);
}

.btn-content:hover #arrow-icon-three {
  animation: color_anim 1s infinite 0.2s;
}

.btn-content:hover #arrow-icon-one {
  transform: translateX(0%);
  animation: color_anim 1s infinite 0.6s;
}

.btn-content:hover #arrow-icon-two {
  transform: translateX(0%);
  animation: color_anim 1s infinite 0.4s;
}

/* SVG animations */
@keyframes color_anim {
  0% {
    fill: black; 
  }

  50% {
    fill: var(--color-background);
  }

  100% {
    fill: black; 
  }
}

/* Button animations */
@-webkit-keyframes btn-content {
  0% {
    outline: 0.2em solid var(--color-background);
    outline-offset: 0;
  }
}

@keyframes btn-content {
  0% {
    outline: 0.2em solid var(--color-background);
    outline-offset: 0;
  }
}

@keyframes hoverIn {
  0% {
    background-color: #1b2f47;
    transform: translateX(0);
  }
  100% {
    background: linear-gradient(to right, #1b2f47, #3e5b77);
    transform: translateX(5px);
  }
}

@keyframes hoverOut {
  0% {
    background: linear-gradient(to right, #1b2f47, #3e5b77);
    transform: translateX(5px);
  }
  100% {
    background-color: #1b2f47;
    transform: translateX(0);
  }
}


@media (max-width:600px){
  .container{
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }
  .row{
    margin-right: 0px;
  }

}

</style>

