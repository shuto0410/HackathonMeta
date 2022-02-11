<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    <title>amazon</title>
</head>
<body>
   
    <header> 
    <div class="container-fluid d-flex">
        <div class="row mt-1">

            <div class="col-lg-1 mt-1">
                <img src="{{asset('img/amazon_logo_prime.png')}}" alt="Amazonのロゴ（プライム" class="amazon-logo-size col-lg-12 mt-2">
            </div>

            <div class="mt-3 header-line-height col-lg-1">
                        <p class="location-text">お届け先</p>
                    <div class="d-flex">
                        <img src="{{asset('img/location_mark.png')}}" alt="位置情報マーク" class="location-mark-set">
                        <p class="mt-3 text-white location-address">111-1111</p>
                    </div>
            </div>
    
            <div class="col-lg-6">
                <div class="mt-2 d-flex">
                    <select name="example" class="select-size col-lg-2">
                        <option value="選択肢1">すべて</option>
                        <option value="選択肢2">選択肢2</option>
                        <option value="選択肢3">選択肢3</option>
                    </select>
                   
                        <input type="search" class="search-form-set col-lg-9">
                        <input type="submit" class="submit-button col-lg-1" value="&#9794;">
                
                </div>
            </div>
    
            
            <div class="mt-3 d-flex col-lg-3">

                <div class="col-lg-2">
                    <img src="{{asset('img/language_setupLink.png')}}" alt="言語設定に飛ぶためのボタン" class="language-setupLink-set col-lg-7">
                </div>
                
                <a class="text-white header-line-height col-lg-6" data-toggle="modal" data-target="#testModal">  
                    <p>だんのさん</p>
                    <p>アカウント＆リスト</p>
                </a>
    
                
                <div class="text-white header-line-height  col-lg-4"> 
                    <p>返品もこちら</p>
                    <p>注文履歴</p>
                </div>
                
                <div class="text-white col-lg-2"> 
                    <p>カート</p>
                </div> 
            </div>

        </div>
        
    </div>

    <div class="bg-dark text-white d-flex">
        <img src="{{asset('img/menu_link_img.png')}}" alt="全てのコンテンツを見る" class="col-lg-1">
    <div class="col-lg-7 d-flex mt-2">
        <p class="">amazonポイント:1</p>
        <p class="">ライフ</p>
        <p class="">amazonファッション</p>
        <p class="">DIY・工具</p>
        <p class="">ビューティ＆パーソナルケア</p>
        <p class="">おもちゃ＆ホビー</p>
        <p class="">再購入</p>
    </div>
        <img src="{{asset('img/amazonAudible.png')}}" alt="audibleの広告" class="col-lg-4">
    </div>

    </header>

    @yield('content')
<p>あえて空白を作っています空白を作っています空白を作っています空白を作っています</p>
    <footer>
        <div class="bg-dark text-white text-center p-1">
            <p class="mt-2">トップへ戻る</p>
        </div>

        <div class="footer-list bg-dark text-white border-bottom border-white d-flex">
            <div class="col-lg-3">
                <p>Amazonについて</p>
                <p>a</p>
                <p>a</p>
                <p>a</p>
                <p>a</p>
            </div>
            <div class="col-lg-3">
                <p>Amazonでビジネス</p>
                <p>a</p>
                <p>a</p>
                <p>a</p>
                <p>a</p>
            </div>
            <div class="col-lg-3">
                <p>Amazonでお支払い</p>
                <p>a</p>
                <p>a</p>
                <p>a</p>
                <p>a</p>
            </div>

            <div class="col-lg-3">
                <p>ヘルプ＆ガイド</p>
                <p>a</p>
                <p>a</p>
                <p>a</p>
                <p>a</p>
            </div>

        </div>
         
        <div class="bg-dark p-4 d-flex">
            <img src="{{asset('img/footer_amazon_logo.png')}}" alt="フッターのamazonロゴ（押すとトップに戻る" class="col-lg-1">
                <select name="footer-language-set" class="select-size col-lg-1 bg-dark text-white ms-5">
                <option value="選択肢1">日本語</option>
                <option value="選択肢2">選択肢2</option>
                <option value="選択肢3">選択肢3</option>
                </select>
            <div class="bg-dark border border-white text-white pe-3 ps-3 ms-2">
                <p>日本</p>
            </div>
        </div>
        <div class="d-flex bg-dark text-white">
            <div class="col-lg-2 small">
                <p>Amazon Advertising</p>
                <p>Amazonビジネス</p>
            </div>

            <div class="col-lg-2 small">
                <p>Audible</p>
                <p>AmazonGrobal</p>
            </div>

            <div class="col-lg-2 small">
                <p>アマゾンウェブサービス</p>
                <p>Book Depository</p>
            </div>

            <div class="col-lg-2 small">
                <p>Amazonアウトレット</p>
                <p>ShopBop</p>
            </div>
        </div>

        <div class="d-flex bg-dark text-white">
            <p class="ms-1">利用規約</p>
            <p class="ms-1">|</p>
            <p class="ms-1">プライバシー規約</p>
            <p class="ms-1">|</p>
            <p class="ms-1">パーソナライズド広告規約</p>
            <p class="ms-1">|</p>
            <p class="ms-1">各種規約</p>
            <p class="ms-1">|</p>
            <p class="ms-1">©︎1996~2021,Amazon.com,Inc. or its affiliates</p>
        </div>


    </footer>
  
    <script src="{{asset("js/modal.js")}}"></script>
</body>
</html>