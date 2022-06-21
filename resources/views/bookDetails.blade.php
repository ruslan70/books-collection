<!--extend layout master.blade.php -->
@extends('layouts.master')
 
<!--sets value for section title to "Mini Bücher Kollektion" (section title is used in messages.blade.php) -->
@section('title', 'Bücher Details')
 
<!--starts section content, defines some html for section content and end section content
ts value for section title to "Mini Bücher Kollektion" (section content is used in messages.blade.php) -->
@section('content3')
 
<h2>Book Details:</h2>

<h3>{{$book->title}}</h3>
<p>{{$book->content}}</p>
<p>{{$book->genre}}</p><br>
<p>{{$book->published}}</p><br>
<p>{{$book->content}}</p><br>

<p>{{$book->created_at->diffForHumans()}}


<form action="/collection/{{$book->id}}"  method="POST" class="form-horizontal">
                {{ csrf_field() }}
    
                <input type="hidden" name="id" class="form-id" value="{{$book->id}}">
                <input type="text" name="title" class="form-title"  value="{{ $book->title }}">
                <input type="text" name="author" class="form-author"  value="{{ $book->author }}">
                <input type="text" name="genre" class="form-genre"  value="{{ $book->genre }}">
                <input type="text" name="published" class="form-published"  value="{{ $book->published }}">
                <input type="text" name="content" class="form-content"  value="{{ $book->content }}"><br>
                
                <br>
                <button type="submit" class="btn"><i class="save"></i>Update</button><br>
                                  
</form>	
<br>
<form action="/collection/{{$book->id}}" method="post">
    @csrf
    @method('delete')
    <button class="delete" type="submit">Delete</button>
</form>




    
 
@endsection
