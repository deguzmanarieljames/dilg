<template>
    <AdminWorkspace />
    <ScriptStyle />
  </template>
  
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import AdminWorkspace from '../../components/Admin/AdminWorkspace.vue';
  import ScriptStyle from '../../components/ScriptStyle.vue';
  
  export default defineComponent({
    name: 'AdWorkspace',
  
    components: {
      AdminWorkspace, ScriptStyle,
    },
  });
  </script>