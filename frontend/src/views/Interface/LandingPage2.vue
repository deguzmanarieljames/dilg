<template>
    <LandingPage />
    <ScriptStyle2 />
  </template>
  
  <script>
  import { defineComponent } from 'vue';
  
  // Components
  import LandingPage from '../../components/LandingPage.vue';
  import ScriptStyle2 from '../../components/Theme1/ScriptStyle2.vue';
  
  export default defineComponent({
    name: 'LandingPage2',
  
    components: {
        LandingPage, ScriptStyle2,
    },
  });
  </script>
  