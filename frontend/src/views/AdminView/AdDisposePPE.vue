<template>
    <AdminDisposePPE />
    <ScriptStyle />
  </template>
  
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import AdminDisposePPE from '../../components/Admin/AdminDisposePPE.vue';
  import ScriptStyle from '../../components/ScriptStyle.vue';
  
  export default defineComponent({
    name: 'AdServiceableReturn',
  
    components: {
      AdminDisposePPE, ScriptStyle,
    },
  });
  </script>