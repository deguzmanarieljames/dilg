<template>
    <OfficerAdmin />
    <ScriptStyle />
  </template>
  
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import OfficerAdmin from '../../components/Officer/OfficerAdmin.vue';
  import ScriptStyle from '../../components/ScriptStyle.vue';
  
  export default defineComponent({
    name: 'OffAdmin',
  
    components: {
      OfficerAdmin, ScriptStyle,
    },
  });
  </script>