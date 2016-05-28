@extends('designer.header')

@section('d_style')
    <style>
    .career_container {
        width:1000px;
        margin:0 auto;
    }
    .graph_container{
    display:inline-block;
    float:right;
    margin-right:50px;
    }

    .widget {
    margin-top:50px;
    background-color: #FFF;
    }

    .chart-container{
    padding:25px;
    }
    .category{
    background-color: #29384D;
    height:40px;
    color:#929DAF;
    text-align: center;
    line-height: 40px;
    font-weight: 400;
    font-size: 1.5em;
    text-shadow: 1px 1px #06060d;
    }


    #average_container{
    display:inline-block;
    margin-top:50px;
    }

    #average{
    margin-left:30px;
    width:400px;
    background-color:#FFF;
    }
    #category_2{
    background-color: #29384D;
    height:40px;
    color:#929DAF;
    text-align: center;
    line-height: 40px;
    font-size: 1.5em;
    text-shadow: 1px 1px #06060d;
    margin:0 auto;
    margin-right:30px;
    width:350px;
    }

    .end_container{
    border:1px solid;
    margin:0 auto;
    width:800px;

    }

    #category_3{
    background-color: #29384D;
    height:40px;
    color:#929DAF;
    text-align: center;/
    line-height: 40px;
    font-size: 1.5em;
    text-shadow: 1px 1px #06060d;
    margin:0 auto;
    margin-top:70px;
    width:300px;
    }
    .end_project{
    width:700px;
    height:200px;
    margin:0 auto;
    margin-top:50px;
    }
    #page_num{
    text-align:center;
    }
    .end_pj_title{
    margin-left:20px;
    }
    .td_50{
        width:50px;
    }
    .td_450{
        width:450px;
    }
    .td_100{
        width:100px;
    }
    .th_title{
        width:650px;
        height:20px;
    }

    a{color:#000;}


    #modalLayer{display:none; position:relative;}
    #modalLayer .modalContent{width:440px; height:200px; padding:20px; border:1px solid #ccc; position:fixed; left:50%; top:50%; z-index:11; background:#fff;}
    #modalLayer .modalContent button{position:absolute; right:0; top:0; cursor:pointer;}

    </style>
@stop

@section('d_content')

    <div class="career_container">
        <div id="average_container">
            <div id="category_2">Average</div>
            <div id="average"></div>
        </div>
        <div class="graph_container">
            <div class="widget">
                <div class="category">Category</div>
                <div id="chart" class="chart-container"></div>
            </div>
    </div>
        <div class="end_container">
            <div id="category_3">End_Project</div>



        @foreach($end_project as $row)
          <div class="end_project">
                <table border="1" width="700" height="200" style="text-align: center">
                    <tr>
                        <th colspan="4"class="th_title"><h3 class="end_pj_title"> 프로젝트 : {{$row->pj_content}} </h3></th>
                    </tr>
                    <tr>
                        <td class="td_100">
                            <h4>디자인</h4>
                        </td>
                        <td class="td_50">
                            <h4>
                                @if($row->sc_num == 1)
                                    앱
                                @else
                                    웹
                                @endif
                            </h4>
                        </td>
                        <td class="td_100">
                            <h4>의뢰자</h4>
                        </td>
                        <td class="td_450">
                            {{$row->m_id}}
                        </td>
                    </tr>
                    <tr>
                        <td>계약기간</td>
                        <td colspan="2">15일</td>
                        <td class="td_50">
                            {{$row->ct_date}}
                        </td>
                    </tr>
                    <tr>
                        <td>계약금액</td>
                        <td colspan="3">
                            {{$row->pj_price}}
                        </td>
                        <td width="50">
                            <button onclick="grade('{{$row->pj_num}}','{{$m_num}}')" class="modalLink">평점</button>
                        </td>
                    </tr>
                </table>

          </div>
            @endforeach
        </div>
            <div id="page_num">
            {{$end_project->links()}}
            </div>
        </div>

    <div id="modalLayer">
                <div class="modalContent">
                    <div class="gd_professional" >
                        전문성 :  <div class="professional" style="display:inline-block"></div>
                    </div>
                    <div class="gd_plan">
                        일정준수 :  <div class="plan" style="display:inline-block"></div>
                    </div>
                    <div class="gd_satisfaction">
                        만족도 : <div class="satisfaction" style="display:inline-block"></div>
                    </div>
                    <div class="gd_content">
                        <textarea readonly="readonly" cols="60" rows="4" class="text" style="resize: none"></textarea>
                    </div>
                    <button type="button">닫기</button>
                </div>
            </div>


    <script>
        function grade(pj_num,m_num){

            var modalLayer = $("#modalLayer");
            var modalLink = $(".modalLink");
            var modalCont = $(".modalContent");
            var marginLeft = modalCont.outerWidth()/2;
            var marginTop = modalCont.outerHeight()/2;

            modalLayer.fadeIn(500);
            modalCont.css({"margin-top" : -marginTop, "margin-left" : -marginLeft});

                  $.ajax({
                      url: '/designer/user_grade/1',
                      type: 'post',
                      dataType: 'json',
                      data: {'pj_num':pj_num,'m_num':m_num},
                      success: function (data) {

                          $(".modalContent > a").focus();
                            $(".professional").text(data[1].gd_professional);
                            $('.plan').text(data[1].gd_plan);
                            $('.satisfaction').text(data[1].gd_satisfaction);
                            $('.text').text(data[1].gd_content);

                            return false;
                        },
                      error: function (data) {
                        alert('평점이 아직 매겨지지 않았습니다.');
                          return false;
                    }
                });
        }

        $(".modalContent > button").click(function(){
            $('#modalLayer').fadeOut(500);
            $('.modalLink').focus();
        });

    </script>

    <script type="text/javascript">
        var dataset = [
            { name: 'Web', percent: '{{$web_count->web_count}}' },
            { name: 'App', percent: '{{$app_count->app_count}}'},
            { name : '총합 : {{$web_count->web_count + $app_count->app_count}}'}
        ];

        var pie=d3.layout.pie()
                .value(function(d){return d.percent})
                .sort(null)
                .padAngle(.03);

        var w=300,h=300;

        var outerRadius=w/2;
        var innerRadius=100;

        var color = d3.scale.category10();

        var arc=d3.svg.arc()
                .outerRadius(outerRadius)
                .innerRadius(innerRadius);

        var svg=d3.select("#chart")
                .append("svg")
                .attr({
                    width:w,
                    height:h,
                    class:'shadow'
                }).append('g')
                .attr({
                    transform:'translate('+w/2+','+h/2+')'
                });
        var path=svg.selectAll('path')
                .data(pie(dataset))
                .enter()
                .append('path')
                .attr({
                    d:arc,
                    fill:function(d,i){
                        return color(d.data.name);
                    }
                });

        path.transition()
                .duration(1000)
                .attrTween('d', function(d) {
                    var interpolate = d3.interpolate({startAngle: 0, endAngle: 0}, d);
                    return function(t) {
                        return arc(interpolate(t));
                    };
                });


        var restOfTheData=function(){
            var text=svg.selectAll('text')
                    .data(pie(dataset))
                    .enter()
                    .append("text")
                    .transition()
                    .duration(200)
                    .attr("transform", function (d) {
                        return "translate(" + arc.centroid(d) + ")";
                    })
                    .attr("dy", ".4em")
                    .attr("text-anchor", "middle")
                    .text(function(d){
                        return d.data.percent;
                    })
                    .style({
                        fill:'#fff',
                        'font-size':'20px'
                    });

            var legendRectSize=20;
            var legendSpacing=7;
            var legendHeight=legendRectSize+legendSpacing;


            var legend=svg.selectAll('.legend')
                    .data(color.domain())
                    .enter()
                    .append('g')
                    .attr({
                        class:'legend',
                        transform:function(d,i){
                            //Just a calculation for x & y position
                            return 'translate(-35,' + ((i*legendHeight)-65) + ')';
                        }
                    });
            legend.append('rect')
                    .attr({
                        width:legendRectSize,
                        height:legendRectSize,
                        rx:20,
                        ry:20
                    })
                    .style({
                        fill:color,
                        stroke:color
                    });

            legend.append('text')
                    .attr({
                        x:30,
                        y:15
                    })
                    .text(function(d){
                        return d;
                    }).style({
                fill:'#000000',
                'font-size':'15px'
            });
        };

        setTimeout(restOfTheData,1000);


    </script>

    <script>
        $(function () {
            $('#average').highcharts({

                chart: {
                    polar: true,
                    type: 'line'
                },

                title: {
                    x: -50
                },

                pane: {
                    size: '85%'
                },

                xAxis: {
                    categories: ['전문성','일정준수','만족도'],
                    lineWidth: 0
                },

                yAxis: {
                    gridLineInterpolation: 'polygon',
                    lineWidth: 0,
                    min: 0,
                    max: 5
                },

                tooltip: {
                    shared: true,
                    pointFormat: '<span style="color:{series.color}"><b>{point.y:0f}/5</b><br/>'
                },

                legend: {
                    align: 'right',
                    verticalAlign: 'top',
                    y: 70,
                    layout: 'vertical'
                },

                series: [{
                    name: '',
                    data: [{{$grade->gd_professional}}, {{$grade->gd_plan}},{{$grade->gd_satisfaction}}],
                    pointPlacement: 'on'
                }]

            });

            /* remove link */
            $('.highcharts-background').remove();
            $('.highcharts-title').remove();
            $('.highcharts-legend-item').remove();
            $('#highcharts-0 > svg > text:last-child').remove();
            $('#highcharts-0 > svg').css({'height':'354px','width':'315px'});
            $('#highcharts-0').css({'height':'354px','width':'315px','margin':'0 auto'});
            $('.highcharts-tooltip text tspan:eq(2)').remove();
        });
    </script>

@stop
