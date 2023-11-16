<template>
    <ScriptStyle />
    <RCPPE />
  </template>
    
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import ScriptStyle from '../../components/ScriptStyle.vue';
  import RCPPE from '../../components/EmployeeAdmin/AdminRCPPE.vue';

  export default defineComponent({
    name: 'AdRCPPE',
  
    components: {
      ScriptStyle, RCPPE
    },
  });
  </script>
    