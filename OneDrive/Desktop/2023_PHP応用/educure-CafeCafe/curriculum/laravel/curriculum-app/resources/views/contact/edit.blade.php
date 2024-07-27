<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問い合わせ編集</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/contact.css') }}">
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <div class="contact-box">
        <h2>お問い合わせ編集</h2>
        <form action="{{ route('contact.update', $contact->id) }}" method="post">
            @csrf
            <dl>
                <dt><label for="name">氏名</label><span class="kome">*</span></dt>
                <dd><input type="text" name="name" id="name" value="{{ old('name', $contact->name) }}"></dd>
                @error('name') <p class="error">{{ $message }}</p> @enderror

                <dt><label for="kana">フリガナ</label><span class="kome">*</span></dt>
                <dd><input type="text" name="kana" id="kana" value="{{ old('kana', $contact->kana) }}"></dd>
                @error('kana') <p class="error">{{ $message }}</p> @enderror

                <dt><label for="tel">電話番号</label><span class="kome">*</span></dt>
                <dd><input type="text" name="tel" id="tel" value="{{ old('tel', $contact->tel) }}"></dd>
                @error('tel') <p class="error">{{ $message }}</p> @enderror

                <dt><label for="email">メールアドレス</label><span class="kome">*</span></dt>
                <dd><input type="text" name="email" id="email" value="{{ old('email', $contact->email) }}"></dd>
                @error('email') <p class="error">{{ $message }}</p> @enderror

                <dt><label for="body">お問い合わせ内容</label><span class="kome">*</span></dt>
                <dd><textarea name="body" id="body">{{ old('body', $contact->body) }}</textarea></dd>
                @error('body') <p class="error">{{ $message }}</p> @enderror

                <dd><button type="submit">更新</button></dd>
            </dl>
        </form>
    </div>
</body>
</html>