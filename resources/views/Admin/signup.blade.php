@extends('Layout.admin')

@section('title','签到页面')

@section('hidden')
@endsection

@section('content')
    <div class="qiandao-warp">
        <div class="qiandap-box">
            <div class="qiandao-banner">
                <img src="../images/qiandao_banner.jpg" height="551" width="1120" alt="">
            </div>
            <div class="qiandao-con clear">
                <div class="qiandao-left">
                    <div class="qiandao-left-top clear">
                        <div class="current-date">2016年1月6日</div>
                        <div class="qiandao-history qiandao-tran qiandao-radius" id="js-qiandao-history">我的签到</div>
                    </div>
                    <div class="qiandao-main" id="js-qiandao-main">
                        <ul class="qiandao-list" id="js-qiandao-list">
                        </ul>
                    </div>
                </div>
                <div class="qiandao-right">
                    <div class="qiandao-top">
                        <div class="just-qiandao qiandao-sprits" id="js-just-qiandao">
                        </div>
                    </div>
                    <div class="qiandao-bottom">
                        <div class="qiandao-rule-list">
                            大一，一次去食堂打包子，谁知划卡机出了点毛病，一下划下去25块3，卖包子的哥哥鼓捣了半天也加不回去，于是可怜兮兮地说：“没事，我记得你，以后常来，直到把多划的钱用完。”我只好同意了。
                            可怜我上顿包子下顿包子地吃了一学期，包子哥哥还欠我2块3……最可气的是大学四年我竟然没找到一个女朋友！！！
                            直到毕业，有一天我走在校园林荫路上，就听后面一帮女生指指点点小声道：“没错，就是他！！以后可别找这样男朋友，天天去二食堂吃包子不给钱！！
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- 我的签到 layer start -->
    <div class="qiandao-layer qiandao-history-layer">
        <div class="qiandao-layer-con qiandao-radius">
            <a href="javascript:;" class="close-qiandao-layer qiandao-sprits"></a>
            <ul class="qiandao-history-inf clear">
                <li>
                    <p>连续签到</p>
                    <h4></h4>
                </li>
                <li>
                    <p>本月签到</p>
                    <h4></h4>
                </li>
                <li>
                    <p>总共签到数</p>
                    <h4></h4>
                </li>
                <li>
                    <p>签到累计</p>
                    <h4></h4>
                </li>
            </ul>
            <div class="qiandao-history-table">
                <table>
                    <thead>
                    <tr>
                        <th>签到日期</th>
                    </tr>
                    </thead>
                    <table>
                        <tr>
                            <td></td>

                        </tr>
                        <tr>
                            <td></td>

                        </tr>
                        <tr>
                            <td></td>

                        </tr>
                        <tr>
                            <td></td>

                        </tr>
                        <tr>
                            <td></td>

                        </tr>
                        <tr>
                            <td></td>

                        </tr>
                        <tr>
                            <td></td>

                        </tr>
                        <tr>
                            <td></td>

                        </tr>
                    </table>
                </table>
            </div>
        </div>
        <div class="qiandao-layer-bg"></div>
    </div>
    <!-- 我的签到 layer end -->
    <!-- 签到 layer start -->
    <div class="qiandao-layer qiandao-active">
        <div class="qiandao-layer-con qiandao-radius">
            <a href="javascript:;" class="close-qiandao-layer qiandao-sprits"></a>
            <div class="yiqiandao clear">
                <div class="yiqiandao-icon qiandao-sprits"></div>
            </div>
        </div>
        <div class="qiandao-layer-bg"></div>
    </div>
    <!-- 签到失败 layer start -->
    <div class="qiandao-layer qiandao-noactive">
        <div class="qiandao-layer-con qiandao-radius">
            <a href="javascript:;" class="close-qiandao-layer qiandao-sprits"></a>
            <div class="yiqiandao clear">
                <div style="font-size: 30px;color:red">
                签到失败,未知错误
                </div>
            </div>
        </div>
        <div class="qiandao-layer-bg"></div>
    </div>
    <!-- 签到失败 layer start -->
    <div class="qiandao-layer qiandao-ipactive">
        <div class="qiandao-layer-con qiandao-radius">
            <a href="javascript:;" class="close-qiandao-layer qiandao-sprits"></a>
            <div class="yiqiandao clear">
                <div style="font-size: 30px;color:red">
                    签到失败,ip已被拉入黑名单
                </div>
            </div>
        </div>
        <div class="qiandao-layer-bg"></div>
    </div>

    <script>
        $(function() {
            var signFun = function() {

                var dateArray = [0,1,2] // 假设已经签到的

                var $dateBox = $("#js-qiandao-list"),
                    $currentDate = $(".current-date"),
                    $qiandaoBnt = $("#js-just-qiandao"),
                    _html = '',
                    _handle = true,
                    myDate = new Date();
                $currentDate.text(myDate.getFullYear() + '年' + parseInt(myDate.getMonth() + 1) + '月' + myDate.getDate() + '日');

                var monthFirst = new Date(myDate.getFullYear(), parseInt(myDate.getMonth()), 1).getDay();

                var d = new Date(myDate.getFullYear(), parseInt(myDate.getMonth() + 1), 0);
                var totalDay = d.getDate(); //获取当前月的天数

                for (var i = 0; i < 42; i++) {
                    _html += ' <li><div class="qiandao-icon"></div></li>'
                }
                $dateBox.html(_html) //生成日历网格

                var $dateLi = $dateBox.find("li");
                for (var i = 0; i < totalDay; i++) {
                    $dateLi.eq(i + monthFirst).addClass("date" + parseInt(i + 1));
                    for (var j = 0; j < dateArray.length; j++) {
                        if (i == dateArray[j]) {
                            $dateLi.eq(i + monthFirst).addClass("qiandao");
                        }
                    }
                } //生成当月的日历且含已签到

                $(".date" + myDate.getDate()).addClass('able-qiandao');

                $dateBox.on("click", "li", function() {
                    if ($(this).hasClass('able-qiandao') && _handle) {
                        $(this).addClass('qiandao');
                        qiandaoFun();
                    }
                }) //签到

                $qiandaoBnt.on("click", function() {
                    if (_handle) {
                        qiandaoFun();
                        $.ajax({
                            type:'post',
                            url:"{{action('admin\signController@add_sign')}}",
                            dataType:'json',
                            data:{
                                _token:"{{ csrf_token() }}",
                                id:"{{session('id')}}",
                            },
                            success:function (data){
                                if(data.success == "true"){
                                    openLayer("qiandao-active", qianDao);
                                }else{
                                    openLayer("qiandao-ipactive");
                                }
                            },
                            error:function(data){
                                openLayer("qiandao-noactive");
                                $('#js-just-qiandao').removeClass('actived');
                            },
                        })
                    }
                }); //签到

                function qiandaoFun() {
                    $qiandaoBnt.addClass('actived');
                    _handle = false;
                }

                function qianDao() {
                    $(".date" + myDate.getDate()).addClass('qiandao');
                }
            }();

            function openLayer(a, Fun) {
                $('.' + a).fadeIn(Fun)
            } //打开弹窗

            var closeLayer = function() {
                $("body").on("click", ".close-qiandao-layer", function() {
                    $(this).parents(".qiandao-layer").fadeOut()
                })
            }() //关闭弹窗

            $("#js-qiandao-history").on("click", function() {
                openLayer("qiandao-history-layer", myFun);

                function myFun() {
                    console.log(1)
                } //打开弹窗返回函数
            })

        })
    </script>




@endsection