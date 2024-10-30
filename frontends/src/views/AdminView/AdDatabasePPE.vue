<template>
    <AdminDatabasePPE />
    <ScriptStyle />
  </template>
  
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import AdminDatabasePPE from '../../components/Admin/AdminDatabasePPE.vue';
  import ScriptStyle from '../../components/ScriptStyle.vue';
  
  export default defineComponent({
    name: 'AdDatabasePPE',
  
    components: {
      AdminDatabasePPE, ScriptStyle,
    },
  });
  </script>