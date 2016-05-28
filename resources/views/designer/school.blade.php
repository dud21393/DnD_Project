@extends('designer.header')
@section('d_style')
<style>
    .middle{
    width:1000px;
    margin: 0 auto;
    height:800px;
    }
    .page{
    margin-top:30px;
    margin-left:10%;
    }
    .ul_title{
    margin-top:10px;
    width:830px;
    border-top:1px solid;
    border-bottom:1px solid;
    background-color:#F45F43;
    font-size:20px;
    }
    .ul_title2{
    width:830px;
    border-bottom:1px solid;
    padding-bottom:10px;
    }
    .li_line1{
    list-style:none;
    display:inline-block;
    font-size:15px;
    text-align:center;
    width:200px;
    }
    .li_line2{
    list-style:none;
    display:inline-block;
    font-size:15px;
    width:200px;
    text-align:center;
    }
    .li_line3{
    list-style:none;
    display:inline-block;
    font-size:15px;
    width:150px;
    text-align:center;
    }
    .li_line4{
    list-style:none;
    display:inline-block;
    font-size:15px;
    width:200px;
    text-align:center;
    }
    .li_line5{
    list-style:none;
    display:inline-block;
    font-size:15px;
    width:250px;
    text-align:center;
    }
    .li_line6{
    list-style:none;
    display:inline-block;
    font-size:15px;
    width:250px;
    text-align:center;
    }
    .li_line7{
    list-style:none;
    display:inline-block;
    font-size:15px;
    width:250px;
    text-align:center;
    }
    .li_line8{
    list-style:none;
    display:inline-block;
    font-size:15px;
    width:200px;
    text-align:center;
    }
    h4{
    font-size:25px;
    }
    .subject{
    margin-top:50px;
    }
</style>
@stop

@section('d_content')
    <div class="middle">
        <div class="page">
            <section>
                <h4>학력</h4>
                <ul class="ul_title">
                    <li class="li_line1">학교명</li>
                    <li class="li_line2">전공</li>
                    <li class="li_line3">졸업일</li>
                    <li class="li_line4">상태</li>
                </ul>
                <ul class="ul_title2">
                    @foreach($academy_list as $row);
                        <li class="li_line1">{{$row->ac_name}}</li>
                        <li class="li_line2">{{$row->ac_specialty}}</li>
                        <li class="li_line3">{{$row->ac_date}}</li>
                        <li class="li_line4">@if($row->ud_num == 1) 졸업 @else 재학중 @endif</li>
                    @endforeach
                </ul>
            </section>
            <section>
                <h4 class="subject">경력</h4>
                <ul class="ul_title">
                    <li class="li_line1">회사명</li>
                    <li class="li_line2">부서</li>
                    <li class="li_line3">직위</li>
                    <li class="li_line4">근무기간</li>
                </ul>
                <ul class="ul_title2">
                    @foreach($career_list as $row)
                        <li class="li_line1">{{$row->cr_name}}</li>
                        <li class="li_line2">{{$row->cr_content}}</li>
                        <li class="li_line3">{{$row->cr_position}}</li>
                        <li class="li_line4">{{$row->cr_start_date}}~{{$row->cr_end_date}}</li>
                    @endforeach
                </ul>

            </section>

            <section>
                <h4 class="subject">자격증</h4>
                <ul class="ul_title">
                    <li class="li_line6">이름</li>
                    <li class="li_line7">발행기관</li>
                    <li class="li_line8">취득날짜</li>
                </ul>
                <ul class="ul_title2">
                    @foreach($licenese_list as $row)
                        <li class="li_line6">{{$row->lic_name}}</li>
                        <li class="li_line7">{{$row->lic_pyot}}</li>
                        <li class="li_line8">{{$row->lic_date}}</li>
                    @endforeach
                </ul>

            </section>

            <section>
                <h4 class="subject">보유기술</h4>
                <ul class="ul_title">
                    <li class="li_line6">이름</li>
                    <li class="li_line7">숙련도</li>
                    <li class="li_line8">연차</li>
                </ul>
                <ul class="ul_title2">
                    @foreach($skill_list as $row)
                        <li class="li_line6">{{$row->sk_name}}</li>
                        <li class="li_line7">{{$row->sk_grade}}</li>
                        <li class="li_line8">{{$row->sk_time}}년</li>
                    @endforeach
                </ul>
            </section>

        </div>
    </div>
@stop