<template>
    <AdminLedgerCard />
    <ScriptStyle />
  </template>
  
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import AdminLedgerCard from '../../components/Admin/AdminLedgerCard.vue';
  import ScriptStyle from '../../components/ScriptStyle.vue';
  
  export default defineComponent({
    name: 'AdLedgerCard',
  
    components: {
      AdminLedgerCard, ScriptStyle,
    },
  });
  </script>