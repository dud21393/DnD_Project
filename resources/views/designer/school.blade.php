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
    h4{
    font-size:25px;
    }
    .subject{
    margin-top:50px;
    }
    .skill_title{
        border-top: 1px dotted #000;
        border-bottom: 1px dotted #000;
        width: 815px;
        height: 30px;
    }
    .sk_title{
        margin-top: 5px;
        display: inline-block;
        width: 250px;
        text-align: center;
    }
    .skill_menu{
        margin-top: 10px;
    }
    .sk_title{
         display: inline-block;
         min-width:250px;
         width: 250px;
         text-align: center;
     }
    .sk_title2{
        display: inline-block;
        min-width:250px;
        width: 254px;
        text-align: center;
    }
    .sk_time{
        display: inline-block;
        min-width:250px;
        width: 250px;
        text-align: center;
    }
    .nav{
        margin-top: 10px;
    }
    .school_title{
        border-top: 1px dotted #000;
        border-bottom: 1px dotted #000;
        width: 815px;
        height: 30px;

    }
    .sh_title{
        margin-top: 5px;
        display: inline-block;
        min-width:250px;
        width: 250px;
        text-align: center;
    }
    .sh_title2{
        margin-top: 5px;
        display: inline-block;
        min-width:250px;
        width: 255px;
        text-align: center;
    }
    #start_selectbox {
        width: 100px;
        display: inline-block;
    }
    #end_selectbox{
        width: 100px;
        display: inline-block;
    }
    #start_month{
        width: 60px;
        display: inline-block;
    }
    #end_month{
        width: 60px;
        display: inline-block;
    }
    .career{
        margin-top: 5px;
        display: inline-block;
        min-width:186px;
        width: 186px;
        text-align: center;
    }
    .career2{
         margin-top: 5px;
         display: inline-block;
         width: 192px;
         text-align: center;
     }
    .licenese{
        margin-top: 5px;
        display: inline-block;
        width: 250px;
        text-align: center;
    }
    .licenese2{
        margin-top: 5px;
        display: inline-block;
        width: 257px;
        text-align: center;
    }
    .menu{

    }

</style>
@stop

