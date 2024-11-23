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
            <i class="bi bi-grid-1x2"></i>
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
  <div class="col-lg-12">
    
    <div class="container">
          <div class="card info-card inventory-tracking-card" style="border-left: 30px solid #80faf4;">
              <div class="card-body">
                  <h5 class="card-title">Inventory Borrowed Tracking</h5>
                  <div class="graph-container">
                      <canvas ref="BorrowChart" style="width: 200%; height: 400px;"></canvas>
                  </div>
              </div>
          </div>
   </div>
    
  </div>

</div>

<div class="row">
  <!-- Left side columns -->
  <div class="col-lg-12">
    
    <div class="container">
          <div class="card info-card inventory-tracking-card" style="border-right: 30px solid #ffa341;">
              <div class="card-body">
                <h5 class="card-title">Supplies Predictive Analysis</h5>
                <div class="graph-container">
                  <canvas id="supplyTrendChart" style="width: 200%; height: 600px;"></canvas>
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
import { Line } from 'chart.js';
// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyBYJFAEo7DoVcirECtaIzoqqAYn2OLW2qk",
  authDomain: "ci4-backend-firebase.firebaseapp.com",
  projectId: "ci4-backend-firebase",
  storageBucket: "ci4-backend-firebase.firebasestorage.app",
  messagingSenderId: "876476699989",
  appId: "1:876476699989:web:6c7fa2d9fe158d32530bdc",
  measurementId: "G-NC5RW3RMWM"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);

export default {
  props: {
    itemCode: String
  },
  data() {
    return {
      notifications: [],
      filter: 'all',
      employees: [],
      chart: null,
      chartData: [],
      chartLabels: [],
      infos: [],
      employeeCount: 0,
      inventoryCount: 0,
      ppeCount: 0,
    };
  },
  mounted() {
    this.fetchPrediction();
    this.getEmployeeSupplies();

    this.fetchInventoryCount();
    this.fetchEmployeeCount();
    this.fetchTotalInventory();
    this.fetchPPECount();
    this.fetchNotifications(); // Fetch notifications on component creation
    // this.notificationInterval = setInterval(() => {
    // this.fetchNotifications();
    // }, 1000);
  },
  beforeUnmount() {
    // Clear the interval when the component is destroyed to avoid memory leaks
    clearInterval(this.notificationInterval);
  },
  created() {
    this.user();
    this.getUserInfo(this.infos.fullname);
    this.fetchNotifications();
    
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


      async fetchPrediction() {
        try {
            const response = await fetch(`${this.baseURL}/api/supply-prediction`);
            const data = await response.json();

            // Initialize chart data
            this.chartLabels = [];
            this.chartData = [];

            // Populate chart data
            for (const itemCode in data) {
                const predictions = data[itemCode];
                const dataset = {
                    label: itemCode,
                    data: predictions.map(entry => entry.predicted_issue),
                    borderColor: this.getRandomColor(), // Generate random color for each line
                    fill: false
                };

                this.chartData.push(dataset);

                // Fill labels only once
                if (this.chartLabels.length === 0) {
                    this.chartLabels = predictions.map(entry => entry.month);
                }
            }

            this.renderChart();
        } catch (error) {
            console.error("Error fetching predictions:", error);
        }
    },

    getRandomColor() {
      const letters = '0123456789ABCDEF';
      let color = '#';
      for (let i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
      }
      return color;
    },

    renderChart() {
      if (this.chart) this.chart.destroy();

      const ctx = document.getElementById("supplyTrendChart").getContext("2d");
      this.chart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: this.chartLabels,
          datasets: this.chartData // Use the populated chartData
        },
        options: {
          responsive: true,
          scales: {
            x: { title: { display: true, text: "Month" } },
            y: { title: { display: true, text: "Predicted Issue Quantity", font: {
                size: 16,
              } } }
          }
        }
      });
    },


    async getEmployeeSupplies() {
              try {
                const response = await axios.get('getEmployeeSupplies');
                const employees = response.data;


              } catch (error) {
                console.log(error);
              }
            },
















    async fetchInventoryCount() {
      try {
        const response = await axios.get('/getInventoryCount');
        const data = response.data;
        const propertynumber = data.propertynumber;
        const counts = data.counts;
        // Render charts for both BorrowChart and ReturnChart
        this.renderInventoryChart('BorrowChart', propertynumber, counts);
        this.renderInventoryChart('ReturnChart', propertynumber, counts); // Second graph
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
            barThickness: 20,
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
};
</script>


<style scoped>

#supplyTrendChart {
  max-width: 1500px;
  max-height: 400px;
}







.container {
  display: flex;
  flex-direction: row;
  align-items: center;
  max-width: 100%;
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

