<template>
    <EmployeeServiceable />
    <ScriptStyle />
  </template>
  
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import EmployeeServiceable from '../../components/Employee/EmployeeServiceable.vue';
  import ScriptStyle from '../../components/ScriptStyle.vue';
  
  export default defineComponent({
    name: 'EmpServiceable',
  
    components: {
      EmployeeServiceable, ScriptStyle,
    },
  });
  </script>
  