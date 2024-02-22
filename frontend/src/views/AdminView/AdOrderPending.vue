<template>
    <AdminOrderPending />
    <ScriptStyle />
  </template>
  
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import AdminOrderPending from '../../components/Admin/AdminOrderPending.vue';
  import ScriptStyle from '../../components/ScriptStyle.vue';
  
  export default defineComponent({
    name: 'AdOrderPending',
  
    components: {
      AdminOrderPending, ScriptStyle,
    },
  });
  </script>