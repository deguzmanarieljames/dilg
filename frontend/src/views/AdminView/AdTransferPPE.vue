<template>
    <AdminTransferPPE />
    <ScriptStyle />
  </template>
  
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import AdminTransferPPE from '../../components/Admin/AdminTransferPPE.vue';
  import ScriptStyle from '../../components/ScriptStyle.vue';
  
  export default defineComponent({
    name: 'AdServiceableReturn',
  
    components: {
      AdminTransferPPE, ScriptStyle,
    },
  });
  </script>