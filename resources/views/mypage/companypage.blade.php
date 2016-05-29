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
    #mypage_btn { background-color: #FF7E4E; }
    #mypage_btn:hover { background-color: #E36133; }

</style>
    <div class="container">
        <a href="/companypage/message" id="sub_menu_btn" class="btn btn-default">메세지</a>
        <a href="/companypage/modify" id="sub_menu_btn" class="btn btn-default">회사정보 수정</a>
        <a href="/companypage/designer" id="sub_menu_btn" class="btn btn-default">지원한 디자이너</a>
        <a href="/companypage/development" id="sub_menu_btn" class="btn btn-default">등록 프로젝트</a>

        <!-- 회사정보 불러오기 -->
        @foreach($results as $result)
            @if($result)
                {{ $result->m_name }}
                {{ $result->m_phone }}
                {{ $result->m_email }}
                {{ $result->cp_info }}
                {{ $result->cp_represent }}
            @endif
        @endforeach

@include('layouts.footer')