@extends('layouts.main')

@section('title', 'Новости')

@section('custom_css')
<link rel="stylesheet" href="{{ asset('css/post.css') }}">
@endsection

@section('content')
<div class="posts_block">
    <div class="posts">
        <div class="post">
            <div class="post_row_90">
                <div class="post_column_100">
                    <img src="{{ asset($post->img) }}" class="post_img" alt="">

                    <div class="title_block">
                        <h2>{{$post->title}}</h2>
                    </div>

                    <div class="post_text_one">{!! $post->text !!} </div>
                    <div class="post_button_block">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection