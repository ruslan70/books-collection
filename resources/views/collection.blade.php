
<!--extend layout master.blade.php -->
 
@extends('layouts/master')

<!--sets value for section title to "Mini Bücher Kollektion" (section title is used in messages.blade.php) -->
@section('title', 'Kollektion')

<!--starts section content, defines some html for section content and end section content
ts value for section title to "Mini Bücher Kollektion" (section content is used in messages.blade.php) -->
@section('content2')


<h1>Meine Kollektion</h1>


<h2>Recent books:</h2>

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
                    <a href="/book/{{$book->id}}">{{$book->title}}:</a>
                </b><br>
                {{$book->author}}<br>
                {{$book->genre}}<br>
                {{$book->published}}<br>
                {{$book->content}}<br>
            
                
            

                <span>Create: {{$book->created_at->diffForHumans()}}</span>
                    <br> 
                

                <!-- {{-- $feedback->feedback --}}<br> -->

                <a href="/bookDetails/{{$book->id}}">Update from "{{$book->title}}":</a>
                    <span>{{ $book->updated_at->diffForHumans() }}</span>
                    <a href="/bookDetails/{{$book->id}}" class="btn btn-primary">To Edit</a>
                
                
                <h3>Create feedback:</h3>
    
                <form action="/collection" method="post">
                    <input type="text" name="feedback" placeholder="Feedback">
                    
                    <!-- this blade directive is necessary for all form posts somewhere in between
                        the form tags -->
                    @csrf
                    <button class="btn btn-primary" type="submit">Submit</button>
                    
                </form>
                </b><br>


            
                </b><br>

            </li>
        @endforeach

    </ul>
 
@endsection