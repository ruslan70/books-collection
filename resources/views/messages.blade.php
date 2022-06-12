<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1><a href="/messages">Mini Bücher Kollektion</a></h1>

</body>
</html> -->


<!--extend layout master.blade.php -->
 
@extends('layouts/master')
 
<!--sets value for section title to "Mini Bücher Kollektion" (section title is used in messages.blade.php) -->
@section('title', 'Mini Bücher Kollektion')

<!--starts section content, defines some html for section content and end section content
ts value for section title to "Mini Bücher Kollektion" (section content is used in messages.blade.php) -->
@section('content')
 
<h2>Recent messages:</h2>
 
@endsection
