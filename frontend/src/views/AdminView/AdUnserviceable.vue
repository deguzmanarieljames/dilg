<template>
    <AdminUnserviceable />
    <ScriptStyle />
  </template>
  
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import AdminUnserviceable from '../../components/Admin/AdminUnserviceable.vue';
  import ScriptStyle from '../../components/ScriptStyle.vue';
  
  export default defineComponent({
    name: 'AdUnserviceable',
  
    components: {
      AdminUnserviceable, ScriptStyle,
    },
  });
  </script>