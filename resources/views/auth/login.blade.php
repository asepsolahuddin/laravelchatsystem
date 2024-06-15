{{-- <!DOCTYPE html>
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
    @if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ session('status') }}
    </div>
@endif --}}
  <x-guest-layout>
    <x-authentication-card>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <section class="vh-100">
          <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
              <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                  class="img-fluid" alt="Sample image">
              </div>
              <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form method="POST" action="{{ route('login') }}"> 
                  @csrf
                  <div class="divider d-flex align-items-center my-4">
                    <h1 class="text-center fw-bold mb-0">Login</h1>
                  </div>
        
                  <!-- Email input -->
                  <div data-mdb-input-init class="form-outline mb-2">
                    <x-input type="email" id="email" name="email" class="form-control form-control-lg"
                      placeholder="Enter a valid email address" />
                  </div>
        
                  <!-- Password input -->
                  <div data-mdb-input-init class="form-outline mb-3">
                    <x-input type="password" id="password" name="password" class="form-control form-control-lg"
                      placeholder="Enter password" />
                  </div>
        
                  <div class="d-flex justify-content-between align-items-center">
                    <!-- Checkbox -->
                      <label for="remember_me" class="flex items-center">
                        <x-checkbox id="remember_me" name="remember" />
                        <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                      </label>
                    <a href="#!" class="text-body">Forgot password?</a>
                  </div>
        
                  <div class="text-center text-lg-start mt-4 pt-2">
                    <x-button  data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg"
                      style="padding-left: 2.5rem; padding-right: 2.5rem;">
                      {{ __('Log in') }}
                    </x-button>
                    <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="{{ route('register') }}"
                        class="link-danger">Register</a></p>
                  </div>
        
                </form>
              </div>
            </div>
          </div>
        
        </section>
      
    </x-authentication-card>
</x-guest-layout>