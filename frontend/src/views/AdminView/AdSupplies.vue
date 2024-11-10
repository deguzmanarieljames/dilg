<template>
    <AdminSupplies />
    <ScriptStyle />
  </template>
  
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import AdminSupplies from '../../components/Admin/AdminSupplies.vue';
  import ScriptStyle from '../../components/ScriptStyle.vue';
  
  export default defineComponent({
    name: 'AdInventory',
  
    components: {
      AdminSupplies, ScriptStyle,
    },
  });
  </script>