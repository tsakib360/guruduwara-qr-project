<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta charset="utf-8" />
</head>

<body style="margin: 0;">
    @php
        $qr1 = env('API_URL')."files/qr1.png";
        $qr2 = env('API_URL')."files/qr2.png";
    @endphp
@for($x=1; $x<=$page; $x++)
    @if($x % 2 == 0)
        <div id="p1" style="overflow: hidden; position: relative; background-color: white; width: 1624px; height: 1255px;">

            <!-- Begin shared CSS values -->
            <style class="shared-css" type="text/css" >
                .t {
                    transform-origin: bottom left;
                    z-index: 2;
                    position: absolute;
                    white-space: pre;
                    overflow: visible;
                    line-height: 1.5;
                }
                .text-container {
                    white-space: pre;
                }
                @supports (-webkit-touch-callout: none) {
                    .text-container {
                        white-space: normal;
                    }
                }
            </style>
            <!-- End shared CSS values -->


            <!-- Begin inline CSS -->
            <style type="text/css" >

                #t1_1{left:270px;bottom:1038px;letter-spacing:-0.21px;}
                #t2_1{left:270px;bottom:1007px;letter-spacing:-0.2px;}
                #t3_1{left:270px;bottom:977px;letter-spacing:-0.21px;}
                #t4_1{left:270px;bottom:946px;letter-spacing:-0.23px;}
                #t5_1{left:270px;bottom:916px;letter-spacing:-0.22px;}
                #t6_1{left:270px;bottom:885px;letter-spacing:-0.22px;}
                #t7_1{left:270px;bottom:855px;letter-spacing:-0.22px;}
                #t8_1{left:270px;bottom:824px;letter-spacing:-0.22px;}
                #t9_1{left:270px;bottom:793px;letter-spacing:-0.23px;}
                #ta_1{left:270px;bottom:732px;letter-spacing:-0.21px;}
                #tb_1{left:270px;bottom:702px;letter-spacing:-0.22px;}
                #tc_1{left:270px;bottom:671px;letter-spacing:-0.22px;}
                #td_1{left:270px;bottom:641px;letter-spacing:-0.22px;}
                #te_1{left:270px;bottom:610px;letter-spacing:-0.22px;}
                #tf_1{left:270px;bottom:580px;letter-spacing:-0.22px;}
                #tg_1{left:270px;bottom:549px;letter-spacing:-0.22px;}
                #th_1{left:270px;bottom:518px;letter-spacing:-0.22px;}
                #ti_1{left:270px;bottom:488px;letter-spacing:-0.26px;}
                #tj_1{left:270px;bottom:427px;letter-spacing:-0.22px;}
                #tk_1{left:270px;bottom:396px;letter-spacing:-0.23px;}
                #tl_1{left:270px;bottom:366px;letter-spacing:-0.22px;}
                #tm_1{left:270px;bottom:335px;letter-spacing:-0.21px;}
                #tn_1{left:270px;bottom:305px;letter-spacing:-0.22px;}
                #to_1{left:270px;bottom:274px;letter-spacing:-0.22px;}
                #tp_1{left:270px;bottom:243px;letter-spacing:-0.22px;}
                #tq_1{left:270px;bottom:213px;letter-spacing:-0.21px;}
                #tr_1{left:270px;bottom:182px;letter-spacing:-0.2px;}
                #ts_1{left:848px;bottom:1083px;}

                .s1_1{font-size:28px;font-family:Helvetica, Arial, sans-serif;color:#000;}
                .s2_1{font-size:49px;font-family:AmrLipiHeavy_1-;color:#000;}
            </style>
            <!-- End inline CSS -->

            <!-- Begin embedded font definitions -->
            <style id="fonts1" type="text/css" >

                @font-face {
                    font-family: AmrLipiHeavy_1-;
                    src: url("{{asset('pdf/fonts/AmrLipiHeavy_1-.woff')}}") format("woff");
                }

            </style>
            <!-- End embedded font definitions -->

            <!-- Begin page background -->
            <div id="pg1Overlay" style="width:100%; height:100%; position:absolute; z-index:1; background-color:rgba(0,0,0,0); -webkit-user-select: none;"></div>
            <div id="pg1" style="-webkit-user-select: none;"><object width="1624" height="1255" data="{{asset('pdf/2/2.svg')}}" type="image/svg+xml" id="pdf1" style="width:1624px; height:1255px; -moz-transform:scale(1); z-index: 0;"></object></div>
            <!-- End page background -->


            <!-- Begin text definitions (Positioned/styled in CSS) -->
            <div class="text-container">
                <span class="t s2_1" style="left: 220px; bottom: 1077px"><img src="{{$qr2}}" width="37"></span>
                <span class="t s2_1" style="right: 123px; bottom: 1077px"><img src="{{$qr2}}" width="37"></span>
                <span class="t s2_1" style="left: 220px; bottom: 96px"><img src="{{$qr2}}" width="37"></span>
                <span class="t s2_1" style="right: 123px; bottom: 96px"><img src="{{$qr2}}" width="37"></span>
                <span id="ts_1" class="t s2_1">{{$x}} </span>
            </div>
            <!-- End text definitions -->


        </div>
    @else
        <div id="p1" style="overflow: hidden; position: relative; background-color: white; width: 1624px; height: 1255px;">

            <!-- Begin shared CSS values -->
            <style class="shared-css" type="text/css" >
                .t {
                    transform-origin: bottom left;
                    z-index: 2;
                    position: absolute;
                    white-space: pre;
                    overflow: visible;
                    line-height: 1.5;
                }
                .text-container {
                    white-space: pre;
                }
                @supports (-webkit-touch-callout: none) {
                    .text-container {
                        white-space: normal;
                    }
                }
            </style>
            <!-- End shared CSS values -->


            <!-- Begin inline CSS -->
            <style type="text/css" >

                #t1_1{left:270px;bottom:1038px;letter-spacing:-0.21px;}
                #t2_1{left:270px;bottom:1007px;letter-spacing:-0.2px;}
                #t3_1{left:270px;bottom:977px;letter-spacing:-0.21px;}
                #t4_1{left:270px;bottom:946px;letter-spacing:-0.23px;}
                #t5_1{left:270px;bottom:916px;letter-spacing:-0.22px;}
                #t6_1{left:270px;bottom:885px;letter-spacing:-0.22px;}
                #t7_1{left:270px;bottom:855px;letter-spacing:-0.22px;}
                #t8_1{left:270px;bottom:824px;letter-spacing:-0.22px;}
                #t9_1{left:270px;bottom:793px;letter-spacing:-0.23px;}
                #ta_1{left:270px;bottom:732px;letter-spacing:-0.21px;}
                #tb_1{left:270px;bottom:702px;letter-spacing:-0.22px;}
                #tc_1{left:270px;bottom:671px;letter-spacing:-0.22px;}
                #td_1{left:270px;bottom:641px;letter-spacing:-0.22px;}
                #te_1{left:270px;bottom:610px;letter-spacing:-0.22px;}
                #tf_1{left:270px;bottom:580px;letter-spacing:-0.22px;}
                #tg_1{left:270px;bottom:549px;letter-spacing:-0.22px;}
                #th_1{left:270px;bottom:518px;letter-spacing:-0.22px;}
                #ti_1{left:270px;bottom:488px;letter-spacing:-0.26px;}
                #tj_1{left:270px;bottom:427px;letter-spacing:-0.22px;}
                #tk_1{left:270px;bottom:396px;letter-spacing:-0.23px;}
                #tl_1{left:270px;bottom:366px;letter-spacing:-0.22px;}
                #tm_1{left:270px;bottom:335px;letter-spacing:-0.21px;}
                #tn_1{left:270px;bottom:305px;letter-spacing:-0.22px;}
                #to_1{left:270px;bottom:274px;letter-spacing:-0.22px;}
                #tp_1{left:270px;bottom:243px;letter-spacing:-0.22px;}
                #tq_1{left:270px;bottom:213px;letter-spacing:-0.21px;}
                #tr_1{left:270px;bottom:182px;letter-spacing:-0.2px;}
                #ts_1{left:848px;bottom:1083px;}

                .s1_1{font-size:28px;font-family:Helvetica, Arial, sans-serif;color:#000;}
                .s2_1{font-size:49px;font-family:AmrLipiHeavy_1-;color:#000;}
            </style>
            <!-- End inline CSS -->

            <!-- Begin embedded font definitions -->
            <style id="fonts1" type="text/css" >

                @font-face {
                    font-family: AmrLipiHeavy_1-;
                    src: url("{{asset('pdf/fonts/AmrLipiHeavy_1-.woff')}}") format("woff");
                }

            </style>
            <!-- End embedded font definitions -->

            <!-- Begin page background -->
            <div id="pg1Overlay" style="width:100%; height:100%; position:absolute; z-index:1; background-color:rgba(0,0,0,0); -webkit-user-select: none;"></div>
            <div id="pg1" style="-webkit-user-select: none;"><object width="1624" height="1255" data="{{asset('pdf/1/1.svg')}}" type="image/svg+xml" id="pdf1" style="width:1624px; height:1255px; -moz-transform:scale(1); z-index: 0;"></object></div>
            <!-- End page background -->


            <!-- Begin text definitions (Positioned/styled in CSS) -->
            <div class="text-container">
                <span class="t s2_1" style="left: 220px; bottom: 1077px"><img src="{{$qr1}}" width="37"></span>
                <span class="t s2_1" style="right: 123px; bottom: 1077px"><img src="{{$qr1}}" width="37"></span>
                <span class="t s2_1" style="left: 220px; bottom: 96px"><img src="{{$qr1}}" width="37"></span>
                <span class="t s2_1" style="right: 123px; bottom: 96px"><img src="{{$qr1}}" width="37"></span>
                <span id="ts_1" class="t s2_1">{{$x}} </span>
            </div>
            <!-- End text definitions -->


        </div>
    @endif

@endfor

</body>
</html>
