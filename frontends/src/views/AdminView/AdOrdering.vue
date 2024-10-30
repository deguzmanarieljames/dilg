<template>
    <AdminOrders />
    <ScriptStyle />
  </template>
  
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import AdminOrders from '../../components/Admin/AdminOrders.vue';
  import ScriptStyle from '../../components/ScriptStyle.vue';
  
  export default defineComponent({
    name: 'AdOrdering',
  
    components: {
      AdminOrders, ScriptStyle,
    },
  });
  </script>