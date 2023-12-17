<template>
    <EmployeeUnserviceable />
    <ScriptStyle />
  </template>
  
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import EmployeeUnserviceable from '../../components/Employee/EmployeeUnserviceable.vue';
  import ScriptStyle from '../../components/ScriptStyle.vue';
  
  export default defineComponent({
    name: 'EmpUnserviceable',
  
    components: {
      EmployeeUnserviceable, ScriptStyle,
    },
  });
  </script>
  