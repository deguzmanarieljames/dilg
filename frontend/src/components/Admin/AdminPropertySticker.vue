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
          <ul id="forms-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
            <li>
              <a href="propertysticker" class="active">
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

      <!-- Items area -->
      <div class="col-lg-6">
        <h3>Items</h3>
        <div
          class="drag-area"
          ref="itemsContainer"
          @dragover.prevent
          @drop="onDrop('items')"
        >
          <transition-group name="card-animation" tag="div" class="card-grid">
            <div
              v-for="item in items"
              :key="item.id"
              class="item"
              @click="selectRecord(item)"
              @dragstart="startDrag($event, item)"
              @dragend="endDrag"
              draggable="true"
              :class="{ dragging: item.isDragging }"
            >
              <div class="card mb-3">
                <div
                  class="col-lg-16"
                  style="font-family: Calibri; font-size: 7px; line-height: 1.5; color: #333; background-color: #f9f9f9; padding: 10px;"
                >
                  <div
                    class="container"
                    style="width: 100%; max-width: 600px; margin: 0 auto; border: 1px solid #ccc; padding: 20px; background-color: #fff; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);"
                  >
                    <div class="header" style="text-align: center; margin-bottom: 20px;">
                      <p>Republic of the Philippines
                        <br>
                        <b>Department of the Interior and Local Government</b>
                        <br>
                        MIMAROPA Region
                        <br>
                        <i style="color: red;"><b>PROPERTY INVENTORY STICKER</b></i>
                      </p>
                    </div>
                    <div class="property-info">
                      <p>Property No./Description : <b style="color: blue;">MDO - LT - 2022-02</b>
                        <br>
                        <b style="color: blue;">{{item.fulldescription}}</b>
                        __________________________________________________
                        <br>
                        Model No.: <b style="color: blue;">{{item.modelno}}</b>
                        <br>
                        Serial No.: <b style="color: blue;">{{item.serialno}}</b><img :src="generateQRCodeUrl(item.id)" alt="" style="width: 20%; height: auto; float: right;">
                        <br>
                        Acquisition Date/Cost: <b style="color: blue;">{{item.propertydate}} {{item.rec_unitcost}}</b>
                        <br>
                        Person Accountable: <b style="color: blue;">{{item.acc_officer}}</b>
                        <br>
                        Remarks: <b style="color: blue;">{{item.issue_officeofficer}}</b>
                      </p>
                      <br>
                      <div style="text-align: center; white-space: pre;">
                        <pre>__________________  _________________________</pre>
                        <pre>COA Representative  Authorized Representative</pre>
                      </div>
                    </div>
                    <div class="note">
                      <p style="text-align: center; color: red;"><b>NOTE: PLEASE DO NOT REMOVE</b></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </transition-group>
        </div>
      </div>

      <!-- Box area -->
      <div class="col-lg-6">
        <h3>Box</h3>
        <div
          class="drag-area"
          ref="boxContainer"
          @dragover.prevent
          @drop="onDrop('box')"
        >
          <transition-group name="card-animation" tag="div" class="card-grid">
            <div
              v-for="item in box"
              :key="item.id"
              class="item"
              @click="selectRecord(item)"
              @dragstart="startDrag($event, item)"
              @dragend="endDrag"
              draggable="true"
              :class="{ dragging: item.isDragging }"
            >
              <div class="card mb-3">
                <div
                  class="col-lg-16"
                  style="font-family: Calibri; font-size: 7px; line-height: 1.5; color: #333; background-color: #f9f9f9; padding: 10px;"
                >
                  <div
                    class="container"
                    style="width: 100%; max-width: 600px; margin: 0 auto; border: 1px solid #ccc; padding: 20px; background-color: #fff; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);"
                  >
                    <div class="header" style="text-align: center; margin-bottom: 20px;">
                      <p>Republic of the Philippines
                        <br>
                        <b>Department of the Interior and Local Government</b>
                        <br>
                        MIMAROPA Region
                        <br>
                        <i style="color: red;"><b>PROPERTY INVENTORY STICKER</b></i>
                      </p>
                    </div>
                    <div class="property-info">
                      <p>Property No./Description : <b style="color: blue;">MDO - LT - 2022-02</b>
                        <br>
                        <b style="color: blue;">{{item.fulldescription}}</b>
                        __________________________________________________
                        <br>
                        Model No.: <b style="color: blue;">{{item.modelno}}</b>
                        <br>
                        Serial No.: <b style="color: blue;">{{item.serialno}}</b><img :src="generateQRCodeUrl(item.id)" alt="" style="width: 20%; height: auto; float: right;">
                        <br>
                        Acquisition Date/Cost: <b style="color: blue;">{{item.propertydate}} {{item.rec_unitcost}}</b>
                        <br>
                        Person Accountable: <b style="color: blue;">{{item.acc_officer}}</b>
                        <br>
                        Remarks: <b style="color: blue;">{{item.issue_officeofficer}}</b>
                      </p>
                      <br>
                      <div style="text-align: center; white-space: pre;">
                        <pre>__________________  _________________________</pre>
                        <pre>COA Representative  Authorized Representative</pre>
                      </div>
                    </div>
                    <div class="note">
                      <p style="text-align: center; color: red;"><b>NOTE: PLEASE DO NOT REMOVE</b></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </transition-group>
        </div>
              <!-- Print Button -->
              <div v-if="box.length > 0" style="text-align: center; margin-top: 20px;">
                <button @click="printBoxContent">Print Box Content</button>
              </div>
      </div>

          <!-- <div class="col-lg-4" v-for="info in info" :key="info" @click="selectRecord(info)">
            <div class="card mb-3">

              <div class="col-lg-16" style="
                  font-family: Calibri;
                  font-size: 14px;
                  line-height: 1.5;
                  color: #333;
                  background-color: #f9f9f9;
                  padding: 10px;">
                <div class="container" style="
                      width: 90%;
                      max-width: 600px;
                      margin: 0 auto;
                      border: 1px solid #ccc;
                      padding: 20px;
                      background-color: #fff;
                      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                  <div class="header" style="text-align: center; margin-bottom: 20px;">
                    <p>Republic of the Philippines
                      <br>
                      <b>Department of the Interior and Local Government</b>
                      <br>
                      MIMAROPA Region
                      <br>
                      <i style="color: red;"><b>PROPERTY INVENTORY STICKER</b></i>
                    </p>
                  </div>
                  <div class="property-info">
                    <p>Property No./Description : <b style="color: blue;">MDO - LT - 2022-02</b>
                      <br>
                      <b style="color: blue;">{{info.fulldescription}}</b>
                      __________________________________________________
                      <br>
                      Model No.: <b style="color: blue;">{{info.modelno}}</b>
                      <br>
                      Serial No.: <b style="color: blue;">{{info.serialno}}</b><img :src="generateQRCodeUrl(info.id)" alt="" style="width: 20%; height: auto; float: right;">
                      <br>
                      Acquisition Date/Cost: <b style="color: blue;"> 2021 - 7,999.00 </b>
                      <br>
                      Person Accountable: <b style="color: blue;">{{info.acc_officer}}</b>
                      <br>
                      Remarks: <b style="color: blue;"> Ronel O. Cacho/Oriental Mindoro </b>
                    </p>
                    <br>
                    <div style="text-align: center;">
                      ________________________
                      <br>
                      COA Representative
                      <br>
                      ______________________________
                      <br>
                      Authorized Representative
                    </div>
                  </div>
                  <div class="note">
                    <p style="color: red;"><b>NOTE: PLEASE DO NOT REMOVE</b></p>
                  </div>
                </div>
              </div>




            </div>
          </div> -->

            <!-- Modal component to display selected record -->
            <div class="modal" v-if="selectedInfo">
              <div class="modal-content" style="
                    font-family: Calibri;
                    font-size: 14px;
                    line-height: 1.5;
                    color: #333;
                    background-color: #f9f9f9;
                    padding: 20px;">
                <span class="close" @click="selectedInfo = null">&times;</span>
                <div class="col-lg-16">
                  <div class="container" style="
                        width: 70%;
                        max-width: 600px;
                        margin: 0 auto;
                        border: 1px solid #ccc;
                        padding: 20px;
                        background-color: #fff;
                        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                    <div class="header" style="text-align: center; margin-bottom: 20px;">
                      <p>Republic of the Philippines
                        <br>
                        <b>Department of the Interior and Local Government</b>
                        <br>
                        MIMAROPA Region
                        <br>
                        <i style="color: red;"><b>PROPERTY INVENTORY STICKER</b></i>
                      </p>
                    </div>
                    <div class="property-info">
                      <p>Property No./Description : <b style="color: blue;">MDO - LT - 2022-02</b>
                        <br>
                        <b style="color: blue;">{{selectedInfo.fulldescription}}</b>
                        __________________________________________________
                        <br>
                        Model No.: <b style="color: blue;">{{selectedInfo.modelno}}</b>
                        <br>
                        Serial No.: <b style="color: blue;">{{selectedInfo.serialno}}</b><img :src="generateQRCodeUrl(selectedInfo.id)" alt="" style="width: 20%; height: auto; float: right;">
                        <br>
                        Acquisition Date/Cost: <b style="color: blue;">{{selectedInfo.propertydate}} {{selectedInfo.rec_unitcost}}</b>
                        <br>
                        Person Accountable: <b style="color: blue;">{{selectedInfo.acc_officer}}</b>
                        <br>
                        Remarks: <b style="color: blue;">{{selectedInfo.issue_officeofficer}}</b>
                      </p>
                      <br>
                      <div style="text-align: center; white-space: pre;">
                        <pre>__________________  _________________________</pre>
                        <pre>COA Representative  Authorized Representative</pre>
                      </div>
                    </div>
                    <div class="note">
                      <p style="text-align: center; color: red;"><b>NOTE: PLEASE DO NOT REMOVE</b></p>
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

