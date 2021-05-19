@extends('layouts.admin')


@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Создать Отзыв</h1>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <!-- /.content-header -->
    <div class="container-fluid">
        @if (session('success'))
        <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
        </div>
        @endif
        <div class="row">
            <div class="col-8 ml-3">
                @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{ route('reviewEdit') }}" method="POST">
                    @csrf

                    <input type="hidden" name="id" value="{{$review->id}}">
                    <div class="form-group">
                        <label for="text">Текст</label>
                        <textarea class="form-control" id="text" name="text" rows="3">{!! $review->text !!}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="feature_image">Choose Image</label>
                        <img src="/{{ $review['img'] ?? ''}}" alt="" class="imgUploaded" width="400" style="display:block">
                        <input type="text" name="img" class="form-control" id="feature_image" name="feature_image" value="{{ $review->img }}" readonly>
                        <a href="" class="popup_selector btn btn-info mt-2 mb-4" data-inputid="feature_image">Select Image</a>
                    </div>
                    <button type="submit" class="btn btn-primary mb-4">Сохранить</button>
                </form>
            </div>
        </div>
    </div>

</div>
<!-- /.content-wrapper -->

@endsection