<template>
    <AdminTransferReport />
    <ScriptStyle />
  </template>
  
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import AdminTransferReport from '../../components/Admin/AdminTransferReport.vue';
  import ScriptStyle from '../../components/ScriptStyle.vue';
  
  export default defineComponent({
    name: 'AdTransferReport',
  
    components: {
      AdminTransferReport, ScriptStyle,
    },
  });
  </script>