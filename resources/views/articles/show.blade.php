@extends('layouts.app')

@section('title',$article->title)

@section('content')

    <article-view inline-template :initial-comments-count="0" :article-id="{{ $article->id }}">
        
        <div class="columns article-page">

            <div class="column is-9">
                <div class="card">

                    <div class="card-content">
                        <div class="content">

                            <div class="title is-3 main-title">
                                {{ $article->title }}
                                <div class="title-summary">
                                    分类:
                                    <a href="{{ $article->category->path() }}">
                                        {{ $article->category->name }}
                                    </a>
                                    ⋅
                                    <a href="{{ route('users.show',$article->user) }}" class="m-l-5">
                                        {{ $article->user->name }}
                                    </a>
                                    于
                                    {{ $article->created_at->diffForHumans()}}
                                    ⋅
                                    @if($article->lastComment)
                                        <span class="is-hidden-mobile">
                                            最后回复由
                                            <a href="{{ route('users.show',$article->lastComment->user) }}" class="m-l-5">
                                                {{ $article->lastComment->user->name }}
                                            </a>
                                            于
                                            {{ $article->lastComment->created_at->diffForHumans()}}
                                        </span>

                                    @endif
                                    ⋅
                                    {{ $article->views_count }}阅读
                                </div>
                            </div>


                            <div class="article">
                                <parse :content="{{ $article->body }}"></parse>
                            </div>
                        </div>

                        <br/>


                        @if( $article->is_original )
                            <div class="notification">
                                <label class="info-title">版权声明：</label><i class="fa fa-fw fa-creative-commons"></i>自由转载-非商用-非衍生-保持署名（<a href="https://creativecommons.org/licenses/by-nc-nd/3.0/deed.zh">创意共享3.0许可证</a>）
                            </div>
                        @endif



                        <div class="columns">

                            <div class="column">

                                <favorite-article
                                    :favorites_count="{{ $article->favorites_count }}"
                                    :is_favorited="{{ (int)$article->is_favorited }}"
                                    :article_id="{{$article->id}}"
                                >

                                </favorite-article>
                                

                            </div>
                            @if(count($article->tags) > 0)
                            <div class="column is-4">
                                <div style="display: flex;flex-direction: row-reverse;width: 100%;height: 100%">
                                    @foreach($article->tags as $tag)
                                    <span style="align-self: flex-end;margin: 5px" class="tag is-medium is-light">{{ $tag->name }}</span>
                                    @endforeach
                                </div>

                            </div>
                            @endif

                        </div>

                        <div class="columns">
                            <div class="column is-8 is-hidden-mobile">
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

                                <article-subscribe :initial-subscribed="{{ (int)$article->isSubscribed }}" :article-id = {{ $article->id }}></article-subscribe>

                            </div>
                        </div>

                    </div>



                </div>

                <comments></comments>

            </div>

            <div class="column is-3">
                <div id="sticker">
                    @include('articles.partials.user')
                </div>
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

            if (top > 300){
                $("#sticker").sticky({topSpacing:20});
            }else{

                $("#sticker").unstick();
            }

            console.log(top);

        });

    </script>

@endsection

