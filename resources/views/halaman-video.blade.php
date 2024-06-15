<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Blog Single - FlexStart Bootstrap Template</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet" />
    <link
      href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}"
      rel="stylesheet"
    />
    <link
      href="{{ asset('/vendor/bootstrap-icons/bootstrap-icons.css') }}"
      rel="stylesheet"
    />
    <link
      href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}"
      rel="stylesheet"
    />
    <link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="{{ asset('css/content/style.css') }}" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: FlexStart
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
      <div
        class="container-fluid container-xl d-flex align-items-center justify-content-between"
      >
        <a href="index.html" class="logo d-flex align-items-center">
          <img src="assets/img/logo.png" alt="" />
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
        </nav>
        <!-- .navbar -->
      </div>
    </header>
    <!-- End Header -->

    <main id="main">
      <!-- ======= Breadcrumbs ======= -->
      <section class="breadcrumbs">
        <div class="container">
          <h2>VIdeo</h2>
        </div>
      </section>
      <!-- End Breadcrumbs -->

      <!-- ======= Blog Section ======= -->
      <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
          <div class="row">
            <div class="col-lg-8 entries">
              <!-- batas awal artikel-->
              <div class="row mb-4">
                <div class="col-md-8">
                    <form action="{{ route('film.index') }}" method="GET" class="mt-3">
                        <div class="input-group">
                            <input type="text" name="query" class="form-control" placeholder="Search for articles" required>
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="container mt-4">
               <div class="row">
            @if($films->isEmpty())
              <h1">No articles found.</h1>
            @else
                @foreach($films as $film)

                      <div class="col-md-4 mt-3" >
                        <div class="card" style="height: 350px;">
                            <img src="{{ asset('/storage/products/' . $film->cover_path) }}" class="card-img-top" style="height: 200px;" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $film->judul }}</h5>
                                <video id="myVideo" controls style="display: none;">
                                  <source src="{{ $film->video_url }}" type="video/mp4">
                                  Your browser does not support the video tag.
                                 </video>
                                <button type="button " class="btn btn-danger mt-5">Play</button>
                            </div>
                          </div>
                        </div>


                      @endforeach

                      @endif
                    </div>
                  </div>
                  <div class="blog-pagination mt-5">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            {{ $films->links('pagination::bootstrap-5') }}
                        </ul>
                    </nav>
                </div>
              <!-- End blog entry -->


            </div>
            <!-- End blog entries list -->

            <div class="col-lg-4">
              <div class="sidebar">
                <!-- End sidebar search formn-->
                <!-- End sidebar categories-->

                <h3 class="sidebar-title">Recent Posts</h3>
                <div class="sidebar-item recent-posts">
                  @foreach ($recents as $recent )
                  <div class="post-item clearfix">
                    <img src="{{ asset('/storage/products/' . $recent->cover_path) }}" alt="" />
                    <h4>
                      <a href="blog-single.html"
                        >{{ $recent->judul }}</a
                      >
                    </h4>
                    <time datetime="2020-01-01">Jan 1, 2020</time>
                  </div>
                  @endforeach
                </div>
                <!-- End sidebar recent posts-->

                <!-- End sidebar tags-->
              </div>
              <!-- End sidebar -->
            </div>
            <!-- End blog sidebar -->
          </div>
        </div>
      </section>
      <!-- End Blog Section -->
    </main>
    <!-- End #main -->

    <!-- Vendor JS Files -->
    <script src="{{ asset('vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('js/content/main.js') }}"></script>
  </body>
</html>
