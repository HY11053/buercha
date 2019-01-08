<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Cache-Control" content="no-transform" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="csrf-token" content=" {{ csrf_token() }}">
    <title>@yield('title')</title>
    <meta name="keywords" content="@yield('keywords')"/>
    <meta name="description" content="@yield('description')"/>
    <link href="/frontend/css/css.css" rel="stylesheet" type="text/css" />
    <link href="/frontend/css/index-news.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/frontend/js/jquery.js"></script>
    <script type="text/javascript" src="/frontend/js/index.js"></script>
    @yield('headlibs')
</head>
<body>
<div class="header">
    <div class="box1">
        <div class="header_l png">
            <div class="logo"><a href="http://www.ysg.cn/"><img src="/frontend/images/logo.jpg"  alt="一扫光零食量贩"/></a></div>
            <div class="h_sc"><a href="javascript:void(0)" onclick="javascript:AddFavorite(window.location, document.title)">收藏一扫光</a></div>
        </div>
        <div class="h_wz"><img src="/frontend/images/h_wz.png" class="png" width="133" height="58" /></div>
        <div class="h_dianhua">7x24H免费热线：4006181717</div>
        <div class="tonghua"><a href="javascript:void(0)" onclick="online()">免费通话</a></div>
    </div>
</div>
<div class="menu">
    <div class="box1">
        <ul>
            <li><a href="/">首页</a></li>
            <li class=""><a href="/guanyuwomen/">关于我们</a>
                <div class="menu_xl xl1">
                    <div class="box1">
                        <ul>

                            <li><a href="/guanyuwomen/gstd/">公司团队</a></li>

                            <li><a href="/guanyuwomen/qywh/">企业文化</a></li>

                            <li><a href="/guanyuwomen/ccwl/">仓储物流</a></li>

                            <li><a href="/news/">新闻中心</a></li>

                            <li><a href="/shengming/">版权声明</a></li>

                            <li><a href="/guanyuwomen/gsjj/">公司简介</a></li>

                        </ul>
                    </div>
                </div>
            </li><li class=""><a href="/zhinan/">加盟指南</a>
                <div class="menu_xl xl2">
                    <div class="box1">
                        <ul>

                            <li><a href="/zhinan/xyys/">行业优势</a></li>

                            <li><a href="/zhinan/qspp/">强势品牌</a></li>

                            <li><a href="/zhinan/yxys/">营销优势</a></li>

                            <li><a href="/zhinan/zbzc/">总部支持</a></li>

                            <li><a href="/tiaojian/">加盟条件</a></li>

                            <li><a href="/yiwen/">加盟疑问</a></li>

                        </ul>
                    </div>
                </div>
            </li><li class=""><a href="/fangan/">加盟要求</a>
                <div class="menu_xl xl3">
                    <div class="box1">
                        <ul>

                        </ul>
                    </div>
                </div>
            </li><li class=""><a href="/touzi/">投资开店</a>
                <div class="menu_xl xl4">
                    <div class="box1">
                        <ul>

                            <li><a href="/lirun/">利润分析</a></li>

                            <li><a href="/chengben/">成本费用</a></li>

                            <li><a href="/wenda/">开店问答</a></li>

                        </ul>
                    </div>
                </div>
            </li><li class=""><a href="/anli/">成功案例</a>
                <div class="menu_xl xl5">
                    <div class="box1">
                        <ul>

                            <li><a href="/fengcai/">加盟商风采</a></li>

                            <li><a href="/ganyan/">加盟商感言</a></li>

                        </ul>
                    </div>
                </div>
            </li><li class=""><a href="/products/">产品展示</a>
                <div class="menu_xl xl6">
                    <div class="box1">
                        <ul>

                            <li><a href="/products/fenlei/">产品分类</a></li>

                            <li><a href="/xinpin/">新品上线</a></li>

                        </ul>
                    </div>
                </div>
            </li><li class=""><a href="/qiyenews/">企业新闻</a>
                <div class="menu_xl xl7">
                    <div class="box1">
                        <ul>

                        </ul>
                    </div>
                </div>
            </li><li class=""><a href="/lianxi/">联系方式</a>
                <div class="menu_xl xl8">
                    <div class="box1">
                        <ul>

                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
@yield('main_content')
<div class="footer_nav">
    <div class="box"> <a href="/" title="一扫光休闲食品加盟">网站首页</a> <a href="/guanyuwomen/"  title="关于我们">关于我们</a> <a href="/products/"  title="产品展示">产品展示</a> <a href="/lianxi/"  title="联系方式">联系方式</a> <a href="/map/"  title="网站地图">网站地图</a> </div>
</div>
<div class="footer">
    <div class="box">
        <div class="clearfix">
            <div class="footer_logo"><img src="/frontend/images/footer_logo.png" class="png" /></div>
            <div class="footer_dh"> <span><img src="/frontend/images/footer_dh.png" width="229" height="49" class="png" /></span> </div>
            <div class="footer_wx"> <img src="/frontend/images/footer_wx.png" width="101" height="101" class="png" />
                <p>手机轻松扫一扫<br />
                    关注一扫光二维码<br />
                    惊喜乐不停</p>
            </div>
        </div>
        <div class="footer_wz">
            <p>上海卡哇伊实业有限公司 版权所有 2006-2019 <a href="http://www.miitbeian.gov.cn" style="color:#B25900" rel="nofollow">沪ICP备15007550号</a> </p>
            <p>友情提示:投资有风险，选择需谨慎！</p>
            <p><a href="http://www.miitbeian.gov.cn" style="color:#B25900" rel="nofollow">沪ICP备15007550号</a> <a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=31011302003912" style="display:inline-block;text-decoration:none;height:20px;line-height:20px;"><img src="http://www.ucc.cn/images/batb.png" style="float:left;">沪公网安备31011302003912号</a></p>
            <p>电话： 021-57727777 传真：021-61805576 邮政编码:200444</p>
            <p>地址:中国上海市沪太路2899弄42号43号</p>
        </div>
    </div>
</div>
@yield('footerlibs')
</body>
</html>
