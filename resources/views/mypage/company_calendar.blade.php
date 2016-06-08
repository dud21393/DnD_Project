@include('layouts.link')
@include('layouts.header')
{{--프로젝트목록 css--}}
<link href="{{ asset('css/fullcalendar.css') }}" rel="stylesheet">
<link href="{{ asset('css/fullcalendar.print.css') }}" rel="stylesheet">
<script src="{{ asset('js/fullcalendar.js') }}"></script>
<script src="{{ asset('js/moment.js') }}"></script>

<script>

    $(document).ready(function() {

        $('#calendar').calendar({
            defaultDate: '2016-05-12',
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            events: [
                {
                    title: 'All Day Event',
                    start: '2016-05-01'
                },
                {
                    title: 'Long Event',
                    start: '2016-05-07',
                    end: '2016-05-10'
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: '2016-05-09T16:00:00'
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: '2016-05-16T16:00:00'
                },
                {
                    title: 'Conference',
                    start: '2016-05-11',
                    end: '2016-05-13'
                },
                {
                    title: 'Meeting',
                    start: '2016-05-12T10:30:00',
                    end: '2016-05-12T12:30:00'
                },
                {
                    title: 'Lunch',
                    start: '2016-05-12T12:00:00'
                },
                {
                    title: 'Meeting',
                    start: '2016-05-12T14:30:00'
                },
                {
                    title: 'Happy Hour',
                    start: '2016-05-12T17:30:00'
                },
                {
                    title: 'Dinner',
                    start: '2016-05-12T20:00:00'
                },
                {
                    title: 'Birthday Party',
                    start: '2016-05-13T07:00:00'
                },
                {
                    title: 'Click for Google',
                    url: 'http://google.com/',
                    start: '2016-05-28'
                }
            ]
        });

    });

</script>
<style>
    body {
        margin: 40px 10px;
        padding: 0;
        font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
        font-size: 14px;
    }
    #sub_menu_btn {
        margin-right: 20px;
        margin-left: 20px;
        margin-top: 20px;
        display: inline-block;
        float: left;
        width: 19%;
        color: black;
    }
    #calendar {
        max-width: 900px;
        margin: 0 auto;
    }



</style>


<div class="container">
    <a href="/companypage/message" id="sub_menu_btn" class="btn btn-default">메세지</a>
    <a href="/companypage/calendar" id="sub_menu_btn" class="btn btn-default">일정관리 </a>
    <a href="/companypage/modify" id="sub_menu_btn" class="btn btn-default">회사정보 수정</a>
    <a href="/companypage/designer" id="sub_menu_btn" class="btn btn-default">지원한 디자이너</a>
    <a href="/companypage/development" id="sub_menu_btn" class="btn btn-default">등록 프로젝트</a>


    <h1>캘린더가 왜 안나올까나</h1>
    <div id='calendar'></div>

@include('layouts.footer')