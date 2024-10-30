<template>
    <EmployeeQRcode />
    <ScriptStyle />
  </template>
  
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import EmployeeQRcode from '../../components/Employee/EmployeeQRcode.vue';
  import ScriptStyle from '../../components/ScriptStyle.vue';
  
  export default defineComponent({
    name: 'EmpDashboard',
  
    components: {
      EmployeeQRcode, ScriptStyle,
    },
  });
  </script>
  