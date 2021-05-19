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
                        <a class="post_button_admin" href="{{ route('editPostAdmin', $post->id) }}">Изменить</a>
                        <a class="post_button_admin_delete delete-btn" href="{{ route('deletePost', $post->id) }}">Удалить</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.content-wrapper -->

@endsection