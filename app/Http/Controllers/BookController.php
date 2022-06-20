<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;


class BookController extends Controller
{ 
    
    
    public function showAll() {
 
        // gets all the entries from table books
        // and gets an array of objects as a return value.
        // we store this return value in the variable $books
        $books = Book::all()->sortByDesc('created_at');
        

        // $feedbacks = Feedback::all()->sortByDesc('created_at');
        // dd($feedbacks);

        // This line would output the books in the UI/Browser
        // and stop the script execution.
        // good for debugging ;o)
        //dd($books);
  
        // This function returns a view.
        // here the blade template engine works its magic again
        // through which we can pass the $books array to the view.
        // we can pass it as an optional second parameter (
        // associative array)
        return view('collection', ['books' => $books]); //  ,'feedbacks' => $feedbacks

  
    }
 
    public function create(Request $request) {
 
        // we create a new book-Object
        $book = new Book();
        // we set the properties title and content
        // with the values that we got in the post-request
        $book->title = $request->title;
        $book->author = $request->author;
        $book->genre = $request->genre;
        $book->published = $request->published;
        $book->content = $request->content;
        
   
   
        // we save the new book-Object in the books
        // table in our database
        $book->save();
   
        // at the end we make a redirect to the url /books
        return redirect('/collection');        
    }

    public function details($id) {
 
        // ask the database for the book with the ID that we got
        // as a parameter. It is the same ID that we used to
        // generate the links to the book details
        // and the same ID that web.php took out of the link and
        // "passed it on" to the controller   
        $book = Book::findOrFail($id);

        // DEVONLY
        // $book = Book::find(1);
 
        $feedbacks = $book->feedbacks;
         
        dd($feedbacks);
       
        // we return the view bookDetails.blade.php
        // and we also pass it the book-Object that we got
        // back from the function findOrFail   
        return view('bookDetails', ['book' => $book]);
    }



    public function delete($id) {
 
        // ask the database for the message with the ID that we got
        // as a parameter. It is the same ID that we used to
        // generate the links to the message details
        // and the same ID that web.php took out of the link.
        // then we directly call the delete-method of
        // the Message-OBject that we get back from the
        // findOrFail function.
        $result = Book::findOrFail($id)->delete();
  
        // after that we redirect to the message list again  
        return redirect('/collection');        
    } 

    public function update(Request $request, $id) {
 
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'author' => 'required',
            'genre' => 'required',
            'published' => 'required'
        ]);
  
        $data = Book::findOrFail($id);
        $data->title = $request->title;
        $data->content = $request->content;
        $data->author = $request->author;
        $data->genre = $request->genre;
        $data->published = $request->published;
        $data->save();
  
        return redirect('/collection');
    }
 
 
 
 
}
