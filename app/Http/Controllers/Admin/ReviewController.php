<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function showAll(){
        $reviews = Review::all();
        
        return view("review.showAll", ['reviews' => $reviews]);
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'text' => 'required',
        ]);

        $review = new Review();
        $review->img = $request->img;
        $review->text = $request->text;
        $review->save();
        return redirect()->back()->withSuccess('Отзыв Сохранена');
    }

    public function showAllAdmin(){
        $reviews = Review::all();
        
        return view("admin.review.showAll", ['reviews' => $reviews]);
    }

    public function edit($id){
        $review = Review::find($id);
        
        return view("admin.review.edit", ['review' => $review]);
    }

    public function reviewEdit(Request $request){
        $validateData = $request->validate([
            'text' => 'required',
        ]);
        $review = Review::find($request->id);
        $review->img = $request->img;
        $review->text = $request->text;
        $review->save();
        return redirect()->back()->withSuccess('Новость Изменена');
    }

    public function delete($id) {
        $review = Review::find($id);
        $review->delete();
        return redirect()->route('showAllReviewsAdmin')->withSuccess('Новость Удалина');
    }
}
