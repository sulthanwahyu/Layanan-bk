<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Uji level genap</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/tbb.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700|Roboto:300,400,700&display=swap"
    rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{asset('vendors/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Vendors CSS Files -->
  
  <script src="{{asset('https://kit.fontawesome.com/cdbc444101.js')}}" crossorigin="anonymous"></script>
  <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendors/line-awesome/css/line-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendors/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendors/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('vendors/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Template Name: SoftLand
    Template URL: https://bootstrapmade.com/softland-bootstrap-app-landing-page-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com/
  ======================================================= -->
</head>

<body>

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icofont-close js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">

          <div class="col-6 col-lg-2">
            <img src="img/tbb.png" style="width: 20%;position: absolute;right:100%;bottom:10%" alt="">
            <h1 style="font-size:20px" class="mb-0 site-logo"><a href="index.html" class="mb-0">Solution Mind</a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-lg-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#home" class="nav-link">Home</a></li>
                <li><a href="#About" class="nav-link">About</a></li>
                <li><a href="#contact" class="nav-link">Contact</a></li>
                <li class="active"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
                {{-- <i class="fa-solid fa-user" style="position: absolute;left:91.5%;top:38%;color:white"></i> --}}

                {{-- <li class="has-children">
                  <a href="blog.html" class="nav-link">Blog</a>
                  <ul class="dropdown">
                    <li><a href="blog.html" class="nav-link">Blog</a></li>
                    <li><a href="blog-single.html" class="nav-link">Blog Sigle</a></li>
                  </ul>
                </li> --}}
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-lg-none ml-md-0 py-3" style="position: relative; top: 3px;">

            <a href="#" class="burger site-menu-toggle js-menu-toggle" data-toggle="collapse"
              data-target="#main-navbar">
              <span></span>
            </a>
          </div>

        </div>
      </div>

    </header>


    <main id="main">
      <div class="hero-section">
        <div class="wave">

          <svg width="100%" height="355px" viewBox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink">
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
                <path
                  d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z"
                  id="Path"></path>
              </g>
            </g>
          </svg>

        </div>

        <div id="home" class="container">
          <div class="row align-items-center">
            <div class="col-12 hero-text-image">
              <div class="row">
                <div class="col-lg-7 text-center text-lg-left">
                  <h1 data-aos="fade-right">please do counseling at bk services SMK Taruna Bhakti</h1>
                  {{-- <p class="mb-5" data-aos="fade-right" data-aos-delay="100">Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit.</p>
                  <p data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500"><a href="#"
                      class="btn btn-outline-white">Get started</a></p> --}}
                </div>
                <div class="col-lg-5 iphone-wrap">
                  <img src="img/konseling.jpg" alt="Image" style="width: 80%" class="phone-1" data-aos="fade-right">
                  {{-- <img src="img/phone_2.png" alt="Image" class="phone-2" data-aos="fade-right" data-aos-delay="200"> --}}
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      {{-- <div class="site-section">
        <div class="container"> --}}

          {{-- <div class="row justify-content-center text-center mb-5">
            <div class="col-md-5" data-aos="fade-up">
              <h2 class="section-heading">Save your time to using SoftLand</h2>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="">
              <div class="feature-1 text-center">
                <div class="wrap-icon icon-1">
                  <span class="icon la la-users"></span>
                </div>
                <h3 class="mb-3">Explore Your Team</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
              </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
              <div class="feature-1 text-center">
                <div class="wrap-icon icon-1">
                  <span class="icon la la-toggle-off"></span>
                </div>
                <h3 class="mb-3">Digital Whiteboard</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
              </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
              <div class="feature-1 text-center">
                <div class="wrap-icon icon-1">
                  <span class="icon la la-umbrella"></span>
                </div>
                <h3 class="mb-3">Design To Development</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
              </div>
            </div>
          </div>

        </div>
      </div> <!-- .site-section --> --}}

      {{-- <div class="site-section">
        <div class="container">
          <div class="row justify-content-center text-center mb-5" data-aos="fade">
            <div class="col-md-6 mb-5">
              <img src="img/undraw_svg_1.svg" alt="Image" class="img-fluid">
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <div class="step">
                <span class="number">01</span>
                <h3>Sign Up</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="step">
                <span class="number">02</span>
                <h3>Create Profile</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="step">
                <span class="number">03</span>
                <h3>Enjoy the app</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
              </div>
            </div>
          </div>
        </div>
      </div> 
      <!-- .site-section --> --}}



      <div id="About" class="site-section pb-0">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-4 mr-auto">
              <h2 class="mb-4">About</h2>
              <p class="mb-4">Guidance and Counseling (BK) is a service provided in various educational institutions, such as schools, colleges, or learning centers. The main goal of counseling services is to assist individuals in overcoming personal, social, academic and career problems. This counseling service is designed to help individuals reach their maximum potential, overcome learning barriers, develop interpersonal skills, and plan for their future..</p>
              {{-- <p><a href="#">Download Now</a></p> --}}
            </div>
            <div class="col-md-6" data-aos="fade-left">
              <img src="img/undraw_svg_2.svg" alt="Image" class="img-fluid">
            </div>
          </div>
        </div>
      </div> <!-- .site-section -->

      <div class="site-section">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-4 ml-auto order-2">
              <h2 class="mb-4">Visi </h2>
              <p class="mb-4">Visi kami adalah menjadi mitra terpercaya dan terkemuka dalam memberikan layanan bimbingan dan konseling yang berkualitas tinggi, memberdayakan individu untuk menghadapi perubahan, mengembangkan potensi mereka, dan mencapai kualitas hidup yang lebih baik..</p>
              {{-- <p><a href="#">Download Now</a></p> --}}
            </div>
            <div class="col-md-6" data-aos="fade-right">
              <img src="img/visi.png" alt="Image" class="img-fluid">
            </div>
          </div>
        </div>
      </div> 
      <!-- .site-section -->

      <div  class="site-section pb-0">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-4 mr-auto">
              <h2 class="mb-4">Misi</h2>
              <p class="mb-4">-Menyediakan layanan bimbingan dan konseling yang terbaik untuk memenuhi kebutuhan klien kami.</p>
              <p class="mb-4">-Mengembangkan hubungan yang saling percaya antara konselor dan klien, menciptakan lingkungan yang aman dan mendukung untuk pertumbuhan pribadi.</p>
              <p class="mb-4">-Menggunakan pendekatan yang holistik dan beragam dalam bimbingan dan konseling, mengintegrasikan aspek fisik, emosional, dan mental.</p>
               
              {{-- <p><a href="#">Download Now</a></p> --}}
            </div>
            <div class="col-md-6" data-aos="fade-left">
              <img src="img/misi.png" alt="Image" class="img-fluid">
            </div>
          </div>
        </div>
      </div>

      {{-- <div class="site-section border-top border-bottom">
        <div class="container">
          <div class="row justify-content-center text-center mb-5">
            <div class="col-md-4">
              <h2 class="section-heading">please see our BK teacher</h2>
            </div>
          </div>
          <div class="row justify-content-center text-center">
            <div class="col-md-7">
              <div class="owl-carousel testimonial-carousel">
                <div class="review text-center"> --}}
                  {{-- <p class="stars">
                    <span class="icofont-star"></span>
                    <span class="icofont-star"></span>
                    <span class="icofont-star"></span>
                    <span class="icofont-star"></span>
                    <span class="icofont-star muted"></span>
                  </p>
                  <h3>Excellent App!</h3> --}}
                  {{-- <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus pariatur, numquam
                      aperiam dolore nam optio dolorem facilis itaque voluptatum recusandae deleniti minus animi,
                      provident voluptates consectetur maiores quos.</p>
                  </blockquote> --}}


{{-- 
                  <p class="review-user">
                    <img src="img/person_1.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
                    <span class="d-block">
                      <span class="text-black">Syamsul Maarif</span>, &mdash; Kesiswaan
                    </span>
                  </p>

                </div> --}}

                {{-- <div class="review text-center"> --}}
                  {{-- <p class="stars">
                    <span class="icofont-star"></span>
                    <span class="icofont-star"></span>
                    <span class="icofont-star"></span>
                    <span class="icofont-star"></span>
                    <span class="icofont-star muted"></span>
                  </p>
                  <h3>This App is easy to use!</h3> --}}
                  {{-- <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus pariatur, numquam
                      aperiam dolore nam optio dolorem facilis itaque voluptatum recusandae deleniti minus animi,
                      provident voluptates consectetur maiores quos.</p>
                  </blockquote> --}}



                  {{-- <p class="review-user">
                    <img src="img/person_2.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
                    <span class="d-block">
                      <span class="text-black">Johan Smith</span>, &mdash; App User
                    </span>
                  </p>

                </div>


                <div class="review text-center"> --}}
                  {{-- <p class="stars">
                    <span class="icofont-star"></span>
                    <span class="icofont-star"></span>
                    <span class="icofont-star"></span>
                    <span class="icofont-star"></span>
                    <span class="icofont-star muted"></span>
                  </p>
                  <h3>Awesome functionality!</h3> --}}
                  {{-- <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus pariatur, numquam
                      aperiam dolore nam optio dolorem facilis itaque voluptatum recusandae deleniti minus animi,
                      provident voluptates consectetur maiores quos.</p>
                  </blockquote>



                  <p class="review-user">
                    <img src="img/person_3.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
                    <span class="d-block">
                      <span class="text-black">Jean Thunberg</span>, &mdash; App User
                    </span>
                  </p>

                </div> --}}
              </div>
            </div>
          </div>
        </div>
      </div>



      <div class="site-section cta-section">
        <div class="container">
          <div class="row align-items-center">
            <div>
              <h2 style="position:absolute;left:18%">start counseling guidance now</h2>
            </div>
            {{-- <div class="col-md-5 text-center text-md-right">
              <p><a href="#" class="btn"><span class="icofont-brand-apple mr-3"></span>App store</a> <a href="#"
                  class="btn"><span class="icofont-ui-play mr-3"></span>Google play</a></p>
            </div> --}}
          </div>
        </div>
      </div>


    </main>
    <footer class="footer" role="contentinfo" id="contact">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-4 mb-md-0">
            <h3>About BK</h3>
            <p>Guidance and Counseling (BK) is a service provided in various educational institutions, such as schools, colleges, or learning centers. The main goal of counseling services is to assist individuals in overcoming personal, social, academic and career problems. </p>
            {{-- <p class="social">
              <a href="https://www.tiktok.com/@starbhak.official?_t=8crZASaM4en&_r=1"><span class="icofont-tumblr"></span></a>
              <a href="https://smktarunabhakti.net/"><span class="icofont-linkedin"></span></a>
              <a href="https://instagram.com/kesiswaan.starbhak?igshid=MzRlODBiNWFlZA== "><span class="icofont-instagram"></span></a>
              <a href="https://youtube.com/@SMKTarunaBhaktiDepok"><span class="icofont-youtube"></span></a>
            </p> --}}
          </div>
          <div class="col-md-7 ml-auto">
            <div class="row site-section pt-0">
              <div class="col-md-4 mb-4 mb-md-0">
                <h3>Navigation</h3>
                <ul class="list-unstyled">
                  <li><a href="#home">Home</a></li>
                  <li><a href="#About">About</a></li>
                  {{-- <li><a href="#">Blog</a></li> --}}
                  <li><a href="#contact">Contact</a></li>
                </ul>
              </div>
              <div class="col-md-4 mb-4 mb-md-0">
                <h3 style="position:relative;right: 16%">Account Social</h3>
                <p class="social" style="display:flex;position:absolute;right:25%">
                  <a href="https://www.tiktok.com/@starbhak.official?_t=8crZASaM4en&_r=1"><span class="icofont-tumblr"></span></a>
                  <a href="https://smktarunabhakti.net/"><span class="icofont-linkedin"></span></a>
                  <a href="https://instagram.com/kesiswaan.starbhak?igshid=MzRlODBiNWFlZA== "><span class="icofont-instagram"></span></a>
                  <a href="https://youtube.com/@SMKTarunaBhaktiDepok"><span class="icofont-youtube"></span></a>
                </p>
              </div>
              <div class="col-md-4 mb-4 mb-md-0">
                <h3>Contact Us</h3>
                <ul class="list-unstyled">
                  <li><span class="icofont-viber"> (021)-8744810</span></li>
                  <li><span class="icofont-email"> taruna@smktarunabhakti.net</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        {{-- <div class="row justify-content-center text-center">
          <div class="col-md-7">
            <p class="copyright">&copy; Copyright SoftLand. All Rights Reserved</p>
            <div class="credits"> --}}
              <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=SoftLand
              -->
              {{-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
          </div>
        </div> --}}

      </div>
    </footer>
  </div> <!-- .site-wrap -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendors JS Files -->
  <script src="vendors/jquery/jquery.min.js"></script>
  <script src="vendors/jquery/jquery-migrate.min.js"></script>
  <script src="vendors/bootstrap/js/bootstrap.min.js"></script>
  <script src="vendors/easing/easing.min.js"></script>
  <script src="vendors/php-email-form/validate.js"></script>
  <script src="vendors/sticky/sticky.js"></script>
  <script src="vendors/aos/aos.js"></script>
  <script src="vendors/owlcarousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('js/main.js')}}"></script>

</body>

</html>
