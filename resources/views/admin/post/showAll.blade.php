@extends('layouts.admin')

@section('custom_css')
<link rel="stylesheet" href="{{ asset('css/post.css') }}">
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Новости</h1>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
        </div>
        @endif
    <div class="posts_block">
    <div class="posts">
        @foreach($posts as $post)
        <div class="post">
            <div class="post_row_90">
                <div class="post_column_100">
                    <img src="{{ asset($post->img) }}" class="post_img" alt="">

                    <div class="title_block">
                        <h2>{{$post->title}}</h2>
                    </div>

                    <div class="post_text">{{$post->description}} </div>
                    <div class="post_button_block">
                        <a class="post_button_admin" href="{{ route('showOnePostAdmin', $post->id) }}">Читать Больше</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

</div>
<!-- /.content-wrapper -->

@endsection