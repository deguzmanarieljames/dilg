<template>
    <AdminEditSPS />
    <ScriptStyle />
  </template>
  
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import AdminEditSPS from '../../components/Admin/AdminEditSPS.vue';
  import ScriptStyle from '../../components/ScriptStyle.vue';
  
  export default defineComponent({
    name: 'AdServiceableReturn',
  
    components: {
      AdminEditSPS, ScriptStyle,
    },
  });
  </script>