<template>
  <div id="app" style="background-image: url('./img/color.jpg'); background-size: cover; background-attachment: fixed; height: 100%;">
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
          <a class="nav-link active" href="/inventory">
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
        <h1>Inventory</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/inventory">Stocks</a></li>
            <li class="breadcrumb-item active">Inventory</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->
    
  <!-- Section for the Stock Table -->
<section class="section">
  <div class="row">
    <div class="col-lg-12" style="font-size: medium;">

      <div class="card">
        <div class="card-body">
   
<br>
<!-- Add Item Button -->
<div class="button-container">
  <button @click="showAddItemModal = true" class="noselect">
    <span class="text">Add Item</span>
    <span class="icon">
      <svg viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg"></svg>
      <span class="buttonSpan">+</span>
    </span>
  </button>
</div>
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

  <!-- Centered Dropdowns -->
  <div class="filters-container d-flex align-items-center">
    <!-- Filters: Select Classification, Article, Particulars, Current Status -->
    <select v-model="selectedClassification" class="form-select me-2" @change="handleClassificationChange">
      <option value="">Select Classification</option>
      <option v-for="classification in distinctClassification" :key="classification" :value="classification">{{ classification }}</option>
    </select>

    <select v-model="selectedArticle" class="form-select me-2" :disabled="!selectedClassification" @change="handleArticleChange">
      <option value="">Select Article</option>
      <option v-for="article in filteredArticles" :key="article" :value="article">{{ article }}</option>
    </select>

    <select v-model="selectedParticular" class="form-select me-2" :disabled="!selectedArticle">
      <option value="">Select Particular</option>
      <option v-for="particular in filteredParticulars" :key="particular" :value="particular">{{ particular }}</option>
    </select>

    <select v-model="selectedStatus" class="form-select">
      <option value="">Current Status</option>
      <option v-for="status in distinctStatus" :key="status" :value="status">{{ status }}</option>
    </select>
  </div>

  <!-- Search Bar -->
  <div class="InputContainer">
    <input placeholder="Search..." id="input" class="input" name="text" type="text" v-model="searchQuery">
  </div>
</div>


<!-- Backdrop for Darkening Effect -->
<div v-if="showAddItemModal" class="modal-backdrop"></div>

<!-- Add Item Modal -->
<transition name="modal-slide">
  
<div v-if="showAddItemModal" class="modal fade show d-block" tabindex="-1" role="dialog" aria-labelledby="addItemModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addItemModalLabel">Add Item</h5>
        <button type="button" class="btn-close" @click="showAddItemModal = false" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="row g-3" enctype="multipart/form-data">
          <!-- Form fields here -->
          <div class="col-md-6">
            <label for="entityname" class="form-label">Entity Name</label>
            <input type="text" class="form-control" id="entityname" v-model="entityname" required>
          </div>
          <div class="col-md-6">
            <label for="classification" class="form-label">Classification</label>
            <input type="text" class="form-control" id="classification" v-model="classification" required>
          </div>
          <div class="col-md-6">
            <label for="code" class="form-label">Code</label>
            <input type="text" class="form-control" id="code" v-model="code" required>
          </div>
          <div class="col-md-6">
            <label for="article" class="form-label">Article</label>
            <input type="text" class="form-control" id="article" v-model="article" required>
          </div>
          <div class="col-md-6">
            <label for="particulars" class="form-label">Particulars</label>
            <input type="text" class="form-control" id="particulars" v-model="particulars" required>
          </div>
          <div class="col-md-6">
            <label for="modelno" class="form-label">Model No.:</label>
            <input type="text" class="form-control" id="modelno" v-model="modelno">
          </div>
          <div class="col-md-6">
            <label for="serialno" class="form-label">Serial No.:</label>
            <input type="text" class="form-control" id="serialno" v-model="serialno">
          </div>
          <div class="col-md-6">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="text" class="form-control" id="quantity" v-model="quantity" required placeholder="0">
          </div>
          <div class="col-md-6">
            <label for="unit" class="form-label">Unit</label>
            <select class="form-select" id="unit" v-model="unit" required>
              <option value="unit">Unit</option>
              <option value="set">Set</option>
            </select>
          </div>
          <div class="col-md-6">
            <label for="unitcost" class="form-label">Unit Cost</label>
            <input type="text" class="form-control" id="unitcost" v-model="unitcost" required placeholder="0">
          </div>
          <div class="col-md-6">
            <label for="totalcost" class="form-label">Total Cost</label>
            <input type="text" class="form-control" id="totalcost" :value="totalCostFormatted" required disabled placeholder="0">
          </div>

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
<br>
<hr>
          <div class="button-group mt-6">

            <button class="button1" @click="resetForm" type="reset" style="width: 120px; height: 40px;">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-repeat" viewBox="0 0 16 16">
    <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z"></path>
    <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z"></path>
  </svg>
  Reset
