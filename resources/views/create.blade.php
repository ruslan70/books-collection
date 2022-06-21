
<!--extend layout master.blade.php -->
 
@extends('layouts/master')
 
<!--sets value for section title to "Mini Bücher Kollektion" (section title is used in messages.blade.php) -->
@section('title', 'Eintrag')

<!--starts section content, defines some html for section content and end section content
ts value for section title to "Mini Bücher Kollektion" (section content is used in messages.blade.php) -->
@section('content4')

<h2>Create new book: </h2>
 
<form action="/collection" method="post">
   <input type="text" name="title" placeholder="Title">
   <input type="text" name="author" placeholder="Author">
   <input type="text" name="genre" placeholder="Genre">
   <input type="text" name="published" placeholder="Published">
   <input type="text" name="content" placeholder="Content">
   <!-- this blade directive is necessary for all form posts somewhere in between
       the form tags -->
   @csrf
   <button class="btn btn-primary" type="submit">Submit</button>
 
</form>

 

 
@endsection
