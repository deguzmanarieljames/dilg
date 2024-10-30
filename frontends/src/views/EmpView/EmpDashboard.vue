<template>
    <EmployeeDashboard />
    <ScriptStyle />
  </template>
  
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import EmployeeDashboard from '../../components/Employee/EmployeeDashboard.vue';
  import ScriptStyle from '../../components/ScriptStyle.vue';
  
  export default defineComponent({
    name: 'EmpDashboard',
  
    components: {
      EmployeeDashboard, ScriptStyle,
    },
  });
  </script>
  