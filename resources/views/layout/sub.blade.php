@extends('layout.master')
@section('sub_style')
    .footer {
    margin: 0 auto;
    padding: 20px;
    width: 1000px;
    height: 90px;
    background-color: #CCCCCC;
    }

    .copyright {
    width: 100%;
    font-size: 20px;
    text-align: right;
    }

    a {
    color: black;
    }

    a:hover {
    color: black;
    text-decoration: none;
    }

    a:active {
    text-decoration: none;
    }

    a:visited {
    text-decoration: none;
    }

    .header {
    margin: 0 auto;
    width: 1000px;
    height: 130px;
    }

    .logo {
    width: 50px;
    height: 50px;
    }

    .title {
    display: inline;
    left: 0;
    width: 400px;
    height: 70px;
    line-height: 70px;
    text-align: center;
    font-size: 40px;
    }

    .little_menu {
    display: inline-block;
    float: right;
    margin-top: 50px;
    font-size: 15px;
    }

    .little_menu a {
    margin-right: 10px;
    }

    .menu_bar {
    margin-top: 5px;
    padding-top: 5px;
    width: 100%;
    border-top: 4px solid #FF7E4E;
    }

    #top_menu_btn {
    margin-right: 5px;
    margin-left: 5px;
    display: inline-block;
    float: left;
    width: 19%;
    color: white;
    background-color: #213B96;
    }

    #top_menu_btn:hover { background-color: #182B6E; }

    .container {
    margin: 0 auto;
    width: 1000px;
    height: auto;
    }

    .slide_img {
    display: inline-block;
    width: 49%;
    height: 200px;
    border: 1px solid red;
    }

    .left_slide_img {left: 0;}
    .right_slide_img {float: right;}


    @media screen and (max-width:736px) {

        .menu_bar{
        display:none;
        }
        .s_menu_bar{
            background-color:gray;
        }
        .s_button{
            background-color:yellow;
            border:1px solid;
            border-radius:30px;
            width:300px;
        }

    }
    @yield('sub2_style')
@stop

@section('sub_body')

    <div class="header">
        <div class="title">
            <img class="logo" src="logo.png" alt="D&D">
            Designer & Developer
        </div>
        <div class="little_menu">
            <a href="#">홈</a>
            <a href="#">로그인</a>
            <a href="#">회원가입</a>
            <a href="#">고객센터</a>
        </div>
        <div class="menu_bar">
            <a href="" id="top_menu_btn" class="btn btn-default">소개</a>
            <a href="" id="top_menu_btn" class="btn btn-default">프로젝트</a>
            <a href="" id="top_menu_btn" class="btn btn-default">디자이너</a>
            <a href="" id="top_menu_btn" class="btn btn-default">마이페이지</a>
            <a href="" id="top_menu_btn" class="btn btn-default">협업</a>
        </div>
    </div>
    @yield('content_list')
    <div class="footer">
        <div class="address">대구광역시</div>
        <div class="copyright">Copyright by A.O.A</div>
    </div>
@stop

