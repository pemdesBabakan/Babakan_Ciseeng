<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Desa Babakan - Desa Presisi</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <style>
        #map {
            height: 100vh;
        }
    </style>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/fav.jpg" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Vue.Js File -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>



</head>

<body>
<div id="vapp">
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
      <div class="container d-flex justify-content-between">

        <div class="logo">
          <h1 class="text-light"><a href="index.html">Desa Babakan</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav id="navbar" class="navbar">
          <ul>
            <li v-for="item in list_menu"><a v-bind:href="item.link ">{{ item.menu }}</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

      </div>
    </header><!-- End Header -->

    <main id="main">

      <!-- ======= Breadcrumbs ======= -->
      <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

          <div class="d-flex justify-content-between align-items-center">
            <h2>Desa Presisi</h2>
            <ol>
              <li><a href="index.html">Home</a></li>
              <li>Desa Presisi</li>
            </ol>
          </div>

        </div>
      </section><!-- End Breadcrumbs -->

    <section id="about-us" class="about-us">
        <div class="container">
            <div class="row">
                <div id="map"></div>
            </div>

        </div>
    </section>
    <!-- ======= Footer ======= -->
    <footer id="footer">

      <div class="footer-top">
        <div class="container">
          <div class="row">

            <div class="col-lg-3 col-md-6 footer-contact">
              <h3>Desa Babakan</h3>
              <p>
                Ciseeng <br>
                Bogor<br>
                Jawa Barat <br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> humaspemdesbabakan2329@gmail.com<br>
              </p>
            </div>

            <div class="col-lg-2 col-md-6 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li v-for="item in list_menu"><i class="bx bx-chevron-right"></i> <a v-bind:href="item.link ">{{
                    item.menu }}</a></li>
              </ul>
            </div>



          </div>
        </div>
      </div>

      <div class="container d-md-flex py-4">

        <div class="me-md-auto text-center text-md-start">
          <div class="copyright">
            &copy; Copyright <strong><span>Desa Babakan 2023</span></strong>. All Rights Reserved
          </div>

        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
          <a href="https://instagram.com/pemdes.babakan?igshid=MzRlODBiNWFlZA==" class="twitter"><i
              class="bx bxl-twitter"></i></a>
          <a href="https://instagram.com/pemdes.babakan?igshid=MzRlODBiNWFlZA==" class="facebook"><i
              class="bx bxl-facebook"></i></a>
          <a href="https://instagram.com/pemdes.babakan?igshid=MzRlODBiNWFlZA==" class="instagram"><i
              class="bx bxl-instagram"></i></a>
        </div>
      </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
    const vueApp = new Vue({
      el: '#vapp',
      data: {
        list_menu: [
          { menu: 'Home', link: 'index.html' },
          { menu: 'Tentang', link: 'tentang.html' },
          { menu: 'Program Kerja', link: 'proker.html' },
          { menu: 'Desa Presisi', link: 'wildesa.php' },
          { menu: 'Galleri Kegiatan', link: 'kegiatan.html' }
        ]
      }

    })

  </script>

</body>
<!-- Make sure you put this AFTER Leaflet's CSS -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
<script src="../geojson.js" type="text/javascript"></script>
<script src="assets/js/leaflet.ajax.js"></script>
<script>

    var mymap = L.map('map').setView([-6.465007, 106.696193], 15);
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
        id: 'mapbox.streets',
        accesToken: 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw'
    }).addTo(mymap);
    function popUp(f, l) {
        var out = [];
        if (f.properties) {
            //for (key in f.properties) {
                out.push('Desa:'+ f.properties["NAMOBJ"]);
                out.push('Kecamatan:'+ f.properties["WADMKC"]);
                out.push('Kabupaten:'+ f.properties["WADMKK"]);
                out.push('Provinsi:'+ f.properties["WADMPR"]);
            
            l.bindPopup(out.join("<br />"));
        }
    }
    var jsonTest = new L.GeoJSON.AJAX(["assets/geojson/geojson.json"], { onEachFeature: popUp }).addTo(mymap);


</script>

</html>