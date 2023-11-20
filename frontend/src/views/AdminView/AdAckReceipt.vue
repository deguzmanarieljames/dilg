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
    name: 'AdAckReceipt',
  
    components: {
      AdminAckReceipt, ScriptStyle,
    },
  });
  </script>