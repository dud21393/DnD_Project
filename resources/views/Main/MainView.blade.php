<html>
<head>
    @include('layouts.link')
</head>
    <body>
    @include('layouts.header')
    {{--프로젝트목록 css--}}
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <script src="js/snap.svg-min.js"></script>
    <script type="text/javascript" src="js/jssor.slider.min.js"></script>

    <div class="container">
        <br><br>
        <script>
            jssor_html5_AdWords_slider_init = function() {

                var jssor_html5_AdWords_SlideoTransitions = [
                    [{b:-1,d:1,o:-1,rY:-120},{b:2600,d:500,o:1,rY:120,e:{rY:17}}],
                    [{b:-1,d:1,o:-1},{b:1480,d:20,o:1},{b:1500,d:500,y:-20,e:{y:19}},{b:2300,d:300,x:-20,e:{x:19}},{b:3100,d:300,o:-1,sY:9}],
                    [{b:-1,d:1,o:-1},{b:2300,d:300,x:20,o:1,e:{x:19}},{b:3100,d:300,o:-1,sY:9}],
                    [{b:-1,d:1,sX:-1,sY:-1},{b:0,d:1000,sX:2,sY:2,e:{sX:7,sY:7}},{b:1000,d:500,sX:-1,sY:-1,e:{sX:16,sY:16}},{b:1500,d:500,y:20,e:{y:19}}],
                    [{b:1000,d:1000,r:-30},{b:2000,d:500,r:30,e:{r:2}},{b:2500,d:500,r:-30,e:{r:3}},{b:3000,d:3000,x:70,y:40,rY:-20,tZ:-20}],
                    [{b:-1,d:1,o:-1},{b:0,d:1000,o:1}],
                    [{b:-1,d:1,o:-1,r:30},{b:1000,d:1000,o:1}],
                    [{b:-1,d:1,o:-1},{b:2780,d:20,o:1},{b:2800,d:500,y:-70,e:{y:3}},{b:3300,d:1000,y:180},{b:4300,d:500,y:-40,e:{y:3}},{b:5300,d:500,y:-40,e:{y:3}},{b:6300,d:500,y:-40,e:{y:3}},{b:7300,d:500,y:-40,e:{y:3}},{b:8300,d:400,y:-30}],
                    [{b:-1,d:1,c:{y:200}},{b:4300,d:4400,c:{y:-200},e:{c:{y:1}}}],
                    [{b:-1,d:1,o:-1},{b:4300,d:20,o:1}],
                    [{b:-1,d:1,o:-1},{b:5300,d:20,o:1}],
                    [{b:-1,d:1,o:-1},{b:6300,d:20,o:1}],
                    [{b:-1,d:1,o:-1},{b:7300,d:20,o:1}],
                    [{b:-1,d:1,o:-1},{b:8300,d:20,o:1}],
                    [{b:2000,d:1000,o:-0.5,r:180,sX:4,sY:4,e:{r:5,sX:5,sY:5}},{b:3000,d:1000,o:-0.5,r:180,sX:-4,sY:-4,e:{r:6,sX:6,sY:6}}],
                    [{b:-1,d:1,o:-1,c:{m:-35.0}},{b:0,d:1500,x:150,o:1,e:{x:6}}],
                    [{b:-1,d:1,o:-1,c:{y:35.0}},{b:0,d:1500,x:-150,o:1,e:{x:6}}],
                    [{b:-1,d:1,o:-1},{b:6500,d:2000,o:1}],
                    [{b:-1,d:1,o:-1},{b:2000,d:1000,o:0.5,r:180,sX:4,sY:4,e:{r:5,sX:5,sY:5}},{b:3000,d:1000,o:0.5,r:180,sX:-4,sY:-4,e:{r:6,sX:6,sY:6}},{b:4500,d:1500,x:-45,y:60,e:{x:12,y:3}}],
                    [{b:-1,d:1,o:-1},{b:4500,d:1500,o:1,e:{o:5}},{b:6500,d:2000,o:-1,r:10,rX:30,rY:20,e:{rY:6}}]
                ];

                var jssor_html5_AdWords_options = {
                    $AutoPlay: true,
                    $Idle: 1600,
                    $SlideDuration: 400,
                    $SlideEasing: $Jease$.$InOutSine,
                    $CaptionSliderOptions: {
                        $Class: $JssorCaptionSlideo$,
                        $Transitions: jssor_html5_AdWords_SlideoTransitions
                    },
                    $ArrowNavigatorOptions: {
                        $Class: $JssorArrowNavigator$,
                        $ChanceToShow: 1
                    },
                    $BulletNavigatorOptions: {
                        $Class: $JssorBulletNavigator$,
                        $ActionMode: 2
                    }
                };

                var jssor_html5_AdWords_slider = new $JssorSlider$("jssor_html5_AdWords", jssor_html5_AdWords_options);
            };
        </script>

        <style>

            /* jssor slider bullet navigator skin 05 css */
            /*
            .jssorb05 div           (normal)
            .jssorb05 div:hover     (normal mouseover)
            .jssorb05 .av           (active)
            .jssorb05 .av:hover     (active mouseover)
            .jssorb05 .dn           (mousedown)
            */
            .jssorb05 {
                position: absolute;
            }
            .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
                position: absolute;
                /* size of bullet elment */
                width: 16px;
                height: 16px;
                /*background: url('img/b05.png') no-repeat;*/
                overflow: hidden;
                cursor: pointer;
            }
            .jssorb05 div { background-position: -7px -7px; }
            .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
            .jssorb05 .av { background-position: -67px -7px; }
            .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

            /* jssor slider arrow navigator skin 12 css */
            /*
            .jssora12l                  (normal)
            .jssora12r                  (normal)
            .jssora12l:hover            (normal mouseover)
            .jssora12r:hover            (normal mouseover)
            .jssora12l.jssora12ldn      (mousedown)
            .jssora12r.jssora12rdn      (mousedown)
            */
            .jssora12l, .jssora12r {
                display: block;
                position: absolute;
                /* size of arrow element */
                width: 30px;
                height: 46px;
                cursor: pointer;
                /*background: url('img/a12.png') no-repeat;*/
                overflow: hidden;
            }
            .jssora12l { background-position: -16px -37px; }
            .jssora12r { background-position: -75px -37px; }
            .jssora12l:hover { background-position: -136px -37px; }
            .jssora12r:hover { background-position: -195px -37px; }
            .jssora12l.jssora12ldn { background-position: -256px -37px; }
            .jssora12r.jssora12rdn { background-position: -315px -37px; }
        </style>


        <div id="jssor_html5_AdWords" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 300px; height: 250px; overflow: hidden; visibility: hidden;">
            <!-- Loading Screen -->
            <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
            </div>
            <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 300px; height: 250px; overflow: hidden;">
                <div data-p="68.75" style="display: none;">
                    {{--<img data-u="image" src="#" /> 배경이미지--}}
                    <div data-u="caption" data-t="0" data-3d="1" data-to="100% 50%" style="position: absolute; top: 85px; left: 90px; width: 120px; height: 40px; background-color: #ffffff; font-size: 26px; line-height: 40px; text-align: center;">Developer</div>
                    <div data-u="caption" data-t="1" style="position: absolute; top: 105px; left: 130px; width: 40px; height: 40px; font-size: 26px; line-height: 40px; text-align: center;">Designer</div>
                    <div data-u="caption" data-t="2" style="position: absolute; top: 160px; left: 130px; width: 40px; height: 40px; font-size: 26px; line-height: 40px; text-align: center;">And</div>
                    <div data-u="caption" data-t="3" style="position: absolute; top: 105px; left: 90px; width: 120px; height: 40px; background-color: #f65256; font-size: 26px; color: #ffffff; line-height: 40px; text-align: center;">D & D</div>
                </div>
                <div data-p="68.75" data-po="70% 50%" style="display: none;">
                    {{--<img data-u="image" src="" /> 배경이미지--}}
                    <div data-u="caption" data-t="4" data-3d="1" data-to="0% 30%" style="position: absolute; top: 100px; left: 60px; width: 180px; height: 130px;">
                        <div data-u="caption" data-t="5" data-to="0% 100%" style="position: absolute; top: 0px; left: 0px; width: 180px; height: 40px; font-size: 26px; line-height: 40px; text-align: center;">Cooperation</div>
                        <div data-u="caption" data-t="6" data-to="0% 0%" style="position: absolute; top: 20px; left: 0px; width: 180px; height: 40px; font-size: 26px; line-height: 40px; text-align: center;">Creative</div>
                    </div>
                    <div data-u="caption" data-t="7" data-to="0% 0%" style="position: absolute; top: 80px; left: 70px; width: 80px; height: 40px; font-size: 22px; line-height: 40px; text-align: center;">만족도</div>
                    <div data-u="caption" data-t="8" style="position: absolute; top: 25px; left: 30px; width: 40px; height: 200px; background-color: #ff6666; font-size: 20px;"></div>
                    <div data-u="caption" data-t="9" style="position: absolute; top: 190px; left: 70px; width: 80px; height: 40px; font-size: 20px; line-height: 40px; text-align: center;">20%</div>
                    <div data-u="caption" data-t="10" style="position: absolute; top: 150px; left: 70px; width: 80px; height: 40px; font-size: 20px; line-height: 40px; text-align: center;">40%</div>
                    <div data-u="caption" data-t="11" style="position: absolute; top: 110px; left: 70px; width: 80px; height: 40px; font-size: 20px; line-height: 40px; text-align: center;">60%</div>
                    <div data-u="caption" data-t="12" style="position: absolute; top: 70px; left: 70px; width: 80px; height: 40px; font-size: 20px; line-height: 40px; text-align: center;">80%</div>
                    <div data-u="caption" data-t="13" style="position: absolute; top: 30px; left: 70px; width: 80px; height: 40px; font-size: 20px; line-height: 40px; text-align: center;">100%</div>
                </div>
                <div data-p="68.75" style="display: none;">
                    {{--<img data-u="image" src="" /> 배경이미지--}}
                    <div data-u="caption" data-t="14" style="position: absolute; top: 90px; left: 75px; width: 150px; height: 70px;">
                        <div data-u="caption" data-t="15" style="position: absolute; top: 0px; left: -150px; width: 150px; height: 70px; background-color: rgba(244,189,20,0.35); font-size: 30px; line-height: 70px; text-align: center;">D&D에서</div>
                        <div data-u="caption" data-t="16" style="position: absolute; top: 0px; left: 150px; width: 150px; height: 70px; background-color: rgba(244,189,20,0.35); font-size: 30px; line-height: 70px; text-align: center;">D&D에서</div>
                    </div>
                    <div data-u="caption" data-t="17" style="position: absolute; top: 70px; left: 85px; width: 150px; height: 70px; font-size: 50px; color: #000000; line-height: 70px; text-align: center;">D&DTool</div>
                    <div data-u="caption" data-t="18" style="position: absolute; top: 90px; left: 75px; width: 160px; height: 70px; background-color: rgba(244,189,20,0.35); font-size: 30px; line-height: 70px; text-align: center;">파트너와</div>
                    <div data-u="caption" data-t="19" data-3d="1" data-to="100% 50%" style="position: absolute; top: 70px; left: 85px; width: 150px; height: 70px; background-color: rgba(244,189,20,0.35); font-size: 30px; line-height: 70px; text-align: center;">함께하는</div>
                </div>
                <a data-u="ad" href="http://www.jssor.com" style="display:none">jQuery Slider</a>

            </div>
            <!-- Bullet Navigator -->
            <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
                <!-- bullet navigator item prototype -->
                <div data-u="prototype" style="width:16px;height:16px;"></div>
            </div>
            <!-- Arrow Navigator -->
            <span data-u="arrowleft" class="jssora12l" style="top:0px;left:0px;width:30px;height:46px;" data-autocenter="2"></span>
            <span data-u="arrowright" class="jssora12r" style="top:0px;right:0px;width:30px;height:46px;" data-autocenter="2"></span>
        </div>
        <script>
            jssor_html5_AdWords_slider_init();
        </script>


       <br><br><br>
        <div class="menu_bar">
            <br><br><br><br><br><br>
        </div>

        <div class="slide_img left_slide_img">

            <!-- use jssor.slider.debug.js instead for debug -->
            <script>
                jssor_1_slider_init = function() {

                    var jssor_1_SlideshowTransitions = [
                        {$Duration:1200,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                        {$Duration:1200,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
                    ];

                    var jssor_1_options = {
                        $AutoPlay: true,
                        $SlideshowOptions: {
                            $Class: $JssorSlideshowRunner$,
                            $Transitions: jssor_1_SlideshowTransitions,
                            $TransitionsOrder: 1
                        },
                        $ArrowNavigatorOptions: {
                            $Class: $JssorArrowNavigator$
                        },
                        $BulletNavigatorOptions: {
                            $Class: $JssorBulletNavigator$
                        },
                        $ThumbnailNavigatorOptions: {
                            $Class: $JssorThumbnailNavigator$,
                            $Cols: 1,
                            $Align: 0,
                            $NoDrag: true
                        }
                    };

                    var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

                    //responsive code begin
                    //you can remove responsive code if you don't want the slider scales while window resizing
                    function ScaleSlider() {
                        var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                        if (refSize) {
                            refSize = Math.min(refSize, 600);
                            jssor_1_slider.$ScaleWidth(refSize);
                        }
                        else {
                            window.setTimeout(ScaleSlider, 30);
                        }
                    }
                    ScaleSlider();
                    $Jssor$.$AddEvent(window, "load", ScaleSlider);
                    $Jssor$.$AddEvent(window, "resize", ScaleSlider);
                    $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
                    //responsive code end
                };
            </script>

            <style>

                /* jssor slider bullet navigator skin 01 css */
                /*
                .jssorb01 div           (normal)
                .jssorb01 div:hover     (normal mouseover)
                .jssorb01 .av           (active)
                .jssorb01 .av:hover     (active mouseover)
                .jssorb01 .dn           (mousedown)
                */
                .jssorb01 {
                    position: absolute;
                }
                .jssorb01 div, .jssorb01 div:hover, .jssorb01 .av {
                    position: absolute;
                    /* size of bullet elment */
                    width: 12px;
                    height: 12px;
                    filter: alpha(opacity=70);
                    opacity: .7;
                    overflow: hidden;
                    cursor: pointer;
                    border: #000 1px solid;
                }
                .jssorb01 div { background-color: gray; }
                .jssorb01 div:hover, .jssorb01 .av:hover { background-color: #d3d3d3; }
                .jssorb01 .av { background-color: #fff; }
                .jssorb01 .dn, .jssorb01 .dn:hover { background-color: #555555; }

                /* jssor slider arrow navigator skin 05 css */
                /*
                .jssora05l                  (normal)
                .jssora05r                  (normal)
                .jssora05l:hover            (normal mouseover)
                .jssora05r:hover            (normal mouseover)
                .jssora05l.jssora05ldn      (mousedown)
                .jssora05r.jssora05rdn      (mousedown)
                */
                .jssora05l, .jssora05r {
                    display: block;
                    position: absolute;
                    /* size of arrow element */
                    width: 40px;
                    height: 40px;
                    cursor: pointer;
                    background: url('img/a17.png') no-repeat;
                    overflow: hidden;
                }
                .jssora05l { background-position: -10px -40px; }
                .jssora05r { background-position: -70px -40px; }
                .jssora05l:hover { background-position: -130px -40px; }
                .jssora05r:hover { background-position: -190px -40px; }
                .jssora05l.jssora05ldn { background-position: -250px -40px; }
                .jssora05r.jssora05rdn { background-position: -310px -40px; }

                /* jssor slider thumbnail navigator skin 09 css */

                .jssort09-600-45 .p {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 600px;
                    height: 45px;
                }

                .jssort09-600-45 .t {
                    font-family: verdana;
                    font-weight: normal;
                    position: absolute;
                    width: 100%;
                    height: 100%;
                    top: 0;
                    left: 0;
                    color:#fff;
                    line-height: 45px;
                    font-size: 20px;
                    padding-left: 10px;

                }
                .top_font p{
                    font-weight: bold;
                }

            </style>
             <b><font style="font-size: 24px">디자이너 랭킹</font></b>
            <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 600px; height: 300px; overflow: hidden; visibility: hidden;">
                <!-- Loading Screen -->
                <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                    <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                    <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                </div>

                <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 600px; height: 300px; overflow: hidden;">
                    <div data-p="112.50" style="display: none;">
                        <img data-u="image" src="http://timg.danawa.com/prod_img/500000/869/844/img/2844869_1.jpg" />
                        <div data-u="thumb">리버덕 / 웹디자이너 / 판매액 : 12005000원</div>
                    </div>
                    <div data-p="112.50" style="display: none;">
                        <img data-u="image" src="http://cfile4.uf.tistory.com/image/2767F6405733F698050B9B" />
                        <div data-u="thumb">오리 / 웹디자이너 / 판매액 : 9204500원</div>
                    </div>
                    <div data-p="112.50" style="display: none;">
                        <img data-u="image" src="http://file2.instiz.net/data/file/20150209/9/0/c/90ca3f6d081c7472027b6436b609113c.jpg" />
                        <div data-u="thumb">타조 / 웹디자이너 / 판매액 : 7523000원</div>
                    </div>
                    <div data-p="112.50" style="display: none;">
                        <img data-u="image" src="http://image.auction.co.kr/itemimage/b6/82/4d/b6824d435.jpg" />
                        <div data-u="thumb">호빵맨 / 앱디자이너 / 판매액 : 3505500원</div>
                    </div>
                    <a data-u="ad" href="http://www.jssor.com" style="display:none">jQuery Slider</a>

                </div>
                <!-- Thumbnail Navigator -->
                <div data-u="thumbnavigator" class="jssort09-600-45" style="position:absolute;bottom:0px;left:0px;width:600px;height:45px;">
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height:100%; background-color: #ff6666; filter:alpha(opacity=40.0); opacity:0.4;"></div>
                    <!-- Thumbnail Item Skin Begin -->
                    <div data-u="slides" style="cursor: default;">
                        <div data-u="prototype" class="p">
                            <div data-u="thumbnailtemplate" class="t"></div>
                        </div>
                    </div>
                    <!-- Thumbnail Item Skin End -->
                </div>
                <!-- Bullet Navigator -->
                <div data-u="navigator" class="jssorb01" style="bottom:16px;right:16px;">
                    <div data-u="prototype" style="width:12px;height:12px;"></div>
                </div>
                <!-- Arrow Navigator -->
                <span data-u="arrowleft" class="jssora05l" style="top:0px;left:8px;width:40px;height:40px;" data-autocenter="2"></span>
                <span data-u="arrowright" class="jssora05r" style="top:0px;right:8px;width:40px;height:40px;" data-autocenter="2"></span>
            </div>
            <script>
                jssor_1_slider_init();
            </script>
        </div>
        <div class="slide_img right_slide_img"> {{------------------------------------------------------------------------------}}
            <script type="text/javascript" src="js/jssor.slider.min.js"></script>
            <!-- use jssor.slider.debug.js instead for debug -->
            <script>
                jssor_2_slider_init = function() {

                    var jssor_2_SlideshowTransitions = [
                        {$Duration:1200,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                        {$Duration:1200,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
                    ];

                    var jssor_2_options = {
                        $AutoPlay: true,
                        $SlideshowOptions: {
                            $Class: $JssorSlideshowRunner$,
                            $Transitions: jssor_2_SlideshowTransitions,
                            $TransitionsOrder: 1
                        },
                        $ArrowNavigatorOptions: {
                            $Class: $JssorArrowNavigator$
                        },
                        $BulletNavigatorOptions: {
                            $Class: $JssorBulletNavigator$
                        },
                        $ThumbnailNavigatorOptions: {
                            $Class: $JssorThumbnailNavigator$,
                            $Cols: 1,
                            $Align: 0,
                            $NoDrag: true
                        }
                    };

                    var jssor_2_slider = new $JssorSlider$("jssor_2", jssor_2_options);

                    //responsive code begin
                    //you can remove responsive code if you don't want the slider scales while window resizing
                    function ScaleSlider() {
                        var refSize = jssor_2_slider.$Elmt.parentNode.clientWidth;
                        if (refSize) {
                            refSize = Math.min(refSize, 600);
                            jssor_2_slider.$ScaleWidth(refSize);
                        }
                        else {
                            window.setTimeout(ScaleSlider, 30);
                        }
                    }
                    ScaleSlider();
                    $Jssor$.$AddEvent(window, "load", ScaleSlider);
                    $Jssor$.$AddEvent(window, "resize", ScaleSlider);
                    $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
                    //responsive code end
                };
            </script>

            <b><font style="font-size: 24px">개발사 랭킹</font></b>
            <div id="jssor_2" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 600px; height: 300px; overflow: hidden; visibility: hidden;">
                <!-- Loading Screen -->
                <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                    <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                    <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                </div>

                <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 600px; height: 300px; overflow: hidden;">
                    <div data-p="112.50" style="display: none;">
                        <img data-u="image" src="http://www.rcspot.co.kr/files/attach/images/1435/217/055/a1891f2a7c88f1a726ab32cf091c7454.jpg" />
                        <div data-u="thumb">리버덕코퍼레이션 / </div>
                    </div>
                    <div data-p="112.50" style="display: none;">
                        <img data-u="image" src="https://pbs.twimg.com/media/Bz-X5ExCQAAuKOy.jpg" />
                        <div data-u="thumb">엄마리버덕 / 평균평점 3.87</div>
                    </div>
                    <div data-p="112.50" style="display: none;">
                        <img data-u="image" src="http://image.edaily.co.kr/images/photo/files/NP/S/2014/10/PS14101400576.jpg" />
                        <div data-u="thumb">숙여진리버덕션 / 평균평점 3.27</div>
                    </div>
                    <div data-p="112.50" style="display: none;">
                        <img data-u="image" src="http://pds.joins.com/news/component/htmlphoto_mmdata/201410/15/htm_20141015175339c010c011.jpg" />
                        <div data-u="thumb">BOOMRVDOC / 평균평점 3.17</div>
                    </div>
                    <a data-u="ad" href="http://www.jssor.com" style="display:none">jQuery Slider</a>

                </div>
                <!-- Thumbnail Navigator -->
                <div data-u="thumbnavigator" class="jssort09-600-45" style="position:absolute;bottom:0px;left:0px;width:600px;height:45px;">
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height:100%; background-color: #ff6666; filter:alpha(opacity=40.0); opacity:0.4;"></div>
                    <!-- Thumbnail Item Skin Begin -->
                    <div data-u="slides" style="cursor: default;">
                        <div data-u="prototype" class="p">
                            <div data-u="thumbnailtemplate" class="t"></div>
                        </div>
                    </div>
                    <!-- Thumbnail Item Skin End -->
                </div>
                <!-- Bullet Navigator -->
                <div data-u="navigator" class="jssorb01" style="bottom:16px;right:16px;">
                    <div data-u="prototype" style="width:12px;height:12px;"></div>
                </div>
                <!-- Arrow Navigator -->
                <span data-u="arrowleft" class="jssora05l" style="top:0px;left:8px;width:40px;height:40px;" data-autocenter="2"></span>
                <span data-u="arrowright" class="jssora05r" style="top:0px;right:8px;width:40px;height:40px;" data-autocenter="2"></span>
            </div>
            <script>
                jssor_2_slider_init();
            </script>
        </div>      {{----------------------------------------------------------------------------------------------------------------}}


        <br><br><br><br><br><br>
        <div class="menu_bar">
            <br><br><br><br>
        </div>


        <div>       {{--------------------------------------------------------------------------------------------------}}
            포트폴리오 목록
            <section id="grid" class="grid clearfix">
                <a href="#" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                    <figure>
                        <img src="../img/project/1.png" />
                        <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
                        <figcaption>
                            <h2><b>박모띠</b></h2>
                            <p>웹디자이너 / 경력 6년 / </p>
                        </figcaption>
                    </figure>
                </a>
                <a href="#" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                    <figure>
                        <img src="../img/project/3.png" />
                        <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
                        <figcaption>
                            <h2>Cacophony</h2>
                            <p>Two greens tigernut soybean radish.</p>
                        </figcaption>
                    </figure>
                </a>
                <a href="#" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                    <figure>
                        <img src="../img/project/5.png" />
                        <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
                        <figcaption>
                            <h2>Languid</h2>
                            <p>Beetroot water spinach okra water.</p>
                        </figcaption>
                    </figure>
                </a>
                <a href="#" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                    <figure>
                        <img src="../img/project/7.png" />
                        <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
                        <figcaption>
                            <h2>Serene</h2>
                            <p>Water spinach arugula pea tatsoi.</p>
                        </figcaption>
                    </figure>
                </a>
                <a href="#" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                    <figure>
                        <img src="../img/project/2.png" />
                        <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
                        <figcaption>
                            <h2>Nebulous</h2>
                            <p>Pea horseradish azuki bean lettuce.</p>
                        </figcaption>
                    </figure>
                </a>
                <a href="#" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                    <figure>
                        <img src="../img/project/4.png" />
                        <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
                        <figcaption>
                            <h2>Iridescent</h2>
                            <p>A grape silver beet watercress potato.</p>
                        </figcaption>
                    </figure>
                </a>
                <a href="#" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                    <figure>
                        <img src="../img/project/6.png" />
                        <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
                        <figcaption>
                            <h2>Resonant</h2>
                            <p>Chickweed okra pea winter purslane.</p>
                        </figcaption>
                    </figure>
                </a>
                <a href="#" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                    <figure>
                        <img src="../img/project/8.png" />
                        <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
                        <figcaption>
                            <h2>Zenith</h2>
                            <p>Salsify taro catsear garlic gram.</p>
                        </figcaption>
                    </figure>
                </a>
            </section>

        </div>

        <script>
            (function() {

                function init() {
                    var speed = 250,
                            easing = mina.easeinout;

                    [].slice.call ( document.querySelectorAll( '#grid > a' ) ).forEach( function( el ) {
                        var s = Snap( el.querySelector( 'svg' ) ), path = s.select( 'path' ),
                                pathConfig = {
                                    from : path.attr( 'd' ),
                                    to : el.getAttribute( 'data-path-hover' )
                                };

                        el.addEventListener( 'mouseenter', function() {
                            path.animate( { 'path' : pathConfig.to }, speed, easing );
                        } );

                        el.addEventListener( 'mouseleave', function() {
                            path.animate( { 'path' : pathConfig.from }, speed, easing );
                        } );
                    } );
                }

                init();

            })();
        </script>

        {{--<div class="service_flow">
            흐름도
        </div>
        <div class="service_info">
            소개
        </div>--}}
    </div>



    </body>
</html>
