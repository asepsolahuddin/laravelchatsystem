<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <link rel="stylesheet" type="text/css" href="../styles.css" />
    
        <!-- box icon link-->
        <link
          rel="stylesheet"
          href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"
        />
    
        <!-- remix icon link-->
        <link
          href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
          rel="stylesheet"
        />
    
        <!-- font -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
          href="https://fonts.googleapis.com/css2?family=Gentium+Plus:ital,wght@0,400;0,700;1,400;1,700&family=Inter+Tight:ital,wght@0,100..900;1,100..900&display=swap"
          rel="stylesheet"
        />
      </head>
      <body>
        <!-- header-->
        <header>
          <a href="#" class="logo">Rosululloh</a>
          <div class="bx bx-menu" id="menu-icon"></div>
          <ul class="navlist">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#service">Service</a></li>
          </ul>
    
        <div class="top-btn">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="h-btn">Adab Muhammad SAW</a>
                @else
                    <a href="{{ route('login') }}" class="h-btn">Log in</a>
    
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="h-btn">Register</a>
                    @endif
                @endauth
        @endif
          </div>
        </header>
    
        <!--hero-->
        <section class="hero" id="home">
          <div class="main-content">
            <h4>Rosululloh</h4>
            <h1>Muhammad <span>SAW</span></h1>
            <p>
              Nabi Muhammad SAW lahir pada Senin, 12 Rabiul Awal Tahun Gajah atau
              570 Masehi di Kota Makkah, yang sekarang diperingati sebagai Hari
              Maulid Nabi Muhammad.<span id="more"
                >Tekan tombol di bawah ini untuk membaca lebih lanjut.</span
              >
              <span id="extra" style="display: none"
                >Ayah Nabi Muhammad adalah Abdullah dan ibunya adalah Aminah.
                Kelahiran Nabi Muhammad pada tahun Gajah, tahun yang juga ditandai
                dengan peristiwa serangan Abrahah dan pasukan gajahnya ke
                Ka'bah.</span
              >
            </p>
            <button onclick="showMore()" class="read-more">Read More</button>
            <div class="social">
              <a href=""></a>
            </div>
          </div>
        </section>
        <!-- js -->
        <script src="script.js"></script>
      </body>
</html>
