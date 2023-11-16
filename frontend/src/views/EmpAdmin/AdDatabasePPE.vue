<template>
    <ScriptStyle />
    <DatabasePPE />
  </template>
    
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import ScriptStyle from '../../components/ScriptStyle.vue';
  import DatabasePPE from '../../components/EmployeeAdmin/AdminDatabasePPE.vue';

  export default defineComponent({
    name: 'AdDatabasePPE',
  
    components: {
      ScriptStyle, DatabasePPE
    },
  });
  </script>
    