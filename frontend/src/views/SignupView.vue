<template>
  <div id="app" style="background-image: url('./img/color.jpg'); background-size: cover; background-attachment: fixed; height: 100%;">
    <main>
          <div class="container">

          <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
              <div class="container">
              <div class="row justify-content-center">
                  <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">


                  <div class="card mb-4">
                    <div class="card-body">
                      <div class="pt-4 pb-2 text-center">
                        <h5 class="card-title fs-4">Create an Account</h5>
                        <p class="text-muted small">Enter your personal details to create an account</p>
                      </div>
                  
                      <form class="row g-3 needs-validation" @submit.prevent="signup" enctype="multipart/form-data">
                        <div v-if="message === 'error'" class="alert alert-danger">Invalid response</div>
                        <div v-if="message === 'passwordMismatch'" class="alert alert-danger">Passwords do not match</div>
                  
                        <!-- Username -->
                        <div class="col-12">
                          <label for="username" class="form-label">Username</label>
                          <div class="input-group">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                            <input type="text" name="username" class="form-control" id="username" v-model="username" required>
                            <div class="invalid-feedback">Please choose a username.</div>
                          </div>
                        </div>
                  
                        <!-- Fullname -->
                        <div class="col-12">
                          <label for="fullname" class="form-label">Your Fullname</label>
                          <input type="text" name="fullname" class="form-control" id="fullname" v-model="fullname" required>
                          <div class="invalid-feedback">Please enter your full name!</div>
                        </div>
                  
                        <!-- Position -->
                        <div class="col-12">
                          <label for="position" class="form-label">Your Position</label>
                          <input type="text" name="position" class="form-control" id="position" v-model="position" required>
                          <div class="invalid-feedback">Please enter your position!</div>
                        </div>
                  
                        <!-- Email -->
                        <div class="col-12">
                          <label for="email" class="form-label">Your Email</label>
                          <input type="email" name="email" class="form-control" id="email" v-model="email" required>
                          <div class="invalid-feedback">Please enter a valid email address!</div>
                        </div>
                  
                        <!-- Image Upload or Capture -->
                        <div class="row">
                          <div class="col-md-6">
                            <label class="form-label"><strong>Choose Image Source:</strong></label>
                            <div class="d-flex justify-content-between">
                              <div>
                                <input type="radio" id="upload" value="upload" v-model="imageSource" class="radio-input">
                                <label for="upload" class="radio-label">Upload Image</label>
                              </div>
                              <div>
                                <input type="radio" id="capture" value="capture" v-model="imageSource" class="radio-input">
                                <label for="capture" class="radio-label">Capture Image</label>
                              </div>
                            </div>
                  
                            <!-- Upload Image Section -->
                            <div v-if="imageSource === 'upload'" class="mt-3">
                              <label for="image" class="form-label"><strong>Upload Image</strong></label>
                              <input type="file" class="form-control" id="image" @change="handleFileUpload" accept="image/*">
                            </div>
                  
                            <!-- Camera Capture Section -->
                            <div v-if="imageSource === 'capture'" class="mt-3">
                              <label for="camera" class="form-label"><strong>Capture Image</strong></label>
                              <div class="video-container">
                                <video id="camera" width="100%" height="auto" autoplay></video>
                                <div class="camera-controls mt-2">
                                  <button type="button" @click="startCamera" class="btn btn-primary">
                                    {{ cameraStarted ? 'Stop Camera' : 'Start Camera' }}
                                  </button>
                                  <button type="button" @click="captureImage" class="btn btn-success" :disabled="!cameraStarted">
                                    Capture
                                  </button>
                                </div>
                              </div>
                            </div>
                          </div>
                  
                          <!-- Image Preview Section -->
                          <div class="col-md-6 text-center mt-3">
                            <label class="form-label"><strong>Image Preview:</strong></label>
                            <div class="preview-container mt-2">
                              <img :src="imagePreview" v-if="imagePreview" alt="Image Preview" class="img-fluid image-preview">
                            </div>
                          </div>
                        </div>
                  
                        <!-- Password -->
                        <div class="col-12">
                          <label for="password" class="form-label">Password</label>
                          <input type="password" name="password" class="form-control" id="password" v-model="password" required>
                          <div class="invalid-feedback">Please enter your password!</div>
                        </div>
                  
                        <!-- Confirm Password -->
                        <div class="col-12">
                          <label for="passwordConfirm" class="form-label">Confirm Password</label>
                          <input type="password" name="passwordConfirm" class="form-control" id="passwordConfirm" v-model="passwordConfirm" required>
                          <div class="invalid-feedback">Please enter the same password above!</div>
                        </div>
                  
                        <!-- Terms and Conditions -->
                        <div class="col-12">
                          <div class="form-check">
                            <input class="form-check-input" name="terms" type="checkbox" id="acceptTerms" required>
                            <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                            <div class="invalid-feedback">You must agree before submitting.</div>
                          </div>
                        </div>
                  
                        <!-- Submit Button -->
                        <div class="col-12">
                          <button class="btn btn-primary w-100" type="submit">Create Account</button>
                        </div>
                  
                        <!-- Already have an account -->
                        <div class="col-12 text-center">
                          <p class="small mb-0">Already have an account? <a href="signin">Log in</a></p>
                        </div>
                      </form>
                    </div>
                  </div>
                  
                  
                

                  </div>
              </div>
              </div>

          </section>

          </div>
      </main><!-- End #main -->
  </div>
