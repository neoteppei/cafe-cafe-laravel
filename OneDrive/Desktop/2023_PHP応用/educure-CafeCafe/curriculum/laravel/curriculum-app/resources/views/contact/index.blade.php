<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問い合わせ</title>
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <div class="contact-box">
        <h2>お問い合わせ</h2>
        <form action="{{ route('contact.store') }}" method="post">
            @csrf
            <h3>下記の項目をご記入の上送信ボタンを押してください</h3>
            <p>送信頂いた件につきましては、当社より折り返しご連絡を差し上げます。</p>
            <p>なお、ご連絡までに、お時間を頂く場合もございますので予めご了承ください。</p>
            <p><span class="kome">*</span>は必須項目となります。</p>
            <dl>
                <dt><label for="name">氏名</label><span class="kome">*</span></dt>
                <dd><input type="text" name="name" id="name" value="{{ old('name') }}"></dd>
                @if ($errors->has('name'))<p class="error">{{ $errors->first('name') }}</p>@endif

                <dt><label for="kana">フリガナ</label><span class="kome">*</span></dt>
                <dd><input type="text" name="kana" id="kana" value="{{ old('kana') }}"></dd>
                @if ($errors->has('kana'))<p class="error">{{ $errors->first('kana') }}</p>@endif

                <dt><label for="tel">電話番号</label><span class="kome">*</span></dt>
                <dd><input type="text" name="tel" id="tel" value="{{ old('tel') }}"></dd>
                @if ($errors->has('tel'))<p class="error">{{ $errors->first('tel') }}</p>@endif

                <dt><label for="email">メールアドレス</label><span class="kome">*</span></dt>
                <dd><input type="text" name="email" id="email" value="{{ old('email') }}"></dd>
                @if ($errors->has('email'))<p class="error">{{ $errors->first('email') }}</p>@endif

                <dt>
                    <h3><label for="body">お問い合わせ内容をご記入ください<span class="kome">*</span></label></h3>
                </dt>
                <dd><textarea name="body" id="body">{{ old('body') }}</textarea></dd>
                @if ($errors->has('body'))<p class="error">{{ $errors->first('body') }}</p>@endif

                <dd><button type="submit">送信</button></dd>
            </dl>
        </form>

        <h2>お問い合わせ一覧</h2>
        <table border="1">
            <thead>
                <tr>
                    <th>氏名</th>
                    <th>フリガナ</th>
                    <th>電話番号</th>
                    <th>メールアドレス</th>
                    <th>お問い合わせ内容</th>
                    <th>作成日時</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($contacts as $contact)
                    <tr>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->kana }}</td>
                        <td>{{ $contact->tel }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->body }}</td>
                        <td>{{ $contact->created_at }}</td>
                        <td>
                            <a href="{{ route('contact.edit', $contact->id) }}">編集</a>
                            <form action="{{ route('contact.destroy', $contact->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('本当に削除しますか？');">削除</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7">お問い合わせはありません。</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>