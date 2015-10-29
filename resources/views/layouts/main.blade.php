<!doctype html>

<html>
<head>
  <title>@yield('title')</title>
  <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="/css/app.css"></link>
</head>
<body>
  @include('components.navbar')
  @yield('content')
</body>
</html>
