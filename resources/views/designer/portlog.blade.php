<style>
    .portlog_container {
        margin: 80px auto;
        position: relative;
        width: 800px;
        height: 800px;
    }

    .face_btn {
        position: absolute;
        top: 170px;
        left: 170px;
        width: 250px;
        height: 250px;
        text-align: center;
        line-height: 250px;
        border-radius: 250px;
        background-color: white;
        z-index: 1;
    }
    .designer_face{
        width: 250px;
        height: 250px;
        margin:0 auto;
        border-radius: 250px;

    }

    .diamond {
        display: inline-block;
        position: absolute;
        margin: 10px;
        width: 200px;
        height: 200px;
        -ms-transform: rotate(45deg); /* IE 9 */
        -webkit-transform: rotate(45deg); /* Safari */
        transform: rotate(45deg); /* Standard syntax */
        background-color: #FF7E4E;
        border-radius: 20px;
        }

    .diamond:hover {
        cursor: pointer;
        background-color: #E36133;
    }

    .top_btn { top:20px; left: 190px; }
    .left_btn { top:190px; left: 20px; }
    .right_btn { top:190px; right: 230px; }
    .down_btn { bottom:230px; left: 190px; }

    .sub_container{
        text-align: center;
        border: 1px solid;
        margin-top: 500px;
        float: right;
        width:100px;
        height: 130px;
    }
    .top{
        top:80px; left: 265px;
        position: relative;
    }
    .left{
        top:213px; left: 10px;
        position: relative;
    }
    .right{
        top:150px; right: -430px;
        position: relative;
    }
    .down{
        bottom:-270px; left: 230px;
        position: relative;
    }
    a {
        text-decoration: none;
    }


</style>

<body>
    <div class="portlog_container">
        <div class="face_btn">
            @if($intro->m_face !=null)
                <img class="designer_face" src="{{asset('img/member_face/'.$intro->m_face)}}">
            @else
                <img class="designer_face" src="{{asset('img/member_face/no_face.jpg')}}">
            @endif
        </div>
        <a href="/designer/intro/{{$m_num}}">
            <div class="diamond top_btn"></div>
            <div><h1 class="top">소개</h1></div>
        </a>
        <a href="/designer/portfolio/{{$m_num}}">
            <div class="diamond left_btn"></div>
            <div><h1 class="left">포트폴리오</h1></div>
        </a>
        <a href="/designer/school/{{$m_num}}">
            <div class="diamond right_btn"></div>
            <div><h1 class="right">경력</h1></div>
        </a>
        <a href="/designer/career/{{$m_num}}">
            <div class="diamond down_btn"></div>
            <div><h1 class="down">참여,이력</h1></div>
        </a>

        @if($m_num != Session::get('m_num'))<!-- "2" 에 들어갈 자리는 세션값 -->
        <div class="sub_container">
            <div>
                <img src="{{asset('img/heart.png')}}">
            </div>
            <br>
            <div>
                <a href="/desinger/">
                    <img src="{{asset('img/home.png')}}">
                </a>
            </div>
        </div>
        @endif
    </div>

</body>