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
        <a class="nav-link collapsed" href="/workspace">
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
        <a class="nav-link active" href="/userverify">
            <i class="bi bi-folder-plus"></i>
            <span>User Verification</span>
        </a>
        </li>
                
  
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




              <div class="card">
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
        <!-- Add more options as needed -->
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
<div class="wrapper">
  <table class="table-compact">
    <thead>
      <tr>
        <th scope="col">Image</th>
        <th scope="col">Full Name</th>
        <th scope="col">Position</th>
        <th scope="col">Date/Time</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="item in paginatedInfo" :key="item.id">
        <td scope="row">
          <div class="image-container">
            <div :style="getImageStyle(item.image)"></div>
          </div>
        </td>
        <td scope="row">{{ item.fullname }}</td>
        <td scope="row">{{ item.position }}</td>
        <td scope="row">{{ item.created_at }}</td>
        <td scope="row">
          <button v-if="item.status === 'Approved'" @click="updateStatus(item.id, 'Declined')" class="btn btn-outline-success">Approved</button>
          <button v-else-if="item.status === 'Pending'" @click="updateStatus(item.id, 'Approved')" class="btn btn-outline-warning">Pending</button>
          <button v-else @click="updateStatus(item.id, 'Approved')" class="btn btn-outline-danger">Declined</button>
        </td>
      </tr>
    </tbody>
  </table>
</div>
<br>

<!-- Pagination Controls -->
<div class="card-body">
  <!-- Other card content -->
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

                  <!-- End Table with hoverable rows -->
              
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

export default{
  data(){
      return{
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
  },

  methods:{
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
          this.$router.push('/');
        }
      
  }
}
</script>

<style scoped>

table {
  width: 100%;
  border-collapse: collapse;
  font-size: 14px; /* Adjust font size as needed */
}

th, td {
  border: 1px solid black;
  padding: 2px 4px; /* Adjust padding for better readability */
  text-align: center;
  white-space: nowrap; /* Prevent line breaks in cells */
  overflow: hidden; /* Hide overflowed content */
  text-overflow: ellipsis; /* Show ellipsis for overflowed content */
}

th {
  height: 30px; /* Adjust height for header */
  white-space: nowrap;
}

.image-container {
  display: flex;
  align-items: center; /* Center vertically */
  justify-content: center; /* Center horizontally */
  width: 42px;
  height: 42px;
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
