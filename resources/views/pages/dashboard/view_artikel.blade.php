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
            <li><a class="nav-link scrollto" href="#hero">Home</a></li>
            <li><a class="nav-link scrollto" href="#about">Video</a></li>
            <li><a class="nav-link scrollto" href="#services">Artikel</a></li>
            <li><a class="nav-link scrollto" href="#services">About</a></li>
            <li>
              <a class="getstarted scrollto" href="#about">Get Started</a>
            </li>
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
          <h2>Artikel</h2>
        </div>
      </section>
      <!-- End Breadcrumbs -->

      <!-- ======= Blog Single Section ======= -->
      <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
          <div class="row">
            <div class="col-lg-8 entries">
              <article class="entry entry-single">
                <div class="entry-img">
                  <img src="{{ asset('/storage/products/'.$posts->cover_path) }}" class="rounded" style="width: 100%">
                </div>

                <h2 class="entry-title">
                  <a href="blog-single.html"
                    >{{ $posts->judul }}</a
                  >
                </h2>

                <div class="entry-meta">
                  <ul>
                    <li class="d-flex align-items-center">
                      <i>Kategori :</i>
                      <a href="blog-single.html">{{ $posts->kategori }}</a>
                    </li>
                  </ul>
                </div>

                <div class="entry-content">
                  <p>{{ $posts->isi }}</p>
                </div>
              </article>
              <!-- End blog entry -->

              <!-- <div class="blog-author d-flex align-items-center">
                <img
                  src="assets/img/blog/blog-author.jpg"
                  class="rounded-circle float-left"
                  alt=""
                />
                <div>
                  <h4>Jane Smith</h4>
                  <div class="social-links">
                    <a href="https://twitters.com/#"
                      ><i class="bi bi-twitter"></i
                    ></a>
                    <a href="https://facebook.com/#"
                      ><i class="bi bi-facebook"></i
                    ></a>
                    <a href="https://instagram.com/#"
                      ><i class="biu bi-instagram"></i
                    ></a>
                  </div>
                  <p>
                    Itaque quidem optio quia voluptatibus dolorem dolor. Modi
                    eum sed possimus accusantium. Quas repellat voluptatem
                    officia numquam sint aspernatur voluptas. Esse et
                    accusantium ut unde voluptas.
                  </p>
                </div>
              </div> -->
              <!-- End blog author bio -->

              <!-- End blog comments -->
            </div>
            <!-- End blog entries list -->

            <div class="col-lg-4">
              <div class="sidebar">
                {{-- <h3 class="sidebar-title">Search</h3>
                <div class="sidebar-item search-form">
                  <form action="">
                    <input type="text" />
                    <button type="submit"><i class="bi bi-search"></i></button>
                  </form>
                </div> --}}
                <!-- End sidebar search formn-->
                <!-- End sidebar categories-->

                <h3 class="sidebar-title">Recent Posts</h3>
                <div class="sidebar-item recent-posts">
                  <div class="post-item clearfix">
                    <img src="assets/img/blog/blog-recent-1.jpg" alt="" />
                    <h4>
                      <a href="blog-single.html"
                        >Nihil blanditiis at in nihil autem</a
                      >
                    </h4>
                    <time datetime="2020-01-01">Jan 1, 2020</time>
                  </div>

                  <div class="post-item clearfix">
                    <img src="assets/img/blog/blog-recent-2.jpg" alt="" />
                    <h4>
                      <a href="blog-single.html">Quidem autem et impedit</a>
                    </h4>
                    <time datetime="2020-01-01">Jan 1, 2020</time>
                  </div>

                  <div class="post-item clearfix">
                    <img src="assets/img/blog/blog-recent-3.jpg" alt="" />
                    <h4>
                      <a href="blog-single.html"
                        >Id quia et et ut maxime similique occaecati ut</a
                      >
                    </h4>
                    <time datetime="2020-01-01">Jan 1, 2020</time>
                  </div>

                  <div class="post-item clearfix">
                    <img src="assets/img/blog/blog-recent-4.jpg" alt="" />
                    <h4>
                      <a href="blog-single.html"
                        >Laborum corporis quo dara net para</a
                      >
                    </h4>
                    <time datetime="2020-01-01">Jan 1, 2020</time>
                  </div>

                  <div class="post-item clearfix">
                    <img src="assets/img/blog/blog-recent-5.jpg" alt="" />
                    <h4>
                      <a href="blog-single.html"
                        >Et dolores corrupti quae illo quod dolor</a
                      >
                    </h4>
                    <time datetime="2020-01-01">Jan 1, 2020</time>
                  </div>
                </div>
                <!-- End sidebar recent posts-->
              </div>
              <!-- End sidebar -->
            </div>
            <!-- End blog sidebar -->
          </div>
        </div>
      </section>
      <!-- End Blog Single Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->

    <!-- End Footer -->

    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

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