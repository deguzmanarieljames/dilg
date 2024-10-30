<template>
    <AdminServiceable />
    <ScriptStyle />
  </template>
  
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import AdminServiceable from '../../components/Admin/AdminServiceable.vue';
  import ScriptStyle from '../../components/ScriptStyle.vue';
  
  export default defineComponent({
    name: 'AdServiceable',
  
    components: {
      AdminServiceable, ScriptStyle,
    },
  });
  </script>