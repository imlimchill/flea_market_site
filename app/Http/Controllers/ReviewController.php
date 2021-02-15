<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;


class ReviewController extends Controller
{
    public function index(){
        $reviews = Review::all();
        return view('reivews.index',compact('reviews'));

    }

    public function create(){
        
        return view('reviews.create');

    }
    public function store(Request $request){
        $review = Review::create([
            'title'=>$request->input('title'),
            'story'=>$request->input('story')
        ]);
        return redirect('/review',$review->id);
    }
    public function show(Review $review){

        return view('reviews.show',compact('review'));
    }
    public function edit(Review $review){

        return view('reviews.edit',compact('review'));
    }
    public function update(Review $review){

        $review->update(request(['title', 'story']));

         /*
        $board->update([
            'title'=>request('title'),
            'story'=>request('story')
        ]);
        */

        return redirect('/review/'.$review->id);
    }
    public function destroy(Review $review){

        $board->delete();

        return redirect('/review');
    }



}