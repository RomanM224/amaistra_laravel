@extends('layouts.main')

@section('title', 'Заказы')

@section('custom_css')
<link rel="stylesheet" href="{{ asset('css/orders.css') }}">
@endsection

@section('content')
<div class="page_order">

    <div class="order">
        <img class="image" src="{{ asset('images/consultation.jpg') }}">
        <h3 class="title">Консультация</h3>
        <p class="text">Text text text text text text text text text text text text text text text text text
            text text text text text text text text text text text text text text text text text text text text text
            text text text text text text text text text text text text text text text text text text text text text
            text text Text text text text text text text text text text text text text text text text text text text
            text text text text text text text text text text text text text text text text text text text text text
            text text text text text text text text text text text text text text text text text text text text text</p>
        <p class="price">1000kr</p>
    </div>

    <div class="order">
        <img class="image" src="{{ asset('images/desteny_matrix.jpg') }}">
        <h3 class="title">Матрица судьбы</h3>
        <p class="text">Text text text text text text text text text text text text text text text text text
            text text text text text text text text text text text text text text text text text text text text text
            text text text text text text text text text text text text text text text text text text text text text
            text text</p>
        <p class="price">1000kr</p>
    </div>

    <div class="order">
        <img class="image" src="{{ asset('images/holegen.jpg') }}">
        <h3 class="title">Хологинетический профиль</h3>
        <p class="text">Text text text text text text text text text text text text text text text text text
            text text text text text text text text text text text text text text text text text text text text text
            text text text text text text text text text text text text text text text text text text text text text
            text text</p>
        <p class="price">1000kr</p>
    </div>

</div>
@endsection