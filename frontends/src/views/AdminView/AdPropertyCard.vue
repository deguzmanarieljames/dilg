<template>
    <AdminPropertyCard />
    <ScriptStyle />
  </template>
  
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import AdminPropertyCard from '../../components/Admin/AdminPropertyCard.vue';
  import ScriptStyle from '../../components/ScriptStyle.vue';
  
  export default defineComponent({
    name: 'AdPropertyCard',
  
    components: {
      AdminPropertyCard, ScriptStyle,
    },
  });
  </script>