<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/bootstrap-icons.css') }}">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                background: rgb(240, 240, 240);

                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100%;
                padding: 0;
                margin: 0;
            }
            #desktop {
                width: 100%; 
                height: 100%;
            }
            .container {
                margin: 2rem;
                padding: 2rem;
            }
            .full-height {
                height: 100vh;
            }
            .flex {
                display: flex;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .left-side-aside {
                border-right: 1px solid lightgray;
                width: 25%;
            }
            aside {
                background: white;
            }
            .aside-profile {
                color: white;
                align-items: center;
                background: linear-gradient(262deg, #ff7854, #fd267d);
                padding: 1rem;
                box-shadow: 0 1px 8px 0 rgba(0,17,25,.27);
            }
            .aside-profile > * {
            }
            .aside-head {
                background-image: url("{{ asset('img/head.jpg') }}");
                border: 1px solid white;
                border-radius: 50%;
                background-position: 50% 50%;
                background-size: auto 125.581%; 
                width: 50px;
                height: 50px;   
                
            }
            .aside-content {
                margin-left: 1rem;
            }
            .main {
                margin: auto;
                width: 70%;
            }

            button {
                background-color: initial;
                border-style: none;
                color: black;
                font-family: inherit;
                font-size: inherit;
                line-height: inherit;
            }
            .option-container {
                margin: 1rem;
            }
            .matchContainer {
                height: 80%;
                display: flex;
                flex-wrap: wrap;
                overflow-y:auto;
            }
            .matchElement {
                background-image: url("{{ asset('img/head.jpg') }}") ;
                background-position: 50% 50%;
                background-size: 200%;
                background-repeat:no-repeat;
                height: 100px;
                margin: 5%;
                padding: 2%;
            }
            .main-card {
                width: 50%;
            }
            .main-card-image {
                background-image: url("{{ asset('img/head.jpg') }}") ;
                background-position: 50% 50%;
                background-repeat:no-repeat;
                background-size: 200%;
                width: 100%;
                height: 400px;;
                display: flex;
                align-items: flex-end;  
                border-radius: 1rem;
                box-shadow:1px 1px 1px 1px gray;
            }
            .main-card-content {
                color:  gray;
                margin-left: 5%;
            }
            .main-card-choose {
                margin-top: 1rem;
                display: flex;
                justify-content: space-around;
            }
            
            .btn-dislike-border {
                width: 100px;
                height: 100px;
                border-radius: 50%;
                display: flex;
                justify-content: center;
                align-items: center;    
                box-shadow: 0 2px 6px 0 rgba(112,125,134,0.14);
                background: #fff;
            }
            .btn-like-border {
                width: 100px;
                height: 100px;
                border-radius: 50%;
                display: flex;
                justify-content: center;
                align-items: center;    
                box-shadow: 0 2px 6px 0 rgba(112,125,134,0.14);
                background: #fff;
            }
            .btn-like {
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: 72px;    
                color: green;
                
            }
            .btn-dislike {
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: 72px;    
                color: red;
            }
            .hide {
                display: none;
            }
            .active {
                border-bottom: 1px solid #fd267d;
            }
        </style>
    </head>
    <body>
        {{-- Desktop Version --}}
        <div class="flex position-ref" id="desktop">
            <aside class="left-side-aside">
                <div class="flex aside-profile">
                    {{-- 個人頭貼 --}}
                    <img class="aside-head"  alt="">
                    <h2 class="aside-content">
                        我的個人資料
                    </h2>
                    {{-- Something --}}
                    <i></i>
                </div>
                <div class="flex option-container">
                    <ul class="nav">
                        <li class="nav-item active">
                            <button>喜歡的商品</button>
                        </li>
                        <li class="nav-item">
                            <button>留言板</button>
                        </li>
                        <li class="nav-item">
                            <button>設定</button>
                        </li>
                    </ul>
                </div>

                <div class="matchContainer">
                    <div class="matchElement">   
                        Content;
                    </div>
                    <div class="matchElement">   
                        Content;
                    </div>
                    <div class="matchElement">   
                        Content;
                    </div>
                    <div class="matchElement">   
                        Content;
                    </div>
                    <div class="matchElement">   
                        Content;
                    </div>
                    <div class="matchElement">   
                        Content;
                    </div>
                    <div class="matchElement">   
                        Content;
                    </div>
                    <div class="matchElement">   
                        Content;
                    </div>
                    <div class="matchElement">   
                        Content;
                    </div>
                    <div class="matchElement">   
                        Content;
                    </div>
                    <div class="matchElement">   
                        Content;
                    </div>
                    <div class="matchElement">   
                        Content;
                    </div>
                    <div class="matchElement">   
                        Content;
                    </div>
                    <div class="matchElement">   
                        Content;
                    </div>
                    <div class="matchElement">   
                        Content;
                    </div>
                    <div class="matchElement">   
                        Content;
                    </div>
                    <div class="matchElement">   
                        Content;
                    </div>
                    <div class="matchElement">   
                        Content;
                    </div>
                    <div class="matchElement">   
                        Content;
                    </div>
                    <div class="matchElement">   
                        Content;
                    </div>
                </div>
            </aside>
            <main class="container main flex-center position-ref">
                <div class="main-card">
                    <div class="main-card-image" alt="">
                        {{-- 商品名稱 --}}
                        <div class="main-card-content">
                            <b class="main-card-title">商品名稱</b>
                        {{-- 商品簡介 --}}

                            <div class="main-card-introduction">
                                <p>
                                    Introduction
                                </p>
                            </div>
                        </div>
                        
                    </div>
                    <div class="main-card-choose flex-center">
                        <button class="btn-dislike-border">
                            <i class="bi bi-hand-thumbs-down btn-dislike"></i>
                        </button>
                        <button class="btn-like-border">
                              <i class="bi bi-hand-thumbs-up btn-like"></i>
                        </button>
                    </div>
                </div>
            </main>
        </div>
    </body>
</html>
