@extends('layouts.app')

@section('content')
    <div id="login" class="overlay" style="display:none;">
        <div class="login-content">
            <h2>ログイン</h2>
            <form action="{{ route('login') }}" method="post">
                @csrf
                <dl>
                    <dd>
                        <input type="email" name="address" placeholder="メールアドレス">
                    </dd>
                    <dd>
                        <input type="password" name="pass" placeholder="パスワード">
                    </dd>
                    <dd>
                        <button type="submit">送信</button>
                    </dd>
                </dl>
                <dl class="sns">
                    <dd>
                        <button name="twitter">
                            <img src="{{ asset('cafe/img/twitter.png') }}">
                        </button>
                    </dd>
                    <dd>
                        <button name="facebook">
                            <img src="{{ asset('cafe/img/fb.png') }}">
                        </button>
                    </dd>
                    <dd>
                        <button name="google">
                            <img src="{{ asset('cafe/img/google.png') }}">
                        </button>
                    </dd>
                    <dd>
                        <button name="apple">
                            <img src="{{ asset('cafe/img/apple.png') }}">
                        </button>
                    </dd>
                </dl>
            </form>
        </div>
    </div>
@endsection