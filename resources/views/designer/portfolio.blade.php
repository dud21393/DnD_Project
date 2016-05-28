@include('designer.header')
<head>
<style>
    .portfolio_container{
        width: 100%;
        background-color: #F4984F;
    }
    .main_container{
        margin :0 auto;
        width: 1000px;
        border:1px solid;
        background-color:gray;
    }
    #picture{
        display: inline-block;
        margin-top:30px;
        margin-left:25px;
        border:1px solid;
        width:300px;
        height:350px;
        border-radius:10px;
        cursor:pointer;
    }
    #pf_img{
        width:300px;
        height:350px;
        border-radius:10px;
    }

    .modal.modal-center {
        text-align: center;
    }

    #pf_picture{
        margin-left:3px;
        display:inline-block ;
        width: 75px;
        height:500px;
        background-color: gray;
        vertical-align: middle;
        border:none;
    }
    .modal.modal-center:before {
        display: inline-block;
        vertical-align: middle;
        content: " ";
        height: 100%;
    }

    .modal-dialog.modal-center {
        display: inline-block;
        text-align: left;
        vertical-align: middle;
        margin-right:410px;
    }
    .modal-content{
        background-color : gray;
        height:1000px;
        width:1000px;
    }

    .modal-body-content{
        margin-top: 30px;
        width: 100px;
        height: 500px;
        vertical-align: middle;
    }
    #right_button{
        display: inline-block;
        width:75px;
        height:500px;
        background-color: green;
        vertical-align: middle;

    }
    #p_img{
        margin-left: auto;
        margin-right: auto;
        width: 800px;
        height:500px;
    }
    .glyphicon.glyphicon-chevron-left {
        font-size: 75px;
    }
    .glyphicon.glyphicon-chevron-right {
        font-size: 75px;
    }
</style>
</head>
<body>


<script>

        $(document).ready(function(){
            var track_load=0;
            var total_groups='{{$total_group}}';
            var m_num = '{{$m_num}}';

            $(".main_container").load("/designer/post",{'group_no':track_load,'m_num':m_num},function(){track_load++;});

            $(window).scroll(function(){
                if($(window).scrollTop()+window.innerHeight== $(document).height()){
                    if(track_load <= total_groups){
                        $.post('/designer/post',{'group_no':track_load,'m_num':m_num},function(data){
                            $('.main_container').append(data);
                            track_load++;
                        });
                    }
                }
            });
        });

    </script>
    <!-- Modal -->

    <script>
        function picture(m_num,pf_num){
            $.ajax({
                url:'/designer/pf_view',
                type: 'post',
                dataType: 'json',
                data:{'m_num':m_num, 'pf_num':pf_num},
                success:function(data){
                    $('#my80sizeCenterModal').modal('show');
                    $('#myModalLabel').text(data['pf_content']);
                    $('#pf_picture').attr('value',data['pf_num']);
                    $('#p_img').attr('src','http://127.0.0.1/img/portfolio/'+data['pf_picture']);
                },
                error:function(data){
                    window.alert('실패');
                }
            });
        }

        function pn_view(value)
        {
            var pf_num = $('#pf_picture').val();
            $.ajax({
                url:'/designer/pn_view',
                data:{
                    button:value,
                    pf_num:pf_num
                },
                dataType:'json',
                type:'post',
                success:function(data){

                    $('#p_img').removeAttr("src");
                    $('#myModalLabel').text(data[1].pf_content);
                    $('#pf_picture').removeAttr("value");
                    $('#pf_picture').attr('value',data[1].pf_num);
                    $('#p_img').attr('src','http://127.0.0.1/img/portfolio/'+data[1].pf_picture);

                },error:function(data){
                    window.alert('마지막 사진입니다.');
                }
            });
        }

    </script>

    <div class="modal modal-center fade" id="my80sizeCenterModal" tabindex="-1" role="dialog" aria-labelledby="my80sizeCenterModalLabel">
        <div class="modal-dialog modal-80size modal-center" role="document">
            <div class="modal-content modal-80size">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"></h4>
                </div>
                <div class="modal-body">
                        <button id="pf_picture" class="glyphicon glyphicon-chevron-left" onclick="pn_view('left')">
                        </button>

                        <img id="p_img">

                        <button id="pf_picture" class="glyphicon glyphicon-chevron-right" onclick="pn_view('right')" >
                        </button>

                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio_container">

            <div class="main_container">

            </div>

    </div>
</body>