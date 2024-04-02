<style scoped>
@import url('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i');


@import '@/assets/assets2/vendor/glightbox/css/glightbox.min.css';
@import '@/assets/assets2/vendor/remixicon/remixicon.css';
@import '@/assets/assets2/vendor/swiper/swiper-bundle.min.css';
@import '@/assets/assets2/css/style.css';
</style>


<script>
export default {
  name: "ScriptStyle2",

  mounted() {
    const scriptPaths = [
      './assets2/vendor/purecounter/purecounter_vanilla.js',
      './assets2/vendor/bootstrap/js/bootstrap.bundle.min.js',
      './assets2/vendor/glightbox/js/glightbox.min.js',
      './assets2/vendor/isotope-layout/isotope.pkgd.min.js',
      './assets2/vendor/swiper/swiper-bundle.min.js',
      './assets2/vendor/php-email-form/validate.js',
      './assets2/js/main.js'
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
        for (let i = 0; i < scriptPaths.length; i++) {
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
