<style>
    .portlog_container {
    margin: 80px auto;
    position: relative;
    width: 600px;
    height: 600px;
    }

    .face_btn {
    position: absolute;
    top: 170px;
    left: 170px;
    width: 250px;
    height: 250px;
    text-align: center;
    line-height: 250px;
    font-size: 30px;
    border-radius: 250px;
    background-color: white;
    z-index: 1;
    }

    .diamond {
    display: inline-block;
    position: absolute;
    margin: 10px;
    width: 200px;
    height: 200px;
    -ms-transform: rotate(45deg); /* IE 9 */
    -webkit-transform: rotate(45deg); /* Safari */
    transform: rotate(45deg); /* Standard syntax */
    background-color: #FF7E4E;
    border-radius: 20px;
    }

    .diamond:hover {
    cursor: pointer;
    background-color: #E36133;
    }

    .top_btn { top:20px; left: 190px; }
    .left_btn { top:190px; left: 20px; }
    .right_btn { top:190px; right: 20px; }
    .down_btn { bottom:20px; left: 190px; }


</style>

<body>
    <div class="portlog_container">
        <div class="face_btn">얼굴</div>
        <a href="/designer/intro/{{$m_num}}"><div class="diamond top_btn">소개</div></a>
        <a href="/designer/portfolio/{{$m_num}}"><div class="diamond left_btn">포트폴리오</div></a>
        <a href="/designer/school/{{$m_num}}"><div class="diamond right_btn">경력</div></a>
        <a href="/designer/career/{{$m_num}}"> <div class="diamond down_btn">참여,이력</div></a>
    </div>

</body>