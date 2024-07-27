@extends('layouts.app')

@section('content')
    <div id="login" class="overlay">
        <div class="login-content">
            <h2>ログイン</h2>
            <form action method="post">
                <dl>
                    <dd>
                        <input type="mail" name="address" placeholder="メールアドレス">
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

    <div class="eye">
        <img src="{{ asset('cafe/img/eyecatch.jpg') }}" alt="Eye Catch">
    </div>

    <div class="anata">
        <h1>あなたの<br>好きな空間を作る。</h1>
    </div>

    <div class="car">
        <div class="info">
            <div class="info-photo">
                <img src="{{ asset('cafe/img/cafe1.jpg') }}" alt="Cafe 1">
            </div>
            <div class="info-text">
                <p>東京<br>車で15分</p>
            </div>

            <div class="info-photo2">
                <img src="{{ asset('cafe/img/cafe2.jpg') }}" alt="Cafe 2">
            </div>
            <div class="info-text2">
                <p>神奈川<br>車で30分</p>
            </div>

            <div class="info-photo3">
                <img src="{{ asset('cafe/img/cafe3.jpg') }}" alt="Cafe 3">
            </div>
            <div class="info-text3">
                <p>愛知<br>車で1時間</p>
            </div>

            <div class="info-photo4">
                <img src="{{ asset('cafe/img/cafe4.jpg') }}" alt="Cafe 4">
            </div>
            <div class="info-text4">
                <p>京都<br>車で40分</p>
            </div>

            <div class="info-photo5">
                <img src="{{ asset('cafe/img/cafe5.jpg') }}" alt="Cafe 5">
            </div>
            <div class="info-text5">
                <p>岡山<br>車で1.5時間</p>
            </div>

            <div class="info-photo6">
                <img src="{{ asset('cafe/img/cafe6.jpg') }}" alt="Cafe 6">
            </div>
            <div class="info-text6">
                <p>鹿児島<br>車で50分</p>
            </div>

            <div class="info-photo7">
                <img src="{{ asset('cafe/img/cafe7.jpg') }}" alt="Cafe 7">
            </div>
            <div class="info-text7">
                <p>沖縄<br>車で2時間</p>
            </div>
        </div>

        <div class="loke" id="start">
            <div class="suki">
                <h2>好きなロケーションを選ぼう</h2>
            </div>

            <div class="intro1-photo">
                <img src="{{ asset('cafe/img/intro1.jpg') }}" alt="Intro 1">
            </div>
            <div class="intro1-text">
                <p>クラシック</p>
            </div>

            <div class="intro2-photo">
                <img src="{{ asset('cafe/img/intro2.jpg') }}" alt="Intro 2">
            </div>
            <div class="intro2-text">
                <p>バー</p>
            </div>

            <div class="intro3-photo">
                <img src="{{ asset('cafe/img/intro3.jpg') }}" alt="Intro 3">
            </div>
            <div class="intro3-text">
                <p>キャンプ</p>
            </div>

            <div class="intro4-photo">
                <img src="{{ asset('cafe/img/intro4.jpg') }}" alt="Intro 4">
            </div>
            <div class="intro4-text">
                <p>リゾート</p>
            </div>
        </div>

        <div class="goto">
            <div class="goto-photo">
                <img src="{{ asset('cafe/img/goto.jpg') }}" alt="Go To Eats">
            </div>

            <div class="goto-text">
                <p class="goto-text1">Go To Eats</p>
                <p class="goto-text2">キャンペーンを利用して、全国で食事しよう。<br>いつもと違う景色に囲まれてカラダもココロもリフレッシュ。</p>
            </div>
        </div>

        <div class="cafe" id="start2">
            <div class="cafe-text">
                <h2>カフェ作りを体験しよう</h2>
                <p>お店のエキスパートが案内するユニークな体験 (直接対面型またはオンライン)</p>
            </div>
            <div class="cafe-photos">
                <div class="cafe-photo">
                    <img src="{{ asset('cafe/img/exp1.jpg') }}" alt="Job Experience">
                    <p><span>ジョブ体験</span><br>カフェカウンターを体験しよう。</p>
                </div>
                <div class="cafe-photo">
                    <img src="{{ asset('cafe/img/exp2.jpg') }}" alt="Recipe Experience">
                    <p><span>レシピ体験</span><br>美味しいレシピを考えてみよう。</p>
                </div>
                <div class="cafe-photo">
                    <img src="{{ asset('cafe/img/exp3.jpg') }}" alt="Promotion Experience">
                    <p><span>プロモーション体験</span><br>お店の宣伝を手伝ってみよう。</p>
                </div>
            </div>
        </div>

        <div class="host">
            <h2>全国のホストに仲間入りしよう</h2>

            <div class="host1-photo">
                <img src="{{ asset('cafe/img/host1.jpg') }}" alt="Host 1">
            </div>
            <div class="host1-text">
                <p>ビジネス</p>
            </div>

            <div class="host2-photo">
                <img src="{{ asset('cafe/img/host2.jpg') }}" alt="Host 2">
            </div>
            <div class="host2-text">
                <p>コミュニティ</p>
            </div>

            <div class="host3-photo">
                <img src="{{ asset('cafe/img/host3.jpg') }}" alt="Host 3">
            </div>
            <div class="host3-text">
                <p>食べ歩き</p>
            </div>
        </div>
    </div>
@endsection