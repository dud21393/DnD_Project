<html>
<head>
    @include('layouts.link')
</head>
<body>
    @include('layouts.header')

    <script type="text/javascript">
        function getTime() {
            now = new Date();
            dday = new Date("9 10 2012 00:00:00"); //구하고자하는날
            days = (dday - now) / 1000 / 60 / 60 / 24;
            daysRound = Math.floor(days);
            hours = (dday - now) / 1000 / 60 / 60 - (24 * daysRound);
            hoursRound = Math.floor(hours);
            minutes = (dday - now) / 1000 /60 - (24 * 60 * daysRound) - (60 * hoursRound);
            minutesRound = Math.floor(minutes);
            seconds = (dday - now) / 1000 - (24 * 60 * 60 * daysRound) - (60 * 60 * hoursRound) - (60 * minutesRound);
            secondsRound = Math.round(seconds);

            if(daysRound < 10) daysRound = '0' + daysRound;
            if(hoursRound < 10) hoursRound = '0' + hoursRound;
            if(minutesRound < 10) minutesRound = '0' + minutesRound;
            if(secondsRound < 10) secondsRound = '0' + secondsRound;

            d = '<span class=\"d' + String(daysRound)[0] + '\">'+ String(daysRound)[0] + '</'+'span>';
            d = d + '<span class=\"d' + String(daysRound)[1] + '\">'+ String(daysRound)[1] + '</'+'span>';

            h = '<span class=\"n' + String(hoursRound)[0] + '\">'+ String(hoursRound)[0] + '</'+'span>';
            h = h + '<span class=\"n' + String(hoursRound)[1] + '\">'+ String(hoursRound)[1] + '</'+'span>';

            m = '<span class=\"n' + String(minutesRound)[0] + '\">'+ String(minutesRound)[0] + '</'+'span>';
            m = m + '<span class=\"n' + String(minutesRound)[1] + '\">'+ String(minutesRound)[1] + '</'+'span>';

            s = '<span class=\"n' + String(secondsRound)[0] + '\">'+ String(secondsRound)[0] + '</'+'span>';
            s = s + '<span class=\"n' + String(secondsRound)[1] + '\">'+ String(secondsRound)[1] + '</'+'span>';

            document.getElementById('day').innerHTML = d;
            document.getElementById('hour').innerHTML = h;
            document.getElementById('minute').innerHTML = m;
            document.getElementById('second').innerHTML = s;
            newtime = window.setTimeout("getTime();", 1000);

            if(daysRound > 0) {
                document.getElementById('dday').style.display = 'block';
                document.getElementById('counter').style.display = 'none';
            } else {
                document.getElementById('dday').style.display = 'none';
                document.getElementById('counter').style.display = 'block';
            }
        }
        window.onload = function() {
            getTime();
        }
    </script>

    <style>
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

        .service_flow {
            margin: 10px auto;
            width: 100%;
            height: 200px;
            border: 1px solid blue;
        }

        .service_info {
            margin: 10px auto;
            width: 100%;
            height: 200px;
            border: 1px solid blue;
        }

        #wrapper{
            margin:0 auto;
            width: 1000px;
            text-align:center;
            border:1px solid;
            height:800px;
            margin-top:50px;

        }

        .contents_a{
            margin:0 auto;
            border:1px solid #000000;
            width:63%;
            height:400px;
            float:left;
            padding:20px;

        }

        .side_contents {
            display:table-cell;
            border:1px solid #487bE1;
            width:28.9%;
            height:400px;
            float:left;
            padding:10px;
            margin-left:80px;
        }

        .side_contents_circle {
            display: inline-block;
            float:bottom;
            border:1px solid #000000;
            height : 200px;
            width : 80%;
            border-radius : 50%;
            -webkit-border-radius : 70%;
            -moz-border-radius : 40%;
            vertical-align : center;
            margin-top:20%;
        }

        #side_contents_btn{

            vertical-align : top;

        }

        .p{
            margin:0 auto;
            width:800px;
            display:table-cell;
            text-align:left;
        }

        #title{
            margin:0 auto;
            width:1000px;
        }

        .line01{
            list-style:none;
            padding:0;
            overflow:visible;
            clear:both;
            line-height: 30px;
            font-size:15px;;
            margin-top:30px;
            text-align:left;
            border-bottom:1px solid #d6d6d6;
        }

        .pro_view_title{
            margin-top:0px;
            border-bottom:2px solid #FF7E4E;
        }

        .side_contents_btn{
            margin-top:30px;
        }

        .contents_b{
            font-size:18px;
            margin-top:405px;
            height:640px;
            word-break:break-all;
        }

        .contents_c{
            font-size:18px;
            margin-top:30px;
            height:340px;
            word-break:break-all;
        }

        .contents_d{
            font-size:18px;
            margin-top:40px;
            height:650px;
            word-break:break-all;
        }

        .contents_e{
            font-size:18px;
            margin-top:30px;
            height:240px;
            word-break:break-all;
        }

        .contents_f{
            margin-top:30px;
        }

    </style>


    <div id="title" style="background-color:#D3D3D3; height:135px; text-align:left; vertical-align: middle">
        <p class="p"><h1>프로젝트 찾기</h1>
        <h5>현재 {{\App\Projects::count()}}개 의 프로젝트가 등록되어 있습니다.</h5></p>
    </div>



    @if(Session::has('m_num') == false)
     <script>
         window.alert('로그인 후 사용 가능');
     </script>
        {!! redirect('/projectList') !!}
     @else
    <div id="wrapper" style=" height: 2800px;">
        <!--프로젝트 자세히 보기 뷰에서 글 정보 폼-->
        <div class="contents_a">
            <h1 class="pro_view_title">
                <span style="text-align: center; font-size: large;"><sup>{!!$pj_view->big_num!!}{!!'>'!!}{!!$pj_view->st_num!!}</sup></span><br/>
                <span style="text-align: center; color:#FF7E4E"><strong>{!!$pj_view->pj_title!!}</strong></span></h1>
            <ul class="line01">
                <li class="glyphicon glyphicon-time"><span style="font-size: large"><strong> 프로젝트 기간</strong></span></li>
                <span style="margin-left: 100px">~{!!$pj_view->pj_date!!}</span>

            </ul>
            <ul class="line01">
                <li class="glyphicon glyphicon-hourglass"><span style="font-size: large"><strong> 등록마감 기간</strong></span></li>
            </ul>
            <ul class="line01">
                <li class="glyphicon glyphicon-yen"><span style="font-size: large"><strong> 금액</strong></span></li>
                <span style="margin-left: 190px;"><?=number_format($pj_view->pj_price)?>원</span>
            </ul>
            <ul class="line01">
                <li class="glyphicon glyphicon-user"><span style="font-size: large"><strong> 모집인원</strong></span></li>
            </ul>
            <ul class="line01">
                <li class="glyphicon glyphicon-home"><span style="font-size: large"><strong> 위치</strong></span></li>
                <span style="padding-left: 190px">{!!$pj_view->pj_area!!}</span>
            </ul>
            <ul class="line01">
                <li class="glyphicon glyphicon-ok"><span style="font-size: large"><strong> 첨부자료</strong></span></li>
                <a href="{!!route('projectView/{id}download',$pj_view->pj_file)!!}" download="../storage/public/img/{!!$pj_view->pj_file!!}"><i class="glyphicon glyphicon-download"></i>{!!$pj_view->pj_file!!}</a>
            </ul>

        </div>

        <!--modal창 post값으로 보내는 것-->
        <div class="side_contents">

            <div class="btn btn-info" id="side_contents_btn" data-toggle="modal" data-target="#myModal">지원하기</div>

            <!-- Modal -->
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">지원하기</h4>
                        </div>
                        <div class="modal-body">
                            <p>해당 프로젝트에 지원하겠습니까?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">지원</button>


                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>

            <!--프로젝트 자세히 보기 뷰에서 사이드 정보 폼-->
            <div class="side_contents_circle">
                <img src="../img/img001.jpg" class="img-circle" alt="user_image" width="210" height="195">
            </div>
            <div class="side_contents_btn">
                <span><a href="" class="btn btn-default ">メッセージ</a></span>
                <span><a href="" class="btn btn-default ">会社の情報</a></span>

            </div>

        </div>
        <div class="contents_b" style="border: green 1px solid; text-align: left"  >
            <h4><strong>프로젝트 설명</strong></h4>
            <script>
                function resize(obj) {
                    obj.style.height = "1px";
                    obj.style.height = (20+obj.scrollHeight)+"px";
                }
            </script>
            <pre><textarea onkeyup="resize(this)" readonly class="pj_content" style="width: 980px; height:580px; overflow: visible;">{!!$pj_view->pj_content!!}</textarea></pre>
        </div>
        <div class="contents_c" style="border: darkorange 1px solid; text-align: left;">
            <h4><strong>프로젝트 참여 정보</strong></h4>

        </div>
        <div class="contents_d" style="border: indigo 1px solid; text-align: left;">
            <h4>스마트매칭</h4>
        </div>
        <div class="contents_e" style="border: indigo 1px solid; text-align: left;">
            <h4>프로젝트 참여신청자</h4>
        </div>
        <div class="contents_e" style="border: indigo 1px solid; text-align: left;">
            <h4>프로젝트 문의하기</h4>

        </div>
        <div class="contents_f">
            <button type="button" class="btn btn-default btn-lg glyphicon glyphicon-list-alt" onclick="window.location='http://133.130.120.89/projectList/'" style="text-align: center"> 목록으로</button>
        </div>
    </div>

</body>

@endif
</html>


