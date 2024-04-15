<template>
    <OfficerLogbook />
    <ScriptStyle />
  </template>
  
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import OfficerLogbook from '../../components/Officer/OfficerLogbook.vue';
  import ScriptStyle from '../../components/ScriptStyle.vue';
  
  export default defineComponent({
    name: 'OffAdmin',
  
    components: {
      OfficerLogbook, ScriptStyle,
    },
  });
  </script>