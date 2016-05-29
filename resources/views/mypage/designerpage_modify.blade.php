@include('layouts.link')
@include('layouts.header')
<style>
    #sub_menu_btn{
        margin-right: 20px;
        margin-left: 20px;
        margin-top: 20px;
        display: inline-block;
        float: left;
        width: 19%;
        color: black;
    }
</style>
<div class="container">
    <a href="/designerpage/message" id="sub_menu_btn" class="btn btn-default">메세지</a>
    <a href="/designerpage/modify" id="sub_menu_btn" class="btn btn-default">개인정보 수정</a>
    <a href="/designerpage/project" id="sub_menu_btn" class="btn btn-default">지원한 프로젝트</a>
        <!-- 디자이너 개인정보 수정 -->

        @foreach($results as $result)
            @if($result)
                <form method="post" action="/designerpage/modify/{{$result->m_num}}" >
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name='m_num'value="{{$result->m_num}}" >
                    <input type="text" name='m_name' value="{{ $result->m_name }}" maxlength="20"/>
                    <input type="text" name='m_phone' value="{{ $result->m_phone }}" maxlength="20"/>
                    <input type="text" name='m_email' value="{{ $result->m_email }}" maxlength="20"/>
                    <textarea rows="7"cols="30" name="ds_info"> {{ $result->ds_info }}</textarea>
                    <input type="submit" value="수정하기">
                </form>
            @endif
        @endforeach
@include('layouts.footer')