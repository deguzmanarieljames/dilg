<template>
    <ScriptStyle />
    <TransferReport />
  </template>
    
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import ScriptStyle from '../../components/ScriptStyle.vue';
  import TransferReport from '../../components/EmployeeAdmin/AdminTransferReport.vue';

  export default defineComponent({
    name: 'AdTransferReport',
  
    components: {
      ScriptStyle, TransferReport
    },
  });
  </script>
    