</template>


<script> 
  import router from '@/router'; 
  import axios from 'axios'; 

  export default { 

    data() { 
      return { 
        username: '', 
        fullname: '',
        position: '',
        email: '',
        password: '', 
        passwordConfirm: '', 
        message: [],
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
      }; 

    }, 

    methods: { 
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


      async signup() {
        if (this.password === this.passwordConfirm) {
          try {
            const formData = new FormData();

            // Append form fields to FormData
            formData.append('username', this.username);
            formData.append('fullname', this.fullname);
            formData.append('position', this.position);
            formData.append('email', this.email);
            formData.append('password', this.password);

            // Handle Image Upload
            if (this.selectedImageFile) {
              formData.append('image', this.selectedImageFile);
            }
            // Handle Image Capture
            else if (this.capturedImage) {
              const blob = await fetch(this.capturedImage).then(res => res.blob());
              const file = new File([blob], `image_${Date.now()}.png`, { type: 'image/png' });
              formData.append('image', file);
            }

            // Send the FormData to the backend
            const data = await axios.post("signup", formData, {
              headers: {
                'Content-Type': 'multipart/form-data'
              }
            });

            this.message = data.data.msg;

            if (data.data.msg === 'okay') {
              this.sendVerificationEmail(data.data.token);
              alert('Registered successfully. Check your email for verification.');
              router.push('/');
            }
          } catch (error) {
            console.error('Error during signup:', error);
            this.message = "error";
          }
        } else {
          this.message = "passwordMismatch";
        }
      },

      async sendVerificationEmail(token) {
        const response = await axios.post('send-verification-email', {
          email: this.email,
          token: token,
        });
        
        if (response.data.msg === 'emailSent') {
          alert('Verification email sent. Please check your inbox.');
        } else {
          alert('Failed to send verification email.');
        }
      },
  





    }
  }; 
</script>

<style scoped>

.logo {
  display: flex;
  align-items: center;
}

.logo-img {
  max-height: 60px;
  margin-right: 0.5rem;
}

/* General Form Styling */
.card {
  border-radius: 10px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  background-color: #ffffff;
  margin-bottom: 30px;
}

.card-body {
  padding: 40px;
}

/* Heading and Subheading */
.card-title {
  font-size: 24px;
  font-weight: bold;
}

.card-text {
  font-size: 14px;
  color: #6c757d;
}

/* Input Fields */
.form-control {
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
}

.input-group-text {
  background-color: #007bff;
  color: white;
}

.invalid-feedback {
  font-size: 12px;
  color: #dc3545;
}

/* Image Source Radio Buttons */
.radio-input {
  width: 16px;
  height: 16px;
  margin-right: 10px;
}

.radio-label {
  padding: 8px 16px;
  background-color: #f8f9fa;
  border-radius: 20px;
  border: 2px solid #007bff;
  color: #007bff;
  cursor: pointer;
  transition: all 0.3s ease;
}

.radio-input:checked + .radio-label {
  background-color: #007bff;
  color: white;
}

.radio-label:hover {
  background-color: #007bff;
  color: white;
}

/* Image Preview */
.image-preview {
  border-radius: 8px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  max-height: 250px;
  object-fit: cover;
}

.preview-container {
  background-color: #f8f9fa;
  padding: 20px;
  border-radius: 8px;
  border: 1px solid #dee2e6;
}

/* Camera Capture Controls */
.video-container {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 15px;
  padding: 20px;
  background-color: #f8f9fa;
  border-radius: 8px;
}

.camera-controls button {
  padding: 10px 20px;
  font-size: 14px;
  border-radius: 5px;
  transition: all 0.3s ease;
}

.camera-controls button:hover {
  background-color: #007bff;
  color: white;
}

/* Submit Button */
.btn-primary {
  font-size: 16px;
  padding: 12px;
  border-radius: 8px;
}

.form-check-label {
  font-size: 14px;
}

/* Terms and Conditions */
.form-check-input {
  border-radius: 5px;
}

/* Responsive Design */
@media (min-width: 992px) {
  .row {
    display: flex;
    justify-content: space-between;
  }

  .col-md-6 {
    width: 48%;
  }

  .image-preview {
    max-width: 100%;
  }

  .camera-controls {
    flex-direction: row;
    justify-content: space-between;
    width: 100%;
  }
}


</style>