</button>
  <button @click="saveOrUpdate" v-if="status !== 'update'" type="submit" class="button">Submit</button>
  <button @click="saveOrUpdate" v-if="status === 'update'" type="submit" class="button">Update</button>

 
</div>






        </form>
      </div>
    </div>
  </div>
</div>
</transition>

<br>
<br>
         

<div class="wrapper">
  <table class="table-compact">
            <qrcode-stream @decode="onDecode" />
     
              <thead style="width: 100%;">
                <tr>
                  <th scope="col">Image</th>
                  <th scope="col">Entity</th>
                  <th scope="col">Classification</th>
                  <th scope="col">Code</th>
                  <th scope="col">Article</th>
                  <th scope="col">Particulars</th>
                  <th scope="col">Model No.</th>
                  <th scope="col">Serial No.</th>
                  <th scope="col">Full Description</th>
                  <th scope="col">Qty</th>
                  <th scope="col">Unit</th>
                  <th scope="col">Unit Cost</th>
                  <th scope="col">Total Cost</th>
                  <th scope="col">Status</th>
                  <th scope="col">Availability</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="inv in paginatedInfo" :key="inv.id">
                  <td scope="row"><img :src="inv.image" alt="Inventory Image" style="max-width: 60px; max-height: 60px;"/></td>
                  <td scope="row">{{ inv.entityname }}</td>
                  <td scope="row">{{ inv.classification }}</td>
                  <td scope="row">{{ inv.code }}</td>
                  <td scope="row">{{ inv.article }}</td>
                  <td scope="row">{{ inv.particulars }}</td>
                  <td scope="row">{{ inv.modelno }}</td>
                  <td scope="row">{{ inv.serialno }}</td>
                  <td scope="row">{{ inv.fulldescription }}</td>
                  <td scope="row">{{ inv.quantity }}</td>
                  <td scope="row">{{ inv.unit }}</td>
                  <td scope="row">{{ inv.unitcost }}</td>
                  <td scope="row">{{ inv.totalcost }}</td>
                  <td scope="row">{{ inv.status }}</td>
                  <td scope="row">
                    <button v-if="inv.availability === 'yes'" @click="updateAvailability(inv.id, 'no')" class="btn btn-outline-success">Available</button>
                    <button v-else-if="inv.availability === 'no' || inv.availability === '' " @click="updateAvailability(inv.id, 'yes')" class="btn btn-outline-danger">Not Available</button>
                  </td>                                              
                  <td>
                    <button @click="placeRecord(inv.id)" class="btn btn-warning"><i class="bx bxs-arrow-from-right"></i></button>
                    <button @click
="deleteRecord(inv.id)" class="btn btn-danger"><i class="ri-delete-bin-6-line"></i></button>
</td>
</tr>
</tbody>

</table>
<br>
<br>
   <!-- I-update ang table at idagdag ang pagination controls -->
   <div class="card-body">
  <!-- Iba pang content ng card... -->
  <div class="text-center">
  <nav aria-label="Page navigation">
    <ul class="pagination justify-content-center mb-0">
      <li class="page-item" :class="{ 'disabled': currentPage === 1 }">
        <a class="page-link" href="#" @click.prevent="currentPage = Math.max(currentPage - 1, 1)">Previous</a>
      </li>
      <li class="page-item" v-for="page in totalPages" :key="page" :class="{ 'active': currentPage === page }">
        <a class="page-link" href="#" @click.prevent="currentPage = page">{{ page }}</a>
      </li>
      <li class="page-item" :class="{ 'disabled': currentPage === totalPages }">
        <a class="page-link" href="#" @click.prevent="currentPage = Math.min(currentPage + 1, totalPages)">Next</a>
      </li>
    </ul>
  </nav>
  <br>
  <div class="page-records">
  <p>{{ currentPageRecords }}</p>
</div>

