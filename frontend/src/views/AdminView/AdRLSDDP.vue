<template>
    <AdminRLSDDP />
    <ScriptStyle />
  </template>
  
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import AdminRLSDDP from '../../components/Admin/AdminRLSDDP.vue';
  import ScriptStyle from '../../components/ScriptStyle.vue';
  
  export default defineComponent({
    name: 'AdRLSDDP',
  
    components: {
      AdminRLSDDP, ScriptStyle,
    },
  });
  </script>