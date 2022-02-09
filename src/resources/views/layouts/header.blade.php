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
    
            <div class="col-lg-5">
                <div class="mt-2 d-flex">
                    <select name="example" class="select-size col-lg-3">
                        <option value="選択肢1">すべてのカテゴリー</option>
                        <option value="選択肢2">選択肢2</option>
                        <option value="選択肢3">選択肢3</option>
                    </select>
                   
                        <input type="search" class="search-form-set col-lg-8">
                        <input type="submit" class="submit-button col-lg-1" value="&#9794;">
                
                </div>
            </div>
    
            
            <div class="mt-3 d-flex col-lg-5">

                <div class="col-lg-3">
                    <img src="{{asset('img/language_setupLink.png')}}" alt="言語設定に飛ぶためのボタン" class="language-setupLink-set col-lg-7">
                </div>
                
                <a class="text-white header-line-height col-lg-4" data-toggle="modal" data-target="#testModal">  
                    <p>だんのさん</p>
                    <p>アカウント＆リスト</p>
                </a>
    
                
                <div class="text-white header-line-height  col-lg-3"> 
                    <p>返品もこちら</p>
                    <p>注文履歴</p>
                </div>
                
                <div class="text-white col-lg-2"> 
                    <p>カート</p>
                </div> 
            </div>
    </div>
</div>
    </header>

    
  
    <script src="{{asset("js/modal.js")}}"></script>
</body>
</html>