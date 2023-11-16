<style scoped>
@import '@/assets/css/styles.min.css';
@import 'https://adminmart.com/product/modernize-free-bootstrap-admin-dashboard/';

     
</style>


<script>
  export default {
    name: "ScriptStyle",

    mounted() {
    this.loadScripts();
},
methods: {
    loadScripts() {
      const scriptUrls = [
//        '/libs/jquery/dist/jquery.min.js',
  //      '/libs/jquery/dist/jquery.js',
    //    '/libs/jquery/dist/jquery.slim.js',
      //  '/libs/jquery/dist/jquery.slim.min.js',
//        '/libs/bootstrap/dist/js/bootstrap.bundle.min.js',
  //      '/js/sidebarmenu.js',
    //    '/js/app.min.js',
      //  '/libs/simplebar/dist/simplebar.js',
//        '/js/dashboard.js',
  //      '/libs/apexcharts/dist/apexcharts.min.js',
      ];

      const head = document.getElementsByTagName('head')[0];

      scriptUrls.forEach((scriptUrl) => {
        const script = document.createElement('script');
        script.src = scriptUrl;
        script.async = true;
        head.appendChild(script);
      });
    },
 },
   
  };
  
</script>


<!--mounted() {
    this.loadScripts();
},
methods: {
    loadScripts() {
      const scriptUrls = [
        './libs/jquery/dist/jquery.min.js',
        './libs/bootstrap/dist/js/bootstrap.bundle.min.js',
        './js/sidebarmenu.js',
        './js/app.min.js',
        './libs/simplebar/dist/simplebar.js',
        './js/dashboard.js',
        './libs/apexcharts/dist/apexcharts.min.js',
      ];

      const head = document.getElementsByTagName('head')[0];

      scriptUrls.forEach((scriptUrl) => {
        const script = document.createElement('script');
        script.src = scriptUrl;
        script.async = true;
        head.appendChild(script);
      });
    },
 },
-->


<!--
      mounted() {
    this.loadScripts();
},
methods: {
    loadScripts() {
      const scriptUrls = [
        '/libs/jquery/dist/jquery.min.js',
        '/libs/jquery/dist/jquery.js',
        '/libs/jquery/dist/jquery.slim.js',
        '/libs/jquery/dist/jquery.slim.min.js',
        '/libs/bootstrap/dist/js/bootstrap.bundle.min.js',
        '/js/sidebarmenu.js',
        '/js/app.min.js',
        '/libs/simplebar/dist/simplebar.js',
        '/js/dashboard.js',
        '/libs/apexcharts/dist/apexcharts.min.js',
      ];

      const head = document.getElementsByTagName('head')[0];

      scriptUrls.forEach((scriptUrl) => {
        const script = document.createElement('script');
        script.src = scriptUrl;
        script.async = true;
        head.appendChild(script);
      });
    },
 },
-->