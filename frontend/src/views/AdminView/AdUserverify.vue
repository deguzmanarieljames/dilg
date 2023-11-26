<template>
    <AdminUserverify />
    <ScriptStyle />
  </template>
  
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import AdminUserverify from '../../components/Admin/AdminUserverify.vue';
  import ScriptStyle from '../../components/ScriptStyle.vue';
  
  export default defineComponent({
    name: 'AdUserverify',
  
    components: {
      AdminUserverify, ScriptStyle,
    },
  });
  </script>