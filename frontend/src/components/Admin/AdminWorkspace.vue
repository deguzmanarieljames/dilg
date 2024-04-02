<template>
<div id="app" style="background-image: url('./img/bg.png'); background-size: cover; background-attachment: fixed; height: 100%;">
        <!-- ======= Header ======= -->
        <header id="header" class="header fixed-top d-flex align-items-center">
  
      <div class="d-flex align-items-center justify-content-between">
        <a href="/dashboard" class="logo d-flex align-items-center">
          <img src="./img/logo1.png" alt="">
          <span class="d-none d-lg-block" style="font-family: Times New Roman, Times, serif; font-size: 210%; color: rgb(42, 43, 72);">
            <i>DILG<sup style="font-size: 70%;">ence</sup></i>
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
        <a class="nav-link " href="/workspace">
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
        <h1>Workspace</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/workspace">Input</a></li>
            <li class="breadcrumb-item active">Workspace</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->
  
        <section class="section">
        <div class="row">

          <div class="col-lg-4">
              <div class="card">
              <div class="card-body">
                <h5 class="card-title">Procurement</h5>





                <!-- Vertical Form -->
                <form class="row g-3" @submit.prevent="save">
                  <div class="col-12">
                    <label for="particulars" class="form-label">Particulars</label>
                    <select class="form-select" v-model="particulars" required>
                      <option value="" disabled>Select Particular</option>
                      <option v-for="inv in inventory">{{ inv.particulars }}</option>
                    </select>
                  </div>
                  <div class="col-12">
                    <label for="empfullname" class="form-label">Employee</label>
                    <select class="form-select" v-model="empfullname" required>
                      <option value="" disabled>Select Employee</option>
                      <option v-for="employee in employees">{{ employee.empfullname }}</option>
                    </select>
                  </div>

                  <!-- <div class="col-12">
                    <label for="code" class="form-label">Code</label>
                    <input type="text" class="form-control" id="code" v-model="code">
                  </div> -->
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                  </div>
                </form><!-- Vertical Form -->

              </div>
            </div>
            </div>

            <div class="col-lg-8" style="font-size: small;">
              <div class="card">
              <div class="card-body">
                <h5 class="card-title">Request</h5>

                    <!-- Modal -->
                    <div class="modal" v-if="showModal">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Provide Feedback</h5>
                            <button type="button" class="close" @click="closeModal">
                              <span>&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <label for="feedbackInput">Feedback:</label>
                            <textarea id="feedbackInput" v-model="feedback" class="form-control"></textarea>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" @click="closeModal">Close</button>
                            <button type="button" class="btn btn-primary" @click="submitFeedback">Submit</button>
                          </div>
                        </div>
                      </div>
                    </div>

                <!-- Table with hoverable rows -->
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Employee</th>
                      <th scope="col">Particulars</th>
                      <th scope="col">Description</th>
                      <th scope="col">Status</th>
                      <th scope="col">Feedback</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="req in requests" :key="req.id">
                      <td scope="row">{{ req.empfullname }}</td>
                      <td scope="row">{{ req.particulars }}</td>
                      <td scope="row">{{ req.description }}</td>
                      <td scope="row">{{ req.status }}</td>
                      <td scope="row">{{ req.feedback }}</td>
                      <td><button @click="updatereqStatus(req.id, 'Approved')" class="btn btn-success">Approve</button></td>
                        <td><button @click="updatereqStatus(req.id, 'Declined')" class="btn btn-danger">Decline</button></td>
                        <!-- <td><button @click="deleteRecord(req.id)" class="btn btn-warning">Message</button></td> -->
                    </tr>
                  </tbody>
                </table>
                <!-- End Table with hoverable rows -->

              </div>
              </div>
              


            </div>

            <div class="col-lg-16">



            <div class="card" style="font-size: medium;">
            <div class="card-body">
              <h5 class="card-title">Data Table</h5>
              <hr>
              <!-- Table with hoverable rows -->
              <!-- <table class="table table-hover datatable">
                <thead>
                  <tr>
                    <th scope="col">Entity</th>
                    <th scope="col">Particulars</th>
                    <th scope="col">Classification</th>
                    <th scope="col">Fullname</th>
                    <th scope="col">Code</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="infos in info">
                    <td scope="row">{{ infos.entityname }}</td>
                    <td scope="row">{{ infos.particulars }}</td>
                    <td scope="row">{{ infos.classification }}</td>
                    <td scope="row">{{ infos.empfullname }}</td>
                    <td scope="row">{{ infos.code }}</td>
                    <td><button @click="deleteRecord(infos.id)" class="btn btn-danger">Delete</button></td>
                  </tr>
                </tbody>
              </table> -->
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
          req:[],
          requests:[],
          entityname: "",
          particulars: "",
          classification: "",
          empfullname: "",
          code: "",
          // selectedEmployee: "",
          employees: [],
          inventory: [],
          // selectedEmployeeDetails: null

          message: [],
          showModal: false,
          feedback: ''
      }
  },
  created(){
      this.getInfo()
      this.getReq()
      this.getInventory()
  },
  methods:{
    updatereqStatus(id, newStatus) {
      // Show the modal
      this.showModal = true;
      // Save the id and newStatus for later use
      this.requestId = id;
      this.newStatus = newStatus;
    },
    closeModal() {
      // Close the modal and reset feedback
      this.showModal = false;
      this.feedback = '';
    },
    async submitFeedback() {
      try {
        const response = await axios.post('updatereqStatus', {
          id: this.requestId,
          status: this.newStatus,
          feedback: this.feedback
        });
        if (response.status === 200) {
          console.log(response.data);
          this.getReq();
          this.closeModal(); // Close the modal after successful submission
        } else {
          console.error('Error updating status:', response.data.error);
        }
      } catch (error) {
        console.error('Network error:', error.message);
      }
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
      async getReq(){
          try {
              const req = await axios.get('getReqAdmin');
              this.requests = req.data;


            
          } catch (error) {
              console.log(error);
          }
      },


      async getInfo(){
          try {
              const inf = await axios.get('getData');
              this.info = inf.data;
          } catch (error) {
              console.log(error);
          }
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

      async save() {
        try {
          // const generatedCode = await this.generateUniqueCode();

          const response = await axios.post('save', {
            particulars: this.particulars,
            empfullname: this.empfullname,
          });

          this.message = response.data.msg;
          if(response.data.msg === 'Cannot save data. Inventory status is inactive.'){
            alert('Cannot save data. Inventory status is inactive.');
          }
          else if(response.data.msg === 'Cannot save data. No matching inventory record found.'){
            alert('Cannot save data. No matching inventory record found.');
          }

          console.log('Server response:', response.data);
          // Clear the code only after successfully saving the record
          this.particulars = "";
          this.empfullname = "";

          this.$emit('data-saved');
          this.getInfo();
        } catch (error) {
          console.error(error);
          this.particulars = "";
          this.empfullname = "";
        }
      },

      // async save() {
      //   try {
      //     const generatedCode = await this.generateUniqueCode();

      //     const response = await axios.post('save', {
      //       entityname: this.entityname,
      //       particulars: this.particulars,
      //       classification: this.classification,
      //       empfullname: this.empfullname,
      //       code: generatedCode.data,
      //     });

      //     console.log('Server response:', response.data);

      //     // Check if the response indicates a successful save
      //     if (response.status === 200) {
      //       // Clear the form fields after successfully saving the record
      //       this.entityname = "";
      //       this.particulars = "";
      //       this.classification = "";
      //       this.empfullname = "";
      //       this.code = "";

      //       this.$emit('data-saved');
      //       this.getInfo();
      //     } else {
      //       // Handle unsuccessful save (optional)
      //       console.error('Save failed:', response.data);
      //     }
      //   } catch (error) {
      //     // Log detailed error information
      //     console.error('Error during save:', error);
      //     if (error.response) {
      //       console.error('Response data:', error.response.data);
      //       console.error('Response status:', error.response.status);
      //     } else if (error.request) {
      //       console.error('No response received. Request:', error.request);
      //     } else {
      //       console.error('Error message:', error.message);
      //     }
      //   }
      // },




      async generateUniqueCode() {
          let generatedCode;
          do {
            // Call the code_gen endpoint on the server
            const response = await axios.post('code_gen', { length: 8 });
            generatedCode = response.data;
          } while (this.codeExists(generatedCode));

          return generatedCode;
      },

      codeExists(code) {
        // Check if the generated code already exists in the info array
        return this.info.some(item => item.code === code);
      },
      
      async deleteRecord(recordId){
        const confirm = window.confirm("Are you sure that you want to delete this record?");
        if(confirm){
          const ins = await axios.post('del', {
            id: recordId,
        });
        this.getInfo();
        this.getReq();
        }
      },

      async logout(){
          sessionStorage.removeItem('token');
          this.$router.push('/');
      },

      // async fetchEmployeeDetails() {
      // // Use the CodeIgniter API endpoint to fetch employee details based on the selectedEmployee
      //   if (this.selectedEmployee) {
      //     try {
      //       const response = await fetch(`http://dilg.test/backend/public/getEmployee/${this.selectedEmployee}`);
      //       const data = await response.json();
      //       this.selectedEmployeeDetails = data;
      //     } catch (error) {
      //       console.error('Error fetching employee details', error);
      //     }
      //   } else {
      //     this.selectedEmployeeDetails = null;
      //   }
      // },
      async fetchEmployeeNames() {
        // Use the CodeIgniter API endpoint to fetch the list of employee names
        try {
          const response = await axios.get('getEmployees');
          this.employees = response.data;
        } catch (error) {
          console.error('Error fetching employee names', error);
        }
      },

    //   async getInventory(){
    //     try {
    //         const inv = await axios.get('getInventory');
    //         this.inventory = inv.data;
    //         console.log(this.inventory);
    //     } catch (error) {
    //         console.log(error);
    //     }
    // },
      


    //   async approveRecord(id) {
    //   try {
    //     // Assuming you have an API endpoint for approving records
    //     const response = await fetch(`/api/request/approve/${id}`, {
    //       method: 'PUT',
    //       headers: {
    //         'Content-Type': 'application/json'
    //         // Add any additional headers if needed
    //       }
    //     });

    //     if (response.ok) {
    //       // Update the status in the frontend
    //       const index = this.requests.findIndex(req => req.id === id);
    //       this.$set(this.requests, index, { ...this.requests[index], status: 'Approved' });

    //       console.log('Record approved successfully');
    //     } else {
    //       console.error('Failed to approve record');
    //     }
    //   } catch (error) {
    //     console.error('Error:', error);
    //   }
    // },
    // async declineRecord(id) {
    //   try {
    //     // Assuming you have an API endpoint for declining records
    //     const response = await fetch(`/api/request/decline/${id}`, {
    //       method: 'PUT',
    //       headers: {
    //         'Content-Type': 'application/json'
    //         // Add any additional headers if needed
    //       }
    //     });

    //     if (response.ok) {
    //       // Update the status in the frontend
    //       const index = this.requests.findIndex(req => req.id === id);
    //       this.$set(this.requests, index, { ...this.requests[index], status: 'Declined' });

    //       console.log('Record declined successfully');
    //     } else {
    //       console.error('Failed to decline record');
    //     }
    //   } catch (error) {
    //     console.error('Error:', error);
    //   }
    // },
    // async deleteRecord(id) {
    //   try {
    //     // Assuming you have an API endpoint for deleting records
    //     const response = await fetch(`/api/request/delete/${id}`, {
    //       method: 'DELETE',
    //       headers: {
    //         'Content-Type': 'application/json'
    //         // Add any additional headers if needed
    //       }
    //     });

    //     if (response.ok) {
    //       // Remove the record from the frontend
    //       this.requests = this.requests.filter(req => req.id !== id);

    //       console.log('Record deleted successfully');
    //     } else {
    //       console.error('Failed to delete record');
    //     }
    //   } catch (error) {
    //     console.error('Error:', error);
    //   }
    // },
    

//     async updatereqStatus(id, newStatus) {
//     try {
//         let feedback = ''; // Initialize feedback variable
//         // Prompt the user for feedback before approving or disapproving
//         if (newStatus === 'Approved' || newStatus === 'Declined') {
//             feedback = prompt('Please provide feedback:'); // Show prompt for feedback
//             if (feedback === null) return; // If user cancels, do nothing
//         }

//         const response = await axios.post('updatereqStatus', { id, status: newStatus, feedback });
//         if (response.status === 200) {
//             console.log(response.data);
//             this.getReq();
//         } else {
//             console.error('Error updating status:', response.data.error);
//         }
//     } catch (error) {
//         console.error('Network error:', error.message);
//     }
// },

    // async updatereqStatus(id, newStatus) {
    //     try {
    //       const response = await axios.post('updatereqStatus', { id, status: newStatus });
    //         if (response.status === 200) {
    //             console.log(response.data);
    //             this.getReq();
    //         } else {
    //             console.error('Error updating status:', response.data.error);
    //         }
    //     } catch (error) {
    //         console.error('Network error:', error.message);
    //     }
    //   },



  },
  mounted() {
    this.fetchEmployeeNames();
    this.getInventory();
  },
}
</script>
