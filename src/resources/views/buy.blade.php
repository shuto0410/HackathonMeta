<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/buy.css') }}" rel="stylesheet">
    <title>購入ページ</title>
</head>

<body>
    <header class="">
        <div class="container-fluid d-flex.position-fixed ">
            <div class="row mt-1.m-0　">
                {{-- <nav class="navbar navbar-dark bg-dark">
                    aaa
                </nav> --}}
                <nav class="navbar navbar-expand-lg navbar-light bg-white border border-primary　mb-3.w-100">
                    <div class="container-fluid">
                            <img src="{{ asset('img/amazon_logo.png') }}" class="logo col-3">
                    </div>
                    <div class="col-6">
                    <h1 class="center-block.mb-0 text-center headding">レジ(
                        <a　class="text-danger">個の商品</a>
                    )</h1>
                    </div>
                    <div class="col-3"></div>
                </nav>
            </div>
        </div>
    </header>
</body>

</html>
