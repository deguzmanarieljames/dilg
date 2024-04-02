<template>
    <EmployeeProfile />
    <ScriptStyle />
  </template>
  
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import EmployeeProfile from '../../components/Employee/EmployeeProfile.vue';
  import ScriptStyle from '../../components/ScriptStyle.vue';
  
  export default defineComponent({
    name: 'EmpDashboard',
  
    components: {
      EmployeeProfile, ScriptStyle,
    },
  });
  </script>
  