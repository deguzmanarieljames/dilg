<template>
    <OfficerLogbook />
    <ScriptStyle />
  </template>
  
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import OfficerLogbook from '../../components/Admin/AdminLogbook.vue';
  import ScriptStyle from '../../components/ScriptStyle.vue';
  
  export default defineComponent({
    name: 'AdLogbook',
  
    components: {
      OfficerLogbook, ScriptStyle,
    },
  });
  </script>