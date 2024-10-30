<template>
    <AdminAckReceipt />
    <ScriptStyle />
  </template>
  
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import AdminAckReceipt from '../../components/Admin/AdminAckReceipt.vue';
  import ScriptStyle from '../../components/ScriptStyle.vue';
  
  export default defineComponent({
    name: 'AdDashboard',
  
    components: {
      AdminAckReceipt, ScriptStyle,
    },
  });
  </script>
  