<template>
    <AdminDatabasePPEDocs />
    <ScriptStyle />
  </template>
  
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import AdminDatabasePPEDocs from '../../components/Admin/AdminDatabasePPEDocs.vue';
  import ScriptStyle from '../../components/ScriptStyle.vue';
  
  export default defineComponent({
    name: 'AdDatabasePPE',
  
    components: {
      AdminDatabasePPEDocs, ScriptStyle,
    },
  });
  </script>