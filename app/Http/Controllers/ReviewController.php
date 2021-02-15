<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;


class ReviewController extends Controller
{
    public function index()
    {   
        $reviews = Review::OrderBy('created_at', 'desc') -> paginate(5);

        return view('reivew.index', [
            'reviews' => $reviews,
        ]);
    }

    public function create(){
        return view('review.create');

    }
    
    // public function store(Request $request){
    //     $review = Review::create([
    //         'title'=>$request->input('title'),
    //         'story'=>$request->input('story')
    //     ]);
    //     return redirect('/review',$review->id);
    // }

    public function store()
    {   
        request() -> validate([
            'title' => 'required',
            'body'  => 'required'            
        ]);

        $values = request(['title','body']);
        $values['user_id'] = auth() -> id();
        $review = Review::create($values);

        return redirect('/review');
    }

    public function show(Review $review)
    {   
        $user = User::find($review->id);
        
        return view('review.show', [
            'review' => $qna,
            'user' => $user
        ]);
    }

    public function edit(Review $review)
    {
        abort_unless(auth()->user()->Qnaowns($review), 403);

        return view('review.edit', [
            'review' => $qna
        ]);
    }

    public function update(Review $review){

        $review->update(request(['title', 'story']));
        return redirect('/review/'.$review->id);
    }

    public function destroy(Review $review){

        $board->delete();
        return redirect('/review');
    }



}