<template>
  <AdminDashboard />
  <ScriptStyle />
</template>

<script>
import { defineComponent } from 'vue';

// Components
import AdminDashboard from '../../components/Admin/AdminDashboard.vue';
import ScriptStyle from '../../components/ScriptStyle.vue';

export default defineComponent({
  name: 'AdDashboard',

  components: {
    AdminDashboard, ScriptStyle,
  },
});
</script>
