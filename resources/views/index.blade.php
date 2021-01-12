<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

         <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Closinder') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/jquery.js') }}" ></script>
        <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.4/jquery.mobile-1.4.4.min.css">
        <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
        

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
           
            @media screen and (min-width: 769px) {
                .active {
                border-bottom: 1px solid #fd267d;
                }
                #mobile  {
                    display: none; 
                }
                #desktop {
                    display: flex;
                }
            }
            @media screen and (max-width: 768px){
                #desktop {
                    display: none;
                }
                #mobile {
                    font-size: 24px;
                }
                .mobile-nav {
                    width: 100%;
                }
                .mobile-nav > * {
                    width: 33%;
                }
                .mobile-nav > li {
                    text-align: center;
                }
                .active {
                    color: red;
                }
                .mobile-nav-container {
                    width: 100%;
                    padding: 5%;
                    box-shadow: 0 1px 8px 0 rgba(0,17,25,.27);
                }
                .mobile-main-container {
                    justify-content: center;
                    align-items: center;
                }
                /* Tinder */

                #container {
                width: 80%;
                height: 500px;
                margin: auto !important;
                display: block;
                position: relative;
                list-style-type: none;
                -webkit-touch-callout: none;
                -webkit-user-select: none;
                -khtml-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                }
                .buddy {
                width: 100%;
                background: #fff;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0,0,0,0.2);
                color: #fff;
                padding: 20px;
                margin: 5%;
                position: absolute;
                cursor: hand;
                top: 50px;
                }
                .buddy > * {
                    width: 100%;
                }
                .rotate-left {
                transform: rotate(30deg) scale(0.8);
                transition: 1s;
                margin-left: 400px;
                cursor: e-resize;
                opacity: 0;
                z-index: 10;
                }
                .rotate-right {
                transform: rotate(-30deg) scale(0.8);
                transition: 1s;
                opacity: 0;
                margin-left: -400px;
                cursor: w-resize;
                z-index: 10;
                }
                .avatar {
                width: 100%;
                height: 350px;
                display: block;
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                }
                .like {
                border-radius: 5px;
                padding: 5px 10px;
                border: 2px solid green;
                color: green;
                text-transform: uppercase;
                font-size: 15px;
                position: absolute;
                top: 50px;
                right: 40px;
                text-shadow: none;
                }
                .dislike {
                border-radius: 5px;
                padding: 5px 10px;
                border: 2px solid red;
                color: red;
                text-transform: uppercase;
                font-size: 15px;
                position: absolute;
                top: 50px;
                left: 40px;
                text-shadow: none;
                }

                .time-right {
                    float: left;
                    color: #aaa;
                }

                .chat-head {
                    border: 1px solid white;
                    border-radius: 50%;
                    background-position: 50% 50%;
                    background-size: auto 125.581%; 
                    width: 50px;
                    height: 50px;  
                }
                .container {
                    margin:auto;
                    background: #f7ddd1;
                    box-shadow: 0 0px 1px 0 rgba(0,17,25,.27);
                }
                .mobile-footer {
                    display: flex;
                    position: absolute;
                    justify-content: space-between;
                    bottom: -120px;
                    width: 100%;
                }
            }       
            

        </style>
        <script src="https://code.jquery.com/mobile/1.4.4/jquery.mobile-1.4.4.min.js"></script>
        <script>
            $(document).ready(function(){
                
                let page = 1 ;

                $('.option-item').on('click', function () {
                })
            
                $(".buddy").on("swiperight",function(){
                    // Like
                    $(this).addClass('rotate-left').delay(700).fadeOut(1, function () {
                        $(this).remove();
                        let sendData = {
                            product_id : $(this).attr('item_id'),
                            user_id : <?= Auth::user()->id ?>,
                        }
                        $.ajax({
                            url: 'like',
                            method: 'POST',
                            data: sendData,
                            success: function (response) {
                                console.log(response)
                            }
                        })
                    });
                    $('.buddy').find('.status').remove();

                    $(this).append('<div class="status like">Like!</div>');      
                    $(this).next().removeClass('rotate-left rotate-right').fadeIn(400);
                    
                });  

                $(".buddy").on("swipeleft",function(){
                    // Dislike
                    $(this).addClass('rotate-right').delay(700).fadeOut(1);
                    $('.buddy').find('.status').remove();
                    $(this).append('<div class="status dislike">Dislike!</div>');

                    if ( $(this).is(':last-child') ) {
                    $('.buddy:nth-child(1)').removeClass ('rotate-left rotate-right').fadeIn(300);
                        alert('已經滑完所有類型');
                    } else {
                        $(this).next().removeClass('rotate-left rotate-right').fadeIn(400);
                    } 
                });
                $('.option-item').on('click', function () {
                    $('.option-item').removeClass('active');
                    $(this).addClass('active');
                    let id = $(this).attr('id');
                    if (id == 'option-item-1') {
                        $('.mobile-main-container').hide();
                        $('#page-1').fadeIn();
                    } else if (id == 'option-item-2') {
                        $('.mobile-main-container').hide();
                        $('#page-2').fadeIn();
                    }
                });

            });


        </script>
    </head>
    <body>
        {{-- <div style="display: flex; justify-content: center; align-items : center;position: absolute; width: 100%; z-index : 999; background: white;height:100vh; color: gray; text-align:center">
            <h1 style="">
                <p>
                    尚在開發中！            
                </p>
                <p>
                    1/15敬請期待！                    
                </p>
                <p>
                    <a class="btn btn-primary" onclick="history.go(-1);">回到上一頁</a>
                </p>
            </h1>
        </div> --}}
        {{-- Mobile Version --}}
        <div id="mobile" class="full-height">
                <div class="mobile-nav-container">
                    <ul class="nav mobile-nav">
                        <li id="option-item-1" class="nav-item option-item active">
                            <i class="bi bi-suit-heart-fill"></i>
                        </li>
                        <li id="option-item-2" class="nav-item option-item">
                            <i class="bi bi-chat-fill"></i>
                        </li>
                        <li id="option-item-3" class="nav-item option-item">
                            <i class="bi bi-person-fill"></i>
                        </li>
                    </ul>
                </div>
                {{-- Page 1 --}}
                <div style="height:100%; " class="mobile-main-container" id="page-1">
                        <div id="container" style="display: flex;justify-content:center; ">
                            @foreach ($products as $product)
                            <div item_id="{{ $product['id'] }}" class="buddy" style="display: block;">
                                <p style="color: black">{{$product['title']}}</p>
                                <div class="avatar" 
                                style="display: block; background-image: 
                                    url({{ asset($product['img_url']) }}); z-index: {{ $product['id'] }} ">
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="main-card-choose flex-center mobile-footer">
                            <button class="btn-dislike-border">
                                <i class="bi bi-hand-thumbs-down btn-dislike"></i>
                            </button>
                            <button class="btn-like-border">
                                  <i class="bi bi-hand-thumbs-up btn-like"></i>
                            </button>
                        </div>
                </div>
                {{--  Page 2--}}
                <div style="display:none" class="mobile-main-container" id="page-2">
                    <div class="container">
                        <img class="chat-head" src="{{ url('img/head.jpg')}}" alt="Avatar" >
                        <b>Name</b>
                        <p>Hello. How are you today?</p>
                        <span class="time-right">11:00</span>
                    </div>
                    <div class="container">
                        <img class="chat-head" src="{{ url('img/head.jpg')}}" alt="Avatar" >
                        <b>Name</b>
                        <p>Hello. How are you today?</p>
                        <span class="time-right">11:00</span>
                    </div>
                    <div class="container">
                        <img class="chat-head" src="{{ url('img/head.jpg')}}" alt="Avatar" >
                        <b>Name</b>
                        <p>Hello. How are you today?</p>
                        <span class="time-right">11:00</span>
                    </div>
                    <div class="container">
                        <img class="chat-head" src="{{ url('img/head.jpg')}}" alt="Avatar" >
                        <b>Name</b>
                        <p>Hello. How are you today?</p>
                        <span class="time-right">11:00</span>
                    </div>
                    <div class="container">
                        <img class="chat-head" src="{{ url('img/head.jpg')}}" alt="Avatar" >
                        <b>Name</b>
                        <p>Hello. How are you today?</p>
                        <span class="time-right">11:00</span>
                    </div>
                    <div class="container">
                        <img class="chat-head" src="{{ url('img/head.jpg')}}" alt="Avatar" >
                        <b>Name</b>
                        <p>Hello. How are you today?</p>
                        <span class="time-right">11:00</span>
                    </div>
                    <div class="container">
                        <img class="chat-head" src="{{ url('img/head.jpg')}}" alt="Avatar" >
                        <b>Name</b>
                        <p>Hello. How are you today?</p>
                        <span class="time-right">11:00</span>
                    </div>
                    <div class="container">
                        <img class="chat-head" src="{{ url('img/head.jpg')}}" alt="Avatar" >
                        <b>Name</b>
                        <p>Hello. How are you today?</p>
                        <span class="time-right">11:00</span>
                    </div>
                </div>
        </div>

                
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
                        <li id="option-item-1" class="nav-item option-item active">
                            <button>喜歡的商品</button>
                        </li>
                        <li id="option-item-2" class="nav-item option-item">
                            <button>留言板</button>
                        </li>
                        <li id="option-item-3" class="nav-item option-item">
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