export default {
  data() {
    return {
      info: [],
      selectedInfo: null,
      items: [],
      box: [],
      isDragging: false,
      currentlyDragging: null,
    }
  },
  mounted() {
    this.fetchItems();
  },

  created(){
      this.getInfo();
  },

  methods: {
    async getInfo() {
      try {
        const response = await axios.get('getdata');
        this.info = response.data;
        // Extract employee names from info and store in employeeOptions
        // this.employeeOptions = this.info.map(info => info.acc_officer);
      } catch (error) {
        console.log(error);
      }
    },

    async printBoxContent() {
      // Extract IDs from the box items
      const ids = this.box.map(item => item.id);

      try {
        const response = await axios.post('/stickerPDF', { ids }, {
          responseType: 'blob'  // Important to set this for binary data
        });

        // Create a link to download the PDF
        const link = document.createElement('a');
        link.href = URL.createObjectURL(new Blob([response.data], { type: 'application/pdf' }));
        link.download = 'stickers.pdf';
        link.click();
      } catch (error) {
        console.error('Error printing box content:', error);
      }
    },
    


    fetchItems() {
      axios
        .get("http://dilg.test/backend/getdata")
        .then((response) => {
          this.items = response.data;
        })
        .catch((error) => {
          console.error("Error fetching items:", error);
        });
    },

    toggleDrag(item) {
      if (item.isDragging) {
        this.endDrag();
      } else {
        this.startDrag(item);
      }
    },
    startDrag(event, item) {
      event.dataTransfer.effectAllowed = 'move';
      event.dataTransfer.setData('text/plain', item.id); // Use item ID or any unique identifier
      this.currentlyDragging = item;
      item.isDragging = true;
    },
    endDrag() {
      if (this.currentlyDragging) {
        this.currentlyDragging.isDragging = false;
        this.currentlyDragging = null;
      }
    },
    onDrop(area) {
      const itemId = event.dataTransfer.getData('text/plain');
      const item = this.items.find(i => i.id == itemId) || this.box.find(i => i.id == itemId);

      if (item) {
        if (area === 'box') {
          if (!this.box.includes(item)) {
            this.items.splice(this.items.indexOf(item), 1);
            this.box.unshift(item); // Insert at the beginning
          }
        } else {
          if (!this.items.includes(item)) {
            this.box.splice(this.box.indexOf(item), 1);
            this.items.unshift(item); // Insert at the beginning
          }
        }
        this.endDrag(); // Reset dragging state
      }
    },



    selectRecord(info) {
      this.selectedInfo = info;
    },

    
    generateQRCodeUrl(id) {
          return `https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=${id}`;
        },
    async logout(){
      sessionStorage.removeItem('token');
      this.$router.push('/');
    }
  }
}
</script>

<style scoped>
.drag-area {
  min-height: 300px;
  border: 2px dashed #ccc;
  padding: 10px;
  background-color: #f9f9f9;
}

.card-grid {
  display: flex;
  flex-wrap: wrap;
  gap: 15px;
}

.item {
  width: calc(33.3333% - 10px); /* 3 items per row, adjusting for margin */
  cursor: pointer;
  transition: transform 0.3s ease, background-color 0.3s ease;
}

.item.dragging {
  transform: scale(1.05);
  background-color: #e0e0e0;
}

.card-animation-enter-active,
.card-animation-leave-active {
  transition: all 0.5s ease;
}

.card-animation-enter,
.card-animation-leave-to {
  transform: translateY(20px);
  opacity: 0;
}

</style>
