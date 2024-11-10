<template>
  <div class="modal-overlay" v-if="show">
    <div class="modal-content">
      <h2 class="modal-header">Enter Password</h2>
      <input
        v-model="password"
        type="password"
        placeholder="Enter your password"
        class="modal-input"
      />
      <button @click="verifyPassword" class="modal-button submit">Submit</button>
      <p v-if="errorMessage" class="error-message">{{ errorMessage }}</p>
      <button @click="cancel" class="modal-button cancel">Cancel</button>
    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      password: "",
      errorMessage: "",
      show: false,
    };
  },
  methods: {
    async verifyPassword() {
      const token = sessionStorage.getItem('token');
      
      if (!token) {
        this.errorMessage = "Session token not found.";
        return;
      }

      if (this.password) {
        try {
          const response = await axios.post('/verifyPassword', {
            token: token,
            password: this.password,
          });

          if (response.data.msg === 'Password verified') {
            this.errorMessage = ""; // Clear any error messages
            this.show = false; // Hide the modal
            this.$router.push('/userverify');
          } else {
            this.errorMessage = response.data.msg; // Set error message
          }
        } catch (error) {
          console.error("Error verifying password:", error);
          this.errorMessage = "Error verifying password.";
        }
      } else {
        this.errorMessage = "Please enter a password.";
      }
    },
    cancel() {
      this.show = false;
      this.$emit("cancel"); // Emit cancel to close the modal
    },
  },
  mounted() {
    this.show = true; // Show modal when mounted
  },
};
</script>

<style scoped>
.modal-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
  display: flex;
  align-items: center;
  justify-content: center;
  backdrop-filter: blur(10px); /* Background blur effect */
  -webkit-backdrop-filter: blur(10px); /* Safari support */
}

.modal-content {
  background: #fff;
  padding: 30px;
  border-radius: 10px;
  width: 350px;
  max-width: 90%;
  text-align: center;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease-in-out;
}

.modal-header {
  font-size: 24px;
  margin-bottom: 15px;
  font-weight: bold;
  color: #333;
}

.modal-input {
  width: 100%;
  padding: 10px;
  margin: 15px 0;
  border-radius: 5px;
  border: 1px solid #ccc;
  font-size: 16px;
  box-sizing: border-box;
}

.modal-button {
  width: 100%;
  padding: 12px;
  border-radius: 5px;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s ease;
  margin-bottom: 10px;
  border: none;
}

.modal-button.submit {
  background-color: #4CAF50; /* Green color for submit */
  color: white;
}

.modal-button.submit:hover {
  background-color: #45a049;
}

.modal-button.cancel {
  background-color: #f44336; /* Red color for cancel */
  color: white;
}

.modal-button.cancel:hover {
  background-color: #e53935;
}

.error-message {
  color: red;
  font-size: 14px;
  margin-bottom: 15px;
  font-weight: 600;
}
</style>