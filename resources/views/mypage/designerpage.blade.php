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
        <!-- 디자이너 개인정보  -->

        @foreach($results as $result)
            @if($result)
                {{ $result->m_name }}
                {{ $result->m_phone }}
                {{ $result->m_email }}
                {{ $result->ds_info }}
            @endif
        @endforeach

@include('layouts.footer')