</div>
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
  
  // Components
  import axios from 'axios'
  
  
  export default{
  
  computed:{
    imagePreview() {
          if (this.imageSource === 'upload') {
              return this.uploadedImage;
          } else if (this.imageSource === 'capture') {
              return this.capturedImage;
          } else {
              return null; // or a default placeholder image
          }
      },
      totalCost() {
            return this.quantity * this.unitcost;
          },
      totalCostFormatted() {
            // Format total Cost with commas
            return this.totalCost.toLocaleString();
          },

          paginatedInfo() {
    const startIndex = (this.currentPage - 1) * this.pageSize;
    const endIndex = startIndex + this.pageSize;
    return this.filteredInventory.slice(startIndex, endIndex);
  },
  totalPages() {
    return Math.ceil(this.filteredInventory.length / this.pageSize);
  },
  currentPageRecords() {
    const startIndex = (this.currentPage - 1) * this.pageSize + 1;
    const endIndex = Math.min(startIndex + this.pageSize - 1, this.filteredInventory.length);
    return `Showing ${startIndex} - ${endIndex} of ${this.filteredInventory.length} records`;
  },
  
      distinctClassification() {
        return [...new Set(this.inventory.map(inv => inv.classification))];
      },
      filteredArticles() {
        return [...new Set(this.inventory.filter(inv => inv.classification === this.selectedClassification).map(inv => inv.article))];
      },
      filteredParticulars() {
        return [...new Set(this.inventory.filter(inv => inv.article === this.selectedArticle).map(inv => inv.particulars))];
      },
      distinctStatus() {
        return [...new Set(this.inventory.map(inv => inv.status))];
      },
      filteredInventory() {
        let filtered = this.inventory;
        if (this.selectedClassification) {
          filtered = filtered.filter(inv => inv.classification === this.selectedClassification);
        }
        if (this.selectedArticle) {
          filtered = filtered.filter(inv => inv.article === this.selectedArticle);
        }
        if (this.selectedParticular) {
          filtered = filtered.filter(inv => inv.particulars === this.selectedParticular);
        }
        if (this.selectedStatus) {
          filtered = filtered.filter(inv => inv.status === this.selectedStatus);
        }
        return filtered.filter(inv => {
          return (
            inv.entityname.toLowerCase().includes(this.searchQuery.toLowerCase()) ||
            inv.classification.toLowerCase().includes(this.searchQuery.toLowerCase()) ||
            inv.code.toLowerCase().includes(this.searchQuery.toLowerCase()) ||
            inv.article.toLowerCase().includes(this.searchQuery.toLowerCase()) ||
            inv.particulars.toLowerCase().includes(this.searchQuery.toLowerCase()) ||
            inv.modelno.toLowerCase().includes(this.searchQuery.toLowerCase()) ||
            inv.serialno.toLowerCase().includes(this.searchQuery.toLowerCase()) ||
            inv.fulldescription.toLowerCase().includes(this.searchQuery.toLowerCase()) ||
            inv.quantity.toString().toLowerCase().includes(this.searchQuery.toLowerCase()) ||
            inv.unit.toLowerCase().includes(this.searchQuery.toLowerCase()) ||
            inv.unitcost.toString().toLowerCase().includes(this.searchQuery.toLowerCase()) ||
            inv.totalcost.toString().toLowerCase().includes(this.searchQuery.toLowerCase()) ||
            inv.status.toLowerCase().includes(this.searchQuery.toLowerCase())
          );
        });
      },
  
  },
  data(){
      return{
          showAddItemModal: false,  // Para ipakita o itago ang Add Item modal
          id: "",
          inventory:[],
          info:[],
          infos:[],
          entityname: "",
          classification: "",
          code: "",
          article: "",
          particulars: "",
          modelno: "",
          serialno: "",
          fulldescription: "",
          unit: "",
          unit: "",
          unitcost: "",
          totalcost: "",
          arrival: "",
          image: null,
          status: "",
          statusId: "",
          mediaStream: null,
          cameraStarted: false,
          capturedImage: null,
          imageDataUrl: "",
          cameraButtonText: 'Start Camera',
          selectedImageFile: null,
          imageSource: 'upload',
          imagePreview: '',
          searchQuery: '',
          selectedClassification: '',
          selectedArticle: '',
          selectedParticular: '',
          selectedStatus: '',
          currentPage: 1, // Current page number
          pageSize: 10, // Default page size
  
      }
  },
  created(){
      this.getInventory()
      this.user();
      this.getUserInfo(this.infos.fullname);
      this.getInfo();
  },
  
  methods:{
    handleClassificationChange() {
        this.selectedArticle = '';
        this.selectedParticular = '';
      },
      handleArticleChange() {
        this.selectedParticular = '';
      },
    handleFileUpload(event) {
          const file = event.target.files[0];
          if (file) {
              this.uploadedImage = URL.createObjectURL(file);
              this.selectedImageFile = file;
              this.imagePreview = this.uploadedImage;
          }
      },
      updatePageSize(size) {
    this.pageSize = size;
    this.currentPage = 1; // Reset to first page
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
  
      deleteRecord(id) {
        // Implement your delete logic here
      },
      /*async deleteRecord(recordId){
          const confirm = window.confirm("are you sure you want to delete this?");
          if (confirm){
              await axios.post("del", {
              id: recordId,
          });
          this.getInventory();
          }
      }, */
      async getInventory(){
          try {
              const inv = await axios.get('getInventory');
              this.inventory = inv.data;
              console.log(this.inventory);
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
      async save() {
        try {
          // Compute totalcost
  
          // Create a FormData object and append the computed totalcost
          const formData = new FormData();
          if (this.selectedImageFile) {
              formData.append('image', this.selectedImageFile);
          }
          else if (this.capturedImage) {
              // Convert the captured image to a file
              const blob = await fetch(this.capturedImage).then(res => res.blob());
              const file = new File([blob], `image_${Date.now()}.png`, { type: 'image/png' });
              formData.append('image', file);
          }
  
          // Append other form data including the computed totalcost
          formData.append('entityname', this.entityname);
          formData.append('classification', this.classification);
          formData.append('code', this.code);
          formData.append('article', this.article);
          formData.append('particulars', this.particulars);
          formData.append('modelno', this.modelno);
          formData.append('serialno', this.serialno);
          formData.append('quantity', this.quantity);
          formData.append('unit', this.unit);
          formData.append('unitcost', this.unitcost);
          formData.append('totalcost', this.totalcost); // Ensure totalcost is included
          formData.append('arrival', this.arrival);
  
          // Now you can submit the formData to your backend endpoint using Axios or any other method
          await axios.post('/saveInventory', formData, {
            headers: {
              'Content-Type': 'multipart/form-data'
            }
          });
  
          // Reset the form and emit the 'data-saved' event
          this.resetForm();
          this.$emit('data-saved');
  
          // Trigger notification
          await axios.post('/triggerNotification')
            .then(response => {
              console.log('Notification triggered successfully');
            })
            .catch(error => {
              console.error('Error triggering notification:', error);
            });
  
        } catch (error) {
          console.error('Error saving:', error);
        }
      },
  
      dataURLtoFile(dataUrl) {
        const binary = atob(dataUrl.split(',')[1]);
        const array = [];
        for (let i = 0; i < binary.length; i++) {
          array.push(binary.charCodeAt(i));
        }
        return new File([new Uint8Array(array)], 'image.png', { type: 'image/png' });
      },
      beforeDestroy() {
      if (this.mediaStream) {
        this.mediaStream.getTracks().forEach(track => {
          track.stop();
        });
      }
    },
  
      // async save() {
      //   try {
      //     // Retrieve the selected image file
      //     const imageFile = this.$refs.image.files[0];
  
      //     // Use FormData to send both text and file data
      //     const formData = new FormData();
      //     formData.append('entityname', this.entityname);
      //     formData.append('particulars', this.particulars);
      //     formData.append('classification', this.classification);
      //     formData.append('quantity', this.quantity);
      //     formData.append('arrival', this.arrival);
      //     formData.append('image', imageFile);
  
      //     // Send data using axios.post with FormData
      //     const inv = await axios.post('saveInventory', formData, {
      //       headers: {
      //         'Content-Type': 'multipart/form-data',
      //       },
      //     });
  
      //     this.resetForm();
      //     this.$emit('data-saved');
      //     this.getInventory();
  
      //     await axios.post('/triggerNotification')
      //       .then(response => {
      //         console.log('Notification triggered successfully');
      //       })
      //       .catch(error => {
      //         console.error('Error triggering notification:', error);
      //       });
  
      //   } catch (error) {
      //     console.error('Error saving data:', error);
      //   }
      // },
  
      async saveOrUpdate() {
        if (this.status === "update") {
            await this.updateRecord();
        } else {
          await this.save();
        }
      },
  
      //     async updateRecord() {
  //     try {
  //         const data = {
  //             id: this.statusId,
  //             entityname: this.entityname,
  //             particulars: this.particulars,
  //             classification: this.classification,
  //             quantity: this.quantity,
  //             arrival: this.arrival,
  //         };
  
  //         const response = await axios.post(`/updateInventory/${this.statusId}`, data);
          
  //         if (response.data.status === 'success') {
  //             this.resetForm();
  //             this.status = ""; // reset status after update
  //             this.getInventory();
  //             console.log("Hi");
  //             console.log(this.statusId); // Accessing statusId from component's state
  //             console.log(data);
  //         } else {
  //             console.error("Failed to update record:", response.data.message);
  //         }
  //     } catch (error) {
  //         console.error("Error updating record:", error);
  //     }
  // },
  
  async updateRecord() {
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
          formData.append('quantity', this.quantity);
          formData.append('unit', this.unit);
          formData.append('unitcost', this.unitcost);
          formData.append('totalcost', this.totalcost);
  
          // Always append the image field, even if it's not changed
          if (this.capturedImage) {
              const blob = await fetch(this.capturedImage).then(res => res.blob());
              const file = new File([blob], `image_${Date.now()}.png`, { type: 'image/png' });
              formData.append('image', file);
          } else if (this.selectedImageFile) {
              formData.append('image', this.selectedImageFile);
          } else {
              // If the image is not changed, you can append the existing image data
              formData.append('image', this.imagePreview);
          }
  
          const response = await axios.post(`/updateInventory/${this.statusId}`, formData, {
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
  
  placeRecord(recordId) {
      // set status to update and statusId to the record id
      this.status = "update";
      this.statusId = recordId;
  
      // fetch the record details and set them to the form
      const record = this.inventory.find(inv => inv.id === recordId);
      this.entityname = record.entityname;
      this.classification = record.classification;
      this.code = record.code;
      this.article = record.article;
      this.particulars = record.particulars;
      this.modelno = record.modelno;
      this.serialno = record.serialno;
      this.quantity = record.quantity;
      this.unit = record.unit;
      this.unitcost = record.unitcost;
      this.totalcost = record.totalcost;
      this.imagePreview = record.image;
      this.showAddItemModal = true; // Ito ang nagtatakda na ipapakita ang modal
  
      console.log(recordId);
  },

  
      resetForm() {
              this.entityname = "";
              this.classification = "";
              this.code = "";
              this.article = "";
              this.particulars = "";
              this.modelno = "";
              this.serialno = "";
              this.quantity = "";
              this.unit = "";
              this.unitcost = "";
              this.totalcost = "";
              this.cameraStarted = false;
              this.capturedImage = null;
              this.uploadedImage = null;
              this.imagePreview = "";
          },
  
      
      async deleteRecord(recordId){
        const confirm = window.confirm("Are you sure that you want to delete this record?");
        if(confirm){
          const ins = await axios.post('delInventory', {
            id: recordId,
        });
        this.getInventory();
        }
      },
  
  
      async updateAvailability(id, newAvailability) {
        try {
          const response = await axios.post('updateAvailability', { id, availability: newAvailability });
          if (response.status === 200) {
            console.log(response.data);
            this.getInventory(); // Assuming this function fetches the updated data
          } else {
            console.error('Error updating availability:', response.data.error);
          }
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
  
      async logout(){
          sessionStorage.removeItem('token');
          this.$router.push('/');
      }
  },
  beforeDestroy() {
      if (this.mediaStream) {
        this.mediaStream.getTracks().forEach(track => {
          track.stop();
        });
      }
    },
  }
  </script>

 
<style scoped>

/* Backdrop for darkening effect */
.modal-backdrop {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5); /* Dark overlay with opacity */
  z-index: 1040; /* Ensure it sits behind the modal */
}

/* Adjust z-index of modal for stacking */
.modal {
  z-index: 1050; /* Ensure the modal is on top of the backdrop */
}

/* Slide transition (if needed) */
.modal-slide-enter-active {
  animation: slide-down 0.5s ease-out forwards;
}

.modal-slide-leave-active {
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
  .modal-dialog {
    width: 100%; /* Full width on smaller screens */
    height: auto; /* Allow height to adjust based on content */
  }
}


.page-records {
  text-align: left;
  float: left;
}

/* Container for the button */
.button-container {
  display: flex;
  justify-content: flex-end; /* Aligns items to the far right */
  padding: 10px; /* Optional padding for spacing */
}

/* Style for the button */
button.noselect {
  width: 140px; /* Adjust as needed */
  height: 40px;
  cursor: pointer;
  display: flex;
  align-items: center;
  background: #00a600;
  border: none;
  border-radius: 5px;
  box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.15);
  position: relative; /* To position the icon absolutely within the button */
}

button.noselect,
button.noselect span {
  transition: 200ms;
}

button.noselect .text {
  color: white;
  font-weight: bold;
  font-size: 15px; /* Reduced font size */
  margin-left: 15px; /* Adjust as needed */
}

button.noselect .icon {
  position: absolute;
  right: 10px; /* Position the icon inside the button */
  height: 40px;
  width: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
}

button.noselect svg {
  width: 15px;
  fill: #eee;
}

button.noselect:hover {
  background: #00a600;
}

button.noselect:active {
  background: #00cc00;
}

button.noselect:hover .text {
  color: transparent;
}

button.noselect:hover .icon {
  left: 50%;
  transform: translateX(-65%); /* Centering the icon on hover */
  width: 40px; /* Keeps the icon size consistent */
  border-left: none;
}

button.noselect:focus {
  outline: none;
}

button.noselect:active .icon svg {
  transform: scale(0.8);
}

.buttonSpan {
  color: white;
  font-size: 24px;
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

.button-container {
  margin-left: auto; /* Align the Add Item button to the right */
}

.input-group {
  margin-top: 10px; /* Space between the search bar and dropdowns */
}

.InputContainer {
  width: 210px; /* Increased width */
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
  width: 200px; /* Increased width */
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

.button-group {
  display: flex;
  justify-content: center; /* Center align the buttons */
  gap: 1rem; /* Space between buttons */
}

.button, .button1 {
  width: 120px;
  height: 40px;
  font-size: 14px;
  padding: 0.5rem 1rem; /* Adjust as needed */
}

/* Other existing styles remain the same */
.button {
  border: none;
  background-color: seagreen;
  color: white;
  font-size: 0.9rem; /* Slightly larger font size */
  font-weight: 500;
  border-radius: 0.35rem; /* Slightly larger border radius */
  box-shadow: 0 0.3rem 0.6rem rgba(0, 0, 0, 0.15);
  cursor: pointer;
  transform: translate(1) translate(0, 0);
  transition: transform 225ms, box-shadow 225ms;
}

.button:hover {
  transform: scale(1.05) translate(0, -0.1rem);
  box-shadow: 0 0.4rem 0.8rem rgba(0, 0, 0, 0.35);
}

.button:active {
  transform: scale(1) translate(0, 0.1rem);
  box-shadow: 0 0.4rem 0.8rem rgba(0, 0, 0, 0.15);
}

.button1 {
  color: white;
  background-color: #C0392B;
  font-weight: 500;
  border-radius: 0.5rem;
  font-size: 0.904rem; /* Smaller font size */
  line-height: 1.7rem; /* Adjusted line height */
  padding-left: 1rem; /* Reduced padding */
  padding-right: 1rem; /* Reduced padding */
  padding-top: 0.5rem; /* Reduced padding */
  padding-bottom: 0.5rem; /* Reduced padding */
  cursor: pointer;
  text-align: center;
  margin-right: 0.5rem;
  display: inline-flex;
  align-items: center;
  border: none;

}


.button1:hover {
  background-color: maroon;
}

.button1 svg {
  display: inline;
  width: 1.3rem;
  height: 1.3rem;
  margin-right: 0.75rem;
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

.button, .button1 {
  width: 120px;
  height: 40px;
  font-size: 14px;
  padding: 0.5rem 1rem; /* Adjust as needed */
}


table {
  width: 100%;
  border-collapse: collapse;
  font-size: 13px; /* Adjust font size as needed */
}

th, td {
  border: 1px solid black;
  padding: 3px 7px; /* Adjust padding for better readability */
  text-align: center;
  white-space: nowrap; /* Prevent line breaks in cells */
  overflow: hidden; /* Hide overflowed content */
  text-overflow: ellipsis; /* Show ellipsis for overflowed content */
}

th {
  height: px; /* Adjust height for header */
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


</style>

