<template>
    <AdminReturnedPPE />
    <ScriptStyle />
  </template>
  
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import AdminReturnedPPE from '../../components/Admin/AdminReturnedPPE.vue';
  import ScriptStyle from '../../components/ScriptStyle.vue';
  
  export default defineComponent({
    name: 'AdServiceable',
  
    components: {
      AdminReturnedPPE, ScriptStyle,
    },
  });
  </script>