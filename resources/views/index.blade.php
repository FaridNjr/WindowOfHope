<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>WindowOfHope</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <style>
    .navbar {
      background-color: #000000; 
    }
    .portfolio-info h4 {
      text-align: center;
    }

    .portfolio-item img {
      transition: transform 0.3s ease; 
    }

    .portfolio-item img:hover {
      transform: scale(1.05); 
    }

  </style>
</head>

<link href="assets/css/main.css" rel="stylesheet">
<style>
    .header {
        background-color: #000000; 
        opacity: 1; 
    }

    .portfolio-info h4 {
      text-align: center;
    }
  </style>
  

  <!-- =======================================================
  * Template Name: Gp
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Updated: Aug 15 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">WindowOfHope</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/" class="active">Home<br></a></li>
          <li class="/adopt"><a href="adopt"><span>Adopt</span></a>
            
          </li>
          <li><a href="#contact">Kontak</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      @auth
      <a class="btn-getstarted" href="#">{{ Auth::user()->name }}</a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

<a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    Logout
</a>
      @endauth
      @guest
      <a class="btn-getstarted" href="/login">Login</a>
      <a class="btn-getstarted" href="/register">Register</a>
      @endguest

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="assets/img/WINDOW OF HOPE.jpg" alt="" data-aos="fade-in" width="100%" >

      <div class="container">

        <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
          <div class="col-xl-8 col-lg-8"> 
            <h2> <br> Pet-Care Terbaik Se-Indonesia<span>.</span></h2>
            <p>Kami memberikan pelayanan dan kualitas terbaik</p>
          </div>
        </div>

      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-6 order-1 order-lg-2">
            <img src="assets/img/they.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 order-2 order-lg-1 content">
            <h3>Deskripsi</h3>
            <p>
            Didirikan pada tahun 2024, WIINDOW OF HOPE hadir sebagai solusi modern untuk pecinta hewan peliharaan. Kami menawarkan platform inovatif yang menghubungkan calon pemilik dengan hewan-hewan yang membutuhkan rumah baru. Dengan fokus pada adopsi yang bertanggung jawab, kami menyediakan layanan yang mempermudah proses adopsi sambil memastikan kesejahteraan hewan menjadi prioritas utama. Bergabunglah dengan kami untuk menciptakan komunitas pecinta hewan yang peduli dan penuh kasih.
            </p>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->


    <!-- Features Section -->
    <section id="features" class="features section">

      <div class="container">

        <div class="row gy-4">
          <div class="features-image col-lg-6" data-aos="fade-up" data-aos-delay="100"><img src="assets/img/adopter.jpg" alt=""></div>
          <div class="col-lg-6">

            <div class="features-item d-flex ps-0 ps-lg-3 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="200">
              <img src="assets/img/cat.png" width="60" height="60" alt=""> 
              <div>
                <h4>Mempermudah Proses Adopsi</h4>
                <p>Calon pengadopsi bisa melihat daftar hewan yang tersedia secara online.</p>
              </div>
            </div><!-- End Features Item-->

            <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="300">
              <img src="assets/img/pet-shelter.png" width="60" height="60" alt="">
              <div>
                <h4>Mendukung Shelter Lokal</h4>
                <p>Menjadi jembatan antara shelter lokal dan masyarakat.</p>
              </div>
            </div><!-- End Features Item-->

            <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="400">
              <img src="assets/img/pet-lover.png" width="60" height="60" alt="">
              <div>
                <h4>Menghubungkan Komunitas Pecinta Hewan</h4>
                <p>Menyediakan forum atau ruang diskusi untuk berbagi informasi, pengalaman, dan bertukar tips tentang merawat hewan.</p>
              </div>
            </div><!-- End Features Item-->

            <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="500">
              <img src="assets/img/dog.png" width="60" height="60" alt="">
              <div>
                <h4>Berkontribusi pada Kesejahteraan Hewan</h4>
                <p>Membantu hewan yang memerlukan perhatian khusus seperti cacat, sakit, atau trauma untuk mendapatkan keluarga baru.</p>
              </div>
            </div><!-- End Features Item-->

          </div>
        </div>

      </div>

    </section><!-- /Features Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Unique Facts</h2>
        <p>Check our Facts</p>
      </div> <!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-activity"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>Menyelamatkan Nyawa</h3>
              </a>
              <p>Banyak hewan di penampungan menghadapi risiko euthanasia jika tidak diadopsi dalam waktu tertentu. Dengan mengadopsi, Anda bisa menyelamatkan nyawa mereka.</p>
            </div>
          </div> <!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-broadcast"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>Mengurangi Populasi Hewan Terlantar</h3>
              </a>
              <p>Dengan mengadopsi hewan, Anda membantu mengurangi jumlah hewan yang terlantar di jalanan dan di tempat penampungan.</p>
            </div>
          </div> <!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-easel"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>Mendapatkan Hewan yang Sudah Terlatih</h3>
              </a>
              <p>Banyak hewan di penampungan sudah dilatih dasar, sehingga Anda tidak perlu memulai dari nol. Ini bisa menghemat waktu dan usaha dalam pelatihan.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-bounding-box-circles"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>Mendukung Komunitas</h3>
              </a>
              <p>Dengan mengadopsi, Anda mendukung organisasi penyelamat hewan dan komunitas lokal yang bekerja keras untuk merawat hewan terlantar.</p>
              <a href="service-details.html" class="stretched-link"></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-calendar4-week"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>Kesehatan Mental</h3>
              </a>
              <p>Memiliki hewan peliharaan dapat meningkatkan kesehatan mental dan emosional pemiliknya. Hewan peliharaan dapat memberikan dukungan emosional dan mengurangi stres.</p>
              <a href="service-details.html" class="stretched-link"></a>
            </div>
          </div> <!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-chat-square-text"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>Mengurangi Populasi Hewan Terlantar</h3>
              </a>
              <p>Dengan mengadopsi hewan, Anda membantu mengurangi jumlah hewan yang terlantar di jalanan dan di tempat penampungan.</p>
              <a href="service-details.html" class="stretched-link"></a>
            </div>
          </div> <!-- End Service Item -->

       </div>

      </div>

    </section> <!-- /Services Section -->


    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <p>Check Your Chosen Pet</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <!--<li data-filter=".filter-app">KUCING</li>
            <li data-filter=".filter-product">ANJING</li>
            <li data-filter=".filter-branding">KELINCI</li>--> 
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-KUCING">
              <img src="assets/img/masonry-portfolio/anggora1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kucing Persia</h4>
                <p></p>
                <a href="assets/img/masonry-portfolio/anggora1.jpg" title="Kucing Persia" data-gallery="portfolio-gallery-KUCING" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-kucing">
              <img src="assets/img/masonry-portfolio/anggora2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kucing Persia</h4>
                <p></p>
                <a href="assets/img/masonry-portfolio/anggora2.jpg" title="Kucing Persia" data-gallery="portfolio-gallery-kucing" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-kucing">
              <img src="assets/img/masonry-portfolio/persia.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kucing Mujair</h4>
                <p></p>
                <a href="assets/img/masonry-portfolio/persia.jpg" title="Kucing Mujair" data-gallery="portfolio-gallery-kucing" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-kelinci">
              <img src="assets/img/masonry-portfolio/kelinci 1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kelinci Domestik</h4>
                <p></p>
                <a href="assets/img/masonry-portfolio/kelinci 1.jpg" title="Kelinci Domestik" data-gallery="portfolio-gallery-kelinci" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-kucing">
              <img src="assets/img/masonry-portfolio/kucing1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kucing Sphynx</h4>
                <p></p>
                <a href="assets/img/masonry-portfolio/kucing1.jpg" title="Kucing Sphynx" data-gallery="portfolio-gallery-kucing" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-anjing">
              <img src="assets/img/masonry-portfolio/anjing 2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Anjing Chihuahua</h4>
                <p></p>
                <a href="assets/img/masonry-portfolio/anjing 2.jpg" title="Anjing Chihuahua" data-gallery="portfolio-gallery-anjing" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-anjing">
              <img src="assets/img/masonry-portfolio/anjing 1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Anjing Basenji</h4>
                <p></p>
                <a href="assets/img/masonry-portfolio/anjing 1.jpg" title="Anjing Basenji " data-gallery="portfolio-gallery-anjing" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-kelinci">
              <img src="assets/img/masonry-portfolio/kelinci2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kelinci Eropa</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/kelinci2.jpg" title="Kelinci Eropa" data-gallery="portfolio-gallery-kelinci" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/masonry-portfolio/anjing3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Anjing Toy Poodle</h4>
                <p></p>
                <a href="assets/img/masonry-portfolio/anjing3.jpg" title="Anjing Toy Poodle" data-gallery="portfolio-gallery-anjing" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-kelinci">
              <img src="assets/img/masonry-portfolio/kelinci3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kelinci Blanc de Popielno</h4>
                <p></p>
                <a href="assets/img/masonry-portfolio/kelinci3.jpg" title="Kelinci Blanc de Popielno" data-gallery="portfolio-gallery-kelinci" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Contact Us</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
       <div class="mb-4" data-aos="fade-up" data-aos-delay="100">
        <a href="https://www.google.com/maps/place/Universitas+Muhammadiyah+Semarang+(UNIMUS)/@-7.0217608,110.4592896,17z/data=!3m1!4b1!4m6!3m5!1s0x2e708c507be50d83:0x8b3ed2ccbc3d79c0!8m2!3d-7.0217608!4d110.4618645!16s%2Fg%2F1229kpqd?entry=ttu&g_ep=EgoyMDI1MDEwMS4wIKXMDSoASAFQAw%3D%3D" target="_blank">
        <img src="assets/img/maps.jpg" alt= "Universitas Muhammadiyah Semarang" style="width: 100%; height: auto; border: -0;" />
        </a>
       </div>
      </div>

        <div class="row gy-4">

        <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Address</h3>
                <p>Jl. Kedungmundu No.18, Kedungmundu, Kec. Tembalang, Kota Semarang, Jawa Tengah 50273</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+62 855 890 927</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>dyahayukusumaningtyas90@gmail.com</p>
              </div>
            </div><!-- End Info Item -->

         
          
              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer dark-background">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6 footer-about">
            <a href="/" class="logo d-flex align-items-center">
              <span class="sitename">WindowOfHope</span>
            </a>
            <div class="footer-contact pt-3">
              <p>Jl. Kedungmundu No.18</p>
              <p>Kedungmundu, Kec. Tembalang, Kota Semarang, Jawa Tengah 50273</p>
              <p class="mt-3"><strong>Phone:</strong> <span>+62 855 890 927</span></p>
              <p><strong>Email:</strong> <span>dyahayukusumaningtyas90@gmail.com</span></p>
            </div>
          </div>

        

        </div>
      </div>
    </div>

      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>