@extends('frontend.frontend')
@section('title'){{config('app.webname')}}@stop
@section('keywords'){{config('app.keywords')}}@stop
@section('description'){{config('app.description')}}@stop
@section('headlibs')
    <meta http-equiv="mobile-agent" content="format=wml; url={{str_replace('http://www.','http://m.',config('app.url'))}}" />
    <meta http-equiv="mobile-agent" content="format=xhtml; url={{str_replace('http://www.','http://m.',config('app.url'))}}" />
    <meta http-equiv="mobile-agent" content="format=html5; url={{str_replace('http://www.','http://m.',config('app.url'))}}" />
    <link rel="alternate" media="only screen and(max-width: 640px)" href="{{str_replace('http://www.','http://m.',config('app.url'))}}" >
    <link rel="canonical" href="{{config('app.url')}}{{str_replace('','',Request::getrequesturi())}}"/>
@stop
@section('main_content')
    <div style="z-index:-9; height:auto; overflow:hidden;">
        <div class="flexslider">
            <ul class="slides">
                <li><a href="javascript:void(0)" onclick="online()" target="_blank">
                        <div style="background:url(/frontend/images/3_01.jpg) no-repeat center top; height:116px;">
                            <div class="box"></div>
                        </div>
                        <div style="background:url(/frontend/images/3_02.jpg) no-repeat center top; height:116px;">
                            <div class="box"></div>
                        </div>
                        <div style="background:url(/frontend/images/3_03.jpg) no-repeat center top; height:116px;">
                            <div class="box"></div>
                        </div>
                        <div style="background:url(/frontend/images/3_04.jpg) no-repeat center top; height:116px;">
                            <div class="box"></div>
                        </div>
                        <div style="background:url(/frontend/images/3_05.jpg) no-repeat center top; height:116px;">
                            <div class="box"></div>
                        </div>
                    </a>
                </li>
                <li><a href="javascript:void(0)" onclick="online()" target="_blank">
                        <div style="background:url(/frontend/images/5_01.gif) no-repeat center top; height:116px;">
                            <div class="box"></div>
                        </div>
                        <div style="background:url(/frontend/images/5_02.gif) no-repeat center top; height:116px;">
                            <div class="box"></div>
                        </div>
                        <div style="background:url(/frontend/images/5_03.gif) no-repeat center top; height:116px;">
                            <div class="box"></div>
                        </div>
                        <div style="background:url(/frontend/images/5_04.gif) no-repeat center top; height:116px;">
                            <div class="box"></div>
                        </div>
                        <div style="background:url(/frontend/images/5_05.gif) no-repeat center top; height:116px;">
                            <div class="box"></div>
                        </div>
                    </a> </li>
            </ul>
        </div>
    </div>
    <script src="/frontend/js/jquery.flexslider-min.js"></script>
    <script>
        $(function(){
            $('.flexslider').flexslider({
                directionNav: true,
                pauseOnAction: false
            });
        });
    </script>
    <!-- 幻灯片 End -->
    <div class="box4 quick_nav m25">
        <ul>
            <li>
                <div class="img_show"><a href="/ganyan/" target="_blank"><img src="/frontend/images/ic5.jpg" alt="加盟案例"></a></div>
                <div class="tit"><a href="/ganyan/" target="_blank"><i class="icon5"></i>不二故事</a></div>
            </li>
            <li>
                <div class="img_show"><a href="/ganyan/" target="_blank"><img src="/frontend/images/ic6.jpg" alt="加盟案例"></a></div>
                <div class="tit"><a href="/ganyan/" target="_blank"><i class="icon5"></i>不二之选</a></div>
            </li>
            <li>
                <div class="img_show"><a href="/guanyuwomen/gstd/" target="_blank"><img src="/frontend/images/ic1.jpg" alt="公司团队"></a></div>
                <div class="tit"><a href="/guanyuwomen/gstd/" target="_blank"><i class="icon1"></i>品牌优势</a></div>
            </li>
            <li>
                <div class="img_show"><a href="/zhinan/qspp/" target="_blank"><img src="/frontend/images/ic2.jpg" alt="强势品牌"></a></div>
                <div class="tit"><a href="/zhinan/qspp/" target="_blank"><i class="icon2"></i>加盟支持</a></div>
            </li>
            <li>
                <div class="img_show"><a href="/guanyuwomen/ccwl/" target="_blank"><img src="/frontend/images/ic3.jpg" alt="仓储物流"></a></div>
                <div class="tit"><a href="/guanyuwomen/ccwl/" target="_blank"><i class="icon3"></i>加盟条件</a></div>
            </li>
            <li>
                <div class="img_show"><a href="/zhinan/" target="_blank"><img src="/frontend/images/ic4.jpg" alt="加盟指南"></a></div>
                <div class="tit"><a href="/zhinan/" target="_blank"><i class="icon4"></i>加盟指南</a></div>
            </li>
        </ul>
    </div>
    <div class="box clearfix m25">
        <!--媒体报道-->
        <div class="in_news1 left">
            <h2 class="title"><strong><a href="/baodao/" target="_blank">媒体报道</a></strong><a href="/baodao/" class="more" target="_blank">更多+</a></h2>
            <div class="shipin">
               <video id="video" src="http://www.becpls.com/20170602.mp4" controls width="285" height="190"></video>
            </div>
            <p class="in_news1-bt">一扫光休闲食品加盟携手央视亮相《中国合伙人》</p>
        </div>

        <!--最新活动-->
        <div class="in_news1 in_news left">
            <h2 class="title"><strong><a href="/qiyenews/" target="_blank">不二资讯</a></strong><a href="/qiyenews/" class="more" target="_blank">更多+</a></h2>
            <dl>
                <dt><a href="/qiyenews/3116.html"><img src="/uploads/allimg/190104/1-1Z10415063I52-lp.jpg" alt="零经验，怎么选好零食店加盟品牌？【一扫光零食家】国内资深品牌" title="零经验，怎么选好零食店加盟品牌？【一扫光零食家】国内资深品牌" width="70px" height="70px"></a></dt>
                <dd> <strong><a href="/qiyenews/3116.html" title="零经验，怎么选好零食店加盟品牌？【一扫光零食家】国内资深品牌" target="_blank">零经验，怎么选好零食店加盟品牌？【一扫光零食家】国内资深品牌</a></strong>
                    <p>零经验，怎么选好 零食店加盟 品牌？对于想要开家零食加盟店的投资者来说，如果你对零食加盟乏...<a href="/qiyenews/3116.html" title="零经验，怎么选好零食店加盟品牌？【一扫光零食家】国内资深品牌" target="_blank">详情»</a></p>
                </dd>

            </dl>
            <ul>
                <li><em>2019-01-02</em><a href="/qiyenews/3112.html" title="一扫光零食店加盟，教您如何提高门店收益" target="_blank">一扫光零食店加盟，教您如何提高门店收益</a></li>
                <li><em>2018-12-28</em><a href="/qiyenews/3108.html" title="开零食加盟店，【一扫光零食家】与您分享正确的经营攻略" target="_blank">开零食加盟店，【一扫光零食家】与您分享正确的经营攻略</a></li>
                <li><em>2018-12-26</em><a href="/qiyenews/3104.html" title="未来的零食店加盟市场还有投资空间吗？一扫光零食家为您来解答" target="_blank">未来的零食店加盟市场还有投资空间吗？一扫光零食家为您来解答</a></li>
                <li><em>2018-12-24</em><a href="/qiyenews/3101.html" title="零食店加盟怎么才能经营好？【一扫光零食家】助你成功开店" target="_blank">零食店加盟怎么才能经营好？【一扫光零食家】助你成功开店</a></li>
                <li><em>2018-12-20</em><a href="/qiyenews/3096.html" title="零食店加盟，【一扫光零食家】创业好商机" target="_blank">零食店加盟，【一扫光零食家】创业好商机</a></li>

            </ul>
        </div>

        <!--一扫光企业形象宣传片2-->
        <div class="main_news fl">
            <h2 class="title"><strong><a href="/qiyenews/" target="_blank">加盟指南</a></strong><a href="/qiyenews/" class="more" target="_blank">更多+</a></h2>
            <div class="synos">
                <a href="/news/546.html" target="_blank" class="fl"><img src="/frontend/images/ae13ff02982d5125f01a54ec259e591f.jpg" alt=""></a>
                <h3><a href="/news/546.html" target="_blank">干洗店加盟成本：卡露丝准入门槛低引关注</a></h3>
                <p>卡露丝干洗店加盟价格合理利润有保障，你还在想着创业吗?你还在为了你的过去没好项目而担心未来如何走吗?现代年轻人不是之前的年轻人，很多人希望能够自主创业，选择一个好的...<a href="/news/546.html" target="_blank">[详细]</a></p>
                <div class="both"></div>
            </div>
            <ul class="news_list">
                <li class="clo"><a href="/news/560.html" target="_blank">卡露丝干洗店加盟助力创业者2018年一起创造财富</a></li>
                <li class="clo"><a href="/news/556.html" target="_blank">卡露丝干洗店加盟经营哲学：如何控制好干洗店成本</a></li>
                <li class="clo"><a href="/news/555.html" target="_blank">干洗店加盟连锁：卡露丝干洗机品牌为您分析洗衣行业投资前景</a></li>
                <li class="clo"><a href="/news/547.html" target="_blank">怎样开干洗店加盟品牌连锁？卡露丝干洗店设备夺人眼球</a></li>
                <li class="clo"><a href="/news/546.html" target="_blank">干洗店加盟成本：卡露丝准入门槛低引关注</a></li>
                <li class="clo"><a href="/news/525.html" target="_blank">干洗店加盟连锁怎么做才赚钱</a></li>
            </ul>
            <div class="both"></div>
        </div>
    </div>

    <!--加盟费-->
    <div class="box4 m25">
        <div class="common_hd">
            <div class="tit"><img src="/frontend/images/jmf.png" alt="加盟费"></div>
            <!--<div class="info">超强实力认证  引领行业高度</div>-->
            <div class="more"><a href="javascript:void(0)" onclick="online()"><img src="/frontend/images/index_ask_btn.gif" alt="立即在线咨询"></a></div>
        </div>
        <div class="programme">
            <dl>
                <dt><a href="/fangan/"><img src="/frontend/images/fanan3.jpg" alt="店面效果图"></a></dt>
                <dd> <strong><a href="/fangan/">不二的茶统一门店形象</a></strong><span>旅游风STYLE  国际大师打造</span> <span><i>加盟资金：</i><em>52800元起</em> (北上广深除外)</span> <span>投资优势：客源大、回报高</span> <span><i>投资热度：</i>
				<div class="xing4 png">★★★★★</div>
				</span> <a href="javascript:void(0)" onclick="online()" class="btn1 png" target="_blank">在线咨询</a> <a href="javascript:void(0)" onclick="online()" class="btn2 png" target="_blank">申请加盟</a> </dd>
            </dl>
        </div>
        <div class="programme_img"><a href="/fangan/"><img src="/frontend/images/fanan4.jpg" alt="店面效果图"></a></div>
    </div>

    <!--公司实力-->

    <div class="box4 m25"> <a href="/guanyuwomen/gsjj/">
            <div class="common_hd">
                <div class="tit"><img src="/frontend/images/gssl.png" alt="不二产品"></div>
                <div class="info">不二之选 8大茶饮系列</div>
                <div class="more"><a href="javascript:void(0)" onclick="online()"><img src="/frontend/images/index_ask_btn.gif" alt="立即在线咨询"></a></div>
            </div>
        </a>
        <div class="index_jm" >
            <div class="index_jm_tab">
                <ul>
                    <li class="on"><a href="#" target="_blank">欧包系列</a></li>
                    <li><a href="#" target="_blank">大师手冲茶</a></li>
                    <li><a href="#" target="_blank">二度冰滴</a></li>
                    <li><a href="#" target="_blank">不二拿铁</a></li>
                    <li><a href="#" target="_blank">茶香思慕雪</a></li>
                </ul>
            </div>
            <div class="index_jm_cont">
                <div class="index_jm_list">
                    <ul>
                        <li><img src="/frontend/images/gssl1.jpg" alt=""></li>
                        <li><img src="/frontend/images/gssl2.jpg" alt=""></li>
                        <li><img src="/frontend/images/gssl3.jpg" alt=""></li>
                        <li><img src="/frontend/images/gssl3.jpg" alt=""></li>
                        <li><img src="/frontend/images/gssl3.jpg" alt=""></li>
                    </ul>
                </div>
                <div class="index_jm_list">
                    <ul>
                        <li><img src="/frontend/images/rcqg1.jpg" alt="1"></li>
                        <li><img src="/frontend/images/rcqg2.jpg" alt=""></li>
                        <li><img src="/frontend/images/rcqg3.jpg" alt=""></li>
                    </ul>
                </div>
                <div class="index_jm_list">
                    <ul>
                        <li><img src="/frontend/images/ccjd1.jpg" alt="2"></li>
                        <li><img src="/frontend/images/ccjd2.jpg" alt=""></li>
                        <li><img src="/frontend/images/ccjd3.jpg" alt=""></li>
                    </ul>
                </div>
                <div class="index_jm_list">
                    <ul>
                        <li><img src="/frontend/images/yjss1.jpg" alt="3"></li>
                        <li><img src="/frontend/images/yjss2.jpg" alt=""></li>
                        <li><img src="/frontend/images/yjss3.jpg" alt=""></li>
                    </ul>
                </div>
                <div class="index_jm_list">
                    <ul>
                        <li><img src="/frontend/images/yjss1.jpg" alt="3"></li>
                        <li><img src="/frontend/images/yjss2.jpg" alt=""></li>
                        <li><img src="/frontend/images/yjss3.jpg" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>
        <script>
            //首页排行榜
            $('.index_jm_cont .index_jm_list').eq(0).show().siblings().hide();
            $('.index_jm_tab').each(function(){
                $('.index_jm_tab > ul >li').hover(function(){
                    $(this).addClass('on').siblings().removeClass('on');
                    $('.index_jm_cont .index_jm_list').eq($(this).index()).show().siblings().hide();
                }).eq(0).hover();
            });
        </script>
    </div>

    <!--公司文化-->
    <div class="box4 m25"> <a href="/guanyuwomen/qywh/">
            <div class="common_hd">
                <div class="tit"><img src="/frontend/images/gswh.png" alt="公司文化"></div>
                <div class="info">星级大厨倾情加盟 只为做更专业的茶饮</div>
                <div class="more"><a href="javascript:void(0)" onclick="online()"><img src="/frontend/images/index_ask_btn.gif" alt="立即在线咨询"></a></div>
            </div>
        </a>
        <div class="gswh">
            <ul>
                <li><img src="/frontend/images/wh1.jpg" alt="助力公益，时刻践行企业对社会的责任"></li>
                <li><img src="/frontend/images/wh2.jpg" alt="助力公益，时刻践行企业对社会的责任"></li>
                <li><img src="/frontend/images/wh3.jpg" alt="助力公益，时刻践行企业对社会的责任"></li>
                <li><img src="/frontend/images/wh4.jpg" alt="助力公益，时刻践行企业对社会的责任"></li>
                <li><img src="/frontend/images/wh5.jpg" alt="注重员工的精神建设，增强团队凝聚力"></li>
                <li><img src="/frontend/images/wh6.jpg" alt="注重员工的精神建设，增强团队凝聚力"></li>
                <li><img src="/frontend/images/wh7.jpg" alt="注重员工的精神建设，增强团队凝聚力"></li>
                <li><img src="/frontend/images/wh8.jpg" alt="注重员工的精神建设，增强团队凝聚力"></li>
                <li><img src="/frontend/images/wh8.jpg" alt="注重员工的精神建设，增强团队凝聚力"></li>
                <li><img src="/frontend/images/wh8.jpg" alt="注重员工的精神建设，增强团队凝聚力"></li>
            </ul>
        </div>
    </div>

    <div class="con5 center box-shadow">
        <div class="con5-left">
            <a href="/zhinan/qspp/">
                <div class="common_hd">
                    <div class="tit"><img src="/frontend/images/qspp.png" alt="强势品牌"></div>
                    <div class="info">9大加盟支持 诚信求实 以客户为重</div>
                </div>
            </a>

            <div class="con5-left-tu">
                <div class="con5-left-tu1">
                    <div>
                        <a href="">百福莱干洗店</a>
                    </div>
                </div>
                <div class="con5-left-tu2">
                    <div>
                        <a href="/item/1323.shtml">赛维干洗店</a>
                    </div>
                </div>
                <div class="con5-left-tu3">
                    <div>
                        <a href="#" rel="nofollow">邦纳福干洗店</a>
                    </div>
                </div>
                <div class="con5-left-tu4">
                    <div>
                        <a href="/item/1346.shtml">洁丰干洗店</a>
                    </div>
                </div>
                <div class="con5-left-tu5">
                    <div>
                        <a href="/item/1.shtml">UCC国际洗衣</a>
                    </div>
                </div>
            </div>
            <div class="con5-left-zi">

                <ul>
                    <li class="first_line"><a href="/zhuangxiu/140588.shtml" style="font-size: 14px;">干洗店门面房装修有哪些问题</a></li>
                    <li class="first_line"><a href="/zhuangxiu/140623.shtml" style="font-size: 14px;">装修能影响店面人气吗</a></li>
                    <li class="first_line"><a href="/zhuangxiu/140767.shtml" style="font-size: 14px;">关于干洗店装修问题的汇总</a></li>
                    <li class="first_line"><a href="/zhuangxiu/140709.shtml" style="font-size: 14px;">干洗店装修要注意哪些</a></li>
                    <li><a href="/zhuangxiu/140849.shtml" style="font-size: 14px;">一起来聊聊干洗店装修那点事</a></li>
                    <li><a href="/zhuangxiu/140831.shtml" style="font-size: 14px;">投资干洗店:关于干洗店装修的问题</a></li>
                    <li><a href="/zhuangxiu/140821.shtml" style="font-size: 14px;">开家干洗店装修时间多久</a></li>
                    <li><a href="/zhuangxiu/140952.shtml" style="font-size: 14px;">干洗店装修风格有哪些</a></li>
                    <li><a href="/zhuangxiu/140933.shtml" style="font-size: 14px;">开家洗衣店要怎么装修</a></li>
                    <li><a href="/zhuangxiu/141020.shtml" style="font-size: 14px;">开干洗店总部装修免费吗</a></li>
                    <li><a href="/zhuangxiu/141064.shtml" style="font-size: 14px;">干洗店装修风格统一吗</a></li>
                    <li><a href="/zhuangxiu/141046.shtml" style="font-size: 14px;">装修一个干洗店需要多长时间</a></li>
                    <li><a href="/zhuangxiu/141043.shtml" style="font-size: 14px;">开干洗店有哪些装修步骤</a></li>
                    <li><a href="/zhuangxiu/141353.shtml" style="font-size: 14px;">装修干洗店怎么节省资金</a></li>
                    <li><a href="/zhuangxiu/141262.shtml" style="font-size: 14px;">干洗店经营之店面装修设计</a></li>
                    <li><a href="/zhuangxiu/141310.shtml" style="font-size: 14px;">加盟干洗店包括装修吗</a></li>
                    <li><a href="/zhuangxiu/141442.shtml" style="font-size: 14px;">品牌干洗店怎么装修</a></li>
                    <li><a href="/zhuangxiu/141412.shtml" style="font-size: 14px;">干洗店装修需要哪些参考</a></li>
                    <li><a href="/zhuangxiu/141774.shtml" style="font-size: 14px;">UCC总部免费装修吗</a></li>
                    <li><a href="/zhuangxiu/142091.shtml" style="font-size: 14px;">干洗店装修需要多少钱</a></li>
                </ul>

            </div>

        </div>
        <div class="con5-right">
            <h1>经营指南</h1>
            <div></div>
            <img src="http://www.czga.cn/storage/uploads/image/2019/01/04/bf1bc4bce8c4854a7e1c4b4465445de5.jpg">
            <ul>
                <li><a href="/profit/139562.shtml"><span>怎样开家高利润的干洗加盟店</span></a></li>
                <li><a href="/profit/139564.shtml"><span>威特斯加盟干洗店利润好不好</span></a></li>
                <li><a href="/profit/139565.shtml"><span>加盟开干洗店利润高吗</span></a></li>
                <li><a href="/profit/139566.shtml"><span>威特斯加盟洗衣店利润高不高</span></a></li>
                <li><a href="/profit/139568.shtml"><span>洗衣加盟店利润好吗</span></a></li>
                <li><a href="/profit/139569.shtml"><span>加盟开洗衣店的利润怎么样</span></a></li>
                <li><a href="/profit/139570.shtml"><span>威特斯投资洗衣店的利润好不好</span></a></li>
                <li><a href="/profit/139571.shtml"><span>加盟干洗店利润收益怎么样</span></a></li>
            </ul>

        </div>
    </div>
    <!--12大类产品，上千款畅销单品-->
    <div class="box4 m25">
        <div class="cp-title"><strong><a href="/products/" target="_blank">8大品类，60款畅销单品</a></strong><a href="/products/" class="more" target="_blank">产品类别»</a><a href="/products/" class="more" target="_blank">新品上线»</a></div>
        <div class="cp-box"><a href="/products/" title="13+1大类产品，1000多款畅销单品"><img src="/frontend/images/cp-banner.jpg" alt="12大类产品，上千款畅销单品"></a></div>
    </div>
    <div class="box clearfix m25">
        <!--利润分析-->
        <div class="in_news1 in_news left">
            <h2 class="title"><strong><a href="#" target="_blank">利润分析</a></strong><a href="/lirun/" class="more" target="_blank">更多+</a></h2>
            <dl>
                <dt><a href="/lirun/3117.html"><img src="/uploads/allimg/190104/1-1Z10415305Q56-lp.jpg" alt="开家休闲食品加盟店，怎么提高店铺人气？【一扫光零食家】来教您！" title="开家休闲食品加盟店，怎么提高店铺人气？【一扫光零食家】来教您！" width="70px" height="70px"></a></dt>
                <dd> <strong><a href="/lirun/3117.html" title="开家休闲食品加盟店，怎么提高店铺人气？【一扫光零食家】来教您！" target="_blank">开家休闲食品加盟店，怎么提高店铺人气？【一扫光零食家】来教您！</a></strong>
                    <p>休闲食品加盟市场在不断发展和扩大的同时，也激发了更多投资者加入到零食加盟行业。那么，对于开家 休闲食品加...<a href="/lirun/3117.html" title="开家休闲食品加盟店，怎么提高店铺人气？【一扫光零食家】来教您！" target="_blank">详情»</a></p>
                </dd>

            </dl>
            <ul>
                <li><em>2019-01-02</em><a href="/lirun/3113.html" title="开家零食店怎么样？一扫光休闲食品加盟商的经验之谈" target="_blank">开家零食店怎么样？一扫光休闲食品加盟商的经验之谈</a></li>
                <li><em>2018-12-28</em><a href="/lirun/3109.html" title="不了解休闲食品加盟行业？一扫光零食家告诉你，开店前需做哪些准备？" target="_blank">不了解休闲食品加盟行业？一扫光零食家告诉你，开店前需做哪些准备？</a></li>
                <li><em>2018-12-26</em><a href="/lirun/3105.html" title="元旦、春节、情人节…休闲食品加盟店怎么做好节假日的宣传？" target="_blank">元旦、春节、情人节…休闲食品加盟店怎么做好节假日的宣传？</a></li>
                <li><em>2018-12-24</em><a href="/lirun/3100.html" title="一扫光零食家：开家休闲食品加盟店，有风险吗？" target="_blank">一扫光零食家：开家休闲食品加盟店，有风险吗？</a></li>
                <li><em>2018-12-20</em><a href="/lirun/3097.html" title="一扫光休闲食品加盟，下岗了也可以重头再来" target="_blank">一扫光休闲食品加盟，下岗了也可以重头再来</a></li>

            </ul>
        </div>

        <!--成本费用-->
        <div class="in_news1 in_news left">
            <h2 class="title"><strong><a href="#" target="_blank">成本费用</a></strong><a href="/chengben/" class="more" target="_blank">更多+</a></h2>
            <dl>
                <dt><a href="/chengben/3115.html"><img src="/uploads/allimg/190103/1-1Z103164335D8-lp.jpg" alt="一扫光休闲食品加盟，招商加盟火热进行中" title="一扫光休闲食品加盟，招商加盟火热进行中" width="70px" height="70px"></a></dt>
                <dd> <strong><a href="/chengben/3115.html" title="一扫光休闲食品加盟，招商加盟火热进行中" target="_blank">一扫光休闲食品加盟，招商加盟火热进行中</a></strong>
                    <p>【一扫光零食家】国内正规的 休闲食品加盟 10大品牌，总部位于大都市上海。【一扫光零食家】从品牌创立至今，致...<a href="/chengben/3115.html" title="一扫光休闲食品加盟，招商加盟火热进行中" target="_blank">详情»</a></p>
                </dd>

            </dl>
            <ul>
                <li><em>2018-12-29</em><a href="/chengben/3111.html" title="一扫光休闲食品加盟，创业改变命运" target="_blank">一扫光休闲食品加盟，创业改变命运</a></li>
                <li><em>2018-12-27</em><a href="/chengben/3107.html" title="新手开店，休闲食品加盟店选址要注意！一扫光零食家为您择优选址" target="_blank">新手开店，休闲食品加盟店选址要注意！一扫光零食家为您择优选址</a></li>
                <li><em>2018-12-25</em><a href="/chengben/3102.html" title="一扫光休闲食品加盟店的盈利优势有哪些？" target="_blank">一扫光休闲食品加盟店的盈利优势有哪些？</a></li>
                <li><em>2018-12-21</em><a href="/chengben/3099.html" title="一扫光零食店加盟商，身兼数职的他们怎么经营好零食店的？" target="_blank">一扫光零食店加盟商，身兼数职的他们怎么经营好零食店的？</a></li>
                <li><em>2018-12-19</em><a href="/chengben/3095.html" title="开休闲食品加盟店，认准【一扫光零食家】开店成功率高" target="_blank">开休闲食品加盟店，认准【一扫光零食家】开店成功率高</a></li>

            </ul>
        </div>

        <!--开店问答-->
        <!--一扫光企业形象宣传片2-->
        <div class="main_news fl">
            <h2 class="title"><strong><a href="/qiyenews/" target="_blank">加盟指南</a></strong><a href="/qiyenews/" class="more" target="_blank">更多+</a></h2>
            <div class="synos">
                <a href="/news/546.html" target="_blank" class="fl"><img src="/frontend/images/ae13ff02982d5125f01a54ec259e591f.jpg" alt=""></a>
                <h3><a href="/news/546.html" target="_blank">干洗店加盟成本：卡露丝准入门槛低引关注</a></h3>
                <p>卡露丝干洗店加盟价格合理利润有保障，你还在想着创业吗?你还在为了你的过去没好项目而担心未来如何走吗?现代年轻人不是之前的年轻人，很多人希望能够自主创业，选择一个好的...<a href="/news/546.html" target="_blank">[详细]</a></p>
                <div class="both"></div>
            </div>
            <ul class="news_list">
                <li class="clo"><a href="/news/560.html" target="_blank">卡露丝干洗店加盟助力创业者2018年一起创造财富</a></li>
                <li class="clo"><a href="/news/556.html" target="_blank">卡露丝干洗店加盟经营哲学：如何控制好干洗店成本</a></li>
                <li class="clo"><a href="/news/555.html" target="_blank">干洗店加盟连锁：卡露丝干洗机品牌为您分析洗衣行业投资前景</a></li>
                <li class="clo"><a href="/news/547.html" target="_blank">怎样开干洗店加盟品牌连锁？卡露丝干洗店设备夺人眼球</a></li>
                <li class="clo"><a href="/news/546.html" target="_blank">干洗店加盟成本：卡露丝准入门槛低引关注</a></li>
                <li class="clo"><a href="/news/525.html" target="_blank">干洗店加盟连锁怎么做才赚钱</a></li>
            </ul>
            <div class="both"></div>
        </div>
    </div>

    <!--强势品牌-->
    <div class="box4 m25">
        <div class="common_hd">
            <div class="tit"><a href="/zhinan/yxys/"><img src="/frontend/images/jmfw.png" alt="加盟服务"></a></div>
            <div class="info">一站式整店输出新模式，可以复制的成功</div>
            <div class="more"><a href="javascript:void(0)" onclick="online()"><img src="/frontend/images/index_ask_btn.gif" alt="立即在线咨询"></a></div>
        </div>
        <div class="jmfw">
            <dl>
                <dt>一扫光360°全方位帮扶，真正的<em>0经验</em>无忧开店</dt>
                <dd><a href="/zhinan/yxys/" title="加盟服务"><img src="/frontend/images/jmfw1.jpg" alt="加盟服务"></a></dd>
                <dd><a href="/zhinan/yxys/" title="加盟服务"><img src="/frontend/images/jmfw2.jpg" alt="加盟服务"></a></dd>
                <dd><a href="/zhinan/yxys/" title="加盟服务"><img src="/frontend/images/jmfw3.jpg" alt="加盟服务"></a></dd>
                <dd><a href="/zhinan/yxys/" title="加盟服务"><img src="/frontend/images/jmfw3.jpg" alt="加盟服务"></a></dd>
            </dl>
        </div>
        <div class="jmfw-zx"><a href="javascript:void(0)" onclick="online()"><img src="/frontend/images/jmfw.jpg" alt="一扫光财富项目一次投入 多倍利润 咨询加盟详情"></a></div>
    </div>

    <!--强势品牌-->
    <div class="box4 m25">
        <div class="common_hd">
            <div class="tit"><img src="/frontend/images/jmal.png" alt="加盟案列"></div>
            <div class="info">百城千店美食财富一触即发</div>
            <div class="more"><a href="javascript:void(0)" onclick="online()"><img src="/frontend/images/index_ask_btn.gif" alt="立即在线咨询"></a></div>
        </div>
        <div class="jmal">
            <dl>
                <dd>
                    <div class="tabbox dingwei"> <a href="/fengcai/367.html" ><img src="/frontend/images/1-1P619154344528.png" alt="零食加盟店投资一扫光实现财富自由">
                            <div class="tabtext">零食加盟店投资一扫光实现财富自由</div>
                        </a></div>
                </dd>
                <dd>
                    <div class="tabbox dingwei"> <a href="/fengcai/311.html" ><img src="/frontend/images/1-1P619150H0U7.jpg" alt="办公文员开一扫光零食店兼职成主业">
                            <div class="tabtext">办公文员开一扫光零食店兼职成主业</div>
                        </a></div>
                </dd>
                <dd>
                    <div class="tabbox dingwei"> <a href="/fengcai/344.html" ><img src="/frontend/images/1-1P619150353U0.jpg" alt="一扫光零食店加盟铸造财富人生">
                            <div class="tabtext">一扫光零食店加盟铸造财富人生</div>
                        </a></div>
                </dd>
                <dd>
                    <div class="tabbox dingwei"> <a href="/fengcai/385.html" ><img src="/frontend/images/1-1P619150159423.GIF" alt="一扫光休闲食品加盟带来成功和财富">
                            <div class="tabtext">一扫光休闲食品加盟带来成功和财富</div>
                        </a></div>
                </dd>
                <dd>
                    <div class="tabbox dingwei"> <a href="/fengcai/368.html" ><img src="/frontend/images/1-1P619145PS30.jpg" alt="投资一扫光零食加盟店成功就此起航">
                            <div class="tabtext">投资一扫光零食加盟店成功就此起航</div>
                        </a></div>
                </dd>


                <dd>
                    <div class="tabbox dingwei"> <a href="/ganyan/157.html" ><img src="/frontend/images/1-1P6191534031O.jpg" alt="休闲食品品牌如何选择好的？">
                            <div class="tabtext">休闲食品品牌如何选择好的？</div>
                        </a></div>
                </dd>
                <dd>
                    <div class="tabbox dingwei"> <a href="/ganyan/346.html" ><img src="/frontend/images/1-1P619152SI04.png" alt="一扫光零食店加盟月入十万不是梦">
                            <div class="tabtext">一扫光零食店加盟月入十万不是梦</div>
                        </a></div>
                </dd>
                <dd>
                    <div class="tabbox dingwei"> <a href="/ganyan/362.html" ><img src="/frontend/images/1-1P619151642545.GIF" alt="投资零食店加盟当老板活出精彩">
                            <div class="tabtext">投资零食店加盟当老板活出精彩</div>
                        </a></div>
                </dd>
                <dd>
                    <div class="tabbox dingwei"> <a href="/ganyan/156.html" ><img src="/frontend/images/1-1P619151216113.GIF" alt="开休闲食品店如何提高效益？">
                            <div class="tabtext">开休闲食品店如何提高效益？</div>
                        </a></div>
                </dd>
                <dd>
                    <div class="tabbox dingwei"> <a href="/ganyan/361.html" ><img src="/frontend/images/1-1P619151013525.GIF" alt="零食店加盟一扫光改变我的一生">
                            <div class="tabtext">零食店加盟一扫光改变我的一生</div>
                        </a></div>
                </dd>  <dd>
                    <div class="tabbox dingwei"> <a href="/ganyan/361.html" ><img src="/frontend/images/1-1P619151013525.GIF" alt="零食店加盟一扫光改变我的一生">
                            <div class="tabtext">零食店加盟一扫光改变我的一生</div>
                        </a></div>
                </dd>  <dd>
                    <div class="tabbox dingwei"> <a href="/ganyan/361.html" ><img src="/frontend/images/1-1P619151013525.GIF" alt="零食店加盟一扫光改变我的一生">
                            <div class="tabtext">零食店加盟一扫光改变我的一生</div>
                        </a></div>
                </dd>

            </dl>
            <script type="text/javascript">
                $(document).ready(function(){
                    $(".tabtext").hide();
                    $(".tabbox").hover(function(){
                        $(".tabtext",this).slideToggle(500);
                    });
                });
            </script>
        </div>
    </div>
@stop