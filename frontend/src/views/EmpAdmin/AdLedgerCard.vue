<template>
    <ScriptStyle />
    <LedgerCard />
  </template>
    
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import ScriptStyle from '../../components/ScriptStyle.vue';
  import LedgerCard from '../../components/EmployeeAdmin/AdminLedgerCard.vue';

  export default defineComponent({
    name: 'AdLedgerCard',
  
    components: {
      ScriptStyle, LedgerCard
    },
  });
  </script>
    