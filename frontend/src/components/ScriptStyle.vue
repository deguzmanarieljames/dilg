<style>

@import url('https://fonts.gstatic.com');
@import url('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i');

@import '@/assets/vendor/bootstrap/css/bootstrap.min.css';
@import '@/assets/vendor/bootstrap-icons/bootstrap-icons.css';
@import '@/assets/vendor/boxicons/css/boxicons.min.css';
@import '@/assets/vendor/quill/quill.snow.css';
@import '@/assets/vendor/quill/quill.bubble.css';
@import '@/assets/vendor/remixicon/remixicon.css';
@import '@/assets/vendor/simple-datatables/style.css';
@import '@/assets/css/style.css';

</style>
<template>

</template>


<script>
import Cookies from "js-cookie";
  export default {
    name: "DashboardStyle",

    mounted() {
        const scriptPaths = [
        './vendor/apexcharts/apexcharts.min.js',
        './vendor/bootstrap/js/bootstrap.bundle.min.js',
        './vendor/chart.js/chart.umd.js',
        './vendor/echarts/echarts.min.js',
        './vendor/quill/quill.min.js',
        './vendor/simple-datatables/simple-datatables.js',
        './vendor/tinymce/tinymce.min.js',
        './vendor/php-email-form/validate.js',
        './js/main.js'
        ];
        

        const loadScript = (path) => {
        return new Promise((resolve, reject) => {
            const script = document.createElement('script');
            script.src = path;
            script.onload = resolve;
            script.onerror = reject;
            document.body.appendChild(script);
        });
        };

        const loadScripts = async () => {
        try {
            await loadScript(scriptPaths[0]);
            for (let i = 1; i < scriptPaths.length; i++) {
            await loadScript(scriptPaths[i]);
            }
        } catch (error) {
            console.error('Failed to load scripts:', error);
        }
        };
        loadScripts();
    }


   
  };
  
</script>

<!--<script>
export default {
  name: "ScriptStyle",
 mounted() {
    this.loadScripts();
},
methods: {
    loadScripts() {
      const scriptUrls = [
        './vendor/apexcharts/apexcharts.min.js',
        './vendor/bootstrap/js/bootstrap.bundle.min.js',
        './vendor/chart.js/chart.umd.js',
        './vendor/echarts/echarts.min.js',
        './vendor/quill/quill.min.js',
        './vendor/simple-datatables/simple-datatables.js',
        './vendor/tinymce/tinymce.min.js',
        './vendor/php-email-form/validate.js',
        './js/main.js',
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
</script>-->
