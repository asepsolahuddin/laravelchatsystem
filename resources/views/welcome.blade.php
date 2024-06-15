<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
    <title>FlexStart Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
  
    <!-- Favicons -->
    <link href="{{ asset('img/landing/favicon.png') }}" rel="icon">
    <link href="{{ asset('img/landing/apple-touch-icon.png') }}" rel="apple-touch-icon">
  
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/landing/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/landing/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/landing/bootstrap-icons/bootstrap-icons.css') }} rel="stylesheet">
    <link href="{{ asset('vendor/landing/glightbox/css/glightbox.min.css') }}rel="stylesheet">
    <link href="{{ asset('vendor/landing/remixicon/remixicon.css') }} rel="stylesheet">
    <link href="{{ asset('vendor/landing/swiper/swiper-bundle.min.css') }} rel="stylesheet">
  
    <!-- Template Main CSS File -->
    <link href="{{ asset('css/landing/style.css') }}" rel="stylesheet">
  
  </head>


      <body>

        <header id="header" class="header fixed-top">
          <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      
            <a href="index.html" class="logo d-flex align-items-center">
              <span>Rosululloh</span>
            </a>
      
            <nav id="navbar" class="navbar">
              <ul>
                <li><a class="nav-link scrollto active" href="{{ url('/') }}">Home</a></li>
                <li><a class="nav-link scrollto" href="{{ url('/halaman-video') }}">Video</a></li>
                <li><a class="nav-link scrollto" href="{{ url('/halaman-artikel') }}">Article</a></li>
                  @if (Route::has('login'))
                      @auth
                          <a href="{{ url('/login') }}" class="getstarted scrollto">chat</a>
                      @else
                          <a href="{{ route('login') }}" class="getstarted scrollto">Log in</a>
          
                          @if (Route::has('register'))
                              <a href="{{ route('register') }}" class="getstarted scrollto">Register</a>
                          @endif
                      @endauth
                 @endif
              </ul>
              <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
      
          </div>
        </header>
        <!-- header-->
        {{-- <header>
          <a href="#" class="logo">Rosululloh</a>
          <div class="bx bx-menu" id="menu-icon"></div>
          <ul class="navlist">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#service">Service</a></li>
          </ul>
        </header> --}}
    
        <!--hero-->
        <section id="hero" class="hero d-flex align-items-center">

          <div class="container">
            <div class="row">
              <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">Web Adab Rosulluloh Muhammad SAW</h1>
                <h2 data-aos="fade-up" data-aos-delay="400">Menceritakan Bagaimana Keseharian Nabi Muhammad SAW</h2>
                <div data-aos="fade-up" data-aos-delay="600">
                  <div class="text-center text-lg-start">
                    <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                      <span>Get Started</span>
                      <i class="bi bi-arrow-right"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-lg-5 hero-img " data-aos="zoom-out" data-aos-delay="200">
                <img src="{{ asset('images/logo_muhammad.png') }}" class="img-fluid" alt="">
              </div>
            </div>
          </div>
      
        </section><!-- End Hero -->
      
        <main id="main">
          <!-- ======= About Section ======= -->
          <section id="about" class="about">
      
            <div class="container" data-aos="fade-up">
              <div class="row gx-0">
      
                <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                  <div class="content">
                    <h2>Mengenal Rosululloh</h2>
                    <p class="intro-text">
                      Nabi Muhammad SAW lahir pada hari Senin, tanggal 12 Rabiul Awal tahun Gajah. Ini merupakan pendapat mayoritas yang paling diunggulkan. Menurut para sejarawan, tahun Gajah bertepatan dengan 570 atau 571 M.
                    </p>
                    <p>
                      Alasan di balik penamaan tahun Gajah berkaitan dengan serbuan pasukan gajah yang berada di bawah pimpinan Gubernur Jenderal Najasyi Habasyah di Yaman yang bernama Abrahah bin Shabah. Kedatangan mereka ke kota Makkah untuk menghancurkan Ka'bah. Peristiwa ini terjadi sekitar 50 hari menjelang kelahiran Nabi Muhammad SAW.
                    </p>
                    <div class="text-center text-lg-start">
                      <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                        <span>Read More</span>
                        <i class="bi bi-arrow-right"></i>
                      </a>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                  <video controls>
                    <source src="{{ asset('images/videoplayback.mp4') }}" type="video/webm">
                  </video>
                </div>
      
              </div>
            </div>
      
          </section><!-- End About Section -->
      
          <!-- ======= Values Section ======= -->
          <section id="values" class="values">
      
            <div class="container" data-aos="fade-up">
      
              <header class="section-header">
                <h1>Our Values</h1>
              </header>
      
              <div class="row">
      
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                  <div class="box">
                    <img src="{{ asset('images/vide_rosul.svg') }}" class="img-fluid" alt="">
                    <h3>Video Adab Nabi</h3>
                    <p>Berisi mengenai kumpulan video video untuk suri tauladan nabi muhammad saw</p>
                  </div>
                </div>
      
                <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
                  <div class="box">
                    <img src="{{ asset('images/artikel_rosul.png') }}" class="img-fluid" alt="">
                    <h3>Artikel Tentang Nabi</h3>
                    <p>Berisi Mengenai Informasi Nabi Muhammad SAW</p>
                  </div>
                </div>
      
                <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
                  <div class="box">
                    <img src="{{ asset('images/chating_rosul.png') }}" class="img-fluid" alt="">
                    <h3>Chating Ustad</h3>
                    <p>Konsultasi Agama Dengan Ustad Dibidangnya</p>
                  </div>
                </div>
      
              </div>
      
            </div>
      
          </section><!-- End Values Section -->
      
          <!-- ======= Recent Blog Posts Section ======= -->
          <section id="recent-blog-posts" class="recent-blog-posts">
      
            <div class="container" data-aos="fade-up">
      
              <header class="section-header">
                <p>Recent Artikel</p>
              </header>
              
              <div class="row">
                @foreach ($posts as $post)
                    <div class="col-lg-4">
                        <div class="post-box">
                            <div class="post-img">
                                <img src="{{ asset('/storage/products/' . $post->cover_path) }}" class="card-img-top " style="height: 200px;" alt="">
                            </div>
                            <span class="post-date">Recent</span>
                            <h3 class="post-title">{{ $post->judul }}</h3>
                            <a href="{{ route('welcome.deskripsi', $post->id) }}" class="readmore stretched-link mt-auto">
                                <span>Read More</span><i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
      
            </div>
      
          </section><!-- End Recent Blog Posts Section -->
      
        </main><!-- End #main -->
      
        <!-- ======= Footer ======= -->
        <footer id="footer" class="footer">
        </footer><!-- End Footer -->
      
        <!-- Vendor JS Files -->
        <script src="{{ asset('vendor/landing/purecounter/purecounter_vanilla.js') }}"></script>
        <script src="{{ asset('vendor/landing/aos/aos.js') }}"></script>
        <script src="{{ asset('vendor/landing/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('vendor/landing/glightbox/js/glightbox.min.js') }}"></script>
        <script src="{{ asset('vendor/landing/isotope-layout/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('vendor/landing/swiper/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('vendor/landing/php-email-form/validate.js') }}"></script>
      
        <!-- Template Main JS File -->
        <script src="{{asset('js/landing/main.js')}}"></script>
      
      </body>
      
      </html>
