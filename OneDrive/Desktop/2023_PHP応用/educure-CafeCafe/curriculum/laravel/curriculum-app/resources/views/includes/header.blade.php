<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
</head>

<header>
    <div class="logo">
        <img src="{{ asset('img/logo.png') }}" alt="Logo">
    </div>

    <div class="hea-text">
        <a href="#" id="scrollToStart">はじめに</a>
        <a href="#" id="scrollToStart2">体験</a>
        <a href="{{ route('contact.index') }}">お問い合わせ</a>
    </div>

    <div class="sign">
        <a href="#" id="signInLink">サインイン</a>
    </div>
</header>

<script src="{{ asset('js/header.js') }}"></script>