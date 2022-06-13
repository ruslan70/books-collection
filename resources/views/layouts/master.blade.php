<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
   <!-- Styles -->
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   <!-- hier wird der Wert von der section "title" eines blade templates ausgefüllt,
   welches dieses layout "extended" -->
   <title>@yield('title')</title>
</head>
<body>
<h1>Home</h1>
<div class="container mt-3">
<h1>Text</h1>
  <p>Text2.</p>
  <div class="row">
   
    <div id="box" class="col-md-6 pt-3">col1</div>
    <div id="box" class="col-md-6 bg-primary text-dark">col2</div>
  </div>
   <div class="row">
    
    <div class="col p-3 bg-primary text-dark">col3</div>
    <div class="col p-3 bg-warning text-dark">col4</div>
  </div>
</div>
   <!-- hier wird auch der Wert von der section "title" eines blade templates ausgefüllt,
   welches dieses layout "extended" -->
   <h1><a href="/messages">@yield('title')</a></h1>
   <!-- hier wird der Wert von der section "content" eines blade templates ausgefüllt,
   welches dieses layout "extended" -->
   @yield('content')
   <!-- hier wird die php Funktion date() aufgerufen mit dem Format-Pattern 'd.m.Y'
    und im html ausgegeben-->
   <div><b>Dummy Footer: {{date('d.m.Y')}}</b></div>   
</body>
</html>