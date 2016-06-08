@include('layouts.link')
<style>
    .container {
      margin: 0 auto;
      width: 1000px;
    }

    .middle{
        width:1000px;
        margin :0 auto;
    }
    .col-md-4{
        border: 1px solid #D3D3D3;
        border-radius: 20px;
        margin-left:80px;
        margin-bottom: 30px;
        width:400px;
        height:450px;display: inline-block;
    }
    #page_num{
        margin-top: 200px;
        text-align: center;
    }
    .row{
        padding-top:20px;
    }



    @font-face {
        font-weight: normal;
        font-style: normal;
        font-family: 'codropsicons';
    }

    *, *:after, *:before { -webkit-box-sizing: border-box; box-sizing: border-box; }
    .clearfix:before, .clearfix:after { display: table; content: ''; }
    .clearfix:after { clear: both; }


    a {
        outline: none;
        color: #3498db;
        text-decoration: none;
    }

    a:hover, a:focus {
        color: #528cb3;
    }

    .grid {
        position: relative;
        margin: 0 auto;
        padding: 1em 0 4em;
        max-width: 1000px;
        list-style: none;
    }

    /* Common style */
    .grid figure {
        position: relative;
        float: left;
        overflow: hidden;
        margin-left:15px;
        margin-top:15px;
        margin-bottom:8px;
        width: 340px;
        height: 300px;
        background: #3085a3;
        text-align: center;
        cursor: pointer;
        border-radius: 10px;
    }

    .grid figure img {
        position: relative;
        display: block;
        width: 340px;
        height: 300px;
        opacity: 0.8;
    }

    .grid figure figcaption {
        padding: 2em;
        color: #fff;
        text-transform: uppercase;
        font-size: 1.25em;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
    }


    .grid figure figcaption,
    .grid figure figcaption > a {
        position: absolute;
        top: 0;
        left: 0;
        width: 340px;
        height: 300px;
    }

    /* Anchor will cover the whole item by default */
    /* For some effects it will show as a button */
    .grid figure figcaption > a {
        z-index: 1000;
        text-indent: 200%;
        white-space: nowrap;
        font-size: 0;
        opacity: 0;
    }

    .grid figure h2 {
        word-spacing: -0.15em;
        font-weight: 300;
    }

    .grid figure h2 span {
        font-weight: 800;
    }

    .grid figure h2,
    .grid figure p {
        margin: 0;
    }

    .grid figure p {
        letter-spacing: 1px;
        font-size: 68.5%;
    }

    /*---------------*/
    /***** Bubba *****/
    /*---------------*/

    figure.effect-bubba {
        background: #9e5406;
    }

    figure.effect-bubba img {
        opacity: 0.7;
        -webkit-transition: opacity 0.35s;
        transition: opacity 0.35s;
    }

    figure.effect-bubba:hover img {
        opacity: 0.4;
    }

    figure.effect-bubba figcaption::before,
    figure.effect-bubba figcaption::after {
        position: absolute;
        top: 30px;
        right: 30px;
        bottom: 30px;
        left: 30px;
        content: '';
        opacity: 0;
        -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
        transition: opacity 0.35s, transform 0.35s;
    }

    figure.effect-bubba figcaption::before {
        border-top: 1px solid #fff;
        border-bottom: 1px solid #fff;
        -webkit-transform: scale(0,1);
        transform: scale(0,1);
    }

    figure.effect-bubba figcaption::after {
        border-right: 1px solid #fff;
        border-left: 1px solid #fff;
        -webkit-transform: scale(1,0);
        transform: scale(1,0);
    }

    figure.effect-bubba h2 {
        padding-top: 30%;
        -webkit-transition: -webkit-transform 0.35s;
        transition: transform 0.35s;
        -webkit-transform: translate3d(0,-20px,0);
        transform: translate3d(0,-20px,0);
    }

    figure.effect-bubba p {
        padding: 20px 2.5em;
        opacity: 0;
        -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
        transition: opacity 0.35s, transform 0.35s;
        -webkit-transform: translate3d(0,20px,0);
        transform: translate3d(0,20px,0);
    }

    figure.effect-bubba:hover figcaption::before,
    figure.effect-bubba:hover figcaption::after {
        opacity: 1;
        -webkit-transform: scale(1);
        transform: scale(1);
    }

    figure.effect-bubba:hover h2,
    figure.effect-bubba:hover p {
        opacity: 1;
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0);
    }


</style>
@include('layouts.header')
<div class="container">

    <div id="title" style="background-color:#D3D3D3; height:135px; text-align:left;">
        <p class="p"><h1><strong>디자이너 찾기</strong></h1>
        <h5>현재 {{count($m_list)}}명 의 디자이너가 있습니다.</h5></p>

        <!--프로젝트 검색 버튼-->
        <form id="custom-search-form" class="form-search form-horizontal pull-right" action="/designer/search" method="post">
            <div class="input-append spancustom">
                <input type="text" class="search-query" name="m_name" placeholder="Search..">
                <button type="submit" class="btn btn-default">
                    <i class="glyphicon glyphicon-search"></i>
                </button>
            </div>
        </form>

        <a href="/designer/index/project" id="sub_menu_btn" class="btn btn-default">진행한 프로젝트 수</a>
        <a href="/designer/index/portfolio" id="sub_menu_btn" class="btn btn-default">포트폴리오 수</a>

    </div>

</div>
    <div class="middle">
            <div class="row">
                @foreach($m_list as $row)
                        <div class="col-md-4">
                            <div class="grid">
                                <figure class="effect-bubba">
                                    @if($row->m_face != null)
                                        <img src="{{asset('img/member_face/'.$row->m_face)}}">
                                    @else
                                        <img src="{{asset('img/member_face/no_face.jpg')}}">
                                    @endif
                                    <figcaption>
                                        <p>{{$row->ds_info}}</p>
                                        <a href="/designer/{{$row->m_num}}" style="border-radius: 20px">View more</a>
                                    </figcaption>
                                </figure>
                            <div style="width: 20px;"><br><br><br></div>
                            <h2 style="text-align: center">{{$row->m_name}}</h2>
                            <p style="border-top: 1px solid #D3D3D3; border-right: 1px solid #D3D3D3; width: 185px; height: 70px; text-align: center; float: left;">
                                <a href="/designer/portfolio/{{$row->m_num}}"><img src="{{ asset('img/project.png') }}" style="margin-bottom: 10px; margin-top: 5px;"><br>포트폴리오 :
                                @if($row->pj_count==null)
                                    0
                                @else
                                    {{$row->pj_count}}
                                @endif
                                </a>
                                </p>
                            <p style="border-top: 1px solid #D3D3D3; text-align: center;">
                                <a href="/designer/career/{{$row->m_num}}">
                                    <img src="{{ asset('img/money.png') }}" style="margin-bottom: 10px; margin-top: 5px;"><br>거래건수 :
                                    @if($row->pt_count == null)
                                        0
                                    @else
                                        {{$row->pt_count}}
                                    @endif
                                </a>
                            </p>
                            </div>
                        </div>
                @endforeach
            </div>
    </div>
<div>
    <a href="/designer/portfolio2">포트폴리오2</a>
</div>
<div id="page_num">
    {{$m_list->links()}}
</div>