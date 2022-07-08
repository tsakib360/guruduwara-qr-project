<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta charset="utf-8" />
</head>

<body style="margin: 0;">
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
                <span class="t s2_1" style="left: 220px; bottom: 1077px"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHwAAAB8CAYAAACrHtS+AAAABmJLR0QA/wD/AP+gvaeTAAADCElEQVR4nO2d223cMBAA48BlpCyX5jLcjHtwBykg/hYPOGKxD9GZmU+fTidzsFhxRa5e/n6+//slGH7ffQEyi8JhKBzG6/qHj48/oxfw9vb19PP1etbjs5/viI5H9P/pZr0eIxyGwmEoHMZDDl+J5rwd2Ry2+370/N05enf89Pga4TAUDkPhMLY5fKU65+3On81xu+utnrdn6R5fIxyGwmEoHEY4h08TzcHV54vW6k/HCIehcBgKh3FcDp+e90apvqeYxgiHoXAYCocRzuF356jsvHc3j87WsrO1+O7xNcJhKByGwmFsc/h0rTi7Jqx7HXv1eEyPrxEOQ+EwFA7j5fT94T9tTdrpGOEwFA5D4TDSOTybY3fHR38/+3t370dfqR4vIxyGwmEoHMZDDs/mjO4cdncPlemeNLvfj46PEQ5D4TAUDmObw7t7kEzPY0+bV0/X+o1wGAqHoXAY47X03fe7e6VWr1Hrrktk6xD2WoWjcBgKhzHeLz3aK7U6R1bvHavu7dqd441wGAqHoXAY4Vr6/1Zb7u5tuvu96TV1RjgMhcNQOIzxvWXdPVqytfLueXyU6jVwRjgMhcNQOIzydendVOe06Pmzx0epvucxwmEoHIbCYTw8D8/OQ6f3Su2YfkdJ9z1GdjyMcBgKh6FwGNs1bdW9TruZfr5cfY/QPX5GOAyFw1A4jHS/9NNrz3fX/le6e9S4pk0uKByGwmGk3z16Wu18ZbrP2/SaOnutylMUDkPhMNrfPdrdU6X7+XL1/u/q70ePN8JhKByGwmEc996y0/uNT/eV2+E8XJ6icBgKhzHep22lunZ8eq28es1gFCMchsJhKBzGtpY+vd95+l2d07Vy+6XLKAqHoXAY4efh3bXe6XXl1bX4lemcb790uaBwGAqHkV6X3k00p1a/o+SnPT83h8sFhcNQOIzjcvjdOXO612z19VlLlwsKh6FwGO17y+6mu2fK9Dr46PlXjHAYCoehcBjpPm2n072fffr4HdbS5YLCYSgcxnH7w6UXIxyGwmEoHMY3cWYuZdztsfIAAAAASUVORK5CYII=" width="37"></span>
                <span class="t s2_1" style="right: 123px; bottom: 1077px"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHwAAAB8CAYAAACrHtS+AAAABmJLR0QA/wD/AP+gvaeTAAADCElEQVR4nO2d223cMBAA48BlpCyX5jLcjHtwBykg/hYPOGKxD9GZmU+fTidzsFhxRa5e/n6+//slGH7ffQEyi8JhKBzG6/qHj48/oxfw9vb19PP1etbjs5/viI5H9P/pZr0eIxyGwmEoHMZDDl+J5rwd2Ry2+370/N05enf89Pga4TAUDkPhMLY5fKU65+3On81xu+utnrdn6R5fIxyGwmEoHEY4h08TzcHV54vW6k/HCIehcBgKh3FcDp+e90apvqeYxgiHoXAYCocRzuF356jsvHc3j87WsrO1+O7xNcJhKByGwmFsc/h0rTi7Jqx7HXv1eEyPrxEOQ+EwFA7j5fT94T9tTdrpGOEwFA5D4TDSOTybY3fHR38/+3t370dfqR4vIxyGwmEoHMZDDs/mjO4cdncPlemeNLvfj46PEQ5D4TAUDmObw7t7kEzPY0+bV0/X+o1wGAqHoXAY47X03fe7e6VWr1Hrrktk6xD2WoWjcBgKhzHeLz3aK7U6R1bvHavu7dqd441wGAqHoXAY4Vr6/1Zb7u5tuvu96TV1RjgMhcNQOIzxvWXdPVqytfLueXyU6jVwRjgMhcNQOIzydendVOe06Pmzx0epvucxwmEoHIbCYTw8D8/OQ6f3Su2YfkdJ9z1GdjyMcBgKh6FwGNs1bdW9TruZfr5cfY/QPX5GOAyFw1A4jHS/9NNrz3fX/le6e9S4pk0uKByGwmGk3z16Wu18ZbrP2/SaOnutylMUDkPhMNrfPdrdU6X7+XL1/u/q70ePN8JhKByGwmEc996y0/uNT/eV2+E8XJ6icBgKhzHep22lunZ8eq28es1gFCMchsJhKBzGtpY+vd95+l2d07Vy+6XLKAqHoXAY4efh3bXe6XXl1bX4lemcb790uaBwGAqHkV6X3k00p1a/o+SnPT83h8sFhcNQOIzjcvjdOXO612z19VlLlwsKh6FwGO17y+6mu2fK9Dr46PlXjHAYCoehcBjpPm2n072fffr4HdbS5YLCYSgcxnH7w6UXIxyGwmEoHMY3cWYuZdztsfIAAAAASUVORK5CYII=" width="37"></span>
                <span class="t s2_1" style="left: 220px; bottom: 96px"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHwAAAB8CAYAAACrHtS+AAAABmJLR0QA/wD/AP+gvaeTAAADCElEQVR4nO2d223cMBAA48BlpCyX5jLcjHtwBykg/hYPOGKxD9GZmU+fTidzsFhxRa5e/n6+//slGH7ffQEyi8JhKBzG6/qHj48/oxfw9vb19PP1etbjs5/viI5H9P/pZr0eIxyGwmEoHMZDDl+J5rwd2Ry2+370/N05enf89Pga4TAUDkPhMLY5fKU65+3On81xu+utnrdn6R5fIxyGwmEoHEY4h08TzcHV54vW6k/HCIehcBgKh3FcDp+e90apvqeYxgiHoXAYCocRzuF356jsvHc3j87WsrO1+O7xNcJhKByGwmFsc/h0rTi7Jqx7HXv1eEyPrxEOQ+EwFA7j5fT94T9tTdrpGOEwFA5D4TDSOTybY3fHR38/+3t370dfqR4vIxyGwmEoHMZDDs/mjO4cdncPlemeNLvfj46PEQ5D4TAUDmObw7t7kEzPY0+bV0/X+o1wGAqHoXAY47X03fe7e6VWr1Hrrktk6xD2WoWjcBgKhzHeLz3aK7U6R1bvHavu7dqd441wGAqHoXAY4Vr6/1Zb7u5tuvu96TV1RjgMhcNQOIzxvWXdPVqytfLueXyU6jVwRjgMhcNQOIzydendVOe06Pmzx0epvucxwmEoHIbCYTw8D8/OQ6f3Su2YfkdJ9z1GdjyMcBgKh6FwGNs1bdW9TruZfr5cfY/QPX5GOAyFw1A4jHS/9NNrz3fX/le6e9S4pk0uKByGwmGk3z16Wu18ZbrP2/SaOnutylMUDkPhMNrfPdrdU6X7+XL1/u/q70ePN8JhKByGwmEc996y0/uNT/eV2+E8XJ6icBgKhzHep22lunZ8eq28es1gFCMchsJhKBzGtpY+vd95+l2d07Vy+6XLKAqHoXAY4efh3bXe6XXl1bX4lemcb790uaBwGAqHkV6X3k00p1a/o+SnPT83h8sFhcNQOIzjcvjdOXO612z19VlLlwsKh6FwGO17y+6mu2fK9Dr46PlXjHAYCoehcBjpPm2n072fffr4HdbS5YLCYSgcxnH7w6UXIxyGwmEoHMY3cWYuZdztsfIAAAAASUVORK5CYII=" width="37"></span>
                <span class="t s2_1" style="right: 123px; bottom: 96px"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHwAAAB8CAYAAACrHtS+AAAABmJLR0QA/wD/AP+gvaeTAAADCElEQVR4nO2d223cMBAA48BlpCyX5jLcjHtwBykg/hYPOGKxD9GZmU+fTidzsFhxRa5e/n6+//slGH7ffQEyi8JhKBzG6/qHj48/oxfw9vb19PP1etbjs5/viI5H9P/pZr0eIxyGwmEoHMZDDl+J5rwd2Ry2+370/N05enf89Pga4TAUDkPhMLY5fKU65+3On81xu+utnrdn6R5fIxyGwmEoHEY4h08TzcHV54vW6k/HCIehcBgKh3FcDp+e90apvqeYxgiHoXAYCocRzuF356jsvHc3j87WsrO1+O7xNcJhKByGwmFsc/h0rTi7Jqx7HXv1eEyPrxEOQ+EwFA7j5fT94T9tTdrpGOEwFA5D4TDSOTybY3fHR38/+3t370dfqR4vIxyGwmEoHMZDDs/mjO4cdncPlemeNLvfj46PEQ5D4TAUDmObw7t7kEzPY0+bV0/X+o1wGAqHoXAY47X03fe7e6VWr1Hrrktk6xD2WoWjcBgKhzHeLz3aK7U6R1bvHavu7dqd441wGAqHoXAY4Vr6/1Zb7u5tuvu96TV1RjgMhcNQOIzxvWXdPVqytfLueXyU6jVwRjgMhcNQOIzydendVOe06Pmzx0epvucxwmEoHIbCYTw8D8/OQ6f3Su2YfkdJ9z1GdjyMcBgKh6FwGNs1bdW9TruZfr5cfY/QPX5GOAyFw1A4jHS/9NNrz3fX/le6e9S4pk0uKByGwmGk3z16Wu18ZbrP2/SaOnutylMUDkPhMNrfPdrdU6X7+XL1/u/q70ePN8JhKByGwmEc996y0/uNT/eV2+E8XJ6icBgKhzHep22lunZ8eq28es1gFCMchsJhKBzGtpY+vd95+l2d07Vy+6XLKAqHoXAY4efh3bXe6XXl1bX4lemcb790uaBwGAqHkV6X3k00p1a/o+SnPT83h8sFhcNQOIzjcvjdOXO612z19VlLlwsKh6FwGO17y+6mu2fK9Dr46PlXjHAYCoehcBjpPm2n072fffr4HdbS5YLCYSgcxnH7w6UXIxyGwmEoHMY3cWYuZdztsfIAAAAASUVORK5CYII=" width="37"></span>
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
                <span class="t s2_1" style="left: 220px; bottom: 1077px"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHwAAAB8CAYAAACrHtS+AAAABmJLR0QA/wD/AP+gvaeTAAADB0lEQVR4nO2d223cMBAA4yCNuaLU4l7yn1ZcgEsIkHyLF5hY70O0Z+bT1kk6DhYr7pGrp9e3X3+/CYbvd9+AzKJwGAqH8WP9w++XP6M38Pzz4RYurPezHp/9/47oeES/Tzfr/RjhMBQOQ+EwtgktmvN2ZHPY7vPR83fn6N3x0+NrhMNQOAyFwwgnkOqctzt/Nsft7rd63p6le3yNcBgKh6FwGLMJ6gNEc3D1+aK1+tMxwmEoHIbCYRyXw6fnvVGqnymmMcJhKByGwmGEE87dOSo7793No7O17Gwtvnt8jXAYCoehcBjbhDFdK86uCetex149HtPja4TDUDgMhcN4On1/+Gdbk3Y6RjgMhcNQOIx0Ds/m2N3x0etnr3f3fvSV6vEywmEoHIbCYTzk8GzO6M5hd/dQme5Js7t+dHyMcBgKh6FwGNsc3t2DZHoee9q8errWb4TDUDgMhcMYr6XvPt/dK7V6jVp3XSJbh7DXKhyFw1A4jPF+6dFeqdU5snrvWHVv1+4cb4TDUDgMhcMI19K/Wm25u7fp7nrTa+qMcBgKh6FwGON7y7p7tGRr5d3z+CjVa+CMcBgKh6FwGOXr0rupzmnR82ePj1L9zGOEw1A4DIXDeEg42Xno9F6pHdPvKOl+xsiOhxEOQ+EwFA5ju6atutdpN9O/L1c/I3SPnxEOQ+EwFA4j3S/99Nrz3bX/le4eNa5pkwsKh6FwGOkEd1rtfGW6z9v0mjp7rcq7KByGwmG0v3u0u6dK9+/L1fu/qz8fPd4Ih6FwGAqHcdx7y07vNz7dV26H83B5F4XDUDiM8T5tK9W149Nr5dVrBqMY4TAUDkPhMLaTuOn9ztPv6pyuldsvXUZROAyFwwgnzO5a7/S68upa/Mp0zrdfulxQOAyFwzhr49V/iObU6neUfLbfz83hckHhMBQO47gcfnfOnO41W31/1tLlgsJhKBxG+96yu+numTK9Dj56/hUjHIbCYSgcRrpP2+l072efPn6HtXS5oHAYCodx3P5w6cUIh6FwGAqH8Q+sJjD1U1PjZQAAAABJRU5ErkJggg==" width="37"></span>
                <span class="t s2_1" style="right: 123px; bottom: 1077px"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHwAAAB8CAYAAACrHtS+AAAABmJLR0QA/wD/AP+gvaeTAAADB0lEQVR4nO2d223cMBAA4yCNuaLU4l7yn1ZcgEsIkHyLF5hY70O0Z+bT1kk6DhYr7pGrp9e3X3+/CYbvd9+AzKJwGAqH8WP9w++XP6M38Pzz4RYurPezHp/9/47oeES/Tzfr/RjhMBQOQ+EwtgktmvN2ZHPY7vPR83fn6N3x0+NrhMNQOAyFwwgnkOqctzt/Nsft7rd63p6le3yNcBgKh6FwGLMJ6gNEc3D1+aK1+tMxwmEoHIbCYRyXw6fnvVGqnymmMcJhKByGwmGEE87dOSo7793No7O17Gwtvnt8jXAYCoehcBjbhDFdK86uCetex149HtPja4TDUDgMhcN4On1/+Gdbk3Y6RjgMhcNQOIx0Ds/m2N3x0etnr3f3fvSV6vEywmEoHIbCYTzk8GzO6M5hd/dQme5Js7t+dHyMcBgKh6FwGNsc3t2DZHoee9q8errWb4TDUDgMhcMYr6XvPt/dK7V6jVp3XSJbh7DXKhyFw1A4jPF+6dFeqdU5snrvWHVv1+4cb4TDUDgMhcMI19K/Wm25u7fp7nrTa+qMcBgKh6FwGON7y7p7tGRr5d3z+CjVa+CMcBgKh6FwGOXr0rupzmnR82ePj1L9zGOEw1A4DIXDeEg42Xno9F6pHdPvKOl+xsiOhxEOQ+EwFA5ju6atutdpN9O/L1c/I3SPnxEOQ+EwFA4j3S/99Nrz3bX/le4eNa5pkwsKh6FwGOkEd1rtfGW6z9v0mjp7rcq7KByGwmG0v3u0u6dK9+/L1fu/qz8fPd4Ih6FwGAqHcdx7y07vNz7dV26H83B5F4XDUDiM8T5tK9W149Nr5dVrBqMY4TAUDkPhMLaTuOn9ztPv6pyuldsvXUZROAyFwwgnzO5a7/S68upa/Mp0zrdfulxQOAyFwzhr49V/iObU6neUfLbfz83hckHhMBQO47gcfnfOnO41W31/1tLlgsJhKBxG+96yu+numTK9Dj56/hUjHIbCYSgcRrpP2+l072efPn6HtXS5oHAYCodx3P5w6cUIh6FwGAqH8Q+sJjD1U1PjZQAAAABJRU5ErkJggg==" width="37"></span>
                <span class="t s2_1" style="left: 220px; bottom: 96px"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHwAAAB8CAYAAACrHtS+AAAABmJLR0QA/wD/AP+gvaeTAAADB0lEQVR4nO2d223cMBAA4yCNuaLU4l7yn1ZcgEsIkHyLF5hY70O0Z+bT1kk6DhYr7pGrp9e3X3+/CYbvd9+AzKJwGAqH8WP9w++XP6M38Pzz4RYurPezHp/9/47oeES/Tzfr/RjhMBQOQ+EwtgktmvN2ZHPY7vPR83fn6N3x0+NrhMNQOAyFwwgnkOqctzt/Nsft7rd63p6le3yNcBgKh6FwGLMJ6gNEc3D1+aK1+tMxwmEoHIbCYRyXw6fnvVGqnymmMcJhKByGwmGEE87dOSo7793No7O17Gwtvnt8jXAYCoehcBjbhDFdK86uCetex149HtPja4TDUDgMhcN4On1/+Gdbk3Y6RjgMhcNQOIx0Ds/m2N3x0etnr3f3fvSV6vEywmEoHIbCYTzk8GzO6M5hd/dQme5Js7t+dHyMcBgKh6FwGNsc3t2DZHoee9q8errWb4TDUDgMhcMYr6XvPt/dK7V6jVp3XSJbh7DXKhyFw1A4jPF+6dFeqdU5snrvWHVv1+4cb4TDUDgMhcMI19K/Wm25u7fp7nrTa+qMcBgKh6FwGON7y7p7tGRr5d3z+CjVa+CMcBgKh6FwGOXr0rupzmnR82ePj1L9zGOEw1A4DIXDeEg42Xno9F6pHdPvKOl+xsiOhxEOQ+EwFA5ju6atutdpN9O/L1c/I3SPnxEOQ+EwFA4j3S/99Nrz3bX/le4eNa5pkwsKh6FwGOkEd1rtfGW6z9v0mjp7rcq7KByGwmG0v3u0u6dK9+/L1fu/qz8fPd4Ih6FwGAqHcdx7y07vNz7dV26H83B5F4XDUDiM8T5tK9W149Nr5dVrBqMY4TAUDkPhMLaTuOn9ztPv6pyuldsvXUZROAyFwwgnzO5a7/S68upa/Mp0zrdfulxQOAyFwzhr49V/iObU6neUfLbfz83hckHhMBQO47gcfnfOnO41W31/1tLlgsJhKBxG+96yu+numTK9Dj56/hUjHIbCYSgcRrpP2+l072efPn6HtXS5oHAYCodx3P5w6cUIh6FwGAqH8Q+sJjD1U1PjZQAAAABJRU5ErkJggg==" width="37"></span>
                <span class="t s2_1" style="right: 123px; bottom: 96px"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHwAAAB8CAYAAACrHtS+AAAABmJLR0QA/wD/AP+gvaeTAAADB0lEQVR4nO2d223cMBAA4yCNuaLU4l7yn1ZcgEsIkHyLF5hY70O0Z+bT1kk6DhYr7pGrp9e3X3+/CYbvd9+AzKJwGAqH8WP9w++XP6M38Pzz4RYurPezHp/9/47oeES/Tzfr/RjhMBQOQ+EwtgktmvN2ZHPY7vPR83fn6N3x0+NrhMNQOAyFwwgnkOqctzt/Nsft7rd63p6le3yNcBgKh6FwGLMJ6gNEc3D1+aK1+tMxwmEoHIbCYRyXw6fnvVGqnymmMcJhKByGwmGEE87dOSo7793No7O17Gwtvnt8jXAYCoehcBjbhDFdK86uCetex149HtPja4TDUDgMhcN4On1/+Gdbk3Y6RjgMhcNQOIx0Ds/m2N3x0etnr3f3fvSV6vEywmEoHIbCYTzk8GzO6M5hd/dQme5Js7t+dHyMcBgKh6FwGNsc3t2DZHoee9q8errWb4TDUDgMhcMYr6XvPt/dK7V6jVp3XSJbh7DXKhyFw1A4jPF+6dFeqdU5snrvWHVv1+4cb4TDUDgMhcMI19K/Wm25u7fp7nrTa+qMcBgKh6FwGON7y7p7tGRr5d3z+CjVa+CMcBgKh6FwGOXr0rupzmnR82ePj1L9zGOEw1A4DIXDeEg42Xno9F6pHdPvKOl+xsiOhxEOQ+EwFA5ju6atutdpN9O/L1c/I3SPnxEOQ+EwFA4j3S/99Nrz3bX/le4eNa5pkwsKh6FwGOkEd1rtfGW6z9v0mjp7rcq7KByGwmG0v3u0u6dK9+/L1fu/qz8fPd4Ih6FwGAqHcdx7y07vNz7dV26H83B5F4XDUDiM8T5tK9W149Nr5dVrBqMY4TAUDkPhMLaTuOn9ztPv6pyuldsvXUZROAyFwwgnzO5a7/S68upa/Mp0zrdfulxQOAyFwzhr49V/iObU6neUfLbfz83hckHhMBQO47gcfnfOnO41W31/1tLlgsJhKBxG+96yu+numTK9Dj56/hUjHIbCYSgcRrpP2+l072efPn6HtXS5oHAYCodx3P5w6cUIh6FwGAqH8Q+sJjD1U1PjZQAAAABJRU5ErkJggg==" width="37"></span>
                <span id="ts_1" class="t s2_1">{{$x}} </span>
            </div>
            <!-- End text definitions -->


        </div>
    @endif

@endfor

</body>
</html>
