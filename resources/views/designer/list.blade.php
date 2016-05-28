@include('layouts.header')
@include('layouts.link')
<style>
    .container {
      margin: 0 auto;
      width: 1000px;
      height: auto;
      border-radius:30px
    }

    .service_info {
      margin: 10px auto;
      width: 80%;
      height: 90px;
      background-color: #CCCCCC;
      border-radius:30px;
    text-align:center;
    }

    #sub_menu_btn {
      margin : auto;
    margin-left: 82px;
    margin-right: 82px;
      margin-top: 30px;
      display: inline-block;
      width: 19%;
      color: white;
      background-color: #213B96;
    }

    .middle{
        text-align:center;
        background-color:red;
        width:1000px;
        height:600px;
        margin :0 auto;
    }
    .col-md-4{
      margin-left:71px;
      border:1px solid;
      width:250px;
      height:280px;
      background-color:white;
      border-radius:30px;
    }
    .face_img{
      margin:0 auto;
      background-color:blue;
      width:150px;
      height:140px;
      border-radius:70px
    }
    #page_num{
        text-align: center;
    }
    .row{
        padding-top:20px;
    }

</style>

    <div class="container">
        <div class="service_info">
            <a href="/designer/index/project" id="sub_menu_btn" class="btn btn-default">진행한 프로젝트 수</a>
            <a href="/designer/index/portfolio" id="sub_menu_btn" class="btn btn-default">포트폴리오 수</a>
        </div>
    </div>

    <div class="middle">
            <div class="row">
                @foreach($m_list as $row)
                    <a href='/designer/{{$row->m_num}}'>
                        <div class="col-md-4">
                            <div class="face_img">
c
                            </div>
                            <h3>{{$row->m_name}}</h3>
                            <p>완료한 프로젝트   :
                                @if($row->pj_count==null)
                                    0
                                @else
                                    {{$row->pj_count}}
                                @endif
                            </p>
                            <p>포트폴리오 갯수 : {{$row->pt_count}} </p>
                        </div>
                    </a>
                @endforeach
            </div>
    </div>
<div id="page_num">
    {{$m_list->links()}}
</div>
@include('layouts.footer')