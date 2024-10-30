<style scoped>

@import url('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i');

@import '@/assets/assets1/vendor/bootstrap/css/bootstrap.min.css';
@import '@/assets/assets1/vendor/bootstrap-icons/bootstrap-icons.css';
@import '@/assets/assets1/vendor/boxicons/css/boxicons.min.css';
@import '@/assets/assets1/vendor/quill/quill.snow.css';
@import '@/assets/assets1/vendor/quill/quill.bubble.css';
@import '@/assets/assets1/vendor/remixicon/remixicon.css';
@import '@/assets/assets1/vendor/simple-datatables/style.css';
@import '@/assets/assets1/css/style.css';


</style>



<script>
  export default {

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

<style>
  /* Override Bootstrap table border styles */
  .table.table-hover,
  .table.table-hover > thead > tr > th,
  .table.table-hover > tbody > tr > td {
    border: none;
  }
  
  /* Style to display bottom border for table rows */
  .table-hover tbody tr {
    border-bottom: 1px solid #dee2e6; /* Adjust color and thickness as needed */
  }
</style>
