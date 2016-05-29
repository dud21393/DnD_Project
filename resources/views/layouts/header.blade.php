
<link href="{{{ asset('css/header.css') }}}" rel="stylesheet">

  <div class="header">
   
    <div class="title">
        <img class="logo" src="{{{ asset('img/logo.png') }}}" alt="D&D">
        <a href="/">Designer & Developer</a>
    </div>
    
    <div class="little_menu">
        <a href="/">홈</a>
        @if(!Session::has('m_info'))
        <a href="#" data-toggle="modal" data-target="#loginModal" >로그인</a>
        <a href="#" data-toggle="modal" data-target="#joinModal" >회원가입</a>
        @else
        <a href="/member/logout" >로그아웃</a>
        @endif
        @if(Session::has('m_info'))
            <!-- div_member가 1이면 디자이너 -->
            @if(Session::get('div_member') == 1)
                <a href="/designer_page">마이페이지</a>
            <!-- div_member가 2이면 개발사 -->
            @elseif(Session::get('div_member' == 2))
                <a href="/companypage/">마이페이지</a>
            @endif
        @endif
    </div>

    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" role="dialog">
        <div class="modal-dialog modal-sm">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header myBgColorB">
                    <button type="button" class="close myBgColorB" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Login</h4>
                </div>
                <form class="form-horizontal" action="/member/signin" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">ID</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="m_id" placeholder="ID" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">PW</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="m_pw" placeholder="PW" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn myBgColorB">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Join Modal -->
    <div class="modal fade" id="joinModal" role="dialog">
        <div class="modal-dialog modal-sm">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header myBgColorB">
                    <button type="button" class="close myBgColorB" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Join</h4>
                </div>
                <form id="join_form" class="form-horizontal" action="/member/signup" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="modal-body">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <label class="radio-inline"><input type="radio" name="div_member" value="1" checked>Designer</label>
                                <label class="radio-inline"><input type="radio" name="div_member" value="2">Developer</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputID" class="col-sm-3 control-label">ID</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="m_id" id="inputID" placeholder="ID" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPW" class="col-sm-3 control-label">PW</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" name="m_pw" id="inputPW" placeholder="PW" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputName" class="col-sm-3 control-label">NAME</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="m_name" id="inputName" placeholder="Name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputTel" class="col-sm-3 control-label">TEL</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="m_phone" id="inputTel" placeholder="Tel" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="col-sm-3 control-label">EMAIL</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="m_email" id="inputEmail" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputArea" class="col-sm-3 control-label">AREA</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="m_area" id="inputArea" placeholder="Area" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" id="submit_btn" class="btn myBgColorB">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <div class="menu_bar">
        <a href="#" id="top_menu_btn" class="btn btn-default">소개</a>
        <a href="" id="top_menu_btn" class="btn btn-default">프로젝트</a>
        <a href="/designer" id="top_menu_btn" class="btn btn-default">디자이너 찾기</a>
        <a href="/work" id="top_menu_btn" class="btn btn-default">협업</a>
        <a href="/help/index" id="top_menu_btn" class="btn btn-default">고객센터</a>

    </div>
    
    <script>

        var global_id_check = false;

        $(function() {

            //$.ajaxSetup({ headers: { 'csrf_token' : '{{ csrf_token() }}' } });

            $('#inputID').keyup(function() {

                var form_data = { "m_id" : $('#inputID').val(), "_token": '{{ csrf_token() }}'};

                $.ajax({
                    url:'/member/id_check',
                    dataType:'json', //어떤 형식으로 응답받을 것인가?
                    type:'post',     //어떤 형식으로 전달할 것인가?
                    data: form_data, //객체형체로 기술
                    success:function(data){ //서버가 리턴해준 값
                        global_id_check = data
                        if(data) {
                            $('#inputID').css('border', '1px solid red');
                            $('#inputID').css('box-shadow', '0 0 5px 0 red');
                        } else {
                            $('#inputID').css('border', '1px solid lightgreen');
                            $('#inputID').css('box-shadow', '0 0 5px 0 lightgreen');
                        }
                    },
                    error:function(err) {
                        $(".address").html(err.responseText);
                    }
                })
            });

        });

    </script>
    
</div>