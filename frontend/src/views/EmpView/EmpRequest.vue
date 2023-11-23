<template>
    <EmployeeRequest />
    <ScriptStyle />
  </template>
  
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import EmployeeRequest from '../../components/Employee/EmployeeRequest.vue';
  import ScriptStyle from '../../components/ScriptStyle.vue';
  
  export default defineComponent({
    name: 'EmpRequest',
  
    components: {
      EmployeeRequest, ScriptStyle,
    },
  });
  </script>
  