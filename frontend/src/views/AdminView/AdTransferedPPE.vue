<template>
    <AdminTransferedPPE />
    <ScriptStyle />
  </template>
  
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import AdminTransferedPPE from '../../components/Admin/AdminTransferedPPE.vue';
  import ScriptStyle from '../../components/ScriptStyle.vue';
  
  export default defineComponent({
    name: 'AdServiceableReturn',
  
    components: {
      AdminTransferedPPE, ScriptStyle,
    },
  });
  </script>