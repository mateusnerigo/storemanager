@if (session('current_user') != '')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <title>@yield('title')</title>

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/buttons.css') }}">
  <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
  <link rel="stylesheet" href="{{ asset('css/tables.css') }}">
</head>
<body class="app">
  <x-navbar></x-navbar>
  <div class="content">
    @hasSection ('content')
        @yield('content')
    @endif
  </div>
</body>
</html>

@else 
<script type="text/javascript">
  window.location = "/";
</script>
@endif