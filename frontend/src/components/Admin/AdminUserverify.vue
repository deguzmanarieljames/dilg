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
                <a class="nav-link active" href="/userverify">
                  <i class="bi bi-person-check"></i>
                  <span>User Verification</span>
                </a>
              </li><!-- End Security Nav -->
            </ul>
          </aside><!-- End Sidebar-->
  
  
      <main id="main" class="main">
  
      <div class="pagetitle">
        <h1>User Verification</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/userverify">Security</a></li>
            <li class="breadcrumb-item active">User Verification</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->
  
      <section class="section">
        <div class="row">
          <div class="col-lg-12">
            <div class="card" style="background-color: transparent;">
              <div class="card-body">
                <br>
                <!-- Search Bar and Show Entries Dropdown -->
                <div class="d-flex justify-content-between align-items-center">
                  <!-- Show Entries Dropdown -->
                  <div class="d-flex align-items-center">
                    <span class="me-2">Show</span>
                    <div class="dropdown" style="display: inline-block;">
                      <button class="btn btn-secondary dropdown-toggle" type="button" id="showEntriesDropdown" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: white; color: black;">
                        {{ entriesPerPage }}
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="showEntriesDropdown">
                        <li><a class="dropdown-item" href="#" @click="updatePageSize(10)">10</a></li>
                        <li><a class="dropdown-item" href="#" @click="updatePageSize(20)">20</a></li>
                        <li><a class="dropdown-item" href="#" @click="updatePageSize(30)">30</a></li>
                      </ul>
                    </div>
                    <span class="ms-2">entries</span>
                  </div>
                  <!-- Search Bar -->
                  <div class="InputContainer">
                    <input placeholder="Search.." id="input" class="input" name="text" type="text" v-model="searchKeyword" @input="filterData">
                  </div>
                </div>
      
                <br>
                <!-- Card Grid View -->
                <div class="card-grid">
                  <div class="card-container" v-for="item in paginatedInfo" :key="item.id">
                    <div class="card mb-3">
                      <div class="card-body text-center">
                        <div class="image-container mb-3">
                          <div :style="getImageStyle(item.image)"></div>
                        </div>
                        <h5 class="card-title" style="padding-bottom: 1px;">{{ item.fullname }}</h5>
                        <p class="card-text">{{ item.position }}</p>
                        <p class="card-date">{{ item.created_at }}</p>
                        <button v-if="item.status === 'Approved'" @click="updateStatus(item.id, 'Declined')" class="btn btn-outline-success me-2">Approved</button>
                        <button v-else-if="item.status === 'Pending'" @click="updateStatus(item.id, 'Approved')" class="btn btn-outline-warning me-2">Pending</button>
                        <button v-else @click="updateStatus(item.id, 'Approved')" class="btn btn-outline-danger">Declined</button>
                      </div>
                    </div>
                  </div>
                </div>
                
                <!-- Pagination Controls -->
                <br>
                <div class="card-body">
                  <div class="text-center">
                    <nav aria-label="Page navigation">
                      <ul class="pagination justify-content-center mb-0">
                        <li class="page-item" :class="{ 'disabled': currentPage === 1 }">
                          <a class="page-link" href="#" @click.prevent="prevPage">Previous</a>
                        </li>
                        <li class="page-item" v-for="page in totalPages" :key="page" :class="{ 'active': currentPage === page }">
                          <a class="page-link" href="#" @click.prevent="goToPage(page)">{{ page }}</a>
                        </li>
                        <li class="page-item" :class="{ 'disabled': currentPage === totalPages }">
                          <a class="page-link" href="#" @click.prevent="nextPage"><b>Next</b></a>
                        </li>
                      </ul>
                    </nav>
                  </div>
                  <div class="mt-3">
                    <p>{{ currentPageRecords }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  
      </main><!-- End #main -->

      <div>
        <PasswordPromptModal
          v-if="showModal"
          @authenticated="handleAuthentication"
          @cancel="handleCancel"
        />
        <div v-if="isAuthenticated">
          <!-- Protected content goes here -->
          <h1>Welcome to the User Verification Page</h1>
        </div>
      </div>
  
      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    </div>
  </template>


<script>

// Components
import axios from 'axios'
import PasswordPromptModal from "@/components/PasswordPromptModal.vue";


export default{
  components: { PasswordPromptModal },

  data(){
      return{
          showModal: true, // Initially show the modal
          isAuthenticated: false,
          notifications: [],
          filter: 'all',
          info:[],
          infos:[],
          item: [],
          fullname: "",
          position: "",
          image: "",
          created_at: "",
          status: "",
          filteredInfo: [], // Filtered records based on search
          entriesPerPage: 10, // Default entries per page
          currentPage: 1,
          searchQuery: '', // For search functionality
      }
  },
  created(){
      this.getInfo()
      this.user();
      this.getUserInfo(this.infos.fullname);
      this.fetchNotifications();
  },

  computed: {
    totalPages() {
      return Math.ceil(this.filteredInfo.length / this.entriesPerPage);
    },
    paginatedInfo() {
      const start = (this.currentPage - 1) * this.entriesPerPage;
      const end = start + this.entriesPerPage;
      return this.filteredInfo.slice(start, end);
    },
    currentPageRecords() {
      const start = (this.currentPage - 1) * this.entriesPerPage + 1;
      const end = Math.min(start + this.entriesPerPage - 1, this.filteredInfo.length);
      return `Showing ${start} to ${end} of ${this.filteredInfo.length} entries`;
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

  methods:{
    handleAuthentication() {
      this.isAuthenticated = true;
      this.showModal = false; // Hide modal after successful authentication
    },
    handleCancel() {
      this.$router.push('/dashboard'); // Redirect to home on cancel
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
      /*async deleteRecord(recordId){
          const confirm = window.confirm("are you sure you want to delete this?");
          if (confirm){
              await axios.post("del", {
              id: recordId,
          });
          this.getInfo();
          }
      }, */
      async getInfo() {
      try {
        const response = await axios.get('getVerify');
        this.info = response.data;
        this.filteredInfo = this.info; // Initialize filteredInfo
      } catch (error) {
        console.log(error);
      }
    },
    updatePageSize(size) {
      this.entriesPerPage = size;
      this.currentPage = 1; // Reset to first page
    },
    filterData() {
      this.filteredInfo = this.info.filter(item =>
        Object.values(item).some(val =>
          val.toString().toLowerCase().includes(this.searchKeyword.toLowerCase())
        )
      );
      this.currentPage = 1; // Reset to first page
    },
    prevPage() {
      if (this.currentPage > 1) {
        this.currentPage--;
      }
    },
    nextPage() {
      if (this.currentPage < this.totalPages) {
        this.currentPage++;
      }
    },
    goToPage(page) {
      this.currentPage = page;
    },
    async updateStatus(id, newStatus) {
      try {
        const response = await axios.post('updateStatus', { id, status: newStatus });
        if (response.status === 200) {
          this.getInfo();
        } else {
          console.error('Error updating status:', response.data.error);
        }
      } catch (error) {
        console.error('Network error:', error.message);
      }
    },
  
      async logout(){
          sessionStorage.removeItem('token');
          this.$router.push('/signin');
      },
      
  },
  beforeRouteEnter(to, from, next) {
    // Always require password input when navigating to this route
    next(vm => {
      vm.showModal = true;
      vm.isAuthenticated = false;
    });
  },
}
</script>

<style scoped>
.page-link {
  z-index: 0;
}

.card-grid {
  display: grid;
  grid-template-columns: repeat(5, 1fr); /* 5 cards per row */
  grid-template-rows: repeat(2, 1fr); /* 2 rows of cards */
  gap: 15px; /* Space between cards */
  justify-items: center;
}

/* Card Container with fixed size */
.card-container {
  width: 200px;
  height: 300px;
}

.card-container .card {
  border-radius: 8px;
  box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.1);
  transition: transform 0.2s;
  width: 100%; /* Ensure the card takes up full container width */
  height: 100%; /* Fixed height for the card */
  background: linear-gradient(180deg, #80faf4, #ffffff, #ffffff, #ffffff, #ffffff); /* Orange to blue-green gradient */

}

.card-container .card:hover {
  transform: translateY(-5px);
}

.image-container {
  width: 80px;
  height: 80px;
  margin: auto;
  overflow: hidden;
  border-radius: 50%;
  margin-top: 10px;
  border: solid white 5px;
}

.image-container div {
  width: 100%;
  height: 100%;
  background-size: cover;
  background-position: center;
  border-radius: 50%;
}

.card-title {
  font-size: 14px;
  color: #333;
  font-weight: 600;
  margin-bottom: 0.3rem;
}

.card-text {
  font-size: 13px;
  color: #666;
}

.card-date {
  font-size: 12px;
  color: #999;
  margin-bottom: 0.8rem;
}

.btn {
  font-size: 12px;
  padding: 4px 8px;
}

/* Responsive adjustments */
@media screen and (max-width: 992px) {
  .card-grid {
    grid-template-columns: repeat(3, 1fr); /* 3 cards per row on medium screens */
  }
}

@media screen and (max-width: 768px) {
  .card-grid {
    grid-template-columns: repeat(2, 1fr); /* 2 cards per row on small screens */
  }
}

@media screen and (max-width: 480px) {
  .card-grid {
    grid-template-columns: 1fr; /* 1 card per row on extra small screens */
  }
}

table {
  width: 100%;
  border-collapse: collapse;
  font-size: 14px; /* Adjust font size as needed */
}

th, td {
  border: 1px solid #dee2e6;
  padding: 2px 4px; /* Adjust padding for better readability */
  text-align: center;
  white-space: nowrap; /* Prevent line breaks in cells */
  overflow: hidden; /* Hide overflowed content */
  text-overflow: ellipsis; /* Show ellipsis for overflowed content */
}

th {
  height: 30px; /* Adjust height for header */
  white-space: nowrap;
  background: linear-gradient(360deg, #80faf4, #ffffff); /* Orange to blue-green gradient */
}

.image-container {
  display: flex;
  align-items: center; /* Center vertically */
  justify-content: center; /* Center horizontally */
  width: 100px;
  height: 100px;
  overflow: hidden; /* Hide any overflowed content */
  border-radius: 50%; /* Ensures the container is circular */
}

.image-container div {
  width: 100%;
  height: 100%;
  background-size: cover;
  background-position: center;
  border-radius: 50%; /* Ensures the image is circular if needed */
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

</style>
