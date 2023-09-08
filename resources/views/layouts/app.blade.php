<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">
        <link href="/css/sb-admin-2.min.css" rel="stylesheet">
        <link href="/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script>
      function formatNumber(n) {
        // format number 1000000 to 1,234,567
        return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, "");
      }

      function formatCurrency(input, currency, blur) {
        // appends $ to value, validates decimal side
        // and puts cursor back in right position.
        // get input value
        var input_val = input.value;
        // don't validate empty input
        if (input_val === "") {
          return;
        }

        // original length
        var original_len = input_val.length;

        // initial caret position
        var caret_pos = input.selectionStart;

        // check for decimal
        if (input_val.indexOf(".") >= 0) {
          // get position of first decimal
          // this prevents multiple decimals from
          // being entered
          var decimal_pos = input_val.indexOf(".");

          // split number by decimal point
          var left_side = input_val.substring(0, decimal_pos);
          var right_side = input_val.substring(decimal_pos);

          // add commas to left side of number
          left_side = formatNumber(left_side);

          // validate right side
          right_side = formatNumber(right_side);

          // On blur make sure 2 numbers after decimal
          if (blur === "blur") {
            right_side += "00";
          }

          // Limit decimal to only 2 digits
          right_side = right_side.substring(0, 2);

          // join number by .
          input_val = currency + left_side + "." + right_side;
        } else {
          // no decimal entered
          // add commas to number
          // remove all non-digits
          input_val = formatNumber(input_val);
          input_val = currency + input_val;

          // final formatting
          if (blur === "blur") {
            input_val += ".00";
          }
        }

        // send updated string to input
        input.value = input_val;

        // put caret back in the right position
        var updated_len = input_val.length;
        caret_pos = updated_len - original_len + caret_pos;
        input.setSelectionRange(caret_pos, caret_pos);
      }
    </script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>
                    <p>Email : syahrulfirdaus781@gmail.com, password: 12345678</p>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

    </div>
        <main>
            @yield('content')
        </main>

    <script src="/vendor/jquery/jquery.min.js"></script>
        <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="/js/sb-admin-2.min.js"></script>
        <script src="/vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>
        <script src="/js/demo/datatables-demo.js"></script>

    </body>
    </html>