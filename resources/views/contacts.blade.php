@extends('layouts.main')

@section('title', 'Заказы')

@section('custom_css')
<link rel="stylesheet" href="{{ asset('css/contacts.css') }}">
@endsection

@section('content')
<div class="page_contacts">

        <div class="title">
            <h1>КОНТАКТЫ</h1>
        </div>

        <div class="services">
            <div class="contacts_service">
                <h4>Информация по поводу услуг:</h4>
                <div class="service">
                    <img src="{{ asset('images/icons/skype.png') }}" class="icon">
                    <p class="service_text">alisam.skype</p>
                </div>
                <div class="service">
                    <img src="{{ asset('images/icons/viber.png') }}" class="icon">
                    <p class="service_text">+22 222 222 222</p>
                </div>
                <div class="service">
                    <img src="{{ asset('images/icons/whatsapp.png') }}" class="icon">
                    <p class="service_text">+22 222 222 222</p>
                </div>
                <div class="service">
                    <img src="{{ asset('images/icons/viber.png') }}" class="icon">
                    <p class="service_text">+22 222 222 222</p>
                </div>

            </div>

            <div class="contacts_follow">
                <h4>Следите за нами:</h4>
                <a href="https://www.facebook.com/" class="link_contacts">
                    <img src="{{ asset('images/icons/facebook.png') }}" class="icon_follow_top">
                </a>
                <a href="https://www.instagram.com/" class="link_contacts">
                    <img src="{{ asset('images/icons/instagram.png') }}" class="icon_follow">
                </a>
                <a href="https://vk.com/?lang=en" class="link_contacts">
                    <img src="{{ asset('images/icons/VK.png') }}" class="icon_follow">
                </a>

            </div>
        </div>

</div>
@endsection