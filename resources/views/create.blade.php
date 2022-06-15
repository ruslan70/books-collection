
<!--extend layout master.blade.php -->
 
@extends('layouts/master')
 
<!--sets value for section title to "Mini Bücher Kollektion" (section title is used in messages.blade.php) -->
@section('title', 'Meine Bücher Kollektion')

<!--starts section content, defines some html for section content and end section content
ts value for section title to "Mini Bücher Kollektion" (section content is used in messages.blade.php) -->
@section('content')

<h2>Create new book: </h2>
 
<form action="/create" method="post">
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

 
<h2>Recent book:</h2>

<ul>
    <!-- loops through the $books, that this blade template
    gets from MessageController.php. for each element of the loop which
    we call $book we print the properties title, content
    and created_at in an <li> element -->
    @foreach ($books as $book) 
        <li>
            <b>
                    <!-- this link to the message details is created dynamically
                and will point to /messages/1 for the first message -->
                <a href="/collection/{{$book->id}}">{{$book->title}}:</a>
            </b><br>
            {{$book->author}}<br>
            {{$book->genre}}<br>
            {{$book->published}}<br>
            {{$book->content}}<br>
            {{$book->created_at->diffForHumans()}}           
        </li>
    @endforeach
</ul>
 
@endsection