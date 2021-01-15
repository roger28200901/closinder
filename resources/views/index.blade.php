<?php
    $user = Auth::user();
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        

 <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

         <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Closinder') }}</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">


        <!-- Scripts -->
        <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        {{-- <script src="{{ asset('js/jquery.js')}}"></script> --}}
        <script src="{{ asset('js/jquery.mobile-1.4.5.js') }}" ></script>
        <link rel="stylesheet" href="{{ asset('js/jquery.mobile-1.4.5.css') }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/bootstrap-icons.css') }}">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">


        <link rel="stylesheet" href="{{ asset('css/fontAwesome.css') }}">
        <link rel="stylesheet" href="{{ asset('css/light-box.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl-carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('css/templatemo-style.css') }}">

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
                width: 25%;
            }
            aside {
                height: 84%;
                background: #f9f9f9;
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
                border-bottom: 1px solid lightgray;
            }
            .messageContainer {
                height: 100%;
                flex-wrap: wrap;
                overflow: auto;
                background: white;
                border-right: 1px solid lightgray;
            }
            .profileContainer {
                height: 100%;
                flex-wrap: wrap;
                overflow: auto;
                background: white;
                border-right: 1px solid lightgray;
            }
            .matchContainer {
                flex-wrap: wrap;
                overflow: auto;
                height: 65%;
                background: white;
                border-right: 1px solid lightgray; 
            }
            .matchElement {
                background-image: url("{{ asset('img/head.jpg') }}") ;
                background-position: center;
                background-size: contain;
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
               

                /* Tinder */

                #container {
                width: 100%;
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
                width: 50%;
                background: #fff;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0,0,0,0.2);
                color: #fff;
                padding: 20px;
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
                .option-item > * {
                    font-size: 12px;
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
                    background: #e9e9e9;
                    box-shadow: 0 0px 1px 0 rgba(0,17,25,.27);
                }
                .profile-head {
                    border-radius: 50%;
                    width: 200px;
                    height: 200px;
                }
                .profile-content  > * {
                    font-size: 24px;
                }
            }

            /* Mobile */
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
                    background: #e9e9e9;
                    box-shadow: 0 0px 1px 0 rgba(0,17,25,.27);
                }
                .mobile-footer {
                    display: flex;
                    position: absolute;
                    justify-content: space-between;
                    bottom: -120px;
                    width: 100%;
                }

                .profile-head {
                    border-radius: 50%;
                    width: 200px;
                    height: 200px;
                }
                #profile-container {
                    text-align:center;
                    overflow: hidden;
                }
                .profile-information {
                    text-align: left;
                    color: #aaa;
                }
            }       
            

        </style>
      

    </head>
    <body>
        <div class="sidebar-navigation hidde-sm hidden-xs" id="desktop">
            <div class="logo">
                <a href="#">Clo<em>sinder</em></a>
            </div>
            
            <nav>
                <ul>
                    <li class="option-item" id="option-item-1">
                        <button style="width: 50%">喜歡的商品</button>
                    </li>
                    <li class="option-item" id="option-item-2">
                        <button style="width: 50%">留言板</button>
                    </li>
                    <li class="option-item" id="option-item-3">
                        <button style="width: 50%">設定</button>
                    </li>
                    <li >
                        <button style="width: 50%;">
                            <a style="color: black;" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                             {{ __('登出') }}
                            </a>
                        </button>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                    
                   
                </ul>
            </nav>
            <ul class="social-icons">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                <li><a href="#"><i class="fa fa-behance"></i></a></li>
            </ul>
        </div>

        
        <div class="page-content" id="desktop">
                <div id="container" style="display: flex;justify-content:center; " class="d-product-container">
                    @foreach ($products as $product)
                    <div item_id="{{ $product['id'] }}" class="buddy" style="display: block;">
                        <p style="color: black">{{$product['title']}}</p>
                        <div class="avatar" 
                                style="display: block; background-image: 
                                    url({{ asset($product['img_url']) }}); z-index: {{ $product['id'] }} ">
                        </div>
                        <p style="color: black">
                            {{ $product['content'] }}
                        </p>
                    </div>
                    
                    @endforeach
                        <h1 style="top: 200px; display:flex;position: absolute;">喜歡請往左滑或不喜歡往右滑</h1>
                </div>
                
                <div id="matchContainer" style="display: none;">
                    @foreach ($likes as $like)
                        <div class="matchElement" style="background-image: url('{{ $like['img_url'] }}')">
                            {{ $like['title'] }}
                        </div>
                    @endforeach
                </div>
                <div id="messageContainer" style="display: none;">
                    <p>
                        <i style="float: right" class="bi bi-arrows-fullscreen"></i>
                    </p>
                    <form action="{{ action('MessageController@insert') }}" method="post">
                        <b>標題</b>
                        <input type="text" name="message-title-d">
                        <b>內容</b>
                        <textarea name="message-content-d" cols="30" rows="10"></textarea>
                        <input type="button" id="btn-insert-message-d" value="新增留言">
                    </form>
                    @foreach ($messages as $message)
                    <div class="container">
                        <img class="chat-head" src="img/{{ $message->img_url}}" alt="Avatar" >
                        <b>{{ $message->name}}</b>
                        <p>
                            <b>{{ $message->title}}</b>
                        </p>
                        <p>{{ $message->content}}</p>
                        <span class="time-right">
                            {{ $message->created_at}}
                        </span>
                    </div>
                    @endforeach
                </div>
                <div id="profileContainer" style="display:none;" >
                    <div style="text-align:center">
                        <img src="img/{{ $user['img_url'] }}" class="profile-head" alt="">
                        <p style="font-size:24px; margin-top:2%;">
                            {{ $user['name'] }}
                        </p>
                    </div>

                    <button id="btn-profile-setting">個人頁面設定</button>
                    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button> --}}
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form action="{{ action('UserController@update') }}" method="POST" >

                            <div class="modal-body">
                                @csrf
                                <div class="form-group">
                                  <label for="recipient-name" class="col-form-label">個人姓名:</label>
                                  <input type="text" class="form-control" id="recipient-name">
                                </div>
                                <div class="form-group">
                                  <label for="message-text" class="col-form-label">個人特徵:</label>
                                  <textarea class="form-control" id="message-text"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">更新</button>
                            </div>
                        </form>

                          </div>
                        </div>
                      </div>
                    <div class="profile-content" style="width: 100%; margin:10%; font-size:36px;">
                            <p>信箱：{{ $user['email']}}</p>
                            <p>個人特徵：</p>
                            <p style="overflow:auto">
                                個人特徵
                            </p>
                    </div>
                </div>
                
            
        </div>
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
                        <div id="container" style="display: flex;justify-content:center; " class="m-product-container">
                            @foreach ($products as $product)
                            <div item_id="{{ $product['id'] }}" class="buddy" style="display: block;">
                                <p style="color: black">{{$product['title']}}</p>
                                <div class="avatar" 
                                style="display: block; background-image: 
                                    url({{ asset($product['img_url']) }}); z-index: {{ $product['id'] }} ">
                                </div>
                                <p style="color: black">
                                    {{ $product['content'] }}
                                </p>
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
                {{--  Page 2 --}}
                <div style="display:none" class="mobile-main-container" id="page-2">
                    <div class="container">
                        <p>
                            <i style="float: right" class="bi bi-arrows-fullscreen"></i>
                        </p>
                        <div class="upload-message-container">
                            
                            <form action="{{ action('MessageController@insert') }}" method="post">
                                <b>標題</b>
                                <input type="text" name="message-title-m">
                                <b>內容</b>
                                <textarea name="message-content-m" cols="30" rows="10"></textarea>
                                <input type="button" id="btn-insert-message-m" value="新增留言">
                            </form>
                        </div>
                    </div>
                    @foreach ($messages as $message)
                        <div class="container">
                            <img class="chat-head" src="img/{{ $message->img_url}}" alt="Avatar" >
                            <b>{{ $message->name}}</b>
                            <p>
                                <b>{{ $message->title}}</b>
                            </p>
                            <p>{{ $message->content}}</p>
                            <span class="time-right">
                                {{ $message->created_at}}
                            </span>
                        </div>
                    @endforeach
                </div>
                {{--  Page 3 --}}
                <div style="display:none; height:100%" class="mobile-main-container" id="page-3">
                    <div class="container" id="profile-container">
                        <img src="img/{{ $user['img_url'] }}" class="profile-head" alt="">
                        <p>
                            {{ $user['name'] }}
                        </p>
                        <button id="btn-profile-setting">個人頁面設定</button>
                        
                        {{-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> --}}
                        {{-- <!-- Modal -->
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">
                            
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <form action="{{ route('updateUser') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <label for="">個人特徵：</label>
                                            <textarea name="special" id="" cols="30" rows="10"></textarea>
                                            <label for="">上傳照片：</label>
                                            <input type="file" name="img_url">
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
                                        <button id="btn-update-user" type="button" class="btn btn-success">更新</button>
                                        </div>
                                    </form>
                                </div>
                            
                            </div>
                        </div> --}}
                        <div class="profile-information">
                            <p>信箱：{{ $user['email']}}</p>
                            <p>個人特徵：</p>
                            <p style="overflow:auto">
                                個人特徵
                            </p>
                        </div>
                    </div>
                </div>
        </div>

                
        {{-- Desktop Version --}}
    
    
    </body>

    <script>
        $(document).ready(function(){
            let page = 1 ;

           
        
            let drag = false;
            let sx = null;
            let dx = null;
            let object = null;
            $('.buddy').on('mousedown', function() {
                drag = true
                sx = event.clientX;
                object = $(this);
            });
            $('html').on('mouseup', function () {
                if (object == null) return
                drag = false;
                if (dx - sx > 30) {
                    like(object);
                } else {
                    dislike(object);
                }
            })
            $('.buddy').on('mousemove', function () {
                if (drag) {
                    dx = event.clientX;
                }
            });

            $(".buddy").on("swiperight",function(){
                // Like
                console.log(444)
                like($(this));
            });  

            $(".buddy").on("swipeleft",function(){
                // Dislike
                dislike($(this));
                
            });
            $('.btn-dislike-border').on('click', function () {
                let top = null;
                if(window.matchMedia("(max-width: 767px)").matches){
                    // The viewport is less than 768 pixels wide
                    top = $('.m-product-container .buddy:last-child')
                } else{
                    // The viewport is at least 768 pixels wide
                    top = $('.d-product-container .buddy:last-child');
                }
                dislike(top);
                
            })
            $('.btn-like-border').on('click', function () {
                let top = null;
                if(window.matchMedia("(max-width: 767px)").matches) {
                    // The viewport is less than 768 pixels wide
                    top = $('.m-product-container .buddy:last-child')
                } else{
                    // The viewport is at least 768 pixels wide
                    
                    top = $('.d-product-container .buddy:last-child');
                }
                console.log(top)
                like(top);
            })

         
            function dislike (dislike) {
                dislike.addClass('rotate-right').delay(700).fadeOut(1, function () {
                    dislike.remove();
                });
                $('.buddy').find('.status').remove();
                dislike.append('<div class="status dislike">Dislike!</div>');

            }
            function like (like) {
                like.addClass('rotate-left').delay(700).fadeOut(1, function () {
                    like.remove();
                    let sendData = {
                        product_id : like.attr('item_id'),
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

                like.append('<div class="status like">Like!</div>');      
                like.next().removeClass('rotate-left rotate-right').fadeIn(400);
                
            }
            $('.option-item').on('click', function (ele) {
                
                // $('.option-item').removeClass('active');
                // $(this).addClass('active');
                let id = this.id;
                console.log(id)
                if(window.matchMedia("(max-width: 767px)").matches){
                    // The viewport is less than 768 pixels wide
                    if (id == 'option-item-1') {
                        $('.mobile-main-container').hide();
                        $('#page-1').fadeIn();
                    } else if (id == 'option-item-2') {
                        $('.mobile-main-container').hide();
                        $('#page-2').fadeIn();
                    } else if (id == 'option-item-3') {
                        $('.mobile-main-container').hide();
                        $('#page-3').fadeIn();
                    }
                } else{
                    // The viewport is at least 768 pixels wide
                    if (id == 'option-item-1') {
                        $('.d-product-container').fadeIn();
                        $('#matchContainer').fadeIn();
                        $('#messageContainer').hide();
                        $('#profileContainer').hide();
                    } else if (id == 'option-item-2') {
                        $('.d-product-container').hide();
                        $('#matchContainer').hide();
                        $('#messageContainer').fadeIn()
                        $('#profileContainer').hide();
                    } else if (id == 'option-item-3') {
                        $('.d-product-container').hide();
                        $('#matchContainer').hide();
                        $('#messageContainer').hide()
                        $('#profileContainer').fadeIn();
                    }
                }
            });
            $('.matchContainer').fadeIn();
            $('.bi-arrows-fullscreen').on('click', function() {
                $('.upload-message-container').slideToggle();
            })

            $('#btn-insert-message-m').on('click', function () {
                let sendData = {
                    title : $('[name=message-title-m]').val(),
                    content : $('[name=message-content-m]').val()
                }
                $.ajax({
                    url:'uploadMessage',
                    method: 'POST',
                    data: sendData,
                    success: function (response) {
                        location.reload()
                    }
                })
            })
            $('#btn-insert-message-d').on('click', function () {
                let sendData = {
                    title : $('[name=message-title-d]').val(),
                    content : $('[name=message-content-d]').val()
                }
                $.ajax({
                    url:'uploadMessage',
                    method: 'POST',
                    data: sendData,
                    success: function (response) {
                        location.reload()
                    }
                })
            })
            
        });


    </script>
</html>
