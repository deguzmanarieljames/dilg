<template>
    <ScriptStyle />
    <IIRUP />
  </template>
    
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import ScriptStyle from '../../components/ScriptStyle.vue';
  import IIRUP from '../../components/EmployeeAdmin/AdminIIRUP.vue';

  export default defineComponent({
    name: 'AdIIRUP',
  
    components: {
      ScriptStyle, IIRUP
    },
  });
  </script>
    