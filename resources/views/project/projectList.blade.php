<html>
<head>

    @include('layouts.link')


    <style>
        ul {
            padding: 0em;
        }

        ul li, ul li ul li {
            position:relative;
            top:0;
            bottom:0;
            padding-bottom: 7px;

        }

        ul li ul {
            margin-left: 4em;
        }

        li {
            list-style-type: none;
        }

        li a {
            padding:0 0 0 10px;
            position: relative;
            top:1em;
        }

        li a:hover {
            text-decoration: none;
        }

        a.addBorderBefore:before {
            content: "";
            display: inline-block;
            width: 2px;
            height: 28px;
            position: absolute;
            left: -47px;
            top:-16px;
            border-left: 1px solid gray;
        }

        li:before {
            content: "";
            display: inline-block;
            width: 25px;
            height: 0;
            position: relative;
            left: 0em;
            top:1em;
            border-top: 1px solid gray;
        }

        ul li ul li:last-child:after, ul li:last-child:after {
            content: '';
            display: block;
            width: 1em;
            height: 1em;
            position: relative;
            background: #fff;
            top: 9px;
            left: -1px;
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


        .little_menu a {
            margin-right: 10px;
        }

        .container {
            margin: 0 auto;
            width: 1000px;
            height: 2500px;
        }

        #btn_write{
            display: inline-block;
            float:right;
            padding : 5px;
            width : 10%;
            color:#CCCCCC;
            background-color: #213B96;
        }

        .p{
            margin:0 auto;
            display:table-cell;
            text-align:left;
            vertical-align:middle;
        }

        .a_div{
            float: right;
            text-align:right;
            margin-top: 30px;
            margin-left : 10px;
            margin-bottom : 22px;
            border: 2px solid;
            width:70%;
            height:250px;
        }

        .left_side_menu{
            float: left;
            margin-top: 12px;
            display: inline-block;
            height: 2100px;
            width: 28%;
            text-align: center;

        }

        .left_side_menu_a{
            border-width: thin;
            border-style: solid;
            height: 80px;
        }

        .left_side_menu_b{
            border-width: thin;
            border-style: solid;
            height: 580px;
            text-align: left;
            padding-left: 20px;
        }
        .left_side_menu_c{
            border-width: thin;
            border-style: solid;
            height: 80px;
            text-align: center;

        }

        #title{
            margin:0 auto;
            width:1000px;
            margin-left:-15px;
        }

        .db_data_form{
            text-align: left;
        }


        .circle{
            text-align: center;
            display:inline-block;
            margin:0 auto 0;
            margin-top: 5px;
        }
         .div_2_a{
             display:inline-block;
             margin-right:1px;
             width:90px;
             height:80px;

             text-align:center;
             padding:4px;
             text-decoration: black solid;

         }


        #wrapper_a{
            margin-left: -15px;
            display: inline-block;
            width: 1000px;

        }

        .left-box{
            margin:0 auto 0;
            display: inline-block;
            width: 135px;
            height: 100px;
        }

        .right-box{
            margin:0 auto 0;
            display: inline-block;
            width: 135px;
            height: 100px;

        }
        .sort-box-title{
            margin:0 auto 0;
            display: inline-block;
            text-align: center;
            width: 280px;
            font-size: 17px;
            background-color:#CCCCCC;
        }

        .category-box-title{
            margin:0 auto 0;
            display: inline-block;
            text-align: center;
            width: 280px;
            font-size: 17px;
            background-color:#CCCCCC;
        }

        .circle {
            width:50px;
            height:50px;
            border-radius:25px;
            -moz-border-radius : 25px;
            -webkit-border-radius : 25px;
            -ms-border-radius :25px;
            -khtml-border-radius : 25px;
            -o-border-radius :25px;
            background:#66F;
            font:normal 11px/50px "나눔고딕", "돋움", "굴림";
            color:#fff;
            text-align:center;
        }

        .div_3{
            font-size: 16px;
            margin-left: 18px;
            width: 95%;
            margin-top: 10px;
            display: inline-block;
            text-align: left;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 3; /* 라인수 */
            -webkit-box-orient: vertical;
            word-wrap:break-word;
            line-height: 1.3em;
            height: 3.9em; /* line-height 가 1.2em 이고 3라인을 자르기 때문에 height는 1.2em * 3 = 3.6em */
        }

        .div_4 {
            margin-top: 3px;
            text-align: left;
            display: inline-block;
            font-size: 16px;
            width: 95%;
        }

        .div_pj_price{
            font-size: 15px;
            display: inline-block;
            float: left;
            margin-top: -59px;
            margin-left: 30px;
            margin-bottom: 10px;

            vertical-align: middle;
            padding-right: 3px;
            text-align: center;
        }

        .pagenate{
            list-style: none;
            text-align: center;
        }

        .hiddenStepInfo {
            display: none;
        }

        .activeStepInfo {
            display: block !important;
        }

        .underline {
            text-decoration: underline;
        }

        .step {
            margin-top: 27px;
            text-align: center;
        }

        .step .col-md-2 {
            background-color: #fff;
            border: 1px solid #C0C0C0;
            border-right: none;
        }

        .step .col-md-2:last-child {
            border: 1px solid #C0C0C0;
        }

        .step .col-md-2:first-child {
            border-radius: 5px 0 0 5px;
        }

        .step .col-md-2:last-child {
            border-radius: 0 5px 5px 0;
        }

        .step .col-md-2:hover {
            color: #F58723;
            cursor: pointer;
        }

        .step .activestep {
            color: #F58723;
            height: 100px;
            margin-top: -7px;
            padding-top: 7px;
            border-left: 6px solid #5CB85C !important;
            border-right: 6px solid #5CB85C !important;
            border-top: 3px solid #5CB85C !important;
            border-bottom: 3px solid #5CB85C !important;
            vertical-align: central;
        }

        .step .fa {
            padding-top: 15px;
            font-size: 40px;
        }

        .label.label-default{
            font-size: 12px;
        }


    </style>

    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">

