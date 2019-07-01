<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css">
  {{--
  <script rel="stylesheet" href="js/jquery-3.4.1.min.js"></script> --}} {{--
  <script src="{{ asset('js/jquery-3.4.1.min.js') }}" defer></script> --}}
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <script src="{{asset('js/bootstrap.js')}}"></script>
  {{-- <script src="js/bootstrap-datepicker.min.js"></script> --}}

  <title>Inventory products</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

  <!-- Styles -->
  {{--
  <link href="{{ asset('public/css/bootstrap.css') }}" rel="stylesheet"> --}}
</head>

<body>
  @include('navbar')
  @yield('scripts')

  <script>
    $(document).ready(function() {
      // alert("asfgffs");
    });
    // $(function () {
  </script>
   {{--
  <div class="flex-center position-ref full-height">
    @if (Route::has('login'))
    <div class="top-right links">
      @auth
      <a href="{{ url('/home') }}">Home</a> @else
      <a href="{{ route('login') }}">Login</a> @if (Route::has('register'))
      <a href="{{ route('register') }}">Register</a> @endif @endauth
    </div>
    @endif
  </div> --}} @yield('content')

</body>

</html>
