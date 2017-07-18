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
                您已连续签到<span>{}</span>天
            </div>
        </div>
        <div class="qiandao-layer-bg"></div>
    </div>

    <script>
        $('#js-just-qiandao').click(function(){
            if($(this).hasClass('actived')){
            }else{
                $.ajax({
                    type:'post',
                    url:"{{action('admin\signController@add_sign')}}",
                    dataType:'json',
                    data:{
                        _token:"{{ csrf_token() }}",
                        id:"{{session('id')}}",
                    },
                    success:function (data){

                    },
                    error:function(data){

                    },
                })

            }
        })
    </script>




@endsection