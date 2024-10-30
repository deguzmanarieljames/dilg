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










</style>
<template>
    <div id="app" style="background-image: url('./img/bg.png'); background-size: cover; background-attachment: fixed; height: 100%;">
            <!-- ======= Header ======= -->
            <header id="header" class="header fixed-top d-flex align-items-center">
      
              <div class="d-flex align-items-center justify-content-between">
                <a href="/dashboard" class="logo d-flex align-items-center">
                  <img src="./img/dilg-logo1.png" alt="" style="max-height: 92px; max-width: 92px">
                  <span class="d-none d-lg-block" style="font-family: Times New Roman, Times, serif; font-size: 25px; color: rgb(42, 43, 72);padding-left: 10px">
                    INVENTrack
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
            <h1>Ordering Section</h1>
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/ordering">Orders</a></li>
                <li class="breadcrumb-item active">Ordering</li>
              </ol>
            </nav>
          </div><!-- End Page Title -->
      <header>
        <nav>
          <ul style="list-style-type: none">
            <div class="row">
              <div class="col-lg-4" align="center">
                <li class="nav-item"><a class="nav-link" href="/ordering"><i class="bi bi-folder-plus"><span>Orders</span></i></a></li>
              </div>
              <div class="col-lg-4" align="center">
                <li class="nav-item"><a class="nav-link-collapsed" href="/orderpending"><i class="bi bi-folder-plus"><span>Pending</span></i></a></li>
              </div>
              <div class="col-lg-4" align="center">
                <li class="nav-item"><a class="nav-link-collapsed" href="/orderincoming"><i class="bi bi-folder-plus"><span>Incoming</span></i></a></li>
              </div>
            </div>
          </ul>
        </nav>
      </header>
            <section class="section">
            <div class="row">
                <div class="col-lg-12">
    
    
                <div class="card">
                  <div class="card-body">

                    <h5 class="card-title">Add Order</h5>
                    <form class="row g-3" enctype="multipart/form-data">
                      <div class="col-4">
                        <label for="classification" class="form-label">Classification</label>
                        <input type="text" class="form-control" id="classification" v-model="classification" required>
                      </div>
                      <!-- <div class="col-4">
                        <label for="article" class="form-label">Article</label>
                        <input type="text" class="form-control" id="article" v-model="article" required>
                      </div> -->
                      <!-- <div class="col-4">
                        <label for="article" class="form-label">Article</label>
                        <select class="form-select" v-model="article" required>
                          <option value="" disabled>Select Article</option>
                          <option v-for="articlechoice in shops">{{ articlechoice.article }}</option>
                        </select>
                      </div> -->

                      <div class="col-4 position-relative">
                        <label for="article" class="form-label">Article</label>
                        <input type="text" class="form-control" id="article" v-model="article" @input="fetchArticles" @change="fetchShopsByArticle" required>
                        <ul v-if="filteredArticles.length" class="list-group position-absolute">
                          <li v-for="articleChoice in filteredArticles" 
                              :key="articleChoice.id" 
                              class="list-group-item list-group-item-action"
                              @click="selectArticle(articleChoice.article)">
                            {{ articleChoice.article }}
                          </li>
                        </ul>
                      </div>



                      <div class="col-4">
                        <label for="particulars" class="form-label">Particular</label>
                        <input type="text" class="form-control" id="particulars" v-model="particulars" required>
                      </div>
                      <div class="col-2">
                        <label for="quantity" class="form-label">Quantity</label>
                        <input type="text" class="form-control" id="quantity" v-model="quantity" required>
                      </div>
                      <div class="col-2">
                        <label for="unit" class="form-label">Unit</label>
                        <select class="form-select" id="unit" v-model="unit" required>
                          <option value="unit">Unit</option>
                          <option value="set">Set</option>
                        </select>
                      </div>
                      <div class="col-2">
                        <label for="unitcost" class="form-label">Unit Cost</label>
                        <input type="text" class="form-control" id="unitcost" v-model="unitcost" required>
                      </div>
                  
                      <div class="col-2">
                        <label for="totalamount" class="form-label">Total Amount</label>
                        <input type="text" class="form-control" id="totalamount" :value="totalAmountFormatted" required readonly>
                      </div>

                      <div class="col-2">
                        <label for="shop" class="form-label">Shop</label>
                        <br>
                        <div class="custom-dropdown">
                          <input v-if="!useDropdown" type="text" class="form-control" id="shop" v-model="shop" required>
                          <select v-else class="form-select" v-model="shop" required>
                            <option value="" disabled>Select Best Shop</option>
                            <option v-for="suggestedShop in filteredShops" :key="suggestedShop.id">
                              {{ suggestedShop.shop }}
                            </option>
                          </select>
                          <div class="dropdown-menu">
                            <div v-for="suggestedShop in filteredShops" :key="suggestedShop.id" class="dropdown-item">
                              {{ suggestedShop.shop }}
                              <div class="star-rating">
                                <div class="star-bar">
                                  <div class="star-progress" :style="{ width: ((suggestedShop.shop_rate / 5) * 100) + '%' }"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      <div class="col-2">
                        <button type="button" class="btn btn-info mt-4" @click="toggleShopInput">{{ useDropdown ? 'New Shop' : 'Suggested' }}</button>
                      </div>
                      <div align="center">
                        <div class="col-4">
                          <label for="date_ordered" class="form-label">Date Ordered</label>
                          <input type="date" class="form-control" id="date_ordered" v-model="date_ordered">
                        </div>
                      </div>
                    
                      <div class="text-center">
                        <button @click="saveOrder" type="submit" class="btn btn-primary">Submit</button>
                        <button @click="resetForm" type="reset" class="btn btn-secondary">Reset</button>
                      </div>
                    </form>
                    <!-- Vertical Form -->


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
        totalAmount() {
          return this.quantity * this.unitcost;
        },
        totalAmountFormatted() {
          // Format total amount with commas
          return this.totalAmount.toLocaleString();
        },
      },
      data(){
          return{
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
              useDropdown: false
          }
      },
      created(){
          this.getInventory()
          this.getShop()
          this.fetchArticles()
      },
      
      methods:{
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
      
      
      
          async logout(){
              sessionStorage.removeItem('token');
              this.$router.push('/');
          }
      },
      }
      </script>