</head>

<body>
 @include('layouts.header')

    <div class="container">
        <div id="title" style="background-color:#D3D3D3; height:135px; text-align:left; vertical-align: middle">
            <p class="p"><h1><strong>프로젝트 찾기</strong></h1>
            <h5>현재 {{\App\Projects::count()}}개 의 프로젝트가 등록되어 있습니다.</h5></p>

            <!--프로젝트 검색 버튼-->
            <form id="custom-search-form" class="form-search form-horizontal pull-right" action="{{route('projectList')}}" method="get">
                <div class="input-append spancustom">
                    <input type="text" class="search-query" name="term" placeholder="Search..">
                    <button type="submit" class="btn btn-default">
                        <i class="glyphicon glyphicon-search"></i>
                    </button>
                </div>
            </form>
            <!--프로젝트등록 버튼 -->
            <a href="{!!route('projectwrite')!!}"  id = "btn_write" class="btn btn-default">프로젝트 등록</a>
        </div>

    <div id="wrapper_a">
        <script>
            function pj_arrangement_1(){
                $.ajax({
                    headers:
                    {
                        'X-CSRF-Token': $('input[name="_token"]').val()
                    },
                    url:'{!! route('divisionlist') !!}',
                    data:{
                        'division':'웹'       //이 데이터를 보냄
                    },
                    dataType:'json',          //어떤형식으로 응답 받을 건가
                    type:'post',              //어떤 형식으로 전달
                    success:function(data) {   //서버가 이런 해주는 값\
                        console.log(data);
                        $("#main").html('');
                        $("#main").append(data.result);
                    },

                    error:function(data){
                        console.log(data);
                        window.alert('error');
                    }
                });
            }

            function pj_arrangement_2(){
                $.ajax({
                    url:'{!! route('divisionlist') !!}',
                    data:{
                        'division':'앱'
                    },
                    dataType:'json',
                    type:'post',
                    success:function(data){
                        $('#main').remove();



                    },
                    error:function(data){

                    }
                });
            }
        </script>

        <div class="left_side_menu">
            <div style="width:100%;height:1px;margin:3px 0; margin-top:20px; background-color:#000;"></div>
            <div class="sort-box-title" style="font-size: 20px">프로젝트 정렬</div>
            <div style="width:100%;height:1px;margin:3px 0; background-color:#000;"></div>

            <div class="left_side_menu_a">
                <div class="left-box">
                   <div class="price_box1" style="text-align: center; margin-top: 20px; border-right: #000000 1px solid"><a href="{!!route('projectList/arrangePrice/{post}','high')!!}">금액 높은순</a></div>
                    <div class="price_box2" style="text-align: center; border-right: #000000 1px solid"><a href="{!!route('projectList/arrangePrice/{post}','low')!!}">금액 낮은순</a></div>
                </div>
                <div class="right-box">
                    <div class="price_box3" style="text-align: center; margin-top: 20px"><a href="{!!route('projectList/arrangePrice/{post}','high')!!}">최신 등록순</a></div>
                    <div class="price_box4" style="text-align: center"><a href="{!!route('projectList/arrangePrice/{post}','low')!!}">마감 임박순</a></div>
                </div>
            </div>

            <div style="width:100%;height:1px;margin:3px 0; margin-top:20px; background-color:#000;"></div>
                <div class="category-box-title" style="font-size: 20px">프로젝트 카테고리</div>
            <div style="width:100%;height:1px;margin:3px 0; background-color:#000;"></div>

            <div class="left_side_menu_b">
                <ul>
                    <li><a href="#">개발</a>
                        <ul>
                            <li><input type="checkbox" name="web" value="1" onclick="pj_arrangement_1()">웹</li>
                            <li><input type="checkbox" >어플리케이션</li>
                        </ul>
                    </li>
                    <li><a href="#">디자인</a>
                        <ul>
                            <li><input type="checkbox" >웹</li>
                            <li><input type="checkbox" >어플리케이션</li>
                        </ul>
                    </li>
                    <li><a href="#">기술키워드</a>
                        <ul>
                            <li><input type="checkbox" >PHP</li>
                            <li><input type="checkbox" >CodeIgniter</li>
                            <li><input type="checkbox" >Lravel</li>
                            <li><input type="checkbox" >HTML5</li>
                            <li><input type="checkbox" >JAVA</li>
                            <li><input type="checkbox" >C</li>
                            <li><input type="checkbox" >C++</li>
                            <li><input type="checkbox" >Android</li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div style="width:100%;height:1px;margin:3px 0; margin-top:20px; background-color:#000;"></div>
            <div class="category-box-title" style="font-size: 20px">프로젝트 지역</div>
            <div style="width:100%;height:1px;margin:3px 0; background-color:#000;"></div>
            <div class="left_side_menu_c">
                <form id="area_custom-search-form" class="form-search_a form-horizontal pull-left " action="{{route('projectList')}}" method="get">

                    <div class="form-group-b" style="margin-top: 30px; margin-left: 30px">
                        <input type="text" name="area" list="area_list" placeholder="9개지역 선택가능">
                        <button type="submit" class="btn btn-default">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                        <datalist id="area_list">
                            <option value="서울">서울</option>
                            <option value="경기권">경기권</option>
                            <option value="인천">인천</option>
                            <option value="대전">대전</option>
                            <option value="대구">대구</option>
                            <option value="울산">울산</option>
                            <option value="부산">부산</option>
                            <option value="광주">광주</option>
                            <option value="광주">강원도</option>
                            <option value="제주도">제주도</option>
                        </datalist>
                    </div>
                </form>
            </div>

            </div>

        <!--게시물이 출력되는 폼-->
        <div id="main">
            @foreach($results as $result)
             <a href="{!!route('projectView/{pj_num}',$result->pj_num)!!}">
            <div class="a_div" style="text-align: center">
                <div class="div_1" style="text-align: left">
                <span class="db_data_form" style="font-size: 35px;">
                    {{$result->pj_title}}
                </span>
            </div>

            <div class="div_1_a">
                <div class="div_pj_date" style="float: right; margin-top: -27px">
                    <ul><span class="glyphicon glyphicon-yen"></span>등록일자 : <?=number_format($result->pj_price)?>원
                    </ul>
                </div>
            </div>
            <div style="width:100%;height:2px;margin:1px 0;background-color:#000;"></div>
            <div class="div_2" style="text-align: center">
                <div class="div_2_a" style="border-right: 1px darkblue solid"><span>대_카테고리</span><div class="circle">{!!$result->big_num!!}</div></div>
                <div class="div_2_a" style="border-right: 1px darkblue solid">소_카테고리<div class="circle" style="background-color: #8c8c8c">{!!$result->sc_num!!}</div></div>
                <div class="div_2_a" style="border-right: 1px darkblue solid">마감일<div class="circle">5/21</div></div>
                <div class="div_2_a" style="border-right: 1px darkblue solid">예상기간<div class="circle">{!!$result->expect_date!!}일</div></div>
                <div class="div_2_a" style="border-right: 1px darkblue solid">모집인원<div class="circle">{!!$result->pj_people!!}명</div></div>
                <div class="div_2_a" style="letter-spacing: 5px; border-right: 1px darkblue solid">지역<div class="circle">{!!$result->pj_area!!}</div></div>
                <div class="div_2_a">진행상태
                    <div class="circle">5</div>
                </div>
            </div>
            <div style="width:100%;height:2px;margin:1px 0;background-color:#000;"></div>
            <div class="div_3">
                {!! $result->pj_content !!}
            </div>
            <div style="width:100%;height:2px;margin:1px 0;background-color:#000;"></div>

            <div class="div_4" style="text-align: left;  margin-left: 15px" >
                <span class="glyphicon glyphicon-yen"></span><span style="border-right: 1px solid; padding-right: 10px">예상금액 : <?=number_format($result->pj_price)?>원</span>
                   <div class="glyphicon glyphicon-pencil" style="margin-left: 10px">요구기술</div>
                        <span class="label label-default">PHP</span> <span class="label label-default">JAVA</span>
                   </div>
            </div>
    </a>