@section('d_content')
    <div class="middle">
            <div class="page">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <section>
                <h4 class="subject">학력</h4>
                <div class="school_title">
                    <div class="sh_title">학교명</div>
                    <div class="sh_title">전공</div>
                    <div class="sh_title">재학기간</div>
                </div>
                <div id="ac_menu">
                @foreach($academy_list as $row)
                    <div id="ac_{{$row->ac_num}}" class="nav">
                        <div class="sh_title">{{$row->ac_name}}</div>
                        <div class="sh_title">{{$row->ac_specialty}}</div>
                        <div class="sh_title">{{$row->ac_start_date}} ~ {{$row->ac_end_date}}</div>
                        @if($designer_num == Session::get('m_num'))
                        <a class="btn btn-primary"  onclick="academy_delete('{{$row->ac_num}}')">삭제</a>
                        @endif
                    </div>
                @endforeach
                </div>
                @if($designer_num == Session::get('m_num'))
                <a class="btn btn-primary" data-toggle="modal" data-target="#academy_modal">
                    추가
                </a>
                @endif

                <div class="modal fade" id="academy_modal" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content" style="width: 600px;">
                            <div class="modal-header myBgColorB">
                                <button type="button" class="close myBgColorB" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">학력 추가</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">학교명</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="ac_name"  required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">전공</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="ac_specialty"  required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">재학기간</label>
                                    <div class="col-sm-10">
                                        <?php
                                        // 보여질 년도의 범위 - 현재년부터 50년전까지 표시됩니다.
                                        $yearRange = 50;
                                        // 선택되어질 년도 - 현재년 기준 20년전의 년도가 선택되어집니다.
                                        $ageLimit = 10;

                                        $currentYear = date('Y')+10;
                                        $startYear = ($currentYear - $yearRange);
                                        $selectYear = ($currentYear - $ageLimit);
                                        echo '<select name="year" class="form-control" id="start_selectbox">';
                                        foreach (range($currentYear, $startYear) as $year) {
                                            $selected = "";
                                            if($year == $selectYear) { $selected = " selected"; }
                                            echo '<option' . $selected . ' >' . $year . '</option>';
                                        }
                                        echo '</select>';
                                        ?>년
                                            <select class="form-control" id="start_month">
                                                <?php
                                                for($i=1; $i<=12; $i++)
                                                    echo '<option>'.$i.'</option>';
                                                ?>
                                            </select>월
                                            ~
                                            <?php
                                            // 보여질 년도의 범위 - 현재년부터 50년전까지 표시됩니다.
                                            $yearRange = 50;
                                            // 선택되어질 년도 - 현재년 기준 20년전의 년도가 선택되어집니다.
                                            $ageLimit = 10;

                                            $currentYear = date('Y')+10;
                                            $startYear = ($currentYear - $yearRange);
                                            $selectYear = ($currentYear - $ageLimit);
                                            echo '<select name="year" class="form-control" id=end_selectbox>';
                                            foreach (range($currentYear, $startYear) as $year) {
                                                $selected = "";
                                                if($year == $selectYear) { $selected = " selected"; }
                                                echo '<option' . $selected . '>' . $year . '</option>';
                                            }
                                            echo '</select>';
                                            ?>년
                                            <select class="form-control" id="end_month">
                                                <?php
                                                    for($i=1; $i<=12; $i++)
                                                        echo '<option>'.$i.'</option>';
                                                    ?>
                                            </select>월
                                      </div>
                                </div>
                            </div>
                            <div class="modal-footer" style="margin-top: 85px">
                                <button type="button" class="btn btn-default" data-dismiss="modal">닫기</button>
                                <button class="btn myBgColorB" onclick="academy_add()">추가</button>
                            </div>cs
                        </div>
                    </div>
                </div>
                <script>
                    function academy_add(){
                        var ac_name = $('#ac_name').val();
                        var ac_specialty = $('#ac_specialty').val();
                        var start_year=$("#start_selectbox option:selected").val();
                        var end_year=$("#end_selectbox option:selected").val();
                        var start_month=$("#start_month option:selected").val();
                        var end_month=$("#end_month option:selected").val();

                        $.ajax({
                            headers:
                            {
                                'X-CSRF-Token': $('input[name="_token"]').val()
                            },
                            url:'/designer/academy_add',
                            data:{
                                ac_name:ac_name,
                                ac_specialty:ac_specialty,
                                start_year:start_year,
                                end_year:end_year,
                                start_month:start_month,
                                end_month:end_month
                            },
                            dataType:'json',
                            type:'post',
                            success:function(data){
                                var one = $('<div></div>').attr('id','ac_'+data).addClass('nav');
                                $('<div></div>').addClass('sh_title').text(ac_name).appendTo(one);
                                $('<div></div>').addClass('sh_title2').text(ac_specialty).appendTo(one);
                                $('<div></div>').addClass('sh_title2').text(start_year+'-'+start_month+' ~ '+end_year+'-'+end_month).appendTo(one);
                                $('<a></a>').addClass('btn btn-danger').attr('onclick','academy_delete('+data+')').text('삭제').appendTo(one);
                                one.appendTo('#ac_menu');

                            },error:function(data){

                            }
                        });

                    }


                    //디자이너 학력 없애기
                    function academy_delete(ac_num){
                        $.ajax({
                            headers:
                            {
                                'X-CSRF-Token': $('input[name="_token"]').val()
                            },
                            url:'/designer/academy_delete',
                            data:{
                                ac_num:ac_num
                            },
                            dataType:'json',
                            type:'post',
                            success:function(data){
                                $('#ac_'+ac_num+'').remove();
                            },
                            error:function(data){

                            }
                        });
                    }
                </script>
            </section>

            <section>
                <h4 class="subject">경력</h4>
                <div class="school_title">
                    <div class="career">회사명</div>
                    <div class="career">부서</div>
                    <div class="career">직위</div>
                    <div class="career">근무기간</div>
                </div>
                <div id="cr_menu">
                    @foreach($career_list as $row)
                        <div id="cr_{{$row->cr_num}}" class="nav">
                            <div class="career">{{$row->cr_name}}</div>
                            <div class="career">{{$row->cr_content}}</div>
                            <div class="career">{{$row->cr_position}}</div>
                            <div class="career">{{$row->cr_start_date}}~{{$row->cr_end_date}}</div>
                            @if($designer_num == Session::get('m_num'))
                            <a class="btn btn-primary"  onclick="cr_delete('{{$row->cr_num}}')">삭제</a>
                            @endif
                        </div>
                    @endforeach
                </div>
                @if($designer_num == Session::get('m_num'))
                <a class="btn btn-primary" data-toggle="modal" data-target="#career_modal">
                    추가
                </a>
                @endif

                <div class="modal fade" id="career_modal" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content" style="width: 600px;">
                            <div class="modal-header myBgColorB">
                                <button type="button" class="close myBgColorB" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">경력 추가</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">회사명</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="col-xs-2 form-control" id="cr_name"  required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">부서</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="cr_content"  required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">직위</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="cr_position"  required>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">근무기간</label>
                                    <div class="col-sm-10">
                                        <input type="date" id="cr_start_date">
                                        <input type="date" id="cr_end_date">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer" style="margin-top: 120px">
                                <button type="button" class="btn btn-default" data-dismiss="modal">닫기</button>
                                <button class="btn myBgColorB" onclick="career_add()">추가</button>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    function career_add(){
                        var cr_name=$('#cr_name').val();
                        var cr_content=$('#cr_content').val();
                        var cr_position=$('#cr_position').val();
                        var cr_start_date=$('#cr_start_date').val();
                        var cr_end_date=$('#cr_end_date').val();

                        $.ajax({
                            headers:
                            {
                                'X-CSRF-Token': $('input[name="_token"]').val()
                            },
                            url:'/designer/career_add',
                            dataType:'json',
                            data:{
                                cr_name:cr_name,
                                cr_content:cr_content,
                                cr_position:cr_position,
                                cr_start_date:cr_start_date,
                                cr_end_date:cr_end_date
                            },
                            type:'post',
                                success:function(data){
                                    $('#career_modal').modal('hide');
                                    $('#cr_menu').append('<div id=cr_'+data+' class=nav>' +
                                            '<div class="career">'+cr_name+'</div>' +
                                            '<div class="career2">'+cr_content+'</div>' +
                                            '<div class="career2">'+cr_position+'</div>' +
                                            '<div class="career2">'+cr_start_date+'~'+cr_end_date+'</div>' +
                                            '<a class="btn btn-danger"  onclick="cr_delete('+data+')">삭제</a>' +
                                            '</div>');
                            },
                            error:function(data){

                            }
                        });
                    }
                    function cr_delete(cr_num){
                        $.ajax({
                            headers:
                            {
                                'X-CSRF-Token': $('input[name="_token"]').val()
                            },
                            url: '/designer/career_delete',
                            data: {
                                cr_num:cr_num
                            },
                            type: 'post',
                            dataType: 'json',
                            success: function (data) {
                                $('#cr_'+cr_num+'').remove();
                            },
                            error: function (data) {

                            }
                        });
                    }
                </script>
            </section>






            <section>
                <h4 class="subject">자격증</h4>
                <div class="skill_title">
                    <div class="sk_title">이름</div>
                    <div class="sk_title">발행기관</div>
                    <div class="sk_title">취득날짜</div>
                </div>
                <div class="licenese_menu">
                    @foreach($licenese_list as $row)
                        <div id="lic_{{$row->lic_num}}" class="nav">
                            <div class="licenese">{{$row->lic_name}}</div>
                            <div class="licenese">{{$row->lic_pyot}}</div>
                            <div class="licenese">{{$row->lic_date}}</div>
                            @if($designer_num == Session::get('m_num'))
                            <a class="btn btn-primary"  onclick="licenese_delete('{{$row->lic_num}}')">삭제</a>
                            @endif
                        </div>
                    @endforeach
                </div>

                @if($designer_num == Session::get('m_num'))
                <a class="btn btn-primary" data-toggle="modal" data-target="#licenese_modal">
                    추가
                </a>
                @endif

                <div class="modal fade" id="licenese_modal" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content" style="width: 600px;">
                            <div class="modal-header myBgColorB">
                                <button type="button" class="close myBgColorB" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">보유기술 추가</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">이름</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="lic_name"  required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">발행기관</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="lic_pyot"  required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">취득날짜</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" id="lic_date" required>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer" style="margin-top: 85px">
                                <button type="button" class="btn btn-default" data-dismiss="modal">닫기</button>
                                <button class="btn myBgColorB" onclick="licenese_add()">추가</button>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    function licenese_add(){
                        var lic_name = $('#lic_name').val();
                        var lic_pyot = $('#lic_pyot').val();
                        var lic_date = $('#lic_date').val();

                        $.ajax({
                            headers:
                            {
                                'X-CSRF-Token': $('input[name="_token"]').val()
                            },
                            url:'/designer/licenese_add',
                            type:'post',
                            data:{
                                lic_name:lic_name,
                                lic_pyot:lic_pyot,
                                lic_date:lic_date
                            },
                            dataType:'json',
                            success:function(data){
                                $('#licenese_modal').modal('hide');
                                $('.licenese_menu').append('<div id=lic_'+data+' class="nav"> '+
                                        '<div class="licenese">'+lic_name+'</div>' +
                                        '<div class="licenese2">'+lic_pyot+'</div>' +
                                        '<div class="licenese2">'+lic_date+'</div>' +
                                        '<a class="btn btn-danger"  onclick="licenese_delete('+data+')">삭제</a></div>');
                            },
                            error:function(data){

                            }
                        })
                    }
                    function licenese_delete(lic_num){
                        $.ajax({
                            headers:
                            {
                                'X-CSRF-Token': $('input[name="_token"]').val()
                            },
                            url: '/designer/licenese_delete',
                            data: {
                                lic_num:lic_num
                            },
                            type: 'post',
                            dataType: 'json',
                            success: function (data) {
                                $('#lic_'+lic_num+'').remove();
                            }
                        });
                    }
                </script>
            </section>

            <section>
                <h4 class="subject">보유기술</h4>
                <div class="skill_title">
                    <div class="sk_title">이름</div>
                    <div class="sk_title">숙련도</div>
                    <div class="sk_title">연차</div>
                </div>

                <div class="skill_menu">
                    @foreach($skill_list as $row)
                        <div id="sk_{{$row->sk_num}}" class="nav">
                            <div class="sk_title">{{$row->sk_name}}</div>
                            <div class="sk_title" >{{$row->sk_grade}}</div>
                            <div class="sk_title" >{{$row->sk_time}}년</div>
                            @if($designer_num == Session::get('m_num'))
                            <a class="btn btn-primary"  onclick="sk_delete('{{$row->sk_num}}')">삭제</a>
                            @endif
                        </div>
                    @endforeach
                </div>
                @if($designer_num == Session::get('m_num'))
                    <a class="btn btn-primary" data-toggle="modal" data-target="#skill_modal">
                        추가
                    </a>
                @endif
            </section>
        </div>
    </div>
    <!-- skill_modal Start -->

    <div class="modal fade" id="skill_modal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content" style="width: 500px;">
                <div class="modal-header myBgColorB">
                    <button type="button" class="close myBgColorB" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">보유기술 추가</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">이름</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="sk_name"  required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">숙련도</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="sk_grade"  required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">연차</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="sk_time" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="margin-top: 85px">
                    <button type="button" class="btn btn-default" data-dismiss="modal">닫기</button>
                    <button class="btn myBgColorB" onclick="skill_add()">추가</button>
                </div>
            </div>
        </div>
    </div>

    <!-- skill 관련 ajax script 문장!!!! -->
    <script>
        function skill_add(){

            var sk_name = $('#sk_name').val();
            var sk_grade = $('#sk_grade').val();
            var sk_time = $('#sk_time').val();
            $.ajax({
                headers:
                {
                    'X-CSRF-Token': $('input[name="_token"]').val()
                },
                url:'/designer/skill_modify',
                type:'post',
                data:{
                    'sk_name':sk_name,
                    'sk_grade':sk_grade,
                    'sk_time':sk_time,
                    'm_num':'{{Session::get('m_num')}}'
                },
                dataType:'json',
                success:function(data){
                    $('#skill_modal').modal('hide');
                    $('.skill_menu').append('<div id=sk_'+data+' class=nav>' +
                            '<div class="sk_title2">'+sk_name+'</div>' +
                            '<div class="sk_title2">'+sk_grade+'</div>'+
                            '<div class="sk_title2">'+sk_time+'년</div>'+
                            '<a class="btn btn-danger" id="delete" onclick="sk_delete('+data+')">삭제' +
                            '</a></div>');
                },
                error:function(data){
                    window.alert('정보를 제대로 입력해 주세요');
                }
            });
        }

        function sk_delete(sk_num) {
            $.ajax({
                headers:
                {
                    'X-CSRF-Token': $('input[name="_token"]').val()
                },
                url: '/designer/skill_delete',
                data: {
                    sk_num:sk_num
                },
                type: 'post',
                dataType: 'json',
                success: function (data) {
                    $('#sk_'+sk_num+'').remove();
                }
            });
        }
    </script>
    <!-- skill 관련 ajax script 문장 !!!!  END  !!!!! -->
        @stop