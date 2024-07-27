<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問い合わせ確認</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/confirm.css') }}">
</head>
<body>
    <div class="contact-box">
        <h2>お問い合わせ</h2>
        <p>下記の内容をご確認の上送信ボタンを押してください</p>
        <p>内容を訂正する場合は戻るを押してください。</p>
        <form action="{{ route('contact.send') }}" method="post">
            @csrf
            <dl>
                <dt>氏名</dt>
                <dd>{{ $formData['name'] }}</dd>

                <dt>フリガナ</dt>
                <dd>{{ $formData['kana'] }}</dd>

                <dt>電話番号</dt>
                <dd>{{ $formData['tel'] }}</dd>

                <dt>メールアドレス</dt>
                <dd>{{ $formData['email'] }}</dd>

                <dt>お問い合わせ内容</dt>
                <dd>{{ nl2br(e($formData['body'])) }}</dd>
            </dl>
            <dd class="button">
                <button type="submit">送信</button>
                <button type="button" onclick="history.back();" style="background-color:white; color:green; border: 2px solid green;">戻る</button>
            </dd>
        </form>
    </div>
</body>
</html>