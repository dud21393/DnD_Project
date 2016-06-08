<html>
<head>
    @include('layouts.link')
</head>
<body>
    @include('layouts.header')

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

        .footer {
            margin: 0 auto;
            padding: 20px;
            width: 1000px;
            height: 90px;
            background-color: #CCCCCC;
        }

        .address {
            width: 100%;
            font-size: 20px;
        }

        .copyright {
            width: 100%;
            font-size: 20px;
            text-align: right;
        }

        #project_search{
            display: inline-block;
            float:right;
            padding : 5px;
        }

        .box {
            width: 80%;
            text-align:center;
            color: white;
            border-width:thin;
            border-style:groove;
            padding:3pt;
            background-color: #213B96;
            margin:1em;
        }

    </style>



    <div class="projectwrite_form">
        <div class="container">
            <h1>프로젝트 등록</h1>
            <div style="width:100%;height:1px;margin:3px 0; margin-top:20px; background-color:#000;"></div>

            <form method="post" action="{{route('projectregister')}}" enctype="multipart/form-data" accept-charset="utf-8">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="div_a">
                <table style="width:100%" border="1px solid">
                    <tr>
                        <th scope="row">
                            <div class="box">
                                <label>대분류 카테고리</label>
                            </div>
                        </th>
                        <td>
                            <input type="text" name="big_num" list="bic_category" style="margin-left: 20px">
                            <datalist id="bic_category">
                                <option value="웹">웹</option>
                                <option value="앱">앱</option>
                            </datalist>
                        </td>
                    </tr>
                    <tr>
                        <td><div class="box">소분류 카테고리</div></td>
                        <td>
                            <input type="text" name="sc_num" list="small_category" style="margin-left: 20px">
                            <datalist id="small_category">
                                <option value="헬스">헬스</option>
                                <option value="음식">음식</option>
                                <option value="동호회">동호회</option>
                                <option value="동창회">동창회</option>
                            </datalist>
                        </td>
                    </tr>
                    <tr>
                        <td><div class="box">프로젝트 제목</div></td>
                        <td>
                            <input type="text" class="pro_title" name="project_title" size="30" style="margin-left: 20px">
                        </td>
                    </tr>
                    <tr>
                        <td><div class="box">모집마감 일자</div></td>
                        <td>
                            <input type="date" name="project_date" min="2016-05-01" max="2026-12-31" step=1 value="" style="margin-left: 20px;">
                        </td>

                    </tr>
                    <tr>
                        <td><div class="box">모집인원</div></td>
                        <td>
                            <input type="text" class="pj_people" name="pj_people" size="3" style="margin-left: 20px">명
                        </td>
                    </tr>
                    <tr>
                        <td><div class="box">예상금액</div></td>
                        <td>
                            <input name="mypay" type="text" style="text-align:right; margin-left: 20px">
                            원</td>
                        </td>
                    </tr>
                    <tr>
                        <td><div class="box">예상기간</div></td>
                        <td>
                            <input name="expect_date" type="text" style="text-align:right; margin-left: 20px">
                            일</td>
                        </td>
                    </tr>
                    <tr>
                        <td><div class="box">지역</div></td>
                        <td>
                            <input type="text" name="area" list="area_list" style="margin-left: 20px">
                            <datalist id="area_list">
                                <option value="서울">서울</option>
                                <option value="경기권">경기권</option>
                                <option value="인천">인천</option>
                                <option value="대전">대전</option>
                                <option value="대구">대구</option>
                                <option value="울산">울산</option>
                                <option value="부산">부산</option>
                                <option value="광주">광주</option>
                                <option value="제주도">제주도</option>
                            </datalist>
                        </td>
                    </tr>
                    <tr>
                        <td><div class="box">프로젝트 키워드</div></td>
                        <th scope="row" lowspan="3">
                            <ul style="list-style: none; margin-left: 20px; display: inline; word-spacing: 15px; line-height: 30px">
                                <input type=checkbox name=abc[] value="1">PHP
                                <input type=checkbox name=abc[] value="2">CodeIgniter
                                <input type=checkbox name=abc[] value="3">Laravel
                                <input type=checkbox name=abc[] value="4">HTML5
                                <input type=checkbox name=abc[] value="5">JAVA
                                <input type=checkbox name=abc[] value="6">C
                                <input type=checkbox name=abc[] value="7">C++
                                <input type=checkbox name=abc[] value="8">ASP
                                <input type=checkbox name=abc[] value="9">JSP
                                <input type=checkbox name=abc[] value="10">JS
                                <input type=checkbox name=abc[] value="11">C#</br>
                                <input type=checkbox name=abc[] value="12" style="margin-left: 20px">Android
                                <input type=checkbox name=abc[] value="13">DB
                                <input type=checkbox name=abc[] value="14">CSS
                                <input type=checkbox name=abc[] value="15">ASP.NET
                                <input type=checkbox name=abc[] value="16">IOS
                                <input type=checkbox name=abc[] value="17">LINUX
                                <input type=checkbox name=abc[] value="18">PYTHON
                            </ul>
                        </th>
                    </tr>
                    <tr>
                        <td><div class="box">프로젝트 내용</div></td>
                        <td>
                            {{--<input type="text" class="pro_content" name="project_content" size="40">--}}
                            <textarea id="project_content" name="project_content" style="width: 800px; height: 600px;">
                        
1.프로젝트 명:

2.현재개발진행사항
1)총투입인력:
2)현재설계개발상태:

3.담당업무
1)

4.업무범위:

5.전달사항또는(개발)우대사항:
1)

6.필요인력:명

7.개발자필요Spec
1)
2)

8.근무지:

9.개발기간:

10.월단가:제시바람

11.장비지참여부:</textarea></td>
                    </tr>
                    <tr>
                        <td><div class="box">관련파일</div></td>
                        <td>
                            <div class="form-group">
                                {!! Form::file('image',null)!!}
                                <input type="hidden" name="thumbnail" value=""/>
                            </div>

                        </td>
                    </tr>
                </table>
                <input type="submit" value="등록">
                </div>
            </form>
        </div>
    </div>

</body>
</html>
