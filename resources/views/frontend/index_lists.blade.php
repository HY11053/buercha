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
                        @foreach($sontypes as $sontype)
                        <li><a href="/{{$sontype->real_path}}/">{{$sontype->typename}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="ullb2 bk">
                    <h2 class="bt6"><span>推荐阅读</span></h2>
                    <ul>
                        @foreach($newslists as $newslist)
                            <li><a href="/{{$newslist->arctype->real_path}}/{{$newslist->id}}.html">{{$newslist->title}}</a></li>
                        @endforeach
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
                    <h2 class="bt6"><span>热门关注</span></h2>
                    <ul>
                        @foreach($hotlists as $hotlist)
                        <li><a href="/{{$hotlist->arctype->real_path}}/{{$hotlist->id}}.html">{{$hotlist->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="w870">
                <div class="bt7"><h1>{{$thistypeinfo->typename}}</h1><div class="weizhi">当前位置：<a href="/">主页</a> &gt;  &gt; <a href="/{{$thistypeinfo->real_path}}/">{{$thistypeinfo->typename}}</a> &gt; </div></div>
                <div class="bg_2">
                    <div class="title1"><strong>{{$thistypeinfo->typename}}</strong></div>
                    <div class="introduction">
                        {!! $thistypeinfo->contents !!}
                     </div>
                </div>
            </div>
        </div>
    </div>
@stop
