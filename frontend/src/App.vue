<template>
  <v-app>
    <v-main>
      <router-view/>
    </v-main>
  </v-app>
</template>

<script>

export default {
  name: 'App',

  data: () => ({
    //
  }),
  mounted() {
  const logoutChannel = new BroadcastChannel('logoutChannel');

  logoutChannel.onmessage = (event) => {
    if (event.data && event.data.type === 'logout') {
      console.log('Received logout event in another tab');
      // Perform necessary actions in response to logout, if any
    }
  };
},
}
</script>
