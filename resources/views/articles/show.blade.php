@extends('layouts.app')

@section('content')

    <article-view inline-template :initial-comments-count="0">
        <div class="row">

            <div class="col-md-9 article">

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
                <comments></comments>



            </div>

            <div class="col-md-3 hidden-sm hidden-xs">
                <div class="warpper">
                    @include('articles.partials.user')

                </div>

                @include('layouts.partials.category')
            </div>


        </div>
    </article-view>



@endsection

@section('scripts')

    <script type="text/javascript">

    </script>

@endsection