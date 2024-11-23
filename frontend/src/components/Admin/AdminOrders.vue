<style scoped>
.custom-dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-menu {
  position: absolute;
  top: calc(100% + 5px);
  left: 0;
  z-index: 1000;
  display: none;
  background-color: #fff;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
}

.custom-dropdown:hover .dropdown-menu {
  display: block;
}

.dropdown-item {
  padding: 0.5rem 1rem;
  cursor: pointer;
}

.star-rating {
  font-size: 1.5em;
}

.star-bar {
  width: 100%;
  height: 30px;
  border-radius: 15px;
  background-color: #ccc;
}

.star-progress {
  height: 100%;
  border-radius: 15px;
  background-color: #ffd700;
}



/* Responsive adjustments for mobile devices */
@media (max-width: 768px) {
  .col-md-6, .col-md-12 {
    width: 100%;
  }
}
.list-group-item {
  cursor: pointer;
}
.position-absolute {
  z-index: 1000;
  background-color: white;
  width: 100%;
}

  /* Form Labels */
  .form-label {
    font-weight: 600;
    font-size: 0.9rem;
    color: #4a4a4a;
    letter-spacing: 0.5px;
    display: block;
    margin-bottom: 5px;
    text-transform: uppercase;
  }

  /* Card and Body Styling */
  .card {
    border: 1px solid #e0e0e0;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    background-color: #f9f9f9;
  }
  
  .card-body {
    padding: 2rem;
  }

  /* Input Fields Styling */
  .form-control, .form-select {
    border: 1px solid #dcdcdc;
    border-radius: 6px;
    font-size: 0.9rem;
    color: #333;
    padding: 0.5rem;
    transition: border-color 0.3s;
  }

  /* Focus Effect on Input Fields */
  .form-control:focus, .form-select:focus {
    border-color: #4a90e2;
    box-shadow: 0 0 8px rgba(74, 144, 226, 0.2);
  }

  /* Button Styling */
  .btn-primary {
    background-color: #4a90e2;
    border-color: #4a90e2;
    font-size: 1rem;
    padding: 0.5rem 2rem;
    border-radius: 6px;
    font-weight: 600;
    letter-spacing: 0.5px;
    transition: background-color 0.3s;
  }

  .btn-primary:hover {
    background-color: #357abd;
    border-color: #357abd;
  }

  .btn-secondary {
    background-color: #e0e0e0;
    border-color: #dcdcdc;
    color: #4a4a4a;
    font-size: 1rem;
    padding: 0.5rem 2rem;
    border-radius: 6px;
    font-weight: 600;
    letter-spacing: 0.5px;
  }

  /* Responsive Text Centering for Card Title */
  .card-title {
    font-size: 1.25rem;
    font-weight: bold;
    color: #333;
    margin-bottom: 1rem;
    border-bottom: 1px solid #e0e0e0;
    padding-bottom: 0.5rem;
    text-transform: uppercase;
  }

  .scrollable-list {
    max-height: 200px; /* Adjust height based on your layout preference */
    overflow-y: auto;
  }

  .navbar {
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    background-color: #f8f9fa; /* Light background */
    border-radius: 10px;
    padding: 10px; /* Add some padding */
    max-width: 100%;
    background: linear-gradient(90deg, #ffffff, #80faf4); /* Orange to blue-green gradient */
  }
  
  .navbar-nav {
    display: contents; /* Use flexbox to align items */
    justify-content: center; /* Center items horizontally */
    flex-wrap: nowrap; /* Prevent wrapping on smaller screens */
    padding-left: 0; /* Remove default padding */
    margin: 0; /* Remove default margin */
  }
  
  .nav-link1 {
    font-size: 1.1rem;
    padding: 10px 15px;
    transition: background-color 0.3s, color 0.3s;
  }
  
  .nav-link1:hover {
    background-color: #e2e6ea; /* Light background on hover */
    color: #007bff; /* Change text color on hover */
  }
  
  .nav-link1.active {
    background-color: #007bff; /* Active background color */
    color: #fff; /* Active text color */
    border-radius: 5px; /* Rounded corners for active link */
  }
  
  .divider {
    height: 40px; /* Divider height to center align */
    width: 1px; /* Divider width */
    background-color: #dee2e6; /* Light grey color */
    margin: 0 10px; /* Spacing around the divider */
  }
  
  @media (max-width: 576px) {
    .navbar-nav {
      justify-content: center; /* Keep items centered on mobile */
      flex-wrap: nowrap; /* Ensure items stay horizontal */
    }
  
    .nav-link1 {
      font-size: 1rem; /* Smaller font size for mobile */
    }
  
    .divider {
      display: none; /* Hide dividers on mobile for simplicity */
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
              <a class="nav-link active" href="/ordering">
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
            <h1>Ordering Section</h1>
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/ordering">Orders</a></li>
                <li class="breadcrumb-item active">Ordering</li>
              </ol>
            </nav>
          </div><!-- End Page Title -->
          <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <div class="container-fluid justify-content-center">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link1 active" href="/ordering">
                      <i class="bi bi-cart-plus"></i> <span>Orders</span>
                    </a>
                  </li>
                  <div class="divider"></div>
                  <li class="nav-item">
                    <a class="nav-link1" href="/orderpending">
                      <i class="bi bi-truck"></i> <span>Incoming</span>
                    </a>
                  </li>
                  <div class="divider"></div>
                  <li class="nav-item">
                    <a class="nav-link1" href="/orderincoming">
                      <i class="bi bi-cart-check"></i> <span>Ordered</span>
                    </a>
                  </li>
                </ul>
              </div>
            </nav>
          </header>
                   
          <br><br>
            <section class="section">
            <div class="row">
                <div class="col-lg-8">
    
    
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title text-center">Add Order</h5>
                      
                      <!-- Order Form -->
                      <form class="row g-3" method="POST" enctype="multipart/form-data" @submit.prevent="saveOrder">
                        <!-- Classification Field -->
                        <div class="col-md-6">
                          <label for="classification" class="form-label">Classification</label>
                          <input type="text" class="form-control" id="classification" v-model="classification" required>
                        </div>
                
                        <!-- Article Selection -->
                        <div class="col-md-6 position-relative">
                          <label for="article" class="form-label">Article</label>
                          <input type="text" class="form-control" id="article" v-model="article" @input="fetchArticles" @change="fetchShopsByArticle" placeholder="Type an article or select an existing..." required>
                        </div>
                
                        <!-- Particulars Field -->
                        <div class="col-md-6">
                          <label for="particulars" class="form-label">Particulars</label>
                          <input type="text" class="form-control" id="particulars" v-model="particulars" required>
                        </div>
                
                        <!-- Quantity and Unit Fields -->
                        <div class="col-6 col-md-3">
                          <label for="quantity" class="form-label">Quantity</label>
                          <input type="number" class="form-control" id="quantity" v-model="quantity" required>
                        </div>
                
                        <div class="col-6 col-md-3">
                          <label for="unit" class="form-label">Unit</label>
                          <select class="form-select" id="unit" v-model="unit" required>
                            <option value="unit">Unit</option>
                            <option value="set">Set</option>
                          </select>
                        </div>
                
                        <!-- Unit Cost and Total Amount Fields -->
                        <div class="col-6 col-md-2">
                          <label for="unitcost" class="form-label">Unit Cost</label>
                          <input type="number" class="form-control" id="unitcost" v-model="unitcost" required>
                        </div>
                
                        <div class="col-6 col-md-2">
                          <label for="totalamount" class="form-label">Total Amount</label>
                          <input type="text" class="form-control" id="totalamount" :value="totalAmountFormatted" required readonly>
                        </div>
                
                        <!-- Shop Selection with Toggle Option -->
                        <div class="col-md-4">
                          <label for="shop" class="form-label">Shop</label>
                          <div class="d-flex align-items-center">
                            <input v-if="!useDropdown" type="text" class="form-control" id="shop" v-model="shop" placeholder="Type a shop or select an existing..." required>
                          </div>
                        </div>
                
                        <!-- Date Ordered Field -->
                        <div class="col-md-4">
                          <label for="date_ordered" class="form-label">Date Ordered</label>
                          <input type="date" class="form-control" id="date_ordered" v-model="date_ordered">
                        </div>
                
                        <!-- Submit and Reset Buttons -->
                        <div class="col-md-12 text-center mt-10">
                          <button type="submit" class="btn btn-primary">Submit</button>
                          <button @click="resetForm" type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                      </form>
                    </div>
                  </div>
    
                </div>

                      <!-- Article and Shop Selection Cards -->
              <div class="col-lg-4">
                <!-- Article Selection Card -->
                <div class="card mb-3">
                  <div class="card-header">Select Article</div>
                  <div class="card-body scrollable-list">
                    <div v-for="article in articles" :key="article.id" class="form-check">
                      <input 
                        type="radio" 
                        :id="`article-${article.id}`" 
                        class="form-check-input" 
                        :value="article.article" 
                        v-model="selectedArticle"
                        @change="onArticleSelect(article.article)">
                      <label :for="`article-${article.id}`" class="form-check-label">{{ article.article }}</label>
                    </div>
                  </div>
                </div>

                <!-- Shop Selection Card -->
                <div class="card">
                  <div class="card-header">Select Shop</div>
                  <div class="card-body scrollable-list">
                    <div v-if="filteredShops.length > 0" v-for="shop in filteredShops" :key="shop.id" class="form-check d-flex align-items-center">
                      <input 
                        type="radio" 
                        :id="`shop-${shop.id}`" 
                        class="form-check-input" 
                        :value="shop.shop" 
                        v-model="selectedShop"
                        @change="onShopSelect(shop.shop)">
                      <label :for="`shop-${shop.id}`" class="form-check-label">
                        {{ shop.shop }}
                        <div class="star-rating ms-2">
                          <div class="star-bar">
                            <div class="star-progress" :style="{ width: ((shop.shop_rate / 5) * 100) + '%' }"></div>
                          </div>
                        </div>
                      </label>
                    </div>
                    <div v-else>No shops available for the selected article.</div>
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
      
      
      export default{
      
      computed:{
        baseURL() {
          return axios.defaults.baseURL;
        },
        totalAmount() {
          return this.quantity * this.unitcost;
        },
        totalAmountFormatted() {
          // Format total amount with commas
          return this.totalAmount.toLocaleString();
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
      data(){
          return{
              infos:[],
              notifications: [],
              filter: 'all',
              id: "",
              inventory:[],
              shops: [],
              entityname: "",
              classification: "",
              article: "",
              particulars: "",
              quantity: "",
              unit: "",
              unitcost: "",
              totalamount: "",
              shop: "",
              date_ordered: "",
              filteredArticles: [],
              filteredShops: [],
              useDropdown: false,
              articles: [], // Array to hold articles fetched from the backend
              selectedArticle: "", // Track the selected article
              selectedShop: "", // Track the selected shop
          }
      },
      created(){
          this.getInventory();
          this.getShop();
          this.fetchArticles();
          this.getArticles();
          this.fetchNotifications();
          this.user();
          this.getUserInfo(this.infos.fullname);
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
        getStarWidth(shopRate) {
          return (shopRate / 5) * 100;
        },
        // calculateTotalAmount() {
        //   // Check if quantity and unit cost are numeric values
        //   if (!isNaN(this.quantity) && !isNaN(this.unitcost)) {
        //     // Calculate total amount
        //     return this.quantity * this.unitcost;
        //   } else {
        //     // If quantity or unit cost is not a number, return 0
        //     return 0;
        //   }
        // },
        async getArticles() {
          try {
            const response = await axios.get('/getArticles'); // Adjust the endpoint if necessary
            this.articles = response.data;
          } catch (error) {
            console.error('Error fetching articles:', error);
          }
        },
        async onArticleSelect(article) {
          // Set the article in the form and fetch corresponding shops
          this.article = article;
          await this.fetchShopsByArticle(); // Assuming this function is already defined
        },
        onShopSelect(shop) {
          // Set the selected shop in the form
          this.shop = shop;
        },
        async fetchArticles() {
          if (this.article.length > 0) {
            try {
              const response = await axios.get('/getArticles', { params: { query: this.article } });
              this.filteredArticles = response.data;
            } catch (error) {
              console.error('Error fetching articles', error);
            }
          } else {
            this.filteredArticles = [];
          }
        },
        async fetchShopsByArticle() {
          if (this.article) {
            try {
              const response = await axios.get('/getShopsByArticle', { params: { article: this.article } });
              this.filteredShops = response.data;
            } catch (error) {
              console.error('Error fetching shops by article', error);
            }
          }
        },
        selectArticle(article) {
          this.article = article;
          this.filteredArticles = [];
          this.fetchShopsByArticle();
        },
        toggleShopInput() {
          this.useDropdown = !this.useDropdown;
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
          // async saveOrder() {
          //     try {
          //         const response = await axios.post('saveOrder', {
          //             classification: this.classification,
          //             article: this.article,
          //             particulars: this.particulars,
          //             quantity: this.quantity,
          //             unit: this.unit,
          //             unitcost: this.unitcost,
          //             totalamount: this.totalamount,
          //             shop: this.shop,
          //             date_ordered: this.date_ordered,
          //         });
          //         console.log('Server response:', response.data);
          //         this.$emit('data-saved');
          //     } catch (error) {
          //         console.error(error);
          //     }
          // },



          async saveOrder() {
          try {
            // Compute totalcost

            // Create a FormData object and append the computed totalcost
            const formData = new FormData();

            // Append other form data including the computed totalcost
            formData.append('classification', this.classification);
            formData.append('article', this.article);
            formData.append('particulars', this.particulars);
            formData.append('quantity', this.quantity);
            formData.append('unit', this.unit);
            formData.append('unitcost', this.unitcost);
            formData.append('totalamount', this.totalamount); // Ensure totalcost is included
            formData.append('shop', this.shop);
            formData.append('date_ordered', this.date_ordered);

            // Now you can submit the formData to your backend endpoint using Axios or any other method
            await axios.post('/saveOrder', formData, {
              headers: {
                'Content-Type': 'multipart/form-data'
              }
            });

            // Reset the form and emit the 'data-saved' event
            // this.resetForm();
            // this.$emit('data-saved');
            // console.log('Server response:', response.data);
            
          } catch (error) {
            console.error('Error saving:', error);
          }
          this.$router.push('/orderpending');
        },

          async getShop() {
            // Use the CodeIgniter API endpoint to fetch the list of employee names
            try {
              const response = await axios.get('getShop');
              this.shops = response.data;
            } catch (error) {
              console.error('Error fetching employee names', error);
            }
          },

      
          resetForm() {
                  this.classification = "";
                  this.article = "";
                  this.particular = "";
                  this.unit = "";
                  this.unitcost = "";
                  this.totalamount = "";
                  this.shop = "";
                  this.quantity = "";
                  this.date_ordered = "";
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
              this.$router.push('/');
          }
      },
      }
      </script>