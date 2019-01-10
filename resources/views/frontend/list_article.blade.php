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
    <link href="/frontend/css/news.css" rel="stylesheet" type="text/css" />
@stop
@section('main_content')
    <div class="weizhi2">当前位置： <a href="http://www.ysg.cn/">主页</a> &gt; <a href="/zhinan/">加盟指南</a> &gt; </div>
    <div class="box">
        <div class="main_left">
            <div class="news_nav">
                <ul class="clearfix">
                    @foreach($articlenavs as $articlenav)
                    <li class=""><a href="/{{$articlenav->real_path}}/" title="{{$articlenav->typename}}">{{$articlenav->typename}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="news_list">
                <ul>
                    @foreach($pagelists as $pagelist)
                    <li>
                        <a href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.html" target="_blank"><img src="{{$pagelist->litpic}}" width="190" height="130" alt="{{$pagelist->title}}？"></a>
                        <strong><em>{{$pagelist->created_at}}</em><a href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.html">{{$pagelist->title}}</a></strong>
                        <p>{{$pagelist->description}}...<a href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.html">[详情&gt;&gt;]</a></p>
                        <span><b>标签</b></span>
                    </li>
                    @endforeach

                </ul>
                <div class="page">
                    <ol class="pagination-wrapper">
                        {!! $pagelists->links() !!}
                    </ol>
                </div>
            </div>
        </div>

        <div class="w320 fl" style="float: right; margin-top: 0px;">
            <div class="plr20-tb15 mb20 bg-ff box-shadow ">
                <div class="lh24">
                    <a target="_blank" href="/blist/all/" class="fr s-c999">更多</a>
                    <h3 class="f22">不二茶铺热门产品</h3>
                </div>
                <dl class="tu-list clearfix mt15" style="margin-top: 10px;">
                    <dd class="magnify magnify-txt  mr10 "><a target="_blank" href="/brand/1226/" class="img-block">
                            <img src="/public/images/upload/2015/04/30/72f4221c5ffd05f46f23763f3aabb327.jpg" alt=" 逗妮开心坚果">
                            <div class="img-bg"></div>
                            <p>逗妮开心坚果</p>
                        </a>
                    </dd>
                    <dd class="magnify magnify-txt "><a target="_blank" href="/brand/1216/" class="img-block">
                            <img src="/public/images/upload/2015/04/20/09e56be12e382e2c966a2ec1a7f91bec.png" alt=" 黄飞红麻辣花生">
                            <div class="img-bg"></div>
                            <p>黄飞红麻辣花生</p>
                        </a>
                    </dd>
                    <dd class="magnify magnify-txt  mr10 "><a target="_blank" href="/brand/1033/" class="img-block">
                            <img src="/public/images/upload/2015/02/26/a98b96142d8c3dc08baa666dcc88365c.jpg" alt=" 正大花生">
                            <div class="img-bg"></div>
                            <p>正大花生</p>
                        </a>
                    </dd>
                    <dd class="magnify magnify-txt "><a target="_blank" href="/brand/660/" class="img-block">
                            <img src="/public/images/upload/2014/12/29/ab19da0bf2b5882b81d05e23bbdd22b5.jpg" alt=" 新农哥">
                            <div class="img-bg"></div>
                            <p>新农哥</p>
                        </a>
                    </dd>
                    <div class="clear"></div>
                </dl>
            </div>
            <div class="bg-ff p20 mt20">
                <div class="lh24">
                    <a target="_blank" href="/bnlist/" class="fr s-c999">更多</a>
                    <h3 class="f22">不二茶铺加盟资讯</h3>
                </div>
                <ul class="tw-list tw-list-h84 mt15">
                    @foreach($newslists as $newslist)
                    <li><a target="_blank" href="/{{$newslist->arctype->real_path}}/{{$newslist->id}}.html" class="img-block magnify"><img src="{{$newslist->litpic}}" alt="{{$newslist->title}}"></a>
                        <p class="f16">
                            <a target="_blank" href="/{{$newslist->arctype->real_path}}/{{$newslist->id}}.html">{{$newslist->title}}</a>
                        </p>
                        <p class="f14 s-8c">{{$newslist->description}}</p>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@stop
