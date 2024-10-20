<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon" />
    <title>Dashboard</title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/lineicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/materialdesignicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/fullcalendar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
    @stack('backend_css')
  </head>
  <body>

    <section>
    <div class="container p-0" style="overflow-x: hidden">
      <div class="row ">
          <!-- end col -->
          <div class="col-lg-6 mx-auto ">
            <div class="signin-wrapper">
              <div class="form-wrapper">
                <h6 class="mb-15">Sign In Form</h6>
                <p class="text-sm mb-25">
                  Start creating the best possible user experience for you
                  customers.
                </p>

                <form method="POST" action="{{ route('register') }}">
                  @csrf

                  <div class="row">
                    <div class="col-12">
                      {{-- <div class="input-style-1">
                        <label>Email</label>
                        <input type="email" placeholder="Email">
                      </div> --}}

                      <!-- Name -->
                      <div class="input-style-1">
                          <x-input-label for="name" :value="__('Name')" />
                          <x-text-input placeholder="name" id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                          <x-input-error :messages="$errors->get('name')" class="mt-2" />
                      </div>


                      <!-- Email Address -->
                      <div class="input-style-1">
                          <x-input-label for="email" :value="__('Email')" />
                          <x-text-input placeholder="email"  id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                          <x-input-error :messages="$errors->get('email')" class="mt-2" />
                      </div>
                    </div>


                    <!-- Password -->
                      <div class=" input-style-1">
                          <x-input-label for="password" :value="__('Password')" />

                          <x-text-input placeholder="password" id="password" class="block mt-1 w-full"
                                          type="password"
                                          name="password"
                                          required autocomplete="new-password" />

                          <x-input-error :messages="$errors->get('password')" class="mt-2" />
                      </div>


                      <!-- Confirm Password -->
                      <div class="input-style-1">
                          <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                          <x-text-input placeholder="confirm password" id="password_confirmation" class="block mt-1 w-full"
                                          type="password"
                                          name="password_confirmation" required autocomplete="new-password" />

                          <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                      </div>

                    <div class="col-12">
                      <div class="button-group d-flex justify-content-center flex-wrap">
                        <button class="main-btn primary-btn btn-hover w-100 text-center">
                          Sign In
                        </button>
                      </div>
                    </div>
                  </div>
                  <!-- end row -->
                </form>
                <div class="singin-option pt-40">
                  <p class="text-sm text-medium text-dark text-center">
                    Already create an account?
                    <a href="{{ route('login') }}">Login</a>
                  </p>    
                </div>
              </div>
            </div>
          </div>
          <!-- end col -->
      </div>
    </div>
  </section>
    
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/js/dynamic-pie-chart.js') }}"></script>
    <script src="{{ asset('assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/fullcalendar.js') }}"></script>
    <script src="{{ asset('assets/js/jvectormap.min.js') }}"></script>
    <script src="{{ asset('assets/js/world-merc.js') }}"></script>
    <script src="{{ asset('assets/js/polyfill.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @stack('js_contains');
  </body>
</html>

