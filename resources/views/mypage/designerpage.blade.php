@extends('mypage.designer_header')
<style>
    .subject{
        border-bottom: 3px solid #ff6666;
    }
    .designer_face{
        margin: 0 auto;
        width: 350px;
        height: 350px;
        border-radius: 180px;
        background-color: #ff6666;
    }
    .info {
        width: 590px;
        height: 400px;
        background-color: #2aabd2;
        display: inline-block;
    }
    .wrapper{
        width:400px;
        height: 400px;
        display: inline-block;
    }
    .td_left{
        border-right: 3px solid #ffff00;
        width:150px;
        font-size:28px;
    }
    .td_right{
        font-size: 28px;
    }
    #table{
        width: 400px;
        height: 400px;
        margin-left: 20px;
    }
    #info_bottom{
        background-color: #2aabd2;
        margin-top:30px;
        width:1000px;
        height:300px;
    }

</style>
@section('designer_section')
    <div class="designer_information">
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
                            {{$results->m_name}}
                        </div></td>
                </tr>
                <tr>
                    <td class="td_left">연락처</td>
                    <td class="td_right">
                        <div style="margin-left: 20px">
                            {{$results->m_phone}}
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="td_left">E-mail</td>
                    <td class="td_right">
                        <div style="margin-left: 20px">
                            {{$results->m_email}}
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="td_left">거주지</td>
                    <td class="td_right">
                        <div style="margin-left: 20px">
                            {{$results->m_area}}
                        </div>
                    </td>
                </tr>
            </table>
        </div>

        <h2 class="subject">자기소개</h2>
        <div id="info_bottom">

        </div>
        <h2 class="subject">보유기술</h2>
        <div id="info_bottom">

        </div>
        <h2 class="subject">학력</h2>
        <div id="info_bottom">

        </div>
    </div>
@stop

