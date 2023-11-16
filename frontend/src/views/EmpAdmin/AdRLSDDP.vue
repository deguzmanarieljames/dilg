<template>
    <ScriptStyle />
    <RLSDDP />
  </template>
    
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import ScriptStyle from '../../components/ScriptStyle.vue';
  import RLSDDP from '../../components/EmployeeAdmin/AdminRLSDDP.vue';

  export default defineComponent({
    name: 'AdRLSDDP',
  
    components: {
      ScriptStyle, RLSDDP
    },
  });
  </script>
    