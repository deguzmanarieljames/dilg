<template>
    <ScriptStyle />
    <Sticker />
  </template>
    
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import ScriptStyle from '../../components/ScriptStyle.vue';
  import Sticker from '../../components/EmployeeAdmin/AdminSticker.vue';

  export default defineComponent({
    name: 'AdSticker',
  
    components: {
      ScriptStyle, Sticker
    },
  });
  </script>
    