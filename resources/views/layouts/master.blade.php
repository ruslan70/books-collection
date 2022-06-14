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
   <style>





</style>
</head>
<body>
<h1>Home</h1>
<div class="container py-4 mt-3">
<div id="row" class="row">
  <div class="column" style="background-color:#E0D9B4;">
    <h2>Column 1</h2>
    <p>Some text..</p>
  </div>
  
  <div class="column" style="background-color:#bbb;">
    <h2>Column 2</h2>
    <p>Some text..</p>
  </div>
  
  <div class="column" style="background-color:#ccc;">
    <h2>Column 3</h2>
    <p>Some text..</p>
  </div>
  
  <div class="column" style="background-color:#E0D9B4;">
    <h2>Column 4</h2>
    <p>Some text..</p>
  </div>
</div>
<h1>Text</h1>
  <p>Text2.</p>
  <div class="row align-items-md-stretch">
   
    <div id="box" class="col-md-6 pt-3">col1</div>
      <div class="h-100 p-5 rounded-3">
        <p>Text</p>
      </div>
    <div id="box" class="col-md-6 pt-3">col2</div>
      <div class="h-100 p-5 rounded-3">
        <p>Text</p>
      </div>
  </div>
   <div class="row align-items-md-stretch">
    
    <div id="box" class="col-md-6 pt-3">col3</div>
    <div id="box" class="col-md-6 pt-3">col4</div>
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