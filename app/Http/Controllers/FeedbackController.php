<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Feedback;

class FeedbackController extends Controller
{
    //

    public function showAll() {

        $feedback = Feedback::all()->sortByDesc('created_at');

        return view('collection', ['feedback' => $feedback]);
    }



    public function feedback(Request $request) {
 
        // we create a new book-Object
        $feedback = new Feedback();
        // we set the properties title and content
        // with the values that we got in the post-request
        $feedback->books_id = $request->book_id;
       
        
   
   
        // we save the new book-Object in the books
        // table in our database
        $feedback->save();
   
        // at the end we make a redirect to the url /books
        return redirect('/collection');        
    }
}
