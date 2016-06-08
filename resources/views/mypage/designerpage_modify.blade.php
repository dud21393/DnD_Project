@extends('mypage.designer_header')
<style>
    .subject{
        border-bottom: 3px solid #ff6666;
    }
    .designer_face{
        margin-top:30px;
        margin-left:20px;
        width: 350px;
        height: 350px;
        border-radius: 180px;
        border:solid 1px #000;
    }
    .info {
        width: 590px;
        height: 400px;
        display: inline-block;
    }
    .wrapper{
        width:400px;
        height: 400px;
        display: inline-block;
    }
    .td_left{
        text-align: center;
        border-right: 3px solid #000;
        border-bottom: 3px solid #000;
        width:150px;
        font-size:25px;
    }
    .td_right{
        border-bottom: 3px solid #000;
    }
    #table{
        margin-top:30px;
        width: 570px;
        height: 400px;
        margin-left: 20px;
    }
    #info_bottom{
        border:dotted 1px #000;
        margin-top:30px;
        width:1000px;
        height:300px;
    }
    #comment{
        resize: none;
    }
    #button_container {
        width: 1000px;
        background-color: #2aabd2;
        height:30px;
    }
    #modify_button{
        margin-left: 450px;
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
</style>
@section('designer_section')
    <div class="designer_information">
        <form action="" method="post">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <h2 class="subject">정보</h2>
            <div class="wrapper">
                <div class="designer_face">
                </div>
            </div>
            <div class="info">
                <table id="table">
                    <tr>
                        <td class="td_left">이름</td>
                        <td class="td_right">
                            <div style="margin-left: 20px">
                                <input type="text" class="form-control input-lg" value="{{$results->m_name}}">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="td_left">연락처</td>
                        <td class="td_right">
                            <div style="margin-left: 20px">
                                <input type="text" class="form-control input-lg" value="{{$results->m_phone}}">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="td_left">E-mail</td>
                        <td class="td_right">
                            <div style="margin-left: 20px">
                                <input type="text" class="form-control input-lg" value="{{$results->m_email}}">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="td_left">거주지</td>
                        <td class="td_right">
                            <div style="margin-left: 20px">
                                <input type="text" class="form-control input-lg" value="{{$results->m_area}}">
                            </div>
                        </td>
                    </tr>
                </table>
            </div>

            <h2 class="subject">자기소개</h2>
            <div class="form-group">
                <textarea class="form-control" rows="5" id="comment">
                    {{$designer->ds_info}}
                </textarea>
            </div>
    </div>
@stop

