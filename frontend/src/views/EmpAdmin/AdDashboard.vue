<template>
    <ScriptStyle />
    <Dashboard />
  </template>
    
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import ScriptStyle from '../../components/ScriptStyle.vue';
  import Dashboard from '../../components/EmployeeAdmin/AdminDashboard.vue';

  export default defineComponent({
    name: 'AdDashboard',
  
    components: {
      ScriptStyle, Dashboard
    },
  });
  </script>
    