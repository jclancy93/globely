<!doctype html>

<html>
<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
  <script src="https://use.typekit.net/lni5ddu.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>
  <script src="/js/popmotion.global.min.js"></script>
  <link rel="stylesheet" type="text/css" href="/css/app.css"></link>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  @yield('javascript')
  @yield('css')
</head>
<body>
  @include('components.navbar')
  @yield('content')
  @include('components.footer')
</body>
</html>
