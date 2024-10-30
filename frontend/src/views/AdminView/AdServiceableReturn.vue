<template>
    <AdminServiceableReturn />
    <ScriptStyle />
  </template>
  
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import AdminServiceableReturn from '../../components/Admin/AdminServiceableReturn.vue';
  import ScriptStyle from '../../components/ScriptStyle.vue';
  
  export default defineComponent({
    name: 'AdServiceableReturn',
  
    components: {
      AdminServiceableReturn, ScriptStyle,
    },
  });
  </script>