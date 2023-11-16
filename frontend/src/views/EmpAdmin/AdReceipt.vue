<template>
    <ScriptStyle />
    <Receipt />
  </template>
    
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import ScriptStyle from '../../components/ScriptStyle.vue';
  import Receipt from '../../components/EmployeeAdmin/AdminReceipt.vue';

  export default defineComponent({
    name: 'AdReceipt',
  
    components: {
      ScriptStyle, Receipt
    },
  });
  </script>
    