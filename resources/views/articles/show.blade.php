@extends('layouts.app')

@section('title',$article->title)

@section('content')

    <article-view inline-template :initial-comments-count="0" :article-id="{{ $article->id }}">
        
        <div class="columns article-page">

            <div class="column is-9">
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title article-title">
                            {{ $article->title }}
                        </p>

                    </header>
                    <div class="card-content">
                        <div class="content">
                            <div class="article">
                                <parse :content="{{ $article->body }}"></parse>
                            </div>
                        </div>



                        <div class="columns">
                            <div class="column is-8">
                                <div class="social-share-container">
                                    <div class="social-share" data-disabled="google" data-description="Share.js - 一键分享到微博，QQ空间，腾讯微博，人人，豆瓣"></div>
                                </div>
                            </div>

                            <div class="column is-4" style="line-height: 30px">


                                @can('update',$article)
                                <div class="is-pulled-right m-l-20">
                                    <b-tooltip label="编辑">
                                        <a class="popover-with-html" href="{{ route('articles.edit',$article) }}">
                                            <i class="fa fa-edit"></i> <span></span>
                                        </a>
                                    </b-tooltip>
                                </div>


                                <div class="is-pulled-right m-l-20">
                                    <b-tooltip label="删除">
                                        <a class="popover-with-html" @click="confirmDelete()">
                                            <i class="fa fa-trash"></i> <span></span>
                                        </a>
                                    </b-tooltip>
                                </div>
                                @endcan

                                <div class="is-pulled-right m-l-20">
                                    <b-tooltip label="订阅">
                                        <a class="popover-with-html">
                                            <i class="fa fa-eye"></i> <span></span>
                                        </a>
                                    </b-tooltip>
                                </div>


                            </div>
                        </div>

                    </div>



                </div>

                <comments></comments>

            </div>

            <div class="">
                <div class="card m-t-10">
                    <header class="card-header">
                        <p class="card-header-title">
                            关于作者
                        </p>
                        <a href="#" class="card-header-icon" aria-label="more options">
                            查看全部
                        </a>
                    </header>
                    <div class="card-content">
                        <div class="content">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec iaculis mauris.
                            <a href="#">@bulmaio</a>. <a href="#">#css</a> <a href="#">#responsive</a>
                            <br>
                            <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                        </div>
                    </div>
                </div>


            <!-- <div class="row"> -->

                <!-- <div class="col-md-9 article">

                    <div class="panel panel-default infos">

                        <div class="panel-heading">
                                    <span class="media">
                                        <div class="media-heading">
                                            <h1>{{ $article->title }}</h1>
                                        </div>
                                        <div class="media-body">
                                            <div class="flex">
                                                <span class="level meta">
                                                    <a class="user-name" href="{{ route('users.show',$article->user) }}">
                                                        {{ $article->user->name }}
                                                    </a>
                                                    发表于
                                                    <span class="published_time" data-toggle="tooltip" data-placement="top" title="{{ $article->created_at }}">
                                                        {{ $article->created_at->diffForHumans() }}
                                                    </span>

                                                    浏览量:<span>{{ $article->views_count }}次</span>

                                                    @can('update',$article)
                                                        <a class="edit-article" href="{{ route('articles.edit',$article) }}"><i class="ion-edit" data-toggle="tooltip" data-placement="top" title="编辑文章"></i></a>
                                                    @endcan

                                                    @can('update',$article)
                                                        <form action="{{ route('articles.destroy',$article) }}" method="post">
                                                            {{ csrf_field() }}
                                                            {{ method_field("DELETE") }}
                                                            <button class="delete-article" data-toggle="tooltip" data-placement="top" title="删除文章"><i class="ion-trash-a"></i></button>
                                                        </form>
                                                    @endcan
                                                </span>

                                            </div>

                                        </div>
                                    </span>

                        </div>

                        <div class="panel-body">
                            <div class="article">
                                <parse :content="{{ $article->body }}"></parse>
                            </div>


                            @if($article->is_original)
                                <hr>
                                <div class="publishing alert alert-dismissible alert-info alert-important">

                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    由 <a href="{{ route('users.show',$article->user) }}">{{ $article->user->name }}</a> 创作，采用 <a href="http://creativecommons.org/licenses/by-nc/4.0/">知识共享 署名-非商业性使用 4.0 国际</a> 许可协议进行许可。
                                    <br>基于 <a href="{{ url('/') }}">{{ url('/') }}</a>上的作品创作。
                                </div>
                            @endif

                        </div>
                    </div>
                    



                </div>

                <div class="col-md-3">

                    <div id="sticker">
                        @include('articles.partials.user')
                    </div>

                    @include('layouts.partials.category')

                </div> -->


            <!-- </div> -->



            </div>
        </div>
        
    </article-view>



@endsection

@section('scripts')

    <script type="text/javascript">


        $(window).scroll(function (event) {

            if ($(window).width() <= 991) {
                $("#sticker").unstick();
                return;
            }
            var top = $(window).scrollTop();

            if (top > 600){
                $("#sticker").sticky({topSpacing:60});
            }else{

                $("#sticker").unstick();
            }

            console.log(top);

        });

    </script>

@endsection