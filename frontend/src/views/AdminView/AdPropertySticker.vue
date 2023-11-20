<template>
    <AdminPropertySticker />
    <ScriptStyle />
  </template>
  
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import AdminPropertySticker from '../../components/Admin/AdminPropertySticker.vue';
  import ScriptStyle from '../../components/ScriptStyle.vue';
  
  export default defineComponent({
    name: 'AdPropertySticker',
  
    components: {
      AdminPropertySticker, ScriptStyle,
    },
  });
  </script>