@include('designer.header')
<style>
    #DB_banner3 ul, #DB_banner3 li{list-style:none;margin:0;padding:0}
    #DB_banner3{margin:0 auto;position:relative;width:1000px; height:200px;}

    #DB_banner3 .DB_mask{position:relative;width:800px ;margin:0 auto;height:250px;overflow:hidden; }

    #DB_banner3 .DB_imgSet{position:absolute; margin-top:23px;}
    #DB_banner3 .DB_imgSet li{border:1px solid #000;position:absolute;width:180px;margin-right:10px}

    #DB_banner3 .DB_dir{position:absolute;top:50%;margin-top:-30px;cursor:pointer}

    #DB_banner3 .DB_prev{left:0; margin-top: 10px;}
    #DB_banner3 .DB_next{right:0; margin-top:10px;}
    .one{width: 180px;height: 200px;}
    .section{
        padding-top: 30px;
        width: 1000px;
        height: 800px;
        margin: 0 auto;
        margin-top:90px;
        border: 1px solid #000;
    }
    .full_image{
        background-color: #1b6d85;
        z-index: 999;
        margin: 0 auto;
        width:800px;
        height: 500px;
        border:1px solid #000;
    }
</style>


<div id="DB_banner3">
    <div class="DB_mask">
        <ul class="DB_imgSet">
            @foreach($port_info as $row)
            <li><a href="#" onclick="full_img('{{$row->pf_picture}}','{{$row->pf_num}}')" target="_self"><img class="one" src="{{asset('img/portfolio/'.$row->pf_picture)}}" alt=""/></a></li>
            @endforeach
        </ul>

    </div>
    <span class="DB_dir DB_prev"><img src="{{asset('img/portfolio/prevBtn.gif')}}" alt=""/></span>
    <span class="DB_dir DB_next"><img src="{{asset('img/portfolio/nextBtn.gif')}}" alt=""/></span>
</div>
<div class="section">
    <div class="full_image">

    </div>

</div>

<script>
    function full_img(pf_picture,pf_num){
        $('.full_image a').remove();
        $('.full_image').append("<a href='#'><img src='http://127.0.0.1/img/portfolio/"+pf_picture+"'</a>");
    }

    $('#DB_banner3').DB_slideMove({
        key:'b28551',
        moveSpeed:10,
        overMoveSpeed:1,
        dir:'left',
        overAlpha:0.8
    });
    $('#DB_banner3').children().last().remove();



</script>