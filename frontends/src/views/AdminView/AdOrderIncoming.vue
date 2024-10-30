<template>
    <AdminOrderIncoming />
    <ScriptStyle />
  </template>
  
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import AdminOrderIncoming from '../../components/Admin/AdminOrderIncoming.vue';
  import ScriptStyle from '../../components/ScriptStyle.vue';
  
  export default defineComponent({
    name: 'AdOrderIncoming',
  
    components: {
      AdminOrderIncoming, ScriptStyle,
    },
  });
  </script>