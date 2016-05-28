<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Designer & Developer</title>
    <script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="http://d3js.org/d3.v3.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/highcharts-more.js"></script>
    <script src="http://code.angularjs.org/1.2.6/angular.js"></script>
    <script src="http://code.angularjs.org/1.2.6/angular-animate.js"></script>

    <link href="{{{ asset('css/ds_header.css') }}}" rel="stylesheet">

    @yield('d_style')

    </head>
    <body>
    <div class="top_menu_bar">
        <div class="btn_container">
            <div class="title">
                {{$name}}
            </div>
            <div class="menu_btn_con">
                <a href="/designer/school/1" data-transition="slide">
                    <div class="portlog_btn">
                        학력
                    </div>
                </a>
                <a href="/designer/career/1">
                    <div class="portlog_btn">
                        경력
                    </div>
                </a>
                <a href="/designer/portfolio/1">
                    <div class="portlog_btn">
                        포폴
                    </div>
                </a>
                <a href="/designer/intro/1">
                    <div class="portlog_btn">
                        소개
                    </div>
                </a>
                <a href="/designer/1">
                    <div class="portlog_btn">
                        목록
                    </div>
                </a>
            </div>
        </div>
    </div>
    @yield('d_content')
    </body>
</html>


