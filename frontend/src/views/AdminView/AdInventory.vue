<template>
    <AdminInventory />
    <ScriptStyle />
  </template>
  
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import AdminInventory from '../../components/Admin/AdminInventory.vue';
  import ScriptStyle from '../../components/ScriptStyle.vue';
  
  export default defineComponent({
    name: 'AdInventory',
  
    components: {
      AdminInventory, ScriptStyle,
    },
  });
  </script>