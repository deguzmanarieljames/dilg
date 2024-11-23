<template>
    <div>
      <h2>Edit SPS File</h2>
  
      <!-- Load Button -->
      <button @click="loadContent">Load SPS Content</button>
  
      <!-- CKEditor WYSIWYG Editor -->
      <ckeditor
        v-if="spsContent"
        :editor="editor"
        v-model="spsContent"
        :config="editorConfig"
      ></ckeditor>
  
      <!-- Save Button -->
      <button @click="saveContent">Save Changes</button>
  
      <!-- Success/Error Notification -->
      <p v-if="statusMessage">{{ statusMessage }}</p>
    </div>
  </template>
  
  <script>
  import { Ckeditor } from '@ckeditor/ckeditor5-vue';
  import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
  
  export default {
    components: {
      ckeditor: Ckeditor
    },
  
    data() {
      return {
        editor: ClassicEditor,
        spsContent: '',
        editorConfig: {
          // Custom configurations for CKEditor
          extraPlugins: [],
          stylesSet: [
            // You can define specific styles here if needed
          ],
        },
        inlineCSS: '', // Variable to store the inline CSS
        statusMessage: ''
      };
    },
    computed: {
      baseURL() {
        return axios.defaults.baseURL;
      },
    },
    methods: {
      // Load content from the backend
      async loadContent() {
        try {
          const response = await fetch(`${this.baseURL}/api/load-sps-content`);
          const data = await response.json();
          if (data.content) {
            this.spsContent = data.content;
            this.inlineCSS = data.css; // Capture inline CSS
            this.applyInlineCSS(); // Apply the inline CSS to the editor
            console.log('Loaded Content:', this.spsContent);
          } else {
            this.statusMessage = 'Failed to load content.';
          }
        } catch (error) {
          this.statusMessage = 'Error loading content.';
          console.error(error);
        }
      },
  
      // Apply the inline CSS to the CKEditor content
      applyInlineCSS() {
        // Inject the CSS into the editor's content
        const styleElement = document.createElement('style');
        styleElement.textContent = this.inlineCSS;
        document.head.appendChild(styleElement);
      },
  
      // Save edited content to the backend
      async saveContent() {
        try {
          const response = await fetch(`${this.baseURL}/api/save-sps-content`, {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json'
            },
            body: JSON.stringify({ content: this.spsContent })
          });
          const data = await response.json();
          if (data.status === 'success') {
            this.statusMessage = 'Content saved successfully!';
          } else {
            this.statusMessage = 'Failed to save content.';
          }
        } catch (error) {
          this.statusMessage = 'Error saving content.';
          console.error(error);
        }
      }
    }
  };
  </script>
  
  <style scoped>
  button {
    margin: 10px 0;
    padding: 8px 16px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
  button:hover {
    background-color: #0056b3;
  }
  
  p {
    color: green;
  }
  </style>
  