@endforeach
    <div class="pagenate" >
        {!!$results->render()!!}
    </div>
</div>

</div>

</div>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
// Select the main list and add the class "hasSubmenu" in each LI that contains an UL
$('ul').each(function(){
    $this = $(this);
    $this.find("li").has("ul").addClass("hasSubmenu");
});
// Find the last li in each level
$('li:last-child').each(function(){
    $this = $(this);
    // Check if LI has children
    if ($this.children('ul').length === 0){
        // Add border-left in every UL where the last LI has not children
        $this.closest('ul').css("border-left", "1px solid gray");
    } else {
        // Add border in child LI, except in the last one
        $this.closest('ul').children("li").not(":last").css("border-left","1px solid gray");
        // Add the class "addBorderBefore" to create the pseudo-element :defore in the last li
        $this.closest('ul').children("li").last().children("a").addClass("addBorderBefore");
        // Add margin in the first level of the list
        $this.closest('ul').css("margin-top","20px");
        // Add margin in other levels of the list
        $this.closest('ul').find("li").children("ul").css("margin-top","20px");
    };
});
// Add bold in li and levels above
$('ul li').each(function(){
    $this = $(this);
    $this.mouseenter(function(){
        $( this ).children("a").css({"font-weight":"bold","color":"#336b9b"});
    });
    $this.mouseleave(function(){
        $( this ).children("a").css({"font-weight":"normal","color":"#428bca"});
    });
});
// Add button to expand and condense - Using FontAwesome
$('ul li.hasSubmenu').each(function(){
    $this = $(this);
    $this.prepend("<a href='#'><i class='fa fa-minus-circle'></i><i style='display:none;' class='fa fa-plus-circle'></i></a>");
    $this.children("a").not(":last").removeClass().addClass("toogle");
});
// Actions to expand and consense
$('ul li.hasSubmenu a.toogle').click(function(){
    $this = $(this);
    $this.closest("li").children("ul").toggle("slow");
    $this.children("i").toggle();
    return false;
});
</script>




</body>
</html>

