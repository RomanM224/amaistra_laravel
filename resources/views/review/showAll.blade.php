@extends('layouts.main')

@section('title', 'Новости')

@section('custom_css')
<link rel="stylesheet" href="{{ asset('css/review.css') }}">
@endsection

@section('content')
<div class="reviews_block">
    <div class="reviews">
        @foreach($reviews as $review)
        <div class="review">
            <div class="review_row_90">
                <div class="review_column_100">
                    <img src="{{ asset($review->img) }}" class="review_img" alt="">
                    <div class="review_text_one">{!! $review->text !!} </div>
                    <div class="review_button_block">
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection