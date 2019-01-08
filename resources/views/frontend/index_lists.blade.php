@extends('frontend.frontend')
@section('title'){{$thistypeinfo->title}}-{{config('app.indexname')}}@stop
@section('keywords'){{$thistypeinfo->keywords}} @stop
@section('description'){{trim($thistypeinfo->description)}}@stop
@section('headlibs')
    <meta name="Copyright" content="{{config('app.indexname')}}-{{config('app.url')}}"/>
    <meta name="author" content="{{config('app.indexname')}}" />
    <meta http-equiv="mobile-agent" content="format=wml; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <meta http-equiv="mobile-agent" content="format=xhtml; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <meta http-equiv="mobile-agent" content="format=html5; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <link rel="alternate" media="only screen and(max-width: 640px)" href="{{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" >
    <link rel="canonical" href="{{config('app.url')}}{{Request::getrequesturi()}}"/>
@stop
@section('main_content')
    <div class="box2">
        <div class="clearfix pd">
            <div class="w320">
                <div class="nav">
                    <h2>品牌介绍</h2>
                    <ul>
                        <li><a href="/guanyuwomen/">关于我们</a></li>
                        <li class="dq"><a href="/qiyewenhua/">企业文化</a></li>
                        <li><a href="/fazhanzhanlue/">发展战略</a></li>
                        <li><a href="/guanyuwomen/">关于我们</a></li>
                        <li class="dq"><a href="/qiyewenhua/">企业文化</a></li>
                        <li><a href="/fazhanzhanlue/">发展战略</a></li>
                    </ul>
                </div>

                <div class="ullb2 bk">
                    <h2 class="bt6"><span>推荐阅读</span></h2>
                    <ul>
                        <li><a href="/hangyezixun/56.html">一扫光教你识破休闲食品加盟的众多骗局</a></li>
                        <li><a href="/chengben/655.html">开一家零食加盟店要投资多少钱</a></li>
                        <li><a href="/qiyenews/2843.html">一扫光品牌第三代形象升级 开启您全新的财富之旅</a></li>
                        <li><a href="/hangyezixun/1683.html">开零食店自己做好还是加盟好</a></li>
                        <li><a href="/pinpaixingxiang/1165.html">热烈庆祝一扫光内蒙古呼和浩特贝尔店加盟成功</a></li>
                        <li><a href="/pinpaixingxiang/1051.html">一扫光江苏宿迁耿车店盛大开业</a></li>
                        <li><a href="/hangyezixun/3017.html">怎么看待一扫光零食怎么样这一问题</a></li>
                        <li><a href="/pinpaixingxiang/1166.html">热烈庆祝一扫光常州北仑店加盟成功</a></li>
                        <li><a href="/pinpaixingxiang/1166.html">热烈庆祝一扫光常州北仑店加盟成功</a></li>
                        <li><a href="/pinpaixingxiang/1166.html">热烈庆祝一扫光常州北仑店加盟成功</a></li>
                    </ul>
                </div>
                <div class="ullb3 bk">
                    <h2 class="bt6"><span>不二产品</span></h2>
                    <ul class="clearfix" style="margin-top: 10px;">
                        <li><span><a href="/plus/view.php?aid=9963"><img src="/frontend/images/1-1P32Q63Q2135-lp.jpg" width="126" height="96"></a></span>
                            <strong><a href="/plus/view.php?aid=9963">戴永红炒货休闲食品加盟需要多少钱?总投资至少需要8万元</a></strong></li>
                        <li><span><a href="/ppxw/9947.html"><img src="/frontend/images/1-1P3191F04D36-lp.jpg" width="126" height="96"></a></span>
                            <strong><a href="/ppxw/9947.html">华味多休闲食品生意需要投资多少?总投资费用13.9万元</a></strong></li>
                        <li><span><a href="/ppxw/9937.html"><img src="/frontend/images/1-1P313130U1529-lp.jpg" width="126" height="96"></a></span>
                            <strong><a href="/ppxw/9937.html">公主驾到零食加盟费是多少?只需30000元</a></strong></li>
                        <li><span><a href="/ppxw/9789.html"><img src="/frontend/images/1-1FFGI414911-lp.jpg" width="126" height="96"></a></span>
                            <strong><a href="/ppxw/9789.html">加盟非常食客零食有优势吗？加盟优势介绍</a></strong></li>
                        <li><span><a href="/feiyong/9805.html"><img src="/frontend/images/1-1FFGJ929610-lp.jpg" width="126" height="96"></a></span>
                            <strong><a href="/feiyong/9805.html">一扫光休闲食品加盟有哪些好处？好处介绍</a></strong></li>
                        <li><span><a href="/ppxw/9918.html"><img src="/frontend/images/1-1FGGQ451518-lp.jpg" width="126" height="96"></a></span>
                            <strong><a href="/ppxw/9918.html">选择百草味零食店加盟怎么样？豪宅照样买！</a></strong></li>

                    </ul>
                </div>
                  <div class="ullb2 bk">
                    <h2 class="bt6"><span>推荐阅读</span></h2>
                    <ul>
                        <li><a href="/hangyezixun/56.html">一扫光教你识破休闲食品加盟的众多骗局</a></li>
                        <li><a href="/chengben/655.html">开一家零食加盟店要投资多少钱</a></li>
                        <li><a href="/chengben/655.html">开一家零食加盟店要投资多少钱</a></li>
                        <li><a href="/chengben/655.html">开一家零食加盟店要投资多少钱</a></li>
                        <li><a href="/qiyenews/2843.html">一扫光品牌第三代形象升级 开启您全新的财富之旅</a></li>
                        <li><a href="/hangyezixun/1683.html">开零食店自己做好还是加盟好</a></li>
                        <li><a href="/pinpaixingxiang/1165.html">热烈庆祝一扫光内蒙古呼和浩特贝尔店加盟成功</a></li>
                        <li><a href="/pinpaixingxiang/1051.html">一扫光江苏宿迁耿车店盛大开业</a></li>
                        <li><a href="/hangyezixun/3017.html">怎么看待一扫光零食怎么样这一问题</a></li>
                        <li><a href="/pinpaixingxiang/1166.html">热烈庆祝一扫光常州北仑店加盟成功</a></li>
                    </ul>
                </div>


            </div>
            <div class="w870">
                <div class="bt7"><h1>企业文化</h1><div class="weizhi">当前位置：<a href="http://www.ysgfood.com/">主页</a> &gt; <a href="/about/">品牌介绍</a> &gt; <a href="/qiyewenhua/">企业文化</a> &gt; </div></div>
                <div class="bg_2">
                    <div class="title1"><strong>集团介绍</strong></div>
                    <div class="introduction">
                        <p>卡露丝干洗隶属于上海微雨网络科技有限公司公司负责国内机器的生产、销售、卡露丝品牌加盟等一系列业务和服务，洗涤技术、洗涤设备在世界处于领先水平。同时属于中国洗涤行业协会成员单位，被上海洗涤行业单位评为“消费者信得过的连锁品牌”，洗涤设备经国家轻工业（服装、洗涤）机械质量监督检测中心鉴定。</p><p>&nbsp;</p><p>公司拥有大型的生产基地和生产厂房，获得美国卡露丝干洗连锁总部设备研究中心专家指导和产品开发，凭借国际设备研发人员丰富的经验、领先的技术，专业开发生产全自动环保石油干洗机、全封闭全自动四氯乙烯干洗机、全自动洗脱烘一体机、全自动变频水洗机、烘干机、熨烫机、洗脱机、烫平机、消毒柜、包装机、输送线等212个品种，全力打造和服务我国干洗水洗行业的发展，为干洗店、洗衣房提供最合适的设备和最先进的技术。</p><p>&nbsp;</p><p>公司承担美国卡露丝干洗连锁在中国区的加盟事业拓展和经营管理，为现有的8000多家卡露丝连锁店提供全方位的服务，以强大的品牌、独特的连锁服务为更多的人提供创业机会、创造价值、带来财富！</p><p>&nbsp;</p><p>如今的卡露丝“COLORS”干洗品牌已拥有一批高级洗涤技术师队伍，奋发向上的市场运营团队，通过对不同服务面料的深入研究，对洗涤原料进行科学创新，全面提高服务的洗涤技术。我们对洗衣店采用科学的经营管理，独特的洗衣店形象设计，有效的提高了洗衣店的营业收入，使得卡露丝品牌在短短几年时间内在“深度、广度、速度”上遍布全国。我们仍将努力，面对新的挑战，卡露丝人将以“积极、努力、谦虚”的态度树立我们的品牌形象，以“做服务、做质量、做信誉”为宗旨，秉承“因为我们专业，所以我们卓越”来立足上海，辐射全国特许经营加盟连锁，全力服务于社会。</p><p><img alt="" src="/frontend/images/1-150PQ14913Z2.jpg"></p><p><br></p>
                        <p>卡露丝干洗隶属于上海微雨网络科技有限公司公司负责国内机器的生产、销售、卡露丝品牌加盟等一系列业务和服务，洗涤技术、洗涤设备在世界处于领先水平。同时属于中国洗涤行业协会成员单位，被上海洗涤行业单位评为“消费者信得过的连锁品牌”，洗涤设备经国家轻工业（服装、洗涤）机械质量监督检测中心鉴定。</p><p>&nbsp;</p><p>公司拥有大型的生产基地和生产厂房，获得美国卡露丝干洗连锁总部设备研究中心专家指导和产品开发，凭借国际设备研发人员丰富的经验、领先的技术，专业开发生产全自动环保石油干洗机、全封闭全自动四氯乙烯干洗机、全自动洗脱烘一体机、全自动变频水洗机、烘干机、熨烫机、洗脱机、烫平机、消毒柜、包装机、输送线等212个品种，全力打造和服务我国干洗水洗行业的发展，为干洗店、洗衣房提供最合适的设备和最先进的技术。</p><p>&nbsp;</p><p>公司承担美国卡露丝干洗连锁在中国区的加盟事业拓展和经营管理，为现有的8000多家卡露丝连锁店提供全方位的服务，以强大的品牌、独特的连锁服务为更多的人提供创业机会、创造价值、带来财富！</p><p>&nbsp;</p><p>如今的卡露丝“COLORS”干洗品牌已拥有一批高级洗涤技术师队伍，奋发向上的市场运营团队，通过对不同服务面料的深入研究，对洗涤原料进行科学创新，全面提高服务的洗涤技术。我们对洗衣店采用科学的经营管理，独特的洗衣店形象设计，有效的提高了洗衣店的营业收入，使得卡露丝品牌在短短几年时间内在“深度、广度、速度”上遍布全国。我们仍将努力，面对新的挑战，卡露丝人将以“积极、努力、谦虚”的态度树立我们的品牌形象，以“做服务、做质量、做信誉”为宗旨，秉承“因为我们专业，所以我们卓越”来立足上海，辐射全国特许经营加盟连锁，全力服务于社会。</p><p><img alt="" src="/frontend/images/1-150PQ14913Z2.jpg"></p><p><br></p>
                        <p>卡露丝干洗隶属于上海微雨网络科技有限公司公司负责国内机器的生产、销售、卡露丝品牌加盟等一系列业务和服务，洗涤技术、洗涤设备在世界处于领先水平。同时属于中国洗涤行业协会成员单位，被上海洗涤行业单位评为“消费者信得过的连锁品牌”，洗涤设备经国家轻工业（服装、洗涤）机械质量监督检测中心鉴定。</p><p>&nbsp;</p><p>公司拥有大型的生产基地和生产厂房，获得美国卡露丝干洗连锁总部设备研究中心专家指导和产品开发，凭借国际设备研发人员丰富的经验、领先的技术，专业开发生产全自动环保石油干洗机、全封闭全自动四氯乙烯干洗机、全自动洗脱烘一体机、全自动变频水洗机、烘干机、熨烫机、洗脱机、烫平机、消毒柜、包装机、输送线等212个品种，全力打造和服务我国干洗水洗行业的发展，为干洗店、洗衣房提供最合适的设备和最先进的技术。</p><p>&nbsp;</p><p>公司承担美国卡露丝干洗连锁在中国区的加盟事业拓展和经营管理，为现有的8000多家卡露丝连锁店提供全方位的服务，以强大的品牌、独特的连锁服务为更多的人提供创业机会、创造价值、带来财富！</p><p>&nbsp;</p><p>如今的卡露丝“COLORS”干洗品牌已拥有一批高级洗涤技术师队伍，奋发向上的市场运营团队，通过对不同服务面料的深入研究，对洗涤原料进行科学创新，全面提高服务的洗涤技术。我们对洗衣店采用科学的经营管理，独特的洗衣店形象设计，有效的提高了洗衣店的营业收入，使得卡露丝品牌在短短几年时间内在“深度、广度、速度”上遍布全国。我们仍将努力，面对新的挑战，卡露丝人将以“积极、努力、谦虚”的态度树立我们的品牌形象，以“做服务、做质量、做信誉”为宗旨，秉承“因为我们专业，所以我们卓越”来立足上海，辐射全国特许经营加盟连锁，全力服务于社会。</p><p><img alt="" src="/frontend/images/1-150PQ14913Z2.jpg"></p><p><br></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
