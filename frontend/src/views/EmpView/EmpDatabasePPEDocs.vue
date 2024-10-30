<template>
    <EmployeeDatabasePPEDocs />
    <ScriptStyle />
  </template>
  
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import EmployeeDatabasePPEDocs from '../../components/Employee/EmployeeDatabasePPEDocs.vue';
  import ScriptStyle from '../../components/ScriptStyle.vue';
  
  export default defineComponent({
    name: 'EmpDashboard',
  
    components: {
      EmployeeDatabasePPEDocs, ScriptStyle,
    },
  });
  </script>
  