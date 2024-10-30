<template>
    <AdminDisposedPPE />
    <ScriptStyle />
  </template>
  
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import AdminDisposedPPE from '../../components/Admin/AdminDisposedPPE.vue';
  import ScriptStyle from '../../components/ScriptStyle.vue';
  
  export default defineComponent({
    name: 'AdServiceableReturn',
  
    components: {
      AdminDisposedPPE, ScriptStyle,
    },
  });
  </script>